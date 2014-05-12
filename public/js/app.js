
var ractive,data,datas;

$.ajax({
  type:"get",
  url:"/api/comments",
  dataType: "json",
  async: false,
  success:function(data){
    datas = data;
  }
});
ractive = new Ractive({
  el: 'container',
  template: '#comment-template',
  noIntro: true, 
  data: {
    comments: datas
  }
});

ractive.on( 'post', function ( event ) {
  var comment;

  // 阻止页面重新加载
  event.original.preventDefault();

  // 获取输入的数据
  comment = {
    author: this.get( 'author' ),
    text: this.get( 'text' )
  };

  this.get( 'comments' ).push( comment );

  // 重置
  document.activeElement.blur();
  this.set({ author: '', text: '' });

  // 发送数据到服务端，存入数据库
  this.fire( 'new comment', comment );

  $.post( '/api/comments', comment);
});
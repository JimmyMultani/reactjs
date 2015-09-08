<!DOCTYPE html>
<html>
<head>
    <style>
        .board {
            margin: 20px 0;
            overflow: hidden;
        }
            .post {
                border: 5px solid #ccc;
                float: left;
                font: 700 24px HelveticaNeue, Helvetica, Arial;
                margin-right: 20px;
                padding: 20px;
            }
                .post.selected {
                    border-color: #3BA8AA;
                }
    </style>
    <script src="https://fb.me/react-0.13.3.min.js"></script>
    <script src="https://fb.me/JSXTransformer-0.13.3.js"></script>
    <script type="text/jsx">
    var Board = React.createClass({
        render: function() {
            var posts = [];
            for (var ii = 0; ii < this.props.numOfPosts; ii++) {
                posts.push(
                    <Post index={ii} key={ii} />
                );
            }
            return (
                <div className="board">
                    {posts}
                </div>
            )
        }
    });

    var Post = React.createClass({
        render: function() {
            return (
                <div className="post">{this.props.index}</div>
            )
        }
    });

    React.render(
        <Board numOfPosts={5} />,
        document.body
    );
    </script>
</head>
<body>
    <div id="react-container"></div>
</body>
</html>

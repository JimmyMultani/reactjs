<!DOCTYPE html>
<html>
<head>
    <style>
        .boards {
            margin: 20px 0;
            overflow: hidden;
        }
            .board {
                border: 5px solid #ccc;
                float: left;
                font: 700 24px HelveticaNeue, Helvetica, Arial;
                margin-right: 20px;
                padding: 20px;
            }
                .board.selected {
                    border-color: #3BA8AA;
                }
    </style>
    <script src="https://fb.me/react-0.13.3.min.js"></script>
    <script src="https://fb.me/JSXTransformer-0.13.3.js"></script>
    <script type="text/jsx">
    var Board = React.createClass({
        render: function() {
            var className = "board";
            if (this.props.selected) {
                className += " selected";
            }
            return (
                <div className={className}>{this.props.index + 1}</div>
            );
        }
    });

    var BoardSwitcher = React.createClass({
        getInitialState: function() {
            return {
                selectedIndex: 0
            }
        },
        onClick: function() {
            this.setState({
                selectedIndex: (this.state.selectedIndex + 1) % this.props.numBoards
            })
        },
        render: function() {
            var boards = [];
            for (var ii = 0; ii < this.props.numBoards; ii++) {
                var isSelected = ii === this.state.selectedIndex;
                boards.push(
                    <Board index={ii} selected={isSelected} key={ii} />
                );
            }

            return (
                <div>
                    <div className="boards">{boards}</div>
                    <button onClick={this.onClick}>Toggle</button>
                </div>
            );
        }
    });

    React.render(
        <BoardSwitcher numBoards={3} />,
        document.body
    );
    </script>
</head>
<body>
    <div id="react-container"></div>
</body>
</html>

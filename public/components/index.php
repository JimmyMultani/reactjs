<!DOCTYPE html>
<html>
<head>
    <script src="https://fb.me/react-0.13.3.min.js"></script>
    <script src="https://fb.me/JSXTransformer-0.13.3.js"></script>
    <script type="text/jsx">
        var VacancySign = React.createClass({
            render: function() {
                return (
                    <div>{this.props.message}</div>
                )
            }
        });

        React.render(
            <VacancySign message="No Vacancy" />,
            document.getElementById('react-container')
        );
    </script>
</head>
<body>
    <div id="react-container"></div>
</body>
</html>

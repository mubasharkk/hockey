import React from 'react';
import axios from 'axios';

class RegionsTable extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            listItems: []
        };
    }

    componentWillMount() {
        axios
            .get('/api/regions')
            .then((response) => {
                    this.setState({
                        listItems: response.data
                    })
                }
            );
    }

    regionList(list) {
        return list.map((item) => {
            return (
                <tr key={item.id}>
                    <td>{item.id}</td>
                    <td><a href={'#/clubs/' + item.id + '/' + item.name}>{item.name}</a></td>
                </tr>
            )
        });
    }

    render() {
        return (
            <table className="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                {this.regionList(this.state.listItems)}
                </tbody>
            </table>
        );
    }
}

export default RegionsTable;
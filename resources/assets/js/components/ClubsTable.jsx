import React from 'react';
import axios from 'axios';

class ClubsTable extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            listItems: [],
            regionId: props.match.params.region,
            regionName: props.match.params.name,
        };
    }
    componentWillMount() {
        axios
            .get('/api/clubs/' + this.state.regionId)
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
                <div key={item.id} className={'grid-item panel panel-primary text-center'}>
                    <div className={'panel-body'}>
                        <div>
                            <img src={item.logo_url}/>
                        </div>
                        <h4>{item.name}</h4>
                        <div className={''}>
                            {item.postal_code}, {item.city}
                            <br/>
                            <br/>
                            {item.email ? this.iconLink('mailto:' + item.email, '', 'fa-envelope') : ''}
                            &nbsp;&nbsp;
                            {item.website ? this.iconLink(item.website, '', 'fa-globe') : ''}
                            &nbsp;&nbsp;
                            {item.url ? this.iconLink(item.url, '', 'fa-info') : ''}
                        </div>
                    </div>
                </div>
            )
        });
    }
    iconLink(link, text, icon) {
        return (
            <a href={link} className={'btn btn-default'} target={'_blank'}>
                <i className={'fa fa-fw ' + icon}></i> {text}
            </a>
        );
    }
    componentDidMount() {
        setTimeout(function() {
            $('.grid').masonry({
                // set itemSelector so .grid-sizer is not used in layout
                itemSelector: '.grid-item',
                gutter: 5,
                fitWidth: true
            });
        }, 500)
    }
    render() {
        return (
            <div>
                <h1 className={'text-center'}>{this.state.regionName}</h1>
                <hr/>
                <div>
                    <a href={'#/'} className={'btn btn-default btn-sm'}>
                        <i className={'fa fa-fw fa-arrow-left'}></i> Back to Regions
                    </a>
                </div>
                <hr/>
                <div className={'grid'}>
                    {this.regionList(this.state.listItems)}
                </div>
            </div>
        );
    }
}

export default ClubsTable;
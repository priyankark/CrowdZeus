$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            Project1: 2666,
            Project2: null,
            Project3: 2647
        }, {
            period: '2010 Q2',
            Project1: 2778,
            Project2: 2294,
            Project3: 2441
        }, {
            period: '2010 Q3',
            Project1: 4912,
            Project2: 1969,
            Project3: 2501
        }, {
            period: '2010 Q4',
            Project1: 3767,
            Project2: 3597,
            Project3: 5689
        }, {
            period: '2011 Q1',
            Project1: 6810,
            Project2: 1914,
            Project3: 2293
        }, {
            period: '2011 Q2',
            Project1: 5670,
            Project2: 4293,
            Project3: 1881
        }, {
            period: '2011 Q3',
            Project1: 4820,
            Project2: 3795,
            Project3: 1588
        }, {
            period: '2011 Q4',
            Project1: 15073,
            Project2: 5967,
            Project3: 5175
        }, {
            period: '2012 Q1',
            Project1: 10687,
            Project2: 4460,
            Project3: 2028
        }, {
            period: '2012 Q2',
            Project1: 8432,
            Project2: 5713,
            Project3: 1791
        }],
        xkey: 'period',
        ykeys: ['Project1', 'Project2', 'Project3'],
        labels: ['Project1', 'Project2', 'Project3'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });
    
});

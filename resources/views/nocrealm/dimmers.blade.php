@php

$widgetClasses = config('nocrealm.dashboard.widgets');

$dimmers = Widget::group('voyager::dimmers');

foreach ($widgetClasses as $widgetClass) {
    $widget = app($widgetClass);

    if ($widget->shouldBeDisplayed()) {
        $dimmers->addWidget($widgetClass);
    }
}

$count = $dimmers->count();
$classes = [
    'col-xs-12',
    'col-sm-'.($count >= 2 ? '6' : '12'),
    'col-md-'.($count >= 3 ? '4' : ($count >= 2 ? '6' : '12')),
];
$class = implode(' ', $classes);
$prefix = "<div class='{$class}'>";
$surfix = '</div>';
@endphp
@if ($dimmers->any())
<div class="clearfix container-fluid row">
    {!! $prefix.$dimmers->setSeparator($surfix.$prefix)->display().$surfix !!}
</div>
@endif

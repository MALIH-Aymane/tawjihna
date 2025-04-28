@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
$configData = Helper::appClasses();
@endphp

@isset($configData["layout"])
@include((( $configData["layout"] === 'horizontal') ? 'dashboard/layouts.horizontalLayout' :
(( $configData["layout"] === 'blank') ? 'dashboard/layouts.blankLayout' :
(($configData["layout"] === 'front') ? 'dashboard/layouts.layoutFront' : 'dashboard/layouts.contentNavbarLayout') )))
@endisset

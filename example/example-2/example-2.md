Example of what data container callback can be replaced with what event:
========================================================================
This [example][example-2] shows how to replace the callbacks in the data container with which event.


Callback in the config area:
----------------------------
| Callback | Event |
| -------- | ----- |
| onload_callback | dc-general.factory.create-dc-general  |
| onsubmit_callback | dc-general.model.post-persist  |
| ondelete_callback | dc-general.model.post-delete  |
| oncut_callback | dc-general.model.post-paste  |
| oncopy_callback | dc-general.model.post-duplicate  |

Callback in the list/sorting area:
----------------------------
| Callback | Event |
| -------- | ----- |
| header_callback | dc-general.view.contao2backend.get-parent-header  |
| paste_button_callback | dc-general.view.contao2backend.get-paste-root-button  |
| paste_button_callback | dc-general.view.contao2backend.get-paste-button  |
| child_record_callback | dc-general.view.contao2backend.parent-view-child-record  |

Callback in the list/label area:
----------------------------
| Callback | Event |
| -------- | ----- |
| group_callback | dc-general.view.contao2backend.get-group-header  |
| label_callback | dc-general.view.contao2backend.model-to-label  |

Callback in the list/global_operations area:
----------------------------
| Callback | Event |
| -------- | ----- |
| button_callback | dc-general.view.contao2backend.get-global-button  |

Callback in the list/operations area:
----------------------------
| Callback | Event |
| -------- | ----- |
| button_callback | dc-general.view.contao2backend.get-global-button  |

Callback in the fields area:
----------------------------
| Callback | Event |
| -------- | ----- |
| load_callback | dc-general.view.contao2backend.decode-property-value-for-widget  |
| save_callback | dc-general.view.contao2backend.encode-property-value-from-widget  |
| options_callback | dc-general.view.contao2backend.get-property-options  |
| input_field_callback | dc-general.view.contao2backend.build-widget  |
| wizard | dc-general.view.contao2backend.manipulate-widget  |


TODO add examples for the events.






[example-2]: https://github.com/contao-community-alliance/dc-general-example/blob/master/example/example-1/example-2.md

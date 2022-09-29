
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["equipo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["modules" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["drdl" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["interface" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cpu" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["memory" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["bw" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["disk" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["storage" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["backup" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["alertas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["observaciones" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["user_mon" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fecha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["equipo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["equipo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["modules" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["modules" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["drdl" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["drdl" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["interface" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["interface" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cpu" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cpu" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["memory" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["memory" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bw" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bw" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["disk" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["disk" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["storage" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["storage" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["backup" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["backup" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["alertas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["alertas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["observaciones" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["observaciones" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["user_mon" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["user_mon" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_fecha' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_fecha_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_monitor_dpi_pdf_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_cliente' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_id_cliente_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_monitor_dpi_pdf_id_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_equipo' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_equipo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_monitor_dpi_pdf_equipo_onfocus(this, iSeqRow) });
  $('#id_sc_field_modules' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_modules_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_monitor_dpi_pdf_modules_onfocus(this, iSeqRow) });
  $('#id_sc_field_drdl' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_drdl_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_monitor_dpi_pdf_drdl_onfocus(this, iSeqRow) });
  $('#id_sc_field_interface' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_interface_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_monitor_dpi_pdf_interface_onfocus(this, iSeqRow) });
  $('#id_sc_field_cpu' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_cpu_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_monitor_dpi_pdf_cpu_onfocus(this, iSeqRow) });
  $('#id_sc_field_memory' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_memory_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_monitor_dpi_pdf_memory_onfocus(this, iSeqRow) });
  $('#id_sc_field_bw' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_bw_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_form_monitor_dpi_pdf_bw_onfocus(this, iSeqRow) });
  $('#id_sc_field_disk' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_disk_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_monitor_dpi_pdf_disk_onfocus(this, iSeqRow) });
  $('#id_sc_field_storage' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_storage_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_monitor_dpi_pdf_storage_onfocus(this, iSeqRow) });
  $('#id_sc_field_backup' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_backup_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_monitor_dpi_pdf_backup_onfocus(this, iSeqRow) });
  $('#id_sc_field_alertas' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_alertas_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_monitor_dpi_pdf_alertas_onfocus(this, iSeqRow) });
  $('#id_sc_field_observaciones' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_observaciones_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_monitor_dpi_pdf_observaciones_onfocus(this, iSeqRow) });
  $('#id_sc_field_user_mon' + iSeqRow).bind('blur', function() { sc_form_monitor_dpi_pdf_user_mon_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_monitor_dpi_pdf_user_mon_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_monitor_dpi_pdf_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_fecha();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_id_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_id_cliente();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_id_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_equipo_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_equipo();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_equipo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_modules_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_modules();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_modules_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_drdl_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_drdl();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_drdl_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_interface_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_interface();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_interface_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_cpu_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_cpu();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_cpu_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_memory_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_memory();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_memory_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_bw_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_bw();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_bw_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_disk_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_disk();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_disk_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_storage_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_storage();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_storage_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_backup_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_backup();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_backup_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_alertas_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_alertas();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_alertas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_observaciones_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_observaciones();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_observaciones_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_monitor_dpi_pdf_user_mon_onblur(oThis, iSeqRow) {
  do_ajax_form_monitor_dpi_pdf_mob_validate_user_mon();
  scCssBlur(oThis);
}

function sc_form_monitor_dpi_pdf_user_mon_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("fecha", "", status);
	displayChange_field("id_cliente", "", status);
	displayChange_field("equipo", "", status);
	displayChange_field("modules", "", status);
	displayChange_field("drdl", "", status);
	displayChange_field("interface", "", status);
	displayChange_field("cpu", "", status);
	displayChange_field("memory", "", status);
	displayChange_field("bw", "", status);
	displayChange_field("disk", "", status);
	displayChange_field("storage", "", status);
	displayChange_field("backup", "", status);
	displayChange_field("alertas", "", status);
	displayChange_field("observaciones", "", status);
	displayChange_field("user_mon", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_fecha(row, status);
	displayChange_field_id_cliente(row, status);
	displayChange_field_equipo(row, status);
	displayChange_field_modules(row, status);
	displayChange_field_drdl(row, status);
	displayChange_field_interface(row, status);
	displayChange_field_cpu(row, status);
	displayChange_field_memory(row, status);
	displayChange_field_bw(row, status);
	displayChange_field_disk(row, status);
	displayChange_field_storage(row, status);
	displayChange_field_backup(row, status);
	displayChange_field_alertas(row, status);
	displayChange_field_observaciones(row, status);
	displayChange_field_user_mon(row, status);
}

function displayChange_field(field, row, status) {
	if ("fecha" == field) {
		displayChange_field_fecha(row, status);
	}
	if ("id_cliente" == field) {
		displayChange_field_id_cliente(row, status);
	}
	if ("equipo" == field) {
		displayChange_field_equipo(row, status);
	}
	if ("modules" == field) {
		displayChange_field_modules(row, status);
	}
	if ("drdl" == field) {
		displayChange_field_drdl(row, status);
	}
	if ("interface" == field) {
		displayChange_field_interface(row, status);
	}
	if ("cpu" == field) {
		displayChange_field_cpu(row, status);
	}
	if ("memory" == field) {
		displayChange_field_memory(row, status);
	}
	if ("bw" == field) {
		displayChange_field_bw(row, status);
	}
	if ("disk" == field) {
		displayChange_field_disk(row, status);
	}
	if ("storage" == field) {
		displayChange_field_storage(row, status);
	}
	if ("backup" == field) {
		displayChange_field_backup(row, status);
	}
	if ("alertas" == field) {
		displayChange_field_alertas(row, status);
	}
	if ("observaciones" == field) {
		displayChange_field_observaciones(row, status);
	}
	if ("user_mon" == field) {
		displayChange_field_user_mon(row, status);
	}
}

function displayChange_field_fecha(row, status) {
    var fieldId;
}

function displayChange_field_id_cliente(row, status) {
    var fieldId;
}

function displayChange_field_equipo(row, status) {
    var fieldId;
}

function displayChange_field_modules(row, status) {
    var fieldId;
}

function displayChange_field_drdl(row, status) {
    var fieldId;
}

function displayChange_field_interface(row, status) {
    var fieldId;
}

function displayChange_field_cpu(row, status) {
    var fieldId;
}

function displayChange_field_memory(row, status) {
    var fieldId;
}

function displayChange_field_bw(row, status) {
    var fieldId;
}

function displayChange_field_disk(row, status) {
    var fieldId;
}

function displayChange_field_storage(row, status) {
    var fieldId;
}

function displayChange_field_backup(row, status) {
    var fieldId;
}

function displayChange_field_alertas(row, status) {
    var fieldId;
}

function displayChange_field_observaciones(row, status) {
    var fieldId;
}

function displayChange_field_user_mon(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_monitor_dpi_pdf_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(32);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fecha" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_monitor_dpi_pdf_mob_validate_fecha(iSeqRow); }, 200);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

var api_cache_requests = [];
function ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, hasRun, img_before){
    setTimeout(function(){
        if(img_name == '') return;
        iSeqRow= iSeqRow !== undefined && iSeqRow !== null ? iSeqRow : '';
        var hasVar = p.indexOf('_@NM@_') > -1 || p_cache.indexOf('_@NM@_') > -1 ? true : false;

        p = p.split('_@NM@_');
        $.each(p, function(i,v){
            try{
                p[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p[i] = v;
            }
        });
        p = p.join('');

        p_cache = p_cache.split('_@NM@_');
        $.each(p_cache, function(i,v){
            try{
                p_cache[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p_cache[i] = v;
            }
        });
        p_cache = p_cache.join('');

        img_before = img_before !== undefined ? img_before : $(t).attr('src');
        var str_key_cache = '<?php echo $this->Ini->sc_page; ?>' + img_name+field+p+p_cache;
        if(api_cache_requests[ str_key_cache ] !== undefined && api_cache_requests[ str_key_cache ] !== null){
            if(api_cache_requests[ str_key_cache ] != false){
                do_ajax_check_file(api_cache_requests[ str_key_cache ], field  ,t, iSeqRow);
            }
            return;
        }
        //scAjaxProcOn();
        $(t).attr('src', '<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif');
        api_cache_requests[ str_key_cache ] = false;
        var rs =$.ajax({
                    type: "POST",
                    url: 'index.php?script_case_init=<?php echo $this->Ini->sc_page; ?>',
                    async: true,
                    data:'nmgp_opcao=ajax_check_file&AjaxCheckImg=' + encodeURI(img_name) +'&rsargs='+ field + '&p=' + p + '&p_cache=' + p_cache,
                    success: function (rs) {
                        if(rs.indexOf('</span>') != -1){
                            rs = rs.substr(rs.indexOf('</span>') + 7);
                        }
                        if(rs.indexOf('/') != -1 && rs.indexOf('/') != 0){
                            rs = rs.substr(rs.indexOf('/'));
                        }
                        rs = sc_trim(rs);

                        // if(rs == 0 && hasVar && hasRun === undefined){
                        //     delete window.api_cache_requests[ str_key_cache ];
                        //     ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, 1, img_before);
                        //     return;
                        // }
                        window.api_cache_requests[ str_key_cache ] = rs;
                        do_ajax_check_file(rs, field  ,t, iSeqRow)
                        if(rs == 0){
                            delete window.api_cache_requests[ str_key_cache ];

                           // $(t).attr('src',img_before);
                            do_ajax_check_file(img_before+'_@@NM@@_' + img_before, field  ,t, iSeqRow)

                        }


                    }
        });
    },100);
}

function do_ajax_check_file(rs, field  ,t, iSeqRow){
    if (rs != 0) {
        rs_split = rs.split('_@@NM@@_');
        rs_orig = rs_split[0];
        rs2 = rs_split[1];
        try{
            if(!$(t).is('img')){

                if($('#id_read_on_'+field+iSeqRow).length > 0 ){
                                    var usa_read_only = false;

                switch(field){

                }
                     if(usa_read_only && $('a',$('#id_read_on_'+field+iSeqRow)).length == 0){
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_monitor_dpi_pdf_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
                     }
                }
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href', target.join(','));
                }else{
                    var target = $(t).attr('href').split(',');
                     target[1] = "'"+rs2+"'";
                     $(t).attr('href', target.join(','));
                }
            }else{
                $(t).attr('src', rs2);
                $(t).css('display', '');
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $(t).attr('href', target.join(','));
                }else{
                     var t_link = $(t).parent('a');
                     var target = $(t_link).attr('href').split(',');
                     target[0] = "javascript:nm_mostra_img('"+rs_orig+"'";
                     $(t_link).attr('href', target.join(','));
                }

            }
            eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        } catch(err){
                        eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        }
    }
   /* hasFalseCacheRequest = false;
    $.each(api_cache_requests, function(i,v){
        if(v == false){
            hasFalseCacheRequest = true;
        }
    });
    if(hasFalseCacheRequest == false){
        scAjaxProcOff();
    }*/
}

$(document).ready(function(){
});

function scJQSelect2Add(seqRow, specificField) {
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
} // scJQElementsAdd

function scGetFileExtension(fileName)
{
    fileNameParts = fileName.split(".");

    if (1 === fileNameParts.length || (2 === fileNameParts.length && "" == fileNameParts[0])) {
        return "";
    }

    return fileNameParts.pop().toLowerCase();
}

function scFormatExtensionSizeErrorMsg(errorMsg)
{
    var msgInfo = errorMsg.split("||"), returnMsg = "";

    if ("err_size" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_size'] ?>. <?php echo $this->Ini->Nm_lang['lang_errm_file_size_extension'] ?>".replace("{SC_EXTENSION}", msgInfo[1]).replace("{SC_LIMIT}", msgInfo[2]);
    } else if ("err_extension" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl'] ?>";
    }

    return returnMsg;
}


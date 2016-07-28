<?
$subject_val = "[OMPI devel] orte-dvm and orte_max_vm_size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 08:08:28 2015" -->
<!-- isoreceived="20150903120828" -->
<!-- sent="Thu, 3 Sep 2015 14:08:23 +0200" -->
<!-- isosent="20150903120823" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="[OMPI devel] orte-dvm and orte_max_vm_size" -->
<!-- id="E51CDE7F-4B36-4271-AA91-EF2CD38E072F_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] orte-dvm and orte_max_vm_size<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 08:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17929.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17934.php">Ralph Castain: "Re: [OMPI devel] orte-dvm and orte_max_vm_size"</a>
<li><strong>Reply:</strong> <a href="17934.php">Ralph Castain: "Re: [OMPI devel] orte-dvm and orte_max_vm_size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've been running into some funny issue with using orte-dvm (Hi Ralph ;-) and trying to define the size of the created vm and for that I use &quot;--mca orte_max_vm_size&quot; which in general seems to work.
<br>
<p>In this example I have a PBS job of 4 nodes and want to run the DVM on &lt; 4 nodes.
<br>
If I create the VM with size 3 or 4 (max_vm_size 1 and 0 respectively) everything works as expected.
<br>
However, when I create a VM of size 1 or 2 (max_vm_size 3 and 2 respectively) I get the stack trace below once I use orte-submit to start something within the VM.
<br>
<p>[nid01280:02498] [[39239,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_SPAWN_JOB_CMD
<br>
orte-dvm: ../../../../../src/ompi/opal/class/opal_list.h:547: _opal_list_append: Assertion `0 == item-&gt;opal_list_item_refcount' failed.
<br>
[nid01280:02498] *** Process received signal ***
<br>
[nid01280:02498] Signal: Aborted (6)
<br>
[nid01280:02498] Signal code:  (-6)
<br>
[nid01280:02498] [ 0] /lib64/libpthread.so.0(+0xf810)[0x2ba3e274a810]
<br>
[nid01280:02498] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x2ba3e298b885]
<br>
[nid01280:02498] [ 2] /lib64/libc.so.6(abort+0x181)[0x2ba3e298ce61]
<br>
[nid01280:02498] [ 3] /lib64/libc.so.6(__assert_fail+0xf0)[0x2ba3e2984740]
<br>
[nid01280:02498] [ 4] /global/homes/m/marksant/openmpi/edison/installed/HEAD/lib/libopen-rte.so.0(+0x83f16)[0x2ba3e1687f16]
<br>
[nid01280:02498] [ 5] /global/homes/m/marksant/openmpi/edison/installed/HEAD/lib/libopen-rte.so.0(orte_plm_base_setup_virtual_machine+0x473)[0x2ba3e16907fe]
<br>
[nid01280:02498] [ 6] /global/homes/m/marksant/openmpi/edison/installed/HEAD/lib/openmpi/mca_plm_alps.so(+0x274d)[0x2ba3e666574d]
<br>
[nid01280:02498] [ 7] /global/homes/m/marksant/openmpi/edison/installed/HEAD/lib/libopen-pal.so.0(opal_libevent2022_event_base_loop+0xd81)[0x2ba3e198cee1]
<br>
[nid01280:02498] [ 8] /global/homes/m/marksant/openmpi/edison/installed/HEAD/bin/orte-dvm[0x402e20]
<br>
[nid01280:02498] [ 9] /lib64/libc.so.6(__libc_start_main+0xe6)[0x2ba3e2977c36]
<br>
[nid01280:02498] [10] /global/homes/m/marksant/openmpi/edison/installed/HEAD/bin/orte-dvm[0x401d19]
<br>
[nid01280:02498] *** End of error message ***
<br>
[nid05888:25419] [[39239,0],1]:../../../../../../src/ompi/orte/mca/errmgr/default_orted/errmgr_default_orted.c(251) updating exit status to 1
<br>
<p><p>Some questions:
<br>
- Am I understanding the purpose of orte_max_vm_size correctly?
<br>
- If so, then it seems some refcounting if off. Not sure where to start looking though ...
<br>
- I would rather have a bit more flexible way of specifying the size of the VM, but currently the orte-dvm command line parameters are limited. Would it be a matter of copying over some of the &quot;-host&quot; parameter stuff from orte-run or is it more involved?
<br>
- Can I configure the -host, -np, etc parameters also via MCA settings?
<br>
- Whats the magic combination of parameters to get all information about of ompi_info? As I can't find a way to even &quot;find&quot; the orte_max_vm_size parameter out of it, while I know it exists.
<br>
<p>Thanks!
<br>
<p>Mark<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17929.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17934.php">Ralph Castain: "Re: [OMPI devel] orte-dvm and orte_max_vm_size"</a>
<li><strong>Reply:</strong> <a href="17934.php">Ralph Castain: "Re: [OMPI devel] orte-dvm and orte_max_vm_size"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>

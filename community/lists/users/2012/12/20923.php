<?
$subject_val = "[OMPI users] Serveral issue in mpirun on macosx 10.8.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 07:11:34 2012" -->
<!-- isoreceived="20121212121134" -->
<!-- sent="Wed, 12 Dec 2012 13:11:30 +0100" -->
<!-- isosent="20121212121130" -->
<!-- name="Extreme Programming" -->
<!-- email="dmasondev_at_[hidden]" -->
<!-- subject="[OMPI users] Serveral issue in mpirun on macosx 10.8.2" -->
<!-- id="CAJn1Notk9-ZFkCOw78mOK1dJQHELb-6qAqtfos=F50gW60Q1gg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Serveral issue in mpirun on macosx 10.8.2<br>
<strong>From:</strong> Extreme Programming (<em>dmasondev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 07:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20924.php">Damien Hocking: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20922.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20925.php">Ralph Castain: "Re: [OMPI users] Serveral issue in mpirun on macosx 10.8.2"</a>
<li><strong>Reply:</strong> <a href="20925.php">Ralph Castain: "Re: [OMPI users] Serveral issue in mpirun on macosx 10.8.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I have just installed openmpi 1.7 on my macosx 10.8.2 because i need
<br>
java bining.
<br>
Installation works fine, compilation too but when i executed the &quot;mpirun -n
<br>
4 myfile&quot; i get this error:
<br>
<p>MacBook-Pro:Desktop rainmaker$ mpirun -n 4 a.out
<br>
[MacBook-Pro.local:18481] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_ess_slurmd:
<br>
dlopen(/usr/local/lib/openmpi/mca_ess_slurmd.so, 9): Symbol not found:
<br>
_orte_jmap_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_ess_slurmd.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_ess_slurmd.so (ignored)
<br>
[MacBook-Pro.local:18481] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_errmgr_default:
<br>
dlopen(/usr/local/lib/openmpi/mca_errmgr_default.so, 9): Symbol not found:
<br>
_orte_errmgr_base_error_abort
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_errmgr_default.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_errmgr_default.so (ignored)
<br>
[MacBook-Pro.local:18481] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_routed_cm:
<br>
dlopen(/usr/local/lib/openmpi/mca_routed_cm.so, 9): Symbol not found:
<br>
_orte_message_event_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_routed_cm.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_routed_cm.so (ignored)
<br>
[MacBook-Pro.local:18481] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_routed_linear:
<br>
dlopen(/usr/local/lib/openmpi/mca_routed_linear.so, 9): Symbol not found:
<br>
_orte_message_event_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_routed_linear.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_routed_linear.so (ignored)
<br>
[MacBook-Pro.local:18481] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_grpcomm_basic:
<br>
dlopen(/usr/local/lib/openmpi/mca_grpcomm_basic.so, 9): Symbol not found:
<br>
_opal_profile
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_grpcomm_basic.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_grpcomm_basic.so (ignored)
<br>
[MacBook-Pro.local:18481] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_grpcomm_hier:
<br>
dlopen(/usr/local/lib/openmpi/mca_grpcomm_hier.so, 9): Symbol not found:
<br>
_orte_daemon_cmd_processor
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_grpcomm_hier.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_grpcomm_hier.so (ignored)
<br>
[MacBook-Pro:18481] *** Process received signal ***
<br>
[MacBook-Pro:18481] Signal: Segmentation fault: 11 (11)
<br>
[MacBook-Pro:18481] Signal code: Address not mapped (1)
<br>
[MacBook-Pro:18481] Failing at address: 0x14
<br>
[MacBook-Pro:18481] [ 0] 2   libsystem_c.dylib
<br>
0x00007fff820308ea _sigtramp + 26
<br>
[MacBook-Pro:18481] [ 1] 3   ???
<br>
0x00007fff59070458 0x0 + 140734687020120
<br>
[MacBook-Pro:18481] [ 2] 4   libopen-rte.5.dylib
<br>
0x0000000106bd7658 orte_rmaps_base_map_job + 984
<br>
[MacBook-Pro:18481] [ 3] 5   libopen-rte.5.dylib
<br>
0x0000000106c1a0a0 opal_libevent2019_event_base_loop + 1888
<br>
[MacBook-Pro:18481] [ 4] 6   mpirun
<br>
&nbsp;0x0000000106b916e1 orterun + 5137
<br>
[MacBook-Pro:18481] [ 5] 7   mpirun
<br>
&nbsp;0x0000000106b90290 main + 32
<br>
[MacBook-Pro:18481] [ 6] 8   libdyld.dylib
<br>
0x00007fff8ac597e1 start + 0
<br>
[MacBook-Pro:18481] [ 7] 9   ???
<br>
0x0000000000000004 0x0 + 4
<br>
[MacBook-Pro:18481] *** End of error message ***
<br>
Segmentation fault: 11
<br>
<p><p>for resolving it, i have exported the LD_LIBRARY_PATH = /usr/local/bin and
<br>
I used the same configuration of my last openmpi's installation.
<br>
Please help me to solve this issue.
<br>
<p>Thank you very much.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20924.php">Damien Hocking: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20922.php">Ilias Miroslav: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20925.php">Ralph Castain: "Re: [OMPI users] Serveral issue in mpirun on macosx 10.8.2"</a>
<li><strong>Reply:</strong> <a href="20925.php">Ralph Castain: "Re: [OMPI users] Serveral issue in mpirun on macosx 10.8.2"</a>
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

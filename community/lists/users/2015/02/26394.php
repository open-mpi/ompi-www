<?
$subject_val = "[OMPI users] openmpi-1.8.4 on OSX, mpirun execution error.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 07:52:44 2015" -->
<!-- isoreceived="20150225125244" -->
<!-- sent="Wed, 25 Feb 2015 13:52:39 +0100" -->
<!-- isosent="20150225125239" -->
<!-- name="Javier Mas Sol&#233;" -->
<!-- email="javier.mas.sole_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.8.4 on OSX, mpirun execution error." -->
<!-- id="F89860B5-476F-4EF0-AF18-4DAE57C87E93_at_gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error.<br>
<strong>From:</strong> Javier Mas Sol&#233; (<em>javier.mas.sole_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 07:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26395.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>Previous message:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26395.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>Reply:</strong> <a href="26395.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a fresh install of openmpi-1.8.4 in a  Mac with OSX-10.9.5. It compiled and installed fine. 
<br>
I have a Fortran code that runs perfectly on another similar machine with openmpi-1.6.5. It compiled
<br>
without error in  the new Mac. When I want to  mpirun, it gives the following  message below.
<br>
<p>Also if i write echo $PATH  I can spot the combinations us/local/bin which was a warning in the installation instructions.
<br>
I have read in other forums that this might signal a duplicity of versions openmpi. I cannot rule this out, although
<br>
I don&#146;t find any duplicate in the use/local/bin folder.
<br>
<p>I&#146;m thinking of uninstalling this version and installing the 1.6.5 which works fine. 
<br>
&#191;Anyone can tell me how to do this uninstall?
<br>
<p>Thanks a lot
<br>
<p>Javier
<br>
<p>I have seen a similar post to this one 
<br>
<p>fpmac114:AdSHW javier$ /usr/local/bin/mpirun sim1.exe
<br>
[fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ess_slurmd: dlopen(/usr/local/lib/openmpi/mca_ess_slurmd.so, 9): Symbol not found: _orte_jmap_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_ess_slurmd.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_ess_slurmd.so (ignored)
<br>
[fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_default: dlopen(/usr/local/lib/openmpi/mca_errmgr_default.so, 9): Symbol not found: _orte_errmgr_base_error_abort
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_errmgr_default.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_errmgr_default.so (ignored)
<br>
[fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_cm: dlopen(/usr/local/lib/openmpi/mca_routed_cm.so, 9): Symbol not found: _orte_message_event_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_routed_cm.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_routed_cm.so (ignored)
<br>
[fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_linear: dlopen(/usr/local/lib/openmpi/mca_routed_linear.so, 9): Symbol not found: _orte_message_event_t_class
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_routed_linear.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_routed_linear.so (ignored)
<br>
[fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_basic: dlopen(/usr/local/lib/openmpi/mca_grpcomm_basic.so, 9): Symbol not found: _opal_profile
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_grpcomm_basic.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_grpcomm_basic.so (ignored)
<br>
[fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_hier: dlopen(/usr/local/lib/openmpi/mca_grpcomm_hier.so, 9): Symbol not found: _orte_daemon_cmd_processor
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_grpcomm_hier.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_grpcomm_hier.so (ignored)
<br>
[fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_filem_rsh: dlopen(/usr/local/lib/openmpi/mca_filem_rsh.so, 9): Symbol not found: _opal_uses_threads
<br>
&nbsp;&nbsp;Referenced from: /usr/local/lib/openmpi/mca_filem_rsh.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /usr/local/lib/openmpi/mca_filem_rsh.so (ignored)
<br>
[fpmac114:00398] *** Process received signal ***
<br>
[fpmac114:00398] Signal: Segmentation fault: 11 (11)
<br>
[fpmac114:00398] Signal code: Address not mapped (1)
<br>
[fpmac114:00398] Failing at address: 0x100000013
<br>
[fpmac114:00398] [ 0] 0   libsystem_platform.dylib            0x00007fff933125aa _sigtramp + 26
<br>
[fpmac114:00398] [ 1] 0   ???                                 0x00007fff5b7f00ff 0x0 + 140734728438015
<br>
[fpmac114:00398] [ 2] 0   libopen-rte.7.dylib                 0x0000000104469ee5 orte_rmaps_base_map_job + 1525
<br>
[fpmac114:00398] [ 3] 0   libopen-pal.6.dylib                 0x00000001044e4346 opal_libevent2021_event_base_loop + 2214
<br>
[fpmac114:00398] [ 4] 0   mpirun                              0x0000000104411bc0 orterun + 6320
<br>
[fpmac114:00398] [ 5] 0   mpirun                              0x00000001044102f2 main + 34
<br>
[fpmac114:00398] [ 6] 0   libdyld.dylib                       0x00007fff8d08a5fd start + 1
<br>
[fpmac114:00398] [ 7] 0   ???                                 0x0000000000000002 0x0 + 2
<br>
[fpmac114:00398] *** End of error message ***
<br>
Segmentation fault: 11
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26394/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26395.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>Previous message:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26395.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>Reply:</strong> <a href="26395.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
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

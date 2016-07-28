<?
$subject_val = "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 08:29:43 2015" -->
<!-- isoreceived="20150225132943" -->
<!-- sent="Wed, 25 Feb 2015 13:29:40 +0000" -->
<!-- isosent="20150225132940" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error." -->
<!-- id="AAD1DA25-E20D-4614-A528-82A4C2C47196_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="F89860B5-476F-4EF0-AF18-4DAE57C87E93_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error.<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 08:29:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26396.php">Javier Mas Solé: "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>Previous message:</strong> <a href="26394.php">Javier Mas Sol&#233;: "[OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>In reply to:</strong> <a href="26394.php">Javier Mas Sol&#233;: "[OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26396.php">Javier Mas Solé: "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>Reply:</strong> <a href="26396.php">Javier Mas Solé: "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you had an older Open MPI installed into /usr/local before you installed Open MPI 1.8.4 into /usr/local, it's quite possible that some of the older plugins are still there (and will not play nicely with the 1.8.4 install).
<br>
<p>Specifically: installing a new Open MPI does not uninstall an older Open MPI.
<br>
<p>What you can probably do is
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;rm -rf /usr/local/lib/openmpi
<br>
<p>This will completely delete *all* Open MPI plugins (both new and old) from the /usr/local tree.
<br>
<p>Then re-install the 1.8.4 again, and see if that works for you.
<br>
<p><p><p><span class="quotelev1">&gt; On Feb 25, 2015, at 7:52 AM, Javier Mas Sol&#233; &lt;javier.mas.sole_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a fresh install of openmpi-1.8.4 in a  Mac with OSX-10.9.5. It compiled and installed fine. 
</span><br>
<span class="quotelev1">&gt; I have a Fortran code that runs perfectly on another similar machine with openmpi-1.6.5. It compiled
</span><br>
<span class="quotelev1">&gt; without error in  the new Mac. When I want to  mpirun, it gives the following  message below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also if i write echo $PATH  I can spot the combinations us/local/bin which was a warning in the installation instructions.
</span><br>
<span class="quotelev1">&gt; I have read in other forums that this might signal a duplicity of versions openmpi. I cannot rule this out, although
</span><br>
<span class="quotelev1">&gt; I don&#146;t find any duplicate in the use/local/bin folder.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m thinking of uninstalling this version and installing the 1.6.5 which works fine. 
</span><br>
<span class="quotelev1">&gt; &#191;Anyone can tell me how to do this uninstall?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Javier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have seen a similar post to this one 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fpmac114:AdSHW javier$ /usr/local/bin/mpirun sim1.exe
</span><br>
<span class="quotelev1">&gt; [fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ess_slurmd: dlopen(/usr/local/lib/openmpi/mca_ess_slurmd.so, 9): Symbol not found: _orte_jmap_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_ess_slurmd.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_ess_slurmd.so (ignored)
</span><br>
<span class="quotelev1">&gt; [fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_default: dlopen(/usr/local/lib/openmpi/mca_errmgr_default.so, 9): Symbol not found: _orte_errmgr_base_error_abort
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_errmgr_default.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_errmgr_default.so (ignored)
</span><br>
<span class="quotelev1">&gt; [fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_cm: dlopen(/usr/local/lib/openmpi/mca_routed_cm.so, 9): Symbol not found: _orte_message_event_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_routed_cm.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_routed_cm.so (ignored)
</span><br>
<span class="quotelev1">&gt; [fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_linear: dlopen(/usr/local/lib/openmpi/mca_routed_linear.so, 9): Symbol not found: _orte_message_event_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_routed_linear.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_routed_linear.so (ignored)
</span><br>
<span class="quotelev1">&gt; [fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_basic: dlopen(/usr/local/lib/openmpi/mca_grpcomm_basic.so, 9): Symbol not found: _opal_profile
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_grpcomm_basic.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_grpcomm_basic.so (ignored)
</span><br>
<span class="quotelev1">&gt; [fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_hier: dlopen(/usr/local/lib/openmpi/mca_grpcomm_hier.so, 9): Symbol not found: _orte_daemon_cmd_processor
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_grpcomm_hier.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_grpcomm_hier.so (ignored)
</span><br>
<span class="quotelev1">&gt; [fpmac114.inv.usc.es:00398] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_filem_rsh: dlopen(/usr/local/lib/openmpi/mca_filem_rsh.so, 9): Symbol not found: _opal_uses_threads
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_filem_rsh.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_filem_rsh.so (ignored)
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] Signal: Segmentation fault: 11 (11)
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] Failing at address: 0x100000013
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] [ 0] 0   libsystem_platform.dylib            0x00007fff933125aa _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] [ 1] 0   ???                                 0x00007fff5b7f00ff 0x0 + 140734728438015
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] [ 2] 0   libopen-rte.7.dylib                 0x0000000104469ee5 orte_rmaps_base_map_job + 1525
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] [ 3] 0   libopen-pal.6.dylib                 0x00000001044e4346 opal_libevent2021_event_base_loop + 2214
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] [ 4] 0   mpirun                              0x0000000104411bc0 orterun + 6320
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] [ 5] 0   mpirun                              0x00000001044102f2 main + 34
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] [ 6] 0   libdyld.dylib                       0x00007fff8d08a5fd start + 1
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] [ 7] 0   ???                                 0x0000000000000002 0x0 + 2
</span><br>
<span class="quotelev1">&gt; [fpmac114:00398] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault: 11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26394.php">http://www.open-mpi.org/community/lists/users/2015/02/26394.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26396.php">Javier Mas Solé: "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>Previous message:</strong> <a href="26394.php">Javier Mas Sol&#233;: "[OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>In reply to:</strong> <a href="26394.php">Javier Mas Sol&#233;: "[OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26396.php">Javier Mas Solé: "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
<li><strong>Reply:</strong> <a href="26396.php">Javier Mas Solé: "Re: [OMPI users] openmpi-1.8.4 on OSX, mpirun execution error."</a>
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

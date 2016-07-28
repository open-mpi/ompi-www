<?
$subject_val = "Re: [OMPI users] Serveral issue in mpirun on macosx 10.8.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 09:52:16 2012" -->
<!-- isoreceived="20121212145216" -->
<!-- sent="Wed, 12 Dec 2012 06:52:08 -0800" -->
<!-- isosent="20121212145208" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Serveral issue in mpirun on macosx 10.8.2" -->
<!-- id="8A9A833E-026F-4AED-B9B2-38658A7E0065_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJn1Notk9-ZFkCOw78mOK1dJQHELb-6qAqtfos=F50gW60Q1gg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Serveral issue in mpirun on macosx 10.8.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 09:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20926.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>Previous message:</strong> <a href="20924.php">Damien Hocking: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20923.php">Extreme Programming: "[OMPI users] Serveral issue in mpirun on macosx 10.8.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, this
<br>
<p><span class="quotelev1">&gt; LD_LIBRARY_PATH = /usr/local/bin
</span><br>
<p>certainly isn't right - it needs to be /usr/local/lib, based on the output below. What prefix did you provide to configure OMPI?
<br>
<p><p>On Dec 12, 2012, at 4:11 AM, Extreme Programming &lt;dmasondev_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I have just installed openmpi 1.7 on my macosx 10.8.2 because i need java bining.
</span><br>
<span class="quotelev1">&gt; Installation works fine, compilation too but when i executed the &quot;mpirun -n 4 myfile&quot; i get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MacBook-Pro:Desktop rainmaker$ mpirun -n 4 a.out 
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro.local:18481] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_ess_slurmd: dlopen(/usr/local/lib/openmpi/mca_ess_slurmd.so, 9): Symbol not found: _orte_jmap_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_ess_slurmd.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_ess_slurmd.so (ignored)
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro.local:18481] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_errmgr_default: dlopen(/usr/local/lib/openmpi/mca_errmgr_default.so, 9): Symbol not found: _orte_errmgr_base_error_abort
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_errmgr_default.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_errmgr_default.so (ignored)
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro.local:18481] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_cm: dlopen(/usr/local/lib/openmpi/mca_routed_cm.so, 9): Symbol not found: _orte_message_event_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_routed_cm.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_routed_cm.so (ignored)
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro.local:18481] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_routed_linear: dlopen(/usr/local/lib/openmpi/mca_routed_linear.so, 9): Symbol not found: _orte_message_event_t_class
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_routed_linear.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_routed_linear.so (ignored)
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro.local:18481] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_basic: dlopen(/usr/local/lib/openmpi/mca_grpcomm_basic.so, 9): Symbol not found: _opal_profile
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_grpcomm_basic.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_grpcomm_basic.so (ignored)
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro.local:18481] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_grpcomm_hier: dlopen(/usr/local/lib/openmpi/mca_grpcomm_hier.so, 9): Symbol not found: _orte_daemon_cmd_processor
</span><br>
<span class="quotelev1">&gt;   Referenced from: /usr/local/lib/openmpi/mca_grpcomm_hier.so
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;  in /usr/local/lib/openmpi/mca_grpcomm_hier.so (ignored)
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] Signal: Segmentation fault: 11 (11)
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] Failing at address: 0x14
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] [ 0] 2   libsystem_c.dylib                   0x00007fff820308ea _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] [ 1] 3   ???                                 0x00007fff59070458 0x0 + 140734687020120
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] [ 2] 4   libopen-rte.5.dylib                 0x0000000106bd7658 orte_rmaps_base_map_job + 984
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] [ 3] 5   libopen-rte.5.dylib                 0x0000000106c1a0a0 opal_libevent2019_event_base_loop + 1888
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] [ 4] 6   mpirun                              0x0000000106b916e1 orterun + 5137
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] [ 5] 7   mpirun                              0x0000000106b90290 main + 32
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] [ 6] 8   libdyld.dylib                       0x00007fff8ac597e1 start + 0
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] [ 7] 9   ???                                 0x0000000000000004 0x0 + 4
</span><br>
<span class="quotelev1">&gt; [MacBook-Pro:18481] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault: 11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for resolving it, i have exported the LD_LIBRARY_PATH = /usr/local/bin and I used the same configuration of my last openmpi's installation.
</span><br>
<span class="quotelev1">&gt; Please help me to solve this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20926.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>Previous message:</strong> <a href="20924.php">Damien Hocking: "Re: [OMPI users] OpenMPI-1.6.3 MinGW64 buildup on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20923.php">Extreme Programming: "[OMPI users] Serveral issue in mpirun on macosx 10.8.2"</a>
<!-- nextthread="start" -->
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

<?
$subject_val = "Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 20:48:51 2011" -->
<!-- isoreceived="20110805004851" -->
<!-- sent="Thu, 4 Aug 2011 20:48:30 -0400" -->
<!-- isosent="20110805004830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue" -->
<!-- id="C2EA7FD0-BADB-4D05-851C-C444BE26FA5A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6898A200-0A2D-42DC-8698-A4689D8DA39E_at_mikrob.slu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 20:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17024.php">Rob Latham: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Previous message:</strong> <a href="17022.php">Jeff Squyres: "Re: [OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<li><strong>In reply to:</strong> <a href="17018.php">Christopher Jones: "[OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid our Xgrid support has lagged, and Apple hasn't show much interest in MPI + Xgrid support -- much less HPC.  :-\
<br>
<p>Have you see the FAQ items about Xgrid?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=osx#xgrid-howto">http://www.open-mpi.org/faq/?category=osx#xgrid-howto</a>
<br>
<p><p>On Aug 4, 2011, at 4:16 AM, Christopher Jones wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently trying to set up a small xgrid between two mac pros (a single quadcore and a 2 duo core), where both are directly connected via an ethernet cable. I've set up xgrid using the password authentication (rather than the kerberos), and from what I can tell in the Xgrid admin tool it seems to be working. However, once I try a simple hello world program, I get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chris-joness-mac-pro:~ chrisjones$ mpirun -np 4 ./test_hello
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 381 on node xgrid-node-0 exited on signal 15 (Terminated). 
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt; 2011-08-04 10:02:16.329 mpirun[350:903] *** Terminating app due to uncaught exception 'NSInvalidArgumentException', reason: '*** -[NSKVONotifying_XGConnection&lt;0x1001325a0&gt; finalize]: called when collecting not enabled'
</span><br>
<span class="quotelev1">&gt; *** Call stack at first throw:
</span><br>
<span class="quotelev1">&gt; (
</span><br>
<span class="quotelev1">&gt; 	0   CoreFoundation                      0x00007fff814237b4 __exceptionPreprocess + 180
</span><br>
<span class="quotelev1">&gt; 	1   libobjc.A.dylib                     0x00007fff84fe8f03 objc_exception_throw + 45
</span><br>
<span class="quotelev1">&gt; 	2   CoreFoundation                      0x00007fff8143e631 -[NSObject(NSObject) finalize] + 129
</span><br>
<span class="quotelev1">&gt; 	3   mca_pls_xgrid.so                    0x00000001002a9ce3 -[PlsXGridClient dealloc] + 419
</span><br>
<span class="quotelev1">&gt; 	4   mca_pls_xgrid.so                    0x00000001002a9837 orte_pls_xgrid_finalize + 40
</span><br>
<span class="quotelev1">&gt; 	5   libopen-rte.0.dylib                 0x000000010002d0f9 orte_pls_base_close + 249
</span><br>
<span class="quotelev1">&gt; 	6   libopen-rte.0.dylib                 0x0000000100012027 orte_system_finalize + 119
</span><br>
<span class="quotelev1">&gt; 	7   libopen-rte.0.dylib                 0x000000010000e968 orte_finalize + 40
</span><br>
<span class="quotelev1">&gt; 	8   mpirun                              0x00000001000011ff orterun + 2042
</span><br>
<span class="quotelev1">&gt; 	9   mpirun                              0x0000000100000a03 main + 27
</span><br>
<span class="quotelev1">&gt; 	10  mpirun                              0x00000001000009e0 start + 52
</span><br>
<span class="quotelev1">&gt; 	11  ???                                 0x0000000000000004 0x0 + 4
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt; terminate called after throwing an instance of 'NSException'
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] Signal: Abort trap (6)
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] Signal code:  (0)
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [ 0] 2   libSystem.B.dylib                   0x00007fff81ca51ba _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [ 1] 3   ???                                 0x00000001000cd400 0x0 + 4295808000
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [ 2] 4   libstdc++.6.dylib                   0x00007fff830965d2 __tcf_0 + 0
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [ 3] 5   libobjc.A.dylib                     0x00007fff84fecb39 _objc_terminate + 100
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [ 4] 6   libstdc++.6.dylib                   0x00007fff83094ae1 _ZN10__cxxabiv111__terminateEPFvvE + 11
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [ 5] 7   libstdc++.6.dylib                   0x00007fff83094b16 _ZN10__cxxabiv112__unexpectedEPFvvE + 0
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [ 6] 8   libstdc++.6.dylib                   0x00007fff83094bfc _ZL23__gxx_exception_cleanup19_Unwind_Reason_CodeP17_Unwind_Exception + 0
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [ 7] 9   libobjc.A.dylib                     0x00007fff84fe8fa2 object_getIvar + 0
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [ 8] 10  CoreFoundation                      0x00007fff8143e631 -[NSObject(NSObject) finalize] + 129
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [ 9] 11  mca_pls_xgrid.so                    0x00000001002a9ce3 -[PlsXGridClient dealloc] + 419
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [10] 12  mca_pls_xgrid.so                    0x00000001002a9837 orte_pls_xgrid_finalize + 40
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [11] 13  libopen-rte.0.dylib                 0x000000010002d0f9 orte_pls_base_close + 249
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [12] 14  libopen-rte.0.dylib                 0x0000000100012027 orte_system_finalize + 119
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [13] 15  libopen-rte.0.dylib                 0x000000010000e968 orte_finalize + 40
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [14] 16  mpirun                              0x00000001000011ff orterun + 2042
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [15] 17  mpirun                              0x0000000100000a03 main + 27
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [16] 18  mpirun                              0x00000001000009e0 start + 52
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] [17] 19  ???                                 0x0000000000000004 0x0 + 4
</span><br>
<span class="quotelev1">&gt; [chris-joness-mac-pro:00350] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Abort trap
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've seen this error in a previous mailing, and it seems that the issue has something to do with forcing everything to use kerberos (SSO). However, I noticed that in the computer being used as an agent, this option is grayed on in the Xgrid sharing configuration (I have no idea why). I would therefore ask if it is absolutely necessary to use SSO to get openmpi to run with xgrid, or am I missing something with the password setup. Seems that the kerberos option is much more complicated, and I may even want to switch to just using openmpi with ssh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris Jones
</span><br>
<span class="quotelev1">&gt; Post-doctoral Research Assistant, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Department of Microbiology
</span><br>
<span class="quotelev1">&gt; Swedish University of Agricultural Sciences
</span><br>
<span class="quotelev1">&gt; Uppsala, Sweden
</span><br>
<span class="quotelev1">&gt; phone: +46 (0)18 67 3222
</span><br>
<span class="quotelev1">&gt; email: chris.jones_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Department of Soil and Environmental Microbiology
</span><br>
<span class="quotelev1">&gt; National Institute for Agronomic Research
</span><br>
<span class="quotelev1">&gt; Dijon, France
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17024.php">Rob Latham: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Previous message:</strong> <a href="17022.php">Jeff Squyres: "Re: [OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<li><strong>In reply to:</strong> <a href="17018.php">Christopher Jones: "[OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
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

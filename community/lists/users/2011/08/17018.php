<?
$subject_val = "[OMPI users] openmpi 1.2.8 on Xgrid noob issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 04:16:49 2011" -->
<!-- isoreceived="20110804081649" -->
<!-- sent="Thu, 4 Aug 2011 10:16:43 +0200" -->
<!-- isosent="20110804081643" -->
<!-- name="Christopher Jones" -->
<!-- email="Chris.Jones_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.2.8 on Xgrid noob issue" -->
<!-- id="6898A200-0A2D-42DC-8698-A4689D8DA39E_at_mikrob.slu.se" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.2.8 on Xgrid noob issue<br>
<strong>From:</strong> Christopher Jones (<em>Chris.Jones_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 04:16:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17019.php">Keith Manville: "[OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<li><strong>Previous message:</strong> <a href="17017.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17023.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<li><strong>Reply:</strong> <a href="17023.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I'm currently trying to set up a small xgrid between two mac pros (a single quadcore and a 2 duo core), where both are directly connected via an ethernet cable. I've set up xgrid using the password authentication (rather than the kerberos), and from what I can tell in the Xgrid admin tool it seems to be working. However, once I try a simple hello world program, I get this error:
<br>
<p>chris-joness-mac-pro:~ chrisjones$ mpirun -np 4 ./test_hello
<br>
mpirun noticed that job rank 0 with PID 381 on node xgrid-node-0 exited on signal 15 (Terminated).
<br>
1 additional process aborted (not shown)
<br>
2011-08-04 10:02:16.329 mpirun[350:903] *** Terminating app due to uncaught exception 'NSInvalidArgumentException', reason: '*** -[NSKVONotifying_XGConnection&lt;0x1001325a0&gt; finalize]: called when collecting not enabled'
<br>
*** Call stack at first throw:
<br>
(
<br>
0   CoreFoundation                      0x00007fff814237b4 __exceptionPreprocess + 180
<br>
1   libobjc.A.dylib                     0x00007fff84fe8f03 objc_exception_throw + 45
<br>
2   CoreFoundation                      0x00007fff8143e631 -[NSObject(NSObject) finalize] + 129
<br>
3   mca_pls_xgrid.so                    0x00000001002a9ce3 -[PlsXGridClient dealloc] + 419
<br>
4   mca_pls_xgrid.so                    0x00000001002a9837 orte_pls_xgrid_finalize + 40
<br>
5   libopen-rte.0.dylib                 0x000000010002d0f9 orte_pls_base_close + 249
<br>
6   libopen-rte.0.dylib                 0x0000000100012027 orte_system_finalize + 119
<br>
7   libopen-rte.0.dylib                 0x000000010000e968 orte_finalize + 40
<br>
8   mpirun                              0x00000001000011ff orterun + 2042
<br>
9   mpirun                              0x0000000100000a03 main + 27
<br>
10  mpirun                              0x00000001000009e0 start + 52
<br>
11  ???                                 0x0000000000000004 0x0 + 4
<br>
)
<br>
terminate called after throwing an instance of 'NSException'
<br>
[chris-joness-mac-pro:00350] *** Process received signal ***
<br>
[chris-joness-mac-pro:00350] Signal: Abort trap (6)
<br>
[chris-joness-mac-pro:00350] Signal code:  (0)
<br>
[chris-joness-mac-pro:00350] [ 0] 2   libSystem.B.dylib                   0x00007fff81ca51ba _sigtramp + 26
<br>
[chris-joness-mac-pro:00350] [ 1] 3   ???                                 0x00000001000cd400 0x0 + 4295808000
<br>
[chris-joness-mac-pro:00350] [ 2] 4   libstdc++.6.dylib                   0x00007fff830965d2 __tcf_0 + 0
<br>
[chris-joness-mac-pro:00350] [ 3] 5   libobjc.A.dylib                     0x00007fff84fecb39 _objc_terminate + 100
<br>
[chris-joness-mac-pro:00350] [ 4] 6   libstdc++.6.dylib                   0x00007fff83094ae1 _ZN10__cxxabiv111__terminateEPFvvE + 11
<br>
[chris-joness-mac-pro:00350] [ 5] 7   libstdc++.6.dylib                   0x00007fff83094b16 _ZN10__cxxabiv112__unexpectedEPFvvE + 0
<br>
[chris-joness-mac-pro:00350] [ 6] 8   libstdc++.6.dylib                   0x00007fff83094bfc _ZL23__gxx_exception_cleanup19_Unwind_Reason_CodeP17_Unwind_Exception + 0
<br>
[chris-joness-mac-pro:00350] [ 7] 9   libobjc.A.dylib                     0x00007fff84fe8fa2 object_getIvar + 0
<br>
[chris-joness-mac-pro:00350] [ 8] 10  CoreFoundation                      0x00007fff8143e631 -[NSObject(NSObject) finalize] + 129
<br>
[chris-joness-mac-pro:00350] [ 9] 11  mca_pls_xgrid.so                    0x00000001002a9ce3 -[PlsXGridClient dealloc] + 419
<br>
[chris-joness-mac-pro:00350] [10] 12  mca_pls_xgrid.so                    0x00000001002a9837 orte_pls_xgrid_finalize + 40
<br>
[chris-joness-mac-pro:00350] [11] 13  libopen-rte.0.dylib                 0x000000010002d0f9 orte_pls_base_close + 249
<br>
[chris-joness-mac-pro:00350] [12] 14  libopen-rte.0.dylib                 0x0000000100012027 orte_system_finalize + 119
<br>
[chris-joness-mac-pro:00350] [13] 15  libopen-rte.0.dylib                 0x000000010000e968 orte_finalize + 40
<br>
[chris-joness-mac-pro:00350] [14] 16  mpirun                              0x00000001000011ff orterun + 2042
<br>
[chris-joness-mac-pro:00350] [15] 17  mpirun                              0x0000000100000a03 main + 27
<br>
[chris-joness-mac-pro:00350] [16] 18  mpirun                              0x00000001000009e0 start + 52
<br>
[chris-joness-mac-pro:00350] [17] 19  ???                                 0x0000000000000004 0x0 + 4
<br>
[chris-joness-mac-pro:00350] *** End of error message ***
<br>
Abort trap
<br>
<p><p>I've seen this error in a previous mailing, and it seems that the issue has something to do with forcing everything to use kerberos (SSO). However, I noticed that in the computer being used as an agent, this option is grayed on in the Xgrid sharing configuration (I have no idea why). I would therefore ask if it is absolutely necessary to use SSO to get openmpi to run with xgrid, or am I missing something with the password setup. Seems that the kerberos option is much more complicated, and I may even want to switch to just using openmpi with ssh.
<br>
<p>Many thanks,
<br>
Chris
<br>
<p><p>Chris Jones
<br>
Post-doctoral Research Assistant,
<br>
<p>Department of Microbiology
<br>
Swedish University of Agricultural Sciences
<br>
Uppsala, Sweden
<br>
phone: +46 (0)18 67 3222
<br>
email: chris.jones_at_[hidden]&lt;mailto:chris.jones_at_[hidden]&gt;
<br>
<p>Department of Soil and Environmental Microbiology
<br>
National Institute for Agronomic Research
<br>
Dijon, France
<br>
<p><p><p><p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17019.php">Keith Manville: "[OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<li><strong>Previous message:</strong> <a href="17017.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17023.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<li><strong>Reply:</strong> <a href="17023.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
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

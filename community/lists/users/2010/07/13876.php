<?
$subject_val = "[OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 14:21:06 2010" -->
<!-- isoreceived="20100729182106" -->
<!-- sent="Thu, 29 Jul 2010 11:20:51 -0700" -->
<!-- isosent="20100729182051" -->
<!-- name="Beatty, Daniel D CIV NAVAIR, 474300D" -->
<!-- email="daniel.beatty_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)" -->
<!-- id="F7C1659EEBBA1D4E85D2314C873AE579DB4062_at_nawechlkez02v.nadsuswe.nads.navy.mil" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)<br>
<strong>From:</strong> Beatty, Daniel D CIV NAVAIR, 474300D (<em>daniel.beatty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-29 14:20:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13877.php">Ralph Castain: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<li><strong>Previous message:</strong> <a href="13875.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13877.php">Ralph Castain: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<li><strong>Reply:</strong> <a href="13877.php">Ralph Castain: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings all,
<br>
I am running into some trouble using OpenMPI with OSX 10.6.4 in a Kerberized XGrid environment.  Note, I did not have this trouble before in the OSX 10.5.8 Kerberized XGrid environment.   
<br>
<p>The pattern of this trouble is as follows:
<br>
1.  User submits a mpi job entering &quot;mpirun -np 4 hello&quot;,  to use a simple hello world MPI example.
<br>
2.  mpirun will submit the job to XGrid.
<br>
3.  A set of orted jobs get distributed to the machines, under the kerberized user's name.
<br>
4.  In the case of the OpenMPI 1.2.8, 1.2.3 compiled for gfortran, 1.2.8 compiled for gfortran, and 1.2.9 that comes with OSX 10.6.4, it will actually spawn the processes on the machine.
<br>
<p>It comes back with the following exception:
<br>
2010-07-29 10:25:49.063 mpirun[949:903] *** Terminating app due to uncaught exception 'NSInvalidArgumentException', reason: '*** -[NSKVONotifying_XGConnection&lt;0x100130f30&gt; finalize]: called when collecting not enabled'
<br>
*** Call stack at first throw:
<br>
(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0   CoreFoundation                      0x00007fff811f2cc4 __exceptionPreprocess + 180
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1   libobjc.A.dylib                     0x00007fff851820f3 objc_exception_throw + 45
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2   CoreFoundation                      0x00007fff8120d9f1 -[NSObject(NSObject) finalize] + 129
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3   mca_pls_xgrid.so                    0x0000000100297ce3 -[PlsXGridClient dealloc] + 419
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   mca_pls_xgrid.so                    0x0000000100297837 orte_pls_xgrid_finalize + 40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5   libopen-rte.0.dylib                 0x000000010002d0f9 orte_pls_base_close + 249
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6   libopen-rte.0.dylib                 0x0000000100012027 orte_system_finalize + 119
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7   libopen-rte.0.dylib                 0x000000010000e968 orte_finalize + 40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8   mpirun                              0x00000001000011ff orterun + 2042
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9   mpirun                              0x0000000100000a03 main + 27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10  mpirun                              0x00000001000009e0 start + 52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11  ???                                 0x0000000000000004 0x0 + 4
<br>
)
<br>
terminate called after throwing an instance of 'NSException'
<br>
[bigmac:00949] *** Process received signal ***
<br>
[bigmac:00949] Signal: Abort trap (6)
<br>
[bigmac:00949] Signal code:  (0)
<br>
[bigmac:00949] [ 0] 2   libSystem.B.dylib                   0x00007fff833e435a _sigtramp + 26
<br>
[bigmac:00949] [ 1] 3   ???                                 0x00007fff5fbff500 0x0 + 140734799803648
<br>
[bigmac:00949] [ 2] 4   libstdc++.6.dylib                   0x00007fff80e525d2 __tcf_0 + 0
<br>
[bigmac:00949] [ 3] 5   libobjc.A.dylib                     0x00007fff85185d29 _objc_terminate + 100
<br>
[bigmac:00949] [ 4] 6   libstdc++.6.dylib                   0x00007fff80e50ae1 _ZN10__cxxabiv111__terminateEPFvvE + 11
<br>
[bigmac:00949] [ 5] 7   libstdc++.6.dylib                   0x00007fff80e50b16 _ZN10__cxxabiv112__unexpectedEPFvvE + 0
<br>
[bigmac:00949] [ 6] 8   libstdc++.6.dylib                   0x00007fff80e50bfc _ZL23__gxx_exception_cleanup19_Unwind_Reason_CodeP17_Unwind_Exception + 0
<br>
[bigmac:00949] [ 7] 9   libobjc.A.dylib                     0x00007fff85182192 object_getIvar + 0
<br>
[bigmac:00949] [ 8] 10  CoreFoundation                      0x00007fff8120d9f1 -[NSObject(NSObject) finalize] + 129
<br>
[bigmac:00949] [ 9] 11  mca_pls_xgrid.so                    0x0000000100297ce3 -[PlsXGridClient dealloc] + 419
<br>
[bigmac:00949] [10] 12  mca_pls_xgrid.so                    0x0000000100297837 orte_pls_xgrid_finalize + 40
<br>
[bigmac:00949] [11] 13  libopen-rte.0.dylib                 0x000000010002d0f9 orte_pls_base_close + 249
<br>
[bigmac:00949] [12] 14  libopen-rte.0.dylib                 0x0000000100012027 orte_system_finalize + 119
<br>
[bigmac:00949] [13] 15  libopen-rte.0.dylib                 0x000000010000e968 orte_finalize + 40
<br>
[bigmac:00949] [14] 16  mpirun                              0x00000001000011ff orterun + 2042
<br>
[bigmac:00949] [15] 17  mpirun                              0x0000000100000a03 main + 27
<br>
[bigmac:00949] [16] 18  mpirun                              0x00000001000009e0 start + 52
<br>
[bigmac:00949] [17] 19  ???                                 0x0000000000000004 0x0 + 4
<br>
[bigmac:00949] *** End of error message ***
<br>
Abort trap
<br>
<p><p>In the case of OpenMPI 1.4.2, I get even worse errors.   
<br>
<p>I do not know if this is an XGrid problem or a OMPI problem.  But, it is definitely producing trouble.
<br>
<p>Now some have suggested, having XGrid drive OpenMPI, but if XGRID_CONTROLLER_HOSTNAME is set, then how will OpenMPI not try to use XGrid as the launcher?
<br>
<p>Any ideas as to how to fix this?
<br>
<p><p><p><p>Daniel Beatty 
<br>
Computer Scientist, Detonation Sciences Branch 
<br>
Code 4743000 
<br>
2400 E. Pilot Plant Rd. 
<br>
China Lake, CA 93555-6107 
<br>
daniel.beatty_at_[hidden] 
<br>
(760) 939-7097 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13877.php">Ralph Castain: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<li><strong>Previous message:</strong> <a href="13875.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13877.php">Ralph Castain: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<li><strong>Reply:</strong> <a href="13877.php">Ralph Castain: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
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

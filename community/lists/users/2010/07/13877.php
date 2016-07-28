<?
$subject_val = "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 14:30:07 2010" -->
<!-- isoreceived="20100729183007" -->
<!-- sent="Thu, 29 Jul 2010 12:30:02 -0600" -->
<!-- isosent="20100729183002" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)" -->
<!-- id="AANLkTi=j27-o=UyRwrk6HUuDYTGSak0OiYMhwnr2sL+R_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F7C1659EEBBA1D4E85D2314C873AE579DB4062_at_nawechlkez02v.nadsuswe.nads.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-29 14:30:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13878.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)"</a>
<li><strong>Previous message:</strong> <a href="13876.php">Beatty, Daniel D CIV NAVAIR, 474300D: "[OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<li><strong>In reply to:</strong> <a href="13876.php">Beatty, Daniel D CIV NAVAIR, 474300D: "[OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13878.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)"</a>
<li><strong>Reply:</strong> <a href="13878.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid we were unable to support xgrid after the 1.2 series as no
<br>
developer had access to an xgrid server. I recently received a complimentary
<br>
copy of OSX-server from Apple, and I expect to restore xgrid support at some
<br>
point in the 1.5 series.
<br>
<p>It looks like you are hitting some issue with 1.2 relating to a change in
<br>
xgrid between OSX versions. I personally won't be going back that far to
<br>
deal with xgrid issues, so I would suggest sticking with 10.5 if xgrid
<br>
support is required.
<br>
<p>Alternatively, you can just use OMPI's rsh support to do the launch. Get an
<br>
xgrid allocation (I don't know enough about xgrid yet to tell you all the
<br>
details), create a hostfile with that info, and then mpirun -hostfile &lt;file&gt;
<br>
-mca plm rsh ...  (assuming you use OMPI 1.4.x).
<br>
<p><p><p>On Thu, Jul 29, 2010 at 12:20 PM, Beatty, Daniel D CIV NAVAIR, 474300D &lt;
<br>
daniel.beatty_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greetings all,
</span><br>
<span class="quotelev1">&gt; I am running into some trouble using OpenMPI with OSX 10.6.4 in a
</span><br>
<span class="quotelev1">&gt; Kerberized XGrid environment.  Note, I did not have this trouble before in
</span><br>
<span class="quotelev1">&gt; the OSX 10.5.8 Kerberized XGrid environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The pattern of this trouble is as follows:
</span><br>
<span class="quotelev1">&gt; 1.  User submits a mpi job entering &quot;mpirun -np 4 hello&quot;,  to use a simple
</span><br>
<span class="quotelev1">&gt; hello world MPI example.
</span><br>
<span class="quotelev1">&gt; 2.  mpirun will submit the job to XGrid.
</span><br>
<span class="quotelev1">&gt; 3.  A set of orted jobs get distributed to the machines, under the
</span><br>
<span class="quotelev1">&gt; kerberized user's name.
</span><br>
<span class="quotelev1">&gt; 4.  In the case of the OpenMPI 1.2.8, 1.2.3 compiled for gfortran, 1.2.8
</span><br>
<span class="quotelev1">&gt; compiled for gfortran, and 1.2.9 that comes with OSX 10.6.4, it will
</span><br>
<span class="quotelev1">&gt; actually spawn the processes on the machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It comes back with the following exception:
</span><br>
<span class="quotelev1">&gt; 2010-07-29 10:25:49.063 mpirun[949:903] *** Terminating app due to uncaught
</span><br>
<span class="quotelev1">&gt; exception 'NSInvalidArgumentException', reason: '***
</span><br>
<span class="quotelev1">&gt; -[NSKVONotifying_XGConnection&lt;0x100130f30&gt; finalize]: called when collecting
</span><br>
<span class="quotelev1">&gt; not enabled'
</span><br>
<span class="quotelev1">&gt; *** Call stack at first throw:
</span><br>
<span class="quotelev1">&gt; (
</span><br>
<span class="quotelev1">&gt;        0   CoreFoundation                      0x00007fff811f2cc4
</span><br>
<span class="quotelev1">&gt; __exceptionPreprocess + 180
</span><br>
<span class="quotelev1">&gt;        1   libobjc.A.dylib                     0x00007fff851820f3
</span><br>
<span class="quotelev1">&gt; objc_exception_throw + 45
</span><br>
<span class="quotelev1">&gt;        2   CoreFoundation                      0x00007fff8120d9f1
</span><br>
<span class="quotelev1">&gt; -[NSObject(NSObject) finalize] + 129
</span><br>
<span class="quotelev1">&gt;        3   mca_pls_xgrid.so                    0x0000000100297ce3
</span><br>
<span class="quotelev1">&gt; -[PlsXGridClient dealloc] + 419
</span><br>
<span class="quotelev1">&gt;        4   mca_pls_xgrid.so                    0x0000000100297837
</span><br>
<span class="quotelev1">&gt; orte_pls_xgrid_finalize + 40
</span><br>
<span class="quotelev1">&gt;        5   libopen-rte.0.dylib                 0x000000010002d0f9
</span><br>
<span class="quotelev1">&gt; orte_pls_base_close + 249
</span><br>
<span class="quotelev1">&gt;        6   libopen-rte.0.dylib                 0x0000000100012027
</span><br>
<span class="quotelev1">&gt; orte_system_finalize + 119
</span><br>
<span class="quotelev1">&gt;        7   libopen-rte.0.dylib                 0x000000010000e968
</span><br>
<span class="quotelev1">&gt; orte_finalize + 40
</span><br>
<span class="quotelev1">&gt;        8   mpirun                              0x00000001000011ff orterun +
</span><br>
<span class="quotelev1">&gt; 2042
</span><br>
<span class="quotelev1">&gt;        9   mpirun                              0x0000000100000a03 main + 27
</span><br>
<span class="quotelev1">&gt;        10  mpirun                              0x00000001000009e0 start +
</span><br>
<span class="quotelev1">&gt; 52
</span><br>
<span class="quotelev1">&gt;        11  ???                                 0x0000000000000004 0x0 + 4
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt; terminate called after throwing an instance of 'NSException'
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] Signal: Abort trap (6)
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] Signal code:  (0)
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [ 0] 2   libSystem.B.dylib
</span><br>
<span class="quotelev1">&gt; 0x00007fff833e435a _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [ 1] 3   ???
</span><br>
<span class="quotelev1">&gt; 0x00007fff5fbff500 0x0 + 140734799803648
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [ 2] 4   libstdc++.6.dylib
</span><br>
<span class="quotelev1">&gt; 0x00007fff80e525d2 __tcf_0 + 0
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [ 3] 5   libobjc.A.dylib
</span><br>
<span class="quotelev1">&gt; 0x00007fff85185d29 _objc_terminate + 100
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [ 4] 6   libstdc++.6.dylib
</span><br>
<span class="quotelev1">&gt; 0x00007fff80e50ae1 _ZN10__cxxabiv111__terminateEPFvvE + 11
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [ 5] 7   libstdc++.6.dylib
</span><br>
<span class="quotelev1">&gt; 0x00007fff80e50b16 _ZN10__cxxabiv112__unexpectedEPFvvE + 0
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [ 6] 8   libstdc++.6.dylib
</span><br>
<span class="quotelev1">&gt; 0x00007fff80e50bfc
</span><br>
<span class="quotelev1">&gt; _ZL23__gxx_exception_cleanup19_Unwind_Reason_CodeP17_Unwind_Exception + 0
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [ 7] 9   libobjc.A.dylib
</span><br>
<span class="quotelev1">&gt; 0x00007fff85182192 object_getIvar + 0
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [ 8] 10  CoreFoundation
</span><br>
<span class="quotelev1">&gt;  0x00007fff8120d9f1 -[NSObject(NSObject) finalize] + 129
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [ 9] 11  mca_pls_xgrid.so
</span><br>
<span class="quotelev1">&gt;  0x0000000100297ce3 -[PlsXGridClient dealloc] + 419
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [10] 12  mca_pls_xgrid.so
</span><br>
<span class="quotelev1">&gt;  0x0000000100297837 orte_pls_xgrid_finalize + 40
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [11] 13  libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x000000010002d0f9 orte_pls_base_close + 249
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [12] 14  libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x0000000100012027 orte_system_finalize + 119
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [13] 15  libopen-rte.0.dylib
</span><br>
<span class="quotelev1">&gt; 0x000000010000e968 orte_finalize + 40
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [14] 16  mpirun
</span><br>
<span class="quotelev1">&gt;  0x00000001000011ff orterun + 2042
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [15] 17  mpirun
</span><br>
<span class="quotelev1">&gt;  0x0000000100000a03 main + 27
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [16] 18  mpirun
</span><br>
<span class="quotelev1">&gt;  0x00000001000009e0 start + 52
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] [17] 19  ???
</span><br>
<span class="quotelev1">&gt; 0x0000000000000004 0x0 + 4
</span><br>
<span class="quotelev1">&gt; [bigmac:00949] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Abort trap
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the case of OpenMPI 1.4.2, I get even worse errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know if this is an XGrid problem or a OMPI problem.  But, it is
</span><br>
<span class="quotelev1">&gt; definitely producing trouble.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now some have suggested, having XGrid drive OpenMPI, but if
</span><br>
<span class="quotelev1">&gt; XGRID_CONTROLLER_HOSTNAME is set, then how will OpenMPI not try to use XGrid
</span><br>
<span class="quotelev1">&gt; as the launcher?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas as to how to fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel Beatty
</span><br>
<span class="quotelev1">&gt; Computer Scientist, Detonation Sciences Branch
</span><br>
<span class="quotelev1">&gt; Code 4743000
</span><br>
<span class="quotelev1">&gt; 2400 E. Pilot Plant Rd.
</span><br>
<span class="quotelev1">&gt; China Lake, CA 93555-6107
</span><br>
<span class="quotelev1">&gt; daniel.beatty_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (760) 939-7097
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13878.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)"</a>
<li><strong>Previous message:</strong> <a href="13876.php">Beatty, Daniel D CIV NAVAIR, 474300D: "[OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<li><strong>In reply to:</strong> <a href="13876.php">Beatty, Daniel D CIV NAVAIR, 474300D: "[OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13878.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)"</a>
<li><strong>Reply:</strong> <a href="13878.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)"</a>
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

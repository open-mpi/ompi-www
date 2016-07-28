<?
$subject_val = "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 29 14:56:49 2010" -->
<!-- isoreceived="20100729185649" -->
<!-- sent="Thu, 29 Jul 2010 11:56:44 -0700" -->
<!-- isosent="20100729185644" -->
<!-- name="Beatty, Daniel D CIV NAVAIR, 474300D" -->
<!-- email="daniel.beatty_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)" -->
<!-- id="F7C1659EEBBA1D4E85D2314C873AE5790373CA1B_at_nawechlkez02v.nadsuswe.nads.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=j27-o=UyRwrk6HUuDYTGSak0OiYMhwnr2sL+R_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)<br>
<strong>From:</strong> Beatty, Daniel D CIV NAVAIR, 474300D (<em>daniel.beatty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-29 14:56:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13879.php">LB: "[OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>Previous message:</strong> <a href="13877.php">Ralph Castain: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<li><strong>In reply to:</strong> <a href="13877.php">Ralph Castain: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Ralph,
<br>
Thank you so much.  I look forward to seeing the new OpenMPI 1.5.x with Xgrid support.  There was a point say 10.6.2 and 10.5.8 where OpenMPI 1.4.1 and v1.2.9 both worked, with only a minor glitch. 
<br>
<p>Since I have a 10.6.3 version, I can retry on that and see what results I get.  Also, if you have any coaching on OpenMPI, I may be able to help make some headway on OMPI 1.5.   It seems to be a large project, and therefore may be a major undertaking.  Thus I am hoping that your experience will win out for an Xgrid solution.
<br>
<p>Again, thank you,
<br>
Daniel Beatty
<br>
Computer Scientist, Detonation Sciences Branch
<br>
Code 474300D
<br>
2400 E. Pilot Plant Rd. M/S 1109
<br>
China Lake, CA 93555
<br>
daniel.beatty_at_[hidden]
<br>
(760)939-7097  
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, July 29, 2010 11:30
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Trouble running OpenMPI compiled for x86_64(either m32 or m64)
<br>
<p>I'm afraid we were unable to support xgrid after the 1.2 series as no developer had access to an xgrid server. I recently received a complimentary copy of OSX-server from Apple, and I expect to restore xgrid support at some point in the 1.5 series.
<br>
<p>It looks like you are hitting some issue with 1.2 relating to a change in xgrid between OSX versions. I personally won't be going back that far to deal with xgrid issues, so I would suggest sticking with 10.5 if xgrid support is required.
<br>
<p>Alternatively, you can just use OMPI's rsh support to do the launch. Get an xgrid allocation (I don't know enough about xgrid yet to tell you all the details), create a hostfile with that info, and then mpirun -hostfile &lt;file&gt; -mca plm rsh ...  (assuming you use OMPI 1.4.x).
<br>
<p><p><p>On Thu, Jul 29, 2010 at 12:20 PM, Beatty, Daniel D CIV NAVAIR, 474300D &lt;daniel.beatty_at_[hidden]&gt; wrote:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Greetings all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am running into some trouble using OpenMPI with OSX 10.6.4 in a Kerberized XGrid environment.  Note, I did not have this trouble before in the OSX 10.5.8 Kerberized XGrid environment.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The pattern of this trouble is as follows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.  User submits a mpi job entering &quot;mpirun -np 4 hello&quot;,  to use a simple hello world MPI example.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.  mpirun will submit the job to XGrid.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.  A set of orted jobs get distributed to the machines, under the kerberized user's name.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.  In the case of the OpenMPI 1.2.8, 1.2.3 compiled for gfortran, 1.2.8 compiled for gfortran, and 1.2.9 that comes with OSX 10.6.4, it will actually spawn the processes on the machine.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It comes back with the following exception:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2010-07-29 10:25:49.063 mpirun[949:903] *** Terminating app due to uncaught exception 'NSInvalidArgumentException', reason: '*** -[NSKVONotifying_XGConnection&lt;0x100130f30&gt; finalize]: called when collecting not enabled'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** Call stack at first throw:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0   CoreFoundation                      0x00007fff811f2cc4 __exceptionPreprocess + 180
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1   libobjc.A.dylib                     0x00007fff851820f3 objc_exception_throw + 45
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2   CoreFoundation                      0x00007fff8120d9f1 -[NSObject(NSObject) finalize] + 129
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3   mca_pls_xgrid.so                    0x0000000100297ce3 -[PlsXGridClient dealloc] + 419
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4   mca_pls_xgrid.so                    0x0000000100297837 orte_pls_xgrid_finalize + 40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5   libopen-rte.0.dylib                 0x000000010002d0f9 orte_pls_base_close + 249
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6   libopen-rte.0.dylib                 0x0000000100012027 orte_system_finalize + 119
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7   libopen-rte.0.dylib                 0x000000010000e968 orte_finalize + 40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8   mpirun                              0x00000001000011ff orterun + 2042
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9   mpirun                              0x0000000100000a03 main + 27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10  mpirun                              0x00000001000009e0 start + 52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11  ???                                 0x0000000000000004 0x0 + 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;terminate called after throwing an instance of 'NSException'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] *** Process received signal ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] Signal: Abort trap (6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] Signal code:  (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [ 0] 2   libSystem.B.dylib                   0x00007fff833e435a _sigtramp + 26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [ 1] 3   ???                                 0x00007fff5fbff500 0x0 + 140734799803648
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [ 2] 4   libstdc++.6.dylib                   0x00007fff80e525d2 __tcf_0 + 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [ 3] 5   libobjc.A.dylib                     0x00007fff85185d29 _objc_terminate + 100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [ 4] 6   libstdc++.6.dylib                   0x00007fff80e50ae1 _ZN10__cxxabiv111__terminateEPFvvE + 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [ 5] 7   libstdc++.6.dylib                   0x00007fff80e50b16 _ZN10__cxxabiv112__unexpectedEPFvvE + 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [ 6] 8   libstdc++.6.dylib                   0x00007fff80e50bfc _ZL23__gxx_exception_cleanup19_Unwind_Reason_CodeP17_Unwind_Exception + 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [ 7] 9   libobjc.A.dylib                     0x00007fff85182192 object_getIvar + 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [ 8] 10  CoreFoundation                      0x00007fff8120d9f1 -[NSObject(NSObject) finalize] + 129
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [ 9] 11  mca_pls_xgrid.so                    0x0000000100297ce3 -[PlsXGridClient dealloc] + 419
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [10] 12  mca_pls_xgrid.so                    0x0000000100297837 orte_pls_xgrid_finalize + 40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [11] 13  libopen-rte.0.dylib                 0x000000010002d0f9 orte_pls_base_close + 249
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [12] 14  libopen-rte.0.dylib                 0x0000000100012027 orte_system_finalize + 119
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [13] 15  libopen-rte.0.dylib                 0x000000010000e968 orte_finalize + 40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [14] 16  mpirun                              0x00000001000011ff orterun + 2042
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [15] 17  mpirun                              0x0000000100000a03 main + 27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [16] 18  mpirun                              0x00000001000009e0 start + 52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] [17] 19  ???                                 0x0000000000000004 0x0 + 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[bigmac:00949] *** End of error message ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abort trap
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the case of OpenMPI 1.4.2, I get even worse errors.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I do not know if this is an XGrid problem or a OMPI problem.  But, it is definitely producing trouble.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now some have suggested, having XGrid drive OpenMPI, but if XGRID_CONTROLLER_HOSTNAME is set, then how will OpenMPI not try to use XGrid as the launcher?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any ideas as to how to fix this?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daniel Beatty
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computer Scientist, Detonation Sciences Branch
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Code 4743000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2400 E. Pilot Plant Rd.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;China Lake, CA 93555-6107
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;daniel.beatty_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(760) 939-7097
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13878/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13879.php">LB: "[OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>Previous message:</strong> <a href="13877.php">Ralph Castain: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
<li><strong>In reply to:</strong> <a href="13877.php">Ralph Castain: "Re: [OMPI users] Trouble running OpenMPI compiled for x86_64 (either m32 or m64)"</a>
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

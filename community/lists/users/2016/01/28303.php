<?
$subject_val = "Re: [OMPI users] Singleton process spawns additional thread";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 12:08:48 2016" -->
<!-- isoreceived="20160119170848" -->
<!-- sent="Tue, 19 Jan 2016 09:08:45 -0800" -->
<!-- isosent="20160119170845" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Singleton process spawns additional thread" -->
<!-- id="90B28FB0-B0F8-4C3A-B1F3-2FB0CCCF97B8_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="52840B9E-3E52-476E-A54B-C77850759E29_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Singleton process spawns additional thread<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-19 12:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28304.php">Udayanga Wickramasinghe: "[OMPI users] Using OpenMPI Thread Multiple mode"</a>
<li><strong>Previous message:</strong> <a href="28302.php">Howard Pritchard: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28241.php">Ralph Castain: "Re: [OMPI users] Singleton process spawns additional thread"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay - I have tracked this down and fixed it. The fix will be included in 1.10.2.
<br>
<p>Thanks for bringing it to our attention!
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Jan 7, 2016, at 9:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A singleton will indeed have an extra thread, but it should be quiescent. I&#226;&#128;&#153;ll check the 1.10.2 release candidate and see if it still exhibits that behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 7, 2016, at 9:32 PM, Au Eelis &lt;aueelis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is in so far related, that one of these threads is actually doing something.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Btw, I noticed this on two separate machines! A computing cluster with admin-built openmpi and Archlinux with openmpi from the repositories.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, running the code with openmpi 1.6.2 and ifort 13.0.0 does not show this behaviour.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Stefan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 01/07/2016 03:27 PM, Sasso, John (GE Power, Non-GE) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stefan,  I don't know if this is related to your issue, but FYI...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Those are async progress threads - they block unless something requires doing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 15, 2015, at 8:36 AM, Sasso, John (GE Power &amp; Water, Non-GE) &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I stumbled upon something while using 'ps -eFL' to view threads of processes, and Google searches have failed to answer my question.  This question holds for OpenMPI 1.6.x and even OpenMPI 1.4.x.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For a program which is pure MPI (built and run using OpenMPI) and does not implement Pthreads or OpenMP, why is it that each MPI task appears as having 3 threads:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; UID      PID  PPID   LWP  C NLWP    SZ   RSS PSR STIME TTY          TIME CMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sasso  20512 20493 20512 99    3 187849 582420 14 11:01 ?       00:26:37 /home/sasso/mpi_example.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sasso  20512 20493 20588  0    3 187849 582420 11 11:01 ?       00:00:00 /home/sasso/mpi_example.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sasso  20512 20493 20599  0    3 187849 582420 12 11:01 ?       00:00:00 /home/sasso/mpi_example.exe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; whereas if I compile and run a non-MPI program, 'ps -eFL' shows it running as a single thread?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Granted the CPU utilization (C) for 2 of the 3 threads is zero, but the threads are bound to different processors (11,12,14).   I am curious as to why this is, and no complaining that there is a problem.  Thanks!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --john
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Au Eelis
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, January 07, 2016 7:10 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] Singleton process spawns additional thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a weird problem with executing a singleton OpenMPI program, where an additional thread causes full load, while the master thread performs the actual calculations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In contrast, executing &quot;mpirun -np 1 [executable]&quot; performs the same calculation at the same speed but the additional thread is idling.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my understanding, both calculations should behave in the same way (i.e., one working thread) for a program which is simply moving some data around (mainly some MPI_BCAST and MPI_GATHER commands).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could observe this behaviour in OpenMPI 1.10.1 with ifort 16.0.1 and gfortran 5.3.0. I could create a minimal working example, which is appended to this mail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I missing something?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stefan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MWE: Compile this with &quot;mpifort main.f90&quot;. When executing with &quot;./a.out&quot;, there is thread wasting cycles, while the master thread waits for input. When executing with &quot;mpirun -np 1 ./a.out&quot; this thread is idling.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program main
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     use mpi_f08
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     integer :: ierror,rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call MPI_Init(ierror)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call MPI_Comm_Rank(MPI_Comm_World,rank,ierror)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ! let master thread wait on [RETURN]-key
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (rank == 0) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         read(*,*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     end if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     write(*,*) rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call mpi_barrier(mpi_comm_world, ierror) end program _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_mailman_listinfo.cgi_users&amp;d=CwICAg&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=NPeEHKik35WrcHGDl5ZRq4IC6Le5g03o5YoqD9InrHw&amp;s=eRYTNaknio7tNJFd">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_mailman_listinfo.cgi_users&amp;d=CwICAg&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=NPeEHKik35WrcHGDl5ZRq4IC6Le5g03o5YoqD9InrHw&amp;s=eRYTNaknio7tNJFd</a>OMTqvdlNNIq9p6evJoQxuvmqrLs&amp;e=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_community_lists_users_2016_01_28237.php&amp;d=CwICAg&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=NPeEHKik35WrcHGDl5ZRq4IC6Le5g03o5YoqD9InrHw&amp;s=2_a">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_community_lists_users_2016_01_28237.php&amp;d=CwICAg&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=NPeEHKik35WrcHGDl5ZRq4IC6Le5g03o5YoqD9InrHw&amp;s=2_a</a>xdls1JH4Wm5MlkOXRrtXFb2LLVLCleKVx4ybpltU&amp;e=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28238.php">http://www.open-mpi.org/community/lists/users/2016/01/28238.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28240.php">http://www.open-mpi.org/community/lists/users/2016/01/28240.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28304.php">Udayanga Wickramasinghe: "[OMPI users] Using OpenMPI Thread Multiple mode"</a>
<li><strong>Previous message:</strong> <a href="28302.php">Howard Pritchard: "Re: [OMPI users] How to allocate more memory to java OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28241.php">Ralph Castain: "Re: [OMPI users] Singleton process spawns additional thread"</a>
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

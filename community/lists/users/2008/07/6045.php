<?
$subject_val = "Re: [OMPI users] Strange problem with 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 04:01:39 2008" -->
<!-- isoreceived="20080711080139" -->
<!-- sent="Fri, 11 Jul 2008 10:01:30 +0200" -->
<!-- isosent="20080711080130" -->
<!-- name="Willem Vermin" -->
<!-- email="willem_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with 1.2.6" -->
<!-- id="4877135A.5040703_at_sara.nl" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4876CDBE.2030004_at_scalableinformatics.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange problem with 1.2.6<br>
<strong>From:</strong> Willem Vermin (<em>willem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 04:01:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6046.php">Aditya Vasal: "[OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Previous message:</strong> <a href="6044.php">Matthias Hovestadt: "[OMPI users] OMPI and mpipov"</a>
<li><strong>In reply to:</strong> <a href="6043.php">Joe Landman: "[OMPI users] Strange problem with 1.2.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6077.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Joe,
<br>
<p>I have no solution, but the same problem, see
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/07/6007.php">http://www.open-mpi.org/community/lists/users/2008/07/6007.php</a>
<br>
There you will find a small program to demonstrate the problem.
<br>
<p>I found that the problem does not exists on all hardware, I have the 
<br>
impression that the problem manifests itself on systems with 2 or more 
<br>
cores. I tried it on a single core machine, and there was no problem.
<br>
<p>Regards,
<br>
<p>Willem
<br>
<p>Joe Landman wrote:
<br>
<span class="quotelev1">&gt; Hi folks:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I am running into a strange problem with Open-MPI 1.2.6, built using
</span><br>
<span class="quotelev1">&gt; gcc/g++ and intel ifort 10.1.015, atop an OFED stack (1.1-ish).  The
</span><br>
<span class="quotelev1">&gt; problem appears to be that if I run using the tcp btl, disabling sm and
</span><br>
<span class="quotelev1">&gt; openib, the run completes successfully (on several different platforms),
</span><br>
<span class="quotelev1">&gt; and does so repeatably.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Similarly, if I enable either openib or sm btl, the run does not
</span><br>
<span class="quotelev1">&gt; complete, hanging at different places.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    An strace of the master thread while it is hanging shows it in a
</span><br>
<span class="quotelev1">&gt; tight loop
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 15547 attached - interrupt to quit
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x2b8d766be130}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=
</span><br>
<span class="quotelev1">&gt; POLLIN}, {fd=10, events=POLLIN}], 6, 0) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x2b8d766be130}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x2b8d766be130}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev1">&gt; events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=
</span><br>
<span class="quotelev1">&gt; POLLIN}, {fd=10, events=POLLIN}], 6, 0) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev1">&gt; 0x2b8d766be130}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code ran fine about 18 months ago with earlier OpenMPI.  This is
</span><br>
<span class="quotelev1">&gt; identical source and data to what is known to work, and demonstrated to
</span><br>
<span class="quotelev1">&gt; work on a few different platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Posing the question on Beowulf, some suggested turning off sm and
</span><br>
<span class="quotelev1">&gt; openib.  So this run works repeatedly when we do as indicated.  The
</span><br>
<span class="quotelev1">&gt; suggestion was that there was some sort of buffer size issue on the sm
</span><br>
<span class="quotelev1">&gt; device.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Turning off sm and tcp, leaving openib also appears to loop forever.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, with all this, are there any sort of tunables that I should be
</span><br>
<span class="quotelev1">&gt; playing with?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried adusting a few things  by setting some mca parameters in
</span><br>
<span class="quotelev1">&gt; $HOME/.openmpi/mca-params.conf , but this had no effect (and the mpirun
</span><br>
<span class="quotelev1">&gt; claimed it was going to ignore those anyway).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any clues?  Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Joe
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joseph Landman, Ph.D
</span><br>
<span class="quotelev1">&gt; Founder and CEO
</span><br>
<span class="quotelev1">&gt; Scalable Informatics LLC,
</span><br>
<span class="quotelev1">&gt; email: landman_at_[hidden]
</span><br>
<span class="quotelev1">&gt; web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
</span><br>
<span class="quotelev1">&gt;         <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
</span><br>
<span class="quotelev1">&gt; phone: +1 734 786 8423
</span><br>
<span class="quotelev1">&gt; fax  : +1 866 888 3112
</span><br>
<span class="quotelev1">&gt; cell : +1 734 612 4615
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Willem Vermin         tel (31)20 5923054/5923000
SARA, Kruislaan 415   fax (31)20 6683167
1098 SJ Amsterdam     willem_at_[hidden]
Nederland
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6046.php">Aditya Vasal: "[OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Previous message:</strong> <a href="6044.php">Matthias Hovestadt: "[OMPI users] OMPI and mpipov"</a>
<li><strong>In reply to:</strong> <a href="6043.php">Joe Landman: "[OMPI users] Strange problem with 1.2.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6077.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
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

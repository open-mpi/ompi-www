<?
$subject_val = "Re: [OMPI users] Strange problem with 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 10:04:37 2008" -->
<!-- isoreceived="20080714140437" -->
<!-- sent="Mon, 14 Jul 2008 17:04:30 +0300" -->
<!-- isosent="20080714140430" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with 1.2.6" -->
<!-- id="453d39990807140704o4a15581ch3827ddcb08dd4bba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8145C957-2A04-4530-8BBB-B08BD640335A_at_cisco.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 10:04:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6079.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="6077.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="6077.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6079.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Reply:</strong> <a href="6079.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
maybe it's related to #1378  PML ob1 deadlock for ping/ping  ?
<br>
<p>On 7/14/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What application is it?  The majority of the message passing engine did not
</span><br>
<span class="quotelev1">&gt; change in the 1.2 series; we did add a new option into 1.2.6 for disabling
</span><br>
<span class="quotelev1">&gt; early completion:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See if that helps you out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I don't think many (any?) of us developers monitor the beowulf
</span><br>
<span class="quotelev1">&gt; list.  Too much mail in our INBOXes already... :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2008, at 11:04 PM, Joe Landman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi folks:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I am running into a strange problem with Open-MPI 1.2.6, built using
</span><br>
<span class="quotelev2">&gt;&gt; gcc/g++ and intel ifort 10.1.015, atop an OFED stack (1.1-ish).  The problem
</span><br>
<span class="quotelev2">&gt;&gt; appears to be that if I run using the tcp btl, disabling sm and openib, the
</span><br>
<span class="quotelev2">&gt;&gt; run completes successfully (on several different platforms), and does so
</span><br>
<span class="quotelev2">&gt;&gt; repeatably.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Similarly, if I enable either openib or sm btl, the run does not
</span><br>
<span class="quotelev2">&gt;&gt; complete, hanging at different places.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  An strace of the master thread while it is hanging shows it in a tight
</span><br>
<span class="quotelev2">&gt;&gt; loop
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 15547 attached - interrupt to quit
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev2">&gt;&gt; 0x2b8d766be130}, NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN},
</span><br>
<span class="quotelev2">&gt;&gt; {fd=8, events=POLLIN}, {fd=9, events=
</span><br>
<span class="quotelev2">&gt;&gt; POLLIN}, {fd=10, events=POLLIN}], 6, 0) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev2">&gt;&gt; 0x2b8d766be130}, NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev2">&gt;&gt; 0x2b8d766be130}, NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN},
</span><br>
<span class="quotelev2">&gt;&gt; {fd=8, events=POLLIN}, {fd=9, events=
</span><br>
<span class="quotelev2">&gt;&gt; POLLIN}, {fd=10, events=POLLIN}], 6, 0) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART,
</span><br>
<span class="quotelev2">&gt;&gt; 0x2b8d766be130}, NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code ran fine about 18 months ago with earlier OpenMPI.  This is
</span><br>
<span class="quotelev2">&gt;&gt; identical source and data to what is known to work, and demonstrated to work
</span><br>
<span class="quotelev2">&gt;&gt; on a few different platforms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Posing the question on Beowulf, some suggested turning off sm and openib.
</span><br>
<span class="quotelev2">&gt;&gt;  So this run works repeatedly when we do as indicated.  The suggestion was
</span><br>
<span class="quotelev2">&gt;&gt; that there was some sort of buffer size issue on the sm device.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Turning off sm and tcp, leaving openib also appears to loop forever.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, with all this, are there any sort of tunables that I should be playing
</span><br>
<span class="quotelev2">&gt;&gt; with?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried adusting a few things  by setting some mca parameters in
</span><br>
<span class="quotelev2">&gt;&gt; $HOME/.openmpi/mca-params.conf , but this had no effect (and the mpirun
</span><br>
<span class="quotelev2">&gt;&gt; claimed it was going to ignore those anyway).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any clues?  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Joe
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joseph Landman, Ph.D
</span><br>
<span class="quotelev2">&gt;&gt; Founder and CEO
</span><br>
<span class="quotelev2">&gt;&gt; Scalable Informatics LLC,
</span><br>
<span class="quotelev2">&gt;&gt; email: landman_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; phone: +1 734 786 8423
</span><br>
<span class="quotelev2">&gt;&gt; fax  : +1 866 888 3112
</span><br>
<span class="quotelev2">&gt;&gt; cell : +1 734 612 4615
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6078/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6079.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="6077.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="6077.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6079.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Reply:</strong> <a href="6079.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
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

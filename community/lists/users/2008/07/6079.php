<?
$subject_val = "Re: [OMPI users] Strange problem with 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 10:07:13 2008" -->
<!-- isoreceived="20080714140713" -->
<!-- sent="Mon, 14 Jul 2008 10:07:06 -0400" -->
<!-- isosent="20080714140706" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with 1.2.6" -->
<!-- id="8AA78B24-8EAF-4DDF-BDDE-0BECB7216365_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990807140704o4a15581ch3827ddcb08dd4bba_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 10:07:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6080.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6078.php">Lenny Verkhovsky: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="6078.php">Lenny Verkhovsky: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't believe so -- as I understand that ticket, it's a problem on  
<br>
the trunk only, due to changes in ob1 that have occurred since the 1.2  
<br>
series.
<br>
<p><p>On Jul 14, 2008, at 10:04 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; maybe it's related to #1378  PML ob1 deadlock for ping/ping  ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/14/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: What  
</span><br>
<span class="quotelev1">&gt; application is it?  The majority of the message passing engine did  
</span><br>
<span class="quotelev1">&gt; not change in the 1.2 series; we did add a new option into 1.2.6 for  
</span><br>
<span class="quotelev1">&gt; disabling early completion:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See if that helps you out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I don't think many (any?) of us developers monitor the  
</span><br>
<span class="quotelev1">&gt; beowulf list.  Too much mail in our INBOXes already... :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2008, at 11:04 PM, Joe Landman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi folks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am running into a strange problem with Open-MPI 1.2.6, built  
</span><br>
<span class="quotelev1">&gt; using gcc/g++ and intel ifort 10.1.015, atop an OFED stack (1.1- 
</span><br>
<span class="quotelev1">&gt; ish).  The problem appears to be that if I run using the tcp btl,  
</span><br>
<span class="quotelev1">&gt; disabling sm and openib, the run completes successfully (on several  
</span><br>
<span class="quotelev1">&gt; different platforms), and does so repeatably.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Similarly, if I enable either openib or sm btl, the run does not  
</span><br>
<span class="quotelev1">&gt; complete, hanging at different places.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  An strace of the master thread while it is hanging shows it in a  
</span><br>
<span class="quotelev1">&gt; tight loop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 15547 attached - interrupt to quit
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x2b8d766be130}, NULL, 8) = 0
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
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x2b8d766be130}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x2b8d766be130}, NULL, 8) = 0
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
<span class="quotelev1">&gt; rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER| 
</span><br>
<span class="quotelev1">&gt; SA_RESTART, 0x2b8d766be130}, NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt; rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code ran fine about 18 months ago with earlier OpenMPI.  This is  
</span><br>
<span class="quotelev1">&gt; identical source and data to what is known to work, and demonstrated  
</span><br>
<span class="quotelev1">&gt; to work on a few different platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Posing the question on Beowulf, some suggested turning off sm and  
</span><br>
<span class="quotelev1">&gt; openib.  So this run works repeatedly when we do as indicated.  The  
</span><br>
<span class="quotelev1">&gt; suggestion was that there was some sort of buffer size issue on the  
</span><br>
<span class="quotelev1">&gt; sm device.
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
<span class="quotelev1">&gt; $HOME/.openmpi/mca-params.conf , but this had no effect (and the  
</span><br>
<span class="quotelev1">&gt; mpirun claimed it was going to ignore those anyway).
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
<span class="quotelev1">&gt;      <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6080.php">Tom Riddle: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6078.php">Lenny Verkhovsky: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="6078.php">Lenny Verkhovsky: "Re: [OMPI users] Strange problem with 1.2.6"</a>
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

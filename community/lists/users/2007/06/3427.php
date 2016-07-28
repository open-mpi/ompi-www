<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 10 12:09:44 2007" -->
<!-- isoreceived="20070610160944" -->
<!-- sent="Sun, 10 Jun 2007 09:09:40 -0700 (PDT)" -->
<!-- isosent="20070610160940" -->
<!-- name="victor marian" -->
<!-- email="vctrmarian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running MPI on a dual-core pentium D" -->
<!-- id="169290.61911.qm_at_web55811.mail.re3.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="15536B24-1612-461F-A9C0-589FCC9E6956_at_umich.edu" -->
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
<strong>From:</strong> victor marian (<em>vctrmarian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-10 12:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3428.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3426.php">Brock Palen: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3426.php">Brock Palen: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3428.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3428.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that my executable file runs on the
<br>
Pentium D in 80 seconds on two cores and in 25 seconds
<br>
on one core.
<br>
And on another Sun SMP machine with 20 processors it
<br>
runs perfectly (the problem is perfectly scallable).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Victor Marian
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laboratory of Machine Elements and Tribology
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University Politehnica of Bucharest
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Romania
<br>
<p><p>--- Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It means that your OMPI was compiled to support
</span><br>
<span class="quotelev1">&gt; uDAPL  (a type of  
</span><br>
<span class="quotelev1">&gt; infinibad network)  but that your computer does not
</span><br>
<span class="quotelev1">&gt; have such a card  
</span><br>
<span class="quotelev1">&gt; installed.  Because you dont it will fall back to
</span><br>
<span class="quotelev1">&gt; ethernet.  But  
</span><br>
<span class="quotelev1">&gt; because you are just running on a single machine. 
</span><br>
<span class="quotelev1">&gt; You will use the  
</span><br>
<span class="quotelev1">&gt; fastest form of communication using shared memory. 
</span><br>
<span class="quotelev1">&gt; so you can ignore  
</span><br>
<span class="quotelev1">&gt; that message.  Unless in the future you add a uDAPL
</span><br>
<span class="quotelev1">&gt; powered network  
</span><br>
<span class="quotelev1">&gt; and you still get that message then you need to
</span><br>
<span class="quotelev1">&gt; worry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 10, 2007, at 9:18 AM, victor marian wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a Pentium D computer with Solaris 10
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<span class="quotelev2">&gt; &gt; I installed OpenMPI, succesfully compiled my
</span><br>
<span class="quotelev1">&gt; Fortran
</span><br>
<span class="quotelev2">&gt; &gt; program, but when giving
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 progexe
</span><br>
<span class="quotelev2">&gt; &gt; I receive
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0]: uDAPL on host SERVSOLARIS was unable to
</span><br>
<span class="quotelev1">&gt; find
</span><br>
<span class="quotelev2">&gt; &gt; any NICs.
</span><br>
<span class="quotelev2">&gt; &gt; Another transport will be used instead, although
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt; &gt; may result in
</span><br>
<span class="quotelev2">&gt; &gt; lower performance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am a begginer in MPI and don't know what it
</span><br>
<span class="quotelev1">&gt; means.
</span><br>
<span class="quotelev2">&gt; &gt; What
</span><br>
<span class="quotelev2">&gt; &gt;  should I do to solve the problem?
</span><br>
<span class="quotelev2">&gt; &gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
______________________________________________________________________
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ______________
</span><br>
<span class="quotelev2">&gt; &gt; Moody friends. Drama queens. Your life? Nope! -
</span><br>
<span class="quotelev1">&gt; their life, your  
</span><br>
<span class="quotelev2">&gt; &gt; story. Play Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________
<br>
Moody friends. Drama queens. Your life? Nope! - their life, your story. Play Sims Stories at Yahoo! Games.
<br>
<a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>  
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3428.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3426.php">Brock Palen: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3426.php">Brock Palen: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3428.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3428.php">Jeff Pummill: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 10 11:51:53 2007" -->
<!-- isoreceived="20070610155153" -->
<!-- sent="Sun, 10 Jun 2007 11:50:49 -0400" -->
<!-- isosent="20070610155049" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running MPI on a dual-core pentium D" -->
<!-- id="15536B24-1612-461F-A9C0-589FCC9E6956_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="707933.5913.qm_at_web55810.mail.re3.yahoo.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-10 11:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3427.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3425.php">victor marian: "[OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3425.php">victor marian: "[OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3427.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3427.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3444.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It means that your OMPI was compiled to support uDAPL  (a type of  
<br>
infinibad network)  but that your computer does not have such a card  
<br>
installed.  Because you dont it will fall back to ethernet.  But  
<br>
because you are just running on a single machine.  You will use the  
<br>
fastest form of communication using shared memory.  so you can ignore  
<br>
that message.  Unless in the future you add a uDAPL powered network  
<br>
and you still get that message then you need to worry.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jun 10, 2007, at 9:18 AM, victor marian wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a Pentium D computer with Solaris 10 installed.
</span><br>
<span class="quotelev1">&gt; I installed OpenMPI, succesfully compiled my Fortran
</span><br>
<span class="quotelev1">&gt; program, but when giving
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 progexe
</span><br>
<span class="quotelev1">&gt; I receive
</span><br>
<span class="quotelev1">&gt; [0,1,0]: uDAPL on host SERVSOLARIS was unable to find
</span><br>
<span class="quotelev1">&gt; any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this
</span><br>
<span class="quotelev1">&gt; may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a begginer in MPI and don't know what it means.
</span><br>
<span class="quotelev1">&gt; What
</span><br>
<span class="quotelev1">&gt;  should I do to solve the problem?
</span><br>
<span class="quotelev1">&gt; Thank you.
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
<span class="quotelev1">&gt; ______________________________________________________________________ 
</span><br>
<span class="quotelev1">&gt; ______________
</span><br>
<span class="quotelev1">&gt; Moody friends. Drama queens. Your life? Nope! - their life, your  
</span><br>
<span class="quotelev1">&gt; story. Play Sims Stories at Yahoo! Games.
</span><br>
<span class="quotelev1">&gt; <a href="http://sims.yahoo.com/">http://sims.yahoo.com/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3427.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Previous message:</strong> <a href="3425.php">victor marian: "[OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>In reply to:</strong> <a href="3425.php">victor marian: "[OMPI users] Problem running MPI on a dual-core pentium D"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3427.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3427.php">victor marian: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
<li><strong>Reply:</strong> <a href="3444.php">Don Kerr: "Re: [OMPI users] Problem running MPI on a dual-core pentium D"</a>
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

<?
$subject_val = "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 17:29:06 2008" -->
<!-- isoreceived="20080425212906" -->
<!-- sent="Fri, 25 Apr 2008 17:28:58 -0400" -->
<!-- isosent="20080425212858" -->
<!-- name="Gregory John Orris" -->
<!-- email="gregory.orris_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!" -->
<!-- id="17956A61-7040-42E9-A162-E67A2963EF43_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C9986452-B565-454D-8F79-E7C5E0571A19_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!<br>
<strong>From:</strong> Gregory John Orris (<em>gregory.orris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 17:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5533.php">Warner Yuen: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Previous message:</strong> <a href="5531.php">Audet, Martin: "Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!"</a>
<li><strong>In reply to:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5533.php">Warner Yuen: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
Thanks, and my apologies.
<br>
This is an issue once known to me on an old CRAY/SGI, but lost in the  
<br>
mists of time (&gt;10 years). Stack size increase did the trick. Of  
<br>
course putting everything on the heap via new and malloc would work  
<br>
for arrays, but that creates such an inelegant looking code.
<br>
<p>Couple of things though, 1. Default stack size on our Linux boxes is  
<br>
10240 while on Leopard it's 8192. Not much of a difference. Could not  
<br>
increase stack size beyond 32kB (not that I'll need that much) on  
<br>
Leopard?!? 2. Problem seemed to only occur within OMPI at the level of  
<br>
memory usage I was incurring. I'm assuming more stack is chewed up in  
<br>
overhead as compared to serial code. Yes/No?
<br>
<p>Again sorry for the faulty memory and seemingly stupid question!
<br>
<p>Regards,
<br>
Greg
<br>
<p>On Apr 25, 2008, at 4:10 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 25, 2008, at 2:06 PM, Gregory John Orris wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; produces a core dump on a machine with 12Gb of RAM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the error message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that job rank 0 with PID 75545 on node mymachine.com
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 4 (Illegal instruction).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, substituting in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; float *X = new float[n];
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; float X[n];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Succeeds!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're running off the end of the stack, because of the large amount
</span><br>
<span class="quotelev1">&gt; of data you're trying to put there.  OS X by default has a tiny stack
</span><br>
<span class="quotelev1">&gt; size, so codes that run on Linux (which defaults to a much larger
</span><br>
<span class="quotelev1">&gt; stack size) sometimes show this problem.  Your best bets are either to
</span><br>
<span class="quotelev1">&gt; increase the max stack size or (more portably) just allocate
</span><br>
<span class="quotelev1">&gt; everything on the heap with malloc/new.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;   Open MPI developer
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5533.php">Warner Yuen: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Previous message:</strong> <a href="5531.php">Audet, Martin: "Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!"</a>
<li><strong>In reply to:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5533.php">Warner Yuen: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
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

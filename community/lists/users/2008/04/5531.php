<?
$subject_val = "Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 16:44:49 2008" -->
<!-- isoreceived="20080425204449" -->
<!-- sent="Fri, 25 Apr 2008 16:43:46 -0400" -->
<!-- isosent="20080425204346" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!" -->
<!-- id="9D96C3B9C12B4C4A9BD31761B4F8241029D110A220_at_imibou-nt-1-ex.IMI.LOCAL" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory question and possible bug in 64bit	addressing under Leopard!<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 16:43:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5532.php">Gregory John Orris: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Previous message:</strong> <a href="5530.php">Michael: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>In reply to:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5532.php">Gregory John Orris: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has nothing to do with the segmentation fault you got but in addition to Brian comment, I would suggest you to not forget that with ISO C++ (the C++98 standard and the upcoming C++0x) a constant expression known at compile time is needed for dimensions of local arrays.
<br>
<p>In other words, a construct like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int n = 10000000;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float X[n];
<br>
<p>isn't standard compliant because n isn't a constant expression. It compile only because it is a g++ extension (try this with Visual C++ for example). A construct like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int n = 10000000;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float X[n];
<br>
<p>however is standard compliant since n is a constant expression known at compile time.
<br>
<p>Variable length arrays would allow setting dimensions of local arrays using any integral expression (whether or not it is constant or known at compile time). This feature was added to the ISO C language in the C99 standard but not in C++.
<br>
<p>Martin
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Brian Barrett
<br>
Sent: April 25, 2008 16:11
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!
<br>
<p>On Apr 25, 2008, at 2:06 PM, Gregory John Orris wrote:
<br>
<p><span class="quotelev1">&gt; produces a core dump on a machine with 12Gb of RAM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the error message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 0 with PID 75545 on node mymachine.com
</span><br>
<span class="quotelev1">&gt; exited on signal 4 (Illegal instruction).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, substituting in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; float *X = new float[n];
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; float X[n];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Succeeds!
</span><br>
<p><p>You're running off the end of the stack, because of the large amount
<br>
of data you're trying to put there.  OS X by default has a tiny stack
<br>
size, so codes that run on Linux (which defaults to a much larger
<br>
stack size) sometimes show this problem.  Your best bets are either to
<br>
increase the max stack size or (more portably) just allocate
<br>
everything on the heap with malloc/new.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
--
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5532.php">Gregory John Orris: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Previous message:</strong> <a href="5530.php">Michael: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>In reply to:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5532.php">Gregory John Orris: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
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

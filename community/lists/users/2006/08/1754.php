<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 17 19:01:05 2006" -->
<!-- isoreceived="20060817230105" -->
<!-- sent="Thu, 17 Aug 2006 17:00:40 -0600" -->
<!-- isosent="20060817230040" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h - not conforming to C90 spec" -->
<!-- id="C0C1D12B-9F28-4BE7-9A9C-1B35866058C6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="645d17210608171543n14972120ua7bc3a8b28ea6bf3_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-17 19:00:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1755.php">Jonathan Underwood: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
<li><strong>Previous message:</strong> <a href="1753.php">Jonathan Underwood: "[OMPI users] mpi.h - not conforming to C90 spec"</a>
<li><strong>In reply to:</strong> <a href="1753.php">Jonathan Underwood: "[OMPI users] mpi.h - not conforming to C90 spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1755.php">Jonathan Underwood: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
<li><strong>Reply:</strong> <a href="1755.php">Jonathan Underwood: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2006, at 4:43 PM, Jonathan Underwood wrote:
<br>
<p><span class="quotelev1">&gt; Compiling an mpi program with gcc options -pedantic -Wall gives the
</span><br>
<span class="quotelev1">&gt; following warning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi.h:147: warning: ISO C90 does not support 'long long'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it seems that the openmpi implementation doesn't conform to C90. Is
</span><br>
<span class="quotelev1">&gt; this by design, or should it be reported as a bug?
</span><br>
<p>Well, MPI_LONG_LONG is a type we're supposed to support, and that  
<br>
means having 'long long' in the mpi.h file.  I'm not really sure how  
<br>
to get around this, especially since there are a bunch of users out  
<br>
there that rely on MPI_LONG_LONG to send 64 bit integers around on 32  
<br>
bit platforms.  So I suppose that it's by design.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1755.php">Jonathan Underwood: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
<li><strong>Previous message:</strong> <a href="1753.php">Jonathan Underwood: "[OMPI users] mpi.h - not conforming to C90 spec"</a>
<li><strong>In reply to:</strong> <a href="1753.php">Jonathan Underwood: "[OMPI users] mpi.h - not conforming to C90 spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1755.php">Jonathan Underwood: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
<li><strong>Reply:</strong> <a href="1755.php">Jonathan Underwood: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
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

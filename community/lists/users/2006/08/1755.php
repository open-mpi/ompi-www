<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 17 19:10:17 2006" -->
<!-- isoreceived="20060817231017" -->
<!-- sent="Fri, 18 Aug 2006 00:10:16 +0100" -->
<!-- isosent="20060817231016" -->
<!-- name="Jonathan Underwood" -->
<!-- email="jonathan.underwood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h - not conforming to C90 spec" -->
<!-- id="645d17210608171610v13be8418k644a45a9fa34f94a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C0C1D12B-9F28-4BE7-9A9C-1B35866058C6_at_open-mpi.org" -->
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
<strong>From:</strong> Jonathan Underwood (<em>jonathan.underwood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-17 19:10:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1756.php">Steven A. DuChene: "[OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Previous message:</strong> <a href="1754.php">Brian Barrett: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
<li><strong>In reply to:</strong> <a href="1754.php">Brian Barrett: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 18/08/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Aug 17, 2006, at 4:43 PM, Jonathan Underwood wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Compiling an mpi program with gcc options -pedantic -Wall gives the
</span><br>
<span class="quotelev2">&gt; &gt; following warning:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpi.h:147: warning: ISO C90 does not support 'long long'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So it seems that the openmpi implementation doesn't conform to C90. Is
</span><br>
<span class="quotelev2">&gt; &gt; this by design, or should it be reported as a bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, MPI_LONG_LONG is a type we're supposed to support, and that
</span><br>
<span class="quotelev1">&gt; means having 'long long' in the mpi.h file.  I'm not really sure how
</span><br>
<span class="quotelev1">&gt; to get around this, especially since there are a bunch of users out
</span><br>
<span class="quotelev1">&gt; there that rely on MPI_LONG_LONG to send 64 bit integers around on 32
</span><br>
<span class="quotelev1">&gt; bit platforms.  So I suppose that it's by design.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, that seems reasonable.
<br>
<p>I wonder then if the non-C90 conforming parts should be surrounded
<br>
with #ifndef __STRICT_ANSI__  - this is predefined when gcc is
<br>
expecting C90 conforming code. I am not sure if this is portable to
<br>
other compilers however. Probably not.
<br>
<p>Best wishes,
<br>
Jonathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1756.php">Steven A. DuChene: "[OMPI users] building openmpi with gfortran and g95"</a>
<li><strong>Previous message:</strong> <a href="1754.php">Brian Barrett: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
<li><strong>In reply to:</strong> <a href="1754.php">Brian Barrett: "Re: [OMPI users] mpi.h - not conforming to C90 spec"</a>
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

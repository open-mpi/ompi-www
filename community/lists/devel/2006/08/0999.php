<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 21 03:15:03 2006" -->
<!-- isoreceived="20060821071503" -->
<!-- sent="Mon, 21 Aug 2006 09:14:57 +0200" -->
<!-- isosent="20060821071457" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI not conforming with the C90 spec?" -->
<!-- id="20060821071457.GC13341_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060819183815.GD2730_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-21 03:14:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1000.php">Ralf Wildenhues: "[OMPI devel] exit declaration in configure tests"</a>
<li><strong>Previous message:</strong> <a href="0998.php">Adrian Knoth: "[OMPI devel] A few notes on IPv6 status"</a>
<li><strong>In reply to:</strong> <a href="0997.php">Adrian Knoth: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1005.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Reply:</strong> <a href="1005.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Adrian, Jonathan,
<br>
<p>* Adrian Knoth wrote on Sat, Aug 19, 2006 at 08:38:15PM CEST:
<br>
<span class="quotelev1">&gt; On Thu, Aug 17, 2006 at 11:48:44PM +0100, Jonathan Underwood wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; Compiling a file with the gcc options -Wall and -pedantic gives the
</span><br>
<span class="quotelev2">&gt; &gt; following warning:
</span><br>
<span class="quotelev2">&gt; &gt; mpi.h:147: warning: ISO C90 does not support 'long long'
</span><br>
<span class="quotelev2">&gt; &gt; Is this intentional, or is this a bug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you do not insist on using C90, you may compile with -std=c99
</span><br>
<span class="quotelev1">&gt; to get rid of this message ;)
</span><br>
<p>More precisely, the OpenMPI installation that provides this mpi.h file
<br>
was compiled with 'long long' support, which quite undoubtedly is a
<br>
feature rather than a bug.  Users should not compile their code with
<br>
strict C89 settings.
<br>
<p><span class="quotelev1">&gt; I don't have the C90 (ANSI-C) at my fingertips, but I confirm it
</span><br>
<span class="quotelev1">&gt; does not support &quot;long long&quot;.
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Perhaps we should use int64_t instead.
</span><br>
<p>No, that would not help: int64_t is C99, so it should not be declared
<br>
either in C89 mode.  Also, the int64_t is required to have 64 bits, and
<br>
could thus theoretically be smaller than 'long long' (no, I don't think
<br>
any such systems exist today).
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1000.php">Ralf Wildenhues: "[OMPI devel] exit declaration in configure tests"</a>
<li><strong>Previous message:</strong> <a href="0998.php">Adrian Knoth: "[OMPI devel] A few notes on IPv6 status"</a>
<li><strong>In reply to:</strong> <a href="0997.php">Adrian Knoth: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1005.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Reply:</strong> <a href="1005.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
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

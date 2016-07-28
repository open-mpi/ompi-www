<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 21 08:39:57 2006" -->
<!-- isoreceived="20060821123957" -->
<!-- sent="Mon, 21 Aug 2006 06:39:51 -0600" -->
<!-- isosent="20060821123951" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI not conforming with the C90 spec?" -->
<!-- id="C10F05B7.3F70%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060821071457.GC13341_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-21 08:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1006.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Previous message:</strong> <a href="1004.php">Ralf Wildenhues: "Re: [OMPI devel] exit declaration in configure tests"</a>
<li><strong>In reply to:</strong> <a href="0999.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1006.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Reply:</strong> <a href="1006.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/21/06 1:14 AM, &quot;Ralf Wildenhues&quot; &lt;Ralf.Wildenhues_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps we should use int64_t instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, that would not help: int64_t is C99, so it should not be declared
</span><br>
<span class="quotelev1">&gt; either in C89 mode.  Also, the int64_t is required to have 64 bits, and
</span><br>
<span class="quotelev1">&gt; could thus theoretically be smaller than 'long long' (no, I don't think
</span><br>
<span class="quotelev1">&gt; any such systems exist today).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hmmm...this raises an interesting point. We had originally decided that we
<br>
would strictly be C90 compliant (I looked it up in the original planning
<br>
meeting minutes). However, over the last two years, at some point we decided
<br>
that we were abandoning all the checks in the code for HAVE_INT64, and just
<br>
hardcoding int64_t into the code base. I remember the discussion and the
<br>
feeling that we would only be supporting systems that have int64_t support.
<br>
<p>It sounds, therefore, like we are now C99 compliant and no longer C90
<br>
compliant at all?
<br>
<p>I don't know how big a deal that is, but if true it is something possibly
<br>
worth noting on our web site and in our release notes. The code will
<br>
definitely NOT compile unless int64_t is defined and supported.
<br>
<p>PS to Ralf: actually, quite a few systems exist today that do not support
<br>
long long or int64_t. The majority of computers in the world, in fact, do
<br>
not do so - they are in embedded systems. We decided that we were tasked
<br>
with supporting high-performance computing systems instead, and those are
<br>
now built almost exclusively from systems that DO support such structures.
<br>
Just a point of correctness... :-)
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1006.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Previous message:</strong> <a href="1004.php">Ralf Wildenhues: "Re: [OMPI devel] exit declaration in configure tests"</a>
<li><strong>In reply to:</strong> <a href="0999.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1006.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Reply:</strong> <a href="1006.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
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

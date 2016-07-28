<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 13:51:32 2011" -->
<!-- isoreceived="20111019175132" -->
<!-- sent="Wed, 19 Oct 2011 17:51:13 +0000" -->
<!-- isosent="20111019175113" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323" -->
<!-- id="CAC48407.740F%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="80E8C26F-0C64-4969-8F24-B12E642AE047_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 13:51:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9853.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9851.php">Jeff Squyres: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="9850.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9853.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9853.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I actually think it's worse than that.  An ORTE error code can now have
<br>
the same error code as an OMPI error.  OMPI_ERR_REQUEST and
<br>
ORTE_ERR_RECV_LESS_THANK_POSTED now share the same integer return code.
<br>
Or, they should, if George hadn't made a mistake (see below).  The sharing
<br>
of return codes seems... bad.
<br>
<p>Also, there's a bug in George's patch.  Error codes are all negative, so
<br>
OMPI_ERR_REQUEST should be OMPI_ERR_BASE -1 and OMPI_ERR_MAX should be
<br>
OMPI_ERR_BASE - 1, not plus 2.
<br>
<p>Brian
<br>
<p>On 10/19/11 1:32 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I've been wrestling with something from this commit, and I'm unsure of
</span><br>
<span class="quotelev1">&gt;the right answer. So please consider this a general design question for
</span><br>
<span class="quotelev1">&gt;the community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This commit removes all the OMPI &lt;-&gt; ORTE equivalent constants - i.e., we
</span><br>
<span class="quotelev1">&gt;used to declare OMPI-prefixed equivalents to every ORTE-prefixed
</span><br>
<span class="quotelev1">&gt;constant. I understand the thinking (or at least, what I suspect was the
</span><br>
<span class="quotelev1">&gt;thought), but it creates an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Suppose I have an ompi-level function (A) that calls another ompi-level
</span><br>
<span class="quotelev1">&gt;function (B). Invisible to A is that B calls an orte-level function. B
</span><br>
<span class="quotelev1">&gt;dutifully checks the error return from the orte-level function against an
</span><br>
<span class="quotelev1">&gt;ORTE-prefixed constant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However, if that return isn't &quot;success&quot;, what does B return up to A? It
</span><br>
<span class="quotelev1">&gt;cannot return the OMPI equivalent to the orte error constant because it
</span><br>
<span class="quotelev1">&gt;no longer exists. It could return the orte error code, but A has no way
</span><br>
<span class="quotelev1">&gt;of knowing it is going to get a non-OMPI constant, and therefore won't be
</span><br>
<span class="quotelev1">&gt;able to understand it - it will be an &quot;unrecognized error&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I guess one option is to require that B &quot;translate&quot; the return code and
</span><br>
<span class="quotelev1">&gt;pass some OMPI error up the chain, but this prevents anything upwards
</span><br>
<span class="quotelev1">&gt;from understanding the nature of the problem and potentially taking
</span><br>
<span class="quotelev1">&gt;corrective and/or alternative action. Seems awfully limiting, as most of
</span><br>
<span class="quotelev1">&gt;the time the only option will be the vanilla &quot;OMPI_ERROR&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thoughts?
</span><br>
<pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9853.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9851.php">Jeff Squyres: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="9850.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9853.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9853.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
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

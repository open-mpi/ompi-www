<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 14:09:38 2011" -->
<!-- isoreceived="20111019180938" -->
<!-- sent="Wed, 19 Oct 2011 14:09:20 -0400" -->
<!-- isosent="20111019180920" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323" -->
<!-- id="E7F08487-4A77-45B8-ACF4-E0C25D1BF389_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAC48407.740F%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 14:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9854.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9852.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>In reply to:</strong> <a href="9852.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9858.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9858.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9859.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oy, yes, that is bad -- we cannot have overlapping ORTE and OMPI error codes. That seems like a very bad idea (in addition to the mixing of + and -).
<br>
<p>For one thing, that breaks opal_strerror().  That, in itself, seems like a dealbreaker.
<br>
<p><p>On Oct 19, 2011, at 1:51 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; I actually think it's worse than that.  An ORTE error code can now have
</span><br>
<span class="quotelev1">&gt; the same error code as an OMPI error.  OMPI_ERR_REQUEST and
</span><br>
<span class="quotelev1">&gt; ORTE_ERR_RECV_LESS_THANK_POSTED now share the same integer return code.
</span><br>
<span class="quotelev1">&gt; Or, they should, if George hadn't made a mistake (see below).  The sharing
</span><br>
<span class="quotelev1">&gt; of return codes seems... bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, there's a bug in George's patch.  Error codes are all negative, so
</span><br>
<span class="quotelev1">&gt; OMPI_ERR_REQUEST should be OMPI_ERR_BASE -1 and OMPI_ERR_MAX should be
</span><br>
<span class="quotelev1">&gt; OMPI_ERR_BASE - 1, not plus 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/19/11 1:32 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've been wrestling with something from this commit, and I'm unsure of
</span><br>
<span class="quotelev2">&gt;&gt; the right answer. So please consider this a general design question for
</span><br>
<span class="quotelev2">&gt;&gt; the community.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This commit removes all the OMPI &lt;-&gt; ORTE equivalent constants - i.e., we
</span><br>
<span class="quotelev2">&gt;&gt; used to declare OMPI-prefixed equivalents to every ORTE-prefixed
</span><br>
<span class="quotelev2">&gt;&gt; constant. I understand the thinking (or at least, what I suspect was the
</span><br>
<span class="quotelev2">&gt;&gt; thought), but it creates an issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Suppose I have an ompi-level function (A) that calls another ompi-level
</span><br>
<span class="quotelev2">&gt;&gt; function (B). Invisible to A is that B calls an orte-level function. B
</span><br>
<span class="quotelev2">&gt;&gt; dutifully checks the error return from the orte-level function against an
</span><br>
<span class="quotelev2">&gt;&gt; ORTE-prefixed constant.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, if that return isn't &quot;success&quot;, what does B return up to A? It
</span><br>
<span class="quotelev2">&gt;&gt; cannot return the OMPI equivalent to the orte error constant because it
</span><br>
<span class="quotelev2">&gt;&gt; no longer exists. It could return the orte error code, but A has no way
</span><br>
<span class="quotelev2">&gt;&gt; of knowing it is going to get a non-OMPI constant, and therefore won't be
</span><br>
<span class="quotelev2">&gt;&gt; able to understand it - it will be an &quot;unrecognized error&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess one option is to require that B &quot;translate&quot; the return code and
</span><br>
<span class="quotelev2">&gt;&gt; pass some OMPI error up the chain, but this prevents anything upwards
</span><br>
<span class="quotelev2">&gt;&gt; from understanding the nature of the problem and potentially taking
</span><br>
<span class="quotelev2">&gt;&gt; corrective and/or alternative action. Seems awfully limiting, as most of
</span><br>
<span class="quotelev2">&gt;&gt; the time the only option will be the vanilla &quot;OMPI_ERROR&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9854.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9852.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>In reply to:</strong> <a href="9852.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9858.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9858.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9859.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
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

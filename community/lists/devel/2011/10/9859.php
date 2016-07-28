<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 16:50:32 2011" -->
<!-- isoreceived="20111019205032" -->
<!-- sent="Wed, 19 Oct 2011 16:50:21 -0400" -->
<!-- isosent="20111019205021" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323" -->
<!-- id="E270BBA1-50E4-4993-862C-05A943ED9CA5_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E7F08487-4A77-45B8-ACF4-E0C25D1BF389_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 16:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9860.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9858.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>In reply to:</strong> <a href="9853.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9861.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9861.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9862.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know how you think that the error codes work in Open MPI, so I'll take the liberty to depict it here so we all agree we're talking about the same thing.
<br>
<p>The opal_strerror is a nice feature, it allow to register a range of error codes with a particular error converter. Every time you look for the meaning of a particular error code, the first convertor with a range enveloping the looked at value, will translate it into an error string.
<br>
<p>This is only currently used by OPAL and ORTE directly. It worked at the OMPI level only because we mapped __all__ OMPI errors to OPAL or ORTE ones. This behavior didn't change after my patch, you can still use opal_strerror to get the error string for all OPAL/ORTE/OMPI errors.
<br>
<p>There is a small &quot;variation&quot; for OMPI_ERR_REQUEST, the only really OMPI specific error code today. The OMPI error codes are actually inserted between the OPAL and the ORTE ones (there is a gap of 100 elements), so there is __no__ possible overlap right now. If at one point we add more than 100 OMPI level, we should certainly revisit this.
<br>
<p>Now, resulting from my patch, there is a difference. One should not simply forward an ORTE code into the stack of OMPI, and hope it just works. Errors should be dealt with where they happens, and if not possible they should be translated into the actual layer error code. The error propagation should be compartmentalized, and has to be translated into an error code that has a meaning at the OMPI level. The current patch should not prevent the mixed error-code code to work, as opal_strerror retains the same behavior as before. However, this coding practice should be avoided. I tried to clean the current code of such instances few days ago in r25230.
<br>
<p>Moreover, this is similar to how we deal with the error codes between OMPI and MPI layers, and seems like a sane way to compose libraries. You deal with a specific layer error code when you get it (usually after the call to a function from that specific layer), not later on when you don't even know exactly what the execution path was.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>PS: I'll fix the +/- issue.
<br>
<p>On Oct 19, 2011, at 14:09 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Oy, yes, that is bad -- we cannot have overlapping ORTE and OMPI error codes. That seems like a very bad idea (in addition to the mixing of + and -).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For one thing, that breaks opal_strerror().  That, in itself, seems like a dealbreaker.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 19, 2011, at 1:51 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I actually think it's worse than that.  An ORTE error code can now have
</span><br>
<span class="quotelev2">&gt;&gt; the same error code as an OMPI error.  OMPI_ERR_REQUEST and
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERR_RECV_LESS_THANK_POSTED now share the same integer return code.
</span><br>
<span class="quotelev2">&gt;&gt; Or, they should, if George hadn't made a mistake (see below).  The sharing
</span><br>
<span class="quotelev2">&gt;&gt; of return codes seems... bad.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, there's a bug in George's patch.  Error codes are all negative, so
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_ERR_REQUEST should be OMPI_ERR_BASE -1 and OMPI_ERR_MAX should be
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_ERR_BASE - 1, not plus 2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 10/19/11 1:32 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been wrestling with something from this commit, and I'm unsure of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the right answer. So please consider this a general design question for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the community.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This commit removes all the OMPI &lt;-&gt; ORTE equivalent constants - i.e., we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used to declare OMPI-prefixed equivalents to every ORTE-prefixed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constant. I understand the thinking (or at least, what I suspect was the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thought), but it creates an issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Suppose I have an ompi-level function (A) that calls another ompi-level
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function (B). Invisible to A is that B calls an orte-level function. B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dutifully checks the error return from the orte-level function against an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE-prefixed constant.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, if that return isn't &quot;success&quot;, what does B return up to A? It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cannot return the OMPI equivalent to the orte error constant because it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no longer exists. It could return the orte error code, but A has no way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of knowing it is going to get a non-OMPI constant, and therefore won't be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to understand it - it will be an &quot;unrecognized error&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess one option is to require that B &quot;translate&quot; the return code and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pass some OMPI error up the chain, but this prevents anything upwards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from understanding the nature of the problem and potentially taking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; corrective and/or alternative action. Seems awfully limiting, as most of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the time the only option will be the vanilla &quot;OMPI_ERROR&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9860.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9858.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>In reply to:</strong> <a href="9853.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9861.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9861.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Reply:</strong> <a href="9862.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
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

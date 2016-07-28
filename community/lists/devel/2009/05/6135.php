<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 20:48:41 2009" -->
<!-- isoreceived="20090528004841" -->
<!-- sent="Wed, 27 May 2009 18:48:36 -0600" -->
<!-- isosent="20090528004836" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292" -->
<!-- id="71d2d8cc0905271748i662d7094r14a24fdd008288a4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="99D3442B-2494-4CF7-8A6E-048835AC2ACF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 20:48:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6136.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep! Thanks!
<br>
<p>On Wed, May 27, 2009 at 6:43 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think Ralph was asking &quot;where is this value used?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This particular value is one of the constants defined in mpi.h, and it's
</span><br>
<span class="quotelev1">&gt; used in some of the public MPI data structures (the length of some strings
</span><br>
<span class="quotelev1">&gt; returned by MPI to the application).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 8:40 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  No there is no such constraint. Rainer's commit only changed the hardcoded
</span><br>
<span class="quotelev2">&gt;&gt; value to another define, which this time can be set by the user at configure
</span><br>
<span class="quotelev2">&gt;&gt; time. However, the default value is exactly the same as before (for MPI
</span><br>
<span class="quotelev2">&gt;&gt; hostnames is set to 256).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 27, 2009, at 20:02 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I can't find that max hostname constraint in the above commit (probably
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just tired eyes). However, note that ORTE doesn't have any hostname length
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constraint, so if we are now adding one to the OMPI layer, we have a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, in the ompi_proc_t struct, we simply point it at the ORTE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name so we avoid impacting the memory footprint by copying the hostname.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thus, it isn't clear to me -where- we are restricting hostname lengths - can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; someone point it out?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIQ: we routinely see hostnames much longer than 16 chars on the user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list and on many clusters here. Having such a small restriction will cause
</span><br>
<span class="quotelev3">&gt;&gt;&gt; major problems with our user base.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, May 27, 2009 at 8:11 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 27, 2009, at 9:54 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; One thing to note about this change is that it will break binary
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; compatibility between 1.3/1.4 and the 1.5/1.6 series (since these
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; values are #define's, and therefore are resolved at compile time --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; not run-time).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where's the break??
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My bad -- you're entirely right.  I mis-read; you kept all the defaults
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly the same.  Good!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Several of my other comments are therefore invalid.  :-)  But the _OPAL_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt; OPAL_ prefix thing is still relevant (that would be the only _OPAL prefix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I'm aware of).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6136.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
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

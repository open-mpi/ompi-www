<?
$subject_val = "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 16:17:39 2014" -->
<!-- isoreceived="20140729201739" -->
<!-- sent="Tue, 29 Jul 2014 20:17:37 +0000" -->
<!-- isosent="20140729201737" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05ACBBA7_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F2A9E6D6-64CB-46DF-94B7-475A0C46B49C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 16:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15327.php">Nathan Hjelm: "[OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15325.php">Ralph Castain: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>In reply to:</strong> <a href="15325.php">Ralph Castain: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Oh sorry for the confusion.  forgot I'd been trying to fix a different problem
<br>
that caused this one.
<br>
<p>Sorry.
<br>
<p>Howard
<br>
<p><p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, July 29, 2014 2:15 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question
<br>
<p>Interesting - I'm not seeing those myself
<br>
<p><p>On Jul 29, 2014, at 1:01 PM, George Bosilca &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Good catch. As you already have the warnings, please go ahead and fix them.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Jul 29, 2014 at 3:58 PM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&lt;mailto:howardp_at_[hidden]&gt;&gt; wrote:
<br>
Hi Folks,
<br>
<p>So I'm trying to get my pmix project back in order after making
<br>
the big mistake of pulling in the BTL move stuff.
<br>
<p>I get bizillions of warning messages from the compiler now
<br>
about undefined macros.
<br>
<p>A number of the culprits are in opal_config.h.in&lt;<a href="http://opal_config.h.in/">http://opal_config.h.in/</a>&gt;, and begin
<br>
with OMPI, like OMPI_WANT_MEMCHECKER.
<br>
<p>Throughout the ompi code though there is now a OPAL_WANT_MEMCHECKER.
<br>
Do we want to change all of the defines in opal_config.h.in&lt;<a href="http://opal_config.h.in/">http://opal_config.h.in/</a>&gt; to start with OPAL?
<br>
<p>Howard
<br>
<p><p>-------------------------------------------------
<br>
Howard Pritchard
<br>
HPC-5
<br>
Los Alamos National Laboratory
<br>
<p><p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15323.php">http://www.open-mpi.org/community/lists/devel/2014/07/15323.php</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15324.php">http://www.open-mpi.org/community/lists/devel/2014/07/15324.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15326/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15327.php">Nathan Hjelm: "[OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15325.php">Ralph Castain: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>In reply to:</strong> <a href="15325.php">Ralph Castain: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
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

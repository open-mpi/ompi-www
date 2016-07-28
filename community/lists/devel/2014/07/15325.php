<?
$subject_val = "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 16:16:24 2014" -->
<!-- isoreceived="20140729201624" -->
<!-- sent="Tue, 29 Jul 2014 13:14:46 -0700" -->
<!-- isosent="20140729201446" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question" -->
<!-- id="F2A9E6D6-64CB-46DF-94B7-475A0C46B49C_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkW5x=iSxqZvLfGQABehBAbHaBVfo4jsDWjZX=v3-AgtPg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 16:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15326.php">Pritchard Jr., Howard: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>Previous message:</strong> <a href="15324.php">George Bosilca: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>In reply to:</strong> <a href="15324.php">George Bosilca: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15326.php">Pritchard Jr., Howard: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>Reply:</strong> <a href="15326.php">Pritchard Jr., Howard: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting - I'm not seeing those myself
<br>
<p><p>On Jul 29, 2014, at 1:01 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good catch. As you already have the warnings, please go ahead and fix them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 29, 2014 at 3:58 PM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I&#146;m trying to get my pmix project back in order after making
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the big mistake of pulling in the BTL move stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get bizillions of warning messages from the compiler now
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; about undefined macros.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A number of the culprits are in opal_config.h.in, and begin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with OMPI, like OMPI_WANT_MEMCHECKER.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Throughout the ompi code though there is now a OPAL_WANT_MEMCHECKER.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we want to change all of the defines in opal_config.h.in to start with OPAL?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard Pritchard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HPC-5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15323.php">http://www.open-mpi.org/community/lists/devel/2014/07/15323.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15324.php">http://www.open-mpi.org/community/lists/devel/2014/07/15324.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15325/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15326.php">Pritchard Jr., Howard: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>Previous message:</strong> <a href="15324.php">George Bosilca: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>In reply to:</strong> <a href="15324.php">George Bosilca: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15326.php">Pritchard Jr., Howard: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
<li><strong>Reply:</strong> <a href="15326.php">Pritchard Jr., Howard: "Re: [OMPI devel] OMPI_XXX defines in opal_config.h.in question"</a>
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

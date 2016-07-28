<?
$subject_val = "Re: [OMPI devel] PML Start error?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 28 09:26:55 2009" -->
<!-- isoreceived="20090228142655" -->
<!-- sent="Sat, 28 Feb 2009 09:26:49 -0500" -->
<!-- isosent="20090228142649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML Start error?" -->
<!-- id="64FE6C2A-A5ED-419F-A47F-3A6BBF377725_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A86A58.9030509_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PML Start error?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-28 09:26:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5538.php">Markus Blatt: "[OMPI devel] Bug (wrong LB?) when using cascading derived data types"</a>
<li><strong>Previous message:</strong> <a href="5536.php">Jeff Squyres: "Re: [OMPI devel] Minor patch for vtunify use of tolower()"</a>
<li><strong>In reply to:</strong> <a href="5535.php">Eugene Loh: "[OMPI devel] PML Start error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5543.php">George Bosilca: "Re: [OMPI devel] PML Start error?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5543.php">George Bosilca: "Re: [OMPI devel] PML Start error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks that way to me, too.
<br>
<p>On Feb 27, 2009, at 5:34 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm looking at pml_ob1_start.c.  It loops over requests and starts  
</span><br>
<span class="quotelev1">&gt; them.  It makes some decision about whether an old request can be  
</span><br>
<span class="quotelev1">&gt; reused or if a new one must be allocated/initialized.  So, there is  
</span><br>
<span class="quotelev1">&gt; a variable named reuse_old_request.  It's initialized to &quot;true&quot;, but  
</span><br>
<span class="quotelev1">&gt; if a new request must be alloced/inited, then it's set to false.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thing is, this variable is initialized to true only once, at  
</span><br>
<span class="quotelev1">&gt; entry to the function and outside the loop over requests.  This  
</span><br>
<span class="quotelev1">&gt; strikes me as wrong.  It appears that if ever the variable is set to  
</span><br>
<span class="quotelev1">&gt; false, it will remain so until the end of the function.  I would  
</span><br>
<span class="quotelev1">&gt; think the intent is for the variable to be reset to true at the  
</span><br>
<span class="quotelev1">&gt; start of every iteration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes/no?
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5538.php">Markus Blatt: "[OMPI devel] Bug (wrong LB?) when using cascading derived data types"</a>
<li><strong>Previous message:</strong> <a href="5536.php">Jeff Squyres: "Re: [OMPI devel] Minor patch for vtunify use of tolower()"</a>
<li><strong>In reply to:</strong> <a href="5535.php">Eugene Loh: "[OMPI devel] PML Start error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5543.php">George Bosilca: "Re: [OMPI devel] PML Start error?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5543.php">George Bosilca: "Re: [OMPI devel] PML Start error?"</a>
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

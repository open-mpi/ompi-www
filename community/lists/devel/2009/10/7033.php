<?
$subject_val = "Re: [OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 17:29:35 2009" -->
<!-- isoreceived="20091026212935" -->
<!-- sent="Mon, 26 Oct 2009 17:29:30 -0400" -->
<!-- isosent="20091026212930" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL" -->
<!-- id="1F3D8FBD-8E63-4457-A63A-73FFFC8E14CC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40910211443j4a882a8fy842cb2efd691c524_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 17:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7034.php">Chris Samuel: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>Previous message:</strong> <a href="7032.php">Ashley Pittman: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>In reply to:</strong> <a href="6993.php">Lisandro Dalcin: "[OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 5:43 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Currently (trunk, just svn update'd), the following call fails
</span><br>
<span class="quotelev1">&gt; (because of the ranks=NULL pointer)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Group_{incl|excl}(group, 0, NULL, &amp;newgroup)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Agreed; bug.  I think there's a little wiggle room in the spec wording  
<br>
that it may or may not be an error, but I think that it's certainly  
<br>
more social to accept NULL if n==0.
<br>
<p><span class="quotelev1">&gt; BTW, MPI_Group_translate_ranks() has similar issues...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Provided that Open MPI accept the combination (int_array_size=0,
</span><br>
<span class="quotelev1">&gt; int_array_ptr=NULL) in other calls, I think it should also accept the
</span><br>
<span class="quotelev1">&gt; NULL's in the calls above... What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>The spec isn't quite a clear for MPI_Group_translate_ranks as it is  
<br>
for MPI_Group_incl|excl (e.g., those both have defined behavior for  
<br>
when n==0), but I think it falls into &quot;it's more social&quot; category to  
<br>
just do nothing and return MPI_SUCCESS when n==0.
<br>
<p>I'll fix both -- thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7034.php">Chris Samuel: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>Previous message:</strong> <a href="7032.php">Ashley Pittman: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>In reply to:</strong> <a href="6993.php">Lisandro Dalcin: "[OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL"</a>
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

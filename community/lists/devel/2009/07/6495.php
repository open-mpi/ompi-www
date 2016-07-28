<?
$subject_val = "Re: [OMPI devel] default btl eager_limit";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 09:23:21 2009" -->
<!-- isoreceived="20090722132321" -->
<!-- sent="Wed, 22 Jul 2009 09:23:15 -0400" -->
<!-- isosent="20090722132315" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] default btl eager_limit" -->
<!-- id="60650952-713D-4317-9E47-30E0AADB2046_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A5F34DD.9040908_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] default btl eager_limit<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 09:23:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6496.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Previous message:</strong> <a href="6494.php">Jeff Squyres: "Re: [OMPI devel] Question on MPI_Info"</a>
<li><strong>In reply to:</strong> <a href="6449.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6496.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Reply:</strong> <a href="6496.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to follow up for the web archives -- we discussed this on the  
<br>
teleconf yesterday and decided that the assert()'s were not the way to  
<br>
go.  Brian was going to hack up a quick check at the end of OB1  
<br>
add_procs that checks each btl's eager_limit, etc.  Terry would expand  
<br>
this to cover dr and csum.
<br>
<p><p>On Jul 16, 2009, at 10:10 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Another way to do this which I am not sure makes sense is to just add
</span><br>
<span class="quotelev1">&gt; sizeof(mca_pml_ob1_hdr_t) to the btl_eager_limit passed into by the
</span><br>
<span class="quotelev1">&gt; user.  Thus the defining the limit to be specifically for the user  
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev1">&gt; and not the internal headers
</span><br>
<span class="quotelev1">&gt; which the user may not have any inkling about.  However, that may lead
</span><br>
<span class="quotelev1">&gt; to the user
</span><br>
<span class="quotelev1">&gt; to not realize there is a man behind the curtain bumping up the limit
</span><br>
<span class="quotelev1">&gt; for the internal headers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I was playing around with some really silly fragment sizes (sub 72
</span><br>
<span class="quotelev2">&gt; &gt; bytes) when I ran into some asserts in the btl_openib_sendi.  I  
</span><br>
<span class="quotelev1">&gt; traced
</span><br>
<span class="quotelev2">&gt; &gt; the assert to be caused by mca_pml_ob1_send_request_start_btl()
</span><br>
<span class="quotelev2">&gt; &gt; calculating the true eager_limit with the following line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   size_t eager_limit = btl-&gt;btl_eager_limit -  
</span><br>
<span class="quotelev1">&gt; sizeof(mca_pml_ob1_hdr_t);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If btl_eager_limit ends up being less than the
</span><br>
<span class="quotelev2">&gt; &gt; sizeof(mca_pml_ob1_hdr_t) the eager_limit calculated results in a  
</span><br>
<span class="quotelev1">&gt; very
</span><br>
<span class="quotelev2">&gt; &gt; large number and an assert later on in the stack.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems to me that it would be nice to insert some checks in
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_base_param_register() to make sure btl_eager_limit is &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sizeof(mca_pml_ob1_hdr_t).  Am I missing a reason why this was not
</span><br>
<span class="quotelev2">&gt; &gt; done in the first place?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6496.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Previous message:</strong> <a href="6494.php">Jeff Squyres: "Re: [OMPI devel] Question on MPI_Info"</a>
<li><strong>In reply to:</strong> <a href="6449.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6496.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Reply:</strong> <a href="6496.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
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

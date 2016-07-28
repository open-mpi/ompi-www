<?
$subject_val = "Re: [OMPI devel] default btl eager_limit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 10:11:45 2009" -->
<!-- isoreceived="20090716141145" -->
<!-- sent="Thu, 16 Jul 2009 10:10:37 -0400" -->
<!-- isosent="20090716141037" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] default btl eager_limit" -->
<!-- id="4A5F34DD.9040908_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A5F3386.2000400_at_sun.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 10:10:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6450.php">Greg Watson: "[OMPI devel] XML output"</a>
<li><strong>Previous message:</strong> <a href="6448.php">Terry Dontje: "[OMPI devel] default btl eager_limit"</a>
<li><strong>In reply to:</strong> <a href="6448.php">Terry Dontje: "[OMPI devel] default btl eager_limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6495.php">Jeff Squyres: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Reply:</strong> <a href="6495.php">Jeff Squyres: "Re: [OMPI devel] default btl eager_limit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another way to do this which I am not sure makes sense is to just add 
<br>
sizeof(mca_pml_ob1_hdr_t) to the btl_eager_limit passed into by the 
<br>
user.  Thus the defining the limit to be specifically for the user data 
<br>
and not the internal headers
<br>
which the user may not have any inkling about.  However, that may lead 
<br>
to the user
<br>
to not realize there is a man behind the curtain bumping up the limit 
<br>
for the internal headers.
<br>
<p>--td
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; I was playing around with some really silly fragment sizes (sub 72 
</span><br>
<span class="quotelev1">&gt; bytes) when I ran into some asserts in the btl_openib_sendi.  I traced 
</span><br>
<span class="quotelev1">&gt; the assert to be caused by mca_pml_ob1_send_request_start_btl() 
</span><br>
<span class="quotelev1">&gt; calculating the true eager_limit with the following line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   size_t eager_limit = btl-&gt;btl_eager_limit - sizeof(mca_pml_ob1_hdr_t);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If btl_eager_limit ends up being less than the 
</span><br>
<span class="quotelev1">&gt; sizeof(mca_pml_ob1_hdr_t) the eager_limit calculated results in a very 
</span><br>
<span class="quotelev1">&gt; large number and an assert later on in the stack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to me that it would be nice to insert some checks in  
</span><br>
<span class="quotelev1">&gt; mca_btl_base_param_register() to make sure btl_eager_limit is &gt; 
</span><br>
<span class="quotelev1">&gt; sizeof(mca_pml_ob1_hdr_t).  Am I missing a reason why this was not 
</span><br>
<span class="quotelev1">&gt; done in the first place?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
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
<li><strong>Next message:</strong> <a href="6450.php">Greg Watson: "[OMPI devel] XML output"</a>
<li><strong>Previous message:</strong> <a href="6448.php">Terry Dontje: "[OMPI devel] default btl eager_limit"</a>
<li><strong>In reply to:</strong> <a href="6448.php">Terry Dontje: "[OMPI devel] default btl eager_limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6495.php">Jeff Squyres: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Reply:</strong> <a href="6495.php">Jeff Squyres: "Re: [OMPI devel] default btl eager_limit"</a>
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

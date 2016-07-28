<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 10:51:36 2012" -->
<!-- isoreceived="20120625145136" -->
<!-- sent="Mon, 25 Jun 2012 10:51:32 -0400" -->
<!-- isosent="20120625145132" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="4FE87AF4.9010203_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2F102BCF-8297-4475-9047-F9B2BF7C3036_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 10:51:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11164.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>Previous message:</strong> <a href="11162.php">Eugene Loh: "[OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>In reply to:</strong> <a href="11161.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11144.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/25/2012 10:12 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 25, 2012, at 5:44 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm, I guess I could see the thinking of tying ofud and openib btls configuring together.  However it seems inconsistent to me that one btl doesn't allow you to control configuring it in or not directly.  What if I really do not want to build ofud but do want to build openib?
</span><br>
<span class="quotelev1">&gt; What if you don't want to build the TCP BTL?  Or the sm BTL?  Or you want to build the MX BTL but not the MX MTL?
</span><br>
Funny, I thought there was a --without-XXX option for each btl but there 
<br>
is not.  Guess my mind was thinking more of mca parameters and not 
<br>
configure options.  I withdraw any objection I have regarding 
<br>
configuration options.
<br>
<span class="quotelev1">&gt; The fine-grained control we have for such things is --enable-mca-no-build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11163/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11164.php">Jeff Squyres: "Re: [OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>Previous message:</strong> <a href="11162.php">Eugene Loh: "[OMPI devel] MPI_Reduce_scatter_block"</a>
<li><strong>In reply to:</strong> <a href="11161.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11144.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
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

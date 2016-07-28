<?
$subject_val = "Re: [OMPI devel] Affect of compression on modex and launch messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 14:30:04 2008" -->
<!-- isoreceived="20080404183004" -->
<!-- sent="Fri, 04 Apr 2008 11:29:53 -0700" -->
<!-- isosent="20080404182953" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Affect of compression on modex and launch messages" -->
<!-- id="adak5jdtqvy.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C41BB8F6.CF3A%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Affect of compression on modex and launch messages<br>
<strong>From:</strong> Roland Dreier (<em>rdreier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 14:29:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3662.php">Jeff Squyres: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3660.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>In reply to:</strong> <a href="3657.php">Ralph H Castain: "[OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3662.php">Jeff Squyres: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3662.php">Jeff Squyres: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3663.php">Edgar Gabriel: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; Based on some discussion on this list, I integrated a zlib-based compression
</span><br>
<span class="quotelev1"> &gt; ability into ORTE. Since the launch message sent to the orteds and the modex
</span><br>
<span class="quotelev1"> &gt; between the application procs are the only places where messages of any size
</span><br>
<span class="quotelev1"> &gt; are sent, I only implemented compression for those two exchanges.
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
<span class="quotelev1"> &gt; I have found virtually no benefit to the compression. Essentially, the
</span><br>
<span class="quotelev1"> &gt; overhead consumed in compression/decompressing the messages pretty much
</span><br>
<span class="quotelev1"> &gt; balances out any transmission time differences. However, I could only test
</span><br>
<span class="quotelev1"> &gt; this for 64 nodes, 8ppn, so perhaps there is some benefit at larger sizes.
</span><br>
<p>A faster compression library might change the balance... eg LZO
<br>
(<a href="http://www.oberhumer.com/opensource/lzo">http://www.oberhumer.com/opensource/lzo</a>) might be worth a look although
<br>
I'm not an expert on all the compression libraries that are out there.
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3662.php">Jeff Squyres: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3660.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>In reply to:</strong> <a href="3657.php">Ralph H Castain: "[OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3662.php">Jeff Squyres: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3662.php">Jeff Squyres: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3663.php">Edgar Gabriel: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
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

<?
$subject_val = "Re: [OMPI devel] Memory corruption with mpool";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 09:26:54 2009" -->
<!-- isoreceived="20091102142654" -->
<!-- sent="Mon, 02 Nov 2009 15:26:44 +0100" -->
<!-- isosent="20091102142644" -->
<!-- name="Mondrian Nuessle" -->
<!-- email="nuessle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory corruption with mpool" -->
<!-- id="4AEEEC24.9030202_at_uni-hd.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091102233210.5f8b3861_at_lilo" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Memory corruption with mpool<br>
<strong>From:</strong> Mondrian Nuessle (<em>nuessle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 09:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7068.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Previous message:</strong> <a href="7066.php">Christopher Yeoh: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>In reply to:</strong> <a href="7066.php">Christopher Yeoh: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Reply:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Christopher,
<br>
<p><span class="quotelev2">&gt;&gt; Do you have any suggestions how to investigate this situation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you got OMPI_ENABLE_DEBUG defined? The symptoms of what you are
</span><br>
<span class="quotelev1">&gt; seeing sound like what might happen if debug is off and you trigger an
</span><br>
<span class="quotelev1">&gt; issue I posted about here related to thread safety of mpool.
</span><br>
unfortunately, I have debug turned on (i.e. OMPI_ENABLE_DEBUG is defined in include/openmpi/opal_config.h).
<br>
<p>Regards,
<br>
Mondrian
<br>
<p><pre>
-- 
 Dr. Mondrian Nuessle
 Phone: +49 621 181 2717          University of Heidelberg
 Fax:   +49 621 181 2713          Computer Architecture Group
 mailto:nuessle_at_[hidden]         <a href="http://ra.ziti.uni-heidelberg.de">http://ra.ziti.uni-heidelberg.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7068.php">Jeff Squyres: "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<li><strong>Previous message:</strong> <a href="7066.php">Christopher Yeoh: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>In reply to:</strong> <a href="7066.php">Christopher Yeoh: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Reply:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
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

<?
$subject_val = "Re: [OMPI devel] Memory corruption with mpool";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 21:20:50 2009" -->
<!-- isoreceived="20091103022050" -->
<!-- sent="Mon, 2 Nov 2009 21:20:46 -0500" -->
<!-- isosent="20091103022046" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory corruption with mpool" -->
<!-- id="535E1484-151E-4788-B05E-1393886DB2E6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AEEEC24.9030202_at_uni-hd.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 21:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7073.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7071.php">Jeff Squyres: "Re: [OMPI devel] mpool rdma deadlock"</a>
<li><strong>In reply to:</strong> <a href="7067.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7077.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Reply:</strong> <a href="7077.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that the problems Chris is talking about *should* only occur if  
<br>
you have compiled Open MPI with multi-threaded support.  Did you do  
<br>
that, perchance?
<br>
<p>On Nov 2, 2009, at 9:26 AM, Mondrian Nuessle wrote:
<br>
<p><span class="quotelev1">&gt; Hi Christopher,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you have any suggestions how to investigate this situation?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have you got OMPI_ENABLE_DEBUG defined? The symptoms of what you are
</span><br>
<span class="quotelev2">&gt; &gt; seeing sound like what might happen if debug is off and you  
</span><br>
<span class="quotelev1">&gt; trigger an
</span><br>
<span class="quotelev2">&gt; &gt; issue I posted about here related to thread safety of mpool.
</span><br>
<span class="quotelev1">&gt; unfortunately, I have debug turned on (i.e. OMPI_ENABLE_DEBUG is  
</span><br>
<span class="quotelev1">&gt; defined in include/openmpi/opal_config.h).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mondrian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Dr. Mondrian Nuessle
</span><br>
<span class="quotelev1">&gt;  Phone: +49 621 181 2717          University of Heidelberg
</span><br>
<span class="quotelev1">&gt;  Fax:   +49 621 181 2713          Computer Architecture Group
</span><br>
<span class="quotelev1">&gt;  mailto:nuessle_at_[hidden]         <a href="http://ra.ziti.uni-heidelberg.de">http://ra.ziti.uni-heidelberg.de</a>
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
<li><strong>Next message:</strong> <a href="7073.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7071.php">Jeff Squyres: "Re: [OMPI devel] mpool rdma deadlock"</a>
<li><strong>In reply to:</strong> <a href="7067.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7077.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Reply:</strong> <a href="7077.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
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

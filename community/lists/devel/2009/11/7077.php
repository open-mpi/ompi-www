<?
$subject_val = "Re: [OMPI devel] Memory corruption with mpool";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 10:02:38 2009" -->
<!-- isoreceived="20091103150238" -->
<!-- sent="Tue, 03 Nov 2009 16:02:27 +0100" -->
<!-- isosent="20091103150227" -->
<!-- name="Mondrian Nuessle" -->
<!-- email="nuessle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory corruption with mpool" -->
<!-- id="4AF04603.7040203_at_uni-hd.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="535E1484-151E-4788-B05E-1393886DB2E6_at_cisco.com" -->
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
<strong>Date:</strong> 2009-11-03 10:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7078.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Previous message:</strong> <a href="7076.php">Amit Sharma: "[OMPI devel] orte_rml_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7078.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Reply:</strong> <a href="7078.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
hm, I did not set any threading related options in configure, so I guess threading was not disabled.
<br>
<p>I compiled it again with the following configure options,
<br>
<p>--enable-debug --enable-memchecker --enable-mem-debug --disable-ft-thread --disable-progress-threads --disable-mpi-threads
<br>
<p>and the behavior did change, although it still does not work completely. I will investigate further.
<br>
<p>Thanks so far,
<br>
Mondrian
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Note that the problems Chris is talking about *should* only occur if you
</span><br>
<span class="quotelev1">&gt; have compiled Open MPI with multi-threaded support.  Did you do that,
</span><br>
<span class="quotelev1">&gt; perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 2, 2009, at 9:26 AM, Mondrian Nuessle wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Christopher,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Do you have any suggestions how to investigate this situation?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Have you got OMPI_ENABLE_DEBUG defined? The symptoms of what you are
</span><br>
<span class="quotelev3">&gt;&gt; &gt; seeing sound like what might happen if debug is off and you trigger an
</span><br>
<span class="quotelev3">&gt;&gt; &gt; issue I posted about here related to thread safety of mpool.
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately, I have debug turned on (i.e. OMPI_ENABLE_DEBUG is
</span><br>
<span class="quotelev2">&gt;&gt; defined in include/openmpi/opal_config.h).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Mondrian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;  Dr. Mondrian Nuessle
</span><br>
<span class="quotelev2">&gt;&gt;  Phone: +49 621 181 2717          University of Heidelberg
</span><br>
<span class="quotelev2">&gt;&gt;  Fax:   +49 621 181 2713          Computer Architecture Group
</span><br>
<span class="quotelev2">&gt;&gt;  mailto:nuessle_at_[hidden]         <a href="http://ra.ziti.uni-heidelberg.de">http://ra.ziti.uni-heidelberg.de</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
<li><strong>Next message:</strong> <a href="7078.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Previous message:</strong> <a href="7076.php">Amit Sharma: "[OMPI devel] orte_rml_base_select failed"</a>
<li><strong>In reply to:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7078.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Reply:</strong> <a href="7078.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
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

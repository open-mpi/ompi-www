<?
$subject_val = "Re: [OMPI devel] SSE instructions?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 21:46:38 2011" -->
<!-- isoreceived="20110520014638" -->
<!-- sent="Thu, 19 May 2011 18:46:34 -0700" -->
<!-- isosent="20110520014634" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SSE instructions?" -->
<!-- id="9921BD36-D4B0-4798-83B0-4559D2BAFADC_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8A4BAD65-4C28-453D-9F59-C89BCD6D4F42_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SSE instructions?<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 21:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9272.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9270.php">Jeff Squyres: "[OMPI devel] v1.4 RM: ruling?"</a>
<li><strong>In reply to:</strong> <a href="9269.php">Jeff Squyres: "Re: [OMPI devel] SSE instructions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9274.php">Jeff Squyres: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>Reply:</strong> <a href="9274.php">Jeff Squyres: "Re: [OMPI devel] SSE instructions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for your reply.
<br>
<p>I inquired the same of PGI.  Dave Borer, PGI Customer Service Manager,  
<br>
responded:
<br>
<p><span class="quotelev1">&gt;  I believe -fast and -fastsse are identical for 64-bit compilers,  
</span><br>
<span class="quotelev1">&gt; but there are some differences
</span><br>
<span class="quotelev1">&gt; with 32-bit compilers.  I don't think TCP/IP based MPI routines have  
</span><br>
<span class="quotelev1">&gt; better performance from
</span><br>
<span class="quotelev1">&gt; optimizations, unless the processes are all running on the same  
</span><br>
<span class="quotelev1">&gt; machine.   I will ask engineering
</span><br>
<span class="quotelev1">&gt; how messages are passed when all the processes are running on the  
</span><br>
<span class="quotelev1">&gt; same hardware.
</span><br>
<p><p>I am running on a 64-bit machine; I used -fast.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 19 May 2011, at 6:21 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 18, 2011, at 8:32 PM, Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The PGI compilers have a -fast and a -fastsse option.  Does OpenMPI  
</span><br>
<span class="quotelev2">&gt;&gt; make effective/safe use of SSE instructions (block moves maybe?)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not really.  The biggest thing that we do that can take advantage of  
</span><br>
<span class="quotelev1">&gt; vector instructions is memcpy, *mostly* in the shared memory  
</span><br>
<span class="quotelev1">&gt; transport, but also if your MPI application hap some funky non- 
</span><br>
<span class="quotelev1">&gt; contiguous MPI datatypes, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On their web site, PGI uses -fast in their examples for OpenMPI  
</span><br>
<span class="quotelev2">&gt;&gt; rather than -fastsse.  I don't know why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe for more portability...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9272.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9270.php">Jeff Squyres: "[OMPI devel] v1.4 RM: ruling?"</a>
<li><strong>In reply to:</strong> <a href="9269.php">Jeff Squyres: "Re: [OMPI devel] SSE instructions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9274.php">Jeff Squyres: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>Reply:</strong> <a href="9274.php">Jeff Squyres: "Re: [OMPI devel] SSE instructions?"</a>
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

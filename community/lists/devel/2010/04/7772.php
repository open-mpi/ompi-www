<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 12:12:43 2010" -->
<!-- isoreceived="20100419161243" -->
<!-- sent="Mon, 19 Apr 2010 10:12:34 -0600" -->
<!-- isosent="20100419161234" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="97B90297-F9CF-4194-9601-FBA6522B385E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BCC72F7.7020002_at_docawk.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 12:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7773.php">Ralf Wildenhues: "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;: Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7771.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7771.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7774.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7774.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2010, at 9:12 AM, Oliver Geisler wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ah, that could do it.  Open MPI's shared memory files are under /tmp.  So if /tmp is NFS, you could get extremely high latencies because of dirty page writes out through NFS.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You don't necessarily have to make /tmp disk-full -- if you just make OMPI's session directories go into a ramdisk instead of to NFS, that should also be sufficient.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just browsed FAQ and &quot;ompi_info --param all all&quot;, but didn't find the
</span><br>
<span class="quotelev1">&gt; answer:
</span><br>
<span class="quotelev1">&gt; How do I set the OMPI session directory to point it to a ramdisk?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Set the MCA param orte_tmpdir_base to point at the ramdisk using any of the MCA parameter methods (cmd line, envar, default mca param file).
<br>
<p><span class="quotelev1">&gt; And another question:
</span><br>
<span class="quotelev1">&gt; What would be a good size for the ram disk? One general value was
</span><br>
<span class="quotelev1">&gt; supposed by the FAQ with 128MB, but what is your experience?
</span><br>
<span class="quotelev1">&gt; (maybe a large topic by itself, so I have to try out, I guess)
</span><br>
<p>I don't recall the default shared memory size per process, but you can get that value from ompi_info --param btl sm. Take that value, multiply by your expected ppn, and then give yourself a fudge factor.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oli
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; This message has been scanned for viruses and
</span><br>
<span class="quotelev1">&gt; dangerous content by MailScanner, and is
</span><br>
<span class="quotelev1">&gt; believed to be clean.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7773.php">Ralf Wildenhues: "Re: [OMPI devel] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;: Migrate the OpenMPI to VxWorks"</a>
<li><strong>Previous message:</strong> <a href="7771.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7771.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7774.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7774.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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

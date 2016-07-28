<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 14:15:03 2010" -->
<!-- isoreceived="20100419181503" -->
<!-- sent="Mon, 19 Apr 2010 20:14:53 +0200" -->
<!-- isosent="20100419181453" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="201004192014.57969.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 14:14:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7776.php">Eugene Loh: "[OMPI devel] RFC: mpirun options"</a>
<li><strong>Previous message:</strong> <a href="7774.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7771.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7728.php">Chris Samuel: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 19 April 2010, Oliver Geisler wrote:
<br>
<span class="quotelev2">&gt; &gt; Ah, that could do it.  Open MPI's shared memory files are under /tmp.  So
</span><br>
<span class="quotelev2">&gt; &gt; if /tmp is NFS, you could get extremely high latencies because of dirty
</span><br>
<span class="quotelev2">&gt; &gt; page writes out through NFS.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You don't necessarily have to make /tmp disk-full -- if you just make
</span><br>
<span class="quotelev2">&gt; &gt; OMPI's session directories go into a ramdisk instead of to NFS, that
</span><br>
<span class="quotelev2">&gt; &gt; should also be sufficient.
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
<span class="quotelev1">&gt; And another question:
</span><br>
<span class="quotelev1">&gt; What would be a good size for the ram disk? One general value was
</span><br>
<span class="quotelev1">&gt; supposed by the FAQ with 128MB, but what is your experience?
</span><br>
<span class="quotelev1">&gt; (maybe a large topic by itself, so I have to try out, I guess)
</span><br>
<p>I just wanted to add that space not used on a tmpfs (mount -t tmpfs ...) is 
<br>
not wasted. You can have an 8G tmpfs mounted but if you only use 100M that's 
<br>
how much RAM it uses.
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7775/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7776.php">Eugene Loh: "[OMPI devel] RFC: mpirun options"</a>
<li><strong>Previous message:</strong> <a href="7774.php">Eugene Loh: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7771.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7728.php">Chris Samuel: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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

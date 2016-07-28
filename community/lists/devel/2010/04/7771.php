<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 11:13:24 2010" -->
<!-- isoreceived="20100419151324" -->
<!-- sent="Mon, 19 Apr 2010 10:12:55 -0500" -->
<!-- isosent="20100419151255" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BCC72F7.7020002_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2012238E-6CF6-4770-BBF2-62785F69ADA2_at_cisco.com" -->
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
<strong>From:</strong> Oliver Geisler (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 11:12:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7772.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7770.php">Ralph Castain: "Re: [OMPI devel] 1.4.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="7742.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7772.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7772.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7775.php">Peter Kjellstrom: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Ah, that could do it.  Open MPI's shared memory files are under /tmp.  So if /tmp is NFS, you could get extremely high latencies because of dirty page writes out through NFS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You don't necessarily have to make /tmp disk-full -- if you just make OMPI's session directories go into a ramdisk instead of to NFS, that should also be sufficient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I just browsed FAQ and &quot;ompi_info --param all all&quot;, but didn't find the
<br>
answer:
<br>
How do I set the OMPI session directory to point it to a ramdisk?
<br>
<p>And another question:
<br>
What would be a good size for the ram disk? One general value was
<br>
supposed by the FAQ with 128MB, but what is your experience?
<br>
(maybe a large topic by itself, so I have to try out, I guess)
<br>
<p>Thanks a lot.
<br>
<p>Oli
<br>
<p><p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7772.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7770.php">Ralph Castain: "Re: [OMPI devel] 1.4.2rc1 available for test"</a>
<li><strong>In reply to:</strong> <a href="7742.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7772.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7772.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7775.php">Peter Kjellstrom: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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

<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 12 11:10:37 2010" -->
<!-- isoreceived="20100412151037" -->
<!-- sent="Mon, 12 Apr 2010 10:10:04 -0500" -->
<!-- isosent="20100412151004" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="20100412101004.16687aj340f0889c_at_mail.terrasysgeo.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6769B789-5809-445D-A56B-887C6AE797CF_at_pittman.co.uk" -->
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
<strong>Date:</strong> 2010-04-12 11:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7735.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7733.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single	socket	node"</a>
<li><strong>In reply to:</strong> <a href="7726.php">Ashley Pittman: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7735.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7735.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7742.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Quoting Ashley Pittman &lt;ashley_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10 Apr 2010, at 04:51, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why is shared-memory performance about four orders of magnitude  
</span><br>
<span class="quotelev2">&gt;&gt; slower than it should be?  The processes are communicating via  
</span><br>
<span class="quotelev2">&gt;&gt; memory that's shared by having the processes all mmap the same file  
</span><br>
<span class="quotelev2">&gt;&gt; into their address spaces.  Is it possible that with the newer  
</span><br>
<span class="quotelev2">&gt;&gt; kernels, operations to that shared file are going all the way out  
</span><br>
<span class="quotelev2">&gt;&gt; to disk?  Maybe you don't know the answer, but hopefully someone on  
</span><br>
<span class="quotelev2">&gt;&gt; this mail list can provide some insight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the /tmp filesystem on NFS by any chance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, /tmp is on NFS .. those are diskless nodes all without disks and  
<br>
no swap space mounted.
<br>
<p>Maybe I should setup one of the nodes with a disk, so I could try the  
<br>
difference.
<br>
<p>(Sorry, but I may return results next week since, I am out of office  
<br>
right now)
<br>
<p>Thanks
<br>
oli
<br>
<p><p><p><span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><p><p>----------------------------------------------------------------
<br>
This message was sent using IMP, the Internet Messaging Program.
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
<li><strong>Next message:</strong> <a href="7735.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7733.php">Nadia Derbey: "Re: [OMPI devel] problem when binding to socket on a single	socket	node"</a>
<li><strong>In reply to:</strong> <a href="7726.php">Ashley Pittman: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7735.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7735.php">Ralph Castain: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7742.php">Jeff Squyres: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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

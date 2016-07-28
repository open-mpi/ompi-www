<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 11:38:31 2010" -->
<!-- isoreceived="20100422153831" -->
<!-- sent="Thu, 22 Apr 2010 10:37:48 -0500" -->
<!-- isosent="20100422153748" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BD06D4C.2000101_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BBB4027.8050005_at_docawk.org" -->
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
<strong>Date:</strong> 2010-04-22 11:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7790.php">Kenneth A. Lloyd: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7788.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>In reply to:</strong> <a href="7698.php">Oliver Geisler: "[OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7790.php">Kenneth A. Lloyd: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7790.php">Kenneth A. Lloyd: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7791.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To sum up and give an update:
<br>
<p>The extended communication times while using shared memory communication
<br>
of openmpi processes are caused by openmpi session directory laying on
<br>
the network via NFS.
<br>
<p>The problem is resolved by establishing on each diskless node a ramdisk
<br>
or mounting a tmpfs. By setting the MCA parameter orte_tmpdir_base to
<br>
point to the according mountpoint shared memory communication and its
<br>
files are kept local, thus decreasing the communication times by magnitudes.
<br>
<p>The relation of the problem to the kernel version is not really
<br>
resolved, but maybe not &quot;the problem&quot; in this respect.
<br>
My benchmark is now running fine on a single node with 4 CPU, kernel
<br>
2.6.33.1 and openmpi 1.4.1.
<br>
Running on multiple nodes I experience still higher (TCP) communication
<br>
times than I would expect. But that requires me some more deep
<br>
researching the issue (e.g. collisions on the network) and should
<br>
probably posted to a new thread.
<br>
<p>Thank you guys for your help.
<br>
<p>oli
<br>
<p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7790.php">Kenneth A. Lloyd: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7788.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>In reply to:</strong> <a href="7698.php">Oliver Geisler: "[OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7790.php">Kenneth A. Lloyd: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7790.php">Kenneth A. Lloyd: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7791.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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

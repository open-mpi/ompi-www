<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 11:49:34 2010" -->
<!-- isoreceived="20100422154934" -->
<!-- sent="Thu, 22 Apr 2010 09:49:28 -0600" -->
<!-- isosent="20100422154928" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="00b001cae233$64b3b9b0$2e1b2d10$_at_lloyd@wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD06D4C.2000101_at_docawk.org" -->
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
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 11:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7791.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7789.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7789.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7791.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oliver,
<br>
<p>Thank you for this summary insight.  This substantially affects the
<br>
structural design of software implementations, which points to a new
<br>
analysis &quot;opportunity&quot; in our software.
<br>
<p>Ken Lloyd
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Oliver Geisler
<br>
Sent: Thursday, April 22, 2010 9:38 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times
<br>
<p>To sum up and give an update:
<br>
<p>The extended communication times while using shared memory communication of
<br>
openmpi processes are caused by openmpi session directory laying on the
<br>
network via NFS.
<br>
<p>The problem is resolved by establishing on each diskless node a ramdisk or
<br>
mounting a tmpfs. By setting the MCA parameter orte_tmpdir_base to point to
<br>
the according mountpoint shared memory communication and its files are kept
<br>
local, thus decreasing the communication times by magnitudes.
<br>
<p>The relation of the problem to the kernel version is not really resolved,
<br>
but maybe not &quot;the problem&quot; in this respect.
<br>
My benchmark is now running fine on a single node with 4 CPU, kernel
<br>
2.6.33.1 and openmpi 1.4.1.
<br>
Running on multiple nodes I experience still higher (TCP) communication
<br>
times than I would expect. But that requires me some more deep researching
<br>
the issue (e.g. collisions on the network) and should probably posted to a
<br>
new thread.
<br>
<p>Thank you guys for your help.
<br>
<p>oli
<br>
<p><pre>
--
This message has been scanned for viruses and dangerous content by
MailScanner, and is believed to be clean.
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7791.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7789.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7789.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7791.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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

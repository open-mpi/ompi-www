<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 12:09:26 2010" -->
<!-- isoreceived="20100422160926" -->
<!-- sent="Thu, 22 Apr 2010 12:08:30 -0400" -->
<!-- isosent="20100422160830" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="201004221208.30918.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 12:08:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7792.php">Samuel K. Gutierrez: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7790.php">Kenneth A. Lloyd: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7789.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7792.php">Samuel K. Gutierrez: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7792.php">Samuel K. Gutierrez: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Oliver,
<br>
thanks for the update.
<br>
<p>Just my $0.02: the upcoming Open MPI v1.5 will warn users, if their session 
<br>
directory is on NFS (or Lustre).
<br>
<p>Best regards,
<br>
Rainer
<br>
<p><p>On Thursday 22 April 2010 11:37:48 am Oliver Geisler wrote:
<br>
<span class="quotelev1">&gt; To sum up and give an update:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The extended communication times while using shared memory communication
</span><br>
<span class="quotelev1">&gt; of openmpi processes are caused by openmpi session directory laying on
</span><br>
<span class="quotelev1">&gt; the network via NFS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is resolved by establishing on each diskless node a ramdisk
</span><br>
<span class="quotelev1">&gt; or mounting a tmpfs. By setting the MCA parameter orte_tmpdir_base to
</span><br>
<span class="quotelev1">&gt; point to the according mountpoint shared memory communication and its
</span><br>
<span class="quotelev1">&gt; files are kept local, thus decreasing the communication times by
</span><br>
<span class="quotelev1">&gt;  magnitudes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The relation of the problem to the kernel version is not really
</span><br>
<span class="quotelev1">&gt; resolved, but maybe not &quot;the problem&quot; in this respect.
</span><br>
<span class="quotelev1">&gt; My benchmark is now running fine on a single node with 4 CPU, kernel
</span><br>
<span class="quotelev1">&gt; 2.6.33.1 and openmpi 1.4.1.
</span><br>
<span class="quotelev1">&gt; Running on multiple nodes I experience still higher (TCP) communication
</span><br>
<span class="quotelev1">&gt; times than I would expect. But that requires me some more deep
</span><br>
<span class="quotelev1">&gt; researching the issue (e.g. collisions on the network) and should
</span><br>
<span class="quotelev1">&gt; probably posted to a new thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you guys for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oli
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7792.php">Samuel K. Gutierrez: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7790.php">Kenneth A. Lloyd: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7789.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7792.php">Samuel K. Gutierrez: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7792.php">Samuel K. Gutierrez: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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

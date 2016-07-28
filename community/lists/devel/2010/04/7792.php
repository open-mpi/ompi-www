<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 12:15:46 2010" -->
<!-- isoreceived="20100422161546" -->
<!-- sent="Thu, 22 Apr 2010 10:15:08 -0600" -->
<!-- isosent="20100422161508" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="2D7ADD02-8567-4A3F-9087-381F2F6DB807_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="201004221208.30918.keller_at_ornl.gov" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 12:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7793.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Previous message:</strong> <a href="7791.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7791.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2010, at 10:08 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello Oliver,
</span><br>
<span class="quotelev1">&gt; thanks for the update.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my $0.02: the upcoming Open MPI v1.5 will warn users, if their  
</span><br>
<span class="quotelev1">&gt; session
</span><br>
<span class="quotelev1">&gt; directory is on NFS (or Lustre).
</span><br>
<p>... or panfs :-)
<br>
<p>Samuel K. Gutierrez
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday 22 April 2010 11:37:48 am Oliver Geisler wrote:
</span><br>
<span class="quotelev2">&gt;&gt; To sum up and give an update:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The extended communication times while using shared memory  
</span><br>
<span class="quotelev2">&gt;&gt; communication
</span><br>
<span class="quotelev2">&gt;&gt; of openmpi processes are caused by openmpi session directory laying  
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; the network via NFS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is resolved by establishing on each diskless node a  
</span><br>
<span class="quotelev2">&gt;&gt; ramdisk
</span><br>
<span class="quotelev2">&gt;&gt; or mounting a tmpfs. By setting the MCA parameter orte_tmpdir_base to
</span><br>
<span class="quotelev2">&gt;&gt; point to the according mountpoint shared memory communication and its
</span><br>
<span class="quotelev2">&gt;&gt; files are kept local, thus decreasing the communication times by
</span><br>
<span class="quotelev2">&gt;&gt; magnitudes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The relation of the problem to the kernel version is not really
</span><br>
<span class="quotelev2">&gt;&gt; resolved, but maybe not &quot;the problem&quot; in this respect.
</span><br>
<span class="quotelev2">&gt;&gt; My benchmark is now running fine on a single node with 4 CPU, kernel
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.33.1 and openmpi 1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt; Running on multiple nodes I experience still higher (TCP)  
</span><br>
<span class="quotelev2">&gt;&gt; communication
</span><br>
<span class="quotelev2">&gt;&gt; times than I would expect. But that requires me some more deep
</span><br>
<span class="quotelev2">&gt;&gt; researching the issue (e.g. collisions on the network) and should
</span><br>
<span class="quotelev2">&gt;&gt; probably posted to a new thread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you guys for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; oli
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
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
<li><strong>Next message:</strong> <a href="7793.php">Rayson Ho: "Re: [OMPI devel] New OMPI MPI extension"</a>
<li><strong>Previous message:</strong> <a href="7791.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7791.php">Rainer Keller: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
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

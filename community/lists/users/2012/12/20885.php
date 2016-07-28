<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 04:41:17 2012" -->
<!-- isoreceived="20121206094117" -->
<!-- sent="Thu, 06 Dec 2012 11:41:03 +0200" -->
<!-- isosent="20121206094103" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50C0682F.6080404_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50BDA451.8060800_at_uci.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 04:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20886.php">утс║: "[OMPI users] MPI_WAIT is a non-local operation"</a>
<li><strong>Previous message:</strong> <a href="20884.php">Jeff Squyres: "Re: [OMPI users] Is mpi_igather (non blocking) part of openmpi?"</a>
<li><strong>In reply to:</strong> <a href="20871.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20909.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20909.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joseph, 
<br>
<p>Indeed, there was a problem in the MXM rpm.
<br>
The fixed MXM has been published at the same location: 
<br>
&nbsp;&nbsp;<a href="http://mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar">http://mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar</a>
<br>
<p>-- YK
<br>
<p>On 12/4/2012 9:20 AM, Joseph Farran wrote:
<br>
<span class="quotelev1">&gt; Hi Mike.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Removed the old mxm, downloaded and installed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /tmp/mxm/v1.1/per-ofed/1.5.4.1/mxm-1.1.3a5e745-1.x86_64-rhel6u3.rpm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am suing OFED 1.5.4.1 and it still fails at the same spot:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev1">&gt; CC mtl_mxm.lo
</span><br>
<span class="quotelev1">&gt; CC mtl_mxm_cancel.lo
</span><br>
<span class="quotelev1">&gt; CC mtl_mxm_component.lo
</span><br>
<span class="quotelev1">&gt; CC mtl_mxm_endpoint.lo
</span><br>
<span class="quotelev1">&gt; CC mtl_mxm_probe.lo
</span><br>
<span class="quotelev1">&gt; CC mtl_mxm_recv.lo
</span><br>
<span class="quotelev1">&gt; CC mtl_mxm_send.lo
</span><br>
<span class="quotelev1">&gt; CCLD mca_mtl_mxm.la
</span><br>
<span class="quotelev1">&gt; /bin/grep: /usr/local/mofed-inst/1.5.4.1/lib/librdmacm.la: No such file or directory
</span><br>
<span class="quotelev1">&gt; /bin/sed: can't read /usr/local/mofed-inst/1.5.4.1/lib/librdmacm.la: No such file or directory
</span><br>
<span class="quotelev1">&gt; libtool: link: `/usr/local/mofed-inst/1.5.4.1/lib/librdmacm.la' is not a valid libtool archive
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mca_mtl_mxm.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/2/2012 10:18 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ohh.. you have MOFED 1.5.4.1, thought it was 1.5.3-3.1.0
</span><br>
<span class="quotelev2">&gt;&gt; will provide you a link to mxm package compiled with this MOFED version (thanks to no ABI in OFED).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Dec 2, 2012 at 10:04 PM, Joseph Farran &lt;jfarran_at_[hidden] &lt;mailto:jfarran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.5.4.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20886.php">утс║: "[OMPI users] MPI_WAIT is a non-local operation"</a>
<li><strong>Previous message:</strong> <a href="20884.php">Jeff Squyres: "Re: [OMPI users] Is mpi_igather (non blocking) part of openmpi?"</a>
<li><strong>In reply to:</strong> <a href="20871.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20909.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20909.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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

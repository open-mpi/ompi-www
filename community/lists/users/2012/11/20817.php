<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 17:59:36 2012" -->
<!-- isoreceived="20121129225936" -->
<!-- sent="Fri, 30 Nov 2012 00:59:28 +0200" -->
<!-- isosent="20121129225928" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50B7E8D0.6070806_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B7D8B9.4030402_at_uci.edu" -->
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
<strong>Date:</strong> 2012-11-29 17:59:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20818.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20816.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>In reply to:</strong> <a href="20812.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20818.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20818.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joseph,
<br>
<p>On 11/29/2012 11:50 PM, Joseph Farran wrote:
<br>
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
<span class="quotelev1">&gt; /bin/grep: /usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la: No such file or directory
</span><br>
<span class="quotelev1">&gt; /bin/sed: can't read /usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la: No such file or directory
</span><br>
<span class="quotelev1">&gt; libtool: link: `/usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la' is not a valid libtool archive
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
<span class="quotelev1">&gt; No where in my system can I find &quot;librdmacm.la&quot; What am I missing?
</span><br>
<p>You're supposed to have librdmacm installed as part of MLNX_OFED installation. 
<br>
What does &quot;rpm -qa | grep rdma&quot; tell?
<br>
<p>&nbsp;&nbsp;$ rpm -qa | grep rdma
<br>
&nbsp;&nbsp;librdmacm-devel-1.0.14.1-1.x86_64
<br>
&nbsp;&nbsp;librdmacm-utils-1.0.14.1-1.x86_64
<br>
&nbsp;&nbsp;librdmacm-1.0.14.1-1.x86_64
<br>
<p>&nbsp;&nbsp;$ locate librdmacm.la
<br>
&nbsp;&nbsp;/usr/local/mofed/1.5.3-4.0.9/lib/librdmacm.la
<br>
<p>-- YK
<br>
<p>&nbsp;
<br>
<span class="quotelev1">&gt; Joseph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20818.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20816.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>In reply to:</strong> <a href="20812.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20818.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20818.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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

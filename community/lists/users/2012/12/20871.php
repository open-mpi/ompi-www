<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 02:21:04 2012" -->
<!-- isoreceived="20121204072104" -->
<!-- sent="Mon, 03 Dec 2012 23:20:49 -0800" -->
<!-- isosent="20121204072049" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50BDA451.8060800_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL3GGtr8d7VmfV5HT61Ebr33dzJKer8sd809=1ogxBAv6dNUgQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Joseph Farran (<em>jfarran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-04 02:20:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20872.php">William Hay: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>Previous message:</strong> <a href="20870.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>In reply to:</strong> <a href="20854.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20885.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20885.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mike.
<br>
<p>Removed the old mxm, downloaded and installed:
<br>
<p>/tmp/mxm/v1.1/per-ofed/1.5.4.1/mxm-1.1.3a5e745-1.x86_64-rhel6u3.rpm
<br>
<p>I am suing OFED 1.5.4.1 and it still fails at the same spot:
<br>
<p>make[2]: Entering directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_cancel.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_component.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_endpoint.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_probe.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_recv.lo
<br>
&nbsp;&nbsp;&nbsp;CC     mtl_mxm_send.lo
<br>
&nbsp;&nbsp;&nbsp;CCLD   mca_mtl_mxm.la
<br>
/bin/grep: /usr/local/mofed-inst/1.5.4.1/lib/librdmacm.la: No such file or directory
<br>
/bin/sed: can't read /usr/local/mofed-inst/1.5.4.1/lib/librdmacm.la: No such file or directory
<br>
libtool: link: `/usr/local/mofed-inst/1.5.4.1/lib/librdmacm.la' is not a valid libtool archive
<br>
make[2]: *** [mca_mtl_mxm.la] Error 1
<br>
make[2]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/data/apps/sources/openmpi-1.6.3/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>On 12/2/2012 10:18 PM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; ohh.. you have MOFED 1.5.4.1, thought it was 1.5.3-3.1.0
</span><br>
<span class="quotelev1">&gt; will provide you a link to mxm package compiled with this MOFED version (thanks to no ABI in OFED).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 2, 2012 at 10:04 PM, Joseph Farran &lt;jfarran_at_[hidden] &lt;mailto:jfarran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1.5.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20872.php">William Hay: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>Previous message:</strong> <a href="20870.php">Eric Chamberland: "Re: [OMPI users] Romio and OpenMPI builds"</a>
<li><strong>In reply to:</strong> <a href="20854.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20885.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20885.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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

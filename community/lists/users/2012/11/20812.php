<?
$subject_val = "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 16:50:56 2012" -->
<!-- isoreceived="20121129215056" -->
<!-- sent="Thu, 29 Nov 2012 13:50:49 -0800" -->
<!-- isosent="20121129215049" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CentOS 6.3 &amp;amp; OpenMPI 1.6.3" -->
<!-- id="50B7D8B9.4030402_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL3GGtq_iSgmMyWGUL_JCyPqx_2BO7BpewNvp_2sbuYftVOSsw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-11-29 16:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20813.php">Joseph Farran: "[OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20811.php">Shane Hart: "[OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>In reply to:</strong> <a href="20793.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20817.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20817.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/28/2012 10:53 AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; You need mxm-1.1.3a5e745-1.x86_64-rhel6u3.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 28, 2012 at 7:44 PM, Joseph Farran &lt;jfarran_at_[hidden] &lt;mailto:jfarran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mxm-1.1.3a5e745-1.x86_64-rhel6u3.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>After installing MLNX_OFED_LINUX-1.5.3-3.1.0-rhel6.3-x86_64, removing the old mxm and installing the corrrect mxm, I still cannot get OpenMPI to compile.
<br>
<p>rpm -qa|fgrep mxm
<br>
mxm-1.1.3a5e745-1.x86_64
<br>
<p>My compile of openmpi 1.6.3 with the following configs fails:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-sge                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib                           \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-openib-connectx-xrc            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads                          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-hwloc                            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous                  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-fca=/opt/mellanox/fca            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mxm=/opt/mellanox/mxm            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mxm-libdir=/opt/mellanox/mxm/lib \
<br>
<p><p>make[2]: Entering directory `/data/apps/sources/openmpi-1.6.3/ompi/mca/mtl/mxm'
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
/bin/grep: /usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la: No such file or directory
<br>
/bin/sed: can't read /usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la: No such file or directory
<br>
libtool: link: `/usr/local/mofed-inst/1.5.3-3.0.0/lib/librdmacm.la' is not a valid libtool archive
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
<p><p>No where in my system can I find &quot;librdmacm.la&quot;    What am I missing?
<br>
<p>Joseph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20813.php">Joseph Farran: "[OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20811.php">Shane Hart: "[OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>In reply to:</strong> <a href="20793.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20817.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Reply:</strong> <a href="20817.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
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

<?
$subject_val = "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 14:38:10 2012" -->
<!-- isoreceived="20121205193810" -->
<!-- sent="Wed, 5 Dec 2012 19:37:03 +0000" -->
<!-- isosent="20121205193703" -->
<!-- name="Konz, Jeffrey (SSA Solution Centers)" -->
<!-- email="jeffrey.konz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.6.3 &amp;amp; MXM" -->
<!-- id="77486CDD5CFC9449BEE3C555886D8A90731F4480_at_G4W3213.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50BB13BD.4080204_at_uci.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM<br>
<strong>From:</strong> Konz, Jeffrey (SSA Solution Centers) (<em>jeffrey.konz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-05 14:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20882.php">JR Cary: "[OMPI users] Is mpi_igather (non blocking) part of openmpi?"</a>
<li><strong>Previous message:</strong> <a href="20880.php">Brian Budge: "Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<li><strong>In reply to:</strong> <a href="20845.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I contacted Mellanox and there is a problem with version 1.1.3a5e745 rpm.
<br>
<p>Download the latest version 1.1.ad085ef from
<br>
&nbsp;&nbsp;<a href="http://mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar">http://mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar</a>
<br>
It builds fine with openmpi-1.6.3.
<br>
<p>-Jeff
<br>
<p><p>/**********************************************************/
<br>
/* Jeff Konz                          jeffrey.konz_at_[hidden] */
<br>
/* Solutions Architect                   HPC Benchmarking */
<br>
/* Americas Shared Solutions Architecture (SSA)           */
<br>
/* Hewlett-Packard Company                                */
<br>
/* Office: 248-491-7480              Mobile: 248-345-6857 */
<br>
/**********************************************************/
<br>
<p>From: Joseph Farran [mailto:jfarran_at_[hidden]]
<br>
Sent: Sunday, December 02, 2012 3:39 AM
<br>
To: Mike Dubman
<br>
Cc: Open MPI Users; Konz, Jeffrey (SSA Solution Centers)
<br>
Subject: Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM
<br>
<p>Hi again.
<br>
<p>I believe I have the latest mxm:
<br>
<p># rpm -qa| fgrep mxm
<br>
mxm-1.1.3a5e745-1.x86_64
<br>
<p>Let me know if I have the config part correct from previous email.
<br>
<p>Best,
<br>
Joseph
<br>
<p><p>On 12/1/2012 11:44 PM, Mike Dubman wrote:
<br>
Hi,
<br>
<p>The mxm which is part of MOFED 1.5.3 supports OMPI 1.6.0.
<br>
<p>The mxm upgrade is needed to work with OMPI 1.6.3+
<br>
<p>Please remove mxm from your cluster nodes (rpm -e mxm)
<br>
Install latest from  <a href="http://mellanox/com/products/mxm/">http://mellanox/com/products/mxm/</a>
<br>
Compile ompi 1.6.3, add following to its configure line: ./configure --with-openib=/usr --with-mxm=/opt/mellanox/mxm &lt;...&gt;)
<br>
<p>Regards
<br>
M
<br>
On Sat, Dec 1, 2012 at 2:23 AM, Joseph Farran &lt;jfarran_at_[hidden]&lt;mailto:jfarran_at_[hidden]&gt;&gt; wrote:
<br>
Konz,
<br>
<p>For whatever it is worth, I am in the same boat.
<br>
<p>I have CentOS 6.3, trying to compile OpenMPI 1.6.3 with the mxm from Mellanox and it fails.
<br>
<p>Also, the Mellanox OFED ( MLNX_OFED_LINUX-1.5.3-3.1.0-rhel6.3-x86_64 ) does not work either.
<br>
<p>Mellanox really needs to step in here and help out.
<br>
<p>I have a cluster full of Mellanox products and I hate to think we chose the wrong Infiniband vendor.
<br>
<p>Joseph
<br>
<p><p><p>On 11/30/2012 12:33 PM, Konz, Jeffrey (SSA Solution Centers) wrote:
<br>
<p>I tried building the latest OpenMPI-1.6.3 with MXM support and got this error:
<br>
<p><p><p>make[2]: Entering directory `Src/openmpi-1.6.3/ompi/mca/mtl/mxm'
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_cancel.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_component.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_endpoint.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_probe.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_recv.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_send.lo
<br>
<p>mtl_mxm_send.c: In function 'ompi_mtl_mxm_send':
<br>
<p>mtl_mxm_send.c:96: error: 'mxm_wait_t' undeclared (first use in this function)
<br>
<p>mtl_mxm_send.c:96: error: (Each undeclared identifier is reported only once
<br>
<p>mtl_mxm_send.c:96: error: for each function it appears in.)
<br>
<p>mtl_mxm_send.c:96: error: expected ';' before 'wait'
<br>
<p>mtl_mxm_send.c:104: error: 'MXM_REQ_FLAG_BLOCKING' undeclared (first use in this function)
<br>
<p>mtl_mxm_send.c:118: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use in this function)
<br>
<p>mtl_mxm_send.c:134: error: 'wait' undeclared (first use in this function)
<br>
<p>mtl_mxm_send.c: In function 'ompi_mtl_mxm_isend':
<br>
<p>mtl_mxm_send.c:183: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use in this function)
<br>
<p>make[2]: *** [mtl_mxm_send.lo] Error 1
<br>
<p><p><p><p><p>Our OFED is 1.5.3 and our MXM version is 1.0.601.
<br>
<p><p><p>Thanks,
<br>
<p><p><p>-Jeff
<br>
<p><p><p>/**********************************************************/
<br>
<p>/* Jeff Konz                          jeffrey.konz_at_[hidden]&lt;mailto:jeffrey.konz_at_[hidden]&gt; */
<br>
<p>/* Solutions Architect                   HPC Benchmarking */
<br>
<p>/* Americas Shared Solutions Architecture (SSA)           */
<br>
<p>/* Hewlett-Packard Company                                */
<br>
<p>/* Office: 248-491-7480&lt;tel:248-491-7480&gt;              Mobile: 248-345-6857&lt;tel:248-345-6857&gt; */
<br>
<p>/**********************************************************/
<br>
<p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20882.php">JR Cary: "[OMPI users] Is mpi_igather (non blocking) part of openmpi?"</a>
<li><strong>Previous message:</strong> <a href="20880.php">Brian Budge: "Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<li><strong>In reply to:</strong> <a href="20845.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
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

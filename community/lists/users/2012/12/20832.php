<?
$subject_val = "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 02:44:29 2012" -->
<!-- isoreceived="20121202074429" -->
<!-- sent="Sun, 2 Dec 2012 09:44:04 +0200" -->
<!-- isosent="20121202074404" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.6.3 &amp;amp; MXM" -->
<!-- id="CAL3GGtrkx+06FMx=KwfkGpWxNqHTXYDC1j3zsUpaBwuCD19bbA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B94E17.8010601_at_uci.edu" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-02 02:44:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20833.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20831.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="../../2012/11/20823.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20834.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Reply:</strong> <a href="20834.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
Compile ompi 1.6.3, add following to its configure line: ./configure
<br>
--with-openib=/usr --with-mxm=/opt/mellanox/mxm &lt;...&gt;)
<br>
<p>Regards
<br>
M
<br>
<p>On Sat, Dec 1, 2012 at 2:23 AM, Joseph Farran &lt;jfarran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Konz,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For whatever it is worth, I am in the same boat.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have CentOS 6.3, trying to compile OpenMPI 1.6.3 with the mxm from
</span><br>
<span class="quotelev1">&gt; Mellanox and it fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, the Mellanox OFED ( MLNX_OFED_LINUX-1.5.3-3.1.0-rhel6.3-x86_64 )
</span><br>
<span class="quotelev1">&gt; does not work either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mellanox really needs to step in here and help out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a cluster full of Mellanox products and I hate to think we chose
</span><br>
<span class="quotelev1">&gt; the wrong Infiniband vendor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joseph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/30/2012 12:33 PM, Konz, Jeffrey (SSA Solution Centers) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I tried building the latest OpenMPI-1.6.3 with MXM support and got this
</span><br>
<span class="quotelev1">&gt; error:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `Src/openmpi-1.6.3/ompi/mca/mtl/mxm'****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm.lo****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_cancel.lo****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_component.lo****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_endpoint.lo****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_probe.lo****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_recv.lo****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_send.lo****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c: In function 'ompi_mtl_mxm_send':****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:96: error: 'mxm_wait_t' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; function)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:96: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:96: error: for each function it appears in.)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:96: error: expected ';' before 'wait'****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:104: error: 'MXM_REQ_FLAG_BLOCKING' undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:118: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:134: error: 'wait' undeclared (first use in this function)*
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c: In function 'ompi_mtl_mxm_isend':****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:183: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mtl_mxm_send.lo] Error 1****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our OFED is 1.5.3 and our MXM version is 1.0.601. ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Jeff****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**********************************************************/****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Jeff Konz                          jeffrey.konz_at_[hidden] */****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Solutions Architect                   HPC Benchmarking */****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Americas Shared Solutions Architecture (SSA)           */****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Hewlett-Packard Company                                */****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Office: 248-491-7480              Mobile: 248-345-6857 */ ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**********************************************************/****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-20832/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20833.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20831.php">Mike Dubman: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="../../2012/11/20823.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20834.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Reply:</strong> <a href="20834.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
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

<?
$subject_val = "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 19:24:04 2012" -->
<!-- isoreceived="20121201002404" -->
<!-- sent="Fri, 30 Nov 2012 16:23:51 -0800" -->
<!-- isosent="20121201002351" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.6.3 &amp;amp; MXM" -->
<!-- id="50B94E17.8010601_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="77486CDD5CFC9449BEE3C555886D8A90731EE172_at_G4W3213.americas.hpqcorp.net" -->
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
<strong>From:</strong> Joseph Farran (<em>jfarran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-30 19:23:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20835.php">Ralph Castain: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20833.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="20830.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20843.php">Mike Dubman: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20843.php">Mike Dubman: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p><p>On 11/30/2012 12:33 PM, Konz, Jeffrey (SSA Solution Centers) wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried building the latest OpenMPI-1.6.3 with MXM support and got this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `Src/openmpi-1.6.3/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_cancel.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_component.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_endpoint.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_probe.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_recv.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC     mtl_mxm_send.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c: In function 'ompi_mtl_mxm_send':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:96: error: 'mxm_wait_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:96: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:96: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:96: error: expected ';' before 'wait'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:104: error: 'MXM_REQ_FLAG_BLOCKING' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:118: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:134: error: 'wait' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c: In function 'ompi_mtl_mxm_isend':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtl_mxm_send.c:183: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mtl_mxm_send.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our OFED is 1.5.3 and our MXM version is 1.0.601.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**********************************************************/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Jeff Konz                          jeffrey.konz_at_[hidden] */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Solutions Architect                   HPC Benchmarking */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Americas Shared Solutions Architecture (SSA)           */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Hewlett-Packard Company                                */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Office: 248-491-7480              Mobile: 248-345-6857 */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /**********************************************************/
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20834/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20835.php">Ralph Castain: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20833.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="20830.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20843.php">Mike Dubman: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20843.php">Mike Dubman: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
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

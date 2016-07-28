<?
$subject_val = "Re: [OMPI users] btl_openib_receive_queues	&amp;	mca-btl-openib-device-params.ini";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 14:52:12 2015" -->
<!-- isoreceived="20151105195212" -->
<!-- sent="Thu, 5 Nov 2015 19:52:06 +0000" -->
<!-- isosent="20151105195206" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_receive_queues	&amp;amp;	mca-btl-openib-device-params.ini" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC52059609_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ADAB0C47-F413-45AF-910D-AE16C46E66BE_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_receive_queues	&amp;	mca-btl-openib-device-params.ini<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 14:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28010.php">Harald Servat: "[OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Previous message:</strong> <a href="28008.php">Shamis, Pavel: "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini"</a>
<li><strong>In reply to:</strong> <a href="28008.php">Shamis, Pavel: "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did some code-digging and I found the answer.
<br>
<p>If the MCA parameter btl_openib_receive_queues is not spec'd on the mpirun command line and not specified in MPI_HOME/share/openmpi/mca-btl-openib-device-params.ini  (via receive_queues parameter), then OpenMPI derives the default setting from the code in ompi/mca/btl/openib/btl_openib_mca.c.  If you look in that code you will see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;snprintf(default_qps, 100,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;P,128,256,192,128:S,%u,1024,1008,64:S,%u,1024,1008,64:S,%u,1024,1008,64&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mid_qp_size,   // For S,%u,1024,1008,64 where %u == 2048
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(uint32_t)mca_btl_openib_module.super.btl_eager_limit,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(uint32_t)mca_btl_openib_module.super.btl_max_send_size);
<br>
<p>So for OpenMPI 1.6.5 we have:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
<br>
<p>So you can examine the code and see how the %u's are filled in to get the resultant default btl_openib_receive_queues.
<br>
<p>Nice if this was documented!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--john
<br>
<p><p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Shamis, Pavel
<br>
Sent: Thursday, November 05, 2015 2:41 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] btl_openib_receive_queues &amp; mca-btl-openib-device-params.ini
<br>
<p>Below is from ompi_info:
<br>
<p>$ ompi_info --all | grep btl_openib_receive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_receive_queues&quot; (current value: &lt;P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64&gt;, data source: default value)
<br>
<p>This tunning does make sense for me.
<br>
<p><p><p>#    receive_queues = P,128,256,192,128:S,65536,256,192,128
<br>
<p>Most likely it was not updated for a long time.
<br>
I'm pretty sure the ompi_info version is the one that actually used.
<br>
<p><p><p>So comparing the two above, they don't coincide, in particular for the SRQ settings.  Thus, I gather the settings reported by ompi_info above are those that are actually used, and if so, I am wondering where/how they are derived?
<br>
<p>The idea behind this parameters is coming from here:
<br>
<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2007-ib/euro-pvmmpi-2007-ib.pdf<https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_papers_euro-2Dpvmmpi-2D2007-2Dib_euro-2Dpvmmpi-2D2007-2Dib.pdf&amp;d=CwMF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWS">http://www.open-mpi.org/papers/euro-pvmmpi-2007-ib/euro-pvmmpi-2007-ib.pdf<https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_papers_euro-2Dpvmmpi-2D2007-2Dib_euro-2Dpvmmpi-2D2007-2Dib.pdf&amp;d=CwMF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWS</a>I&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=ful34HOXqlPDIxbufExLGHQRNlgb5Oy60k_TKVG3VmI&amp;s=YOBOBrSC7_mvy-6Z2gqNRLZGDJTQ9UoTa1pZpzfxIcY&amp;e=&gt;
<br>
And later on XRC support was introduced:
<br>
<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2008-xrc/euro-pvmmpi-2008-xrc.pdf<https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_papers_euro-2Dpvmmpi-2D2008-2Dxrc_euro-2Dpvmmpi-2D2008-2Dxrc.pdf&amp;d=CwMF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrD">http://www.open-mpi.org/papers/euro-pvmmpi-2008-xrc/euro-pvmmpi-2008-xrc.pdf<https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_papers_euro-2Dpvmmpi-2D2008-2Dxrc_euro-2Dpvmmpi-2D2008-2Dxrc.pdf&amp;d=CwMF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrD</a>QYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=ful34HOXqlPDIxbufExLGHQRNlgb5Oy60k_TKVG3VmI&amp;s=wKpbgirfQeTb_SW5gKhPep2khno1MHxnc-LdWVkk7Og&amp;e=&gt;
<br>
<p>Best,
<br>
Pasha
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28010.php">Harald Servat: "[OMPI users] MPI symbols invoked from PMPI calls?"</a>
<li><strong>Previous message:</strong> <a href="28008.php">Shamis, Pavel: "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini"</a>
<li><strong>In reply to:</strong> <a href="28008.php">Shamis, Pavel: "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini"</a>
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

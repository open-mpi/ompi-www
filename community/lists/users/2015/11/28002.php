<?
$subject_val = "[OMPI users] btl_openib_receive_queues &amp; mca-btl-openib-device-params.ini";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 09:16:44 2015" -->
<!-- isoreceived="20151105141644" -->
<!-- sent="Thu, 5 Nov 2015 14:16:29 +0000" -->
<!-- isosent="20151105141629" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="[OMPI users] btl_openib_receive_queues &amp;amp; mca-btl-openib-device-params.ini" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC520594DD_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] btl_openib_receive_queues &amp; mca-btl-openib-device-params.ini<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 09:16:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28003.php">Jason Cook: "[OMPI users] Open MPI CPU Binding Related Questions."</a>
<li><strong>Previous message:</strong> <a href="28001.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28008.php">Shamis, Pavel: "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini"</a>
<li><strong>Reply:</strong> <a href="28008.php">Shamis, Pavel: "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Inquiring about how btl_openib_receive_queues actually gets its default setting, since what I am seeing is not joving with documentation.  We are using OpenMPI 1.6.5, but I gather the version is moot.
<br>
<p>Below is from ompi_info:
<br>
<p>$ ompi_info --all | grep btl_openib_receive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_receive_queues&quot; (current value: &lt;P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64&gt;, data source: default value)
<br>
<p><p>And based on the IB HCA part ID, this is the entry in mca-btl-openib-device-params.ini which is applicable:
<br>
<p># A.k.a. ConnectX
<br>
[Mellanox Hermon]
<br>
vendor_id = 0x2c9,0x5ad,0x66a,0x8f1,0x1708,0x03ba,0x15b3,0x119f
<br>
vendor_part_id = 25408,25418,25428,25448,26418,26428,26438,26448,26468,26478,26488,4099,4103,4100
<br>
use_eager_rdma = 1
<br>
mtu = 2048
<br>
max_inline_data = 128
<br>
<p><p>Yet according to the doc in mca-btl-openib-device-params.ini, the default setting if receive_queues is not specified should be:
<br>
<p>#    receive_queues = P,128,256,192,128:S,65536,256,192,128
<br>
<p>So comparing the two above, they don't coincide, in particular for the SRQ settings.  Thus, I gather the settings reported by ompi_info above are those that are actually used, and if so, I am wondering where/how they are derived?
<br>
<p>--john
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28002/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28003.php">Jason Cook: "[OMPI users] Open MPI CPU Binding Related Questions."</a>
<li><strong>Previous message:</strong> <a href="28001.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28008.php">Shamis, Pavel: "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini"</a>
<li><strong>Reply:</strong> <a href="28008.php">Shamis, Pavel: "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini"</a>
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

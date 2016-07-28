<?
$subject_val = "Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 14:40:53 2015" -->
<!-- isoreceived="20151105194053" -->
<!-- sent="Thu, 5 Nov 2015 19:40:49 +0000" -->
<!-- isosent="20151105194049" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_receive_queues &amp;amp;	mca-btl-openib-device-params.ini" -->
<!-- id="ADAB0C47-F413-45AF-910D-AE16C46E66BE_at_ornl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC520594DD_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_receive_queues &amp;	mca-btl-openib-device-params.ini<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 14:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28009.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] btl_openib_receive_queues	&amp;	mca-btl-openib-device-params.ini"</a>
<li><strong>Previous message:</strong> <a href="28007.php">Dave Love: "Re: [OMPI users] Open MPI CPU Binding Related Questions."</a>
<li><strong>In reply to:</strong> <a href="28002.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] btl_openib_receive_queues &amp; mca-btl-openib-device-params.ini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28009.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] btl_openib_receive_queues	&amp;	mca-btl-openib-device-params.ini"</a>
<li><strong>Reply:</strong> <a href="28009.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] btl_openib_receive_queues	&amp;	mca-btl-openib-device-params.ini"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Below is from ompi_info:
<br>
<p>$ ompi_info --all | grep btl_openib_receive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_receive_queues&quot; (current value: &lt;P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64&gt;, data source: default value)
<br>
<p>This tunning does make sense for me.
<br>
<p><p>#    receive_queues = P,128,256,192,128:S,65536,256,192,128
<br>
<p>Most likely it was not updated for a long time.
<br>
I'm pretty sure the ompi_info version is the one that actually used.
<br>
<p><p>So comparing the two above, they don&#146;t coincide, in particular for the SRQ settings.  Thus, I gather the settings reported by ompi_info above are those that are actually used, and if so, I am wondering where/how they are derived?
<br>
<p>The idea behind this parameters is coming from here:
<br>
<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2007-ib/euro-pvmmpi-2007-ib.pdf">http://www.open-mpi.org/papers/euro-pvmmpi-2007-ib/euro-pvmmpi-2007-ib.pdf</a>
<br>
And later on XRC support was introduced:
<br>
<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2008-xrc/euro-pvmmpi-2008-xrc.pdf">http://www.open-mpi.org/papers/euro-pvmmpi-2008-xrc/euro-pvmmpi-2008-xrc.pdf</a>
<br>
<p>Best,
<br>
Pasha
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28008/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28009.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] btl_openib_receive_queues	&amp;	mca-btl-openib-device-params.ini"</a>
<li><strong>Previous message:</strong> <a href="28007.php">Dave Love: "Re: [OMPI users] Open MPI CPU Binding Related Questions."</a>
<li><strong>In reply to:</strong> <a href="28002.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] btl_openib_receive_queues &amp; mca-btl-openib-device-params.ini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28009.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] btl_openib_receive_queues	&amp;	mca-btl-openib-device-params.ini"</a>
<li><strong>Reply:</strong> <a href="28009.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] btl_openib_receive_queues	&amp;	mca-btl-openib-device-params.ini"</a>
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

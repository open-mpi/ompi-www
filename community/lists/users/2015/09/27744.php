<?
$subject_val = "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 11:27:40 2015" -->
<!-- isoreceived="20150930152740" -->
<!-- sent="Wed, 30 Sep 2015 15:27:39 +0000" -->
<!-- isosent="20150930152739" -->
<!-- name="Grigory Shamov" -->
<!-- email="Grigory.Shamov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="D2315C76.7D6C8%Grigory.Shamov_at_ad.umanitoba.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="560BCE0F.7090603_at_dkrz.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?<br>
<strong>From:</strong> Grigory Shamov (<em>Grigory.Shamov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 11:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27745.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27743.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>In reply to:</strong> <a href="27729.php">Thomas Jahns: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Thomas,
<br>
<p>Thank you for the suggestion! Will try it.
<br>
<p><pre>
-- 
Grigory Shamov
On 15-09-30 6:57 AM, &quot;users on behalf of Thomas Jahns&quot;
&lt;users-bounces_at_[hidden] on behalf of jahns_at_[hidden]&gt; wrote:
&gt;Hello,
&gt;
&gt;On 09/28/15 18:36, Grigory Shamov wrote:
&gt;&gt; The question is if we should do as MXM wants, or ignore it? Has anyone
&gt;&gt;an
&gt;&gt; experience running recent OpenMPI with MXM enabled, and what kind of
&gt;&gt; ulimits do you have? Any suggestions/comments appreciated, thanks!
&gt;
&gt;It should be sufficient to set the limits to the amount of real memory
&gt;your 
&gt;cluster nodes have (i.e. if you have 64GiB), just limit both heap and
&gt;stack to 
&gt;64GiB.
&gt;
&gt;This way you don't run out of address space for mappings.
&gt;
&gt;Regards, Thomas
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27745.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27743.php">marcin.krotkiewski: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>In reply to:</strong> <a href="27729.php">Thomas Jahns: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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

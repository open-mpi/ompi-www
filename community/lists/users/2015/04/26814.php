<?
$subject_val = "Re: [OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 16:09:36 2015" -->
<!-- isoreceived="20150429200936" -->
<!-- sent="Wed, 29 Apr 2015 22:09:32 +0200" -->
<!-- isosent="20150429200932" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new hwloc error" -->
<!-- id="55413A7C.1010104_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8DD2B552-2B83-47F5-AD9A-BD8CBF7D0CCA_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] new hwloc error<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-29 16:09:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26815.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26813.php">Lev Givon: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>In reply to:</strong> <a href="26812.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26815.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26815.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/04/2015 18:55, Noam Bernstein a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; On Apr 29, 2015, at 12:47 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks. It's indeed normal that OMPI failed to bind to cpuset 0,16 since
</span><br>
<span class="quotelev2">&gt;&gt; 16 doesn't exist at all.
</span><br>
<span class="quotelev2">&gt;&gt; Can you run &quot;lstopo foo.xml&quot; on one node where it failed, and send the
</span><br>
<span class="quotelev2">&gt;&gt; foo.xml that got generated? Just want to make sure we don't have invalid
</span><br>
<span class="quotelev2">&gt;&gt; cpusets in there.
</span><br>
<span class="quotelev1">&gt; It&#146;s attached. Thanks for the help, by the way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nothing wrong in that XML. I don't see what could be happening besides a
<br>
node rebooting with hyper-threading enabled for random reasons.
<br>
Please run &quot;lstopo foo.xml&quot; again on the node next time you get the OMPI
<br>
failure (assuming you get a chance to log on the node before it reboots
<br>
etc).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26815.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26813.php">Lev Givon: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>In reply to:</strong> <a href="26812.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26815.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26815.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
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

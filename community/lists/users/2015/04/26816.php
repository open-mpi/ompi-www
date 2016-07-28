<?
$subject_val = "Re: [OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 16:43:39 2015" -->
<!-- isoreceived="20150429204339" -->
<!-- sent="Wed, 29 Apr 2015 22:43:28 +0200" -->
<!-- isosent="20150429204328" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new hwloc error" -->
<!-- id="55414270.9090109_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="771529B3-462F-4C2F-B4FE-96BD7F3C3BA5_at_nrl.navy.mil" -->
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
<strong>Date:</strong> 2015-04-29 16:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26817.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26815.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26815.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26817.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26817.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/04/2015 22:25, Noam Bernstein a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; On Apr 29, 2015, at 4:09 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nothing wrong in that XML. I don't see what could be happening besides a
</span><br>
<span class="quotelev2">&gt;&gt; node rebooting with hyper-threading enabled for random reasons.
</span><br>
<span class="quotelev2">&gt;&gt; Please run &quot;lstopo foo.xml&quot; again on the node next time you get the OMPI
</span><br>
<span class="quotelev2">&gt;&gt; failure (assuming you get a chance to log on the node before it reboots
</span><br>
<span class="quotelev2">&gt;&gt; etc).
</span><br>
<span class="quotelev1">&gt; Thanks.  Do you understand why OpenMPI would even try to bind core #16?  I&#146;m pretty sure it was a 16 task job on a 16 (physical) core machine - shouldn&#146;t it try to bind 0-15 only?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If I am reading your first error correctly:
<br>
<p>hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;0,16&quot;
<br>
<p>hwloc gave a &quot;bitmap&quot; containing bits 0 and 16 to OMPI, and OMPI just
<br>
tried to bind on these processors.
<br>
<p>Two possible reasons:
<br>
* OMPI confused some nodes: one node with more than 16 cores/threads got
<br>
such a bitmap and OMPI ended up using it for binding or another node
<br>
* hwloc generated this invalid bitmap
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26817.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26815.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26815.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26817.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26817.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
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

<?
$subject_val = "Re: [OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 16:25:53 2015" -->
<!-- isoreceived="20150429202553" -->
<!-- sent="Wed, 29 Apr 2015 16:25:49 -0400" -->
<!-- isosent="20150429202549" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new hwloc error" -->
<!-- id="771529B3-462F-4C2F-B4FE-96BD7F3C3BA5_at_nrl.navy.mil" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55413A7C.1010104_at_inria.fr" -->
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
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-29 16:25:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26816.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26814.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26814.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26816.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26816.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Apr 29, 2015, at 4:09 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nothing wrong in that XML. I don't see what could be happening besides a
</span><br>
<span class="quotelev1">&gt; node rebooting with hyper-threading enabled for random reasons.
</span><br>
<span class="quotelev1">&gt; Please run &quot;lstopo foo.xml&quot; again on the node next time you get the OMPI
</span><br>
<span class="quotelev1">&gt; failure (assuming you get a chance to log on the node before it reboots
</span><br>
<span class="quotelev1">&gt; etc).
</span><br>
<p>Thanks.  Do you understand why OpenMPI would even try to bind core #16?  I&#146;m pretty sure it was a 16 task job on a 16 (physical) core machine - shouldn&#146;t it try to bind 0-15 only?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>

<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26815/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26816.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26814.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26814.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26816.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26816.php">Brice Goglin: "Re: [OMPI users] new hwloc error"</a>
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

<?
$subject_val = "Re: [OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 17:12:02 2015" -->
<!-- isoreceived="20150601211202" -->
<!-- sent="Mon, 1 Jun 2015 17:11:57 -0400" -->
<!-- isosent="20150601211157" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new hwloc error" -->
<!-- id="DF0115F0-8227-42A1-BA5E-C8D34FA21BDD_at_nrl.navy.mil" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6F3D8287-C3B1-4695-8CD0-B156D5D0F685_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-06-01 17:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27023.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27021.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="27021.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jun 1, 2015, at 5:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This probably isn&#146;t very helpful, but fwiw: we added an automatic &#147;fingerprint&#148; capability in the later OMPI versions just to detect things like this. If the fingerprint of a backend node doesn&#146;t match the head node, we automatically assume hetero-nodes. It isn&#146;t foolproof, but it would have picked this one up.
</span><br>
<p>That sounds useful for actually having more jobs run, but I&#146;d suggest that a warning be printed if this happens without hetero-nodes explicitly specified, since without the jobs crashing, I wouldn&#146;t have even noticed that one of our nodes had HT active.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry you had that trouble.
</span><br>
<p>No problem.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27022/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27023.php">Steve Wise: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27021.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="27021.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
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

<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 17:03:50 2011" -->
<!-- isoreceived="20110223220350" -->
<!-- sent="Wed, 23 Feb 2011 17:03:45 -0500" -->
<!-- isosent="20110223220345" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="6CC6D331-963B-474B-BA35-F66E445DB0F3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9C45617E-7ABC-4261-A380-0F8A2181CC73_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 17:03:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15711.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or	receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15709.php">Eugene Loh: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15708.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15721.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15721.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 23, 2011, at 3:54 PM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; I remember that I updated the trunk to select by default RDMACM connection manager for RoCE ports - <a href="https://svn.open-mpi.org/trac/ompi/changeset/22311">https://svn.open-mpi.org/trac/ompi/changeset/22311</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure it the change made his way to any production version. I don't work on this part code anymore :-)
</span><br>
<p>Mellanox -- can you follow up on this?
<br>
<p>Also, in addition to the patches I provided for selecting an arbitrary GID (I was planning on committing them when Mike tested them at Purdue, but perhaps I should just commit to the trunk anyway), perhaps we should check if a non-default SL is supplied via MCA param in the RoCE case and output an orte_show_help to warn that it will have no effect (i.e., principle of least surprise and all that).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15711.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or	receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15709.php">Eugene Loh: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>In reply to:</strong> <a href="15708.php">Shamis, Pavel: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15721.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="15721.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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

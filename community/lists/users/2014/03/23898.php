<?
$subject_val = "Re: [OMPI users] OpenMPI job initializing problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 14:29:25 2014" -->
<!-- isoreceived="20140320182925" -->
<!-- sent="Thu, 20 Mar 2014 14:29:19 -0400" -->
<!-- isosent="20140320182919" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI job initializing problem" -->
<!-- id="D914DC11-0296-4021-AC14-5A5DE313BA7A_at_nrl.navy.mil" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CD50ABC4-5551-4E73-9912-EDA62050ED7B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI job initializing problem<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 14:29:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23899.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23897.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23897.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23899.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2014, at 2:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 20, 2014, at 9:48 AM, Beichuan Yan &lt;beichuan.yan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Today I tested OMPI v1.7.5rc5 and surprisingly, it works like a charm!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I found discussions related to this issue:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. <a href="http://www.open-mpi.org/community/lists/users/2011/11/17688.php">http://www.open-mpi.org/community/lists/users/2011/11/17688.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; The correct solution here is get your sys admin to make /tmp local. Making /tmp NFS mounted across multiple nodes is a major &quot;faux pas&quot; in the Linux world - it should never be done, for the reasons stated by Jeff.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; my comment: for most clusters I have used, /tmp is NOT local. Open MPI community may not enforce it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't enforce anything, but /tmp being network mounted is a VERY unusual situation in the cluster world, and highly unrecommended
</span><br>
<p>Note that spirit is not a &#147;cluster&#148;, at least not the way that word is usually used in the HPC world.  It&#146;s an SGI ICE X, which uses Linux nodes and infiniband, like many HPC clusters, but is designed by SGI to be in some ways more like their previous, more tightly-coupled, machines.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>

<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23898/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23899.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23897.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23897.php">Ralph Castain: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23899.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
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

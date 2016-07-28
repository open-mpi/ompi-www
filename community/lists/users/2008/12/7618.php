<?
$subject_val = "Re: [OMPI users] BTL question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 29 07:18:32 2008" -->
<!-- isoreceived="20081229121832" -->
<!-- sent="Mon, 29 Dec 2008 14:18:27 +0200" -->
<!-- isosent="20081229121827" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BTL question" -->
<!-- id="4958C013.5010406_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081226043531.5fhx1bq180oc8k84_at_webmail.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] BTL question<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-29 07:18:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7619.php">Mahmoud Payami: "[OMPI users] question running on heterogeneous systems"</a>
<li><strong>Previous message:</strong> <a href="7617.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7607.php">Teige,  Scott W: "Re: [OMPI users] BTL question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; You may specify:
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl openib,sm,self
</span><br>
<span class="quotelev1">&gt; Application sometime runs fast, sometimes runs slow
</span><br>
When you specify the parameter above, open mpi will use only three btls
<br>
openib - for Infiniband
<br>
sm - for shared memory communication
<br>
self - for &quot;self&quot; communication
<br>
<p>NO other btl will be used.
<br>
<span class="quotelev2">&gt;&gt; And OpenMPI will use IB and shared memory for communication.
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl tcp,sm,self
</span><br>
<span class="quotelev1">&gt; Allpication always runs fast. So...
</span><br>
<span class="quotelev1">&gt; is there a way to determine (from my application code) which
</span><br>
<span class="quotelev1">&gt; BTL is really being used?
</span><br>
And with this parameter you use TCP btl instead of IB.
<br>
<p>So you see better performance with tcp btl ?!
<br>
<p>I'm not sure that you may see list of active btls in 1.2.X. But anyway 
<br>
when you explicitly specify BTLs in command line, only these btls are used.
<br>
<p>Thanks,
<br>
Pasha
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I appreciate any help I can get,
</span><br>
<span class="quotelev1">&gt; S.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And OpenMPI will use TCP and shared memory for communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7619.php">Mahmoud Payami: "[OMPI users] question running on heterogeneous systems"</a>
<li><strong>Previous message:</strong> <a href="7617.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7607.php">Teige,  Scott W: "Re: [OMPI users] BTL question"</a>
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

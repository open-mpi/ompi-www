<?
$subject_val = "Re: [OMPI users] BTL question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 26 04:35:33 2008" -->
<!-- isoreceived="20081226093533" -->
<!-- sent="Fri, 26 Dec 2008 04:35:31 -0500" -->
<!-- isosent="20081226093531" -->
<!-- name="Teige,  Scott W" -->
<!-- email="steige_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BTL question" -->
<!-- id="20081226043531.5fhx1bq180oc8k84_at_webmail.iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49524040.5040208_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Teige,  Scott W (<em>steige_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-26 04:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7608.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7606.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7597.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7618.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<li><strong>Reply:</strong> <a href="7618.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Quoting &quot;Pavel Shamis (Pasha)&quot; &lt;pashash_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Teige, Scott W wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have observed strange behavior with an application running with
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.2.8, OFED 1.2. The application runs in two &quot;modes&quot;, fast
</span><br>
<span class="quotelev2">&gt;&gt; and slow. The exectution time is either within one second of 108 sec.
</span><br>
<span class="quotelev2">&gt;&gt; or within one second of 67 sec. My cluster has 1 Gig ethernet and
</span><br>
<span class="quotelev2">&gt;&gt; DDR Infiniband so the byte transport layer is a prime suspect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, is there a way to determine (from my application code) which
</span><br>
<span class="quotelev2">&gt;&gt; BTL is really being used?
</span><br>
I've done this...
<br>
<span class="quotelev1">&gt; You may specify:
</span><br>
<span class="quotelev1">&gt; --mca btl openib,sm,self
</span><br>
Application sometime runs fast, sometimes runs slow
<br>
<span class="quotelev1">&gt; And OpenMPI will use IB and shared memory for communication.
</span><br>
<span class="quotelev1">&gt; --mca btl tcp,sm,self
</span><br>
Allpication always runs fast. So...
<br>
is there a way to determine (from my application code) which
<br>
BTL is really being used?
<br>
<p>I appreciate any help I can get,
<br>
S.
<br>
<p><span class="quotelev1">&gt; And OpenMPI will use TCP and shared memory for communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pasha
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
<li><strong>Next message:</strong> <a href="7608.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7606.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>In reply to:</strong> <a href="7597.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7618.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<li><strong>Reply:</strong> <a href="7618.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
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

<?
$subject_val = "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 15:40:17 2013" -->
<!-- isoreceived="20130604194017" -->
<!-- sent="Tue, 4 Jun 2013 19:39:51 +0000" -->
<!-- isosent="20130604193951" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F65AB1F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51AE05D6.1060609_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 15:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22026.php">Ralph Castain: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<li><strong>Previous message:</strong> <a href="22024.php">Reuti: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<li><strong>In reply to:</strong> <a href="22019.php">W Spector: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2013, at 8:20 AM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Yes, this is true -- MPI_THREAD_MULITPLE support is fairly incomplete in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One would hope a simple MPI_Barrier call would work though...
</span><br>
<p>Underneath, I am pretty sure that barrier is doing an MPI_WAITALL.  
<br>
<p>Nathan actually just agreed to look at this bug today.
<br>
<p><span class="quotelev1">&gt; My home linux system is nothing sophisticated.  Just a quad core I-5 on a Intel DP55WB motherboard and Ubuntu Linux.  No fancy interconnects.
</span><br>
<p><p>I'm guessing it's a double lock of some kind (i.e., a coding error in OMPI); not related to your network.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22026.php">Ralph Castain: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<li><strong>Previous message:</strong> <a href="22024.php">Reuti: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<li><strong>In reply to:</strong> <a href="22019.php">W Spector: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
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

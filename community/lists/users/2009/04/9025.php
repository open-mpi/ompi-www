<?
$subject_val = "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 11:00:18 2009" -->
<!-- isoreceived="20090422150018" -->
<!-- sent="Wed, 22 Apr 2009 11:00:12 -0400" -->
<!-- isosent="20090422150012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Could following situations caused by RDMA mcaparameters?" -->
<!-- id="0C8E305D-90C2-4936-9EEF-94E552993599_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84b2b5e30904210801y64473227n5a519cd8c50846d7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Could following situations caused by RDMA mcaparameters?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 11:00:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9026.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9024.php">Douglas Guptill: "[OMPI users]  100% CPU doing nothing!?"</a>
<li><strong>In reply to:</strong> <a href="9005.php">Tsung Han Shie: "[OMPI users] Could following situations caused by RDMA mca parameters?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9043.php">Tsung Han Shie: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<li><strong>Reply:</strong> <a href="9043.php">Tsung Han Shie: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 21, 2009, at 11:01 AM, Tsung Han Shie wrote:
<br>
<p><span class="quotelev1">&gt; I tried to increase speed of a program with openmpi-1.1.3
</span><br>
<p>Did you mean 1.1.3 or 1.3.1?
<br>
<p><span class="quotelev1">&gt; by adding following 4 parameters into openmpi-mca-params.conf file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned=1
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_rdma_num=128
</span><br>
<span class="quotelev1">&gt; btl_openib_max_eager_rdma=128
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_limit=1024
</span><br>
<p>If you meant 1.3.1 above, please see the following message about an  
<br>
important bug in 1.3 and 1.3.1 with the use of mpi_leave_pinned:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/announce/2009/03/0029.php">http://www.open-mpi.org/community/lists/announce/2009/03/0029.php</a>
<br>
<p><p><span class="quotelev1">&gt; and then, I ran my program twice(124 processes on 31 nodes). one  
</span><br>
<span class="quotelev1">&gt; with &quot;mpi_leave_pinned=1&quot;, another with &quot;mpi_leave_pinned=0&quot;.
</span><br>
<span class="quotelev1">&gt; All of them were stopped abnormally with &quot;ctrl+c&quot; and &quot;killall -9  
</span><br>
<span class="quotelev1">&gt; &lt;program&gt;&quot;.
</span><br>
<p>Why -- did they hang?
<br>
<p><span class="quotelev1">&gt; After that, I couldn't start to run that program again.
</span><br>
<p>What exactly was the error?
<br>
<p><span class="quotelev1">&gt; I checked every nodes with &quot;free -m&quot; and I found that huge amount of  
</span><br>
<span class="quotelev1">&gt; cached memory were used in each nodes.
</span><br>
<span class="quotelev1">&gt; Could this situation be caused by those 4 parameters? IS there  
</span><br>
<span class="quotelev1">&gt; anyway to free theme?
</span><br>
<p><p>Probably not.
<br>
<p>Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9026.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9024.php">Douglas Guptill: "[OMPI users]  100% CPU doing nothing!?"</a>
<li><strong>In reply to:</strong> <a href="9005.php">Tsung Han Shie: "[OMPI users] Could following situations caused by RDMA mca parameters?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9043.php">Tsung Han Shie: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<li><strong>Reply:</strong> <a href="9043.php">Tsung Han Shie: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
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

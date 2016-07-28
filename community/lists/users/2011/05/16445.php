<?
$subject_val = "Re: [OMPI users] configure: mpi-threads disabled by default";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 12:39:08 2011" -->
<!-- isoreceived="20110504163908" -->
<!-- sent="Wed, 04 May 2011 09:38:59 -0700" -->
<!-- isosent="20110504163859" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure: mpi-threads disabled by default" -->
<!-- id="4DC18123.4000405_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.SOC.2.00.1105041656300.1492_at_sunserv3" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure: mpi-threads disabled by default<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-04 12:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16446.php">Paul Cizmas: "[OMPI users] cputype (7) does not match previous archive members cputype"</a>
<li><strong>Previous message:</strong> <a href="16444.php">Mark Dixon: "[OMPI users] configure: mpi-threads disabled by default"</a>
<li><strong>In reply to:</strong> <a href="16444.php">Mark Dixon: "[OMPI users] configure: mpi-threads disabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16451.php">Mark Dixon: "Re: [OMPI users] configure: mpi-threads disabled by default"</a>
<li><strong>Reply:</strong> <a href="16451.php">Mark Dixon: "Re: [OMPI users] configure: mpi-threads disabled by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depending on what version you use, the option has been renamed 
<br>
--enable-mpi-thread-multiple.
<br>
<p>Anyhow, there is widespread concern whether the support is robust.  The 
<br>
support is known to be limited and the performance poor.
<br>
<p>On 5/4/2011 9:14 AM, Mark Dixon wrote:
<br>
<span class="quotelev1">&gt; I've been asked about mixed-mode MPI/OpenMP programming with OpenMPI, 
</span><br>
<span class="quotelev1">&gt; so have been digging through the past list messages on MPI_THREAD_*, 
</span><br>
<span class="quotelev1">&gt; etc. Interesting stuff :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before I go ahead and add &quot;--enable-mpi-threads&quot; to our standard 
</span><br>
<span class="quotelev1">&gt; configure flags, is there any reason it's disabled by default, please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a bit puzzled, as this default seems in conflict with whole &quot;Law 
</span><br>
<span class="quotelev1">&gt; of Least Astonishment&quot; thing. Have I missed some disaster that's going 
</span><br>
<span class="quotelev1">&gt; to happen?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16446.php">Paul Cizmas: "[OMPI users] cputype (7) does not match previous archive members cputype"</a>
<li><strong>Previous message:</strong> <a href="16444.php">Mark Dixon: "[OMPI users] configure: mpi-threads disabled by default"</a>
<li><strong>In reply to:</strong> <a href="16444.php">Mark Dixon: "[OMPI users] configure: mpi-threads disabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16451.php">Mark Dixon: "Re: [OMPI users] configure: mpi-threads disabled by default"</a>
<li><strong>Reply:</strong> <a href="16451.php">Mark Dixon: "Re: [OMPI users] configure: mpi-threads disabled by default"</a>
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

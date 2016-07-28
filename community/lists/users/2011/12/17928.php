<?
$subject_val = "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 11 16:42:49 2011" -->
<!-- isoreceived="20111211214249" -->
<!-- sent="Sun, 11 Dec 2011 16:42:39 -0500" -->
<!-- isosent="20111211214239" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?" -->
<!-- id="4EE523CF.5070104_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111211171602.GA22492_at_neuromancer.fritz.box" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-11 16:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17929.php">amjad ali: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17927.php">Andreas Sch&#228;fer: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>In reply to:</strong> <a href="17927.php">Andreas Sch&#228;fer: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17929.php">amjad ali: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17929.php">amjad ali: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/11/2011 12:16 PM, Andreas Sch&#228;fer wrote:
<br>
<span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on an SMP box threaded codes CAN always be faster than their MPI
</span><br>
<span class="quotelev1">&gt; equivalents. One reason why MPI sometimes turns out to be faster is
</span><br>
<span class="quotelev1">&gt; that with MPI every process actually initializes its own
</span><br>
<span class="quotelev1">&gt; data. Therefore it'll end up in the NUMA domain to which the core
</span><br>
<span class="quotelev1">&gt; running that process belongs. A lot of threaded codes are not NUMA
</span><br>
<span class="quotelev1">&gt; aware. So, for instance the initialization is done sequentially
</span><br>
<span class="quotelev1">&gt; (because it may not take a lot of time), and Linux' first touch policy
</span><br>
<span class="quotelev1">&gt; makes all memory pages belong to a single domain. In essence, those
</span><br>
<span class="quotelev1">&gt; codes will use just a single memory controller (and its bandwidth).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Many applications require significant additional RAM and message passing 
<br>
communication per MPI rank. Where those are not adverse issues, MPI is 
<br>
likely to out-perform pure OpenMP (Andreas just quoted some of the 
<br>
reasons), and OpenMP is likely to be favored only where it is an easier 
<br>
development model. The OpenMP library also should implement a 
<br>
first-touch policy, but it's very difficult to carry out fully in legacy 
<br>
applications.
<br>
OpenMPI has had effective shared memory message passing from the 
<br>
beginning, as did its predecessor (LAM) and all current commercial MPI 
<br>
implementations I have seen, so you shouldn't have to beat on an issue 
<br>
which was dealt with 10 years ago.  If you haven't been watching this 
<br>
mail list, you've missed some impressive reporting of new support 
<br>
features for effective pinning by CPU, cache, etc.
<br>
When you get to hundreds of nodes, depending on your application and 
<br>
interconnect performance, you may need to consider &quot;hybrid&quot; (OpenMP as 
<br>
the threading model for MPI_THREAD_FUNNELED mode), if you are running a 
<br>
single application across the entire cluster.
<br>
The biggest cluster in my neighborhood, which ranked #54 on the recent 
<br>
Top500, gave best performance in pure MPI mode for that ranking.  It 
<br>
uses FDR infiniband, and ran 16 ranks per node, for 646 nodes, with 
<br>
DGEMM running in 4-wide vector parallel.  Hybrid was tested as well, 
<br>
with each multiple-thread rank pinned to a single L3 cache.
<br>
All 3 MPI implementations which were tested have full shared memory 
<br>
message passing and pinning to local cache within each node (OpenMPI and 
<br>
2 commercial MPIs).
<br>
<p><p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17929.php">amjad ali: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17927.php">Andreas Sch&#228;fer: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>In reply to:</strong> <a href="17927.php">Andreas Sch&#228;fer: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17929.php">amjad ali: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17929.php">amjad ali: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
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

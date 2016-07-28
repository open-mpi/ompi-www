<?
$subject_val = "Re: [OMPI users] Running on two nodes slower than running on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 30 07:36:37 2014" -->
<!-- isoreceived="20140130123637" -->
<!-- sent="Thu, 30 Jan 2014 07:36:32 -0500" -->
<!-- isosent="20140130123632" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on two nodes slower than running on one node" -->
<!-- id="52EA4750.2030507_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJTHAud5rS44Zc7t7GD9UK55xo4ZBikwOb-DOoY84e8e5q=1FQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running on two nodes slower than running on one node<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-30 07:36:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23510.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23508.php">Ralph Castain: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23503.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/29/2014 10:56 PM, Victor wrote:
<br>
<span class="quotelev1">&gt; Thanks for the insights Tim. I was aware that the CPUs will choke 
</span><br>
<span class="quotelev1">&gt; beyond a certain point. From memory on my machine this happens with 5 
</span><br>
<span class="quotelev1">&gt; concurrent MPI jobs with that benchmark that I am using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding your mention of setting affinities and MPI ranks do you have 
</span><br>
<span class="quotelev1">&gt; a specific (as in syntactically specific since I am a novice and 
</span><br>
<span class="quotelev1">&gt; easily ...) examples how I may want to set affinities to get the 
</span><br>
<span class="quotelev1">&gt; Westmere node performing better?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info returns this: MCA paffinity: hwloc (MCA v2.0, API v2.0, 
</span><br>
<span class="quotelev1">&gt; Component v1.6.5)
</span><br>
<span class="quotelev1">&gt;
</span><br>
I haven't worked with current OpenMPI on Intel Westmere, although I do 
<br>
have a Westmere as my only dual CPU platform.  Ideally, the current 
<br>
scheme OpenMPI uses for MPI/OpenMP hybrid affinity will make it easy to 
<br>
allocate adjacent pairs of cores to ranks: [0,1], [2,3],[4,5],....
<br>
hwloc will not be able to see whether cores [0,1] and [2,3] are actually 
<br>
the pairs sharing internal cache buss, and Intel never guaranteed it, 
<br>
but that is the only way I've seen it done (presumably controlled by BIOS).
<br>
If you had a requirement to run 1 rank per CPU, with 4 threads per CPU, 
<br>
you would pin a thread to the each of the core pairs [0,1] and [2,3] 
<br>
(and [6,7],[8,9].  If required to run 8 threads per CPU, using 
<br>
HyperThreading, you would pin 1 thread to each of the first 4 cores on 
<br>
each CPU and 2 threads each to the remaining cores (the ones which don't 
<br>
share cache paths).
<br>
Likewise, when you are testing pure MPI scaling, you would take care not 
<br>
to place a 2nd rank on a core pair wich shares an internal buss until 
<br>
you are using all 4 internal buss resources, and you would load up the 2 
<br>
CPUs symmetrically.  You might find that 8 ranks with optimized 
<br>
placement gave nearly the performance of 12 ranks, and that you need an 
<br>
effective hybrid MPI/OpenMP to get perhaps 25% additional performance by 
<br>
using the remaining cores.  I've never seen an automated scheme to deal 
<br>
with this.  If you ignored the placement requirements, you would find 
<br>
that 8 ranks on the 12 core platform didn't perform as well as on the 
<br>
similar 8 core platform.
<br>
Needless to say, these special requirements of this CPU model have 
<br>
eluded even experts, and led to it not being used to full 
<br>
effectiveness.  The reason we got into this is your remark that it 
<br>
seemed strange to you that you didn't gain performance when you added a 
<br>
rank, presumably a 2nd rank on a core pair sharing an internal buss.
<br>
You seem to have the impression that MPI performance scaling could be 
<br>
linear with the number of cores in use.  Such an expectation is 
<br>
unrealistic given that the point of multi-core platforms is to share 
<br>
memory and other resources and support more ranks without a linear 
<br>
increase in cost.
<br>
In your efforts to make an effective cluster out of nodes of dissimilar 
<br>
performance levels, you may need to explore means of evening up the 
<br>
performance per rank, such as more OpenMP threads per rank on the lower 
<br>
performance CPUs.  It really doesn't look like a beginner's project.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23510.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23508.php">Ralph Castain: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23503.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
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

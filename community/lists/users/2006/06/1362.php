<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 11:15:18 2006" -->
<!-- isoreceived="20060602151518" -->
<!-- sent="Fri, 02 Jun 2006 09:15:06 -0600" -->
<!-- isosent="20060602151506" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Dual Core (machinefile)" -->
<!-- id="op.taixzgrkies9li_at_rygel.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C43A_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 11:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1363.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1361.php">Michael Kluskens: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>In reply to:</strong> <a href="1355.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1363.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Reply:</strong> <a href="1363.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 01 Jun 2006 18:07:07 -0600, Jeff Squyres (jsquyres)  
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This *sounds* like the classic oversubscription problem: Open MPI's
</span><br>
<span class="quotelev1">&gt; aggressive vs. degraded operating modes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
</span><br>
<p>Good link; bookmarked for (internal) documentation...
<br>
<p><span class="quotelev1">&gt; Specifically, &quot;slots&quot; is *not* meant to be the number of processes to
</span><br>
<span class="quotelev1">&gt; run.  It's meant to be how many processors are available to run.  Hence,
</span><br>
<span class="quotelev1">&gt; if you lie and tell OMPI that you have more slots than CPUs, OMPI will
</span><br>
<span class="quotelev1">&gt; think that it can run in aggressive mode.  But you'll have less
</span><br>
<span class="quotelev1">&gt; processors than processes, and all of them will be running in aggressive
</span><br>
<span class="quotelev1">&gt; mode -- hence, massive slowdown.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, you say that you've got 2 dual core opterons in a single box,
</span><br>
<span class="quotelev1">&gt; so there should be 4 processors.  Hence &quot;slots=4&quot; should not be a lie.
</span><br>
<p>It's good to hear that my concept of slots wasn't off.  (Although my  
<br>
message didn't give that impression...)  It certainly seems to me that  
<br>
with two dual cores I should use slots=4.
<br>
<p><span class="quotelev1">&gt; I can't think of why this would happen.
</span><br>
<p><span class="quotelev1">&gt; Can you confirm that your Linux installation thinks that it has 4
</span><br>
<span class="quotelev1">&gt; processors and will schedule 4 processes simultaneously?
</span><br>
<p>Fun story:  At first, *I* thought it was a simple case of two single-core  
<br>
processors. (slots=2, and I used two nodes to get 4 CPUs)  I believed it  
<br>
had only two processors because `cat /proc/cpuinfo` would list two  
<br>
processors:  CPU0 and CPU1.   (ie. the Linux installation doesn't see four  
<br>
processors, but two dual-core processors.)
<br>
<p>Then somebody pointed out to me they were dual core, and that cpuinfo  
<br>
listed it:
<br>
******
<br>
processor       : 1
<br>
vendor_id       : AuthenticAMD
<br>
cpu family      : 15
<br>
model           : 33
<br>
model name      : unknown
<br>
stepping        : 2
<br>
cpu MHz         : 2613.419
<br>
cache size      : 1024 KB
<br>
physical id     : 0
<br>
siblings        : 2
<br>
core id         : 1
<br>
cpu cores       : 2     &lt;----- Two cores -------
<br>
fpu             : yes
<br>
fpu_exception   : yes
<br>
cpuid level     : 1
<br>
wp              : yes
<br>
flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca  
<br>
cmov pat pse36 clflush mmx fxsr sse sse2 syscall nx mmxext fxsr_opt lm  
<br>
3dnowext 3dnow pni lahf_lm
<br>
bogomips        : 5227.16
<br>
TLB size        : 1024 4K pages
<br>
clflush size    : 64
<br>
cache_alignment : 64
<br>
address sizes   : 40 bits physical, 48 bits virtual
<br>
power management: ts fid vid ttp
<br>
******
<br>
To verify that it acted like it had four cores, I tried the following:
<br>
(using two nodes in the machinefile, each with slots=2)
<br>
1.)  Start a 4 CPU linpack job.  (Supposedly using half of the CPU power  
<br>
in each machine)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* With just 4 processes in total, the problem size took approximately  
<br>
0.08 s to finish (repeatably; the HPL.dat is set to run several of the  
<br>
same problem size.)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 'top' listed *two* CPU's, both pegged at 100%.  Each hpl process  
<br>
was taking 100% of the CPU.
<br>
2.)  Start a second 4 CPU linpack job (using the other half of the CPU  
<br>
power)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* When I started the second job (8 total processes, 4 in each job),  
<br>
the same problem size started to take 0.19 s to complete (on both jobs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 'top' listed *two* CPU's, both pegged at 100%.  Each hpl process  
<br>
was taking 50% of the CPU.
<br>
************
<br>
Then, I tried the same 4 process linpack job on a single node (one node in  
<br>
the machinefile, slots=2)
<br>
The results were essentially identical to #2 above (where the node was  
<br>
still running 4 processes)
<br>
<p>So it seems that although the system has dual-core CPU's, only one core is  
<br>
being used per CPU; so four simultaneous processes are not being scheduled.
<br>
<p>So the oversubscription hypothesis appears to be 100% correct; slots=4 is  
<br>
oversubscribing the job.
<br>
<p>Now I get to go find out *why* the job is oversubscribed, since there are  
<br>
4 cores able to handle the process...  I'll have to see if the system  
<br>
behaves similarly with non-mpi processes (ie. it doesn't use all of the  
<br>
available cores).  It may very well be a problem with the hardware or OS;  
<br>
it's the pre-release distro I wrote about in another posting yesterday...
<br>
<p>I'm wondering if there is something happening behind the scenes...  I'll  
<br>
have to check...
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1363.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1361.php">Michael Kluskens: "Re: [OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>In reply to:</strong> <a href="1355.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1363.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Reply:</strong> <a href="1363.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
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

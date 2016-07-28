<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  1 09:56:21 2006" -->
<!-- isoreceived="20061201145621" -->
<!-- sent="Fri, 1 Dec 2006 16:56:13 +0200" -->
<!-- isosent="20061201145613" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="20061201145613.GE30081_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DDE62A9F-CED9-4B32-9673-1A24CFAEDE5D_at_umich.edu" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-01 09:56:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2268.php">Jens Klostermann: "[OMPI users] password orted problem"</a>
<li><strong>Previous message:</strong> <a href="2266.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2266.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2273.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 01, 2006 at 09:35:09AM -0500, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; On Dec 1, 2006, at 9:23 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Dec 01, 2006 at 04:14:31PM +0200, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Dec 01, 2006 at 11:51:24AM +0100, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Saturday 25 November 2006 15:31, shaposh_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; only a single core on each CPU.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank You.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This might be a bit naive but, if you spawn two procs on a dual  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; core dual
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; socket system then the linux kernel should automagically schedule  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; them this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; way.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I actually think this applies to most of the situations discussed  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; thread. Explicitly assigning processes to cores may actually get  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it wrong
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; more often than the normal linux scheduler.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you run two single threaded ranks on the dual core dual socket  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you better be placing them on the same core. Shared memory  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communication
</span><br>
<span class="quotelev1">&gt; Isn't this only valid with NUMA systems?  (large systems or AMD  
</span><br>
<span class="quotelev1">&gt; Opteron)  The intel multicores each must communicate along the bus to  
</span><br>
<span class="quotelev1">&gt; the north-bridge and back again.  So all cores have the same path to  
</span><br>
<span class="quotelev1">&gt; memory.  Correct me if im wrong.  Though working on this would be  
</span><br>
<span class="quotelev1">&gt; good, i dont expect all systems to stick with bus, and more and more  
</span><br>
<span class="quotelev1">&gt; will be NUMA in the future.
</span><br>
AFAIK Core 2 Duo has shared L2 cache so shared memory communication should be
<br>
much faster if two ranks are on the same socket. But I don't have such a
<br>
setup to test the theory.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On another note for systems that use pbs (and maybe other resource  
</span><br>
<span class="quotelev1">&gt; managers)  It gives out the cpus in the hostlist  (hostname/0  
</span><br>
<span class="quotelev1">&gt; hostname/1 etc)   Why cant OMPI read that info if its available?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Im prob totally off on these comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I mean &quot;same socket&quot; here and not &quot;same core&quot; of cause.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will be much faster (especially if two cores shares cache).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /Peter (who may be putting a bit too much faith in the linux  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; scheduler...)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Linux scheduler does its best assuming the processes are  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unrelated. This is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; not the case with MPI ranks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 			Gleb.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2268.php">Jens Klostermann: "[OMPI users] password orted problem"</a>
<li><strong>Previous message:</strong> <a href="2266.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2266.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2273.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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

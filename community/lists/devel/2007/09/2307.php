<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 13:03:33 2007" -->
<!-- isoreceived="20070911170333" -->
<!-- sent="Tue, 11 Sep 2007 13:03:18 -0400" -->
<!-- isosent="20070911170318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Exit without finalize" -->
<!-- id="E16E073E-A517-4BFD-A483-7CF24D6A5AFF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ABABC2F5-D666-4A0D-BC82-851CA71CE76D_at_cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-11 13:03:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2308.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Previous message:</strong> <a href="2306.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>In reply to:</strong> <a href="2293.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2308.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Reply:</strong> <a href="2308.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 8, 2007, at 2:33 PM, Aurelien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; I agree (b) is not a good idea. However I am not very pleased by (a)
</span><br>
<span class="quotelev1">&gt; either. It totally prevent any process Fault Tolerant mechanism if we
</span><br>
<span class="quotelev1">&gt; go that way. If we plan to add some failure detection mechanism to
</span><br>
<span class="quotelev1">&gt; RTE and failure management (to avoid Finalize to hang), we should add
</span><br>
<span class="quotelev1">&gt; the ability to plug-in FT specific error handlers. The default error
</span><br>
<span class="quotelev1">&gt; handler should do exactly what is proposed by Ralph, but nowhere else
</span><br>
<span class="quotelev1">&gt; (than in this handler) the RTE code should assume that the
</span><br>
<span class="quotelev1">&gt; application is aborting when a failure occurs. If it is a FT
</span><br>
<span class="quotelev1">&gt; application it might just not abort and recover.
</span><br>
<p>(b) sounds fine to me.
<br>
<p>If you genericize the concept, I think it's compatible with FT:
<br>
<p>1. during MPI_INIT, one of the MPI processes can request a &quot;notify&quot;  
<br>
exit pattern for the job: a process must notify the RTE before it  
<br>
actually exits (i.e., some ORTE notification during MPI_FINALIZE).   
<br>
If a process exits before notifying the RTE, it's an error.
<br>
<p>1a. The default action upon error can be to kill the entire job.
<br>
1b. If you desire plug-in-able error actions (e.g., not kill the  
<br>
entire job), I'm *assuming* that our plugin frameworks can handle  
<br>
that...?
<br>
<p>2. for an FT MPI job, I assume that the MPI processes would either  
<br>
not perform step 1 (i.e., the default action upon process exit is  
<br>
nothing -- just like if you had run &quot;mpirun -np 4 hostname&quot;), or you  
<br>
would select a specific action upon error/plugin for what to do when  
<br>
a process exits without first notifying the RTE.
<br>
<p>Howzat?
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
<li><strong>Next message:</strong> <a href="2308.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Previous message:</strong> <a href="2306.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>In reply to:</strong> <a href="2293.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2308.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Reply:</strong> <a href="2308.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
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

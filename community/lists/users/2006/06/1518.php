<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 11:13:18 2006" -->
<!-- isoreceived="20060630151318" -->
<!-- sent="Fri, 30 Jun 2006 11:13:17 -0400" -->
<!-- isosent="20060630151317" -->
<!-- name="Doug Gregor" -->
<!-- email="dgregor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1" -->
<!-- id="A775409A-0F4A-47E5-8CF6-B9ED0A023A69_at_cs.indiana.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.62.0606292313480.25306_at_enterprise" -->
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
<strong>From:</strong> Doug Gregor (<em>dgregor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-30 11:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1519.php">Yvan Fournier: "[OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1517.php">Patrick Jessee: "Re: [OMPI users] error messages for btl components that aren't	loaded"</a>
<li><strong>In reply to:</strong> <a href="1511.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2006, at 11:16 PM, Graham E Fagg wrote:
<br>
<span class="quotelev1">&gt; On Thu, 29 Jun 2006, Doug Gregor wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I use algorithm 6, I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [odin003.cs.indiana.edu:14174] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev2">&gt;&gt; [odin005.cs.indiana.edu:10510] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev2">&gt;&gt; Broadcasting integers from root 0...[odin004.cs.indiana.edu:11752]
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ops.. my mistake!.. only 0-5 are valid for bcast I have to change  
</span><br>
<span class="quotelev1">&gt; the error message:
</span><br>
<span class="quotelev1">&gt; [reliant:06935] coll:tuned:bcast_intra_do_forced algorithm 6
</span><br>
<span class="quotelev1">&gt; [reliant:06935] coll:tuned:bcast_intra_do_forced attempt to select  
</span><br>
<span class="quotelev1">&gt; algorithm 6 when only 0-6 is valid?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still trying to find out why it hangs.. let you know as soon as  
</span><br>
<span class="quotelev1">&gt; I find anything but right now I am testing using TCP.
</span><br>
<p>FWIW, I was able to reproduce the problem with both tcp and mvapi.
<br>
<p><span class="quotelev1">&gt; Can you let me know the exact path and LD_LIBRARY_PATH your using  
</span><br>
<span class="quotelev1">&gt; on odin?
</span><br>
<p>PATH=/san/mpi/openmpi-1.1-gcc/bin:/u/dgregor/bin:/usr/kerberos/bin:/ 
<br>
usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/san/intel/cc/9.0/bin:/san/ 
<br>
intel/fc/9.0/bin:/san/intel/idb/9.0/bin:/san/pathscale/bin:/usr/local/ 
<br>
sched/slurm/bin
<br>
<p>LD_LIBRARY_PATH=/san/mpi/openmpi-1.1-gcc/lib:/san/intel/cc/9.0/lib:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doug
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1519.php">Yvan Fournier: "[OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1517.php">Patrick Jessee: "Re: [OMPI users] error messages for btl components that aren't	loaded"</a>
<li><strong>In reply to:</strong> <a href="1511.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
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

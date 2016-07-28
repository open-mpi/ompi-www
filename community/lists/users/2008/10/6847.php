<?
$subject_val = "Re: [OMPI users] Tuned Collective MCA params";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 09:27:29 2008" -->
<!-- isoreceived="20081003132729" -->
<!-- sent="Fri, 3 Oct 2008 09:27:18 -0400" -->
<!-- isosent="20081003132718" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tuned Collective MCA params" -->
<!-- id="29F6ED14-BC92-4306-89E1-FCCC27BD1C11_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48E61495.1030302_at_neuralbs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tuned Collective MCA params<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 09:27:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6848.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6843.php">Eric Thibodeau: "[OMPI users] Tuned Collective MCA params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6851.php">kyron_at_[hidden]: "Re: [OMPI users] Tuned Collective MCA params"</a>
<li><strong>Reply:</strong> <a href="6851.php">kyron_at_[hidden]: "Re: [OMPI users] Tuned Collective MCA params"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>In the 1.3 and some of the latest 1.2.X versions tuned is the default  
<br>
component for collectives. However, the tuned currently in the trunk  
<br>
are optimized for high performance networks (such as IB or MX), and  
<br>
they do not deliver the best performance on slower devices such as  
<br>
Ethernet.
<br>
<p>In order to play with the different implementation of allgather you  
<br>
should either on the $(HOME)/.openmpi/mca-params.conf or command line  
<br>
set the following MCA parameters:
<br>
1) coll_tuned_use_dynamic_rules to one in order to enable fine grain  
<br>
selection of the algorithms
<br>
2) coll_tuned_allgather_algorithm to a value between 0 and 6 (read the  
<br>
output corresponding to this algorithm from 'ompi_info --param coll  
<br>
tuned' once you enabled the dynamic rules).
<br>
<p>This will allow you to select a specific algorithm for the allgather.  
<br>
You can further tuned it, by playing with the fanout (in case of trees  
<br>
topologies), and with the segment size (for the pipelined ones).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Oct 3, 2008, at 8:48 AM, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I am currently profiling a simple case where I replace multiple S/ 
</span><br>
<span class="quotelev1">&gt; R calls with Allgather calls and it would _seem_ the simple S/R  
</span><br>
<span class="quotelev1">&gt; calls are faster. Now, *before* I come to any conclusion on this,  
</span><br>
<span class="quotelev1">&gt; one of the pieces I am missing is more details on how /if/when the  
</span><br>
<span class="quotelev1">&gt; tuned coll MCA is selected. In other words, can I assume the tuned  
</span><br>
<span class="quotelev1">&gt; versions are used by default? I skimmed through the well documented  
</span><br>
<span class="quotelev1">&gt; source code but before I can even start to analyze the replacement's  
</span><br>
<span class="quotelev1">&gt; impact (in a small cluster), I need to know how and when the tuned  
</span><br>
<span class="quotelev1">&gt; coll MCA is used/selected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6848.php">Roberto Fichera: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6846.php">Ralph Castain: "Re: [OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6843.php">Eric Thibodeau: "[OMPI users] Tuned Collective MCA params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6851.php">kyron_at_[hidden]: "Re: [OMPI users] Tuned Collective MCA params"</a>
<li><strong>Reply:</strong> <a href="6851.php">kyron_at_[hidden]: "Re: [OMPI users] Tuned Collective MCA params"</a>
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

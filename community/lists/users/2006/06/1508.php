<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 17:42:40 2006" -->
<!-- isoreceived="20060629214240" -->
<!-- sent="Thu, 29 Jun 2006 17:42:39 -0400" -->
<!-- isosent="20060629214239" -->
<!-- name="Doug Gregor" -->
<!-- email="dgregor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1" -->
<!-- id="D99FB77D-C6A1-4FE9-AF50-173A5A7CCD32_at_cs.indiana.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.62.0606291714010.25306_at_enterprise" -->
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
<strong>Date:</strong> 2006-06-29 17:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1509.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1507.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="1507.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1509.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="1509.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="1511.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2006, at 5:23 PM, Graham E Fagg wrote:
<br>
<p><span class="quotelev1">&gt; Hi Doug
</span><br>
<span class="quotelev1">&gt;  wow, looks like some messages are getting lost (or even delivered  
</span><br>
<span class="quotelev1">&gt; to the wrong peer on the same node.. ) Could you also try with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca coll_base_verbose 1 -mca coll_tuned_use_dynamic_rules 1 -mca  
</span><br>
<span class="quotelev1">&gt; coll_tuned_bcast_algorithm &lt;1,2,3,4,5,6&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The values 1-6 control which topology/aglorithm are used internally..
</span><br>
<p>The results are... very odd. With algorithms 1--5, everything seems  
<br>
to be okay: I ran a couple trials of each and never had it hang.
<br>
<p>When I use algorithm 6, I get:
<br>
<p>[odin003.cs.indiana.edu:14174] *** An error occurred in MPI_Bcast
<br>
[odin005.cs.indiana.edu:10510] *** An error occurred in MPI_Bcast
<br>
Broadcasting integers from root 0...[odin004.cs.indiana.edu:11752]  
<br>
*** An error occurred in MPI_Bcast
<br>
[odin003.cs.indiana.edu:14174] *** on communicator MPI_COMM_WORLD
<br>
[odin005.cs.indiana.edu:10510] *** on communicator MPI_COMM_WORLD
<br>
[odin005.cs.indiana.edu:10510] *** MPI_ERR_ARG: invalid argument of  
<br>
some other kind
<br>
[odin005.cs.indiana.edu:10510] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[odin002.cs.indiana.edu:05866] *** An error occurred in MPI_Bcast
<br>
[odin004.cs.indiana.edu:11752] *** on communicator MPI_COMM_WORLD
<br>
[odin003.cs.indiana.edu:14174] *** MPI_ERR_ARG: invalid argument of  
<br>
some other kind
<br>
[message repeated many times for the different processes]
<br>
<p>Are there other settings I can tweak to try to find the algorithm  
<br>
that it's deciding to use at run-time?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doug
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1509.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1507.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="1507.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1509.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="1509.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="1511.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
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

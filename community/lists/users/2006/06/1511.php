<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 23:16:41 2006" -->
<!-- isoreceived="20060630031641" -->
<!-- sent="Thu, 29 Jun 2006 23:16:30 -0400 (EDT)" -->
<!-- isosent="20060630031630" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1" -->
<!-- id="Pine.GSO.4.62.0606292313480.25306_at_enterprise" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D99FB77D-C6A1-4FE9-AF50-173A5A7CCD32_at_cs.indiana.edu" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 23:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1512.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error messages for btl components that aren't loaded"</a>
<li><strong>Previous message:</strong> <a href="1510.php">Tom Rosmond: "[OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>In reply to:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1518.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="1518.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 29 Jun 2006, Doug Gregor wrote:
<br>
<p><span class="quotelev1">&gt; When I use algorithm 6, I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [odin003.cs.indiana.edu:14174] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; [odin005.cs.indiana.edu:10510] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; Broadcasting integers from root 0...[odin004.cs.indiana.edu:11752]
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Bcast
</span><br>
<p>ops.. my mistake!.. only 0-5 are valid for bcast I have to change the 
<br>
error 
<br>
message:
<br>
[reliant:06935] coll:tuned:bcast_intra_do_forced algorithm 6
<br>
[reliant:06935] coll:tuned:bcast_intra_do_forced attempt to select 
<br>
algorithm 6 when only 0-6 is valid?
<br>
<p>I'm still trying to find out why it hangs.. let you know as soon as I find 
<br>
anything but right now I am testing using TCP.
<br>
<p>Can you let me know the exact path and LD_LIBRARY_PATH your using on odin?
<br>
<p><p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1512.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error messages for btl components that aren't loaded"</a>
<li><strong>Previous message:</strong> <a href="1510.php">Tom Rosmond: "[OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>In reply to:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1518.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="1518.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
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

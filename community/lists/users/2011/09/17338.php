<?
$subject_val = "Re: [OMPI users] RE :  MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 10:25:37 2011" -->
<!-- isoreceived="20110919142537" -->
<!-- sent="Mon, 19 Sep 2011 07:25:29 -0700" -->
<!-- isosent="20110919142529" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE :  MPI hangs on multiple nodes" -->
<!-- id="4E7750D9.4060609_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4217F2ABFA5D44BA8F3DCD899E5B0C8F2677006E4_at_EXCH-MBX-F.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE :  MPI hangs on multiple nodes<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 10:25:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17339.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17337.php">S&#233;bastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17337.php">S&#233;bastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17339.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fine.  Once MPI_Send returns, it should be safe to reuse the 
<br>
buffer.  In fact, the return of the call is the only way you have of 
<br>
checking that the message has left the user's send buffer.  The case 
<br>
you're worried about is probably MPI_Isend, where you have to check 
<br>
completion with an MPI_Test* or MPI_Wait* call.
<br>
<p>On 9/19/2011 6:26 AM, S&#233;bastien Boisvert wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it safe to re-use the same buffer (variable A) for MPI_Send and MPI_Recv given that MPI_Send may be eager depending on
</span><br>
<span class="quotelev1">&gt; the MCA parameters ?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17339.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17337.php">S&#233;bastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17337.php">S&#233;bastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17339.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
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

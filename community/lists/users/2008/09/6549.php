<?
$subject_val = "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 15:53:58 2008" -->
<!-- isoreceived="20080915195358" -->
<!-- sent="Mon, 15 Sep 2008 15:53:51 -0400" -->
<!-- isosent="20080915195351" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
<!-- id="EE87FED3-A005-4F7E-A1A9-220B8C760DE5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="845f51b10809151159t8ecdfddvd5b6e203fccbfa52_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 15:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6550.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6548.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6548.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 15, 2008, at 2:59 PM, Enrico Barausse wrote:
<br>
<p><span class="quotelev1">&gt; that was indeed the problem, I'm an idiot (sorry...). I thought there
</span><br>
<span class="quotelev1">&gt; was an explicit interface somewhere in the libraries that would signal
</span><br>
<span class="quotelev1">&gt; a missing argument as a syntax error, so I did not check as carefully
</span><br>
<span class="quotelev1">&gt; as I should have...
</span><br>
<p>Unfortunately, F77 doesn't offer explicit interface checking.  This  
<br>
kind of problem can happen as a result of that.  :-(
<br>
<p>The F90 bindings are better at that (F90 is a strictly-typed  
<br>
language), but other problems in the MPI F90 bindings design prevent  
<br>
it from being truly useful (IMHO).
<br>
<p>FWIW, in the MPI-3 effort, we are working at making F03 bindings that  
<br>
are MPI bindings &quot;better&quot; than the F90 bindings (the definition of  
<br>
&quot;better&quot; is still under debate ;-) -- the issues are surprisingly [to  
<br>
me] complex).
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
<li><strong>Next message:</strong> <a href="6550.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6548.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6548.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
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

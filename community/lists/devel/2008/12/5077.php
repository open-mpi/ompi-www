<?
$subject_val = "[OMPI devel] fast path MPI_Sendrecv";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 21 02:12:44 2008" -->
<!-- isoreceived="20081221071244" -->
<!-- sent="Sat, 20 Dec 2008 23:16:29 -0800" -->
<!-- isosent="20081221071629" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] fast path MPI_Sendrecv" -->
<!-- id="494DED4D.5090702_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] fast path MPI_Sendrecv<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-21 02:16:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5078.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been looking at a &quot;fast path&quot; for sends and receives.  This is like 
<br>
the sendi function, which attempts to send &quot;immediately&quot;, without 
<br>
creating a bulky PML send request (which would be needed if, say, the 
<br>
send had to be progressed over multiple user MPI calls).  One can do 
<br>
something similar on the receive side, and I have a workspace in which 
<br>
each BTL has the option of defining a &quot;recvi&quot; (receive immediate) 
<br>
function.  The speedups I see in the prototype are gratifying:  np=2 
<br>
pingpong latencies are down 30%-2x, and they stay flat as np is 
<br>
increased.  (OMPI, straight out of the box, sees pingpong latencies 
<br>
climb as np climbs due to the costs of polling.)
<br>
<p>I'd like to have MPI_Sendrecv see the same performance benefits as well, 
<br>
but the MPI layer performs an MPI_Sendrecv as a Irecv/Send/Wait.  The 
<br>
Irecv necessarily involves a receive request.  So, the Send might be 
<br>
fast, but you lose most of the benefit of doing a fast path.  I think 
<br>
the real way of doing a fast Sendrecv would be to do an immediate send 
<br>
(if you can) followed by an immediate receive.
<br>
<p>It seems to me, there are two approaches here:
<br>
<p>*) Teach the MPI layer about &quot;fast path&quot; sends and receives (sendi and 
<br>
recvi).
<br>
*) Teach the PML layer about &quot;Sendrecv&quot;.  That is, have MPI_Sendrecv 
<br>
call something like mca_pml_ob1_sendrecv().  (This is the approach I'd 
<br>
prefer.)
<br>
<p>Either way, the MPI/PML interface would need a new function (or two).
<br>
<p>Any suggestions/comments?
<br>
<p>Any guidelines on how I add a new function to the MPI/PML interface?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5078.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
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

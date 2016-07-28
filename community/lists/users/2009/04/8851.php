<?
$subject_val = "[OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 17:09:30 2009" -->
<!-- isoreceived="20090409210930" -->
<!-- sent="Thu, 9 Apr 2009 14:08:57 -0700" -->
<!-- isosent="20090409210857" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="[OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49DE63E9.3090404_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 17:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8852.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8850.php">Gus Correa: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8852.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8852.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="8925.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When running my Open MPI application, I'm seeing three processors that 
<br>
are using five times as much memory as the others when they should all 
<br>
use the same amount of memory. To start the debugging process, I would 
<br>
like to know if it's my application or the Open MPI library that's 
<br>
using the additional memory. Does anyone have any tips on calculating 
<br>
the amount of memory that Open MPI is using at a given moment in time?
<br>
<p>My Open MPI application makes significant use of MPI_Irecv and 
<br>
MPI_Send. Every process has exactly one MPI_Irecv request active at 
<br>
any time. When it receives a message, it handles it, possibly 
<br>
transmits a response packet using MPI_Send, and starts a new MPI_Irecv 
<br>
request. What happens if one process is slow and lags behind? Will the 
<br>
messages be buffered at the sender or the receiver? Will the messages 
<br>
be buffered at the Open MPI level or at the OS level, say in a TCP 
<br>
transmit buffer or receive buffer?
<br>
<p>Thanks,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8852.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8850.php">Gus Correa: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8852.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8852.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Maybe reply:</strong> <a href="8925.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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

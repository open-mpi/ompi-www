<?
$subject_val = "[OMPI users] Receiving an unknown number of messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 14:53:43 2009" -->
<!-- isoreceived="20090714185343" -->
<!-- sent="Tue, 14 Jul 2009 11:52:25 -0700" -->
<!-- isosent="20090714185225" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="[OMPI users] Receiving an unknown number of messages" -->
<!-- id="4A5CD3E9.9030301_at_bcgsc.ca" -->
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
<strong>Subject:</strong> [OMPI users] Receiving an unknown number of messages<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 14:52:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9957.php">jimkress_58: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="9955.php">Evans, Thomas M.: "[OMPI users] Solution for dynamic loading with python"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9958.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="9958.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>For my MPI application, each process reads a file and for each line sends a message 
<br>
(MPI_Send) to one of the other processes determined by the contents of that line. Each 
<br>
process posts a single MPI_Irecv and uses MPI_Request_get_status to test for a received 
<br>
message. If a message has been received, it processes the message and posts a new 
<br>
MPI_Irecv. I believe this situation is not safe and prone to deadlock since MPI_Send may 
<br>
block. The receiver would need to post as many MPI_Irecv as messages it expects to 
<br>
receive, but it does not know in advance how many messages to expect from the other 
<br>
processes. How is this situation usually handled in an MPI appliation where the number of 
<br>
messages to receive is unknown?
<br>
<p>In a non-MPI network program I would create one thread for receiving and processing, and 
<br>
one thread for transmitting. Is threading a good solution? Is there a simpler solution?
<br>
<p>Under what conditions will MPI_Send block and under what conditions will it definitely not 
<br>
block?
<br>
<p>Thanks,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9957.php">jimkress_58: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="9955.php">Evans, Thomas M.: "[OMPI users] Solution for dynamic loading with python"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9958.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="9958.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
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

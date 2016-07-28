<?
$subject_val = "[OMPI users] MPI_Issend non-blocking send in Synchronous Mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 04:04:50 2012" -->
<!-- isoreceived="20121102080450" -->
<!-- sent="Fri, 2 Nov 2012 16:04:42 +0800" -->
<!-- isosent="20121102080442" -->
<!-- name="huydanlin" -->
<!-- email="huydanlin_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Issend non-blocking send in Synchronous Mode" -->
<!-- id="CAFAp2dK-r5089AOYG_nsq_CtG9BAiqg3gyBpzN3ftZExp_EvuQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Issend non-blocking send in Synchronous Mode<br>
<strong>From:</strong> huydanlin (<em>huydanlin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 04:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20620.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20618.php">Ralph Castain: "Re: [OMPI users] limiting tasks/ranks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have some problem in MPI Function MPI_Issend. That is non-blocking
<br>
send in synchronous mode. That is, when start this function, the send
<br>
process send the request-to-send to the destination process. Then the
<br>
receiver send back a permission-to-send message . And then the sender now
<br>
sends the message with non-blocking types : The control will return to the
<br>
sender as soon as possible.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My question is : Is it right - the process of MPI_Issend which I
<br>
describe above ? And how can i know the size of that request for
<br>
synchronous mode ?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20620.php">Jeff Squyres: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20618.php">Ralph Castain: "Re: [OMPI users] limiting tasks/ranks"</a>
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

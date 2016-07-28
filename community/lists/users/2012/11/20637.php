<?
$subject_val = "[OMPI users] MPI_Recv operation time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 04:07:51 2012" -->
<!-- isoreceived="20121105090751" -->
<!-- sent="Mon, 5 Nov 2012 17:07:47 +0800" -->
<!-- isosent="20121105090747" -->
<!-- name="huydanlin" -->
<!-- email="huydanlin_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Recv operation time" -->
<!-- id="CAFAp2dJqPeXTnFrhAXLVGVX=7uTjZRoJPC-WKNnG=iaPrs7Azw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Recv operation time<br>
<strong>From:</strong> huydanlin (<em>huydanlin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 04:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20638.php">Ralph Castain: "Re: [OMPI users] MPI_Recv operation time"</a>
<li><strong>Previous message:</strong> <a href="20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20638.php">Ralph Castain: "Re: [OMPI users] MPI_Recv operation time"</a>
<li><strong>Reply:</strong> <a href="20638.php">Ralph Castain: "Re: [OMPI users] MPI_Recv operation time"</a>
<li><strong>Reply:</strong> <a href="20639.php">Eugene Loh: "Re: [OMPI users] MPI_Recv operation time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;My objective is I want to calculate the time perform by MPI_Send &amp;
<br>
MPI_Recv . In case MPI_Send, i can put the timer before the MPI_Send and
<br>
after its. like this &quot;
<br>
t1=MPI_Wtime(),
<br>
MPI_Send....
<br>
t2= MPI_Wtime
<br>
tsend= t2 -t1; it mean when the message go to the system buffer, the
<br>
control return to the sending process. So I can measure the MPI_Send.
<br>
&nbsp;&nbsp;&nbsp;But my problem in MPI_Recv. If i do like MPI_Send( put the timer before
<br>
and after MPI_Recv) I think it wrong. Because we dont know exactly when the
<br>
message reach the system buffer in receiving side.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;So how can we measure the MPI_Recv operation time( time when the
<br>
message is copied from the system buffer to the receive buffer) ?
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20637/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20638.php">Ralph Castain: "Re: [OMPI users] MPI_Recv operation time"</a>
<li><strong>Previous message:</strong> <a href="20636.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20638.php">Ralph Castain: "Re: [OMPI users] MPI_Recv operation time"</a>
<li><strong>Reply:</strong> <a href="20638.php">Ralph Castain: "Re: [OMPI users] MPI_Recv operation time"</a>
<li><strong>Reply:</strong> <a href="20639.php">Eugene Loh: "Re: [OMPI users] MPI_Recv operation time"</a>
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

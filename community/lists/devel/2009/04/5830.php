<?
$subject_val = "Re: [OMPI devel] MPI Message Communication over TCP/IP";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 05:50:18 2009" -->
<!-- isoreceived="20090416095018" -->
<!-- sent="Thu, 16 Apr 2009 05:50:13 -0400" -->
<!-- isosent="20090416095013" -->
<!-- name="pranav jadhav" -->
<!-- email="pranavjadhav_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Message Communication over TCP/IP" -->
<!-- id="1b1179850904160250k6d146749n948acdc3a41cc049_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1b1179850904152216u1cf94258l5b0628be3be00e3d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI Message Communication over TCP/IP<br>
<strong>From:</strong> pranav jadhav (<em>pranavjadhav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 05:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5831.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>Previous message:</strong> <a href="5829.php">Sylvain Jeaugey: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>In reply to:</strong> <a href="5828.php">pranav jadhav: "[OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5834.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5834.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I am new to MPI library. I downloaded and started using OpenMPI library to
<br>
build MPI programs. I wanted to know how does MPI program communicates over
<br>
the network. I am trying to trace the flow of MPI_Send and MPI_Bcast APIS to
<br>
find the actual send/recv calls being used for sending the packets over the
<br>
network. I was trying to look into the code , I found some tcp related
<br>
socket connections in code base in &quot;ompi/mca/btl/tcp/&quot; but I am not able to
<br>
figureout how does MPI_Send works. Please if anyone knows how MPI_Send and
<br>
MPI_Recv APIs works for communicating over network,please let me know.
<br>
<p>Thankyou,
<br>
<p>Regards,
<br>
Pranav Jadhav
<br>
Stony Brook University
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5831.php">Ralph Castain: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>Previous message:</strong> <a href="5829.php">Sylvain Jeaugey: "Re: [OMPI devel] Device failover in dr pml (fwd)"</a>
<li><strong>In reply to:</strong> <a href="5828.php">pranav jadhav: "[OMPI devel] MPI Message Communication over TCP/IP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5834.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
<li><strong>Reply:</strong> <a href="5834.php">Timothy Hayes: "Re: [OMPI devel] MPI Message Communication over TCP/IP"</a>
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

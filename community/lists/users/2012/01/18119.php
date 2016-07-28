<?
$subject_val = "[OMPI users] Strange TCP latency results on Amazon EC2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 10:03:03 2012" -->
<!-- isoreceived="20120110150303" -->
<!-- sent="Tue, 10 Jan 2012 16:02:58 +0100" -->
<!-- isosent="20120110150258" -->
<!-- name="Roberto Rey" -->
<!-- email="eros.83_at_[hidden]" -->
<!-- subject="[OMPI users] Strange TCP latency results on Amazon EC2" -->
<!-- id="CAFM0RYJHR5Su9W_VpMwFUackSLo=07kep9+nARXUfTCOtgramg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Strange TCP latency results on Amazon EC2<br>
<strong>From:</strong> Roberto Rey (<em>eros.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 10:02:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18120.php">Ralph Castain: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18118.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18148.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="18148.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="18163.php">Rayson Ho: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm running some tests on EC2 cluster instances with 10 Gigabit Ethernet
<br>
hardware and I'm getting strange latency results with Netpipe and OpenMPI.
<br>
<p>If I run Netpipe over OpenMPI (NPmpi) I get a network latency around 60
<br>
microseconds for small messages (less than 2kbytes). However, when I run
<br>
Netpipe over TCP (NPtcp) I always get around 100 microseconds. For bigger
<br>
messages everything seems to be OK.
<br>
<p>I'm using the BTL TCP in OpenMPI, so I can't understand why OpenMPI
<br>
outperforms raw TCP performance for small messages (40us of difference). I
<br>
also have run the PingPong test from the Intel Media Benchmarks and the
<br>
latency results for OpenMPI are very similar (60us) to those obtained with
<br>
NPmpi
<br>
<p>Can OpenMPI outperform Netpipe over TCP? Why? Is OpenMPI  doing any
<br>
optimization in BTL TCP?
<br>
<p>The results for OpenMPI aren't so good but we must take into account the
<br>
network virtualization overhead under Xen
<br>
<p>Thanks for your reply
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18120.php">Ralph Castain: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18118.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18148.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="18148.php">Roberto Rey: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
<li><strong>Reply:</strong> <a href="18163.php">Rayson Ho: "Re: [OMPI users] Strange TCP latency results on Amazon EC2"</a>
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

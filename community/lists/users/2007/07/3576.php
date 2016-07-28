<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 08:26:47 2007" -->
<!-- isoreceived="20070705122647" -->
<!-- sent="Thu, 5 Jul 2007 14:26:41 +0200" -->
<!-- isosent="20070705122641" -->
<!-- name="Biagio Cosenza" -->
<!-- email="biacos_at_[hidden]" -->
<!-- subject="[OMPI users] TCP Nagle algorithm and latency" -->
<!-- id="f8841bfe0707050526s4a5cebcdk12dabc9b56ce345_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f8841bfe0707050425w5c7d7dfx5ff1641bb1f6006a_at_mail.gmail.com" -->
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
<strong>From:</strong> Biagio Cosenza (<em>biacos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 08:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3577.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3575.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3786.php">Jeff Squyres: "Re: [OMPI users] TCP Nagle algorithm and latency"</a>
<li><strong>Reply:</strong> <a href="3786.php">Jeff Squyres: "Re: [OMPI users] TCP Nagle algorithm and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm using Open MPI in a real time rendering system and I need an accurate
<br>
latency control.
<br>
<p>consider the 'Nagle' optimization implemented in the TCP/IP protocol, which
<br>
delays small packets for a short time period to possibly combine them with
<br>
successive packets generating network friendly packet sizes.
<br>
This optimization can result in a better throughput when lots of small
<br>
packets are sent, but can also lead to considerable latencies, if  packets
<br>
get delayed several times.
<br>
<p><p><p>For example, I want to turn the Nagle optimization on for sockets in which
<br>
updated scene data is streamed to the clients, as throughput is the main
<br>
issue here.
<br>
On the other hand, I want turn it off for e.g. sockets used to send tiles to
<br>
the clients, as this has to be done with an absolute minimum of latency.
<br>
<p>Can I do it with OpenMPI?
<br>
Am I using the the wrong tool?
<br>
<p><p>Thanks in advance
<br>
<p>Biagio Cosenza
<br>
an italian MSc student
<br>
Universit&#224; di Salerno
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3576/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3577.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3575.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3786.php">Jeff Squyres: "Re: [OMPI users] TCP Nagle algorithm and latency"</a>
<li><strong>Reply:</strong> <a href="3786.php">Jeff Squyres: "Re: [OMPI users] TCP Nagle algorithm and latency"</a>
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

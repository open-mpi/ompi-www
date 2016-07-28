<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 06:43:31 2007" -->
<!-- isoreceived="20070723104331" -->
<!-- sent="Mon, 23 Jul 2007 12:43:26 +0200" -->
<!-- isosent="20070723104326" -->
<!-- name="Biagio Cosenza" -->
<!-- email="biacos_at_[hidden]" -->
<!-- subject="[OMPI users] Performance tuning: focus on latency" -->
<!-- id="f8841bfe0707230343r1824ff89ue81ba6b5d5afb27d_at_mail.gmail.com" -->
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
<strong>From:</strong> Biagio Cosenza (<em>biacos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 06:43:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3732.php">Per Madsen: "[OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<li><strong>Previous message:</strong> <a href="3730.php">SLIM H.A.: "[OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3752.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Reply:</strong> <a href="3752.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I'm working on a parallel real time renderer: an embarassing parallel
<br>
problem where latency is the threshold to high perfomance.
<br>
<p>Two observations:
<br>
<p>1) I did a simple &quot;ping-pong&quot; test (the master does a Bcast + an IRecv for
<br>
each node + a Waitall) similar to effective renderer workload. Using a
<br>
cluster of 37 nodes on Gigabit Ethernet, seems that the latency is usually
<br>
low (about 1-5 ms), but sometimes there are some peaks of about 200 ms. I
<br>
thought that the cause is a packet retransmission in one of the 37
<br>
connections, that blow the overall performance of the test (of course, the
<br>
final WaitAll is a synch).
<br>
<p>2) A research team argues in a paper  that MPI suffers on dynamically manage
<br>
latency. They also arguing an interesting problem about enable/disable Nagle
<br>
algorithm. (I paste the interesting paragraph below)
<br>
<p><p>So I have two questions:
<br>
<p>1) Why my test have these peaks? How can I afford them (I think to btl tcp
<br>
params)?
<br>
<p>2) When does OpenMPI disable Nagle algorithm? Suppose I DON'T need that
<br>
Nagle has to be ON (focusing only on latency), how can I increase
<br>
performance?
<br>
<p>Any useful suggestion will be REALLY appreciate.
<br>
<p>Thanks in advance,
<br>
Biagio Cosenza
<br>
<p>-----------------------------
<br>
cut&amp;paste from &quot;Interactive Ray Tracing on Commodity PC clusters&quot;
<br>
Saarland University, Germany
<br>
<p>&quot;... Communication Method: For handling communication, most parallel
<br>
processing systems today use standardized libraries such as MPI [8] or PVM
<br>
[10]. Although these libraries provide very powerful tools for development
<br>
of distributed software, they do not meet the efficiency requirements that
<br>
we face in an interactive environment.
<br>
Therefore, we had to implement all communication from scratch with standard
<br>
UNIX TCP/IP calls. Though this requires significant efforts, it allows to
<br>
extract the maximum performance out of the network. For example, consider
<br>
the 'Nagle' optimization implemented in the TCP/IP protocol, which delays
<br>
small packets for a short time period to possibly combine them with
<br>
successive packets to generate networkfriendly packet sizes. This
<br>
optimization can result in a better throughput when lots of
<br>
small packets are sent, but can also lead to considerable latencies, if a
<br>
packet gets delayed several times. Direct control of the systems
<br>
communication allows to use such optimizations selectively: For example, we
<br>
turn the Nagle optimization on for sockets in which updated scene data is
<br>
streamed to the clients, as throughput is the main issue here. On the other
<br>
hand, we turn it off for e.g. sockets used to send tiles to the clients, as
<br>
this has to be done with an absolute minimum of latency. A similar behavior
<br>
would be hard to achieve with standard communication libraries. ...&quot;
<br>
-----------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3731/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3732.php">Per Madsen: "[OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<li><strong>Previous message:</strong> <a href="3730.php">SLIM H.A.: "[OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3752.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Reply:</strong> <a href="3752.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
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

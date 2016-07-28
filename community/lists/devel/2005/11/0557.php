<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 11:44:05 2005" -->
<!-- isoreceived="20051129164405" -->
<!-- sent="Tue, 29 Nov 2005 11:43:56 -0500 (Eastern Standard Time)" -->
<!-- isosent="20051129164356" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="TCP performance" -->
<!-- id="Pine.WNT.4.63.0511291131350.3416_at_bosilca" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 11:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0558.php">Jeff Squyres: "Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0556.php">Jeff Squyres: "1.0.1rc4 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">Tim S. Woodall: "Re:  TCP performance"</a>
<li><strong>Reply:</strong> <a href="0559.php">Tim S. Woodall: "Re:  TCP performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I run Netpipe on 4 different clusters with differents OSes and Eternet 
<br>
devices. The results is that nearly the same behaviour happens all the 
<br>
time for small messages. Basically, our latency is really bad. Attached 
<br>
are 2 of the graphs on one MAC OS X cluster (wotan) and a Linux 2.6.10 32 
<br>
bits one. The graph are for Netpipe compiled over tcp, and for Open MPI 
<br>
with all the PMLs (uniq, teg and ob1).Here is the global trend:
<br>
<p>- we are always slower than native TCP (what a guess!)
<br>
<p>- uniq is faster than teg by a fraction of second (it's more visible on 
<br>
fast networks).
<br>
<p>- teg and uniq are always better than ob1 in terms of latency.
<br>
<p>- the behaviour of ob1 differ on wotan and boba. On boba the performances 
<br>
are a lot closer to the other PML when on wotan it's like 40 micro-second 
<br>
slower (it nearly double the raw TCP latency).
<br>
<p>On the same nodes I run other Netpipe with SM and MX and the results are 
<br>
pretty good. So I think we have this latency problem only on TCP. I will 
<br>
take a look to see how exactly is happens but any help is welcome.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<p>

<br><p>
<p><hr>
<ul>
<li>APPLICATION/pdf attachment: <a href="../../att-0557/boba_latency_tcp.pdf">boba_latency_tcp.pdf</a>
</ul>
<!-- attachment="boba_latency_tcp.pdf" -->
<hr>
<ul>
<li>APPLICATION/pdf attachment: <a href="../../att-0557/wotan_latency_tcp.pdf">wotan_latency_tcp.pdf</a>
</ul>
<!-- attachment="wotan_latency_tcp.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0558.php">Jeff Squyres: "Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0556.php">Jeff Squyres: "1.0.1rc4 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">Tim S. Woodall: "Re:  TCP performance"</a>
<li><strong>Reply:</strong> <a href="0559.php">Tim S. Woodall: "Re:  TCP performance"</a>
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

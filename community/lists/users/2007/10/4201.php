<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 12 06:59:22 2007" -->
<!-- isoreceived="20071012105922" -->
<!-- sent="Fri, 12 Oct 2007 13:00:10 +0200" -->
<!-- isosent="20071012110010" -->
<!-- name="Torsten Hoefler" -->
<!-- email="htor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect" -->
<!-- id="20071012110010.GA32326_at_ringo.informatik.tu-chemnitz.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect" -->
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
<strong>From:</strong> Torsten Hoefler (<em>htor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-12 07:00:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4202.php">Neeraj Chourasia: "[OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4200.php">Neeraj Chourasia: "[OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<li><strong>Maybe in reply to:</strong> <a href="4200.php">Neeraj Chourasia: "[OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<span class="quotelev1">&gt;        The code was pretty simple. I was trying to send 8MB data from one
</span><br>
<span class="quotelev1">&gt;    rank to other in a loop(say 1000 iterations). And then i was taking the
</span><br>
<span class="quotelev1">&gt;    average of time taken and was calculating the bandwidth.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The above logic i tried with both mpirun-with-mca-parameters and without
</span><br>
<span class="quotelev1">&gt;    any parameters. And to my surprise, the performance was degrading when i
</span><br>
<span class="quotelev1">&gt;    was trying to manipulate.
</span><br>
That sounds strange. So did you re-use the communication buffers? Did
<br>
you try to run some existing benchmarks like Netpipe [1], IMB or
<br>
Netgauge [2]?
<br>
<p><span class="quotelev1">&gt;    Now I have another question in mind. Is it possible to have IB Hardware
</span><br>
<span class="quotelev1">&gt;    Multicast implementation in OpenMPI? I have gone through the
</span><br>
<span class="quotelev1">&gt;    issues/challenges for the same, but also read couple of people who have
</span><br>
<span class="quotelev1">&gt;    successfully done it for Ethernet/Giga-bit Ethernet and IPoIB ofcourse in
</span><br>
<span class="quotelev1">&gt;    experimental stage. Actually i want to contribute for it in OpenMPI and
</span><br>
<span class="quotelev1">&gt;    need the help for the same.
</span><br>
As far as I know, there are two groups/people working on this. Andy
<br>
Friedley implements a &quot;traditional&quot; ACK based approach (like the one
<br>
that the OSU folks published about some time ago) and I implemented a
<br>
new idea for extreme scale (see &quot;A practically constant-time MPI
<br>
Broadcast Algorithm for large-scale InfiniBand Clusters with
<br>
Multicast&quot; [3]). I know that my version is still unstable and has some
<br>
problems. But I'm working on this.
<br>
<p>Best,
<br>
&nbsp;&nbsp;Torsten
<br>
<p>[1]: <a href="http://www.scl.ameslab.gov/netpipe/">http://www.scl.ameslab.gov/netpipe/</a>
<br>
[2]: <a href="http://www.unixer.de/research/netgauge/">http://www.unixer.de/research/netgauge/</a>
<br>
[3]: <a href="https://www.unixer.de/publications/#hoefler-cac07">https://www.unixer.de/publications/#hoefler-cac07</a>
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
Computer scientists are the historians of computing.  -- Gordon Bell
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4202.php">Neeraj Chourasia: "[OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4200.php">Neeraj Chourasia: "[OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<li><strong>Maybe in reply to:</strong> <a href="4200.php">Neeraj Chourasia: "[OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
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

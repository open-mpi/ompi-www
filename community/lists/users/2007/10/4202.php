<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 12 08:39:34 2007" -->
<!-- isoreceived="20071012123934" -->
<!-- sent="12 Oct 2007 12:38:06 -0000" -->
<!-- isosent="20071012123806" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="[OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect" -->
<!-- id="1192187402.S.5486.21940.webmail16.rediffmail.com.1192192686.15739_at_webmail.rediffmail.com" -->
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
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_ch1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-12 08:38:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4203.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4201.php">Torsten Hoefler: "Re: [OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4203.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Reply:</strong> <a href="4203.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Reply:</strong> <a href="4209.php">Torsten Hoefler: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the buffer was being re-used. No we didnt try to benchmark it with netpipe and other stuffs. But the program was pretty simple. Do you think, I need to test it with bigger chunks (&amp;gt;8MB) for communication.?We also tried manipulating eager_limit and min_rdma_sze, but no success.NeerajOn Fri, 12 Oct 2007 13:00:10 +0200 Open MPI Users  wrote  Hello,  &amp;gt;        The code was pretty simple. I was trying to send 8MB data from one  &amp;gt;    rank to other in a loop(say 1000 iterations). And then i was taking the  &amp;gt;    average of time taken and was calculating the bandwidth.  &amp;gt;   &amp;gt;    The above logic i tried with both mpirun-with-mca-parameters and without  &amp;gt;    any parameters. And to my surprise, the performance was degrading when i  &amp;gt;    was trying to manipulate.  That sounds strange. So did you re-use the communication buffers? Did  you try to run some existing benchmarks like Netpipe [1], IMB or  Netgauge [2]?    &amp;gt;    Now I have another question in mind. Is it possible to have IB Hardware<br>
&nbsp;&nbsp;&amp;gt;    Multicast implementation in OpenMPI? I have gone through the  &amp;gt;    issues/challenges for the same, but also read couple of people who have  &amp;gt;    successfully done it for Ethernet/Giga-bit Ethernet and IPoIB ofcourse in  &amp;gt;    experimental stage. Actually i want to contribute for it in OpenMPI and  &amp;gt;    need the help for the same.  As far as I know, there are two groups/people working on this. Andy  Friedley implements a \&quot;traditional\&quot; ACK based approach (like the one  that the OSU folks published about some time ago) and I implemented a  new idea for extreme scale (see \&quot;A practically constant-time MPI  Broadcast Algorithm for large-scale InfiniBand Clusters with  Multicast\&quot; [3]). I know that my version is still unstable and has some  problems. But I\'m working on this.    Best,    Torsten    [1]: <a href="http://www.scl.ameslab.gov/netpipe/">http://www.scl.ameslab.gov/netpipe/</a>  [2]: <a href="http://www.unixer.de/research/netgauge/">http://www.unixer.de/research/netgauge/</a>  [3]: <a href="https://www.unixer.de/publications/#hoefler-cac07">https://www.unixer.de/publications/#hoefler-cac07</a>    --    bash$ :(){ :|:&amp;amp;};: ---------------------<br>
&nbsp;
<br>
<a href="http://www.unixer.de/">http://www.unixer.de/</a> -----  Computer scientists are the historians of computing.  -- Gordon Bell  _______________________________________________  users mailing list  users_at_[hidden]  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>  
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4202/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4203.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4201.php">Torsten Hoefler: "Re: [OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4203.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Reply:</strong> <a href="4203.php">Jeff Squyres: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Reply:</strong> <a href="4209.php">Torsten Hoefler: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
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

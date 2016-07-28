<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 23:53:42 2007" -->
<!-- isoreceived="20071012035342" -->
<!-- sent="12 Oct 2007 03:52:14 -0000" -->
<!-- isosent="20071012035214" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="[OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect" -->
<!-- id="1192096836.S.5599.30599.webmail77.rediffmail.com.old.1192161133.29800_at_webmail.rediffmail.com" -->
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
<strong>Date:</strong> 2007-10-11 23:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4201.php">Torsten Hoefler: "Re: [OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4199.php">Matteo Cicuttin: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4201.php">Torsten Hoefler: "Re: [OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<li><strong>Maybe reply:</strong> <a href="4201.php">Torsten Hoefler: "Re: [OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,&amp;nbsp;&amp;nbsp;&amp;nbsp; The code was pretty simple. I was trying to send 8MB data from one rank to other in a loop(say 1000 iterations). And then i was taking the average of time taken and was calculating the bandwidth.The above logic i tried with both mpirun-with-mca-parameters and without any parameters. And to my surprise, the performance was degrading when i was trying to manipulate.Now I have another question in mind. Is it possible to have IB Hardware Multicast implementation in OpenMPI? I have gone through the issues/challenges for the same, but also read couple of people who have successfully done it for Ethernet/Giga-bit Ethernet and IPoIB ofcourse in experimental stage. Actually i want to contribute for it in OpenMPI and need the help for the same.-NeerajOn Thu, 11 Oct 2007 12:01:39 +0200 Open MPI Users  wrote  Hi Neeraj,  &amp;gt;        Could anyone tell me the important tuning parameters in openmpi with  &amp;gt;    IB interconnect? I tried setting eager_rdma, min_rdma_size,  &amp;gt;    mpi_leave_pinned para<br>
meters from the mpirun command line on 38 nodes  &amp;gt;    cluster (38*2 processors) but in vain. I found simple mpirun with no mca  &amp;gt;    parameters performing better. I conducted test on P2P send/receive with  &amp;gt;    data size of 8MB.  The performance of the BTL with different parameters depends heavily on  the code that you run. E.g., leave_pinned works very well with many  microbenchmarks (e.g., bandwidth/overlap-wise) but may not perform well  with real applications that use different memory regions. It\'s pretty  much the same with the other parameters. The default values are  considered best for many applications. Can you provide us any details  about the code you\'re runnning to test performance?     &amp;gt;        Similarly i patched HPL linpack code with libnbc(non blocking  &amp;gt;    collectives) and found no performance benefits. I went through its patch  &amp;gt;    and found that, its probably not overlapping computation with  &amp;gt;    communication.  Ah, so there are two things. LibNBC provides overlap<br>
,
<br>
&nbsp;most overlap is  achieved if memory regions are reused and leave_pinned is activated. But  again, this is highly application-dependent. However, the patch for the  Linpack code (I guess you refer to the patch from the LibNBC webpage  [1]) is in experimental stage (as the website says) and is not properly  tested for performance benefit. The original HPL provides something like  a broadcast start and broadcast end phase. I just replaced them with  non-blocking calls to NBC_Ibcast() and did not find the time to do any  performance/code analysis yet. Any input by HPL experts is appreciated!    Best,    Torsten    [1]: <a href="http://www.unixer.de/research/nbcoll/hpl/">http://www.unixer.de/research/nbcoll/hpl/</a>    --    bash$ :(){ :|:&amp;amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----  \&quot;Software Engineering is that part of Computer Science which is too  difficult for the Computer Scientist.\&quot; ~ F. L. Bauer  _______________________________________________  users mailing list  users_at_[hidden]  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>  
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4200/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4201.php">Torsten Hoefler: "Re: [OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4199.php">Matteo Cicuttin: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4201.php">Torsten Hoefler: "Re: [OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<li><strong>Maybe reply:</strong> <a href="4201.php">Torsten Hoefler: "Re: [OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
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

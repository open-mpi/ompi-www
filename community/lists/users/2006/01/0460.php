<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  3 09:52:36 2006" -->
<!-- isoreceived="20060103145236" -->
<!-- sent="Tue, 3 Jan 2006 09:52:30 -0500 (EST)" -->
<!-- isosent="20060103145230" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.GSO.4.62.0601030914000.24586_at_enterprise" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.OSF.4.58.0601031358360.192882_at_gwdu70.gwdg.de" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-03 09:52:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0461.php">Enzo: "Re: [O-MPI users] Rendezvous Question"</a>
<li><strong>Previous message:</strong> <a href="0459.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0459.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0469.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Carsten
<br>
&nbsp;&nbsp;happy new year to you too.
<br>
<p>On Tue, 3 Jan 2006, Carsten Kutzner wrote:
<br>
<p><span class="quotelev1">&gt; Hi Graham,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sorry for the long delay, I was on Christmas holidays. I wish a Happy New
</span><br>
<span class="quotelev1">&gt; Year!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; (Uh, I think the previous email did not arrive in my postbox (?)) But yes,
</span><br>
<p>I am resending it after this reply
<br>
<p><span class="quotelev1">&gt; also the OMPI tuned all-to-all shows this strange performance behaviour
</span><br>
<span class="quotelev1">&gt; (i.e. sometimes it's fast, sometimes it's delayed for 0.2 or more
</span><br>
<span class="quotelev1">&gt; seconds). For message sizes where the delays occur, I am sometimes able to
</span><br>
<span class="quotelev1">&gt; do better with an alternative all-to-all routine. It sets up the same
</span><br>
<span class="quotelev1">&gt; communication pattern as the pairbased sendrecv all-to-all but not on the
</span><br>
<span class="quotelev1">&gt; basis of the CPUs but on the basis of the nodes. The core looks like
</span><br>
<p>So its equivalent to a batch style operation, each CPU does procs_pn*2 
<br>
operations per step and there are just nnodes steps. (Its the same 
<br>
communication pattern as before on a CPU by CPU pairwise, except the final 
<br>
sync is the waitall on the 'set' of posted receives)?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /* loop over nodes */
</span><br>
<span class="quotelev1">&gt;   for (i=0; i&lt;nnodes; i++)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;     destnode   = (         nodeid + i) % nnodes;  /* send to destination node */
</span><br>
<span class="quotelev1">&gt;     sourcenode = (nnodes + nodeid - i) % nnodes;  /* receive from source node */
</span><br>
<span class="quotelev1">&gt;     /* loop over CPUs on each node */
</span><br>
<span class="quotelev1">&gt;     for (j=0; j&lt;procs_pn; j++)  /* 1 or more processors per node */
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       sourcecpu = sourcenode*procs_pn + j; /* source of data */
</span><br>
<span class="quotelev1">&gt;       destcpu   = destnode  *procs_pn + j; /* destination of data */
</span><br>
<span class="quotelev1">&gt;       MPI_Irecv(recvbuf + sourcecpu*recvcount, recvcount, recvtype, sourcecpu, 0, comm, &amp;recvrequests[j]);
</span><br>
<span class="quotelev1">&gt;       MPI_Isend(sendbuf + destcpu  *sendcount, sendcount, sendtype, destcpu  , 0, comm, &amp;sendrequests[j]);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Waitall(procs_pn,sendrequests,sendstatuses);
</span><br>
<span class="quotelev1">&gt;     MPI_Waitall(procs_pn,recvrequests,recvstatuses);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<p>Is it possible to put the send and recv request handles in the same array 
<br>
and then do a waitall on them in a single op. It shouldn't make too much 
<br>
difference as the recvs are all posted (I hope) before the waitall takes 
<br>
effect but it would be interesting to see if internally their is an effect 
<br>
from combining them.
<br>
<p><span class="quotelev1">&gt; I tested for message sizes of 4, 8, 16, 32, ... 131072 byte that are to be
</span><br>
<span class="quotelev1">&gt; sent from each CPU to every other, and for 4, 8, 16, 24 and 32 nodes (each
</span><br>
<span class="quotelev1">&gt; node has 1, 2 or 4 CPUs). While in general the OMPI all-to-all performs
</span><br>
<span class="quotelev1">&gt; better, the alternative one performs better for the following message
</span><br>
<span class="quotelev1">&gt; sizes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4 CPU nodes:
</span><br>
<span class="quotelev1">&gt; 128 CPUs on 32 nodes: 512, 1024                                                byte
</span><br>
<span class="quotelev1">&gt; 96 CPUs on 24 nodes: 512, 1024, 2048, 4096,       16384                       byte
</span><br>
<span class="quotelev1">&gt; 64 CPUs on 16 nodes:                  4096                                    byte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 CPU nodes:
</span><br>
<span class="quotelev1">&gt; 64 CPUs on 32 nodes:      1024, 2048, 4096, 8192                              byte
</span><br>
<span class="quotelev1">&gt; 48 CPUs on 24 nodes:            2048, 4096, 8192,                      131072 byte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 CPU nodes:
</span><br>
<span class="quotelev1">&gt; 32 CPUs on 32 nodes:                  4096, 8192, 16384                       byte
</span><br>
<span class="quotelev1">&gt; 24 CPUs on 24 nodes:                        8192, 16384, 32768, 65536, 131072 byte
</span><br>
<p>Except for the 128K message on 48/24 nodes there appears to be some well 
<br>
defined pattern here. It appears more like a buffering side effect than 
<br>
contention.. if it was pure contension then at larger message sizes the 
<br>
128/32 node example is putting more stress on the switch (more pairs 
<br>
communicating and larger data per pair means the chance for contention 
<br>
is higher).
<br>
<p>Do you have any tools such as Vampir (or its Intel equivalent) available 
<br>
to get a time line graph ? (even jumpshot of one of the bad cases such as 
<br>
the 128/32 for 256 floats below would help).
<br>
<p>(GEORGE, can you run a GigE test for 32 nodes using slog etc and send me 
<br>
the data)
<br>
<p><span class="quotelev1">&gt; Here is an example measurement for 128 CPUs on 32 nodes, averages taken
</span><br>
<span class="quotelev1">&gt; over 25 runs, not counting the 1st one. Performance problems marked by a
</span><br>
<span class="quotelev1">&gt; (!):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI tuned all-to-all:
</span><br>
<span class="quotelev1">&gt; ======================
</span><br>
<span class="quotelev1">&gt;       mesg size  time in seconds
</span><br>
<span class="quotelev1">&gt; #CPUs     floats  average   std.dev.    min.      max.
</span><br>
<span class="quotelev1">&gt; 128           1  0.001288  0.000102    0.001077  0.001512
</span><br>
<span class="quotelev1">&gt; 128           2  0.008391  0.000400    0.007861  0.009958
</span><br>
<span class="quotelev1">&gt; 128           4  0.008403  0.000237    0.008095  0.009018
</span><br>
<span class="quotelev1">&gt; 128           8  0.008228  0.000942    0.003801  0.008810
</span><br>
<span class="quotelev1">&gt; 128          16  0.008503  0.000191    0.008233  0.008839
</span><br>
<span class="quotelev1">&gt; 128          32  0.008656  0.000271    0.008084  0.009177
</span><br>
<span class="quotelev1">&gt; 128          64  0.009085  0.000209    0.008757  0.009603
</span><br>
<span class="quotelev1">&gt; 128         128  0.251414  0.073069    0.011547  0.506703 !
</span><br>
<span class="quotelev1">&gt; 128         256  0.385515  0.127661    0.251431  0.578955 !
</span><br>
<span class="quotelev1">&gt; 128         512  0.035111  0.000872    0.033358  0.036262
</span><br>
<span class="quotelev1">&gt; 128        1024  0.046028  0.002116    0.043381  0.052602
</span><br>
<span class="quotelev1">&gt; 128        2048  0.073392  0.007745    0.066432  0.104531
</span><br>
<span class="quotelev1">&gt; 128        4096  0.165052  0.072889    0.124589  0.404213
</span><br>
<span class="quotelev1">&gt; 128        8192  0.341377  0.041815    0.309457  0.530409
</span><br>
<span class="quotelev1">&gt; 128       16384  0.507200  0.050872    0.492307  0.750956
</span><br>
<span class="quotelev1">&gt; 128       32768  1.050291  0.132867    0.954496  1.344978
</span><br>
<span class="quotelev1">&gt; 128       65536  2.213977  0.154987    1.962907  2.492560
</span><br>
<span class="quotelev1">&gt; 128      131072  4.026107  0.147103    3.800191  4.336205
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; alternative all-to-all:
</span><br>
<span class="quotelev1">&gt; ======================
</span><br>
<span class="quotelev1">&gt; 128           1  0.012584  0.000724    0.011073  0.015331
</span><br>
<span class="quotelev1">&gt; 128           2  0.012506  0.000444    0.011707  0.013461
</span><br>
<span class="quotelev1">&gt; 128           4  0.012412  0.000511    0.011157  0.013413
</span><br>
<span class="quotelev1">&gt; 128           8  0.012488  0.000455    0.011767  0.013746
</span><br>
<span class="quotelev1">&gt; 128          16  0.012664  0.000416    0.011745  0.013362
</span><br>
<span class="quotelev1">&gt; 128          32  0.012878  0.000410    0.012157  0.013609
</span><br>
<span class="quotelev1">&gt; 128          64  0.013138  0.000417    0.012452  0.013826
</span><br>
<span class="quotelev1">&gt; 128         128  0.014016  0.000505    0.013195  0.014942 +
</span><br>
<span class="quotelev1">&gt; 128         256  0.015843  0.000521    0.015107  0.016725 +
</span><br>
<span class="quotelev1">&gt; 128         512  0.052240  0.079323    0.027019  0.320653 !
</span><br>
<span class="quotelev1">&gt; 128        1024  0.123884  0.121560    0.038062  0.308929 !
</span><br>
<span class="quotelev1">&gt; 128        2048  0.176877  0.125229    0.074457  0.387276 !
</span><br>
<span class="quotelev1">&gt; 128        4096  0.305030  0.121716    0.176640  0.496375 !
</span><br>
<span class="quotelev1">&gt; 128        8192  0.546405  0.108007    0.415272  0.899858 !
</span><br>
<span class="quotelev1">&gt; 128       16384  0.604844  0.056576    0.558657  0.843943 !
</span><br>
<span class="quotelev1">&gt; 128       32768  1.235298  0.097969    1.094720  1.451241 !
</span><br>
<span class="quotelev1">&gt; 128       65536  2.926902  0.312733    2.458742  3.895563 !
</span><br>
<span class="quotelev1">&gt; 128      131072  6.208087  0.472115    5.354304  7.317153 !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The alternative all-to-all has the same performance problems, but they set
</span><br>
<span class="quotelev1">&gt; in later ... and last longer ;(  The results for the other cases look
</span><br>
<span class="quotelev1">&gt; similar.
</span><br>
<p>Two things we can do right now, add a new alltoall like yours (adding 
<br>
yours to the code would require legal paperwork (3rd party stuff) and 
<br>
correct the decision function, but really we just need to find out what is 
<br>
causing this as the current tuned collective alltoall looks faster when 
<br>
this effect is not occuring anyway. It could be anything from a 
<br>
hardware/configuration issue to a problem in the BTL/PTLs.
<br>
<p>I am currently visiting HLRS/Stuttgart so I will try and call you in an 
<br>
hour or so, if your leaving soon I can call you tomorrow morning?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0461.php">Enzo: "Re: [O-MPI users] Rendezvous Question"</a>
<li><strong>Previous message:</strong> <a href="0459.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0459.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0463.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0469.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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

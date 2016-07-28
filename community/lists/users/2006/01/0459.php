<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  3 09:04:23 2006" -->
<!-- isoreceived="20060103140423" -->
<!-- sent="Tue, 3 Jan 2006 15:04:17 +0100 (MET)" -->
<!-- isosent="20060103140417" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.OSF.4.58.0601031358360.192882_at_gwdu70.gwdg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.62.0512230949030.1629_at_enterprise" -->
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
<strong>From:</strong> Carsten Kutzner (<em>ckutzne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-03 09:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0458.php">Brian Barrett: "Re: [O-MPI users] Rendezvous Question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0450.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Graham,
<br>
<p>sorry for the long delay, I was on Christmas holidays. I wish a Happy New
<br>
Year!
<br>
<p>On Fri, 23 Dec 2005, Graham E Fagg wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have also tried the tuned alltoalls and they are really great!! Only for
</span><br>
<span class="quotelev2">&gt; &gt; very few message sizes in the case of 4 CPUs on a node one of my alltoalls
</span><br>
<span class="quotelev2">&gt; &gt; performed better. Are these tuned collectives ready to be used for
</span><br>
<span class="quotelev2">&gt; &gt; production runs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are actively testing them on larger systems to get better decision
</span><br>
<span class="quotelev1">&gt; functions.. can you send me the list of which sizes they do better and
</span><br>
<span class="quotelev1">&gt; worse for? (that way I can alter the decision functions). But the real
</span><br>
<span class="quotelev1">&gt; question is do they exhibit the strange performance behaviour that you
</span><br>
<span class="quotelev1">&gt; have with the other alltoall versions? (Noting that in my previous email
</span><br>
<span class="quotelev1">&gt; to you I stated that one of the alltoalls is a sendrecv pairbased
</span><br>
<span class="quotelev1">&gt; implementation).
</span><br>
<p>(Uh, I think the previous email did not arrive in my postbox (?)) But yes,
<br>
also the OMPI tuned all-to-all shows this strange performance behaviour
<br>
(i.e. sometimes it's fast, sometimes it's delayed for 0.2 or more
<br>
seconds). For message sizes where the delays occur, I am sometimes able to
<br>
do better with an alternative all-to-all routine. It sets up the same
<br>
communication pattern as the pairbased sendrecv all-to-all but not on the
<br>
basis of the CPUs but on the basis of the nodes. The core looks like
<br>
<p>&nbsp;&nbsp;&nbsp;/* loop over nodes */
<br>
&nbsp;&nbsp;&nbsp;for (i=0; i&lt;nnodes; i++)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;destnode   = (         nodeid + i) % nnodes;  /* send to destination node */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sourcenode = (nnodes + nodeid - i) % nnodes;  /* receive from source node */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* loop over CPUs on each node */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (j=0; j&lt;procs_pn; j++)  /* 1 or more processors per node */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sourcecpu = sourcenode*procs_pn + j; /* source of data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;destcpu   = destnode  *procs_pn + j; /* destination of data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(recvbuf + sourcecpu*recvcount, recvcount, recvtype, sourcecpu, 0, comm, &amp;recvrequests[j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(sendbuf + destcpu  *sendcount, sendcount, sendtype, destcpu  , 0, comm, &amp;sendrequests[j]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall(procs_pn,sendrequests,sendstatuses);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall(procs_pn,recvrequests,recvstatuses);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>I tested for message sizes of 4, 8, 16, 32, ... 131072 byte that are to be
<br>
sent from each CPU to every other, and for 4, 8, 16, 24 and 32 nodes (each
<br>
node has 1, 2 or 4 CPUs). While in general the OMPI all-to-all performs
<br>
better, the alternative one performs better for the following message
<br>
sizes:
<br>
<p>4 CPU nodes:
<br>
128 CPUs on 32 nodes: 512, 1024                                                byte
<br>
&nbsp;96 CPUs on 24 nodes: 512, 1024, 2048, 4096,       16384                       byte
<br>
&nbsp;64 CPUs on 16 nodes:                  4096                                    byte
<br>
<p>2 CPU nodes:
<br>
&nbsp;64 CPUs on 32 nodes:      1024, 2048, 4096, 8192                              byte
<br>
&nbsp;48 CPUs on 24 nodes:            2048, 4096, 8192,                      131072 byte
<br>
<p>1 CPU nodes:
<br>
&nbsp;32 CPUs on 32 nodes:                  4096, 8192, 16384                       byte
<br>
&nbsp;24 CPUs on 24 nodes:                        8192, 16384, 32768, 65536, 131072 byte
<br>
<p>Here is an example measurement for 128 CPUs on 32 nodes, averages taken
<br>
over 25 runs, not counting the 1st one. Performance problems marked by a
<br>
(!):
<br>
<p>OMPI tuned all-to-all:
<br>
======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mesg size  time in seconds
<br>
#CPUs     floats  average   std.dev.    min.      max.
<br>
&nbsp;128           1  0.001288  0.000102    0.001077  0.001512
<br>
&nbsp;128           2  0.008391  0.000400    0.007861  0.009958
<br>
&nbsp;128           4  0.008403  0.000237    0.008095  0.009018
<br>
&nbsp;128           8  0.008228  0.000942    0.003801  0.008810
<br>
&nbsp;128          16  0.008503  0.000191    0.008233  0.008839
<br>
&nbsp;128          32  0.008656  0.000271    0.008084  0.009177
<br>
&nbsp;128          64  0.009085  0.000209    0.008757  0.009603
<br>
&nbsp;128         128  0.251414  0.073069    0.011547  0.506703 !
<br>
&nbsp;128         256  0.385515  0.127661    0.251431  0.578955 !
<br>
&nbsp;128         512  0.035111  0.000872    0.033358  0.036262
<br>
&nbsp;128        1024  0.046028  0.002116    0.043381  0.052602
<br>
&nbsp;128        2048  0.073392  0.007745    0.066432  0.104531
<br>
&nbsp;128        4096  0.165052  0.072889    0.124589  0.404213
<br>
&nbsp;128        8192  0.341377  0.041815    0.309457  0.530409
<br>
&nbsp;128       16384  0.507200  0.050872    0.492307  0.750956
<br>
&nbsp;128       32768  1.050291  0.132867    0.954496  1.344978
<br>
&nbsp;128       65536  2.213977  0.154987    1.962907  2.492560
<br>
&nbsp;128      131072  4.026107  0.147103    3.800191  4.336205
<br>
<p>alternative all-to-all:
<br>
======================
<br>
&nbsp;128           1  0.012584  0.000724    0.011073  0.015331
<br>
&nbsp;128           2  0.012506  0.000444    0.011707  0.013461
<br>
&nbsp;128           4  0.012412  0.000511    0.011157  0.013413
<br>
&nbsp;128           8  0.012488  0.000455    0.011767  0.013746
<br>
&nbsp;128          16  0.012664  0.000416    0.011745  0.013362
<br>
&nbsp;128          32  0.012878  0.000410    0.012157  0.013609
<br>
&nbsp;128          64  0.013138  0.000417    0.012452  0.013826
<br>
&nbsp;128         128  0.014016  0.000505    0.013195  0.014942 +
<br>
&nbsp;128         256  0.015843  0.000521    0.015107  0.016725 +
<br>
&nbsp;128         512  0.052240  0.079323    0.027019  0.320653 !
<br>
&nbsp;128        1024  0.123884  0.121560    0.038062  0.308929 !
<br>
&nbsp;128        2048  0.176877  0.125229    0.074457  0.387276 !
<br>
&nbsp;128        4096  0.305030  0.121716    0.176640  0.496375 !
<br>
&nbsp;128        8192  0.546405  0.108007    0.415272  0.899858 !
<br>
&nbsp;128       16384  0.604844  0.056576    0.558657  0.843943 !
<br>
&nbsp;128       32768  1.235298  0.097969    1.094720  1.451241 !
<br>
&nbsp;128       65536  2.926902  0.312733    2.458742  3.895563 !
<br>
&nbsp;128      131072  6.208087  0.472115    5.354304  7.317153 !
<br>
<p>The alternative all-to-all has the same performance problems, but they set
<br>
in later ... and last longer ;(  The results for the other cases look
<br>
similar.
<br>
<p>Ciao,
<br>
&nbsp;&nbsp;Carsten
<br>
<p><p>---------------------------------------------------
<br>
Dr. Carsten Kutzner
<br>
Max Planck Institute for Biophysical Chemistry
<br>
Theoretical and Computational Biophysics Department
<br>
Am Fassberg 11
<br>
37077 Goettingen, Germany
<br>
Tel. +49-551-2012313, Fax: +49-551-2012302
<br>
eMail ckutzne_at_[hidden]
<br>
<a href="http://www.gwdg.de/~ckutzne">http://www.gwdg.de/~ckutzne</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0458.php">Brian Barrett: "Re: [O-MPI users] Rendezvous Question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0450.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0460.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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

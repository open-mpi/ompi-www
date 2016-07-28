<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  2 06:05:10 2005" -->
<!-- isoreceived="20051202110510" -->
<!-- sent="Fri, 2 Dec 2005 12:05:05 +0100 (MET)" -->
<!-- isosent="20051202110505" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re:  LAM: MPI_Alltoall performance and congestion (fwd)" -->
<!-- id="Pine.OSF.4.58.0512021033340.518921_at_gwdu70.gwdg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto=" LAM: MPI_Alltoall performance and congestion (fwd)" -->
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
<strong>Date:</strong> 2005-12-02 06:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0577.php">Ralf Wildenhues: "Re:  PGI configure failure.."</a>
<li><strong>Previous message:</strong> <a href="0575.php">Jeff Squyres: "1.0.1rc5 is available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I initiated this thread on the LAM mailing list, but as Brian Barrett
<br>
suggested, I am now reporting my results here. Hope this is of interest!
<br>
<p>My motivation is to get good performance of the MPI_Alltoall routine on
<br>
our Gigabit Ethernet clusters. Most users here run the GROMACS molecular
<br>
dynamics code and it turned out that the MPI_Alltoall routine is one
<br>
of the main scaling bottlenecks (on Ethernet), at least when flow control
<br>
is not enabled. Then basically the code does not scale beyond two computer
<br>
nodes.
<br>
<p>I wrote a test program that performs MPI_Alltoall communication for
<br>
varying message sizes (see attachment) to find out where congestion
<br>
occurs. This I originally tested for LAM 7.1.1 and you can see my results
<br>
in LAM.ps. The plots show the transmission rate per MPI process as a
<br>
function of the message size. Left: 1 CPU-nodes, right 2 CPU-nodes, top:
<br>
without flow control, middle: with flow control. (Horizontal broken line
<br>
indicates Ethernet max. throughput)
<br>
<p>Because even with flow control you get congestion for 16+ nodes, I tried
<br>
out ordered communication schemes, which should in principle totally avoid
<br>
congestion. The result for a simple 1-CPU-node Sendrecv-based scheme is
<br>
seen in the lower left plot, the result for a more complex multi-CPU node
<br>
Isend/Irecv scheme in the lower right plot. Hardware flow control was
<br>
disabled for the ordered communication schemes. Nice thing is, there is no
<br>
congestion any more, but due to the barriers in the code, the transmission
<br>
rates you can reach with the ordered all-to-alls is lower than with the
<br>
MPI_Alltoall when there is no congestion. When the MPI_Alltoall shows
<br>
congestion, the ordered all-to-all clearly wins.
<br>
<p>As Brian suggested, I repeated my tests with OpenMPI 1.0, see OpenMPI.ps.
<br>
The OpenMPI MPI_Alltoall shows less congestion than the LAM MPI_Alltoall,
<br>
both with and without flow control. Unfortunately the ordered routines
<br>
even perform worse than in the LAM case.
<br>
<p>Here are some numbers for the transmission rate T per CPU:
<br>
<p>Table 1. Message size=2 MB, 4 CPUs &quot;limit for large messages&quot;:
<br>
CPUs/node  LAM                            OpenMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Alltoall  own all-to-all   MPI_Alltoall  own all-to-all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(flow contr)  (no flow c.)     (flow contr)  (no flow c.)
<br>
===========================================================================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1      68.2 MB/s     69.6 MB/s        64.0 MB/s     64.0 MB/s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2      48.9 MB/s     45.3 MB/s        48.7 MB/s     37.4 MB/s
<br>
<p><p><p>Table 2. Message size=1024 byte, 32 CPUs. (Note: here the MPI_Alltoall
<br>
does not show congestion when flow control is enabled):
<br>
CPUs/node  LAM                            OpenMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Alltoall  own all-to-all   MPI_Alltoall  own all-to-all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(flow contr)  (no flow c.)     (flow contr)  (no flow c.)
<br>
===========================================================================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1      20.9 MB/s      2.8 MB/s        18.2 MB/s      1.3 MB/s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2      14.3 MB/s      5.0 MB/s        14.3 MB/s      2.7 MB/s
<br>
<p>While for large messages the transmission rates between the MPI and the
<br>
ordered all-to-alls become comparable, for smaller message sizes the
<br>
ordered routines perform worse, due to the barriers between the
<br>
communication phases. However, I do not understand, why the transmission
<br>
rate of the ordered all-to-alls does so heavily depend upon the number of
<br>
CPUs in the OpenMPI case, but not in the LAM case. Are maybe the barrier
<br>
synchronization times in OpenMPI longer than in LAM?
<br>
<p>Any ideas, how to rise the throughput without risking congestion, are
<br>
welcome!
<br>
<p>Regards,
<br>
&nbsp;&nbsp;&nbsp;Carsten
<br>
<p>---------------------------------------------------
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
<p><p><p>---------- Forwarded message ----------
<br>
Date: Wed, 2 Nov 2005 08:23:15 -0500
<br>
From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
<br>
Reply-To: General LAM/MPI mailing list &lt;lam_at_[hidden]&gt;
<br>
To: General LAM/MPI mailing list &lt;lam_at_[hidden]&gt;
<br>
Subject: Re: LAM: MPI_Alltoall performance and congestion
<br>
<p>On Nov 2, 2005, at 7:44 AM, Carsten Kutzner wrote:
<br>
<p><span class="quotelev1">&gt; Will a new all-to-all routine be implemented in a future version
</span><br>
<span class="quotelev1">&gt; of LAM / OpenMPI? I am willing to contribute my code as well
</span><br>
<span class="quotelev1">&gt; if there is interest.
</span><br>
<p>We will probably not be doing any more work on LAM/MPI's collective
<br>
routines.  While clearly not optimal for all cases (as you have
<br>
experienced), they do appear to be correct.  At this point, we're
<br>
hesitant to do anything to regress from a correctness standpoint.
<br>
<p>However, we are actively working on improving collective performance
<br>
in Open MPI.  Our collective setup in Open MPI is a bit different
<br>
than the one in LAM, and some of the algorithms are already quite
<br>
different.  The FT-MPI team from University of Tennessee is also
<br>
working on some new routines that should give better performance in a
<br>
wider range of scenarios.  We would be happy to have contributions
<br>
that help improve performance in certain situations - if nothing
<br>
else, it gives us a good reference point for our work.  If you are
<br>
interested, I would highly recommend trying out one of the Open MPI
<br>
release candidates, subscribing to the Open MPI developer's mailing
<br>
list, and letting us know.  The Open MPI web page is, of course,
<br>
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
<br>
<p><p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   LAM/MPI developer and all around nice guy
   Have a LAM/MPI day: <a href="http://www.lam-mpi.org/">http://www.lam-mpi.org/</a>
_______________________________________________
This list is archived at <a href="http://www.lam-mpi.org/MailArchives/lam/">http://www.lam-mpi.org/MailArchives/lam/</a>



</pre>
<p>
<p><hr>
<ul>
<li>TEXT/PLAIN attachment: <a href="../../att-0576/phased.c">phased.c</a>
</ul>
<!-- attachment="phased.c" -->
<hr>
<ul>
<li>APPLICATION/PostScript attachment: <a href="../../att-0576/LAM.ps">LAM.ps</a>
</ul>
<!-- attachment="LAM.ps" -->
<hr>
<ul>
<li>APPLICATION/PostScript attachment: <a href="../../att-0576/OpenMPI.ps">OpenMPI.ps</a>
</ul>
<!-- attachment="OpenMPI.ps" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0577.php">Ralf Wildenhues: "Re:  PGI configure failure.."</a>
<li><strong>Previous message:</strong> <a href="0575.php">Jeff Squyres: "1.0.1rc5 is available"</a>
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

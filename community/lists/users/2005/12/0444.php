<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 19 07:26:29 2005" -->
<!-- isoreceived="20051219122629" -->
<!-- sent="Mon, 19 Dec 2005 13:26:13 +0100 (MET)" -->
<!-- isosent="20051219122613" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="[O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.OSF.4.58.0512191154210.316775_at_gwdu70.gwdg.de" -->
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
<strong>From:</strong> Carsten Kutzner (<em>ckutzne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-19 07:26:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0445.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0443.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0445.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0445.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am desparately trying to get better all-to-all performance on Gbit
<br>
Ethernet (flow control is enabled). I have been playing around with
<br>
several all-to-all schemes and been able to reduce congestion by
<br>
communicating in an ordered fashion.
<br>
<p>E.g. the simplest scheme looks like
<br>
<p>&nbsp;&nbsp;&nbsp;for (i=0; i&lt;ncpu; i++)
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* send to dest */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest = (cpuid + i) % ncpu;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* receive from source  */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source   = (ncpu + cpuid - i) % ncpu;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Sendrecv(sendbuf+dest  *sendcount, sendcount, sendtype, dest  , 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvbuf+source*recvcount, recvcount, recvtype, source, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>For sendcount=32768 and sendtype=float (yields 131072 bytes) the time such
<br>
an all-to-all takes is (average over 100 runs, std deviation in () ):
<br>
<p>SENDRECV ALLTOALL on 16 PROCS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768 floats took 0.036783 (0.008798) seconds. Min: 0.034175  max: 0.123684
<br>
SENDRECV ALLTOALL on 32 PROCS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768 floats took 0.082687 (0.035920) seconds. Min: 0.071915  max: 0.285299
<br>
<p>For comparison:
<br>
MPI_Alltoall on 16 PROCS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768 floats took 0.057936 (0.073605) seconds. Min: 0.027218  max: 0.275988
<br>
MPI_Alltoall on 32 PROCS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768 floats took 0.137835 (0.100580) seconds. Min: 0.055607  max: 0.412144
<br>
<p>The sendrecv all-to-all performs better for these message sizes, but
<br>
on 32 CPUs (on 32 nodes) there is still congestion. When I try to separate
<br>
the communication phases by putting an MPI_Barrier(MPI_COMM_WORLD) after
<br>
the sendrecv, this makes the problem of congestion even worse:
<br>
<p>SENDRECV ALLTOALL on 32 PROCS, with Barrier:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768 floats took 0.179162 (0.136885) seconds. Min: 0.091028  max: 0.729049
<br>
<p>How can a barrier lead to more congestion???
<br>
<p>Thanks in advance for helpful comments,
<br>
&nbsp;&nbsp;&nbsp;Carsten
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
<li><strong>Next message:</strong> <a href="0445.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0443.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0445.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0445.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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

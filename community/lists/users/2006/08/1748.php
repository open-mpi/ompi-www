<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 16 22:55:34 2006" -->
<!-- isoreceived="20060817025534" -->
<!-- sent="Wed, 16 Aug 2006 22:55:27 -0400" -->
<!-- isosent="20060817025527" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[OMPI users] Dual core Intel CPU" -->
<!-- id="44E3DA9F.5040805_at_sympatico.ca" -->
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
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-16 22:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1749.php">Hugh Merz: "Re: [OMPI users] Dual core Intel CPU"</a>
<li><strong>Previous message:</strong> <a href="1747.php">Andrew J Caird: "[OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1749.php">Hugh Merz: "Re: [OMPI users] Dual core Intel CPU"</a>
<li><strong>Reply:</strong> <a href="1749.php">Hugh Merz: "Re: [OMPI users] Dual core Intel CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi AnyOne,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have an 18 node cluster of heterogenous machines. I used fc5 smp 
<br>
kernel and ocsar 5.0 beta.
<br>
I tried the following out on a machine with Open mpi 1.1 and 1.1.1b4 
<br>
versions. The machine consists of a Dlink 1gigb/s DGE-530T etherent card 
<br>
2.66GHz dual core Intel Cpu Pentium D 805 with Dual Cannel 1 gig DDR 
<br>
3200 ram. I compiled the ATLAS libs (ver 3.7.13beta) for this machine 
<br>
and HPL (xhpl executable) and ran the following experiment twice:
<br>
content of my &quot;hosts&quot; file1 for this machine for 1st experiment:
<br>
a8.lightning.net slots=2
<br>
content of my &quot;hosts&quot; file2 for this machine for 2nd experiment:
<br>
a8.lightning.net
<br>
<p>On the single node I ran for HPL.dat N =6840 and NB=120 : 1024 MB of Ram 
<br>
N = sqrt(0.75* ((1024-32 video overhead)/2 )*1000000*1/8)=approx 6840; 
<br>
512MB Ram per CPU otherwise the OS uses the hard drive for virtaul 
<br>
memory. This way it resides totally in Ram.
<br>
I ran this command twice for the two different hosts files above in two 
<br>
experiments:
<br>
# mpirun --prefix /opt/openmpi114 --hostsfile hosts -mca btl tcp, self  
<br>
-np 1 ./xhpl
<br>
In both cases the performance remains the same around 4.040 GFlops I 
<br>
would expect since I am running slots =2 as two CPU's I would get a 
<br>
performance  increase from expt 2 by 100 -50%
<br>
But I see no difference.Can anybody tell me why this is so?
<br>
I have not tried mpich 2.
<br>
Thank you,
<br>
Regards,
<br>
Allan Menezes
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1749.php">Hugh Merz: "Re: [OMPI users] Dual core Intel CPU"</a>
<li><strong>Previous message:</strong> <a href="1747.php">Andrew J Caird: "[OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1749.php">Hugh Merz: "Re: [OMPI users] Dual core Intel CPU"</a>
<li><strong>Reply:</strong> <a href="1749.php">Hugh Merz: "Re: [OMPI users] Dual core Intel CPU"</a>
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

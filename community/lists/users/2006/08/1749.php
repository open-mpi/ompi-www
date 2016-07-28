<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 17 01:16:07 2006" -->
<!-- isoreceived="20060817051607" -->
<!-- sent="Thu, 17 Aug 2006 01:16:04 -0400 (EDT)" -->
<!-- isosent="20060817051604" -->
<!-- name="Hugh Merz" -->
<!-- email="merz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dual core Intel CPU" -->
<!-- id="Pine.LNX.4.64.0608162357110.16160_at_grizzly.cita.utoronto.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44E3DA9F.5040805_at_sympatico.ca" -->
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
<strong>From:</strong> Hugh Merz (<em>merz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-17 01:16:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1750.php">Allan Menezes: "[OMPI users] Open Mpi and Dual Core Intel CPU's"</a>
<li><strong>Previous message:</strong> <a href="1748.php">Allan Menezes: "[OMPI users] Dual core Intel CPU"</a>
<li><strong>In reply to:</strong> <a href="1748.php">Allan Menezes: "[OMPI users] Dual core Intel CPU"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 16 Aug 2006, Allan Menezes wrote:
<br>
<span class="quotelev1">&gt; Hi AnyOne,
</span><br>
<span class="quotelev1">&gt;      I have an 18 node cluster of heterogenous machines. I used fc5 smp
</span><br>
<span class="quotelev1">&gt; kernel and ocsar 5.0 beta.
</span><br>
<span class="quotelev1">&gt; I tried the following out on a machine with Open mpi 1.1 and 1.1.1b4
</span><br>
<span class="quotelev1">&gt; versions. The machine consists of a Dlink 1gigb/s DGE-530T etherent card
</span><br>
<span class="quotelev1">&gt; 2.66GHz dual core Intel Cpu Pentium D 805 with Dual Cannel 1 gig DDR
</span><br>
<span class="quotelev1">&gt; 3200 ram. I compiled the ATLAS libs (ver 3.7.13beta) for this machine
</span><br>
<span class="quotelev1">&gt; and HPL (xhpl executable) and ran the following experiment twice:
</span><br>
<span class="quotelev1">&gt; content of my &quot;hosts&quot; file1 for this machine for 1st experiment:
</span><br>
<span class="quotelev1">&gt; a8.lightning.net slots=2
</span><br>
<span class="quotelev1">&gt; content of my &quot;hosts&quot; file2 for this machine for 2nd experiment:
</span><br>
<span class="quotelev1">&gt; a8.lightning.net
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the single node I ran for HPL.dat N =6840 and NB=120 : 1024 MB of Ram
</span><br>
<span class="quotelev1">&gt; N = sqrt(0.75* ((1024-32 video overhead)/2 )*1000000*1/8)=approx 6840;
</span><br>
<span class="quotelev1">&gt; 512MB Ram per CPU otherwise the OS uses the hard drive for virtaul
</span><br>
<span class="quotelev1">&gt; memory. This way it resides totally in Ram.
</span><br>
<span class="quotelev1">&gt; I ran this command twice for the two different hosts files above in two
</span><br>
<span class="quotelev1">&gt; experiments:
</span><br>
<span class="quotelev1">&gt; # mpirun --prefix /opt/openmpi114 --hostsfile hosts -mca btl tcp, self
</span><br>
<span class="quotelev1">&gt; -np 1 ./xhpl
</span><br>
<span class="quotelev1">&gt; In both cases the performance remains the same around 4.040 GFlops I
</span><br>
<span class="quotelev1">&gt; would expect since I am running slots =2 as two CPU's I would get a
</span><br>
<span class="quotelev1">&gt; performance  increase from expt 2 by 100 -50%
</span><br>
<span class="quotelev1">&gt; But I see no difference.Can anybody tell me why this is so?
</span><br>
<p>You are only launching 1 process in both cases. Try `mpirun -np 2 ...` to launch 2 processes, which will load each of your processors with an xhpl process.
<br>
<p>Please read the faq:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
<br>
<p>It includes a lot of information about slots and how they should be set as well.
<br>
<p>Hugh
<br>
<p><span class="quotelev1">&gt; I have not tried mpich 2.
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Allan Menezes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1750.php">Allan Menezes: "[OMPI users] Open Mpi and Dual Core Intel CPU's"</a>
<li><strong>Previous message:</strong> <a href="1748.php">Allan Menezes: "[OMPI users] Dual core Intel CPU"</a>
<li><strong>In reply to:</strong> <a href="1748.php">Allan Menezes: "[OMPI users] Dual core Intel CPU"</a>
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

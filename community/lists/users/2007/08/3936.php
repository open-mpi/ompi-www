<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 03:33:34 2007" -->
<!-- isoreceived="20070829073334" -->
<!-- sent="Wed, 29 Aug 2007 13:03:30 +0530" -->
<!-- isosent="20070829073330" -->
<!-- name="Amit Kumar Saha" -->
<!-- email="amitsaha.in_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic problems with OpenMPI" -->
<!-- id="547db2260708290033y57cc92efl1ef0c65d4cadfb8d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070829070945.GV25167_at_minantech.com" -->
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
<strong>From:</strong> Amit Kumar Saha (<em>amitsaha.in_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 03:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3937.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3935.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3935.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3937.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3937.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gleb,
<br>
<p>On 8/29/07, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Where have you installed it? If in /usr/local/ then try to run
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/local/ --np 1 --hostfile hostfile ./a.out
</span><br>
<p>Thanks again. It solves the problem.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this helps then you may want to re-run configure script with flag
</span><br>
<span class="quotelev1">&gt; --enable-orterun-prefix-by-default and recompile.
</span><br>
<p>Also, is open MPI 1.1 compatible with MPI 1.2.3, I mean to ask is
<br>
whether a MPI executable generated using 1.1 is executable by 1.2.3?
<br>
<p>i am trying to run a 1.1 generated executable on a remote 1.2.3 host
<br>
when i get the following:
<br>
<p>amit_at_ubuntu-desktop-1:~/mpi-exec$ mpirun -np 3 --hostfile
<br>
/home/amit/junk/mpi-codes/mpi-host-file --mca btl ^openib ./HellMPI
<br>
<p>amit_at_debian-desktop-1's password: amit_at_ubuntu-desktop-2's password:
<br>
[ubuntu-desktop-1:13202] [0,0,0] ORTE_ERROR_LOG: Data unpack failed in
<br>
file dss/dss_peek.c at line 59
<br>
[ubuntu-desktop-1:13202] [0,0,0] ORTE_ERROR_LOG: Data unpack failed in
<br>
file dss/dss_peek.c at line 59
<br>
[ubuntu-desktop-1:13202] [0,0,0] ORTE_ERROR_LOG: Data unpack failed in
<br>
file dss/dss_peek.c at line 59
<br>
<p>Note that the host &quot;debian-desktop-1&quot; is 1.2.3 and the other 2 is 1.1
<br>
<p><p>Regards
<br>
<pre>
-- 
Amit Kumar Saha
[URL]:<a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3937.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3935.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3935.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3937.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3937.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
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

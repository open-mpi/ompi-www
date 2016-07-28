<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 03:11:05 2007" -->
<!-- isoreceived="20070829071105" -->
<!-- sent="Wed, 29 Aug 2007 10:09:45 +0300" -->
<!-- isosent="20070829070945" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic problems with OpenMPI" -->
<!-- id="20070829070945.GV25167_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="547db2260708282356p57d4ffd4hfe163140808ec5f_at_mail.gmail.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 03:09:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3936.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3934.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3934.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3936.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3936.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 29, 2007 at 12:26:54PM +0530, Amit Kumar Saha wrote:
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed Open MPI 1.2.3 from source on Debian 4.0. I did the
</span><br>
<span class="quotelev1">&gt; &quot;make all install&quot; using root privileges.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now when I try to execute a simple program , I get the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; debian-desktop-1:/home/amit/junk/mpi-codes# mpirun --np 1 --hostfile
</span><br>
<span class="quotelev1">&gt; hostfile ./a.out
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libmpi.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the error whether I do it as &quot;normal user&quot; or &quot;root user&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please suggest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Where have you installed it? If in /usr/local/ then try to run
<br>
mpirun --prefix /usr/local/ --np 1 --hostfile hostfile ./a.out
<br>
<p>If this helps then you may want to re-run configure script with flag
<br>
--enable-orterun-prefix-by-default and recompile.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3936.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3934.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3934.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3936.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3936.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
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

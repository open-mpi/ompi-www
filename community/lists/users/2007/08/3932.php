<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 02:19:28 2007" -->
<!-- isoreceived="20070829061928" -->
<!-- sent="Wed, 29 Aug 2007 09:18:05 +0300" -->
<!-- isosent="20070829061805" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic problems with OpenMPI" -->
<!-- id="20070829061805.GT25167_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="547db2260708282312s33d93few333c12341a724078_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-08-29 02:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3933.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3931.php">Amit Kumar Saha: "[OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3931.php">Amit Kumar Saha: "[OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3933.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3933.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 29, 2007 at 11:42:29AM +0530, Amit Kumar Saha wrote:
<br>
<span class="quotelev1">&gt; hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am just trying to get started with OpenMPI (version 1.1) on Linux.
</span><br>
Vesrion 1.1 is old an no longer supported.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try to run a simple MPI - &quot;Hello World&quot; program, here is what i get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amit_at_ubuntu-desktop-1:~/junk/mpi-codes$ mpirun -np 1 --hostfile
</span><br>
<span class="quotelev1">&gt; mpi-host-file ./a.out
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,0]: OpenIB on host ubuntu-desktop-1 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Processor 0 of 1: Hello World!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please explain the statements above.
</span><br>
Open MPI has Infiniband module compiled but there is no IB device found
<br>
on your host. Try to add &quot;--mca btl ^openib&quot; string to your command
<br>
line.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, when I am trying to launch the above process on 2 processors,
</span><br>
<span class="quotelev1">&gt; instead of one, it gives me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host:       ubuntu-desktop-2
</span><br>
<span class="quotelev1">&gt; Executable: ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that mean I have to place a copy of the executable on the other
</span><br>
<span class="quotelev1">&gt; node as well? Where should I place the executable?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Yes. At the same location on each host.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3933.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3931.php">Amit Kumar Saha: "[OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3931.php">Amit Kumar Saha: "[OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3933.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3933.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
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

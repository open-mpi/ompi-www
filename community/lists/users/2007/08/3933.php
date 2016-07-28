<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 02:40:10 2007" -->
<!-- isoreceived="20070829064010" -->
<!-- sent="Wed, 29 Aug 2007 12:10:05 +0530" -->
<!-- isosent="20070829064005" -->
<!-- name="Amit Kumar Saha" -->
<!-- email="amitsaha.in_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic problems with OpenMPI" -->
<!-- id="547db2260708282340u2dc66dfw6ba0912c5b62c31b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070829061805.GT25167_at_minantech.com" -->
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
<strong>Date:</strong> 2007-08-29 02:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3934.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3932.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3932.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3934.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3934.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/29/07, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Wed, Aug 29, 2007 at 11:42:29AM +0530, Amit Kumar Saha wrote:
</span><br>
<span class="quotelev2">&gt; &gt; hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am just trying to get started with OpenMPI (version 1.1) on Linux.
</span><br>
<span class="quotelev1">&gt; Vesrion 1.1 is old an no longer supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I try to run a simple MPI - &quot;Hello World&quot; program, here is what i get:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; amit_at_ubuntu-desktop-1:~/junk/mpi-codes$ mpirun -np 1 --hostfile
</span><br>
<span class="quotelev2">&gt; &gt; mpi-host-file ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0]: OpenIB on host ubuntu-desktop-1 was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt; &gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt; &gt; lower performance.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Processor 0 of 1: Hello World!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please explain the statements above.
</span><br>
<span class="quotelev1">&gt; Open MPI has Infiniband module compiled but there is no IB device found
</span><br>
<span class="quotelev1">&gt; on your host. Try to add &quot;--mca btl ^openib&quot; string to your command
</span><br>
<span class="quotelev1">&gt; line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, when I am trying to launch the above process on 2 processors,
</span><br>
<span class="quotelev2">&gt; &gt; instead of one, it gives me:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Host:       ubuntu-desktop-2
</span><br>
<span class="quotelev2">&gt; &gt; Executable: ./a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cannot continue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does that mean I have to place a copy of the executable on the other
</span><br>
<span class="quotelev2">&gt; &gt; node as well? Where should I place the executable?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Yes. At the same location on each host.
</span><br>
<p>Thank you very much Gleb. It works!
<br>
<p>Regards
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
<li><strong>Next message:</strong> <a href="3934.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3932.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3932.php">Gleb Natapov: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3934.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3934.php">Amit Kumar Saha: "Re: [OMPI users] Basic problems with OpenMPI"</a>
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

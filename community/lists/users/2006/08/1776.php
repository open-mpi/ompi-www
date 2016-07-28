<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 25 09:40:38 2006" -->
<!-- isoreceived="20060825134038" -->
<!-- sent="Fri, 25 Aug 2006 14:40:33 +0100" -->
<!-- isosent="20060825134033" -->
<!-- name="Miguel Figueiredo Mascarenhas Sousa Filipe" -->
<!-- email="miguel.filipe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.1 virtual memory overhead" -->
<!-- id="f058a9c30608250640h144b1ca8tdfe0c867bf3b7979_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200608251525.01171.stork_at_hlrs.de" -->
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
<strong>From:</strong> Miguel Figueiredo Mascarenhas Sousa Filipe (<em>miguel.filipe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-25 09:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1777.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Previous message:</strong> <a href="1775.php">George Bosilca: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>In reply to:</strong> <a href="1774.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1777.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Reply:</strong> <a href="1777.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On 8/25/06, Sven Stork &lt;stork_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Miguel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is caused by the shared memory mempool. Per default this shared
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt; mapping has a size of 512 MB. You can use the &quot;mpool_sm_size&quot; parameter to
</span><br>
<span class="quotelev1">&gt; reduce size e.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca mpool_sm_size &lt;SIZE&gt; ...
</span><br>
<p><p><p>using
<br>
mpirun -mca mpool_sm_size 0
<br>
is acceptable ?
<br>
to what will it fallback ? sockets? pipes? tcp? smoke signals?
<br>
<p>thankyou very much by the fast answer.
<br>
<p>Thanks,
<br>
<span class="quotelev1">&gt; Sven
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday 25 August 2006 15:04, Miguel Figueiredo Mascarenhas Sousa Filipe
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi there,
</span><br>
<span class="quotelev2">&gt; &gt; I'm using openmpi-1.1 on a linux-amd64 machine and also a linux-32bit
</span><br>
<span class="quotelev1">&gt; x86
</span><br>
<span class="quotelev2">&gt; &gt; chroot environment on that same machine.
</span><br>
<span class="quotelev2">&gt; &gt; (distro is gentoo, compilers: gcc-4.1.1 and gcc-3.4.6)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In both cases openmpi-1.1 shows a +/-400MB overhead in virtual memory
</span><br>
<span class="quotelev1">&gt; usage
</span><br>
<span class="quotelev2">&gt; &gt; (virtual address space usage) for each MPI process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my case this is quite troublesome because my application in 32bit
</span><br>
<span class="quotelev1">&gt; mode is
</span><br>
<span class="quotelev2">&gt; &gt; counting on using the whole 4GB address space for the problem set size
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt; associated data.
</span><br>
<span class="quotelev2">&gt; &gt; This means that I have a reduction in the size of the problems which it
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev2">&gt; &gt; solve.
</span><br>
<span class="quotelev2">&gt; &gt; (my aplication isn't 64bit safe yet, so I need to run in 32bit mode, and
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev2">&gt; &gt; effectively the 4GB address space)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to tweak this overhead, by configuring openmpi to use
</span><br>
<span class="quotelev1">&gt; smaller
</span><br>
<span class="quotelev2">&gt; &gt; buffers, or anything else ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I do not see this with mpich2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Miguel Sousa Filipe
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><p><pre>
-- 
Miguel Sousa Filipe
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1776/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1777.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Previous message:</strong> <a href="1775.php">George Bosilca: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>In reply to:</strong> <a href="1774.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1777.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Reply:</strong> <a href="1777.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
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

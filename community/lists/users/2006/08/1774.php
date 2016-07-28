<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 25 09:27:49 2006" -->
<!-- isoreceived="20060825132749" -->
<!-- sent="Fri, 25 Aug 2006 15:25:01 +0200" -->
<!-- isosent="20060825132501" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.1 virtual memory overhead" -->
<!-- id="200608251525.01171.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="f058a9c30608250604u3dc2cbbcs3edbffba889234ac_at_mail.gmail.com" -->
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
<strong>From:</strong> Sven Stork (<em>stork_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-25 09:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1775.php">George Bosilca: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Previous message:</strong> <a href="1773.php">George Bosilca: "Re: [OMPI users] problem with ompi_info"</a>
<li><strong>In reply to:</strong> <a href="1772.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1776.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Reply:</strong> <a href="1776.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Miguel,
<br>
<p>this is caused by the shared memory mempool. Per default this shared memory 
<br>
mapping has a size of 512 MB. You can use the &quot;mpool_sm_size&quot; parameter to 
<br>
reduce size e.g.
<br>
<p>mpirun -mca mpool_sm_size &lt;SIZE&gt; ...
<br>
<p>Thanks,
<br>
Sven
<br>
<p>On Friday 25 August 2006 15:04, Miguel Figueiredo Mascarenhas Sousa Filipe 
<br>
wrote:
<br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; I'm using openmpi-1.1 on a linux-amd64 machine and also a linux-32bit x86
</span><br>
<span class="quotelev1">&gt; chroot environment on that same machine.
</span><br>
<span class="quotelev1">&gt; (distro is gentoo, compilers: gcc-4.1.1 and gcc-3.4.6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In both cases openmpi-1.1 shows a +/-400MB overhead in virtual memory usage
</span><br>
<span class="quotelev1">&gt; (virtual address space usage) for each MPI process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my case this is quite troublesome because my application in 32bit mode is
</span><br>
<span class="quotelev1">&gt; counting on using the whole 4GB address space for the problem set size and
</span><br>
<span class="quotelev1">&gt; associated data.
</span><br>
<span class="quotelev1">&gt; This means that I have a reduction in the size of the problems which it can
</span><br>
<span class="quotelev1">&gt; solve.
</span><br>
<span class="quotelev1">&gt; (my aplication isn't 64bit safe yet, so I need to run in 32bit mode, and use
</span><br>
<span class="quotelev1">&gt; effectively the 4GB address space)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to tweak this overhead, by configuring openmpi to use smaller
</span><br>
<span class="quotelev1">&gt; buffers, or anything else ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not see this with mpich2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Miguel Sousa Filipe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1775.php">George Bosilca: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Previous message:</strong> <a href="1773.php">George Bosilca: "Re: [OMPI users] problem with ompi_info"</a>
<li><strong>In reply to:</strong> <a href="1772.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1776.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Reply:</strong> <a href="1776.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
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

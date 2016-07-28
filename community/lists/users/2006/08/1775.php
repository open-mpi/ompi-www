<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 25 09:29:10 2006" -->
<!-- isoreceived="20060825132910" -->
<!-- sent="Fri, 25 Aug 2006 09:29:12 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20060825132912" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.1 virtual memory overhead" -->
<!-- id="Pine.WNT.4.64.0608250925030.2040_at_bosilca" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-25 09:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1776.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Previous message:</strong> <a href="1774.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>In reply to:</strong> <a href="1772.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect this is the shared memory used to communicate between processes. 
<br>
Please run your application adding the flag &quot;--mca btl tcp,self&quot; to the 
<br>
mpirun command line (*before the application name). If the virtual memory 
<br>
usage goes down then the 400MB are definitively comming from the shared 
<br>
memory and there are ways to limit this amount 
<br>
(<a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a> provide a full range of 
<br>
options).
<br>
<p>Otherwise ... we will have to find out where they come from differently.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Fri, 25 Aug 2006, Miguel Figueiredo Mascarenhas Sousa Filipe wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
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
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1776.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Previous message:</strong> <a href="1774.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>In reply to:</strong> <a href="1772.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
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

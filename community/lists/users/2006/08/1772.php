<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 25 09:04:05 2006" -->
<!-- isoreceived="20060825130405" -->
<!-- sent="Fri, 25 Aug 2006 14:04:04 +0100" -->
<!-- isosent="20060825130404" -->
<!-- name="Miguel Figueiredo Mascarenhas Sousa Filipe" -->
<!-- email="miguel.filipe_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI-1.1 virtual memory overhead" -->
<!-- id="f058a9c30608250604u3dc2cbbcs3edbffba889234ac_at_mail.gmail.com" -->
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
<strong>From:</strong> Miguel Figueiredo Mascarenhas Sousa Filipe (<em>miguel.filipe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-25 09:04:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1773.php">George Bosilca: "Re: [OMPI users] problem with ompi_info"</a>
<li><strong>Previous message:</strong> <a href="1771.php">Caird, Andrew J: "Re: [OMPI users] Jumbo frames"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1774.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Reply:</strong> <a href="1774.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Reply:</strong> <a href="1775.php">George Bosilca: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
I'm using openmpi-1.1 on a linux-amd64 machine and also a linux-32bit x86
<br>
chroot environment on that same machine.
<br>
(distro is gentoo, compilers: gcc-4.1.1 and gcc-3.4.6)
<br>
<p>In both cases openmpi-1.1 shows a +/-400MB overhead in virtual memory usage
<br>
(virtual address space usage) for each MPI process.
<br>
<p>In my case this is quite troublesome because my application in 32bit mode is
<br>
counting on using the whole 4GB address space for the problem set size and
<br>
associated data.
<br>
This means that I have a reduction in the size of the problems which it can
<br>
solve.
<br>
(my aplication isn't 64bit safe yet, so I need to run in 32bit mode, and use
<br>
effectively the 4GB address space)
<br>
<p><p>Is there a way to tweak this overhead, by configuring openmpi to use smaller
<br>
buffers, or anything else ?
<br>
<p>I do not see this with mpich2.
<br>
<p>Best regards,
<br>
<p><pre>
-- 
Miguel Sousa Filipe
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1772/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1773.php">George Bosilca: "Re: [OMPI users] problem with ompi_info"</a>
<li><strong>Previous message:</strong> <a href="1771.php">Caird, Andrew J: "Re: [OMPI users] Jumbo frames"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1774.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Reply:</strong> <a href="1774.php">Sven Stork: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
<li><strong>Reply:</strong> <a href="1775.php">George Bosilca: "Re: [OMPI users] OpenMPI-1.1 virtual memory overhead"</a>
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

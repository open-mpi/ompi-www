<?
$subject_val = "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 10:17:16 2014" -->
<!-- isoreceived="20141013141716" -->
<!-- sent="Mon, 13 Oct 2014 15:17:15 +0100" -->
<!-- isosent="20141013141715" -->
<!-- name="Jamil Appa" -->
<!-- email="jamil.appa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread" -->
<!-- id="CAJ5DOeVu=KqD0Qk2MQrvYM-J8G_9Uu9G71Bc6AuhG02TA6GXeg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="796683b4-1ebc-4f81-8a5c-1954989b3e43_at_Jamils-MacBook-Pro.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread<br>
<strong>From:</strong> Jamil Appa (<em>jamil.appa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-13 10:17:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25490.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Previous message:</strong> <a href="25488.php">Mike Dubman: "Re: [OMPI users] Building on a host with a shoddy OpenFabrics installation"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24259.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>&nbsp;&nbsp;&nbsp;Just came across your post against this ticket.  Here are the request
<br>
files generated against 1.8.3 that exhibits the same problem.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I am compiling on RHEL 6.4 using gcc 4.4.7
<br>
<p>Thanks
<br>
<p>&nbsp;Jamil
<br>
<p><p>On 25 April 2014 21:27, Jamil Appa &lt;jamil.appa_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The following program deadlocks in mpi_finalize with OMPI 1.8.1 but
</span><br>
<span class="quotelev1">&gt; works correctly with OMPI 1.6.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Is there a work around?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Jamil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program mpiio
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt; integer(kind=4) :: iprov, fh, ierr
</span><br>
<span class="quotelev1">&gt; call mpi_init_thread(MPI_THREAD_SERIALIZED, iprov, ierr)
</span><br>
<span class="quotelev1">&gt; if (iprov &lt; MPI_THREAD_SERIALIZED) stop 'mpi_init_thread'
</span><br>
<span class="quotelev1">&gt; call mpi_file_open(MPI_COMM_WORLD, 'test.dat', &amp;
</span><br>
<span class="quotelev1">&gt; MPI_MODE_WRONLY + MPI_MODE_CREATE, MPI_INFO_NULL, fh, ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_file_close(fh, ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end program mpiio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0000003155a0e054 in __lll_lock_wait () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x0000003155a09388 in _L_lock_854 () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x0000003155a09257 in pthread_mutex_lock () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff7819f3c in ompi_attr_free_keyval () from
</span><br>
<span class="quotelev1">&gt; /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #4  0x00007ffff7857be1 in PMPI_Keyval_free () from
</span><br>
<span class="quotelev1">&gt; /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #5  0x00007ffff15b21f2 in ADIOI_End_call () from
</span><br>
<span class="quotelev1">&gt; /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1">&gt; #6  0x00007ffff781a325 in ompi_attr_delete_impl () from
</span><br>
<span class="quotelev1">&gt; /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #7  0x00007ffff781a4ec in ompi_attr_delete_all () from
</span><br>
<span class="quotelev1">&gt; /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #8  0x00007ffff7832ad5 in ompi_mpi_finalize () from
</span><br>
<span class="quotelev1">&gt; /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #9  0x00007ffff7b12e59 in pmpi_finalize__ () from
</span><br>
<span class="quotelev1">&gt; /gpfs/thirdparty/zenotech/home/jappa/apps6.4/lib/libmpi_mpifh.so.2
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000400b64 in mpiio () at t.f90:10
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000400b9a in main ()
</span><br>
<span class="quotelev1">&gt; #12 0x000000315561ecdd in __libc_start_main () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #13 0x0000000000400a19 in _start ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jamil Appa | Co-Founder and Director | Zenotech
+447747606788 | [image: View Jamil Appa's LinkedIn profile]
&lt;<a href="http://uk.linkedin.com/pub/jamil-appa/1/165/120">http://uk.linkedin.com/pub/jamil-appa/1/165/120</a>&gt;
jamil.appa_at_[hidden][image: Zenotech] &lt;<a href="http://www.zenotech.com">http://www.zenotech.com</a>&gt;Zenotech
Ltd | Bristol &amp; Bath Science Park | Emmersons Green | Bristol | BS16 7FR
------------------------------
Registered Address: 1 Larkfield Grove | Chepstow | Monmouthshire | NP16 5UF
| UK
Registered in England &amp; Wales No: 7926926 VAT No: 128198591


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25489/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25489/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25489/ompi_info.log.gz">ompi_info.log.gz</a>
</ul>
<!-- attachment="ompi_info.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25490.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Previous message:</strong> <a href="25488.php">Mike Dubman: "Re: [OMPI users] Building on a host with a shoddy OpenFabrics installation"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24259.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
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

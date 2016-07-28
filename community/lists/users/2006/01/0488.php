<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan  6 08:14:05 2006" -->
<!-- isoreceived="20060106131405" -->
<!-- sent="Fri, 6 Jan 2006 14:13:52 +0100 (MET)" -->
<!-- isosent="20060106131352" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.OSF.4.58.0601061341001.355566_at_gwdu70.gwdg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="301CF475-E60A-46F9-BBD1-E3EB5746D554_at_open-mpi.org" -->
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
<strong>From:</strong> Carsten Kutzner (<em>ckutzne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-06 08:13:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0489.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0487.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>In reply to:</strong> <a href="0472.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0489.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0489.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0490.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 4 Jan 2006, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 4, 2006, at 2:08 PM, Anthony Chan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Either my program quits without writing the logfile (and without
</span><br>
<span class="quotelev3">&gt; &gt;&gt; complaining) or it crashes in MPI_Finalize. I get the message
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;33 additional processes aborted (not shown)&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is not MPE error message.  If the logging crashes in
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize,
</span><br>
<span class="quotelev2">&gt; &gt; it usually means the merging of logging data from child nodes fails.
</span><br>
<span class="quotelev2">&gt; &gt; Since you didn't get any MPE error messages, so it means the cause of
</span><br>
<span class="quotelev2">&gt; &gt; the crash isn't expected by MPE.  Does anyone know if &quot;33 additional
</span><br>
<span class="quotelev2">&gt; &gt; processes aborted (not shown)&quot; is from OpenMPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it is.  It is from mpirun telling you that 33 processes -- in
</span><br>
<span class="quotelev1">&gt; addition to the error message that it must have shown above that --
</span><br>
<span class="quotelev1">&gt; aborted.  So I'm guessing that 34 total processes aborted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you getting corefiles for these processes?  (might need to check
</span><br>
<span class="quotelev1">&gt; the limit of your coredumpsize)
</span><br>
<p>Anthony, thanks for your suggestions. I tried the cpilog.c program with
<br>
logging and it also crashes when using more than 33 (!) processes. This
<br>
also happens when I let it run on a single node - so it is not due to
<br>
some network settings.
<br>
<p>Actually it seems to depend on the OpenMPI version I use. With version
<br>
1.0.1 it works, and I have a logfile for 128 CPUs now. With the nightly
<br>
tarball version 1.1a1r8626 (tuned collectives) it does not work (I get
<br>
no corefile)
<br>
<p>For 33 processes I get:
<br>
<pre>
---
ckutzne_at_wes:~/mpe2test&gt; mpirun -np 33 ./cpilog.x
Process 0 running on wes
Process 31 running on wes
...
Process 30 running on wes
Process 21 running on wes
pi is approximately 3.1415926535898770, Error is 0.0000000000000839
wall clock time = 0.449936
Writing logfile....
Enabling the synchronization of the clocks...
Finished writing logfile ./cpilog.x.clog2.
---
For 34 processes I get something like (slighly shortened):
---
ckutzne_at_wes:~/mpe2test&gt; mpirun -np 34 ./cpilog.x
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
Failing at addr:0x88
*** End of error message ***
[0] func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/libopal.so.0 [0x40103579]
[1] func:/lib/i686/libpthread.so.0 [0x40193a05]
[2] func:/lib/i686/libc.so.6 [0x40202aa0]
[3]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_reduce_intra_dec_fixed+0x6d)
[0x403f376d]
[4]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_nonoverlapping+0x2b)
[0x403f442b]
[5]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0x30)
[0x403f34c0]
[6]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/libmpi.so.0(PMPI_Allreduce+0x1bb)
[0x40069d9b]
[7] func:./cpilog.x(CLOG_Sync_init+0x125) [0x805e84b]
[8] func:./cpilog.x(CLOG_Local_init+0x82) [0x805c4b6]
[9] func:./cpilog.x(MPE_Init_log+0x37) [0x8059fd3]
[10] func:./cpilog.x(MPI_Init+0x20) [0x805206d]
[11] func:./cpilog.x(main+0x43) [0x804f325]
[12] func:/lib/i686/libc.so.6(__libc_start_main+0xc7) [0x401eed17]
[13] func:./cpilog.x(free+0x49) [0x804f221]
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
Failing at addr:0x88
*** End of error message ***
[0] func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/libopal.so.0 [0x40103579]
[1] func:/lib/i686/libpthread.so.0 [0x40193a05]
[2] func:/lib/i686/libc.so.6 [0x40202aa0]
[3]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_reduce_intra_dec_fixed+0x6d)
[0x403f376d]
[4]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_nonoverlapping+0x2b)
[0x403f442b]
[5]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0x30)
[0x403f34c0]
[6]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/libmpi.so.0(PMPI_Allreduce+0x1bb)
[0x40069d9b]
[7] func:./cpilog.x(CLOG_Sync_init+0x125) [0x805e84b]
[8] func:./cpilog.x(CLOG_Local_init+0x82) [0x805c4b6]
[9] func:./cpilog.x(MPE_Init_log+0x37) [0x8059fd3]
[10] func:./cpilog.x(MPI_Init+0x20) [0x805206d]
[11] func:./cpilog.x(main+0x43) [0x804f325]
[12] func:/lib/i686/libc.so.6(__libc_start_main+0xc7) [0x401eed17]
[13] func:./cpilog.x(free+0x49) [0x804f221]
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
Failing at addr:0x88
*** End of error message ***
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
Failing at addr:0x88
*** End of error message ***
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
Failing at addr:0x88
...
*** End of error message ***
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
Failing at addr:0x88
mpirun noticed that job rank 1 with PID 9014 on node &quot;localhost&quot; exited on
signal 11.
*** End of error message ***
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
Failing at addr:0x88
*** End of error message ***
...
2[0] func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/libopal.so.0
[0x40103579]
[1] func:/lib/i686/libpthread.so.0 [0x40193a05]
[2] func:/lib/i686/libc.so.6 [0x40202aa0]
[3]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_reduce_intra_dec_fixed+0x6d)
[0x403f376d]
[4]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_nonoverlapping+0x2b)
[0x403f442b]
[5]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0x30)
[0x403f34c0]
[6]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/libmpi.so.0(PMPI_Allreduce+0x1bb)
[0x40069d9b]
[7] func:./cpilog.x(CLOG_Sync_init+0x125) [0x805e84b]
[8] func:./cpilog.x(CLOG_Local_init+0x82) [0x805c4b6]
[9] func:./cpilog.x(MPE_Init_log+0x37) [0x8059fd3]
[10] func:./cpilog.x(MPI_Init+0x20) [0x805206d]
[11] func:./cpilog.x(main+0x43) [0x804f325]
[12] func:/lib/i686/libc.so.6(__libc_start_main+0xc7) [0x401eed17]
[13] func:./cpilog.x(free+0x49) [0x804f221]
[0] func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/libopal.so.0 [0x40103579]
[1] func:/lib/i686/libpthread.so.0 [0x40193a05]
[2] func:/lib/i686/libc.so.6 [0x40202aa0]
[3]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_reduce_intra_dec_fixed+0x6d)
[0x403f376d]
[4]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_nonoverlapping+0x2b)
[0x403f442b]
[5]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0x30)
[0x403f34c0]
[6]
func:/home/ckutzne/ompi1.1a1r8626-gcc331/lib/libmpi.so.0(PMPI_Allreduce+0x1bb)
[0x40069d9b]
[7] func:./cpilog.x(CLOG_Sync_init+0x125) [0x805e84b]
[8] func:./cpilog.x(CLOG_Local_init+0x82) [0x805c4b6]
[9] func:./cpilog.x(MPE_Init_log+0x37) [0x8059fd3]
[10] func:./cpilog.x(MPI_Init+0x20) [0x805206d]
[11] func:./cpilog.x(main+0x43) [0x804f325]
[12] func:/lib/i686/libc.so.6(__libc_start_main+0xc7) [0x401eed17]
[13] func:./cpilog.x(free+0x49) [0x804f221]
...
30 additional processes aborted (not shown)
3 processes killed (possibly by Open MPI)
Looks like the problem is somewhere in the tuned collectives?
Unfortunately I need a logfile with exactly those :(
   Carsten
---------------------------------------------------
Dr. Carsten Kutzner
Max Planck Institute for Biophysical Chemistry
Theoretical and Computational Biophysics Department
Am Fassberg 11
37077 Goettingen, Germany
Tel. +49-551-2012313, Fax: +49-551-2012302
eMail ckutzne_at_[hidden]
<a href="http://www.gwdg.de/~ckutzne">http://www.gwdg.de/~ckutzne</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0489.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0487.php">Jyh-Shyong Ho: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>In reply to:</strong> <a href="0472.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0489.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0489.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0490.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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

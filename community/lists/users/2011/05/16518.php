<?
$subject_val = "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 18:01:13 2011" -->
<!-- isoreceived="20110511220113" -->
<!-- sent="Wed, 11 May 2011 16:00:43 -0600" -->
<!-- isosent="20110511220043" -->
<!-- name="Marcus R. Epperson" -->
<!-- email="mrepper_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)" -->
<!-- id="4DCB070B.3080209_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="195C2767-FEAE-45E8-B98E-60A9099109FD_at_enea.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)<br>
<strong>From:</strong> Marcus R. Epperson (<em>mrepper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-11 18:00:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16519.php">Tyler W. Wilson: "Re: [OMPI users] Issue with Open MPI 1.5.3 Windows binary builds"</a>
<li><strong>Previous message:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16498.php">Salvatore Podda: "[OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16582.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Reply:</strong> <a href="16582.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've seen the same thing when I build openmpi 1.4.3 with Intel 12, but only when I have -O2 or -O3 in CFLAGS. If I drop it down to -O1 then the collectives hangs go away. I don't know what, if anything, the higher optimization buys you when compiling openmpi, so I'm not sure if that's an acceptable workaround or not.
<br>
<p>My system is similar to yours - Intel X5570 with QDR Mellanox IB running RHEL 5, Slurm, and these openmpi btls: openib,sm,self. I'm using IMB 3.2.2 with a single iteration of Barrier to reproduce the hang, and it happens 100% of the time for me when I invoke it like this:
<br>
<p># salloc -N 9 orterun -n 65 ./IMB-MPI1 -npmin 64 -iter 1 barrier
<br>
<p>The hang happens on the first Barrier (64 ranks) and each of the participating ranks have this backtrace:
<br>
<p>__poll (...)
<br>
poll_dispatch () from [instdir]/lib/libopen-pal.so.0
<br>
opal_event_loop () from [instdir]/lib/libopen-pal.so.0
<br>
opal_progress () from [instdir]/lib/libopen-pal.so.0
<br>
ompi_request_default_wait_all () from [instdir]/lib/libmpi.so.0
<br>
ompi_coll_tuned_sendrecv_actual () from [instdir]/lib/libmpi.so.0
<br>
ompi_coll_tuned_barrier_intra_recursivedoubling () from [instdir]/lib/libmpi.so.0
<br>
ompi_coll_tuned_barrier_intra_dec_fixed () from [instdir]/lib/libmpi.so.0
<br>
PMPI_Barrier () from [instdir]/lib/libmpi.so.0
<br>
IMB_barrier ()
<br>
IMB_init_buffers_iter ()
<br>
main ()
<br>
<p>The one non-participating rank has this backtrace:
<br>
<p>__poll (...)
<br>
poll_dispatch () from [instdir]/lib/libopen-pal.so.0
<br>
opal_event_loop () from [instdir]/lib/libopen-pal.so.0
<br>
opal_progress () from [instdir]/lib/libopen-pal.so.0
<br>
ompi_request_default_wait_all () from [instdir]/lib/libmpi.so.0
<br>
ompi_coll_tuned_sendrecv_actual () from [instdir]/lib/libmpi.so.0
<br>
ompi_coll_tuned_barrier_intra_bruck () from [instdir]/lib/libmpi.so.0
<br>
ompi_coll_tuned_barrier_intra_dec_fixed () from [instdir]/lib/libmpi.so.0
<br>
PMPI_Barrier () from [instdir]/lib/libmpi.so.0
<br>
main ()
<br>
<p>If I use more nodes I can get it to hang with 1ppn, so that seems to rule out the sm btl (or interactions with it) as a culprit at least.
<br>
<p>I can't reproduce this with openmpi 1.5.3, interestingly.
<br>
<p>-Marcus
<br>
<p><p>On 05/10/2011 03:37 AM, Salvatore Podda wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we succeed in building several version of openmpi from 1.2.8 to 1.4.3 
</span><br>
<span class="quotelev1">&gt; with Intel composer XE 2011 (aka 12.0).
</span><br>
<span class="quotelev1">&gt; However we found a threshold in the number of cores (depending from the 
</span><br>
<span class="quotelev1">&gt; application: IMB, xhpl or user applications
</span><br>
<span class="quotelev1">&gt; and form the number of required cores) above which the application hangs 
</span><br>
<span class="quotelev1">&gt; (sort of deadlocks).
</span><br>
<span class="quotelev1">&gt; The building of openmpi with 'gcc' and 'pgi' does not show the same limits.
</span><br>
<span class="quotelev1">&gt; There are any known incompatibilities of openmpi with this version of 
</span><br>
<span class="quotelev1">&gt; intel compiilers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The characteristics of our computational infrastructure are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel processors E7330, E5345, E5530 e E5620
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CentOS 5.3, CentOS 5.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel composer XE 2011
</span><br>
<span class="quotelev1">&gt; gcc 4.1.2
</span><br>
<span class="quotelev1">&gt; pgi 10.2-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Salvatore Podda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ENEA UTICT-HPC
</span><br>
<span class="quotelev1">&gt; Department for Computer Science Development and ICT
</span><br>
<span class="quotelev1">&gt; Facilities Laboratory for Science and High Performace Computing
</span><br>
<span class="quotelev1">&gt; C.R. Frascati
</span><br>
<span class="quotelev1">&gt; Via E. Fermi, 45
</span><br>
<span class="quotelev1">&gt; PoBox 65
</span><br>
<span class="quotelev1">&gt; 00044 Frascati (Rome)
</span><br>
<span class="quotelev1">&gt; Italy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: +39 06 9400 5342
</span><br>
<span class="quotelev1">&gt; Fax: +39 06 9400 5551
</span><br>
<span class="quotelev1">&gt; Fax: +39 06 9400 5735
</span><br>
<span class="quotelev1">&gt; E-mail: salvatore.podda_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Home Page: www.cresco.enea.it
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16519.php">Tyler W. Wilson: "Re: [OMPI users] Issue with Open MPI 1.5.3 Windows binary builds"</a>
<li><strong>Previous message:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16498.php">Salvatore Podda: "[OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16582.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Reply:</strong> <a href="16582.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
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

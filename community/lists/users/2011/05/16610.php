<?
$subject_val = "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 08:35:02 2011" -->
<!-- isoreceived="20110524123502" -->
<!-- sent="Tue, 24 May 2011 14:34:52 +0200" -->
<!-- isosent="20110524123452" -->
<!-- name="Salvatore Podda" -->
<!-- email="salvatore.podda_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)" -->
<!-- id="CBB46100-8CDF-4826-A95E-CF8E62B3002E_at_enea.it" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45362608-B8B0-4ADE-9959-B35C5690A6F3_at_cisco.com" -->
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
<strong>From:</strong> Salvatore Podda (<em>salvatore.podda_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-24 08:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16611.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16609.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)"</a>
<li><strong>In reply to:</strong> <a href="16582.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16616.php">Marcus R. Epperson: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK! I catch the meaning of the &quot;--mca btl_openib_cpc_include rdmacm&quot;  
<br>
parameter.
<br>
Howerver, as I just said, we are doing, in the meanwhile, several IMB  
<br>
tests on openmpi
<br>
1.2.8 and on this (our) version either the RDMA CM support is not  
<br>
implemented or has
<br>
not been included in the compilation phase
<br>
<p>Salvatore Podda
<br>
<p><p>On 20/mag/11, at 03:37, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the late reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other users have seen something similar but we have never been able  
</span><br>
<span class="quotelev1">&gt; to reproduce it.  Is this only when using IB?  If you use &quot;mpirun -- 
</span><br>
<span class="quotelev1">&gt; mca btl_openib_cpc_if_include rdmacm&quot;, does the problem go away?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 11, 2011, at 6:00 PM, Marcus R. Epperson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've seen the same thing when I build openmpi 1.4.3 with Intel 12,  
</span><br>
<span class="quotelev2">&gt;&gt; but only when I have -O2 or -O3 in CFLAGS. If I drop it down to -O1  
</span><br>
<span class="quotelev2">&gt;&gt; then the collectives hangs go away. I don't know what, if anything,  
</span><br>
<span class="quotelev2">&gt;&gt; the higher optimization buys you when compiling openmpi, so I'm not  
</span><br>
<span class="quotelev2">&gt;&gt; sure if that's an acceptable workaround or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My system is similar to yours - Intel X5570 with QDR Mellanox IB  
</span><br>
<span class="quotelev2">&gt;&gt; running RHEL 5, Slurm, and these openmpi btls: openib,sm,self. I'm  
</span><br>
<span class="quotelev2">&gt;&gt; using IMB 3.2.2 with a single iteration of Barrier to reproduce the  
</span><br>
<span class="quotelev2">&gt;&gt; hang, and it happens 100% of the time for me when I invoke it like  
</span><br>
<span class="quotelev2">&gt;&gt; this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # salloc -N 9 orterun -n 65 ./IMB-MPI1 -npmin 64 -iter 1 barrier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The hang happens on the first Barrier (64 ranks) and each of the  
</span><br>
<span class="quotelev2">&gt;&gt; participating ranks have this backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; __poll (...)
</span><br>
<span class="quotelev2">&gt;&gt; poll_dispatch () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; opal_event_loop () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_default_wait_all () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_sendrecv_actual () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_barrier_intra_recursivedoubling () from [instdir]/ 
</span><br>
<span class="quotelev2">&gt;&gt; lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_barrier_intra_dec_fixed () from [instdir]/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; PMPI_Barrier () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; IMB_barrier ()
</span><br>
<span class="quotelev2">&gt;&gt; IMB_init_buffers_iter ()
</span><br>
<span class="quotelev2">&gt;&gt; main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The one non-participating rank has this backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; __poll (...)
</span><br>
<span class="quotelev2">&gt;&gt; poll_dispatch () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; opal_event_loop () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_default_wait_all () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_sendrecv_actual () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_barrier_intra_bruck () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_barrier_intra_dec_fixed () from [instdir]/lib/ 
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; PMPI_Barrier () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I use more nodes I can get it to hang with 1ppn, so that seems  
</span><br>
<span class="quotelev2">&gt;&gt; to rule out the sm btl (or interactions with it) as a culprit at  
</span><br>
<span class="quotelev2">&gt;&gt; least.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't reproduce this with openmpi 1.5.3, interestingly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Marcus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 05/10/2011 03:37 AM, Salvatore Podda wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we succeed in building several version of openmpi from 1.2.8 to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Intel composer XE 2011 (aka 12.0).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However we found a threshold in the number of cores (depending  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application: IMB, xhpl or user applications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and form the number of required cores) above which the application  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hangs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (sort of deadlocks).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The building of openmpi with 'gcc' and 'pgi' does not show the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same limits.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are any known incompatibilities of openmpi with this version  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel compiilers?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The characteristics of our computational infrastructure are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel processors E7330, E5345, E5530 e E5620
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CentOS 5.3, CentOS 5.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel composer XE 2011
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc 4.1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pgi 10.2-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Salvatore Podda
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ENEA UTICT-HPC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department for Computer Science Development and ICT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Facilities Laboratory for Science and High Performace Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C.R. Frascati
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via E. Fermi, 45
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PoBox 65
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00044 Frascati (Rome)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +39 06 9400 5342
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +39 06 9400 5551
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +39 06 9400 5735
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E-mail: salvatore.podda_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Home Page: www.cresco.enea.it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>==================================================
<br>
Investi nel futuro. Investi nelle nostre ricerche.
<br>
Destina il 5 x 1000 all'ENEA
<br>
Cerchiamo:
<br>
- nuove fonti e nuovi modi per produrre energia pulita e sicura.
<br>
- modi migliori per utilizzare e risparmiare energia.
<br>
- metodologie e tecnologie per innovare e rendere piu' competitivo il sistema produttivo nazionale.
<br>
- metodologie e tecnologie per la salvaguardia e il recupero dell'ambiente e per la tutela della nostra salute e del patrimonio artistico del Paese.
<br>
Il nostro codice fiscale e': 01320740580
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16611.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16609.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)"</a>
<li><strong>In reply to:</strong> <a href="16582.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16616.php">Marcus R. Epperson: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
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

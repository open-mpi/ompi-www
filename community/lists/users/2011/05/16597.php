<?
$subject_val = "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 14:30:23 2011" -->
<!-- isoreceived="20110520183023" -->
<!-- sent="Fri, 20 May 2011 14:30:13 -0400" -->
<!-- isosent="20110520183013" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)" -->
<!-- id="4DD6B335.2090403_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D91379F0-E7FF-4A7E-8D8E-C75CB6E6F475_at_enea.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 14:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16598.php">Jason Mackay: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>Previous message:</strong> <a href="16596.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>In reply to:</strong> <a href="16594.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16610.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Salvatore
<br>
<p>Just in case ...
<br>
You say you have problems when you use &quot;--mca btl openib,self&quot;.
<br>
Is this a typo in your email?
<br>
I guess this will disable the shared memory btl intra-node,
<br>
whereas your other choice &quot;--mca btl_tcp_if_include ib0&quot; will not.
<br>
Could this be the problem?
<br>
<p>Here we use &quot;--mca btl openib,self,sm&quot;,
<br>
to enable the shared memory btl intra-node as well,
<br>
and it works just fine on programs that do use collective calls.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p>Salvatore Podda wrote:
<br>
<span class="quotelev1">&gt; We are still struggling we these problems. Actually the new version of 
</span><br>
<span class="quotelev1">&gt; intel compilers does
</span><br>
<span class="quotelev1">&gt; not seem to be the real issue. We clash against the same errors using 
</span><br>
<span class="quotelev1">&gt; also the `gcc' compilers.
</span><br>
<span class="quotelev1">&gt; We succeed in building an openmi-1.2.8 (with different compiler 
</span><br>
<span class="quotelev1">&gt; flavours) rpm from the installation
</span><br>
<span class="quotelev1">&gt; of the cluster section where all seems to work well. We are now doing a 
</span><br>
<span class="quotelev1">&gt; severe IMB benchmark campaign.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, yes this happen only whe we use the --mca btl openib,self, on 
</span><br>
<span class="quotelev1">&gt; the contrary if we use
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include ib0 all works well.
</span><br>
<span class="quotelev1">&gt; Yes we can try the flag you suggest. I can check on the FAQ and on the 
</span><br>
<span class="quotelev1">&gt; opem-mpi.org documentation,
</span><br>
<span class="quotelev1">&gt;  but can you be so kindly to explain the meaning of this flag?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Salvatore Podda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 20/mag/11, at 03:37, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the late reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other users have seen something similar but we have never been able to 
</span><br>
<span class="quotelev2">&gt;&gt; reproduce it.  Is this only when using IB?  If you use &quot;mpirun --mca 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_cpc_if_include rdmacm&quot;, does the problem go away?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 11, 2011, at 6:00 PM, Marcus R. Epperson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've seen the same thing when I build openmpi 1.4.3 with Intel 12, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but only when I have -O2 or -O3 in CFLAGS. If I drop it down to -O1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then the collectives hangs go away. I don't know what, if anything, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the higher optimization buys you when compiling openmpi, so I'm not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure if that's an acceptable workaround or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My system is similar to yours - Intel X5570 with QDR Mellanox IB 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running RHEL 5, Slurm, and these openmpi btls: openib,sm,self. I'm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using IMB 3.2.2 with a single iteration of Barrier to reproduce the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hang, and it happens 100% of the time for me when I invoke it like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # salloc -N 9 orterun -n 65 ./IMB-MPI1 -npmin 64 -iter 1 barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The hang happens on the first Barrier (64 ranks) and each of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; participating ranks have this backtrace:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __poll (...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; poll_dispatch () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_event_loop () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_progress () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_request_default_wait_all () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_coll_tuned_sendrecv_actual () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_coll_tuned_barrier_intra_recursivedoubling () from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_coll_tuned_barrier_intra_dec_fixed () from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PMPI_Barrier () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB_barrier ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB_init_buffers_iter ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The one non-participating rank has this backtrace:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __poll (...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; poll_dispatch () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_event_loop () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_progress () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_request_default_wait_all () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_coll_tuned_sendrecv_actual () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_coll_tuned_barrier_intra_bruck () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_coll_tuned_barrier_intra_dec_fixed () from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PMPI_Barrier () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I use more nodes I can get it to hang with 1ppn, so that seems to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rule out the sm btl (or interactions with it) as a culprit at least.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't reproduce this with openmpi 1.5.3, interestingly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Marcus
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 05/10/2011 03:37 AM, Salvatore Podda wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we succeed in building several version of openmpi from 1.2.8 to 1.4.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with Intel composer XE 2011 (aka 12.0).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However we found a threshold in the number of cores (depending from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application: IMB, xhpl or user applications
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and form the number of required cores) above which the application 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hangs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (sort of deadlocks).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The building of openmpi with 'gcc' and 'pgi' does not show the same 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; limits.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are any known incompatibilities of openmpi with this version of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intel compiilers?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The characteristics of our computational infrastructure are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Intel processors E7330, E5345, E5530 e E5620
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CentOS 5.3, CentOS 5.5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Intel composer XE 2011
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gcc 4.1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgi 10.2-1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Salvatore Podda
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ENEA UTICT-HPC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department for Computer Science Development and ICT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Facilities Laboratory for Science and High Performace Computing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C.R. Frascati
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Via E. Fermi, 45
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PoBox 65
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 00044 Frascati (Rome)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Italy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: +39 06 9400 5342
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fax: +39 06 9400 5551
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fax: +39 06 9400 5735
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; E-mail: salvatore.podda_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Home Page: www.cresco.enea.it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16598.php">Jason Mackay: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>Previous message:</strong> <a href="16596.php">Jeff Squyres: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>In reply to:</strong> <a href="16594.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16610.php">Salvatore Podda: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
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

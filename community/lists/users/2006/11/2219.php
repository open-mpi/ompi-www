<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 23 06:14:45 2006" -->
<!-- isoreceived="20061123111445" -->
<!-- sent="Thu, 23 Nov 2006 11:14:18 +0000 (GMT)" -->
<!-- isosent="20061123111418" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - mx - solaris and Gadget2" -->
<!-- id="Pine.GSO.4.53.0611231112240.20476_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0611231037000.20476_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-23 06:14:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2220.php">Mostyn Lewis: "Re: [OMPI users] openmpi, mx"</a>
<li><strong>Previous message:</strong> <a href="2218.php">Lydia Heck: "[OMPI users] openmpi - mx - solaris and Gadget2"</a>
<li><strong>In reply to:</strong> <a href="2218.php">Lydia Heck: "[OMPI users] openmpi - mx - solaris and Gadget2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The same run on 32 CPUs almost completes, starting to write 32 re-start
<br>
files and fails with the same problem:
<br>
<p>Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:33
<br>
/opt/ompi/lib/libopal.so.0.0.0:opal_backtrace_print+0x10
<br>
/opt/ompi/lib/libopal.so.0.0.0:0x99df5
<br>
/lib/amd64/libc.so.1:0xcb276
<br>
/lib/amd64/libc.so.1:0xc0642
<br>
/opt/mx/lib/amd64/libmyriexpress.so:0x102c7 [ Signal 11 (SEGV)]
<br>
/opt/mx/lib/amd64/libmyriexpress.so:mx__luigi+0x3d
<br>
/opt/mx/lib/amd64/libmyriexpress.so:mx__test_common+0x22
<br>
/opt/mx/lib/amd64/libmyriexpress.so:mx_test+0x37
<br>
/opt/ompi/lib/openmpi/mca_mtl_mx.so:ompi_mtl_mx_send+0x288
<br>
/opt/ompi/lib/openmpi/mca_pml_cm.so:mca_pml_cm_send+0x3fc
<br>
/opt/ompi/lib/openmpi/mca_coll_tuned.so:ompi_coll_tuned_sendrecv_actual_localcompleted+0x85
<br>
/opt/ompi/lib/openmpi/mca_coll_tuned.so:ompi_coll_tuned_barrier_intra_recursivedoubling+0x1a3
<br>
/opt/ompi/lib/openmpi/mca_coll_tuned.so:ompi_coll_tuned_barrier_intra_dec_fixed+0x44
<br>
/opt/ompi/lib/libmpi.so.0.0.0:MPI_Barrier+0x9d
<br>
/data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:restart+0x9a0
<br>
/data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:run+0x219
<br>
/data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:main+0x191
<br>
/data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:0x69fc
<br>
*** End of error message ***
<br>
mv: cannot access ./restart.20
<br>
31 additional processes aborted (not shown)
<br>
m2001(27) &gt;
<br>
<p><p><p>On Thu, 23 Nov 2006, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gadget2 - I cannot attach it because it is not publicly available,
</span><br>
<span class="quotelev1">&gt; runs perfectly fine on any number of processes on systems such
</span><br>
<span class="quotelev1">&gt; as Solaris 10 - Sun CT6 gigabit, SUN CT5 and myrinet gm, IBM regatta ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to be so expansive ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the code on 32 CPUs on openmpi, mx using the studio11 compilers
</span><br>
<span class="quotelev1">&gt; on a solaris x64 system the code works fine, until about the end, when
</span><br>
<span class="quotelev1">&gt; it fails to write all the restart files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the code on 64 CPUs it fails with an error message which is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Topnodes=218193 costlimit=0.0890015 countlimit=428.229
</span><br>
<span class="quotelev1">&gt; Before=44417
</span><br>
<span class="quotelev1">&gt; After=46281
</span><br>
<span class="quotelev1">&gt; NTopleaves= 40496  NTopnodes=46281 (space for 347252)
</span><br>
<span class="quotelev1">&gt; desired memory imbalance=2.83425  (limit=100719, needed=114185)
</span><br>
<span class="quotelev1">&gt; Note: the domain decomposition is suboptimum because the ceiling for
</span><br>
<span class="quotelev1">&gt; memory-imbalance is reached
</span><br>
<span class="quotelev1">&gt; work-load balance=1.28529   memory-balance=1.01948
</span><br>
<span class="quotelev1">&gt; exchange of 0002589387 particles
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:5192cbd0
</span><br>
<span class="quotelev1">&gt; /opt/ompi/lib/libopal.so.0.0.0:opal_backtrace_print+0x10
</span><br>
<span class="quotelev1">&gt; /opt/ompi/lib/libopal.so.0.0.0:0x99df5
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xcb276
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xc0642
</span><br>
<span class="quotelev1">&gt; /opt/mx/lib/amd64/libmyriexpress.so:mx__luigi+0xd5 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt; /opt/mx/lib/amd64/libmyriexpress.so:mx_irecv+0x174
</span><br>
<span class="quotelev1">&gt; /opt/ompi/lib/openmpi/mca_mtl_mx.so:ompi_mtl_mx_irecv+0x116
</span><br>
<span class="quotelev1">&gt; /opt/ompi/lib/openmpi/mca_pml_cm.so:mca_pml_cm_irecv+0x27b
</span><br>
<span class="quotelev1">&gt; /opt/ompi/lib/libmpi.so.0.0.0:PMPI_Irecv+0x1ae
</span><br>
<span class="quotelev1">&gt; /data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:domain_exchange+0x11b7
</span><br>
<span class="quotelev1">&gt; /data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:domain_decompose+0x4da
</span><br>
<span class="quotelev1">&gt; /data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:domain_Decomposition+0x467
</span><br>
<span class="quotelev1">&gt; /data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:run+0x9f
</span><br>
<span class="quotelev1">&gt; /data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:main+0x191
</span><br>
<span class="quotelev1">&gt; /data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:0x69fc
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 63 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; m2001(26) &gt; /opt/ompi/bin/mpirun -np 32 -machinefile ./myh-all -mca pml cm
</span><br>
<span class="quotelev1">&gt; ./Gadget2 param.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As this is one of our predominant production codes, I need to make sure
</span><br>
<span class="quotelev1">&gt; that it is running on any system which I install. Any idea would be welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2220.php">Mostyn Lewis: "Re: [OMPI users] openmpi, mx"</a>
<li><strong>Previous message:</strong> <a href="2218.php">Lydia Heck: "[OMPI users] openmpi - mx - solaris and Gadget2"</a>
<li><strong>In reply to:</strong> <a href="2218.php">Lydia Heck: "[OMPI users] openmpi - mx - solaris and Gadget2"</a>
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

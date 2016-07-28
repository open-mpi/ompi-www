<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 23 05:43:10 2006" -->
<!-- isoreceived="20061123104310" -->
<!-- sent="Thu, 23 Nov 2006 10:42:49 +0000 (GMT)" -->
<!-- isosent="20061123104249" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi - mx - solaris and Gadget2" -->
<!-- id="Pine.GSO.4.53.0611231037000.20476_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2006-11-23 05:42:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2219.php">Lydia Heck: "Re: [OMPI users] openmpi - mx - solaris and Gadget2"</a>
<li><strong>Previous message:</strong> <a href="2217.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] 1.2b1 make failed on Mac 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2219.php">Lydia Heck: "Re: [OMPI users] openmpi - mx - solaris and Gadget2"</a>
<li><strong>Reply:</strong> <a href="2219.php">Lydia Heck: "Re: [OMPI users] openmpi - mx - solaris and Gadget2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gadget2 - I cannot attach it because it is not publicly available,
<br>
runs perfectly fine on any number of processes on systems such
<br>
as Solaris 10 - Sun CT6 gigabit, SUN CT5 and myrinet gm, IBM regatta ..
<br>
<p>Sorry to be so expansive ...
<br>
<p>When I run the code on 32 CPUs on openmpi, mx using the studio11 compilers
<br>
on a solaris x64 system the code works fine, until about the end, when
<br>
it fails to write all the restart files.
<br>
<p>When I run the code on 64 CPUs it fails with an error message which is
<br>
<p>Topnodes=218193 costlimit=0.0890015 countlimit=428.229
<br>
Before=44417
<br>
After=46281
<br>
NTopleaves= 40496  NTopnodes=46281 (space for 347252)
<br>
desired memory imbalance=2.83425  (limit=100719, needed=114185)
<br>
Note: the domain decomposition is suboptimum because the ceiling for
<br>
memory-imbalance is reached
<br>
work-load balance=1.28529   memory-balance=1.01948
<br>
exchange of 0002589387 particles
<br>
Signal:11 info.si_errno:0(Error 0) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:5192cbd0
<br>
/opt/ompi/lib/libopal.so.0.0.0:opal_backtrace_print+0x10
<br>
/opt/ompi/lib/libopal.so.0.0.0:0x99df5
<br>
/lib/amd64/libc.so.1:0xcb276
<br>
/lib/amd64/libc.so.1:0xc0642
<br>
/opt/mx/lib/amd64/libmyriexpress.so:mx__luigi+0xd5 [ Signal 11 (SEGV)]
<br>
/opt/mx/lib/amd64/libmyriexpress.so:mx_irecv+0x174
<br>
/opt/ompi/lib/openmpi/mca_mtl_mx.so:ompi_mtl_mx_irecv+0x116
<br>
/opt/ompi/lib/openmpi/mca_pml_cm.so:mca_pml_cm_irecv+0x27b
<br>
/opt/ompi/lib/libmpi.so.0.0.0:PMPI_Irecv+0x1ae
<br>
/data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:domain_exchange+0x11b7
<br>
/data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:domain_decompose+0x4da
<br>
/data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:domain_Decomposition+0x467
<br>
/data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:run+0x9f
<br>
/data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:main+0x191
<br>
/data/rw9/arj/unpack/bench_test_myri2/Gadget2-multidomain/Gadget2:0x69fc
<br>
*** End of error message ***
<br>
63 additional processes aborted (not shown)
<br>
m2001(26) &gt; /opt/ompi/bin/mpirun -np 32 -machinefile ./myh-all -mca pml cm
<br>
./Gadget2 param.txt
<br>
<p>As this is one of our predominant production codes, I need to make sure
<br>
that it is running on any system which I install. Any idea would be welcome.
<br>
<p>Lydia
<br>
<p><p><p>------------------------------------------
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
<li><strong>Next message:</strong> <a href="2219.php">Lydia Heck: "Re: [OMPI users] openmpi - mx - solaris and Gadget2"</a>
<li><strong>Previous message:</strong> <a href="2217.php">Iannetti, Anthony C. \(GRC-RTB0\): "Re: [OMPI users] 1.2b1 make failed on Mac 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2219.php">Lydia Heck: "Re: [OMPI users] openmpi - mx - solaris and Gadget2"</a>
<li><strong>Reply:</strong> <a href="2219.php">Lydia Heck: "Re: [OMPI users] openmpi - mx - solaris and Gadget2"</a>
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

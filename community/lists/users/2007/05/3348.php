<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 31 10:34:55 2007" -->
<!-- isoreceived="20070531143455" -->
<!-- sent="Thu, 31 May 2007 16:39:41 +0200" -->
<!-- isosent="20070531143941" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault in MPI_Barrier" -->
<!-- id="465EDE2D.3000601_at_lnl.infn.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.62.0705301518570.18269_at_reliant.cs.utk.edu" -->
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
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-31 10:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3349.php">Kees Verstoep: "[OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3347.php">Aaron Thompson: "[OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
<li><strong>In reply to:</strong> <a href="3345.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I completely forgot to mention:
<br>
OpenMPI 1.2.2, on intels x86
<br>
<p>segmentation fault is still there, but I'm waiting for my admin to fix 
<br>
the routing to check if that was the problem, however on my stand-alone 
<br>
linux machine with correct routing that does not appear - but that's not 
<br>
a prove.
<br>
<p>segmentation fault in MPI_Barrier is only when I want to run my program 
<br>
on the head node, eg.
<br>
mpirun -np 4 ./myproggy
<br>
<p>if I use also worker nodes:
<br>
mpirun -hostfile ./../hosts -np 50 ./myproggy
<br>
<p>I got an error in the MPI_Init:
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort (...)
<br>
&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
<p>so with hostfile and worker nodes it is correct - it gives an error on 
<br>
the beginning...
<br>
but, I wouldn't be so entusiastic as I have lot of strange &amp; complicated 
<br>
code there before MPI_Barrier, which I updated recently - could be my 
<br>
mistake that I messed some memory used by openmpi (valgrind does not 
<br>
complain). who knows... I'll wait for my admin to fix the routing and 
<br>
I'll post more information as soon as possible. Possibly as recently I 
<br>
upgraded openmpi from 1.x.x version, maybe there are some libraries 
<br>
messed up, or other things are wrong.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;greets, Marcin
<br>
<p><p><p><p>Jelena Pjesivac-Grbovic wrote:
<br>
<span class="quotelev1">&gt; Hi Marcin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what version of Open MPI did you use?
</span><br>
<span class="quotelev1">&gt; Is it still occurring?
</span><br>
<span class="quotelev1">&gt; It is also possible that the connection went down during the execution... 
</span><br>
<span class="quotelev1">&gt; although, a segfault really should not occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jelena
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 29 May 2007, Marcin Skoczylas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; recently my administrator made some changes on our cluster and now I
</span><br>
<span class="quotelev2">&gt;&gt; have a crash during MPI_Barrier:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] Failing at address: 0x4
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] [ 0] /lib/tls/libpthread.so.0 [0xa22f80]
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0x68f)
</span><br>
<span class="quotelev2">&gt;&gt; [0xcd86d7]
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x32) [0xcb7e3a]
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] [ 3] /usr/lib/libopen-pal.so.0(opal_progress+0xed)
</span><br>
<span class="quotelev2">&gt;&gt; [0xc2b221]
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] [ 4] /usr/lib/libmpi.so.0 [0x3aecc5]
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] [ 5] /usr/lib/libmpi.so.0(ompi_request_wait_all+0xec)
</span><br>
<span class="quotelev2">&gt;&gt; [0x3ae784]
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual+0x77)
</span><br>
<span class="quotelev2">&gt;&gt; [0xd025bb]
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_recursivedoubling+0xde)
</span><br>
<span class="quotelev2">&gt;&gt; [0xd05e3a]
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_dec_fixed+0x44)
</span><br>
<span class="quotelev2">&gt;&gt; [0xd027d8]
</span><br>
<span class="quotelev2">&gt;&gt; [our-host:12566] [ 9] /usr/lib/libmpi.so.0(PMPI_Barrier+0x176) [0x3c0cea]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I made small investigation and I realised that:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [user_at_our-host]$ ssh our-host
</span><br>
<span class="quotelev2">&gt;&gt; ssh(12704) ssh: connect to host our-host port 22: No route to host
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that could be the thing, I'm going to talk with my admin soon about this
</span><br>
<span class="quotelev2">&gt;&gt; routing change, however if it is really this problem, shouldn't it be
</span><br>
<span class="quotelev2">&gt;&gt; recognised during startup, f.e. in MPI_Init? Actually, I'm not sure...
</span><br>
<span class="quotelev2">&gt;&gt; your comments?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             greetings, Marcin
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jelena Pjesivac-Grbovic, Pjesa
</span><br>
<span class="quotelev1">&gt; Graduate Research Assistant
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; Computer Science Department, UTK
</span><br>
<span class="quotelev1">&gt; Claxton Complex 350
</span><br>
<span class="quotelev1">&gt; (865) 974 - 6722 
</span><br>
<span class="quotelev1">&gt; (865) 974 - 6321
</span><br>
<span class="quotelev1">&gt; jpjesiva_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Murphy's Law of Research:
</span><br>
<span class="quotelev1">&gt;          Enough research will tend to support your theory.
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3349.php">Kees Verstoep: "[OMPI users] mixing MX and TCP"</a>
<li><strong>Previous message:</strong> <a href="3347.php">Aaron Thompson: "[OMPI users] OpenMPI + GFortran compile issues on Mac OS X 10.4"</a>
<li><strong>In reply to:</strong> <a href="3345.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
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

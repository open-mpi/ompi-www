<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  6 10:59:26 2007" -->
<!-- isoreceived="20070706145926" -->
<!-- sent="Fri, 6 Jul 2007 10:59:18 -0400" -->
<!-- isosent="20070706145918" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails on mx endpoint busy" -->
<!-- id="200707061059.18481.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE83AC3BD_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-06 10:59:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3595.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Previous message:</strong> <a href="3593.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>In reply to:</strong> <a href="3590.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3604.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3604.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Henk,
<br>
<p>On Friday 06 July 2007 05:34:35 am SLIM H.A. wrote:
<br>
<span class="quotelev1">&gt; Dear Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I followed the use of &quot;--mca btl mx,self&quot; as suggested in the FAQ
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=myrinet#myri-btl">http://www.open-mpi.org/faq/?category=myrinet#myri-btl</a>
</span><br>
Yeah, that FAQ is wrong. I am working right now to fix it up. It should be 
<br>
updated this afternoon.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I use your extra mca value I get:
</span><br>
<span class="quotelev2">&gt; &gt;mpirun --mca btl mx,self --mca btl_mx_shared_mem 1 -np 4 ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: A user-supplied value attempted to override the read-only MCA
</span><br>
<span class="quotelev2">&gt; &gt; parameter named &quot;btl_mx_shared_mem&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The user-supplied value was ignored.
</span><br>
Opps, on the 1.2 branch this is a read-only parameter. On the current trunk 
<br>
the user can change it. Sorry for the confusion. Oh well, you should probably 
<br>
use Open MPI's shared memory support instead anyways.
<br>
<p>So you should either pass '-mca btl mx,sm,self', or just pass nothing at all. 
<br>
Open MPI is fairly smart at figuring out what components to use, so you 
<br>
really should not need to specify anything.
<br>
<p><span class="quotelev1">&gt; followed by the same error messages as before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that although I add &quot;self&quot; the error messages complain about it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; missing:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; forgotten a
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; component (such as &quot;self&quot;) in the list of usable components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked the output from mx_info for both the current node and another,
</span><br>
<span class="quotelev1">&gt; there seems not to be a problem.
</span><br>
<span class="quotelev1">&gt; I attch the output from ompi_info --all
</span><br>
<span class="quotelev1">&gt; Also
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;ompi_info | grep mx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Prefix:
</span><br>
<span class="quotelev1">&gt; /usr/local/Cluster-Apps/openmpi/mx/gcc/64/1.2.3
</span><br>
<span class="quotelev1">&gt;                  MCA btl: mx (MCA v1.0, API v1.0.1, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: mx (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a further check, I rebuild the exe with mpich and that works fine on
</span><br>
<span class="quotelev1">&gt; the same node over myrinet. I wonder whether mx is properly include in
</span><br>
<span class="quotelev1">&gt; my openmpi build.
</span><br>
<span class="quotelev1">&gt; Use of ldd -v on the mpich exe gives references to libmyriexpress.so,
</span><br>
<span class="quotelev1">&gt; which is not the case for the ompi built exe, suggesting something is
</span><br>
<span class="quotelev1">&gt; missing?
</span><br>
No, this is expected behavior. The Open MPI executeables are not linked to 
<br>
libmyriexpress.so, only the mx components. So if you do a ldd 
<br>
on /usr/local/Cluster-Apps/openmpi/mx/gcc/64/1.2.3/lib/openmpi/mca_btl_mx.so, 
<br>
this should show the Myrinet library.
<br>
<p><span class="quotelev1">&gt; I used --with-mx=/usr/local/Cluster-Apps/mx/mx-1.1.1
</span><br>
<span class="quotelev1">&gt; and a listing of that directory is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;ls /usr/local/Cluster-Apps/mx/mx-1.1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bin  etc  include  lib  lib32  lib64  sbin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should be sufficient, I don't need --with-mx-libdir?
</span><br>
Correct.
<br>
<p><p>Hope this helps,
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prins
</span><br>
<span class="quotelev2">&gt; &gt; Sent: 05 July 2007 18:16
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Henk,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; By specifying '--mca btl mx,self' you are telling Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; not to use its shared memory support. If you want to use Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI's shared memory support, you must add 'sm' to the list.
</span><br>
<span class="quotelev2">&gt; &gt; I.e. '--mca btl mx,self'. If you would rather use MX's shared
</span><br>
<span class="quotelev2">&gt; &gt; memory support, instead use '--mca btl mx,self --mca
</span><br>
<span class="quotelev2">&gt; &gt; btl_mx_shared_mem 1'. However, in most cases I believe Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI's shared memory support is a bit better.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Alternatively, if you don't specify any btls, Open MPI should
</span><br>
<span class="quotelev2">&gt; &gt; figure out what to use automatically.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have compiled openmpi-1.2.3 with the --with-mx=&lt;directory&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configuration and gcc compiler. On testing with 4-8 slots I get an
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error message, the mx ports are busy:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun --mca btl mx,self -np 4 ./cpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [node001:10071] mca_btl_mx_init: mx_open_endpoint() failed with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; status=20 [node001:10074] mca_btl_mx_init:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mx_open_endpoint() failed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with status=20 [node001:10073] mca_btl_mx_init: mx_open_endpoint()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; failed with status=20
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; forgotten a
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; component (such as &quot;self&quot;) in the list of usable components.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ... snipped
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like MPI_INIT failed for some reason; your
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; parallel process
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is likely to abort.  There are many reasons that a parallel process
</span><br>
<span class="quotelev3">&gt; &gt; &gt; can fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment problems.  This failure appears to be an
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; internal failure;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; here's some additional information (which may only be
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; relevant to an
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; developer):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   PML add procs failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun noticed that job rank 0 with PID 10071 on node
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; node001 exited
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on signal 1 (Hangup).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would not expect mx messages as communication should not
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; go through
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the mx card? (This is a twin dual core  shared memory node)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; happens when testing on 2 nodes, using a hostfile.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I checked the state of the mx card with mx_endpoint_info
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and mx_info,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; they are healthy and free.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What is missing here?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Henk
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3595.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Previous message:</strong> <a href="3593.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>In reply to:</strong> <a href="3590.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3604.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3604.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
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

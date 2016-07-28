<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 11:10:41 2007" -->
<!-- isoreceived="20070709151041" -->
<!-- sent="Mon, 9 Jul 2007 16:10:12 +0100" -->
<!-- isosent="20070709151012" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails on mx endpoint busy" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE83AC3CE_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200707061059.18481.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 11:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3605.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3603.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>In reply to:</strong> <a href="3594.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3605.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3605.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
Dear Tim and Scott
<br>
<p>I followed the suggestions made:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you should either pass '-mca btl mx,sm,self', or just pass 
</span><br>
<span class="quotelev1">&gt; nothing at all. 
</span><br>
<span class="quotelev1">&gt; Open MPI is fairly smart at figuring out what components to 
</span><br>
<span class="quotelev1">&gt; use, so you really should not need to specify anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Using
<br>
<p>node001&gt;mpirun --mca btl mx,sm,self  -np 4 -hostfile ompi_machinefile
<br>
./cpi
<br>
<p>conects to some of the mx ports, not all 4, but the program runs:
<br>
<p>[node001:01562] mca_btl_mx_init: mx_open_endpoint() failed with
<br>
status=20
<br>
[node001:01564] mca_btl_mx_init: mx_open_endpoint() failed with
<br>
status=20
<br>
<p>It spawned 4 processes on node001. Passing nothing at all gave the same
<br>
problem.
<br>
<p><span class="quotelev1">&gt; Also, could you try creating a host file named &quot;hosts&quot; with 
</span><br>
<span class="quotelev1">&gt; the names of your machines and then try:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --hostfile hosts ./cpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --hostfile hosts --mca pml cm ./cpi
</span><br>
<p>node001&gt;mpirun -np 2 -hostfile ompi_machinefile  ./cpi_gcc_ompi_mx
<br>
<p>works but increasing to 4 cores again uses less than 4 ports.
<br>
Finally
<br>
<p>node001&gt;mpirun -np 4 -hostfile ompi_machinefile --mca pml cm
<br>
./cpi_gcc_ompi_mx
<br>
<p>is successful even for -np 4. From here I tried 2 nodes:
<br>
<p>node001&gt;mpirun -np 8 -hostfile ompi_machinefile --mca pml cm
<br>
./cpi_gcc_ompi_mx
<br>
<p>This gave:
<br>
<p>orted: Command not found.
<br>
[node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
<br>
at line 1164
<br>
[node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at
<br>
line 90
<br>
[node001:04585] ERROR: A daemon on node node002 failed to start as
<br>
expected.
<br>
[node001:04585] ERROR: There may be more information available from
<br>
[node001:04585] ERROR: the remote shell (see above).
<br>
[node001:04585] ERROR: The daemon exited unexpectedly with status 1.
<br>
[node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
<br>
at line 1196
<br>
------------------------------------------------------------------------
<br>
<pre>
--
mpirun was unable to cleanly terminate the daemons for this job.
Returned value Timeout instead of ORTE_SUCCESS.
------------------------------------------------------------------------
--
Apparently orted is not started up properly. Something missing in the
installation?
Thanks
Henk
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] 
&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prins
&gt; Sent: 06 July 2007 15:59
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
&gt; 
&gt; Henk,
&gt; 
&gt; On Friday 06 July 2007 05:34:35 am SLIM H.A. wrote:
&gt; &gt; Dear Tim
&gt; &gt;
&gt; &gt; I followed the use of &quot;--mca btl mx,self&quot; as suggested in the FAQ
&gt; &gt;
&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=myrinet#myri-btl">http://www.open-mpi.org/faq/?category=myrinet#myri-btl</a>
&gt; Yeah, that FAQ is wrong. I am working right now to fix it up. 
&gt; It should be updated this afternoon.
&gt; 
&gt; &gt;
&gt; &gt; When I use your extra mca value I get:
&gt; &gt; &gt;mpirun --mca btl mx,self --mca btl_mx_shared_mem 1 -np 4 ./cpi
&gt; &gt;
&gt; &gt; 
&gt; ----------------------------------------------------------------------
&gt; &gt; --
&gt; &gt; --
&gt; &gt;
&gt; &gt; &gt; WARNING: A user-supplied value attempted to override the 
&gt; read-only 
&gt; &gt; &gt; MCA parameter named &quot;btl_mx_shared_mem&quot;.
&gt; &gt; &gt;
&gt; &gt; &gt; The user-supplied value was ignored.
&gt; Opps, on the 1.2 branch this is a read-only parameter. On the 
&gt; current trunk the user can change it. Sorry for the 
&gt; confusion. Oh well, you should probably use Open MPI's shared 
&gt; memory support instead anyways.
&gt; 
&gt; So you should either pass '-mca btl mx,sm,self', or just pass 
&gt; nothing at all. 
&gt; Open MPI is fairly smart at figuring out what components to 
&gt; use, so you really should not need to specify anything.
&gt; 
&gt; &gt; followed by the same error messages as before.
&gt; &gt;
&gt; &gt; Note that although I add &quot;self&quot; the error messages complain about it
&gt; &gt;
&gt; &gt; missing:
&gt; &gt; &gt; &gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
&gt; &gt; &gt; &gt; If you specified the use of a BTL component, you may have
&gt; &gt; &gt;
&gt; &gt; &gt; forgotten a
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; component (such as &quot;self&quot;) in the list of usable components.
&gt; &gt;
&gt; &gt; I checked the output from mx_info for both the current node and 
&gt; &gt; another, there seems not to be a problem.
&gt; &gt; I attch the output from ompi_info --all Also
&gt; &gt;
&gt; &gt; &gt;ompi_info | grep mx
&gt; &gt;
&gt; &gt;                   Prefix:
&gt; &gt; /usr/local/Cluster-Apps/openmpi/mx/gcc/64/1.2.3
&gt; &gt;                  MCA btl: mx (MCA v1.0, API v1.0.1, 
&gt; Component v1.2.3)
&gt; &gt;                  MCA mtl: mx (MCA v1.0, API v1.0, Component v1.2.3)
&gt; &gt;
&gt; &gt; As a further check, I rebuild the exe with mpich and that 
&gt; works fine 
&gt; &gt; on the same node over myrinet. I wonder whether mx is 
&gt; properly include 
&gt; &gt; in my openmpi build.
&gt; &gt; Use of ldd -v on the mpich exe gives references to 
&gt; libmyriexpress.so, 
&gt; &gt; which is not the case for the ompi built exe, suggesting 
&gt; something is 
&gt; &gt; missing?
&gt; No, this is expected behavior. The Open MPI executeables are 
&gt; not linked to libmyriexpress.so, only the mx components. So 
&gt; if you do a ldd on 
&gt; /usr/local/Cluster-Apps/openmpi/mx/gcc/64/1.2.3/lib/openmpi/mc
a_btl_mx.so,
&gt; this should show the Myrinet library.
&gt; 
&gt; &gt; I used --with-mx=/usr/local/Cluster-Apps/mx/mx-1.1.1
&gt; &gt; and a listing of that directory is
&gt; &gt;
&gt; &gt; &gt;ls /usr/local/Cluster-Apps/mx/mx-1.1.1
&gt; &gt;
&gt; &gt; bin  etc  include  lib  lib32  lib64  sbin
&gt; &gt;
&gt; &gt; This should be sufficient, I don't need --with-mx-libdir?
&gt; Correct.
&gt; 
&gt; 
&gt; Hope this helps,
&gt; 
&gt; Tim
&gt; 
&gt; &gt;
&gt; &gt; Thanks
&gt; &gt;
&gt; &gt; Henk
&gt; &gt;
&gt; &gt; &gt; -----Original Message-----
&gt; &gt; &gt; From: users-bounces_at_[hidden]
&gt; &gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prins
&gt; &gt; &gt; Sent: 05 July 2007 18:16
&gt; &gt; &gt; To: Open MPI Users
&gt; &gt; &gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
&gt; &gt; &gt;
&gt; &gt; &gt; Hi Henk,
&gt; &gt; &gt;
&gt; &gt; &gt; By specifying '--mca btl mx,self' you are telling Open MPI not to 
&gt; &gt; &gt; use its shared memory support. If you want to use Open 
&gt; MPI's shared 
&gt; &gt; &gt; memory support, you must add 'sm' to the list.
&gt; &gt; &gt; I.e. '--mca btl mx,self'. If you would rather use MX's 
&gt; shared memory 
&gt; &gt; &gt; support, instead use '--mca btl mx,self --mca 
&gt; btl_mx_shared_mem 1'. 
&gt; &gt; &gt; However, in most cases I believe Open MPI's shared memory 
&gt; support is 
&gt; &gt; &gt; a bit better.
&gt; &gt; &gt;
&gt; &gt; &gt; Alternatively, if you don't specify any btls, Open MPI 
&gt; should figure 
&gt; &gt; &gt; out what to use automatically.
&gt; &gt; &gt;
&gt; &gt; &gt; Hope this helps,
&gt; &gt; &gt;
&gt; &gt; &gt; Tim
&gt; &gt; &gt;
&gt; &gt; &gt; SLIM H.A. wrote:
&gt; &gt; &gt; &gt; Hello
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; I have compiled openmpi-1.2.3 with the --with-mx=&lt;directory&gt; 
&gt; &gt; &gt; &gt; configuration and gcc compiler. On testing with 4-8 
&gt; slots I get an
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; error message, the mx ports are busy:
&gt; &gt; &gt; &gt;&gt; mpirun --mca btl mx,self -np 4 ./cpi
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; [node001:10071] mca_btl_mx_init: mx_open_endpoint() failed with 
&gt; &gt; &gt; &gt; status=20 [node001:10074] mca_btl_mx_init:
&gt; &gt; &gt;
&gt; &gt; &gt; mx_open_endpoint() failed
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; with status=20 [node001:10073] mca_btl_mx_init: 
&gt; mx_open_endpoint() 
&gt; &gt; &gt; &gt; failed with status=20
&gt; &gt; &gt;
&gt; &gt; &gt; 
&gt; --------------------------------------------------------------------
&gt; &gt; &gt; --
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; --
&gt; &gt; &gt; &gt; --
&gt; &gt; &gt; &gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
&gt; &gt; &gt; &gt; If you specified the use of a BTL component, you may have
&gt; &gt; &gt;
&gt; &gt; &gt; forgotten a
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; component (such as &quot;self&quot;) in the list of usable components.
&gt; &gt; &gt; &gt; ... snipped
&gt; &gt; &gt; &gt; It looks like MPI_INIT failed for some reason; your
&gt; &gt; &gt;
&gt; &gt; &gt; parallel process
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; is likely to abort.  There are many reasons that a parallel 
&gt; &gt; &gt; &gt; process can fail during MPI_INIT; some of which are due to 
&gt; &gt; &gt; &gt; configuration or environment problems.  This failure 
&gt; appears to be 
&gt; &gt; &gt; &gt; an
&gt; &gt; &gt;
&gt; &gt; &gt; internal failure;
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; here's some additional information (which may only be
&gt; &gt; &gt;
&gt; &gt; &gt; relevant to an
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; Open MPI
&gt; &gt; &gt; &gt; developer):
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt;   PML add procs failed
&gt; &gt; &gt; &gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
&gt; &gt; &gt;
&gt; &gt; &gt; 
&gt; --------------------------------------------------------------------
&gt; &gt; &gt; --
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; --
&gt; &gt; &gt; &gt; --
&gt; &gt; &gt; &gt; *** An error occurred in MPI_Init
&gt; &gt; &gt; &gt; *** before MPI was initialized
&gt; &gt; &gt; &gt; *** MPI_ERRORS_ARE_FATAL (goodbye) mpirun noticed that 
&gt; job rank 0 
&gt; &gt; &gt; &gt; with PID 10071 on node
&gt; &gt; &gt;
&gt; &gt; &gt; node001 exited
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; on signal 1 (Hangup).
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; I would not expect mx messages as communication should not
&gt; &gt; &gt;
&gt; &gt; &gt; go through
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; the mx card? (This is a twin dual core  shared memory node)
&gt; &gt; &gt;
&gt; &gt; &gt; The same
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; happens when testing on 2 nodes, using a hostfile.
&gt; &gt; &gt; &gt; I checked the state of the mx card with mx_endpoint_info
&gt; &gt; &gt;
&gt; &gt; &gt; and mx_info,
&gt; &gt; &gt;
&gt; &gt; &gt; &gt; they are healthy and free.
&gt; &gt; &gt; &gt; What is missing here?
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; Thanks
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; Henk
&gt; &gt; &gt; &gt;
&gt; &gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; &gt; users mailing list
&gt; &gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt;
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; users mailing list
&gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3605.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3603.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>In reply to:</strong> <a href="3594.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3605.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3605.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
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

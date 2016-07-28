<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 07:20:46 2007" -->
<!-- isoreceived="20070710112046" -->
<!-- sent="Tue, 10 Jul 2007 12:20:27 +0100" -->
<!-- isosent="20070710112027" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails on mx endpoint busy" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE83AC3D7_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46925574.7070500_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-07-10 07:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3613.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3611.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>In reply to:</strong> <a href="3605.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3613.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3613.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Tim
<br>
<p><span class="quotelev1">&gt; So, you should just be able to run:
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl mx,sm,self -mca mtl ^mx -np 4 -hostfile 
</span><br>
<span class="quotelev1">&gt; ompi_machinefile ./cpi
</span><br>
<p>I tried  
<br>
<p>node001&gt;mpirun --mca btl mx,sm,self -mca mtl ^mx -np 4 -hostfile
<br>
ompi_machinefile ./cpi
<br>
<p>I put in a sleep call to keep it running for some time and to monitor
<br>
the endpoints. None of the 4 were open, it must have used tcp. 
<br>
Also when I look at the process table for node001 I find
<br>
<p>orted --bootproxy 1 --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename
<br>
node001 --universe dcl0has_at_node001:default-universe-17750 --nsreplica
<br>
&quot;0.0.0;tcp://10.141.0.1:43640&quot; --gprreplica
<br>
&quot;0.0.0;tcp://10.141.0.1:43640&quot; --set-sid 
<br>
<p>The argument &quot;--num_procs 2&quot; seems odd, I would expect 4?
<br>
<p>Henk
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prins
</span><br>
<span class="quotelev1">&gt; Sent: 09 July 2007 16:34
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; Dear Tim and Scott
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I followed the suggestions made:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So you should either pass '-mca btl mx,sm,self', or just 
</span><br>
<span class="quotelev1">&gt; pass nothing 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; at all.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI is fairly smart at figuring out what components 
</span><br>
<span class="quotelev1">&gt; to use, so 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you really should not need to specify anything.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Using
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; node001&gt;mpirun --mca btl mx,sm,self  -np 4 -hostfile 
</span><br>
<span class="quotelev1">&gt; ompi_machinefile
</span><br>
<span class="quotelev2">&gt; &gt; ./cpi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; conects to some of the mx ports, not all 4, but the program runs:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [node001:01562] mca_btl_mx_init: mx_open_endpoint() failed with 
</span><br>
<span class="quotelev2">&gt; &gt; status=20 [node001:01564] mca_btl_mx_init: 
</span><br>
<span class="quotelev1">&gt; mx_open_endpoint() failed 
</span><br>
<span class="quotelev2">&gt; &gt; with status=20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I finally figured out the problem here. What is happening is 
</span><br>
<span class="quotelev1">&gt; that Open MPI now has 2 different network stacks, only one of 
</span><br>
<span class="quotelev1">&gt; which can be used at a time: the mtl and the btl. What is 
</span><br>
<span class="quotelev1">&gt; happening is that both the mx btl and the mx mtl is being 
</span><br>
<span class="quotelev1">&gt; opened, each of which open an endpoint. Then the mtl is 
</span><br>
<span class="quotelev1">&gt; closed because it will not be used, which releases the endpoint. 
</span><br>
<span class="quotelev1">&gt; Meanwhile, while the number of endpoints are exhausted while 
</span><br>
<span class="quotelev1">&gt; others are trying to open them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are two solutions:
</span><br>
<span class="quotelev1">&gt; 1. Increase the number of available endpoints. According to 
</span><br>
<span class="quotelev1">&gt; the Myrinet documentation, upping the limit to 16 or so 
</span><br>
<span class="quotelev1">&gt; should have no performance impact.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Alternatively, you can tell the mx mtl not to run with -mca mtl ^mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, you should just be able to run:
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl mx,sm,self -mca mtl ^mx -np 4 -hostfile 
</span><br>
<span class="quotelev1">&gt; ompi_machinefile ./cpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And it should work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It spawned 4 processes on node001. Passing nothing at all gave the 
</span><br>
<span class="quotelev2">&gt; &gt; same problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also, could you try creating a host file named &quot;hosts&quot; 
</span><br>
<span class="quotelev1">&gt; with the names 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of your machines and then try:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ mpirun -np 2 --hostfile hosts ./cpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and then
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ mpirun -np 2 --hostfile hosts --mca pml cm ./cpi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; node001&gt;mpirun -np 2 -hostfile ompi_machinefile  ./cpi_gcc_ompi_mx
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; works but increasing to 4 cores again uses less than 4 ports.
</span><br>
<span class="quotelev2">&gt; &gt; Finally
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; node001&gt;mpirun -np 4 -hostfile ompi_machinefile --mca pml cm
</span><br>
<span class="quotelev2">&gt; &gt; ./cpi_gcc_ompi_mx
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; is successful even for -np 4. From here I tried 2 nodes:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; node001&gt;mpirun -np 8 -hostfile ompi_machinefile --mca pml cm
</span><br>
<span class="quotelev2">&gt; &gt; ./cpi_gcc_ompi_mx
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This gave:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; orted: Command not found.
</span><br>
<span class="quotelev2">&gt; &gt; [node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev2">&gt; &gt; base/pls_base_orted_cmds.c at line 275 [node001:04585] [0,0,0] 
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1164 
</span><br>
<span class="quotelev2">&gt; &gt; [node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c 
</span><br>
<span class="quotelev2">&gt; &gt; at line 90 [node001:04585] ERROR: A daemon on node node002 
</span><br>
<span class="quotelev1">&gt; failed to 
</span><br>
<span class="quotelev2">&gt; &gt; start as expected.
</span><br>
<span class="quotelev2">&gt; &gt; [node001:04585] ERROR: There may be more information available from 
</span><br>
<span class="quotelev2">&gt; &gt; [node001:04585] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt; &gt; [node001:04585] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev2">&gt; &gt; [node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
</span><br>
<span class="quotelev2">&gt; &gt; base/pls_base_orted_cmds.c at line 188 [node001:04585] [0,0,0] 
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1196
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev2">&gt; &gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that on the remote ompi cannot find the 'orted' 
</span><br>
<span class="quotelev1">&gt; executable. Is the Open MPI install available on the remote node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try:
</span><br>
<span class="quotelev1">&gt; ssh remote_node which orted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This should locate the 'orted' program. If it does not, you 
</span><br>
<span class="quotelev1">&gt; may need to modify your PATH, as described here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Apparently orted is not started up properly. Something 
</span><br>
<span class="quotelev1">&gt; missing in the 
</span><br>
<span class="quotelev2">&gt; &gt; installation?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Henk
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prins
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: 06 July 2007 15:59
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Henk,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Friday 06 July 2007 05:34:35 am SLIM H.A. wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dear Tim
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I followed the use of &quot;--mca btl mx,self&quot; as suggested in the FAQ
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=myrinet#myri-btl">http://www.open-mpi.org/faq/?category=myrinet#myri-btl</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yeah, that FAQ is wrong. I am working right now to fix it up. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It should be updated this afternoon.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When I use your extra mca value I get:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpirun --mca btl mx,self --mca btl_mx_shared_mem 1 -np 4 ./cpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; WARNING: A user-supplied value attempted to override the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; read-only
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; MCA parameter named &quot;btl_mx_shared_mem&quot;.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The user-supplied value was ignored.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Opps, on the 1.2 branch this is a read-only parameter. On 
</span><br>
<span class="quotelev1">&gt; the current 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; trunk the user can change it. Sorry for the confusion. Oh 
</span><br>
<span class="quotelev1">&gt; well, you 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; should probably use Open MPI's shared memory support 
</span><br>
<span class="quotelev1">&gt; instead anyways.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So you should either pass '-mca btl mx,sm,self', or just 
</span><br>
<span class="quotelev1">&gt; pass nothing 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; at all.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI is fairly smart at figuring out what components 
</span><br>
<span class="quotelev1">&gt; to use, so 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you really should not need to specify anything.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; followed by the same error messages as before.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note that although I add &quot;self&quot; the error messages 
</span><br>
<span class="quotelev1">&gt; complain about it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; missing:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; forgotten a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; component (such as &quot;self&quot;) in the list of usable components.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I checked the output from mx_info for both the current node and 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; another, there seems not to be a problem.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I attch the output from ompi_info --all Also
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ompi_info | grep mx
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                   Prefix:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/local/Cluster-Apps/openmpi/mx/gcc/64/1.2.3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                  MCA btl: mx (MCA v1.0, API v1.0.1,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Component v1.2.3)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                  MCA mtl: mx (MCA v1.0, API v1.0, 
</span><br>
<span class="quotelev1">&gt; Component v1.2.3)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As a further check, I rebuild the exe with mpich and that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; works fine
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; on the same node over myrinet. I wonder whether mx is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; properly include
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in my openmpi build.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Use of ldd -v on the mpich exe gives references to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libmyriexpress.so,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; which is not the case for the ompi built exe, suggesting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; something is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; missing?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No, this is expected behavior. The Open MPI executeables are not 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linked to libmyriexpress.so, only the mx components. So if 
</span><br>
<span class="quotelev1">&gt; you do a 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ldd on 
</span><br>
<span class="quotelev1">&gt; /usr/local/Cluster-Apps/openmpi/mx/gcc/64/1.2.3/lib/openmpi/mc
</span><br>
<span class="quotelev2">&gt; &gt; a_btl_mx.so,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this should show the Myrinet library.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I used --with-mx=/usr/local/Cluster-Apps/mx/mx-1.1.1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and a listing of that directory is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ls /usr/local/Cluster-Apps/mx/mx-1.1.1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; bin  etc  include  lib  lib32  lib64  sbin
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This should be sufficient, I don't need --with-mx-libdir?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Correct.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hope this helps,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Henk
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prins
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sent: 05 July 2007 18:16
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Henk,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; By specifying '--mca btl mx,self' you are telling Open 
</span><br>
<span class="quotelev1">&gt; MPI not to 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; use its shared memory support. If you want to use Open
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI's shared
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; memory support, you must add 'sm' to the list.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I.e. '--mca btl mx,self'. If you would rather use MX's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; shared memory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; support, instead use '--mca btl mx,self --mca
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_mx_shared_mem 1'. 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; However, in most cases I believe Open MPI's shared memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; support is
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; a bit better.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Alternatively, if you don't specify any btls, Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; should figure
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; out what to use automatically.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I have compiled openmpi-1.2.3 with the --with-mx=&lt;directory&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; configuration and gcc compiler. On testing with 4-8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; slots I get an
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; error message, the mx ports are busy:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; mpirun --mca btl mx,self -np 4 ./cpi
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [node001:10071] mca_btl_mx_init: mx_open_endpoint() failed with 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; status=20 [node001:10074] mca_btl_mx_init:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mx_open_endpoint() failed
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; with status=20 [node001:10073] mca_btl_mx_init: 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mx_open_endpoint()
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; failed with status=20
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; forgotten a
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; component (such as &quot;self&quot;) in the list of usable components.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ... snipped
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; parallel process
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; is likely to abort.  There are many reasons that a parallel 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; process can fail during MPI_INIT; some of which are due to 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; configuration or environment problems.  This failure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; appears to be
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; an
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; internal failure;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; relevant to an
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye) mpirun noticed that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; job rank 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; with PID 10071 on node
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; node001 exited
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; on signal 1 (Hangup).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I would not expect mx messages as communication should not
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; go through
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the mx card? (This is a twin dual core  shared memory node)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The same
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; happens when testing on 2 nodes, using a hostfile.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I checked the state of the mx card with mx_endpoint_info
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and mx_info,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; they are healthy and free.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; What is missing here?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Henk
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3613.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3611.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>In reply to:</strong> <a href="3605.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3613.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3613.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
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

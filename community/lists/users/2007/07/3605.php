<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 11:34:13 2007" -->
<!-- isoreceived="20070709153413" -->
<!-- sent="Mon, 09 Jul 2007 11:34:12 -0400" -->
<!-- isosent="20070709153412" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails on mx endpoint busy" -->
<!-- id="46925574.7070500_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE83AC3CE_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Date:</strong> 2007-07-09 11:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3606.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Previous message:</strong> <a href="3604.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3604.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3612.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3612.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SLIM H.A. wrote:
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Dear Tim and Scott
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I followed the suggestions made:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So you should either pass '-mca btl mx,sm,self', or just pass 
</span><br>
<span class="quotelev2">&gt;&gt; nothing at all. 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is fairly smart at figuring out what components to 
</span><br>
<span class="quotelev2">&gt;&gt; use, so you really should not need to specify anything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node001&gt;mpirun --mca btl mx,sm,self  -np 4 -hostfile ompi_machinefile
</span><br>
<span class="quotelev1">&gt; ./cpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conects to some of the mx ports, not all 4, but the program runs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node001:01562] mca_btl_mx_init: mx_open_endpoint() failed with
</span><br>
<span class="quotelev1">&gt; status=20
</span><br>
<span class="quotelev1">&gt; [node001:01564] mca_btl_mx_init: mx_open_endpoint() failed with
</span><br>
<span class="quotelev1">&gt; status=20
</span><br>
<p>I finally figured out the problem here. What is happening is that Open 
<br>
MPI now has 2 different network stacks, only one of which can be used at 
<br>
a time: the mtl and the btl. What is happening is that both the mx btl 
<br>
and the mx mtl is being opened, each of which open an endpoint. Then the 
<br>
mtl is closed because it will not be used, which releases the endpoint. 
<br>
Meanwhile, while the number of endpoints are exhausted while others are 
<br>
trying to open them.
<br>
<p>There are two solutions:
<br>
1. Increase the number of available endpoints. According to the Myrinet 
<br>
documentation, upping the limit to 16 or so should have no performance 
<br>
impact.
<br>
<p>2. Alternatively, you can tell the mx mtl not to run with -mca mtl ^mx
<br>
<p>So, you should just be able to run:
<br>
mpirun --mca btl mx,sm,self -mca mtl ^mx -np 4 -hostfile 
<br>
ompi_machinefile ./cpi
<br>
<p>And it should work.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It spawned 4 processes on node001. Passing nothing at all gave the same
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, could you try creating a host file named &quot;hosts&quot; with 
</span><br>
<span class="quotelev2">&gt;&gt; the names of your machines and then try:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 --hostfile hosts ./cpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 --hostfile hosts --mca pml cm ./cpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node001&gt;mpirun -np 2 -hostfile ompi_machinefile  ./cpi_gcc_ompi_mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; works but increasing to 4 cores again uses less than 4 ports.
</span><br>
<span class="quotelev1">&gt; Finally
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node001&gt;mpirun -np 4 -hostfile ompi_machinefile --mca pml cm
</span><br>
<span class="quotelev1">&gt; ./cpi_gcc_ompi_mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is successful even for -np 4. From here I tried 2 nodes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node001&gt;mpirun -np 8 -hostfile ompi_machinefile --mca pml cm
</span><br>
<span class="quotelev1">&gt; ./cpi_gcc_ompi_mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This gave:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orted: Command not found.
</span><br>
<span class="quotelev1">&gt; [node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
</span><br>
<span class="quotelev1">&gt; at line 1164
</span><br>
<span class="quotelev1">&gt; [node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at
</span><br>
<span class="quotelev1">&gt; line 90
</span><br>
<span class="quotelev1">&gt; [node001:04585] ERROR: A daemon on node node002 failed to start as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; [node001:04585] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [node001:04585] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [node001:04585] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev1">&gt; [node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [node001:04585] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
</span><br>
<span class="quotelev1">&gt; at line 1196
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<p>The problem is that on the remote ompi cannot find the 'orted' 
<br>
executable. Is the Open MPI install available on the remote node?
<br>
<p>Try:
<br>
ssh remote_node which orted
<br>
<p>This should locate the 'orted' program. If it does not, you may need to 
<br>
modify your PATH, as described here:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apparently orted is not started up properly. Something missing in the
</span><br>
<span class="quotelev1">&gt; installation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prins
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 06 July 2007 15:59
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Henk,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday 06 July 2007 05:34:35 am SLIM H.A. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I followed the use of &quot;--mca btl mx,self&quot; as suggested in the FAQ
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=myrinet#myri-btl">http://www.open-mpi.org/faq/?category=myrinet#myri-btl</a>
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, that FAQ is wrong. I am working right now to fix it up. 
</span><br>
<span class="quotelev2">&gt;&gt; It should be updated this afternoon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I use your extra mca value I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --mca btl mx,self --mca btl_mx_shared_mem 1 -np 4 ./cpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: A user-supplied value attempted to override the 
</span><br>
<span class="quotelev2">&gt;&gt; read-only 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA parameter named &quot;btl_mx_shared_mem&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The user-supplied value was ignored.
</span><br>
<span class="quotelev2">&gt;&gt; Opps, on the 1.2 branch this is a read-only parameter. On the 
</span><br>
<span class="quotelev2">&gt;&gt; current trunk the user can change it. Sorry for the 
</span><br>
<span class="quotelev2">&gt;&gt; confusion. Oh well, you should probably use Open MPI's shared 
</span><br>
<span class="quotelev2">&gt;&gt; memory support instead anyways.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you should either pass '-mca btl mx,sm,self', or just pass 
</span><br>
<span class="quotelev2">&gt;&gt; nothing at all. 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is fairly smart at figuring out what components to 
</span><br>
<span class="quotelev2">&gt;&gt; use, so you really should not need to specify anything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; followed by the same error messages as before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that although I add &quot;self&quot; the error messages complain about it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; missing:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; forgotten a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component (such as &quot;self&quot;) in the list of usable components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked the output from mx_info for both the current node and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another, there seems not to be a problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attch the output from ompi_info --all Also
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info | grep mx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Prefix:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/Cluster-Apps/openmpi/mx/gcc/64/1.2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: mx (MCA v1.0, API v1.0.1, 
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA mtl: mx (MCA v1.0, API v1.0, Component v1.2.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a further check, I rebuild the exe with mpich and that 
</span><br>
<span class="quotelev2">&gt;&gt; works fine 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the same node over myrinet. I wonder whether mx is 
</span><br>
<span class="quotelev2">&gt;&gt; properly include 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in my openmpi build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Use of ldd -v on the mpich exe gives references to 
</span><br>
<span class="quotelev2">&gt;&gt; libmyriexpress.so, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is not the case for the ompi built exe, suggesting 
</span><br>
<span class="quotelev2">&gt;&gt; something is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; missing?
</span><br>
<span class="quotelev2">&gt;&gt; No, this is expected behavior. The Open MPI executeables are 
</span><br>
<span class="quotelev2">&gt;&gt; not linked to libmyriexpress.so, only the mx components. So 
</span><br>
<span class="quotelev2">&gt;&gt; if you do a ldd on 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/Cluster-Apps/openmpi/mx/gcc/64/1.2.3/lib/openmpi/mc
</span><br>
<span class="quotelev1">&gt; a_btl_mx.so,
</span><br>
<span class="quotelev2">&gt;&gt; this should show the Myrinet library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I used --with-mx=/usr/local/Cluster-Apps/mx/mx-1.1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a listing of that directory is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ls /usr/local/Cluster-Apps/mx/mx-1.1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bin  etc  include  lib  lib32  lib64  sbin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should be sufficient, I don't need --with-mx-libdir?
</span><br>
<span class="quotelev2">&gt;&gt; Correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Henk
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prins
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: 05 July 2007 18:16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Henk,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By specifying '--mca btl mx,self' you are telling Open MPI not to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use its shared memory support. If you want to use Open 
</span><br>
<span class="quotelev2">&gt;&gt; MPI's shared 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory support, you must add 'sm' to the list.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I.e. '--mca btl mx,self'. If you would rather use MX's 
</span><br>
<span class="quotelev2">&gt;&gt; shared memory 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support, instead use '--mca btl mx,self --mca 
</span><br>
<span class="quotelev2">&gt;&gt; btl_mx_shared_mem 1'. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, in most cases I believe Open MPI's shared memory 
</span><br>
<span class="quotelev2">&gt;&gt; support is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a bit better.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alternatively, if you don't specify any btls, Open MPI 
</span><br>
<span class="quotelev2">&gt;&gt; should figure 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out what to use automatically.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have compiled openmpi-1.2.3 with the --with-mx=&lt;directory&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configuration and gcc compiler. On testing with 4-8 
</span><br>
<span class="quotelev2">&gt;&gt; slots I get an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error message, the mx ports are busy:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun --mca btl mx,self -np 4 ./cpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node001:10071] mca_btl_mx_init: mx_open_endpoint() failed with 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; status=20 [node001:10074] mca_btl_mx_init:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mx_open_endpoint() failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with status=20 [node001:10073] mca_btl_mx_init: 
</span><br>
<span class="quotelev2">&gt;&gt; mx_open_endpoint() 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failed with status=20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; forgotten a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component (such as &quot;self&quot;) in the list of usable components.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ... snipped
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parallel process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is likely to abort.  There are many reasons that a parallel 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process can fail during MPI_INIT; some of which are due to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configuration or environment problems.  This failure 
</span><br>
<span class="quotelev2">&gt;&gt; appears to be 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye) mpirun noticed that 
</span><br>
<span class="quotelev2">&gt;&gt; job rank 0 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with PID 10071 on node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node001 exited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on signal 1 (Hangup).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I would not expect mx messages as communication should not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; go through
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the mx card? (This is a twin dual core  shared memory node)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; happens when testing on 2 nodes, using a hostfile.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I checked the state of the mx card with mx_endpoint_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and mx_info,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they are healthy and free.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What is missing here?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Henk
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="3606.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Previous message:</strong> <a href="3604.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3604.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3612.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3612.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
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

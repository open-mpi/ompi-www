<?
$subject_val = "Re: [OMPI users] openib segfaults with Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 19:04:47 2014" -->
<!-- isoreceived="20140611230447" -->
<!-- sent="Wed, 11 Jun 2014 16:05:04 -0700" -->
<!-- isosent="20140611230504" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib segfaults with Torque" -->
<!-- id="20140611230504.GB32508_at_sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F67BF575-3BBA-4100-AA37-C991B73B8624_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib segfaults with Torque<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-11 19:05:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24641.php">Gus Correa: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24639.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24639.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24641.php">Gus Correa: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It isn't really Torque that is imposing those constraints:
<br>
- the torque_mom initscript inherits from the OS whatever ulimits are
<br>
&nbsp;&nbsp;in effect at that time;
<br>
- each job inherits the ulimits from the pbs_mom.
<br>
<p>Thus, you need to change the ulimits from whatever is set at
<br>
startup time, e.g., in /etc/sysconfig/torque_mom:
<br>
<p>ulimit -d unlimited
<br>
ulimit -s unlimited
<br>
ulimit -n 32768
<br>
ulimit -l 2097152
<br>
<p>or whatever you consider to be reasonable.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
WestGrid/ComputeCanada
Simon Fraser University
Burnaby, British Columbia
On Wed, Jun 11, 2014 at 10:20:08PM +0000, Jeff Squyres (jsquyres) wrote:
&gt; +1
&gt; 
&gt; On Jun 11, 2014, at 6:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;  wrote:
&gt; 
&gt; &gt; Yeah, I think we've seen that somewhere before too...
&gt; &gt; 
&gt; &gt; 
&gt; &gt; On Jun 11, 2014, at 2:59 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
&gt; &gt; 
&gt; &gt;&gt; Agreed. The problem is not with UDCM. I don't think something is wrong with the system. I think his Torque is imposing major constraints on the maximum size that can be locked into memory.
&gt; &gt;&gt; 
&gt; &gt;&gt; Josh
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; On Wed, Jun 11, 2014 at 5:49 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
&gt; &gt;&gt; Probably won't help to use RDMACM though as you will just see the
&gt; &gt;&gt; resource failure somewhere else. UDCM is not the problem. Something is
&gt; &gt;&gt; wrong with the system. Allocating a 512 entry CQ should not fail.
&gt; &gt;&gt; 
&gt; &gt;&gt; -Nathan
&gt; &gt;&gt; 
&gt; &gt;&gt; On Wed, Jun 11, 2014 at 05:03:31PM -0400, Joshua Ladd wrote:
&gt; &gt;&gt; &gt;    I'm guessing it's a resource limitation issue coming from Torque.
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;    Hmmmm...I found something interesting on the interwebs that looks awfully
&gt; &gt;&gt; &gt;    similar:
&gt; &gt;&gt; &gt;    <a href="http://www.supercluster.org/pipermail/torqueusers/2008-February/006916.html">http://www.supercluster.org/pipermail/torqueusers/2008-February/006916.html</a>
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;    Greg, if the suggestion from the Torque users doesn't resolve your issue (
&gt; &gt;&gt; &gt;    &quot;...adding the following line 'ulimit -l unlimited' to pbs_mom and
&gt; &gt;&gt; &gt;    restarting pbs_mom.&quot; ) doesn't work, try using the RDMACM CPC (instead of
&gt; &gt;&gt; &gt;    UDCM, which is a pretty recent addition to the openIB BTL.) by setting:
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;    -mca btl_openib_cpc_include rdmacm
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;    Josh
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;    On Wed, Jun 11, 2014 at 4:04 PM, Jeff Squyres (jsquyres)
&gt; &gt;&gt; &gt;    &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;      Mellanox --
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;      What would cause a CQ to fail to be created?
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;      On Jun 11, 2014, at 3:42 PM, &quot;Fischer, Greg A.&quot;
&gt; &gt;&gt; &gt;      &lt;fischega_at_[hidden]&gt; wrote:
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;      &gt; Is there any other work around that I might try?  Something that
&gt; &gt;&gt; &gt;      avoids UDCM?
&gt; &gt;&gt; &gt;      &gt;
&gt; &gt;&gt; &gt;      &gt; -----Original Message-----
&gt; &gt;&gt; &gt;      &gt; From: Fischer, Greg A.
&gt; &gt;&gt; &gt;      &gt; Sent: Tuesday, June 10, 2014 2:59 PM
&gt; &gt;&gt; &gt;      &gt; To: Nathan Hjelm
&gt; &gt;&gt; &gt;      &gt; Cc: Open MPI Users; Fischer, Greg A.
&gt; &gt;&gt; &gt;      &gt; Subject: RE: [OMPI users] openib segfaults with Torque
&gt; &gt;&gt; &gt;      &gt;
&gt; &gt;&gt; &gt;      &gt; [binf316:fischega] $ ulimit -m
&gt; &gt;&gt; &gt;      &gt; unlimited
&gt; &gt;&gt; &gt;      &gt;
&gt; &gt;&gt; &gt;      &gt; Greg
&gt; &gt;&gt; &gt;      &gt;
&gt; &gt;&gt; &gt;      &gt; -----Original Message-----
&gt; &gt;&gt; &gt;      &gt; From: Nathan Hjelm [mailto:hjelmn_at_[hidden]]
&gt; &gt;&gt; &gt;      &gt; Sent: Tuesday, June 10, 2014 2:58 PM
&gt; &gt;&gt; &gt;      &gt; To: Fischer, Greg A.
&gt; &gt;&gt; &gt;      &gt; Cc: Open MPI Users
&gt; &gt;&gt; &gt;      &gt; Subject: Re: [OMPI users] openib segfaults with Torque
&gt; &gt;&gt; &gt;      &gt;
&gt; &gt;&gt; &gt;      &gt; Out of curiosity what is the mlock limit on your system? If it is too
&gt; &gt;&gt; &gt;      low that can cause ibv_create_cq to fail. To check run ulimit -m.
&gt; &gt;&gt; &gt;      &gt;
&gt; &gt;&gt; &gt;      &gt; -Nathan Hjelm
&gt; &gt;&gt; &gt;      &gt; Application Readiness, HPC-5, LANL
&gt; &gt;&gt; &gt;      &gt;
&gt; &gt;&gt; &gt;      &gt; On Tue, Jun 10, 2014 at 02:53:58PM -0400, Fischer, Greg A. wrote:
&gt; &gt;&gt; &gt;      &gt;&gt; Yes, this fails on all nodes on the system, except for the head node.
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt; The uptime of the system isn't significant. Maybe 1 week, and it's
&gt; &gt;&gt; &gt;      received basically no use.
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt; -----Original Message-----
&gt; &gt;&gt; &gt;      &gt;&gt; From: Nathan Hjelm [mailto:hjelmn_at_[hidden]]
&gt; &gt;&gt; &gt;      &gt;&gt; Sent: Tuesday, June 10, 2014 2:49 PM
&gt; &gt;&gt; &gt;      &gt;&gt; To: Fischer, Greg A.
&gt; &gt;&gt; &gt;      &gt;&gt; Cc: Open MPI Users
&gt; &gt;&gt; &gt;      &gt;&gt; Subject: Re: [OMPI users] openib segfaults with Torque
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt; Well, thats interesting. The output shows that ibv_create_cq is
&gt; &gt;&gt; &gt;      failing. Strange since an identical call had just succeeded (udcm
&gt; &gt;&gt; &gt;      creates two completion queues). Some questions that might indicate where
&gt; &gt;&gt; &gt;      the failure might be:
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt; Does this fail on any other node in your system?
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt; How long has the node been up?
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt; -Nathan Hjelm
&gt; &gt;&gt; &gt;      &gt;&gt; Application Readiness, HPC-5, LANL
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt; On Tue, Jun 10, 2014 at 02:06:54PM -0400, Fischer, Greg A. wrote:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Jeff/Nathan,
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; I ran the following with my debug build of OpenMPI 1.8.1 - after
&gt; &gt;&gt; &gt;      opening a terminal on a compute node with &quot;qsub -l nodes 2 -I&quot;:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;      mpirun -mca btl openib,self -mca btl_base_verbose 100 -np 2
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ring_c &amp;&gt; output.txt
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Output and backtrace are attached. Let me know if I can provide
&gt; &gt;&gt; &gt;      anything else.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Thanks for looking into this,
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Greg
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; -----Original Message-----
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Squyres (jsquyres)
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Sent: Tuesday, June 10, 2014 10:31 AM
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; To: Nathan Hjelm
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Cc: Open MPI Users
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Subject: Re: [OMPI users] openib segfaults with Torque
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Greg:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Can you run with &quot;--mca btl_base_verbose 100&quot; on your debug build so
&gt; &gt;&gt; &gt;      that we can get some additional output to see why UDCM is failing to
&gt; &gt;&gt; &gt;      setup properly?
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; On Jun 10, 2014, at 10:25 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; On Tue, Jun 10, 2014 at 12:10:28AM +0000, Jeff Squyres (jsquyres)
&gt; &gt;&gt; &gt;      wrote:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; I seem to recall that you have an IB-based cluster, right?
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; From a *very quick* glance at the code, it looks like this might
&gt; &gt;&gt; &gt;      be a simple incorrect-finalization issue.  That is:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; - you run the job on a single server
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; - openib disqualifies itself because you're running on a single
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; server
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; - openib then goes to finalize/close itself
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; - but openib didn't fully initialize itself (because it
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; disqualified itself early in the initialization process), and
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; something in the finalization process didn't take that into
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; account
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;&gt; Nathan -- is that anywhere close to correct?
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; Nope. udcm_module_finalize is being called because there was an
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; error setting up the udcm state. See btl_openib_connect_udcm.c:476.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; The opal_list_t destructor is getting an assert failure. Probably
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; because the constructor wasn't called. I can rearrange the
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; constructors to be called first but there appears to be a deeper
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; issue with the user's
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; system: udcm_module_init should not be failing! It creates a
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; couple of CQs, allocates a small number of registered bufferes and
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; starts monitoring the fd for the completion channel. All these
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; things are also done in the setup of the openib btl itself. Keep
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; in mind that the openib btl will not disqualify itself when running
&gt; &gt;&gt; &gt;      single server.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; Openib may be used to communicate on node and is needed for the
&gt; &gt;&gt; &gt;      dynamics case.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; The user might try adding -mca btl_base_verbose 100 to shed some
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; light on what the real issue is.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; BTW, I no longer monitor the user mailing list. If something needs
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; my attention forward it to me directly.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;&gt; -Nathan
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; --
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Jeff Squyres
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; jsquyres_at_[hidden]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; For corporate legal information go to:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; users mailing list
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Core was generated by `ring_c'.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Program terminated with signal 6, Aborted.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #0  0x00007f8b6ae1cb55 in raise () from /lib64/libc.so.6
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #0  0x00007f8b6ae1cb55 in raise () from /lib64/libc.so.6
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #1  0x00007f8b6ae1e0c5 in abort () from /lib64/libc.so.6
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #2  0x00007f8b6ae15a10 in __assert_fail () from /lib64/libc.so.6
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #3  0x00007f8b664b684b in udcm_module_finalize (btl=0x717060,
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; cpc=0x7190c0) at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; co
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; nnect_udcm.c:734
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #4  0x00007f8b664b5474 in udcm_component_query (btl=0x717060,
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; cpc=0x718a48) at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; co
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; nnect_udcm.c:476
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #5  0x00007f8b664ae316 in
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ompi_btl_openib_connect_base_select_for_local_port (btl=0x717060) at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; co
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; nnect_base.c:273
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #6  0x00007f8b66497817 in btl_openib_component_init
&gt; &gt;&gt; &gt;      (num_btl_modules=0x7fffe34cebe0, enable_progress_threads=false,
&gt; &gt;&gt; &gt;      enable_mpi_threads=false)
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;    at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; c:2703
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #7  0x00007f8b6b43fa5e in mca_btl_base_select
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; (enable_progress_threads=false, enable_mpi_threads=false) at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ../../../../openmpi-1.8.1/ompi/mca/btl/base/btl_base_select.c:108
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #8  0x00007f8b666d9d42 in mca_bml_r2_component_init
&gt; &gt;&gt; &gt;      (priority=0x7fffe34cecb4, enable_progress_threads=false,
&gt; &gt;&gt; &gt;      enable_mpi_threads=false)
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;    at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ../../../../../openmpi-1.8.1/ompi/mca/bml/r2/bml_r2_component.c:88
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #9  0x00007f8b6b43ed1b in mca_bml_base_init
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; (enable_progress_threads=false, enable_mpi_threads=false) at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ../../../../openmpi-1.8.1/ompi/mca/bml/base/bml_base_init.c:69
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #10 0x00007f8b655ff739 in mca_pml_ob1_component_init
&gt; &gt;&gt; &gt;      (priority=0x7fffe34cedf0, enable_progress_threads=false,
&gt; &gt;&gt; &gt;      enable_mpi_threads=false)
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;    at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ../../../../../openmpi-1.8.1/ompi/mca/pml/ob1/pml_ob1_component.c:27
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; 1
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #11 0x00007f8b6b4659b2 in mca_pml_base_select
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; (enable_progress_threads=false, enable_mpi_threads=false) at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ../../../../openmpi-1.8.1/ompi/mca/pml/base/pml_base_select.c:128
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #12 0x00007f8b6b3d233c in ompi_mpi_init (argc=1,
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; argv=0x7fffe34cf0e8, requested=0, provided=0x7fffe34cef98) at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ../../openmpi-1.8.1/ompi/runtime/ompi_mpi_init.c:604
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #13 0x00007f8b6b407386 in PMPI_Init (argc=0x7fffe34cefec,
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; argv=0x7fffe34cefe0) at pinit.c:84
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; #14 0x000000000040096f in main (argc=1, argv=0x7fffe34cf0e8) at
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ring_c.c:19
&gt; &gt;&gt; &gt;      &gt;&gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] mca: base: components_register: registering btl
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; components [binf316:24591] mca: base: components_register: found
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; loaded component openib [binf316:24592] mca: base:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; components_register: registering btl components [binf316:24592] mca:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; base: components_register: found loaded component openib
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] mca: base: components_register: component openib
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; register function successful [binf316:24591] mca: base:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; components_register: found loaded component self [binf316:24591]
&gt; &gt;&gt; &gt;      mca:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; base: components_register: component self register function
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; successful [binf316:24591] mca: base: components_open: opening btl
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; components [binf316:24591] mca: base: components_open: found loaded
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; component openib [binf316:24591] mca: base: components_open:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; component openib open function successful [binf316:24591] mca: base:
&gt; &gt;&gt; &gt;      components_open:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; found loaded component self [binf316:24591] mca: base:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; components_open: component self open function successful
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] mca: base: components_register: component openib
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; register function successful [binf316:24592] mca: base:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; components_register: found loaded component self [binf316:24592]
&gt; &gt;&gt; &gt;      mca:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; base: components_register: component self register function
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; successful [binf316:24592] mca: base: components_open: opening btl
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; components [binf316:24592] mca: base: components_open: found loaded
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; component openib [binf316:24592] mca: base: components_open:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; component openib open function successful [binf316:24592] mca: base:
&gt; &gt;&gt; &gt;      components_open:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; found loaded component self [binf316:24592] mca: base:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; components_open: component self open function successful
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] select: initializing btl component openib
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] select: initializing btl component openib
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_ip.c:364:add_rdma_addr] Adding addr 9.9.10.75
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; (0x4b0a0909) subnet 0x9090000 as mlx4_0:1
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_ip.c:364:add_rdma_addr] Adding addr 9.9.10.75
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; (0x4b0a0909) subnet 0x9090000 as mlx4_0:1
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:686:init_one_port] looking for mlx4_0:1
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; GID index 0
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:717:init_one_port] my IB subnet_id for
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; HCA
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mlx4_0 port 1 is fe80000000000000
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:1294:setup_qps] pp: rd_num is 256 rd_low
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; is
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; 192 rd_win 128 rd_rsv 4
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; rd_low is
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; rd_low is
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; rd_low is
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; b/connect/btl_openib_connect_rdmacm.c:1840:rdmacm_component_query]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; rdmacm_component_query
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_ip.c:132:mca_btl_openib_rdma_get_ipv4addr] Looking
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; for
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mlx4_0:1 in IP address list
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_ip.c:141:mca_btl_openib_rdma_get_ipv4addr] FOUND:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mlx4_0:1 is 9.9.10.75 (0x4b0a0909)
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/connect/btl_openib_connect_rdmacm.c:1750:ipaddrcheck] Found
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; device
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mlx4_0:1 = IP address 9.9.10.75 (0x4b0a0909):51845
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/connect/btl_openib_connect_rdmacm.c:1776:ipaddrcheck] creating
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; new server to listen on 9.9.10.75 (0x4b0a0909):51845 [binf316:24591]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; openib BTL: rdmacm CPC available for use on mlx4_0:1
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/connect/btl_openib_connect_udcm.c:542:udcm_module_init] created
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; cpc module 0x719220 for btl 0x716ee0
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:686:init_one_port] looking for mlx4_0:1
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; GID index 0
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:717:init_one_port] my IB subnet_id for
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; HCA
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mlx4_0 port 1 is fe80000000000000
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/connect/btl_openib_connect_udcm.c:565:udcm_module_init] error
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; creating ud send completion queue
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ring_c:
&gt; &gt;&gt; &gt;      ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734:
&gt; &gt;&gt; &gt;      udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL)
&gt; &gt;&gt; &gt;      == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] *** Process received signal *** [binf316:24591]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Signal: Aborted (6) [binf316:24591] Signal code:  (-6)
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:1294:setup_qps] pp: rd_num is 256 rd_low
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; is
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; 192 rd_win 128 rd_rsv 4
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; rd_low is
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; rd_low is
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; rd_low is
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; b/connect/btl_openib_connect_rdmacm.c:1840:rdmacm_component_query]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; rdmacm_component_query
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_ip.c:132:mca_btl_openib_rdma_get_ipv4addr] Looking
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; for
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mlx4_0:1 in IP address list
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/btl_openib_ip.c:141:mca_btl_openib_rdma_get_ipv4addr] FOUND:
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mlx4_0:1 is 9.9.10.75 (0x4b0a0909)
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/connect/btl_openib_connect_rdmacm.c:1750:ipaddrcheck] Found
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; device
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mlx4_0:1 = IP address 9.9.10.75 (0x4b0a0909):57734
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/connect/btl_openib_connect_rdmacm.c:1776:ipaddrcheck] creating
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; new server to listen on 9.9.10.75 (0x4b0a0909):57734 [binf316:24592]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; openib BTL: rdmacm CPC available for use on mlx4_0:1
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/connect/btl_openib_connect_udcm.c:542:udcm_module_init] created
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; cpc module 0x7190c0 for btl 0x717060
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/ope
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ni b/connect/btl_openib_connect_udcm.c:565:udcm_module_init] error
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; creating ud send completion queue
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ring_c:
&gt; &gt;&gt; &gt;      ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734:
&gt; &gt;&gt; &gt;      udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL)
&gt; &gt;&gt; &gt;      == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] *** Process received signal *** [binf316:24592]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; Signal: Aborted (6) [binf316:24592] Signal code:  (-6)
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [ 0] /lib64/libpthread.so.0(+0xf7c0)[0x7fb35959c7c0]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x7fb359248b55]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [ 2] /lib64/libc.so.6(abort+0x181)[0x7fb35924a131]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [ 3]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /lib64/libc.so.6(__assert_fail+0xf0)[0x7fb359241a10]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [ 4]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; bt l_openib.so(+0x3784b)[0x7fb3548e284b]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [ 5]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; bt l_openib.so(+0x36474)[0x7fb3548e1474]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [ 6]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; bt
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; l_openib.so(ompi_btl_openib_connect_base_select_for_local_port+0x15b
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; )[ 0x7fb3548da316] [binf316:24591] [ 7]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; bt l_openib.so(+0x18817)[0x7fb3548c3817]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [ 8] [binf316:24592] [ 0]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /lib64/libpthread.so.0(+0xf7c0)[0x7f8b6b1707c0]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [ 1]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mc a_btl_base_select+0x1b2)[0x7fb35986ba5e]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [ 9] /lib64/libc.so.6(gsignal+0x35)[0x7f8b6ae1cb55]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [ 2]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; bm l_r2.so(mca_bml_r2_component_init+0x20)[0x7fb354b05d42]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [10] /lib64/libc.so.6(abort+0x181)[0x7f8b6ae1e131]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [ 3]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mc a_bml_base_init+0xd6)[0x7fb35986ad1b]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [11]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; pm l_ob1.so(+0x7739)[0x7fb353a2b739] [binf316:24591] [12]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /lib64/libc.so.6(__assert_fail+0xf0)[0x7f8b6ae15a10]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [ 4]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; bt l_openib.so(+0x3784b)[0x7f8b664b684b]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [ 5]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; bt l_openib.so(+0x36474)[0x7f8b664b5474]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [ 6]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mc a_pml_base_select+0x26e)[0x7fb3598919b2]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [13]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; bt
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; l_openib.so(ompi_btl_openib_connect_base_select_for_local_port+0x15b
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; )[ 0x7f8b664ae316] [binf316:24592] [ 7]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; bt l_openib.so(+0x18817)[0x7f8b66497817]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [ 8]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; om
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; pi_mpi_init+0x5f6)[0x7fb3597fe33c]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [14]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mc a_btl_base_select+0x1b2)[0x7f8b6b43fa5e]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [ 9]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; bm l_r2.so(mca_bml_r2_component_init+0x20)[0x7f8b666d9d42]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [10]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; MP
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; I_Init+0x17e)[0x7fb359833386]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [15] ring_c[0x40096f] [binf316:24591] [16]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mc a_bml_base_init+0xd6)[0x7f8b6b43ed1b]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [11]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; pm l_ob1.so(+0x7739)[0x7f8b655ff739] [binf316:24592] [12]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; mc a_pml_base_select+0x26e)[0x7f8b6b4659b2]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [13]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xe6)[0x7fb359234c36]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24591] [17] ring_c[0x400889] [binf316:24591] *** End of
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; error message ***
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; om
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; pi_mpi_init+0x5f6)[0x7f8b6b3d233c]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [14]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; MP
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; I_Init+0x17e)[0x7f8b6b407386]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [15] ring_c[0x40096f] [binf316:24592] [16]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xe6)[0x7f8b6ae08c36]
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; [binf316:24592] [17] ring_c[0x400889] [binf316:24592] *** End of
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; error message ***
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; --------------------------------------------------------------------
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; --
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ---- mpirun noticed that process rank 0 with PID 24591 on node
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; xxxx316 exited on signal 6 (Aborted).
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; --------------------------------------------------------------------
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; --
&gt; &gt;&gt; &gt;      &gt;&gt;&gt; ----
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;&gt;
&gt; &gt;&gt; &gt;      &gt;
&gt; &gt;&gt; &gt;      &gt; _______________________________________________
&gt; &gt;&gt; &gt;      &gt; users mailing list
&gt; &gt;&gt; &gt;      &gt; users_at_[hidden]
&gt; &gt;&gt; &gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; &gt;      &gt; Link to this post:
&gt; &gt;&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/users/2014/06/24632.php">http://www.open-mpi.org/community/lists/users/2014/06/24632.php</a>
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;      --
&gt; &gt;&gt; &gt;      Jeff Squyres
&gt; &gt;&gt; &gt;      jsquyres_at_[hidden]
&gt; &gt;&gt; &gt;      For corporate legal information go to:
&gt; &gt;&gt; &gt;      <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;&gt; &gt;
&gt; &gt;&gt; &gt;      _______________________________________________
&gt; &gt;&gt; &gt;      users mailing list
&gt; &gt;&gt; &gt;      users_at_[hidden]
&gt; &gt;&gt; &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; &gt;      Link to this post:
&gt; &gt;&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/users/2014/06/24633.php">http://www.open-mpi.org/community/lists/users/2014/06/24633.php</a>
&gt; &gt;&gt; 
&gt; &gt;&gt; &gt; _______________________________________________
&gt; &gt;&gt; &gt; users mailing list
&gt; &gt;&gt; &gt; users_at_[hidden]
&gt; &gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24634.php">http://www.open-mpi.org/community/lists/users/2014/06/24634.php</a>
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24636.php">http://www.open-mpi.org/community/lists/users/2014/06/24636.php</a>
&gt; &gt;&gt; 
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24637.php">http://www.open-mpi.org/community/lists/users/2014/06/24637.php</a>
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24638.php">http://www.open-mpi.org/community/lists/users/2014/06/24638.php</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24639.php">http://www.open-mpi.org/community/lists/users/2014/06/24639.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24641.php">Gus Correa: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24639.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24639.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24641.php">Gus Correa: "Re: [OMPI users] openib segfaults with Torque"</a>
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

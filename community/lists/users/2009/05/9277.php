<?
$subject_val = "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  9 08:46:22 2009" -->
<!-- isoreceived="20090509124622" -->
<!-- sent="Sat, 9 May 2009 08:46:16 -0400" -->
<!-- isosent="20090509124616" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)" -->
<!-- id="9AD36BAC-F980-466D-BE8B-70947F307C23_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A02DE7D.7060709_at_mc.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-09 08:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9278.php">Venu Gopal: "[OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Previous message:</strong> <a href="9276.php">Jeff Squyres: "Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<li><strong>In reply to:</strong> <a href="9253.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like it could get complex.  I've filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/1916">https://svn.open-mpi.org/trac/ompi/ticket/1916</a> 
<br>
&nbsp;&nbsp;to followup on this issue.
<br>
<p>I'll exchange some off-list mails with Ken about this topic to try to  
<br>
figure it out; we'll post the final resolution back here to the list.
<br>
<p>On May 7, 2009, at 9:13 AM, Ken Cain wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2009, at 4:45 PM, Ken Cain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible for OMPI to generate output at runtime indicating  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what btl(s) will be used?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At present, we only have a fairly lame system to do this.  We  
</span><br>
<span class="quotelev2">&gt;&gt; wanted to
</span><br>
<span class="quotelev2">&gt;&gt; print out a connection map in v1.3, but it didn't happen -- this  
</span><br>
<span class="quotelev2">&gt;&gt; feature
</span><br>
<span class="quotelev2">&gt;&gt; has been re-targeted for v1.5:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/1207">https://svn.open-mpi.org/trac/ompi/ticket/1207</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's unfortunately a surprisingly complex issue; one reason that it's
</span><br>
<span class="quotelev2">&gt;&gt; &quot;hard&quot; is that OMPI lazily makes connections and supports striping
</span><br>
<span class="quotelev2">&gt;&gt; across multiple networks.  Hence, to make a completely accurate map,
</span><br>
<span class="quotelev2">&gt;&gt; OMPI has to guarantee to make *all* network connections and then  
</span><br>
<span class="quotelev2">&gt;&gt; gather
</span><br>
<span class="quotelev2">&gt;&gt; all the connection information back to MPI_COMM_WORLD rank 0 to  
</span><br>
<span class="quotelev2">&gt;&gt; print out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What OMPI does today is that if you specifically ask for a high-speed
</span><br>
<span class="quotelev2">&gt;&gt; network and we're unable to find one, we'll warn about it (because if
</span><br>
<span class="quotelev2">&gt;&gt; you asked for it, you likely really want to use it -- if there isn't
</span><br>
<span class="quotelev2">&gt;&gt; one, that's likely a problem).  So if you:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun --mca btl openib,sm,self,tcp ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And OMPI doesn't find any active OpenFabrics ports, it'll print a  
</span><br>
<span class="quotelev2">&gt;&gt; warning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Removing tcp below brings me back to the original simple command  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that fails with the output shown above (indicating that openib btl  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be disabled):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like you're having two problems:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. The RDMACM connector in OMPI decides that it can't be used:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self -- 
</span><br>
<span class="quotelev2">&gt;&gt; hostfile
</span><br>
<span class="quotelev2">&gt;&gt; ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024 &gt; outfile1 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Local host:           aae1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Local device:         cxgb3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Can you re-run this scenario with --mca btl_base_verbose 50?  I'd
</span><br>
<span class="quotelev2">&gt;&gt; like to see why the RDMA CM CPC disqualified itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, thank you very much for taking a look at this. I have re-run  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; increased verbosity in three different scenarios:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) simple command line with verbosity
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl_base_verbose 50 -- 
</span><br>
<span class="quotelev1">&gt; mca
</span><br>
<span class="quotelev1">&gt; btl_openib_verbose 50 --mca btl openib,self --hostfile
</span><br>
<span class="quotelev1">&gt; ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024 &gt; ~/outfile3 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; interesting output below indicates rdmacm IP address not found on port
</span><br>
<span class="quotelev1">&gt; (showing output of one rank below, but we get the same output by the
</span><br>
<span class="quotelev1">&gt; other MPI rank as well):
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30924] openib BTL: oob CPC only supported on InfiniBand;  
</span><br>
<span class="quotelev2">&gt;&gt; skipped on device cxgb3_0
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30924] openib BTL: xoob CPC only supported with XRC receive  
</span><br>
<span class="quotelev2">&gt;&gt; queues; skipped on device cxgb3_0
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30924] openib BTL: rdmacm CPC available for use on cxgb3_0
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30924] openib BTL: oob CPC only supported on InfiniBand;  
</span><br>
<span class="quotelev2">&gt;&gt; skipped on device cxgb3_0
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30924] openib BTL: xoob CPC only supported with XRC receive  
</span><br>
<span class="quotelev2">&gt;&gt; queues; skipped on device cxgb3_0
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30924] openib BTL: rdmacm IP address not found on port
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30924] openib BTL: rdmacm CPC unavailable for use on cxgb3_0;  
</span><br>
<span class="quotelev2">&gt;&gt; skipped
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30924] select: init of component openib returned failure
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30924] select: module openib unloaded
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) more complex command line requesting to use cxgb3_0:1 (the one I
</span><br>
<span class="quotelev1">&gt; believe is physically connected + configured with an IP address):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self --mca
</span><br>
<span class="quotelev1">&gt; btl_base_verbose 50 --mca btl_openib_verbose 50 --mca
</span><br>
<span class="quotelev1">&gt; btl_openib_if_include cxgb3_0:1 --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_device_type iwarp --mca btl_openib_max_btls 1 --mca
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned 1 --hostfile ~/1usrv_ompi_machfile -np 2 ./NPmpi - 
</span><br>
<span class="quotelev1">&gt; p0 -l
</span><br>
<span class="quotelev1">&gt; 1 -u 1024 &gt; ~/outfile4_cxgb3_0_port1 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; output (one rank shown, both print the same pattern):
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30929] select: initializing btl component openib
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30929] openib BTL: rdmacm CPC available for use on cxgb3_0
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30929] select: init of component openib returned success
</span><br>
<span class="quotelev1">&gt; but then!
</span><br>
<span class="quotelev2">&gt;&gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) more complex command line requesting to use cxgb3_0:2 (the one I
</span><br>
<span class="quotelev1">&gt; believe is not physically connected and not configured with an IP  
</span><br>
<span class="quotelev1">&gt; address):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self --mca
</span><br>
<span class="quotelev1">&gt; btl_base_verbose 50 --mca btl_openib_verbose 50 --mca
</span><br>
<span class="quotelev1">&gt; btl_openib_if_include cxgb3_0:2 --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_device_type iwarp --mca btl_openib_max_btls 1 --mca
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned 1 --hostfile ~/1usrv_ompi_machfile -np 2 ./NPmpi - 
</span><br>
<span class="quotelev1">&gt; p0 -l
</span><br>
<span class="quotelev1">&gt; 1 -u 1024 &gt; ~/outfile4_cxgb3_0_port2 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; output (exhibited by both MPI ranks):
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30949] select: initializing btl component openib
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30949] openib BTL: rdmacm IP address not found on port
</span><br>
<span class="quotelev2">&gt;&gt; [aae4:30949] openib BTL: rdmacm CPC unavailable for use on cxgb3_0;  
</span><br>
<span class="quotelev2">&gt;&gt; skipped
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. But if you specify the port and to only use the rdmacm connector
</span><br>
<span class="quotelev2">&gt;&gt; (CPC), the RDMA CM CPC *does* become available (which is just weird  
</span><br>
<span class="quotelev2">&gt;&gt; -- I
</span><br>
<span class="quotelev2">&gt;&gt; don't know why that would be different than the above case...), but  
</span><br>
<span class="quotelev2">&gt;&gt; then
</span><br>
<span class="quotelev2">&gt;&gt; it decides that it cannot connect:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self,sm -- 
</span><br>
<span class="quotelev2">&gt;&gt; mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_base_verbose 10 --mca btl_openib_verbose 10 --mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_if_include cxgb3_0:1 --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_openib_device_type iwarp --mca btl_openib_max_btls 1 --mca
</span><br>
<span class="quotelev2">&gt;&gt; mpi_leave_pinned 1 --hostfile ~/1usrv_ompi_machfile -np 2 ./NPmpi - 
</span><br>
<span class="quotelev2">&gt;&gt; p0 -l
</span><br>
<span class="quotelev2">&gt;&gt; 1 -u 1024 &gt; ~/outfile2 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...lots of output...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aae4:19426] openib BTL: rdmacm CPC available for use on cxgb3_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...lots of output...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indicated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Process 1 ([[3107,1],0]) is on host: aae4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Process 2 ([[3107,1],1]) is on host: aae1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  BTLs attempted: openib self sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Very strange.  Can you send the output ibv_devinfo -v from both  
</span><br>
<span class="quotelev2">&gt;&gt; nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure here it is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [aae4:~] ibv_devinfo -v
</span><br>
<span class="quotelev1">&gt; hca_id: cxgb3_0
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         7.1.0
</span><br>
<span class="quotelev1">&gt;         node_guid:                      0007:4305:58dd:0000
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 0007:4305:58dd:0000
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x1425
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 49
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0x1
</span><br>
<span class="quotelev1">&gt;         board_id:                       1425.31
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  2
</span><br>
<span class="quotelev1">&gt;         max_mr_size:                    0x100000000
</span><br>
<span class="quotelev1">&gt;         page_size_cap:                  0xffff000
</span><br>
<span class="quotelev1">&gt;         max_qp:                         32736
</span><br>
<span class="quotelev1">&gt;         max_qp_wr:                      1023
</span><br>
<span class="quotelev1">&gt;         device_cap_flags:               0x00228000
</span><br>
<span class="quotelev1">&gt;         max_sge:                        4
</span><br>
<span class="quotelev1">&gt;         max_sge_rd:                     1
</span><br>
<span class="quotelev1">&gt;         max_cq:                         32767
</span><br>
<span class="quotelev1">&gt;         max_cqe:                        8192
</span><br>
<span class="quotelev1">&gt;         max_mr:                         32768
</span><br>
<span class="quotelev1">&gt;         max_pd:                         32767
</span><br>
<span class="quotelev1">&gt;         max_qp_rd_atom:                 8
</span><br>
<span class="quotelev1">&gt;         max_ee_rd_atom:                 0
</span><br>
<span class="quotelev1">&gt;         max_res_rd_atom:                0
</span><br>
<span class="quotelev1">&gt;         max_qp_init_rd_atom:            8
</span><br>
<span class="quotelev1">&gt;         max_ee_init_rd_atom:            0
</span><br>
<span class="quotelev1">&gt;         atomic_cap:                     ATOMIC_NONE (0)
</span><br>
<span class="quotelev1">&gt;         max_ee:                         0
</span><br>
<span class="quotelev1">&gt;         max_rdd:                        0
</span><br>
<span class="quotelev1">&gt;         max_mw:                         0
</span><br>
<span class="quotelev1">&gt;         max_raw_ipv6_qp:                0
</span><br>
<span class="quotelev1">&gt;         max_raw_ethy_qp:                0
</span><br>
<span class="quotelev1">&gt;         max_mcast_grp:                  0
</span><br>
<span class="quotelev1">&gt;         max_mcast_qp_attach:            0
</span><br>
<span class="quotelev1">&gt;         max_total_mcast_qp_attach:      0
</span><br>
<span class="quotelev1">&gt;         max_ah:                         0
</span><br>
<span class="quotelev1">&gt;         max_fmr:                        0
</span><br>
<span class="quotelev1">&gt;         max_srq:                        0
</span><br>
<span class="quotelev1">&gt;         max_pkeys:                      0
</span><br>
<span class="quotelev1">&gt;         local_ca_ack_delay:             0
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                         port_lid:               0
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         max_msg_sz:             0xffffffff
</span><br>
<span class="quotelev1">&gt;                         port_cap_flags:         0x009f0000
</span><br>
<span class="quotelev1">&gt;                         max_vl_num:             invalid value (0)
</span><br>
<span class="quotelev1">&gt;                         bad_pkey_cntr:          0x0
</span><br>
<span class="quotelev1">&gt;                         qkey_viol_cntr:         0x0
</span><br>
<span class="quotelev1">&gt;                         sm_sl:                  0
</span><br>
<span class="quotelev1">&gt;                         pkey_tbl_len:           1
</span><br>
<span class="quotelev1">&gt;                         gid_tbl_len:            1
</span><br>
<span class="quotelev1">&gt;                         subnet_timeout:         0
</span><br>
<span class="quotelev1">&gt;                         init_type_reply:        0
</span><br>
<span class="quotelev1">&gt;                         active_width:           4X (2)
</span><br>
<span class="quotelev1">&gt;                         active_speed:           5.0 Gbps (2)
</span><br>
<span class="quotelev1">&gt;                         phys_state:             invalid physical  
</span><br>
<span class="quotelev1">&gt; state (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 port:   2
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                         port_lid:               0
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         max_msg_sz:             0xffffffff
</span><br>
<span class="quotelev1">&gt;                         port_cap_flags:         0x009f0000
</span><br>
<span class="quotelev1">&gt;                         max_vl_num:             invalid value (0)
</span><br>
<span class="quotelev1">&gt;                         bad_pkey_cntr:          0x0
</span><br>
<span class="quotelev1">&gt;                         qkey_viol_cntr:         0x0
</span><br>
<span class="quotelev1">&gt;                         sm_sl:                  0
</span><br>
<span class="quotelev1">&gt;                         pkey_tbl_len:           1
</span><br>
<span class="quotelev1">&gt;                         gid_tbl_len:            1
</span><br>
<span class="quotelev1">&gt;                         subnet_timeout:         0
</span><br>
<span class="quotelev1">&gt;                         init_type_reply:        0
</span><br>
<span class="quotelev1">&gt;                         active_width:           4X (2)
</span><br>
<span class="quotelev1">&gt;                         active_speed:           5.0 Gbps (2)
</span><br>
<span class="quotelev1">&gt;                         phys_state:             invalid physical  
</span><br>
<span class="quotelev1">&gt; state (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [aae1:~] ibv_devinfo -v
</span><br>
<span class="quotelev1">&gt; hca_id: cxgb3_0
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         7.1.0
</span><br>
<span class="quotelev1">&gt;         node_guid:                      0007:4305:45ae:0000
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 0007:4305:45ae:0000
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x1425
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 49
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0x1
</span><br>
<span class="quotelev1">&gt;         board_id:                       1425.31
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  2
</span><br>
<span class="quotelev1">&gt;         max_mr_size:                    0x100000000
</span><br>
<span class="quotelev1">&gt;         page_size_cap:                  0xffff000
</span><br>
<span class="quotelev1">&gt;         max_qp:                         32736
</span><br>
<span class="quotelev1">&gt;         max_qp_wr:                      1023
</span><br>
<span class="quotelev1">&gt;         device_cap_flags:               0x00228000
</span><br>
<span class="quotelev1">&gt;         max_sge:                        4
</span><br>
<span class="quotelev1">&gt;         max_sge_rd:                     1
</span><br>
<span class="quotelev1">&gt;         max_cq:                         32767
</span><br>
<span class="quotelev1">&gt;         max_cqe:                        8192
</span><br>
<span class="quotelev1">&gt;         max_mr:                         32768
</span><br>
<span class="quotelev1">&gt;         max_pd:                         32767
</span><br>
<span class="quotelev1">&gt;         max_qp_rd_atom:                 8
</span><br>
<span class="quotelev1">&gt;         max_ee_rd_atom:                 0
</span><br>
<span class="quotelev1">&gt;         max_res_rd_atom:                0
</span><br>
<span class="quotelev1">&gt;         max_qp_init_rd_atom:            8
</span><br>
<span class="quotelev1">&gt;         max_ee_init_rd_atom:            0
</span><br>
<span class="quotelev1">&gt;         atomic_cap:                     ATOMIC_NONE (0)
</span><br>
<span class="quotelev1">&gt;         max_ee:                         0
</span><br>
<span class="quotelev1">&gt;         max_rdd:                        0
</span><br>
<span class="quotelev1">&gt;         max_mw:                         0
</span><br>
<span class="quotelev1">&gt;         max_raw_ipv6_qp:                0
</span><br>
<span class="quotelev1">&gt;         max_raw_ethy_qp:                0
</span><br>
<span class="quotelev1">&gt;         max_mcast_grp:                  0
</span><br>
<span class="quotelev1">&gt;         max_mcast_qp_attach:            0
</span><br>
<span class="quotelev1">&gt;         max_total_mcast_qp_attach:      0
</span><br>
<span class="quotelev1">&gt;         max_ah:                         0
</span><br>
<span class="quotelev1">&gt;         max_fmr:                        0
</span><br>
<span class="quotelev1">&gt;         max_srq:                        0
</span><br>
<span class="quotelev1">&gt;         max_pkeys:                      0
</span><br>
<span class="quotelev1">&gt;         local_ca_ack_delay:             0
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                         port_lid:               0
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         max_msg_sz:             0xffffffff
</span><br>
<span class="quotelev1">&gt;                         port_cap_flags:         0x009f0000
</span><br>
<span class="quotelev1">&gt;                         max_vl_num:             invalid value (0)
</span><br>
<span class="quotelev1">&gt;                         bad_pkey_cntr:          0x0
</span><br>
<span class="quotelev1">&gt;                         qkey_viol_cntr:         0x0
</span><br>
<span class="quotelev1">&gt;                         sm_sl:                  0
</span><br>
<span class="quotelev1">&gt;                         pkey_tbl_len:           1
</span><br>
<span class="quotelev1">&gt;                         gid_tbl_len:            1
</span><br>
<span class="quotelev1">&gt;                         subnet_timeout:         0
</span><br>
<span class="quotelev1">&gt;                         init_type_reply:        0
</span><br>
<span class="quotelev1">&gt;                         active_width:           4X (2)
</span><br>
<span class="quotelev1">&gt;                         active_speed:           5.0 Gbps (2)
</span><br>
<span class="quotelev1">&gt;                         phys_state:             invalid physical  
</span><br>
<span class="quotelev1">&gt; state (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 port:   2
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                         port_lid:               0
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         max_msg_sz:             0xffffffff
</span><br>
<span class="quotelev1">&gt;                         port_cap_flags:         0x009f0000
</span><br>
<span class="quotelev1">&gt;                         max_vl_num:             invalid value (0)
</span><br>
<span class="quotelev1">&gt;                         bad_pkey_cntr:          0x0
</span><br>
<span class="quotelev1">&gt;                         qkey_viol_cntr:         0x0
</span><br>
<span class="quotelev1">&gt;                         sm_sl:                  0
</span><br>
<span class="quotelev1">&gt;                         pkey_tbl_len:           1
</span><br>
<span class="quotelev1">&gt;                         gid_tbl_len:            1
</span><br>
<span class="quotelev1">&gt;                         subnet_timeout:         0
</span><br>
<span class="quotelev1">&gt;                         init_type_reply:        0
</span><br>
<span class="quotelev1">&gt;                         active_width:           4X (2)
</span><br>
<span class="quotelev1">&gt;                         active_speed:           5.0 Gbps (2)
</span><br>
<span class="quotelev1">&gt;                         phys_state:             invalid physical  
</span><br>
<span class="quotelev1">&gt; state (0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This message is intended only for the designated recipient(s) and may
</span><br>
<span class="quotelev1">&gt; contain confidential or proprietary information of Mercury Computer
</span><br>
<span class="quotelev1">&gt; Systems, Inc. This message is solely intended to facilitate business
</span><br>
<span class="quotelev1">&gt; discussions and does not constitute an express or implied offer to  
</span><br>
<span class="quotelev1">&gt; sell
</span><br>
<span class="quotelev1">&gt; or purchase any products, services, or support. Any commitments must  
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev1">&gt; made in writing and signed by duly authorized representatives of each
</span><br>
<span class="quotelev1">&gt; party.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9278.php">Venu Gopal: "[OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Previous message:</strong> <a href="9276.php">Jeff Squyres: "Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<li><strong>In reply to:</strong> <a href="9253.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
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

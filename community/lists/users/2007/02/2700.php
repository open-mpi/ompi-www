<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb 14 19:27:26 2007" -->
<!-- isoreceived="20070215002726" -->
<!-- sent="Wed, 14 Feb 2007 19:27:09 -0500" -->
<!-- isosent="20070215002709" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with HPLinpack over myrinet MX-10G" -->
<!-- id="84019A93-EFAD-4E10-854B-2AB3F1133A67_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2453e2900702140933r3905d80cj2a46448441f9b5e0_at_mail.gmail.com" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-14 19:27:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2701.php">George Bosilca: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>Previous message:</strong> <a href="2699.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2693.php">Alex Tumanov: "[OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2701.php">George Bosilca: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>Reply:</strong> <a href="2701.php">George Bosilca: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2007, at 12:33 PM, Alex Tumanov wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently tried running HPLinpack, compiled with OMPI, over myrinet
</span><br>
<span class="quotelev1">&gt; MX interconnect. Running a simple hello world program works, but XHPL
</span><br>
<span class="quotelev1">&gt; fails with an error occurring when it tries to MPI_Send:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun -np 4 -H l0-0,c0-2 --prefix $MPIHOME --mca btl mx,self
</span><br>
<p>If you are running more than one process per node, you may need to  
<br>
add shmem to mx,self. Also, OMPI offers another MX via pml.  
<br>
Performance was better using pml but George may be getting the btl  
<br>
closer.
<br>
<p>Also, try with and without MX_RCACHE=1 (or MX_RCACHE=2 for the pml)  
<br>
in your environment.
<br>
<p><span class="quotelev1">&gt; /opt/hpl/openmpi-hpl/bin/xhpl
</span><br>
<span class="quotelev1">&gt; [l0-0.local:04707] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev1">&gt; [l0-0.local:04707] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [l0-0.local:04707] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [l0-0.local:04707] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 4706 on node &quot;l0-0&quot; exited  
</span><br>
<span class="quotelev1">&gt; on signal 15.
</span><br>
<span class="quotelev1">&gt; 3 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun -np 4 -H l0-0,c0-2 --prefix $MPIHOME --mca btl mx,self ~/ 
</span><br>
<span class="quotelev1">&gt; atumanov/hello
</span><br>
<span class="quotelev1">&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev1">&gt; Process 1 on compute-0-2.local out of 4
</span><br>
<span class="quotelev1">&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev1">&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev1">&gt; Process 0 on l0-0.local out of 4
</span><br>
<span class="quotelev1">&gt; Process 3 on compute-0-2.local out of 4
</span><br>
<span class="quotelev1">&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev1">&gt; Process 2 on l0-0.local out of 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output from mx_info is as follows:
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt; MX Version: 1.2.0g
</span><br>
<p>We have a new version, 1.2.0h, that we recommend all users to upgrade  
<br>
to.
<br>
<p><span class="quotelev1">&gt; MX Build: root_at_[hidden]:/home/install/rocks/src/roll/ 
</span><br>
<span class="quotelev1">&gt; myrinet_mx10g/BUILD/mx-1.2.0g
</span><br>
<span class="quotelev1">&gt; Wed Jan 17 18:51:12 PST 2007
</span><br>
<span class="quotelev1">&gt; 1 Myrinet board installed.
</span><br>
<span class="quotelev1">&gt; The MX driver is configured to support up to 4 instances and 1024  
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Instance #0:  299.8 MHz LANai, PCI-E x8, 2 MB SRAM
</span><br>
<span class="quotelev1">&gt;         Status:         Running, P0: Link up
</span><br>
<span class="quotelev1">&gt;         MAC Address:    00:60:dd:47:7d:73
</span><br>
<span class="quotelev1">&gt;         Product code:   10G-PCIE-8A-C
</span><br>
<span class="quotelev1">&gt;         Part number:    09-03362
</span><br>
<span class="quotelev1">&gt;         Serial number:  314581
</span><br>
<span class="quotelev1">&gt;         Mapper:         00:60:dd:47:7d:73, version = 0x591b1c74,  
</span><br>
<span class="quotelev1">&gt; configured
</span><br>
<span class="quotelev1">&gt;         Mapped hosts:   2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                  
</span><br>
<span class="quotelev1">&gt; ROUTE COUNT
</span><br>
<span class="quotelev1">&gt; INDEX    MAC ADDRESS     HOST NAME                                P0
</span><br>
<span class="quotelev1">&gt; -----    -----------     ---------                                ---
</span><br>
<span class="quotelev1">&gt;    0) 00:60:dd:47:7d:73 compute-0-2.local:0                     D 0,0
</span><br>
<span class="quotelev1">&gt;    1) 00:60:dd:47:7d:72 l0-0.local:0                        1,0
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are several questions. First of all, am I able to initiate OMPI
</span><br>
<span class="quotelev1">&gt; over MX jobs from the headnode to be executed on 2 compute nodes even
</span><br>
<span class="quotelev1">&gt; though the headnode does not have MX hardware?
</span><br>
<p>Any OMPI people have comments?
<br>
<p><span class="quotelev1">&gt; Secondly, looking at
</span><br>
<span class="quotelev1">&gt; next to last line in the mx_info output, what does  letter 'D' stand
</span><br>
<span class="quotelev1">&gt; for?
</span><br>
<p>This means that while a route to this node was loaded at some point  
<br>
in the past, the most recent batch of route loads were from a map  
<br>
that did not contain this node.  This could be caused by the node  
<br>
going down, losing connectivity, or just having its fma crash or be  
<br>
killed.  Note that in the last case, the node is still on the fabric,  
<br>
the old routes likely still work, but it just has no fma running.
<br>
<p><span class="quotelev1">&gt; Third, the MX interconnect support OMPI provides - does it mean
</span><br>
<span class="quotelev1">&gt; MX-2G or there's support for MX-10G as well?
</span><br>
<p>Both. If you build OMPI with shared library support, you can change  
<br>
between MX-10G and MX-2G via LD_LIBRARY_PATH.
<br>
<p>Scott
<br>
<p><span class="quotelev1">&gt; If anybody has encountered a similar problem and was able to
</span><br>
<span class="quotelev1">&gt; circumvent it please do let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks for your time and for bringing the community together.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Alex.
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
<li><strong>Next message:</strong> <a href="2701.php">George Bosilca: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>Previous message:</strong> <a href="2699.php">Jeff Squyres: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2693.php">Alex Tumanov: "[OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2701.php">George Bosilca: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<li><strong>Reply:</strong> <a href="2701.php">George Bosilca: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
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

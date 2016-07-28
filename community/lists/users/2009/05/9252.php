<?
$subject_val = "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 07:57:55 2009" -->
<!-- isoreceived="20090507115755" -->
<!-- sent="Thu, 7 May 2009 07:57:47 -0400" -->
<!-- isosent="20090507115747" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)" -->
<!-- id="1BECB72C-51EB-423D-9A6F-96DBFD442BC3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A01F6CE.4050005_at_mc.com" -->
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
<strong>Date:</strong> 2009-05-07 07:57:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9253.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9251.php">Josh Hursey: "Re: [OMPI users] Problem with Filem"</a>
<li><strong>In reply to:</strong> <a href="9243.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9253.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 6, 2009, at 4:45 PM, Ken Cain wrote:
<br>
<p><span class="quotelev1">&gt; Is it possible for OMPI to generate output at runtime indicating  
</span><br>
<span class="quotelev1">&gt; exactly
</span><br>
<span class="quotelev1">&gt; what btl(s) will be used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>At present, we only have a fairly lame system to do this.  We wanted  
<br>
to print out a connection map in v1.3, but it didn't happen -- this  
<br>
feature has been re-targeted for v1.5:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1207">https://svn.open-mpi.org/trac/ompi/ticket/1207</a>
<br>
<p>It's unfortunately a surprisingly complex issue; one reason that it's  
<br>
&quot;hard&quot; is that OMPI lazily makes connections and supports striping  
<br>
across multiple networks.  Hence, to make a completely accurate map,  
<br>
OMPI has to guarantee to make *all* network connections and then  
<br>
gather all the connection information back to MPI_COMM_WORLD rank 0 to  
<br>
print out.
<br>
<p>What OMPI does today is that if you specifically ask for a high-speed  
<br>
network and we're unable to find one, we'll warn about it (because if  
<br>
you asked for it, you likely really want to use it -- if there isn't  
<br>
one, that's likely a problem).  So if you:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca btl openib,sm,self,tcp ...
<br>
<p>And OMPI doesn't find any active OpenFabrics ports, it'll print a  
<br>
warning.
<br>
<p><span class="quotelev1">&gt; Removing tcp below brings me back to the original simple command line
</span><br>
<span class="quotelev1">&gt; that fails with the output shown above (indicating that openib btl  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; be disabled):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self -- 
</span><br>
<span class="quotelev1">&gt; hostfile
</span><br>
<span class="quotelev1">&gt; ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It looks like you're having two problems:
<br>
<p>1. The RDMACM connector in OMPI decides that it can't be used:
<br>
<p>mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self --hostfile
<br>
~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l 1 -u 1024 &gt; outfile1 2&gt;&amp;1
<br>
<p><span class="quotelev1"> &gt;  
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1"> &gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1"> &gt; support) will be disabled for this port.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;   Local host:           aae1
</span><br>
<span class="quotelev1"> &gt;   Local device:         cxgb3_0
</span><br>
<span class="quotelev1"> &gt;   CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev1"> &gt;  
</span><br>
--------------------------------------------------------------------------
<br>
<p>*** Can you re-run this scenario with --mca btl_base_verbose 50?  I'd  
<br>
like to see why the RDMA CM CPC disqualified itself.
<br>
<p>2. But if you specify the port and to only use the rdmacm connector  
<br>
(CPC), the RDMA CM CPC *does* become available (which is just weird --  
<br>
I don't know why that would be different than the above case...), but  
<br>
then it decides that it cannot connect:
<br>
<p>mpirun --mca orte_base_help_aggregate 0 --mca btl openib,self,sm --mca
<br>
btl_base_verbose 10 --mca btl_openib_verbose 10 --mca
<br>
btl_openib_if_include cxgb3_0:1 --mca btl_openib_cpc_include rdmacm
<br>
--mca btl_openib_device_type iwarp --mca btl_openib_max_btls 1 --mca
<br>
mpi_leave_pinned 1 --hostfile ~/1usrv_ompi_machfile -np 2 ./NPmpi -p0 -l
<br>
1 -u 1024 &gt; ~/outfile2 2&gt;&amp;1
<br>
<p><span class="quotelev1"> &gt;...lots of output...
</span><br>
<span class="quotelev1"> &gt; [aae4:19426] openib BTL: rdmacm CPC available for use on cxgb3_0
</span><br>
<span class="quotelev1"> &gt;...lots of output...
</span><br>
<span class="quotelev1"> &gt;  
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1"> &gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1"> &gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1"> &gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1"> &gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1"> &gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;   Process 1 ([[3107,1],0]) is on host: aae4
</span><br>
<span class="quotelev1"> &gt;   Process 2 ([[3107,1],1]) is on host: aae1
</span><br>
<span class="quotelev1"> &gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1"> &gt;  
</span><br>
--------------------------------------------------------------------------
<br>
<p>*** Very strange.  Can you send the output ibv_devinfo -v from both  
<br>
nodes?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9253.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9251.php">Josh Hursey: "Re: [OMPI users] Problem with Filem"</a>
<li><strong>In reply to:</strong> <a href="9243.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9253.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
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

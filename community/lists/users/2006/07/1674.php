<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 18:53:57 2006" -->
<!-- isoreceived="20060720225357" -->
<!-- sent="Thu, 20 Jul 2006 18:53:46 -0400" -->
<!-- isosent="20060720225346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What Really Happens During OpenMPI MPI_INIT?" -->
<!-- id="C0E581BA.B1C4%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060717043721.30550.qmail_at_web30706.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 18:53:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1675.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1673.php">Jeff Squyres: "Re: [OMPI users] BTL devices"</a>
<li><strong>In reply to:</strong> <a href="1633.php">Mahesh Barve: "[OMPI users] What Really Happens During OpenMPI MPI_INIT?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/17/06 12:37 AM, &quot;Mahesh Barve&quot; &lt;barvemahesh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;   Can anyone please enlighten us about what really
</span><br>
<span class="quotelev1">&gt; happens in MPI_init() in openMPI?
</span><br>
<p>This is quite a complicated question.  :-)
<br>
<p><span class="quotelev1">&gt;   More specifically i am interested in knowing
</span><br>
<span class="quotelev1">&gt; 1.Functions that needs to accomplished during
</span><br>
<span class="quotelev1">&gt; MPI_init()
</span><br>
<span class="quotelev1">&gt; 2.What has already been implemented in openMPI
</span><br>
<span class="quotelev1">&gt; MPI_Init
</span><br>
<span class="quotelev1">&gt; 2. The routines called/invoked that perform these
</span><br>
<span class="quotelev1">&gt; functions
</span><br>
<p>Many, many things happen in MPI_INIT.  Here's a sample:
<br>
<p>- setup the lowest layer of the system (OPAL)
<br>
- setup the run-time environment (ORTE)
<br>
&nbsp;&nbsp;- find out our rank in MPI_COMM_WORLD
<br>
&nbsp;&nbsp;- find out how many peers we have and who they are
<br>
&nbsp;&nbsp;- find out how to contact our peers
<br>
- setup the progression engine
<br>
- setup processor affinity (if desired)
<br>
- setup all the various component frameworks to implement much of the MPI
<br>
functionality
<br>
&nbsp;&nbsp;- setup our MPI point-to-point channels
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- publish information on how peer processes can contact me
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- receive information on how to contact peer processes
<br>
&nbsp;&nbsp;- setup MPI collectives
<br>
&nbsp;&nbsp;- setup MPI topologies
<br>
&nbsp;&nbsp;- ...etc.
<br>
- setup all the MPI handle processing (MPI_Comm, MPI_Datatype, etc.)
<br>
&nbsp;&nbsp;- initialize pre-defined handles
<br>
&nbsp;&nbsp;- create fortran translation tables
<br>
- ...etc.
<br>
<p>I would suggest that you look through ompi/runtime/ompi_mpi_init.c.  It's
<br>
basically a big dispatch function of all the events that occur during
<br>
MPI_INIT (i.e., both MPI_INIT and MPI_INIT_THREAD -- ompi/mpi/c/init.c and
<br>
ompi/mpi/c/init_thread.c, respectively -- call this function to do all the
<br>
work).  
<br>
<p>The list of things that it does is quite explicit.  Note that the ordering
<br>
of functions in this function is extremely important -- almost all the
<br>
functions are strictly ordered because of explicit or implicit dependencies.
<br>
<p>Does that help?
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1675.php">Chengwen Chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1673.php">Jeff Squyres: "Re: [OMPI users] BTL devices"</a>
<li><strong>In reply to:</strong> <a href="1633.php">Mahesh Barve: "[OMPI users] What Really Happens During OpenMPI MPI_INIT?"</a>
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

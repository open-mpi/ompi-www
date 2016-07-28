<?
$subject_val = "Re: [OMPI users] MPI adopt-a-group: a question and status report";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 12:02:03 2008" -->
<!-- isoreceived="20080804160203" -->
<!-- sent="Mon, 4 Aug 2008 12:01:52 -0400" -->
<!-- isosent="20080804160152" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI adopt-a-group: a question and status report" -->
<!-- id="95268ECE-384F-40AF-8B8D-41057C0A588B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4895EC7B.2060408_at_3dB-Labs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI adopt-a-group: a question and status report<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 12:01:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6266.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6264.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6253.php">Mark Borgerding: "[OMPI users] MPI adopt-a-group: a question and status report"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 3, 2008, at 1:35 PM, Mark Borgerding wrote:
<br>
<p><span class="quotelev1">&gt; First of all, my simple question:
</span><br>
<span class="quotelev1">&gt; In what files can I find the source code for &quot;mca_oob.oob_send&quot; and  
</span><br>
<span class="quotelev1">&gt; &quot;mca_oob.oob_recv&quot;?  I'm having a hard time following the  
</span><br>
<span class="quotelev1">&gt; initialization code that populates the struct of callbacks.
</span><br>
<p>We actually only have one &quot;oob&quot; component that uses TCP  
<br>
communications.  We have long thought of writing others (e.g., a  
<br>
native OOB for OpenFabrics kinds of networks), but never really gotten  
<br>
around to it.  So those function pointers point to the various  
<br>
functions in orte/mca/oob/tcp/oob_tcp.c.  On the OMPI SVN trunk, the  
<br>
module struct starts at line 136; it's those functions in particular.
<br>
<p><span class="quotelev1">&gt; Next, the context of the question:
</span><br>
<span class="quotelev1">&gt; I've been trying to find a way to make a plain old process start and  
</span><br>
<span class="quotelev1">&gt; then participate in an MPI Group spread across a cluster.  Let me  
</span><br>
<span class="quotelev1">&gt; try to use the local dialect and express my goal in terms I am  
</span><br>
<span class="quotelev1">&gt; likely to misuse: I want to make a singleton MPI process spawn and  
</span><br>
<span class="quotelev1">&gt; establish an intercommunicator with another MPI world.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the list of things that have not worked:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using MPI_Comm_spawn -- I've been told this is working in the 1.3  
</span><br>
<span class="quotelev1">&gt; cvs snapshots, but not in any stable release.
</span><br>
<span class="quotelev1">&gt; The symptom is that the call to MPI_Comm_spawn complains about not  
</span><br>
<span class="quotelev1">&gt; having a hostfile.  For the full history, see ompi-users thread &quot;How  
</span><br>
<span class="quotelev1">&gt; to specify hosts for MPI_Comm_spawn&quot; for details.
</span><br>
<p>If you could verify that they do work for you on OMPI SVN trunk  
<br>
nightly tarballs, that would be most helpful.
<br>
<p><span class="quotelev1">&gt; Forking the parent process *before* it enters any MPI calls ( to  
</span><br>
<span class="quotelev1">&gt; hopefully avoid environmental pitfalls Jeff Squyres warned of).
</span><br>
<span class="quotelev1">&gt;   Parent process calls MPI_Init to become the MPI singleton, then  
</span><br>
<span class="quotelev1">&gt; tries to establish an intercommunicator with the MPI group that is  
</span><br>
<span class="quotelev1">&gt; getting spawned at the same time.
</span><br>
<p>Just FYI, a minor terminology correction: the MPI processes that are  
<br>
spawned have a common MPI communicator.  A communicator is an MPI  
<br>
group + a unique communication context.  For example, two different  
<br>
communicators can share the same group, but will always have different  
<br>
communication contexts.  So what you send on communicator A will never  
<br>
be received on communicator B, even if the source and destination  
<br>
processes are the same.  My point: although the phrase has no  
<br>
definition specified by the MPI spec, we usually say &quot;MPI job&quot; to mean  
<br>
a bunch of MPI processes that share a common MPI_COMM_WORLD.  So it's  
<br>
[usually] more natural to say &quot;...the spawned MPI job...&quot;
<br>
<p><span class="quotelev1">&gt;   Forked child processes overlays the process of mpirun via execlp  
</span><br>
<span class="quotelev1">&gt; to start a &quot;normal&quot;  MPI group. I've tried two different methods for  
</span><br>
<span class="quotelev1">&gt; establishing the intercomm. Both methods hang indefinitely and use  
</span><br>
<span class="quotelev1">&gt; lots of cpu doing nothing.
</span><br>
<span class="quotelev1">&gt; Fork Method 1: MPI_Open_port+ MPI_Comm_accept on one side,  
</span><br>
<span class="quotelev1">&gt; MPI_Comm_connect on the other.
</span><br>
<span class="quotelev1">&gt;   The two sides hang in the MPI_Comm_accept and MPI_Comm_connect. I  
</span><br>
<span class="quotelev1">&gt; did not pursue it deeper than that.
</span><br>
<p>Weird.
<br>
<p><span class="quotelev1">&gt; Fork Method 2: tcp socket establishment, followed by MPI_Comm_join  
</span><br>
<span class="quotelev1">&gt; on both sides.
</span><br>
<span class="quotelev1">&gt; Both sides hang in the call to MPI_Comm_join.  Upon further  
</span><br>
<span class="quotelev1">&gt; inspection and code-hacking, I've determined they can successfully  
</span><br>
<span class="quotelev1">&gt; trade names &quot;0.0.0&quot; and &quot;0.1.0&quot; and both sides then call  
</span><br>
<span class="quotelev1">&gt; ompi_comm_connect_accept.  Inside omp_comm_connect_accept, both  
</span><br>
<span class="quotelev1">&gt; sides call orte_rml.send_buffer; one side finishes the call, while  
</span><br>
<span class="quotelev1">&gt; the other gets blocked inside oob_send.
</span><br>
<span class="quotelev1">&gt; The side that did not get blocked moves on to call  
</span><br>
<span class="quotelev1">&gt; orte_rml.recv_buffer .  It gets blocked inside oob_recv.
</span><br>
<p>I think that Ralph can shed light on this one -- we may not have good  
<br>
support for COMM_JOIN in the v1.2 series without a persistent  
<br>
orted...?  It's a global process naming issue, IIRC.
<br>
<p><span class="quotelev1">&gt; OOB == Out of band sockets?  If so, why?
</span><br>
<p><p>OOB is OMPI's out-of-band mechanism.  We use it for bootstrapping and  
<br>
other information exchange between MPI processes (e.g., the  
<br>
information exchange during MPI_INIT and MPI_FINALIZE).  It's not a  
<br>
public API, and we change it between releases.  I wouldn't recommend  
<br>
using it in general MPI applications; it does not exist in other MPI  
<br>
implementations.
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
<li><strong>Next message:</strong> <a href="6266.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6264.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6253.php">Mark Borgerding: "[OMPI users] MPI adopt-a-group: a question and status report"</a>
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

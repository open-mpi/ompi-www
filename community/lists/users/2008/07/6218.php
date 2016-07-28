<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 11:50:06 2008" -->
<!-- isoreceived="20080730155006" -->
<!-- sent="Wed, 30 Jul 2008 11:49:21 -0400" -->
<!-- isosent="20080730154921" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="7E3BCE5E-39FC-4B23-8F2B-6F0E78C1AB07_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="489084F0.2080709_at_3dB-Labs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to specify hosts for MPI_Comm_spawn<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 11:49:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6219.php">Robert Kubrick: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6217.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6217.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6219.php">Robert Kubrick: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2008, at 11:12 AM, Mark Borgerding wrote:
<br>
<p><span class="quotelev1">&gt; I appreciate the suggestion about running a daemon on each of the  
</span><br>
<span class="quotelev1">&gt; remote nodes, but wouldn't I kind of be reinventing the wheel there?  
</span><br>
<span class="quotelev1">&gt; Process management is one of the things I'd like to be able to count  
</span><br>
<span class="quotelev1">&gt; on ORTE for.
</span><br>
<p>Keep in mind that the daemons here are not for process management --  
<br>
they're for name service.
<br>
<p><span class="quotelev1">&gt; Would the following work to give the parent process an intercomm  
</span><br>
<span class="quotelev1">&gt; with each child?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; parent i.e. my non-mpirun-started process  calls  MPI_Init then  
</span><br>
<span class="quotelev1">&gt; MPI_Open_port
</span><br>
<span class="quotelev1">&gt; parent spawns mpirun command via system/exec to create the remote  
</span><br>
<span class="quotelev1">&gt; children . The name from MPI_Open_port is placed in the environment.
</span><br>
<span class="quotelev1">&gt; parent calls MPI_Comm_accept (once for each child?)
</span><br>
<span class="quotelev1">&gt; all children call MPI_connect to the name
</span><br>
<p>It may be problematic to call system/exec in some environments (e.g.,  
<br>
if using OpenFabrics networks).  Bad Things can happen.
<br>
<p><span class="quotelev1">&gt; I think this would give one intercommunicator back to the parent for  
</span><br>
<span class="quotelev1">&gt; each remote process (not ideal, but I can worry about broadcast data  
</span><br>
<span class="quotelev1">&gt; later)
</span><br>
<span class="quotelev1">&gt; The remote processes can communicate to each other through  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually when I think through the details, much of this is pretty  
</span><br>
<span class="quotelev1">&gt; similar to the daemon MPI_Publish_name+MPI_Lookup_name approach.   
</span><br>
<span class="quotelev1">&gt; The main difference being which processes come first.
</span><br>
<p>Instead of having the framework call MPI_Init in your plugin, can you  
<br>
plugin system/exec &quot;mpirun -np 1 my_parent_app&quot;?  And perhaps use a  
<br>
pipe (or socket or some other IPC) to communicate between the  
<br>
framework process and my_parent_app?  I realize it's a kludgey  
<br>
workaround, but it looks like we clearly have a bug in the 1.2 series  
<br>
with singletons in this area...
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
<li><strong>Next message:</strong> <a href="6219.php">Robert Kubrick: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6217.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6217.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6219.php">Robert Kubrick: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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

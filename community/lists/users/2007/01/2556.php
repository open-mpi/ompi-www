<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 20:38:48 2007" -->
<!-- isoreceived="20070130013848" -->
<!-- sent="Mon, 29 Jan 2007 20:38:40 -0500" -->
<!-- isosent="20070130013840" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon" -->
<!-- id="A39A0177-A2CF-4C50-BB70-0CA7A72D300E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45B14464.9060800_at_dreamworks.com" -->
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
<strong>Date:</strong> 2007-01-29 20:38:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2557.php">Jeff Squyres: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2555.php">Heywood, Todd: "[OMPI users] SGE and OpenMPI integration"</a>
<li><strong>In reply to:</strong> <a href="2516.php">Evan Smyth: "[OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2558.php">Ralph Castain: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>Reply:</strong> <a href="2558.php">Ralph Castain: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 19, 2007, at 5:21 PM, Evan Smyth wrote:
<br>
<p><span class="quotelev1">&gt; I had been using MPICH and its serv_p4 daemon to speed startup times.
</span><br>
<span class="quotelev1">&gt; I've decided to try OpenMPI (primarily for the fault-tolerance  
</span><br>
<span class="quotelev1">&gt; features)
</span><br>
<span class="quotelev1">&gt; and would like to know what the equivalent of the serv_p4 daemon is.
</span><br>
<p>We don't yet have one.  &quot;Persistent&quot; daemon operations is planned and  
<br>
somewhat functional, but I wouldn't call it robust yet.
<br>
<p>Ralph will likely correct some inaccuracies in the above statement.  :-)
<br>
<p><span class="quotelev1">&gt; It appears as though the orted daemon may be what I am after but I  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev1">&gt; quite understand it. I used to run serv_p4 with a specific port number
</span><br>
<span class="quotelev1">&gt; and then pass a -p4ssport &lt;portnumber&gt; flag to mpirun. The daemon  
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev1">&gt; remain running on each node and each new mpirun job would simply
</span><br>
<span class="quotelev1">&gt; communicate directly through a port with the already running  
</span><br>
<span class="quotelev1">&gt; instance of
</span><br>
<span class="quotelev1">&gt; the daemon on that machine and would save the mpirun from having to
</span><br>
<span class="quotelev1">&gt; launch an rsh. This was great for reducing startup and run times  
</span><br>
<span class="quotelev1">&gt; due to
</span><br>
<span class="quotelev1">&gt; rsh issues. The orted daemon does support a -persistent flag which  
</span><br>
<span class="quotelev1">&gt; seems
</span><br>
<span class="quotelev1">&gt; relevant, but I cannot find a real usage example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I expect that most of the readers will find this to be a trivial  
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; but I'm hoping someone can give me an openmpi equivalent usage  
</span><br>
<span class="quotelev1">&gt; example.
</span><br>
<p>We usually rely on resource managers (e.g., slurm and the like) for  
<br>
fast statrtup, which is why persistent daemon-based operation wasn't  
<br>
high on the priority list.
<br>
<p>LAM, for example, has a persistent daemon mode which works quite  
<br>
nicely.  But LAM lacks many of the advanced features in OMPI's MPI  
<br>
layer.
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
<li><strong>Next message:</strong> <a href="2557.php">Jeff Squyres: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2555.php">Heywood, Todd: "[OMPI users] SGE and OpenMPI integration"</a>
<li><strong>In reply to:</strong> <a href="2516.php">Evan Smyth: "[OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2558.php">Ralph Castain: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>Reply:</strong> <a href="2558.php">Ralph Castain: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
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

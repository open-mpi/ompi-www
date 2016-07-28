<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 20:48:04 2007" -->
<!-- isoreceived="20070130014804" -->
<!-- sent="Mon, 29 Jan 2007 18:47:58 -0700" -->
<!-- isosent="20070130014758" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon" -->
<!-- id="C1E3F1DE.166D%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A39A0177-A2CF-4C50-BB70-0CA7A72D300E_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-29 20:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2559.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="2557.php">Jeff Squyres: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2556.php">Jeff Squyres: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/29/07 6:38 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 19, 2007, at 5:21 PM, Evan Smyth wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I had been using MPICH and its serv_p4 daemon to speed startup times.
</span><br>
<span class="quotelev2">&gt;&gt; I've decided to try OpenMPI (primarily for the fault-tolerance
</span><br>
<span class="quotelev2">&gt;&gt; features)
</span><br>
<span class="quotelev2">&gt;&gt; and would like to know what the equivalent of the serv_p4 daemon is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't yet have one.  &quot;Persistent&quot; daemon operations is planned and
</span><br>
<span class="quotelev1">&gt; somewhat functional, but I wouldn't call it robust yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph will likely correct some inaccuracies in the above statement.  :-)
</span><br>
<p>Ah now, would I do that?? :-)
<br>
<p>Actually, I concur with Jeff's assessment. We really don't have that
<br>
&quot;virtual machine&quot; functionality yet. I've worked on it a little, but am
<br>
probably a few weeks away from completing it. It won't be in the 1.2
<br>
release, but (hopefully) will be in an update to that release in the
<br>
not-too-distant future.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It appears as though the orted daemon may be what I am after but I
</span><br>
<span class="quotelev2">&gt;&gt; don't
</span><br>
<span class="quotelev2">&gt;&gt; quite understand it. I used to run serv_p4 with a specific port number
</span><br>
<span class="quotelev2">&gt;&gt; and then pass a -p4ssport &lt;portnumber&gt; flag to mpirun. The daemon
</span><br>
<span class="quotelev2">&gt;&gt; would
</span><br>
<span class="quotelev2">&gt;&gt; remain running on each node and each new mpirun job would simply
</span><br>
<span class="quotelev2">&gt;&gt; communicate directly through a port with the already running
</span><br>
<span class="quotelev2">&gt;&gt; instance of
</span><br>
<span class="quotelev2">&gt;&gt; the daemon on that machine and would save the mpirun from having to
</span><br>
<span class="quotelev2">&gt;&gt; launch an rsh. This was great for reducing startup and run times
</span><br>
<span class="quotelev2">&gt;&gt; due to
</span><br>
<span class="quotelev2">&gt;&gt; rsh issues. The orted daemon does support a -persistent flag which
</span><br>
<span class="quotelev2">&gt;&gt; seems
</span><br>
<span class="quotelev2">&gt;&gt; relevant, but I cannot find a real usage example.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I expect that most of the readers will find this to be a trivial
</span><br>
<span class="quotelev2">&gt;&gt; problem
</span><br>
<span class="quotelev2">&gt;&gt; but I'm hoping someone can give me an openmpi equivalent usage
</span><br>
<span class="quotelev2">&gt;&gt; example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We usually rely on resource managers (e.g., slurm and the like) for
</span><br>
<span class="quotelev1">&gt; fast statrtup, which is why persistent daemon-based operation wasn't
</span><br>
<span class="quotelev1">&gt; high on the priority list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LAM, for example, has a persistent daemon mode which works quite
</span><br>
<span class="quotelev1">&gt; nicely.  But LAM lacks many of the advanced features in OMPI's MPI
</span><br>
<span class="quotelev1">&gt; layer.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2559.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="2557.php">Jeff Squyres: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2556.php">Jeff Squyres: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
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

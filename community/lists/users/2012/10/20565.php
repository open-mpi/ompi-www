<?
$subject_val = "[OMPI users] Tip for HPC cluster admins";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 28 10:08:40 2012" -->
<!-- isoreceived="20121028140840" -->
<!-- sent="Sun, 28 Oct 2012 10:08:35 -0400" -->
<!-- isosent="20121028140835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] Tip for HPC cluster admins" -->
<!-- id="4EA48B79-8372-4AD8-A00F-C3E72F07381A_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Tip for HPC cluster admins<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-28 10:08:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20566.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20564.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20577.php">John Hearns: "Re: [OMPI users] Tip for HPC cluster admins"</a>
<li><strong>Reply:</strong> <a href="20577.php">John Hearns: "Re: [OMPI users] Tip for HPC cluster admins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know this is a little off-topic, but I thought I'd pass on some hard-won knowledge to HPC cluster administrators...
<br>
<p>Short version:
<br>
--------------
<br>
<p>You should probably either disable the Linux OOM killer on your cluster (even if you have swap disabled on your compute nodes), or configure it so that it won't kill your critical cluster infrastructure (e.g., system-level daemons).  
<br>
<p>More details can be found on my blog: <a href="http://blogs.cisco.com/performance/why-mpi-is-good-for-you-part-2/">http://blogs.cisco.com/performance/why-mpi-is-good-for-you-part-2/</a>
<br>
<p>More detail:
<br>
------------
<br>
<p>I recently learned the hard way that the Linux Out Of Memory (&quot;OOM&quot;) killer can really hose your cluster.  In my case, I had a bug in a development version of Open MPI that caused mpirun to consume ginormous amounts of memory and ultimately invoke the OOM killer.
<br>
<p>The gist of it is that the OOM killer, by default, will kill any random process in an attempt to get more memory.  In my case, it killed the MySQL daemon, which is the database that my cluster manager (Bright) uses for critical information.  This left my SQL tables on disk in an unrecoverable state.
<br>
<p>This made me be a very sad panda.  :-(
<br>
<p>Moral of the story: you should probably either disable the OOM killer, or configure it so that it won't kill your critical cluster infrastructure daemons.  Maybe I'm a cluster admin n00b for not having done this in the first place, but I thought I'd pass on the knowledge nonetheless.
<br>
<p>Sidenote: the above-mentioned bug was never in any released version of Open MPI.  But the point is that *any* Linux userspace process can still trigger OOM, and potentially do Very Bad Things.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20566.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20564.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20577.php">John Hearns: "Re: [OMPI users] Tip for HPC cluster admins"</a>
<li><strong>Reply:</strong> <a href="20577.php">John Hearns: "Re: [OMPI users] Tip for HPC cluster admins"</a>
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

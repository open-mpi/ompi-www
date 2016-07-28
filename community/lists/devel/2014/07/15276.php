<?
$subject_val = "[OMPI devel] trunk failures this morning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 11:52:52 2014" -->
<!-- isoreceived="20140728155252" -->
<!-- sent="Mon, 28 Jul 2014 15:52:51 +0000" -->
<!-- isosent="20140728155251" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk failures this morning" -->
<!-- id="1EDCFD38-43C1-47AE-9BF2-8A42748C273B_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk failures this morning<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 11:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15277.php">Jeff Squyres (jsquyres): "[OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15275.php">George Bosilca: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know we expect failures because of the OPAL moves this weekend.  Here's a failure in shared memory -- can someone take a look?
<br>
<p>-----
<br>
[8:52] savbu-usnic-a:~/s/o/examples 
<br>
$ mpirun --np 2 hostname
<br>
mpi001
<br>
mpi001
<br>
[8:52] savbu-usnic-a:~/s/o/examples 
<br>
$ mpirun --np 2 --mca btl sm,self ring_c
<br>
[mpi001:31121] shmem: mmap: an error occurred while determining whether or not not yet defined/shared_mem_pool.mpi001 could be created.
<br>
[mpi001:31121] create_and_attach: unable to create shared memory BTL coordinating strucure :: size 67108864 
<br>
[mpi001:31120] shmem: mmap: an error occurred while determining whether or not not yet defined/shared_mem_pool.mpi001 could be created.
<br>
[mpi001:31120] create_and_attach: unable to create shared memory BTL coordinating strucure :: size 67108864 
<br>
...etc.
<br>
-----
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
<li><strong>Next message:</strong> <a href="15277.php">Jeff Squyres (jsquyres): "[OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15275.php">George Bosilca: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
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

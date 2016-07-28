<?
$subject_val = "[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 15:59:41 2016" -->
<!-- isoreceived="20160616195941" -->
<!-- sent="Thu, 16 Jun 2016 15:59:35 -0400" -->
<!-- isosent="20160616195935" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?" -->
<!-- id="0B97558E6915A6419306E91FD1DACA0E5AFF8FA05B_at_NRCCENMB1.nrc.ca" -->
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
<strong>Subject:</strong> [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 15:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29471.php">Alex Kaiser: "[OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29469.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem,	but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29483.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Reply:</strong> <a href="29483.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Maybe reply:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Maybe reply:</strong> <a href="29549.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>After reading a little the FAQ on the methods used by Open MPI to deal with memory registration (or pinning) with Infiniband adapter, it seems that we could avoid all the overhead and complexity of memory registration/deregistration, registration cache access and update, memory management (ummunotify) in addition to allowing a better overlap of the communications with the computations (we could let the communication hardware do its job independently without resorting to registration/transfer/deregistration pipelines) by simply having all user process memory registered all the time.
<br>
<p>Of course a configuration like that is not appropriate in a general setting (ex: a desktop environment) as it would make swapping almost impossible.
<br>
<p>But in the context of an HPC node where the processes are not supposed to swap and the OS not overcommit memory, not being able to swap doesn't appear to be a problem.
<br>
<p>Moreover since the maximal total memory used per process is often predefined at the application start as a resource specified to the queuing system, the OS could easily keep a defined amount of extra memory for its own need instead of swapping out user process memory.
<br>
<p>I guess that specialized (non-Linux) compute node OS does this.
<br>
<p>But is it possible and does it make sense with Linux ?
<br>
<p>Thanks,
<br>
<p>Martin Audet
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29470/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29471.php">Alex Kaiser: "[OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29469.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem,	but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29483.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Reply:</strong> <a href="29483.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Maybe reply:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Maybe reply:</strong> <a href="29549.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
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

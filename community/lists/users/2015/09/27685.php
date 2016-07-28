<?
$subject_val = "[OMPI users] Using POSIX shared memory as send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 14:38:42 2015" -->
<!-- isoreceived="20150927183842" -->
<!-- sent="Sun, 27 Sep 2015 20:38:37 +0200" -->
<!-- isosent="20150927183837" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="[OMPI users] Using POSIX shared memory as send buffer" -->
<!-- id="560837AD.7070307_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Using POSIX shared memory as send buffer<br>
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-27 14:38:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27686.php">Filippo Spiga: "Re: [OMPI users] RSH agent working but no output"</a>
<li><strong>Previous message:</strong> <a href="27684.php">Ralph Castain: "Re: [OMPI users] RSH agent working but no output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Reply:</strong> <a href="27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, everyone
<br>
<p>I am struggling a bit with IB performance when sending data from a POSIX 
<br>
shared memory region (/dev/shm). The memory is shared among many MPI 
<br>
processes within the same compute node. Essentially, I see a bit hectic 
<br>
performance, but it seems that my code it is roughly twice slower than 
<br>
when using a usual, malloced send buffer.
<br>
<p>I was wondering - has any of you had experience with sending SHM over 
<br>
Infiniband? why would I see so much worse results? Is it e.g., because 
<br>
this memory cannot be pinned and OpenMPI is reallocating it? Or is it 
<br>
some OS peculiarity?
<br>
<p>I would appreciate any hints at all. Thanks a lot !
<br>
<p>Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27686.php">Filippo Spiga: "Re: [OMPI users] RSH agent working but no output"</a>
<li><strong>Previous message:</strong> <a href="27684.php">Ralph Castain: "Re: [OMPI users] RSH agent working but no output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Reply:</strong> <a href="27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
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

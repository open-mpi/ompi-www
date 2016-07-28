<?
$subject_val = "[OMPI users] MPI one-sided communication questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 02:53:05 2014" -->
<!-- isoreceived="20140421065305" -->
<!-- sent="Mon, 21 Apr 2014 08:53:02 +0200" -->
<!-- isosent="20140421065302" -->
<!-- name="Tobias Burnus" -->
<!-- email="burnus_at_[hidden]" -->
<!-- subject="[OMPI users] MPI one-sided communication questions" -->
<!-- id="5354C04E.5010907_at_net-b.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] MPI one-sided communication questions<br>
<strong>From:</strong> Tobias Burnus (<em>burnus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 02:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24239.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24237.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24251.php">Nathan Hjelm: "Re: [OMPI users] MPI one-sided communication questions"</a>
<li><strong>Reply:</strong> <a href="24251.php">Nathan Hjelm: "Re: [OMPI users] MPI one-sided communication questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I would like to do one-sided communication as implementation of a 
<br>
Fortran coarray library. &quot;MPI provides three synchronization mechanisms:
<br>
<p>&quot;1. The MPI_WIN_FENCE collective synchronization call supports a simple 
<br>
synchronization pattern that is often used in parallel computations: 
<br>
namely a loosely-synchronous model, where global computation phases 
<br>
alternate with global communication phases. [...]
<br>
&quot;2. The four functions MPI_WIN_START, MPI_WIN_COMPLETE, MPI_WIN_POST, 
<br>
and MPI_WIN_WAIT [...]
<br>
&quot;3. Finally, shared lock access is provided by the functions 
<br>
MPI_WIN_LOCK, MPI_WIN_LOCK_ALL, MPI_WIN_UNLOCK, and MPI_WIN_UNLOCK_ALL.&quot; 
<br>
(MPIv3, p.438)
<br>
<p>I would like to use mechanism 1, but leaving the Win_lock/Win_unlock 
<br>
away does not work. How is one supposed to use the first mechanism? (I 
<br>
haven't tried to specify the &quot;no_locks&quot; for &quot;info&quot;, but that shouldn't 
<br>
matter, should it?)
<br>
<p>Follow up question: Is it semantically correct to have concurrent write 
<br>
access to adjacent array elements with method 1? I mean something like 
<br>
using an array of single-byte elements (integer(kind=1)) where process 2 
<br>
sets (MPI_Win_put) the elements with odd array indexes and process 3 the 
<br>
ones with even indexes of an array located in process 1? By itself, one 
<br>
writes to different memory locations, but the hardware cannot typically 
<br>
not update single bytes atomically in the memory but only chunks of  
<br>
(e.g.) 4 bytes. The problem is that this access is semantically 
<br>
permitted by Fortran while at the same time, I do not want to do 
<br>
unnecessary locking. In practical terms, accessing the same window/array 
<br>
for MPI_Win_put simultaneously will occur for halo exchange - but it is 
<br>
likely to not access directly adjacent memory.
<br>
<p><p>Secondly, I probably missed something but is it possible to access 
<br>
arbitrary remote memory without requiring to call something collectively 
<br>
(such as MPI_Win_create)? The usage case is a derived type (C 
<br>
equivalent: struct) which contains a pointer. The derived type/struct 
<br>
(being a coarray in my case) has an associated MPI_Win - and I can hence 
<br>
obtain the address to which the pointer component points to. That 
<br>
address I would then like to use for MPI_Put/MPI_Get - without support 
<br>
of the remove side and, in particular, without calling a collective on 
<br>
all all processes. Any idea how to do this?
<br>
<p>The Fortran case is simply:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;coarray[remote_process_idx]%pointer_comp = [1, 2, 3, 4]
<br>
where one assigns data to a component of a coarray - but as 
<br>
&quot;pointer_comp&quot; is not in the window, one has to get first the remote 
<br>
address of the pointer and then can use it to set the value of the pointer.
<br>
<p><p>Tobias
<br>
<p><p>Tobias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24239.php">Muhammad Ansar Javed: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>Previous message:</strong> <a href="24237.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24251.php">Nathan Hjelm: "Re: [OMPI users] MPI one-sided communication questions"</a>
<li><strong>Reply:</strong> <a href="24251.php">Nathan Hjelm: "Re: [OMPI users] MPI one-sided communication questions"</a>
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

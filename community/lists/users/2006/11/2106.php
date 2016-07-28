<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  1 18:34:26 2006" -->
<!-- isoreceived="20061101233426" -->
<!-- sent="Wed, 1 Nov 2006 16:34:20 -0700" -->
<!-- isosent="20061101233420" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI users] Error or warning message when launching job" -->
<!-- id="BFF5205B-F4D2-497E-95C1-086AA796CCDE_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-01 18:34:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2107.php">Brian W. Barrett: "Re: [OMPI users] Error or warning message when launching job"</a>
<li><strong>Previous message:</strong> <a href="2105.php">Jeff Squyres: "Re: [OMPI users] OMPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2107.php">Brian W. Barrett: "Re: [OMPI users] Error or warning message when launching job"</a>
<li><strong>Reply:</strong> <a href="2107.php">Brian W. Barrett: "Re: [OMPI users] Error or warning message when launching job"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm testing out a new OpenMPI 1.1.2 build on a machine here at LANL  
<br>
and get the following at launch:
<br>
<p>% mpirun -np 4 IMB-MPI1
<br>
[n254:07650] pls_bproc_orted: openpty failed, using pipes instead
<br>
[n255:07651] pls_bproc_orted: openpty failed, using pipes instead
<br>
[n254:07650] pls_bproc_orted: openpty failed, using pipes instead
<br>
.
<br>
.
<br>
.
<br>
<p><p>The code then runs fine with no other errors.
<br>
<p>What is the meaning of those 3 lines?
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-4: HPC Environments: Parallel Tools Team
Los Alamos National Laboratory
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2106/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2107.php">Brian W. Barrett: "Re: [OMPI users] Error or warning message when launching job"</a>
<li><strong>Previous message:</strong> <a href="2105.php">Jeff Squyres: "Re: [OMPI users] OMPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2107.php">Brian W. Barrett: "Re: [OMPI users] Error or warning message when launching job"</a>
<li><strong>Reply:</strong> <a href="2107.php">Brian W. Barrett: "Re: [OMPI users] Error or warning message when launching job"</a>
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

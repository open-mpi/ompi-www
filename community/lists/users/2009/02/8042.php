<?
$subject_val = "Re: [OMPI users] OpenMPI and Valgrind";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 11:50:18 2009" -->
<!-- isoreceived="20090212165018" -->
<!-- sent="Thu, 12 Feb 2009 16:50:07 +0000" -->
<!-- isosent="20090212165007" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Valgrind" -->
<!-- id="82d52253323009053eef887d33dbf6a5_at_pittman.co.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200902121053.23425.techlist_at_pathfinder.phys.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and Valgrind<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 11:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8043.php">jobic: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Previous message:</strong> <a href="8041.php">Reuben D. Budiardja: "[OMPI users] OpenMPI and Valgrind"</a>
<li><strong>In reply to:</strong> <a href="8041.php">Reuben D. Budiardja: "[OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Reply:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12 Feb 2009, at 15:53, Reuben D. Budiardja wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am having problem that if a program is compiled with OpenMPI, 
</span><br>
<span class="quotelev1">&gt; Valgrind
</span><br>
<span class="quotelev1">&gt; doesn't work correctly, i.e: it does not show the memory leak like it
</span><br>
<span class="quotelev1">&gt; supposed too. The same test program compiled with regular &quot;gfortran&quot; 
</span><br>
<span class="quotelev1">&gt; and run
</span><br>
<span class="quotelev1">&gt; under Valgrind will show the memory leak.
</span><br>
<p>Not only will Valgrind not show the memory leak but it also won't show 
<br>
buffer over-runs, as it doesn't understand the allocator it'll assume 
<br>
all memory handled by the allocator is read/writeable even if it's 
<br>
redzone or hasn't been allocated.
<br>
<p><span class="quotelev1">&gt; I search the list archive and found this post here, which exactly 
</span><br>
<span class="quotelev1">&gt; described my
</span><br>
<span class="quotelev1">&gt; problem: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/07/6058.php">http://www.open-mpi.org/community/lists/users/2008/07/6058.php</a>,
</span><br>
<span class="quotelev1">&gt; but I don't understand if there is resolution to it.
</span><br>
<p>It's worth reading the whole of that thread, in particular
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2008/07/6076.php">http://www.open-mpi.org/community/lists/users/2008/07/6076.php</a>
<br>
<p><span class="quotelev1">&gt; I am using OpenMPI-1.2.8 with all the default configure option. What 
</span><br>
<span class="quotelev1">&gt; should I
</span><br>
<span class="quotelev1">&gt; do to be able use Valgrind with program compiled by OpenMPI ?
</span><br>
<p>&nbsp;From memory and reading the above links (i.e. untested advice):
<br>
1) Use OpenMPI 1.3 where the default is not to include this.
<br>
2) Configure Open MPI 1.2.8 with the --disable-memory-manager option
<br>
3) Compile you application without the -lopen-pal otion.  In practice 
<br>
this means running &quot;mpicc --show&quot; and cut-and pasting the underlying 
<br>
compile line without the -lopen-pal into your application build 
<br>
procedure.  I was able to do this for hello world but I can image it'll 
<br>
be a real PITA for anything larger.
<br>
<p>I'm experimenting with Open MPI and valgrind at this time, if you are 
<br>
still having problems I may be able to help further.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8043.php">jobic: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>Previous message:</strong> <a href="8041.php">Reuben D. Budiardja: "[OMPI users] OpenMPI and Valgrind"</a>
<li><strong>In reply to:</strong> <a href="8041.php">Reuben D. Budiardja: "[OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Reply:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
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

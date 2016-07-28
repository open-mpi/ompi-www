<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 21 15:08:56 2007" -->
<!-- isoreceived="20070821190856" -->
<!-- sent="Tue, 21 Aug 2007 15:08:51 -0400" -->
<!-- isosent="20070821190851" -->
<!-- name="Josh Aune" -->
<!-- email="luken_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi realloc() holding onto memory when glibc doesn't" -->
<!-- id="98a233180708211208l2f98e31avfe628ab41fad957c_at_mail.gmail.com" -->
<!-- charset="ANSI_X3.4-1968" -->
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
<strong>From:</strong> Josh Aune (<em>luken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-21 15:08:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3898.php">Lev Givon: "[OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<li><strong>Previous message:</strong> <a href="3896.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3912.php">Josh Aune: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>Reply:</strong> <a href="3912.php">Josh Aune: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The realloc included with openmpi 1.2.3 is not releasing memory to the
<br>
OS and is causing apps to go into swap.  Attached is a little test
<br>
program that shows calls to realloc not releasing the memory when
<br>
compiled using mpicc, but when compiled directly with gcc (or icc)
<br>
calling realloc() frees any memory no longer needed.
<br>
<p>Is this a bug?
<br>
<p>If not, how can I force openmpi to free the memory that the allocator
<br>
is sitting on?
<br>
<p>Thanks,
<br>
Josh
<br>
<p>Sample output.  Note the delta between 'total' and 'malloc held' when
<br>
compiled with mpicc and how the gcc compiled versions track perfectly.
<br>
<p>$ mpicc -o realloc_test realloc_test.c
<br>
$ ./realloc_test
<br>
...
<br>
malloc/realloc/free test
<br>
malloc()    50 MB, total   50 MB, malloc held   50 MB
<br>
realloc()    1 MB, total    1 MB, malloc held   50 MB
<br>
malloc()    50 MB, total   51 MB, malloc held  100 MB
<br>
realloc()    1 MB, total    2 MB, malloc held  100 MB
<br>
malloc()    50 MB, total   52 MB, malloc held  150 MB
<br>
realloc()    1 MB, total    3 MB, malloc held  150 MB
<br>
malloc()    50 MB, total   53 MB, malloc held  200 MB
<br>
realloc()    1 MB, total    4 MB, malloc held  200 MB
<br>
malloc()    50 MB, total   54 MB, malloc held  250 MB
<br>
realloc()    1 MB, total    5 MB, malloc held  250 MB
<br>
free()       1 MB, total    4 MB, malloc held  200 MB
<br>
free()       1 MB, total    3 MB, malloc held  150 MB
<br>
free()       1 MB, total    2 MB, malloc held  100 MB
<br>
free()       1 MB, total    1 MB, malloc held   50 MB
<br>
free()       1 MB, total    0 MB, malloc held    0 MB
<br>
...
<br>
<p>$ gcc -o realloc_test realloc_test.c
<br>
$ ./realloc_test
<br>
...
<br>
malloc/realloc/free test
<br>
malloc()    50 MB, total   50 MB, malloc held   50 MB
<br>
realloc()    1 MB, total    1 MB, malloc held    1 MB
<br>
malloc()    50 MB, total   51 MB, malloc held   51 MB
<br>
realloc()    1 MB, total    2 MB, malloc held    2 MB
<br>
malloc()    50 MB, total   52 MB, malloc held   52 MB
<br>
realloc()    1 MB, total    3 MB, malloc held    3 MB
<br>
malloc()    50 MB, total   53 MB, malloc held   53 MB
<br>
realloc()    1 MB, total    4 MB, malloc held    4 MB
<br>
malloc()    50 MB, total   54 MB, malloc held   54 MB
<br>
realloc()    1 MB, total    5 MB, malloc held    5 MB
<br>
free()       1 MB, total    4 MB, malloc held    4 MB
<br>
free()       1 MB, total    3 MB, malloc held    3 MB
<br>
free()       1 MB, total    2 MB, malloc held    2 MB
<br>
free()       1 MB, total    1 MB, malloc held    1 MB
<br>
free()       1 MB, total    0 MB, malloc held    0 MB
<br>
...
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3897/realloc_test.c">realloc_test.c</a>
</ul>
<!-- attachment="realloc_test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3898.php">Lev Givon: "[OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<li><strong>Previous message:</strong> <a href="3896.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3912.php">Josh Aune: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<li><strong>Reply:</strong> <a href="3912.php">Josh Aune: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
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

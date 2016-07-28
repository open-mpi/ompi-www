<?
$subject_val = "[OMPI users] Misuse or bug with nested types?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 22 10:07:54 2013" -->
<!-- isoreceived="20130422140754" -->
<!-- sent="Mon, 22 Apr 2013 10:07:42 -0400" -->
<!-- isosent="20130422140742" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] Misuse or bug with nested types?" -->
<!-- id="5175442E.3020601_at_giref.ulaval.ca" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Misuse or bug with nested types?<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-22 10:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21759.php">George Bosilca: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Previous message:</strong> <a href="21757.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a problem receiving a vector of a MPI_datatype constructed via 
<br>
MPI_Type_create_struct.
<br>
<p>It looks like MPI_Send or MPI_Recv doesn't works as expected: some parts 
<br>
of a nested struct in the received buffer are not filled at all!.
<br>
<p>I tested the code under mpich 3.0.3 and it worked perfectly!
<br>
<p>So I simplified everything (but still have ~400 lines of code) and put 
<br>
all of it in self-contained example attached to this mail.
<br>
<p>Briefly, we construct different MPI_datatype and nests them into a final 
<br>
type which is a:
<br>
{MPI_LONG,{{MPI_DOUBLE,MPI_LONG,MPI_CHAR}*2}
<br>
(which represents a std::pair&lt;long int, 2DVerticeInfo&gt;)
<br>
<p>The output for different openmpi versions is surprising:
<br>
<p>With openmpi 1.6.3 and 1.6.4:
<br>
<p>&nbsp;&nbsp;&nbsp;Rank 0 send this:
<br>
&nbsp;&nbsp;&nbsp;i: 0 =&gt; {{0},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 1 =&gt; {{1},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 2 =&gt; {{2},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 3 =&gt; {{3},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 4 =&gt; {{4},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 5 =&gt; {{5},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;Rank 1 received this:
<br>
&nbsp;&nbsp;&nbsp;i: 0 =&gt; {{0},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;&nbsp;i: 1 =&gt; {{1},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;&nbsp;i: 2 =&gt; {{2},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;&nbsp;i: 3 =&gt; {{3},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;&nbsp;i: 4 =&gt; {{4},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;&nbsp;i: 5 =&gt; {{5},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
<p>With openmpi 1.7.0:
<br>
&nbsp;&nbsp;&nbsp;Rank 0 send this:
<br>
&nbsp;&nbsp;&nbsp;i: 0 =&gt; {{0},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 1 =&gt; {{1},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 2 =&gt; {{2},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 3 =&gt; {{3},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 4 =&gt; {{4},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 5 =&gt; {{5},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;Rank 1 received this:
<br>
&nbsp;&nbsp;&nbsp;i: 0 =&gt; {{0},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;&nbsp;i: 1 =&gt; {{1},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;&nbsp;i: 2 =&gt; {{2},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;&nbsp;i: 3 =&gt; {{3},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;&nbsp;i: 4 =&gt; {{4},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;&nbsp;i: 5 =&gt; {{5},{{0.5,3,%},{-888.8,-999,$}}} *** ERROR ****
<br>
<p>with mpich-3.0.3:
<br>
&nbsp;&nbsp;&nbsp;Rank 0 send this:
<br>
&nbsp;&nbsp;&nbsp;i: 0 =&gt; {{0},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 1 =&gt; {{1},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 2 =&gt; {{2},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 3 =&gt; {{3},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 4 =&gt; {{4},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 5 =&gt; {{5},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;Rank 1 received this:
<br>
&nbsp;&nbsp;&nbsp;i: 0 =&gt; {{0},{{0.5,3,%},{0.25,7,5}}} OK
<br>
&nbsp;&nbsp;&nbsp;i: 1 =&gt; {{1},{{0.5,3,%},{0.25,7,5}}} OK
<br>
&nbsp;&nbsp;&nbsp;i: 2 =&gt; {{2},{{0.5,3,%},{0.25,7,5}}} OK
<br>
&nbsp;&nbsp;&nbsp;i: 3 =&gt; {{3},{{0.5,3,%},{0.25,7,5}}} OK
<br>
&nbsp;&nbsp;&nbsp;i: 4 =&gt; {{4},{{0.5,3,%},{0.25,7,5}}} OK
<br>
&nbsp;&nbsp;&nbsp;i: 5 =&gt; {{5},{{0.5,3,%},{0.25,7,5}}} OK
<br>
<p>I also &quot;valgrinded&quot; the code under mpich:
<br>
&nbsp;&nbsp;&nbsp;mpirun -n 2 valgrind ./sbugnt
<br>
==25148== Memcheck, a memory error detector
<br>
==25148== Copyright (C) 2002-2012, and GNU GPL'd, by Julian Seward et al.
<br>
==25148== Using Valgrind-3.8.1 and LibVEX; rerun with -h for copyright info
<br>
==25148== Command: ./sbugnt
<br>
==25148==
<br>
==25147== Memcheck, a memory error detector
<br>
==25147== Copyright (C) 2002-2012, and GNU GPL'd, by Julian Seward et al.
<br>
==25147== Using Valgrind-3.8.1 and LibVEX; rerun with -h for copyright info
<br>
==25147== Command: ./sbugnt
<br>
==25147==
<br>
&nbsp;&nbsp;&nbsp;Rank 0 send this:
<br>
&nbsp;&nbsp;&nbsp;i: 0 =&gt; {{0},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 1 =&gt; {{1},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 2 =&gt; {{2},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 3 =&gt; {{3},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 4 =&gt; {{4},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;i: 5 =&gt; {{5},{{0.5,3,%},{0.25,7,5}}}
<br>
&nbsp;&nbsp;&nbsp;Rank 1 received this:
<br>
&nbsp;&nbsp;&nbsp;i: 0 =&gt; {{0},{{0.5,3,%},{0.25,7,5}}} OK
<br>
&nbsp;&nbsp;&nbsp;i: 1 =&gt; {{1},{{0.5,3,%},{0.25,7,5}}} OK
<br>
&nbsp;&nbsp;&nbsp;i: 2 =&gt; {{2},{{0.5,3,%},{0.25,7,5}}} OK
<br>
&nbsp;&nbsp;&nbsp;i: 3 =&gt; {{3},{{0.5,3,%},{0.25,7,5}}} OK
<br>
&nbsp;&nbsp;&nbsp;i: 4 =&gt; {{4},{{0.5,3,%},{0.25,7,5}}} OK
<br>
&nbsp;&nbsp;&nbsp;i: 5 =&gt; {{5},{{0.5,3,%},{0.25,7,5}}} OK
<br>
==25147==
<br>
==25147== HEAP SUMMARY:
<br>
==25147==     in use at exit: 0 bytes in 0 blocks
<br>
==25147==   total heap usage: 215 allocs, 215 frees, 26,067 bytes allocated
<br>
==25147==
<br>
==25147== All heap blocks were freed -- no leaks are possible
<br>
==25147==
<br>
==25147== For counts of detected and suppressed errors, rerun with: -v
<br>
==25147== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 0 from 0)
<br>
==25148==
<br>
==25148== HEAP SUMMARY:
<br>
==25148==     in use at exit: 0 bytes in 0 blocks
<br>
==25148==   total heap usage: 213 allocs, 213 frees, 26,019 bytes allocated
<br>
==25148==
<br>
==25148== All heap blocks were freed -- no leaks are possible
<br>
==25148==
<br>
==25148== For counts of detected and suppressed errors, rerun with: -v
<br>
==25148== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 0 from 0)
<br>
<p><p>Did we misused something?
<br>
<p>Thanks for your help!
<br>
<p>Eric
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21758/sbugnt.cc">sbugnt.cc</a>
</ul>
<!-- attachment="sbugnt.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21759.php">George Bosilca: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Previous message:</strong> <a href="21757.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
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

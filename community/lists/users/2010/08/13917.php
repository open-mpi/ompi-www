<?
$subject_val = "[OMPI users] Memory allocation error when linking with MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  6 09:05:24 2010" -->
<!-- isoreceived="20100806130524" -->
<!-- sent="Fri, 6 Aug 2010 15:05:20 +0200" -->
<!-- isosent="20100806130520" -->
<!-- name="Nicolas Deladerriere" -->
<!-- email="nicolas.deladerriere_at_[hidden]" -->
<!-- subject="[OMPI users] Memory allocation error when linking with MPI libraries" -->
<!-- id="AANLkTin-4ErVnw6Mjh_sz5-j4gYzqKM2-inDkStU44eC_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Memory allocation error when linking with MPI libraries<br>
<strong>From:</strong> Nicolas Deladerriere (<em>nicolas.deladerriere_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-06 09:05:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="13916.php">John Hsu: "[OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13925.php">Terry Frankcombe: "Re: [OMPI users] Memory allocation error when linking with MPI	libraries"</a>
<li><strong>Reply:</strong> <a href="13925.php">Terry Frankcombe: "Re: [OMPI users] Memory allocation error when linking with MPI	libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'am having an sigsegv error when using simple program compiled and link
<br>
with openmpi.
<br>
I have reproduce the problem using really simple fortran code. It actually
<br>
does not even use MPI, but just link with mpi shared libraries. (problem
<br>
does not appear when I do not link with mpi libraries)
<br>
&nbsp;&nbsp;&nbsp;% cat allocate.F90
<br>
&nbsp;&nbsp;&nbsp;program test
<br>
&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(:), allocatable :: z
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(kind=8) :: l
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;l ?&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read(*,*) l
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALLOCATE(z(l))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;z(1) = 111
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;z(l) = 222
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEALLOCATE(z)
<br>
<p>&nbsp;&nbsp;&nbsp;end program test
<br>
<p>I am using openmpi 1.4.2 and gfortran for my tests. Here is the compilation
<br>
:
<br>
<p>&nbsp;&nbsp;&nbsp;% ./openmpi-1.4.2/build/bin/mpif90 --showme -g -o testallocate
<br>
allocate.F90
<br>
&nbsp;&nbsp;&nbsp;gfortran -g -o testallocate allocate.F90
<br>
-I/s0/scr1/TOMOT_19311_HAL_/openmpi-1.4.2/build/include -pthread
<br>
-I/s0/scr1/TOMOT_19311_HAL_/openmpi-1.4.2/build/lib
<br>
-L/s0/scr1/TOMOT_19311_HAL_/openmpi-1.4.2/build/lib -lmpi_f90 -lmpi_f77
<br>
-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
-pthread
<br>
<p>When I am running that test with different length, I sometimes get a
<br>
&quot;Segmentation fault&quot; error. Here are two examples using two specific values,
<br>
but error happens for many other values of length (I did not manage to find
<br>
which values of lenght gives that error)
<br>
<p>&nbsp;&nbsp;&nbsp;%  ./testallocate
<br>
&nbsp;&nbsp;&nbsp;&nbsp;l ?
<br>
&nbsp;&nbsp;&nbsp;1600000000
<br>
&nbsp;&nbsp;&nbsp;Segmentation fault
<br>
&nbsp;&nbsp;&nbsp;% ./testallocate
<br>
&nbsp;&nbsp;&nbsp;&nbsp;l ?
<br>
&nbsp;&nbsp;&nbsp;2000000000
<br>
<p>I used debugger with re-compiled version of openmpi using debug flag. I got
<br>
the folowing error in function sYSMALLOc
<br>
<p>&nbsp;&nbsp;&nbsp;Program received signal SIGSEGV, Segmentation fault.
<br>
&nbsp;&nbsp;&nbsp;0x00002aaaab70b3b3 in sYSMALLOc (nb=6400000016, av=0x2aaaab930200) at
<br>
malloc.c:3239
<br>
&nbsp;&nbsp;&nbsp;3239        set_head(remainder, remainder_size | PREV_INUSE);
<br>
&nbsp;&nbsp;&nbsp;Current language:  auto; currently c
<br>
&nbsp;&nbsp;&nbsp;(gdb) bt
<br>
&nbsp;&nbsp;&nbsp;#0  0x00002aaaab70b3b3 in sYSMALLOc (nb=6400000016, av=0x2aaaab930200) at
<br>
malloc.c:3239
<br>
&nbsp;&nbsp;&nbsp;#1  0x00002aaaab70d0db in opal_memory_ptmalloc2_int_malloc
<br>
(av=0x2aaaab930200, bytes=6400000000) at malloc.c:4322
<br>
&nbsp;&nbsp;&nbsp;#2  0x00002aaaab70b773 in opal_memory_ptmalloc2_malloc (bytes=6400000000)
<br>
at malloc.c:3435
<br>
&nbsp;&nbsp;&nbsp;#3  0x00002aaaab70a665 in opal_memory_ptmalloc2_malloc_hook
<br>
(sz=6400000000, caller=0x2aaaabf8534d) at hooks.c:667
<br>
&nbsp;&nbsp;&nbsp;#4  0x00002aaaabf8534d in _gfortran_internal_free () from
<br>
/usr/lib64/libgfortran.so.1
<br>
&nbsp;&nbsp;&nbsp;#5  0x0000000000400bcc in MAIN__ () at allocate.F90:11
<br>
&nbsp;&nbsp;&nbsp;#6  0x0000000000400c4e in main ()
<br>
&nbsp;&nbsp;&nbsp;(gdb) display
<br>
&nbsp;&nbsp;&nbsp;(gdb) list
<br>
&nbsp;&nbsp;&nbsp;3234      if ((unsigned long)(size) &gt;= (unsigned long)(nb + MINSIZE)) {
<br>
&nbsp;&nbsp;&nbsp;3235        remainder_size = size - nb;
<br>
&nbsp;&nbsp;&nbsp;3236        remainder = chunk_at_offset(p, nb);
<br>
&nbsp;&nbsp;&nbsp;3237        av-&gt;top = remainder;
<br>
&nbsp;&nbsp;&nbsp;3238        set_head(p, nb | PREV_INUSE | (av != &amp;main_arena ?
<br>
NON_MAIN_ARENA : 0));
<br>
&nbsp;&nbsp;&nbsp;3239        set_head(remainder, remainder_size | PREV_INUSE);
<br>
&nbsp;&nbsp;&nbsp;3240        check_malloced_chunk(av, p, nb);
<br>
&nbsp;&nbsp;&nbsp;3241        return chunk2mem(p);
<br>
&nbsp;&nbsp;&nbsp;3242      }
<br>
&nbsp;&nbsp;&nbsp;3243
<br>
<p><p>I also did the same test in C and I got the same problem.
<br>
<p>Does someone has any idea that could help me understand what's going on ?
<br>
<p>Regards
<br>
Nicolas
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13917/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="13916.php">John Hsu: "[OMPI users] deadlock in openmpi 1.5rc5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13925.php">Terry Frankcombe: "Re: [OMPI users] Memory allocation error when linking with MPI	libraries"</a>
<li><strong>Reply:</strong> <a href="13925.php">Terry Frankcombe: "Re: [OMPI users] Memory allocation error when linking with MPI	libraries"</a>
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

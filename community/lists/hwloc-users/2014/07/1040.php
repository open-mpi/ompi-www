<?
$subject_val = "[hwloc-users] hwloc 1.9 and openmpi using intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 08:07:16 2014" -->
<!-- isoreceived="20140709120716" -->
<!-- sent="Wed, 9 Jul 2014 14:06:55 +0200" -->
<!-- isosent="20140709120655" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc 1.9 and openmpi using intel compiler" -->
<!-- id="CAAbhqc4OU=WS=2ADmcHTU1U7+DYiSbNjZUfomzyVLeqGXuJLQA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc 1.9 and openmpi using intel compiler<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 08:06:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1041.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/06/1039.php">Brice Goglin: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1041.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1041.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users,
<br>
<p>I think this is some kind of bug, but I would like to post here to hear if
<br>
this is true.
<br>
I have only tested this using the fortran compiler and fortran version of
<br>
openmpi/hwloc.
<br>
<p>My setup:
<br>
intel compiler:
<br>
&nbsp;&nbsp;composer_xe_2013.3.163
<br>
ifort --version:
<br>
&nbsp;&nbsp;13.1.1 20130313
<br>
<p>I am compiling using these flags:
<br>
icc/ifort -m64 -fPIC -O2 -xHost -prec-div -prec-sqrt -opt-prefetch
<br>
<p>My test code is very basic (compiled using mpif90 -o hw hw.f90):
<br>
##### hw.f90
<br>
program hello_world
<br>
use mpi
<br>
integer :: rank, size, ierror, tag, status(MPI_STATUS_SIZE)
<br>
<p>call MPI_INIT(ierror)
<br>
call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
<br>
call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
<br>
print*, 'node', rank, ' of ',size
<br>
call MPI_FINALIZE(ierror)
<br>
<p>end program hello_world
<br>
##### hw.f90
<br>
<p>I compiled these versions:
<br>
<p>A) hwloc-1.8.1 and openmpi-1.6.5
<br>
B) hwloc-1.9 and openmpi-1.6.5
<br>
C) hwloc-1.8.1 and openmpi-1.8
<br>
D) hwloc-1.9 and openmpi-1.8
<br>
<p>Besides the --prefix flag I did this:
<br>
For all compilations of hwloc I compiled using these configure settings:
<br>
--disable-{libnuma,opencl,cuda,nvml,gv} --enable-static
<br>
For all compilations of openmpi I compiled using these configure settings:
<br>
--with-hwloc=&lt;placement of equivalent hwloc installation&gt;
<br>
<p>A and C both terminate perfectly. No errors.
<br>
B and D both terminate with errors. I have attached the error message for
<br>
both instances.
<br>
<p>It seems related to this:
<br>
&nbsp;&nbsp;../../orte/util/nidmap.c at line 106
<br>
which does something with a hwloc topography.
<br>
<p>I have also tried option D with the GNU compiler:
<br>
gfortran/gcc --version
<br>
&nbsp;&nbsp;4.7.2-5
<br>
In this case I don't get any errors. Hence my suspicion lies entirely on
<br>
intel compiler and hwloc-1.9. :)
<br>
<p>Note, I can run some of the utilities installed by hwloc without problems.
<br>
However, I am in no way experienced in debugging hwloc so I might be doing
<br>
something wrong here?
<br>
Also, I am not sure whether this is related to openmpi or hwloc, however,
<br>
as I only found the error dependent on the hwloc version I suspected this
<br>
might be the correct place.
<br>
<p>Please advice me if you need additional information.
<br>
PS: I could not find anything on the bug-tracker.
<br>
<p><pre>
-- 
Kind regards Nick


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1040/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1040/hwloc-1.9-openmpi-1.6.5">hwloc-1.9-openmpi-1.6.5</a>
</ul>
<!-- attachment="hwloc-1.9-openmpi-1.6.5" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1040/hwloc-1.9-openmpi-1.8">hwloc-1.9-openmpi-1.8</a>
</ul>
<!-- attachment="hwloc-1.9-openmpi-1.8" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1041.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/06/1039.php">Brice Goglin: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1041.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Reply:</strong> <a href="1041.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
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

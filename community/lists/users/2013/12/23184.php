<?
$subject_val = "[OMPI users] environment variables and MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 11 15:12:37 2013" -->
<!-- isoreceived="20131211201237" -->
<!-- sent="Wed, 11 Dec 2013 21:10:36 +0100" -->
<!-- isosent="20131211201036" -->
<!-- name="tom fogal" -->
<!-- email="tfogal_at_[hidden]" -->
<!-- subject="[OMPI users] environment variables and MPI_Comm_spawn" -->
<!-- id="20131211201036.B47912D2006F_at_takeo" -->
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
<strong>Subject:</strong> [OMPI users] environment variables and MPI_Comm_spawn<br>
<strong>From:</strong> tom fogal (<em>tfogal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-11 15:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23185.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23183.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23185.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23185.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm developing on Open MPI 1.4.5-ubuntu2 on Ubuntu 13.10 (so, Ubuntu's
<br>
packaged Open MPI) at the moment.
<br>
<p>I'd like to pass environment variables to processes started via
<br>
MPI_Comm_spawn.  Unfortunately, the MPI 3.0 standard (at least) does
<br>
not seem to specify a way to do this; thus I have been searching for
<br>
implementation-specific ways to accomplish my task.
<br>
<p>I have tried setting the environment variable using the POSIX setenv(3)
<br>
call, but it seems that Open MPI comm-spawn'd processes do not inherit
<br>
environment variables.  See the attached 2 C99 programs; one prints
<br>
out the environment it receives, and one sets the MEANING_OF_LIFE
<br>
environment variable, spawns the previous 'env printing' program, and
<br>
exits.  I run via:
<br>
<p>&nbsp;&nbsp;$ env -i HOME=/home/tfogal \
<br>
&nbsp;&nbsp;PATH=/bin:/usr/bin:/usr/local/bin:/sbin:/usr/sbin \
<br>
&nbsp;&nbsp;mpirun -x TJFVAR=testing -n 5 ./mpienv ./envpar
<br>
<p>and expect (well, hope) to find the MEANING_OF_LIFE in 'envpar's
<br>
output.  I do see TJFVAR, but the MEANING_OF_LIFE sadly does not
<br>
propagate.  Perhaps I am asking the wrong question...
<br>
<p>I found another MPI implementation which allowed passing such
<br>
information via the MPI_Info argument, however I could find no
<br>
documentation of similar functionality in Open MPI.
<br>
<p>Is there a way to accomplish what I'm looking for?  I could even be
<br>
convinced to hack source, but a starting pointer would be appreciated.
<br>
<p>Thanks,
<br>
<p>-tom
<br>
<p><p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23184/01-part">setenv.mpi.c</a>
</ul>
<!-- attachment="01-part" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23184/02-part">parenv.mpi.c</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23185.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23183.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23185.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="23185.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
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

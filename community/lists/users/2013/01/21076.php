<?
$subject_val = "[OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 03:55:54 2013" -->
<!-- isoreceived="20130104085554" -->
<!-- sent="Fri, 4 Jan 2013 10:55:48 +0200" -->
<!-- isosent="20130104085548" -->
<!-- name="Torbj&#246;rn Bj&#246;rkman" -->
<!-- email="torbjornb_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X" -->
<!-- id="CAG-c=j48JRJLPeLK-rFa7WdgV-RSABkykfqZi+Dvxbz6KaD6Rw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X<br>
<strong>From:</strong> Torbj&#246;rn Bj&#246;rkman (<em>torbjornb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 03:55:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21077.php">Dave Goodell: "Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="21075.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21077.php">Dave Goodell: "Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="21077.php">Dave Goodell: "Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems that a very old bug (svn.open-mpi.org/trac/ompi/ticket/1982) is
<br>
playing up when linking fortran code with mpicc on Mac OS X 10.6 and the
<br>
Macports distribution openmpi @1.6.3_0+gcc44. I got it working by reading
<br>
up on this discussion thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/11/17862.php">http://www.open-mpi.org/community/lists/users/2011/11/17862.php</a>
<br>
and applying the fix given there, add '-Wl,-commons,use_dylibs', to the c
<br>
compiler flags solves the problem.
<br>
<p>In addition to that discussion should be mentioned that it is in fact a
<br>
link flag, not a compiler issue, so the important thing is to supply the
<br>
flag to the linker, not the fortran compiler. The fix would be to add
<br>
-Wl,-commons,use_dylibs to the flags supplied by mpicc, but I guess that
<br>
there could be reasons for not doing that, but that is for you experts to
<br>
say.
<br>
<p>I'm posting to the users' list, because I'm unsure of whether this
<br>
qualifies as a bug propre, but at least it falls in the category
<br>
&quot;undocumented behaviour that totally baffled a fairly experienced user used
<br>
to solving his own problems and who is generally not a whiner&quot;.
<br>
<p>Cheers,
<br>
Torbj&#246;rn
<br>
<p><pre>
-- 
======================================
Torbj&#246;rn Bj&#246;rkman
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21076/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21077.php">Dave Goodell: "Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="21075.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21077.php">Dave Goodell: "Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="21077.php">Dave Goodell: "Re: [OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
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

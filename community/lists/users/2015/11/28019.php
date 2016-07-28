<?
$subject_val = "[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 21:19:42 2015" -->
<!-- isoreceived="20151107021942" -->
<!-- sent="Fri, 6 Nov 2015 18:19:18 -0800" -->
<!-- isosent="20151107021918" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)" -->
<!-- id="CAGKz=uK-Jxakq8opqrZvJHLv+Tks3mcpT9v5xf0G7hKs1BiMEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-06 21:19:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28020.php">Cristian RUIZ: "[OMPI users] Failure detection"</a>
<li><strong>Previous message:</strong> <a href="28018.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Maybe reply:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Reply:</strong> <a href="28087.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles:
<br>
<p>Regarding <a href="http://www.open-mpi.org/community/lists/users/2015/11/27999.php">http://www.open-mpi.org/community/lists/users/2015/11/27999.php</a>,
<br>
I am looking for a package with RMA bug fixes from last summer.  I will
<br>
start with the git HEAD and work backwards.
<br>
<p>Dave:
<br>
<p>Regarding <a href="http://www.open-mpi.org/community/lists/users/2015/11/27981.php">http://www.open-mpi.org/community/lists/users/2015/11/27981.php</a>...
<br>
<p>The ARMCI-MPI unit test tests/mpi/test_mpi_subarray_accs fails with
<br>
Open-MPI.  This is not too surprising for an older version, since there
<br>
were bugs in RMA+Datatypes as of April/May 2014.
<br>
<p>Anyways, I will figure out what version of Open-MPI works with ARMCI-MPI
<br>
and then build that one from source in Travis.
<br>
<p>Sorry for the lack of explicit context in this reply, but I am signed up to
<br>
this list (and many others) in no-email mode.
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p><pre>
--
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28019/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28020.php">Cristian RUIZ: "[OMPI users] Failure detection"</a>
<li><strong>Previous message:</strong> <a href="28018.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Maybe reply:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Reply:</strong> <a href="28087.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
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

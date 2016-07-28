<?
$subject_val = "[OMPI users] Q: Fortran, MPI_VERSION and #defines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 13:27:47 2016" -->
<!-- isoreceived="20160321172747" -->
<!-- sent="Mon, 21 Mar 2016 11:27:45 -0600" -->
<!-- isosent="20160321172745" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="[OMPI users] Q: Fortran, MPI_VERSION and #defines" -->
<!-- id="CAFkGP2mvYORDufbhbb44EgvjmEZyZntL8_zGA8bZMNV=mV=3gA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Q: Fortran, MPI_VERSION and #defines<br>
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 13:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28778.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28776.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28778.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Reply:</strong> <a href="28778.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Reply:</strong> <a href="28781.php">Dave Love: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>&nbsp;&nbsp;This isn't really a problem, per se, but rather a search for a more
<br>
elegant solution.  It also isn't specific to OpenMPI, but I figure the
<br>
experience and knowledge of people here made it a suitable place to ask:
<br>
<p>&nbsp;&nbsp;I'm working on some code that'll be used and downloaded by others on
<br>
multiple systems, and this code is using some MPI3 features (neighborhood
<br>
collectives), but not everyone has the latest MPI libraries, many people
<br>
will be running the code on systems without these functions.
<br>
<p>&nbsp;&nbsp;If this were a C/C++ code, it'd be quite easy to deal with this as
<br>
'mpi.h' has MPI_VERSION as a #define, so I can use a preprocessor check to
<br>
conditionally compile either the neighbor routines or the old
<br>
point-to-point routines.  However, Fortran obviously doesn't use #define
<br>
natively, and so the mpif.h (or MPI module) simply define MPI_VERSION as a
<br>
parameter - I can use it in the code, but not at the preprocessor level.
<br>
So, putting the MPI3 neighborhood collective in the code, even in a
<br>
non-executed codepath, results in an error when linking with an MPI2
<br>
library since the routine isn't found.
<br>
<p>&nbsp;&nbsp;Obviously I can just have the user supply the -DMPI_VERSION=3 flag (or a
<br>
different one, since this *is* a parameter name) *if they know* their MPI
<br>
is version 3, and I intend to submit a patch to Cmake's FindMPI command to
<br>
detect this automatically, but is there a *better* way to do this for
<br>
projects that aren't using Cmake?  Scientists don't typically know what
<br>
version of MPI they're running, so the more that can be detected and
<br>
handled automatically the better.  (Providing stub versions that link
<br>
*after* the main library (and thus don't get chosen, I think) also seems
<br>
less than elegant.)
<br>
<p>&nbsp;&nbsp;To make it slightly more broad - if new MPI versions outpace library
<br>
obsolescence on existing systems, what's the ideal way to write portable
<br>
Fortran code that uses the most recent features?  Is there a way to use or
<br>
change MPI_VERSION and MPI_SUBVERSION such that they can be used to
<br>
conditionally compile code in Fortran built by standard 'Make' processes?
<br>
Is 'recommending' that the mpif90/mpif77 commands provide them a terrible,
<br>
terrible idea?
<br>
<p>Or any other suggestions?
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28777/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28778.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28776.php">Meij, Henk: "Re: [OMPI users] BLCR &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28778.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Reply:</strong> <a href="28778.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Reply:</strong> <a href="28781.php">Dave Love: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
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

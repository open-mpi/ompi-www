<?
$subject_val = "[OMPI users] on SEEK_*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 06:29:09 2008" -->
<!-- isoreceived="20081016102909" -->
<!-- sent="Thu, 16 Oct 2008 12:29:01 +0200" -->
<!-- isosent="20081016102901" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="[OMPI users] on SEEK_*" -->
<!-- id="20081016102901.GG10378_at_brakk.ethz.ch" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] on SEEK_*<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-16 06:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6995.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6993.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6995.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Reply:</strong> <a href="6995.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Maybe reply:</strong> <a href="7000.php">Rajeev Thakur: "Re: [OMPI users] on SEEK_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've just run into this chunk of code.
<br>
<p>/* MPICH2 will fail if SEEK_* macros are defined
<br>
&nbsp;* because they are also C++ enums. Undefine them
<br>
&nbsp;* when including mpi.h and then redefine them
<br>
&nbsp;* for sanity.
<br>
&nbsp;*/
<br>
#  ifdef SEEK_SET
<br>
#    define MB_SEEK_SET SEEK_SET
<br>
#    define MB_SEEK_CUR SEEK_CUR
<br>
#    define MB_SEEK_END SEEK_END
<br>
#    undef SEEK_SET
<br>
#    undef SEEK_CUR
<br>
#    undef SEEK_END
<br>
#  endif
<br>
#include &quot;mpi.h&quot;
<br>
#  ifdef MB_SEEK_SET
<br>
#    define SEEK_SET MB_SEEK_SET
<br>
#    define SEEK_CUR MB_SEEK_CUR
<br>
#    define SEEK_END MB_SEEK_END
<br>
#    undef MB_SEEK_SET
<br>
#    undef MB_SEEK_CUR
<br>
#    undef MB_SEEK_END
<br>
#  endif
<br>
<p><p>MPICH2 (1.1.0a1) gives these errors if SEEK_* are present:
<br>
<p>/opt/mpich2/include/mpicxx.h:26:2: error: #error &quot;SEEK_SET is #defined but must not be for the C++ binding of MPI&quot;
<br>
/opt/mpich2/include/mpicxx.h:30:2: error: #error &quot;SEEK_CUR is #defined but must not be for the C++ binding of MPI&quot;
<br>
/opt/mpich2/include/mpicxx.h:35:2: error: #error &quot;SEEK_END is #defined but must not be for the C++ binding of MPI&quot;
<br>
<p>but when SEEK_* is not present and iostream has been included, OMPI-dev
<br>
gives these errors.
<br>
<p>/home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:53: error: &#226;&#128;&#152;SEEK_SET&#226;&#128;&#153; was not declared in this scope
<br>
/home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:54: error: &#226;&#128;&#152;SEEK_CUR&#226;&#128;&#153; was not declared in this scope
<br>
/home/ompi/include/openmpi/ompi/mpi/cxx/mpicxx.h:55: error: &#226;&#128;&#152;SEEK_END&#226;&#128;&#153; was not declared in this scope
<br>
<p>There is a subtle difference between OMPI 1.2.7 and -dev at least with
<br>
GCC 4.3.2.  If iostream was included before mpi.h and then SEEK_* are
<br>
#undef'd then 1.2.7 succeeds while -dev fails with the message above.
<br>
If stdio.h is included and SEEK_* are #undef'd then both OMPI versions
<br>
fail.  MPICH2 requires in both cases that SEEK_* be #undef'd.
<br>
<p>What do you recommend to remain portable?  Is this really an MPICH2
<br>
issue?  The standard doesn't seem to address this issue.  The MPICH2 FAQ
<br>
has this
<br>
<p><a href="http://www.mcs.anl.gov/research/projects/mpich2/support/index.php?s=faqs#cxxseek">http://www.mcs.anl.gov/research/projects/mpich2/support/index.php?s=faqs#cxxseek</a>
<br>
<p><p>Jed
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6994/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6995.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6993.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6995.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Reply:</strong> <a href="6995.php">Jeff Squyres: "Re: [OMPI users] on SEEK_*"</a>
<li><strong>Maybe reply:</strong> <a href="7000.php">Rajeev Thakur: "Re: [OMPI users] on SEEK_*"</a>
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

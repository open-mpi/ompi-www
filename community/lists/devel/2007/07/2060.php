<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 31 18:43:32 2007" -->
<!-- isoreceived="20070731224332" -->
<!-- sent="Tue, 31 Jul 2007 19:43:27 -0300" -->
<!-- isosent="20070731224327" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="e7ba66e40707311543k41fae26bo290a33b9e3d5c377_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3473776A-F80F-4CD7-97DE-0C24E50765D0_at_cisco.com" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-31 18:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2061.php">Sven Stork: "Re: [OMPI devel] pml failures?"</a>
<li><strong>Previous message:</strong> <a href="2059.php">Jeff Squyres: "[OMPI devel] openib modular wireup"</a>
<li><strong>In reply to:</strong> <a href="2057.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/31/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Just curious -- why do you need to know if a handle refers to a
</span><br>
<span class="quotelev1">&gt; predefined object?
</span><br>
<p>If I understand correctly, new handles shoud be freed in order to do
<br>
not leak things, to follow good programming practices, and being
<br>
completelly sure a valgrind run do not report any problem.
<br>
<p>I am working in the development of MPI for Python, a port of MPI to
<br>
Python, a high level language with automatic memory management. Said
<br>
that, in such an environment, having to call XXX.Free() for  every
<br>
object i get from a call like XXX.Get_something() is really an
<br>
unnecesary pain.
<br>
<p>Many things in MPI are LOCAL (datatypes, groups, predefined
<br>
operations) and in general destroying them for user-space is
<br>
guaranteed by MPI to not conflict with system(MPI)-space and
<br>
communication (i.e. if you create a derived datatype four using it in
<br>
a construction of another derived datatype, you can safely free the
<br>
first).
<br>
<p>Well, for all those LOCAL objects, I could implement automatic
<br>
deallocation of handles for Python (for Comm, Win, and File, that is
<br>
not so easy, at freeing them is a collective operation AFAIK, and
<br>
automaticaly freeing them can lead to deadlocks).
<br>
<p>My Python wrappers (mpi4py) are inteded to be used in any platform
<br>
with any MPI implementation. But things are not so easy, as there are
<br>
many corner cases in the MPI standard.
<br>
<p>Python es a wonderfull, powerfull language, very friendly to write
<br>
things. Prove of that is the many bug reports I provided here. By
<br>
using python, I can run all my unittest script in a single MPI run,
<br>
thus they have the potential to find interaction problems between all
<br>
parts of MPI. If any of you, OMPI developers, have some knowledge of
<br>
Python, I invite you to try mpi4py, as you would be able to write very
<br>
fast many many tests, not only for things that should work, but also
<br>
for things that should fail.
<br>
<p>Sorry for the long mail. In short, many things in MPI are not clearly
<br>
designed for languages other than C and Fortran. Even in C++
<br>
specification, there are things that are unnaceptable, like the
<br>
open-door to the problem of having dangling references, which could be
<br>
avoided with negligible cost. Anyway, all those issues are minor for
<br>
me, and the MPI specification is just great. I hope I can find the
<br>
time to contribute to the MPI-2.1 effort to better define MPI behavior
<br>
in the corner cases (fortunatelly, there are a really small number of
<br>
them).
<br>
<p>Regards,
<br>
<p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2061.php">Sven Stork: "Re: [OMPI devel] pml failures?"</a>
<li><strong>Previous message:</strong> <a href="2059.php">Jeff Squyres: "[OMPI devel] openib modular wireup"</a>
<li><strong>In reply to:</strong> <a href="2057.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
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

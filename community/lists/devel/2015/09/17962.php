<?
$subject_val = "[OMPI devel] no more cast away const";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 04:20:20 2015" -->
<!-- isoreceived="20150904082020" -->
<!-- sent="Fri, 4 Sep 2015 17:20:16 +0900" -->
<!-- isosent="20150904082016" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] no more cast away const" -->
<!-- id="55E95440.3010901_at_rist.or.jp" -->
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
<strong>Subject:</strong> [OMPI devel] no more cast away const<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 04:20:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17963.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="17961.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>a bunch of C bindings have comments such as
<br>
/* XXX -- CONST -- do not cast away const -- update mca/coll */
<br>
and that has been there for a long time.
<br>
<p>i made PR #839 <a href="https://github.com/open-mpi/ompi/pull/839">https://github.com/open-mpi/ompi/pull/839</a> to fix this.
<br>
the change is quite massive (270 files) since :
<br>
- the C bindings had to be modified
<br>
- the MCA frameworks had to be modified
<br>
- the MCA components had to be modified
<br>
<p>i did my best to update all the components, but i was not able to build 
<br>
all of them
<br>
(mainly because i do not have the required libs)
<br>
if a component is not updated, the worst case scenario should be a 
<br>
warning about
<br>
function types.
<br>
<p>currently, 99% of the work is done.
<br>
components based on Mellanox proprietary libraries (fca, mxm and hcoll) 
<br>
still issue some warnings,
<br>
the root cause is proprietary libs interfaces should be updated with the 
<br>
const keywords where needed.
<br>
<p>i did not change MPI_Reduce_local (ompi/mpi/c/reduce_local.c)
<br>
the reason is there is the change would have been half baked anyway.
<br>
it could have fully baked if the MPI_User_function type was
<br>
typedef void (MPI_User_function)(const void *, void *, int *, 
<br>
MPI_Datatype *);
<br>
instead of
<br>
typedef void (MPI_User_function)(void *, void *, int *, MPI_Datatype *);
<br>
<p>fwiw, in MPI 2.2, the C++ binding has the const modifier, but not the C one.
<br>
per #140 <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/140">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/140</a>
<br>
<p>/* NOT CHANGING the following API's to keep backward compatibility and 
<br>
ease of use */
<br>
<p>so it seems it was intentional not to add the const modifier to 
<br>
MPI_User_function
<br>
<p>as i wrote earlier, the change is quite massive.
<br>
i plan to commit it by the end of next week, unless there are any 
<br>
objections.
<br>
(and then i will PR for v2.x, and v1.10 but only if there is a request)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17963.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove the --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="17961.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC: Remove --without-hwloc configure option"</a>
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

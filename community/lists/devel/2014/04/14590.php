<?
$subject_val = "[OMPI devel] RFC: Well-known mca parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 01:38:44 2014" -->
<!-- isoreceived="20140424053844" -->
<!-- sent="Thu, 24 Apr 2014 08:38:42 +0300" -->
<!-- isosent="20140424053842" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Well-known mca parameters" -->
<!-- id="CAAO1KybnJoCVyJpUkAJ2c+XopV9QZK2BHUcniVZxd7sXB6Zp8g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Well-known mca parameters<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 01:38:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14591.php">Lisandro Dalcin: "[OMPI devel] Patch to fix valgrind warning"</a>
<li><strong>Previous message:</strong> <a href="14589.php">Gilles Gouaillardet: "[OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14601.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14601.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:
<br>
* Formalize well-known MCA parameters that can be used by any component to
<br>
represent external dependencies for this component.
<br>
<p>* Component can set that well-known MCA r/o parameters to expose to the
<br>
end-users different setup related traits of the OMPI installation.
<br>
<p>Example:
<br>
<p>ompi_info can print for every component which depends on external library:
<br>
- ext lib runtime version used by component
<br>
- ext lib compiletime version used by component
<br>
<p>slurm: v2.6.6
<br>
mtl/mxm: v2.5
<br>
btl/verbs: v3.2
<br>
btl/usnic: v1.1
<br>
coll/fca: v2.5
<br>
...
<br>
<p>End-user or site admin or OMPI vendor can aggregate this information by
<br>
some script and generate report if given installation compiles with
<br>
site/vendor rules.
<br>
<p>* The &quot;well-known&quot; mca parameters can be easily extracted from ALL
<br>
components by grep-like utilities.
<br>
<p>* Current proposal:
<br>
<p>** prefix each well-known MCA param with &quot;print_&quot;:
<br>
** Define two well-known mca parameters indicating external library runtime
<br>
and compiletime versions, i.e.:
<br>
<p>print_compiletime_version
<br>
print_runtime_version
<br>
<p>The following command will show all exposed well-known mca params from all
<br>
components:
<br>
ompi_info --parsable -l 9 |grep &quot;:print_&quot;
<br>
<p><p>WHY:
<br>
<p>* Better support-ability: site/vendor can provide script which will check
<br>
if OMPI installation complies to release notes or support matrix.
<br>
<p><p>WHEN:
<br>
<p>- Next teleconf
<br>
- code can be observed here: <a href="https://svn.open-mpi.org/trac/ompi/ticket/4556">https://svn.open-mpi.org/trac/ompi/ticket/4556</a>
<br>
<p><p>Comments?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14590/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14591.php">Lisandro Dalcin: "[OMPI devel] Patch to fix valgrind warning"</a>
<li><strong>Previous message:</strong> <a href="14589.php">Gilles Gouaillardet: "[OMPI devel] MPI_Recv_init_null_c from intel test suite fails vs ompi trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14601.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14601.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
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

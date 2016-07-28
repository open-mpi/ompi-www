<?
$subject_val = "[OMPI devel] mpirun hangs when a task exits with a non zero code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 04:07:57 2014" -->
<!-- isoreceived="20140829080757" -->
<!-- sent="Fri, 29 Aug 2014 17:08:03 +0900" -->
<!-- isosent="20140829080803" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun hangs when a task exits with a non zero code" -->
<!-- id="540034E3.9080205_at_iferc.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun hangs when a task exits with a non zero code<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 04:08:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15752.php">Gilles Gouaillardet: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15750.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15761.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs when a task exits with a non zero code"</a>
<li><strong>Reply:</strong> <a href="15761.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs when a task exits with a non zero code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and all,
<br>
<p>The following trivial test hangs
<br>
/* it hangs at least 99% of the time in my environment, 1% is a race
<br>
condition and the program behaves as expected */
<br>
<p>mpirun -np 1 --mca btl self /bin/false
<br>
<p>same behaviour happen with the following trivial but MPI program :
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main (int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 1;
<br>
}
<br>
<p>The attached patch fixes the hang (e.g. the program nicely abort with
<br>
the correct error message)
<br>
<p>i did not commit it since i am not confident at all
<br>
<p>could you please review it ?
<br>
<p>Cheers
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15751/hang.patch">hang.patch</a>
</ul>
<!-- attachment="hang.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15752.php">Gilles Gouaillardet: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15750.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15761.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs when a task exits with a non zero code"</a>
<li><strong>Reply:</strong> <a href="15761.php">Ralph Castain: "Re: [OMPI devel] mpirun hangs when a task exits with a non zero code"</a>
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

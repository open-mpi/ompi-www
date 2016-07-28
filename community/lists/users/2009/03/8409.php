<?
$subject_val = "[OMPI users] freeing attributes on communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 12:48:02 2009" -->
<!-- isoreceived="20090312164802" -->
<!-- sent="Thu, 12 Mar 2009 11:43:42 -0500" -->
<!-- isosent="20090312164342" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="[OMPI users] freeing attributes on communicators" -->
<!-- id="20090312164342.GK1408_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [OMPI users] freeing attributes on communicators<br>
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 12:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8410.php">Amos Leffler: "[OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8408.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>Reply:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI users] freeing attributes on communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all.
<br>
<p>I'm using openmpi-1.3 in this example, linux, gcc-4.3.2, configured
<br>
with nothing special.
<br>
<p>If I run the following simple C code under valgrind, single process, I
<br>
get some errors about reading and writing already-freed memory:
<br>
<p>---------------------------
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>int delete_fn(MPI_Comm comm, int keyval, void *attr, void *extra) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Keyval_free(&amp;keyval);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>int main (int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm duped;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int keyval;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup(MPI_COMM_SELF, &amp;duped);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Keyval_create(MPI_NULL_COPY_FN, delete_fn,  &amp;keyval, NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Attr_put(MPI_COMM_SELF, keyval, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Attr_put(duped, keyval, NULL);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;duped);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
---------------------------
<br>
<p>My main question here: Am I doing something wrong, or have I managed
<br>
to confuse openmpi's reference counts somehow?
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8410.php">Amos Leffler: "[OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8408.php">Mikael Djurfeldt: "Re: [OMPI users] Problem in MPI::Finalize when freeing intercommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>Reply:</strong> <a href="8445.php">Jeff Squyres: "Re: [OMPI users] freeing attributes on communicators"</a>
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

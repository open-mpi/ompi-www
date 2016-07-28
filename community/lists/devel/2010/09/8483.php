<?
$subject_val = "[OMPI devel] Barrier() after Finalize() when a file handle is leaked.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 15 11:28:36 2010" -->
<!-- isoreceived="20100915152836" -->
<!-- sent="Wed, 15 Sep 2010 12:28:31 -0300" -->
<!-- isosent="20100915152831" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Barrier() after Finalize() when a file handle is leaked." -->
<!-- id="AANLkTikhdHVeJL6ViQC9fMajCDWfXjy7pD8zdATiVx3Z_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Barrier() after Finalize() when a file handle is leaked.<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-15 11:28:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8484.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Previous message:</strong> <a href="8482.php">&#213;&#197;&#190;&#167;: "[OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
<li><strong>Reply:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've tested this with (--enable-debug --enable-picky
<br>
--enable-mem-debug) 1.4.2 and 1.5rc6. Despite being debug builds, a
<br>
mpi4py user got the same with (likely release) builds in both Ubuntu
<br>
and OS X.
<br>
<p>$ cat open.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;MPI_File f;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_File_open(MPI_COMM_WORLD, &quot;test.plt&quot;, MPI_MODE_RDONLY, MPI_INFO_NULL, &amp;f);
<br>
&nbsp;&nbsp;/* MPI_File_close(&amp;f); */
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpicc open.c
<br>
<p>$ ./a.out
<br>
*** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[trantor:15145] Abort after MPI_FINALIZE completed successfully; not
<br>
able to guarantee that all other processes were killed!
<br>
<p><p>So if you open a file but never close it, a MPI_Barrier() gets called
<br>
after MPI_Finalize(). Could that come from a finalizer ROMIO callback?
<br>
However, I do not get this failure with MPICH2, and Open MPI seems to
<br>
behave just fine regarding MPI_Finalized(), the code below work as
<br>
expected:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>static int atexitmpi(MPI_Comm comm, int k, void *v, void *xs) {
<br>
&nbsp;&nbsp;int flag;
<br>
&nbsp;&nbsp;MPI_Finalized(&amp;flag);
<br>
&nbsp;&nbsp;printf(&quot;atexitmpi: finalized=%d\n&quot;, flag);
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
}
<br>
<p>int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;int keyval = MPI_KEYVAL_INVALID;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_create_keyval(MPI_COMM_NULL_COPY_FN, atexitmpi, &amp;keyval, 0);
<br>
&nbsp;&nbsp;MPI_Comm_set_attr(MPI_COMM_SELF, keyval, 0);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8484.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Previous message:</strong> <a href="8482.php">&#213;&#197;&#190;&#167;: "[OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
<li><strong>Reply:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
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

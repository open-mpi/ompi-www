<?
$subject_val = "[OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 12:02:55 2009" -->
<!-- isoreceived="20091210170255" -->
<!-- sent="Thu, 10 Dec 2009 14:02:51 -0300" -->
<!-- isosent="20091210170251" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL" -->
<!-- id="e7ba66e40912100902l3cdc68bco47c2f67dd19cd7a6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 12:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7218.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7216.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Branch off of trunk for v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7218.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7218.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See the code below. The commented-out combinations for sbuf,rbuf do
<br>
work, but the one passing sbuf=rbuf=NULL (i.e, the uncommented one
<br>
show below) makes the call fail with MPI_ERR_ARG.
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int main( int argc, char ** argv ) {
<br>
&nbsp;&nbsp;int ierr;
<br>
&nbsp;&nbsp;int sbuf,rbuf;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;ierr = MPI_Reduce(/*&amp;sbuf, &amp;rbuf,*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*&amp;sbuf, NULL,*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*NULL, &amp;rbuf,*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL, NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><pre>
-- 
Lisandro Dalc&#195;&#173;n
---------------
Centro Internacional de M&#195;&#169;todos Computacionales en Ingenier&#195;&#173;a (CIMEC)
Instituto de Desarrollo Tecnol&#195;&#179;gico para la Industria Qu&#195;&#173;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#195;&#173;ficas y T&#195;&#169;cnicas (CONICET)
PTLC - G&#195;&#188;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7218.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7216.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Branch off of trunk for v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7218.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7218.php">George Bosilca: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
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

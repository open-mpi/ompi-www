<?
$subject_val = "[OMPI devel] MPI_Type_free(MPI_BYTE) not failing after MPI_Win_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 14:57:59 2010" -->
<!-- isoreceived="20100618185759" -->
<!-- sent="Fri, 18 Jun 2010 15:57:54 -0300" -->
<!-- isosent="20100618185754" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Type_free(MPI_BYTE) not failing after MPI_Win_create()" -->
<!-- id="AANLkTimLnXOf11DIcSMg5DH0ANlORpM6O5LJIvK3wMF-_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Type_free(MPI_BYTE) not failing after MPI_Win_create()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 14:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8112.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="8110.php">nadia.derbey: "[OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8113.php">Jeff Squyres: "Re: [OMPI devel] MPI_Type_free(MPI_BYTE) not failing afterMPI_Win_create()"</a>
<li><strong>Reply:</strong> <a href="8113.php">Jeff Squyres: "Re: [OMPI devel] MPI_Type_free(MPI_BYTE) not failing afterMPI_Win_create()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See the code below. As expected, you DO get an error (though the error
<br>
is ERR_INTERN, somewhat not informative). However, if you fist
<br>
create() % destroy a windows, you DO NOT get any error. This is VERY
<br>
strange, right? I understand this issue is going to be very low
<br>
priority for you, but I'm wondering whether this is actually related
<br>
to some deeper, nasty bug that can cause actual trouble in valid code.
<br>
<p><p>#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
#if 0
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win win;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_create(MPI_BOTTOM,0,1,MPI_INFO_NULL,MPI_COMM_SELF,&amp;win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_free(&amp;win);
<br>
&nbsp;&nbsp;}
<br>
#endif
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype byte = MPI_BYTE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;byte);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8112.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="8110.php">nadia.derbey: "[OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8113.php">Jeff Squyres: "Re: [OMPI devel] MPI_Type_free(MPI_BYTE) not failing afterMPI_Win_create()"</a>
<li><strong>Reply:</strong> <a href="8113.php">Jeff Squyres: "Re: [OMPI devel] MPI_Type_free(MPI_BYTE) not failing afterMPI_Win_create()"</a>
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

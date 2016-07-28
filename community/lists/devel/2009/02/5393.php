<?
$subject_val = "[OMPI devel] likely bad return from MPI_File_c2f";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 17:06:27 2009" -->
<!-- isoreceived="20090210220627" -->
<!-- sent="Tue, 10 Feb 2009 20:06:23 -0200" -->
<!-- isosent="20090210220623" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] likely bad return from MPI_File_c2f" -->
<!-- id="e7ba66e40902101406s3a41d450h97659f3830c6984e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] likely bad return from MPI_File_c2f<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-10 17:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5394.php">Jeff Squyres: "Re: [OMPI devel] likely bad return from MPI_File_c2f"</a>
<li><strong>Previous message:</strong> <a href="5392.php">George Bosilca: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5394.php">Jeff Squyres: "Re: [OMPI devel] likely bad return from MPI_File_c2f"</a>
<li><strong>Reply:</strong> <a href="5394.php">Jeff Squyres: "Re: [OMPI devel] likely bad return from MPI_File_c2f"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try to run the trivial program below. I MPI_File_c2f(MPI_FILE_NULL)
<br>
returns &quot;-1&quot; (minus one), however it seems the routine should return
<br>
&quot;0&quot; (zero).
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
int main()
<br>
{
<br>
&nbsp;&nbsp;MPI_Fint i;
<br>
&nbsp;&nbsp;MPI_File f;
<br>
&nbsp;&nbsp;MPI_Init(0,0);
<br>
&nbsp;&nbsp;i = MPI_File_c2f(MPI_FILE_NULL);
<br>
&nbsp;&nbsp;printf(&quot;MPI_File_c2f(MPI_FILE_NULL) -&gt; %d\n&quot;, i);
<br>
&nbsp;&nbsp;f = MPI_File_f2c(0);
<br>
&nbsp;&nbsp;printf(&quot;MPI_File_f2c(0) == MPI_FILE_NULL -&gt; %s\n&quot;, (f ==
<br>
MPI_FILE_NULL)?&quot;yes&quot;:&quot;no&quot;);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="5394.php">Jeff Squyres: "Re: [OMPI devel] likely bad return from MPI_File_c2f"</a>
<li><strong>Previous message:</strong> <a href="5392.php">George Bosilca: "Re: [OMPI devel] RFC: Rename several OMPI_* names to OPAL_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5394.php">Jeff Squyres: "Re: [OMPI devel] likely bad return from MPI_File_c2f"</a>
<li><strong>Reply:</strong> <a href="5394.php">Jeff Squyres: "Re: [OMPI devel] likely bad return from MPI_File_c2f"</a>
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

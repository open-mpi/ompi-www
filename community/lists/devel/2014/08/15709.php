<?
$subject_val = "[OMPI devel] Envelope of HINDEXED_BLOCK";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 06:54:11 2014" -->
<!-- isoreceived="20140826105411" -->
<!-- sent="Tue, 26 Aug 2014 13:53:51 +0300" -->
<!-- isosent="20140826105351" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Envelope of HINDEXED_BLOCK" -->
<!-- id="CAEcYPwCY0qYY5P74mSWEpaLRw7C_yjUJnPo5mr=MrqS86X2Pcw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Envelope of HINDEXED_BLOCK<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 06:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15710.php">Lisandro Dalcin: "[OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>Previous message:</strong> <a href="15708.php">Gilles Gouaillardet: "[OMPI devel] coll/ml without hwloc (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15715.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Reply:</strong> <a href="15715.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Reply:</strong> <a href="15731.php">George Bosilca: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've just installed 1.8.2, something is still wrong with
<br>
HINDEXED_BLOCK datatypes.
<br>
<p>Please note the example below, it should print &quot;ni=2&quot; but I'm getting &quot;ni=7&quot;.
<br>
<p>$ cat type_hindexed_block.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Datatype datatype;
<br>
&nbsp;&nbsp;MPI_Aint disps[] = {0,2,4,6,8};
<br>
&nbsp;&nbsp;int ni,na,nd,combiner;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Type_create_hindexed_block(5, 2, disps, MPI_BYTE, &amp;datatype);
<br>
&nbsp;&nbsp;MPI_Type_get_envelope(datatype, &amp;ni, &amp;na, &amp;nd, &amp;combiner);
<br>
&nbsp;&nbsp;printf(&quot;ni=%d na=%d nd=%d combiner=%d\n&quot;, ni, na, nd, combiner);
<br>
&nbsp;&nbsp;MPI_Type_free(&amp;datatype);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpicc type_hindexed_block.c
<br>
<p>$ ./a.out
<br>
ni=7 na=5 nd=1 combiner=18
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15710.php">Lisandro Dalcin: "[OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>Previous message:</strong> <a href="15708.php">Gilles Gouaillardet: "[OMPI devel] coll/ml without hwloc (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15715.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Reply:</strong> <a href="15715.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Reply:</strong> <a href="15731.php">George Bosilca: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
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

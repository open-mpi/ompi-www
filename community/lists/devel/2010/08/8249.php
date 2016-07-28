<?
$subject_val = "[OMPI devel] VampirTrace and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 20:59:06 2010" -->
<!-- isoreceived="20100811005906" -->
<!-- sent="Tue, 10 Aug 2010 21:59:01 -0300" -->
<!-- isosent="20100811005901" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] VampirTrace and MPI_Init_thread()" -->
<!-- id="AANLkTimUFYr_=SLgvRbWqjNL5-t-f09FMp_k7NAdbyB1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] VampirTrace and MPI_Init_thread()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-10 20:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8250.php">George Bosilca: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="8248.php">Joshua Hursey: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8250.php">George Bosilca: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8250.php">George Bosilca: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Below you have C program that will MPI_Init_thread()
<br>
<p>$ cat demo/helloworld.c
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int provided;
<br>
&nbsp;&nbsp;int size, rank, len;
<br>
&nbsp;&nbsp;char name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
<br>
<p>&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;MPI_Get_processor_name(name, &amp;len);
<br>
<p>&nbsp;&nbsp;printf(&quot;Hello, World! I am process %d of %d on %s.\n&quot;, rank, size, name);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Now I build like this:
<br>
<p>$ mpicc-vt demo/helloworld.c
<br>
<p>and then try to run it:
<br>
<p>$ ./a.out
<br>
Hello, World! I am process 0 of 1 on trantor.
<br>
[trantor:18854] *** An error occurred in MPI_Group_free
<br>
[trantor:18854] *** on communicator MPI_COMM_WORLD
<br>
[trantor:18854] *** MPI_ERR_GROUP: invalid group
<br>
[trantor:18854] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>However, if MPI_Init() is used, it succeeds.
<br>
<p>It seems the MPI_Init_thread() wrapper to PMPI_Init_thread() is
<br>
missing, see this:
<br>
<p>$ nm a.out | grep MPI_Init
<br>
0805c4ef T MPI_Init
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U MPI_Init_thread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U PMPI_Init
<br>
<p><p>PS: Sorry if this is actually a VT bug. I'm not a VT user, I'm just
<br>
reporting this issue (related to a mpi4py bug report that arrived at
<br>
my inbox months ago).
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8250.php">George Bosilca: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="8248.php">Joshua Hursey: "Re: [OMPI devel] RFC: Checkpoint/Restart Advancements and Bug Fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8250.php">George Bosilca: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8250.php">George Bosilca: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
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

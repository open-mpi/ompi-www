<?
$subject_val = "[OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 28 05:43:44 2014" -->
<!-- isoreceived="20140928094344" -->
<!-- sent="Sun, 28 Sep 2014 12:43:24 +0300" -->
<!-- isosent="20140928094324" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()" -->
<!-- id="CAEcYPwCNcDDzqQHqvj4NyFRDzWkVsJJHnLQPibQRFyMJvyqqhw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-28 05:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15926.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="15924.php">Ralph Castain: "Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()"</a>
<li><strong>Reply:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just built 1.8.3 for another round of testing with mpi4py. I'm getting
<br>
the following valgrind warning:
<br>
<p>==4718== Conditional jump or move depends on uninitialised value(s)
<br>
==4718==    at 0xD0D9F4C: component_select (osc_sm_component.c:333)
<br>
==4718==    by 0x4CF44F6: ompi_osc_base_select (osc_base_init.c:73)
<br>
==4718==    by 0x4C68B69: ompi_win_allocate (win.c:182)
<br>
==4718==    by 0x4CBB8C2: PMPI_Win_allocate (pwin_allocate.c:79)
<br>
==4718==    by 0x400898: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
<p>The offending code is in ompi/mca/osc/sm/osc_sm_component.c, it seems
<br>
you forgot to initialize the &quot;blocking_fence&quot; to a default true or
<br>
false value.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool blocking_fence;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int flag;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != ompi_info_get_bool(info, &quot;blocking_fence&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;blocking_fence, &amp;flag)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (blocking_fence) {
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
<li><strong>Next message:</strong> <a href="15926.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="15924.php">Ralph Castain: "Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()"</a>
<li><strong>Reply:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()"</a>
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

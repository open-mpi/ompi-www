<?
$subject_val = "[OMPI users] Process size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 07:52:07 2008" -->
<!-- isoreceived="20080529115207" -->
<!-- sent="Thu, 29 May 2008 13:54:25 +0200" -->
<!-- isosent="20080529115425" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI users] Process size" -->
<!-- id="483E9971.7080901_at_aomail.uab.es" -->
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
<strong>Subject:</strong> [OMPI users] Process size<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 07:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5749.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<li><strong>Previous message:</strong> <a href="5747.php">Lee Amy: "[OMPI users] Help: Program Terminated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5749.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<li><strong>Reply:</strong> <a href="5749.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I made some tests with a dummy &quot;ping&quot; application. Some memory problems 
<br>
occurred. On these tests I obtained the following results:
<br>
<p>1) OpenMPI (without FT):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- delaying 1 second to send token to other node: orted and 
<br>
application size stable;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- delaying 0 seconds to send token to other node: orted and 
<br>
application size stable.
<br>
<p>2) OpenMPI (with CRCP FT):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- delaying 1 second to send token to other node: orted stable and 
<br>
application size grow in the first seconds and establish;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- delaying 0 seconds to send token to other node: orted stable and 
<br>
application size growing all the time.
<br>
<p>I think that it is something in the CRCP module/component...
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478

</pre>
<p>
#include &lt;/softs/openmpi/include/mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>int main (int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double time_end, time_start;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int count, rank, fim, x;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char buffer[5] = &quot;test!&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (3 &gt; argc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n    Insuficient arguments (%d)\n\n    ping &lt;times&gt; &lt;delay&gt;\n\n&quot;, argc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_Init(&amp;argc, &amp;argv) == MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time_start = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (fim = 1; fim &lt;= atoi(argv[1]); fim++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;(%d) sent token to (%d)\n&quot;, rank, rank+1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(atoi(argv[2]));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buffer, 5, MPI_CHAR, 1, 1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buffer, 5, MPI_CHAR, count-1, 1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buffer, 5, MPI_CHAR, rank-1, 1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;(%d) sent token to (%d)\n&quot;, rank, (rank==(count-1) ? 0 : rank+1));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(atoi(argv[2]));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buffer, 5, MPI_CHAR, (rank==(count-1) ? 0 : rank+1), 1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;time_end = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%f\n&quot;, time_end - time_start);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5749.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<li><strong>Previous message:</strong> <a href="5747.php">Lee Amy: "[OMPI users] Help: Program Terminated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5749.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
<li><strong>Reply:</strong> <a href="5749.php">Josh Hursey: "Re: [OMPI users] Process size"</a>
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

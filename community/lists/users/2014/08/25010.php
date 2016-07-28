<?
$subject_val = "[OMPI users] mpi+openshmem hybrid";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 04:05:07 2014" -->
<!-- isoreceived="20140814080507" -->
<!-- sent="Thu, 14 Aug 2014 12:05:03 +0400" -->
<!-- isosent="20140814080503" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="[OMPI users] mpi+openshmem hybrid" -->
<!-- id="1408003503.595553712_at_f358.i.mail.ru" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] mpi+openshmem hybrid<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 04:05:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25011.php">Mike Dubman: "Re: [OMPI users] mpi+openshmem hybrid"</a>
<li><strong>Previous message:</strong> <a href="25009.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25011.php">Mike Dubman: "Re: [OMPI users] mpi+openshmem hybrid"</a>
<li><strong>Reply:</strong> <a href="25011.php">Mike Dubman: "Re: [OMPI users] mpi+openshmem hybrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
I use Open MPI v1.9a132520.
<br>
<p>Can I use hybrid&#194;&#160;mpi+openshmem?
<br>
Where can i read about?
<br>
<p>I have some problems in simple programm:
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;shmem.h&quot;
<br>
#include &quot;mpi.h&quot;
<br>
int main(int argc, char* argv[])
<br>
{
<br>
int proc, nproc;
<br>
int rank, size, len;
<br>
char version[MPI_MAX_LIBRARY_VERSION_STRING];
<br>
MPI_Init(&amp;argc, &amp;argv);
<br>
start_pes(0);
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
<p>I compile with oshcc, with mpicc i got a compile error.
<br>
<p>1. When i run&#194;&#160;this programm with mpirun/oshrun i got an output
<br>
<p>[1408002416.687274] [node1-130-01:26354:0] proto.c:64 MXM WARN mxm is destroyed but still has pending receive requests
<br>
[1408002416.687604] [node1-130-01:26355:0] proto.c:64 MXM WARN mxm is destroyed but still has pending receive requests
<br>
<p>2. If in programm, i use this code
<br>
start_pes(0);
<br>
MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Finalize();
<br>
<p>i got an error:
<br>
--------------------------------------------------------------------------
<br>
Calling MPI_Init or MPI_Init_thread twice is erroneous.
<br>
--------------------------------------------------------------------------
<br>
[node1-130-01:26469] *** An error occurred in MPI_Init
<br>
[node1-130-01:26469] *** reported by process [2397634561,140733193388033]
<br>
[node1-130-01:26469] *** on communicator MPI_COMM_WORLD
<br>
[node1-130-01:26469] *** MPI_ERR_OTHER: known error not in list
<br>
[node1-130-01:26469] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[node1-130-01:26469] *** and potentially your MPI job)
<br>
[node1-130-01:26468] [[36585,1],0] ORTE_ERROR_LOG: Not found in file routed_radix.c at line 395
<br>
[node1-130-01:26469] [[36585,1],1] ORTE_ERROR_LOG: Not found in file routed_radix.c at line 395
<br>
[compiler-2:02175] 1 more process has sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[compiler-2:02175] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p>--------------------------------------------------------------------------
<br>
Calling MPI_Init or MPI_Init_thread twice is erroneous.
<br>
--------------------------------------------------------------------------
<br>
[node1-130-01:26469] *** An error occurred in MPI_Init
<br>
[node1-130-01:26469] *** reported by process [2397634561,140733193388033]
<br>
[node1-130-01:26469] *** on communicator MPI_COMM_WORLD
<br>
[node1-130-01:26469] *** MPI_ERR_OTHER: known error not in list
<br>
[node1-130-01:26469] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[node1-130-01:26469] *** &#194;&#160; &#194;&#160;and potentially your MPI job)
<br>
[node1-130-01:26468] [[36585,1],0] ORTE_ERROR_LOG: Not found in file routed_radix.c at line 395
<br>
[node1-130-01:26469] [[36585,1],1] ORTE_ERROR_LOG: Not found in file routed_radix.c at line 395
<br>
[compiler-2:02175] 1 more process has sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[compiler-2:02175] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25011.php">Mike Dubman: "Re: [OMPI users] mpi+openshmem hybrid"</a>
<li><strong>Previous message:</strong> <a href="25009.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25011.php">Mike Dubman: "Re: [OMPI users] mpi+openshmem hybrid"</a>
<li><strong>Reply:</strong> <a href="25011.php">Mike Dubman: "Re: [OMPI users] mpi+openshmem hybrid"</a>
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

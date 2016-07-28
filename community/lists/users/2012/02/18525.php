<?
$subject_val = "[OMPI users] Unexpected warning/return from mpirun with minimal MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 19 21:41:39 2012" -->
<!-- isoreceived="20120220024139" -->
<!-- sent="Mon, 20 Feb 2012 03:41:33 +0100" -->
<!-- isosent="20120220024133" -->
<!-- name="Truls Edvard Stokke" -->
<!-- email="trulses_at_[hidden]" -->
<!-- subject="[OMPI users] Unexpected warning/return from mpirun with minimal MPI program" -->
<!-- id="CABhBYV5R+s+qKqBeyaKAa7Q+a0zB8-qzjnbQamo4N9vCDCze1Q_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Unexpected warning/return from mpirun with minimal MPI program<br>
<strong>From:</strong> Truls Edvard Stokke (<em>trulses_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-19 21:41:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18526.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Previous message:</strong> <a href="18524.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18526.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Reply:</strong> <a href="18526.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In running this minimal program (test.c)
<br>
<p>#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main (int argc, char ** argv) {
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;exit(EXIT_FAILURE);
<br>
}
<br>
<p>compiled and ran with the commands
<br>
<p>mpicc test.c
<br>
mpirun -n 1 a.out
<br>
<p>I get the output
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p>The return value of mpirun is 1 (presumably the value of EXIT_FAILURE)
<br>
instead of the expected 0.
<br>
Citing the manual page of mpirun, &quot;mpirun returns 0 if all ranks started by
<br>
mpirun exit after calling MPI_FINALIZE.&quot; which should be the case in the
<br>
program.
<br>
<p>If EXIT_FAILURE is changed to EXIT_SUCCESS there is no output and mpirun
<br>
returns 0 as expected.
<br>
<p>My OpenMPI version is 1.5.4, the code and output from ompi_info --all is
<br>
attached.
<br>
<p>If it is relevant my OS is Fedora 16 and the packages installed are
<br>
openmpi.i686 and openmpi-devel.i686, the code is ran at a single node with
<br>
a single Intel atom processor. I have also ensured that no calls to
<br>
MPI_Init or MPI_Finalize have been optimized out by the compiler.
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18525/ompi_info_output.txt">ompi_info_output.txt</a>
</ul>
<!-- attachment="ompi_info_output.txt" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18525/test.c">test.c</a>
</ul>
<!-- attachment="test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18526.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Previous message:</strong> <a href="18524.php">Alex Margolin: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18526.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Reply:</strong> <a href="18526.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
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

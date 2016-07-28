<?
$subject_val = "[OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 18:40:25 2010" -->
<!-- isoreceived="20101122234025" -->
<!-- sent="Mon, 22 Nov 2010 16:40:14 -0700" -->
<!-- isosent="20101122234014" -->
<!-- name="James Overfelt" -->
<!-- email="overfelt_at_[hidden]" -->
<!-- subject="[OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?" -->
<!-- id="AANLkTinHq-K2S-ixGqrod+SKHDrc=vnzTgSMu+=B5-nQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?<br>
<strong>From:</strong> James Overfelt (<em>overfelt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 18:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14872.php">Parallel Scientific: "[OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
<li><strong>Previous message:</strong> <a href="14870.php">Jeff Squyres: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14963.php">Rob Latham: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14963.php">Rob Latham: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I have a small test case where a file created with MPI_File_open
<br>
is still open at the time MPI_Finalize is called.  In the actual
<br>
program there are lots of open files and it would be nice to avoid the
<br>
resulting &quot;Your MPI job will now abort.&quot; by either having MPI_Finalize
<br>
close the files or honor the error handler and return an error code
<br>
without an abort.
<br>
<p>&nbsp;&nbsp;I've tried with with OpenMPI 1.4.3 and 1.5 with the same results.
<br>
Attached are the configure, compile and source files and the whole
<br>
program follows.
<br>
<p>Any help would be appreciated,
<br>
Dr. James Overfelt
<br>
Sandia National Laboratories
<br>
<p><p><p><p>#include &lt;iostream&gt;
<br>
#include &quot;mpi.h&quot;
<br>
using namespace std;
<br>
int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
<br>
&nbsp;&nbsp;MPI_Info         info ;
<br>
&nbsp;&nbsp;MPI_Info_create(&amp;info);
<br>
&nbsp;&nbsp;MPI_File            fh;
<br>
&nbsp;&nbsp;if (const int stat = MPI_File_open
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(MPI_COMM_SELF, &quot;File_Test.txt&quot;, MPI_MODE_WRONLY |
<br>
MPI_MODE_CREATE, info, &amp;fh))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cerr&lt;&lt; &quot;Error in MPI_File_open&quot;&lt;&lt; stat&lt;&lt;endl;
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>When run on a single processor the output is:
<br>
<p>*** The MPI_Barrier() function was called after MPI_FINALIZE was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[r438767.sandia.gov:2767] Abort after MPI_FINALIZE completed
<br>
successfully; not able to guarantee that all other processes were
<br>
killed!
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14871/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14872.php">Parallel Scientific: "[OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
<li><strong>Previous message:</strong> <a href="14870.php">Jeff Squyres: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14963.php">Rob Latham: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/14963.php">Rob Latham: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
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

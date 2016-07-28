<?
$subject_val = "[OMPI users] Issue with Open MPI 1.5.3 Windows binary builds";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 10:13:06 2011" -->
<!-- isoreceived="20110510141306" -->
<!-- sent="Tue, 10 May 2011 10:12:51 -0400" -->
<!-- isosent="20110510141251" -->
<!-- name="Tyler W. Wilson" -->
<!-- email="tyler_at_[hidden]" -->
<!-- subject="[OMPI users] Issue with Open MPI 1.5.3 Windows binary builds" -->
<!-- id="4DC947E3.80904_at_tylerlabs.com" -->
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
<strong>Subject:</strong> [OMPI users] Issue with Open MPI 1.5.3 Windows binary builds<br>
<strong>From:</strong> Tyler W. Wilson (<em>tyler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-10 10:12:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16502.php">Tim Prince: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="16500.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16519.php">Tyler W. Wilson: "Re: [OMPI users] Issue with Open MPI 1.5.3 Windows binary builds"</a>
<li><strong>Maybe reply:</strong> <a href="16519.php">Tyler W. Wilson: "Re: [OMPI users] Issue with Open MPI 1.5.3 Windows binary builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good day,
<br>
<p>I am new to the Open MPI package, and so am starting at the beginning. I 
<br>
have little if any desire to build the binaries, so I was glad to see a 
<br>
Windows binary release.
<br>
<p>I started with I think is the minimum program:
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>But, when I build and run this (with MS Visual C++ 2010 Express, running 
<br>
on Windows 7 x64), I get this error:
<br>
<p>[Tyler-Quad:06832] [[2206,0],0] ORTE_ERROR_LOG: Value out of bounds in 
<br>
file ..\.
<br>
.\..\openmpi-1.5.3\orte\mca\oob\tcp\oob_tcp.c at line 1193
<br>
<p>And it hangs there.
<br>
<p>As I mentioned, I am new to this project. Perhaps there is some simple 
<br>
configuration I failed to do after the install. Any clues welcome.
<br>
<p>Thank you,
<br>
Tyler
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16502.php">Tim Prince: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="16500.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16519.php">Tyler W. Wilson: "Re: [OMPI users] Issue with Open MPI 1.5.3 Windows binary builds"</a>
<li><strong>Maybe reply:</strong> <a href="16519.php">Tyler W. Wilson: "Re: [OMPI users] Issue with Open MPI 1.5.3 Windows binary builds"</a>
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

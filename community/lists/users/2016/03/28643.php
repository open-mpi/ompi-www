<?
$subject_val = "[OMPI users] MPI_INIT gets stuck";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  6 04:06:15 2016" -->
<!-- isoreceived="20160306090615" -->
<!-- sent="Sun, 6 Mar 2016 10:06:04 +0100" -->
<!-- isosent="20160306090604" -->
<!-- name="Marco Lubosch" -->
<!-- email="marco_lubosch_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_INIT gets stuck" -->
<!-- id="BLU436-SMTP1940108261BF4A388C4487EEEB00_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] MPI_INIT gets stuck<br>
<strong>From:</strong> Marco Lubosch (<em>marco_lubosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-06 04:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28644.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>Previous message:</strong> <a href="28642.php">Hans-J&#195;&#188;rgen Greif: "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28651.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>Reply:</strong> <a href="28651.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello guys,
<br>
<p>I try to do the first steps with Open MPI and I finally got it work on 
<br>
Cygwin64(Windows 7 64bit).
<br>
I am able to compile plain C code without any issues via &quot;mpicc ...&quot; but 
<br>
when I try to initialize MPI the program is getting stuck within 
<br>
&quot;MPI_INIT&quot; without creating CPU load. Example from 
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.8/examples/">https://svn.open-mpi.org/source/xref/ompi_1.8/examples/</a>:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#include &quot;mpi.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int main(int argc, char* argv[])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size, len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char version[MPI_MAX_LIBRARY_VERSION_STRING];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;1\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;2\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;3\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;4\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_library_version(version, &amp;len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;5\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello, world, I am %d of %d, (%s, %d)\n&quot;, rank, size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;version, len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;6\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Compiling works perfectly fine with &quot;mpicc -o hello_c.exe hello_c.c&quot;. 
<br>
But when I run it with &quot;mpirun -np 4 ./hello_c&quot; it creates 4 threads 
<br>
printing &quot;1&quot; but then keeps on running without doing anything. I then 
<br>
have to kill the threads manually to keep on working with Cygwin.
<br>
<p>Can you tell me what I am doing wrong?
<br>
<p>Thanks
<br>
Marco
<br>
<p>PS: Installed packages on Cygwin are libopenmpi, libopenmpi-devel, 
<br>
openmpi, gcc-core
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28643/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28644.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>Previous message:</strong> <a href="28642.php">Hans-J&#195;&#188;rgen Greif: "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28651.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>Reply:</strong> <a href="28651.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
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

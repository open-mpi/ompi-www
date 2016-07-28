<?
$subject_val = "Re: [OMPI users] MPI_INIT gets stuck";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 09:27:04 2016" -->
<!-- isoreceived="20160307142704" -->
<!-- sent="Mon, 7 Mar 2016 15:26:53 +0100" -->
<!-- isosent="20160307142653" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_INIT gets stuck" -->
<!-- id="56DD8FAD.9090505_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BLU436-SMTP1940108261BF4A388C4487EEEB00_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_INIT gets stuck<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-07 09:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28652.php">Nathan Hjelm: "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>Previous message:</strong> <a href="28650.php">Jordan Willis: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>In reply to:</strong> <a href="28643.php">Marco Lubosch: "[OMPI users] MPI_INIT gets stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28653.php">Marco Lubosch: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>Reply:</strong> <a href="28653.php">Marco Lubosch: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/03/2016 10:06, Marco Lubosch wrote:
<br>
<span class="quotelev1">&gt; Hello guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to do the first steps with Open MPI and I finally got it work on
</span><br>
<span class="quotelev1">&gt; Cygwin64(Windows 7 64bit).
</span><br>
<span class="quotelev1">&gt; I am able to compile plain C code without any issues via &quot;mpicc ...&quot; but
</span><br>
<span class="quotelev1">&gt; when I try to initialize MPI the program is getting stuck within
</span><br>
<span class="quotelev1">&gt; &quot;MPI_INIT&quot; without creating CPU load. Example from
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.8/examples/">https://svn.open-mpi.org/source/xref/ompi_1.8/examples/</a>:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;     #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;     int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;          int rank, size, len;
</span><br>
<span class="quotelev1">&gt;          char version[MPI_MAX_LIBRARY_VERSION_STRING];
</span><br>
<span class="quotelev1">&gt;          printf(&quot;1\n&quot;);
</span><br>
<span class="quotelev1">&gt;          MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;          printf(&quot;2\n&quot;);
</span><br>
<span class="quotelev1">&gt;          MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;          printf(&quot;3\n&quot;);
</span><br>
<span class="quotelev1">&gt;          MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;          printf(&quot;4\n&quot;);
</span><br>
<span class="quotelev1">&gt;          MPI_Get_library_version(version, &amp;len);
</span><br>
<span class="quotelev1">&gt;          printf(&quot;5\n&quot;);
</span><br>
<span class="quotelev1">&gt;          printf(&quot;Hello, world, I am %d of %d, (%s, %d)\n&quot;, rank, size,
</span><br>
<span class="quotelev1">&gt;     version, len);
</span><br>
<span class="quotelev1">&gt;          MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;          printf(&quot;6\n&quot;);
</span><br>
<span class="quotelev1">&gt;          return 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiling works perfectly fine with &quot;mpicc -o hello_c.exe hello_c.c&quot;.
</span><br>
<span class="quotelev1">&gt; But when I run it with &quot;mpirun -np 4 ./hello_c&quot; it creates 4 threads
</span><br>
<span class="quotelev1">&gt; printing &quot;1&quot; but then keeps on running without doing anything. I then
</span><br>
<span class="quotelev1">&gt; have to kill the threads manually to keep on working with Cygwin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you tell me what I am doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: Installed packages on Cygwin are libopenmpi, libopenmpi-devel,
</span><br>
<span class="quotelev1">&gt; openmpi, gcc-core
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It seems a local issue. On my W7 64 bit:
<br>
<p>$ mpirun -n 4 ./prova_mpi.exe
<br>
1
<br>
1
<br>
1
<br>
1
<br>
2
<br>
3
<br>
4
<br>
5
<br>
Hello, world, I am 0 of 4, (Open MPI v1.8.8, .., Aug 05, 2015, 126)
<br>
2
<br>
3
<br>
4
<br>
5
<br>
Hello, world, I am 2 of 4, (Open MPI v1.8.8, package: ..., Aug 05, 2015, 
<br>
126)
<br>
2
<br>
3
<br>
4
<br>
5
<br>
Hello, world, I am 1 of 4, (Open MPI v1.8.8, ... , Aug 05, 2015, 126)
<br>
2
<br>
3
<br>
4
<br>
5
<br>
Hello, world, I am 3 of 4, (Open MPI v1.8.8, ... , Aug 05, 2015, 126)
<br>
6
<br>
6
<br>
6
<br>
6
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28652.php">Nathan Hjelm: "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>Previous message:</strong> <a href="28650.php">Jordan Willis: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>In reply to:</strong> <a href="28643.php">Marco Lubosch: "[OMPI users] MPI_INIT gets stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28653.php">Marco Lubosch: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>Reply:</strong> <a href="28653.php">Marco Lubosch: "Re: [OMPI users] MPI_INIT gets stuck"</a>
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

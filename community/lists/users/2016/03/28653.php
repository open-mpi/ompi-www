<?
$subject_val = "Re: [OMPI users] MPI_INIT gets stuck";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 12:58:55 2016" -->
<!-- isoreceived="20160307175855" -->
<!-- sent="Mon, 7 Mar 2016 18:58:50 +0100" -->
<!-- isosent="20160307175850" -->
<!-- name="Marco Lubosch" -->
<!-- email="marco_lubosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_INIT gets stuck" -->
<!-- id="BLU437-SMTP10469B9A643B09393569467EEB10_at_phx.gbl" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56DD8FAD.9090505_at_gmail.com" -->
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
<strong>From:</strong> Marco Lubosch (<em>marco_lubosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-07 12:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28654.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>Previous message:</strong> <a href="28652.php">Nathan Hjelm: "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>In reply to:</strong> <a href="28651.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28654.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>Reply:</strong> <a href="28654.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Marco,
<br>
<p>I reinstalled Cygwin and OMPI like 10 times. I had an issues with 
<br>
gcc(mingw) because it was preinstalled under windows. I then had to 
<br>
remove it and reinstall gcc under cygwin and got it working but as I 
<br>
said only copiling plain C code with &quot;mpicc&quot;. I also disabled Windows 
<br>
Firewall and tried a different router.
<br>
<p>Do you have any suggestions what could cause that problem?
<br>
<p>Greetings
<br>
Marco
<br>
<p>Am 07.03.2016 um 15:26 schrieb Marco Atzeri:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 06/03/2016 10:06, Marco Lubosch wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello guys,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I try to do the first steps with Open MPI and I finally got it work on
</span><br>
<span class="quotelev2">&gt;&gt; Cygwin64(Windows 7 64bit).
</span><br>
<span class="quotelev2">&gt;&gt; I am able to compile plain C code without any issues via &quot;mpicc ...&quot; but
</span><br>
<span class="quotelev2">&gt;&gt; when I try to initialize MPI the program is getting stuck within
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MPI_INIT&quot; without creating CPU load. Example from
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.8/examples/">https://svn.open-mpi.org/source/xref/ompi_1.8/examples/</a>:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;          int rank, size, len;
</span><br>
<span class="quotelev2">&gt;&gt;          char version[MPI_MAX_LIBRARY_VERSION_STRING];
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;1\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;2\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;3\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;4\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Get_library_version(version, &amp;len);
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;5\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;Hello, world, I am %d of %d, (%s, %d)\n&quot;, rank, size,
</span><br>
<span class="quotelev2">&gt;&gt;     version, len);
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;6\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          return 0;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compiling works perfectly fine with &quot;mpicc -o hello_c.exe hello_c.c&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; But when I run it with &quot;mpirun -np 4 ./hello_c&quot; it creates 4 threads
</span><br>
<span class="quotelev2">&gt;&gt; printing &quot;1&quot; but then keeps on running without doing anything. I then
</span><br>
<span class="quotelev2">&gt;&gt; have to kill the threads manually to keep on working with Cygwin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you tell me what I am doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Marco
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: Installed packages on Cygwin are libopenmpi, libopenmpi-devel,
</span><br>
<span class="quotelev2">&gt;&gt; openmpi, gcc-core
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems a local issue. On my W7 64 bit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 4 ./prova_mpi.exe
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt; 4
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 4, (Open MPI v1.8.8, .., Aug 05, 2015, 126)
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt; 4
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 4, (Open MPI v1.8.8, package: ..., Aug 05, 
</span><br>
<span class="quotelev1">&gt; 2015, 126)
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt; 4
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 4, (Open MPI v1.8.8, ... , Aug 05, 2015, 126)
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt; 4
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 3 of 4, (Open MPI v1.8.8, ... , Aug 05, 2015, 126)
</span><br>
<span class="quotelev1">&gt; 6
</span><br>
<span class="quotelev1">&gt; 6
</span><br>
<span class="quotelev1">&gt; 6
</span><br>
<span class="quotelev1">&gt; 6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28651.php">http://www.open-mpi.org/community/lists/users/2016/03/28651.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28654.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>Previous message:</strong> <a href="28652.php">Nathan Hjelm: "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>In reply to:</strong> <a href="28651.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28654.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>Reply:</strong> <a href="28654.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
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

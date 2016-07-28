<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  6 03:47:06 2006" -->
<!-- isoreceived="20061106084706" -->
<!-- sent="Mon, 6 Nov 2006 09:45:24 +0100" -->
<!-- isosent="20061106084524" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Technical inquiry" -->
<!-- id="200611060945.24528.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4444924729pgarcia_at_eside.deusto.es" -->
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
<strong>From:</strong> Sven Stork (<em>stork_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-06 03:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2140.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Previous message:</strong> <a href="2138.php">George Bosilca: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>In reply to:</strong> <a href="2136.php">pgarcia_at_[hidden]: "[OMPI users] Technical inquiry"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2140.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Reply:</strong> <a href="2140.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Pablo.
<br>
On Saturday 04 November 2006 14:04, pgarcia_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, everydoby. Good afternoon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've just configured and installed the openmpi-1.1.2 on a kubuntu 
</span><br>
<span class="quotelev1">&gt; GNU/linux, and I'm trying now to compile the hello.c example without 
</span><br>
<span class="quotelev1">&gt; results.
</span><br>
<p>As George said you are using with mpich. If you installed Open MPI as you said 
<br>
you also have to adapt the PATH and LD_LIBRARY_PATH environment variables 
<br>
(see <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>).
<br>
<p>Regards,
<br>
&nbsp;Sven
<br>
<p><span class="quotelev2">&gt; &gt; root_at_kubuntu:/home/livestrong/mpi/test# uname -a
</span><br>
<span class="quotelev2">&gt; &gt; Linux kubuntu 2.6.15-23-386 #1 PREEMPT Tue May 23 13:49:40 UTC 2006 
</span><br>
<span class="quotelev2">&gt; &gt; i686 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello.c
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; #include &quot;/usr/lib/mpich-mpd/include/mpi.h&quot;
</span><br>
<p>See Georges mail.
<br>
<p><span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Hello word.\n&quot;);
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;         return(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error that I'm finding is this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_kubuntu:/home/livestrong/mpi/prueba# mpirun -np 2 hello
</span><br>
<span class="quotelev1">&gt; 0 - MPI_INIT : MPIRUN chose the wrong device ch_p4; program needs 
</span><br>
<span class="quotelev1">&gt; device ch_p4mpd
</span><br>
<span class="quotelev1">&gt; /usr/lib/mpich/bin/mpirun.ch_p4: line 243: 16625 Segmentation 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
fault  &quot;/home/livestrong/mpi/prueba/hello&quot; -p4pg &quot;/home/livestrong/mpi/prueba/PI16545&quot; -p4wd &quot;/home/livestrong/mpi/prueba&quot;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody know what it can be the problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards and thank you very much in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pablo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PD: I send the ompi_info output and the config.log to you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Besides
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2140.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Previous message:</strong> <a href="2138.php">George Bosilca: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>In reply to:</strong> <a href="2136.php">pgarcia_at_[hidden]: "[OMPI users] Technical inquiry"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2140.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Reply:</strong> <a href="2140.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
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

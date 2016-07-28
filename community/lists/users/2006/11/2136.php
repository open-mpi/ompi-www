<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov  4 08:05:59 2006" -->
<!-- isoreceived="20061104130559" -->
<!-- sent="Sat, 4 Nov 2006 14:04:54 +0100 (CET)" -->
<!-- isosent="20061104130454" -->
<!-- name="pgarcia_at_[hidden]" -->
<!-- email="pgarcia_at_[hidden]" -->
<!-- subject="[OMPI users] Technical inquiry" -->
<!-- id="4444924729pgarcia_at_eside.deusto.es" -->
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
<strong>From:</strong> <a href="mailto:pgarcia_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Technical%20inquiry"><em>pgarcia_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-11-04 08:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2137.php">Jose Quiroga: "[OMPI users] Suspected bug during MPI_Barrier. (harmless report)"</a>
<li><strong>Previous message:</strong> <a href="2135.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2138.php">George Bosilca: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Reply:</strong> <a href="2138.php">George Bosilca: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Reply:</strong> <a href="2139.php">Sven Stork: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Maybe reply:</strong> <a href="2141.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, everydoby. Good afternoon.
<br>
<p>I've just configured and installed the openmpi-1.1.2 on a kubuntu 
<br>
GNU/linux, and I'm trying now to compile the hello.c example without 
<br>
results.
<br>
<p><span class="quotelev1">&gt; root_at_kubuntu:/home/livestrong/mpi/test# uname -a
</span><br>
<span class="quotelev1">&gt; Linux kubuntu 2.6.15-23-386 #1 PREEMPT Tue May 23 13:49:40 UTC 2006 
</span><br>
<span class="quotelev1">&gt; i686 GNU/Linux
</span><br>
<p>Hello.c
<br>
-------
<br>
#include &quot;/usr/lib/mpich-mpd/include/mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
int main (int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello word.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return(0);
<br>
}
<br>
<p>The error that I'm finding is this:
<br>
<p>root_at_kubuntu:/home/livestrong/mpi/prueba# mpirun -np 2 hello
<br>
0 - MPI_INIT : MPIRUN chose the wrong device ch_p4; program needs 
<br>
device ch_p4mpd
<br>
/usr/lib/mpich/bin/mpirun.ch_p4: line 243: 16625 Segmentation 
<br>
fault  &quot;/home/livestrong/mpi/prueba/hello&quot; -p4pg &quot;/home/livestrong/mpi/prueba/PI16545&quot; -p4wd &quot;/home/livestrong/mpi/prueba&quot;
<br>
<p>Does anybody know what it can be the problem?
<br>
<p>Regards and thank you very much in advance.
<br>
<p>Pablo.
<br>
<p>PD: I send the ompi_info output and the config.log to you.
<br>
<p>Besides
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>APPLICATION/OCTET-STREAM attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2136/question.tar.gz">question.tar.gz</a>
</ul>
<!-- attachment="question.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2137.php">Jose Quiroga: "[OMPI users] Suspected bug during MPI_Barrier. (harmless report)"</a>
<li><strong>Previous message:</strong> <a href="2135.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2138.php">George Bosilca: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Reply:</strong> <a href="2138.php">George Bosilca: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Reply:</strong> <a href="2139.php">Sven Stork: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Maybe reply:</strong> <a href="2141.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
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

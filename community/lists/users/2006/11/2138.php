<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov  4 11:41:43 2006" -->
<!-- isoreceived="20061104164143" -->
<!-- sent="Sat, 4 Nov 2006 11:42:25 -0500 (Eastern Standard Time)" -->
<!-- isosent="20061104164225" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Technical inquiry" -->
<!-- id="Pine.WNT.4.64.0611041135190.3268_at_bosilca" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-04 11:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2139.php">Sven Stork: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Previous message:</strong> <a href="2137.php">Jose Quiroga: "[OMPI users] Suspected bug during MPI_Barrier. (harmless report)"</a>
<li><strong>In reply to:</strong> <a href="2136.php">pgarcia_at_[hidden]: "[OMPI users] Technical inquiry"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2139.php">Sven Stork: "Re: [OMPI users] Technical inquiry"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pablo,
<br>
<p>The problem is quite obvious ... you're not using Open MPI. Your program 
<br>
was compiled with the mpicc provided by MPICH. The specific error seems to 
<br>
indicate some internal problem with the communication device.
<br>
<p>But, you should ask for help on the MPICH related mailing lists 
<br>
(<a href="http://www-unix.mcs.anl.gov/mpi/mpich2/">http://www-unix.mcs.anl.gov/mpi/mpich2/</a>). Please submit the question 
<br>
directly to their mailing list, I'm sure they will be happy to help you.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: BTW never use hardcoded paths for the include files. The compilers 
<br>
support the -I option for this exact purpose.
<br>
<p><p>On Sat, 4 Nov 2006, pgarcia_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root_at_kubuntu:/home/livestrong/mpi/test# uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux kubuntu 2.6.15-23-386 #1 PREEMPT Tue May 23 13:49:40 UTC 2006
</span><br>
<span class="quotelev2">&gt;&gt; i686 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello.c
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; #include &quot;/usr/lib/mpich-mpd/include/mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;        MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;        printf(&quot;Hello word.\n&quot;);
</span><br>
<span class="quotelev1">&gt;        MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;        return(0);
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
<span class="quotelev1">&gt; fault  &quot;/home/livestrong/mpi/prueba/hello&quot; -p4pg &quot;/home/livestrong/mpi/prueba/PI16545&quot; -p4wd &quot;/home/livestrong/mpi/prueba&quot;
</span><br>
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
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2139.php">Sven Stork: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Previous message:</strong> <a href="2137.php">Jose Quiroga: "[OMPI users] Suspected bug during MPI_Barrier. (harmless report)"</a>
<li><strong>In reply to:</strong> <a href="2136.php">pgarcia_at_[hidden]: "[OMPI users] Technical inquiry"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2139.php">Sven Stork: "Re: [OMPI users] Technical inquiry"</a>
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

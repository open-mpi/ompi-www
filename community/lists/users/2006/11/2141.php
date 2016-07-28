<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  6 04:07:07 2006" -->
<!-- isoreceived="20061106090707" -->
<!-- sent="Mon, 6 Nov 2006 10:03:55 +0100 (CET)" -->
<!-- isosent="20061106090355" -->
<!-- name="pgarcia_at_[hidden]" -->
<!-- email="pgarcia_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Technical inquiry" -->
<!-- id="3574661359pgarcia_at_eside.deusto.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Technical inquiry" -->
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
<strong>Date:</strong> 2006-11-06 04:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2142.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Previous message:</strong> <a href="2140.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Maybe in reply to:</strong> <a href="2136.php">pgarcia_at_[hidden]: "[OMPI users] Technical inquiry"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, George, Sven. Good morning.
<br>
<p>Yes, indeed. I found mpich debian package already installed in the
<br>
system, so there was a slight mismatching. That was the reason for my
<br>
harcoded include intuition. I was trying to assure what library was
<br>
really used. Environment variables are ok.
<br>
<p>Thank you very much for your help.
<br>
<p>Regards.
<br>
<p>Pablo.
<br>
<p><span class="quotelev1">&gt; Hello Pablo.
</span><br>
<span class="quotelev1">&gt; On Saturday 04 November 2006 14:04, pgarcia_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi, everydoby. Good afternoon.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've just configured and installed the openmpi-1.1.2 on a kubuntu 
</span><br>
<span class="quotelev2">&gt; &gt; GNU/linux, and I'm trying now to compile the hello.c example without 
</span><br>
<span class="quotelev2">&gt; &gt; results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As George said you are using with mpich. If you installed Open MPI as
</span><br>
you said 
<br>
<span class="quotelev1">&gt; you also have to adapt the PATH and LD_LIBRARY_PATH environment variables 
</span><br>
<span class="quotelev1">&gt; (see <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;  Sven
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; root_at_kubuntu:/home/livestrong/mpi/test# uname -a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Linux kubuntu 2.6.15-23-386 #1 PREEMPT Tue May 23 13:49:40 UTC 2006 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i686 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello.c
</span><br>
<span class="quotelev2">&gt; &gt; -------
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;/usr/lib/mpich-mpd/include/mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See Georges mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main (int argc, char** argv)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;         printf(&quot;Hello word.\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;         return(0);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The error that I'm finding is this:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; root_at_kubuntu:/home/livestrong/mpi/prueba# mpirun -np 2 hello
</span><br>
<span class="quotelev2">&gt; &gt; 0 - MPI_INIT : MPIRUN chose the wrong device ch_p4; program needs 
</span><br>
<span class="quotelev2">&gt; &gt; device ch_p4mpd
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib/mpich/bin/mpirun.ch_p4: line 243: 16625 Segmentation 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; fault  &quot;/home/livestrong/mpi/prueba/hello&quot; -p4pg
</span><br>
&quot;/home/livestrong/mpi/prueba/PI16545&quot; -p4wd &quot;/home/livestrong/mpi/prueba&quot;
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does anybody know what it can be the problem?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards and thank you very much in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Pablo.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; PD: I send the ompi_info output and the config.log to you.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Besides
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2142.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<li><strong>Previous message:</strong> <a href="2140.php">pgarcia_at_[hidden]: "Re: [OMPI users] Technical inquiry"</a>
<li><strong>Maybe in reply to:</strong> <a href="2136.php">pgarcia_at_[hidden]: "[OMPI users] Technical inquiry"</a>
<!-- nextthread="start" -->
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

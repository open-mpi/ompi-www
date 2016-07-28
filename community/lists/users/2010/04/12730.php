<?
$subject_val = "Re: [OMPI users] How to debug Open MPI programs with gdb";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 10:44:23 2010" -->
<!-- isoreceived="20100422144423" -->
<!-- sent="Thu, 22 Apr 2010 08:44:13 -0600" -->
<!-- isosent="20100422144413" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to debug Open MPI programs with gdb" -->
<!-- id="BBE6B231-D2B4-4D31-95C8-8BDE252909A9_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="201004221311.50053.nemanja.ilic.81_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to debug Open MPI programs with gdb<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 10:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12731.php">Немања Илић (Nemanja Ilic): "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Previous message:</strong> <a href="12729.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>In reply to:</strong> <a href="12729.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12731.php">Немања Илић (Nemanja Ilic): "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Reply:</strong> <a href="12731.php">Немања Илић (Nemanja Ilic): "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of OMPI are you using?
<br>
<p>On Apr 22, 2010, at 5:11 AM, &#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic) wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to debug with command: &quot;mpirun -debugger gdb -debug -np 4 my_program&quot;
</span><br>
<span class="quotelev1">&gt; Surely,  it starts the debugger, but it doesn't start the debugging nor it loads any of the my_program threads into the debugger. If I start debugging manually (&quot;file my_program&quot;, then &quot;run&quot;), I can start only one thread of my_program.
</span><br>
<span class="quotelev1">&gt; On the contrary when I debug with &quot;mpirun -np 4 xterm -e gdb my_mpi_application&quot; the four debugger windows are started with separate thread each, just as it should be.
</span><br>
<span class="quotelev1">&gt; Since I will be using debugger on a remote computer I can only run gdb in console mode. Can anyone help me with this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance,
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Nemanja Ilic
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12731.php">Немања Илић (Nemanja Ilic): "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Previous message:</strong> <a href="12729.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>In reply to:</strong> <a href="12729.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12731.php">Немања Илић (Nemanja Ilic): "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Reply:</strong> <a href="12731.php">Немања Илић (Nemanja Ilic): "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
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

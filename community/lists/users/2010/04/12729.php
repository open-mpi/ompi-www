<?
$subject_val = "[OMPI users] How to debug Open MPI programs with gdb";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 07:10:29 2010" -->
<!-- isoreceived="20100422111029" -->
<!-- sent="Thu, 22 Apr 2010 13:11:49 +0200" -->
<!-- isosent="20100422111149" -->
<!-- name="&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic)" -->
<!-- email="nemanja.ilic.81_at_[hidden]" -->
<!-- subject="[OMPI users] How to debug Open MPI programs with gdb" -->
<!-- id="201004221311.50053.nemanja.ilic.81_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to debug Open MPI programs with gdb<br>
<strong>From:</strong> &#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic) (<em>nemanja.ilic.81_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 07:11:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12730.php">Ralph Castain: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Previous message:</strong> <a href="12728.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12730.php">Ralph Castain: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Reply:</strong> <a href="12730.php">Ralph Castain: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Reply:</strong> <a href="12734.php">Jed Brown: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Reply:</strong> <a href="12735.php">Trent Creekmore: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I tried to debug with command: &quot;mpirun -debugger gdb -debug -np 4 my_program&quot;
<br>
Surely,  it starts the debugger, but it doesn't start the debugging nor it loads any of the my_program threads into the debugger. If I start debugging manually (&quot;file my_program&quot;, then &quot;run&quot;), I can start only one thread of my_program.
<br>
On the contrary when I debug with &quot;mpirun -np 4 xterm -e gdb my_mpi_application&quot; the four debugger windows are started with separate thread each, just as it should be.
<br>
Since I will be using debugger on a remote computer I can only run gdb in console mode. Can anyone help me with this?
<br>
<p>Thank you in advance,
<br>
Best regards,
<br>
Nemanja Ilic
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12730.php">Ralph Castain: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Previous message:</strong> <a href="12728.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12730.php">Ralph Castain: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Reply:</strong> <a href="12730.php">Ralph Castain: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Reply:</strong> <a href="12734.php">Jed Brown: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Reply:</strong> <a href="12735.php">Trent Creekmore: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
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

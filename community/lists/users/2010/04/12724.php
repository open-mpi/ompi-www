<?
$subject_val = "[OMPI users] Totalview ( tvscript ) &amp; Open MPI problem with memory debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 08:09:11 2010" -->
<!-- isoreceived="20100421120911" -->
<!-- sent="Wed, 21 Apr 2010 13:09:06 +0100" -->
<!-- isosent="20100421120906" -->
<!-- name="Conboy, James" -->
<!-- email="Jim.Conboy_at_[hidden]" -->
<!-- subject="[OMPI users] Totalview ( tvscript ) &amp;amp; Open MPI problem with memory debugging" -->
<!-- id="D4E586A8BEF6CA469914A0AFC782E27201C3DB_at_ntsrv-exch02.jetnet.jet.efda.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Totalview ( tvscript ) &amp; Open MPI problem with memory debugging<br>
<strong>From:</strong> Conboy, James (<em>Jim.Conboy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 08:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12725.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12723.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
( For information only )
<br>
<p>I reported a bug which stops Totalview saving .mdbg files using tvscript
<br>
-
<br>
<p>mpirun -V		mpirun (Open MPI) 1.4
<br>
totalview -v	Linux x86 TotalView 8.8.0-0
<br>
<p>This is logged ( by Totalview )as 
<br>
<p>CR 12192 - Tvscript fails to save mdbg file when specified with line
<br>
number 
<br>
action point during OpenMPI debugging
<br>
<p>Running this script ( under Sun grid engine )-
<br>
<p>&nbsp;tvscript -verbosity=info -memory_debugging \
<br>
&nbsp;&nbsp;&nbsp;-create_actionpoint &quot;mpiPi.F#92=&gt;save_memory_debugging_file&quot; \
<br>
&nbsp;&nbsp;&nbsp;-stdin ../_pi_ -stdout mpi_pi.log                  \
<br>
&nbsp;&nbsp;&nbsp;-mpi &quot;Open MPI&quot; -np $NSLOTS $XE/mpiPi
<br>
<p>&nbsp;&nbsp;- gives an error ( for each process ) 
<br>
&nbsp;
<br>
&nbsp;Thread 1.1 hit breakpoint 3 at line 92 in &quot;MAIN&quot;
<br>
<p>&nbsp;ERROR:  Failed call to action handler with command 
<br>
&nbsp;'memory_action_save_memory_debugging_file {options {} actionpoint_id 3 
<br>
&nbsp;thread_id 1.1 event actionpoint actionpoint_source_loc_expr 92 
<br>
&nbsp;process_id 1}' (expected integer but got &quot;1190_at_145.239.47.142&quot;)
<br>
<p>&nbsp;( &amp; no .mdgb files.. )  Non-memory options ( eg traceback ) appear to
<br>
work OK
<br>
<p><p>With Totalview 8.6 &amp; OpenMPI 1.3.3 I got
<br>
<p>ERROR:  Unknown event  while trying to notify handlers
<br>
Killed slave process 4, named &quot;mpiPi&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;when trying to launch the processes, so 8.8/1.4 is a definite
<br>
improvement..
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jim Conboy  ( Culham Centre for Fusion Energy )
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12725.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12723.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
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

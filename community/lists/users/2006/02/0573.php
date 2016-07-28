<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  3 10:23:58 2006" -->
<!-- isoreceived="20060203152358" -->
<!-- sent="Fri, 03 Feb 2006 16:23:48 +0100" -->
<!-- isosent="20060203152348" -->
<!-- name="Andy Vierstraete" -->
<!-- email="andy.vierstraete_at_[hidden]" -->
<!-- subject="[O-MPI users] problem running Migrate with open-MPI" -->
<!-- id="43E37584.5060500_at_ugent.be" -->
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
<strong>From:</strong> Andy Vierstraete (<em>andy.vierstraete_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-03 10:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0574.php">Xiaoning (David) Yang: "[O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0572.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0602.php">Brian Barrett: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0602.php">Brian Barrett: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have installed Migrate  2.1.2, but it fails to run on open-MPI (it 
<br>
does run on LAM-MPI : see end of mail)
<br>
<p>my system is Suse 10 on Athlon X2
<br>
<p>hostfile : localhost slots=2 max_slots=2
<br>
<p>I tried different commands :
<br>
<p>1. does not start : error message :
<br>
******************************************
<br>
<p>avierstr_at_muscorum:~/thomas&gt; mpiexec  -np 2 migrate-mpi
<br>
mpiexec noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited on 
<br>
signal 11.
<br>
[muscorum:07212] ERROR: A daemon on node localhost failed to start as 
<br>
expected.
<br>
[muscorum:07212] ERROR: There may be more information available from
<br>
[muscorum:07212] ERROR: the remote shell (see above).
<br>
[muscorum:07212] The daemon received a signal 11.
<br>
1 additional process aborted (not shown)
<br>
<p>************************************************
<br>
<p>2. starts a non-ending loop :
<br>
************************************************
<br>
<p>avierstr_at_muscorum:~/thomas&gt; mpirun -np 2 --hostfile ./hostfile migrate-mpi
<br>
migrate-mpi
<br>
&nbsp;&nbsp;=============================================
<br>
&nbsp;&nbsp;MIGRATION RATE AND POPULATION SIZE ESTIMATION
<br>
&nbsp;&nbsp;using Markov Chain Monte Carlo simulation
<br>
&nbsp;&nbsp;=============================================
<br>
&nbsp;&nbsp;Version 2.1.2
<br>
&nbsp;&nbsp;Program started at   Fri Feb  3 15:58:57 2006
<br>
<p><p>&nbsp;&nbsp;Settings for this run:
<br>
&nbsp;&nbsp;D       Data type currently set to:             DNA sequence model
<br>
&nbsp;&nbsp;I       Input/Output formats
<br>
&nbsp;&nbsp;P       Parameters  [start, migration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
&nbsp;&nbsp;(Type Y or the letter for one to change)
<br>
&nbsp;&nbsp;Settings for this run:
<br>
&nbsp;&nbsp;D       Data type currently set to:             DNA sequence model
<br>
&nbsp;&nbsp;I       Input/Output formats
<br>
&nbsp;&nbsp;P       Parameters  [start, migration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
&nbsp;&nbsp;(Type Y or the letter for one to change)
<br>
&nbsp;&nbsp;Settings for this run:
<br>
&nbsp;&nbsp;D       Data type currently set to:             DNA sequence model
<br>
&nbsp;&nbsp;I       Input/Output formats
<br>
&nbsp;&nbsp;P       Parameters  [start, migration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
&nbsp;&nbsp;(Type Y or the letter for one to change)
<br>
&nbsp;&nbsp;Settings for this run:
<br>
&nbsp;&nbsp;D       Data type currently set to:             DNA sequence model
<br>
&nbsp;&nbsp;I       Input/Output formats
<br>
&nbsp;&nbsp;P       Parameters  [start, migration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
&nbsp;&nbsp;(Type Y or the letter for one to change)
<br>
&nbsp;&nbsp;Settings for this run:
<br>
&nbsp;&nbsp;D       Data type currently set to:             DNA sequence model
<br>
&nbsp;&nbsp;I       Input/Output formats
<br>
&nbsp;&nbsp;P       Parameters  [start, migration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
&nbsp;&nbsp;(Type Y or the letter for one to change)
<br>
igration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
&nbsp;&nbsp;(Type Y or the letter for one to change)
<br>
&nbsp;&nbsp;Settings for this run:
<br>
&nbsp;&nbsp;D       Data type currently set to:             DNA sequence model
<br>
&nbsp;&nbsp;I       Input/Output formats
<br>
&nbsp;&nbsp;P       Parameters  [start, migration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
&nbsp;&nbsp;(Type Y or the letter for one to change)
<br>
&nbsp;&nbsp;Settings for this run:
<br>
&nbsp;&nbsp;D       Data type currently set to:             DNA sequence model
<br>
&nbsp;&nbsp;I       Input/Output formats
<br>
&nbsp;&nbsp;P       Parameters  [start, migration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
&nbsp;&nbsp;(Type Y or the letter for one to change)
<br>
&nbsp;&nbsp;Settings for this run:
<br>
&nbsp;&nbsp;D       Data type currently set to:             DNA sequence model
<br>
&nbsp;&nbsp;I       Input/Output formats
<br>
&nbsp;&nbsp;P       Parameters  [start, migration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
<p>****************************************************************
<br>
<p><p><p><p><p>3. with LAM-MPI on Suse 8.2 it works after lamboot hostfile : 
<br>
****************************************************************
<br>
<p>avierstr_at_molfyl1:~/migrate-2.1.0/src&gt; mpiexec  -np 2 ./migrate-n
<br>
&nbsp;&nbsp;=============================================
<br>
&nbsp;&nbsp;MIGRATION RATE AND POPULATION SIZE ESTIMATION
<br>
&nbsp;&nbsp;using Markov Chain Monte Carlo simulation
<br>
&nbsp;&nbsp;=============================================
<br>
&nbsp;&nbsp;Version  2.1.0
<br>
&nbsp;&nbsp;Program started at   Fri Feb  3 14:05:05 2006
<br>
<p><p>&nbsp;&nbsp;Settings for this run:
<br>
&nbsp;&nbsp;D       Data type currently set to:             DNA sequence model
<br>
&nbsp;&nbsp;I       Input/Output formats
<br>
&nbsp;&nbsp;P       Parameters  [start, migration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
&nbsp;&nbsp;(Type Y or the letter for one to change)
<br>
&nbsp;&nbsp;=============================================
<br>
&nbsp;&nbsp;MIGRATION RATE AND POPULATION SIZE ESTIMATION
<br>
&nbsp;&nbsp;using Markov Chain Monte Carlo simulation
<br>
&nbsp;&nbsp;=============================================
<br>
&nbsp;&nbsp;Version  2.1.0
<br>
&nbsp;&nbsp;Program started at   Fri Feb  3 14:05:05 2006
<br>
<p><p>&nbsp;&nbsp;Settings for this run:
<br>
&nbsp;&nbsp;D       Data type currently set to:             DNA sequence model
<br>
&nbsp;&nbsp;I       Input/Output formats
<br>
&nbsp;&nbsp;P       Parameters  [start, migration model]
<br>
&nbsp;&nbsp;S       Search strategy
<br>
&nbsp;&nbsp;W       Write a parmfile
<br>
&nbsp;&nbsp;Q       Quit the program
<br>
<p><p>&nbsp;&nbsp;Are the settings correct?
<br>
&nbsp;&nbsp;(Type Y or the letter for one to change)
<br>
y
<br>
<p><p>Reading BALTIC ...
<br>
Reading WE ...
<br>
Reading WS ...
<br>
Reading YTH ...
<br>
Reading SEI ...
<br>
Reading EL ...
<br>
Reading KILK ...
<br>
Reading GI ...
<br>
Reading RdA ...
<br>
Reading GU ...
<br>
<p><p>Options in use:
<br>
---------------
<br>
Datatype: DNA sequence data
<br>
Random number seed (with internal timer)           1138971909
<br>
Start parameters:
<br>
&nbsp;&nbsp;&nbsp;Theta values were generated  from the FST-calculation
<br>
&nbsp;&nbsp;&nbsp;M values were generated from the FST-calculation
<br>
Migration model:
<br>
&nbsp;...........
<br>
<p><pre>
-- 
*********************************************************************
* Youth is a wonderful thing. What a crime to waste it on children. *
*                                             (George Bernard Shaw) *
*********************************************************************
Andy Vierstraete
Department of Biology
University of Ghent
K. L. Ledeganckstraat 35
B-9000 Gent
Belgium
phone : 09-264.52.66
fax : 09-264.87.93
<a href="http://allserv.UGent.be/~avierstr/">http://allserv.UGent.be/~avierstr/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0574.php">Xiaoning (David) Yang: "[O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0572.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0602.php">Brian Barrett: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0602.php">Brian Barrett: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
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

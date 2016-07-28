<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 12:42:20 2006" -->
<!-- isoreceived="20060208174220" -->
<!-- sent="Wed, 8 Feb 2006 12:42:00 -0500" -->
<!-- isosent="20060208174200" -->
<!-- name="Peter Beerli" -->
<!-- email="beerli_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] problem running Migrate with open-MPI" -->
<!-- id="FAA546CE-1C6D-4541-BA15-F1B7EDB54582_at_scs.fsu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A4CDD852-9058-4166-B757-4D565D44F4B6_at_open-mpi.org" -->
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
<strong>From:</strong> Peter Beerli (<em>beerli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 12:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0605.php">Jean-Christophe Hugly: "[O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0603.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="0602.php">Brian Barrett: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0633.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0633.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0634.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brian,
<br>
<p>The original poster intended to run migrate-n in parallel mode, but the
<br>
stdout fragment shows that the program was compiled for a non-MPI  
<br>
architecture
<br>
(either single CPU or SMP pthreads) [I talked with him list-offline  
<br>
and it used pthreads].
<br>
A version for parallel runs shows this fact in its first couple of  
<br>
lines, like this (&lt;@@@@):
<br>
&nbsp;&nbsp;&nbsp;=============================================
<br>
&nbsp;&nbsp;&nbsp;MIGRATION RATE AND POPULATION SIZE ESTIMATION
<br>
&nbsp;&nbsp;&nbsp;using Markov Chain Monte Carlo simulation
<br>
&nbsp;&nbsp;&nbsp;=============================================
<br>
&nbsp;&nbsp;&nbsp;compiled for a PARALLEL COMPUTER ARCHITECTURE    
<br>
&lt;@@@@@@@@@@@@@@@@@@@@@@@@@
<br>
&nbsp;&nbsp;&nbsp;Version debug 2.1.3   [x]
<br>
&nbsp;&nbsp;&nbsp;Program started at   Wed Feb  8 12:29:35 2006
<br>
<p>As far as I am concerned migrate-n compiles and runs on openmpi  
<br>
1.0.1. There might be some use in running
<br>
the program multiple times completely independently through openmpi  
<br>
or lam for simulation purposes, but
<br>
that would not be a typical use of the program that can distribute  
<br>
multiple genetic loci on multiple nodes and only having
<br>
the master handling input and output (when compiled using configure;  
<br>
make mpis or configure;make mpi)
<br>
<p><p>Peter
<br>
<pre>
----
Peter Beerli,
Computational Evolutionary Biology Group
School of Computational Science (SCS)
and Biological Sciences Department
150-T Dirac Science Library
Florida State University
Tallahassee, Florida 32306-4120 USA
Webpage: <a href="http://www.csit.fsu.edu/~beerli">http://www.csit.fsu.edu/~beerli</a>
Phone: 850.645.1324
Fax: 850.644.0094
On Feb 8, 2006, at 11:24 AM, Brian Barrett wrote:
&gt; I think we fixed this over this last weekend.  I believe the problem
&gt; was our mis-handling of standard input in some cases. I believe I was
&gt; able to get the application running (but I could be fooling myself
&gt; there...).  Could you download the latest nightly build from the URL
&gt; below and see if it works for you?  The fixes are scheduled to be
&gt; part of Open MPI 1.0.2, which should be out real soon now.
&gt;
&gt;      <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
&gt;
&gt; Thanks,
&gt;
&gt; Brian
&gt;
&gt; On Feb 3, 2006, at 10:23 AM, Andy Vierstraete wrote:
&gt;
&gt;&gt; Hi,
&gt;&gt;
&gt;&gt; I have installed Migrate  2.1.2, but it fails to run on open-MPI (it
&gt;&gt; does run on LAM-MPI : see end of mail)
&gt;&gt;
&gt;&gt; my system is Suse 10 on Athlon X2
&gt;&gt;
&gt;&gt; hostfile : localhost slots=2 max_slots=2
&gt;&gt;
&gt;&gt; I tried different commands :
&gt;&gt;
&gt;&gt; 1. does not start : error message :
&gt;&gt; ******************************************
&gt;&gt;
&gt;&gt; avierstr_at_muscorum:~/thomas&gt; mpiexec  -np 2 migrate-mpi
&gt;&gt; mpiexec noticed that job rank 1 with PID 0 on node &quot;localhost&quot;
&gt;&gt; exited on
&gt;&gt; signal 11.
&gt;&gt; [muscorum:07212] ERROR: A daemon on node localhost failed to start as
&gt;&gt; expected.
&gt;&gt; [muscorum:07212] ERROR: There may be more information available from
&gt;&gt; [muscorum:07212] ERROR: the remote shell (see above).
&gt;&gt; [muscorum:07212] The daemon received a signal 11.
&gt;&gt; 1 additional process aborted (not shown)
&gt;&gt;
&gt;&gt; ************************************************
&gt;&gt;
&gt;&gt; 2. starts a non-ending loop :
&gt;&gt; ************************************************
&gt;&gt;
&gt;&gt; avierstr_at_muscorum:~/thomas&gt; mpirun -np 2 --hostfile ./hostfile
&gt;&gt; migrate-mpi
&gt;&gt; migrate-mpi
&gt;&gt;   =============================================
&gt;&gt;   MIGRATION RATE AND POPULATION SIZE ESTIMATION
&gt;&gt;   using Markov Chain Monte Carlo simulation
&gt;&gt;   =============================================
&gt;&gt;   Version 2.1.2
&gt;&gt;   Program started at   Fri Feb  3 15:58:57 2006
&gt;&gt;
&gt;&gt;
&gt;&gt;   Settings for this run:
&gt;&gt;   D       Data type currently set to:             DNA sequence model
&gt;&gt;   I       Input/Output formats
&gt;&gt;   P       Parameters  [start, migration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;   (Type Y or the letter for one to change)
&gt;&gt;   Settings for this run:
&gt;&gt;   D       Data type currently set to:             DNA sequence model
&gt;&gt;   I       Input/Output formats
&gt;&gt;   P       Parameters  [start, migration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;   (Type Y or the letter for one to change)
&gt;&gt;   Settings for this run:
&gt;&gt;   D       Data type currently set to:             DNA sequence model
&gt;&gt;   I       Input/Output formats
&gt;&gt;   P       Parameters  [start, migration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;   (Type Y or the letter for one to change)
&gt;&gt;   Settings for this run:
&gt;&gt;   D       Data type currently set to:             DNA sequence model
&gt;&gt;   I       Input/Output formats
&gt;&gt;   P       Parameters  [start, migration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;   (Type Y or the letter for one to change)
&gt;&gt;   Settings for this run:
&gt;&gt;   D       Data type currently set to:             DNA sequence model
&gt;&gt;   I       Input/Output formats
&gt;&gt;   P       Parameters  [start, migration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;   (Type Y or the letter for one to change)
&gt;&gt; igration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;   (Type Y or the letter for one to change)
&gt;&gt;   Settings for this run:
&gt;&gt;   D       Data type currently set to:             DNA sequence model
&gt;&gt;   I       Input/Output formats
&gt;&gt;   P       Parameters  [start, migration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;   (Type Y or the letter for one to change)
&gt;&gt;   Settings for this run:
&gt;&gt;   D       Data type currently set to:             DNA sequence model
&gt;&gt;   I       Input/Output formats
&gt;&gt;   P       Parameters  [start, migration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;   (Type Y or the letter for one to change)
&gt;&gt;   Settings for this run:
&gt;&gt;   D       Data type currently set to:             DNA sequence model
&gt;&gt;   I       Input/Output formats
&gt;&gt;   P       Parameters  [start, migration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;
&gt;&gt; ****************************************************************
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; 3. with LAM-MPI on Suse 8.2 it works after lamboot hostfile :
&gt;&gt; ****************************************************************
&gt;&gt;
&gt;&gt; avierstr_at_molfyl1:~/migrate-2.1.0/src&gt; mpiexec  -np 2 ./migrate-n
&gt;&gt;   =============================================
&gt;&gt;   MIGRATION RATE AND POPULATION SIZE ESTIMATION
&gt;&gt;   using Markov Chain Monte Carlo simulation
&gt;&gt;   =============================================
&gt;&gt;   Version  2.1.0
&gt;&gt;   Program started at   Fri Feb  3 14:05:05 2006
&gt;&gt;
&gt;&gt;
&gt;&gt;   Settings for this run:
&gt;&gt;   D       Data type currently set to:             DNA sequence model
&gt;&gt;   I       Input/Output formats
&gt;&gt;   P       Parameters  [start, migration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;   (Type Y or the letter for one to change)
&gt;&gt;   =============================================
&gt;&gt;   MIGRATION RATE AND POPULATION SIZE ESTIMATION
&gt;&gt;   using Markov Chain Monte Carlo simulation
&gt;&gt;   =============================================
&gt;&gt;   Version  2.1.0
&gt;&gt;   Program started at   Fri Feb  3 14:05:05 2006
&gt;&gt;
&gt;&gt;
&gt;&gt;   Settings for this run:
&gt;&gt;   D       Data type currently set to:             DNA sequence model
&gt;&gt;   I       Input/Output formats
&gt;&gt;   P       Parameters  [start, migration model]
&gt;&gt;   S       Search strategy
&gt;&gt;   W       Write a parmfile
&gt;&gt;   Q       Quit the program
&gt;&gt;
&gt;&gt;
&gt;&gt;   Are the settings correct?
&gt;&gt;   (Type Y or the letter for one to change)
&gt;&gt; y
&gt;&gt;
&gt;&gt;
&gt;&gt; Reading BALTIC ...
&gt;&gt; Reading WE ...
&gt;&gt; Reading WS ...
&gt;&gt; Reading YTH ...
&gt;&gt; Reading SEI ...
&gt;&gt; Reading EL ...
&gt;&gt; Reading KILK ...
&gt;&gt; Reading GI ...
&gt;&gt; Reading RdA ...
&gt;&gt; Reading GU ...
&gt;&gt;
&gt;&gt;
&gt;&gt; Options in use:
&gt;&gt; ---------------
&gt;&gt; Datatype: DNA sequence data
&gt;&gt; Random number seed (with internal timer)           1138971909
&gt;&gt; Start parameters:
&gt;&gt;    Theta values were generated  from the FST-calculation
&gt;&gt;    M values were generated from the FST-calculation
&gt;&gt; Migration model:
&gt;&gt;  ...........
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; *********************************************************************
&gt;&gt; * Youth is a wonderful thing. What a crime to waste it on children. *
&gt;&gt; *                                             (George Bernard Shaw) *
&gt;&gt; *********************************************************************
&gt;&gt;
&gt;&gt;
&gt;&gt; Andy Vierstraete
&gt;&gt; Department of Biology
&gt;&gt; University of Ghent
&gt;&gt; K. L. Ledeganckstraat 35
&gt;&gt; B-9000 Gent
&gt;&gt; Belgium
&gt;&gt; phone : 09-264.52.66
&gt;&gt; fax : 09-264.87.93
&gt;&gt; <a href="http://allserv.UGent.be/~avierstr/">http://allserv.UGent.be/~avierstr/</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; -- 
&gt;    Brian Barrett
&gt;    Open MPI developer
&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0605.php">Jean-Christophe Hugly: "[O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0603.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="0602.php">Brian Barrett: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0633.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0633.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0634.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 11:24:45 2006" -->
<!-- isoreceived="20060208162445" -->
<!-- sent="Wed, 8 Feb 2006 11:24:42 -0500" -->
<!-- isosent="20060208162442" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] problem running Migrate with open-MPI" -->
<!-- id="A4CDD852-9058-4166-B757-4D565D44F4B6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43E37584.5060500_at_ugent.be" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 11:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0603.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="0601.php">Brian Barrett: "Re: [O-MPI users] mpirun sets umask to 0"</a>
<li><strong>In reply to:</strong> <a href="0573.php">Andy Vierstraete: "[O-MPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0604.php">Peter Beerli: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0604.php">Peter Beerli: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we fixed this over this last weekend.  I believe the problem  
<br>
was our mis-handling of standard input in some cases. I believe I was  
<br>
able to get the application running (but I could be fooling myself  
<br>
there...).  Could you download the latest nightly build from the URL  
<br>
below and see if it works for you?  The fixes are scheduled to be  
<br>
part of Open MPI 1.0.2, which should be out real soon now.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Feb 3, 2006, at 10:23 AM, Andy Vierstraete wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed Migrate  2.1.2, but it fails to run on open-MPI (it
</span><br>
<span class="quotelev1">&gt; does run on LAM-MPI : see end of mail)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my system is Suse 10 on Athlon X2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostfile : localhost slots=2 max_slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried different commands :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. does not start : error message :
</span><br>
<span class="quotelev1">&gt; ******************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; avierstr_at_muscorum:~/thomas&gt; mpiexec  -np 2 migrate-mpi
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 1 with PID 0 on node &quot;localhost&quot;  
</span><br>
<span class="quotelev1">&gt; exited on
</span><br>
<span class="quotelev1">&gt; signal 11.
</span><br>
<span class="quotelev1">&gt; [muscorum:07212] ERROR: A daemon on node localhost failed to start as
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; [muscorum:07212] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [muscorum:07212] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [muscorum:07212] The daemon received a signal 11.
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. starts a non-ending loop :
</span><br>
<span class="quotelev1">&gt; ************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; avierstr_at_muscorum:~/thomas&gt; mpirun -np 2 --hostfile ./hostfile  
</span><br>
<span class="quotelev1">&gt; migrate-mpi
</span><br>
<span class="quotelev1">&gt; migrate-mpi
</span><br>
<span class="quotelev1">&gt;   =============================================
</span><br>
<span class="quotelev1">&gt;   MIGRATION RATE AND POPULATION SIZE ESTIMATION
</span><br>
<span class="quotelev1">&gt;   using Markov Chain Monte Carlo simulation
</span><br>
<span class="quotelev1">&gt;   =============================================
</span><br>
<span class="quotelev1">&gt;   Version 2.1.2
</span><br>
<span class="quotelev1">&gt;   Program started at   Fri Feb  3 15:58:57 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Settings for this run:
</span><br>
<span class="quotelev1">&gt;   D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev1">&gt;   I       Input/Output formats
</span><br>
<span class="quotelev1">&gt;   P       Parameters  [start, migration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;   (Type Y or the letter for one to change)
</span><br>
<span class="quotelev1">&gt;   Settings for this run:
</span><br>
<span class="quotelev1">&gt;   D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev1">&gt;   I       Input/Output formats
</span><br>
<span class="quotelev1">&gt;   P       Parameters  [start, migration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;   (Type Y or the letter for one to change)
</span><br>
<span class="quotelev1">&gt;   Settings for this run:
</span><br>
<span class="quotelev1">&gt;   D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev1">&gt;   I       Input/Output formats
</span><br>
<span class="quotelev1">&gt;   P       Parameters  [start, migration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;   (Type Y or the letter for one to change)
</span><br>
<span class="quotelev1">&gt;   Settings for this run:
</span><br>
<span class="quotelev1">&gt;   D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev1">&gt;   I       Input/Output formats
</span><br>
<span class="quotelev1">&gt;   P       Parameters  [start, migration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;   (Type Y or the letter for one to change)
</span><br>
<span class="quotelev1">&gt;   Settings for this run:
</span><br>
<span class="quotelev1">&gt;   D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev1">&gt;   I       Input/Output formats
</span><br>
<span class="quotelev1">&gt;   P       Parameters  [start, migration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;   (Type Y or the letter for one to change)
</span><br>
<span class="quotelev1">&gt; igration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;   (Type Y or the letter for one to change)
</span><br>
<span class="quotelev1">&gt;   Settings for this run:
</span><br>
<span class="quotelev1">&gt;   D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev1">&gt;   I       Input/Output formats
</span><br>
<span class="quotelev1">&gt;   P       Parameters  [start, migration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;   (Type Y or the letter for one to change)
</span><br>
<span class="quotelev1">&gt;   Settings for this run:
</span><br>
<span class="quotelev1">&gt;   D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev1">&gt;   I       Input/Output formats
</span><br>
<span class="quotelev1">&gt;   P       Parameters  [start, migration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;   (Type Y or the letter for one to change)
</span><br>
<span class="quotelev1">&gt;   Settings for this run:
</span><br>
<span class="quotelev1">&gt;   D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev1">&gt;   I       Input/Output formats
</span><br>
<span class="quotelev1">&gt;   P       Parameters  [start, migration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. with LAM-MPI on Suse 8.2 it works after lamboot hostfile :
</span><br>
<span class="quotelev1">&gt; ****************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; avierstr_at_molfyl1:~/migrate-2.1.0/src&gt; mpiexec  -np 2 ./migrate-n
</span><br>
<span class="quotelev1">&gt;   =============================================
</span><br>
<span class="quotelev1">&gt;   MIGRATION RATE AND POPULATION SIZE ESTIMATION
</span><br>
<span class="quotelev1">&gt;   using Markov Chain Monte Carlo simulation
</span><br>
<span class="quotelev1">&gt;   =============================================
</span><br>
<span class="quotelev1">&gt;   Version  2.1.0
</span><br>
<span class="quotelev1">&gt;   Program started at   Fri Feb  3 14:05:05 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Settings for this run:
</span><br>
<span class="quotelev1">&gt;   D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev1">&gt;   I       Input/Output formats
</span><br>
<span class="quotelev1">&gt;   P       Parameters  [start, migration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;   (Type Y or the letter for one to change)
</span><br>
<span class="quotelev1">&gt;   =============================================
</span><br>
<span class="quotelev1">&gt;   MIGRATION RATE AND POPULATION SIZE ESTIMATION
</span><br>
<span class="quotelev1">&gt;   using Markov Chain Monte Carlo simulation
</span><br>
<span class="quotelev1">&gt;   =============================================
</span><br>
<span class="quotelev1">&gt;   Version  2.1.0
</span><br>
<span class="quotelev1">&gt;   Program started at   Fri Feb  3 14:05:05 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Settings for this run:
</span><br>
<span class="quotelev1">&gt;   D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev1">&gt;   I       Input/Output formats
</span><br>
<span class="quotelev1">&gt;   P       Parameters  [start, migration model]
</span><br>
<span class="quotelev1">&gt;   S       Search strategy
</span><br>
<span class="quotelev1">&gt;   W       Write a parmfile
</span><br>
<span class="quotelev1">&gt;   Q       Quit the program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Are the settings correct?
</span><br>
<span class="quotelev1">&gt;   (Type Y or the letter for one to change)
</span><br>
<span class="quotelev1">&gt; y
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reading BALTIC ...
</span><br>
<span class="quotelev1">&gt; Reading WE ...
</span><br>
<span class="quotelev1">&gt; Reading WS ...
</span><br>
<span class="quotelev1">&gt; Reading YTH ...
</span><br>
<span class="quotelev1">&gt; Reading SEI ...
</span><br>
<span class="quotelev1">&gt; Reading EL ...
</span><br>
<span class="quotelev1">&gt; Reading KILK ...
</span><br>
<span class="quotelev1">&gt; Reading GI ...
</span><br>
<span class="quotelev1">&gt; Reading RdA ...
</span><br>
<span class="quotelev1">&gt; Reading GU ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Options in use:
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Datatype: DNA sequence data
</span><br>
<span class="quotelev1">&gt; Random number seed (with internal timer)           1138971909
</span><br>
<span class="quotelev1">&gt; Start parameters:
</span><br>
<span class="quotelev1">&gt;    Theta values were generated  from the FST-calculation
</span><br>
<span class="quotelev1">&gt;    M values were generated from the FST-calculation
</span><br>
<span class="quotelev1">&gt; Migration model:
</span><br>
<span class="quotelev1">&gt;  ...........
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; *********************************************************************
</span><br>
<span class="quotelev1">&gt; * Youth is a wonderful thing. What a crime to waste it on children. *
</span><br>
<span class="quotelev1">&gt; *                                             (George Bernard Shaw) *
</span><br>
<span class="quotelev1">&gt; *********************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andy Vierstraete
</span><br>
<span class="quotelev1">&gt; Department of Biology
</span><br>
<span class="quotelev1">&gt; University of Ghent
</span><br>
<span class="quotelev1">&gt; K. L. Ledeganckstraat 35
</span><br>
<span class="quotelev1">&gt; B-9000 Gent
</span><br>
<span class="quotelev1">&gt; Belgium
</span><br>
<span class="quotelev1">&gt; phone : 09-264.52.66
</span><br>
<span class="quotelev1">&gt; fax : 09-264.87.93
</span><br>
<span class="quotelev1">&gt; <a href="http://allserv.UGent.be/~avierstr/">http://allserv.UGent.be/~avierstr/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0603.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="0601.php">Brian Barrett: "Re: [O-MPI users] mpirun sets umask to 0"</a>
<li><strong>In reply to:</strong> <a href="0573.php">Andy Vierstraete: "[O-MPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0604.php">Peter Beerli: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0604.php">Peter Beerli: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
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

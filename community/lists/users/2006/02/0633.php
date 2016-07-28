<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 10:31:10 2006" -->
<!-- isoreceived="20060210153110" -->
<!-- sent="Fri, 10 Feb 2006 16:31:12 +0100" -->
<!-- isosent="20060210153112" -->
<!-- name="Andy Vierstraete" -->
<!-- email="andy.vierstraete_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI" -->
<!-- id="43ECB1C0.8050000_at_ugent.be" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FAA546CE-1C6D-4541-BA15-F1B7EDB54582_at_scs.fsu.edu" -->
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
<strong>Date:</strong> 2006-02-10 10:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0634.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0632.php">Galen M. Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0604.php">Peter Beerli: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0635.php">George Bosilca: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0635.php">George Bosilca: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian and Peter,
<br>
<p>I tried the nightly build like Brian said, and I was able to compile 
<br>
Migrate without errors-message (that was not the case before, like Peter 
<br>
suggested, I had to set openmpi in my path).   But is is still not 
<br>
running : now it can't find &quot;libmpi.so.0&quot;, and the directory where the 
<br>
file is, is in my path.
<br>
If I install openmpi 1.0.1 again, I get the same errormessages as last time
<br>
<p>I'll try it again with lam-mpi, and see if that works for compiling 
<br>
Migrate correctly and if it runs on this pc...
<br>
<p><p>avierstr_at_muscorum:~&gt; migrate-mpi
<br>
migrate-mpi: error while loading shared libraries: libmpi.so.0: cannot 
<br>
open shared object file: No such file or directory
<br>
avierstr_at_muscorum:~&gt; migrate-n
<br>
migrate-n: error while loading shared libraries: libmpi.so.0: cannot 
<br>
open shared object file: No such file or directory
<br>
avierstr_at_muscorum:~&gt; echo $PATH
<br>
/home/avierstr/bin:/usr/local/bin:/usr/bin:/usr/X11R6/bin:/bin:/usr/games:/opt/gnome/bin:/opt/kde3/bin:/usr/lib/mit/bin:/usr/lib/mit/sbin:/usr/local/openmpi-1.1a1/bin:/usr/local/Modeltest3.7/source:/usr/local/mrbayes-3.1.2:/usr/local/bin:/usr/local/MrModeltest2.2:/usr/local/paup4b10:/usr/local/mrbayes-3.1.2-mpi:/usr/local/openmpi-1.1a1/lib:/usr/local/migrate-2.1.3-mpi/src:/usr/local/openmpi-1.1a1/bin:/usr/local/Modeltest3.7/source:/usr/local/mrbayes-3.1.2:/usr/local/bin:/usr/local/MrModeltest2.2:/usr/local/paup4b10:/usr/local/mrbayes-3.1.2-mpi:/usr/local/openmpi-1.1a1/lib:/usr/local/migrate-2.1.3-mpi/src:/usr/local/Modeltest3.7/source:/usr/local/mrbayes-3.1.2:/usr/local/bin:/usr/local/MrModeltest2.2:/usr/local/paup4b10:/usr/local/mrbayes-3.1.2-mpi:/usr/local/openmpi-1.1a1/lib:/usr/local/migrate-2.1.3-mpi/src
<br>
avierstr_at_muscorum:~&gt; mpiexec -np 2 migrate-mpi
<br>
orted: error while loading shared libraries: liborte.so.0: cannot open 
<br>
shared object file: No such file or directory
<br>
[muscorum:12220] ERROR: A daemon on node localhost failed to start as 
<br>
expected.
<br>
[muscorum:12220] ERROR: There may be more information available from
<br>
[muscorum:12220] ERROR: the remote shell (see above).
<br>
[muscorum:12220] ERROR: The daemon exited unexpectedly with status 127.
<br>
avierstr_at_muscorum:~&gt;
<br>
<p><p>Peter Beerli wrote:
<br>
<p><span class="quotelev1">&gt;Dear Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The original poster intended to run migrate-n in parallel mode, but the
</span><br>
<span class="quotelev1">&gt;stdout fragment shows that the program was compiled for a non-MPI  
</span><br>
<span class="quotelev1">&gt;architecture
</span><br>
<span class="quotelev1">&gt;(either single CPU or SMP pthreads) [I talked with him list-offline  
</span><br>
<span class="quotelev1">&gt;and it used pthreads].
</span><br>
<span class="quotelev1">&gt;A version for parallel runs shows this fact in its first couple of  
</span><br>
<span class="quotelev1">&gt;lines, like this (&lt;@@@@):
</span><br>
<span class="quotelev1">&gt;   =============================================
</span><br>
<span class="quotelev1">&gt;   MIGRATION RATE AND POPULATION SIZE ESTIMATION
</span><br>
<span class="quotelev1">&gt;   using Markov Chain Monte Carlo simulation
</span><br>
<span class="quotelev1">&gt;   =============================================
</span><br>
<span class="quotelev1">&gt;   compiled for a PARALLEL COMPUTER ARCHITECTURE    
</span><br>
<span class="quotelev1">&gt;&lt;@@@@@@@@@@@@@@@@@@@@@@@@@
</span><br>
<span class="quotelev1">&gt;   Version debug 2.1.3   [x]
</span><br>
<span class="quotelev1">&gt;   Program started at   Wed Feb  8 12:29:35 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As far as I am concerned migrate-n compiles and runs on openmpi  
</span><br>
<span class="quotelev1">&gt;1.0.1. There might be some use in running
</span><br>
<span class="quotelev1">&gt;the program multiple times completely independently through openmpi  
</span><br>
<span class="quotelev1">&gt;or lam for simulation purposes, but
</span><br>
<span class="quotelev1">&gt;that would not be a typical use of the program that can distribute  
</span><br>
<span class="quotelev1">&gt;multiple genetic loci on multiple nodes and only having
</span><br>
<span class="quotelev1">&gt;the master handling input and output (when compiled using configure;  
</span><br>
<span class="quotelev1">&gt;make mpis or configure;make mpi)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Peter
</span><br>
<span class="quotelev1">&gt;----
</span><br>
<span class="quotelev1">&gt;Peter Beerli,
</span><br>
<span class="quotelev1">&gt;Computational Evolutionary Biology Group
</span><br>
<span class="quotelev1">&gt;School of Computational Science (SCS)
</span><br>
<span class="quotelev1">&gt;and Biological Sciences Department
</span><br>
<span class="quotelev1">&gt;150-T Dirac Science Library
</span><br>
<span class="quotelev1">&gt;Florida State University
</span><br>
<span class="quotelev1">&gt;Tallahassee, Florida 32306-4120 USA
</span><br>
<span class="quotelev1">&gt;Webpage: <a href="http://www.csit.fsu.edu/~beerli">http://www.csit.fsu.edu/~beerli</a>
</span><br>
<span class="quotelev1">&gt;Phone: 850.645.1324
</span><br>
<span class="quotelev1">&gt;Fax: 850.644.0094
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
<span class="quotelev1">&gt;On Feb 8, 2006, at 11:24 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I think we fixed this over this last weekend.  I believe the problem
</span><br>
<span class="quotelev2">&gt;&gt;was our mis-handling of standard input in some cases. I believe I was
</span><br>
<span class="quotelev2">&gt;&gt;able to get the application running (but I could be fooling myself
</span><br>
<span class="quotelev2">&gt;&gt;there...).  Could you download the latest nightly build from the URL
</span><br>
<span class="quotelev2">&gt;&gt;below and see if it works for you?  The fixes are scheduled to be
</span><br>
<span class="quotelev2">&gt;&gt;part of Open MPI 1.0.2, which should be out real soon now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Feb 3, 2006, at 10:23 AM, Andy Vierstraete wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I have installed Migrate  2.1.2, but it fails to run on open-MPI (it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;does run on LAM-MPI : see end of mail)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;my system is Suse 10 on Athlon X2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;hostfile : localhost slots=2 max_slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I tried different commands :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;1. does not start : error message :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;******************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;avierstr_at_muscorum:~/thomas&gt; mpiexec  -np 2 migrate-mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;mpiexec noticed that job rank 1 with PID 0 on node &quot;localhost&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;signal 11.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[muscorum:07212] ERROR: A daemon on node localhost failed to start as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[muscorum:07212] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[muscorum:07212] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[muscorum:07212] The daemon received a signal 11.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;1 additional process aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;2. starts a non-ending loop :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;avierstr_at_muscorum:~/thomas&gt; mpirun -np 2 --hostfile ./hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;migrate-mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;migrate-mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  =============================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MIGRATION RATE AND POPULATION SIZE ESTIMATION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  using Markov Chain Monte Carlo simulation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  =============================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Version 2.1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Program started at   Fri Feb  3 15:58:57 2006
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Settings for this run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I       Input/Output formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P       Parameters  [start, migration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (Type Y or the letter for one to change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Settings for this run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I       Input/Output formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P       Parameters  [start, migration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (Type Y or the letter for one to change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Settings for this run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I       Input/Output formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P       Parameters  [start, migration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (Type Y or the letter for one to change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Settings for this run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I       Input/Output formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P       Parameters  [start, migration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (Type Y or the letter for one to change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Settings for this run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I       Input/Output formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P       Parameters  [start, migration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (Type Y or the letter for one to change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;igration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (Type Y or the letter for one to change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Settings for this run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I       Input/Output formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P       Parameters  [start, migration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (Type Y or the letter for one to change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Settings for this run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I       Input/Output formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P       Parameters  [start, migration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (Type Y or the letter for one to change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Settings for this run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I       Input/Output formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P       Parameters  [start, migration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;****************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;3. with LAM-MPI on Suse 8.2 it works after lamboot hostfile :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;****************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;avierstr_at_molfyl1:~/migrate-2.1.0/src&gt; mpiexec  -np 2 ./migrate-n
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  =============================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MIGRATION RATE AND POPULATION SIZE ESTIMATION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  using Markov Chain Monte Carlo simulation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  =============================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Version  2.1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Program started at   Fri Feb  3 14:05:05 2006
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Settings for this run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I       Input/Output formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P       Parameters  [start, migration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (Type Y or the letter for one to change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  =============================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MIGRATION RATE AND POPULATION SIZE ESTIMATION
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  using Markov Chain Monte Carlo simulation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  =============================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Version  2.1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Program started at   Fri Feb  3 14:05:05 2006
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Settings for this run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  D       Data type currently set to:             DNA sequence model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I       Input/Output formats
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P       Parameters  [start, migration model]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  S       Search strategy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  W       Write a parmfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Q       Quit the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Are the settings correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (Type Y or the letter for one to change)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;y
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Reading BALTIC ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Reading WE ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Reading WS ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Reading YTH ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Reading SEI ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Reading EL ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Reading KILK ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Reading GI ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Reading RdA ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Reading GU ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Options in use:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;---------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Datatype: DNA sequence data
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Random number seed (with internal timer)           1138971909
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Start parameters:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Theta values were generated  from the FST-calculation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   M values were generated from the FST-calculation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Migration model:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...........
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;*********************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;* Youth is a wonderful thing. What a crime to waste it on children. *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;*                                             (George Bernard Shaw) *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;*********************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Andy Vierstraete
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Department of Biology
</span><br>
<span class="quotelev3">&gt;&gt;&gt;University of Ghent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;K. L. Ledeganckstraat 35
</span><br>
<span class="quotelev3">&gt;&gt;&gt;B-9000 Gent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Belgium
</span><br>
<span class="quotelev3">&gt;&gt;&gt;phone : 09-264.52.66
</span><br>
<span class="quotelev3">&gt;&gt;&gt;fax : 09-264.87.93
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://allserv.UGent.be/~avierstr/">http://allserv.UGent.be/~avierstr/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- 
</span><br>
<span class="quotelev2">&gt;&gt;   Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0634.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0632.php">Galen M. Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0604.php">Peter Beerli: "Re: [O-MPI users] problem running Migrate with open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0635.php">George Bosilca: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Reply:</strong> <a href="0635.php">George Bosilca: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
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

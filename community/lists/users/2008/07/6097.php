<?
$subject_val = "[OMPI users] Error run mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 09:48:06 2008" -->
<!-- isoreceived="20080721134806" -->
<!-- sent="Mon, 21 Jul 2008 06:47:58 -0700 (PDT)" -->
<!-- isosent="20080721134758" -->
<!-- name="mariognu-outside_at_[hidden]" -->
<!-- email="mariognu-outside_at_[hidden]" -->
<!-- subject="[OMPI users] Error run mpiexec" -->
<!-- id="196120.12804.qm_at_web33801.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Error run mpiexec<br>
<strong>From:</strong> <a href="mailto:mariognu-outside_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Error%20run%20mpiexec"><em>mariognu-outside_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-07-21 09:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6098.php">Ralph Castain: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Previous message:</strong> <a href="6096.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6098.php">Ralph Castain: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Reply:</strong> <a href="6098.php">Ralph Castain: "Re: [OMPI users] Error run mpiexec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>First, excuse my english, it isn't good :)
<br>
<p>Well, I have 2 machines, one a Xeon with 2 cpu (64bit) and a Pentium 4 with only one cpu. At the 2 machines I have installed Ubuntu 8 Server and all packages to open-mpi and gromacs.
<br>
<p>I use gromacs for my works
<br>
<p>Ok, in the 2 machines, at my users folder, I have a file like this:
<br>
machine1 cpu=2
<br>
machine2
<br>
<p>Machine1 is Xeon (192.168.0.10) and Machine2 is Pentium 4 (192.168.0.11)
<br>
<p>My file /etc/hosts is configured too.
<br>
<p>When I run mpiexec in machine2, I have like this:
<br>
mariojose_at_machine2:~/lam-mpi$ mpiexec -n 3 hostname
<br>
machine1
<br>
machine2
<br>
-----------------------------------------------------------------------------
<br>
It seems that [at least] one of the processes that was started with
<br>
mpirun did not invoke MPI_INIT before quitting (it is possible that
<br>
more than one process did not invoke MPI_INIT -- mpirun was only
<br>
notified of the first one, which was on node n0).
<br>
<p>mpirun can *only* be used with MPI programs (i.e., programs that
<br>
invoke MPI_INIT and MPI_FINALIZE).  You can use the &quot;lamexec&quot; program
<br>
to run non-MPI programs over the lambooted nodes.
<br>
-----------------------------------------------------------------------------
<br>
machine1
<br>
mpirun failed with exit status 252
<br>
<p>When I run in machine1 I have like this:
<br>
<p>mariojose_at_machine1:~/lam-mpi$ mpiexec -n 3 hostname
<br>
machine1
<br>
machine1
<br>
machine2
<br>
-----------------------------------------------------------------------------
<br>
It seems that [at least] one of the processes that was started with
<br>
mpirun did not invoke MPI_INIT before quitting (it is possible that
<br>
more than one process did not invoke MPI_INIT -- mpirun was only
<br>
notified of the first one, which was on node n0).
<br>
<p>mpirun can *only* be used with MPI programs (i.e., programs that
<br>
invoke MPI_INIT and MPI_FINALIZE).  You can use the &quot;lamexec&quot; program
<br>
to run non-MPI programs over the lambooted nodes.
<br>
-----------------------------------------------------------------------------
<br>
mpirun failed with exit status 252
<br>
<p>I don't know why I have this message. I think that is a error.
<br>
<p>I try run with gromacs, if anybody use gromacs and can help me I like very much :) . 
<br>
<p>mariojose_at_machine1:~/lam-mpi$ grompp -f run.mdp -p topol.top -c pr.gro -o run.tpr
<br>
mariojose_at_machine1:~/mpiexec -n 3 mdrun -v -deffnm run
<br>
<p>It's works Ok. I see that cpu of 2 machines woks in 100%. It look well for me. But I have a error em I run mdrun_mpi that is a binary to work in cluster.
<br>
<p>mariojose_at_machine1:~/lam-mpi$ grompp -f run.mdp -p topol.top -c pr.gro -o run.tpr -np 3 -sort -shuffle
<br>
mariojose_at_machine1:~/lam-mpi$ mpiexec -n 3 mdrun_mpi -v -deffnm run
<br>
NNODES=3, MYRANK=0, HOSTNAME=machine1
<br>
NNODES=3, MYRANK=2, HOSTNAME=machine1
<br>
NODEID=0 argc=4
<br>
NODEID=2 argc=4
<br>
NNODES=3, MYRANK=1, HOSTNAME=machine2
<br>
NODEID=1 argc=4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-)  G  R  O  M  A  C  S  (-:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gyas ROwers Mature At Cryogenic Speed
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-)  VERSION 3.3.3  (-:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Written by David van der Spoel, Erik Lindahl, Berk Hess, and others.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright (c) 1991-2000, University of Groningen, The Netherlands.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright (c) 2001-2008, The GROMACS development team,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check out <a href="http://www.gromacs.org">http://www.gromacs.org</a> for more information.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This program is free software; you can redistribute it and/or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modify it under the terms of the GNU General Public License
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as published by the Free Software Foundation; either version 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the License, or (at your option) any later version.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-)  mdrun_mpi  (-:
<br>
<p>Option     Filename  Type         Description
<br>
------------------------------------------------------------
<br>
&nbsp;&nbsp;-s        run.tpr  Input        Generic run input: tpr tpb tpa xml
<br>
&nbsp;&nbsp;-o        run.trr  Output       Full precision trajectory: trr trj
<br>
&nbsp;&nbsp;-x        run.xtc  Output, Opt. Compressed trajectory (portable xdr format)
<br>
&nbsp;&nbsp;-c        run.gro  Output       Generic structure: gro g96 pdb xml
<br>
&nbsp;&nbsp;-e        run.edr  Output       Generic energy: edr ene
<br>
&nbsp;&nbsp;-g        run.log  Output       Log file
<br>
-dgdl       run.xvg  Output, Opt. xvgr/xmgr file
<br>
-field      run.xvg  Output, Opt. xvgr/xmgr file
<br>
-table      run.xvg  Input, Opt.  xvgr/xmgr file
<br>
-tablep     run.xvg  Input, Opt.  xvgr/xmgr file
<br>
-rerun      run.xtc  Input, Opt.  Generic trajectory: xtc trr trj gro g96 pdb
<br>
-tpi        run.xvg  Output, Opt. xvgr/xmgr file
<br>
&nbsp;-ei        run.edi  Input, Opt.  ED sampling input
<br>
&nbsp;-eo        run.edo  Output, Opt. ED sampling output
<br>
&nbsp;&nbsp;-j        run.gct  Input, Opt.  General coupling stuff
<br>
&nbsp;-jo        run.gct  Output, Opt. General coupling stuff
<br>
-ffout      run.xvg  Output, Opt. xvgr/xmgr file
<br>
-devout     run.xvg  Output, Opt. xvgr/xmgr file
<br>
-runav      run.xvg  Output, Opt. xvgr/xmgr file
<br>
&nbsp;-pi        run.ppa  Input, Opt.  Pull parameters
<br>
&nbsp;-po        run.ppa  Output, Opt. Pull parameters
<br>
&nbsp;-pd        run.pdo  Output, Opt. Pull data output
<br>
&nbsp;-pn        run.ndx  Input, Opt.  Index file
<br>
-mtx        run.mtx  Output, Opt. Hessian matrix
<br>
&nbsp;-dn        run.ndx  Output, Opt. Index file
<br>
<p>Option       Type   Value   Description
<br>
------------------------------------------------------
<br>
-[no]h       bool   no      Print help info and quit
<br>
-nice        int    19      Set the nicelevel
<br>
-deffnm      string run     Set the default filename for all file options
<br>
-[no]xvgr    bool   yes     Add specific codes (legends etc.) in the output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xvg files for the xmgrace program
<br>
-np          int    1       Number of nodes, must be the same as used for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grompp
<br>
-nt          int    1       Number of threads to start on each node
<br>
-[no]v       bool   yes     Be loud and noisy
<br>
-[no]compact bool   yes     Write a compact log file
<br>
-[no]sepdvdl bool   no      Write separate V and dVdl terms for each
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;interaction type and node to the log file(s)
<br>
-[no]multi   bool   no      Do multiple simulations in parallel (only with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np &gt; 1)
<br>
-replex      int    0       Attempt replica exchange every # steps
<br>
-reseed      int    -1      Seed for replica exchange, -1 is generate a seed
<br>
-[no]glas    bool   no      Do glass simulation with special long range
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;corrections
<br>
-[no]ionize  bool   no      Do a simulation including the effect of an X-Ray
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bombardment on your system
<br>
<p><p>Back Off! I just backed up run2.log to ./#run2.log.5#
<br>
<p>Back Off! I just backed up run0.log to ./#run0.log.12#
<br>
Getting Loaded...
<br>
Reading file run.tpr, VERSION 3.3.3 (single precision)
<br>
<p>Back Off! I just backed up run1.log to ./#run1.log.12#
<br>
<p>-------------------------------------------------------
<br>
Program mdrun_mpi, VERSION 3.3.3
<br>
Source code file: ../../../../src/gmxlib/block_tx.c, line: 74
<br>
<p>Fatal error:
<br>
0: size=672, len=840, rx_count=0
<br>
<p>-------------------------------------------------------
<br>
<p>&quot;They're Red Hot&quot; (Red Hot Chili Peppers)
<br>
<p>Error on node 1, will try to stop all the nodes
<br>
Halting parallel program mdrun_mpi on CPU 1 out of 3
<br>
<p>gcq#220: &quot;They're Red Hot&quot; (Red Hot Chili Peppers)
<br>
<p>-----------------------------------------------------------------------------
<br>
One of the processes started by mpirun has exited with a nonzero exit
<br>
code.  This typically indicates that the process finished in error.
<br>
If your process did not finish in error, be sure to include a &quot;return
<br>
0&quot; or &quot;exit(0)&quot; in your C code before exiting the application.
<br>
<p>PID 15964 failed on node n0 (192.168.0.10) with exit status 1.
<br>
-----------------------------------------------------------------------------
<br>
mpirun failed with exit status 1
<br>
<p>I don't know what is problem.
<br>
<p>Anybody can help me ?
<br>
<p>Thanks
<br>
<p>Mario Jose
<br>
<p><p>/* WE ARE FREE */
<br>
Hack to learn, don't learn to hack.
<br>
<p>/* Free Software Foundation  */
<br>
&quot;Free software&quot; is a matter of liberty, not price
<br>
GNU's Not UNIX. Be free, use GNU/Linux
<br>
www.gnu.org
<br>
www.fsf.org
<br>
<p>/* Free Culture */
<br>
free-culture.org
<br>
creativecommons.org
<br>
<p>/* ... Hoarders may get piles of money,
<br>
That is true, hackers, that is true.
<br>
But they cannot help their neighbors;
<br>
That's not good, hackers, that's not good ...
<br>
<p>Richard Stallman (www.stallman.org) */
<br>
<p>/* Human knowledge belongs to the world */
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Novos endere&#231;os, o Yahoo! que voc&#234; conhece. Crie um email novo com a sua cara @ymail.com ou @rocketmail.com.
<br>
<a href="http://br.new.mail.yahoo.com/addresses">http://br.new.mail.yahoo.com/addresses</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6098.php">Ralph Castain: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Previous message:</strong> <a href="6096.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6098.php">Ralph Castain: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Reply:</strong> <a href="6098.php">Ralph Castain: "Re: [OMPI users] Error run mpiexec"</a>
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

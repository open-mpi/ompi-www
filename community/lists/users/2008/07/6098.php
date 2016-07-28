<?
$subject_val = "Re: [OMPI users] Error run mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 10:00:12 2008" -->
<!-- isoreceived="20080721140012" -->
<!-- sent="Mon, 21 Jul 2008 08:00:00 -0600" -->
<!-- isosent="20080721140000" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error run mpiexec" -->
<!-- id="F006FBA6-D46C-48F5-AABE-9675A1226638_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="196120.12804.qm_at_web33801.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error run mpiexec<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-21 10:00:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6099.php">mariognu-outside_at_[hidden]: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Previous message:</strong> <a href="6097.php">mariognu-outside_at_[hidden]: "[OMPI users] Error run mpiexec"</a>
<li><strong>In reply to:</strong> <a href="6097.php">mariognu-outside_at_[hidden]: "[OMPI users] Error run mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6099.php">mariognu-outside_at_[hidden]: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Reply:</strong> <a href="6099.php">mariognu-outside_at_[hidden]: "Re: [OMPI users] Error run mpiexec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you look closely at the error messages, you will see that you were  
<br>
executing LAM-MPI, not Open MPI. If you truly wanted to run Open MPI,  
<br>
I would check your path to ensure that mpiexec is pointing at the Open  
<br>
MPI binary.
<br>
<p>Ralph
<br>
<p>On Jul 21, 2008, at 7:47 AM, mariognu-outside_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, excuse my english, it isn't good :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, I have 2 machines, one a Xeon with 2 cpu (64bit) and a Pentium  
</span><br>
<span class="quotelev1">&gt; 4 with only one cpu. At the 2 machines I have installed Ubuntu 8  
</span><br>
<span class="quotelev1">&gt; Server and all packages to open-mpi and gromacs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use gromacs for my works
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, in the 2 machines, at my users folder, I have a file like this:
</span><br>
<span class="quotelev1">&gt; machine1 cpu=2
</span><br>
<span class="quotelev1">&gt; machine2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine1 is Xeon (192.168.0.10) and Machine2 is Pentium 4  
</span><br>
<span class="quotelev1">&gt; (192.168.0.11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My file /etc/hosts is configured too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run mpiexec in machine2, I have like this:
</span><br>
<span class="quotelev1">&gt; mariojose_at_machine2:~/lam-mpi$ mpiexec -n 3 hostname
</span><br>
<span class="quotelev1">&gt; machine1
</span><br>
<span class="quotelev1">&gt; machine2
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It seems that [at least] one of the processes that was started with
</span><br>
<span class="quotelev1">&gt; mpirun did not invoke MPI_INIT before quitting (it is possible that
</span><br>
<span class="quotelev1">&gt; more than one process did not invoke MPI_INIT -- mpirun was only
</span><br>
<span class="quotelev1">&gt; notified of the first one, which was on node n0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun can *only* be used with MPI programs (i.e., programs that
</span><br>
<span class="quotelev1">&gt; invoke MPI_INIT and MPI_FINALIZE).  You can use the &quot;lamexec&quot; program
</span><br>
<span class="quotelev1">&gt; to run non-MPI programs over the lambooted nodes.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; machine1
</span><br>
<span class="quotelev1">&gt; mpirun failed with exit status 252
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run in machine1 I have like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mariojose_at_machine1:~/lam-mpi$ mpiexec -n 3 hostname
</span><br>
<span class="quotelev1">&gt; machine1
</span><br>
<span class="quotelev1">&gt; machine1
</span><br>
<span class="quotelev1">&gt; machine2
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It seems that [at least] one of the processes that was started with
</span><br>
<span class="quotelev1">&gt; mpirun did not invoke MPI_INIT before quitting (it is possible that
</span><br>
<span class="quotelev1">&gt; more than one process did not invoke MPI_INIT -- mpirun was only
</span><br>
<span class="quotelev1">&gt; notified of the first one, which was on node n0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun can *only* be used with MPI programs (i.e., programs that
</span><br>
<span class="quotelev1">&gt; invoke MPI_INIT and MPI_FINALIZE).  You can use the &quot;lamexec&quot; program
</span><br>
<span class="quotelev1">&gt; to run non-MPI programs over the lambooted nodes.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun failed with exit status 252
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know why I have this message. I think that is a error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try run with gromacs, if anybody use gromacs and can help me I  
</span><br>
<span class="quotelev1">&gt; like very much :) .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mariojose_at_machine1:~/lam-mpi$ grompp -f run.mdp -p topol.top -c  
</span><br>
<span class="quotelev1">&gt; pr.gro -o run.tpr
</span><br>
<span class="quotelev1">&gt; mariojose_at_machine1:~/mpiexec -n 3 mdrun -v -deffnm run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's works Ok. I see that cpu of 2 machines woks in 100%. It look  
</span><br>
<span class="quotelev1">&gt; well for me. But I have a error em I run mdrun_mpi that is a binary  
</span><br>
<span class="quotelev1">&gt; to work in cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mariojose_at_machine1:~/lam-mpi$ grompp -f run.mdp -p topol.top -c  
</span><br>
<span class="quotelev1">&gt; pr.gro -o run.tpr -np 3 -sort -shuffle
</span><br>
<span class="quotelev1">&gt; mariojose_at_machine1:~/lam-mpi$ mpiexec -n 3 mdrun_mpi -v -deffnm run
</span><br>
<span class="quotelev1">&gt; NNODES=3, MYRANK=0, HOSTNAME=machine1
</span><br>
<span class="quotelev1">&gt; NNODES=3, MYRANK=2, HOSTNAME=machine1
</span><br>
<span class="quotelev1">&gt; NODEID=0 argc=4
</span><br>
<span class="quotelev1">&gt; NODEID=2 argc=4
</span><br>
<span class="quotelev1">&gt; NNODES=3, MYRANK=1, HOSTNAME=machine2
</span><br>
<span class="quotelev1">&gt; NODEID=1 argc=4
</span><br>
<span class="quotelev1">&gt;                         :-)  G  R  O  M  A  C  S  (-:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Gyas ROwers Mature At Cryogenic Speed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                            :-)  VERSION 3.3.3  (-:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Written by David van der Spoel, Erik Lindahl, Berk Hess, and  
</span><br>
<span class="quotelev1">&gt; others.
</span><br>
<span class="quotelev1">&gt;       Copyright (c) 1991-2000, University of Groningen, The  
</span><br>
<span class="quotelev1">&gt; Netherlands.
</span><br>
<span class="quotelev1">&gt;             Copyright (c) 2001-2008, The GROMACS development team,
</span><br>
<span class="quotelev1">&gt;            check out <a href="http://www.gromacs.org">http://www.gromacs.org</a> for more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         This program is free software; you can redistribute it and/or
</span><br>
<span class="quotelev1">&gt;          modify it under the terms of the GNU General Public License
</span><br>
<span class="quotelev1">&gt;         as published by the Free Software Foundation; either version 2
</span><br>
<span class="quotelev1">&gt;             of the License, or (at your option) any later version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                              :-)  mdrun_mpi  (-:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option     Filename  Type         Description
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  -s        run.tpr  Input        Generic run input: tpr tpb tpa xml
</span><br>
<span class="quotelev1">&gt;  -o        run.trr  Output       Full precision trajectory: trr trj
</span><br>
<span class="quotelev1">&gt;  -x        run.xtc  Output, Opt. Compressed trajectory (portable xdr  
</span><br>
<span class="quotelev1">&gt; format)
</span><br>
<span class="quotelev1">&gt;  -c        run.gro  Output       Generic structure: gro g96 pdb xml
</span><br>
<span class="quotelev1">&gt;  -e        run.edr  Output       Generic energy: edr ene
</span><br>
<span class="quotelev1">&gt;  -g        run.log  Output       Log file
</span><br>
<span class="quotelev1">&gt; -dgdl       run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev1">&gt; -field      run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev1">&gt; -table      run.xvg  Input, Opt.  xvgr/xmgr file
</span><br>
<span class="quotelev1">&gt; -tablep     run.xvg  Input, Opt.  xvgr/xmgr file
</span><br>
<span class="quotelev1">&gt; -rerun      run.xtc  Input, Opt.  Generic trajectory: xtc trr trj  
</span><br>
<span class="quotelev1">&gt; gro g96 pdb
</span><br>
<span class="quotelev1">&gt; -tpi        run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev1">&gt; -ei        run.edi  Input, Opt.  ED sampling input
</span><br>
<span class="quotelev1">&gt; -eo        run.edo  Output, Opt. ED sampling output
</span><br>
<span class="quotelev1">&gt;  -j        run.gct  Input, Opt.  General coupling stuff
</span><br>
<span class="quotelev1">&gt; -jo        run.gct  Output, Opt. General coupling stuff
</span><br>
<span class="quotelev1">&gt; -ffout      run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev1">&gt; -devout     run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev1">&gt; -runav      run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev1">&gt; -pi        run.ppa  Input, Opt.  Pull parameters
</span><br>
<span class="quotelev1">&gt; -po        run.ppa  Output, Opt. Pull parameters
</span><br>
<span class="quotelev1">&gt; -pd        run.pdo  Output, Opt. Pull data output
</span><br>
<span class="quotelev1">&gt; -pn        run.ndx  Input, Opt.  Index file
</span><br>
<span class="quotelev1">&gt; -mtx        run.mtx  Output, Opt. Hessian matrix
</span><br>
<span class="quotelev1">&gt; -dn        run.ndx  Output, Opt. Index file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option       Type   Value   Description
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -[no]h       bool   no      Print help info and quit
</span><br>
<span class="quotelev1">&gt; -nice        int    19      Set the nicelevel
</span><br>
<span class="quotelev1">&gt; -deffnm      string run     Set the default filename for all file  
</span><br>
<span class="quotelev1">&gt; options
</span><br>
<span class="quotelev1">&gt; -[no]xvgr    bool   yes     Add specific codes (legends etc.) in the  
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev1">&gt;                            xvg files for the xmgrace program
</span><br>
<span class="quotelev1">&gt; -np          int    1       Number of nodes, must be the same as  
</span><br>
<span class="quotelev1">&gt; used for
</span><br>
<span class="quotelev1">&gt;                            grompp
</span><br>
<span class="quotelev1">&gt; -nt          int    1       Number of threads to start on each node
</span><br>
<span class="quotelev1">&gt; -[no]v       bool   yes     Be loud and noisy
</span><br>
<span class="quotelev1">&gt; -[no]compact bool   yes     Write a compact log file
</span><br>
<span class="quotelev1">&gt; -[no]sepdvdl bool   no      Write separate V and dVdl terms for each
</span><br>
<span class="quotelev1">&gt;                            interaction type and node to the log  
</span><br>
<span class="quotelev1">&gt; file(s)
</span><br>
<span class="quotelev1">&gt; -[no]multi   bool   no      Do multiple simulations in parallel  
</span><br>
<span class="quotelev1">&gt; (only with
</span><br>
<span class="quotelev1">&gt;                            -np &gt; 1)
</span><br>
<span class="quotelev1">&gt; -replex      int    0       Attempt replica exchange every # steps
</span><br>
<span class="quotelev1">&gt; -reseed      int    -1      Seed for replica exchange, -1 is  
</span><br>
<span class="quotelev1">&gt; generate a seed
</span><br>
<span class="quotelev1">&gt; -[no]glas    bool   no      Do glass simulation with special long  
</span><br>
<span class="quotelev1">&gt; range
</span><br>
<span class="quotelev1">&gt;                            corrections
</span><br>
<span class="quotelev1">&gt; -[no]ionize  bool   no      Do a simulation including the effect of  
</span><br>
<span class="quotelev1">&gt; an X-Ray
</span><br>
<span class="quotelev1">&gt;                            bombardment on your system
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back Off! I just backed up run2.log to ./#run2.log.5#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back Off! I just backed up run0.log to ./#run0.log.12#
</span><br>
<span class="quotelev1">&gt; Getting Loaded...
</span><br>
<span class="quotelev1">&gt; Reading file run.tpr, VERSION 3.3.3 (single precision)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back Off! I just backed up run1.log to ./#run1.log.12#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Program mdrun_mpi, VERSION 3.3.3
</span><br>
<span class="quotelev1">&gt; Source code file: ../../../../src/gmxlib/block_tx.c, line: 74
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fatal error:
</span><br>
<span class="quotelev1">&gt; 0: size=672, len=840, rx_count=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;They're Red Hot&quot; (Red Hot Chili Peppers)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error on node 1, will try to stop all the nodes
</span><br>
<span class="quotelev1">&gt; Halting parallel program mdrun_mpi on CPU 1 out of 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcq#220: &quot;They're Red Hot&quot; (Red Hot Chili Peppers)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; One of the processes started by mpirun has exited with a nonzero exit
</span><br>
<span class="quotelev1">&gt; code.  This typically indicates that the process finished in error.
</span><br>
<span class="quotelev1">&gt; If your process did not finish in error, be sure to include a &quot;return
</span><br>
<span class="quotelev1">&gt; 0&quot; or &quot;exit(0)&quot; in your C code before exiting the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PID 15964 failed on node n0 (192.168.0.10) with exit status 1.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun failed with exit status 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what is problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody can help me ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mario Jose
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* WE ARE FREE */
</span><br>
<span class="quotelev1">&gt; Hack to learn, don't learn to hack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Free Software Foundation  */
</span><br>
<span class="quotelev1">&gt; &quot;Free software&quot; is a matter of liberty, not price
</span><br>
<span class="quotelev1">&gt; GNU's Not UNIX. Be free, use GNU/Linux
</span><br>
<span class="quotelev1">&gt; www.gnu.org
</span><br>
<span class="quotelev1">&gt; www.fsf.org
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Free Culture */
</span><br>
<span class="quotelev1">&gt; free-culture.org
</span><br>
<span class="quotelev1">&gt; creativecommons.org
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* ... Hoarders may get piles of money,
</span><br>
<span class="quotelev1">&gt; That is true, hackers, that is true.
</span><br>
<span class="quotelev1">&gt; But they cannot help their neighbors;
</span><br>
<span class="quotelev1">&gt; That's not good, hackers, that's not good ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Stallman (www.stallman.org) */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Human knowledge belongs to the world */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Novos endere&#231;os, o Yahoo! que voc&#234; conhece. Crie um email novo  
</span><br>
<span class="quotelev1">&gt; com a sua cara @ymail.com ou @rocketmail.com.
</span><br>
<span class="quotelev1">&gt; <a href="http://br.new.mail.yahoo.com/addresses">http://br.new.mail.yahoo.com/addresses</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6099.php">mariognu-outside_at_[hidden]: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Previous message:</strong> <a href="6097.php">mariognu-outside_at_[hidden]: "[OMPI users] Error run mpiexec"</a>
<li><strong>In reply to:</strong> <a href="6097.php">mariognu-outside_at_[hidden]: "[OMPI users] Error run mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6099.php">mariognu-outside_at_[hidden]: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Reply:</strong> <a href="6099.php">mariognu-outside_at_[hidden]: "Re: [OMPI users] Error run mpiexec"</a>
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

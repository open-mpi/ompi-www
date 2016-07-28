<?
$subject_val = "Re: [OMPI users] Error run mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 10:27:26 2008" -->
<!-- isoreceived="20080721142726" -->
<!-- sent="Mon, 21 Jul 2008 07:27:21 -0700 (PDT)" -->
<!-- isosent="20080721142721" -->
<!-- name="mariognu-outside_at_[hidden]" -->
<!-- email="mariognu-outside_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error run mpiexec" -->
<!-- id="727078.37764.qm_at_web33807.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F006FBA6-D46C-48F5-AABE-9675A1226638_at_lanl.gov" -->
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
<strong>From:</strong> <a href="mailto:mariognu-outside_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Error%20run%20mpiexec"><em>mariognu-outside_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-07-21 10:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6100.php">jody: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Previous message:</strong> <a href="6098.php">Ralph Castain: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>In reply to:</strong> <a href="6098.php">Ralph Castain: "Re: [OMPI users] Error run mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6100.php">jody: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Reply:</strong> <a href="6100.php">jody: "Re: [OMPI users] Error run mpiexec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In my /usr/bin I have
<br>
lrwxrwxrwx 1 root root    25 2008-07-17 10:25 /usr/bin/mpiexec -&gt; /etc/alternatives/mpiexec
<br>
-rwxr-xr-x 1 root root 19941 2008-03-23 03:36 /usr/bin/mpiexec.lam
<br>
lrwxrwxrwx 1 root root     7 2008-07-17 10:25 /usr/bin/mpiexec.openmpi -&gt; orterun
<br>
<p>I try to run
<br>
<p>mpiexec.openmpi -n 3 mdrun_mpi.openmpi -n 3 -v -deffnm run
<br>
<p>But only machine 1 the cpu is working in 100%. The machine2 not.
<br>
<p>I run
<br>
<p>mpiexec.openmpi -n 3 hostname
<br>
<p>And I have
<br>
<p>machine1
<br>
machine1
<br>
machine1
<br>
<p>My path
<br>
<p>mariojose_at_machine1:~/lam-mpi$ echo $PATH
<br>
/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
<br>
<p>I don't know what happening
<br>
<p>Thanks
<br>
<p>Mario Jose
<br>
<p><p>--- Em seg, 21/7/08, Ralph Castain &lt;rhc_at_[hidden]&gt; escreveu:
<br>
<p><span class="quotelev1">&gt; De: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Assunto: Re: [OMPI users] Error run mpiexec
</span><br>
<span class="quotelev1">&gt; Para: mariognu-outside_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Data: Segunda-feira, 21 de Julho de 2008, 11:00
</span><br>
<span class="quotelev1">&gt; If you look closely at the error messages, you will see that
</span><br>
<span class="quotelev1">&gt; you were  
</span><br>
<span class="quotelev1">&gt; executing LAM-MPI, not Open MPI. If you truly wanted to run
</span><br>
<span class="quotelev1">&gt; Open MPI,  
</span><br>
<span class="quotelev1">&gt; I would check your path to ensure that mpiexec is pointing
</span><br>
<span class="quotelev1">&gt; at the Open  
</span><br>
<span class="quotelev1">&gt; MPI binary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 21, 2008, at 7:47 AM, mariognu-outside_at_[hidden]
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First, excuse my english, it isn't good :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, I have 2 machines, one a Xeon with 2 cpu (64bit)
</span><br>
<span class="quotelev1">&gt; and a Pentium  
</span><br>
<span class="quotelev2">&gt; &gt; 4 with only one cpu. At the 2 machines I have
</span><br>
<span class="quotelev1">&gt; installed Ubuntu 8  
</span><br>
<span class="quotelev2">&gt; &gt; Server and all packages to open-mpi and gromacs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I use gromacs for my works
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok, in the 2 machines, at my users folder, I have a
</span><br>
<span class="quotelev1">&gt; file like this:
</span><br>
<span class="quotelev2">&gt; &gt; machine1 cpu=2
</span><br>
<span class="quotelev2">&gt; &gt; machine2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Machine1 is Xeon (192.168.0.10) and Machine2 is
</span><br>
<span class="quotelev1">&gt; Pentium 4  
</span><br>
<span class="quotelev2">&gt; &gt; (192.168.0.11)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My file /etc/hosts is configured too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I run mpiexec in machine2, I have like this:
</span><br>
<span class="quotelev2">&gt; &gt; mariojose_at_machine2:~/lam-mpi$ mpiexec -n 3 hostname
</span><br>
<span class="quotelev2">&gt; &gt; machine1
</span><br>
<span class="quotelev2">&gt; &gt; machine2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It seems that [at least] one of the processes that was
</span><br>
<span class="quotelev1">&gt; started with
</span><br>
<span class="quotelev2">&gt; &gt; mpirun did not invoke MPI_INIT before quitting (it is
</span><br>
<span class="quotelev1">&gt; possible that
</span><br>
<span class="quotelev2">&gt; &gt; more than one process did not invoke MPI_INIT --
</span><br>
<span class="quotelev1">&gt; mpirun was only
</span><br>
<span class="quotelev2">&gt; &gt; notified of the first one, which was on node n0).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun can *only* be used with MPI programs (i.e.,
</span><br>
<span class="quotelev1">&gt; programs that
</span><br>
<span class="quotelev2">&gt; &gt; invoke MPI_INIT and MPI_FINALIZE).  You can use the
</span><br>
<span class="quotelev1">&gt; &quot;lamexec&quot; program
</span><br>
<span class="quotelev2">&gt; &gt; to run non-MPI programs over the lambooted nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; machine1
</span><br>
<span class="quotelev2">&gt; &gt; mpirun failed with exit status 252
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I run in machine1 I have like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mariojose_at_machine1:~/lam-mpi$ mpiexec -n 3 hostname
</span><br>
<span class="quotelev2">&gt; &gt; machine1
</span><br>
<span class="quotelev2">&gt; &gt; machine1
</span><br>
<span class="quotelev2">&gt; &gt; machine2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It seems that [at least] one of the processes that was
</span><br>
<span class="quotelev1">&gt; started with
</span><br>
<span class="quotelev2">&gt; &gt; mpirun did not invoke MPI_INIT before quitting (it is
</span><br>
<span class="quotelev1">&gt; possible that
</span><br>
<span class="quotelev2">&gt; &gt; more than one process did not invoke MPI_INIT --
</span><br>
<span class="quotelev1">&gt; mpirun was only
</span><br>
<span class="quotelev2">&gt; &gt; notified of the first one, which was on node n0).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun can *only* be used with MPI programs (i.e.,
</span><br>
<span class="quotelev1">&gt; programs that
</span><br>
<span class="quotelev2">&gt; &gt; invoke MPI_INIT and MPI_FINALIZE).  You can use the
</span><br>
<span class="quotelev1">&gt; &quot;lamexec&quot; program
</span><br>
<span class="quotelev2">&gt; &gt; to run non-MPI programs over the lambooted nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun failed with exit status 252
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't know why I have this message. I think that
</span><br>
<span class="quotelev1">&gt; is a error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I try run with gromacs, if anybody use gromacs and can
</span><br>
<span class="quotelev1">&gt; help me I  
</span><br>
<span class="quotelev2">&gt; &gt; like very much :) .
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mariojose_at_machine1:~/lam-mpi$ grompp -f run.mdp -p
</span><br>
<span class="quotelev1">&gt; topol.top -c  
</span><br>
<span class="quotelev2">&gt; &gt; pr.gro -o run.tpr
</span><br>
<span class="quotelev2">&gt; &gt; mariojose_at_machine1:~/mpiexec -n 3 mdrun -v -deffnm run
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's works Ok. I see that cpu of 2 machines woks
</span><br>
<span class="quotelev1">&gt; in 100%. It look  
</span><br>
<span class="quotelev2">&gt; &gt; well for me. But I have a error em I run mdrun_mpi
</span><br>
<span class="quotelev1">&gt; that is a binary  
</span><br>
<span class="quotelev2">&gt; &gt; to work in cluster.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mariojose_at_machine1:~/lam-mpi$ grompp -f run.mdp -p
</span><br>
<span class="quotelev1">&gt; topol.top -c  
</span><br>
<span class="quotelev2">&gt; &gt; pr.gro -o run.tpr -np 3 -sort -shuffle
</span><br>
<span class="quotelev2">&gt; &gt; mariojose_at_machine1:~/lam-mpi$ mpiexec -n 3 mdrun_mpi
</span><br>
<span class="quotelev1">&gt; -v -deffnm run
</span><br>
<span class="quotelev2">&gt; &gt; NNODES=3, MYRANK=0, HOSTNAME=machine1
</span><br>
<span class="quotelev2">&gt; &gt; NNODES=3, MYRANK=2, HOSTNAME=machine1
</span><br>
<span class="quotelev2">&gt; &gt; NODEID=0 argc=4
</span><br>
<span class="quotelev2">&gt; &gt; NODEID=2 argc=4
</span><br>
<span class="quotelev2">&gt; &gt; NNODES=3, MYRANK=1, HOSTNAME=machine2
</span><br>
<span class="quotelev2">&gt; &gt; NODEID=1 argc=4
</span><br>
<span class="quotelev2">&gt; &gt;                         :-)  G  R  O  M  A  C  S  (-:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                     Gyas ROwers Mature At Cryogenic
</span><br>
<span class="quotelev1">&gt; Speed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            :-)  VERSION 3.3.3  (-:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Written by David van der Spoel, Erik Lindahl,
</span><br>
<span class="quotelev1">&gt; Berk Hess, and  
</span><br>
<span class="quotelev2">&gt; &gt; others.
</span><br>
<span class="quotelev2">&gt; &gt;       Copyright (c) 1991-2000, University of
</span><br>
<span class="quotelev1">&gt; Groningen, The  
</span><br>
<span class="quotelev2">&gt; &gt; Netherlands.
</span><br>
<span class="quotelev2">&gt; &gt;             Copyright (c) 2001-2008, The GROMACS
</span><br>
<span class="quotelev1">&gt; development team,
</span><br>
<span class="quotelev2">&gt; &gt;            check out <a href="http://www.gromacs.org">http://www.gromacs.org</a> for more
</span><br>
<span class="quotelev1">&gt; information.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         This program is free software; you can
</span><br>
<span class="quotelev1">&gt; redistribute it and/or
</span><br>
<span class="quotelev2">&gt; &gt;          modify it under the terms of the GNU General
</span><br>
<span class="quotelev1">&gt; Public License
</span><br>
<span class="quotelev2">&gt; &gt;         as published by the Free Software Foundation;
</span><br>
<span class="quotelev1">&gt; either version 2
</span><br>
<span class="quotelev2">&gt; &gt;             of the License, or (at your option) any
</span><br>
<span class="quotelev1">&gt; later version.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              :-)  mdrun_mpi  (-:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Option     Filename  Type         Description
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;  -s        run.tpr  Input        Generic run input:
</span><br>
<span class="quotelev1">&gt; tpr tpb tpa xml
</span><br>
<span class="quotelev2">&gt; &gt;  -o        run.trr  Output       Full precision
</span><br>
<span class="quotelev1">&gt; trajectory: trr trj
</span><br>
<span class="quotelev2">&gt; &gt;  -x        run.xtc  Output, Opt. Compressed trajectory
</span><br>
<span class="quotelev1">&gt; (portable xdr  
</span><br>
<span class="quotelev2">&gt; &gt; format)
</span><br>
<span class="quotelev2">&gt; &gt;  -c        run.gro  Output       Generic structure:
</span><br>
<span class="quotelev1">&gt; gro g96 pdb xml
</span><br>
<span class="quotelev2">&gt; &gt;  -e        run.edr  Output       Generic energy: edr
</span><br>
<span class="quotelev1">&gt; ene
</span><br>
<span class="quotelev2">&gt; &gt;  -g        run.log  Output       Log file
</span><br>
<span class="quotelev2">&gt; &gt; -dgdl       run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev2">&gt; &gt; -field      run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev2">&gt; &gt; -table      run.xvg  Input, Opt.  xvgr/xmgr file
</span><br>
<span class="quotelev2">&gt; &gt; -tablep     run.xvg  Input, Opt.  xvgr/xmgr file
</span><br>
<span class="quotelev2">&gt; &gt; -rerun      run.xtc  Input, Opt.  Generic trajectory:
</span><br>
<span class="quotelev1">&gt; xtc trr trj  
</span><br>
<span class="quotelev2">&gt; &gt; gro g96 pdb
</span><br>
<span class="quotelev2">&gt; &gt; -tpi        run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev2">&gt; &gt; -ei        run.edi  Input, Opt.  ED sampling input
</span><br>
<span class="quotelev2">&gt; &gt; -eo        run.edo  Output, Opt. ED sampling output
</span><br>
<span class="quotelev2">&gt; &gt;  -j        run.gct  Input, Opt.  General coupling
</span><br>
<span class="quotelev1">&gt; stuff
</span><br>
<span class="quotelev2">&gt; &gt; -jo        run.gct  Output, Opt. General coupling
</span><br>
<span class="quotelev1">&gt; stuff
</span><br>
<span class="quotelev2">&gt; &gt; -ffout      run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev2">&gt; &gt; -devout     run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev2">&gt; &gt; -runav      run.xvg  Output, Opt. xvgr/xmgr file
</span><br>
<span class="quotelev2">&gt; &gt; -pi        run.ppa  Input, Opt.  Pull parameters
</span><br>
<span class="quotelev2">&gt; &gt; -po        run.ppa  Output, Opt. Pull parameters
</span><br>
<span class="quotelev2">&gt; &gt; -pd        run.pdo  Output, Opt. Pull data output
</span><br>
<span class="quotelev2">&gt; &gt; -pn        run.ndx  Input, Opt.  Index file
</span><br>
<span class="quotelev2">&gt; &gt; -mtx        run.mtx  Output, Opt. Hessian matrix
</span><br>
<span class="quotelev2">&gt; &gt; -dn        run.ndx  Output, Opt. Index file
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Option       Type   Value   Description
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; -[no]h       bool   no      Print help info and quit
</span><br>
<span class="quotelev2">&gt; &gt; -nice        int    19      Set the nicelevel
</span><br>
<span class="quotelev2">&gt; &gt; -deffnm      string run     Set the default filename
</span><br>
<span class="quotelev1">&gt; for all file  
</span><br>
<span class="quotelev2">&gt; &gt; options
</span><br>
<span class="quotelev2">&gt; &gt; -[no]xvgr    bool   yes     Add specific codes
</span><br>
<span class="quotelev1">&gt; (legends etc.) in the  
</span><br>
<span class="quotelev2">&gt; &gt; output
</span><br>
<span class="quotelev2">&gt; &gt;                            xvg files for the xmgrace
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev2">&gt; &gt; -np          int    1       Number of nodes, must be
</span><br>
<span class="quotelev1">&gt; the same as  
</span><br>
<span class="quotelev2">&gt; &gt; used for
</span><br>
<span class="quotelev2">&gt; &gt;                            grompp
</span><br>
<span class="quotelev2">&gt; &gt; -nt          int    1       Number of threads to start
</span><br>
<span class="quotelev1">&gt; on each node
</span><br>
<span class="quotelev2">&gt; &gt; -[no]v       bool   yes     Be loud and noisy
</span><br>
<span class="quotelev2">&gt; &gt; -[no]compact bool   yes     Write a compact log file
</span><br>
<span class="quotelev2">&gt; &gt; -[no]sepdvdl bool   no      Write separate V and dVdl
</span><br>
<span class="quotelev1">&gt; terms for each
</span><br>
<span class="quotelev2">&gt; &gt;                            interaction type and node
</span><br>
<span class="quotelev1">&gt; to the log  
</span><br>
<span class="quotelev2">&gt; &gt; file(s)
</span><br>
<span class="quotelev2">&gt; &gt; -[no]multi   bool   no      Do multiple simulations in
</span><br>
<span class="quotelev1">&gt; parallel  
</span><br>
<span class="quotelev2">&gt; &gt; (only with
</span><br>
<span class="quotelev2">&gt; &gt;                            -np &gt; 1)
</span><br>
<span class="quotelev2">&gt; &gt; -replex      int    0       Attempt replica exchange
</span><br>
<span class="quotelev1">&gt; every # steps
</span><br>
<span class="quotelev2">&gt; &gt; -reseed      int    -1      Seed for replica exchange,
</span><br>
<span class="quotelev1">&gt; -1 is  
</span><br>
<span class="quotelev2">&gt; &gt; generate a seed
</span><br>
<span class="quotelev2">&gt; &gt; -[no]glas    bool   no      Do glass simulation with
</span><br>
<span class="quotelev1">&gt; special long  
</span><br>
<span class="quotelev2">&gt; &gt; range
</span><br>
<span class="quotelev2">&gt; &gt;                            corrections
</span><br>
<span class="quotelev2">&gt; &gt; -[no]ionize  bool   no      Do a simulation including
</span><br>
<span class="quotelev1">&gt; the effect of  
</span><br>
<span class="quotelev2">&gt; &gt; an X-Ray
</span><br>
<span class="quotelev2">&gt; &gt;                            bombardment on your system
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Back Off! I just backed up run2.log to ./#run2.log.5#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Back Off! I just backed up run0.log to ./#run0.log.12#
</span><br>
<span class="quotelev2">&gt; &gt; Getting Loaded...
</span><br>
<span class="quotelev2">&gt; &gt; Reading file run.tpr, VERSION 3.3.3 (single precision)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Back Off! I just backed up run1.log to ./#run1.log.12#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Program mdrun_mpi, VERSION 3.3.3
</span><br>
<span class="quotelev2">&gt; &gt; Source code file: ../../../../src/gmxlib/block_tx.c,
</span><br>
<span class="quotelev1">&gt; line: 74
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fatal error:
</span><br>
<span class="quotelev2">&gt; &gt; 0: size=672, len=840, rx_count=0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;They're Red Hot&quot; (Red Hot Chili
</span><br>
<span class="quotelev1">&gt; Peppers)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Error on node 1, will try to stop all the nodes
</span><br>
<span class="quotelev2">&gt; &gt; Halting parallel program mdrun_mpi on CPU 1 out of 3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; gcq#220: &quot;They're Red Hot&quot; (Red Hot
</span><br>
<span class="quotelev1">&gt; Chili Peppers)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; One of the processes started by mpirun has exited with
</span><br>
<span class="quotelev1">&gt; a nonzero exit
</span><br>
<span class="quotelev2">&gt; &gt; code.  This typically indicates that the process
</span><br>
<span class="quotelev1">&gt; finished in error.
</span><br>
<span class="quotelev2">&gt; &gt; If your process did not finish in error, be sure to
</span><br>
<span class="quotelev1">&gt; include a &quot;return
</span><br>
<span class="quotelev2">&gt; &gt; 0&quot; or &quot;exit(0)&quot; in your C code before
</span><br>
<span class="quotelev1">&gt; exiting the application.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PID 15964 failed on node n0 (192.168.0.10) with exit
</span><br>
<span class="quotelev1">&gt; status 1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun failed with exit status 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't know what is problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anybody can help me ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mario Jose
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* WE ARE FREE */
</span><br>
<span class="quotelev2">&gt; &gt; Hack to learn, don't learn to hack.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Free Software Foundation  */
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Free software&quot; is a matter of liberty, not
</span><br>
<span class="quotelev1">&gt; price
</span><br>
<span class="quotelev2">&gt; &gt; GNU's Not UNIX. Be free, use GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt; www.gnu.org
</span><br>
<span class="quotelev2">&gt; &gt; www.fsf.org
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Free Culture */
</span><br>
<span class="quotelev2">&gt; &gt; free-culture.org
</span><br>
<span class="quotelev2">&gt; &gt; creativecommons.org
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* ... Hoarders may get piles of money,
</span><br>
<span class="quotelev2">&gt; &gt; That is true, hackers, that is true.
</span><br>
<span class="quotelev2">&gt; &gt; But they cannot help their neighbors;
</span><br>
<span class="quotelev2">&gt; &gt; That's not good, hackers, that's not good ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Richard Stallman (www.stallman.org) */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Human knowledge belongs to the world */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Novos endere&#231;os, o Yahoo! que voc&#234; conhece.
</span><br>
<span class="quotelev1">&gt; Crie um email novo  
</span><br>
<span class="quotelev2">&gt; &gt; com a sua cara @ymail.com ou @rocketmail.com.
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://br.new.mail.yahoo.com/addresses">http://br.new.mail.yahoo.com/addresses</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Novos endere&#231;os, o Yahoo! que voc&#234; conhece. Crie um email novo com a sua cara @ymail.com ou @rocketmail.com.
<br>
<a href="http://br.new.mail.yahoo.com/addresses">http://br.new.mail.yahoo.com/addresses</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6100.php">jody: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Previous message:</strong> <a href="6098.php">Ralph Castain: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>In reply to:</strong> <a href="6098.php">Ralph Castain: "Re: [OMPI users] Error run mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6100.php">jody: "Re: [OMPI users] Error run mpiexec"</a>
<li><strong>Reply:</strong> <a href="6100.php">jody: "Re: [OMPI users] Error run mpiexec"</a>
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

<?
$subject_val = "Re: [OMPI users] delay in launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 17:29:15 2009" -->
<!-- isoreceived="20090115222915" -->
<!-- sent="Thu, 15 Jan 2009 23:28:51 +0100" -->
<!-- isosent="20090115222851" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] delay in launch?" -->
<!-- id="E9C4ABA9-B6D1-42A6-B22E-C8F154F46004_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496F5440.8060402_at_whoi.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] delay in launch?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-15 17:28:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7716.php">Bernard Secher - SFME/LGLS: "[OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="7714.php">Hana Milani: "Re: [OMPI users] mpirun (signal 15 Termination)"</a>
<li><strong>In reply to:</strong> <a href="7712.php">Jeff Dusenberry: "[OMPI users] delay in launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7719.php">Jeff Dusenberry: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Reply:</strong> <a href="7719.php">Jeff Dusenberry: "Re: [OMPI users] delay in launch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 15.01.2009 um 16:20 schrieb Jeff Dusenberry:
<br>
<p><span class="quotelev1">&gt; I'm trying to launch multiple xterms under OpenMPI 1.2.8 and the  
</span><br>
<span class="quotelev1">&gt; SGE job scheduler for purposes of running a serial debugger.  I'm  
</span><br>
<span class="quotelev1">&gt; experiencing file-locking problems on the .Xauthority file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to fix this by asking for a delay between successive  
</span><br>
<span class="quotelev1">&gt; launches, to reduce the chances of contention for the lock by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~$ qrsh -pe mpi 4 -P CIS  /share/apps/openmpi/bin/mpiexec --mca  
</span><br>
<span class="quotelev1">&gt; pls_rsh_debug 1 --mca pls_rsh_delay 5  xterm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 'pls_rsh_delay 5' parameter seems to have no effect.  I tried  
</span><br>
<span class="quotelev1">&gt; replacing 'pls_rsh_debug 1' with 'orte_debug 1', which gave me  
</span><br>
<span class="quotelev1">&gt; additional debugging output, but didn't fix the file locking problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sometimes the above commands will work and I will get all 4 xterms,  
</span><br>
<span class="quotelev1">&gt; but more often I will get an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/X11/xauth:  error in locking authority file /export/home/ 
</span><br>
<span class="quotelev1">&gt; duse/.Xauthority
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; followed by
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; X11 connection rejected because of wrong authentication.
</span><br>
<span class="quotelev1">&gt; xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and one or more of the xterms will fail to open.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I missing something?  Is there another debug flag I need to  
</span><br>
<span class="quotelev1">&gt; set?  Any suggestions for a better way to do this would be  
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<p>You are right that it's neither Open MPI's, nor SGE's fault, but a  
<br>
race condition in the SSH startup. You defined SSH with X11  
<br>
forwarding in SGE (qconf -mconf) - right? Then you have first a ssh  
<br>
connection from your workstation to the login-machine. Then from the  
<br>
login-machine to the node where the mpiexec runs. And then one for  
<br>
each slave node (means an additonal one on the machine where mpiexec  
<br>
is already executed).
<br>
<p>Although it might be possible to give every started sshd an  
<br>
unique .Xauthority file, it's not straight forward to implement due  
<br>
to SGE's startup of the daemons and you would need a sophisticated  
<br>
~/.ssh/rc to create the files at different location and use it in the  
<br>
forthcoming xterm.
<br>
<p>If you want just to open a bunch of xterms, you could also use such a  
<br>
script:
<br>
<p>$ cat multi.sh
<br>
#!/bin/sh
<br>
. /usr/sge/default/common/settings.sh
<br>
for node in  `cat $TMPDIR/machines`; do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qrsh -inherit $node xterm &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep 1
<br>
done
<br>
wait
<br>
<p>The $TMPDIR/machinefile is usually defined for the MPICH(1)'s  
<br>
parallel startup, but not for Open MPI, as it doesn't need it.  
<br>
Nevertheless you could define it for your Open MPI PE or create  
<br>
another PE with the line:
<br>
<p>$ qconf -sp mpi
<br>
...
<br>
start_proc_args    /usr/sge/mpi/startmpi.sh $pe_hostfile
<br>
<p>When you run the script with &quot;qrsh -pe mpi 4 ~/multi.sh&quot; you should  
<br>
get the xterms.
<br>
<p>(It might be advisable to define &quot;execd_params                  
<br>
ENABLE_ADDGRP_KILL=1&quot; in your SGE configuration, to have the ability  
<br>
to kill all the created xterm processes from SGE.)
<br>
<p>HTH - Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7716.php">Bernard Secher - SFME/LGLS: "[OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="7714.php">Hana Milani: "Re: [OMPI users] mpirun (signal 15 Termination)"</a>
<li><strong>In reply to:</strong> <a href="7712.php">Jeff Dusenberry: "[OMPI users] delay in launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7719.php">Jeff Dusenberry: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Reply:</strong> <a href="7719.php">Jeff Dusenberry: "Re: [OMPI users] delay in launch?"</a>
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

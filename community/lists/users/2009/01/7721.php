<?
$subject_val = "Re: [OMPI users] delay in launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 17:57:32 2009" -->
<!-- isoreceived="20090116225732" -->
<!-- sent="Fri, 16 Jan 2009 23:57:12 +0100" -->
<!-- isosent="20090116225712" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] delay in launch?" -->
<!-- id="5037F4B9-E125-48E2-9127-83319B834BE6_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="77072BA3-EB67-4440-8FC3-4692507EDAB4_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2009-01-16 17:57:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7722.php">Gijsbert Wiesenekker: "[OMPI users] mpiexec and iptables"</a>
<li><strong>Previous message:</strong> <a href="7720.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>In reply to:</strong> <a href="7720.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 16.01.2009 um 23:06 schrieb Reuti:
<br>
<p><span class="quotelev1">&gt; Am 16.01.2009 um 22:20 schrieb Jeff Dusenberry:
</span><br>
<span class="quotelev2">&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 15.01.2009 um 16:20 schrieb Jeff Dusenberry:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to launch multiple xterms under OpenMPI 1.2.8 and the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGE job scheduler for purposes of running a serial debugger.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm experiencing file-locking problems on the .Xauthority file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to fix this by asking for a delay between successive  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; launches, to reduce the chances of contention for the lock by:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ~$ qrsh -pe mpi 4 -P CIS  /share/apps/openmpi/bin/mpiexec --mca  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pls_rsh_debug 1 --mca pls_rsh_delay 5  xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The 'pls_rsh_delay 5' parameter seems to have no effect.  I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tried replacing 'pls_rsh_debug 1' with 'orte_debug 1', which  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gave me additional debugging output, but didn't fix the file  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; locking problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sometimes the above commands will work and I will get all 4  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xterms, but more often I will get an error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/X11/xauth:  error in locking authority file /export/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; home/duse/.Xauthority
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; followed by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; X11 connection rejected because of wrong authentication.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and one or more of the xterms will fail to open.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am I missing something?  Is there another debug flag I need to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set?  Any suggestions for a better way to do this would be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You are right that it's neither Open MPI's, nor SGE's fault, but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a race condition in the SSH startup. You defined SSH with X11  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forwarding in SGE (qconf -mconf) - right? Then you have first a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh connection from your workstation to the login-machine. Then  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the login-machine to the node where the mpiexec runs. And  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then one for each slave node (means an additonal one on the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine where mpiexec is already executed).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, that's all correct.  Clearly not very efficient, but I  
</span><br>
<span class="quotelev2">&gt;&gt; haven't had any luck getting xauth or xhost to work more directly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Although it might be possible to give every started sshd an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unique .Xauthority file, it's not straight forward to implement  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; due to SGE's startup of the daemons and you would need a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sophisticated ~/.ssh/rc to create the files at different location  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and use it in the forthcoming xterm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, that helped a lot, but I still can't quite get it to  
</span><br>
<span class="quotelev2">&gt;&gt; work.  I do want the xterms to run mpi jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you need the X11 forwarding then for your application, and xterm  
</span><br>
<span class="quotelev1">&gt; was just an example?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried this sshrc script (modified from the sshd man page):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; XAUTHORITY=/local/$USER/.Xauthority${SSH_TTY##*/}
</span><br>
<span class="quotelev2">&gt;&gt; export XAUTHORITY
</span><br>
<span class="quotelev2">&gt;&gt; if read proto cookie &amp;&amp; [ -n &quot;$DISPLAY&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;         if [ `echo $DISPLAY | cut -c1-10` = 'localhost:' ]; then
</span><br>
<span class="quotelev2">&gt;&gt;                 # X11UseLocalhost=yes
</span><br>
<span class="quotelev2">&gt;&gt;                 echo add unix:`echo $DISPLAY | cut -c11-` $proto  
</span><br>
<span class="quotelev2">&gt;&gt; $cookie
</span><br>
<span class="quotelev2">&gt;&gt;         else
</span><br>
<span class="quotelev2">&gt;&gt;                 # X11UseLocalhost=no
</span><br>
<span class="quotelev2">&gt;&gt;                 echo add $DISPLAY $proto $cookie
</span><br>
<span class="quotelev2">&gt;&gt;         fi | xauth -q -
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, but the created session also needs it. I mean: you login to a  
</span><br>
<span class="quotelev1">&gt; node with the above script. Then in the shell you execute:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ xauth list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and you will get the default ~/.Xauthoriry Also in the shell you  
</span><br>
<span class="quotelev1">&gt; need to export the above variable to get the listing of the created  
</span><br>
<span class="quotelev1">&gt; special Xauthority file from the correct location. You can add:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export XAUTHORITY=/local/$USER/.Xauthority${SSH_TTY##*/}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to .bascrc and .profile (for non-interactive [mpiexec] and  
</span><br>
<span class="quotelev1">&gt; interactive use)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the SGE SSH_TTY issue I mentioned it's no straight forward.  
</span><br>
<span class="quotelev1">&gt; When the SSH starts there is nothing defined by SGE. You could try  
</span><br>
<span class="quotelev1">&gt; to look in the process chain (whether it's running under SGE), but  
</span><br>
<span class="quotelev1">&gt; it doesn't look nice. I look into another solution and let you  
</span><br>
<span class="quotelev1">&gt; know, when I found something.
</span><br>
<p>What might be used is something to send and accept environment  
<br>
variables and use it instead of the SSH_TTY. I.e. in SGE's setup:
<br>
<p>rsh_command                  /usr/bin/ssh -osendenv=rank
<br>
<p>and in the sshd_config:
<br>
<p>AcceptEnv rank
<br>
<p>Now the enviroment rank must be set for each mpi process and it  
<br>
should work.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I am successful in creating a unique .Xauthority for each  
</span><br>
<span class="quotelev2">&gt;&gt; process locally on each node when I log in via ssh directly.   
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, I do have to provide another definition of  
</span><br>
<span class="quotelev2">&gt;&gt; XAUTHORITY somewhere in my startup scripts - the one above does  
</span><br>
<span class="quotelev2">&gt;&gt; not get seen outside of the sshrc execution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I try to run this under qrsh/mpiexec, it acts as if it  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't have the SSH_TTY environment variable (is that due to  
</span><br>
<span class="quotelev2">&gt;&gt; SGE?), and we're back to a race condition.  Is there another  
</span><br>
<span class="quotelev2">&gt;&gt; variable I can use in the sge/mpi context?  I also don't  
</span><br>
<span class="quotelev2">&gt;&gt; understand where I would define the XAUTHORITY variable when  
</span><br>
<span class="quotelev2">&gt;&gt; running under mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure this is the best way to approach this - I was  
</span><br>
<span class="quotelev2">&gt;&gt; originally hoping that the mpiexec call would have a way to  
</span><br>
<span class="quotelev2">&gt;&gt; introduce a delay between successive launches but that doesn't  
</span><br>
<span class="quotelev2">&gt;&gt; seem to be working either.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7722.php">Gijsbert Wiesenekker: "[OMPI users] mpiexec and iptables"</a>
<li><strong>Previous message:</strong> <a href="7720.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>In reply to:</strong> <a href="7720.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
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

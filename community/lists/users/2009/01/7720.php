<?
$subject_val = "Re: [OMPI users] delay in launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 17:06:23 2009" -->
<!-- isoreceived="20090116220623" -->
<!-- sent="Fri, 16 Jan 2009 23:06:05 +0100" -->
<!-- isosent="20090116220605" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] delay in launch?" -->
<!-- id="77072BA3-EB67-4440-8FC3-4692507EDAB4_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4970FA14.6030309_at_whoi.edu" -->
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
<strong>Date:</strong> 2009-01-16 17:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7721.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Previous message:</strong> <a href="7719.php">Jeff Dusenberry: "Re: [OMPI users] delay in launch?"</a>
<li><strong>In reply to:</strong> <a href="7719.php">Jeff Dusenberry: "Re: [OMPI users] delay in launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7721.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Reply:</strong> <a href="7721.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 16.01.2009 um 22:20 schrieb Jeff Dusenberry:
<br>
<span class="quotelev1">&gt; Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 15.01.2009 um 16:20 schrieb Jeff Dusenberry:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to launch multiple xterms under OpenMPI 1.2.8 and the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SGE job scheduler for purposes of running a serial debugger.  I'm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; experiencing file-locking problems on the .Xauthority file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to fix this by asking for a delay between successive  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launches, to reduce the chances of contention for the lock by:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~$ qrsh -pe mpi 4 -P CIS  /share/apps/openmpi/bin/mpiexec --mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_rsh_debug 1 --mca pls_rsh_delay 5  xterm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The 'pls_rsh_delay 5' parameter seems to have no effect.  I tried  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; replacing 'pls_rsh_debug 1' with 'orte_debug 1', which gave me  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional debugging output, but didn't fix the file locking  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sometimes the above commands will work and I will get all 4  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterms, but more often I will get an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/X11/xauth:  error in locking authority file /export/home/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; duse/.Xauthority
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; followed by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; X11 connection rejected because of wrong authentication.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and one or more of the xterms will fail to open.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I missing something?  Is there another debug flag I need to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set?  Any suggestions for a better way to do this would be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; You are right that it's neither Open MPI's, nor SGE's fault, but a  
</span><br>
<span class="quotelev2">&gt;&gt; race condition in the SSH startup. You defined SSH with X11  
</span><br>
<span class="quotelev2">&gt;&gt; forwarding in SGE (qconf -mconf) - right? Then you have first a  
</span><br>
<span class="quotelev2">&gt;&gt; ssh connection from your workstation to the login-machine. Then  
</span><br>
<span class="quotelev2">&gt;&gt; from the login-machine to the node where the mpiexec runs. And  
</span><br>
<span class="quotelev2">&gt;&gt; then one for each slave node (means an additonal one on the  
</span><br>
<span class="quotelev2">&gt;&gt; machine where mpiexec is already executed).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that's all correct.  Clearly not very efficient, but I haven't  
</span><br>
<span class="quotelev1">&gt; had any luck getting xauth or xhost to work more directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Although it might be possible to give every started sshd an  
</span><br>
<span class="quotelev2">&gt;&gt; unique .Xauthority file, it's not straight forward to implement  
</span><br>
<span class="quotelev2">&gt;&gt; due to SGE's startup of the daemons and you would need a  
</span><br>
<span class="quotelev2">&gt;&gt; sophisticated ~/.ssh/rc to create the files at different location  
</span><br>
<span class="quotelev2">&gt;&gt; and use it in the forthcoming xterm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, that helped a lot, but I still can't quite get it to work.   
</span><br>
<span class="quotelev1">&gt; I do want the xterms to run mpi jobs.
</span><br>
<p>Do you need the X11 forwarding then for your application, and xterm  
<br>
was just an example?
<br>
<p><span class="quotelev1">&gt; I tried this sshrc script (modified from the sshd man page):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; XAUTHORITY=/local/$USER/.Xauthority${SSH_TTY##*/}
</span><br>
<span class="quotelev1">&gt; export XAUTHORITY
</span><br>
<span class="quotelev1">&gt; if read proto cookie &amp;&amp; [ -n &quot;$DISPLAY&quot; ]; then
</span><br>
<span class="quotelev1">&gt;         if [ `echo $DISPLAY | cut -c1-10` = 'localhost:' ]; then
</span><br>
<span class="quotelev1">&gt;                 # X11UseLocalhost=yes
</span><br>
<span class="quotelev1">&gt;                 echo add unix:`echo $DISPLAY | cut -c11-` $proto  
</span><br>
<span class="quotelev1">&gt; $cookie
</span><br>
<span class="quotelev1">&gt;         else
</span><br>
<span class="quotelev1">&gt;                 # X11UseLocalhost=no
</span><br>
<span class="quotelev1">&gt;                 echo add $DISPLAY $proto $cookie
</span><br>
<span class="quotelev1">&gt;         fi | xauth -q -
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<p>Yes, but the created session also needs it. I mean: you login to a  
<br>
node with the above script. Then in the shell you execute:
<br>
<p>$ xauth list
<br>
<p>and you will get the default ~/.Xauthoriry Also in the shell you need  
<br>
to export the above variable to get the listing of the created  
<br>
special Xauthority file from the correct location. You can add:
<br>
<p>export XAUTHORITY=/local/$USER/.Xauthority${SSH_TTY##*/}
<br>
<p>to .bascrc and .profile (for non-interactive [mpiexec] and  
<br>
interactive use)
<br>
<p>For the SGE SSH_TTY issue I mentioned it's no straight forward. When  
<br>
the SSH starts there is nothing defined by SGE. You could try to look  
<br>
in the process chain (whether it's running under SGE), but it doesn't  
<br>
look nice. I look into another solution and let you know, when I  
<br>
found something.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; and I am successful in creating a unique .Xauthority for each  
</span><br>
<span class="quotelev1">&gt; process locally on each node when I log in via ssh directly.   
</span><br>
<span class="quotelev1">&gt; Unfortunately, I do have to provide another definition of  
</span><br>
<span class="quotelev1">&gt; XAUTHORITY somewhere in my startup scripts - the one above does not  
</span><br>
<span class="quotelev1">&gt; get seen outside of the sshrc execution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try to run this under qrsh/mpiexec, it acts as if it doesn't  
</span><br>
<span class="quotelev1">&gt; have the SSH_TTY environment variable (is that due to SGE?), and  
</span><br>
<span class="quotelev1">&gt; we're back to a race condition.  Is there another variable I can  
</span><br>
<span class="quotelev1">&gt; use in the sge/mpi context?  I also don't understand where I would  
</span><br>
<span class="quotelev1">&gt; define the XAUTHORITY variable when running under mpiexec.
</span><br>
<span class="quotelev1">&gt; I'm not sure this is the best way to approach this - I was  
</span><br>
<span class="quotelev1">&gt; originally hoping that the mpiexec call would have a way to  
</span><br>
<span class="quotelev1">&gt; introduce a delay between successive launches but that doesn't seem  
</span><br>
<span class="quotelev1">&gt; to be working either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
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
<li><strong>Next message:</strong> <a href="7721.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Previous message:</strong> <a href="7719.php">Jeff Dusenberry: "Re: [OMPI users] delay in launch?"</a>
<li><strong>In reply to:</strong> <a href="7719.php">Jeff Dusenberry: "Re: [OMPI users] delay in launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7721.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Reply:</strong> <a href="7721.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
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

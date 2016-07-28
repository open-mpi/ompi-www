<?
$subject_val = "Re: [OMPI users] delay in launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 16:20:27 2009" -->
<!-- isoreceived="20090116212027" -->
<!-- sent="Fri, 16 Jan 2009 16:20:20 -0500" -->
<!-- isosent="20090116212020" -->
<!-- name="Jeff Dusenberry" -->
<!-- email="jdusenberry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] delay in launch?" -->
<!-- id="4970FA14.6030309_at_whoi.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9C4ABA9-B6D1-42A6-B22E-C8F154F46004_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Jeff Dusenberry (<em>jdusenberry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-16 16:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7720.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Previous message:</strong> <a href="7718.php">Jeff Squyres: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>In reply to:</strong> <a href="7715.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7720.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Reply:</strong> <a href="7720.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 15.01.2009 um 16:20 schrieb Jeff Dusenberry:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to launch multiple xterms under OpenMPI 1.2.8 and the SGE 
</span><br>
<span class="quotelev2">&gt;&gt; job scheduler for purposes of running a serial debugger.  I'm 
</span><br>
<span class="quotelev2">&gt;&gt; experiencing file-locking problems on the .Xauthority file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to fix this by asking for a delay between successive launches, 
</span><br>
<span class="quotelev2">&gt;&gt; to reduce the chances of contention for the lock by:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ~$ qrsh -pe mpi 4 -P CIS  /share/apps/openmpi/bin/mpiexec --mca 
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_debug 1 --mca pls_rsh_delay 5  xterm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 'pls_rsh_delay 5' parameter seems to have no effect.  I tried 
</span><br>
<span class="quotelev2">&gt;&gt; replacing 'pls_rsh_debug 1' with 'orte_debug 1', which gave me 
</span><br>
<span class="quotelev2">&gt;&gt; additional debugging output, but didn't fix the file locking problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sometimes the above commands will work and I will get all 4 xterms, 
</span><br>
<span class="quotelev2">&gt;&gt; but more often I will get an error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/X11/xauth:  error in locking authority file 
</span><br>
<span class="quotelev2">&gt;&gt; /export/home/duse/.Xauthority
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; followed by
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; X11 connection rejected because of wrong authentication.
</span><br>
<span class="quotelev2">&gt;&gt; xterm Xt error: Can't open display: localhost:11.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and one or more of the xterms will fail to open.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing something?  Is there another debug flag I need to set?  
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions for a better way to do this would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are right that it's neither Open MPI's, nor SGE's fault, but a race 
</span><br>
<span class="quotelev1">&gt; condition in the SSH startup. You defined SSH with X11 forwarding in SGE 
</span><br>
<span class="quotelev1">&gt; (qconf -mconf) - right? Then you have first a ssh connection from your 
</span><br>
<span class="quotelev1">&gt; workstation to the login-machine. Then from the login-machine to the 
</span><br>
<span class="quotelev1">&gt; node where the mpiexec runs. And then one for each slave node (means an 
</span><br>
<span class="quotelev1">&gt; additonal one on the machine where mpiexec is already executed).
</span><br>
<p>Yes, that's all correct.  Clearly not very efficient, but I haven't had 
<br>
any luck getting xauth or xhost to work more directly.
<br>
<p><span class="quotelev1">&gt; Although it might be possible to give every started sshd an unique 
</span><br>
<span class="quotelev1">&gt; .Xauthority file, it's not straight forward to implement due to SGE's 
</span><br>
<span class="quotelev1">&gt; startup of the daemons and you would need a sophisticated ~/.ssh/rc to 
</span><br>
<span class="quotelev1">&gt; create the files at different location and use it in the forthcoming xterm.
</span><br>
<p>Thanks, that helped a lot, but I still can't quite get it to work.  I do 
<br>
want the xterms to run mpi jobs.  I tried this sshrc script (modified 
<br>
from the sshd man page):
<br>
<p>XAUTHORITY=/local/$USER/.Xauthority${SSH_TTY##*/}
<br>
export XAUTHORITY
<br>
if read proto cookie &amp;&amp; [ -n &quot;$DISPLAY&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if [ `echo $DISPLAY | cut -c1-10` = 'localhost:' ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# X11UseLocalhost=yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo add unix:`echo $DISPLAY | cut -c11-` $proto $cookie
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# X11UseLocalhost=no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo add $DISPLAY $proto $cookie
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi | xauth -q -
<br>
fi
<br>
<p>and I am successful in creating a unique .Xauthority for each process 
<br>
locally on each node when I log in via ssh directly.  Unfortunately, I 
<br>
do have to provide another definition of XAUTHORITY somewhere in my 
<br>
startup scripts - the one above does not get seen outside of the sshrc 
<br>
execution.
<br>
<p>When I try to run this under qrsh/mpiexec, it acts as if it doesn't have 
<br>
the SSH_TTY environment variable (is that due to SGE?), and we're back 
<br>
to a race condition.  Is there another variable I can use in the sge/mpi 
<br>
context?  I also don't understand where I would define the XAUTHORITY 
<br>
variable when running under mpiexec.
<br>
<p>I'm not sure this is the best way to approach this - I was originally 
<br>
hoping that the mpiexec call would have a way to introduce a delay 
<br>
between successive launches but that doesn't seem to be working either.
<br>
<p>Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7720.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Previous message:</strong> <a href="7718.php">Jeff Squyres: "Re: [OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>In reply to:</strong> <a href="7715.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7720.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Reply:</strong> <a href="7720.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
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

<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 11:36:27 2008" -->
<!-- isoreceived="20080205163627" -->
<!-- sent="Tue, 05 Feb 2008 11:36:27 -0500" -->
<!-- isosent="20080205163627" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again" -->
<!-- id="47A8908B.3080604_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0801290628n4c57a500le9f05f92f5d436cc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun, paths and xterm again<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 11:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4987.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4985.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4900.php">jody: "[OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4987.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Reply:</strong> <a href="4987.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody,
<br>
<p>Just to make sure I understand. Your desktop is plankton, and you want 
<br>
to run a job on both plankton and nano, and have xterms show up on nano.
<br>
<p>It looks like you are already doing this, but to make sure, the way I 
<br>
would use xhost is:
<br>
plankton$ xhost +nano_00
<br>
plankton$ mpirun -np 4 --hostfile testhosts -x DISPLAY=plankton:0.0 
<br>
xterm -hold -e ../MPITest
<br>
<p>Can you try running:
<br>
plankton$ mpirun -np 1 -host nano_00 -x DISPLAY=plankton:0.0 printenv
<br>
<p>just to make sure the environment variable is being properly set.
<br>
<p>You might also try:
<br>
in terminal 1:
<br>
plankton$ xhost +nano_00
<br>
<p>in terminal 2:
<br>
plankton$ ssh -x nano_00
<br>
nano_00$ export DISPLAY=&quot;plankton:0.0&quot;
<br>
nano_00$ xterm
<br>
<p>This will ssh into nano, disabling ssh X forwarding, and try to launch 
<br>
an xterm. If this does not work, then something is wrong with your x 
<br>
setup. If it does work, it should work with Open MPI as well.
<br>
<p>For your second question: I'm not sure why there would be a difference 
<br>
in finding the shared libraries in gdb vs. with the xterm.
<br>
<p>Tim
<br>
<p>jody wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Sorry to bring this subject up again -
</span><br>
<span class="quotelev1">&gt; but i have a problem getting xterms
</span><br>
<span class="quotelev1">&gt; running for all of my processes (for debugging purposes).
</span><br>
<span class="quotelev1">&gt; There are actually two problem involved:
</span><br>
<span class="quotelev1">&gt; display, and paths.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my ssh is set up so that X forwarding is allowed,
</span><br>
<span class="quotelev1">&gt; and, indeed,
</span><br>
<span class="quotelev1">&gt;   ssh nano_00 xterm
</span><br>
<span class="quotelev1">&gt; opens an xterm from the remote machine nano_00.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i run my program normally, it works ok:
</span><br>
<span class="quotelev1">&gt;  [jody]:/mnt/data1/neander:$mpirun -np 4 --hostfile testhosts ./MPITest
</span><br>
<span class="quotelev1">&gt; [aim-plankton.unizh.ch]I am #0/4 global
</span><br>
<span class="quotelev1">&gt; [aim-plankton.unizh.ch]I am #1/4 global
</span><br>
<span class="quotelev1">&gt; [aim-nano_00]I am #2/4 global
</span><br>
<span class="quotelev1">&gt; [aim-nano_00]I am #3/4 global
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when i try to see it in xterms
</span><br>
<span class="quotelev1">&gt; [jody]:/mnt/data1/neander:$mpirun -np 4 --hostfile testhosts -x
</span><br>
<span class="quotelev1">&gt; DISPLAY xterm -hold -e  ./MPITest
</span><br>
<span class="quotelev1">&gt; xterm Xt error: Can't open display: :0.0
</span><br>
<span class="quotelev1">&gt; xterm Xt error: Can't open display: :0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (same happens, if i set DISPLAY=plankton:0.0, or if i use plankton's
</span><br>
<span class="quotelev1">&gt; ip address;
</span><br>
<span class="quotelev1">&gt; and xhost is enabled for nano_00)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the other two (the &quot;local&quot;) xterms open, but they display the message:
</span><br>
<span class="quotelev1">&gt;  ./MPITest: error while loading shared libraries: libmpi_cxx.so.0:
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; (This also happens if i only have local processes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my first question is: what do i do to enable nano_00 to display an xterm
</span><br>
<span class="quotelev1">&gt; on plankton? Using normal ssh there seems to be no problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second question: why does the use of xterm &quot;hide&quot; the open-mpi libs?
</span><br>
<span class="quotelev1">&gt; Interestingly: if i use xterm with gdb to start my application, it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;   Jody
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
<li><strong>Next message:</strong> <a href="4987.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4985.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4900.php">jody: "[OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4987.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Reply:</strong> <a href="4987.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
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

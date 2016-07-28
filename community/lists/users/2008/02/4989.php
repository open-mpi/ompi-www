<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 13:03:47 2008" -->
<!-- isoreceived="20080205180347" -->
<!-- sent="Tue, 05 Feb 2008 13:03:47 -0500" -->
<!-- isosent="20080205180347" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again" -->
<!-- id="47A8A503.10701_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0802050902o2e538bc6gd3d2c122c2ba4d8a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-02-05 13:03:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4990.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4988.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4987.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4993.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Reply:</strong> <a href="4993.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jody,
<br>
<p>jody wrote:
<br>
<span class="quotelev1">&gt; Hi Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your desktop is plankton, and you want
</span><br>
<span class="quotelev2">&gt;&gt; to run a job on both plankton and nano, and have xterms show up on nano.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not on nano, but on plankton, but ithink this was just a typo :)
</span><br>
Correct.
<br>
<p><span class="quotelev2">&gt;&gt; It looks like you are already doing this, but to make sure, the way I
</span><br>
<span class="quotelev2">&gt;&gt; would use xhost is:
</span><br>
<span class="quotelev2">&gt;&gt; plankton$ xhost +nano_00
</span><br>
<span class="quotelev2">&gt;&gt; plankton$ mpirun -np 4 --hostfile testhosts -x DISPLAY=plankton:0.0
</span><br>
<span class="quotelev2">&gt;&gt; xterm -hold -e ../MPITest
</span><br>
<span class="quotelev1">&gt; This gives me 2 lines of
</span><br>
<span class="quotelev1">&gt;   xterm Xt error: Can't open display: plankton:0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you try running:
</span><br>
<span class="quotelev2">&gt;&gt; plankton$ mpirun -np 1 -host nano_00 -x DISPLAY=plankton:0.0 printenv
</span><br>
<span class="quotelev1">&gt; This yields
</span><br>
<span class="quotelev1">&gt; DISPLAY=plankton:0.0
</span><br>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; just to make sure the environment variable is being properly set.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might also try:
</span><br>
<span class="quotelev2">&gt;&gt; in terminal 1:
</span><br>
<span class="quotelev2">&gt;&gt; plankton$ xhost +nano_00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in terminal 2:
</span><br>
<span class="quotelev2">&gt;&gt; plankton$ ssh -x nano_00
</span><br>
<span class="quotelev2">&gt;&gt; nano_00$ export DISPLAY=&quot;plankton:0.0&quot;
</span><br>
<span class="quotelev2">&gt;&gt; nano_00$ xterm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This experiment also gives
</span><br>
<span class="quotelev1">&gt; xterm Xt error: Can't open display: plankton:0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will ssh into nano, disabling ssh X forwarding, and try to launch
</span><br>
<span class="quotelev2">&gt;&gt; an xterm. If this does not work, then something is wrong with your x
</span><br>
<span class="quotelev2">&gt;&gt; setup. If it does work, it should work with Open MPI as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; So i guess something is wrong with my X setup.
</span><br>
<span class="quotelev1">&gt; I wonder what it could be ...
</span><br>
<p>So this is an X issue, not an Open MPI issue then. I do not know enough 
<br>
about X setup to help here...
<br>
<p><p><span class="quotelev1">&gt; Doing the same with X11 forwarding works perfectly.
</span><br>
<span class="quotelev1">&gt; But why is X11 forwarding bad?  Or differently asked,
</span><br>
<span class="quotelev1">&gt; does Opem MPI make the ssh connection in such a way
</span><br>
<span class="quotelev1">&gt; that X11 forwarding is  disabled?
</span><br>
<p>What Open MPI does is it uses ssh to launch a daemon on a remote node, 
<br>
then it disconnects the ssh session. This is done to prevent running out 
<br>
of resources at scale. We then send a message to the daemon to launch 
<br>
the client application. So we are not doing anything to prevent ssh X11 
<br>
forwarding, it is just that by the time the application launched the ssh 
<br>
sessions are no longer around.
<br>
<p>There is a way to force the ssh sessions to stay open. However doing so 
<br>
will result in a bunch of excess debug output. If you add 
<br>
&quot;--debug-daemons&quot; to the mpirun command line, the ssh connections should 
<br>
stay open.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4990.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4988.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4987.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4993.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Reply:</strong> <a href="4993.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
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

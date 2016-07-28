<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 11:11:03 2008" -->
<!-- isoreceived="20080206161103" -->
<!-- sent="Wed, 06 Feb 2008 11:11:02 -0500" -->
<!-- isosent="20080206161102" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again" -->
<!-- id="47A9DC16.7030404_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0802060402m7b2b6154p17e5b305821c06d6_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-02-06 11:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4997.php">Christian Bell: "Re: [OMPI users] Infinipath context limit"</a>
<li><strong>Previous message:</strong> <a href="4995.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="4993.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jody,
<br>
<p>If you want to forward X connections through ssh, you should NOT set the 
<br>
DISPLAY variable. ssh will set the proper one for you.
<br>
<p>Tim
<br>
<p>jody wrote:
<br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your explanation on how OpenMPI uses ssh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a way to force the ssh sessions to stay open. However doing so
</span><br>
<span class="quotelev2">&gt;&gt; will result in a bunch of excess debug output. If you add
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--debug-daemons&quot; to the mpirun command line, the ssh connections should
</span><br>
<span class="quotelev2">&gt;&gt; stay open.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately this didn't work either:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jody]:/mnt/data1/neander:$mpirun -np 4 --debug-daemons --hostfile
</span><br>
<span class="quotelev1">&gt; testhosts -x DISPLAY=plankton:0.0 xterm -hold -e ../MPITest
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,1] checking in as pid 19473 on host plankton.unizh.ch
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,2] checking in as pid 26531 on host nano_00
</span><br>
<span class="quotelev1">&gt; [plankton.unizh.ch:19473] [0,0,1] orted: received launch callback
</span><br>
<span class="quotelev1">&gt; [nano_00:26531] [0,0,2] orted: received launch callback
</span><br>
<span class="quotelev1">&gt; xterm Xt error: Can't open display: plankton:0.0
</span><br>
<span class="quotelev1">&gt; xterm Xt error: Can't open display: plankton:0.0
</span><br>
<span class="quotelev1">&gt; xterm Xt error: Can't open display: plankton:0.0
</span><br>
<span class="quotelev1">&gt; xterm Xt error: Can't open display: plankton:0.0
</span><br>
<span class="quotelev1">&gt; [plankton.unizh.ch:19473] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; [plankton.unizh.ch:19473] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev1">&gt; [nano_00:26531] [0,0,2] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; [nano_00:26531] [0,0,2] orted_recv_pls: received exit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i use &quot;:0.0&quot; instead of &quot;plankton:0.0&quot;, at least the local
</span><br>
<span class="quotelev1">&gt; processes open their X-terms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
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
<li><strong>Next message:</strong> <a href="4997.php">Christian Bell: "Re: [OMPI users] Infinipath context limit"</a>
<li><strong>Previous message:</strong> <a href="4995.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="4993.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
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

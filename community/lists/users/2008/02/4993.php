<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 07:02:37 2008" -->
<!-- isoreceived="20080206120237" -->
<!-- sent="Wed, 6 Feb 2008 13:02:30 +0100" -->
<!-- isosent="20080206120230" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again" -->
<!-- id="9b0da5ce0802060402m7b2b6154p17e5b305821c06d6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47A8A503.10701_at_open-mpi.org" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 07:02:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4994.php">Michal Charemza: "[OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="4992.php">Dani&#235;l Mantione: "[OMPI users] Infinipath context limit"</a>
<li><strong>In reply to:</strong> <a href="4989.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4996.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Reply:</strong> <a href="4996.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim
<br>
<p>Thank you for your explanation on how OpenMPI uses ssh.
<br>
<p><p><span class="quotelev1">&gt; There is a way to force the ssh sessions to stay open. However doing so
</span><br>
<span class="quotelev1">&gt; will result in a bunch of excess debug output. If you add
</span><br>
<span class="quotelev1">&gt; &quot;--debug-daemons&quot; to the mpirun command line, the ssh connections should
</span><br>
<span class="quotelev1">&gt; stay open.
</span><br>
<p>Unfortunately this didn't work either:
<br>
<p>[jody]:/mnt/data1/neander:$mpirun -np 4 --debug-daemons --hostfile
<br>
testhosts -x DISPLAY=plankton:0.0 xterm -hold -e ../MPITest
<br>
Daemon [0,0,1] checking in as pid 19473 on host plankton.unizh.ch
<br>
Daemon [0,0,2] checking in as pid 26531 on host nano_00
<br>
[plankton.unizh.ch:19473] [0,0,1] orted: received launch callback
<br>
[nano_00:26531] [0,0,2] orted: received launch callback
<br>
xterm Xt error: Can't open display: plankton:0.0
<br>
xterm Xt error: Can't open display: plankton:0.0
<br>
xterm Xt error: Can't open display: plankton:0.0
<br>
xterm Xt error: Can't open display: plankton:0.0
<br>
[plankton.unizh.ch:19473] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[plankton.unizh.ch:19473] [0,0,1] orted_recv_pls: received exit
<br>
[nano_00:26531] [0,0,2] orted_recv_pls: received message from [0,0,0]
<br>
[nano_00:26531] [0,0,2] orted_recv_pls: received exit
<br>
<p>If i use &quot;:0.0&quot; instead of &quot;plankton:0.0&quot;, at least the local
<br>
processes open their X-terms.
<br>
<p><p><p>Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4994.php">Michal Charemza: "[OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="4992.php">Dani&#235;l Mantione: "[OMPI users] Infinipath context limit"</a>
<li><strong>In reply to:</strong> <a href="4989.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4996.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Reply:</strong> <a href="4996.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
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

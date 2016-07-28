<?
$subject_val = "[OMPI users] checkpointing multi node and multi process applications";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 20:25:01 2010" -->
<!-- isoreceived="20100304012501" -->
<!-- sent="Wed, 3 Mar 2010 22:24:56 -0300" -->
<!-- isosent="20100304012456" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="[OMPI users] checkpointing multi node and multi process applications" -->
<!-- id="9108753b1003031724w380769fyeb9debdf65391ae6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] checkpointing multi node and multi process applications<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 20:24:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12234.php">Terry Frankcombe: "Re: [OMPI users] running external program	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12232.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12236.php">Fernando Lemos: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="12236.php">Fernando Lemos: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>First, I'm hoping setting the subject of this e-mail will get it
<br>
attached to the thread that starts with this e-mail:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/12/11608.php">http://www.open-mpi.org/community/lists/users/2009/12/11608.php</a>
<br>
<p>The reason I'm not replying to that thread is that I wasn't subscribed
<br>
to the list at the time.
<br>
<p><p>My environment is detailed in another thread, not related at all to this issue:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2010/03/12199.php">http://www.open-mpi.org/community/lists/users/2010/03/12199.php</a>
<br>
<p><p>I'm running into the same problem Jean described (though I'm running
<br>
1.4.1). Note that taking and restarting from checkpoints works fine
<br>
now when I'm using only a single node.
<br>
<p>This is what I get by running the job on two nodes, also showing the
<br>
output after the checkpoint is taken:
<br>
<p>root_at_debian1# mpirun -am ft-enable-cr -mca btl_tcp_if_include eth1 -np
<br>
2 --host debian1,debian2 ring
<br>
&lt;snip&gt;
<br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 sending 2460 to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 received 2459
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 sending 2459 to 0
</span><br>
[debian1:01817] Error: expected_component: PID information unavailable!
<br>
[debian1:01817] Error: expected_component: Component Name information
<br>
unavailable!
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 1819 on node debian1
<br>
exited on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
<p>Now taking the checkpoint:
<br>
<p>root_at_debian1# ompi-checkpoint --term `ps ax | grep mpirun | grep -v
<br>
grep | awk '{print $1}'`
<br>
Snapshot Ref.:   0 ompi_global_snapshot_1817.ckpt
<br>
<p>Restarting from the checkpoint:
<br>
<p>root_at_debian1:~# ompi-restart ompi_global_snapshot_1817.ckpt
<br>
[debian1:01832] Error: Unable to access the path
<br>
[/root/ompi_global_snapshot_1817.ckpt/0/opal_snapshot_1.ckpt]!
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_1.ckpt) is invalid because either
<br>
you have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>After spitting that error message, ompi-restart just hangs forever.
<br>
<p><p>Here's something that may or may not matter. debian1 and debian2 are
<br>
two virtual machines. They have two network interfaces each:
<br>
<p>- eth0: Connected through NAT so that the machine can access the
<br>
internet. It gets an address by DHCP (VirtualBox magic), which is
<br>
always 10.0.2.15/24 (for both machines). They have no connection to
<br>
each other through this interface, they can only access the outside.
<br>
<p>- eth1: Connected to an internal VirtualBox interface. Only debian1
<br>
and debian2 are members of that internal network (more VirtualBox
<br>
magic). The IPs are statically configured, 192.168.200.1/24 for
<br>
debian1, 192.168.200.2/24 for debian2.
<br>
<p>Since both machines have an IP in the same subnet on eth0 (actually
<br>
the same IP), OpenMPI thinks they're in the same network connected
<br>
through eth0 too. That's why I need to specify btl_tcp_if_include
<br>
eth1, otherwise running jobs across the two nodes will not work
<br>
properly (sends and recvs time out).
<br>
<p><p>Is there anything I can do to provide more information about this bug?
<br>
E.g. try to compile the code in the SVN trunk? I also have kept the
<br>
snapshots intact, I can tar them up and upload them somewhere in case
<br>
you guys need it. I can also provide the source code to the ring
<br>
program, but it's really the canonical ring MPI example.
<br>
<p>As usual, any info you might need, just ask and I'll provide.
<br>
<p><p>Thanks in advance,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12234.php">Terry Frankcombe: "Re: [OMPI users] running external program	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12232.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12236.php">Fernando Lemos: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="12236.php">Fernando Lemos: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
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

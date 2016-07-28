<?
$subject_val = "[OMPI users] no reaction of remote hosts after ompi reinstall";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 06:59:24 2008" -->
<!-- isoreceived="20080610105924" -->
<!-- sent="Tue, 10 Jun 2008 12:59:18 +0200" -->
<!-- isosent="20080610105918" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] no reaction of remote hosts after ompi reinstall" -->
<!-- id="9b0da5ce0806100359p1fcf4e39mf5881a01a4e47975_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] no reaction of remote hosts after ompi reinstall<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-10 06:59:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5857.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5855.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
after a crash i reinstalled open-mpi 1.2.5 on my machines,
<br>
used
<br>
&nbsp;&nbsp;./configure --prefix /opt/openmpi --enable-mpirun-prefix-by-default
<br>
and set PATH and LD_LIBRARY_PATH in .bashrc:
<br>
&nbsp;&nbsp;PATH=/opt/openmpi/bin:$PATH
<br>
&nbsp;&nbsp;export PATH
<br>
&nbsp;&nbsp;LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;export LD_LIBRARY_PATH
<br>
<p>First problem:
<br>
&nbsp;&nbsp;ssh nano_00 printenv
<br>
does not contain the correct paths (and no LD_LIBRARY_PATH at all),
<br>
but with a normal ssh-login the two are set correctly.
<br>
<p>When i run a test application on one computer, it works.
<br>
<p>As soon as an additional computer is involved, there is no more output,
<br>
and everything just hangs.
<br>
<p>Adding the prefix doesn't change anything, even though openmpi is
<br>
installed in the same
<br>
directory (/opt/openmpi) on every computer.
<br>
<p>The debug-daemon doesn't help very much:
<br>
<p>$ mpirun -np 4 --hostfile testhosts --debug-daemons MPITest
<br>
Daemon [0,0,1] checking in as pid 14927 on host aim-plankton.uzh.ch
<br>
<p>(and nothing happens anymore)
<br>
<p>On the remote host, i see the following three processes coming up
<br>
after i do the mpirun on the local machine:
<br>
30603 ?        S      0:00 sshd: jody_at_notty
<br>
30604 ?        Ss     0:00 bash -c  PATH=/opt/openmpi/bin:$PATH ;
<br>
export PATH ; LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH ;
<br>
export LD_LIBRARY_PATH ; /opt/openmpi/bin/orted --debug-daemons
<br>
--bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --
<br>
30605 ?        S      0:00 /opt/openmpi/bin/orted --debug-daemons
<br>
--bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --nodename
<br>
nano_00 --universe jody_at_[hidden]:default-universe-14934
<br>
--nsreplica 0.0.0;tcp://130.60.126.111:52562 --gprrepl
<br>
<p>So it looks as if the correct paths are set (probably the doing of
<br>
--enable-mpirun-prefix-by-default)
<br>
<p>If i interrupt on the local machine (Ctrl-C)::
<br>
<p>[aim-plankton:14983] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[aim-plankton:14983] [0,0,1] orted_recv_pls: received kill_local_procs
<br>
[aim-plankton:14983] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[aim-plankton:14983] [0,0,1] orted_recv_pls: received kill_local_procs
<br>
[aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1166
<br>
[aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
errmgr_hnp.c at line 90
<br>
[aim-plankton:14982] ERROR: A daemon on node nano_00 failed to start
<br>
as expected.
<br>
[aim-plankton:14982] ERROR: There may be more information available from
<br>
[aim-plankton:14982] ERROR: the remote shell (see above).
<br>
[aim-plankton:14982] ERROR: The daemon exited unexpectedly with status 255.
<br>
[aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1166
<br>
--------------------------------------------------------------------------
<br>
WARNING: mpirun has exited before it received notification that all
<br>
started processes had terminated.  You should double check and ensure
<br>
that there are no runaway processes still executing.
<br>
--------------------------------------------------------------------------
<br>
[aim-plankton:14983] OOB: Connection to HNP lost
<br>
<p>On the remote machine, the &quot;sshd: jody_at_notty&quot; process is gone, but the
<br>
other two stay.
<br>
I would be grateful for any suggestions!
<br>
<p>Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5857.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5855.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
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

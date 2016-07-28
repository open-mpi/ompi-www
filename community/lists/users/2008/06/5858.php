<?
$subject_val = "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 08:58:36 2008" -->
<!-- isoreceived="20080610125836" -->
<!-- sent="Tue, 10 Jun 2008 14:58:26 +0200" -->
<!-- isosent="20080610125826" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]" -->
<!-- id="9b0da5ce0806100558x7b0115c1ga26ebd3a9585d4d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] no reaction of remote hosts after ompi reinstall [follow up]" -->
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
<strong>Subject:</strong> Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-10 08:58:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5859.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5857.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5959.php">Jeff Squyres: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<li><strong>Reply:</strong> <a href="5959.php">Jeff Squyres: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interestingly i can start mpirun from any of the remote machines,
<br>
running processes on other remote machines and on the local machine,.
<br>
But from the local machine i can start no process on a remote machine -
<br>
it just shows the behavior detailed in the previous mail.
<br>
<p>remote1 -&gt; remote1 ok
<br>
remote1 -&gt; remote2 ok
<br>
remote1 -&gt; local      ok
<br>
<p>remote2 -&gt; remote1 ok
<br>
remote2 -&gt; remote2 ok
<br>
remote2 -&gt; local      ok
<br>
<p>local      -&gt; local      ok
<br>
local      -&gt; remote1 fails
<br>
local      -&gt; remote2 fails
<br>
<p>My remote machines are freshly updated gentoo machines (AMD),
<br>
my local machne is a freshly installed fedora 8 (Intel Quadro).
<br>
All use a freshly installed open-mpi 1.2.5.
<br>
Before my fedora machine crashed it had fedora 6,
<br>
and everything worked great (with 1.2.2 on all machines).
<br>
<p>Does anybody have a suggestion where i should look?
<br>
<p>Thanks
<br>
&nbsp;&nbsp;Jody
<br>
<p><p>On Tue, Jun 10, 2008 at 12:59 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; after a crash i reinstalled open-mpi 1.2.5 on my machines,
</span><br>
<span class="quotelev1">&gt; used
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix /opt/openmpi --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; and set PATH and LD_LIBRARY_PATH in .bashrc:
</span><br>
<span class="quotelev1">&gt;  PATH=/opt/openmpi/bin:$PATH
</span><br>
<span class="quotelev1">&gt;  export PATH
</span><br>
<span class="quotelev1">&gt;  LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;  export LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First problem:
</span><br>
<span class="quotelev1">&gt;  ssh nano_00 printenv
</span><br>
<span class="quotelev1">&gt; does not contain the correct paths (and no LD_LIBRARY_PATH at all),
</span><br>
<span class="quotelev1">&gt; but with a normal ssh-login the two are set correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When i run a test application on one computer, it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As soon as an additional computer is involved, there is no more output,
</span><br>
<span class="quotelev1">&gt; and everything just hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adding the prefix doesn't change anything, even though openmpi is
</span><br>
<span class="quotelev1">&gt; installed in the same
</span><br>
<span class="quotelev1">&gt; directory (/opt/openmpi) on every computer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The debug-daemon doesn't help very much:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 --hostfile testhosts --debug-daemons MPITest
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,1] checking in as pid 14927 on host aim-plankton.uzh.ch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (and nothing happens anymore)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the remote host, i see the following three processes coming up
</span><br>
<span class="quotelev1">&gt; after i do the mpirun on the local machine:
</span><br>
<span class="quotelev1">&gt; 30603 ?        S      0:00 sshd: jody_at_notty
</span><br>
<span class="quotelev1">&gt; 30604 ?        Ss     0:00 bash -c  PATH=/opt/openmpi/bin:$PATH ;
</span><br>
<span class="quotelev1">&gt; export PATH ; LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH ; /opt/openmpi/bin/orted --debug-daemons
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --
</span><br>
<span class="quotelev1">&gt; 30605 ?        S      0:00 /opt/openmpi/bin/orted --debug-daemons
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --nodename
</span><br>
<span class="quotelev1">&gt; nano_00 --universe jody_at_[hidden]:default-universe-14934
</span><br>
<span class="quotelev1">&gt; --nsreplica 0.0.0;tcp://130.60.126.111:52562 --gprrepl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it looks as if the correct paths are set (probably the doing of
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i interrupt on the local machine (Ctrl-C)::
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14983] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14983] [0,0,1] orted_recv_pls: received kill_local_procs
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14983] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14983] [0,0,1] orted_recv_pls: received kill_local_procs
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14982] ERROR: A daemon on node nano_00 failed to start
</span><br>
<span class="quotelev1">&gt; as expected.
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14982] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14982] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14982] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: mpirun has exited before it received notification that all
</span><br>
<span class="quotelev1">&gt; started processes had terminated.  You should double check and ensure
</span><br>
<span class="quotelev1">&gt; that there are no runaway processes still executing.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [aim-plankton:14983] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the remote machine, the &quot;sshd: jody_at_notty&quot; process is gone, but the
</span><br>
<span class="quotelev1">&gt; other two stay.
</span><br>
<span class="quotelev1">&gt; I would be grateful for any suggestions!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5859.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5857.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5959.php">Jeff Squyres: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<li><strong>Reply:</strong> <a href="5959.php">Jeff Squyres: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
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

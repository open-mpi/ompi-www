<?
$subject_val = "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 09:29:09 2008" -->
<!-- isoreceived="20080621132909" -->
<!-- sent="Sat, 21 Jun 2008 09:29:00 -0400" -->
<!-- isosent="20080621132900" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]" -->
<!-- id="D8F0E048-FB9B-4D80-80EB-EBCB0CD54081_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0806100558x7b0115c1ga26ebd3a9585d4d_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 09:29:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5960.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>Previous message:</strong> <a href="5958.php">Jeff Squyres: "Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<li><strong>In reply to:</strong> <a href="5858.php">jody: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>I'd check two things:
<br>
<p>- Disable all firewall support between these two machines.  OMPI uses  
<br>
random TCP ports to communicate between processes; if they're blocked,  
<br>
Bad Things will happen.
<br>
<p>- It is easiest to install OMPI in the same location on all your  
<br>
machines (e.g., /opt/openmpi).  If you do that, you might want to try  
<br>
configuring OMPI with --enable-mpirun-prefix-by-default.  In rsh/ssh  
<br>
environments, this flag will have mpirun set your PATH and  
<br>
LD_LIBRARY_PATH properly on remote nodes.
<br>
<p>Let us know how that works out.
<br>
<p><p>On Jun 10, 2008, at 8:58 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Interestingly i can start mpirun from any of the remote machines,
</span><br>
<span class="quotelev1">&gt; running processes on other remote machines and on the local machine,.
</span><br>
<span class="quotelev1">&gt; But from the local machine i can start no process on a remote  
</span><br>
<span class="quotelev1">&gt; machine -
</span><br>
<span class="quotelev1">&gt; it just shows the behavior detailed in the previous mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; remote1 -&gt; remote1 ok
</span><br>
<span class="quotelev1">&gt; remote1 -&gt; remote2 ok
</span><br>
<span class="quotelev1">&gt; remote1 -&gt; local      ok
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; remote2 -&gt; remote1 ok
</span><br>
<span class="quotelev1">&gt; remote2 -&gt; remote2 ok
</span><br>
<span class="quotelev1">&gt; remote2 -&gt; local      ok
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; local      -&gt; local      ok
</span><br>
<span class="quotelev1">&gt; local      -&gt; remote1 fails
</span><br>
<span class="quotelev1">&gt; local      -&gt; remote2 fails
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My remote machines are freshly updated gentoo machines (AMD),
</span><br>
<span class="quotelev1">&gt; my local machne is a freshly installed fedora 8 (Intel Quadro).
</span><br>
<span class="quotelev1">&gt; All use a freshly installed open-mpi 1.2.5.
</span><br>
<span class="quotelev1">&gt; Before my fedora machine crashed it had fedora 6,
</span><br>
<span class="quotelev1">&gt; and everything worked great (with 1.2.2 on all machines).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody have a suggestion where i should look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 10, 2008 at 12:59 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; after a crash i reinstalled open-mpi 1.2.5 on my machines,
</span><br>
<span class="quotelev2">&gt;&gt; used
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix /opt/openmpi --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt; and set PATH and LD_LIBRARY_PATH in .bashrc:
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/opt/openmpi/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt; export PATH
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First problem:
</span><br>
<span class="quotelev2">&gt;&gt; ssh nano_00 printenv
</span><br>
<span class="quotelev2">&gt;&gt; does not contain the correct paths (and no LD_LIBRARY_PATH at all),
</span><br>
<span class="quotelev2">&gt;&gt; but with a normal ssh-login the two are set correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When i run a test application on one computer, it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As soon as an additional computer is involved, there is no more  
</span><br>
<span class="quotelev2">&gt;&gt; output,
</span><br>
<span class="quotelev2">&gt;&gt; and everything just hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Adding the prefix doesn't change anything, even though openmpi is
</span><br>
<span class="quotelev2">&gt;&gt; installed in the same
</span><br>
<span class="quotelev2">&gt;&gt; directory (/opt/openmpi) on every computer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The debug-daemon doesn't help very much:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 4 --hostfile testhosts --debug-daemons MPITest
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [0,0,1] checking in as pid 14927 on host aim-plankton.uzh.ch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (and nothing happens anymore)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the remote host, i see the following three processes coming up
</span><br>
<span class="quotelev2">&gt;&gt; after i do the mpirun on the local machine:
</span><br>
<span class="quotelev2">&gt;&gt; 30603 ?        S      0:00 sshd: jody_at_notty
</span><br>
<span class="quotelev2">&gt;&gt; 30604 ?        Ss     0:00 bash -c  PATH=/opt/openmpi/bin:$PATH ;
</span><br>
<span class="quotelev2">&gt;&gt; export PATH ; LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH ; /opt/openmpi/bin/orted --debug-daemons
</span><br>
<span class="quotelev2">&gt;&gt; --bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --
</span><br>
<span class="quotelev2">&gt;&gt; 30605 ?        S      0:00 /opt/openmpi/bin/orted --debug-daemons
</span><br>
<span class="quotelev2">&gt;&gt; --bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --nodename
</span><br>
<span class="quotelev2">&gt;&gt; nano_00 --universe jody_at_[hidden]:default-universe-14934
</span><br>
<span class="quotelev2">&gt;&gt; --nsreplica 0.0.0;tcp://130.60.126.111:52562 --gprrepl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it looks as if the correct paths are set (probably the doing of
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If i interrupt on the local machine (Ctrl-C)::
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14983] [0,0,1] orted_recv_pls: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [0,0,0]
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14983] [0,0,1] orted_recv_pls: received  
</span><br>
<span class="quotelev2">&gt;&gt; kill_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14983] [0,0,1] orted_recv_pls: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [0,0,0]
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14983] [0,0,1] orted_recv_pls: received  
</span><br>
<span class="quotelev2">&gt;&gt; kill_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14982] ERROR: A daemon on node nano_00 failed to start
</span><br>
<span class="quotelev2">&gt;&gt; as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14982] ERROR: There may be more information available  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14982] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14982] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev2">&gt;&gt; status 255.
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14982] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; pls_rsh_module.c at line 1166
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: mpirun has exited before it received notification that all
</span><br>
<span class="quotelev2">&gt;&gt; started processes had terminated.  You should double check and ensure
</span><br>
<span class="quotelev2">&gt;&gt; that there are no runaway processes still executing.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [aim-plankton:14983] OOB: Connection to HNP lost
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the remote machine, the &quot;sshd: jody_at_notty&quot; process is gone, but  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; other two stay.
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful for any suggestions!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5960.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>Previous message:</strong> <a href="5958.php">Jeff Squyres: "Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<li><strong>In reply to:</strong> <a href="5858.php">jody: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
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

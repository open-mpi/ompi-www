<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 12:03:51 2007" -->
<!-- isoreceived="20070709160351" -->
<!-- sent="Mon, 09 Jul 2007 12:03:51 -0400" -->
<!-- isosent="20070709160351" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI output over several ssh-hops?" -->
<!-- id="46925C67.2080506_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0707090857x6b8e03c0o7162d81e2576b121_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 12:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3610.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Previous message:</strong> <a href="3608.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>In reply to:</strong> <a href="3608.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3610.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Reply:</strong> <a href="3610.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jody wrote:
<br>
<span class="quotelev1">&gt; Hi Tim
</span><br>
<span class="quotelev1">&gt; (I accidentally sent the previous message before it was ready - here's
</span><br>
<span class="quotelev1">&gt; the complete one)
</span><br>
<span class="quotelev1">&gt; Thank You for your reply.
</span><br>
<span class="quotelev1">&gt; Unfortunately my workstation, on which i could successfully run openmpi
</span><br>
<span class="quotelev1">&gt; applications, has died. But one my replacement machine (which
</span><br>
<span class="quotelev1">&gt; i assume i have setup in an equivalent way) i now get errors even when i try
</span><br>
<span class="quotelev1">&gt; to run an openmpi application in a simple way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jody_at_aim-nano_02 /home/aim-cari/jody $  mpirun -np 2 --hostfile hostfile ./a.out
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:22145] ERROR: A daemon on node 130.60.49.129 failed to
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:22145] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:22145] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:22145] ERROR: The daemon exited unexpectedly with status 127.
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:22145] ERROR: A daemon on node 130.60.49.128 failed to
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:22145] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:22145] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:22145] ERROR: The daemon exited unexpectedly with status 127.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, i set PATH and LD_LIBRARY_PATH to the correct paths both in
</span><br>
<span class="quotelev1">&gt; .bashrc AND .bash_profile.
</span><br>
I assume you are using bash. You might try changing your .profile as well.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt; jody_at_aim-nano_02 /home/aim-cari/jody $ ssh 130.60.49.128 echo $PATH
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin:/usr/local/bin:/usr/bin:/bin:/opt/bin:/usr/i686-pc-linux-gnu/gcc-bin/4.1.2:/opt/sun-jdk-1.4.2.10/bin:/opt/sun-jdk-1.4.2.10/jre/bin:/opt/sun-jdk-1.4.2.10/jre/javaws:/usr/qt/3/bin
</span><br>
<p>When you do this, $PATH gets interpreted on the local host, not the 
<br>
remote host. Try instead:
<br>
<p>ssh 130.60.49.128 printenv |grep PATH
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But:
</span><br>
<span class="quotelev1">&gt; jody_at_aim-nano_02 /home/aim-cari/jody $ ssh 130.60.49.128 orted
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
You could also do:
<br>
ssh 130.60.49.128 which orted
<br>
<p>This will show you the paths it looked in for the orted.
<br>
<p><span class="quotelev1">&gt; Do You have any suggestions?
</span><br>
To avoid dealing with paths (assuming everything is installed in the 
<br>
same directory on all nodes) you can also try the suggestion here 
<br>
(although I think that once it is setup modifying PATHs is the easier 
<br>
way to go, less typing :):
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
<br>
<p><p>Hope this helps,
<br>
<p>Tim
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/9/07, Tim Prins &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the super long delay. I don't know how this one got lost...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run like this all the time. Unfortunately, it is not as simple as I
</span><br>
<span class="quotelev2">&gt;&gt; would like. Here is what I do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Log into the machine using ssh -X
</span><br>
<span class="quotelev2">&gt;&gt; 2. Run mpirun with the following parameters:
</span><br>
<span class="quotelev2">&gt;&gt;         -mca pls rsh  (This makes sure that Open MPI uses the rsh/ssh launcher.
</span><br>
<span class="quotelev2">&gt;&gt; It may not be necessary depending on your setup)
</span><br>
<span class="quotelev2">&gt;&gt;         -mca pls_rsh_agent &quot;ssh -X&quot; (To make sure X information is forwarded.
</span><br>
<span class="quotelev2">&gt;&gt; This might not be necessary if you have ssh setup to always forward X
</span><br>
<span class="quotelev2">&gt;&gt; information)
</span><br>
<span class="quotelev2">&gt;&gt;         --debug-daemons (This ensures that the ssh connections to the backed
</span><br>
<span class="quotelev2">&gt;&gt; nodes are kept open. Otherwise, they are closed and X information cannot
</span><br>
<span class="quotelev2">&gt;&gt; be forwarded. Unfortunately, this will also cause some debugging output
</span><br>
<span class="quotelev2">&gt;&gt; to be printed, but right now there is no other way :( )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, the complete command is:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 -mca pls rsh -mca pls_rsh_agent &quot;ssh -X&quot; --debug-daemons
</span><br>
<span class="quotelev2">&gt;&gt; xterm -e gdb my_prog
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps. Let me know if you are still experiencing problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For debugging i usually run each process in a separate X-window.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This works well if i set the DISPLAY variable to the computer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from which i am starting my OpenMPI application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This method fails however, if i log in (via ssh) to my workstation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from a third computer and then start my OpenMPI application,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only the processes running on the workstation i logged into can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open their windows on the third computers. The processes on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the other computers cant open their windows.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is how i start the processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 4 -x DISPLAY run_gdb.sh ./TestApp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where run_gdb.sh looks like this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/csh -f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo &quot;Running GDB on node `hostname`&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm -e gdb $*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exit 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The output from the processes on the other computer:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     xterm Xt error: Can't open display: localhost:12.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I there a way to tell OpenMPI to forward the X windows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over yet another ssh connection?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3610.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Previous message:</strong> <a href="3608.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>In reply to:</strong> <a href="3608.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3610.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Reply:</strong> <a href="3610.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
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

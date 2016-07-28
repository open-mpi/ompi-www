<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 11:48:49 2007" -->
<!-- isoreceived="20070709154849" -->
<!-- sent="Mon, 9 Jul 2007 15:48:44 +0000" -->
<!-- isosent="20070709154844" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI output over several ssh-hops?" -->
<!-- id="9b0da5ce0707090848m78c35a5frbf4e0f831191bbda_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46924509.8070404_at_open-mpi.org" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 11:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3607.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Previous message:</strong> <a href="3605.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3603.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3608.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim
<br>
<p>Thank You for your reply.
<br>
Unfortunately my workstation has died,
<br>
and even when i try to run openmpi application
<br>
in a simple way, i get errors:
<br>
<p>jody_at_aim-nano_02 /home/aim-cari/jody $  mpirun -np 2 --hostfile hostfile ./a.out
<br>
bash: orted: command not found
<br>
[aim-nano_02:22145] ERROR: A daemon on node 130.60.49.129 failed to
<br>
start as expected.
<br>
[aim-nano_02:22145] ERROR: There may be more information available from
<br>
[aim-nano_02:22145] ERROR: the remote shell (see above).
<br>
[aim-nano_02:22145] ERROR: The daemon exited unexpectedly with status 127.
<br>
[aim-nano_02:22145] ERROR: A daemon on node 130.60.49.128 failed to
<br>
start as expected.
<br>
[aim-nano_02:22145] ERROR: There may be more information available from
<br>
[aim-nano_02:22145] ERROR: the remote shell (see above).
<br>
[aim-nano_02:22145] ERROR: The daemon exited unexpectedly with status 127.
<br>
<p>However, i set PATH and LD_LIBRARY_PATH to the correct paths both in
<br>
.bashrc AND .bash_profile.
<br>
<p>For example:
<br>
jody_at_aim-nano_02 /home/aim-cari/jody $ ssh 130.60.49.128 echo $PATH
<br>
/opt/openmpi/bin:/usr/local/bin:/usr/bin:/bin:/opt/bin:/usr/i686-pc-linux-gnu/gcc-bin/4.1.2:/opt/sun-jdk-1.4.2.10/bin:/opt/sun-jdk-1.4.2.10/jre/bin:/opt/sun-jdk-1.4.2.10/jre/javaws:/usr/qt/3/bin
<br>
<p>But:
<br>
jody_at_aim-nano_02 /home/aim-cari/jody $ ssh 130.60.49.128 orted
<br>
bash: orted: command not found
<br>
<p>Do You have any suggestions?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<p><p><p>On 7/9/07, Tim Prins &lt;tprins_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the super long delay. I don't know how this one got lost...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run like this all the time. Unfortunately, it is not as simple as I
</span><br>
<span class="quotelev1">&gt; would like. Here is what I do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Log into the machine using ssh -X
</span><br>
<span class="quotelev1">&gt; 2. Run mpirun with the following parameters:
</span><br>
<span class="quotelev1">&gt;         -mca pls rsh  (This makes sure that Open MPI uses the rsh/ssh launcher.
</span><br>
<span class="quotelev1">&gt; It may not be necessary depending on your setup)
</span><br>
<span class="quotelev1">&gt;         -mca pls_rsh_agent &quot;ssh -X&quot; (To make sure X information is forwarded.
</span><br>
<span class="quotelev1">&gt; This might not be necessary if you have ssh setup to always forward X
</span><br>
<span class="quotelev1">&gt; information)
</span><br>
<span class="quotelev1">&gt;         --debug-daemons (This ensures that the ssh connections to the backed
</span><br>
<span class="quotelev1">&gt; nodes are kept open. Otherwise, they are closed and X information cannot
</span><br>
<span class="quotelev1">&gt; be forwarded. Unfortunately, this will also cause some debugging output
</span><br>
<span class="quotelev1">&gt; to be printed, but right now there is no other way :( )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the complete command is:
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -mca pls rsh -mca pls_rsh_agent &quot;ssh -X&quot; --debug-daemons
</span><br>
<span class="quotelev1">&gt; xterm -e gdb my_prog
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps. Let me know if you are still experiencing problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jody wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; For debugging i usually run each process in a separate X-window.
</span><br>
<span class="quotelev2">&gt; &gt; This works well if i set the DISPLAY variable to the computer
</span><br>
<span class="quotelev2">&gt; &gt; from which i am starting my OpenMPI application.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This method fails however, if i log in (via ssh) to my workstation
</span><br>
<span class="quotelev2">&gt; &gt; from a third computer and then start my OpenMPI application,
</span><br>
<span class="quotelev2">&gt; &gt; only the processes running on the workstation i logged into can
</span><br>
<span class="quotelev2">&gt; &gt; open their windows on the third computers. The processes on
</span><br>
<span class="quotelev2">&gt; &gt; the other computers cant open their windows.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is how i start the processes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 4 -x DISPLAY run_gdb.sh ./TestApp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where run_gdb.sh looks like this
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/csh -f
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; echo &quot;Running GDB on node `hostname`&quot;
</span><br>
<span class="quotelev2">&gt; &gt; xterm -e gdb $*
</span><br>
<span class="quotelev2">&gt; &gt; exit 0
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------
</span><br>
<span class="quotelev2">&gt; &gt; The output from the processes on the other computer:
</span><br>
<span class="quotelev2">&gt; &gt;     xterm Xt error: Can't open display: localhost:12.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I there a way to tell OpenMPI to forward the X windows
</span><br>
<span class="quotelev2">&gt; &gt; over yet another ssh connection?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;   Jody
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3607.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Previous message:</strong> <a href="3605.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3603.php">Tim Prins: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3608.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
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

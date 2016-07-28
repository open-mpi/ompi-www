<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 14:58:27 2007" -->
<!-- isoreceived="20070709185827" -->
<!-- sent="Mon, 9 Jul 2007 14:58:20 -0400" -->
<!-- isosent="20070709185820" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI output over several ssh-hops?" -->
<!-- id="200707091458.21008.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9b0da5ce0707090952x2ea1839ejc032d2a72d1360ad_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-09 14:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3612.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3610.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>In reply to:</strong> <a href="3610.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 09 July 2007 12:52:29 pm jody wrote:
<br>
<span class="quotelev1">&gt; Tim,
</span><br>
<span class="quotelev1">&gt; thanks for your suggestions.
</span><br>
<span class="quotelev1">&gt; There seems to be something wrong with the PATH:
</span><br>
<span class="quotelev1">&gt; jody_at_aim-nano_02 ~/progs $ ssh 130.60.49.128 printenv | grep PATH
</span><br>
<span class="quotelev1">&gt; PATH=/usr/bin:/bin:/usr/sbin:/sbin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which i don't understand. Logging via ssh into 130.60.49.128 i get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jody_at_aim-nano_02 ~/progs $ ssh 130.60.49.128
</span><br>
<span class="quotelev1">&gt; Last login: Mon Jul  9 18:26:11 2007 from 130.60.49.129
</span><br>
<span class="quotelev1">&gt; jody_at_aim-nano_00 ~ $ cat .bash_profile
</span><br>
<span class="quotelev1">&gt; # /etc/skel/.bash_profile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # This file is sourced by bash for login shells.  The following line
</span><br>
<span class="quotelev1">&gt; # runs your .bashrc and is recommended by the bash info pages.
</span><br>
<span class="quotelev1">&gt; [[ -f ~/.bashrc ]] &amp;&amp; . ~/.bashrc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH=/opt/openmpi/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jody_at_aim-nano_00 ~ $ echo $PATH
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin:/opt/openmpi/bin:/usr/local/bin:/usr/bin:/bin:/opt/bin:/us
</span><br>
<span class="quotelev1">&gt;r/i686-pc-linux-gnu/gcc-bin/3.4.5:/opt/sun-
</span><br>
<span class="quotelev1">&gt; jdk-1.4.2.10/bin:/opt/sun-jdk-1.4.2.10/jre/bin:/opt/sun-jdk-1.4.2.10
</span><br>
<span class="quotelev1">&gt; /jre/javaws:/usr/qt/3/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (aim-nano_00 is the name of 130.60.49.128)
</span><br>
<span class="quotelev1">&gt; So why is the path set when i ssh by hand,
</span><br>
<span class="quotelev1">&gt; but not otherwise?
</span><br>
You must set the path in .bashrc. See 
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>Make sure:
<br>
ssh 130.60.49.128 which orted
<br>
works. If it doesn't, there is something wrong with the PATH.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The suggestion with  the --prefix option also didn't work:
</span><br>
<span class="quotelev1">&gt; jody_at_aim-nano_02 /home/aim-cari/jody $ mpirun -np 2 --prefix /opt/openmpi
</span><br>
<span class="quotelev1">&gt; --hostfile hostfile ./a.out
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:13733] [0,0,0] ORTE_ERROR_LOG: Data unpack failed in file
</span><br>
<span class="quotelev1">&gt; dss/dss_peek.c at line 59
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:13733] [0,0,0] ORTE_ERROR_LOG: Data unpack failed in file
</span><br>
<span class="quotelev1">&gt; dss/dss_peek.c at line 59
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:13733] [0,0,0] ORTE_ERROR_LOG: Data unpack failed in file
</span><br>
<span class="quotelev1">&gt; dss/dss_peek.c at line 59
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:13733] [0,0,0] ORTE_ERROR_LOG: Data unpack failed in file
</span><br>
<span class="quotelev1">&gt; dss/dss_peek.c at line 59
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:13733] [0,0,0] ORTE_ERROR_LOG: Data unpack failed in file
</span><br>
<span class="quotelev1">&gt; dss/dss_peek.c at line 59
</span><br>
<span class="quotelev1">&gt; [aim-nano_02:13733] [0,0,0] ORTE_ERROR_LOG: Data unpack failed in file
</span><br>
<span class="quotelev1">&gt; dss/dss_peek.c at line 59
</span><br>
Often this means that there is a version mismatch. Do all the nodes have the 
<br>
same version of Open MPI installed? Did you compile your application with 
<br>
this version of Open MPI?
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (after which the thing seems to hang....)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i use the aim-nano_02 (130.60.49.130) instead of a hostfile,
</span><br>
<span class="quotelev1">&gt; jody_at_aim-nano_02 /home/aim-cari/jody $ mpirun -np 2 --prefix /opt/openmpi
</span><br>
<span class="quotelev1">&gt; --host 130.60.49.130 ./a.out
</span><br>
<span class="quotelev1">&gt; it works, as it does if i run it on the machine itself the standard way
</span><br>
<span class="quotelev1">&gt; jody_at_aim-nano_02 /home/aim-cari/jody $ mpirun -np 2  --host
</span><br>
<span class="quotelev1">&gt; 130.60.49.130./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything else i could try?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/9/07, Tim Prins &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; jody wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Tim
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (I accidentally sent the previous message before it was ready - here's
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the complete one)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank You for your reply.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately my workstation, on which i could successfully run openmpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; applications, has died. But one my replacement machine (which
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i assume i have setup in an equivalent way) i now get errors even when
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; try
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to run an openmpi application in a simple way:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jody_at_aim-nano_02 /home/aim-cari/jody $  mpirun -np 2 --hostfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hostfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bash: orted: command not found
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [aim-nano_02:22145] ERROR: A daemon on node 130.60.49.129 failed to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; start as expected.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [aim-nano_02:22145] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [aim-nano_02:22145] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [aim-nano_02:22145] ERROR: The daemon exited unexpectedly with status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 127.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [aim-nano_02:22145] ERROR: A daemon on node 130.60.49.128 failed to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; start as expected.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [aim-nano_02:22145] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [aim-nano_02:22145] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [aim-nano_02:22145] ERROR: The daemon exited unexpectedly with status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 127.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, i set PATH and LD_LIBRARY_PATH to the correct paths both in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; .bashrc AND .bash_profile.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I assume you are using bash. You might try changing your .profile as
</span><br>
<span class="quotelev2">&gt; &gt; well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For example:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jody_at_aim-nano_02 /home/aim-cari/jody $ ssh 130.60.49.128 echo $PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin:/usr/local/bin:/usr/bin:/bin:/opt/bin:/usr/i686-pc-linux-g
</span><br>
<span class="quotelev1">&gt;nu/gcc-bin/4.1.2:/opt/sun-
</span><br>
<span class="quotelev1">&gt; jdk-1.4.2.10/bin:/opt/sun-jdk-1.4.2.10/jre/bin:/opt/sun-jdk-1.4.2.10
</span><br>
<span class="quotelev1">&gt; /jre/javaws:/usr/qt/3/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When you do this, $PATH gets interpreted on the local host, not the
</span><br>
<span class="quotelev2">&gt; &gt; remote host. Try instead:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ssh 130.60.49.128 printenv |grep PATH
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jody_at_aim-nano_02 /home/aim-cari/jody $ ssh 130.60.49.128 orted
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bash: orted: command not found
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You could also do:
</span><br>
<span class="quotelev2">&gt; &gt; ssh 130.60.49.128 which orted
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This will show you the paths it looked in for the orted.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do You have any suggestions?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To avoid dealing with paths (assuming everything is installed in the
</span><br>
<span class="quotelev2">&gt; &gt; same directory on all nodes) you can also try the suggestion here
</span><br>
<span class="quotelev2">&gt; &gt; (although I think that once it is setup modifying PATHs is the easier
</span><br>
<span class="quotelev2">&gt; &gt; way to go, less typing :):
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank You
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Jody
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 7/9/07, Tim Prins &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi Jody,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Sorry for the super long delay. I don't know how this one got lost...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I run like this all the time. Unfortunately, it is not as simple as I
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; would like. Here is what I do:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1. Log into the machine using ssh -X
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 2. Run mpirun with the following parameters:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         -mca pls rsh  (This makes sure that Open MPI uses the rsh/ssh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; launcher.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; It may not be necessary depending on your setup)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         -mca pls_rsh_agent &quot;ssh -X&quot; (To make sure X information is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; forwarded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; This might not be necessary if you have ssh setup to always forward X
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; information)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         --debug-daemons (This ensures that the ssh connections to the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; backed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; nodes are kept open. Otherwise, they are closed and X information
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cannot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; be forwarded. Unfortunately, this will also cause some debugging
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; output to be printed, but right now there is no other way :( )
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; So, the complete command is:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpirun -np 4 -mca pls rsh -mca pls_rsh_agent &quot;ssh -X&quot; --debug-daemons
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; xterm -e gdb my_prog
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I hope this helps. Let me know if you are still experiencing problems.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; jody wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Hi
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; For debugging i usually run each process in a separate X-window.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; This works well if i set the DISPLAY variable to the computer
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; from which i am starting my OpenMPI application.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; This method fails however, if i log in (via ssh) to my workstation
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; from a third computer and then start my OpenMPI application,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; only the processes running on the workstation i logged into can
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; open their windows on the third computers. The processes on
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; the other computers cant open their windows.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; This is how i start the processes
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; mpirun -np 4 -x DISPLAY run_gdb.sh ./TestApp
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; where run_gdb.sh looks like this
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; #!/bin/csh -f
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; echo &quot;Running GDB on node `hostname`&quot;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; xterm -e gdb $*
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; exit 0
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; The output from the processes on the other computer:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;     xterm Xt error: Can't open display: localhost:12.0
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I there a way to tell OpenMPI to forward the X windows
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; over yet another ssh connection?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;   Jody
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3612.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3610.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>In reply to:</strong> <a href="3610.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
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

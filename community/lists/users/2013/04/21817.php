<?
$subject_val = "Re: [OMPI users] getting opal_init:startup:internal-failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 08:12:35 2013" -->
<!-- isoreceived="20130429121235" -->
<!-- sent="Mon, 29 Apr 2013 08:12:30 -0400" -->
<!-- isosent="20130429121230" -->
<!-- name="E.O." -->
<!-- email="ooyama.eiichi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting opal_init:startup:internal-failure" -->
<!-- id="CANhoU+gdsunpbAiY-g2AThsoavfM5NT1WcQpjH+EhWYPf0u1kA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="710174D8-C3B8-4669-BEB3-E8DA997E3BF8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] getting opal_init:startup:internal-failure<br>
<strong>From:</strong> E.O. (<em>ooyama.eiichi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-29 08:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21818.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21816.php">giggzounet: "[OMPI users] Broadcast and root process"</a>
<li><strong>In reply to:</strong> <a href="21815.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21818.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Reply:</strong> <a href="21818.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried configuring/building an OMPI on the remote host but I was not able
<br>
to...
<br>
The remote host (host2) doesn't have any development tools, such as gcc,
<br>
make, etc...
<br>
<p>Since I am able to run an MPI hello_c binary on the remote host, I believe
<br>
the host has all the necessary libraries needed for MPI. I am also able to
<br>
run an MPI hello_c binary on host1 from host2.
<br>
<p>[root_at_host2 tmp]# mpirun -host localhost /tmp/hello.out
<br>
Hello World from processor host2, rank 0 out of 1 processors
<br>
[root_at_host2 tmp]# mpirun -host host2 /tmp/hello.out
<br>
Hello World from processor host2, rank 0 out of 1 processors
<br>
[root_at_host2 tmp]# mpirun -host host1 /tmp/hello.out
<br>
Hello World from processor host1, rank 0 out of 1 processors
<br>
[root_at_host2 tmp]#
<br>
<p>However I still can't run hello_c binary on host2 from host1
<br>
<p>[root_at_host1 tmp]# mpirun -host host2 /tmp/hello.out
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_init:startup:internal-failure
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//share/openmpi/help-opal-runtime.txt: No such file or directory.
<br>
Sorry!
<br>
--------------------------------------------------------------------------
<br>
[host2:02499] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 79
<br>
[host2:02499] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
orted/orted_main.c at line 358
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 17710) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
[root_at_host1 tmp]#
<br>
<p><p>If I set -prefix=/myname, it returns a different output
<br>
<p>[root_at_host1 tmp]# mpirun -prefix=/myname -host host2 /tmp/hello.out
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not access
<br>
or execute an executable:
<br>
<p>Executable: -prefix=/myname
<br>
Node: host1
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
[root_at_host1 tmp]#
<br>
<p>Do you still want me to try building OMPI on the remote host?
<br>
<p>eiichi
<br>
<p><p><p>On Sun, Apr 28, 2013 at 12:24 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If you configure/build OMPI on the remote node using the same configure
</span><br>
<span class="quotelev1">&gt; options you used on host1, does the problem go away?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2013, at 8:58 AM, E.O. &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you Ralph!
</span><br>
<span class="quotelev1">&gt; I ran it with &quot;-prefix&quot; option but I got this...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_host1 tmp]# mpirun -prefix /myname -np 4 -host host2 ./hello.out
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev1">&gt; access
</span><br>
<span class="quotelev1">&gt; or execute an executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: -prefix=/myname
</span><br>
<span class="quotelev1">&gt; Node: host1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also updated PATH in the remote host (host2) to include /myname.
</span><br>
<span class="quotelev1">&gt; But it didn't seem change anything...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eiichi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Apr 28, 2013 at 11:48 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is likely that your path variables aren't being set properly
</span><br>
<span class="quotelev2">&gt;&gt; on the remote machine when mpirun launches the remote daemon. You might
</span><br>
<span class="quotelev2">&gt;&gt; check to see that your default shell rc file is also setting those values
</span><br>
<span class="quotelev2">&gt;&gt; correctly. Alternatively, modify your mpirun cmd line a bit by adding
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -prefix /myname ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so it will set the remove prefix and see if that helps. If it does, you
</span><br>
<span class="quotelev2">&gt;&gt; can add --enable-orterun-prefix-by-default to your configure line so mpirun
</span><br>
<span class="quotelev2">&gt;&gt; always adds it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 28, 2013, at 7:56 AM, &quot;E.O.&quot; &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have five linux machines (one is redhat and the other are busybox)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I downloaded openmpi-1.6.4.tar.gz into my main redhat machine and
</span><br>
<span class="quotelev2">&gt;&gt; configure'ed/compiled it successfully.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./configure --prefix=/myname
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I installed it to /myname directory successfully. I am able to run a
</span><br>
<span class="quotelev2">&gt;&gt; simple hallo.c on my redhat machine.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host1 /tmp] # mpirun -np 4 ./hello.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am parent
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am a child
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am a child
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am a child
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host1 /tmp] #
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Then, I sent entire /myname directory to the another machine (host2).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host1 /] # tar zcf - myname | ssh host2 &quot;(cd /; tar zxf -)&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and ran mpirun for the host (host2).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host1 tmp]# mpirun -np 4 -host host2 ./hello.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     //share/openmpi/help-opal-runtime.txt: No such file or directory.
</span><br>
<span class="quotelev2">&gt;&gt;  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [host2:26294] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c at line 79
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [host2:26294] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; orted/orted_main.c at line 358
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; A daemon (pid 23691) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I set those environment variables
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host1 tmp]# echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /myname/lib/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host1 tmp]# echo $OPAL_PREFIX
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /myname/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host2 /] # ls -la /myname/lib/libmpi.so.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lrwxrwxrwx    1 root     root            15 Apr 28 10:21
</span><br>
<span class="quotelev2">&gt;&gt; /myname/lib/libmpi.so.1 -&gt; libmpi.so.1.0.7
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host2 /] #
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If I ran the ./hello.out binary inside host2, it works fine
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host1 tmp]# ssh host2
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host2 /] # /tmp/hello.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am parent
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [root_at_host2 /] #
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can someone help me figure out why I cannot run hello.out in host2 from
</span><br>
<span class="quotelev2">&gt;&gt; host1 ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Am I missing any env variables ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Eiichi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21817/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21818.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21816.php">giggzounet: "[OMPI users] Broadcast and root process"</a>
<li><strong>In reply to:</strong> <a href="21815.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21818.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Reply:</strong> <a href="21818.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
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

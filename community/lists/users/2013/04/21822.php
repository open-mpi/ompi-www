<?
$subject_val = "Re: [OMPI users] getting opal_init:startup:internal-failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 10:15:19 2013" -->
<!-- isoreceived="20130429141519" -->
<!-- sent="Mon, 29 Apr 2013 14:15:14 +0000" -->
<!-- isosent="20130429141514" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting opal_init:startup:internal-failure" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4B1C93DE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANhoU+g2gZgDHjz5q3fCfemoGHjfJVd+CPMqMuC1NF6gJKtu=w_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-29 10:15:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21823.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21821.php">Ralph Castain: "Re: [OMPI users] LD_LIBRARY_PATH Problem"</a>
<li><strong>In reply to:</strong> <a href="21819.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21823.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Reply:</strong> <a href="21823.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, to avoid using the --prefix option, you can set your PATH / LD_LIBRARY_PATH to point to the Open MPI installation on all nodes.
<br>
<p>Many organizations opt to have NFS-shared home directories, so that when you modify your &quot;main&quot; shell startup file (e.g., .bashrc) to point PATH and LD_LIBRARY_PATH to your Open MPI installation, it effectively modifies it for all nodes in the cluster.
<br>
<p><p><p>On Apr 29, 2013, at 8:56 AM, E.O. &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It works!!!
</span><br>
<span class="quotelev1">&gt; By putting two dash'es and no equal sign, it worked fine!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_host1 tmp]# mpirun --prefix /myname --host host2 /tmp/hello.out
</span><br>
<span class="quotelev1">&gt; Hello World from processor host2, rank 0 out of 1 processors
</span><br>
<span class="quotelev1">&gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like one dash &quot;-prefix&quot; also works if I don't put an equal sign..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eiichi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 29, 2013 at 8:29 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmm....okay. No, let's not bother to install a bunch of stuff you don't otherwise need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I probably mis-typed the &quot;prefix&quot; option - it has two dashes in front of it and no equal sign:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --prefix ./myname ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect you only put one dash, and the equal sign was a definite problem, which is why it gave you an error. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 29, 2013, at 5:12 AM, E.O. &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried configuring/building an OMPI on the remote host but I was not able to...
</span><br>
<span class="quotelev2">&gt;&gt; The remote host (host2) doesn't have any development tools, such as gcc, make, etc...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since I am able to run an MPI hello_c binary on the remote host, I believe the host has all the necessary libraries needed for MPI. I am also able to run an MPI hello_c binary on host1 from host2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_host2 tmp]# mpirun -host localhost /tmp/hello.out
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from processor host2, rank 0 out of 1 processors
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_host2 tmp]# mpirun -host host2 /tmp/hello.out
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from processor host2, rank 0 out of 1 processors
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_host2 tmp]# mpirun -host host1 /tmp/hello.out
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from processor host1, rank 0 out of 1 processors
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_host2 tmp]#
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However I still can't run hello_c binary on host2 from host1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_host1 tmp]# mpirun -host host2 /tmp/hello.out
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt;&gt;     //share/openmpi/help-opal-runtime.txt: No such file or directory.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [host2:02499] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev2">&gt;&gt; [host2:02499] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orted/orted_main.c at line 358
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 17710) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I set -prefix=/myname, it returns a different output
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_host1 tmp]# mpirun -prefix=/myname -host host2 /tmp/hello.out
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to launch the specified application as it could not access
</span><br>
<span class="quotelev2">&gt;&gt; or execute an executable:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Executable: -prefix=/myname
</span><br>
<span class="quotelev2">&gt;&gt; Node: host1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you still want me to try building OMPI on the remote host?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; eiichi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Apr 28, 2013 at 12:24 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If you configure/build OMPI on the remote node using the same configure options you used on host1, does the problem go away?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 28, 2013, at 8:58 AM, E.O. &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you Ralph!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran it with &quot;-prefix&quot; option but I got this...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_host1 tmp]# mpirun -prefix /myname -np 4 -host host2 ./hello.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to launch the specified application as it could not access
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or execute an executable:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Executable: -prefix=/myname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node: host1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also updated PATH in the remote host (host2) to include /myname.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But it didn't seem change anything...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eiichi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sun, Apr 28, 2013 at 11:48 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is likely that your path variables aren't being set properly on the remote machine when mpirun launches the remote daemon. You might check to see that your default shell rc file is also setting those values correctly. Alternatively, modify your mpirun cmd line a bit by adding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -prefix /myname ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so it will set the remove prefix and see if that helps. If it does, you can add --enable-orterun-prefix-by-default to your configure line so mpirun always adds it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 28, 2013, at 7:56 AM, &quot;E.O.&quot; &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I have five linux machines (one is redhat and the other are busybox)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I downloaded openmpi-1.6.4.tar.gz into my main redhat machine and configure'ed/compiled it successfully.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ./configure --prefix=/myname
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I installed it to /myname directory successfully. I am able to run a simple hallo.c on my redhat machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host1 /tmp] # mpirun -np 4 ./hello.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am parent
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am a child
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am a child
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am a child
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host1 /tmp] #
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Then, I sent entire /myname directory to the another machine (host2).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host1 /] # tar zcf - myname | ssh host2 &quot;(cd /; tar zxf -)&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; and ran mpirun for the host (host2).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host1 tmp]# mpirun -np 4 -host host2 ./hello.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; But I couldn't open the help file:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     //share/openmpi/help-opal-runtime.txt: No such file or directory.  Sorry!
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [host2:26294] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [host2:26294] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orted/orted_main.c at line 358
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; A daemon (pid 23691) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I set those environment variables
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host1 tmp]# echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /myname/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host1 tmp]# echo $OPAL_PREFIX
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /myname/
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host2 /] # ls -la /myname/lib/libmpi.so.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; lrwxrwxrwx    1 root     root            15 Apr 28 10:21 /myname/lib/libmpi.so.1 -&gt; libmpi.so.1.0.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host2 /] #
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; If I ran the ./hello.out binary inside host2, it works fine
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host1 tmp]# ssh host2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host2 /] # /tmp/hello.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am parent
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [root_at_host2 /] #
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Can someone help me figure out why I cannot run hello.out in host2 from host1 ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Am I missing any env variables ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Eiichi
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21823.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21821.php">Ralph Castain: "Re: [OMPI users] LD_LIBRARY_PATH Problem"</a>
<li><strong>In reply to:</strong> <a href="21819.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21823.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Reply:</strong> <a href="21823.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
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

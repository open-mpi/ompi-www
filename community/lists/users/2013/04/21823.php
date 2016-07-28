<?
$subject_val = "Re: [OMPI users] getting opal_init:startup:internal-failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 11:45:16 2013" -->
<!-- isoreceived="20130429154516" -->
<!-- sent="Mon, 29 Apr 2013 11:45:12 -0400" -->
<!-- isosent="20130429154512" -->
<!-- name="E.O." -->
<!-- email="ooyama.eiichi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting opal_init:startup:internal-failure" -->
<!-- id="CANhoU+irmJV90i=oxi3AUK7592tGHhk+=pOEJqknGyeJ1VTNqQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4B1C93DE_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-04-29 11:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21824.php">George Bosilca: "Re: [OMPI users] Broadcast and root process"</a>
<li><strong>Previous message:</strong> <a href="21822.php">Jeff Squyres (jsquyres): "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>In reply to:</strong> <a href="21822.php">Jeff Squyres (jsquyres): "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you!
<br>
I agree that using NFS to share the home directory now..
<br>
I wanted to use --preload-binary option.
<br>
eiichi
<br>
<p><p>On Mon, Apr 29, 2013 at 10:15 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, to avoid using the --prefix option, you can set your PATH /
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH to point to the Open MPI installation on all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many organizations opt to have NFS-shared home directories, so that when
</span><br>
<span class="quotelev1">&gt; you modify your &quot;main&quot; shell startup file (e.g., .bashrc) to point PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH to your Open MPI installation, it effectively modifies it
</span><br>
<span class="quotelev1">&gt; for all nodes in the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 29, 2013, at 8:56 AM, E.O. &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It works!!!
</span><br>
<span class="quotelev2">&gt; &gt; By putting two dash'es and no equal sign, it worked fine!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_host1 tmp]# mpirun --prefix /myname --host host2 /tmp/hello.out
</span><br>
<span class="quotelev2">&gt; &gt; Hello World from processor host2, rank 0 out of 1 processors
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It looks like one dash &quot;-prefix&quot; also works if I don't put an equal
</span><br>
<span class="quotelev1">&gt; sign..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Eiichi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Apr 29, 2013 at 8:29 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hmm....okay. No, let's not bother to install a bunch of stuff you don't
</span><br>
<span class="quotelev1">&gt; otherwise need.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I probably mis-typed the &quot;prefix&quot; option - it has two dashes in front of
</span><br>
<span class="quotelev1">&gt; it and no equal sign:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --prefix ./myname ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suspect you only put one dash, and the equal sign was a definite
</span><br>
<span class="quotelev1">&gt; problem, which is why it gave you an error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 29, 2013, at 5:12 AM, E.O. &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I tried configuring/building an OMPI on the remote host but I was not
</span><br>
<span class="quotelev1">&gt; able to...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The remote host (host2) doesn't have any development tools, such as
</span><br>
<span class="quotelev1">&gt; gcc, make, etc...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since I am able to run an MPI hello_c binary on the remote host, I
</span><br>
<span class="quotelev1">&gt; believe the host has all the necessary libraries needed for MPI. I am also
</span><br>
<span class="quotelev1">&gt; able to run an MPI hello_c binary on host1 from host2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_host2 tmp]# mpirun -host localhost /tmp/hello.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello World from processor host2, rank 0 out of 1 processors
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_host2 tmp]# mpirun -host host2 /tmp/hello.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello World from processor host2, rank 0 out of 1 processors
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_host2 tmp]# mpirun -host host1 /tmp/hello.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello World from processor host1, rank 0 out of 1 processors
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_host2 tmp]#
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However I still can't run hello_c binary on host2 from host1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_host1 tmp]# mpirun -host host2 /tmp/hello.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     //share/openmpi/help-opal-runtime.txt: No such file or directory.
</span><br>
<span class="quotelev1">&gt;  Sorry!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [host2:02499] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 79
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [host2:02499] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 358
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; A daemon (pid 17710) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I set -prefix=/myname, it returns a different output
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_host1 tmp]# mpirun -prefix=/myname -host host2 /tmp/hello.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev1">&gt; access
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or execute an executable:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Executable: -prefix=/myname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Node: host1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you still want me to try building OMPI on the remote host?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; eiichi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sun, Apr 28, 2013 at 12:24 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you configure/build OMPI on the remote node using the same configure
</span><br>
<span class="quotelev1">&gt; options you used on host1, does the problem go away?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 28, 2013, at 8:58 AM, E.O. &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you Ralph!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I ran it with &quot;-prefix&quot; option but I got this...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [root_at_host1 tmp]# mpirun -prefix /myname -np 4 -host host2 ./hello.out
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev1">&gt; access
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; or execute an executable:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Executable: -prefix=/myname
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Node: host1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I also updated PATH in the remote host (host2) to include /myname.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But it didn't seem change anything...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; eiichi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Sun, Apr 28, 2013 at 11:48 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The problem is likely that your path variables aren't being set
</span><br>
<span class="quotelev1">&gt; properly on the remote machine when mpirun launches the remote daemon. You
</span><br>
<span class="quotelev1">&gt; might check to see that your default shell rc file is also setting those
</span><br>
<span class="quotelev1">&gt; values correctly. Alternatively, modify your mpirun cmd line a bit by adding
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun -prefix /myname ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; so it will set the remove prefix and see if that helps. If it does,
</span><br>
<span class="quotelev1">&gt; you can add --enable-orterun-prefix-by-default to your configure line so
</span><br>
<span class="quotelev1">&gt; mpirun always adds it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Apr 28, 2013, at 7:56 AM, &quot;E.O.&quot; &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; Hello
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; I have five linux machines (one is redhat and the other are busybox)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; I downloaded openmpi-1.6.4.tar.gz into my main redhat machine and
</span><br>
<span class="quotelev1">&gt; configure'ed/compiled it successfully.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; ./configure --prefix=/myname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; I installed it to /myname directory successfully. I am able to run a
</span><br>
<span class="quotelev1">&gt; simple hallo.c on my redhat machine.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host1 /tmp] # mpirun -np 4 ./hello.out
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; I am parent
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; I am a child
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; I am a child
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; I am a child
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host1 /tmp] #
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; Then, I sent entire /myname directory to the another machine (host2).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host1 /] # tar zcf - myname | ssh host2 &quot;(cd /; tar zxf -)&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; and ran mpirun for the host (host2).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host1 tmp]# mpirun -np 4 -host host2 ./hello.out
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;     //share/openmpi/help-opal-runtime.txt: No such file or
</span><br>
<span class="quotelev1">&gt; directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [host2:26294] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [host2:26294] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 358
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; A daemon (pid 23691) died unexpectedly with status 255 while
</span><br>
<span class="quotelev1">&gt; attempting
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt; above).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; I set those environment variables
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host1 tmp]# echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; /myname/lib/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host1 tmp]# echo $OPAL_PREFIX
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; /myname/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host2 /] # ls -la /myname/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; lrwxrwxrwx    1 root     root            15 Apr 28 10:21
</span><br>
<span class="quotelev1">&gt; /myname/lib/libmpi.so.1 -&gt; libmpi.so.1.0.7
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host2 /] #
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; If I ran the ./hello.out binary inside host2, it works fine
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host1 tmp]# ssh host2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host2 /] # /tmp/hello.out
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; I am parent
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; [root_at_host2 /] #
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; Can someone help me figure out why I cannot run hello.out in host2
</span><br>
<span class="quotelev1">&gt; from host1 ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; Am I missing any env variables ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; Thank you,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; Eiichi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21823/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21824.php">George Bosilca: "Re: [OMPI users] Broadcast and root process"</a>
<li><strong>Previous message:</strong> <a href="21822.php">Jeff Squyres (jsquyres): "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>In reply to:</strong> <a href="21822.php">Jeff Squyres (jsquyres): "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
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

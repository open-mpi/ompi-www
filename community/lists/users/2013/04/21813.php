<?
$subject_val = "Re: [OMPI users] getting opal_init:startup:internal-failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 28 11:48:28 2013" -->
<!-- isoreceived="20130428154828" -->
<!-- sent="Sun, 28 Apr 2013 08:48:20 -0700" -->
<!-- isosent="20130428154820" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting opal_init:startup:internal-failure" -->
<!-- id="FD189A69-D9E0-48E2-B0CE-B9D30196359B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANhoU+gjEb=97mYwg7fHAcnEVK7TG=Ann4vsTh82WSBBSLHbXw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-28 11:48:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21814.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21812.php">E.O.: "[OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>In reply to:</strong> <a href="21812.php">E.O.: "[OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21814.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Reply:</strong> <a href="21814.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is likely that your path variables aren't being set properly on the remote machine when mpirun launches the remote daemon. You might check to see that your default shell rc file is also setting those values correctly. Alternatively, modify your mpirun cmd line a bit by adding
<br>
<p>mpirun -prefix /myname ...
<br>
<p>so it will set the remove prefix and see if that helps. If it does, you can add --enable-orterun-prefix-by-default to your configure line so mpirun always adds it.
<br>
<p><p>On Apr 28, 2013, at 7:56 AM, &quot;E.O.&quot; &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have five linux machines (one is redhat and the other are busybox)
</span><br>
<span class="quotelev1">&gt; I downloaded openmpi-1.6.4.tar.gz into my main redhat machine and configure'ed/compiled it successfully. 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/myname
</span><br>
<span class="quotelev1">&gt; I installed it to /myname directory successfully. I am able to run a simple hallo.c on my redhat machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_host1 /tmp] # mpirun -np 4 ./hello.out
</span><br>
<span class="quotelev1">&gt; I am parent
</span><br>
<span class="quotelev1">&gt; I am a child
</span><br>
<span class="quotelev1">&gt; I am a child
</span><br>
<span class="quotelev1">&gt; I am a child
</span><br>
<span class="quotelev1">&gt; [root_at_host1 /tmp] #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, I sent entire /myname directory to the another machine (host2).
</span><br>
<span class="quotelev1">&gt; [root_at_host1 /] # tar zcf - myname | ssh host2 &quot;(cd /; tar zxf -)&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and ran mpirun for the host (host2).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_host1 tmp]# mpirun -np 4 -host host2 ./hello.out
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;     //share/openmpi/help-opal-runtime.txt: No such file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [host2:26294] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; [host2:26294] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orted/orted_main.c at line 358
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 23691) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I set those environment variables
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_host1 tmp]# echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /myname/lib/
</span><br>
<span class="quotelev1">&gt; [root_at_host1 tmp]# echo $OPAL_PREFIX
</span><br>
<span class="quotelev1">&gt; /myname/
</span><br>
<span class="quotelev1">&gt; [root_at_host1 tmp]#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_host2 /] # ls -la /myname/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx    1 root     root            15 Apr 28 10:21 /myname/lib/libmpi.so.1 -&gt; libmpi.so.1.0.7
</span><br>
<span class="quotelev1">&gt; [root_at_host2 /] #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I ran the ./hello.out binary inside host2, it works fine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_host1 tmp]# ssh host2
</span><br>
<span class="quotelev1">&gt; [root_at_host2 /] # /tmp/hello.out
</span><br>
<span class="quotelev1">&gt; I am parent
</span><br>
<span class="quotelev1">&gt; [root_at_host2 /] #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone help me figure out why I cannot run hello.out in host2 from host1 ?
</span><br>
<span class="quotelev1">&gt; Am I missing any env variables ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eiichi
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21814.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21812.php">E.O.: "[OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>In reply to:</strong> <a href="21812.php">E.O.: "[OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21814.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Reply:</strong> <a href="21814.php">E.O.: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
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

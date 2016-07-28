<?
$subject_val = "[OMPI users] getting opal_init:startup:internal-failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 28 10:56:57 2013" -->
<!-- isoreceived="20130428145657" -->
<!-- sent="Sun, 28 Apr 2013 10:56:52 -0400" -->
<!-- isosent="20130428145652" -->
<!-- name="E.O." -->
<!-- email="ooyama.eiichi_at_[hidden]" -->
<!-- subject="[OMPI users] getting opal_init:startup:internal-failure" -->
<!-- id="CANhoU+gjEb=97mYwg7fHAcnEVK7TG=Ann4vsTh82WSBBSLHbXw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] getting opal_init:startup:internal-failure<br>
<strong>From:</strong> E.O. (<em>ooyama.eiichi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-28 10:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21813.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21811.php">Sebastian Rettenberger: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21813.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Reply:</strong> <a href="21813.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I have five linux machines (one is redhat and the other are busybox)
<br>
I downloaded openmpi-1.6.4.tar.gz into my main redhat machine and
<br>
configure'ed/compiled it successfully.
<br>
./configure --prefix=/myname
<br>
I installed it to /myname directory successfully. I am able to run a simple
<br>
hallo.c on my redhat machine.
<br>
<p>[root_at_host1 /tmp] # mpirun -np 4 ./hello.out
<br>
I am parent
<br>
I am a child
<br>
I am a child
<br>
I am a child
<br>
[root_at_host1 /tmp] #
<br>
<p>Then, I sent entire /myname directory to the another machine (host2).
<br>
[root_at_host1 /] # tar zcf - myname | ssh host2 &quot;(cd /; tar zxf -)&quot;
<br>
<p>and ran mpirun for the host (host2).
<br>
<p>[root_at_host1 tmp]# mpirun -np 4 -host host2 ./hello.out
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
[host2:26294] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init.c at line 79
<br>
[host2:26294] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
<br>
orted/orted_main.c at line 358
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 23691) died unexpectedly with status 255 while attempting
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
<p>I set those environment variables
<br>
<p>[root_at_host1 tmp]# echo $LD_LIBRARY_PATH
<br>
/myname/lib/
<br>
[root_at_host1 tmp]# echo $OPAL_PREFIX
<br>
/myname/
<br>
[root_at_host1 tmp]#
<br>
<p>[root_at_host2 /] # ls -la /myname/lib/libmpi.so.1
<br>
lrwxrwxrwx    1 root     root            15 Apr 28 10:21
<br>
/myname/lib/libmpi.so.1 -&gt; libmpi.so.1.0.7
<br>
[root_at_host2 /] #
<br>
<p>If I ran the ./hello.out binary inside host2, it works fine
<br>
<p>[root_at_host1 tmp]# ssh host2
<br>
[root_at_host2 /] # /tmp/hello.out
<br>
I am parent
<br>
[root_at_host2 /] #
<br>
<p>Can someone help me figure out why I cannot run hello.out in host2 from
<br>
host1 ?
<br>
Am I missing any env variables ?
<br>
<p>Thank you,
<br>
<p>Eiichi
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21812/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21813.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Previous message:</strong> <a href="21811.php">Sebastian Rettenberger: "Re: [OMPI users] Strange &quot;All-to-All&quot; behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21813.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
<li><strong>Reply:</strong> <a href="21813.php">Ralph Castain: "Re: [OMPI users] getting opal_init:startup:internal-failure"</a>
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

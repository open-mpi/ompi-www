<?
$subject_val = "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 12:32:57 2012" -->
<!-- isoreceived="20120105173257" -->
<!-- sent="Thu, 5 Jan 2012 10:32:48 -0700" -->
<!-- isosent="20120105173248" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486" -->
<!-- id="9AC89823-A60C-4DD4-B7EB-EFF5CB8FE34D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1325784505.76416.YahooMailNeo_at_web29606.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 12:32:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18101.php">devendra rai: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Previous message:</strong> <a href="18099.php">devendra rai: "[OMPI users] Strange segfault in mpirun: orterun.c:486"</a>
<li><strong>In reply to:</strong> <a href="18098.php">devendra rai: "[OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18101.php">devendra rai: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Reply:</strong> <a href="18101.php">devendra rai: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me see if I understand correctly. You performed some upgrades on Linux, and then orterun fails. Rebuilding OMPI resolved the problem.
<br>
<p>Is that correct? If so, then I'm not terribly surprised - it depends on what got upgraded. For example, if the default libc changed due to a revision upgrade, then you probably do need to rebuild against it.
<br>
<p><p>On Jan 5, 2012, at 10:28 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has happened to me many times, but a simple rebuild of the Open-MPI generally fixed it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had a perfectly working (and tested) MPI application till a few days ago. Since then, there has been some upgrades on my Linux OS (basically, the ones which the system picks up automatically). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, I rebuild and rerun the same application, I get this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun: orterun.c:486: orterun: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;cmd_line))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] [ 0] /lib64/libpthread.so.0(+0xf2d0) [0x7fd23c9312d0]
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x7fd23c5e7ab5]
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] [ 2] /lib64/libc.so.6(abort+0x186) [0x7fd23c5e8fb6]
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] [ 3] /lib64/libc.so.6(__assert_fail+0xf5) [0x7fd23c5e0385]
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] [ 4] /home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/bin/mpirun() [0x4037ed]
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] [ 5] /home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/bin/mpirun() [0x4032a4]
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] [ 6] /lib64/libc.so.6(__libc_start_main+0xfd) [0x7fd23c5d3bfd]
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] [ 7] /home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/bin/mpirun() [0x4031c9]
</span><br>
<span class="quotelev1">&gt; [Morpheus:24572] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a custom installation of open-mpi, with the configure script looking like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-threads=yes -prefix=/home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2 --enable-mem-profile --enable-mem-debug --enable-debug --enable-trace --enable-memchecker --with-valgrind=/usr --with-threads=posix 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The rebuild of my application was successful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where should I fix it? and How?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for ideas.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18101.php">devendra rai: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Previous message:</strong> <a href="18099.php">devendra rai: "[OMPI users] Strange segfault in mpirun: orterun.c:486"</a>
<li><strong>In reply to:</strong> <a href="18098.php">devendra rai: "[OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18101.php">devendra rai: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Reply:</strong> <a href="18101.php">devendra rai: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
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

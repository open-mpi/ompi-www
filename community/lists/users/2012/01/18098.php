<?
$subject_val = "[OMPI users] Strange Segfault in mpirun: orterun.c:486";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 12:28:30 2012" -->
<!-- isoreceived="20120105172830" -->
<!-- sent="Thu, 5 Jan 2012 17:28:25 +0000 (GMT)" -->
<!-- isosent="20120105172825" -->
<!-- name="devendra rai" -->
<!-- email="dev641_at_[hidden]" -->
<!-- subject="[OMPI users] Strange Segfault in mpirun: orterun.c:486" -->
<!-- id="1325784505.76416.YahooMailNeo_at_web29606.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Strange Segfault in mpirun: orterun.c:486<br>
<strong>From:</strong> devendra rai (<em>dev641_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 12:28:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18099.php">devendra rai: "[OMPI users] Strange segfault in mpirun: orterun.c:486"</a>
<li><strong>Previous message:</strong> <a href="18097.php">Jeff Squyres: "Re: [OMPI users] Can we avoid derived datatypes?: Update!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18100.php">Ralph Castain: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Reply:</strong> <a href="18100.php">Ralph Castain: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Maybe reply:</strong> <a href="18104.php">devendra rai: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Maybe reply:</strong> <a href="18111.php">devendra rai: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,

This has happened to me many times, but a simple rebuild of the Open-MPI generally fixed it.

I had a perfectly working (and tested) MPI application till a few days ago. Since then, there has been some upgrades on my Linux OS (basically, the ones which the system picks up automatically). 


Now, I rebuild and rerun the same application, I get this:

mpirun: orterun.c:486: orterun: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;cmd_line))-&gt;obj_magic_id' failed.
[Morpheus:24572] *** Process received signal ***
[Morpheus:24572] Signal: Aborted (6)
[Morpheus:24572] Signal code:&#160; (-6)
[Morpheus:24572] [ 0] /lib64/libpthread.so.0(+0xf2d0) [0x7fd23c9312d0]
[Morpheus:24572] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x7fd23c5e7ab5]
[Morpheus:24572] [ 2] /lib64/libc.so.6(abort+0x186) [0x7fd23c5e8fb6]
[Morpheus:24572] [ 3] /lib64/libc.so.6(__assert_fail+0xf5) [0x7fd23c5e0385]
[Morpheus:24572] [ 4] /home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/bin/mpirun() [0x4037ed]
[Morpheus:24572] [ 5] /home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/bin/mpirun() [0x4032a4]
[Morpheus:24572] [ 6] /lib64/libc.so.6(__libc_start_main+0xfd) [0x7fd23c5d3bfd]
[Morpheus:24572] [ 7] /home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/bin/mpirun() [0x4031c9]
[Morpheus:24572] *** End of error message ***



I have a custom installation of open-mpi, with the configure script looking like this:

./configure --enable-mpi-threads=yes -prefix=/home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2 --enable-mem-profile --enable-mem-debug --enable-debug --enable-trace --enable-memchecker --with-valgrind=/usr --with-threads=posix&#160;

The rebuild of my application was successful.

Where should I fix it? and How?

Thanks for ideas.

Best

Devendra

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18099.php">devendra rai: "[OMPI users] Strange segfault in mpirun: orterun.c:486"</a>
<li><strong>Previous message:</strong> <a href="18097.php">Jeff Squyres: "Re: [OMPI users] Can we avoid derived datatypes?: Update!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18100.php">Ralph Castain: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Reply:</strong> <a href="18100.php">Ralph Castain: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Maybe reply:</strong> <a href="18104.php">devendra rai: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Maybe reply:</strong> <a href="18111.php">devendra rai: "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
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

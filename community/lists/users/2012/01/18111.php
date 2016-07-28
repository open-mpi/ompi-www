<?
$subject_val = "Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 15:37:23 2012" -->
<!-- isoreceived="20120105203723" -->
<!-- sent="Thu, 5 Jan 2012 20:37:18 +0000 (GMT)" -->
<!-- isosent="20120105203718" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486" -->
<!-- id="1325795838.66591.YahooMailNeo_at_web29606.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A5C38484-9D45-47E8-A9F0-9C089FC71C95_at_open-mpi.org" -->
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
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 15:37:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18112.php">Vladimir Yumashev: "[OMPI users] OpenVMS"</a>
<li><strong>Previous message:</strong> <a href="18110.php">&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;: "Re: [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Maybe in reply to:</strong> <a href="18098.php">devendra rai: "[OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,

I finally solved the problem. My OS had installed another version of openmpi, which I removed. Also, I did not try 'make clean' before 'make'.&#160;

I found the problem by doing a verbose build of my application, and noticed that it was referring to libraries from /usr/lib64/mpi/, which was not correct. This was even when I had set the paths of mpic++ in my make file to /home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/ . I had set the paths of libraries and include files in my makefile to specifically point to my custom MPI installation. So, I am curious as to why open-mpi was trying to refer to libraries in /usr/lib64.


I reinstalled everything fresh, and now it seems to work :)

Thanks for your help.

Best,

Devendra



________________________________
 From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: devendra rai &lt;rai.devendra_at_[hidden]&gt; 
Sent: Thursday, 5 January 2012, 20:09
Subject: Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486
 

Hmm....well, I'm at a bit of a loss. It all certainly looks okay. Can you send the output from configure - should be in config.out? Did you do a &quot;make clean&quot; after your configure and before rebuilding OMPI?



On Jan 5, 2012, at 11:25 AM, devendra rai wrote:

&#160; Hello Ralph,
&gt;
&gt;
&gt;Here is the command that I use to run my application:
&gt;
&gt;
&gt;/home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/bin/mpirun -np 2 -v --timestamp-output --tag-output --d kdbg ./MPIDerivedDataTypes
&gt;
&gt;where MPIDerivedDataTypes is the sample application.
&gt;
&gt;
&gt;Best,
&gt;
&gt;Devendra
&gt;
&gt;
&gt;
&gt;
&gt;________________________________
&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;To: devendra rai &lt;rai.devendra_at_[hidden]&gt; 
&gt;Sent: Thursday, 5 January 2012, 19:14
&gt;Subject: Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486
&gt; 
&gt;
&gt;That is indeed rather strange. The failure occurs at a rather trivial point in the code, well before anything useful can happen. What does your cmd line look like?
&gt;
&gt;
&gt;
&gt;
&gt;On Jan 5, 2012, at 11:07 AM, devendra rai wrote:
&gt;
&gt;&#160;&#160; Hello Ralph,
&gt;&gt;
&gt;&gt;
&gt;&gt;This time, rebuilding with the configure line that I showed did not fix the problem. And, I am mighty clueless (with some desperation thrown in).
&gt;&gt;
&gt;&gt;
&gt;&gt;Any ideas would be awesome.
&gt;&gt;
&gt;&gt;
&gt;&gt;Best,
&gt;&gt;
&gt;&gt;Devendra
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;________________________________
&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;&gt;To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
&gt;&gt;Sent: Thursday, 5 January 2012, 18:49
&gt;&gt;Subject: Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486
&gt;&gt; 
&gt;&gt;
&gt;&gt;Guess I'm still confused a bit - are you saying that the rebuild no longer fixes the problem?
&gt;&gt;
&gt;&gt;
&gt;&gt;Otherwise, I don't see a ready solution. If your system undergoes a significant change, then rebuilding is not an unexpected requirement.
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;On Jan 5, 2012, at 10:39 AM, devendra rai wrote:
&gt;&gt;
&gt;&gt;Hello Ralph,
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;Yes, historically, the rebuild fixed the problem. But, now, how do I rebuild against a new libc? And doesn't mpi build process automatically pick up whatever libc version I have?
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;I cant seem to google this solution. I already included my configure line for building open-mpi.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;Thanks a lot.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;Devendra Rai
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;________________________________
&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;&gt;&gt;To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
&gt;&gt;&gt;Sent: Thursday, 5 January 2012, 18:32
&gt;&gt;&gt;Subject: Re: [OMPI users] Strange Segfault in mpirun: orterun.c:486
&gt;&gt;&gt; 
&gt;&gt;&gt;
&gt;&gt;&gt;Let me see if I understand correctly. You performed some upgrades on Linux, and then orterun fails. Rebuilding OMPI resolved the problem.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;Is that correct? If so, then I'm not terribly surprised - it depends on what got upgraded. For example, if the default libc changed due to a revision upgrade, then you probably do need to rebuild against it.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;On Jan 5, 2012, at 10:28 AM, devendra rai wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;Hello All,
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;This has happened to me many times, but a simple rebuild of the Open-MPI generally fixed it.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;I had a perfectly working (and tested) MPI application till a few days ago. Since then, there has been some upgrades on my Linux OS (basically, the ones which the system picks up automatically). 
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Now, I rebuild and rerun the same application, I get this:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;mpirun: orterun.c:486: orterun: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;cmd_line))-&gt;obj_magic_id' failed.
&gt;&gt;&gt;&gt;[Morpheus:24572] *** Process received signal ***
&gt;&gt;&gt;&gt;[Morpheus:24572] Signal: Aborted (6)
&gt;&gt;&gt;&gt;[Morpheus:24572] Signal code:&#160; (-6)
&gt;&gt;&gt;&gt;[Morpheus:24572] [ 0] /lib64/libpthread.so.0(+0xf2d0) [0x7fd23c9312d0]
&gt;&gt;&gt;&gt;[Morpheus:24572] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x7fd23c5e7ab5]
&gt;&gt;&gt;&gt;[Morpheus:24572] [ 2] /lib64/libc.so.6(abort+0x186) [0x7fd23c5e8fb6]
&gt;&gt;&gt;&gt;[Morpheus:24572] [ 3] /lib64/libc.so.6(__assert_fail+0xf5) [0x7fd23c5e0385]
&gt;&gt;&gt;&gt;[Morpheus:24572] [ 4] /home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/bin/mpirun() [0x4037ed]
&gt;&gt;&gt;&gt;[Morpheus:24572] [ 5] /home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/bin/mpirun() [0x4032a4]
&gt;&gt;&gt;&gt;[Morpheus:24572] [ 6] /lib64/libc.so.6(__libc_start_main+0xfd) [0x7fd23c5d3bfd]
&gt;&gt;&gt;&gt;[Morpheus:24572] [ 7] /home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2/bin/mpirun() [0x4031c9]
&gt;&gt;&gt;&gt;[Morpheus:24572] *** End of error message ***
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;I have a custom installation of open-mpi, with the configure script looking like this:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;./configure --enable-mpi-threads=yes -prefix=/home/Morpheus/CustomInstalledPrograms/OpenMPI-1.4.2 --enable-mem-profile --enable-mem-debug --enable-debug --enable-trace --enable-memchecker --with-valgrind=/usr --with-threads=posix&#160;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;The rebuild of my application was successful.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Where should I fix it? and How?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Thanks for ideas.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Best
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Devendra
&gt;&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;
&gt;
&gt;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18111/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18112.php">Vladimir Yumashev: "[OMPI users] OpenVMS"</a>
<li><strong>Previous message:</strong> <a href="18110.php">&#208;&#174;&#208;&#187;&#208;&#190;&#208;&#178; &#208;&#148;&#208;&#188;&#208;&#184;&#209;&#130;&#209;&#128;&#208;&#184;&#208;&#185;: "Re: [OMPI users] Request access to ompi-tests directory into svn"</a>
<li><strong>Maybe in reply to:</strong> <a href="18098.php">devendra rai: "[OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
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

<?
$subject_val = "Re: [OMPI users] OMPI users] OMPI users] What could cause a segfault in OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 29 03:39:39 2014" -->
<!-- isoreceived="20141229083939" -->
<!-- sent="Mon, 29 Dec 2014 17:39:29 +0900" -->
<!-- isosent="20141229083929" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] OMPI users] What could cause a segfault in OpenMPI?" -->
<!-- id="4cfab6cm5ip9aeb36ipl49ok.1419842369907_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] OMPI users] What could cause a segfault in OpenMPI?" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] OMPI users] What could cause a segfault in OpenMPI?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-29 03:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26084.php">Diego Avesani: "[OMPI users] ISEND + IRECV in a cycle stuck"</a>
<li><strong>Previous message:</strong> <a href="26082.php">Saliya Ekanayake: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you mean OMPI did not issue such a warning ?
<br>
<p>If there was no such warning, could you please detail
<br>
How much ram on your system
<br>
The value returned by ulimit -l
<br>
The ofed stack you are running
<br>
The kernel modules you loaded
<br>
The model of your ib card
<br>
<p>Cheers
<br>
<p>Gilles
<br>
<p>Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
<br>
<span class="quotelev1">&gt;I meant it works now, sorry for the confusion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Running the test revealed a warning on memory registration, which we fixed by setting unlimited in ulimit -l. Then running OMPI sample worked too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sun, Dec 28, 2014 at 11:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So you are saying the test worked, but you are still encountering an error when executing an MPI job? Or are you saying things now work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Dec 28, 2014, at 5:58 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you Ralph. This produced the warning on memory limits similar to [1] and setting ulimit -l unlimited worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[1]&#194;&#160;<a href="http://lists.openfabrics.org/pipermail/general/2007-June/036941.html">http://lists.openfabrics.org/pipermail/general/2007-June/036941.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sun, Dec 28, 2014 at 5:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Have the admin try running the ibv_ud_pingpong test - that will exercise the portion of the system under discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Dec 28, 2014, at 2:31 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What I heard from the administrator is that,&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&quot;The tests that work are the simple utilities ib_read_lat and ib_read_bw
</span><br>
<span class="quotelev1">&gt;that measures latency and bandwith between two nodes. They are part of
</span><br>
<span class="quotelev1">&gt;the &quot;perftest&quot; repo package.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Dec 28, 2014 10:20 AM, &quot;Saliya Ekanayake&quot; &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This happens at MPI_Init. I've attached the full error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The sys admin mentioned Infiniband utility tests ran OK. I'll contact him for more details and let you know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you,
</span><br>
<span class="quotelev1">&gt;Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sun, Dec 28, 2014 at 3:18 AM, Gilles Gouaillardet&#194;&#160;&lt;gilles.gouaillardet_at_[hidden]&gt;&#194;&#160;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Where does the error occurs ?
</span><br>
<span class="quotelev1">&gt;MPI_Init ?
</span><br>
<span class="quotelev1">&gt;MPI_Finalize ?
</span><br>
<span class="quotelev1">&gt;In between ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In the first case, the bug is likely a mishandled error case,
</span><br>
<span class="quotelev1">&gt;which means OpenMPI is unlikely the root cause of the crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Did you check infniband is up and running on your cluster ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It's been a while on this, but we are still having trouble getting OpenMPI to work with Infiniband on this cluster. We tried with latest 1.8.4 as well, but it's still the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;To recap, we get the following error when MPI initializes (in the simple Hello world C example) with Infiniband. Everything works fine if we explicitly turn off openib with --mca btl ^openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is the error I got after debugging with gdb as you suggested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;hello_c: connect/btl_openib_connect_udcm.c:736: udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mon, Nov 10, 2014 at 10:01 AM, Saliya Ekanayake&#194;&#160;&lt;esaliya_at_[hidden]&gt;&#194;&#160;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you Jeff, I'll try this and&#194;&#160; let you know.&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Saliya&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 10, 2014 6:42 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am sorry for the delay; I've been caught up in SC deadlines.&#194;&#160; :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't see anything blatantly wrong in this output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. Can you try a nightly v1.8.4 snapshot tarball?&#194;&#160; This will check to see if whatever the bug is has been fixed for the upcoming release:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160;&#194;&#160;<a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. Build Open MPI with the --enable-debug option (note that this adds a slight-but-noticeable performance penalty).&#194;&#160; When you run, it should dump a core file.&#194;&#160; Load that core file in a debugger and see where it is failing (i.e., file and line in the OMPI source).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We don't usually have to resort to asking users to perform #2, but there's no additional information to give a clue as to what is happening.&#194;&#160; :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 9, 2014, at 11:43 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You are probably busy, but just checking if you had a chance to look at this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Nov 6, 2014 at 9:19 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've attached a tar file with information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Nov 4, 2014 at 4:18 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Looks like it's failing in the openib BTL setup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the info listed here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 4, 2014, at 1:10 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am using OpenMPI 1.8.1 in a Linux cluster that we recently setup. It builds fine, but when I try to run even the simplest hello.c program it'll cause a segfault. Any suggestions on how to correct this?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The steps I did and error message are below.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1. Built OpenMPI 1.8.1 on the cluster. The ompi_info is attached.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2. cd to examples directory and mpicc hello_c.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3. mpirun -np 2 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 4. Error text is attached.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Please let me know if you need more info.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Saliya Ekanayake&#194;&#160;esaliya_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cell&#194;&#160;812-391-4914&#194;&#160;Home&#194;&#160;812-961-6383
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&#194;&#160;<a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;ompi_info.txt&gt;&lt;error.txt&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&#194;&#160;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription:&#194;&#160;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:&#194;&#160;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25668.php">http://www.open-mpi.org/community/lists/users/2014/11/25668.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:&#194;&#160;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:&#194;&#160;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:&#194;&#160;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25672.php">http://www.open-mpi.org/community/lists/users/2014/11/25672.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake&#194;&#160;esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell&#194;&#160;812-391-4914&#194;&#160;Home&#194;&#160;812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160;<a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake&#194;&#160;esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell&#194;&#160;812-391-4914&#194;&#160;Home&#194;&#160;812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160;<a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:&#194;&#160;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:&#194;&#160;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25717.php">http://www.open-mpi.org/community/lists/users/2014/11/25717.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:&#194;&#160;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription:&#194;&#160;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:&#194;&#160;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25723.php">http://www.open-mpi.org/community/lists/users/2014/11/25723.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;Cell&#194;&#160;812-391-4914
</span><br>
<span class="quotelev1">&gt;<a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription:&#194;&#160;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:&#194;&#160;<a href="http://www.open-mpi.org/community/lists/users/2014/12/26074.php">http://www.open-mpi.org/community/lists/users/2014/12/26074.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;Cell&#194;&#160;812-391-4914
</span><br>
<span class="quotelev1">&gt;<a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription:&#194;&#160;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post:&#194;&#160;<a href="http://www.open-mpi.org/community/lists/users/2014/12/26078.php">http://www.open-mpi.org/community/lists/users/2014/12/26078.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26079.php">http://www.open-mpi.org/community/lists/users/2014/12/26079.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt;<a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26080.php">http://www.open-mpi.org/community/lists/users/2014/12/26080.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26081.php">http://www.open-mpi.org/community/lists/users/2014/12/26081.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt;<a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26083/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26084.php">Diego Avesani: "[OMPI users] ISEND + IRECV in a cycle stuck"</a>
<li><strong>Previous message:</strong> <a href="26082.php">Saliya Ekanayake: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
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

<?
$subject_val = "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 28 20:58:13 2014" -->
<!-- isoreceived="20141229015813" -->
<!-- sent="Sun, 28 Dec 2014 20:58:13 -0500" -->
<!-- isosent="20141229015813" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?" -->
<!-- id="CA+ssbKXpRsDAn+sRiCVtkGorVZWm2hWr4r4Eih-PMb1NNa6NVw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AF1BD5B4-C880-4B21-922A-77762967D0F2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-28 20:58:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26081.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26079.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="26079.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26081.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="26081.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Ralph. This produced the warning on memory limits similar to [1]
<br>
and setting ulimit -l unlimited worked.
<br>
<p>[1] <a href="http://lists.openfabrics.org/pipermail/general/2007-June/036941.html">http://lists.openfabrics.org/pipermail/general/2007-June/036941.html</a>
<br>
<p>Saliya
<br>
<p>On Sun, Dec 28, 2014 at 5:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Have the admin try running the ibv_ud_pingpong test - that will exercise
</span><br>
<span class="quotelev1">&gt; the portion of the system under discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 28, 2014, at 2:31 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I heard from the administrator is that,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;The tests that work are the simple utilities ib_read_lat and ib_read_bw
</span><br>
<span class="quotelev1">&gt; that measures latency and bandwith between two nodes. They are part of
</span><br>
<span class="quotelev1">&gt; the &quot;perftest&quot; repo package.&quot;
</span><br>
<span class="quotelev1">&gt; On Dec 28, 2014 10:20 AM, &quot;Saliya Ekanayake&quot; &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This happens at MPI_Init. I've attached the full error message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The sys admin mentioned Infiniband utility tests ran OK. I'll contact him
</span><br>
<span class="quotelev2">&gt;&gt; for more details and let you know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Dec 28, 2014 at 3:18 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where does the error occurs ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In between ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the first case, the bug is likely a mishandled error case,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which means OpenMPI is unlikely the root cause of the crash.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you check infniband is up and running on your cluster ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's been a while on this, but we are still having trouble getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI to work with Infiniband on this cluster. We tried with latest 1.8.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as well, but it's still the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To recap, we get the following error when MPI initializes (in the simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world C example) with Infiniband. Everything works fine if we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explicitly turn off openib with --mca btl ^openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the error I got after debugging with gdb as you suggested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello_c: connect/btl_openib_connect_udcm.c:736: udcm_module_finalize:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Nov 10, 2014 at 10:01 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you Jeff, I'll try this and  let you know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Saliya
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 10, 2014 6:42 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am sorry for the delay; I've been caught up in SC deadlines.  :-(
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't see anything blatantly wrong in this output.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Two things:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. Can you try a nightly v1.8.4 snapshot tarball?  This will check to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; see if whatever the bug is has been fixed for the upcoming release:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. Build Open MPI with the --enable-debug option (note that this adds
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a slight-but-noticeable performance penalty).  When you run, it should dump
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a core file.  Load that core file in a debugger and see where it is failing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (i.e., file and line in the OMPI source).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We don't usually have to resort to asking users to perform #2, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there's no additional information to give a clue as to what is happening.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; :-(
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 9, 2014, at 11:43 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; You are probably busy, but just checking if you had a chance to look
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at this.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; On Thu, Nov 6, 2014 at 9:19 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; I've attached a tar file with information.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; On Tue, Nov 4, 2014 at 4:18 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Looks like it's failing in the openib BTL setup.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Can you send the info listed here?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; On Nov 4, 2014, at 1:10 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; I am using OpenMPI 1.8.1 in a Linux cluster that we recently
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; setup. It builds fine, but when I try to run even the simplest hello.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program it'll cause a segfault. Any suggestions on how to correct this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; The steps I did and error message are below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; 1. Built OpenMPI 1.8.1 on the cluster. The ompi_info is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; 2. cd to examples directory and mpicc hello_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; 3. mpirun -np 2 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; 4. Error text is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; Please let me know if you need more info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;ompi_info.txt&gt;&lt;error.txt&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25668.php">http://www.open-mpi.org/community/lists/users/2014/11/25668.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25672.php">http://www.open-mpi.org/community/lists/users/2014/11/25672.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25717.php">http://www.open-mpi.org/community/lists/users/2014/11/25717.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25723.php">http://www.open-mpi.org/community/lists/users/2014/11/25723.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell 812-391-4914
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26074.php">http://www.open-mpi.org/community/lists/users/2014/12/26074.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26078.php">http://www.open-mpi.org/community/lists/users/2014/12/26078.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26079.php">http://www.open-mpi.org/community/lists/users/2014/12/26079.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26081.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26079.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="26079.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26081.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="26081.php">Ralph Castain: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
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

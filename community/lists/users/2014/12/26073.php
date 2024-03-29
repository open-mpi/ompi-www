<?
$subject_val = "Re: [OMPI users] What could cause a segfault in OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 27 15:01:13 2014" -->
<!-- isoreceived="20141227200113" -->
<!-- sent="Sat, 27 Dec 2014 15:01:12 -0500" -->
<!-- isosent="20141227200112" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What could cause a segfault in OpenMPI?" -->
<!-- id="CA+ssbKWBCiHaW=3M29rJy1cyGkuSdpujci6x7VWiH=pRCH2Mpg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKVaOvgZTr4v+Tg7qc6+bn7DFP=xx1rmaWNnTECB4KYSVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What could cause a segfault in OpenMPI?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-27 15:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26074.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26072.php">Ralph Castain: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25731.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's been a while on this, but we are still having trouble getting OpenMPI
<br>
to work with Infiniband on this cluster. We tried with latest 1.8.4 as
<br>
well, but it's still the same.
<br>
<p>To recap, we get the following error when MPI initializes (in the simple
<br>
Hello world C example) with Infiniband. Everything works fine if we
<br>
explicitly turn off openib with --mca btl ^openib
<br>
<p>This is the error I got after debugging with gdb as you suggested.
<br>
<p>hello_c: connect/btl_openib_connect_udcm.c:736: udcm_module_finalize:
<br>
Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *)
<br>
(&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p>On Mon, Nov 10, 2014 at 10:01 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Jeff, I'll try this and  let you know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2014 6:42 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am sorry for the delay; I've been caught up in SC deadlines.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't see anything blatantly wrong in this output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Two things:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Can you try a nightly v1.8.4 snapshot tarball?  This will check to see
</span><br>
<span class="quotelev2">&gt;&gt; if whatever the bug is has been fixed for the upcoming release:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Build Open MPI with the --enable-debug option (note that this adds a
</span><br>
<span class="quotelev2">&gt;&gt; slight-but-noticeable performance penalty).  When you run, it should dump a
</span><br>
<span class="quotelev2">&gt;&gt; core file.  Load that core file in a debugger and see where it is failing
</span><br>
<span class="quotelev2">&gt;&gt; (i.e., file and line in the OMPI source).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We don't usually have to resort to asking users to perform #2, but
</span><br>
<span class="quotelev2">&gt;&gt; there's no additional information to give a clue as to what is happening.
</span><br>
<span class="quotelev2">&gt;&gt; :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 9, 2014, at 11:43 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; You are probably busy, but just checking if you had a chance to look at
</span><br>
<span class="quotelev2">&gt;&gt; this.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Thu, Nov 6, 2014 at 9:19 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've attached a tar file with information.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Saliya
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tue, Nov 4, 2014 at 4:18 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Looks like it's failing in the openib BTL setup.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can you send the info listed here?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Nov 4, 2014, at 1:10 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I am using OpenMPI 1.8.1 in a Linux cluster that we recently setup.
</span><br>
<span class="quotelev2">&gt;&gt; It builds fine, but when I try to run even the simplest hello.c program
</span><br>
<span class="quotelev2">&gt;&gt; it'll cause a segfault. Any suggestions on how to correct this?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The steps I did and error message are below.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 1. Built OpenMPI 1.8.1 on the cluster. The ompi_info is attached.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 2. cd to examples directory and mpicc hello_c.c
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 3. mpirun -np 2 ./a.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 4. Error text is attached.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Please let me know if you need more info.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Saliya
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_info.txt&gt;&lt;error.txt&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25668.php">http://www.open-mpi.org/community/lists/users/2014/11/25668.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25672.php">http://www.open-mpi.org/community/lists/users/2014/11/25672.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25717.php">http://www.open-mpi.org/community/lists/users/2014/11/25717.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25723.php">http://www.open-mpi.org/community/lists/users/2014/11/25723.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26074.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26072.php">Ralph Castain: "Re: [OMPI users] processes hang with openmpi-dev-602-g82c02b4"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25731.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
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

<?
$subject_val = "Re: [OMPI users] What could cause a segfault in OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 06:42:07 2014" -->
<!-- isoreceived="20141110114207" -->
<!-- sent="Mon, 10 Nov 2014 11:42:05 +0000" -->
<!-- isosent="20141110114205" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What could cause a segfault in OpenMPI?" -->
<!-- id="A8535FD8-C288-4BF9-83A2-824E0AA6AD18_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+ssbKXw5D-nA7xuZwtTGciR-r+w0x805TcTG1N_6V2Y0rKqsA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 06:42:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25724.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25722.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25717.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25731.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="25731.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am sorry for the delay; I've been caught up in SC deadlines.  :-(
<br>
<p>I don't see anything blatantly wrong in this output.
<br>
<p>Two things:
<br>
<p>1. Can you try a nightly v1.8.4 snapshot tarball?  This will check to see if whatever the bug is has been fixed for the upcoming release:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
<br>
<p>2. Build Open MPI with the --enable-debug option (note that this adds a slight-but-noticeable performance penalty).  When you run, it should dump a core file.  Load that core file in a debugger and see where it is failing (i.e., file and line in the OMPI source).
<br>
<p>We don't usually have to resort to asking users to perform #2, but there's no additional information to give a clue as to what is happening.  :-(
<br>
<p><p><p>On Nov 9, 2014, at 11:43 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are probably busy, but just checking if you had a chance to look at this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 6, 2014 at 9:19 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've attached a tar file with information. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 4, 2014 at 4:18 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Looks like it's failing in the openib BTL setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send the info listed here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 4, 2014, at 1:10 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using OpenMPI 1.8.1 in a Linux cluster that we recently setup. It builds fine, but when I try to run even the simplest hello.c program it'll cause a segfault. Any suggestions on how to correct this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The steps I did and error message are below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Built OpenMPI 1.8.1 on the cluster. The ompi_info is attached.
</span><br>
<span class="quotelev2">&gt; &gt; 2. cd to examples directory and mpicc hello_c.c
</span><br>
<span class="quotelev2">&gt; &gt; 3. mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt; 4. Error text is attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please let me know if you need more info.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; Saliya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ompi_info.txt&gt;&lt;error.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25668.php">http://www.open-mpi.org/community/lists/users/2014/11/25668.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25672.php">http://www.open-mpi.org/community/lists/users/2014/11/25672.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25717.php">http://www.open-mpi.org/community/lists/users/2014/11/25717.php</a>
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
<li><strong>Next message:</strong> <a href="25724.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25722.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25717.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25731.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="25731.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
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

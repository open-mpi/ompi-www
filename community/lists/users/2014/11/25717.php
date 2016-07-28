<?
$subject_val = "Re: [OMPI users] What could cause a segfault in OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  9 11:43:32 2014" -->
<!-- isoreceived="20141109164332" -->
<!-- sent="Sun, 9 Nov 2014 11:43:31 -0500" -->
<!-- isosent="20141109164331" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What could cause a segfault in OpenMPI?" -->
<!-- id="CA+ssbKXw5D-nA7xuZwtTGciR-r+w0x805TcTG1N_6V2Y0rKqsA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKWTPm6Y1v7kBRMsY2YKFNkJQtE=cP-pF-viN+HZQdxvqQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-09 11:43:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25718.php">SLIM H.A.: "[OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25716.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25701.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25723.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="25723.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>You are probably busy, but just checking if you had a chance to look at
<br>
this.
<br>
<p>Thanks,
<br>
Saliya
<br>
<p>On Thu, Nov 6, 2014 at 9:19 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
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
<span class="quotelev1">&gt; On Tue, Nov 4, 2014 at 4:18 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like it's failing in the openib BTL setup.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the info listed here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
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
<span class="quotelev3">&gt;&gt; &gt; I am using OpenMPI 1.8.1 in a Linux cluster that we recently setup. It
</span><br>
<span class="quotelev2">&gt;&gt; builds fine, but when I try to run even the simplest hello.c program it'll
</span><br>
<span class="quotelev2">&gt;&gt; cause a segfault. Any suggestions on how to correct this?
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
<span class="quotelev3">&gt;&gt; &gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_info.txt&gt;&lt;error.txt&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25668.php">http://www.open-mpi.org/community/lists/users/2014/11/25668.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25672.php">http://www.open-mpi.org/community/lists/users/2014/11/25672.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25717/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25718.php">SLIM H.A.: "[OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25716.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25701.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25723.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="25723.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
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

<?
$subject_val = "Re: [OMPI users] What could cause a segfault in OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 13:53:20 2014" -->
<!-- isoreceived="20141104185320" -->
<!-- sent="Tue, 4 Nov 2014 13:53:20 -0500" -->
<!-- isosent="20141104185320" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What could cause a segfault in OpenMPI?" -->
<!-- id="CA+ssbKWtdAtBUhhppUopbH2An1RpBJSn62EGy4nqMBELZB108g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj4kOXQuMXE1QogoAjzapNrjqaVzEof0zGRgPF57=VC0Nw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-04 13:53:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25671.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Previous message:</strong> <a href="25669.php">Howard Pritchard: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="25669.php">Howard Pritchard: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25672.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>
<p>I just tried with 1.8.3. as well and it produces the same error. We have
<br>
another cluster where both versions work fine, which is why I was curious
<br>
as what kind of things could cause this.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p>On Tue, Nov 4, 2014 at 1:31 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello Saliya,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you mind trying to reproduce the problem using the latest 1.8
</span><br>
<span class="quotelev1">&gt; release - 1.8.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-11-04 11:10 GMT-07:00 Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using OpenMPI 1.8.1 in a Linux cluster that we recently setup. It
</span><br>
<span class="quotelev2">&gt;&gt; builds fine, but when I try to run even the simplest hello.c program it'll
</span><br>
<span class="quotelev2">&gt;&gt; cause a segfault. Any suggestions on how to correct this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The steps I did and error message are below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Built OpenMPI 1.8.1 on the cluster. The ompi_info is attached.
</span><br>
<span class="quotelev2">&gt;&gt; 2. cd to examples directory and mpicc hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; 3. mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 4. Error text is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if you need more info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25668.php">http://www.open-mpi.org/community/lists/users/2014/11/25668.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25669.php">http://www.open-mpi.org/community/lists/users/2014/11/25669.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25671.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Previous message:</strong> <a href="25669.php">Howard Pritchard: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="25669.php">Howard Pritchard: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25672.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
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

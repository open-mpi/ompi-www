<?
$subject_val = "Re: [OMPI users] Configuring openib on openmpi 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 22:43:31 2014" -->
<!-- isoreceived="20140730024331" -->
<!-- sent="Tue, 29 Jul 2014 20:43:30 -0600" -->
<!-- isosent="20140730024330" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuring openib on openmpi 1.8.1" -->
<!-- id="CAF1Cqj4xcHM+-uHFmS6xQFbdJ92HdsZ+JvfA7Hbu0ej2pBi-Fw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADB=1m-_55k0K=8bngxFFWGD+QYfU3XKqYBrk9Rqmu2uhkEq1Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuring openib on openmpi 1.8.1<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 22:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24892.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24890.php">Oskar Pusz: "[OMPI users] CPU and communication usage"</a>
<li><strong>In reply to:</strong> <a href="24889.php">Chaitra Kumar: "[OMPI users] Configuring openib on openmpi 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24892.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24892.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chaitra,
<br>
<p>Could you send the output from your configure and output from ompi_info?
<br>
Could you also send the output from the node where you are building ompi
<br>
of
<br>
<p>rpm -qa | grep ibverbs
<br>
<p>If this command indicates an libibverbs-devel was installed on the system,
<br>
you should check to see if it was installed in the default location or for
<br>
some
<br>
reason was relocated.  If you don't see that a libibverbs-devel rpm was
<br>
installed,
<br>
then you need a sysadmin to install it.
<br>
<p><p><p><p>2014-07-29 19:35 GMT-06:00 Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to setup openmpi 1.8.1 on a system with infiniband.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am using the default configure options. I am not using any multithreading
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After installation, no openib components are available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried even with flag: '--with-verbs', still no use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should i use any other flag to enable openib? am I missing any step?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Chaitra
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24889.php">http://www.open-mpi.org/community/lists/users/2014/07/24889.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24891/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24892.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24890.php">Oskar Pusz: "[OMPI users] CPU and communication usage"</a>
<li><strong>In reply to:</strong> <a href="24889.php">Chaitra Kumar: "[OMPI users] Configuring openib on openmpi 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24892.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24892.php">Chaitra Kumar: "Re: [OMPI users] Configuring openib on openmpi 1.8.1"</a>
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

<?
$subject_val = "Re: [OMPI users] mpirun hangs without internet connection";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 10:40:06 2015" -->
<!-- isoreceived="20150121154006" -->
<!-- sent="Wed, 21 Jan 2015 16:40:04 +0100" -->
<!-- isosent="20150121154004" -->
<!-- name="Klara Hornisova" -->
<!-- email="hornisova_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs without internet connection" -->
<!-- id="CAEf2sdhjoRFMcDNjkHnaKtnJ8obrE2scO_NUdTZxz+Nw3zVVfw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54B7F0E3.7030008_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs without internet connection<br>
<strong>From:</strong> Klara Hornisova (<em>hornisova_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-21 10:40:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26220.php">Mark Santcroos: "[OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26218.php">Jonathan Eckstein: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>In reply to:</strong> <a href="26187.php">Marco Atzeri: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for help. Now it works.
<br>
<p>Klara Hornisova
<br>
<p>On Thu, Jan 15, 2015 at 5:54 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/15/2015 5:39 PM, Klara Hornisova wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have installed OpenMPI 1.6.5 under cygwin. When trying test example
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $mpirun hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; current cygwin package is 1.8.4-1, could you test it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or, e.g., more complex examples from scalapack, such as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $mpirun -np 4 xslu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; everything works fine when there is an internet connection. However,
</span><br>
<span class="quotelev2">&gt;&gt; when the cable is disconnected, mpirun hangs without any error message.
</span><br>
<span class="quotelev2">&gt;&gt; With -d option the output stops before the line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there is a wireless on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [my_computer...] [[3169,1],0] node[0].name my_computer... daemon0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which is included in the output when the internet is on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The firewall is turned off.
</span><br>
<span class="quotelev2">&gt;&gt; I tried also to add options: -host localhost, -mca btl self, --mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_include &#226;&#128;&#156;127.0.0.1/8 &lt;<a href="http://127.0.0.1/8">http://127.0.0.1/8</a>&gt;&#226;&#128;&#157; and their
</span><br>
<span class="quotelev2">&gt;&gt; combinations, but nothing has changed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance for advice.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Klara Hornisova
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/">http://www.open-mpi.org/community/lists/users/2015/01/</a>
</span><br>
<span class="quotelev1">&gt; 26187.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26220.php">Mark Santcroos: "[OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26218.php">Jonathan Eckstein: "Re: [OMPI users] Complexity of MPI_Comm_split and MPI_Comm_Create?"</a>
<li><strong>In reply to:</strong> <a href="26187.php">Marco Atzeri: "Re: [OMPI users] mpirun hangs without internet connection"</a>
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

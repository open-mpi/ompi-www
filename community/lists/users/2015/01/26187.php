<?
$subject_val = "Re: [OMPI users] mpirun hangs without internet connection";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 11:55:13 2015" -->
<!-- isoreceived="20150115165513" -->
<!-- sent="Thu, 15 Jan 2015 17:54:59 +0100" -->
<!-- isosent="20150115165459" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs without internet connection" -->
<!-- id="54B7F0E3.7030008_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEf2sdhZjRW=87rGanhPFC9rbTD=8zqu9LQojC=tQ5e26DDLbQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 11:54:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26188.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26186.php">Klara Hornisova: "[OMPI users] mpirun hangs without internet connection"</a>
<li><strong>In reply to:</strong> <a href="26186.php">Klara Hornisova: "[OMPI users] mpirun hangs without internet connection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26219.php">Klara Hornisova: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<li><strong>Reply:</strong> <a href="26219.php">Klara Hornisova: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/15/2015 5:39 PM, Klara Hornisova wrote:
<br>
<span class="quotelev1">&gt; I have installed OpenMPI 1.6.5 under cygwin. When trying test example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $mpirun hello
</span><br>
<p>current cygwin package is 1.8.4-1, could you test it ?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or, e.g., more complex examples from scalapack, such as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $mpirun -np 4 xslu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; everything works fine when there is an internet connection. However,
</span><br>
<span class="quotelev1">&gt; when the cable is disconnected, mpirun hangs without any error message.
</span><br>
<span class="quotelev1">&gt; With -d option the output stops before the line
</span><br>
<p>there is a wireless on?
<br>
<p><span class="quotelev1">&gt; [my_computer...] [[3169,1],0] node[0].name my_computer... daemon0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is included in the output when the internet is on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The firewall is turned off.
</span><br>
<span class="quotelev1">&gt; I tried also to add options: -host localhost, -mca btl self, --mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include &#147;127.0.0.1/8 &lt;<a href="http://127.0.0.1/8">http://127.0.0.1/8</a>&gt;&#148; and their
</span><br>
<span class="quotelev1">&gt; combinations, but nothing has changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for advice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Klara Hornisova
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26188.php">Leonid: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26186.php">Klara Hornisova: "[OMPI users] mpirun hangs without internet connection"</a>
<li><strong>In reply to:</strong> <a href="26186.php">Klara Hornisova: "[OMPI users] mpirun hangs without internet connection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26219.php">Klara Hornisova: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<li><strong>Reply:</strong> <a href="26219.php">Klara Hornisova: "Re: [OMPI users] mpirun hangs without internet connection"</a>
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

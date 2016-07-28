<?
$subject_val = "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 11:39:40 2009" -->
<!-- isoreceived="20090926153940" -->
<!-- sent="Sat, 26 Sep 2009 17:39:35 +0200" -->
<!-- isosent="20090926153935" -->
<!-- name="Attila B&#246;rcs" -->
<!-- email="attila.borcs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an &amp;quot;flush()&amp;quot;-like function in MPI?" -->
<!-- id="25787e150909260839k50f933dq3fc57594df93235d_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="COL102-W5EEC171A7E39325BFD41AA8D80_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?<br>
<strong>From:</strong> Attila B&#246;rcs (<em>attila.borcs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-26 11:39:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10779.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Previous message:</strong> <a href="10777.php">guosong: "[OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10777.php">guosong: "[OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10779.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Do you use MPI_Wait or MPI_Waitall functions in your code? Because if you
<br>
achieve to non-blocking sending in your code, you should wait for
<br>
non-blocking sendig to complete.
<br>
<p>All the best,
<br>
<p>Attila Borcs
<br>
<p>2009/9/26 guosong &lt;guosong1079_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;  Hi all,
</span><br>
<span class="quotelev1">&gt; I am wondering if there is an flush()-like function in MPI. I saw
</span><br>
<span class="quotelev1">&gt; the output of my program. One sent something but some other process did not
</span><br>
<span class="quotelev1">&gt; receive it, just sitting there waiting. I used MPI_Isend for sending and
</span><br>
<span class="quotelev1">&gt; MPI_Recv for receiving. Is it possible the message was lost or the
</span><br>
<span class="quotelev1">&gt; message was not flushed out and was still in the I/O buffer. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; &#193;&#162;&#191;&#204;&#207;&#194;&#212;&#216; MSN &#177;&#163;&#187;&#164;&#182;&#220;&#163;&#172;&#177;&#163;&#213;&#207;Messenger &#176;&#178;&#200;&#171;&#206;&#200;&#182;&#168;&#163;&#161; &#207;&#214;&#212;&#218;&#190;&#205;&#207;&#194;&#212;&#216;&#163;&#161; &lt;<a href="http://im.live.cn/safe/">http://im.live.cn/safe/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10779.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Previous message:</strong> <a href="10777.php">guosong: "[OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>In reply to:</strong> <a href="10777.php">guosong: "[OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10779.php">Eugene Loh: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
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

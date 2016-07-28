<?
$subject_val = "Re: [OMPI users] About debugging and asynchronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 06:48:13 2014" -->
<!-- isoreceived="20140918104813" -->
<!-- sent="Thu, 18 Sep 2014 10:47:52 +0000" -->
<!-- isosent="20140918104752" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About debugging and asynchronous communication" -->
<!-- id="CAAbhqc6233xhzQ2S1pWJuSDUN=_ii0PpC6bq1QKUjHjDZtk3Tg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F00115BA-A2D5-43FA-8FBC-F1E337A84D8D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] About debugging and asynchronous communication<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 06:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25346.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25344.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25344.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25346.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25346.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In complement to Jeff, I would add that using asynchronous messages
<br>
REQUIRES that you wait (mpi_wait) for all messages at some point. Even
<br>
though this might not seem obvious it is due to memory allocation &quot;behind
<br>
the scenes&quot; which are only de-allocated upon completion through a wait
<br>
statement.
<br>
<p><p>2014-09-18 12:36 GMT+02:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; On Sep 18, 2014, at 2:43 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; a. How to get more information about errors? I got errors like below.
</span><br>
<span class="quotelev1">&gt; This says that program exited abnormally in function MPI_Test(). But is
</span><br>
<span class="quotelev1">&gt; there a way to know more about the error?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Test
</span><br>
<span class="quotelev2">&gt; &gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the purpose of this discussion, let's take a simplification that you
</span><br>
<span class="quotelev1">&gt; are sending and receiving the same datatypes (e.g., you're sending MPI_INT
</span><br>
<span class="quotelev1">&gt; and you're receiving MPI_INT).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error means that you tried to receive message with too small a buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, MPI says that if you send a message that is X element long
</span><br>
<span class="quotelev1">&gt; (e.g., 20 MPI_INTs), then the matching receive must be Y elements, where
</span><br>
<span class="quotelev1">&gt; Y&gt;=X (e.g., *at least* 20 MPI_INTs).  If the receiver provides a Y where
</span><br>
<span class="quotelev1">&gt; Y&lt;X, this is a truncation error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, Open MPI doesn't report a whole lot more information about
</span><br>
<span class="quotelev1">&gt; these kinds of errors than what you're seeing, sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; b. Are there anything to note about asynchronous communication? I use
</span><br>
<span class="quotelev1">&gt; MPI_Isend, MPI_Irecv, MPI_Test to implement asynchronous communication. My
</span><br>
<span class="quotelev1">&gt; program works well on small data sets(10K nodes graphs), but it exits
</span><br>
<span class="quotelev1">&gt; abnormally on large data set (1M nodes graphs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it failing due to truncation errors, or something else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25344.php">http://www.open-mpi.org/community/lists/users/2014/09/25344.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25345/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25346.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25344.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25344.php">Jeff Squyres (jsquyres): "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25346.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25346.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
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

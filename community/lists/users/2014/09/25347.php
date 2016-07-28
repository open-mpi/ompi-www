<?
$subject_val = "Re: [OMPI users] About debugging and asynchronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 07:27:21 2014" -->
<!-- isoreceived="20140918112721" -->
<!-- sent="Thu, 18 Sep 2014 11:27:00 +0000" -->
<!-- isosent="20140918112700" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About debugging and asynchronous communication" -->
<!-- id="CAAbhqc64u5ZtF5yW+v=MLA400BV+YAqvsaH1JYFO-6LbW=r0zg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKY4v9_-6zb8b1W73E5RXUYK=wznjnpHwioxegvYRnUt3ScJYA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-09-18 07:27:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25348.php">Tobias Kloeffel: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25346.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25346.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25348.php">Tobias Kloeffel: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25348.php">Tobias Kloeffel: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not sure whether test will cover this... You should check it...
<br>
<p><p>I here attach my example script which shows two working cases, and one not
<br>
workning (you can check the memory usage simultaneously and see that the
<br>
first two works, the last one goes ballistic in memory).
<br>
<p>Just check it with test to see if it works...
<br>
<p><p>2014-09-18 13:20 GMT+02:00 XingFENG &lt;xingfeng_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Thanks very much for your reply!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To Sir Jeff Squyres:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it fails due to truncation errors. I am now logging information of
</span><br>
<span class="quotelev1">&gt; each send and receive to find out the reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To Sir Nick Papior Andersen:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh, wait (mpi_wait) is never called in my codes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I do is to call MPI_Irecv once. Then MPI_Test is called several
</span><br>
<span class="quotelev1">&gt; times to check whether new messages are available. If new messages are
</span><br>
<span class="quotelev1">&gt; available, some functions to process these messages are called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will add the wait function and check the running results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 18, 2014 at 8:47 PM, Nick Papior Andersen &lt;
</span><br>
<span class="quotelev1">&gt; nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In complement to Jeff, I would add that using asynchronous messages
</span><br>
<span class="quotelev2">&gt;&gt; REQUIRES that you wait (mpi_wait) for all messages at some point. Even
</span><br>
<span class="quotelev2">&gt;&gt; though this might not seem obvious it is due to memory allocation &quot;behind
</span><br>
<span class="quotelev2">&gt;&gt; the scenes&quot; which are only de-allocated upon completion through a wait
</span><br>
<span class="quotelev2">&gt;&gt; statement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-09-18 12:36 GMT+02:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 18, 2014, at 2:43 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; a. How to get more information about errors? I got errors like below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This says that program exited abnormally in function MPI_Test(). But is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there a way to know more about the error?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; *** An error occurred in MPI_Test
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the purpose of this discussion, let's take a simplification that you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are sending and receiving the same datatypes (e.g., you're sending MPI_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and you're receiving MPI_INT).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This error means that you tried to receive message with too small a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Specifically, MPI says that if you send a message that is X element long
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g., 20 MPI_INTs), then the matching receive must be Y elements, where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Y&gt;=X (e.g., *at least* 20 MPI_INTs).  If the receiver provides a Y where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Y&lt;X, this is a truncation error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, Open MPI doesn't report a whole lot more information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about these kinds of errors than what you're seeing, sorry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; b. Are there anything to note about asynchronous communication? I use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Isend, MPI_Irecv, MPI_Test to implement asynchronous communication. My
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program works well on small data sets(10K nodes graphs), but it exits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abnormally on large data set (1M nodes graphs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it failing due to truncation errors, or something else?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25344.php">http://www.open-mpi.org/community/lists/users/2014/09/25344.php</a>
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
<span class="quotelev2">&gt;&gt; Kind regards Nick
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25345.php">http://www.open-mpi.org/community/lists/users/2014/09/25345.php</a>
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
<span class="quotelev1">&gt; Best Regards.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25346.php">http://www.open-mpi.org/community/lists/users/2014/09/25346.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25347/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25347/irecv_issend.f90">irecv_issend.f90</a>
</ul>
<!-- attachment="irecv_issend.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25348.php">Tobias Kloeffel: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25346.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25346.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25348.php">Tobias Kloeffel: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25348.php">Tobias Kloeffel: "Re: [OMPI users] About debugging and asynchronous communication"</a>
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

<?
$subject_val = "Re: [OMPI users] About debugging and asynchronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 10:42:04 2014" -->
<!-- isoreceived="20140918144204" -->
<!-- sent="Fri, 19 Sep 2014 00:42:03 +1000" -->
<!-- isosent="20140918144203" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About debugging and asynchronous communication" -->
<!-- id="CAKY4v99n273w8yj-S31UwsJ=cazv321PweEaWaC2doLmDrJDaA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKY4v98e5zvMTqC83Wejq_dPn0s7VaT30kkCjQkgjbFhHurb+g_at_mail.gmail.com" -->
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
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 10:42:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25355.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25353.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25350.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25355.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25355.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25357.php">Gus Correa: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have found some thing strange.
<br>
<p>Basically, in my codes, processes send and receive messages to/from others
<br>
with variable lengths asynchronously. When sending messages, a process
<br>
would first send the length of message and then the content of the message.
<br>
When receiving, a process would first receive the length. Then, it allocate
<br>
the buffer and receive content of message.
<br>
<p>However, at some time (say, after 150708 times of communication ), some
<br>
process would receive a wrong length(say 170 instead of 445) and the
<br>
process exits abnormally. Anyone has similar experience?
<br>
<p>On Thu, Sep 18, 2014 at 10:07 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for your reply! I am still working on my codes. I would update
</span><br>
<span class="quotelev1">&gt; the post when I fix bugs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 18, 2014 at 9:48 PM, Nick Papior Andersen &lt;
</span><br>
<span class="quotelev1">&gt; nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just checked, if the tests return &quot;Received&quot; for all messages it will
</span><br>
<span class="quotelev2">&gt;&gt; not go into memory burst.
</span><br>
<span class="quotelev2">&gt;&gt; Hence doing MPI_Test will be enough. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hence, if at any time the mpi-layer is notified about the success of a
</span><br>
<span class="quotelev2">&gt;&gt; send/recv it will clean up. This makes sense :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See the updated code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-09-18 13:39 GMT+02:00 Tobias Kloeffel &lt;tobias.kloeffel_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ok i have to wait until tomorrow, they have some problems with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 09/18/2014 01:27 PM, Nick Papior Andersen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure whether test will cover this... You should check it...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I here attach my example script which shows two working cases, and one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not workning (you can check the memory usage simultaneously and see that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the first two works, the last one goes ballistic in memory).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Just check it with test to see if it works...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014-09-18 13:20 GMT+02:00 XingFENG &lt;xingfeng_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Thanks very much for your reply!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To Sir Jeff Squyres:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think it fails due to truncation errors. I am now logging information
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of each send and receive to find out the reason.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  To Sir Nick Papior Andersen:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oh, wait (mpi_wait) is never called in my codes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What I do is to call MPI_Irecv once. Then MPI_Test is called several
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; times to check whether new messages are available. If new messages are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available, some functions to process these messages are called.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I will add the wait function and check the running results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  On Thu, Sep 18, 2014 at 8:47 PM, Nick Papior Andersen &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   In complement to Jeff, I would add that using asynchronous messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; REQUIRES that you wait (mpi_wait) for all messages at some point. Even
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; though this might not seem obvious it is due to memory allocation &quot;behind
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the scenes&quot; which are only de-allocated upon completion through a wait
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; statement.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2014-09-18 12:36 GMT+02:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 18, 2014, at 2:43 AM, XingFENG &lt;xingfeng_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; a. How to get more information about errors? I got errors like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; below. This says that program exited abnormally in function MPI_Test(). But
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is there a way to know more about the error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; *** An error occurred in MPI_Test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For the purpose of this discussion, let's take a simplification that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you are sending and receiving the same datatypes (e.g., you're sending
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_INT and you're receiving MPI_INT).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This error means that you tried to receive message with too small a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; buffer.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Specifically, MPI says that if you send a message that is X element
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; long (e.g., 20 MPI_INTs), then the matching receive must be Y elements,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; where Y&gt;=X (e.g., *at least* 20 MPI_INTs).  If the receiver provides a Y
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; where Y&lt;X, this is a truncation error.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, Open MPI doesn't report a whole lot more information
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; about these kinds of errors than what you're seeing, sorry.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; b. Are there anything to note about asynchronous communication? I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; use MPI_Isend, MPI_Irecv, MPI_Test to implement asynchronous communication.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My program works well on small data sets(10K nodes graphs), but it exits
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; abnormally on large data set (1M nodes graphs).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is it failing due to truncation errors, or something else?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25344.php">http://www.open-mpi.org/community/lists/users/2014/09/25344.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Kind regards Nick
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25345.php">http://www.open-mpi.org/community/lists/users/2014/09/25345.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25346.php">http://www.open-mpi.org/community/lists/users/2014/09/25346.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Kind regards Nick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25347.php">http://www.open-mpi.org/community/lists/users/2014/09/25347.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25348.php">http://www.open-mpi.org/community/lists/users/2014/09/25348.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25349.php">http://www.open-mpi.org/community/lists/users/2014/09/25349.php</a>
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
<p><p><p><pre>
-- 
Best Regards.
---
Xing FENG
PhD Candidate
Database Research Group
School of Computer Science and Engineering
University of New South Wales
NSW 2052, Sydney
Phone: (+61) 413 857 288
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25354/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25355.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25353.php">McGrattan, Kevin B. Dr.: "Re: [OMPI users] How does binding option affect network traffic?"</a>
<li><strong>In reply to:</strong> <a href="25350.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25355.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25355.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25357.php">Gus Correa: "Re: [OMPI users] About debugging and asynchronous communication"</a>
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

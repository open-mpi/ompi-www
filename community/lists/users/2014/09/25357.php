<?
$subject_val = "Re: [OMPI users] About debugging and asynchronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 11:52:18 2014" -->
<!-- isoreceived="20140918155218" -->
<!-- sent="Thu, 18 Sep 2014 11:55:29 -0400" -->
<!-- isosent="20140918155529" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About debugging and asynchronous communication" -->
<!-- id="541B0071.5020704_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKY4v99n273w8yj-S31UwsJ=cazv321PweEaWaC2doLmDrJDaA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 11:55:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25358.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="25356.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="25354.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25359.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25359.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no guarantee that the messages will be received in the same
<br>
order that they were sent.
<br>
Use tags or another mechanism to match the messages on send and recv ends.
<br>
<p>On 09/18/2014 10:42 AM, XingFENG wrote:
<br>
<span class="quotelev1">&gt; I have found some thing strange.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basically, in my codes, processes send and receive messages to/from
</span><br>
<span class="quotelev1">&gt; others with variable lengths asynchronously. When sending messages, a
</span><br>
<span class="quotelev1">&gt; process would first send the length of message and then the content of
</span><br>
<span class="quotelev1">&gt; the message. When receiving, a process would first receive the length.
</span><br>
<span class="quotelev1">&gt; Then, it allocate the buffer and receive content of message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, at some time (say, after 150708 times of communication ), some
</span><br>
<span class="quotelev1">&gt; process would receive a wrong length(say 170 instead of 445) and the
</span><br>
<span class="quotelev1">&gt; process exits abnormally. Anyone has similar experience?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 18, 2014 at 10:07 PM, XingFENG &lt;xingfeng_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:xingfeng_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thank you for your reply! I am still working on my codes. I would
</span><br>
<span class="quotelev1">&gt;     update the post when I fix bugs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Thu, Sep 18, 2014 at 9:48 PM, Nick Papior Andersen
</span><br>
<span class="quotelev1">&gt;     &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I just checked, if the tests return &quot;Received&quot; for all messages
</span><br>
<span class="quotelev1">&gt;         it will not go into memory burst.
</span><br>
<span class="quotelev1">&gt;         Hence doing MPI_Test will be enough. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hence, if at any time the mpi-layer is notified about the
</span><br>
<span class="quotelev1">&gt;         success of a send/recv it will clean up. This makes sense :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         See the updated code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         2014-09-18 13:39 GMT+02:00 Tobias Kloeffel
</span><br>
<span class="quotelev1">&gt;         &lt;tobias.kloeffel_at_[hidden] &lt;mailto:tobias.kloeffel_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ok i have to wait until tomorrow, they have some problems
</span><br>
<span class="quotelev1">&gt;             with the network...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On 09/18/2014 01:27 PM, Nick Papior Andersen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;             I am not sure whether test will cover this... You should
</span><br>
<span class="quotelev2">&gt;&gt;             check it...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I here attach my example script which shows two working
</span><br>
<span class="quotelev2">&gt;&gt;             cases, and one not workning (you can check the memory
</span><br>
<span class="quotelev2">&gt;&gt;             usage simultaneously and see that the first two works, the
</span><br>
<span class="quotelev2">&gt;&gt;             last one goes ballistic in memory).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Just check it with test to see if it works...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             2014-09-18 13:20 GMT+02:00 XingFENG
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;xingfeng_at_[hidden] &lt;mailto:xingfeng_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Thanks very much for your reply!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 To Sir Jeff Squyres:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 I think it fails due to truncation errors. I am now
</span><br>
<span class="quotelev2">&gt;&gt;                 logging information of each send and receive to find
</span><br>
<span class="quotelev2">&gt;&gt;                 out the reason.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 To Sir Nick Papior Andersen:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Oh, wait (mpi_wait) is never called in my codes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 What I do is to call MPI_Irecv once. Then MPI_Test is
</span><br>
<span class="quotelev2">&gt;&gt;                 called several times to check whether new messages are
</span><br>
<span class="quotelev2">&gt;&gt;                 available. If new messages are available, some
</span><br>
<span class="quotelev2">&gt;&gt;                 functions to process these messages are called.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 I will add the wait function and check the running
</span><br>
<span class="quotelev2">&gt;&gt;                 results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 On Thu, Sep 18, 2014 at 8:47 PM, Nick Papior Andersen
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     In complement to Jeff, I would add that using
</span><br>
<span class="quotelev2">&gt;&gt;                     asynchronous messages REQUIRES that you wait
</span><br>
<span class="quotelev2">&gt;&gt;                     (mpi_wait) for all messages at some point. Even
</span><br>
<span class="quotelev2">&gt;&gt;                     though this might not seem obvious it is due to
</span><br>
<span class="quotelev2">&gt;&gt;                     memory allocation &quot;behind the scenes&quot; which are
</span><br>
<span class="quotelev2">&gt;&gt;                     only de-allocated upon completion through a wait
</span><br>
<span class="quotelev2">&gt;&gt;                     statement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     2014-09-18 12:36 GMT+02:00 Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;                     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         On Sep 18, 2014, at 2:43 AM, XingFENG
</span><br>
<span class="quotelev2">&gt;&gt;                         &lt;xingfeng_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                         &lt;mailto:xingfeng_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                         &gt; a. How to get more information about errors?
</span><br>
<span class="quotelev2">&gt;&gt;                         I got errors like below. This says that
</span><br>
<span class="quotelev2">&gt;&gt;                         program exited abnormally in function
</span><br>
<span class="quotelev2">&gt;&gt;                         MPI_Test(). But is there a way to know more
</span><br>
<span class="quotelev2">&gt;&gt;                         about the error?
</span><br>
<span class="quotelev3">&gt;&gt;                         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                         &gt; *** An error occurred in MPI_Test
</span><br>
<span class="quotelev3">&gt;&gt;                         &gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;                         &gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev3">&gt;&gt;                         &gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will
</span><br>
<span class="quotelev2">&gt;&gt;                         now abort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         For the purpose of this discussion, let's take
</span><br>
<span class="quotelev2">&gt;&gt;                         a simplification that you are sending and
</span><br>
<span class="quotelev2">&gt;&gt;                         receiving the same datatypes (e.g., you're
</span><br>
<span class="quotelev2">&gt;&gt;                         sending MPI_INT and you're receiving MPI_INT).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         This error means that you tried to receive
</span><br>
<span class="quotelev2">&gt;&gt;                         message with too small a buffer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Specifically, MPI says that if you send a
</span><br>
<span class="quotelev2">&gt;&gt;                         message that is X element long (e.g., 20
</span><br>
<span class="quotelev2">&gt;&gt;                         MPI_INTs), then the matching receive must be Y
</span><br>
<span class="quotelev2">&gt;&gt;                         elements, where Y&gt;=X (e.g., *at least* 20
</span><br>
<span class="quotelev2">&gt;&gt;                         MPI_INTs).  If the receiver provides a Y where
</span><br>
<span class="quotelev2">&gt;&gt;                         Y&lt;X, this is a truncation error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Unfortunately, Open MPI doesn't report a whole
</span><br>
<span class="quotelev2">&gt;&gt;                         lot more information about these kinds of
</span><br>
<span class="quotelev2">&gt;&gt;                         errors than what you're seeing, sorry.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                         &gt; b. Are there anything to note about
</span><br>
<span class="quotelev2">&gt;&gt;                         asynchronous communication? I use MPI_Isend,
</span><br>
<span class="quotelev2">&gt;&gt;                         MPI_Irecv, MPI_Test to implement asynchronous
</span><br>
<span class="quotelev2">&gt;&gt;                         communication. My program works well on small
</span><br>
<span class="quotelev2">&gt;&gt;                         data sets(10K nodes graphs), but it exits
</span><br>
<span class="quotelev2">&gt;&gt;                         abnormally on large data set (1M nodes graphs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Is it failing due to truncation errors, or
</span><br>
<span class="quotelev2">&gt;&gt;                         something else?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         --
</span><br>
<span class="quotelev2">&gt;&gt;                         Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;                         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;                         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;                         <a href="http://www.open-mpi.org/community/lists/users/2014/09/25344.php">http://www.open-mpi.org/community/lists/users/2014/09/25344.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     --
</span><br>
<span class="quotelev2">&gt;&gt;                     Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;                     <a href="http://www.open-mpi.org/community/lists/users/2014/09/25345.php">http://www.open-mpi.org/community/lists/users/2014/09/25345.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 --
</span><br>
<span class="quotelev2">&gt;&gt;                 Best Regards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2014/09/25346.php">http://www.open-mpi.org/community/lists/users/2014/09/25346.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             --
</span><br>
<span class="quotelev2">&gt;&gt;             Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________ users
</span><br>
<span class="quotelev2">&gt;&gt;             mailing list users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/09/25347.php">http://www.open-mpi.org/community/lists/users/2014/09/25347.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/users/2014/09/25348.php">http://www.open-mpi.org/community/lists/users/2014/09/25348.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Kind regards Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2014/09/25349.php">http://www.open-mpi.org/community/lists/users/2014/09/25349.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Best Regards.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Xing FENG
</span><br>
<span class="quotelev1">&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt; Database Research Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; University of New South Wales
</span><br>
<span class="quotelev1">&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone: (+61) 413 857 288
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25354.php">http://www.open-mpi.org/community/lists/users/2014/09/25354.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25358.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="25356.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="25354.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25359.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25359.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
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

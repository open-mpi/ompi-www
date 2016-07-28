<?
$subject_val = "Re: [OMPI users] About debugging and asynchronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 01:30:19 2014" -->
<!-- isoreceived="20140919053019" -->
<!-- sent="Fri, 19 Sep 2014 07:29:57 +0200" -->
<!-- isosent="20140919052957" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About debugging and asynchronous communication" -->
<!-- id="CAAbhqc73BANe9o91R+x74qTfdTUwouO_=SW=mKTRW5N8JNrknw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKY4v9_O-c_F4kJhyCXsgadLpGHUFoHi9CRKgWtdeN03Qt8k0A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-09-19 01:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25362.php">Edgar Gabriel: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="25360.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="25359.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/10/25424.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/10/25424.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, if it is the next message then I guess you have a bug, your counter
<br>
is not consistent.
<br>
I am pretty sure the error is on your side, I do something similar but have
<br>
never experienced anything like that. :)
<br>
<p>2014-09-19 3:21 GMT+02:00 XingFENG &lt;xingfeng_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Thanks for your advice. I added tags for messages in ascending order. But
</span><br>
<span class="quotelev1">&gt; it didn't work, either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, after 103043 times of communication, in the sender side, it
</span><br>
<span class="quotelev1">&gt; sends an int 78 with tag 206086, followed by 78 bytes data with tag 206087.
</span><br>
<span class="quotelev1">&gt; In the receiver side, it receives an int 41 with tag 206086. ( actually, 41
</span><br>
<span class="quotelev1">&gt; is the length of the next message to be sent by sender )
</span><br>
<span class="quotelev1">&gt; Hence, it allocates a buffer with length 41. However, there are 78 bytes
</span><br>
<span class="quotelev1">&gt; data. Hence, it exits with error MPI_ERR_TRUNCATE: message truncated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 19, 2014 at 1:55 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is no guarantee that the messages will be received in the same
</span><br>
<span class="quotelev2">&gt;&gt; order that they were sent.
</span><br>
<span class="quotelev2">&gt;&gt; Use tags or another mechanism to match the messages on send and recv ends.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 09/18/2014 10:42 AM, XingFENG wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have found some thing strange.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Basically, in my codes, processes send and receive messages to/from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; others with variable lengths asynchronously. When sending messages, a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process would first send the length of message and then the content of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the message. When receiving, a process would first receive the length.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then, it allocate the buffer and receive content of message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, at some time (say, after 150708 times of communication ), some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process would receive a wrong length(say 170 instead of 445) and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process exits abnormally. Anyone has similar experience?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Sep 18, 2014 at 10:07 PM, XingFENG &lt;xingfeng_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:xingfeng_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thank you for your reply! I am still working on my codes. I would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     update the post when I fix bugs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Thu, Sep 18, 2014 at 9:48 PM, Nick Papior Andersen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I just checked, if the tests return &quot;Received&quot; for all messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         it will not go into memory burst.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hence doing MPI_Test will be enough. :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hence, if at any time the mpi-layer is notified about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         success of a send/recv it will clean up. This makes sense :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         See the updated code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         2014-09-18 13:39 GMT+02:00 Tobias Kloeffel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;tobias.kloeffel_at_[hidden] &lt;mailto:tobias.kloeffel_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ok i have to wait until tomorrow, they have some problems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             with the network...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On 09/18/2014 01:27 PM, Nick Papior Andersen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             I am not sure whether test will cover this... You should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             check it...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             I here attach my example script which shows two working
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             cases, and one not workning (you can check the memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             usage simultaneously and see that the first two works, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             last one goes ballistic in memory).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Just check it with test to see if it works...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             2014-09-18 13:20 GMT+02:00 XingFENG
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;xingfeng_at_[hidden] &lt;mailto:xingfeng_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Thanks very much for your reply!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 To Sir Jeff Squyres:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 I think it fails due to truncation errors. I am now
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 logging information of each send and receive to find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 out the reason.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 To Sir Nick Papior Andersen:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Oh, wait (mpi_wait) is never called in my codes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 What I do is to call MPI_Irecv once. Then MPI_Test is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 called several times to check whether new messages are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 available. If new messages are available, some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 functions to process these messages are called.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 I will add the wait function and check the running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 On Thu, Sep 18, 2014 at 8:47 PM, Nick Papior Andersen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     In complement to Jeff, I would add that using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     asynchronous messages REQUIRES that you wait
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     (mpi_wait) for all messages at some point. Even
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     though this might not seem obvious it is due to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     memory allocation &quot;behind the scenes&quot; which are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     only de-allocated upon completion through a wait
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     statement.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     2014-09-18 12:36 GMT+02:00 Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         On Sep 18, 2014, at 2:43 AM, XingFENG
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         &lt;xingfeng_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         &lt;mailto:xingfeng_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                         &gt; a. How to get more information about errors?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         I got errors like below. This says that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         program exited abnormally in function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         MPI_Test(). But is there a way to know more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         about the error?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                         &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                         &gt; *** An error occurred in MPI_Test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                         &gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                         &gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                         &gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         now abort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         For the purpose of this discussion, let's take
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         a simplification that you are sending and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         receiving the same datatypes (e.g., you're
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         sending MPI_INT and you're receiving MPI_INT).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         This error means that you tried to receive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         message with too small a buffer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Specifically, MPI says that if you send a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         message that is X element long (e.g., 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         MPI_INTs), then the matching receive must be Y
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         elements, where Y&gt;=X (e.g., *at least* 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         MPI_INTs).  If the receiver provides a Y where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Y&lt;X, this is a truncation error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Unfortunately, Open MPI doesn't report a whole
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         lot more information about these kinds of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         errors than what you're seeing, sorry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;                         &gt; b. Are there anything to note about
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         asynchronous communication? I use MPI_Isend,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         MPI_Irecv, MPI_Test to implement asynchronous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         communication. My program works well on small
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         data sets(10K nodes graphs), but it exits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         abnormally on large data set (1M nodes graphs).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Is it failing due to truncation errors, or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         something else?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         <a href="http://www.cisco.com/web/">http://www.cisco.com/web/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about/doing_business/legal/cri/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mailman/listinfo.cgi/users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; community/lists/users/2014/09/25344.php
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Kind regards Nick
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; community/lists/users/2014/09/25345.php
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Best Regards.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2014/09/">http://www.open-mpi.org/community/lists/users/2014/09/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 25346.php
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Kind regards Nick
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             _______________________________________________ users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             mailing list users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Link to this post:<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; community/lists/users/2014/09/25347.php
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Subscription: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mailman/listinfo.cgi/users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2014/09/">http://www.open-mpi.org/community/lists/users/2014/09/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25348.php
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Kind regards Nick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2014/09/25349.php">http://www.open-mpi.org/community/lists/users/2014/09/25349.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Best Regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xing FENG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Database Research Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: (+61) 413 857 288
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; community/lists/users/2014/09/25354.php
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/">http://www.open-mpi.org/community/lists/users/2014/09/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 25357.php
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25359.php">http://www.open-mpi.org/community/lists/users/2014/09/25359.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25361/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25362.php">Edgar Gabriel: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="25360.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="25359.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/10/25424.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/10/25424.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
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

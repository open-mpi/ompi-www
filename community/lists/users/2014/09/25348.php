<?
$subject_val = "Re: [OMPI users] About debugging and asynchronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 07:39:39 2014" -->
<!-- isoreceived="20140918113939" -->
<!-- sent="Thu, 18 Sep 2014 13:39:36 +0200" -->
<!-- isosent="20140918113936" -->
<!-- name="Tobias Kloeffel" -->
<!-- email="tobias.kloeffel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About debugging and asynchronous communication" -->
<!-- id="541AC478.5090509_at_fau.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAbhqc64u5ZtF5yW+v=MLA400BV+YAqvsaH1JYFO-6LbW=r0zg_at_mail.gmail.com" -->
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
<strong>From:</strong> Tobias Kloeffel (<em>tobias.kloeffel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 07:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25349.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25347.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25347.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25349.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25349.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok i have to wait until tomorrow, they have some problems with the 
<br>
network...
<br>
<p><p><p>On 09/18/2014 01:27 PM, Nick Papior Andersen wrote:
<br>
<span class="quotelev1">&gt; I am not sure whether test will cover this... You should check it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I here attach my example script which shows two working cases, and one 
</span><br>
<span class="quotelev1">&gt; not workning (you can check the memory usage simultaneously and see 
</span><br>
<span class="quotelev1">&gt; that the first two works, the last one goes ballistic in memory).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just check it with test to see if it works...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-09-18 13:20 GMT+02:00 XingFENG &lt;xingfeng_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:xingfeng_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks very much for your reply!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     To Sir Jeff Squyres:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I think it fails due to truncation errors. I am now logging
</span><br>
<span class="quotelev1">&gt;     information of each send and receive to find out the reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     To Sir Nick Papior Andersen:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Oh, wait (mpi_wait) is never called in my codes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     What I do is to call MPI_Irecv once. Then MPI_Test is called
</span><br>
<span class="quotelev1">&gt;     several times to check whether new messages are available. If new
</span><br>
<span class="quotelev1">&gt;     messages are available, some functions to process these messages
</span><br>
<span class="quotelev1">&gt;     are called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I will add the wait function and check the running results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Thu, Sep 18, 2014 at 8:47 PM, Nick Papior Andersen
</span><br>
<span class="quotelev1">&gt;     &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         In complement to Jeff, I would add that using asynchronous
</span><br>
<span class="quotelev1">&gt;         messages REQUIRES that you wait (mpi_wait) for all messages at
</span><br>
<span class="quotelev1">&gt;         some point. Even though this might not seem obvious it is due
</span><br>
<span class="quotelev1">&gt;         to memory allocation &quot;behind the scenes&quot; which are only
</span><br>
<span class="quotelev1">&gt;         de-allocated upon completion through a wait statement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         2014-09-18 12:36 GMT+02:00 Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;         &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Sep 18, 2014, at 2:43 AM, XingFENG
</span><br>
<span class="quotelev1">&gt;             &lt;xingfeng_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:xingfeng_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; a. How to get more information about errors? I got
</span><br>
<span class="quotelev1">&gt;             errors like below. This says that program exited
</span><br>
<span class="quotelev1">&gt;             abnormally in function MPI_Test(). But is there a way to
</span><br>
<span class="quotelev1">&gt;             know more about the error?
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; *** An error occurred in MPI_Test
</span><br>
<span class="quotelev2">&gt;             &gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;             &gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt;             &gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             For the purpose of this discussion, let's take a
</span><br>
<span class="quotelev1">&gt;             simplification that you are sending and receiving the same
</span><br>
<span class="quotelev1">&gt;             datatypes (e.g., you're sending MPI_INT and you're
</span><br>
<span class="quotelev1">&gt;             receiving MPI_INT).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             This error means that you tried to receive message with
</span><br>
<span class="quotelev1">&gt;             too small a buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Specifically, MPI says that if you send a message that is
</span><br>
<span class="quotelev1">&gt;             X element long (e.g., 20 MPI_INTs), then the matching
</span><br>
<span class="quotelev1">&gt;             receive must be Y elements, where Y&gt;=X (e.g., *at least*
</span><br>
<span class="quotelev1">&gt;             20 MPI_INTs).  If the receiver provides a Y where Y&lt;X,
</span><br>
<span class="quotelev1">&gt;             this is a truncation error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Unfortunately, Open MPI doesn't report a whole lot more
</span><br>
<span class="quotelev1">&gt;             information about these kinds of errors than what you're
</span><br>
<span class="quotelev1">&gt;             seeing, sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; b. Are there anything to note about asynchronous
</span><br>
<span class="quotelev1">&gt;             communication? I use MPI_Isend, MPI_Irecv, MPI_Test to
</span><br>
<span class="quotelev1">&gt;             implement asynchronous communication. My program works
</span><br>
<span class="quotelev1">&gt;             well on small data sets(10K nodes graphs), but it exits
</span><br>
<span class="quotelev1">&gt;             abnormally on large data set (1M nodes graphs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Is it failing due to truncation errors, or something else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             --
</span><br>
<span class="quotelev1">&gt;             Jeff Squyres
</span><br>
<span class="quotelev1">&gt;             jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             Subscription:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/users/2014/09/25344.php">http://www.open-mpi.org/community/lists/users/2014/09/25344.php</a>
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
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2014/09/25345.php">http://www.open-mpi.org/community/lists/users/2014/09/25345.php</a>
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
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2014/09/25346.php">http://www.open-mpi.org/community/lists/users/2014/09/25346.php</a>
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
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25347.php">http://www.open-mpi.org/community/lists/users/2014/09/25347.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25348/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25349.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25347.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25347.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25349.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Reply:</strong> <a href="25349.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
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

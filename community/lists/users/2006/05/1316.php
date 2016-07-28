<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 15:55:07 2006" -->
<!-- isoreceived="20060526195507" -->
<!-- sent="Fri, 26 May 2006 15:51:56 -0400" -->
<!-- isosent="20060526195156" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Thread Safety" -->
<!-- id="B6384D5A-C75B-4C1A-B0CE-DA25C97F9611_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD5F7_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 15:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1317.php">imran shaik: "Re: [OMPI users] Thread Safety"</a>
<li><strong>Previous message:</strong> <a href="1315.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>In reply to:</strong> <a href="1309.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Thread Safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1317.php">imran shaik: "Re: [OMPI users] Thread Safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 26, 2006, at 6:55 AM, Jeff Squyres ((jsquyres)) wrote:
<br>
<p><span class="quotelev1">&gt; MPI_THREAD_MULITPLE is &quot;somewhat&quot; supported, meaning that support  
</span><br>
<span class="quotelev1">&gt; for it was designed in to Open MPI, but it has not been fully  
</span><br>
<span class="quotelev1">&gt; stress tested.  As such, there is likely to still be bugs when  
</span><br>
<span class="quotelev1">&gt; using multiple user threads with MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fork() is not technically supported by the MPI standard.  If you  
</span><br>
<span class="quotelev1">&gt; *need* to fork(), you might want to look at alternate mechanisms if  
</span><br>
<span class="quotelev1">&gt; you need to move between multiple MPI implementations because  
</span><br>
<span class="quotelev1">&gt; support for it is not likely to be portable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Within Open MPI, fork() will almost certainly fail if you use the  
</span><br>
<span class="quotelev1">&gt; OS-bypass networks (Myrinet, InfiniBand).  The mechanisms that  
</span><br>
<span class="quotelev1">&gt; these networks use for high-speed/low latency are quite problematic  
</span><br>
<span class="quotelev1">&gt; with fork().  If you are using tcp or shared memory, fork() *might*  
</span><br>
<span class="quotelev1">&gt; work, but this is not something that we have extensively tested.
</span><br>
<p>I did some work on that last week. Jeff is right all OS bypass  
<br>
network don't like fork. Once you fork the status of the application  
<br>
is &quot;not usable&quot;. SM and TCP kind of support it, if you never do  
<br>
communications on the child. But that's not what you're looking for.  
<br>
Therefore the generic answer is never use fork in an MPI application  
<br>
once you called MPI_Init (not even after MPI_Finalize).
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><p><span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On Behalf Of imran shaik
</span><br>
<span class="quotelev1">&gt; Sent: Friday, May 26, 2006 1:50 AM
</span><br>
<span class="quotelev1">&gt; To: openMPI mailing list
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Thread Safety
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am a newbie to OpenMPI.
</span><br>
<span class="quotelev1">&gt; Can anyone say how the support for MPI_THREAD_MULTIPLE is  
</span><br>
<span class="quotelev1">&gt; implemented in openMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is thread safety completely provided in openMPI? or does it still  
</span><br>
<span class="quotelev1">&gt; has some bugs?
</span><br>
<span class="quotelev1">&gt; I am currently using LAM/MPI.But i need concurrent threads making  
</span><br>
<span class="quotelev1">&gt; MPI calls. So i am planning to move to another implementation of  
</span><br>
<span class="quotelev1">&gt; MPI. Can i choose openMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, is &quot;fork&quot;(for child preoces creation) still a no-no in   
</span><br>
<span class="quotelev1">&gt; openMPI too?  Can a child process(forked) make concurrent MPI calls  
</span><br>
<span class="quotelev1">&gt; along with its parent ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam? Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1317.php">imran shaik: "Re: [OMPI users] Thread Safety"</a>
<li><strong>Previous message:</strong> <a href="1315.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Help regarding send/recv code"</a>
<li><strong>In reply to:</strong> <a href="1309.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Thread Safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1317.php">imran shaik: "Re: [OMPI users] Thread Safety"</a>
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

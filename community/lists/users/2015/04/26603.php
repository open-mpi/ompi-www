<?
$subject_val = "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 12:50:35 2015" -->
<!-- isoreceived="20150403165035" -->
<!-- sent="Fri, 3 Apr 2015 11:50:13 -0500" -->
<!-- isosent="20150403165013" -->
<!-- name="Lei Shi" -->
<!-- email="leishi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever" -->
<!-- id="CAEV8=V9XC4aFPwabWptG3k4qAvQRcQSo_eX__B4iX+FtqQ1bCQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1DD14AD4-8D0B-4222-A6D8-48EB83F448C3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever<br>
<strong>From:</strong> Lei Shi (<em>leishi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-03 12:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26604.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26602.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>In reply to:</strong> <a href="26600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26604.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26604.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Yes, the memory issue caused by Isend/Irecv without calling MPI_Wait
<br>
probably is the reason. Attached is my test results showing that calling
<br>
MPI_Isend without using MPI_Wait at all leads to a wired wtime for my
<br>
program. The Wtime should be linear, but some jumps show up after several
<br>
iterations.
<br>
<p>Yes, I'm using MPI_Waitall or Testall in my case for the common approach.
<br>
For one iteration, my common approach is
<br>
-----------------------------------------------------------------------------------------------
<br>
//
<br>
// packing data
<br>
//
<br>
&nbsp;....
<br>
<p>&nbsp;//
<br>
&nbsp;// init send/rev
<br>
&nbsp;//
<br>
&nbsp;for(int z=0;z&lt;_n_proc;++z){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int nif=n_if_to_proc[z];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//send data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(nif&gt;0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;snd_buf_[z][0],n_buf_[z],MPI_DOUBLE,z,tag,
<br>
MPI_COMM_WORLD, &amp;s_sol_req_[n_proc_exchange]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;rev_buf_[z][0],n_buf_[z],MPI_DOUBLE,z,tag,
<br>
MPI_COMM_WORLD, &amp;r_sol_req_[n_proc_exchange]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n_proc_exchange++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;//
<br>
&nbsp;&nbsp;// unpacking and do some local jobs here
<br>
&nbsp;&nbsp;//
<br>
&nbsp;&nbsp;....
<br>
<p>&nbsp;&nbsp;//
<br>
&nbsp;&nbsp;// wait for send/rev finish
<br>
&nbsp;&nbsp;//
<br>
&nbsp;&nbsp;MPI_Waitall(n_proc_exchange_,s_sol_req_,MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;MPI_Waitall(n_proc_exchange_,r_sol_req_,MPI_STATUS_IGNORE);
<br>
<p>&nbsp;&nbsp;//do some jobs which depend on the exchanged data (rev_buf_)
<br>
&nbsp;&nbsp;.....
<br>
-----------------------------------------------------------------------------------------------
<br>
<p><p>But I want to avoid calling MPI_Waitall,  since for my case, I dont care
<br>
the data is the latest correct one or some previous initial data. When I
<br>
comment out the MPI_Waitall, some wired thing happens. I think as you said
<br>
some memory is leaked. The system memory may run out after some iterations.
<br>
<p>I try to use MPI_Ibsend. So I provide my own system buffer to the MPI
<br>
library. But still slow down the program (as shown in the test figure).
<br>
<p>Can I use MPI_Irecv with MPI_Ibsend or I need to pair MPI_Ibsend with the
<br>
blocking MPI_Recv function?
<br>
<p>P.S.  Pavan suggests me to use MPI_Request_free. I will give it a try.
<br>
<p>Thanks for your reply and suggestions.
<br>
<p>Best,
<br>
<p>Lei Shi
<br>
<p><p>Sincerely Yours,
<br>
<p>Lei Shi
<br>
---------
<br>
<p>On Fri, Apr 3, 2015 at 5:34 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; In the general case, MPI defines that you *have* to call one of the
</span><br>
<span class="quotelev1">&gt; MPI_Test or MPI_Wait functions to finish the communication request.  If you
</span><br>
<span class="quotelev1">&gt; don't do so, you're basically leaking resources (e.g., memory).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a single-threaded MPI implementation, the call to
</span><br>
<span class="quotelev1">&gt; MPI_Test/MPI_Wait/etc. may be where the actual message passing progress
</span><br>
<span class="quotelev1">&gt; occurs, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't want to block waiting for the communication, you can keep an
</span><br>
<span class="quotelev1">&gt; array of outstanding MPI_Requests and call MPI_Testall() on them to allow
</span><br>
<span class="quotelev1">&gt; MPI to make progress on them, but not block your application until all (or
</span><br>
<span class="quotelev1">&gt; any) of them complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 3, 2015, at 3:43 AM, Matthieu Brucher &lt;matthieu.brucher_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think you have to call either Wait or Test to make the communications
</span><br>
<span class="quotelev1">&gt; move forward in the general case. Some hardware may have a hardware thread
</span><br>
<span class="quotelev1">&gt; that makes the communication, but usually you have to make it &quot;advance&quot;
</span><br>
<span class="quotelev1">&gt; yourself by either calling Wait ot Test.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matthieu
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2015-04-03 5:48 GMT+01:00 Lei Shi &lt;leishi_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; I want to use non-blocking send/rev MPI_Isend/MPI_Irev to do
</span><br>
<span class="quotelev1">&gt; communication. But in my case, I don't really care what kind of data I get
</span><br>
<span class="quotelev1">&gt; or it is ready to use or not. So I don't want to waste my time to do any
</span><br>
<span class="quotelev1">&gt; synchronization  by calling MPI_Wait or etc API.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But when I avoid calling MPI_Wait, my program is freezed several secs
</span><br>
<span class="quotelev1">&gt; after running some iterations (after multiple MPI_Isend/Irev callings),
</span><br>
<span class="quotelev1">&gt; then continues. It takes even more time than the case with MPI_Wait.  So my
</span><br>
<span class="quotelev1">&gt; question is how to do a &quot;true&quot; non-blocking communication without waiting
</span><br>
<span class="quotelev1">&gt; for the data ready or not. Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sincerely Yours,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lei Shi
</span><br>
<span class="quotelev2">&gt; &gt; ---------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26596.php">http://www.open-mpi.org/community/lists/users/2015/04/26596.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt; &gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev2">&gt; &gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev2">&gt; &gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26598.php">http://www.open-mpi.org/community/lists/users/2015/04/26598.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26600.php">http://www.open-mpi.org/community/lists/users/2015/04/26600.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26603/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-26603/Screenshot_from_2015-04-03_11:45:31.png" alt="Screenshot_from_2015-04-03_11:45:31.png">
<!-- attachment="Screenshot_from_2015-04-03_11:45:31.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26604.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26602.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>In reply to:</strong> <a href="26600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26604.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26604.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
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

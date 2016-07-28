<?
$subject_val = "Re: [OMPI users] UDP like messaging with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 21 14:33:27 2011" -->
<!-- isoreceived="20111121193327" -->
<!-- sent="Mon, 21 Nov 2011 11:33:22 -0800 (PST)" -->
<!-- isosent="20111121193322" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UDP like messaging with MPI" -->
<!-- id="1321904002.79490.YahooMailNeo_at_web121717.mail.ne1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="76A7647D-72D7-4F31-975B-1F184AB74D02_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] UDP like messaging with MPI<br>
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-21 14:33:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17805.php">Jeremiah Willcock: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Previous message:</strong> <a href="17803.php">John R. Cary: "Re: [OMPI users] openmpi and mingw32?"</a>
<li><strong>In reply to:</strong> <a href="17802.php">Jeff Squyres: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17805.php">Jeremiah Willcock: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Reply:</strong> <a href="17805.php">Jeremiah Willcock: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your answer. Actually, I used the term UDP to show the non-connection oriented messaging. TCP creates connection between two parties (who communicate) but in UDP a message can be sent to any IP/port where a process/thread is listening to, and if the process is busy in doing something, all the received messages are queued for it and when ever it calls the recv function one message is taken from the queue. 

I am implementing a distributed algorithm that will provide communication sensitive load balancing for computational loads. For example, if we have 10 nodes each containing 10 cores (100 cores in total). So when MPI application will start (let say with 1000) processes (more than 1 process per core) then I will run my distributed algorithm MPI_Balance (sorry for giving MPI_ prefix as it is not a part of MPI, but I am trying to make it the part of MPI ;) ). So that algorithm will take those processes that communicate more in the same node (keeping the computational load on 10 cores on that node balanced). 

So that was the little bit explanation. So for that my distributed algorithm requires that some processes communicate with each other to collaborate on something. So I need a kind of messaging that I explained above. It is kind of UDP messaging (no connection before sending a message, and message is always queued on the receiver's side and sender is not blocked, it just sends the message and the receiver takes it when it gets free from other task). 

I have tried to use the combination of MPI_Send, MPI_Recv, MPI_Iprobe, MPI_Isend, MPI_Irecv, MPI_Test etc, but I am not getting that thing that I am looking for. I think MPI should also provide that way. May be it is not in my knowledge. That's why I am asking the experts. I am still looking for it :(

thanks and regards,
Mudassar Majeed
PhD Student
Linkoping University
PhD Topic: Parallel Computing (Optimal composition of parallel programs and runtime support).





________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: mudassarm30_at_[hidden]; Open MPI Users &lt;users_at_[hidden]&gt; 
Cc: &quot;linux_at_[hidden]&quot; &lt;linux_at_[hidden]&gt; 
Sent: Monday, November 21, 2011 6:07 PM
Subject: Re: [OMPI users] UDP like messaging with MPI
 
MPI defines only reliable communications -- it's not quite the same thing as UDP.&#194;&#160; 

Hence, if you send something, it is guaranteed to be able to be received.&#194;&#160; UDP may drop packets whenever it feels like it (e.g., when it is out of resources).

Most MPI implementations will do some form of buffering of unexpected receives.&#194;&#160; So if process A sends message X to process B, if B hasn't posted a matching receive for message X yet, B will likely silently accept the message under the covers and buffer it (or at least buffer part of it).&#194;&#160; Hence, when you finally post the matching X receive in B, whatever of X was already received will already be there, but B may need to send a clear-to-send to A to get the rest of the message.

Specifically: if X is &quot;short&quot;, A may eagerly send the whole message to B.&#194;&#160; If X is &quot;long&quot;, A may only send the first part of B and wait for a CTS before sending the rest of it.

MPI implementations typically do this in order to conserve buffer space -- i.e., if A sends a 10MB message, there's no point in buffering it at B until the matching receive is made and the message can be received directly into the destination 10MB buffer that B has made available.&#194;&#160; If B accepted the 10MB X early, it would cost an additional 10MB to buffer it.&#194;&#160; Ick.

Alternatively, what I think Lukas was trying to suggest was that you can post non-blocking receives and simply test for completion later.&#194;&#160; This allows MPI to receive straight into the target buffer without intermediate copies or additional buffers.&#194;&#160; Then you can just check to see when the receive(s) is(are) done.


On Nov 19, 2011, at 10:47 AM, Mudassar Majeed wrote:

&gt; I know about tn&#196;&#177;s funct&#196;&#177;ons, they special requirements like the mpi_irecv call should be made in every process. My processes should not look for messages or implicitly receive them. But messages shuddering go into their msg queues and retrieved when needed. Just like udp communication.
&gt; 
&gt; Regards
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17804/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17805.php">Jeremiah Willcock: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Previous message:</strong> <a href="17803.php">John R. Cary: "Re: [OMPI users] openmpi and mingw32?"</a>
<li><strong>In reply to:</strong> <a href="17802.php">Jeff Squyres: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17805.php">Jeremiah Willcock: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Reply:</strong> <a href="17805.php">Jeremiah Willcock: "Re: [OMPI users] UDP like messaging with MPI"</a>
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

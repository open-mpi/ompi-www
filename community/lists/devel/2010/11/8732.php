<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 17:32:43 2010" -->
<!-- isoreceived="20101129223243" -->
<!-- sent="Mon, 29 Nov 2010 14:32:46 -0800" -->
<!-- isosent="20101129223246" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E7092CEC61_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Warning%20on%20fork()%20disappears%20if%20I%20use%20MPI%20threads!!"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-11-29 17:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8731.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Maybe in reply to:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff
<br>
<p>I am invoking MPI_Init_thread() with MPI_THREAD_MULTIPLE. If openib BTL
<br>
is responsible for the warning and openib BTL is excluded in this case,
<br>
then that explains the discrepancy.
<br>
<p>FYI, I invoked MPI_Init_thread() with MPI_THREAD_SERIALIZED and I got
<br>
the warning message about the fork().
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>----------------------- PREVIOUS MESSAGE -------------------------
<br>
<p>Subject: Re: [OMPI devel] Warning on fork() disappears if I use MPI
<br>
threads!!
<br>
From: Jeff Squyres (jsquyres_at_[hidden])
<br>
Date: 2010-11-29 14:10:44 
<br>
<p>*	Next message: N.M. Maclaren: &quot;Re: [OMPI devel] Warning on fork()
<br>
disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8731.php">http://www.open-mpi.org/community/lists/devel/2010/11/8731.php</a>&gt;  
<br>
*	Previous message: George Bosilca: &quot;Re: [OMPI devel] Warning on
<br>
fork() disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8729.php">http://www.open-mpi.org/community/lists/devel/2010/11/8729.php</a>&gt;  
<br>
*	In reply to: ananda.mudar_at_[hidden]: &quot;[OMPI devel] Warning on
<br>
fork() disappears if I use MPI threads!!&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/11/8698.php">http://www.open-mpi.org/community/lists/devel/2010/11/8698.php</a>&gt;  
<br>
<p>________________________________
<br>
<p>On Nov 23, 2010, at 3:23 PM, &lt;ananda.mudar_at_[hidden]&gt;
<br>
&lt;ananda.mudar_at_[hidden]&gt; wrote: 
<br>
<p><span class="quotelev1">&gt; However this error message goes away, if I initialize MPI with threads
</span><br>
ie; MPI_Init_thread(). Can anyone explain this discrepancy? 
<br>
<p>What thread level are you invoking MPI_INIT_THREAD with? 
<br>
<p>One possible reason this could be happening is that the openib BTL is
<br>
excluding itself if you use MPI_THREAD_MULTIPLE. The openib BTL is the
<br>
entity that is responsible for the fork warning -- if it's not being
<br>
used, then no warning is issued because there is no problem with
<br>
forking. 
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
________________________________
Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8732/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8731.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Maybe in reply to:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8733.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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

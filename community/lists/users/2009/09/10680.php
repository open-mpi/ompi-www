<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 00:27:16 2009" -->
<!-- isoreceived="20090918042716" -->
<!-- sent="Fri, 18 Sep 2009 09:59:39 +0530" -->
<!-- isosent="20090918042939" -->
<!-- name="neeraj_at_[hidden]" -->
<!-- email="neeraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="OFC79BB07B.4164285A-ON65257635.001847E4-65257635.0018BEBA_at_crlindia.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AB303F1.7010807_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multi-threading  with OpenMPI ?<br>
<strong>From:</strong> <a href="mailto:neeraj_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Multi-threading%20%20with%20OpenMPI%20?"><em>neeraj_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-09-18 00:29:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10681.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10679.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="10679.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10682.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ashika,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Yes you can serialize the call using pthead mutex if you have created 
<br>
threads using pthreads. Basically whatever thread libray you are using for 
<br>
thread creation provides synchronization API's which you have to use here.
<br>
<p>OPAL_THREAD_LOCK and UNLOCK code is also implemented using supported 
<br>
thread library on your platform(selected by default during configure or 
<br>
use --with-threads).
<br>
<p>You can't use OPAL library as it is not exported to outside MPI 
<br>
programming world.
<br>
<p>Regards
<br>
<p>Neeraj Chourasia (MTS)
<br>
Computational Research Laboratories Ltd.
<br>
(A wholly Owned Subsidiary of TATA SONS Ltd)
<br>
B-101, ICC Trade Towers, Senapati Bapat Road
<br>
Pune 411016 (Mah) INDIA
<br>
(O) +91-20-6620 9863  (Fax) +91-20-6620 9862
<br>
M: +91.9225520634
<br>
<p><p><p><p>Ashika Umanga Umagiliya &lt;aumanga_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden]
<br>
09/18/2009 09:25 AM
<br>
Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI users] Multi-threading  with OpenMPI ?
<br>
<p><p><p><p><p><p>Thanks Ralph,
<br>
<p>I have not much experience in this area.shall i use 
<br>
pthread_mutex_lock(*),*pthread_mutex_unlock() ..etc or following which i 
<br>
saw in OpenMPI source :
<br>
<p>static opal_mutex_t ompi_lock;
<br>
<p>OPAL_THREAD_LOCK(&amp;ompi_lock);
<br>
&nbsp;&nbsp;&nbsp;//
<br>
OPAL_THREAD_UNLOCK(&amp;ompi_lock);
<br>
<p>Thanks in advance,
<br>
umanga
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Only thing I can suggest is to place a thread lock around the call to 
</span><br>
<span class="quotelev1">&gt; comm_spawn so that only one thread at a time can execute that 
</span><br>
<span class="quotelev1">&gt; function. The call to mpi_init_thread is fine - you just need to 
</span><br>
<span class="quotelev1">&gt; explicitly protect the call to comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2009, at 7:44 PM, Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI Jeff, Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I call MPI_COMM_SPAWN in multiple threads simultaneously.
</span><br>
<span class="quotelev2">&gt;&gt; Because I need to expose my parallel algorithm as a web service, I 
</span><br>
<span class="quotelev2">&gt;&gt; need multiple clients connect and execute my logic as same time(ie 
</span><br>
<span class="quotelev2">&gt;&gt; mutiple threads).
</span><br>
<span class="quotelev2">&gt;&gt; For each client , a new thread is created (by Web service framework) 
</span><br>
<span class="quotelev2">&gt;&gt; and inside the thread,MPI_Init_Thread() is called if the MPI hasnt 
</span><br>
<span class="quotelev2">&gt;&gt; been initialized.
</span><br>
<span class="quotelev2">&gt;&gt; The the thread calls MPI_COMM__SPAWN and create new processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So ,if this is the case isn't there any workarounds ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; umanga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 16, 2009, at 9:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Only the obvious, and not very helpful one: comm_spawn isn't thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; safe at this time. You'll need to serialize your requests to that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is likely the cause of your issues if you are calling 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_SPAWN in multiple threads simultaneously.  Can you verify?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not, we'll need to dig a little deeper to figure out what's going 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on.  But Ralph is right -- read up on the THREAD_MULTIPLE 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constraints (check the OMPI README file) to see if that's what's 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; biting you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>=====-----=====-----=====
<br>
<p><p><p>Notice: The information contained in this e-mail
<br>
message and/or attachments to it may contain 
<br>
confidential or privileged information. If you are 
<br>
not the intended recipient, any dissemination, use, 
<br>
review, distribution, printing or copying of the 
<br>
information contained in this e-mail message 
<br>
and/or attachments to it are strictly prohibited. If 
<br>
you have received this communication in error, 
<br>
please notify us by reply e-mail or telephone and 
<br>
immediately and permanently delete the message 
<br>
and any attachments. 
<br>
<p>Internet communications cannot be guaranteed to be timely,
<br>
secure, error or virus-free. The sender does not accept liability
<br>
for any errors or omissions.Thank you
<br>
<p>=====-----=====-----=====
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10680/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10681.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10679.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="10679.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10682.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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

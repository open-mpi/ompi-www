<?
$subject_val = "Re: [OMPI users] Restart after code hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 18:26:07 2016" -->
<!-- isoreceived="20160616222607" -->
<!-- sent="Thu, 16 Jun 2016 15:26:02 -0700" -->
<!-- isosent="20160616222602" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Restart after code hangs" -->
<!-- id="53269014-3E2C-4525-A5F1-C6094093046F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFvb=+4OL04G9bvWPgVAiDYyfmrDAaNS64Rrj56ByoYFmEPT6Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Restart after code hangs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 18:26:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29473.php">Gus Correa: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29471.php">Alex Kaiser: "[OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29471.php">Alex Kaiser: "[OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29473.php">Gus Correa: "Re: [OMPI users] Restart after code hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which version of OMPI are you using?
<br>
<p><span class="quotelev1">&gt; On Jun 16, 2016, at 2:25 PM, Alex Kaiser &lt;adkaiser_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an MPI code which sometimes hangs, simply stops running. It is not clear why and it uses many large third party libraries so I do not want to try to fix it. The code is easy to restart, but then it needs to be monitored closely by me, and I'd prefer to do it automatically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way, within an MPI process, to detect the hang and abort if so? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In psuedocode, I would like to do something like 
</span><br>
<span class="quotelev1">&gt; for (all time steps)
</span><br>
<span class="quotelev1">&gt;     step 
</span><br>
<span class="quotelev1">&gt;     if (nothing has happened for x minutes)
</span><br>
<span class="quotelev1">&gt;         call mpi abort to return control to the shell
</span><br>
<span class="quotelev1">&gt;     endif 
</span><br>
<span class="quotelev1">&gt; endfor 
</span><br>
<span class="quotelev1">&gt; This structure does not work however, as it can no longer do anything, including check itself, when it is stuck. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you, 
</span><br>
<span class="quotelev1">&gt; Alex 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29471.php">http://www.open-mpi.org/community/lists/users/2016/06/29471.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29473.php">Gus Correa: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29471.php">Alex Kaiser: "[OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29471.php">Alex Kaiser: "[OMPI users] Restart after code hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29473.php">Gus Correa: "Re: [OMPI users] Restart after code hangs"</a>
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

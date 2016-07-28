<?
$subject_val = "Re: [OMPI users] Running mpi with different account";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 09:56:27 2015" -->
<!-- isoreceived="20150413135627" -->
<!-- sent="Mon, 13 Apr 2015 09:56:27 -0400" -->
<!-- isosent="20150413135627" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running mpi with different account" -->
<!-- id="552BCB0B.80204_at_calculquebec.ca" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6A4034B1-6DD5-4EF5-ACCF-9C9D89266BBC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running mpi with different account<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 09:56:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26694.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Previous message:</strong> <a href="26692.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>In reply to:</strong> <a href="26692.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26694.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Reply:</strong> <a href="26694.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 2015-04-13 09:54, Ralph Castain a &#195;&#169;crit :
<br>
<span class="quotelev2">&gt;&gt; On Apr 13, 2015, at 6:52 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just out of curiosity... how will OpenMPI start processes under different accounts ? Through SSH while specifying different user names ?
</span><br>
<span class="quotelev2">&gt;&gt; I am assuming that no resource manager or scheduler will allow this.
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m assuming he just plans to run the entire job as the other user. Essentially, it would be the same as if his friend ran the job for him.
</span><br>
&nbsp;From this comment :
<br>
<p>&nbsp;&nbsp;My problem is that my account is limited to use 4 machines (I need more machines to process data). I can borrow my friend's account and thus have access to another 4 machines but I am not sure whether it works.
<br>
<p>I assumed that he wants to run the job under _both_ accounts at the same 
<br>
time.
<br>
<p><p><span class="quotelev2">&gt;&gt; My recommendation would be to contact your sysadmin and ask for an exception instead of going through with this insanity (forgive the judgement here).
</span><br>
<span class="quotelev1">&gt; Agreed!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maxime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 2015-04-13 09:47, Ralph Castain a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let&#226;&#128;&#153;s hope you sys admin doesn&#226;&#128;&#153;t find out about it - they tend to take a dim view of sharing accounts!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So long as the path and library path are set correctly, we won&#226;&#128;&#153;t care.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 12, 2015, at 10:33 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am wondering if it is possible that MPI programs can be run on machines with different account?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am doing experiments with some MPI programs on a cluster. My problem is that my account is limited to use 4 machines (I need more machines to process data). I can borrow my friend's account and thus have access to another 4 machines but I am not sure whether it works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Xing FENG
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Database Research Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26687.php">http://www.open-mpi.org/community/lists/users/2015/04/26687.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26690.php">http://www.open-mpi.org/community/lists/users/2015/04/26690.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev2">&gt;&gt; Ph. D. en physique
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26691.php">http://www.open-mpi.org/community/lists/users/2015/04/26691.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26692.php">http://www.open-mpi.org/community/lists/users/2015/04/26692.php</a>
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26694.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Previous message:</strong> <a href="26692.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>In reply to:</strong> <a href="26692.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26694.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Reply:</strong> <a href="26694.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
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

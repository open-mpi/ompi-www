<?
$subject_val = "Re: [OMPI users] Running mpi with different account";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 20:47:56 2015" -->
<!-- isoreceived="20150414004756" -->
<!-- sent="Tue, 14 Apr 2015 10:47:54 +1000" -->
<!-- isosent="20150414004754" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running mpi with different account" -->
<!-- id="CAKY4v98xaXtrNO6ZnzPj2bmeHx+xFqToCHZ7_Eo5opeR7hyO7g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CCBA8EB7-1F0D-4328-9E96-1AF075D1AC92_at_open-mpi.org" -->
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
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 20:47:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26708.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Previous message:</strong> <a href="26706.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26694.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26708.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Reply:</strong> <a href="26708.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for all who joined the discussion.
<br>
Yes, I meant to run the job under both accounts at the same time.
<br>
<p>Hi, Ralph,
<br>
<p>I have searched about specifying username in hostfile and got no related
<br>
page. Could you give a sample of specifying username in hostfile, please?
<br>
Another problem is do you also specify password in hostfile?
<br>
<p>On Tue, Apr 14, 2015 at 12:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2015, at 6:56 AM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev1">&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2015-04-13 09:54, Ralph Castain a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2015, at 6:52 AM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev1">&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just out of curiosity... how will OpenMPI start processes under different
</span><br>
<span class="quotelev1">&gt; accounts ? Through SSH while specifying different user names ?
</span><br>
<span class="quotelev1">&gt; I am assuming that no resource manager or scheduler will allow this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m assuming he just plans to run the entire job as the other user.
</span><br>
<span class="quotelev1">&gt; Essentially, it would be the same as if his friend ran the job for him.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From this comment :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is that my account is limited to use 4 machines (I need more
</span><br>
<span class="quotelev1">&gt; machines to process data). I can borrow my friend's account and thus have
</span><br>
<span class="quotelev1">&gt; access to another 4 machines but I am not sure whether it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assumed that he wants to run the job under _both_ accounts at the same
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I honestly don&#226;&#128;&#153;t know if that would work. We do provide a way in the
</span><br>
<span class="quotelev1">&gt; hostfile for someone to specify the username for a remote host, but you&#226;&#128;&#153;d
</span><br>
<span class="quotelev1">&gt; have to get the ssh system to accept it. Assuming the other username also
</span><br>
<span class="quotelev1">&gt; has your host in its authorized keys, then I suppose it might work - I&#226;&#128;&#153;ve
</span><br>
<span class="quotelev1">&gt; never tried it myself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My recommendation would be to contact your sysadmin and ask for an
</span><br>
<span class="quotelev1">&gt; exception instead of going through with this insanity (forgive the
</span><br>
<span class="quotelev1">&gt; judgement here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2015-04-13 09:47, Ralph Castain a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let&#226;&#128;&#153;s hope you sys admin doesn&#226;&#128;&#153;t find out about it - they tend to take a
</span><br>
<span class="quotelev1">&gt; dim view of sharing accounts!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So long as the path and library path are set correctly, we won&#226;&#128;&#153;t care.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 12, 2015, at 10:33 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wondering if it is possible that MPI programs can be run on machines
</span><br>
<span class="quotelev1">&gt; with different account?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am doing experiments with some MPI programs on a cluster. My problem is
</span><br>
<span class="quotelev1">&gt; that my account is limited to use 4 machines (I need more machines to
</span><br>
<span class="quotelev1">&gt; process data). I can borrow my friend's account and thus have access to
</span><br>
<span class="quotelev1">&gt; another 4 machines but I am not sure whether it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26687.php">http://www.open-mpi.org/community/lists/users/2015/04/26687.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26690.php">http://www.open-mpi.org/community/lists/users/2015/04/26690.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26691.php">http://www.open-mpi.org/community/lists/users/2015/04/26691.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26692.php">http://www.open-mpi.org/community/lists/users/2015/04/26692.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26693.php">http://www.open-mpi.org/community/lists/users/2015/04/26693.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26694.php">http://www.open-mpi.org/community/lists/users/2015/04/26694.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Best Regards.
---
Xing FENG
PhD Candidate
Database Research Group
School of Computer Science and Engineering
University of New South Wales
NSW 2052, Sydney
Phone: (+61) 413 857 288
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26707/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26708.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Previous message:</strong> <a href="26706.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26694.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26708.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Reply:</strong> <a href="26708.php">Ralph Castain: "Re: [OMPI users] Running mpi with different account"</a>
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

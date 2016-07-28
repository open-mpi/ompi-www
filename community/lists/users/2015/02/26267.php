<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 10:28:01 2015" -->
<!-- isoreceived="20150203152801" -->
<!-- sent="Tue, 3 Feb 2015 07:28:01 -0800" -->
<!-- isosent="20150203152801" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="CAMD57oerTtQVeT90ruK3yP+f=26zqhacNcDCb-b6E0j7J5UE_A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A66CE5A1-7EA8-4023-8E07-D0778F6FDC8F_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] independent startup of orted and orterun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 10:28:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26268.php">Elio Physics: "[OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26266.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="26263.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26278.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26278.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I fixed some of the handshake issues - please give it another try.
<br>
You should see orte-submit properly shutdown upon completion, and orte-dvm
<br>
properly shutdown when sent the terminate cmd. I was able to cleanly run
<br>
MPI jobs on my laptop.
<br>
<p>On Mon, Feb 2, 2015 at 10:44 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On 03 Feb 2015, at 0:20 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Okay, thanks - I'll get on it tonight. Looks like a fairly simple bug,
</span><br>
<span class="quotelev1">&gt; so hopefully I'll have it ironed out tonight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I was not completely accurate. Let me be more specific:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * The orte-submit does not return though, so that symptom is similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * On my laptop I dont get the libevent warnings (the output redirection
</span><br>
<span class="quotelev1">&gt; hid that fact).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * The &quot;-np&quot; behavior is different too, but I guess that is because there
</span><br>
<span class="quotelev1">&gt; is no RM in place on my laptop.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26263.php">http://www.open-mpi.org/community/lists/users/2015/02/26263.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26268.php">Elio Physics: "[OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26266.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="26263.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26278.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26278.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
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

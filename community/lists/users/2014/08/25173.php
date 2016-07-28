<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 19:13:46 2014" -->
<!-- isoreceived="20140827231346" -->
<!-- sent="Thu, 28 Aug 2014 08:13:32 +0900" -->
<!-- isosent="20140827231332" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="OF8AF70734.DE1FBCDE-ON49257D41.007E7C56-49257D41.007F997E_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BE618581-ADF3-423F-A303-A343655D8129_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running a hybrid MPI+openMP program<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Running%20a%20hybrid%20MPI%2BopenMP%20program"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-08-27 19:13:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25174.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25172.php">Brice Goglin: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>In reply to:</strong> <a href="25162.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25143.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Here is a very simple patch, but Ralph might have a different idea.
<br>
So I'd like him to decide how to treat it. As far as I checked, I
<br>
believe it has no side effect.
<br>
<p>(See attached file: patch.bind-to-none)
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 27.08.2014 um 09:57 schrieb Tetsuya Mishima:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Reuti and Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How do you think if we accept bind-to none option even when the pe=N
</span><br>
option is provided?
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; just like:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -map-by slot:pe=N -bind-to none ./inverse
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this would be ok to cover all cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If yes, it's easy for me to make a patch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima  tmishima_at_[hidden]
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
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25161.php">http://www.open-mpi.org/community/lists/users/2014/08/25161.php</a>
<br>
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
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25162.php">http://www.open-mpi.org/community/lists/users/2014/08/25162.php</a>
<br>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25173/patch.bind-to-none">patch.bind-to-none</a>
</ul>
<!-- attachment="patch.bind-to-none" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25174.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25172.php">Brice Goglin: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>In reply to:</strong> <a href="25162.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25143.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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

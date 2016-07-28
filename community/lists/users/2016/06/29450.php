<?
$subject_val = "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 05:30:16 2016" -->
<!-- isoreceived="20160615093016" -->
<!-- sent="Wed, 15 Jun 2016 15:00:05 +0530" -->
<!-- isosent="20160615093005" -->
<!-- name="Sreenidhi Bharathkar Ramesh" -->
<!-- email="sreenidhi-bharathkar.ramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any suggestions?" -->
<!-- id="CANi1EtPR5FmJoOO+VwgVommkZOnSs_XWOV7BV1HJWd_3OSpsyA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160615094716.2391b74d_at_yaydoe" -->
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
<strong>Subject:</strong> Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?<br>
<strong>From:</strong> Sreenidhi Bharathkar Ramesh (<em>sreenidhi-bharathkar.ramesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 05:30:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29451.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29449.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29449.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29452.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29452.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29453.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any	suggestions?"</a>
<li><strong>Reply:</strong> <a href="29511.php">Mehmet Belgin: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi Mehmet / Llolsten / Peter,
<br>
<p>Just curious to know what is the NIC or fabric you are using in your
<br>
respective clusters.
<br>
<p>If it is Mellanox, is it not better to use the MLNX_OFED ?
<br>
<p>This information may help us build our cluster. Hence, asking.
<br>
<p>Thanks,
<br>
- Sreenidhi.
<br>
<p>On Wed, Jun 15, 2016 at 1:17 PM, Peter Kjellstr&#195;&#182;m &lt;cap_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 14 Jun 2016 13:18:33 -0400
</span><br>
<span class="quotelev1">&gt; &quot;Llolsten Kaonga&quot; &lt;llk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Grigory,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not sure what Redhat does exactly but when you install the OS,
</span><br>
<span class="quotelev2">&gt; &gt; there is always an InfiniBand Support module during the installation
</span><br>
<span class="quotelev2">&gt; &gt; process. We never check/install that module when we do OS
</span><br>
<span class="quotelev2">&gt; &gt; installations because it is usually several versions of OFED behind
</span><br>
<span class="quotelev2">&gt; &gt; (almost obsolete).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not as bad as you assume. Also as I said before it's not an OFED
</span><br>
<span class="quotelev1">&gt; version at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We (and many other medium+ HPC centers) run the redhat stack for
</span><br>
<span class="quotelev1">&gt; reason that it is 1) good enough 2) not an extra complication for the
</span><br>
<span class="quotelev1">&gt; system environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Peter K (with ~3000 hpc nodes on rhel-ib for many years)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29449.php">http://www.open-mpi.org/community/lists/users/2016/06/29449.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29450/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29451.php">Gilles Gouaillardet: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29449.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29449.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29452.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29452.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Reply:</strong> <a href="29453.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any	suggestions?"</a>
<li><strong>Reply:</strong> <a href="29511.php">Mehmet Belgin: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
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

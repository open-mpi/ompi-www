<?
$subject_val = "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 12:10:28 2015" -->
<!-- isoreceived="20150929161028" -->
<!-- sent="Tue, 29 Sep 2015 19:10:27 +0300" -->
<!-- isosent="20150929161027" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="CAAO1KyZaV==pJ8woanVbDTi6B_u46x82KXGx+=tE8+T6Xm+org_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D22EF3F5.7D4A7%Grigory.Shamov_at_ad.umanitoba.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-29 12:10:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27715.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Previous message:</strong> <a href="27713.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>In reply to:</strong> <a href="27701.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27725.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27725.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27734.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
unfortunately, there is no one size fits all here.
<br>
<p>mxm provides best performance for IB.
<br>
<p>different application may require different OMPI, mxm, OS tunables and
<br>
requires some performance engineering.
<br>
<p>On Mon, Sep 28, 2015 at 9:49 PM, Grigory Shamov &lt;Grigory.Shamov_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi Nathan,
</span><br>
<span class="quotelev1">&gt; Hi Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the quick replies!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is I don't know what are my applications. I mean, I know them,
</span><br>
<span class="quotelev1">&gt; but we are a general purpose cluster, running in production for quite a
</span><br>
<span class="quotelev1">&gt; while, and there are everybody, from quantum chemists to machine learners
</span><br>
<span class="quotelev1">&gt; to bioinformatists. SO a system-wide change might harm some of them; and
</span><br>
<span class="quotelev1">&gt; doing per-app benchmarking/tuning  looks a bit daunting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The default behaviour our users are used to was to have unlimited values
</span><br>
<span class="quotelev1">&gt; for all memory limits. We have set it so a few years ago, as a response
</span><br>
<span class="quotelev1">&gt; for some user complaints that applications won't start (we set the ulimits
</span><br>
<span class="quotelev1">&gt; in Torque).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it known (I know every application is different ) how much costs,
</span><br>
<span class="quotelev1">&gt; performance-wise, to have MXM with good ulimits vs unlimited ulimits, vs
</span><br>
<span class="quotelev1">&gt; not using MXM at all?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Grigory Shamov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Westgrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev1">&gt; University of Manitoba
</span><br>
<span class="quotelev1">&gt; E2-588 EITC Building,
</span><br>
<span class="quotelev1">&gt; (204) 474-9625
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 15-09-28 12:58 PM, &quot;users on behalf of Nathan Hjelm&quot;
</span><br>
<span class="quotelev1">&gt; &lt;users-bounces_at_[hidden] on behalf of hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I would like to add that you may want to play with the value and see
</span><br>
<span class="quotelev2">&gt; &gt;what works for your applications. Most applications should be using
</span><br>
<span class="quotelev2">&gt; &gt;malloc or similar functions to allocate large memory regions in the heap
</span><br>
<span class="quotelev2">&gt; &gt;and not on the stack.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-Nathan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Mon, Sep 28, 2015 at 08:01:09PM +0300, Mike Dubman wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Hello Grigory,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    We observed ~10% performance degradation with heap size set to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;unlimited
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    for CFD applications.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    You can measure your application performance with default and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;unlimited
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    &quot;limits&quot; and select the best setting.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Kind Regards.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    M
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    On Mon, Sep 28, 2015 at 7:36 PM, Grigory Shamov
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    &lt;Grigory.Shamov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Hi All,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      We have built OpenMPI (1.8.8., 1.10.0) against Mellanox OFED 2.4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      corresponding MXM. When it runs now, it gives the following
</span><br>
<span class="quotelev3">&gt; &gt;&gt;warning, per
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      process:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      [1443457390.911053] [myhist:5891 :0]         mxm.c:185  MXM  WARN
</span><br>
<span class="quotelev3">&gt; &gt;&gt;The
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      'ulimit -s' on the system is set to 'unlimited'. This may have
</span><br>
<span class="quotelev3">&gt; &gt;&gt;negative
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      performance implications. Please set the heap size to the default
</span><br>
<span class="quotelev3">&gt; &gt;&gt;value
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      (10240)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      We have ulimits for heap (as well as most of the other limits) set
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      unlimited because of applications that might possibly need a lot
</span><br>
<span class="quotelev3">&gt; &gt;&gt;of RAM.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      The question is if we should do as MXM wants, or ignore it? Has
</span><br>
<span class="quotelev3">&gt; &gt;&gt;anyone
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      an
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      experience running recent OpenMPI with MXM enabled, and what kind
</span><br>
<span class="quotelev3">&gt; &gt;&gt;of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      ulimits do you have? Any suggestions/comments appreciated, thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Grigory Shamov
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Westgrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      University of Manitoba
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      E2-588 EITC Building,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      (204) 474-9625
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/09/27697.php">http://www.open-mpi.org/community/lists/users/2015/09/27697.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Kind Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    M.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27698.php">http://www.open-mpi.org/community/lists/users/2015/09/27698.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27701.php">http://www.open-mpi.org/community/lists/users/2015/09/27701.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27714/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27715.php">Mike Dubman: "Re: [OMPI users] worse latency in 1.8 c.f. 1.6"</a>
<li><strong>Previous message:</strong> <a href="27713.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
<li><strong>In reply to:</strong> <a href="27701.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27725.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27725.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27734.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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

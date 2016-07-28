<?
$subject_val = "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 14:49:22 2015" -->
<!-- isoreceived="20150928184922" -->
<!-- sent="Mon, 28 Sep 2015 18:49:19 +0000" -->
<!-- isosent="20150928184919" -->
<!-- name="Grigory Shamov" -->
<!-- email="Grigory.Shamov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="D22EF3F5.7D4A7%Grigory.Shamov_at_ad.umanitoba.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150928175832.GB2128_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Grigory Shamov (<em>Grigory.Shamov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-28 14:49:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Previous message:</strong> <a href="27700.php">Nathan Hjelm: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27700.php">Nathan Hjelm: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27714.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27714.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
Hi Mike,
<br>
<p>Thanks for the quick replies!
<br>
<p>My problem is I don't know what are my applications. I mean, I know them,
<br>
but we are a general purpose cluster, running in production for quite a
<br>
while, and there are everybody, from quantum chemists to machine learners
<br>
to bioinformatists. SO a system-wide change might harm some of them; and
<br>
doing per-app benchmarking/tuning  looks a bit daunting.
<br>
<p>The default behaviour our users are used to was to have unlimited values
<br>
for all memory limits. We have set it so a few years ago, as a response
<br>
for some user complaints that applications won't start (we set the ulimits
<br>
in Torque). 
<br>
<p>Is it known (I know every application is different ) how much costs,
<br>
performance-wise, to have MXM with good ulimits vs unlimited ulimits, vs
<br>
not using MXM at all?
<br>
<p><pre>
-- 
Grigory Shamov
Westgrid/ComputeCanada Site Lead
University of Manitoba
E2-588 EITC Building,
(204) 474-9625
On 15-09-28 12:58 PM, &quot;users on behalf of Nathan Hjelm&quot;
&lt;users-bounces_at_[hidden] on behalf of hjelmn_at_[hidden]&gt; wrote:
&gt;
&gt;I would like to add that you may want to play with the value and see
&gt;what works for your applications. Most applications should be using
&gt;malloc or similar functions to allocate large memory regions in the heap
&gt;and not on the stack.
&gt;
&gt;-Nathan
&gt;
&gt;On Mon, Sep 28, 2015 at 08:01:09PM +0300, Mike Dubman wrote:
&gt;&gt;    Hello Grigory,
&gt;&gt;    We observed ~10% performance degradation with heap size set to
&gt;&gt;unlimited
&gt;&gt;    for CFD applications.
&gt;&gt;    You can measure your application performance with default and
&gt;&gt;unlimited
&gt;&gt;    &quot;limits&quot; and select the best setting.
&gt;&gt;    Kind Regards.
&gt;&gt;    M
&gt;&gt;    On Mon, Sep 28, 2015 at 7:36 PM, Grigory Shamov
&gt;&gt;    &lt;Grigory.Shamov_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt;      Hi All,
&gt;&gt; 
&gt;&gt;      We have built OpenMPI (1.8.8., 1.10.0) against Mellanox OFED 2.4
&gt;&gt;and
&gt;&gt;      corresponding MXM. When it runs now, it gives the following
&gt;&gt;warning, per
&gt;&gt;      process:
&gt;&gt; 
&gt;&gt;      [1443457390.911053] [myhist:5891 :0]         mxm.c:185  MXM  WARN
&gt;&gt;The
&gt;&gt;      'ulimit -s' on the system is set to 'unlimited'. This may have
&gt;&gt;negative
&gt;&gt;      performance implications. Please set the heap size to the default
&gt;&gt;value
&gt;&gt;      (10240)
&gt;&gt; 
&gt;&gt;      We have ulimits for heap (as well as most of the other limits) set
&gt;&gt;      unlimited because of applications that might possibly need a lot
&gt;&gt;of RAM.
&gt;&gt; 
&gt;&gt;      The question is if we should do as MXM wants, or ignore it? Has
&gt;&gt;anyone
&gt;&gt;      an
&gt;&gt;      experience running recent OpenMPI with MXM enabled, and what kind
&gt;&gt;of
&gt;&gt;      ulimits do you have? Any suggestions/comments appreciated, thanks!
&gt;&gt; 
&gt;&gt;      --
&gt;&gt;      Grigory Shamov
&gt;&gt; 
&gt;&gt;      Westgrid/ComputeCanada Site Lead
&gt;&gt;      University of Manitoba
&gt;&gt;      E2-588 EITC Building,
&gt;&gt;      (204) 474-9625
&gt;&gt; 
&gt;&gt;      _______________________________________________
&gt;&gt;      users mailing list
&gt;&gt;      users_at_[hidden]
&gt;&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;      Link to this post:
&gt;&gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/09/27697.php">http://www.open-mpi.org/community/lists/users/2015/09/27697.php</a>
&gt;&gt; 
&gt;&gt;    --
&gt;&gt;    Kind Regards,
&gt;&gt;    M.
&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post:
&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27698.php">http://www.open-mpi.org/community/lists/users/2015/09/27698.php</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27702.php">Dave Goodell (dgoodell): "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Previous message:</strong> <a href="27700.php">Nathan Hjelm: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27700.php">Nathan Hjelm: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27714.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27714.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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

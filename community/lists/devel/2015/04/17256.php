<?
$subject_val = "Re: [OMPI devel] v1.8.5 NEWS and README";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 17:24:22 2015" -->
<!-- isoreceived="20150417212422" -->
<!-- sent="Fri, 17 Apr 2015 15:24:21 -0600" -->
<!-- isosent="20150417212421" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8.5 NEWS and README" -->
<!-- id="CAF1Cqj6Np5HjC-mpTSyGdYk2NTORG6xX9kCOjjhD+1RMom7yUg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15y=PuonKNJ6e0QH=S=ammv0UOZgFEU8O=EbekBwu3rWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8.5 NEWS and README<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 17:24:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17257.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Previous message:</strong> <a href="17255.php">Paul Hargrove: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>In reply to:</strong> <a href="17253.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17250.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right on Paul!
<br>
<p>I can certainly get 1.8.5 to &quot;work&quot; on cray systems like hopper, but last
<br>
time I tried out of the box I had to fix up the pmi
<br>
in ess_pmi_module.c because with recent cray PMI's (like the ones now
<br>
default on hopper), the configure ends
<br>
up resulting in the use of PMI_KVS_Put/get, which for reasons too complex
<br>
to go into here, cray only allows to work
<br>
when an app is launched by hydra.  That was only the first of the
<br>
problems.  It might be that someone has gotten
<br>
it to work by linking in with an ancient version of cray pmi, etc. etc.
<br>
<p>Again, I don't want to try and patch up the 1.8 release to work on the cray
<br>
systems.  Way too late in the game
<br>
for that branch.
<br>
<p>But don't worry, for cory things will be running great using the 1.9/2.0.
<br>
Of course, maybe for cory beyond-mpi program
<br>
models might be more appropriate.
<br>
<p>Howard
<br>
<p><p><p><p>2015-04-17 14:16 GMT-06:00 Paul Hargrove &lt;phhargrove_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 17, 2015 at 1:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; [...regarding Cray XC...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you don&#226;&#128;&#153;t want to support it, I understand - but we should be clear
</span><br>
<span class="quotelev2">&gt;&gt; that it may well work anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you really want to enumerate all of the &quot;it may well work anyway&quot;
</span><br>
<span class="quotelev1">&gt; platforms?
</span><br>
<span class="quotelev1">&gt; If so, I have quite a list of them to offer :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seriously, though, it sounds from Howard's comments like 1.8.5 on Cray XC
</span><br>
<span class="quotelev1">&gt; qualifies for some status like the &quot;lightly (but not fully) tested&quot;
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17253.php">http://www.open-mpi.org/community/lists/devel/2015/04/17253.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17257.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Previous message:</strong> <a href="17255.php">Paul Hargrove: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>In reply to:</strong> <a href="17253.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17250.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
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

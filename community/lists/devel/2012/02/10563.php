<?
$subject_val = "Re: [OMPI devel] v1.5 r25914 DOA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 22 14:24:09 2012" -->
<!-- isoreceived="20120222192409" -->
<!-- sent="Wed, 22 Feb 2012 11:24:07 -0800" -->
<!-- isosent="20120222192407" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5 r25914 DOA" -->
<!-- id="4F4540D7.2010200_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69F0053E-2012-4B90-AD8C-6F6D33B7477F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5 r25914 DOA<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-22 14:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10564.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10562.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10562.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10564.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10564.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10566.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/22/2012 11:08 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Feb 22, 2012, at 11:59 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 22/02/2012 17:48, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 22, 2012, at 9:39 AM, Eugene Loh wrote
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2/21/2012 10:31 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...  &quot;sockets&quot; is unknown and hwloc returns 0 for num_sockets and OMPI pukes on divide by zero.  OS info was listed in the original message (below).  Might we want to do something else?  E.g., assume num_sockets==1 when num_sockets==0 (if you know what I mean)?  So, which one (or more) of the following should be fixed?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *) on this platform, hwloc finds no socket level
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *) therefore hwloc returns num_sockets==0 to OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *) OMPI divides by 0 and barfs on basically everything
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay.  So, Brice's other e-mail indicates that the first two are &quot;not really uncommon&quot;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2/22/2012 7:55 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Anyway, we have seen other systems (mostly non-Linux) where lstopo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reports nothing interesting (only one machine object with multiple PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; children). So numsockets==0 isn't really uncommon.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, it seems to me that OMPI needs to handle the num_sockets==0 case rather than just dividing by num_sockets.  This is v1.5 orte_odls_base_open() since r25914.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, just artificially setting the num_sockets to 1 won't solve much - you'll get past that point in the code, but attempts to bind are likely to fail down the road. Fixing it will require some significant effort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Given we haven't heard reports of this before, I'm not convinced it is a widespread problem.
</span><br>
I assume we don't see the problem as widespread because it was only 
<br>
introduced into  v1.5 in r25914.  In my mind, the real question is how 
<br>
common it is for hwloc to decide numsockets==0.  On that one, Brice 
<br>
asserts it &quot;isn't really uncommon.&quot;
<br>
<span class="quotelev3">&gt;&gt;&gt; For now, let's just use the mca param and see what happens.
</span><br>
<span class="quotelev2">&gt;&gt; I am probably missing something but: Why would setting num_sockets to 1
</span><br>
<span class="quotelev2">&gt;&gt; work fine as a mca param, while artificially setting it as said above
</span><br>
<span class="quotelev2">&gt;&gt; wouldn't ?
</span><br>
<span class="quotelev1">&gt; Because the param means that it isn't hardwired into the code base. I want to first verify that artificially forcing num_sockets to 1 doesn't break the code down the road, so the less change to find out, the better.
</span><br>
That sounds a lot different to me than the earlier statement.  Thanks 
<br>
for asking that question, Brice.  Anyhow, I tried using &quot;--mca 
<br>
orte_num_sockets 1&quot; and that seems to allow basic programs to run.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10564.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10562.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>In reply to:</strong> <a href="10562.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10564.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10564.php">Ralph Castain: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Reply:</strong> <a href="10566.php">Brice Goglin: "Re: [OMPI devel] v1.5 r25914 DOA"</a>
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

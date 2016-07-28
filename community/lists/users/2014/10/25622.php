<?
$subject_val = "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 00:00:55 2014" -->
<!-- isoreceived="20141028040055" -->
<!-- sent="Mon, 27 Oct 2014 21:00:51 -0700" -->
<!-- isosent="20141028040051" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris" -->
<!-- id="974CE09B-67E9-4417-B09E-E701E034AF64_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="544EFDAD.6070009_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 00:00:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25623.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25621.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25621.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 27, 2014, at 7:21 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/10/28 0:46, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I propose to also remove that issue. Simple enough to use a
</span><br>
<span class="quotelev2">&gt;&gt; hash_table_32 to handle the jobids, and let that point to a
</span><br>
<span class="quotelev2">&gt;&gt; hash_table_32 of vpids. Since we rarely have more than one jobid
</span><br>
<span class="quotelev2">&gt;&gt; anyway, the memory overhead actually decreases with this model, and we
</span><br>
<span class="quotelev2">&gt;&gt; get rid of that annoying need to memcpy everything. 
</span><br>
<span class="quotelev1">&gt; sounds good to me.
</span><br>
<span class="quotelev1">&gt; from an implementation/performance point of view, should we put treat
</span><br>
<span class="quotelev1">&gt; the local jobid differently ?
</span><br>
<span class="quotelev1">&gt; (e.g. use a special variable for the hash_table_32 of the vpids of the
</span><br>
<span class="quotelev1">&gt; current jobid)
</span><br>
<p>Not entirely sure - let&#226;&#128;&#153;s see as we go. My initial thought is &#226;&#128;&#156;no&#226;&#128;&#157;, but since the use of dynamic jobs is so rare, it might make sense.
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; as far as i am concerned, i am fine with your proposed suggestion to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dump opal_identifier_t.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about the patch, did you mean you have something ready i can apply to my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PR ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or do you expect me to do the changes (i am ok to do it if needed)
</span><br>
<span class="quotelev2">&gt;&gt; Why don&#226;&#128;&#153;t I grab your branch, create a separate repo based on it (just to keep things clean), push it to my area and give you write access? We can then collaborate on the changes and create a PR from there. This way, you don&#226;&#128;&#153;t need to give me write access to your entire repo.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Make sense?
</span><br>
<span class="quotelev1">&gt; ok to work on an other &quot;somehow shared&quot; repo for that issue.
</span><br>
<span class="quotelev1">&gt; i am not convinced you should grab my branch since all the changes i
</span><br>
<span class="quotelev1">&gt; made are will be no more valid.
</span><br>
<span class="quotelev1">&gt; anyway, feel free to fork a repo from my branch or the master and i will
</span><br>
<span class="quotelev1">&gt; work from here.
</span><br>
<p>Okay, I&#226;&#128;&#153;ll set something up tomorrow
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25621.php">http://www.open-mpi.org/community/lists/users/2014/10/25621.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25623.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25621.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25621.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
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

<?
$subject_val = "Re: [OMPI users] open mpi on blue waters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 18:20:41 2015" -->
<!-- isoreceived="20150325222041" -->
<!-- sent="Wed, 25 Mar 2015 15:20:37 -0700" -->
<!-- isosent="20150325222037" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi on blue waters" -->
<!-- id="132818C5-7963-454E-8BAB-1664030226A7_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="76DFD9CB-94AB-4432-98A5-C85CBE1D924D_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi on blue waters<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 18:20:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26535.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26533.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26533.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26535.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Mar 25, 2015, at 1:59 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 25 Mar 2015, at 21:25 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think I have this resolved,
</span><br>
<span class="quotelev2">&gt;&gt; though that I still suspect their is something wrong on that system. You shouldn&#226;&#128;&#153;t have some nodes running munge and others not running it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For completeness, it's not &quot;some&quot; nodes, its the MOM (service) nodes that run it, and the compute nodes don't.
</span><br>
<span class="quotelev1">&gt; I don't know munge well enough to judge whether it makes sense to have it there only and not on the compute nodes?
</span><br>
<p>Can&#226;&#128;&#153;t say for sure, but it seems odd. Munge is supposed to be there to authenticate connections. If you run mpirun on the service nodes, then you&#226;&#128;&#153;ll have daemons from the compute node connecting back to it. I should think you&#226;&#128;&#153;d want those connections authenticated in some fashion, but perhaps not?
<br>
<p>Might be worth pinging the admins just to get an explanation. I&#226;&#128;&#153;d be curious as to what they say.
<br>
<p><p>As things stand, the patch allows us to fall back to our internal authentication (just a simple text string) if the daemon doesn&#226;&#128;&#153;t have anything else it can use. So it should (hopefully) work.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if someone was experimenting and started munge on some of the nodes, and forgot to turn it off afterwards??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the answer to my request for clarification is along the lines of &quot;No!&quot;, then I can ask the admins whats up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, see if this fixes the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/497">https://github.com/open-mpi/ompi/pull/497</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will get back to you later how that works for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26533.php">http://www.open-mpi.org/community/lists/users/2015/03/26533.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26535.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26533.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>In reply to:</strong> <a href="26533.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26535.php">Gilles Gouaillardet: "Re: [OMPI users] open mpi on blue waters"</a>
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

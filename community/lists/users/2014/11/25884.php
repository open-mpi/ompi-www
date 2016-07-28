<?
$subject_val = "Re: [OMPI users] &quot;default-only MCA variable&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 27 09:14:15 2014" -->
<!-- isoreceived="20141127141415" -->
<!-- sent="Thu, 27 Nov 2014 09:14:00 -0500" -->
<!-- isosent="20141127141400" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;default-only MCA variable&amp;quot;?" -->
<!-- id="25DFDFFC-BC9C-4349-8DB2-82F26DE906A1_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1y1oul703rb8hqjkvl23p13n.1417095717342_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;default-only MCA variable&quot;?<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-27 09:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25885.php">Nick Papior Andersen: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25883.php">Gilles Gouaillardet: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>In reply to:</strong> <a href="25883.php">Gilles Gouaillardet: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25888.php">Dave Love: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>Reply:</strong> <a href="25888.php">Dave Love: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave, Gilles, list
<br>
<p>There is a problem with knem in OMPI 1.8.3.
<br>
A fix is supposed to come on OMPI 1.8.4.
<br>
Please, see this long thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/10/25511.php">http://www.open-mpi.org/community/lists/users/2014/10/25511.php</a>
<br>
<p>Note also, as documented in the thread, 
<br>
that in the OMPI 1.8 series &quot;vader&quot; replaces &quot;sm&quot; as the default intranode btl.
<br>
<p>Lessons I learnt the hard way ... :)
<br>
<p>I am using sm+knem in OMPI 1.6.5 - it works there - while 1.8.4 is in the works.
<br>
&nbsp;
<br>
Thanks,
<br>
Gus Correa
<br>
<p>On Nov 27, 2014, at 8:41 AM, Gilles Gouaillardet wrote:
<br>
<p><span class="quotelev1">&gt; It could be because configure did not find the knem headers and hence knem is not supported and hence this mca parameter is read-only
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My 0.2 us$ ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dave Love &lt;d.love_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
</span><br>
<span class="quotelev2">&gt;&gt; Why can't I set parameters like this (not the only one) with 1.8.3?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: A user-supplied value attempted to override the default-only MCA
</span><br>
<span class="quotelev2">&gt;&gt; variable named &quot;btl_sm_use_knem&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25882.php">http://www.open-mpi.org/community/lists/users/2014/11/25882.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25883.php">http://www.open-mpi.org/community/lists/users/2014/11/25883.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25885.php">Nick Papior Andersen: "Re: [OMPI users] Fwd: [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25883.php">Gilles Gouaillardet: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>In reply to:</strong> <a href="25883.php">Gilles Gouaillardet: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25888.php">Dave Love: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
<li><strong>Reply:</strong> <a href="25888.php">Dave Love: "Re: [OMPI users] &quot;default-only MCA variable&quot;?"</a>
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

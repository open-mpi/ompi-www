<?
$subject_val = "Re: [OMPI users] about MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 29 21:35:38 2010" -->
<!-- isoreceived="20100630013538" -->
<!-- sent="Wed, 30 Jun 2010 09:35:32 +0800" -->
<!-- isosent="20100630013532" -->
<!-- name="&#205;&#245;&#238;&#163;" -->
<!-- email="wangraying_at_[hidden]" -->
<!-- subject="Re: [OMPI users] about MPI" -->
<!-- id="AANLkTimZ9PTbfoPr-hJxTs7t0YPJvAT0eQGBXMqwfFvT_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="C26AB269-3D53-4A8C-AE6C-23A786E7B6CC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] about MPI<br>
<strong>From:</strong> &#205;&#245;&#238;&#163; (<em>wangraying_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-29 21:35:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13444.php">Paul Hilscher: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="13442.php">&#205;&#245;&#238;&#163;: "Re: [OMPI users] about MPI"</a>
<li><strong>In reply to:</strong> <a href="13439.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13445.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<li><strong>Reply:</strong> <a href="13445.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the feedback. More below:
<br>
<p>Is there any MPI implementions which meet the following requirements:
<br>
<p>1, it doesn't terminate the whole job when a node is dead?
<br>
<p>2, it allows the spare node to replace the dead node and take over the work
<br>
of the dead node?
<br>
<p>As far as I know, FT-MPI meets the two requirements, but it hasn't updated
<br>
since 2004. Open-mpi is said to combine serveral projects including FT-MPI,
<br>
but so far, it only provides checkpoinr/restart as a way of fault-tolerance.
<br>
<p><p>Best Regards
<br>
Rui
<br>
<p>2010/6/29 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Jun 29, 2010, at 3:44 AM, &#205;&#245;&#238;&#163; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1, suppose a MPI program involves several nodes, if one node dead, will
</span><br>
<span class="quotelev1">&gt; the program terminate?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI will terminate the whole job, yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2, Is there any possibility to extend or shrink the size of MPI
</span><br>
<span class="quotelev1">&gt; communicator size? If so, we can use spare node to replace the dead node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fault tolerance and resiliency is an active topic of research and
</span><br>
<span class="quotelev1">&gt; discussion in the MPI-3 forum.  But for the moment, most MPI implementations
</span><br>
<span class="quotelev1">&gt; -- including Open MPI -- have fairly draconian responses to the loss of a
</span><br>
<span class="quotelev1">&gt; process and/or node (i.e., kill the rest of the job).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13444.php">Paul Hilscher: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="13442.php">&#205;&#245;&#238;&#163;: "Re: [OMPI users] about MPI"</a>
<li><strong>In reply to:</strong> <a href="13439.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13445.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<li><strong>Reply:</strong> <a href="13445.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
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

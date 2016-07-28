<?
$subject_val = "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 21:06:20 2012" -->
<!-- isoreceived="20120926010620" -->
<!-- sent="Wed, 26 Sep 2012 09:06:09 +0800 (CST)" -->
<!-- isosent="20120926010609" -->
<!-- name="Richard " -->
<!-- email="codemonkee_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi test program &amp;quot;ring&amp;quot; failed: blocked at MPI_Send" -->
<!-- id="1b53f103.1339e.13a001c0fcc.Coremail.codemonkee_at_163.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="9A28D233-588E-4038-BE4D-4B1512E9D6F2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send<br>
<strong>From:</strong> Richard  (<em>codemonkee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 21:06:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20323.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="20321.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>In reply to:</strong> <a href="20304.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20327.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20327.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, 
<br>
<p><p>It was a typo in my last post, I did use &quot;--mca btl_tcp_if_exclude virbr0&quot; and it did not work.
<br>
<p>At 2012-09-25 21:10:24,&quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On Sep 25, 2012, at 2:56 PM, Richard wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks a lot ! 
</span><br>
<span class="quotelev2">&gt;&gt;  using &quot;--mca btl_if_exclude virbr0&quot; does not work, but you have pointed out the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ya, sorry -- see my second mail, it should be &quot;btl_tcp_if_exclude&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; problem, so i fixed it using &quot;--mca btl_tcp_if_include bond0&quot; because I know this is the high speed network interface I should use on each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Glad it works for you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If you're not using those interfaces (they might be related to Xen, or something like that?), you might want to disable them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20322/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20323.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="20321.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>In reply to:</strong> <a href="20304.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20327.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20327.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
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

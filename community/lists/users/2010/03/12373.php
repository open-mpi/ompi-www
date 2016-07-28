<?
$subject_val = "Re: [OMPI users] Problem in remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 12:41:17 2010" -->
<!-- isoreceived="20100317164117" -->
<!-- sent="Wed, 17 Mar 2010 09:41:08 -0700" -->
<!-- isosent="20100317164108" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in remote nodes" -->
<!-- id="6F7DF240-07BC-4F6C-B16F-50A34BE8A321_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3963.83.230.231.4.1268825970.squirrel_at_webmail.unavarra.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in remote nodes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 12:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12374.php">Jeff Squyres: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>Previous message:</strong> <a href="12372.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12369.php">uriz.49949_at_[hidden]: "[OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12375.php">Fernando Lemos: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12375.php">Fernando Lemos: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 17, 2010, at 4:39 AM, &lt;uriz.49949_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone I'm a new Open MPI user and I have just installed Open MPI in
</span><br>
<span class="quotelev1">&gt; a 6 nodes cluster with Scientific Linux. When I execute it in local it
</span><br>
<span class="quotelev1">&gt; works perfectly, but when I try to execute it on the remote nodes with the
</span><br>
<span class="quotelev1">&gt; --host  option it hangs and gives no message. I think that the problem
</span><br>
<span class="quotelev1">&gt; could be with the shared libraries but i'm not sure. In my opinion the
</span><br>
<span class="quotelev1">&gt; problem is not ssh because i can access to the nodes with no password
</span><br>
<p>You might want to check that Open MPI processes are actually running on the remote nodes -- check with ps if you see any &quot;orted&quot; or other MPI-related processes (e.g., your processes).
<br>
<p>Do you have any TCP firewall software running between the nodes?  If so, you'll need to disable it (at least for Open MPI jobs).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12374.php">Jeff Squyres: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>Previous message:</strong> <a href="12372.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12369.php">uriz.49949_at_[hidden]: "[OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12375.php">Fernando Lemos: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12375.php">Fernando Lemos: "Re: [OMPI users] Problem in remote nodes"</a>
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

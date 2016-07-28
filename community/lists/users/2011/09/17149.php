<?
$subject_val = "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  4 02:36:52 2011" -->
<!-- isoreceived="20110904063652" -->
<!-- sent="Sun, 04 Sep 2011 09:36:44 +0300" -->
<!-- isosent="20110904063644" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?" -->
<!-- id="4E631C7C.5000509_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABqvwjv-PqY0r3orOWs8ESyRxx2EBz9E2Sy8vHCo+TiDAyG7hg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-04 02:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17150.php">Andrew Senin: "Re: [OMPI users] Mellanox/Voltaire FCA support"</a>
<li><strong>Previous message:</strong> <a href="17148.php">Randolph Pullen: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17123.php">Michael Shuey: "[OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17251.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<li><strong>Reply:</strong> <a href="17251.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 30-Aug-11 4:50 PM, Michael Shuey wrote:
<br>
<span class="quotelev1">&gt; I'm using RoCE (or rather, attempting to) and need to select a
</span><br>
<span class="quotelev1">&gt; non-default GID to get my traffic properly classified.
</span><br>
<p>You probably saw it, but just making sure:
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
<br>
<p><span class="quotelev1">&gt; Both 1.4.4rc2
</span><br>
<span class="quotelev1">&gt; and 1.5.4 support the btl_openib_ipaddr_include option, but only 1.5.4
</span><br>
<span class="quotelev1">&gt; causes my traffic to use the proper GID and VLAN.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there something broken with ipaddr_include in 1.4.4rc2?
</span><br>
<p>Yes, there is.
<br>
It is already fixed, but RC2 doesn't have the fix yet.
<br>
It will be included in the next build.
<br>
<p>-- YK
<br>
<p><p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mike Shuey
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17150.php">Andrew Senin: "Re: [OMPI users] Mellanox/Voltaire FCA support"</a>
<li><strong>Previous message:</strong> <a href="17148.php">Randolph Pullen: "Re: [OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17123.php">Michael Shuey: "[OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17251.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<li><strong>Reply:</strong> <a href="17251.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
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

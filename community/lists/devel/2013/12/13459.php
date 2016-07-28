<?
$subject_val = "Re: [OMPI devel] Default mapping / binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 17 18:27:24 2013" -->
<!-- isoreceived="20131217232724" -->
<!-- sent="Tue, 17 Dec 2013 15:27:20 -0800" -->
<!-- isosent="20131217232720" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Default mapping / binding" -->
<!-- id="DCF4440B-47D1-423D-B9BB-4F41A1C893CD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FA2058F2-C6F6-47E4-98BE-C493AB43C1F7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Default mapping / binding<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-17 18:27:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13460.php">Ralph Castain: "[OMPI devel] v1.7.4rc1 available for test"</a>
<li><strong>Previous message:</strong> <a href="13458.php">Jeff Squyres (jsquyres): "[OMPI devel] Default mapping / binding"</a>
<li><strong>In reply to:</strong> <a href="13458.php">Jeff Squyres (jsquyres): "[OMPI devel] Default mapping / binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So to be clear:
<br>
<p>if nothing is specified, we map-by socket and rank-by slot
<br>
<p>if map-by &lt;obj&gt; is specified, we will also rank-by &lt;obj&gt; as that seems to be the user expectation (based on feedback on the user/devel lists)
<br>
<p><p>On Dec 17, 2013, at 2:19 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I actually asked Ralph to make one more change.  The default MCW rank ordering was to match the mapping.  So in the np&gt;2 case, on a 2 socket system, we'd order like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:01121] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:01121] MCW rank 1 bound to socket 1[core 8[hwt 0-1]]: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:01121] MCW rank 2 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:01121] MCW rank 3 bound to socket 1[core 9[hwt 0-1]]: [../../../../../../../..][../BB/../../../../../..]
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think in this case, we want to order MCW 0,1 on the same socket, and MCW 2,3 on the other socket (vs. MCW 0,2 on one socket and MCW 1,3 on the other socket).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (of course, this is all *by default*, meaning that you can change it with mpirun CLI options to do whatever you want)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Speak now if you disagree...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13460.php">Ralph Castain: "[OMPI devel] v1.7.4rc1 available for test"</a>
<li><strong>Previous message:</strong> <a href="13458.php">Jeff Squyres (jsquyres): "[OMPI devel] Default mapping / binding"</a>
<li><strong>In reply to:</strong> <a href="13458.php">Jeff Squyres (jsquyres): "[OMPI devel] Default mapping / binding"</a>
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

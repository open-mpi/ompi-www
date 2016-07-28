<?
$subject_val = "Re: [OMPI users] Debugging Runtime/Ethernet Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 20:54:18 2013" -->
<!-- isoreceived="20130921005418" -->
<!-- sent="Sat, 21 Sep 2013 00:54:16 +0000" -->
<!-- isosent="20130921005416" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging Runtime/Ethernet Problems" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8BEAF2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="523C7F31.7030804_at_byu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging Runtime/Ethernet Problems<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 20:54:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22706.php">Siegmar Gross: "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="22704.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>In reply to:</strong> <a href="22703.php">Lloyd Brown: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2013, at 1:00 PM, Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It is interesting to me, though, that I need to explicitly exclude
</span><br>
<span class="quotelev1">&gt; lo/127.0.0.1 in this case, but when I'm on an Ethernet-only node, and I
</span><br>
<span class="quotelev1">&gt; just do the plain &quot;mpirun ./appname&quot;, I don't have to exclude anything,
</span><br>
<span class="quotelev1">&gt; and it figures out to use em1, and not lo.
</span><br>
<p><p>This is probably a case of Open MPI being &quot;too helpful&quot; / optimizing for the common case: ignoring 127.0.0.1/8.
<br>
<p>Specifically:
<br>
<p>- btl_tcp_if_include defaults to empty
<br>
- btl_tcp_if_exclude defaults to 127.0.0.1/8
<br>
<p>Meaning: if you specify nothing, you'll exclude localhost.  If you specify an include, it takes precedence over the default exclude.  If you specify an exclude, you need to *also* ignore localhost.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22706.php">Siegmar Gross: "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="22704.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>In reply to:</strong> <a href="22703.php">Lloyd Brown: "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
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

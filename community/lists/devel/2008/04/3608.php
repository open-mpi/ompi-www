<?
$subject_val = "Re: [OMPI devel] --disable-ipv6 broken on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 06:54:57 2008" -->
<!-- isoreceived="20080402105457" -->
<!-- sent="Wed, 2 Apr 2008 12:54:40 +0200" -->
<!-- isosent="20080402105440" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --disable-ipv6 broken on trunk" -->
<!-- id="20080402105440.GG15077_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3419D59C-6957-4C7D-8AEF-09C94FDCA5FE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] --disable-ipv6 broken on trunk<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 06:54:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3609.php">Josh Hursey: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3607.php">Josh Hursey: "[OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="3607.php">Josh Hursey: "[OMPI devel] --disable-ipv6 broken on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3609.php">Josh Hursey: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>Reply:</strong> <a href="3609.php">Josh Hursey: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 02, 2008 at 06:36:02AM -0400, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; It seems that builds configured with '--disable-ipv6' are broken on  
</span><br>
<span class="quotelev1">&gt; the trunk. I suspect r18055 for this break since the tarball from two  
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt; oob_tcp.c: In function `mca_oob_tcp_fini':
</span><br>
<span class="quotelev1">&gt; oob_tcp.c:1364: error: structure has no member named `tcp6_listen_sd'
</span><br>
<span class="quotelev1">&gt; oob_tcp.c:1365: error: structure has no member named `tcp6_recv_event'
</span><br>
<span class="quotelev1">&gt; ---------------------------
</span><br>
<span class="quotelev1">&gt; Can someone take a look at this?
</span><br>
<p>Fixed in r18071. Thanks for observation.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3609.php">Josh Hursey: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="3607.php">Josh Hursey: "[OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="3607.php">Josh Hursey: "[OMPI devel] --disable-ipv6 broken on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3609.php">Josh Hursey: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>Reply:</strong> <a href="3609.php">Josh Hursey: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
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

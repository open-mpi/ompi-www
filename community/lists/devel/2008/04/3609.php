<?
$subject_val = "Re: [OMPI devel] --disable-ipv6 broken on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 07:49:22 2008" -->
<!-- isoreceived="20080402114922" -->
<!-- sent="Wed, 2 Apr 2008 07:49:07 -0400" -->
<!-- isosent="20080402114907" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --disable-ipv6 broken on trunk" -->
<!-- id="0118D06C-210B-48B7-8DFD-F57DBA2C3A1A_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080402105440.GG15077_at_ltw.loris.tv" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 07:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3610.php">Bernhard Fischer: "[OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<li><strong>Previous message:</strong> <a href="3608.php">Adrian Knoth: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="3608.php">Adrian Knoth: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great. Thanks for the fix.
<br>
<p>On Apr 2, 2008, at 6:54 AM, Adrian Knoth wrote:
<br>
<span class="quotelev1">&gt; On Wed, Apr 02, 2008 at 06:36:02AM -0400, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that builds configured with '--disable-ipv6' are broken on
</span><br>
<span class="quotelev2">&gt;&gt; the trunk. I suspect r18055 for this break since the tarball from two
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp.c: In function `mca_oob_tcp_fini':
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp.c:1364: error: structure has no member named `tcp6_listen_sd'
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp.c:1365: error: structure has no member named  
</span><br>
<span class="quotelev2">&gt;&gt; `tcp6_recv_event'
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Can someone take a look at this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixed in r18071. Thanks for observation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
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
<li><strong>Next message:</strong> <a href="3610.php">Bernhard Fischer: "[OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<li><strong>Previous message:</strong> <a href="3608.php">Adrian Knoth: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="3608.php">Adrian Knoth: "Re: [OMPI devel] --disable-ipv6 broken on trunk"</a>
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

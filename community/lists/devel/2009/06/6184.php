<?
$subject_val = "Re: [OMPI devel] Multi-rail on openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 09:52:48 2009" -->
<!-- isoreceived="20090605135248" -->
<!-- sent="Fri, 5 Jun 2009 09:52:39 -0400" -->
<!-- isosent="20090605135239" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-rail on openib" -->
<!-- id="CD38F8F0-FB76-4C32-B232-3974B2973B4F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A292215.20106_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multi-rail on openib<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-05 09:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6185.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6183.php">Mouhamed Gueye: "[OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6183.php">Mouhamed Gueye: "[OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6185.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6185.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See this FAQ entry for a description:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup">http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup</a>
<br>
<p>Right now, there's no way to force a particular connection pattern on  
<br>
the openib btl at run-time.  The startup sequence has gotten  
<br>
sufficiently complicated / muddied over the years that it would be  
<br>
quite difficult to do so.  Pasha is in the middle of revamping parts  
<br>
of the openib startup (see <a href="http://bitbucket.org/pasha/ompi-ofacm/">http://bitbucket.org/pasha/ompi-ofacm/</a>); it  
<br>
*may* be desirable to fully clean up the full openib btl startup  
<br>
sequence when he's all finished.
<br>
<p><p>On Jun 5, 2009, at 9:48 AM, Mouhamed Gueye wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on  multi-rail IB and I was wondering how connections are
</span><br>
<span class="quotelev1">&gt; established between ports.  I have two hosts, each with 2 ports on a
</span><br>
<span class="quotelev1">&gt; same IB card, connected to the same switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is : how ports are connected between them ? Is there a  
</span><br>
<span class="quotelev1">&gt; queue
</span><br>
<span class="quotelev1">&gt; pair between all ports or only between ports of the same number (for
</span><br>
<span class="quotelev1">&gt; example, Host A =&gt; port 1 &lt;===&gt; port 1 &lt;= Host B and Host A =&gt; port 2
</span><br>
<span class="quotelev1">&gt; &lt;===&gt; port 2 &lt;= Host B or maybe Host A =&gt; port 1 &lt;===&gt; port 2 &lt;=  
</span><br>
<span class="quotelev1">&gt; Host B
</span><br>
<span class="quotelev1">&gt; and Host A =&gt; port 2 &lt;===&gt; port 1 &lt;= Host B) ? Is it possible to force
</span><br>
<span class="quotelev1">&gt; the connection scheme on the openib btl ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mouhamed
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6185.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6183.php">Mouhamed Gueye: "[OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6183.php">Mouhamed Gueye: "[OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6185.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6185.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
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

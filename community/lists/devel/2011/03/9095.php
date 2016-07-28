<?
$subject_val = "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 21:20:55 2011" -->
<!-- isoreceived="20110317012055" -->
<!-- sent="Wed, 16 Mar 2011 19:20:45 -0600" -->
<!-- isosent="20110317012045" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug btl:tcp with grpcomm:hier" -->
<!-- id="289F85A5-6249-47ED-B5F0-5CA33FF47067_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="888C0F8E-511D-42B0-A02C-A384D17CFBBE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug btl:tcp with grpcomm:hier<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 21:20:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9096.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9094.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>In reply to:</strong> <a href="9094.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9096.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Reply:</strong> <a href="9096.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe I see the problem - and why it wouldn't show up for IB. It looks like the hier module passes an incorrect flag to the modex unpack function, which causes that function to place the modex values as attributes assigned to the node instead of a process, rather than placing the values into the modex database. So when you look up a value, you get a single value for the entire node.
<br>
<p>Works for IB because the interface info is at the node level. Doesn't work for TCP because the &quot;interface&quot; info is at the proc level.
<br>
<p>Since it was only tested on IB before, this didn't show up. Should be easy to fix.
<br>
<p>On Mar 16, 2011, at 6:15 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 16, 2011, at 5:37 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just checked and IB does work correctly. But then I remembered that IB is different, the connection are peer based, so they don't happens during the modex exchange. The data is exchanged over RML messages, but outside the modex.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not quite.  The openib BTL does use the modex to send around connection information.  The actual connections are made lazily -- just like the TCP BTL -- but the OOB CPC (i.e., the default connection mode in the openib BTL) uses RML to do the 2/3 way handshake.  That's all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the point here is: the openib BTL does rely on the modex.
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
<li><strong>Next message:</strong> <a href="9096.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9094.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>In reply to:</strong> <a href="9094.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9096.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Reply:</strong> <a href="9096.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
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

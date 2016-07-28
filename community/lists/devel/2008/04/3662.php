<?
$subject_val = "Re: [OMPI devel] Affect of compression on modex and launch messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 14:36:31 2008" -->
<!-- isoreceived="20080404183631" -->
<!-- sent="Fri, 4 Apr 2008 14:36:12 -0400" -->
<!-- isosent="20080404183612" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Affect of compression on modex and launch messages" -->
<!-- id="66E9A72A-26BC-4516-9507-221105867025_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adak5jdtqvy.fsf_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Affect of compression on modex and launch messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 14:36:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3663.php">Edgar Gabriel: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3661.php">Roland Dreier: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3661.php">Roland Dreier: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3663.php">Edgar Gabriel: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
LZO looks cool, but it's unfortunately GPL (Open MPI is BSD).  Bummer.
<br>
<p>On Apr 4, 2008, at 2:29 PM, Roland Dreier wrote:
<br>
<span class="quotelev2">&gt;&gt; Based on some discussion on this list, I integrated a zlib-based  
</span><br>
<span class="quotelev2">&gt;&gt; compression
</span><br>
<span class="quotelev2">&gt;&gt; ability into ORTE. Since the launch message sent to the orteds and  
</span><br>
<span class="quotelev2">&gt;&gt; the modex
</span><br>
<span class="quotelev2">&gt;&gt; between the application procs are the only places where messages of  
</span><br>
<span class="quotelev2">&gt;&gt; any size
</span><br>
<span class="quotelev2">&gt;&gt; are sent, I only implemented compression for those two exchanges.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have found virtually no benefit to the compression. Essentially,  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; overhead consumed in compression/decompressing the messages pretty  
</span><br>
<span class="quotelev2">&gt;&gt; much
</span><br>
<span class="quotelev2">&gt;&gt; balances out any transmission time differences. However, I could  
</span><br>
<span class="quotelev2">&gt;&gt; only test
</span><br>
<span class="quotelev2">&gt;&gt; this for 64 nodes, 8ppn, so perhaps there is some benefit at larger  
</span><br>
<span class="quotelev2">&gt;&gt; sizes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A faster compression library might change the balance... eg LZO
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.oberhumer.com/opensource/lzo">http://www.oberhumer.com/opensource/lzo</a>) might be worth a look  
</span><br>
<span class="quotelev1">&gt; although
</span><br>
<span class="quotelev1">&gt; I'm not an expert on all the compression libraries that are out there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - R.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3663.php">Edgar Gabriel: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3661.php">Roland Dreier: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3661.php">Roland Dreier: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3663.php">Edgar Gabriel: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
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

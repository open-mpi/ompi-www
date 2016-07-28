<?
$subject_val = "Re: [OMPI devel] require newer autoconf?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 21:06:07 2009" -->
<!-- isoreceived="20090318010607" -->
<!-- sent="Tue, 17 Mar 2009 19:06:01 -0600" -->
<!-- isosent="20090318010601" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] require newer autoconf?" -->
<!-- id="6B255337-0048-4C8A-9E93-DC7F4C051133_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AA06AFF6-02B1-45A4-B1F6-FD06D473AE62_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] require newer autoconf?<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 21:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI devel] require newer autoconf?"</a>
<li><strong>Previous message:</strong> <a href="5654.php">Jeff Squyres: "[OMPI devel] require newer autoconf?"</a>
<li><strong>In reply to:</strong> <a href="5654.php">Jeff Squyres: "[OMPI devel] require newer autoconf?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI devel] require newer autoconf?"</a>
<li><strong>Reply:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI devel] require newer autoconf?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd rather not.  I have a couple of platforms with 2.59 installed, but  
<br>
not 2.60+.  I really don't want to have to install my own autotools  
<br>
because of some bug that doesn't affect me.
<br>
<p>I don't, however, have a problem with forcing users to upgrade in  
<br>
order to get support for build-related issues.  The version of  
<br>
Autoconf used is in config.log, so it's not hard to find which version  
<br>
the user actually used.
<br>
<p>Brian
<br>
<p><p>On Mar 17, 2009, at 7:00 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Per this thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/users/2009/03/8402.php">http://www.open-mpi.org/community/lists/users/2009/03/8402.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It took a *loooong* time to figure out that an outdated Autoconf  
</span><br>
<span class="quotelev1">&gt; install was the culprit of the &quot;restrict&quot; mess.  The issue is that  
</span><br>
<span class="quotelev1">&gt; somewhere between v2.61 and v2.63, Autoconf changed the order of  
</span><br>
<span class="quotelev1">&gt; looking for &quot;restrict&quot;-like keywords -- AC 2.63 has the &quot;good&quot;  
</span><br>
<span class="quotelev1">&gt; order; AC 2.61 has the &quot;bad&quot; order (hence, PGI worked for me with AC  
</span><br>
<span class="quotelev1">&gt; 2.63, but barfed for Mostyn with AC 2.61).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should we have our autogen.sh force the use of AC 2.63 and above?   
</span><br>
<span class="quotelev1">&gt; (currently, it forces 2.59 and above)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI devel] require newer autoconf?"</a>
<li><strong>Previous message:</strong> <a href="5654.php">Jeff Squyres: "[OMPI devel] require newer autoconf?"</a>
<li><strong>In reply to:</strong> <a href="5654.php">Jeff Squyres: "[OMPI devel] require newer autoconf?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI devel] require newer autoconf?"</a>
<li><strong>Reply:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI devel] require newer autoconf?"</a>
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

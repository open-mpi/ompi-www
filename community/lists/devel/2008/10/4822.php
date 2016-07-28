<?
$subject_val = "Re: [OMPI devel] snprintf vs. sprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 09:21:24 2008" -->
<!-- isoreceived="20081029132124" -->
<!-- sent="Wed, 29 Oct 2008 14:21:19 +0100" -->
<!-- isosent="20081029132119" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] snprintf vs. sprintf" -->
<!-- id="1225286479.30103.50.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AE8AF0A1-1E43-4565-89E5-5EFD5792DDEA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] snprintf vs. sprintf<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 09:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4823.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4821.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4821.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4823.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4823.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mi, 2008-10-29 at 08:43 -0400, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 29, 2008, at 8:14 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem should be fixed in the trunk. VampirTrace also comes now  
</span><br>
<span class="quotelev2">&gt; &gt; with an own
</span><br>
<span class="quotelev2">&gt; &gt; implementation of 'snprintf'. More precisely, the corresponding  
</span><br>
<span class="quotelev2">&gt; &gt; sources are based on
</span><br>
<span class="quotelev2">&gt; &gt; 'opal/util/printf.&lt;c|h&gt;' and located in 'ompi/contrib/vt/vt/util/ 
</span><br>
<span class="quotelev2">&gt; &gt; util.c'.
</span><br>
<span class="quotelev2">&gt; &gt; Concerning this matter, I want to know, whether there is a copyright/ 
</span><br>
<span class="quotelev2">&gt; &gt; license problem.
</span><br>
<span class="quotelev2">&gt; &gt; Should our 'util.c' also contain your copyright headlines from  
</span><br>
<span class="quotelev2">&gt; &gt; 'printf.c', for instance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IANAL, but I believe that that is correct.  Check the terms listed in  
</span><br>
<span class="quotelev1">&gt; OMPI's LICENSE file.  Note that we haven't done the final copyright  
</span><br>
<span class="quotelev1">&gt; update in the LICENSE file for v1.3 yet (it's on the to-do list...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Speaking of which, what copyright line(s) should we use for U.  
</span><br>
<span class="quotelev1">&gt; Dresden?  I see these in ompi/contrib/vt/vt/COPYING:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Copyright (c) 2005-2008, ZIH, TU Dresden, Federal Republic of Germany
</span><br>
<span class="quotelev1">&gt; Copyright (c) 1998-2005, Forschungszentrum Juelich GmbH, Federal
</span><br>
<span class="quotelev1">&gt; Republic of Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are these right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, you can use these lines.
<br>
<p><p><span class="quotelev2">&gt; &gt; BTW: We are rather sure, that we found a memory leak in the function  
</span><br>
<span class="quotelev2">&gt; &gt; 'opal_vsnprintf()'.
</span><br>
<span class="quotelev2">&gt; &gt; It seems, that there is a 'free' missing at the and of this  
</span><br>
<span class="quotelev2">&gt; &gt; function. Can you confirm?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I believe that you are correct.  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you guys want to add it to the file, or do you want me to?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I've fixed this in the trunk. Can you move this change to the 1.3-branch
<br>
or should
<br>
I go the CMRs way?
<br>
<p><p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4822/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4823.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4821.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4821.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4823.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4823.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
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

<?
$subject_val = "Re: [OMPI devel] snprintf vs. sprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 08:43:35 2008" -->
<!-- isoreceived="20081029124335" -->
<!-- sent="Wed, 29 Oct 2008 08:43:29 -0400" -->
<!-- isosent="20081029124329" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] snprintf vs. sprintf" -->
<!-- id="AE8AF0A1-1E43-4565-89E5-5EFD5792DDEA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1225282452.30103.39.camel_at_ricolap" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 08:43:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4822.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4820.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4820.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4822.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4822.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4826.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 29, 2008, at 8:14 AM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; The problem should be fixed in the trunk. VampirTrace also comes now  
</span><br>
<span class="quotelev1">&gt; with an own
</span><br>
<span class="quotelev1">&gt; implementation of 'snprintf'. More precisely, the corresponding  
</span><br>
<span class="quotelev1">&gt; sources are based on
</span><br>
<span class="quotelev1">&gt; 'opal/util/printf.&lt;c|h&gt;' and located in 'ompi/contrib/vt/vt/util/ 
</span><br>
<span class="quotelev1">&gt; util.c'.
</span><br>
<span class="quotelev1">&gt; Concerning this matter, I want to know, whether there is a copyright/ 
</span><br>
<span class="quotelev1">&gt; license problem.
</span><br>
<span class="quotelev1">&gt; Should our 'util.c' also contain your copyright headlines from  
</span><br>
<span class="quotelev1">&gt; 'printf.c', for instance?
</span><br>
<p>IANAL, but I believe that that is correct.  Check the terms listed in  
<br>
OMPI's LICENSE file.  Note that we haven't done the final copyright  
<br>
update in the LICENSE file for v1.3 yet (it's on the to-do list...).
<br>
<p>Speaking of which, what copyright line(s) should we use for U.  
<br>
Dresden?  I see these in ompi/contrib/vt/vt/COPYING:
<br>
<p>Copyright (c) 2005-2008, ZIH, TU Dresden, Federal Republic of Germany
<br>
Copyright (c) 1998-2005, Forschungszentrum Juelich GmbH, Federal
<br>
Republic of Germany
<br>
<p>Are these right?
<br>
<p><span class="quotelev1">&gt; BTW: We are rather sure, that we found a memory leak in the function  
</span><br>
<span class="quotelev1">&gt; 'opal_vsnprintf()'.
</span><br>
<span class="quotelev1">&gt; It seems, that there is a 'free' missing at the and of this  
</span><br>
<span class="quotelev1">&gt; function. Can you confirm?
</span><br>
<p>Yes, I believe that you are correct.  Thanks!
<br>
<p>Do you guys want to add it to the file, or do you want me to?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4822.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4820.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4820.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4822.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4822.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4826.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
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

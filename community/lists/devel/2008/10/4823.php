<?
$subject_val = "Re: [OMPI devel] snprintf vs. sprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 09:24:29 2008" -->
<!-- isoreceived="20081029132429" -->
<!-- sent="Wed, 29 Oct 2008 09:24:23 -0400" -->
<!-- isosent="20081029132423" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] snprintf vs. sprintf" -->
<!-- id="111C1A81-0949-4A0F-BCE6-537D9DE16E0D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1225286479.30103.50.camel_at_ricolap" -->
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
<strong>Date:</strong> 2008-10-29 09:24:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4824.php">George Bosilca: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Previous message:</strong> <a href="4822.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4822.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4826.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
CMR, please.  You can say I reviewed it.
<br>
<p>Thanks!
<br>
<p><p>On Oct 29, 2008, at 9:21 AM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; On Mi, 2008-10-29 at 08:43 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 29, 2008, at 8:14 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The problem should be fixed in the trunk. VampirTrace also comes  
</span><br>
<span class="quotelev2">&gt;&gt; now
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with an own
</span><br>
<span class="quotelev3">&gt;&gt; &gt; implementation of 'snprintf'. More precisely, the corresponding
</span><br>
<span class="quotelev3">&gt;&gt; &gt; sources are based on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 'opal/util/printf.&lt;c|h&gt;' and located in 'ompi/contrib/vt/vt/util/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; util.c'.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Concerning this matter, I want to know, whether there is a  
</span><br>
<span class="quotelev2">&gt;&gt; copyright/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; license problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Should our 'util.c' also contain your copyright headlines from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 'printf.c', for instance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IANAL, but I believe that that is correct.  Check the terms listed in
</span><br>
<span class="quotelev2">&gt;&gt; OMPI's LICENSE file.  Note that we haven't done the final copyright
</span><br>
<span class="quotelev2">&gt;&gt; update in the LICENSE file for v1.3 yet (it's on the to-do list...).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Speaking of which, what copyright line(s) should we use for U.
</span><br>
<span class="quotelev2">&gt;&gt; Dresden?  I see these in ompi/contrib/vt/vt/COPYING:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (c) 2005-2008, ZIH, TU Dresden, Federal Republic of Germany
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (c) 1998-2005, Forschungszentrum Juelich GmbH, Federal
</span><br>
<span class="quotelev2">&gt;&gt; Republic of Germany
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are these right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes, you can use these lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; BTW: We are rather sure, that we found a memory leak in the  
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 'opal_vsnprintf()'.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It seems, that there is a 'free' missing at the and of this
</span><br>
<span class="quotelev3">&gt;&gt; &gt; function. Can you confirm?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I believe that you are correct.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you guys want to add it to the file, or do you want me to?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I've fixed this in the trunk. Can you move this change to the 1.3- 
</span><br>
<span class="quotelev1">&gt; branch or should
</span><br>
<span class="quotelev1">&gt; I go the CMRs way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Matthias Jurenz,
</span><br>
<span class="quotelev1">&gt; Center for Information Services and
</span><br>
<span class="quotelev1">&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev1">&gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev1">&gt; phone +49-351-463-31945, fax +49-351-463-37773
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
<li><strong>Next message:</strong> <a href="4824.php">George Bosilca: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Previous message:</strong> <a href="4822.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4822.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4826.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
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

<?
$subject_val = "Re: [OMPI devel] snprintf vs. sprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 12:25:51 2008" -->
<!-- isoreceived="20081029162551" -->
<!-- sent="Wed, 29 Oct 2008 12:25:45 -0400" -->
<!-- isosent="20081029162545" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] snprintf vs. sprintf" -->
<!-- id="4979075B-29EC-41B9-8CCA-3FBA9FF63B99_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9EA6DB2F-64F8-467E-8A51-EA5DA6D2235E_at_cisco.com" -->
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
<strong>Date:</strong> 2008-10-29 12:25:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4829.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4827.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4827.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4829.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4829.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, don't forget to CMR all your VT changes to v1.3.
<br>
<p><p>On Oct 29, 2008, at 12:23 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Done (for my upcoming commit with this stuff).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 29, 2008, at 12:05 PM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mi, 2008-10-29 at 08:43 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 29, 2008, at 8:14 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The problem should be fixed in the trunk. VampirTrace also comes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; with an own
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; implementation of 'snprintf'. More precisely, the corresponding
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; sources are based on
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 'opal/util/printf.&lt;c|h&gt;' and located in 'ompi/contrib/vt/vt/util/
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; util.c'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Concerning this matter, I want to know, whether there is a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copyright/
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; license problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Should our 'util.c' also contain your copyright headlines from
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 'printf.c', for instance?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IANAL, but I believe that that is correct.  Check the terms listed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI's LICENSE file.  Note that we haven't done the final copyright
</span><br>
<span class="quotelev3">&gt;&gt;&gt; update in the LICENSE file for v1.3 yet (it's on the to-do list...).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Speaking of which, what copyright line(s) should we use for U.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dresden?  I see these in ompi/contrib/vt/vt/COPYING:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (c) 2005-2008, ZIH, TU Dresden, Federal Republic of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Germany
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (c) 1998-2005, Forschungszentrum Juelich GmbH, Federal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Republic of Germany
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are these right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My apologies to you... that's not right :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please replace the bottom Copyright line
</span><br>
<span class="quotelev2">&gt;&gt;    &quot;Copyright (c) 1998-2005, Forschungszentrum Juelich GmbH,  
</span><br>
<span class="quotelev2">&gt;&gt; Federal Republic of Germany&quot;
</span><br>
<span class="quotelev2">&gt;&gt; by
</span><br>
<span class="quotelev2">&gt;&gt;    &quot;Copyright (c) 1998-2005, Forschungszentrum Juelich, Juelich  
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Centre,
</span><br>
<span class="quotelev2">&gt;&gt;     Federal Republic of Germany&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; BTW: We are rather sure, that we found a memory leak in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 'opal_vsnprintf()'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; It seems, that there is a 'free' missing at the and of this
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; function. Can you confirm?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I believe that you are correct.  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you guys want to add it to the file, or do you want me to?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Matthias Jurenz,
</span><br>
<span class="quotelev2">&gt;&gt; Center for Information Services and
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev2">&gt;&gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev2">&gt;&gt; phone +49-351-463-31945, fax +49-351-463-37773
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4829.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4827.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4827.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4829.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4829.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
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

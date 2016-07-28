<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 12:41:20 2007" -->
<!-- isoreceived="20070727164120" -->
<!-- sent="Fri, 27 Jul 2007 12:40:50 -0400" -->
<!-- isosent="20070727164050" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS" -->
<!-- id="A47F6631-1441-4FC0-B34F-4AB318047728_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04FAE26D-97D6-4081-BD40-F096B4871B17_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 12:40:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2036.php">Mohamad Chaarawi: "[OMPI devel] FW:  [RFC] Sparse group implementation]"</a>
<li><strong>Previous message:</strong> <a href="2034.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="1958.php">Jeff Squyres: "Re: [OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's been finalized: Coverity has formally joined the Open MPI  
<br>
Project as a Partner (OMPI web page updates will come soon).  They  
<br>
will be running the Open MPI source code base through their tools on  
<br>
a regular basis and making the results available to Members of the  
<br>
Open MPI project.
<br>
<p>The scans will initially be the v1.2 branch and trunk nightly  
<br>
tarballs, and will likely start soon (possibly as early as next  
<br>
week).  We'll be working with Coverity to fully exploit the use of  
<br>
their tools as our familiarity/expertise grows.
<br>
<p>A glance through a preliminary Coverity scan of the OMPI v1.2 code  
<br>
base shows three main kinds of problems:
<br>
<p>1. corner cases not handled properly when errors occur at run time.   
<br>
It's unsurprising that these cases are buggy since these run-time  
<br>
errors probably have not occurred much in practice.
<br>
<p>2. some false positives (or perhaps I'm just not understanding the  
<br>
results...?).
<br>
<p>3. genuine problems/bugs.
<br>
<p>I think the use of these tools will be a great help to hardening the  
<br>
Open MPI code base.
<br>
<p>Woo hoo!
<br>
<p><p>On Jul 19, 2007, at 9:10 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Yes, we have (someone else brought it to our attention a few months
</span><br>
<span class="quotelev1">&gt; ago).  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully we'll have more news on this front in the not-distant  
</span><br>
<span class="quotelev1">&gt; future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 19, 2007, at 9:07 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have any of you ever consider asking OpenMPI being included here, as
</span><br>
<span class="quotelev2">&gt;&gt; it is an open source project?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://scan.coverity.com/index.html">http://scan.coverity.com/index.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From many sources (mainly related to Python), it seems the results
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt; impressive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev2">&gt;&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev2">&gt;&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev2">&gt;&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev2">&gt;&gt; Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2036.php">Mohamad Chaarawi: "[OMPI devel] FW:  [RFC] Sparse group implementation]"</a>
<li><strong>Previous message:</strong> <a href="2034.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="1958.php">Jeff Squyres: "Re: [OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS"</a>
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

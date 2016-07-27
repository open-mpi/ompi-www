<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 17:52:53 2013" -->
<!-- isoreceived="20130205225253" -->
<!-- sent="Tue, 05 Feb 2013 16:52:49 -0600" -->
<!-- isosent="20130205225249" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="51118D41.3000607_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17QaADzzmy1ALT_V6590nC3i38gCHbkdTrbkZT0A55i6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] libpci: GPL<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 17:52:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3493.php">Pavan Balaji: "Re: [hwloc-devel] [mpich-core]  libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3491.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3490.php">Paul Hargrove: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3493.php">Pavan Balaji: "Re: [hwloc-devel] [mpich-core]  libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3493.php">Pavan Balaji: "Re: [hwloc-devel] [mpich-core]  libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3495.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3497.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cc'ed a bunch of mpich folks.
<br>
<p>Dave forwarded this link, which has some good information:
<br>
<p><a href="http://en.wikipedia.org/wiki/GNU_General_Public_License#Point_of_view:_dynamic_and_static_linking_violate_GPL">http://en.wikipedia.org/wiki/GNU_General_Public_License#Point_of_view:_dynamic_and_static_linking_violate_GPL</a>
<br>
<p>If libpci was disabled by default, would hwloc still come under the same
<br>
GPL issue?
<br>
<p>I checked libnuma, which seems to be LGPL (phew!), but didn't look at
<br>
the remaining libraries hwloc uses.
<br>
<p>&nbsp;-- Pavan
<br>
<p>On 02/05/2013 04:09 PM US Central Time, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; IANAL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that it would be possible to say something like:
</span><br>
<span class="quotelev1">&gt;    While hwloc is BSD licensed, it may potentially link to libraries
</span><br>
<span class="quotelev1">&gt; with more restrictive license terms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, that is more or less true of ANY software.
</span><br>
<span class="quotelev1">&gt; For instance, if I compile some BSD licensed software on AIX with
</span><br>
<span class="quotelev1">&gt; '-static' then IBM's libc ends up in my binary.
</span><br>
<span class="quotelev1">&gt; I am not saying that IBM's libc poses any specific issues, just using it
</span><br>
<span class="quotelev1">&gt; as an example.
</span><br>
<span class="quotelev1">&gt; So, this is in no way a unique situation for hwloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that if hwloc were to explicitly list libpci then we start a
</span><br>
<span class="quotelev1">&gt; dangerous precedent under which users may expect us
</span><br>
<span class="quotelev1">&gt; to continuously &quot;audit&quot; the libs used on various systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 5, 2013 at 1:50 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     It was just pointed out to me that libpci is licensed under the GPL
</span><br>
<span class="quotelev1">&gt;     (not the LGPL).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hence, even though hwloc is BSD, if it links to libpci.*, it's tainted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     IANAL, this is not legal advice, yadda yadda yadda.  But does this
</span><br>
<span class="quotelev1">&gt;     jive with other peoples' understanding?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     This has caused a problem for an unnamed vendor who wanted to ship a
</span><br>
<span class="quotelev1">&gt;     binary tool that linked against libhwloc (that linked against
</span><br>
<span class="quotelev1">&gt;     libpci).  Yoinks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The complaint to me was that hwloc needs to be clearer about this in
</span><br>
<span class="quotelev1">&gt;     its documentation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Does this sound right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-devel_at_[hidden] &lt;mailto:hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3493.php">Pavan Balaji: "Re: [hwloc-devel] [mpich-core]  libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3491.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3490.php">Paul Hargrove: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3493.php">Pavan Balaji: "Re: [hwloc-devel] [mpich-core]  libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3493.php">Pavan Balaji: "Re: [hwloc-devel] [mpich-core]  libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3495.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3497.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
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

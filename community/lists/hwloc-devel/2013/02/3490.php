<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 17:09:24 2013" -->
<!-- isoreceived="20130205220924" -->
<!-- sent="Tue, 5 Feb 2013 14:09:18 -0800" -->
<!-- isosent="20130205220918" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="CAAvDA17QaADzzmy1ALT_V6590nC3i38gCHbkdTrbkZT0A55i6A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC81FA_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 17:09:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3491.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3489.php">Jeff Squyres (jsquyres): "[hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3489.php">Jeff Squyres (jsquyres): "[hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3492.php">Pavan Balaji: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3492.php">Pavan Balaji: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IANAL
<br>
<p>I think that it would be possible to say something like:
<br>
&nbsp;&nbsp;&nbsp;While hwloc is BSD licensed, it may potentially link to libraries with
<br>
more restrictive license terms.
<br>
<p>However, that is more or less true of ANY software.
<br>
For instance, if I compile some BSD licensed software on AIX with '-static'
<br>
then IBM's libc ends up in my binary.
<br>
I am not saying that IBM's libc poses any specific issues, just using it as
<br>
an example.
<br>
So, this is in no way a unique situation for hwloc.
<br>
<p>I think that if hwloc were to explicitly list libpci then we start a
<br>
dangerous precedent under which users may expect us to continuously &quot;audit&quot;
<br>
the libs used on various systems.
<br>
<p>-Paul
<br>
<p><p><p>On Tue, Feb 5, 2013 at 1:50 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; It was just pointed out to me that libpci is licensed under the GPL (not
</span><br>
<span class="quotelev1">&gt; the LGPL).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, even though hwloc is BSD, if it links to libpci.*, it's tainted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IANAL, this is not legal advice, yadda yadda yadda.  But does this jive
</span><br>
<span class="quotelev1">&gt; with other peoples' understanding?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This has caused a problem for an unnamed vendor who wanted to ship a
</span><br>
<span class="quotelev1">&gt; binary tool that linked against libhwloc (that linked against libpci).
</span><br>
<span class="quotelev1">&gt;  Yoinks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The complaint to me was that hwloc needs to be clearer about this in its
</span><br>
<span class="quotelev1">&gt; documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this sound right?
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
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3490/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3491.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3489.php">Jeff Squyres (jsquyres): "[hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3489.php">Jeff Squyres (jsquyres): "[hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3492.php">Pavan Balaji: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3492.php">Pavan Balaji: "Re: [hwloc-devel] libpci: GPL"</a>
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

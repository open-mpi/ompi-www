<?
$subject_val = "Re: [OMPI devel] OS X compilation broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 05:14:02 2009" -->
<!-- isoreceived="20090504091402" -->
<!-- sent="Mon, 4 May 2009 06:13:17 -0400" -->
<!-- isosent="20090504101317" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OS X compilation broken" -->
<!-- id="200905040613.17812.keller_at_hlrs.de" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="71d2d8cc0905010754u58313c2bt5574b3a6f1169490_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OS X compilation broken<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 06:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5949.php">Christian Siebert: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5947.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5942.php">Ralph Castain: "Re: [OMPI devel] OS X compilation broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
the MTT results for Sun were due to missing errno.h.
<br>
<p>Regards,
<br>
Rainer
<br>
<p>On Friday 01 May 2009, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The problem is actually broader than OS-X. MTT shows failures on every
</span><br>
<span class="quotelev1">&gt; platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. OS-X is missing a string.h header in pstat/darwin module
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. &quot;make check&quot; in the test area is failing due to the datatype tests
</span><br>
<span class="quotelev1">&gt; missing string.h in their headers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have fixed these, so hopefully it will run cleanly again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: the datatype checks are spewing a ton of warnings about incompatible
</span><br>
<span class="quotelev1">&gt; pointer types. Apparently, the tests use ompi_datatype_t, and now the
</span><br>
<span class="quotelev1">&gt; variables are all defined as ompi_predefined_datatype_t.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could someone please fix those? I'm unsure of the right fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 1, 2009 at 8:25 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The first tarball since the header file reduction was tested on MTT last
</span><br>
<span class="quotelev2">&gt; &gt; night.  We had across-the-board breakage on OS X:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/mtt/index.php?do_redir=1029">http://www.open-mpi.org/mtt/index.php?do_redir=1029</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can someone please fix?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
----------------------------------------------------------------
 Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                         Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5949.php">Christian Siebert: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5947.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5942.php">Ralph Castain: "Re: [OMPI devel] OS X compilation broken"</a>
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

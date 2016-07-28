<?
$subject_val = "Re: [OMPI devel] OS X compilation broken";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 10:54:59 2009" -->
<!-- isoreceived="20090501145459" -->
<!-- sent="Fri, 1 May 2009 08:54:53 -0600" -->
<!-- isosent="20090501145453" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OS X compilation broken" -->
<!-- id="71d2d8cc0905010754u58313c2bt5574b3a6f1169490_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A4E87B16-CA09-41E1-93A3-7F5199D396C9_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 10:54:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5943.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5941.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>In reply to:</strong> <a href="5940.php">Jeff Squyres: "[OMPI devel] OS X compilation broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5948.php">Rainer Keller: "Re: [OMPI devel] OS X compilation broken"</a>
<li><strong>Reply:</strong> <a href="5948.php">Rainer Keller: "Re: [OMPI devel] OS X compilation broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is actually broader than OS-X. MTT shows failures on every
<br>
platform.
<br>
<p>There are two problems:
<br>
<p>1. OS-X is missing a string.h header in pstat/darwin module
<br>
<p>2. &quot;make check&quot; in the test area is failing due to the datatype tests
<br>
missing string.h in their headers
<br>
<p>I have fixed these, so hopefully it will run cleanly again.
<br>
<p>BTW: the datatype checks are spewing a ton of warnings about incompatible
<br>
pointer types. Apparently, the tests use ompi_datatype_t, and now the
<br>
variables are all defined as ompi_predefined_datatype_t.
<br>
<p>Could someone please fix those? I'm unsure of the right fix.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Fri, May 1, 2009 at 8:25 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The first tarball since the header file reduction was tested on MTT last
</span><br>
<span class="quotelev1">&gt; night.  We had across-the-board breakage on OS X:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/mtt/index.php?do_redir=1029">http://www.open-mpi.org/mtt/index.php?do_redir=1029</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone please fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5942/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5943.php">Brian W. Barrett: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Previous message:</strong> <a href="5941.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>In reply to:</strong> <a href="5940.php">Jeff Squyres: "[OMPI devel] OS X compilation broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5948.php">Rainer Keller: "Re: [OMPI devel] OS X compilation broken"</a>
<li><strong>Reply:</strong> <a href="5948.php">Rainer Keller: "Re: [OMPI devel] OS X compilation broken"</a>
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

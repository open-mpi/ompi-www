<?
$subject_val = "[OMPI devel] trunk build failure on OpenBSD-5.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 03:56:04 2012" -->
<!-- isoreceived="20120217085604" -->
<!-- sent="Fri, 17 Feb 2012 00:55:59 -0800" -->
<!-- isosent="20120217085559" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk build failure on OpenBSD-5.0" -->
<!-- id="CAAvDA16PW8aZn5jOyVhBdJwaY57DfFFfUvH6TMdW74KyW4ibVA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] trunk build failure on OpenBSD-5.0<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 03:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10471.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>Previous message:</strong> <a href="10469.php">Paul Hargrove: "[OMPI devel] trunk build failure on NetBSD-5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10493.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<li><strong>Reply:</strong> <a href="10493.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenBSD lacks an aio.h header.
<br>
configure knows this:
<br>
<p><span class="quotelev1">&gt; $ grep aio.h configure.log
</span><br>
<span class="quotelev1">&gt; checking aio.h usability... no
</span><br>
<span class="quotelev1">&gt; checking aio.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for aio.h... no
</span><br>
<p><p>Yet fbtl/posix is enabled, despite needing aio.h:
<br>
<p><span class="quotelev1">&gt; checking if MCA component fbtl:posix can compile... yes
</span><br>
<p><p>I am guessing this problem will appear on any platform w/o aio.h.
<br>
<p>I think is just a simple matter of requiring OPAL_HAVE_AIO_H when &quot;checking
<br>
if component fbtl:posix can compile&quot;.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10470/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10471.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>Previous message:</strong> <a href="10469.php">Paul Hargrove: "[OMPI devel] trunk build failure on NetBSD-5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10493.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<li><strong>Reply:</strong> <a href="10493.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
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

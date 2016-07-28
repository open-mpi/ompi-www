<?
$subject_val = "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  2 13:30:57 2013" -->
<!-- isoreceived="20130502173057" -->
<!-- sent="Thu, 2 May 2013 10:30:50 -0700" -->
<!-- isosent="20130502173050" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Choosing an Open-MPI release for a new cluster" -->
<!-- id="CAAvDA14xdqqc5Mt9JZKgzLGw-8tuiccgpw-0W5BmmqqZ_d3PdA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4B1D45E7_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Choosing an Open-MPI release for a new cluster<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-02 13:30:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12346.php">Jeff Squyres (jsquyres): "[OMPI devel] BTL TCP failures"</a>
<li><strong>Previous message:</strong> <a href="12344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>In reply to:</strong> <a href="12344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12347.php">Christopher Samuel: "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 2, 2013 at 5:55 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Given that we know there are compile bugs with XRC in all the v1.7
</span><br>
<span class="quotelev1">&gt; releases so far (which seems to show how few people are actually using
</span><br>
<span class="quotelev1">&gt; XRC...), there are definitely &quot;growing pains&quot;, as Ralph mentioned.
</span><br>
<p><p><p>Jeff may be a little too harsh here.
<br>
The XRC compilation problems only show up if one configures with some
<br>
non-default options (--enable-static or --disable-dlopen).
<br>
<p><p>My recommendation is to install 1.6 and 1.7 (and eventually 1.8).
<br>
If you don't think you have the resources, then consider...
<br>
<p>I am a user on a system (also iDataPlex, but that is irrelevant)  that has
<br>
stuck with Open MPI 1.4.x since it was deployed.
<br>
Since the admins have never installed a 1.5, 1.6 or 1.7 version, we instead
<br>
have MULTIPLE user-built copies of Open MPI on the system, with potentially
<br>
different configuration options and, of course, in &quot;random&quot; locations
<br>
within /home.  Our admins want &quot;stable&quot; and the users want &quot;speed&quot; and/or
<br>
&quot;features&quot;.  Keeping both happy requires more than one version be installed.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12345/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12346.php">Jeff Squyres (jsquyres): "[OMPI devel] BTL TCP failures"</a>
<li><strong>Previous message:</strong> <a href="12344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<li><strong>In reply to:</strong> <a href="12344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12347.php">Christopher Samuel: "Re: [OMPI devel] Choosing an Open-MPI release for a new cluster"</a>
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

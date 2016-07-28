<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  9 05:20:02 2007" -->
<!-- isoreceived="20070109102002" -->
<!-- sent="Tue, 9 Jan 2007 11:20:30 +0100" -->
<!-- isosent="20070109102030" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NFS race condition in romio" -->
<!-- id="20070109102030.GB6619_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070108230338.GZ6619_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-09 05:20:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1249.php">Ralph H Castain: "Re: [OMPI devel] OpenRTE telecon?"</a>
<li><strong>Previous message:</strong> <a href="1247.php">Adrian Knoth: "Re: [OMPI devel] NFS race condition in romio"</a>
<li><strong>In reply to:</strong> <a href="1247.php">Adrian Knoth: "Re: [OMPI devel] NFS race condition in romio"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 09, 2007 at 12:03:38AM +0100, Adrian Knoth wrote:
<br>
<p><span class="quotelev2">&gt; &gt; The attached patch fixes this problem, but perhaps there is
</span><br>
<span class="quotelev1">&gt; New patch, I've missed the non-NFS case.
</span><br>
<p>This patch was wrong, too (containing a double free segfault).
<br>
Don't code when dog-tired... ;)
<br>
<p>I've create ticket #733 and attached the new (3rd) patch, so not
<br>
everybody on the list gets spammed with diff files.
<br>
<p><p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1249.php">Ralph H Castain: "Re: [OMPI devel] OpenRTE telecon?"</a>
<li><strong>Previous message:</strong> <a href="1247.php">Adrian Knoth: "Re: [OMPI devel] NFS race condition in romio"</a>
<li><strong>In reply to:</strong> <a href="1247.php">Adrian Knoth: "Re: [OMPI devel] NFS race condition in romio"</a>
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

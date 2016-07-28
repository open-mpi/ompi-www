<?
$subject_val = "Re: [hwloc-devel] Minor issue with the man page";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 03:55:16 2013" -->
<!-- isoreceived="20130509075516" -->
<!-- sent="Thu, 09 May 2013 09:55:10 +0200" -->
<!-- isosent="20130509075510" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Minor issue with the man page" -->
<!-- id="518B565E.2020008_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALT_uBRWxJgnqsNp8br-9Rb5kJxXs-KV8iZ7BK8fcH_GnZVfPQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Minor issue with the man page<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-09 03:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3731.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3729.php">Jiri Hladky: "[hwloc-devel] Minor issue with the man page"</a>
<li><strong>In reply to:</strong> <a href="3729.php">Jiri Hladky: "[hwloc-devel] Minor issue with the man page"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel fixed it a couple weeks ago (Debian packaging tools complained
<br>
like rpmlint).
<br>
Thanks
<br>
Brice
<br>
<p><p><p>Le 09/05/2013 09:47, Jiri Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmlint reports a minor typo in the man page for hwloc 1.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $rpmlint -i /home/jhladky/rpmbuild/RPMS/x86_64/hwloc-1.7-0.fc18.x86_64.rpm
</span><br>
<span class="quotelev1">&gt; hwloc.x86_64: W: manual-page-warning
</span><br>
<span class="quotelev1">&gt; /usr/share/man/man1/hwloc-info.1.gz 151: warning: macro `.' not defined
</span><br>
<span class="quotelev1">&gt; This man page may contain problems that can cause it not to be
</span><br>
<span class="quotelev1">&gt; formatted as
</span><br>
<span class="quotelev1">&gt; intended.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ zcat hwloc-info.1.gz | sed -ne 151p
</span><br>
<span class="quotelev1">&gt;     ..\&quot; **************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's one extra &quot;.&quot; at the beginning of that line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patch file is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3731.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3729.php">Jiri Hladky: "[hwloc-devel] Minor issue with the man page"</a>
<li><strong>In reply to:</strong> <a href="3729.php">Jiri Hladky: "[hwloc-devel] Minor issue with the man page"</a>
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

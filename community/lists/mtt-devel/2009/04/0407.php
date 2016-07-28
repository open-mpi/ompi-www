<?
$subject_val = "Re: [MTT devel] Check a v3.0 commit";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 15:16:05 2009" -->
<!-- isoreceived="20090429191605" -->
<!-- sent="Wed, 29 Apr 2009 15:15:59 -0400" -->
<!-- isosent="20090429191559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Check a v3.0 commit" -->
<!-- id="D4BAED5F-1B50-4AB9-B7F7-3D3CE0F35479_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090429191501.GA48025_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Check a v3.0 commit<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 15:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0408.php">Shiqing Fan: "Re: [MTT devel] MTT"</a>
<li><strong>Previous message:</strong> <a href="0406.php">Ethan Mallove: "Re: [MTT devel] Check a v3.0 commit"</a>
<li><strong>In reply to:</strong> <a href="0406.php">Ethan Mallove: "Re: [MTT devel] Check a v3.0 commit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah -- I parsed your original comment wrong.  I get it now.  :-)
<br>
<p><p>On Apr 29, 2009, at 3:15 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Apr/29/2009 02:34:54PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 29, 2009, at 2:32 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can one of you guys sanity <a href="https://svn.open-mpi.org/trac/mtt/changeset/1283">https://svn.open-mpi.org/trac/mtt/changeset/1283</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before I move it to the 3.0 branch?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It should save some testing cycles if the OMPI tarball hasn't  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; changed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; versions from one day to the next (and you start using the field
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_snapshot_version_file in your INI file).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Works for me. Just had to make sure to set force to &quot;0&quot; in my INI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you mean?  I tried it with and without setting the field  
</span><br>
<span class="quotelev2">&gt;&gt; and it
</span><br>
<span class="quotelev2">&gt;&gt; seemed to do what I intended -- are you saying that you had to set  
</span><br>
<span class="quotelev2">&gt;&gt; it to 0
</span><br>
<span class="quotelev2">&gt;&gt; to get it to ignore the field properly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I meant ompi_snapshot_version_file works correctly. Having &quot;force&quot; set
</span><br>
<span class="quotelev1">&gt; to &quot;1&quot; in my INI file overrode the ompi_snapshot_version_file param,
</span><br>
<span class="quotelev1">&gt; which is what was supposed to happen. Setting &quot;force&quot; to &quot;0&quot; made MTT
</span><br>
<span class="quotelev1">&gt; actually skip a tarball when the ompi_snapshot_version_file matched
</span><br>
<span class="quotelev1">&gt; the downloaded latest_snapshot.txt file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0408.php">Shiqing Fan: "Re: [MTT devel] MTT"</a>
<li><strong>Previous message:</strong> <a href="0406.php">Ethan Mallove: "Re: [MTT devel] Check a v3.0 commit"</a>
<li><strong>In reply to:</strong> <a href="0406.php">Ethan Mallove: "Re: [MTT devel] Check a v3.0 commit"</a>
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

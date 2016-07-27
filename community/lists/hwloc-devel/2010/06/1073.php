<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 19:26:30 2010" -->
<!-- isoreceived="20100621232630" -->
<!-- sent="Tue, 22 Jun 2010 01:26:23 +0200" -->
<!-- isosent="20100621232623" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc and rpath" -->
<!-- id="20100621232623.GB5207_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201006211854.48271.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-users] hwloc and rpath<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 19:26:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1074.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1072.php">Jirka Hladky: "[hwloc-devel] hwloc is failing for Pentium D"</a>
<li><strong>In reply to:</strong> <a href="1065.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1080.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1080.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Jirka Hladky, le Mon 21 Jun 2010 18:54:47 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I don't have &quot;/usr/lib64&quot; directory listed in                         
</span><br>
<span class="quotelev1">&gt; /etc/ld.so.conf. However, &quot;/usr/lib64&quot; is considered to be the        
</span><br>
<span class="quotelev1">&gt; default lib location on 64-bit system.                                
</span><br>
<p>Ok.  And libtool doesn't seem to add it by itself.  I believe that's
<br>
where the problem resides.
<br>
<p><span class="quotelev1">&gt; 1) Add  /usr/lib64 into /etc/ld.so.conf. It works like a charm.
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; The problem is that I cannot use this change in the build environment
</span><br>
<span class="quotelev1">&gt; (on a cluster of build servers for compilation on different
</span><br>
<span class="quotelev1">&gt; architectures)
</span><br>
<p>Sure.  On the long term I wouldn't recommend adding it anyway: it's
<br>
already being looked for by the linker.
<br>
<p><span class="quotelev1">&gt; Samuel, do you have &quot;/usr/lib64&quot; directory listed in /etc/ld.so.conf listed on 
</span><br>
<span class="quotelev1">&gt; your 64-bit Debian?
</span><br>
<p>No.  Debian does not have a /usr/lib64 directory, 64bit versions are in
<br>
/usr/lib.  For biarch system, /usr/lib/x86_64-linux-gnu will be used.
<br>
<p><span class="quotelev1">&gt; 2) Second approach is to add 
</span><br>
<span class="quotelev1">&gt; sed -i 's|^hardcode_libdir_flag_spec=.*|hardcode_libdir_flag_spec=&quot;&quot;|g' libtool
</span><br>
<span class="quotelev1">&gt; sed -i 's|^runpath_var=LD_RUN_PATH|runpath_var=DIE_RPATH_DIE|g' libtool
</span><br>
<span class="quotelev1">&gt; into the %configure stage in rpm specs. 
</span><br>
<p>Well, the real fix seems to me to fix
<br>
<p>sys_lib_dlsearch_path_spec=&quot;/lib /usr/lib $lt_ld_extra&quot;
<br>
<p>into
<br>
<p>sys_lib_dlsearch_path_spec=&quot;/lib /usr/lib /usr/lib64 $lt_ld_extra&quot;
<br>
<p>on Fedora systems.
<br>
<p><span class="quotelev1">&gt; James, any feedback on it? I'm not sure if I should blame libtool or just open 
</span><br>
<span class="quotelev1">&gt; BZ to add &quot;/usr/lib64&quot; into /etc/ld.so.conf.
</span><br>
<p>I believe in the current state of Fedora it's libtool that should be
<br>
blamed.  Or Fedora and libtool should talk to each other to determine
<br>
how libtool is supposed to discover that /usr/lib64 is in the standard
<br>
research path.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1074.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1072.php">Jirka Hladky: "[hwloc-devel] hwloc is failing for Pentium D"</a>
<li><strong>In reply to:</strong> <a href="1065.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1080.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1080.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
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

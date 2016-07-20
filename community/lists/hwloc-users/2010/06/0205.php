<?
$subject_val = "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 08:48:27 2010" -->
<!-- isoreceived="20100622124827" -->
<!-- sent="Tue, 22 Jun 2010 14:48:16 +0200" -->
<!-- isosent="20100622124816" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-devel]  hwloc and rpath" -->
<!-- id="201006221448.16883.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100621232623.GB5207_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-devel]  hwloc and rpath<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 08:48:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0206.php">Jeff Squyres: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0204.php">Alfredo Buttari: "Re: [hwloc-users] Could not bind on Power6"</a>
<li><strong>In reply to:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0206.php">Jeff Squyres: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0206.php">Jeff Squyres: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, June 22, 2010 01:26:23 am Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jirka Hladky, le Mon 21 Jun 2010 18:54:47 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I don't have &quot;/usr/lib64&quot; directory listed in
</span><br>
<span class="quotelev2">&gt; &gt; /etc/ld.so.conf. However, &quot;/usr/lib64&quot; is considered to be the
</span><br>
<span class="quotelev2">&gt; &gt; default lib location on 64-bit system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.  And libtool doesn't seem to add it by itself.  I believe that's
</span><br>
<span class="quotelev1">&gt; where the problem resides.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1) Add  /usr/lib64 into /etc/ld.so.conf. It works like a charm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that I cannot use this change in the build environment
</span><br>
<span class="quotelev2">&gt; &gt; (on a cluster of build servers for compilation on different
</span><br>
<span class="quotelev2">&gt; &gt; architectures)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure.  On the long term I wouldn't recommend adding it anyway: it's
</span><br>
<span class="quotelev1">&gt; already being looked for by the linker.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Samuel, do you have &quot;/usr/lib64&quot; directory listed in /etc/ld.so.conf
</span><br>
<span class="quotelev2">&gt; &gt; listed on your 64-bit Debian?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.  Debian does not have a /usr/lib64 directory, 64bit versions are in
</span><br>
<span class="quotelev1">&gt; /usr/lib.  For biarch system, /usr/lib/x86_64-linux-gnu will be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2) Second approach is to add
</span><br>
<span class="quotelev2">&gt; &gt; sed -i 's|^hardcode_libdir_flag_spec=.*|hardcode_libdir_flag_spec=&quot;&quot;|g'
</span><br>
<span class="quotelev2">&gt; &gt; libtool sed -i 's|^runpath_var=LD_RUN_PATH|runpath_var=DIE_RPATH_DIE|g'
</span><br>
<span class="quotelev2">&gt; &gt; libtool into the %configure stage in rpm specs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, the real fix seems to me to fix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sys_lib_dlsearch_path_spec=&quot;/lib /usr/lib $lt_ld_extra&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; into
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sys_lib_dlsearch_path_spec=&quot;/lib /usr/lib /usr/lib64 $lt_ld_extra&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on Fedora systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; James, any feedback on it? I'm not sure if I should blame libtool or just
</span><br>
<span class="quotelev2">&gt; &gt; open BZ to add &quot;/usr/lib64&quot; into /etc/ld.so.conf.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe in the current state of Fedora it's libtool that should be
</span><br>
<span class="quotelev1">&gt; blamed.  Or Fedora and libtool should talk to each other to determine
</span><br>
<span class="quotelev1">&gt; how libtool is supposed to discover that /usr/lib64 is in the standard
</span><br>
<span class="quotelev1">&gt; research path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p>Hi Samuel,
<br>
<p>I agree with you. It's issue with Fedora. 
<br>
<p>I got good explanation from Mamoru Tasaka &lt;mtasaka_at_[hidden]&gt; at 
<br>
Discussion of RPM packaging standards and practices for Fedora 
<br>
&lt;packaging_at_[hidden]&gt; mailing group:
<br>
<p>=========================================================
<br>
Well, actually the upstream libtool (Fedora uses 2.2.6a) does not take
<br>
care of /usr/lib64 for rpath (and this seems the same for the latest 2.2.8).
<br>
What I usually say is that:
<br>
----------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Usually the reason that unneeded rpath /usr/lib64 is added to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the rebuilt binary is that the upstream developer uses libtool
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which does not take special care of /usr/lib64 for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_lib_dlsearch_path_spec, while Fedora's libtool take care of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this by adding a patch. See the below patch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cvs.fedoraproject.org/viewvc/rpms/libtool/devel/libtool-2.2.6a">http://cvs.fedoraproject.org/viewvc/rpms/libtool/devel/libtool-2.2.6a</a>-
<br>
rpath.patch?content-type=text%2Fplain&amp;view=co
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So actually for most cases, the case that rpath /usr/lib64 is added
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(only for 64 bits arch) can be avoided by
<br>
------------------------------------------------------------------------
<br>
sed -i.libdir_syssearch -e \
<br>
&nbsp;&nbsp;&nbsp;'/sys_lib_dlsearch_path_spec/s|/usr/lib |/usr/lib /usr/lib64 /lib /lib64 |' 
<br>
\
<br>
&nbsp;&nbsp;&nbsp;configure
<br>
------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i.e. just add the needed paths to sys_lib_dlsearch_path_spec in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure (note that libtool in the build directory is generated by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure) before calling %configure.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- You can alternatively do &quot;autoreconf -fi&quot;, however calling autotools
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is not recommended unless unavoidable.
<br>
----------
<br>
<p>So it is highly possible that if the upstream does not use Fedora (i.e. does 
<br>
not
<br>
use patched libtool) rpath /usr/lib64 appears on Fedora.
<br>
And I just confirmed that this method works for this package (hwloc).
<br>
<p>Regards,
<br>
Mamoru
<br>
==================================================
<br>
<p>So basically, until libtool patch will make through upstream into other 
<br>
distributions it will be needed to patch configure script.
<br>
<p>I'm glad that we have found an explanation. Problem is definitely not on your 
<br>
side.
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0206.php">Jeff Squyres: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="0204.php">Alfredo Buttari: "Re: [hwloc-users] Could not bind on Power6"</a>
<li><strong>In reply to:</strong> <a href="0199.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0206.php">Jeff Squyres: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="0206.php">Jeff Squyres: "Re: [hwloc-users] [hwloc-devel]  hwloc and rpath"</a>
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

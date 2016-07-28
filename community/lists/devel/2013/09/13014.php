<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 30 11:04:15 2013" -->
<!-- isoreceived="20130930150415" -->
<!-- sent="Mon, 30 Sep 2013 17:05:01 +0200" -->
<!-- isosent="20130930150501" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="5249931D.4090904_at_debian.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D07E7849-F8EA-48BD-9A5D-9F731E7F7A1B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64<br>
<strong>From:</strong> Sylvestre Ledru (<em>sylvestre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-30 11:05:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13015.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 - trunk/ompi/mca/coll/hcoll"</a>
<li><strong>Previous message:</strong> <a href="13013.php">Max Staufer: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>In reply to:</strong> <a href="12990.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/10/13040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/10/13040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 25/09/2013 19:08, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Wow - that is hard to understand as that code path hasn't changed in quite some time. Could you please do two things for us?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. tell us how you are configuring OMPI
</span><br>
Sure.
<br>
<p>Here are the options list:
<br>
configure: running /bin/bash './configure'  CFLAGS=&quot;-DNDEBUG -g -O2
<br>
-Wformat -Werror=format-security -finline-functions -fno-strict-aliasing
<br>
-pthread&quot; CPPFLAGS=&quot; -I/usr//include   -I/usr/include/infiniband
<br>
-I/usr/include/infiniband&quot; FFLAGS=&quot;-g -O2&quot; LDFLAGS=&quot;  -L/usr//lib&quot;
<br>
--enable-shared --disable-static  --prefix=/usr --with-mpi=open_mpi
<br>
--disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
<br>
Full log is available here:
<br>
<a href="https://buildd.debian.org/status/fetch.php?pkg=openmpi&amp;arch=ia64&amp;ver=1.6.5-4&amp;stamp=1377686359">https://buildd.debian.org/status/fetch.php?pkg=openmpi&amp;arch=ia64&amp;ver=1.6.5-4&amp;stamp=1377686359</a>
<br>
<p><p><p><span class="quotelev1">&gt; 2. try the 1.7 branch using that same configuration
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 1.6 series is reaching its planned end-of-life, so we are trying to decide how important it is to chase this down - i.e., if you see the same problem on Debian with 1.7, then this becomes far more important.
</span><br>
Sure, I will do that asap.
<br>
<p>Do you have an eta for the 1.8 ? (if I remember correctly, 1.7 is a
<br>
development release).
<br>
We are in the process of the transition 1.4 =&gt; 1.6 :/
<br>
<p>Sylvestre
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13015.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29293 - trunk/ompi/mca/coll/hcoll"</a>
<li><strong>Previous message:</strong> <a href="13013.php">Max Staufer: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>In reply to:</strong> <a href="12990.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/10/13040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/10/13040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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

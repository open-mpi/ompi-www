<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc and rpath";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 12:54:57 2010" -->
<!-- isoreceived="20100621165457" -->
<!-- sent="Mon, 21 Jun 2010 18:54:47 +0200" -->
<!-- isosent="20100621165447" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc and rpath" -->
<!-- id="201006211854.48271.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100621145109.GO5034_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 12:54:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1066.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1064.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="1064.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1066.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1066.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1073.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, June 21, 2010 04:51:09 pm Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres, le Mon 21 Jun 2010 10:48:13 -0400, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I still see -rpath being inserted in the final link step for libhwloc.so
</span><br>
<span class="quotelev2">&gt; &gt; (SVN build using AC 2.65, AM 1.11.1, LT 2.2.6b):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../libtool  --tag=CC   --mode=link gcc -std=gnu99  
</span><br>
<span class="quotelev2">&gt; &gt; -fvisibility=hidden -I/usr/include/libxml2   -std=gnu99  
</span><br>
<span class="quotelev2">&gt; &gt; -fvisibility=hidden  -I/users/jsquyres/svn/hwloc/include -Wall
</span><br>
<span class="quotelev2">&gt; &gt; -Wunused-parameter -Wundef -Wno-long-long -Wsign-compare
</span><br>
<span class="quotelev2">&gt; &gt; -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic   
</span><br>
<span class="quotelev2">&gt; &gt; -no-undefined  -version-number 0:0:0 -lxml2 -lz -lm    -o libhwloc.la
</span><br>
<span class="quotelev2">&gt; &gt; -rpath /home/jsquyres/bogus/lib topology.lo traversal.lo
</span><br>
<span class="quotelev2">&gt; &gt; topology-synthetic.lo bind.lo cpuset.lo misc.lo topology-xml.lo 
</span><br>
<span class="quotelev2">&gt; &gt; topology-linux.lo       topology-x86.lo  -libverbs
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But unless I'm mistaken, libtool then strips it out:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: gcc -shared  .libs/topology.o .libs/traversal.o
</span><br>
<span class="quotelev2">&gt; &gt; .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o .libs/misc.o
</span><br>
<span class="quotelev2">&gt; &gt; .libs/topology-xml.o .libs/topology-linux.o .libs/topology-x86.o  
</span><br>
<span class="quotelev2">&gt; &gt; -lxml2 -lz -lm -libverbs    -Wl,-soname -Wl,libhwloc.so.0 -o
</span><br>
<span class="quotelev2">&gt; &gt; .libs/libhwloc.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was also seeing that behavior with LIBS, so I don't think turning to
</span><br>
<span class="quotelev1">&gt; LDADD fixed that part.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p>Hi Samuel,
<br>
<p>thanks a lot for looking into it! I have done some research on Fedora12 and 
<br>
Fedora13, both 64-bit.
<br>
<p>I don't have &quot;/usr/lib64&quot; directory listed in /etc/ld.so.conf. However,  
<br>
&quot;/usr/lib64&quot; is considered to be the default lib location on 64-bit system. 
<br>
ldconfig is looking into /usr/lib64 by default.
<br>
<p>However, libtool does not look into /usr/lib64 by default. I have found 2 ways 
<br>
how to fix it:
<br>
<p>1) Add  /usr/lib64 into /etc/ld.so.conf. It works like a charm. The problem is 
<br>
that I cannot use this change in the build environment (on a cluster of build 
<br>
servers for compilation on different architectures)
<br>
<p>Samuel, do you have &quot;/usr/lib64&quot; directory listed in /etc/ld.so.conf listed on 
<br>
your 64-bit Debian? If so, I will consider to open Bugzilla to add 
<br>
&quot;/usr/lib64&quot; directory into /etc/ld.so.conf on Fedora as well.
<br>
<p>2) Second approach is to add 
<br>
sed -i 's|^hardcode_libdir_flag_spec=.*|hardcode_libdir_flag_spec=&quot;&quot;|g' libtool
<br>
sed -i 's|^runpath_var=LD_RUN_PATH|runpath_var=DIE_RPATH_DIE|g' libtool
<br>
into the %configure stage in rpm specs. 
<br>
<p>I don't like this approach but it seems to be the only way how to get rid of 
<br>
rpath on an automatic build system.
<br>
<p>James, any feedback on it? I'm not sure if I should blame libtool or just open 
<br>
BZ to add &quot;/usr/lib64&quot; into /etc/ld.so.conf.
<br>
<p>Thanks
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1066.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Previous message:</strong> <a href="1064.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<li><strong>In reply to:</strong> <a href="1064.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1066.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1066.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-users]   hwloc and rpath"</a>
<li><strong>Reply:</strong> <a href="1073.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-users] hwloc and rpath"</a>
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

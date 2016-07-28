<?
$subject_val = "Re: [OMPI devel] 1.7.5rc5 build failure [with patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 09:57:16 2014" -->
<!-- isoreceived="20140320135716" -->
<!-- sent="Thu, 20 Mar 2014 06:55:40 -0700" -->
<!-- isosent="20140320135540" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5rc5 build failure [with patch]" -->
<!-- id="30C9ACBD-83B3-4830-8E31-C1F5622034E2_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA169yjfxzjWvKu7mMVt+DSQGeiO8CA+oKxJMwBnM=knrvQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5rc5 build failure [with patch]<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 09:55:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14381.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14379.php">Jeff Squyres (jsquyres): "[OMPI devel] Delayed SVN/Trac mails"</a>
<li><strong>In reply to:</strong> <a href="14376.php">Paul Hargrove: "[OMPI devel] 1.7.5rc5 build failure [with patch]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Talked to Nathan and he concurs with your proposed fix, so I'll add it only to v1.7 (leaving trunk alone)
<br>
<p>Thanks Paul!
<br>
<p>On Mar 19, 2014, at 9:40 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry to be the bearer of bad news...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured on an SGI Altix UV with only &quot;--enable-debug --enable-static --prefix=...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure script found the sn/xpmem.h header and threfore enabled btl:vader:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- MCA component btl:vader (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component btl:vader compile mode... static
</span><br>
<span class="quotelev1">&gt; checking --with-xpmem value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking --with-xpmem-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking xpmem.h usability... no
</span><br>
<span class="quotelev1">&gt; checking xpmem.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for xpmem.h... no
</span><br>
<span class="quotelev1">&gt; checking sn/xpmem.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking sn/xpmem.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for sn/xpmem.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt; checking for xpmem_make in -lxpmem... yes
</span><br>
<span class="quotelev1">&gt; checking if MCA component btl:vader can compile... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, not only was btl:vader failing at runtime on the Altix when I last checked, but the version of the code in 1.7.5rc5 won't build:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mca/btl/vader
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/brashear/hargrove/OMPI/openmpi-1.7.5rc5-linux-x86_64-uv/BLD/ompi/mca/btl/vader'
</span><br>
<span class="quotelev1">&gt;   CC       btl_vader_module.lo
</span><br>
<span class="quotelev1">&gt; In file included from /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.7.5rc5-linux-x86_64-uv/openmpi-1.7.5rc5/ompi/mca/btl/vader/btl_vader.h:76,
</span><br>
<span class="quotelev1">&gt;                  from /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.7.5rc5-linux-x86_64-uv/openmpi-1.7.5rc5/ompi/mca/btl/vader/btl_vader_module.c:26:
</span><br>
<span class="quotelev1">&gt; /usr/users/6/hargrove/SCRATCH/OMPI/openmpi-1.7.5rc5-linux-x86_64-uv/openmpi-1.7.5rc5/ompi/mca/btl/vader/btl_vader_endpoint.h:28:19: error: xpmem.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the safest/fastest fix is the following 1-line change to prevent locating sn/xpmem.h, which is Altix-specific:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/vader/configure.m4     (revision 31166)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/vader/configure.m4     (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -23,7 +23,7 @@
</span><br>
<span class="quotelev1">&gt;      AC_ARG_WITH([xpmem],
</span><br>
<span class="quotelev1">&gt;                  [AC_HELP_STRING([--with-xpmem(=DIR)],
</span><br>
<span class="quotelev1">&gt;                  [Build with XPMEM kernel module support, searching for headers in DIR])])
</span><br>
<span class="quotelev1">&gt; -    OMPI_CHECK_WITHDIR([xpmem], [$with_xpmem], [include/xpmem.h include/sn/xpmem.h])
</span><br>
<span class="quotelev1">&gt; +    OMPI_CHECK_WITHDIR([xpmem], [$with_xpmem], [include/xpmem.h])
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      AC_ARG_WITH([xpmem-libdir],
</span><br>
<span class="quotelev1">&gt;                  [AC_HELP_STRING([--with-xpmem-libdir=DIR],
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch is intended for 1.7 only - lets leave the trunk as-is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14376.php">http://www.open-mpi.org/community/lists/devel/2014/03/14376.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14380/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14381.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14379.php">Jeff Squyres (jsquyres): "[OMPI devel] Delayed SVN/Trac mails"</a>
<li><strong>In reply to:</strong> <a href="14376.php">Paul Hargrove: "[OMPI devel] 1.7.5rc5 build failure [with patch]"</a>
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

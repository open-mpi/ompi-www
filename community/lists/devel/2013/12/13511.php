<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 21:25:29 2013" -->
<!-- isoreceived="20131220022529" -->
<!-- sent="Thu, 19 Dec 2013 18:25:27 -0800" -->
<!-- isosent="20131220022527" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6" -->
<!-- id="CAAvDA16_NFtoOXo7hGb-1hSNVXgOLZ4hMJy3mtc2QHOrMn9Y2w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9231000D-6B24-4727-96B0-2DC49CB2E689_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 21:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13512.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
<li><strong>In reply to:</strong> <a href="13509.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13516.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Reply:</strong> <a href="13516.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>The unofficial &quot;rc2forpaul&quot; gets past the (disgusting) if_mtu problem on
<br>
both platforms.
<br>
<p>On NetBSD-6 the build completes (&quot;make install&quot; fails, but I'll report that
<br>
separately).
<br>
<p>However, on OpenBSD-5 we now encounter another failure about 20 files later:
<br>
<p>&nbsp;&nbsp;CC       sys_limits.lo
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/opal/util/sys_limits.c:
<br>
In function 'opal_util_init_sys_limits':
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/opal/util/sys_limits.c:172:
<br>
error: 'RLIMIT_AS' undeclared (first use in this function)
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/opal/util/sys_limits.c:172:
<br>
error: (Each undeclared identifier is reported only once
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/opal/util/sys_limits.c:172:
<br>
error: for each function it appears in.)
<br>
*** Error 1 in opal/util (Makefile:1692 'sys_limits.lo': @echo &quot;  CC      &quot;
<br>
sys_limits.lo;depbase=`echo sys_limits.lo | sed 's|[^/]*$|.deps/...)
<br>
*** Error 1 in opal/util (Makefile:1780 'all-recursive')
<br>
<p>The getrlimit manpage on this platform does not list RLIMIT_AS.
<br>
Running &quot;grep -rl RLIMIT_AS /usr/include&quot; confirms that this constant does
<br>
not exist.
<br>
So, I think &quot;#ifdef RLIMIT_AS&quot; is required.
<br>
<p>-Paul
<br>
<p><p>On Thu, Dec 19, 2013 at 4:39 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Dec 19, 2013, at 6:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When building 1.7.4rc1 on OpenBSD-5 and NetBSD-6 (both amd64) I see what
</span><br>
<span class="quotelev1">&gt; appears to be the same three errors (&quot;make&quot; output  at end of this email)
</span><br>
<span class="quotelev1">&gt; on both platforms.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All three syntax errors appears to be collisions on the symbol if_mtu:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -bash-4.2$ cat -n openmpi-1.7.4rc1/opal/util/if.h | grep -w -e 182
</span><br>
<span class="quotelev2">&gt; &gt;    182  OPAL_DECLSPEC int opal_ifindextomtu(int if_index, int *if_mtu);
</span><br>
<span class="quotelev2">&gt; &gt; -bash-4.2$ cat -n openmpi-1.7.4rc1/opal/mca/if/if.h | grep -w -e 98
</span><br>
<span class="quotelev2">&gt; &gt;     98      int                 if_mtu;
</span><br>
<span class="quotelev2">&gt; &gt; -bash-4.2$ cat -n openmpi-1.7.4rc1/opal/util/if.c | grep -w -e 482
</span><br>
<span class="quotelev2">&gt; &gt;    482  int opal_ifindextomtu(int if_index, int *if_mtu)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -bash-4.2$ grep if_mtu  /usr/include/net/if.h
</span><br>
<span class="quotelev2">&gt; &gt; #define if_mtu          if_data.ifi_mtu                        \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bah.  Terrible.  Ok, thanks -- I'll fix...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (see the tar ball I just sent you... should have this fix in it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13511/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13512.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
<li><strong>In reply to:</strong> <a href="13509.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13516.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Reply:</strong> <a href="13516.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
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

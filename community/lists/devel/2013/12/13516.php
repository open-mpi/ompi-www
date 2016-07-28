<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 22:18:37 2013" -->
<!-- isoreceived="20131220031837" -->
<!-- sent="Thu, 19 Dec 2013 19:18:18 -0800" -->
<!-- isosent="20131220031818" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6" -->
<!-- id="AAD36BE7-E6D6-4ED2-9FDB-73D529DB120B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16_NFtoOXo7hGb-1hSNVXgOLZ4hMJy3mtc2QHOrMn9Y2w_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 22:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13517.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<li><strong>Previous message:</strong> <a href="13515.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13511.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added protections for all the RLIMIT values, just in case. Thanks!
<br>
Ralph
<br>
<p>On Dec 19, 2013, at 6:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The unofficial &quot;rc2forpaul&quot; gets past the (disgusting) if_mtu problem on both platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On NetBSD-6 the build completes (&quot;make install&quot; fails, but I'll report that separately).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, on OpenBSD-5 we now encounter another failure about 20 files later:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CC       sys_limits.lo
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/opal/util/sys_limits.c: In function 'opal_util_init_sys_limits':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/opal/util/sys_limits.c:172: error: 'RLIMIT_AS' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/opal/util/sys_limits.c:172: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc2forpaul-openbsd5-amd64/openmpi-1.7.4rc2forpaul/opal/util/sys_limits.c:172: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; *** Error 1 in opal/util (Makefile:1692 'sys_limits.lo': @echo &quot;  CC      &quot; sys_limits.lo;depbase=`echo sys_limits.lo | sed 's|[^/]*$|.deps/...)
</span><br>
<span class="quotelev1">&gt; *** Error 1 in opal/util (Makefile:1780 'all-recursive')
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The getrlimit manpage on this platform does not list RLIMIT_AS.
</span><br>
<span class="quotelev1">&gt; Running &quot;grep -rl RLIMIT_AS /usr/include&quot; confirms that this constant does not exist.
</span><br>
<span class="quotelev1">&gt; So, I think &quot;#ifdef RLIMIT_AS&quot; is required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 19, 2013 at 4:39 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2013, at 6:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When building 1.7.4rc1 on OpenBSD-5 and NetBSD-6 (both amd64) I see what appears to be the same three errors (&quot;make&quot; output  at end of this email) on both platforms.
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13516/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13517.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<li><strong>Previous message:</strong> <a href="13515.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13511.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
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

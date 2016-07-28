<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 19:39:22 2013" -->
<!-- isoreceived="20131220003922" -->
<!-- sent="Fri, 20 Dec 2013 00:39:21 +0000" -->
<!-- isosent="20131220003921" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6" -->
<!-- id="9231000D-6B24-4727-96B0-2DC49CB2E689_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15ZLULvXdPa6v1aSJOGPQhTM0RAS21vnHrn7ucSe9M+8g_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 19:39:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
<li><strong>Previous message:</strong> <a href="13508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>In reply to:</strong> <a href="13503.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13511.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Reply:</strong> <a href="13511.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 19, 2013, at 6:27 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When building 1.7.4rc1 on OpenBSD-5 and NetBSD-6 (both amd64) I see what appears to be the same three errors (&quot;make&quot; output  at end of this email) on both platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All three syntax errors appears to be collisions on the symbol if_mtu:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ cat -n openmpi-1.7.4rc1/opal/util/if.h | grep -w -e 182
</span><br>
<span class="quotelev1">&gt;    182  OPAL_DECLSPEC int opal_ifindextomtu(int if_index, int *if_mtu);
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ cat -n openmpi-1.7.4rc1/opal/mca/if/if.h | grep -w -e 98 
</span><br>
<span class="quotelev1">&gt;     98      int                 if_mtu;
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ cat -n openmpi-1.7.4rc1/opal/util/if.c | grep -w -e 482
</span><br>
<span class="quotelev1">&gt;    482  int opal_ifindextomtu(int if_index, int *if_mtu)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ grep if_mtu  /usr/include/net/if.h
</span><br>
<span class="quotelev1">&gt; #define if_mtu          if_data.ifi_mtu                        \
</span><br>
<p>Bah.  Terrible.  Ok, thanks -- I'll fix...
<br>
<p>(see the tar ball I just sent you... should have this fix in it)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
<li><strong>Previous message:</strong> <a href="13508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>In reply to:</strong> <a href="13503.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13511.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Reply:</strong> <a href="13511.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
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

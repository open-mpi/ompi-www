<?
$subject_val = "Re: [MTT users] Another whatami patch";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 22 08:51:46 2014" -->
<!-- isoreceived="20141122135146" -->
<!-- sent="Sat, 22 Nov 2014 13:51:45 +0000" -->
<!-- isosent="20141122135145" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Another whatami patch" -->
<!-- id="396C9BD7-2F9A-4A13-83B1-051806F8B43B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20141122134829.GU8789_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [MTT users] Another whatami patch<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-22 08:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0827.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Previous message:</strong> <a href="0825.php">Adrian Reber: "[MTT users] Another whatami patch"</a>
<li><strong>In reply to:</strong> <a href="0825.php">Adrian Reber: "[MTT users] Another whatami patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good one.  I committed it -- thanks!
<br>
<p><a href="https://github.com/open-mpi/mtt/commit/6234642e8579a89f9aa72a27b0ee49485f2ab357">https://github.com/open-mpi/mtt/commit/6234642e8579a89f9aa72a27b0ee49485f2ab357</a>
<br>
<p><p><p>On Nov 22, 2014, at 8:48 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Running on MTT on CentOS 6.x gives me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linux-unknown_linux_type_please_send_us_a_patch-x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Following patch fixes it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/client/whatami/whatami b/client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; index 7819490..bad088f 100755
</span><br>
<span class="quotelev1">&gt; --- a/client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; +++ b/client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; @@ -236,8 +236,9 @@ get_linux_type()
</span><br>
<span class="quotelev1">&gt;                 elif [ -n &quot;`egrep 'SGI ProPack 3' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                         distro=rhel3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -                elif [ -n &quot;`egrep 'CentOS release 4.[0-9]' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt; -                        distro=rhel4
</span><br>
<span class="quotelev1">&gt; +                elif [ -n &quot;`egrep 'CentOS release [0-9].[0-9]' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt; +                        distro_ver=&quot;`grep 'CentOS' /etc/issue | sed -e 's/.*release \([0-9]*\.[0-9]*\).*/\1/'`&quot;
</span><br>
<span class="quotelev1">&gt; +                        distro=rhel$distro_ver
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 elif [ -n &quot;`egrep 'SuSE SLES 8' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                         distro=sles8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/11/index.php">http://www.open-mpi.org/community/lists/mtt-users/2014/11/index.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0827.php">Christoph Niethammer: "Re: [MTT users] Reporting results from offline runs"</a>
<li><strong>Previous message:</strong> <a href="0825.php">Adrian Reber: "[MTT users] Another whatami patch"</a>
<li><strong>In reply to:</strong> <a href="0825.php">Adrian Reber: "[MTT users] Another whatami patch"</a>
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

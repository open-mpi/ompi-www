<?
$subject_val = "Re: [MTT users] MTT on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 10:20:25 2014" -->
<!-- isoreceived="20140918142025" -->
<!-- sent="Thu, 18 Sep 2014 14:20:23 +0000" -->
<!-- isosent="20140918142023" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT on PPC64" -->
<!-- id="D4645816-3A03-4CBF-9B5F-7802431BBFC4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140807144939.GJ6715_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT on PPC64<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 10:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/0820.php">Christoph Niethammer: "[MTT users] Reporting results from offline runs"</a>
<li><strong>Previous message:</strong> <a href="0818.php">Jeff Squyres (jsquyres): "Re: [MTT users] MTT Account Request"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/08/0816.php">Adrian Reber: "[MTT users] MTT on PPC64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian --
<br>
<p>I'm sorry this took forever, but I just pushed a variant of your patch to the main mtt repo:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/mtt/commit/15f81de3d0d12e8e1e406c5151f36c82632c6616">https://github.com/open-mpi/mtt/commit/15f81de3d0d12e8e1e406c5151f36c82632c6616</a>
<br>
<p>Thanks!
<br>
<p>As for PPC 64 results of OMPI MTT testing... hmm.  Do they show any interesting failures?  I.e., I don't know support/care about PPC64 any more, but if it shows interesting failures that are side effects of genuine problems that just don't happen to show up on other platforms, that's useful.
<br>
<p><p>On Aug 7, 2014, at 10:49 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was trying to run MTT on ppc64 and it complained that I need to write
</span><br>
<span class="quotelev1">&gt; a patch. Since the name 'Fedora Core' does not exist anymore (since
</span><br>
<span class="quotelev1">&gt; Fedora 7) I have following patch for MTT:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/client/whatami/whatami b/client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; index b4c50f5..aa275f0 100755
</span><br>
<span class="quotelev1">&gt; --- a/client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; +++ b/client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; @@ -295,9 +295,9 @@ get_linux_type()
</span><br>
<span class="quotelev1">&gt;                 elif [ -n &quot;`egrep 'Tao Linux release 1 ' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                         distro=tao_1.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -                elif [ -n &quot;`egrep 'Fedora Core ' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt; +                elif [ -n &quot;`egrep 'Fedora ' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                         distro_brand=fc
</span><br>
<span class="quotelev1">&gt; -                        distro_version=`grep 'Fedora Core ' /etc/issue | sed -e 's/Fedora Core release \([0-9]*\).*/\1/' `
</span><br>
<span class="quotelev1">&gt; +                        distro_version=`grep 'Fedora ' /etc/issue | sed -e 's/Fedora release \([0-9]*\).*/\1/' `
</span><br>
<span class="quotelev1">&gt;                         distro=${distro_brand}${distro_version}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 elif [ -n &quot;`egrep 'White Box Enterprise Linux release 3.0' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there interest to get my ppc64 results submitted
</span><br>
<span class="quotelev1">&gt; into the mtt database? And which tests should I be running.
</span><br>
<span class="quotelev1">&gt; Based on the .ini I got from Christoph I am now running
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/svn/ompi-tests/trunk/mpi_test_suite/">http://svn.open-mpi.org/svn/ompi-tests/trunk/mpi_test_suite/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/intel_tests">https://svn.open-mpi.org/svn/ompi-tests/trunk/intel_tests</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; anything else?
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
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/08/index.php">http://www.open-mpi.org/community/lists/mtt-users/2014/08/index.php</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/10/0820.php">Christoph Niethammer: "[MTT users] Reporting results from offline runs"</a>
<li><strong>Previous message:</strong> <a href="0818.php">Jeff Squyres (jsquyres): "Re: [MTT users] MTT Account Request"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/08/0816.php">Adrian Reber: "[MTT users] MTT on PPC64"</a>
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

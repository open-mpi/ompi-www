<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 10:38:57 2012" -->
<!-- isoreceived="20120912143857" -->
<!-- sent="Wed, 12 Sep 2012 10:38:59 -0400" -->
<!-- isosent="20120912143859" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &amp;quot;bind&amp;quot; mount" -->
<!-- id="0AD41D4C-958D-4DFC-9774-E8A2DC2B8D98_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16AJbJBC9k0AR327AN4T3zEO2fLTz-kAq29x7tvVD+qyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 10:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11502.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Previous message:</strong> <a href="11500.php">Ralph Castain: "[OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>In reply to:</strong> <a href="11497.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11510.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Reply:</strong> <a href="11510.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just updated the test to check and see if we get a &quot;none&quot; type of filesystem.  If so, we just skip it in the test.
<br>
<p><p>On Sep 11, 2012, at 3:50 PM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I am NOT running on BG/Q.
</span><br>
<span class="quotelev1">&gt; I am just building for Linux/PPC64 on its front-end node which has very recent XLC versions installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did look quickly just now at the opal_path_nfs.c test code and see that get_mounts() will require non-trivial work to process bind-mounts.  The work is &quot;just a matter of coding&quot;, but is beyond the scope of what I can contribute right now.  I can test as needed, though anybody w/ root on a Linux box and an NFS filesystem should be able to reproduce the problem,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul [who probably could have avoided confusion by not mentioning BG/Q in the first place]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 11, 2012 at 12:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Interesting - I can certainly fix the test so it lets make check complete.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: I didn't know we were running on BG/Q - does it work? I assume this is with slurm?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2012, at 12:34 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In testing 1.6.2rc2 on a BG/Q front-end I've encountered the following failure from &quot;make check&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Failure : Mismatch: input &quot;/soft&quot;, expected:0 got:1
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 20 failed)
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I find digging deeper is that the mount of /soft is a bit unusual (at least to me):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ grep /soft /etc/fstab
</span><br>
<span class="quotelev2">&gt;&gt; /gpfs/vesta_scratch/software  /soft none  _netdev,bind   0 0
</span><br>
<span class="quotelev2">&gt;&gt; $ mount | grep /soft
</span><br>
<span class="quotelev2">&gt;&gt; /gpfs/vesta_scratch/software on /soft type none (rw,bind,_netdev)
</span><br>
<span class="quotelev2">&gt;&gt; $ grep /soft /proc/mounts 
</span><br>
<span class="quotelev2">&gt;&gt; /dev/vesta_scratch /soft gpfs rw,relatime 0 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looking into the mount man page I find that the &quot;_netdev&quot; is NOT a problem, just an keyword used to identify mounts that require network access to implement &quot; -O no_netdev&quot; in mount.
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;problem&quot; that opal_path_nfs is encountering is that this is a &quot;bind&quot; mount which makes an already mounted fs (or subtree of one) available at a second location.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I am understanding &quot;expected:0 got:1&quot; correctly this failure shows that the TEST is getting this case (bind-mount of GPFS fs) incorrect.
</span><br>
<span class="quotelev2">&gt;&gt; So, this is a BENIGN failure, but distracting (and preventing &quot;make check&quot; from completing).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11502.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Previous message:</strong> <a href="11500.php">Ralph Castain: "[OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>In reply to:</strong> <a href="11497.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11510.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Reply:</strong> <a href="11510.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
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

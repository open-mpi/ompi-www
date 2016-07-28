<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 16:45:53 2012" -->
<!-- isoreceived="20120912204553" -->
<!-- sent="Wed, 12 Sep 2012 13:45:44 -0700" -->
<!-- isosent="20120912204544" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &amp;quot;bind&amp;quot; mount" -->
<!-- id="CAAvDA15HWMn2aTBuqZD0ZbYjVvsSsZny-yrZL0NkjDei3uQ1HA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0AD41D4C-958D-4DFC-9774-E8A2DC2B8D98_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 16:45:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11511.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11509.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<li><strong>In reply to:</strong> <a href="11501.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11511.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Reply:</strong> <a href="11511.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like that should resolve my failure - I'll try to verify from a
<br>
nightly tarball when I have the opportunity.
<br>
<p>The fix I had in mind would have been to parse the mounts with sufficient
<br>
intelligence to match a bind-mount to the original mount and determine it's
<br>
type.
<br>
I suppose that is still possible if one gets ambitious.
<br>
<p>-Paul
<br>
<p>On Wed, Sep 12, 2012 at 7:38 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just updated the test to check and see if we get a &quot;none&quot; type of
</span><br>
<span class="quotelev1">&gt; filesystem.  If so, we just skip it in the test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2012, at 3:50 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am NOT running on BG/Q.
</span><br>
<span class="quotelev2">&gt; &gt; I am just building for Linux/PPC64 on its front-end node which has very
</span><br>
<span class="quotelev1">&gt; recent XLC versions installed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I did look quickly just now at the opal_path_nfs.c test code and see
</span><br>
<span class="quotelev1">&gt; that get_mounts() will require non-trivial work to process bind-mounts.
</span><br>
<span class="quotelev1">&gt;  The work is &quot;just a matter of coding&quot;, but is beyond the scope of what I
</span><br>
<span class="quotelev1">&gt; can contribute right now.  I can test as needed, though anybody w/ root on
</span><br>
<span class="quotelev1">&gt; a Linux box and an NFS filesystem should be able to reproduce the problem,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul [who probably could have avoided confusion by not mentioning BG/Q
</span><br>
<span class="quotelev1">&gt; in the first place]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Sep 11, 2012 at 12:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Interesting - I can certainly fix the test so it lets make check
</span><br>
<span class="quotelev1">&gt; complete.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW: I didn't know we were running on BG/Q - does it work? I assume
</span><br>
<span class="quotelev1">&gt; this is with slurm?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 11, 2012, at 12:34 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In testing 1.6.2rc2 on a BG/Q front-end I've encountered the following
</span><br>
<span class="quotelev1">&gt; failure from &quot;make check&quot;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Failure : Mismatch: input &quot;/soft&quot;, expected:0 got:1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 20 failed)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What I find digging deeper is that the mount of /soft is a bit unusual
</span><br>
<span class="quotelev1">&gt; (at least to me):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ grep /soft /etc/fstab
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /gpfs/vesta_scratch/software  /soft none  _netdev,bind   0 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ mount | grep /soft
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /gpfs/vesta_scratch/software on /soft type none (rw,bind,_netdev)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ grep /soft /proc/mounts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /dev/vesta_scratch /soft gpfs rw,relatime 0 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Looking into the mount man page I find that the &quot;_netdev&quot; is NOT a
</span><br>
<span class="quotelev1">&gt; problem, just an keyword used to identify mounts that require network
</span><br>
<span class="quotelev1">&gt; access to implement &quot; -O no_netdev&quot; in mount.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The &quot;problem&quot; that opal_path_nfs is encountering is that this is a
</span><br>
<span class="quotelev1">&gt; &quot;bind&quot; mount which makes an already mounted fs (or subtree of one)
</span><br>
<span class="quotelev1">&gt; available at a second location.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I am understanding &quot;expected:0 got:1&quot; correctly this failure shows
</span><br>
<span class="quotelev1">&gt; that the TEST is getting this case (bind-mount of GPFS fs) incorrect.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So, this is a BENIGN failure, but distracting (and preventing &quot;make
</span><br>
<span class="quotelev1">&gt; check&quot; from completing).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11511.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Previous message:</strong> <a href="11509.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_connect/accept does not work as it should"</a>
<li><strong>In reply to:</strong> <a href="11501.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11511.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Reply:</strong> <a href="11511.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
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

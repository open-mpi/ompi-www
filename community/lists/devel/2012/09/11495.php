<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 15:40:40 2012" -->
<!-- isoreceived="20120911194040" -->
<!-- sent="Tue, 11 Sep 2012 12:40:31 -0700" -->
<!-- isosent="20120911194031" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &amp;quot;bind&amp;quot; mount" -->
<!-- id="3B788D81-0D97-421E-9704-0B477DCBEF10_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15OhsyOsyE-drbh01G1fKxKWufpLOmXXu2GeKjzcMOCNA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 15:40:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11496.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Previous message:</strong> <a href="11494.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>In reply to:</strong> <a href="11493.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11497.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Reply:</strong> <a href="11497.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting - I can certainly fix the test so it lets make check complete.
<br>
<p>FWIW: I didn't know we were running on BG/Q - does it work? I assume this is with slurm?
<br>
<p>On Sep 11, 2012, at 12:34 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In testing 1.6.2rc2 on a BG/Q front-end I've encountered the following failure from &quot;make check&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Failure : Mismatch: input &quot;/soft&quot;, expected:0 got:1
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 20 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I find digging deeper is that the mount of /soft is a bit unusual (at least to me):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ grep /soft /etc/fstab
</span><br>
<span class="quotelev1">&gt; /gpfs/vesta_scratch/software  /soft none  _netdev,bind   0 0
</span><br>
<span class="quotelev1">&gt; $ mount | grep /soft
</span><br>
<span class="quotelev1">&gt; /gpfs/vesta_scratch/software on /soft type none (rw,bind,_netdev)
</span><br>
<span class="quotelev1">&gt; $ grep /soft /proc/mounts 
</span><br>
<span class="quotelev1">&gt; /dev/vesta_scratch /soft gpfs rw,relatime 0 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking into the mount man page I find that the &quot;_netdev&quot; is NOT a problem, just an keyword used to identify mounts that require network access to implement &quot; -O no_netdev&quot; in mount.
</span><br>
<span class="quotelev1">&gt; The &quot;problem&quot; that opal_path_nfs is encountering is that this is a &quot;bind&quot; mount which makes an already mounted fs (or subtree of one) available at a second location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I am understanding &quot;expected:0 got:1&quot; correctly this failure shows that the TEST is getting this case (bind-mount of GPFS fs) incorrect.
</span><br>
<span class="quotelev1">&gt; So, this is a BENIGN failure, but distracting (and preventing &quot;make check&quot; from completing).
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11495/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11496.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Previous message:</strong> <a href="11494.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>In reply to:</strong> <a href="11493.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11497.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Reply:</strong> <a href="11497.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
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

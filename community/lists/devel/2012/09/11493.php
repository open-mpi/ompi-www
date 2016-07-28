<?
$subject_val = "[OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 15:35:13 2012" -->
<!-- isoreceived="20120911193513" -->
<!-- sent="Tue, 11 Sep 2012 12:34:19 -0700" -->
<!-- isosent="20120911193419" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.2rc2: opal_path_nfs failure for &amp;quot;bind&amp;quot; mount" -->
<!-- id="CAAvDA15OhsyOsyE-drbh01G1fKxKWufpLOmXXu2GeKjzcMOCNA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 15:34:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11494.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Previous message:</strong> <a href="11492.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11495.php">Ralph Castain: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Reply:</strong> <a href="11495.php">Ralph Castain: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In testing 1.6.2rc2 on a BG/Q front-end I've encountered the following
<br>
failure from &quot;make check&quot;:
<br>
<p>&nbsp;Failure : Mismatch: input &quot;/soft&quot;, expected:0 got:1
<br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 20 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<p><p>What I find digging deeper is that the mount of /soft is a bit unusual (at
<br>
least to me):
<br>
<p>$ grep /soft /etc/fstab
<br>
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
<p><p><p>Looking into the mount man page I find that the &quot;_netdev&quot; is NOT a problem,
<br>
just an keyword used to identify mounts that require network access to
<br>
implement &quot; -O no_netdev&quot; in mount.
<br>
The &quot;problem&quot; that opal_path_nfs is encountering is that this is a &quot;bind&quot;
<br>
mount which makes an already mounted fs (or subtree of one) available at a
<br>
second location.
<br>
<p>If I am understanding &quot;expected:0 got:1&quot; correctly this failure shows that
<br>
the TEST is getting this case (bind-mount of GPFS fs) incorrect.
<br>
So, this is a BENIGN failure, but distracting (and preventing &quot;make check&quot;
<br>
from completing).
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11493/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11494.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<li><strong>Previous message:</strong> <a href="11492.php">Bert Wesarg: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11495.php">Ralph Castain: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
<li><strong>Reply:</strong> <a href="11495.php">Ralph Castain: "Re: [OMPI devel] 1.6.2rc2: opal_path_nfs failure for &quot;bind&quot; mount"</a>
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

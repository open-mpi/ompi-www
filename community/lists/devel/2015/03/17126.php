<?
$subject_val = "Re: [OMPI devel] Master warning on oob:ud w/ PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 12:53:48 2015" -->
<!-- isoreceived="20150311165348" -->
<!-- sent="Wed, 11 Mar 2015 10:53:47 -0600" -->
<!-- isosent="20150311165347" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master warning on oob:ud w/ PGI" -->
<!-- id="20150311165347.GE14275_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14+H1v38qTmGVVgV2N2BwYXZ2d1XqPYz_ENfHPMRMM4tw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master warning on oob:ud w/ PGI<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-11 12:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17127.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>Previous message:</strong> <a href="17125.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] f08ts"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17069.php">Paul Hargrove: "[OMPI devel] Master warning on oob:ud w/ PGI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed.
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 26, 2015 at 04:57:22PM -0800, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;    The warning below comes from pgi-14.7 on the latest master tarball (output
</span><br>
<span class="quotelev1">&gt;    from &quot;make V=1&quot;).
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt;    libtool: compile:  pgcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/orte/mca/oob/ud
</span><br>
<span class="quotelev1">&gt;    -I../../../../opal/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt;    -I../../../../oshmem/include
</span><br>
<span class="quotelev1">&gt;    -I../../../../opal/mca/common/libfabric/libfabric
</span><br>
<span class="quotelev1">&gt;    -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt;    -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863
</span><br>
<span class="quotelev1">&gt;    -I../../../..
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/opal/include
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/orte/include
</span><br>
<span class="quotelev1">&gt;    -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/ompi/include
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/oshmem/include
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt;    -I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt;    -g -c
</span><br>
<span class="quotelev1">&gt;    /scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/orte/mca/oob/ud/oob_ud_req.c
</span><br>
<span class="quotelev1">&gt;    -MD  -fpic -DPIC -o .libs/oob_ud_req.o
</span><br>
<span class="quotelev1">&gt;    PGC-W-0095-Type cast required for this conversion
</span><br>
<span class="quotelev1">&gt;    (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/orte/mca/oob/ud/oob_ud_req.c:
</span><br>
<span class="quotelev1">&gt;    140)
</span><br>
<span class="quotelev1">&gt;    PGC/x86-64 Linux 14.7-0: compilation completed with warnings
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17069.php">http://www.open-mpi.org/community/lists/devel/2015/02/17069.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17126/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17127.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>Previous message:</strong> <a href="17125.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] f08ts"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17069.php">Paul Hargrove: "[OMPI devel] Master warning on oob:ud w/ PGI"</a>
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

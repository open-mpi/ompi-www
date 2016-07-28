<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] openib btl build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 19:16:11 2016" -->
<!-- isoreceived="20160502231611" -->
<!-- sent="Mon, 2 May 2016 17:15:58 -0600" -->
<!-- isosent="20160502231558" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] openib btl build failure" -->
<!-- id="20160502231558.GJ22814_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15oe0cDYxYfGTfHETY7MRqPwwyxvJQvtQciUmwg0K=HRQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] openib btl build failure<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 19:15:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18885.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Illegal instruction on Pentium III"</a>
<li><strong>Previous message:</strong> <a href="18883.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
<li><strong>In reply to:</strong> <a href="18875.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] openib btl build failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed by <a href="https://github.com/open-mpi/ompi/pull/1619">https://github.com/open-mpi/ompi/pull/1619</a>
<br>
<p>Thanks for catching this.
<br>
<p>-Nathan
<br>
<p>On Mon, May 02, 2016 at 01:57:07PM -0700, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;    I have an x86-64/Linux system with a fairly standard install of Scientific
</span><br>
<span class="quotelev1">&gt;    Linux 6.3 (a RHEL clone like CentOS).
</span><br>
<span class="quotelev1">&gt;    However, it appears from the error messages (at the bottom of this email)
</span><br>
<span class="quotelev1">&gt;    that the OFED install differs in some way from OMPI's expectations.
</span><br>
<span class="quotelev1">&gt;    It appears the OFED was not installed via RPMs, leaving me not knowing how
</span><br>
<span class="quotelev1">&gt;    to determine a version number.
</span><br>
<span class="quotelev1">&gt;    Please let me know what additional information is required to resolve
</span><br>
<span class="quotelev1">&gt;    this, and to whom to send it.
</span><br>
<span class="quotelev1">&gt;    FWIW: This is on NERSC's Babbage testbed, to which Nathan and Howard may
</span><br>
<span class="quotelev1">&gt;    already have access (or can request it).
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt;    libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/btl/openib
</span><br>
<span class="quotelev1">&gt;    -I../../../../opal/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt;    -I../../../../oshmem/include
</span><br>
<span class="quotelev1">&gt;    -I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt;    -I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt;    -I../../../../ompi/mpiext/cuda/c -I/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2
</span><br>
<span class="quotelev1">&gt;    -I../../../..
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/include
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/orte/include
</span><br>
<span class="quotelev1">&gt;    -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/ompi/include
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/oshmem/include
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt;    -I/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/BLD/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt;    -g -finline-functions -fno-strict-aliasing -pthread -MT
</span><br>
<span class="quotelev1">&gt;    btl_openib_component.lo -MD -MP -MF .deps/btl_openib_component.Tpo -c
</span><br>
<span class="quotelev1">&gt;    /tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt;     -fPIC -DPIC -o .libs/btl_openib_component.o
</span><br>
<span class="quotelev1">&gt;    /tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/btl/openib/btl_openib_component.c:
</span><br>
<span class="quotelev1">&gt;    In function 'init_one_port':
</span><br>
<span class="quotelev1">&gt;    /tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/openmpi-2.0.0rc2/opal/mca/btl/openib/btl_openib_component.c:785:
</span><br>
<span class="quotelev1">&gt;    error: 'struct ibv_exp_device_attr' has no member named 'ext_atom'
</span><br>
<span class="quotelev1">&gt;    make[2]: *** [btl_openib_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt;    make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/BLD/opal/mca/btl/openib'
</span><br>
<span class="quotelev1">&gt;    make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;    make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/hargrove/OMPI/openmpi-2.0.0rc2-babbage/BLD/opal'
</span><br>
<span class="quotelev1">&gt;    make: *** [all-recursive] Error 1
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18875.php">http://www.open-mpi.org/community/lists/devel/2016/05/18875.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18884/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18885.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Illegal instruction on Pentium III"</a>
<li><strong>Previous message:</strong> <a href="18883.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Linux/MIPS64 failures"</a>
<li><strong>In reply to:</strong> <a href="18875.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] openib btl build failure"</a>
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

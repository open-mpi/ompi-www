<?
$subject_val = "Re: [OMPI devel] Master failure building oshmem java examples";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 23:47:16 2015" -->
<!-- isoreceived="20150203044716" -->
<!-- sent="Mon, 2 Feb 2015 20:47:14 -0800" -->
<!-- isosent="20150203044714" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master failure building oshmem java examples" -->
<!-- id="CAMD57ofW1x+ghN5ZwDmGNtyD81gK7qf8QnSa+htEtS_Z31Y_=g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17QvnkeeqJr3siMmMr4FKS9e8J50Rb+-d+1vnt4D205Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master failure building oshmem java examples<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 23:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16906.php">Ralph Castain: "Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<li><strong>Previous message:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI devel] Build failure on OpenBSD (deja vu)"</a>
<li><strong>In reply to:</strong> <a href="16900.php">Paul Hargrove: "[OMPI devel] Master failure building oshmem java examples"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sigh...someone forgot to add those examples to the tarball. Fixing now.
<br>
<p><p>On Mon, Feb 2, 2015 at 7:15 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On a system on which 1.8.4rc5 passed all my tests, I see the following
</span><br>
<span class="quotelev1">&gt; running &quot;make&quot; in the examples directory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `Hello_oshmem.java', needed by
</span><br>
<span class="quotelev1">&gt; `Hello_oshmem.class'.
</span><br>
<span class="quotelev1">&gt; make[2]: Target `Hello_oshmem.class' not remade because of errors.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `Ring_oshmem.java', needed by
</span><br>
<span class="quotelev1">&gt; `Ring_oshmem.class'.
</span><br>
<span class="quotelev1">&gt; make[2]: Target `Ring_oshmem.class' not remade because of errors.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `oshmem_circular_shift.java', needed
</span><br>
<span class="quotelev1">&gt; by `oshmem_circular_shift.class'.
</span><br>
<span class="quotelev1">&gt; make[2]: Target `oshmem_circular_shift.class' not remade because of errors.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `oshmem_max_reduction.java', needed by
</span><br>
<span class="quotelev1">&gt; `oshmem_max_reduction.class'.
</span><br>
<span class="quotelev1">&gt; make[2]: Target `oshmem_max_reduction.class' not remade because of errors.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `oshmem_strided_puts.java', needed by
</span><br>
<span class="quotelev1">&gt; `oshmem_strided_puts.class'.
</span><br>
<span class="quotelev1">&gt; make[2]: Target `oshmem_strided_puts.class' not remade because of errors.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `oshmem_symmetric_data.java', needed
</span><br>
<span class="quotelev1">&gt; by `oshmem_symmetric_data.class'.
</span><br>
<span class="quotelev1">&gt; make[2]: Target `oshmem_symmetric_data.class' not remade because of errors.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [oshmem] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/brashear/hargrove/OMPI/openmpi-master-linux-x86_64-java/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make: *** [all] Error 2
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
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16900.php">http://www.open-mpi.org/community/lists/devel/2015/02/16900.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16905/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16906.php">Ralph Castain: "Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<li><strong>Previous message:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI devel] Build failure on OpenBSD (deja vu)"</a>
<li><strong>In reply to:</strong> <a href="16900.php">Paul Hargrove: "[OMPI devel] Master failure building oshmem java examples"</a>
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

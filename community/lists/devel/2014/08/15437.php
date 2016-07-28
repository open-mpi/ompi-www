<?
$subject_val = "Re: [OMPI devel] Trunk broken for PPC64?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 02:47:18 2014" -->
<!-- isoreceived="20140801064718" -->
<!-- sent="Thu, 31 Jul 2014 23:47:14 -0700" -->
<!-- isosent="20140801064714" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken for PPC64?" -->
<!-- id="CAAvDA15E0BJOLKcL0W6rz_Xibys6wGNe-JLcNsn0UB8rACNbRQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53DB362B.8010501_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk broken for PPC64?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 02:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15438.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15436.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>In reply to:</strong> <a href="15436.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15438.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Reply:</strong> <a href="15438.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles's findings are consistent with mine which showed the SEGVs to be in
<br>
the coll/ml code.
<br>
I've built with --enable-debug and so below is a backtrace (well, two
<br>
actually) that might be helpful.
<br>
Unfortunately the output of the two ranks did get slightly entangled.
<br>
<p>-Paul
<br>
<p>$ ../INST/bin/mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
[bd-login][[43502,1],0][/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/ompi/mca/coll/ml/coll_ml_lmngr.c:231:mca_coll_ml_lmngr_init]
<br>
COLL-ML [bd-login:09106] *** Process received signal ***
<br>
[bd-login][[43502,1],1][/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/ompi/mca/coll/ml/coll_ml_lmngr.c:231:mca_coll_ml_lmngr_init]
<br>
COLL-ML [bd-login:09107] *** Process received signal ***
<br>
[bd-login:09107] Signal: Segmentation fault (11)
<br>
[bd-login:09107] Signal code: Address not mapped (1)
<br>
[bd-login:09107] Failing at address: 0x10
<br>
[bd-login:09107] [ 0] [bd-login:09106] Signal: Segmentation fault (11)
<br>
[bd-login:09106] Signal code: Address not mapped (1)
<br>
[bd-login:09106] Failing at address: 0x10
<br>
[bd-login:09106] [ 0] [0xfffa96c0418]
<br>
[bd-login:09106] [ 1] [0xfff8f580418]
<br>
[bd-login:09107] [ 1] /lib64/libc.so.6(_IO_vfprintf-0x157168)[0x80c9b5b968]
<br>
[bd-login:09107] [ 2] /lib64/libc.so.6(_IO_vfprintf-0x157168)[0x80c9b5b968]
<br>
[bd-login:09106] [ 2] /lib64/libc.so.6[0x80c9b600b4]
<br>
[bd-login:09106] [ 3] /lib64/libc.so.6[0x80c9b600b4]
<br>
[bd-login:09107] [ 3] /lib64/libc.so.6(_IO_vfprintf-0x157010)[0x80c9b5bac0]
<br>
[bd-login:09107] [ 4] /lib64/libc.so.6(_IO_vfprintf-0x157010)[0x80c9b5bac0]
<br>
[bd-login:09106] [ 4]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x66580)[0xfffa8296580]
<br>
[bd-login:09106] [ 5]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x67604)[0xfffa8297604]
<br>
[bd-login:09106] [ 6]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_lmngr_alloc-0x1af04)[0xfffa829784c]
<br>
[bd-login:09106] [ 7]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_allocate_block-0x607b4)[0xfffa8250d4c]
<br>
[bd-login:09106]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x66580)[0xfff8e156580]
<br>
[bd-login:09107] [ 5]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x67604)[0xfff8e157604]
<br>
[bd-login:09107] [ 6]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_lmngr_alloc-0x1af04)[0xfff8e15784c]
<br>
[bd-login:09107] [ 7]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_allocate_block-0x607b4)[0xfff8e110d4c]
<br>
[bd-login:09107] [ 8]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x165e4)[0xfff8e1065e4]
<br>
[bd-login:09107] [ 9]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x1a7d8)[0xfff8e10a7d8]
<br>
[bd-login:09107] [10]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_comm_query-0x61b50)[0xfff8e10f970]
<br>
[bd-login:09107] [11] [ 8]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x165e4)[0xfffa82465e4]
<br>
[bd-login:09106] [ 9]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x1a7d8)[0xfffa824a7d8]
<br>
[bd-login:09106] [10]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_comm_query-0x61b50)[0xfffa824f970]
<br>
[bd-login:09106] [11]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x165ba0)[0xfff8f4b5ba0]
<br>
[bd-login:09107] [12]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x165b14)[0xfff8f4b5b14]
<br>
[bd-login:09107] [13]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x165ba0)[0xfffa95f5ba0]
<br>
[bd-login:09106] [12]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x165b14)[0xfffa95f5b14]
<br>
[bd-login:09106] [13]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x1659a8)[0xfffa95f59a8]
<br>
[bd-login:09106] [14]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x1659a8)[0xfff8f4b59a8]
<br>
[bd-login:09107] [14]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x1657ac)[0xfffa95f57ac]
<br>
[bd-login:09106] [15]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x1657ac)[0xfff8f4b57ac]
<br>
[bd-login:09107] [15]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(mca_coll_base_comm_select-0x9b89c)[0xfff8f4ae3ec]
<br>
[bd-login:09107]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(mca_coll_base_comm_select-0x9b89c)[0xfffa95ee3ec]
<br>
[bd-login:09106] [16] [16]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(ompi_mpi_init-0x13f790)[0xfff8f401408]
<br>
[bd-login:09107] [17]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(ompi_mpi_init-0x13f790)[0xfffa9541408]
<br>
[bd-login:09106] [17]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(MPI_Init-0xf28d4)[0xfffa9591c74]
<br>
[bd-login:09106] [18] examples/ring_c[0x1000099c]
<br>
[bd-login:09106] [19]
<br>
/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(MPI_Init-0xf28d4)[0xfff8f451c74]
<br>
[bd-login:09107] [18] examples/ring_c[0x1000099c]
<br>
[bd-login:09107] [19] /lib64/libc.so.6[0x80c9b2bcd8]
<br>
[bd-login:09107] [20] /lib64/libc.so.6[0x80c9b2bcd8]
<br>
[bd-login:09106] [20]
<br>
/lib64/libc.so.6(__libc_start_main-0x184e00)[0x80c9b2bed0]
<br>
[bd-login:09107] *** End of error message ***
<br>
/lib64/libc.so.6(__libc_start_main-0x184e00)[0x80c9b2bed0]
<br>
[bd-login:09106] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 0 on node bd-login exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><p><p><p><p>On Thu, Jul 31, 2014 at 11:39 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Paul and Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for what it's worth :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) i faced the very same issue on my (sloooow) qemu emulated ppc64 vm
</span><br>
<span class="quotelev1">&gt; b) i was able to run very basic programs when passing --mca coll ^ml to
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/08/01 12:30, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I fear this will require some effort to chase all the breakage down given that (to my knowledge, at least) we lack PPC machines in the devel group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 31, 2014, at 5:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On the path to verifying George's atomics patch, I have started just by verifying that I can still build the UNPATCHED trunk on each of the platforms I listed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried two PPC64/Linux systems so far and am seeing the same problem on both.  Though I can pass &quot;make check&quot; both platforms SEGV on
</span><br>
<span class="quotelev1">&gt;    mpirun -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this the expected state of the trunk on big-endian systems?
</span><br>
<span class="quotelev1">&gt; I am thinking in particular of <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15365.php">http://www.open-mpi.org/community/lists/devel/2014/07/15365.php</a> in which Ralph wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Yeah, my fix won't work for big endian machines - this is going to be an issue across the
</span><br>
<span class="quotelev1">&gt; code base now, so we'll have to troll and fix it. I was doing the minimal change required to
</span><br>
<span class="quotelev1">&gt; fix the trunk in the meantime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If this big-endian failure is not known/expected let me know and I'll provide details.
</span><br>
<span class="quotelev1">&gt; Since testing George's patch only requires &quot;make check&quot; I can proceed with that regardless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 4:25 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Awesome, thanks Paul. When the results will be in we will fix whatever is needed for these less common architectures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 7:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 4:13 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Paul, I know you have a pretty diverse range computers. Can you try to compile and run a &quot;make check&quot; with the following patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will see what I can do for ARMv7, MIPS, PPC and IA64 (or whatever subset of those is still supported).
</span><br>
<span class="quotelev1">&gt; The ARM and MIPS system are emulators and take forever to build OMPI.
</span><br>
<span class="quotelev1">&gt; However, I am not even sure how soon I'll get to start this testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Add SPARC (v8plus and v9) to that list.
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
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15411.php">http://www.open-mpi.org/community/lists/devel/2014/07/15411.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15412.php">http://www.open-mpi.org/community/lists/devel/2014/07/15412.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15414.php">http://www.open-mpi.org/community/lists/devel/2014/07/15414.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15425.php">http://www.open-mpi.org/community/lists/devel/2014/07/15425.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15436.php">http://www.open-mpi.org/community/lists/devel/2014/08/15436.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15438.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15436.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>In reply to:</strong> <a href="15436.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15438.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Reply:</strong> <a href="15438.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
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

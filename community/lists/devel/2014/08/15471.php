<?
$subject_val = "Re: [OMPI devel] Trunk broken for PPC64?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  2 14:39:20 2014" -->
<!-- isoreceived="20140802183920" -->
<!-- sent="Sat, 2 Aug 2014 11:39:06 -0700" -->
<!-- isosent="20140802183906" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken for PPC64?" -->
<!-- id="A8D75AAD-82AD-4B31-9552-71CA495C1DE6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA169JNMz6xqsDHzdh4GK-SmprwkG3bZEFWA1ESkh0ar2Mw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-02 14:39:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15472.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>Previous message:</strong> <a href="15470.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15441.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good suggestion, Paul - I have committed it in r32407 and added it to cmr #4826
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Aug 1, 2014, at 1:12 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the moment ompi/mca/osc/sm/osc_sm_component.c is using the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_GETPAGESIZE
</span><br>
<span class="quotelev1">&gt;         pagesize = getpagesize();
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;         pagesize = 4096;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While other places in the code use sysconf(), but not always consistently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And on some systems _SC_PAGESIZE is spelled as _SC_PAGE_SIZE.
</span><br>
<span class="quotelev1">&gt; Fortunately configure already checks these variations for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I suggest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_GETPAGESIZE
</span><br>
<span class="quotelev1">&gt;         pagesize = getpagesize();
</span><br>
<span class="quotelev1">&gt; #elif defined(_SC_PAGESIZE )
</span><br>
<span class="quotelev1">&gt;         pagesize = sysconf(_SC_PAGESIZE);
</span><br>
<span class="quotelev1">&gt; #elif defined(_SC_PAGE_SIZE)
</span><br>
<span class="quotelev1">&gt;         pagesize = sysconf(_SC_PAGE_SIZE);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;         pagesize = 65536; /* safer to overestimate than under */
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_pagesize() anyone?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 1, 2014 at 12:50 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you are absolutly right !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in ompi/mca/coll/ml/coll_ml_lmngr.c at line 53,
</span><br>
<span class="quotelev1">&gt; cm-&gt;lmngr_alignment is hard coded to 4096
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as a proof of concept, i hard coded it to 65536 and now coll/ml works just fine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i will now write a patch that uses sysconf(_SC_PAGESIZE) instead
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
<span class="quotelev1">&gt; On 2014/08/01 15:56, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, maybe this has nothing to do with big-endian.
</span><br>
<span class="quotelev2">&gt;&gt; Below is a backtrace from ring_c on an IA64 platform (definitely
</span><br>
<span class="quotelev2">&gt;&gt; little-endian) that looks very similar to me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It happens that sysconf(_SC_PAGESIZE) returns 64K on both of these systems.
</span><br>
<span class="quotelev2">&gt;&gt; So, I wonder if that might be related.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev2">&gt;&gt; [altix][[26769,1],0][/eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/openmpi-1.9a1r32386/ompi/mca/coll/ml/coll_ml_lmngr.c:231:mca_coll_ml_lmngr_init]
</span><br>
<span class="quotelev2">&gt;&gt; COLL-ML [altix:20418] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20418] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20418] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20418] Failing at address: 0x16
</span><br>
<span class="quotelev2">&gt;&gt; [altix][[26769,1],1][/eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/openmpi-1.9a1r32386/ompi/mca/coll/ml/coll_ml_lmngr.c:231:mca_coll_ml_lmngr_init]
</span><br>
<span class="quotelev2">&gt;&gt; COLL-ML [altix:20419] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] Failing at address: 0x16
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20418] [ 0] [0xa000000000010800]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20418] [ 1] /lib/libc.so.6.1(strlen-0x92e930)[0x200000000051b2a0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20418] [altix:20419] [ 0] [0xa000000000010800]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [ 1] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.6.1(strlen-0x92e930)[0x200000000051b2a0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.6.1(_IO_vfprintf-0x998610)[0x20000000004b15d0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [ 3] /lib/libc.so.6.1(+0x82860)[0x20000000004b2860]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.6.1(_IO_vfprintf-0x99f140)[0x20000000004aaaa0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/openmpi/mca_coll_ml.so(+0xc5a70)[0x2000000001e55a70]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/openmpi/mca_coll_ml.so(+0xc84a0)[0x2000000001e584a0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_lmngr_alloc+0x100f520)[0x2000000001e59110]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_allocate_block+0xf6e940)[0x2000000001db8540]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/openmpi/mca_coll_ml.so(+0x10130)[0x2000000001da0130]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/openmpi/mca_coll_ml.so(+0x19970)[0x2000000001da9970]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [11]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_comm_query+0xf6d6b0)[0x2000000001db5830]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [12]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/libmpi.so.0(+0x22fbd0)[0x200000000028fbd0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [13]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/libmpi.so.0(+0x22fac0)[0x200000000028fac0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [14]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/libmpi.so.0(+0x22f7e0)[0x200000000028f7e0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [15]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/libmpi.so.0(+0x22eac0)[0x200000000028eac0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [16]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/libmpi.so.0(mca_coll_base_comm_select-0xbcbb90)[0x200000000027e080]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [17]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/libmpi.so.0(ompi_mpi_init-0xd38e70)[0x2000000000110db0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [18]
</span><br>
<span class="quotelev2">&gt;&gt; /eng/home/PHHargrove/OMPI/openmpi-trunk-linux-ia64/INST/lib/libmpi.so.0(MPI_Init-0xc8bf40)[0x20000000001bdcf0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [19] examples/ring_c[0x4000000000000c00]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [20]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.6.1(__libc_start_main-0x9f56b0)[0x2000000000454590]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] [21] examples/ring_c[0x4000000000000a20]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20419] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.6.1(_IO_vfprintf-0x998610)[0x20000000004b15d0]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20418] [ 3] /lib/libc.so.6.1(+0x82860)[0x20000000004b2860]
</span><br>
<span class="quotelev2">&gt;&gt; [altix:20418] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /lib/libc.so.6.1(_IO_vfprintf-0x99f140)[0x20000000004aaaa0]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 31, 2014 at 11:47 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles's findings are consistent with mine which showed the SEGVs to be in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the coll/ml code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've built with --enable-debug and so below is a backtrace (well, two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually) that might be helpful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately the output of the two ranks did get slightly entangled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ../INST/bin/mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login][[43502,1],0][/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/ompi/mca/coll/ml/coll_ml_lmngr.c:231:mca_coll_ml_lmngr_init]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COLL-ML [bd-login:09106] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login][[43502,1],1][/home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/openmpi-1.9a1r32369/ompi/mca/coll/ml/coll_ml_lmngr.c:231:mca_coll_ml_lmngr_init]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COLL-ML [bd-login:09107] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] Failing at address: 0x10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [ 0] [bd-login:09106] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] Failing at address: 0x10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [ 0] [0xfffa96c0418]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [ 1] [0xfff8f580418]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [ 1] /lib64/libc.so.6(_IO_vfprintf-0x157168)[0x80c9b5b968]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [ 2] /lib64/libc.so.6(_IO_vfprintf-0x157168)[0x80c9b5b968]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [ 2] /lib64/libc.so.6[0x80c9b600b4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [ 3] /lib64/libc.so.6[0x80c9b600b4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [ 3] /lib64/libc.so.6(_IO_vfprintf-0x157010)[0x80c9b5bac0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [ 4] /lib64/libc.so.6(_IO_vfprintf-0x157010)[0x80c9b5bac0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x66580)[0xfffa8296580]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x67604)[0xfffa8297604]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_lmngr_alloc-0x1af04)[0xfffa829784c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_allocate_block-0x607b4)[0xfffa8250d4c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x66580)[0xfff8e156580]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x67604)[0xfff8e157604]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_lmngr_alloc-0x1af04)[0xfff8e15784c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_allocate_block-0x607b4)[0xfff8e110d4c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x165e4)[0xfff8e1065e4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x1a7d8)[0xfff8e10a7d8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_comm_query-0x61b50)[0xfff8e10f970]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [11] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x165e4)[0xfffa82465e4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(+0x1a7d8)[0xfffa824a7d8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_comm_query-0x61b50)[0xfffa824f970]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x165ba0)[0xfff8f4b5ba0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x165b14)[0xfff8f4b5b14]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x165ba0)[0xfffa95f5ba0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x165b14)[0xfffa95f5b14]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x1659a8)[0xfffa95f59a8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [14]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x1659a8)[0xfff8f4b59a8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [14]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x1657ac)[0xfffa95f57ac]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [15]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(+0x1657ac)[0xfff8f4b57ac]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [15]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(mca_coll_base_comm_select-0x9b89c)[0xfff8f4ae3ec]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(mca_coll_base_comm_select-0x9b89c)[0xfffa95ee3ec]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [16] [16]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(ompi_mpi_init-0x13f790)[0xfff8f401408]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [17]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(ompi_mpi_init-0x13f790)[0xfffa9541408]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [17]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(MPI_Init-0xf28d4)[0xfffa9591c74]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [18] examples/ring_c[0x1000099c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [19]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/hargrov1/OMPI/openmpi-trunk-linux-ppc64-gcc/INST/lib/libmpi.so.0(MPI_Init-0xf28d4)[0xfff8f451c74]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [18] examples/ring_c[0x1000099c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [19] /lib64/libc.so.6[0x80c9b2bcd8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] [20] /lib64/libc.so.6[0x80c9b2bcd8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] [20]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main-0x184e00)[0x80c9b2bed0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09107] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main-0x184e00)[0x80c9b2bed0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bd-login:09106] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 0 on node bd-login exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 31, 2014 at 11:39 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Paul and Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for what it's worth :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a) i faced the very same issue on my (sloooow) qemu emulated ppc64 vm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; b) i was able to run very basic programs when passing --mca coll ^ml to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2014/08/01 12:30, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, I fear this will require some effort to chase all the breakage down given that (to my knowledge, at least) we lack PPC machines in the devel group.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 31, 2014, at 5:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  On the path to verifying George's atomics patch, I have started just by verifying that I can still build the UNPATCHED trunk on each of the platforms I listed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have tried two PPC64/Linux systems so far and am seeing the same problem on both.  Though I can pass &quot;make check&quot; both platforms SEGV on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    mpirun -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this the expected state of the trunk on big-endian systems?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am thinking in particular of <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15365.php">http://www.open-mpi.org/community/lists/devel/2014/07/15365.php</a> in which Ralph wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Yeah, my fix won't work for big endian machines - this is going to be an issue across the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code base now, so we'll have to troll and fix it. I was doing the minimal change required to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fix the trunk in the meantime.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  If this big-endian failure is not known/expected let me know and I'll provide details.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since testing George's patch only requires &quot;make check&quot; I can proceed with that regardless.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Jul 31, 2014 at 4:25 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Awesome, thanks Paul. When the results will be in we will fix whatever is needed for these less common architectures.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Jul 31, 2014 at 7:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Jul 31, 2014 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Jul 31, 2014 at 4:13 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul, I know you have a pretty diverse range computers. Can you try to compile and run a &quot;make check&quot; with the following patch?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will see what I can do for ARMv7, MIPS, PPC and IA64 (or whatever subset of those is still supported).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The ARM and MIPS system are emulators and take forever to build OMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, I am not even sure how soon I'll get to start this testing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Add SPARC (v8plus and v9) to that list.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15411.php">http://www.open-mpi.org/community/lists/devel/2014/07/15411.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15412.php">http://www.open-mpi.org/community/lists/devel/2014/07/15412.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15414.php">http://www.open-mpi.org/community/lists/devel/2014/07/15414.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15425.php">http://www.open-mpi.org/community/lists/devel/2014/07/15425.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15436.php">http://www.open-mpi.org/community/lists/devel/2014/08/15436.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15438.php">http://www.open-mpi.org/community/lists/devel/2014/08/15438.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15439.php">http://www.open-mpi.org/community/lists/devel/2014/08/15439.php</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15441.php">http://www.open-mpi.org/community/lists/devel/2014/08/15441.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15471/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15472.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>Previous message:</strong> <a href="15470.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with	PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15441.php">Paul Hargrove: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
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

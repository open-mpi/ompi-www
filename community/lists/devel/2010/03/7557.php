<?
$subject_val = "Re: [OMPI devel] Missing Symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 18:27:43 2010" -->
<!-- isoreceived="20100305232743" -->
<!-- sent="Fri, 5 Mar 2010 18:27:38 -0500" -->
<!-- isosent="20100305232738" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing Symbol" -->
<!-- id="D15707BF-25AB-4BE4-84D6-512A3E8B6193_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E201EC70-D694-4A43-A1B2-9385F66D9260_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing Symbol<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 18:27:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7558.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7556.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7555.php">George Bosilca: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7560.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7560.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We already use global symbols; mca_base_component_repository.c invokes:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (lt_dladvise_global(&amp;opal_mca_dladvise)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>On Mar 5, 2010, at 6:18 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately this will not fix his issues ;( I pretty sure that his problem is related to the fact that mca_pml_v is exported by another dynamic module, and therefore not available via dlsym. I don't think there is a simple solution for this problem, except going back to GLOBAL symbols.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2010, at 18:02 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ick.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wondered aloud on IM to Terry after your earlier emails if we should just custom-patch ltdl in OMPI to fix this issue.  The problem is that libltdl is effectively reporting the &quot;wrong&quot; error back to OMPI, so the error string that we get to print out ends up not being very useful (e.g., not showing which symbol was missing, or what the problem was with the dlopen).  Fixing this properly in libltdl is actually somewhat tricky -- which is why it hasn't been fixed yet.  But given that OMPI's use of libltdl is pretty specific, we might be able to get away with a simple fix that works just for OMPI (but wouldn't necessarily be suitable for all other libltdl users).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmmm...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This looks do-able.  I'll commit in a bit.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 5, 2010, at 1:27 PM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I see... but it is really strange because this module is clean, it does not use nothing. This is the output of the nm command, I can't see any symbol which is not available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [lfialho_at_aoclsb-clus openmpi]$ nm mca_vprotocol_receiver.so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000201208 a _DYNAMIC
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000201408 a _GLOBAL_OFFSET_TABLE_
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 w _Jv_RegisterClasses
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000002011e0 d __CTOR_END__
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000002011d8 d __CTOR_LIST__
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000002011f0 d __DTOR_END__
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000002011e8 d __DTOR_LIST__
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000000011d0 r __FRAME_END__
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000002011f8 d __JCR_END__
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000002011f8 d __JCR_LIST__
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000201640 A __bss_start
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 w __cxa_finalize@@GLIBC_2.2.5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000d40 t __do_global_ctors_aux
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000000007c0 t __do_global_dtors_aux
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000201200 d __dso_handle
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 w __gmon_start__
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000201640 A _edata
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000201648 A _end
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000d78 T _fini
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000750 T _init
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000000007a0 t call_gmon_start
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000201640 b completed.6115
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000810 t frame_dummy
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 U mca_pml_v
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000201460 D mca_vprotocol_receiver
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000c71 t mca_vprotocol_receiver_add_comm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000a5f t mca_vprotocol_receiver_add_procs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000201540 D mca_vprotocol_receiver_component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000cc3 t mca_vprotocol_receiver_component_close
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000d18 t mca_vprotocol_receiver_component_finalize
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000cce t mca_vprotocol_receiver_component_init
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000cb8 t mca_vprotocol_receiver_component_open
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000c93 t mca_vprotocol_receiver_del_comm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000a89 t mca_vprotocol_receiver_del_procs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 000000000000083c t mca_vprotocol_receiver_dump
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000d23 t mca_vprotocol_receiver_enable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000000009e7 t mca_vprotocol_receiver_iprobe
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000b9a t mca_vprotocol_receiver_irecv
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000ab3 t mca_vprotocol_receiver_isend
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000a29 t mca_vprotocol_receiver_probe
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000c00 t mca_vprotocol_receiver_recv
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000b21 t mca_vprotocol_receiver_send
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000000009bd T mca_vprotocol_receiver_start
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000864 t mca_vprotocol_receiver_test
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000896 t mca_vprotocol_receiver_test_all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 00000000000008d0 t mca_vprotocol_receiver_test_any
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000950 t mca_vprotocol_receiver_test_some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000000916 t mca_vprotocol_receiver_wait_any
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 000000000000098a t mca_vprotocol_receiver_wait_some
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 U ompi_request_null
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 U opal_output
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0000000000201440 d p.6113
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [lfialho_at_aoclsb-clus openmpi]$
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 5, 2010, at 7:00 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sorry meant to add this, but you might be able to try and find the symbol causing the issue by twiddling with LD_DEBUG
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Possibly there is an external symbol in the .so that is being loaded that cannot be resolved.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I know that libtool does not help us to find the source of this error, but, what can generate the following error?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [aoclsb-clus.uab.es:11724] mca: base: component_find: unable to open /home/lfialho/lib/openmpi/mca_vprotocol_receiver: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1) yes, the file exists
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2) yes, it has been compiled among all other components
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 3) yes, it is the same Open MPI version
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 4) this component is a copy of the pessimist component implemented by Aurelien
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 5) Aurelien's component presents the same error
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The question is: what mistake should generate an error during module loading?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Leonardo
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7558.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7556.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7555.php">George Bosilca: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7560.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7560.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
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

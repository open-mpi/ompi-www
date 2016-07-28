<?
$subject_val = "Re: [OMPI devel] Missing Symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 13:27:48 2010" -->
<!-- isoreceived="20100305182748" -->
<!-- sent="Fri, 5 Mar 2010 19:27:40 +0100" -->
<!-- isosent="20100305182740" -->
<!-- name="Leonardo Fialho" -->
<!-- email="leonardofialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing Symbol" -->
<!-- id="E158ADE1-BA18-4986-9E1A-D64CF6C25139_at_caos.uab.es" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B9146D1.800_at_oracle.com" -->
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
<strong>From:</strong> Leonardo Fialho (<em>leonardofialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 13:27:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7536.php">Ralph Castain: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7534.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7534.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7536.php">Ralph Castain: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7536.php">Ralph Castain: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7553.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see... but it is really strange because this module is clean, it does not use nothing. This is the output of the nm command, I can't see any symbol which is not available.
<br>
<p>[lfialho_at_aoclsb-clus openmpi]$ nm mca_vprotocol_receiver.so 
<br>
0000000000201208 a _DYNAMIC
<br>
0000000000201408 a _GLOBAL_OFFSET_TABLE_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;w _Jv_RegisterClasses
<br>
00000000002011e0 d __CTOR_END__
<br>
00000000002011d8 d __CTOR_LIST__
<br>
00000000002011f0 d __DTOR_END__
<br>
00000000002011e8 d __DTOR_LIST__
<br>
00000000000011d0 r __FRAME_END__
<br>
00000000002011f8 d __JCR_END__
<br>
00000000002011f8 d __JCR_LIST__
<br>
0000000000201640 A __bss_start
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;w __cxa_finalize@@GLIBC_2.2.5
<br>
0000000000000d40 t __do_global_ctors_aux
<br>
00000000000007c0 t __do_global_dtors_aux
<br>
0000000000201200 d __dso_handle
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;w __gmon_start__
<br>
0000000000201640 A _edata
<br>
0000000000201648 A _end
<br>
0000000000000d78 T _fini
<br>
0000000000000750 T _init
<br>
00000000000007a0 t call_gmon_start
<br>
0000000000201640 b completed.6115
<br>
0000000000000810 t frame_dummy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U mca_pml_v
<br>
0000000000201460 D mca_vprotocol_receiver
<br>
0000000000000c71 t mca_vprotocol_receiver_add_comm
<br>
0000000000000a5f t mca_vprotocol_receiver_add_procs
<br>
0000000000201540 D mca_vprotocol_receiver_component
<br>
0000000000000cc3 t mca_vprotocol_receiver_component_close
<br>
0000000000000d18 t mca_vprotocol_receiver_component_finalize
<br>
0000000000000cce t mca_vprotocol_receiver_component_init
<br>
0000000000000cb8 t mca_vprotocol_receiver_component_open
<br>
0000000000000c93 t mca_vprotocol_receiver_del_comm
<br>
0000000000000a89 t mca_vprotocol_receiver_del_procs
<br>
000000000000083c t mca_vprotocol_receiver_dump
<br>
0000000000000d23 t mca_vprotocol_receiver_enable
<br>
00000000000009e7 t mca_vprotocol_receiver_iprobe
<br>
0000000000000b9a t mca_vprotocol_receiver_irecv
<br>
0000000000000ab3 t mca_vprotocol_receiver_isend
<br>
0000000000000a29 t mca_vprotocol_receiver_probe
<br>
0000000000000c00 t mca_vprotocol_receiver_recv
<br>
0000000000000b21 t mca_vprotocol_receiver_send
<br>
00000000000009bd T mca_vprotocol_receiver_start
<br>
0000000000000864 t mca_vprotocol_receiver_test
<br>
0000000000000896 t mca_vprotocol_receiver_test_all
<br>
00000000000008d0 t mca_vprotocol_receiver_test_any
<br>
0000000000000950 t mca_vprotocol_receiver_test_some
<br>
0000000000000916 t mca_vprotocol_receiver_wait_any
<br>
000000000000098a t mca_vprotocol_receiver_wait_some
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U ompi_request_null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U opal_output
<br>
0000000000201440 d p.6113
<br>
[lfialho_at_aoclsb-clus openmpi]$
<br>
<p>On Mar 5, 2010, at 7:00 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Sorry meant to add this, but you might be able to try and find the symbol causing the issue by twiddling with LD_DEBUG
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Possibly there is an external symbol in the .so that is being loaded that cannot be resolved.
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know that libtool does not help us to find the source of this error, but, what can generate the following error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [aoclsb-clus.uab.es:11724] mca: base: component_find: unable to open /home/lfialho/lib/openmpi/mca_vprotocol_receiver: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) yes, the file exists
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) yes, it has been compiled among all other components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) yes, it is the same Open MPI version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) this component is a copy of the pessimist component implemented by Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) Aurelien's component presents the same error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The question is: what mistake should generate an error during module loading?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7536.php">Ralph Castain: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7534.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7534.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7536.php">Ralph Castain: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7536.php">Ralph Castain: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7553.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
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

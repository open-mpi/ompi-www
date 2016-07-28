<?
$subject_val = "Re: [OMPI devel] Missing Symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 14:12:42 2010" -->
<!-- isoreceived="20100305191242" -->
<!-- sent="Fri, 5 Mar 2010 14:12:27 -0500" -->
<!-- isosent="20100305191227" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing Symbol" -->
<!-- id="DB81622E-9822-4FE0-A89F-33BF0A08E211_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3ED16224-4EE7-41C6-8D7D-235A84DA8CCA_at_caos.uab.es" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 14:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7545.php">Jeff Squyres: "[OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7543.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>In reply to:</strong> <a href="7542.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7547.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7547.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would first try the Open MPI configure option --disable-visibility. If this doesn't fix it, you should make sure that dlopen is called with the GLOBAL flag on (don't remember where exactly in the code and unfortunately I can't check right now). Use gdb and set a breakpoint to dlopen and you will find it.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 5, 2010, at 14:00 , Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, probably ompi_request_null and opal_output are not good candidates. I'm trying with mca_pml_v. But I'm not familiarized with this framework although it is really small.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George, you said to change this (opal/mca/base/mca_base_component_find.c):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_HAVE_LTDL_ADVISE
</span><br>
<span class="quotelev1">&gt;  component_handle = lt_dlopenadvise(target_file-&gt;filename, opal_mca_dladvise);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;  component_handle = lt_dlopenext(target_file-&gt;filename);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to use lt_dladvise_global instead of lt_dladvise_local?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2010, at 7:47 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would also start nm'ing the .so's you think the U symbols are resolved in to make sure they are exposed.  Luckily you only have 3 symbols to look for.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's probably a visibility issue - check for an OMPI_DECLSPEC missing from the declaration of a symbol.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 5, 2010, at 11:40 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I renamed all references to Aurelien's componant name and removed all code regarding to the component itself. There are only functions which returns OMPI_SUCCESS. No other function is called.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm debugging with LD_DEBUG=symbols, but the output is really huge! Probably the error is in the mca_pml_v symbol:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 19643:	/home/lfialho/lib/openmpi/mca_vprotocol_receiver.so: error: symbol lookup error: undefined symbol: mca_pml_v (fatal)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Leonardo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 5, 2010, at 7:35 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You said this component was a copy of Aurelien's component? Did you rename the critical elements (e.g., component, module) inside it to avoid name confusion?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 5, 2010, at 11:27 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I see... but it is really strange because this module is clean, it does not use nothing. This is the output of the nm command, I can't see any symbol which is not available.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [lfialho_at_aoclsb-clus openmpi]$ nm mca_vprotocol_receiver.so 0000000000201208 a _DYNAMIC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000201408 a _GLOBAL_OFFSET_TABLE_
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             w _Jv_RegisterClasses
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000002011e0 d __CTOR_END__
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000002011d8 d __CTOR_LIST__
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000002011f0 d __DTOR_END__
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000002011e8 d __DTOR_LIST__
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000000011d0 r __FRAME_END__
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000002011f8 d __JCR_END__
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000002011f8 d __JCR_LIST__
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000201640 A __bss_start
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             w __cxa_finalize@@GLIBC_2.2.5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000d40 t __do_global_ctors_aux
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000000007c0 t __do_global_dtors_aux
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000201200 d __dso_handle
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             w __gmon_start__
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000201640 A _edata
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000201648 A _end
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000d78 T _fini
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000750 T _init
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000000007a0 t call_gmon_start
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000201640 b completed.6115
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000810 t frame_dummy
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             U mca_pml_v
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000201460 D mca_vprotocol_receiver
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000c71 t mca_vprotocol_receiver_add_comm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000a5f t mca_vprotocol_receiver_add_procs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000201540 D mca_vprotocol_receiver_component
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000cc3 t mca_vprotocol_receiver_component_close
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000d18 t mca_vprotocol_receiver_component_finalize
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000cce t mca_vprotocol_receiver_component_init
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000cb8 t mca_vprotocol_receiver_component_open
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000c93 t mca_vprotocol_receiver_del_comm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000a89 t mca_vprotocol_receiver_del_procs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 000000000000083c t mca_vprotocol_receiver_dump
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000d23 t mca_vprotocol_receiver_enable
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000000009e7 t mca_vprotocol_receiver_iprobe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000b9a t mca_vprotocol_receiver_irecv
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000ab3 t mca_vprotocol_receiver_isend
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000a29 t mca_vprotocol_receiver_probe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000c00 t mca_vprotocol_receiver_recv
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000b21 t mca_vprotocol_receiver_send
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000000009bd T mca_vprotocol_receiver_start
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000864 t mca_vprotocol_receiver_test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000896 t mca_vprotocol_receiver_test_all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 00000000000008d0 t mca_vprotocol_receiver_test_any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000950 t mca_vprotocol_receiver_test_some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000000916 t mca_vprotocol_receiver_wait_any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 000000000000098a t mca_vprotocol_receiver_wait_some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             U ompi_request_null
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             U opal_output
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0000000000201440 d p.6113
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [lfialho_at_aoclsb-clus openmpi]$
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 5, 2010, at 7:00 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry meant to add this, but you might be able to try and find the symbol causing the issue by twiddling with LD_DEBUG
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Possibly there is an external symbol in the .so that is being loaded that cannot be resolved.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Leonardo Fialho wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I know that libtool does not help us to find the source of this error, but, what can generate the following error?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [aoclsb-clus.uab.es:11724] mca: base: component_find: unable to open /home/lfialho/lib/openmpi/mca_vprotocol_receiver: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1) yes, the file exists
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2) yes, it has been compiled among all other components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3) yes, it is the same Open MPI version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 4) this component is a copy of the pessimist component implemented by Aurelien
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 5) Aurelien's component presents the same error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The question is: what mistake should generate an error during module loading?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Leonardo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="7545.php">Jeff Squyres: "[OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7543.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>In reply to:</strong> <a href="7542.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7547.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Reply:</strong> <a href="7547.php">Leonardo Fialho: "Re: [OMPI devel] Missing Symbol"</a>
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

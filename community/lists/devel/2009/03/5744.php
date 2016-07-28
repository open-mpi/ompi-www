<?
$subject_val = "Re: [OMPI devel] Error in VT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 12:06:56 2009" -->
<!-- isoreceived="20090330160656" -->
<!-- sent="Mon, 30 Mar 2009 12:06:36 -0400" -->
<!-- isosent="20090330160636" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error in VT" -->
<!-- id="6D58E34A-B8C7-4307-89E3-8DF10B9BC16B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D0E968.6030701_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error in VT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 12:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5745.php">Steve Wise: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running	OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5743.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5741.php">Leonardo Fialho: "[OMPI devel] Error in VT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5746.php">Leonardo Fialho: "Re: [OMPI devel] Error in VT"</a>
<li><strong>Reply:</strong> <a href="5746.php">Leonardo Fialho: "Re: [OMPI devel] Error in VT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Mar 30, 2009, at 11:46 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm experimenting the following errors while using Open MPI release
</span><br>
<span class="quotelev1">&gt; 1.3.1 combined with VT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; STAT P 2.258062 43.0000% 488.997562 0
</span><br>
<span class="quotelev1">&gt; STAT P 2.260121 44.0000% 485.672638 0
</span><br>
<span class="quotelev1">&gt; STAT P 2.262175 45.0000% 486.854935 0
</span><br>
<span class="quotelev1">&gt; RFG_Regions_stackPop(): Error: Stack underflow
</span><br>
<span class="quotelev1">&gt; RFG_Regions_stackPop(): Error: Stack underflow
</span><br>
<span class="quotelev1">&gt; VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
</span><br>
<span class="quotelev1">&gt; [nodo1][[43845,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
</span><br>
<span class="quotelev1">&gt; RFG_Regions_stackPop(): Error: Stack underflow
</span><br>
<span class="quotelev1">&gt; VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 8814 on
</span><br>
<span class="quotelev1">&gt; node nodo2 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [fialho_at_aoclsd gmwat]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Along different executions the error occurs in different situations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5745.php">Steve Wise: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running	OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5743.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5741.php">Leonardo Fialho: "[OMPI devel] Error in VT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5746.php">Leonardo Fialho: "Re: [OMPI devel] Error in VT"</a>
<li><strong>Reply:</strong> <a href="5746.php">Leonardo Fialho: "Re: [OMPI devel] Error in VT"</a>
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

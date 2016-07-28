<?
$subject_val = "Re: [OMPI devel] Error in VT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:00:34 2009" -->
<!-- isoreceived="20090330170034" -->
<!-- sent="Mon, 30 Mar 2009 19:04:49 +0200" -->
<!-- isosent="20090330170449" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error in VT" -->
<!-- id="49D0FBB1.1030805_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6D58E34A-B8C7-4307-89E3-8DF10B9BC16B_at_cisco.com" -->
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
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 13:04:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5747.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5745.php">Steve Wise: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running	OpenMPI-1.3.1rc4"</a>
<li><strong>In reply to:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI devel] Error in VT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5772.php">Matthias Jurenz: "Re: [OMPI devel] Error in VT"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5772.php">Matthias Jurenz: "Re: [OMPI devel] Error in VT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>There are...
<br>
<p>Thanks a lot,
<br>
Leonardo
<br>
<p>Jeff Squyres escribi&#243;:
<br>
<span class="quotelev1">&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2009, at 11:46 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm experimenting the following errors while using Open MPI release
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.1 combined with VT.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; STAT P 2.258062 43.0000% 488.997562 0
</span><br>
<span class="quotelev2">&gt;&gt; STAT P 2.260121 44.0000% 485.672638 0
</span><br>
<span class="quotelev2">&gt;&gt; STAT P 2.262175 45.0000% 486.854935 0
</span><br>
<span class="quotelev2">&gt;&gt; RFG_Regions_stackPop(): Error: Stack underflow
</span><br>
<span class="quotelev2">&gt;&gt; RFG_Regions_stackPop(): Error: Stack underflow
</span><br>
<span class="quotelev2">&gt;&gt; VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
</span><br>
<span class="quotelev2">&gt;&gt; [nodo1][[43845,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
</span><br>
<span class="quotelev2">&gt;&gt; RFG_Regions_stackPop(): Error: Stack underflow
</span><br>
<span class="quotelev2">&gt;&gt; VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 1 with PID 8814 on
</span><br>
<span class="quotelev2">&gt;&gt; node nodo2 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [fialho_at_aoclsd gmwat]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Along different executions the error occurs in different situations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34-93-581-2478
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
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478



</pre>
<p>
declare -x LD_LIBRARY_PATH=&quot;/home/fialho/local/tau-2.18.1p1/i386_linux/lib:/home/fialho/OSS/lib:/home/fialho/gmate/lib:/home/fialho/local/openmpi-1.3.1/lib:/home/fialho/dyninst/lib:/home/fialho/local/lib:/home/fialho/local/gsl-1.9/lib/:/home/fialho/dyninst/lib&quot;
<br>
<p><hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5746/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5746/gmwat.tar.gz">gmwat.tar.gz</a>
</ul>
<!-- attachment="gmwat.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5747.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5745.php">Steve Wise: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running	OpenMPI-1.3.1rc4"</a>
<li><strong>In reply to:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI devel] Error in VT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5772.php">Matthias Jurenz: "Re: [OMPI devel] Error in VT"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5772.php">Matthias Jurenz: "Re: [OMPI devel] Error in VT"</a>
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

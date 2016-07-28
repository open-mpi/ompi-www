<?
$subject_val = "Re: [OMPI devel] Error in VT";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 05:17:29 2009" -->
<!-- isoreceived="20090401091729" -->
<!-- sent="Wed, 01 Apr 2009 11:17:24 +0200" -->
<!-- isosent="20090401091724" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error in VT" -->
<!-- id="1238577444.7060.53.camel_at_ricolap" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49D0FBB1.1030805_at_aomail.uab.es" -->
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
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 05:17:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5773.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5771.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5746.php">Leonardo Fialho: "Re: [OMPI devel] Error in VT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Leonardo,
<br>
<p>I guess that your program uses POSIX threads and needs the MPI thread
<br>
support level MPI_THREAD_MULTIPLE, right?
<br>
Unfortunately, the OMPI integrated version of VT doesn't support neither
<br>
Pthreads nor any MPI thread level.
<br>
<p>The latest &quot;stand-alone-version&quot; of VT (5.6.3) supports at least
<br>
Pthreads and the MPI thread support levels MPI_THREAD_SINGLE and
<br>
MPI_THREAD_FUNNELED. So if you can change the MPI thread level
<br>
requirement to MPI_THREAD_SINGLE or MPI_THREAD_FUNNELED tracing of your
<br>
code should work.
<br>
You can download the latest VT version at
<br>
<a href="http://www.tu-dresden.de/zih/vampirtrace">http://www.tu-dresden.de/zih/vampirtrace</a>. Please give it a try.
<br>
<p>Regards,
<br>
Matthias Jurenz
<br>
<p>On Mon, 2009-03-30 at 19:04 +0200, Leonardo Fialho wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres escribi&#195;&#179;:
</span><br>
<span class="quotelev2">&gt; &gt; Can you send all the information listed here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 30, 2009, at 11:46 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm experimenting the following errors while using Open MPI release
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.3.1 combined with VT.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; STAT P 2.258062 43.0000% 488.997562 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; STAT P 2.260121 44.0000% 485.672638 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; STAT P 2.262175 45.0000% 486.854935 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; RFG_Regions_stackPop(): Error: Stack underflow
</span><br>
<span class="quotelev3">&gt; &gt;&gt; RFG_Regions_stackPop(): Error: Stack underflow
</span><br>
<span class="quotelev3">&gt; &gt;&gt; VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [nodo1][[43845,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; RFG_Regions_stackPop(): Error: Stack underflow
</span><br>
<span class="quotelev3">&gt; &gt;&gt; VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun has exited due to process rank 1 with PID 8814 on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node nodo2 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [fialho_at_aoclsd gmwat]$
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Along different executions the error occurs in different situations.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any help?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fax: +34-93-581-2478
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; plain text document attachment (environ.txt)
</span><br>
<span class="quotelev1">&gt; declare -x LD_LIBRARY_PATH=&quot;/home/fialho/local/tau-2.18.1p1/i386_linux/lib:/home/fialho/OSS/lib:/home/fialho/gmate/lib:/home/fialho/local/openmpi-1.3.1/lib:/home/fialho/dyninst/lib:/home/fialho/local/lib:/home/fialho/local/gsl-1.9/lib/:/home/fialho/dyninst/lib&quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5772/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5773.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5771.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5746.php">Leonardo Fialho: "Re: [OMPI devel] Error in VT"</a>
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

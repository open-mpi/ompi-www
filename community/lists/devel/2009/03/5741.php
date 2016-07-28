<?
$subject_val = "[OMPI devel] Error in VT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 11:42:33 2009" -->
<!-- isoreceived="20090330154233" -->
<!-- sent="Mon, 30 Mar 2009 17:46:48 +0200" -->
<!-- isosent="20090330154648" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI devel] Error in VT" -->
<!-- id="49D0E968.6030701_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Error in VT<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 11:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5742.php">Pavel Shamis (Pasha): "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running	OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5740.php">Jeff Squyres: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI devel] Error in VT"</a>
<li><strong>Reply:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI devel] Error in VT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm experimenting the following errors while using Open MPI release 
<br>
1.3.1 combined with VT.
<br>
<p>STAT P 2.258062 43.0000% 488.997562 0
<br>
STAT P 2.260121 44.0000% 485.672638 0
<br>
STAT P 2.262175 45.0000% 486.854935 0
<br>
RFG_Regions_stackPop(): Error: Stack underflow
<br>
RFG_Regions_stackPop(): Error: Stack underflow
<br>
VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
<br>
[nodo1][[43845,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
<br>
RFG_Regions_stackPop(): Error: Stack underflow
<br>
VampirTrace [vt_otf_trc.c:1300]: Resource temporarily unavailable
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 8814 on
<br>
node nodo2 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[fialho_at_aoclsd gmwat]$
<br>
<p>Along different executions the error occurs in different situations.
<br>
<p>Any help?
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5742.php">Pavel Shamis (Pasha): "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running	OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5740.php">Jeff Squyres: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI devel] Error in VT"</a>
<li><strong>Reply:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI devel] Error in VT"</a>
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

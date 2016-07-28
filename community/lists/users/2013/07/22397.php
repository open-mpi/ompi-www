<?
$subject_val = "Re: [OMPI users] Locker memory Limits error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 26 08:15:58 2013" -->
<!-- isoreceived="20130726121558" -->
<!-- sent="Fri, 26 Jul 2013 12:15:43 +0000" -->
<!-- isosent="20130726121543" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Locker memory Limits error" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F76F88C_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF685E8C50.0D3539D3-ONC1257BB4.002DF1D0-C1257BB4.002E55B7_at_ulstein.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Locker memory Limits error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-26 08:15:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network"</a>
<li><strong>Previous message:</strong> <a href="22396.php">thomas.forde_at_[hidden]: "[OMPI users] Locker memory Limits error"</a>
<li><strong>In reply to:</strong> <a href="22396.php">thomas.forde_at_[hidden]: "[OMPI users] Locker memory Limits error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See this FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p><p>On Jul 26, 2013, at 4:26 AM, thomas.forde_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; hi guys 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; im having a strange problem when starting some jobs that i dont uderstand. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; its just 1 node that has an issue and i find it odd. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OpenFabrics (openib) BTL failed to initialize while trying to 
</span><br>
<span class="quotelev1">&gt; allocate some locked memory.  This typically can indicate that the 
</span><br>
<span class="quotelev1">&gt; memlock limits are set too low.  For most HPC installations, the 
</span><br>
<span class="quotelev1">&gt; memlock limits should be set to &quot;unlimited&quot;.  The failure occured 
</span><br>
<span class="quotelev1">&gt; here: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   OMPI source:   btl_openib_component.c:1066 
</span><br>
<span class="quotelev1">&gt;   Function:      ompi_free_list_init_ex_new() 
</span><br>
<span class="quotelev1">&gt;   Device:        mlx4_0 
</span><br>
<span class="quotelev1">&gt;   Memlock limit: 65536 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i have rechecked and verified everywhere that the limit is set to &quot;unlimited&quot;. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i can run the same job on other nodes and they have no problems, just so strnage that this one node crashes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; running open_mpi 1.4.5 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; not sure where to look next. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this node was working 2 days ago, but after a reboot it has changed to this. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Denne e-posten kan innehalde informasjon som er konfidensiell 
</span><br>
<span class="quotelev1">&gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang 
</span><br>
<span class="quotelev1">&gt; til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail may contain confidential information, or otherwise 
</span><br>
<span class="quotelev1">&gt; be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. 
</span><br>
<span class="quotelev1">&gt; If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PBefore 
</span><br>
<span class="quotelev1">&gt; printing, think about the environment
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast hanging after some amount of data	transferred on Infiniband network"</a>
<li><strong>Previous message:</strong> <a href="22396.php">thomas.forde_at_[hidden]: "[OMPI users] Locker memory Limits error"</a>
<li><strong>In reply to:</strong> <a href="22396.php">thomas.forde_at_[hidden]: "[OMPI users] Locker memory Limits error"</a>
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

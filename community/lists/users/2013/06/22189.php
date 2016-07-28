<?
$subject_val = "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 15:06:58 2013" -->
<!-- isoreceived="20130621190658" -->
<!-- sent="Fri, 21 Jun 2013 19:06:53 +0000" -->
<!-- isosent="20130621190653" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6982DE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OFE4071E48.1396DF08-ONC1257B91.00263DFC-C1257B91.0026B614_at_ulstein.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 15:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22190.php">thomas.forde_at_[hidden]: "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="22188.php">Gus Correa: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22170.php">thomas.forde_at_[hidden]: "[OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22190.php">thomas.forde_at_[hidden]: "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>Reply:</strong> <a href="22190.php">thomas.forde_at_[hidden]: "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This usually means that you are inadvertently mixing versions of Open MPI between your nodes (e.g., version A.B.C on your head node, and version X.Y.Z on your compute nodes).
<br>
<p>On Jun 21, 2013, at 3:02 AM, thomas.forde_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; im running into a strange problem when trying to start parallell processing with Numcea Fine Marine software for jobs. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have managed to setup openmpi 1.64 on qmaster and all nodes, so they all run the same version. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Every time i try to start a job that requires more then 1 node the job dies with the following error: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Data unpack had inadequate space in file base/odls_base_default_fns.c at line 528 
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Data unpack had inadequate space in file orted/orted_comm.c at line 292 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i run the job with only 16 cores(1 node) the jobs runs fine. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Im new to all this, so im trying hard to figoure out where the mistake may lie, but even trying to search th archives for what i might think be right, gives me so amny hits it takes forever to investigate. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./THomas 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
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
<li><strong>Next message:</strong> <a href="22190.php">thomas.forde_at_[hidden]: "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="22188.php">Gus Correa: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22170.php">thomas.forde_at_[hidden]: "[OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22190.php">thomas.forde_at_[hidden]: "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<li><strong>Reply:</strong> <a href="22190.php">thomas.forde_at_[hidden]: "Re: [OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
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

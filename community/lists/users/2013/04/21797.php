<?
$subject_val = "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 25 14:49:26 2013" -->
<!-- isoreceived="20130425184926" -->
<!-- sent="Thu, 25 Apr 2013 18:49:20 +0000" -->
<!-- isosent="20130425184920" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC44051A43_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANUQSWBBPDbZvJ+8iWGyPCh_5j5LLRXJGzm1iUKNBaD-GZUtHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-25 14:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21798.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21796.php">Vladimir Yamshchikov: "[OMPI users] multithreaded jobs"</a>
<li><strong>In reply to:</strong> <a href="21795.php">Padma Pavani: "[OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21830.php">Dave Love: "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm guessing you're the alter ego of <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12309.php">http://www.open-mpi.org/community/lists/devel/2013/04/12309.php</a>?  :-)
<br>
<p>My first suggestion to you is to upgrade your version of Open MPI -- 1.4.0 is ancient.  Can you upgrade to 1.6.4?
<br>
<p><p>On Apr 25, 2013, at 2:08 PM, Padma Pavani &lt;gpadmapavani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am facing some problem while running HPL benchmark.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am using Intel mpi -4.0.1 with Qlogic-OFED-1.5.4.1  to run benchmark and also tried with openmpi-1.4.0 but getting same error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Error File : 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06936] [[14544,1],25] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06936] [[14544,1],25] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06936] [[14544,1],25] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 86
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06975] [[14544,1],27] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06975] [[14544,1],27] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06975] [[14544,1],27] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/plm_base_proxy.c at line 86
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06990] [[14544,1],19] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06990] [[14544,1],19] could not get route to [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21798.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21796.php">Vladimir Yamshchikov: "[OMPI users] multithreaded jobs"</a>
<li><strong>In reply to:</strong> <a href="21795.php">Padma Pavani: "[OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21830.php">Dave Love: "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
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

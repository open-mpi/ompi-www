<?
$subject_val = "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile	provides theallocation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 08:12:18 2013" -->
<!-- isoreceived="20130211131218" -->
<!-- sent="Mon, 11 Feb 2013 13:12:08 +0000" -->
<!-- isosent="20130211131208" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile	provides theallocation" -->
<!-- id="966D2682-CA72-4987-B8FD-27AD923A5A40_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201302110631.r1B6VBHS005118_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile	provides theallocation<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 08:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<li><strong>Previous message:</strong> <a href="21361.php">Daniel Fetchinson: "[OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>In reply to:</strong> <a href="21357.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile provides theallocation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sweet!
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Feb 11, 2013, at 1:39 AM, &quot;Siegmar Gross&quot; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #3493: Handle the case where rankfile provides the allocation
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------+-----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Reporter:  rhc                     |       Owner:  ompi-gk1.6
</span><br>
<span class="quotelev2">&gt;&gt;    Type:  changeset move request  |      Status:  closed
</span><br>
<span class="quotelev2">&gt;&gt; Priority:  critical                |   Milestone:  Open MPI 1.6.4
</span><br>
<span class="quotelev2">&gt;&gt; Version:  trunk                   |  Resolution:  fixed
</span><br>
<span class="quotelev2">&gt;&gt; Keywords:                          |
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------+-----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Changes (by jsquyres):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * status:  assigned =&gt; closed
</span><br>
<span class="quotelev2">&gt;&gt; * resolution:   =&gt; fixed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Excellent! The problem is solved! Thank you very much to everybody.
</span><br>
<span class="quotelev1">&gt; It even works in a mixed Linux/Solaris environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 106 mpiexec -report-bindings -rf rf_ex_sunpc_linpc hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:29841] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][B B] (slot list 0:0-1,1:0-1)
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; [sunpc1:10829] MCW rank 1 bound to socket 0[core 0-1]:
</span><br>
<span class="quotelev1">&gt;  [B B][. .] (slot list 0:0-1)
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; [sunpc1:10829] MCW rank 2 bound to socket 1[core 0]:
</span><br>
<span class="quotelev1">&gt;  [. .][B .] (slot list 1:0)
</span><br>
<span class="quotelev1">&gt; [sunpc1:10829] MCW rank 3 bound to socket 1[core 1]:
</span><br>
<span class="quotelev1">&gt;  [. .][. B] (slot list 1:1)
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 107 ompi_info | grep &quot;MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.4rc4r28039
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 108  cat rf_ex_sunpc_linpc
</span><br>
<span class="quotelev1">&gt; # mpiexec -report-bindings -rf rf_ex_sunpc_linpc hostname
</span><br>
<span class="quotelev1">&gt; rank 0=linpc1 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much once more
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21363.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: an error when running MPI on 2 machines"</a>
<li><strong>Previous message:</strong> <a href="21361.php">Daniel Fetchinson: "[OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>In reply to:</strong> <a href="21357.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile provides theallocation"</a>
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

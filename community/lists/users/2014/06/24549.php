<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 12:12:58 2014" -->
<!-- isoreceived="20140605161258" -->
<!-- sent="Thu, 5 Jun 2014 09:12:55 -0700" -->
<!-- isosent="20140605161255" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30" -->
<!-- id="0D20C6B0-8FAD-4585-B3A3-F4DAC917CCEA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="74A0D537FED93B4EA49EA78E5A3905C317A1110E_at_EXMB02.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 12:12:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>Previous message:</strong> <a href="24548.php">Hammond, Simon David (-EXP): "[OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="24548.php">Hammond, Simon David (-EXP): "[OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24603.php">Nathan Hjelm: "Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know Nathan has it running on the XC30, but I don't see a platform file specifically for it in the repo. Did you try the cray_xe6 platform files - I think he may have just augmented those to handle the XC30 case
<br>
<p>Look in contrib/platform/lanl/cray_xe6
<br>
<p><p>On Jun 5, 2014, at 9:00 AM, Hammond, Simon David (-EXP) &lt;sdhammo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi OpenMPI developers/users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have a working configure line for OpenMPI 1.8.1 on a Cray XC30?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When we compile the code ALPS is located but when we run compiled binaries using aprun we get n * 1 ranks rather than 1 job of n ranks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; S.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Simon Hammond
</span><br>
<span class="quotelev1">&gt; Scalable Computer Architectures (Org. 01422)
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories, NM
</span><br>
<span class="quotelev1">&gt; [Sent from remote connection, please excuse typing errors]
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
<li><strong>Next message:</strong> <a href="24550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>Previous message:</strong> <a href="24548.php">Hammond, Simon David (-EXP): "[OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="24548.php">Hammond, Simon David (-EXP): "[OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24603.php">Nathan Hjelm: "Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
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

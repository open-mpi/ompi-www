<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 07:24:11 2010" -->
<!-- isoreceived="20101014112411" -->
<!-- sent="Thu, 14 Oct 2010 12:23:53 +0100" -->
<!-- isosent="20101014112353" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="87iq15hvau.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3A355AE6-D0D0-41A6-ADFD-A8268F71125A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 07:23:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14462.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14460.php">Jeff Squyres: "Re: [OMPI users] Problem in installing; lib files missing"</a>
<li><strong>In reply to:</strong> <a href="14446.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14462.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14462.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti &lt;reuti_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; With the default binding_instance set to &quot;set&quot; (the default) the
</span><br>
<span class="quotelev1">&gt; shepherd should bind the processes to cores already. With other types
</span><br>
<span class="quotelev1">&gt; of binding_instance these selected cores must be forward to the
</span><br>
<span class="quotelev1">&gt; application via an environment variable or in the hostfile.
</span><br>
<p>My question was specifically about SGE/OMPI tight integration; are you
<br>
actually doing binding successfully with that?  I think I read here that
<br>
the integration doesn't (yet?) deal with SGE core binding, and when we
<br>
turned on the SGE feature we got the OMPI tasks piled onto a single
<br>
core.  We quickly turned it off for MPI jobs when we realized what was
<br>
happening, and I didn't try to investigate further.
<br>
<p><span class="quotelev1">&gt; As this is only a hint to SGE and not a hard request, the user must
</span><br>
<span class="quotelev1">&gt; plan a little bit the allocation beforehand. Especially if you
</span><br>
<span class="quotelev1">&gt; oversubscribe a machine it won't work. 
</span><br>
<p>[It is documented that the binding isn't applied if the selected cores
<br>
are occupied.]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14462.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14460.php">Jeff Squyres: "Re: [OMPI users] Problem in installing; lib files missing"</a>
<li><strong>In reply to:</strong> <a href="14446.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14462.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14462.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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

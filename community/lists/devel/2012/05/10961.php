<?
$subject_val = "Re: [OMPI devel] [PATCH] Open MPI on ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 17:38:32 2012" -->
<!-- isoreceived="20120502213832" -->
<!-- sent="Wed, 2 May 2012 17:38:28 -0400" -->
<!-- isosent="20120502213828" -->
<!-- name="Evan Clinton" -->
<!-- email="evan.m.clinton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Open MPI on ARMv5" -->
<!-- id="CALQMFq1KPpN1uHO4FZGDBUiU1WSwPbYTp3dCmPWs1W3H+beDnA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF1A049ABC19F94A9FC22A9D3BCDE8F9515A1720CA_at_GEORGE.Emea.Arm.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Open MPI on ARMv5<br>
<strong>From:</strong> Evan Clinton (<em>evan.m.clinton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-02 17:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10962.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10960.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10960.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10962.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The Fedora guys are having trouble building the armv5tel variant (well, they did before this patch too, but... :)
</span><br>
<span class="quotelev1">&gt; <a href="http://arm.koji.fedoraproject.org/koji/getfile?taskID=790343&amp;name=build.log">http://arm.koji.fedoraproject.org/koji/getfile?taskID=790343&amp;name=build.log</a>
</span><br>
<p>Ah, I think the problem is that the build system is not playing nicely
<br>
with cross-compiles (which it looks like that's doing (specifically,
<br>
in that case, compiling for armv5 on an armv7 box)).  I think an
<br>
immediate workaround would be to do ./configure
<br>
--host=armv5tel-unknown-linux-gnueabi or similar (in addition to
<br>
specifying the target -march).  I think you'd need to specify the
<br>
--host in a similar manner for any cross-compile of Open MPI?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10962.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10960.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10960.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10962.php">Evan Clinton: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
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

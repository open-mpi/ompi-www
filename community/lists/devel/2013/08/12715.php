<?
$subject_val = "Re: [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 11 14:17:32 2013" -->
<!-- isoreceived="20130811181732" -->
<!-- sent="Sun, 11 Aug 2013 11:17:28 -0700" -->
<!-- isosent="20130811181728" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bad header guard in &amp;lt;src&amp;gt;/opal/memoryhooks/memory.h" -->
<!-- id="42734AAD-A78A-43DD-BD12-357D8A3D07C3_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="26D192DD-77B4-4CFA-945D-F4545F902C28_at_aia.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-11 14:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12716.php">Ralph Castain: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Previous message:</strong> <a href="12714.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12710.php">Michael Schlottke: "[OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! Fixed in trunk and CMRd for 1.7.3
<br>
<p>On Aug 9, 2013, at 1:07 AM, Michael Schlottke &lt;m.schlottke_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if this is the right place to post this, but it seems like the header guard in &lt;src&gt;/opal/memoryhooks/memory.h does not work as intended: The header guard is written as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifndef OPAL_MEMORY_MEMORY_H
</span><br>
<span class="quotelev1">&gt; #define OPAl_MEMORY_MEMORY_H
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where in the second line it probably should read &quot;OPAL_&#133;&quot; and not &quot;OPAl_&#133;&quot;. This is openmpi-1.7.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Michael Schlottke
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SimLab Highly Scalable Fluids &amp; Solids Engineering
</span><br>
<span class="quotelev1">&gt; J&#252;lich Aachen Research Alliance (JARA-HPC)
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University
</span><br>
<span class="quotelev1">&gt; W&#252;llnerstra&#223;e 5a
</span><br>
<span class="quotelev1">&gt; 52062 Aachen
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone: +49 (241) 80 95188
</span><br>
<span class="quotelev1">&gt; Fax: +49 (241) 80 92257
</span><br>
<span class="quotelev1">&gt; Mail: m.schlottke_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web: <a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12715/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12716.php">Ralph Castain: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Previous message:</strong> <a href="12714.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12710.php">Michael Schlottke: "[OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
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

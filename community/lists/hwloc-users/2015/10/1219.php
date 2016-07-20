<?
$subject_val = "Re: [hwloc-users] Assembling multiple node XMLs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 10:20:03 2015" -->
<!-- isoreceived="20151030142003" -->
<!-- sent="Fri, 30 Oct 2015 15:19:58 +0100" -->
<!-- isosent="20151030141958" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Assembling multiple node XMLs" -->
<!-- id="20151030141958.GE2831_at_var.bordeaux.inria.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20151030091732.775348e3_at_antares" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Assembling multiple node XMLs<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 10:19:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1220.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1218.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1218.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1220.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1220.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrej Prsa, on Fri 30 Oct 2015 09:17:32 -0400, wrote:
<br>
<span class="quotelev2">&gt; &gt; Can you have a startup script set
</span><br>
<span class="quotelev2">&gt; &gt; HWLOC_XMLFILE=/common/path/${hostname}.xml in the system-wide
</span><br>
<span class="quotelev2">&gt; &gt; environment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's precisely what I'd been trying, but it proved exceedingly
</span><br>
<span class="quotelev1">&gt; difficult to figure out what environment file is read when mpirun is
</span><br>
<span class="quotelev1">&gt; run directly, when torque runs the job, etc. It seems that neither
</span><br>
<span class="quotelev1">&gt; bashrc nor profile do the job, so I'm now exploring possibilities for
</span><br>
<span class="quotelev1">&gt; ssh environment variable injection... I'll keep digging, thanks a lot
</span><br>
<span class="quotelev1">&gt; for your help and pointers.
</span><br>
<p>Perhaps running something like
<br>
<p>mpiexec sh -c &quot;/usr/bin/env HWLOC_XMLFILE=/common/path/\${hostname}.xml theapplication&quot;
<br>
<p>?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1220.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Previous message:</strong> <a href="1218.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>In reply to:</strong> <a href="1218.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1220.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
<li><strong>Reply:</strong> <a href="1220.php">Andrej Prsa: "Re: [hwloc-users] Assembling multiple node XMLs"</a>
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

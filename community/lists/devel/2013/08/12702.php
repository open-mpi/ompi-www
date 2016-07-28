<?
$subject_val = "Re: [OMPI devel] OpenSHMEM round 2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  6 18:50:36 2013" -->
<!-- isoreceived="20130806225036" -->
<!-- sent="Tue, 6 Aug 2013 22:50:31 +0000" -->
<!-- isosent="20130806225031" -->
<!-- name="David Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenSHMEM round 2" -->
<!-- id="8E25A938F00ED34D90F8C49322FDF192913DCA_at_xmb-rcd-x09.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A21FFB756_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenSHMEM round 2<br>
<strong>From:</strong> David Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-06 18:50:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12703.php">Christopher Samuel: "[OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Previous message:</strong> <a href="12701.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12701.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12711.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The &quot;.git&quot; URL works for me when &quot;git clone&quot;ing it, but I get a 404 in my browser.
<br>
<p>Drop the &quot;.git&quot; and it will function as both a browser URL and a proper git clone URL:
<br>
<p><a href="https://bitbucket.org/jladd_math/mlnx-oshmem">https://bitbucket.org/jladd_math/mlnx-oshmem</a>
<br>
<p>-Dave
<br>
<p>On Aug 6, 2013, at 3:36 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It&#146;s a public repo. What if you do:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; git clone <a href="https://jladd_math&#64;bitbucket.org/jladd_math/mlnx-oshmem.git">https://jladd_math&#64;bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Obviously, everything works for me J
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Shamis, Pavel
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 06, 2013 5:59 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers (devel_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] OpenSHMEM round 2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt; I get 404 error. Probably you have to unlock it.
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; -P
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Joshua Ladd
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 06, 2013 12:30 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers (devel_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] OpenSHMEM round 2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Dear OMPI Community,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Please find on Bitbucket the latest round of OSHMEM changes based on community feedback. Please git and test at your leisure.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev1">&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell: +1 (865) 258 - 8898
</span><br>
<span class="quotelev1">&gt;  
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12703.php">Christopher Samuel: "[OMPI devel] Memory accounting issues with mpirun (was Re: [slurm-dev] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>Previous message:</strong> <a href="12701.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12701.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12711.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
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

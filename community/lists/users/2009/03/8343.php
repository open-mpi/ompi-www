<?
$subject_val = "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 18:00:44 2009" -->
<!-- isoreceived="20090305230044" -->
<!-- sent="Thu, 5 Mar 2009 16:00:34 -0700" -->
<!-- isosent="20090305230034" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit" -->
<!-- id="C30CE823-7770-4116-94F9-FD2337F931E0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CD734115-6260-442F-A273-55845AAC7AF9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 18:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8344.php">George Bosilca: "Re: [OMPI users] &quot;casual&quot; error"</a>
<li><strong>Previous message:</strong> <a href="8342.php">Biagio Lucini: "[OMPI users] &quot;casual&quot; error"</a>
<li><strong>In reply to:</strong> <a href="8331.php">Jeff Squyres: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2009, at 1:29 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 5, 2009, at 1:54 AM, Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The fortran application I'm using here is the CPMD-3.11.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think the processor is Nehalem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Intel(R) Xeon(R) CPU           X5472  @ 3.00GHz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Installation procedure was same on both the clusters. I've not set  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_affinity.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a memory intensive application, but this job was not using
</span><br>
<span class="quotelev2">&gt;&gt; that much amount of memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regarding CPU &amp; ELAPSED TIMEs, the CPU TIME should be greater than
</span><br>
<span class="quotelev2">&gt;&gt; ELAPSED TIME in general (for a parallel program). Right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It depends on exactly what you're reporting for ELAPSED time.  Is  
</span><br>
<span class="quotelev1">&gt; that wall clock time?  Or user time?  Or something else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph and I disagree on this point, but my opinion is that the only  
</span><br>
<span class="quotelev1">&gt; meaningful time reported in a parallel application is the wall clock  
</span><br>
<span class="quotelev1">&gt; time.  The CPU time can be badly skewed by a variety of things, such  
</span><br>
<span class="quotelev1">&gt; as any filesystem IO, network activity (depending on whether you  
</span><br>
<span class="quotelev1">&gt; have an OS-bypass network or not), etc.
</span><br>
<p>You have gradually worn me down on this point... :D
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="8344.php">George Bosilca: "Re: [OMPI users] &quot;casual&quot; error"</a>
<li><strong>Previous message:</strong> <a href="8342.php">Biagio Lucini: "[OMPI users] &quot;casual&quot; error"</a>
<li><strong>In reply to:</strong> <a href="8331.php">Jeff Squyres: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
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

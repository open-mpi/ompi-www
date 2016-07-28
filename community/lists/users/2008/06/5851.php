<?
$subject_val = "Re: [OMPI users] Different CC for orte and opmi?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 11:33:48 2008" -->
<!-- isoreceived="20080609153348" -->
<!-- sent="Mon, 9 Jun 2008 08:27:16 -0700" -->
<!-- isosent="20080609152716" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different CC for orte and opmi?" -->
<!-- id="1D2FE8B7-8429-46F6-B263-1E27CF31CA51_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1213011273.8064.28.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Different CC for orte and opmi?<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 11:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5852.php">Dave Grote: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Previous message:</strong> <a href="5850.php">Bill Johnstone: "[OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<li><strong>In reply to:</strong> <a href="5849.php">Ashley Pittman: "[OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5854.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Reply:</strong> <a href="5854.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley,
<br>
<p>It could work but I think you would be better off to try and  
<br>
statically link the intel libraries.
<br>
<p>Doug Reeder
<br>
On Jun 9, 2008, at 4:34 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to use a different compiler for the orte component and
</span><br>
<span class="quotelev1">&gt; the shared library component when using openmpi?  We are finding  
</span><br>
<span class="quotelev1">&gt; that if
</span><br>
<span class="quotelev1">&gt; we use icc to compile openmpi then orted fails with link errors when I
</span><br>
<span class="quotelev1">&gt; try and launch a job as the intel environment isn't loaded by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use the module command heavily and have modules for openmpi-gnu and
</span><br>
<span class="quotelev1">&gt; openmpi-intel as well as a intel_compiler module.  To use openmpi- 
</span><br>
<span class="quotelev1">&gt; intel
</span><br>
<span class="quotelev1">&gt; we have to load intel_compiler by default on the compute nodes which
</span><br>
<span class="quotelev1">&gt; isn't ideal, is it possible to compile the orte component with gcc and
</span><br>
<span class="quotelev1">&gt; the library component with icc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yours,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman,
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
<li><strong>Next message:</strong> <a href="5852.php">Dave Grote: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Previous message:</strong> <a href="5850.php">Bill Johnstone: "[OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<li><strong>In reply to:</strong> <a href="5849.php">Ashley Pittman: "[OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5854.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Reply:</strong> <a href="5854.php">Ashley Pittman: "Re: [OMPI users] Different CC for orte and opmi?"</a>
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

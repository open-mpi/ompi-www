<?
$subject_val = "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 21:30:22 2008" -->
<!-- isoreceived="20080119023022" -->
<!-- sent="Fri, 18 Jan 2008 21:30:05 -0500" -->
<!-- isosent="20080119023005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)" -->
<!-- id="8DC47884-B626-49BD-BD8D-D4DC36208562_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0801030838q349f7e63n5eab13a474ad4ad6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 21:30:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4857.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4855.php">Jeff Squyres: "Re: [OMPI users] compiler warnings in openmpi-1.2.5rc2"</a>
<li><strong>In reply to:</strong> <a href="4780.php">Jim Kusznir: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 3, 2008, at 11:38 AM, Jim Kusznir wrote:
<br>
<p><span class="quotelev2">&gt; &gt; error: line 300: Dependency tokens must begin with alpha-numeric,  
</span><br>
<span class="quotelev1">&gt; '_'
</span><br>
<span class="quotelev2">&gt; &gt; or '/': Requires: %{_name}-runtime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Huh..this is strange.  Here's the chunk from my spec file and rpm
</span><br>
<span class="quotelev1">&gt; version.  I've now built 3 sets of multi-rpm openmpi, each with a
</span><br>
<span class="quotelev1">&gt; different name, and its worked flawlessly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_aeolus ~]# rpmbuild --version
</span><br>
<span class="quotelev1">&gt; RPM version 4.3.3
</span><br>
<span class="quotelev1">&gt; [root_at_aeolus ~]# grep Requires /usr/src/redhat/SPECS/openmpi.spec
</span><br>
<span class="quotelev1">&gt; Requires: %{modules_rpm_name}
</span><br>
<span class="quotelev1">&gt; Requires: %{mpi_selector_rpm_name}
</span><br>
<span class="quotelev1">&gt; Requires: %{modules_rpm_name}
</span><br>
<span class="quotelev1">&gt; Requires: %{name}-runtime
</span><br>
<span class="quotelev1">&gt; Requires: %{name}-runtime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps its the difference between _name and name.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Bingo!  I don't know how I missed this (especially since there are  
<br>
other Requires with %{foo}), but using %{name} works just fine.
<br>
<p>If you get the cycles, could you try the latest specfile from the  
<br>
trunk and see if that works for you?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4857.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4855.php">Jeff Squyres: "Re: [OMPI users] compiler warnings in openmpi-1.2.5rc2"</a>
<li><strong>In reply to:</strong> <a href="4780.php">Jim Kusznir: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
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

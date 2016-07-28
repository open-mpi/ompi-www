<?
$subject_val = "Re: [OMPI users] Name Mangling";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 16:30:38 2008" -->
<!-- isoreceived="20081204213038" -->
<!-- sent="Thu, 4 Dec 2008 16:30:32 -0500" -->
<!-- isosent="20081204213032" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Name Mangling" -->
<!-- id="708588BC-13A0-4643-A653-BD34640CB87C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49383096.2060603_at_umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Name Mangling<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 16:30:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7399.php">Nick Wright: "[OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7397.php">Ralph Castain: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>In reply to:</strong> <a href="7393.php">Elvedin Trnjanin: "[OMPI users] Name Mangling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, Open MPI just uses whatever name mangling scheme the  
<br>
compiler uses.  Hence, if you compile your app and Open MPI with the  
<br>
same compiler, it should just work.  That being said, if your CLM app  
<br>
is supplying its own name mangling scheme flags to the PGI compiler  
<br>
(i.e., shifting it away from its default scheme), then yes, OMPI won't  
<br>
match it.  You can pass the same flags to OMPI's build process if you  
<br>
want; then they should match.
<br>
<p>We do provide weak symbols on platforms that support them, so it's a  
<br>
little odd that your app apparently isn't seeing them.
<br>
<p><p>On Dec 4, 2008, at 2:33 PM, Elvedin Trnjanin wrote:
<br>
<p><span class="quotelev1">&gt; I'm using OpenMPI 1.2.5 and PGI 7.1.5 compiler suite to get CLM 3.5  
</span><br>
<span class="quotelev1">&gt; working correctly. When compiling for OpenMPI, I encounter the  
</span><br>
<span class="quotelev1">&gt; following snippet of errors -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; areaMod.o(.text+0x98a0): In function `areamod_map_checkmap_':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `mpi_reduce_'
</span><br>
<span class="quotelev1">&gt; areaMod.o(.text+0x9b6c): In function `areamod_map_checkmap_':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `mpi_reduce_'
</span><br>
<span class="quotelev1">&gt; areaMod.o(.text+0x9c39): In function `areamod_map_checkmap_':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `mpi_reduce_'
</span><br>
<span class="quotelev1">&gt; areaMod.o(.text+0x9ea2): more undefined references to `mpi_reduce_'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When compiling for MPICH2, it works just fine. I assume this is  
</span><br>
<span class="quotelev1">&gt; going to lead to recompiling OpenMPI so I am wondering which PGI  
</span><br>
<span class="quotelev1">&gt; name mangling options to pass either the OpenMPI compile, or CLM  
</span><br>
<span class="quotelev1">&gt; compile to get the names in order?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Elvedin
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7399.php">Nick Wright: "[OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7397.php">Ralph Castain: "Re: [OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>In reply to:</strong> <a href="7393.php">Elvedin Trnjanin: "[OMPI users] Name Mangling"</a>
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

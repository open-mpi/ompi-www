<?
$subject_val = "Re: [OMPI users] I still have a Fortran module error in	openmpi-1.9a1r29341";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 11:40:52 2013" -->
<!-- isoreceived="20131004154052" -->
<!-- sent="Fri, 4 Oct 2013 15:40:46 +0000" -->
<!-- isosent="20131004154046" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I still have a Fortran module error in	openmpi-1.9a1r29341" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F91E953_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201310040545.r945j74a029538_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] I still have a Fortran module error in	openmpi-1.9a1r29341<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 11:40:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22764.php">Yin Zhao: "Re: [OMPI users] users Digest, Vol 2698, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="22762.php">Siegmar Gross: "[OMPI users] I still have a Fortran module error in openmpi-1.9a1r29341"</a>
<li><strong>In reply to:</strong> <a href="22762.php">Siegmar Gross: "[OMPI users] I still have a Fortran module error in openmpi-1.9a1r29341"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed!  Should be in tonight's tarball.
<br>
<p><p>On Oct 4, 2013, at 1:45 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to build openmpi-1.9a1r29341 on my platforms (Solaris 10
</span><br>
<span class="quotelev1">&gt; Sparc, Solaris 10 x86_64, and Linux x86_64) with Sun C 5.12 and
</span><br>
<span class="quotelev1">&gt; get the following error on all platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r29341-SunOS.sparc.64_cc 112 tail -20 log.make.SunOS.sparc.64_cc
</span><br>
<span class="quotelev1">&gt;  CCLD     libmpi_fortran_base.la
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-types.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-interfaces-callbacks.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-interfaces.lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module mpi_f08_interfaces
</span><br>
<span class="quotelev1">&gt;       ^                  
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r29341/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
</span><br>
<span class="quotelev1">&gt;  Line = 19, Column = 8: ERROR: The compiler has detected errors in module
</span><br>
<span class="quotelev1">&gt;  &quot;MPI_F08_INTERFACES&quot;.  No module information file will be created for this module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   use :: mpi_f08_types, only : MPI_Datatype, MPI_Comm, MPI_Aint, MPI_ADDRESS_KIND
</span><br>
<span class="quotelev1">&gt;                                                        ^                          
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r29341/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
</span><br>
<span class="quotelev1">&gt;  Line = 4456, Column = 57: ERROR: &quot;MPI_AINT&quot; is not in module &quot;MPI_F08_TYPES&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; f90comp: 4659 SOURCE LINES
</span><br>
<span class="quotelev1">&gt; f90comp: 2 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi-f08-interfaces.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-1.9a1r29341-SunOS.sparc.64_cc/ompi/mpi/fortran/base'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-1.9a1r29341-SunOS.sparc.64_cc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r29341-Linux.x86_64.64_cc 115 tail -20 log.make.Linux.x86_64.64_cc 
</span><br>
<span class="quotelev1">&gt;  CCLD     libmpi_fortran_base.la
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-types.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-interfaces-callbacks.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-interfaces.lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module mpi_f08_interfaces
</span><br>
<span class="quotelev1">&gt;       ^                  
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r29341/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
</span><br>
<span class="quotelev1">&gt;  Line = 19, Column = 8: ERROR: The compiler has detected errors in module 
</span><br>
<span class="quotelev1">&gt;  &quot;MPI_F08_INTERFACES&quot;.  No module information file will be created for this module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   use :: mpi_f08_types, only : MPI_Datatype, MPI_Comm, MPI_Aint, MPI_ADDRESS_KIND
</span><br>
<span class="quotelev1">&gt;                                                        ^                          
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r29341/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
</span><br>
<span class="quotelev1">&gt;  Line = 4456, Column = 57: ERROR: &quot;MPI_AINT&quot; is not in module &quot;MPI_F08_TYPES&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; f90comp: 4659 SOURCE LINES
</span><br>
<span class="quotelev1">&gt; f90comp: 2 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi-f08-interfaces.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-1.9a1r29341-Linux.x86_64.64_cc/ompi/mpi/fortran/base'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.9/openmpi-1.9a1r29341-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody could fix it. Thank you very much for
</span><br>
<span class="quotelev1">&gt; any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22764.php">Yin Zhao: "Re: [OMPI users] users Digest, Vol 2698, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="22762.php">Siegmar Gross: "[OMPI users] I still have a Fortran module error in openmpi-1.9a1r29341"</a>
<li><strong>In reply to:</strong> <a href="22762.php">Siegmar Gross: "[OMPI users] I still have a Fortran module error in openmpi-1.9a1r29341"</a>
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

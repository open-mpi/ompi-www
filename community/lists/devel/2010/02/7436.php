<?
$subject_val = "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 05:42:05 2010" -->
<!-- isoreceived="20100212104205" -->
<!-- sent="Fri, 12 Feb 2010 02:41:53 -0800" -->
<!-- isosent="20100212104153" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90" -->
<!-- id="4B753071.4000204_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100212103653.GA13187_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 05:41:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7437.php">Bogdan Costescu: "[OMPI devel] Rankfile related problems"</a>
<li><strong>Previous message:</strong> <a href="7435.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>In reply to:</strong> <a href="7435.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Thu, Feb 11, 2010 at 12:41:15PM CET:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 11, 2010, at 1:00 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Jeff Squyres wrote on Wed, Feb 10, 2010 at 10:02:27PM CET:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT: Add -DOPEN_MPI=1 to the mpif77 and mpif90 command lines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It won't work with IBM xlf which needs -WF,-D.  I'm sure there are other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran compilers that don't grok -D either (and may not have any other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flag), but I'm not sure whether OpenMPI cares about them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Ah, good!  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If we care, it is easy enough to add a configure test to figure this
</span><br>
<span class="quotelev2">&gt;&gt; kind of stuff out.  
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Are you aware of any other Fortran compilers that don't accept -D, and
</span><br>
<span class="quotelev2">&gt;&gt; if so, what flags they *do* accept?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've come across old Fortran 77 compilers that don't do any preprocessing
</span><br>
<span class="quotelev1">&gt; and thus don't accept any related flags.  I don't remember details
</span><br>
<span class="quotelev1">&gt; though, and I'm not aware of any currently-used ones; my experience with
</span><br>
<span class="quotelev1">&gt; Fortran compilers is limited though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It seems to me that if the compiler doesn't support any form of 
<br>
preprocessing, then the user can't tell whether one has defined OPEN_MPI 
<br>
or not.
<br>
So, one defines it when the capability exists, and does nothing for 
<br>
compilers lacking the capability.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7437.php">Bogdan Costescu: "[OMPI devel] Rankfile related problems"</a>
<li><strong>Previous message:</strong> <a href="7435.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>In reply to:</strong> <a href="7435.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
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

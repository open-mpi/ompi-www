<?
$subject_val = "Re: [OMPI users] ifort and gfortran module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 16:43:53 2009" -->
<!-- isoreceived="20090722204353" -->
<!-- sent="Wed, 22 Jul 2009 16:43:47 -0400" -->
<!-- isosent="20090722204347" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ifort and gfortran module" -->
<!-- id="DB86F461-C9E5-4A57-B5BC-72E2A3D0776C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C86ACA6-DDA6-40C7-B05A-9324D9547BAB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ifort and gfortran module<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 16:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10044.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10042.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10042.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10051.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10051.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 22, 2009, at 1:37 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Yep, that works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I should clarify -- that *probably* works.
<br>
<p>The .mod file are essentially precompiled headers.  Assuming that all  
<br>
the data types and sizes are the same between gfortran and ifort, you  
<br>
should be ok.  Many of OMPI's F90 functions are implemented by  
<br>
directly calling the back-end F77 functions, but some of them have  
<br>
thin F90 wrappers before calling the back-end F77 functions.
<br>
<p>If the calling conventions, parameter sizes, and constant values (see  
<br>
that README that I cited earlier in this thread) are all the same,  
<br>
then you should be ok using a single back-end libmpi_f77 and  
<br>
libmpi_f90 with 2 different .mod files.  But this is not something I  
<br>
have tested extensively, so I can't give you a definite &quot;this will  
<br>
always work&quot; ruling.
<br>
<p>I *think* that there are compiler flags that you can use with ifort to  
<br>
make it behave similarly to gfortran in terms of sizes and constant  
<br>
values, etc.  These may or may not be necessary...?  You might want to  
<br>
check into this, but I'd be interested to hear what you find.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10044.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10042.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10042.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10051.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10051.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
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

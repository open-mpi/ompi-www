<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 25 10:31:32 2013" -->
<!-- isoreceived="20130525143132" -->
<!-- sent="Sat, 25 May 2013 10:31:24 -0400" -->
<!-- isosent="20130525143124" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI" -->
<!-- id="51A0CB3C.90607_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F63F4AE_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-25 10:31:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21963.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/25/2013 8:26 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On May 23, 2013, at 9:50 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Excellent.  Now I've read the FAQ and noticed that it doesn't mention the issue with the Fortran 90 .mod signatures.  Our applications are Fortran.  So your replies are very helpful -- now I know it really isn't practical for us to use the default OpenMPI shipped with RHEL6 since we use both Intel and PGI compilers and have several applications to accommodate.  Presumably if all the applications did INCLUDE 'mpif.h'  instead of 'USE MPI' then we could get things working, but it's not a great workaround.
</span><br>
<span class="quotelev1">&gt; No, not even if they use mpif.h.  Here's a chunk of text from the v1.6 README:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - While it is possible -- on some platforms -- to configure and build
</span><br>
<span class="quotelev1">&gt;    Open MPI with one Fortran compiler and then build MPI applications
</span><br>
<span class="quotelev1">&gt;    with a different Fortran compiler, this is not recommended.  Subtle
</span><br>
<span class="quotelev1">&gt;    problems can arise at run time, even if the MPI application
</span><br>
<span class="quotelev1">&gt;    compiled and linked successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Specifically, the following two cases may not be portable between
</span><br>
<span class="quotelev1">&gt;    different Fortran compilers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. The C constants MPI_F_STATUS_IGNORE and MPI_F_STATUSES_IGNORE
</span><br>
<span class="quotelev1">&gt;       will only compare properly to Fortran applications that were
</span><br>
<span class="quotelev1">&gt;       created with Fortran compilers that that use the same
</span><br>
<span class="quotelev1">&gt;       name-mangling scheme as the Fortran compiler with which Open MPI
</span><br>
<span class="quotelev1">&gt;       was configured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    2. Fortran compilers may have different values for the logical
</span><br>
<span class="quotelev1">&gt;       .TRUE. constant.  As such, any MPI function that uses the Fortran
</span><br>
<span class="quotelev1">&gt;       LOGICAL type may only get .TRUE. values back that correspond to
</span><br>
<span class="quotelev1">&gt;       the the .TRUE. value of the Fortran compiler with which Open MPI
</span><br>
<span class="quotelev1">&gt;       was configured.  Note that some Fortran compilers allow forcing
</span><br>
<span class="quotelev1">&gt;       .TRUE. to be 1 and .FALSE. to be 0.  For example, the Portland
</span><br>
<span class="quotelev1">&gt;       Group compilers provide the &quot;-Munixlogical&quot; option, and Intel
</span><br>
<span class="quotelev1">&gt;       compilers (version &gt;= 8.) provide the &quot;-fpscomp logicals&quot; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    You can use the ompi_info command to see the Fortran compiler with
</span><br>
<span class="quotelev1">&gt;    which Open MPI was configured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Even when the name mangling obstacle doesn't arise (it shouldn't for the 
<br>
cited case of gfortran vs. ifort), run-time library function usage is 
<br>
likely to conflict between the compiler used to build the MPI Fortran 
<br>
library and the compiler used to build the application. So there really 
<br>
isn't a good incentive to retrogress away from the USE files simply to 
<br>
avoid one aspect of mixing incompatible compilers.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21963.php">Ed Blosch: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling	OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
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

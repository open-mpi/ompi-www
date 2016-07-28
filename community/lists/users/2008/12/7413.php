<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 11:30:02 2008" -->
<!-- isoreceived="20081205163002" -->
<!-- sent="Fri, 05 Dec 2008 08:29:44 -0800" -->
<!-- isosent="20081205162944" -->
<!-- name="Nick Wright" -->
<!-- email="nwright_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="493956F8.80405_at_sdsc.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98A74872-30DA-4564-972E-38311C7AED38_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue with Profiling Fortran code<br>
<strong>From:</strong> Nick Wright (<em>nwright_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 11:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7414.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7416.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7416.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we can just look at OPEN_MPI as you say and then
<br>
<p>OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION &amp; OMPI_RELEASE_VERSION
<br>
<p>from mpi.h and if version is less than 1.2.9 implement a work around as 
<br>
Antony suggested. Its not the most elegant solution but it will work I 
<br>
think?
<br>
<p>Nick.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 5, 2008, at 10:55 AM, David Skinner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, if that one-liner fix works (George and I just chatted about this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the phone), we can probably also push it into v1.2.9.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; great! thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It occurs to me that this is likely not going to be enough for you, 
</span><br>
<span class="quotelev1">&gt; though.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Like it or not, there's still installed OMPI's out there that will show 
</span><br>
<span class="quotelev1">&gt; this old behavior.  Do you need to know / adapt for those?  If so, I can 
</span><br>
<span class="quotelev1">&gt; see two ways of you figuring it out:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. At run time, do a simple call to (Fortran) MPI_INITIALIZED and see if 
</span><br>
<span class="quotelev1">&gt; you intercept it twice (both in Fortran and in C).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If that's not attractive, we can probably add a line into the 
</span><br>
<span class="quotelev1">&gt; ompi_info output that you can grep for when using OMPI (you can look for 
</span><br>
<span class="quotelev1">&gt; the OPEN_MPI macro from our &lt;mpi.h&gt; to know if it's Open MPI or not).  
</span><br>
<span class="quotelev1">&gt; Specifically, this line can be there for the &quot;fixed&quot; versions, and it 
</span><br>
<span class="quotelev1">&gt; simply won't be there for non-fixed versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7414.php">Edgar Gabriel: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7412.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7416.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7416.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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

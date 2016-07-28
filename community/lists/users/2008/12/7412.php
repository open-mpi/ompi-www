<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 11:06:13 2008" -->
<!-- isoreceived="20081205160613" -->
<!-- sent="Fri, 5 Dec 2008 11:06:07 -0500" -->
<!-- isosent="20081205160607" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="98A74872-30DA-4564-972E-38311C7AED38_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49394EEE.1050006_at_lbl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 11:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7413.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7411.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe in reply to:</strong> <a href="7399.php">Nick Wright: "[OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7413.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7413.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2008, at 10:55 AM, David Skinner wrote:
<br>
<p><span class="quotelev2">&gt;&gt; FWIW, if that one-liner fix works (George and I just chatted about  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; on the phone), we can probably also push it into v1.2.9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; great! thanks.
</span><br>
<p><p>It occurs to me that this is likely not going to be enough for you,  
<br>
though.  :-\
<br>
<p>Like it or not, there's still installed OMPI's out there that will  
<br>
show this old behavior.  Do you need to know / adapt for those?  If  
<br>
so, I can see two ways of you figuring it out:
<br>
<p>1. At run time, do a simple call to (Fortran) MPI_INITIALIZED and see  
<br>
if you intercept it twice (both in Fortran and in C).
<br>
<p>2. If that's not attractive, we can probably add a line into the  
<br>
ompi_info output that you can grep for when using OMPI (you can look  
<br>
for the OPEN_MPI macro from our &lt;mpi.h&gt; to know if it's Open MPI or  
<br>
not).  Specifically, this line can be there for the &quot;fixed&quot; versions,  
<br>
and it simply won't be there for non-fixed versions.
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
<li><strong>Next message:</strong> <a href="7413.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7411.php">Jeff Squyres: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Maybe in reply to:</strong> <a href="7399.php">Nick Wright: "[OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7413.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Reply:</strong> <a href="7413.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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

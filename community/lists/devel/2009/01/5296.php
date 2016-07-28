<?
$subject_val = "Re: [OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 13:29:07 2009" -->
<!-- isoreceived="20090123182907" -->
<!-- sent="Fri, 23 Jan 2009 13:29:01 -0500" -->
<!-- isosent="20090123182901" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran 90 Interface" -->
<!-- id="4079B050-D0A7-495C-A057-D83C77AFC46C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.3.1.0901231820300.14818_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran 90 Interface<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 13:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5297.php">Josh Hursey: "[OMPI devel] Open MPI Extensions Interface"</a>
<li><strong>Previous message:</strong> <a href="5295.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5295.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5288.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2009, at 1:20 PM, N.M. Maclaren wrote:
<br>
<p><span class="quotelev2">&gt;&gt; FWIW, ABI is not necessarily a bad thing; it has its benefits and   
</span><br>
<span class="quotelev2">&gt;&gt; drawbacks (and enablers and limitations).  Some people want it and   
</span><br>
<span class="quotelev2">&gt;&gt; some people don't (most don't care, I think).  We'll see where  
</span><br>
<span class="quotelev2">&gt;&gt; that  effort goes in the Forum and elsewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right.  But, as someone with experience of trying to design portable  
</span><br>
<span class="quotelev1">&gt; ABIs,
</span><br>
<span class="quotelev1">&gt; it requires more knowledge and skill than the typical person  
</span><br>
<span class="quotelev1">&gt; tackling the
</span><br>
<span class="quotelev1">&gt; job knows even exists ....
</span><br>
<p>Indeed.  This is at least one of the reasons for the current deadlock  
<br>
in the ABI discussions on the Forum (of which I am a part).
<br>
<p>MPI did the Right Thing back in the mid-90's by just designing source- 
<br>
level compatibility.  Whether it's the right time to move to ABI or  
<br>
not is a very politically- and religiously-charged discussion.  :-)
<br>
<p><span class="quotelev2">&gt;&gt; FWIW, the F03 bindings for MPI may allow address-sized integers to  
</span><br>
<span class="quotelev2">&gt;&gt; be  handles in Fortran.  In this case, MPI handles will likely take  
</span><br>
<span class="quotelev2">&gt;&gt; on  exactly the same value that they are in C.  In OMPI's case,  
</span><br>
<span class="quotelev2">&gt;&gt; that's a C  pointer, so the F03 value for MPI_COMM_WORLD will be  
</span><br>
<span class="quotelev2">&gt;&gt; some very large  non-zero integer value. (standard disclaimers  
</span><br>
<span class="quotelev2">&gt;&gt; about future features/ functionality -- time will tell if this  
</span><br>
<span class="quotelev2">&gt;&gt; stuff plays out as expected)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would solve this particular problem, if it is what I think it is.
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; A private Email made me realise that he was probably passing the  
</span><br>
<span class="quotelev1">&gt; Fortran
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD to NetCDF4 for use as a communicator - and, unless  
</span><br>
<span class="quotelev1">&gt; NetCDF
</span><br>
<span class="quotelev1">&gt; is much better quality than when I last looked at it, I will bet that
</span><br>
<span class="quotelev1">&gt; its Fortran interface is just a thin wrapper.  You can guess the  
</span><br>
<span class="quotelev1">&gt; rest :-)
</span><br>
<p>FWIW, it probably works with MPICH and friends because they use  
<br>
integer handles in both Fortran and C, and therefore the values are  
<br>
exactly the same.  Specifically, if NetCDF is just passing the value  
<br>
of Fortran MPI_COMM_WORLD back to a C MPI API function, it'll likely  
<br>
work in MPICH.  But it won't in Open MPI because our handles are  
<br>
different between Fortran and C.  The Right solution is to use the  
<br>
various MPI_*_f2c and MPI_*_c2f conversion routines (these are in the  
<br>
MPI spec -- we didn't make them up for OMPI).  See
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node355.htm#Node355">http://www.mpi-forum.org/docs/mpi21-report-bw/node355.htm#Node355</a>
<br>
<p>I don't know anything about NetCDF4, so I don't know if it's  
<br>
neglecting to do that or not.
<br>
<p>...but it sounds probable.  :-)
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
<li><strong>Next message:</strong> <a href="5297.php">Josh Hursey: "[OMPI devel] Open MPI Extensions Interface"</a>
<li><strong>Previous message:</strong> <a href="5295.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>In reply to:</strong> <a href="5295.php">N.M. Maclaren: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5288.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
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

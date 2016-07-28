<?
$subject_val = "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 15:14:01 2008" -->
<!-- isoreceived="20080212201401" -->
<!-- sent="Tue, 12 Feb 2008 15:13:30 -0500" -->
<!-- isosent="20080212201330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Info needed for building Open-MPI against external ROMIO" -->
<!-- id="E4711EBB-09AC-4F41-A36F-8B2C7DD0C75F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8B9101BC-A214-482E-AEDA-0FFC5F558564_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Info needed for building Open-MPI against external ROMIO<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 15:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5022.php">Jeff Squyres: "Re: [OMPI users] trouble building"</a>
<li><strong>Previous message:</strong> <a href="5020.php">Anze Slosar: "[OMPI users] trouble building"</a>
<li><strong>In reply to:</strong> <a href="5018.php">David Gunter: "[OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5041.php">Ben Allan: "[OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5041.php">Ben Allan: "[OMPI users] mpi.h macro naming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2008, at 4:33 PM, David Gunter wrote:
<br>
<p><span class="quotelev1">&gt; We have a number of patches and files to be added to ROMIO to make it
</span><br>
<span class="quotelev1">&gt; work with recent releases of the Panasas file system.  We have reached
</span><br>
<span class="quotelev1">&gt; a point where the stock ROMIO included in Open-MPI no longer works for
</span><br>
<span class="quotelev1">&gt; what we need.  I know that the version of ROMIO forged into the bowels
</span><br>
<span class="quotelev1">&gt; of OMPI is a beast to try and patch or mend so that is something we
</span><br>
<span class="quotelev1">&gt; won't attempt.
</span><br>
<p>ROMIO upkeep has been a hot topic over the past week.  Two patches  
<br>
went in to the trunk today that are steps in the right direction  
<br>
towards being able to keep up with official ROMIO releases easier.   
<br>
The patches could probably be taken to the v1.2 branch without too  
<br>
much trouble.  I will volunteer to do this if it would be helpful to  
<br>
you.
<br>
<p>Another option is to have a LANL-specific ROMIO component with a  
<br>
custom-patched ROMIO.  This was discussed yesterday; Ralph Castain was  
<br>
going to ponder the possibilities.
<br>
<p>We also talked about continually updating the ROMIO in Open MPI (to  
<br>
officially-released versions).  U. Houston has volunteered to do this  
<br>
for the future, but this is pending a student's visa issues being  
<br>
cleared up.  That could be tomorrow or a few months from now; there's  
<br>
unfortunately no way to tell.
<br>
<p>This is where the OMPI/ROMIO conversation is right now -- I suspect  
<br>
that it will continue to unfold more in short order...
<br>
<p><span class="quotelev1">&gt; Thus we have two choices here at LANL.  Either we drop support and no
</span><br>
<span class="quotelev1">&gt; longer provide OMPI to our user community and switch to MVAPICH2 for
</span><br>
<span class="quotelev1">&gt; our only MPI on systems, or we can try and build OMPI against an
</span><br>
<span class="quotelev1">&gt; externally maintained ROMIO.
</span><br>
<p>Per what Brian mentioned, I think that since Brian left LANL, the  
<br>
&quot;build against an external ROMIO&quot; functionality never made it over to  
<br>
the v1.2 branch.  There's no technical reason it can't be ported over;  
<br>
someone just has to take the work Brian did and massage the bits into  
<br>
a v1.2-compatible patch.  I'm *guessing* that it's not too much work,  
<br>
but I unfortunately do not have the cycles to volunteer to do this.
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
<li><strong>Next message:</strong> <a href="5022.php">Jeff Squyres: "Re: [OMPI users] trouble building"</a>
<li><strong>Previous message:</strong> <a href="5020.php">Anze Slosar: "[OMPI users] trouble building"</a>
<li><strong>In reply to:</strong> <a href="5018.php">David Gunter: "[OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5041.php">Ben Allan: "[OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5041.php">Ben Allan: "[OMPI users] mpi.h macro naming"</a>
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

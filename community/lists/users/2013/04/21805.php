<?
$subject_val = "Re: [OMPI users] ierr vs ierror in F90 mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 26 14:53:30 2013" -->
<!-- isoreceived="20130426185330" -->
<!-- sent="Fri, 26 Apr 2013 18:53:26 +0000" -->
<!-- isosent="20130426185326" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ierr vs ierror in F90 mpi module" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4B1C2B3F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5179EBE6.6060401_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] ierr vs ierror in F90 mpi module<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-26 14:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21806.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21804.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="21802.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21806.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21806.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2013, at 10:52 PM, W Spector &lt;w6ws_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I tried building 1.7.1 on my Ubuntu system.  The default gfortran is v4.6.3, so configure won't enable the mpi_f08 module build.  I also tried a three week old snapshot of the gfortran 4.9 trunk.  This has Tobias's new TYPE(*) in it, but not his latest !GCC$ attributes NO_ARG_CHECK stuff.  However configure still won't enable the mpi_f08 module.
</span><br>
<p>Yes, Tobias has mailed me+Craig about his latest stuff and I haven't had a chance to incorporate it yet.  It's on the to-do list, though...
<br>
<p><span class="quotelev1">&gt; Is there a trick to getting a recent gfortran to compile the mpi_f08 module?
</span><br>
<p>Not yet.  Hopefully soon.
<br>
<p><span class="quotelev1">&gt; I went into the openmpi-1.7.1/ompi/mpi/fortran/use-mpi-tkr/scripts directory and modified the files to use ierror instead of ierr.  (One well-crafted line of shell script.)  Did the same with a couple of .h.in files in the use-mpi-tkr and use-mpi-ignore-tkr directories, and use-mpi-tkr/attr_fn-f90-interfaces.h.in.  (One editor command each.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the above, the mpi module is in much better shape.  However there are still some scattered incorrect non-ierror argument names.  A few examples from the code I am working with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Type_create_struct: The 2nd argument should be &quot;array_of_blocklengths&quot;, instead of &quot;array_of_block_lengths&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Type_commit: &quot;datatype&quot; instead of &quot;type&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Type_free: Again, &quot;datatype&quot; instead of &quot;type&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are more...
</span><br>
<p>Cool.  Any chance you could send us a patch?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21806.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="21804.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>In reply to:</strong> <a href="21802.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21806.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21806.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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

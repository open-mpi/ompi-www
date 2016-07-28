<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 00:06:02 2007" -->
<!-- isoreceived="20070822040602" -->
<!-- sent="Tue, 21 Aug 2007 22:05:32 -0600" -->
<!-- isosent="20070822040532" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX" -->
<!-- id="1193BBCF-D525-476E-881B-264E7B404D08_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070821213237.GD363_at_avicenna.cc.columbia.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-22 00:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3900.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Previous message:</strong> <a href="3898.php">Lev Givon: "[OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<li><strong>In reply to:</strong> <a href="3898.php">Lev Givon: "[OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3900.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Reply:</strong> <a href="3900.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 21, 2007, at 3:32 PM, Lev Givon wrote:
<br>
<p><span class="quotelev1">&gt; configure: WARNING: *** Shared libraries have been disabled (-- 
</span><br>
<span class="quotelev1">&gt; disable-shared)
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Building MCA components as DSOs  
</span><br>
<span class="quotelev1">&gt; automatically disabled
</span><br>
<span class="quotelev1">&gt; checking which components should be static... none
</span><br>
<span class="quotelev1">&gt; checking for projects containing MCA frameworks... opal, orte, ompi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifying --enable-shared --enable-static results in the same
</span><br>
<span class="quotelev1">&gt; behavior, incidentally. Is the above to be expected?
</span><br>
<p>Yes, this is expected.  This is just a warning that we build  
<br>
components into the library rather than as run-time loadable  
<br>
components when static libraries are enabled.  This is probably not  
<br>
technically necessary on Linux and OS X, but in general is the  
<br>
easiest thing for us to do.  So you should have a perfectly working  
<br>
build with this setup.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3900.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Previous message:</strong> <a href="3898.php">Lev Givon: "[OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<li><strong>In reply to:</strong> <a href="3898.php">Lev Givon: "[OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3900.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Reply:</strong> <a href="3900.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
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

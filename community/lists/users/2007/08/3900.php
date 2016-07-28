<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 00:52:21 2007" -->
<!-- isoreceived="20070822045221" -->
<!-- sent="Wed, 22 Aug 2007 00:52:14 -0400" -->
<!-- isosent="20070822045214" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX" -->
<!-- id="20070822045214.GC4668_at_avicenna.cc.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1193BBCF-D525-476E-881B-264E7B404D08_at_lanl.gov" -->
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
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-22 00:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3901.php">Hiep Bui Hoang: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Previous message:</strong> <a href="3899.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<li><strong>In reply to:</strong> <a href="3899.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3907.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Reply:</strong> <a href="3907.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Brian Barrett on Wed, Aug 22, 2007 at 12:05:32AM EDT:
<br>
<span class="quotelev1">&gt; On Aug 21, 2007, at 3:32 PM, Lev Givon wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: *** Shared libraries have been disabled (-- 
</span><br>
<span class="quotelev2">&gt; &gt; disable-shared)
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: *** Building MCA components as DSOs  
</span><br>
<span class="quotelev2">&gt; &gt; automatically disabled
</span><br>
<span class="quotelev2">&gt; &gt; checking which components should be static... none
</span><br>
<span class="quotelev2">&gt; &gt; checking for projects containing MCA frameworks... opal, orte, ompi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Specifying --enable-shared --enable-static results in the same
</span><br>
<span class="quotelev2">&gt; &gt; behavior, incidentally. Is the above to be expected?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, this is expected.  This is just a warning that we build  
</span><br>
<span class="quotelev1">&gt; components into the library rather than as run-time loadable  
</span><br>
<span class="quotelev1">&gt; components when static libraries are enabled.  This is probably not  
</span><br>
<span class="quotelev1">&gt; technically necessary on Linux and OS X, but in general is the  
</span><br>
<span class="quotelev1">&gt; easiest thing for us to do.  So you should have a perfectly working  
</span><br>
<span class="quotelev1">&gt; build with this setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p>When compiled with --enable-static, the resulting build does indeed
<br>
work, but some of the components appear to be disabled because they
<br>
apparently cannot be built statically. Of particular interest to me
<br>
are pls:xgrid and ras:xgrid:
<br>
<p>--- MCA component pls:xgrid (m4 configuration macro)
<br>
checking for MCA component pls:xgrid compile mode... static
<br>
checking if C and Objective C are link compatible... yes
<br>
checking for XGridFoundation Framework... yes
<br>
configure: WARNING: XGrid components must be built as DSOs.  Disabling
<br>
checking if MCA component pls:xgrid can compile... no
<br>
<p>...
<br>
<p>--- MCA component ras:xgrid (m4 configuration macro)
<br>
checking for MCA component ras:xgrid compile mode... static
<br>
checking if C and Objective C are link compatible... (cached) yes
<br>
checking for XGridFoundation Framework... (cached) yes
<br>
configure: WARNING: XGrid components must be built as DSOs.  Disabling
<br>
checking if MCA component ras:xgrid can compile... no
<br>
<p>(Running ompi_info after installing the build confirms the absence of
<br>
said components). My concern, unsurprisingly, is motivated by a desire
<br>
to use OpenMPI on an xgrid cluster (i.e., not with rsh/ssh); unless I
<br>
am misconstruing the above observations, building OpenMPI with
<br>
--enable-static seems to preclude this. Should xgrid functionality
<br>
still be present when OpenMPI is built with --enable-static?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L.G.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3901.php">Hiep Bui Hoang: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Previous message:</strong> <a href="3899.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<li><strong>In reply to:</strong> <a href="3899.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on MacOSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3907.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Reply:</strong> <a href="3907.php">Brian Barrett: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 10:50:49 2007" -->
<!-- isoreceived="20070822145049" -->
<!-- sent="Wed, 22 Aug 2007 08:50:09 -0600" -->
<!-- isosent="20070822145009" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX" -->
<!-- id="151CCF3F-6530-46ED-8C44-FA030A70CA04_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070822045214.GC4668_at_avicenna.cc.columbia.edu" -->
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
<strong>Date:</strong> 2007-08-22 10:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3908.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Previous message:</strong> <a href="3906.php">Noam Meltzer: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<li><strong>In reply to:</strong> <a href="3900.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3908.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Reply:</strong> <a href="3908.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 21, 2007, at 10:52 PM, Lev Givon wrote:
<br>
<p><span class="quotelev1">&gt; (Running ompi_info after installing the build confirms the absence of
</span><br>
<span class="quotelev1">&gt; said components). My concern, unsurprisingly, is motivated by a desire
</span><br>
<span class="quotelev1">&gt; to use OpenMPI on an xgrid cluster (i.e., not with rsh/ssh); unless I
</span><br>
<span class="quotelev1">&gt; am misconstruing the above observations, building OpenMPI with
</span><br>
<span class="quotelev1">&gt; --enable-static seems to preclude this. Should xgrid functionality
</span><br>
<span class="quotelev1">&gt; still be present when OpenMPI is built with --enable-static?
</span><br>
<p>Ah, yes.  Do to some issues with our build system, you have to build  
<br>
shared libraries to use the XGrid support.
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
<li><strong>Next message:</strong> <a href="3908.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Previous message:</strong> <a href="3906.php">Noam Meltzer: "Re: [OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<li><strong>In reply to:</strong> <a href="3900.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3908.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>Reply:</strong> <a href="3908.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
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

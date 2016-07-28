<?
$subject_val = "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 12:55:46 2014" -->
<!-- isoreceived="20141210175546" -->
<!-- sent="Wed, 10 Dec 2014 09:55:42 -0800" -->
<!-- isosent="20141210175542" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5" -->
<!-- id="4D1D7F43-021B-465D-8234-0FCE62649155_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="F8358750-AB8A-49CC-8163-0C1110F88364_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-10 12:55:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25954.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25952.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="25952.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25954.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25954.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tarball now available on web site
<br>
<p><p><a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a> &lt;<a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On Dec 10, 2014, at 9:40 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;ll run the tarball generator now so you can try the nightly tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 10, 2014, at 9:20 AM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12/10/2014 10:40 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You should be able to apply the patch - I don&#146;t think that section of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code differs from what is in the 1.8 repo.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it compiles, link, but gives me a segmentation violation now:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f1827b00e91 in mca_allocator_component_lookup () from /opt/openmpi-1.8.3_patchyield/lib64/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f1821aee378 in mca_pml_ob1_component_init () from /opt/openmpi-1.8_git_opt/lib64/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f182cd72141 in mca_pml_base_select () from /opt/openmpi-1.8_git_opt/lib64/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f182cd22610 in ompi_mpi_init () from /opt/openmpi-1.8_git_opt/lib64/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f182cd428b6 in PMPI_Init_thread () from /opt/openmpi-1.8_git_opt/lib64/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f182f03db9c in PetscInitialize (argc=0x7fffb4ca28ec, args=0x7fffb4ca28e0, file=0x0, help=0x0) at /home/mefpp_ericc/petsc-3.5.2/src/sys/objects/pinit.c:781
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f183492b2bc in PETScInitialisation::PETScInitialisation (this=0x7fffb4ca33f0, pArgc=0x7fffb4ca28ec, pArgv=0x7fffb4ca28e0) at /home/mefpp_ericc/GIREF/src/commun/Petsc/PETScInitialisation.cc:122
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00000000004d8888 in main (pArgc=12, pArgv=0x7fffb4ca42b8) at /home/mefpp_ericc/GIREF/app/src/Test.Parallele/Test.PAScatter.cc:72
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The sha for 1.8.3 can be found on the web site (see right-most column in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; table):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see them, but can't find these into the git repo...  I meant: where are stocked the git SHAs for each releases?  *Forgive-me*, just found the &quot;ompi-release&quot; repo... sorry...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would like to see if a4fff57720 (ompi) is included in ompi-release? (It seems not).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should it be applied too?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don&#146;t know - let me see
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25953/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25954.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25952.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="25952.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25954.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25954.php">Eric Chamberland: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
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

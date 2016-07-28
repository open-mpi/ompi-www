<?
$subject_val = "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 12:20:46 2014" -->
<!-- isoreceived="20141210172046" -->
<!-- sent="Wed, 10 Dec 2014 12:20:33 -0500" -->
<!-- isosent="20141210172033" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5" -->
<!-- id="548880E1.6030908_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DBC80BF3-9016-4818-8A32-40335CC09382_at_open-mpi.org" -->
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
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-10 12:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25952.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25950.php">Gus Correa: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>In reply to:</strong> <a href="25948.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25952.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25952.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/10/2014 10:40 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; You should be able to apply the patch - I don&#146;t think that section of
</span><br>
<span class="quotelev1">&gt; code differs from what is in the 1.8 repo.
</span><br>
<p>it compiles, link, but gives me a segmentation violation now:
<br>
<p>#0  0x00007f1827b00e91 in mca_allocator_component_lookup () from 
<br>
/opt/openmpi-1.8.3_patchyield/lib64/libmpi.so.1
<br>
#1  0x00007f1821aee378 in mca_pml_ob1_component_init () from 
<br>
/opt/openmpi-1.8_git_opt/lib64/openmpi/mca_pml_ob1.so
<br>
#2  0x00007f182cd72141 in mca_pml_base_select () from 
<br>
/opt/openmpi-1.8_git_opt/lib64/libmpi.so.0
<br>
#3  0x00007f182cd22610 in ompi_mpi_init () from 
<br>
/opt/openmpi-1.8_git_opt/lib64/libmpi.so.0
<br>
#4  0x00007f182cd428b6 in PMPI_Init_thread () from 
<br>
/opt/openmpi-1.8_git_opt/lib64/libmpi.so.0
<br>
#5  0x00007f182f03db9c in PetscInitialize (argc=0x7fffb4ca28ec, 
<br>
args=0x7fffb4ca28e0, file=0x0, help=0x0) at 
<br>
/home/mefpp_ericc/petsc-3.5.2/src/sys/objects/pinit.c:781
<br>
#6  0x00007f183492b2bc in PETScInitialisation::PETScInitialisation 
<br>
(this=0x7fffb4ca33f0, pArgc=0x7fffb4ca28ec, pArgv=0x7fffb4ca28e0) at 
<br>
/home/mefpp_ericc/GIREF/src/commun/Petsc/PETScInitialisation.cc:122
<br>
#7  0x00000000004d8888 in main (pArgc=12, pArgv=0x7fffb4ca42b8) at 
<br>
/home/mefpp_ericc/GIREF/app/src/Test.Parallele/Test.PAScatter.cc:72
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sha for 1.8.3 can be found on the web site (see right-most column in
</span><br>
<span class="quotelev1">&gt; table):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<p>I see them, but can't find these into the git repo...  I meant: where 
<br>
are stocked the git SHAs for each releases?  *Forgive-me*, just found 
<br>
the &quot;ompi-release&quot; repo... sorry...
<br>
<p>I would like to see if a4fff57720 (ompi) is included in ompi-release? 
<br>
(It seems not).
<br>
<p>Should it be applied too?
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25952.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25950.php">Gus Correa: "Re: [OMPI users] Open mpi based program runs as root and gives SIGSEGV under unprivileged user"</a>
<li><strong>In reply to:</strong> <a href="25948.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25952.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Reply:</strong> <a href="25952.php">Ralph Castain: "Re: [OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
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

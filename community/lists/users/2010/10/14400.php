<?
$subject_val = "[OMPI users] my leak or OpenMPI's leak?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  6 07:32:52 2010" -->
<!-- isoreceived="20101006113252" -->
<!-- sent="Wed, 6 Oct 2010 13:32:47 +0200" -->
<!-- isosent="20101006113247" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] my leak or OpenMPI's leak?" -->
<!-- id="AANLkTi=-GhomGWjCYkKot-g4tsQPtka46B8f4tD3Tj_8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] my leak or OpenMPI's leak?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-06 07:32:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14401.php">Tim Prince: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14399.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14487.php">Brian Budge: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Reply:</strong> <a href="14487.php">Brian Budge: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I regularly use valgrind to check for leaks, but i ignore the leaks
<br>
clearly created by OpenMPI,
<br>
because i think most of them happen because of efficiency (lose no
<br>
time cleaning up unimportant leaks).
<br>
But i want to make sure no leaks come from my own apps.
<br>
In most of the cases, leaks i am responsible for have the name of one
<br>
of my files at the bottom of the stack printed by valgrind,
<br>
and no internal OpenMPI-calls above, whereas leaks clearly caused by
<br>
OpenMPI have something like
<br>
ompi_mpi_init, mca_pml_base_open, PMPI_Init etc at or very near the bottom.
<br>
<p>Now i have an application where i am completely unsure where the
<br>
responsibility for a particular leak lies. valgrind  shows (among
<br>
others) this report
<br>
<p>==2756== 9,704 (8,348 direct, 1,356 indirect) bytes in 1 blocks are
<br>
definitely lost in loss record 2,033 of 2,036
<br>
==2756==    at 0x4005943: malloc (vg_replace_malloc.c:195)
<br>
==2756==    by 0x4049387: ompi_free_list_grow (in
<br>
/opt/openmpi-1.4.2.p/lib/libmpi.so.0.0.2)
<br>
==2756==    by 0x41CA613: ???
<br>
==2756==    by 0x41BDD91: ???
<br>
==2756==    by 0x41B0C3D: ???
<br>
==2756==    by 0x408AC9C: PMPI_Send (in
<br>
/opt/openmpi-1.4.2.p/lib/libmpi.so.0.0.2)
<br>
==2756==    by 0x8123377: ConnectorBase::send(CollectionBase*,
<br>
std::pair&lt;std::pair&lt;unsigned short, unsigned short&gt;,
<br>
std::pair&lt;unsigned short, unsigned short&gt; &gt;&amp;) (ConnectorBase.cpp:39)
<br>
==2756==    by 0x8123CEE: TileConnector::sendTile() (TileConnector.cpp:36)
<br>
==2756==    by 0x80C6839: TDMaster::init(int, char**) (TDMaster.cpp:226)
<br>
==2756==    by 0x80C167B: main (TDMain.cpp:24)
<br>
==2756==
<br>
<p>At a first glimpse it looks like an OpenMPI-internal leak,
<br>
because it happens iinside PMPI_Send,
<br>
but then i am using the function ConnectorBase::send()
<br>
several times from other callers than TileConnector,
<br>
but these don't show up in valgrind's output.
<br>
<p>Does anybody have an idea what is happening here?
<br>
<p>Thank You
<br>
jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14401.php">Tim Prince: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14399.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14487.php">Brian Budge: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>Reply:</strong> <a href="14487.php">Brian Budge: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
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

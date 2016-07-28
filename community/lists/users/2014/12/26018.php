<?
$subject_val = "[OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 19:07:41 2014" -->
<!-- isoreceived="20141218000741" -->
<!-- sent="Thu, 18 Dec 2014 11:07:34 +1100" -->
<!-- isosent="20141218000734" -->
<!-- name="Ben Menadue" -->
<!-- email="ben.menadue_at_[hidden]" -->
<!-- subject="[OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5" -->
<!-- id="008701d01a56$a02c6cc0$e0854640$_at_nci.org.au" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5<br>
<strong>From:</strong> Ben Menadue (<em>ben.menadue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 19:07:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26019.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="26017.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26025.php">Howard Pritchard: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Reply:</strong> <a href="26025.php">Howard Pritchard: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi PETSc and OpenMPI teams,
<br>
<p>I'm running into a deadlock in PETSc 3.4.5 with OpenMPI 1.8.3:
<br>
<p>&nbsp;1. PetscCommDestroy calls MPI_Attr_delete
<br>
&nbsp;2. MPI_Attr_delete acquires a lock
<br>
&nbsp;3. MPI_Attr_delete calls Petsc_DelComm_Outer (through a callback)
<br>
&nbsp;4. Petsc_DelComm_Outer calls MPI_Attr_get
<br>
&nbsp;5. MPI_Attr_get wants to also acquire the lock from step 2.
<br>
<p>Looking at the OpenMPI source code, it looks like you can't call an
<br>
MPI_Attr_* function from inside the registered deletion callback. The
<br>
OpenMPI source code notes that all of the functions acquire a global lock,
<br>
which is where the problem is coming from - here are the comments and the
<br>
lock definition, in ompi/attribute/attribute.c of OpenMPI 1.8.3:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;404 /*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;405  * We used to have multiple locks for semi-fine-grained locking.
<br>
But
<br>
&nbsp;&nbsp;&nbsp;&nbsp;406  * the code got complex, and we had to spend time looking for subtle
<br>
&nbsp;&nbsp;&nbsp;&nbsp;407  * bugs.  Craziness -- MPI attributes are *not* high performance, so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;408  * just use a One Big Lock approach: there is *no* concurrent
<br>
access.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;409  * If you have the lock, you can do whatever you want and no data
<br>
will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;410  * change/disapear from underneath you.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;411  */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;412 static opal_mutex_t attribute_lock;
<br>
<p>To get it to work, I had to modify the definition of this lock to use a
<br>
recursive mutex:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;412 static opal_mutex_t attribute_lock = { .m_lock_pthread =
<br>
PTHREAD_RECURSIVE_MUTEX_INITIALIZER_NP };
<br>
<p>but this is non-portable.
<br>
<p>Is the behaviour expected from new versions OpenMPI? In which case a new
<br>
approach might be needed in PETSc. Otherwise, maybe a per-attribute lock is
<br>
needed in OpenMPI - but I'm not sure whether the get in the callback is on
<br>
the same attribute as is being deleted.
<br>
<p>Thanks,
<br>
Ben
<br>
<p>#0  0x00007fd7d5de4264 in __lll_lock_wait () from /lib64/libpthread.so.0
<br>
#1  0x00007fd7d5ddf508 in _L_lock_854 () from /lib64/libpthread.so.0
<br>
#2  0x00007fd7d5ddf3d7 in pthread_mutex_lock () from /lib64/libpthread.so.0
<br>
#3  0x00007fd7d27d91bc in ompi_attr_get_c () from
<br>
/apps/openmpi/1.8.3/lib/libmpi.so.1
<br>
#4  0x00007fd7d2803f03 in PMPI_Attr_get () from
<br>
/apps/openmpi/1.8.3/lib/libmpi.so.1
<br>
#5  0x00007fd7d7716006 in Petsc_DelComm_Outer (comm=0x7fd7d2a83b30,
<br>
keyval=128, attr_val=0x7fff00a20f00, extra_state=0xffffffffffffffff) at
<br>
pinit.c:406
<br>
#6  0x00007fd7d27d8cad in ompi_attr_delete_impl () from
<br>
/apps/openmpi/1.8.3/lib/libmpi.so.1
<br>
#7  0x00007fd7d27d8f2f in ompi_attr_delete () from
<br>
/apps/openmpi/1.8.3/lib/libmpi.so.1
<br>
#8  0x00007fd7d2803dfc in PMPI_Attr_delete () from
<br>
/apps/openmpi/1.8.3/lib/libmpi.so.1
<br>
#9  0x00007fd7d78bf5c5 in PetscCommDestroy (comm=0x7fd7d2a83b30) at
<br>
tagm.c:256
<br>
#10 0x00007fd7d7506f58 in PetscHeaderDestroy_Private (h=0x7fd7d2a83b30) at
<br>
inherit.c:114
<br>
#11 0x00007fd7d75038a0 in ISDestroy (is=0x7fd7d2a83b30) at index.c:225
<br>
#12 0x00007fd7d75029b7 in PCReset_ILU (pc=0x7fd7d2a83b30) at ilu.c:42
<br>
#13 0x00007fd7d77a9baa in PCReset (pc=0x7fd7d2a83b30) at precon.c:81
<br>
#14 0x00007fd7d77a99ae in PCDestroy (pc=0x7fd7d2a83b30) at precon.c:117
<br>
#15 0x00007fd7d7557c1a in KSPDestroy (ksp=0x7fd7d2a83b30) at itfunc.c:788
<br>
#16 0x00007fd7d91cdcca in linearSystemPETSc&lt;double&gt;::~linearSystemPETSc
<br>
(this=0x7fd7d2a83b30) at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Solver/li
<br>
nearSystemPETSc.hpp:73
<br>
#17 0x00007fd7d8ddb63b in GFaceCompound::parametrize (this=0x7fd7d2a83b30,
<br>
step=128, tom=10620672) at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Geo/GFace
<br>
Compound.cpp:1672
<br>
#18 0x00007fd7d8dda0fe in GFaceCompound::parametrize (this=0x7fd7d2a83b30)
<br>
at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Geo/GFace
<br>
Compound.cpp:916
<br>
#19 0x00007fd7d8f98b0e in checkMeshCompound (gf=0x7fd7d2a83b30, edges=...)
<br>
at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/mesh
<br>
GFace.cpp:2588
<br>
#20 0x00007fd7d8f95c7e in meshGenerator (gf=0xd13020, RECUR_ITER=0,
<br>
repairSelfIntersecting1dMesh=true, onlyInitialMesh=false, debug=false,
<br>
replacement_edges=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/mesh
<br>
GFace.cpp:1075
<br>
#21 0x00007fd7d8f9a41e in meshGFace::operator() (this=0x7fd7d2a83b30,
<br>
gf=0x80, print=false) at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/mesh
<br>
GFace.cpp:2562
<br>
#22 0x00007fd7d8f8c327 in Mesh2D (m=0x7fd7d2a83b30) at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/Gene
<br>
rator.cpp:407
<br>
#23 0x00007fd7d8f8ad0b in GenerateMesh (m=0x7fd7d2a83b30, ask=128) at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/Gene
<br>
rator.cpp:641
<br>
#24 0x00007fd7d8e43126 in GModel::mesh (this=0x7fd7d2a83b30, dimension=128)
<br>
at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Geo/GMode
<br>
l.cpp:535
<br>
#25 0x00007fd7d8c1acd2 in GmshBatch () at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Common/Gm
<br>
sh.cpp:240
<br>
#26 0x000000000040187a in main (argc=-760726736, argv=0x80) at
<br>
/short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Common/Ma
<br>
in.cpp:27
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26019.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="26017.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26025.php">Howard Pritchard: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Reply:</strong> <a href="26025.php">Howard Pritchard: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
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

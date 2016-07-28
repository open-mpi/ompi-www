<?
$subject_val = "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 08:58:22 2014" -->
<!-- isoreceived="20141219135822" -->
<!-- sent="Fri, 19 Dec 2014 13:58:17 +0000" -->
<!-- isosent="20141219135817" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5" -->
<!-- id="9F43A088-AEAA-4D5C-8B8B-D4895208725C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkUKStqr0D--F9AvmB1PFvwKxT3b7M2XATdPaSmybnmA2A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 08:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Previous message:</strong> <a href="26040.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="26028.php">George Bosilca: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Reply:</strong> <a href="26042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Reply:</strong> <a href="26043.php">George Bosilca: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26379.php">Jed Brown: "Re: [OMPI users] [petsc-maint] Deadlock in OpenMPI 1.8.3 and PETSc	3.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George:
<br>
<p>(I'm not a member of petsc-maint; I have no idea whether my mail will actually go through to that list)
<br>
<p>TL;DR: I do not think that George's change was correct. PETSC is relying on undefined behavior in the MPI standard and should probably update to use a different scheme.
<br>
<p>More detail:
<br>
<p>More specifically, George's change can lead to inconsistency/incorrectness in the presence of multiple threads simultaneously executing attribute actions on a single entity.
<br>
<p>For example, in ompi_attr_delete_all(), it gets the count of all attributes and then loops &lt;count&gt; times to delete each attribute.  But each attribute callback can now insert or delete attributes on that entity.  This can mean that the loop can either fail to delete an attribute (because some attribute callback already deleted it) or fail to delete *all* attributes (because some attribute callback added more).
<br>
<p>ompi_attr_copy_all() has similar problems -- in general, the hash that it is looping over can change underneath it.
<br>
<p>This is, unfortunately, an undefined area of the MPI specification.  I do believe that our previous behavior was *correct* -- it just deadlocks with PETSC because PETSC is relying on undefined behavior.
<br>
<p>For those who care, Microsoft/Cisco proposed a new attribute system to the Forum a while ago that removes all these kinds of ambiguities (see <a href="http://meetings.mpi-forum.org/secretary/2013/09/slides/jsquyres-attributes-revamp.pdf">http://meetings.mpi-forum.org/secretary/2013/09/slides/jsquyres-attributes-revamp.pdf</a>).  However, we didn't get a huge amount of interest, and therefore lost our window of availability opportunity to be able to advance the proposal.  I'd be more than happy to talk anyone through the proposal if they have interest/cycles in taking it over and advancing it with the Forum.
<br>
<p>Two additional points from the PDF listed above:
<br>
<p>- on slide 21, it was decided to no allow the recursive behavior (i.e., you can ignore the &quot;This is under debate&quot; bullet.
<br>
- the &quot;destroy&quot; callback was not judged to be useful; you can ignore slides 22 and 23.
<br>
<p><p>On Dec 17, 2014, at 11:16 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ben,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't find anything in the MPI standard suggesting that a recursive behavior of the attribute deletion is enforced/supported by the MPI standard. Thus, the current behavior of Open MPI (a single lock for all attributes), while maybe a little strict, is standard compliant (and thus correct). I guess this is one of these peculiar differences between different MPI libraries that makes other libraries (taking advantage of particular implementation of MPI functions) less portable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, changing Open MPI to a less restrictive behavior is a 4 lines patch [1]. Unfortunately, this will not make your life easier, you will still have to cope with all the existing versions of Open MPI that do not support this recursive behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I leave the answer to the question of including this patch into the next release to our release managers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="https://github.com/open-mpi/ompi/commit/4d55ae838d5eff2818707da7ba60ffd640144360">https://github.com/open-mpi/ompi/commit/4d55ae838d5eff2818707da7ba60ffd640144360</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 17, 2014 at 10:11 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Ben,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would you mind checking if you still observe this deadlock condition if you use
</span><br>
<span class="quotelev1">&gt; the 1.8.4 rc4 candidate?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.4rc4.tar.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I realize the behavior will likely be the same, but this is just to double check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Open MPI man page for MPI_Attr_get (hmm.. no MPI_Comm_attr_get man page,
</span><br>
<span class="quotelev1">&gt; needs to be fixed) says nothing about issues with recursion with respect to invoking
</span><br>
<span class="quotelev1">&gt; this function within an attribute delete callback, so I would treat this as a bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your patience,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-12-17 17:07 GMT-07:00 Ben Menadue &lt;ben.menadue_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Hi PETSc and OpenMPI teams,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running into a deadlock in PETSc 3.4.5 with OpenMPI 1.8.3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  1. PetscCommDestroy calls MPI_Attr_delete
</span><br>
<span class="quotelev1">&gt;  2. MPI_Attr_delete acquires a lock
</span><br>
<span class="quotelev1">&gt;  3. MPI_Attr_delete calls Petsc_DelComm_Outer (through a callback)
</span><br>
<span class="quotelev1">&gt;  4. Petsc_DelComm_Outer calls MPI_Attr_get
</span><br>
<span class="quotelev1">&gt;  5. MPI_Attr_get wants to also acquire the lock from step 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the OpenMPI source code, it looks like you can't call an
</span><br>
<span class="quotelev1">&gt; MPI_Attr_* function from inside the registered deletion callback. The
</span><br>
<span class="quotelev1">&gt; OpenMPI source code notes that all of the functions acquire a global lock,
</span><br>
<span class="quotelev1">&gt; which is where the problem is coming from - here are the comments and the
</span><br>
<span class="quotelev1">&gt; lock definition, in ompi/attribute/attribute.c of OpenMPI 1.8.3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     404 /*
</span><br>
<span class="quotelev1">&gt;     405  * We used to have multiple locks for semi-fine-grained locking.
</span><br>
<span class="quotelev1">&gt; But
</span><br>
<span class="quotelev1">&gt;     406  * the code got complex, and we had to spend time looking for subtle
</span><br>
<span class="quotelev1">&gt;     407  * bugs.  Craziness -- MPI attributes are *not* high performance, so
</span><br>
<span class="quotelev1">&gt;     408  * just use a One Big Lock approach: there is *no* concurrent
</span><br>
<span class="quotelev1">&gt; access.
</span><br>
<span class="quotelev1">&gt;     409  * If you have the lock, you can do whatever you want and no data
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt;     410  * change/disapear from underneath you.
</span><br>
<span class="quotelev1">&gt;     411  */
</span><br>
<span class="quotelev1">&gt;     412 static opal_mutex_t attribute_lock;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To get it to work, I had to modify the definition of this lock to use a
</span><br>
<span class="quotelev1">&gt; recursive mutex:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     412 static opal_mutex_t attribute_lock = { .m_lock_pthread =
</span><br>
<span class="quotelev1">&gt; PTHREAD_RECURSIVE_MUTEX_INITIALIZER_NP };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but this is non-portable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the behaviour expected from new versions OpenMPI? In which case a new
</span><br>
<span class="quotelev1">&gt; approach might be needed in PETSc. Otherwise, maybe a per-attribute lock is
</span><br>
<span class="quotelev1">&gt; needed in OpenMPI - but I'm not sure whether the get in the callback is on
</span><br>
<span class="quotelev1">&gt; the same attribute as is being deleted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x00007fd7d5de4264 in __lll_lock_wait () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00007fd7d5ddf508 in _L_lock_854 () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00007fd7d5ddf3d7 in pthread_mutex_lock () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007fd7d27d91bc in ompi_attr_get_c () from
</span><br>
<span class="quotelev1">&gt; /apps/openmpi/1.8.3/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #4  0x00007fd7d2803f03 in PMPI_Attr_get () from
</span><br>
<span class="quotelev1">&gt; /apps/openmpi/1.8.3/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #5  0x00007fd7d7716006 in Petsc_DelComm_Outer (comm=0x7fd7d2a83b30,
</span><br>
<span class="quotelev1">&gt; keyval=128, attr_val=0x7fff00a20f00, extra_state=0xffffffffffffffff) at
</span><br>
<span class="quotelev1">&gt; pinit.c:406
</span><br>
<span class="quotelev1">&gt; #6  0x00007fd7d27d8cad in ompi_attr_delete_impl () from
</span><br>
<span class="quotelev1">&gt; /apps/openmpi/1.8.3/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #7  0x00007fd7d27d8f2f in ompi_attr_delete () from
</span><br>
<span class="quotelev1">&gt; /apps/openmpi/1.8.3/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #8  0x00007fd7d2803dfc in PMPI_Attr_delete () from
</span><br>
<span class="quotelev1">&gt; /apps/openmpi/1.8.3/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #9  0x00007fd7d78bf5c5 in PetscCommDestroy (comm=0x7fd7d2a83b30) at
</span><br>
<span class="quotelev1">&gt; tagm.c:256
</span><br>
<span class="quotelev1">&gt; #10 0x00007fd7d7506f58 in PetscHeaderDestroy_Private (h=0x7fd7d2a83b30) at
</span><br>
<span class="quotelev1">&gt; inherit.c:114
</span><br>
<span class="quotelev1">&gt; #11 0x00007fd7d75038a0 in ISDestroy (is=0x7fd7d2a83b30) at index.c:225
</span><br>
<span class="quotelev1">&gt; #12 0x00007fd7d75029b7 in PCReset_ILU (pc=0x7fd7d2a83b30) at ilu.c:42
</span><br>
<span class="quotelev1">&gt; #13 0x00007fd7d77a9baa in PCReset (pc=0x7fd7d2a83b30) at precon.c:81
</span><br>
<span class="quotelev1">&gt; #14 0x00007fd7d77a99ae in PCDestroy (pc=0x7fd7d2a83b30) at precon.c:117
</span><br>
<span class="quotelev1">&gt; #15 0x00007fd7d7557c1a in KSPDestroy (ksp=0x7fd7d2a83b30) at itfunc.c:788
</span><br>
<span class="quotelev1">&gt; #16 0x00007fd7d91cdcca in linearSystemPETSc&lt;double&gt;::~linearSystemPETSc
</span><br>
<span class="quotelev1">&gt; (this=0x7fd7d2a83b30) at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Solver/li
</span><br>
<span class="quotelev1">&gt; nearSystemPETSc.hpp:73
</span><br>
<span class="quotelev1">&gt; #17 0x00007fd7d8ddb63b in GFaceCompound::parametrize (this=0x7fd7d2a83b30,
</span><br>
<span class="quotelev1">&gt; step=128, tom=10620672) at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Geo/GFace
</span><br>
<span class="quotelev1">&gt; Compound.cpp:1672
</span><br>
<span class="quotelev1">&gt; #18 0x00007fd7d8dda0fe in GFaceCompound::parametrize (this=0x7fd7d2a83b30)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Geo/GFace
</span><br>
<span class="quotelev1">&gt; Compound.cpp:916
</span><br>
<span class="quotelev1">&gt; #19 0x00007fd7d8f98b0e in checkMeshCompound (gf=0x7fd7d2a83b30, edges=...)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/mesh
</span><br>
<span class="quotelev1">&gt; GFace.cpp:2588
</span><br>
<span class="quotelev1">&gt; #20 0x00007fd7d8f95c7e in meshGenerator (gf=0xd13020, RECUR_ITER=0,
</span><br>
<span class="quotelev1">&gt; repairSelfIntersecting1dMesh=true, onlyInitialMesh=false, debug=false,
</span><br>
<span class="quotelev1">&gt; replacement_edges=0x0)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/mesh
</span><br>
<span class="quotelev1">&gt; GFace.cpp:1075
</span><br>
<span class="quotelev1">&gt; #21 0x00007fd7d8f9a41e in meshGFace::operator() (this=0x7fd7d2a83b30,
</span><br>
<span class="quotelev1">&gt; gf=0x80, print=false) at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/mesh
</span><br>
<span class="quotelev1">&gt; GFace.cpp:2562
</span><br>
<span class="quotelev1">&gt; #22 0x00007fd7d8f8c327 in Mesh2D (m=0x7fd7d2a83b30) at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/Gene
</span><br>
<span class="quotelev1">&gt; rator.cpp:407
</span><br>
<span class="quotelev1">&gt; #23 0x00007fd7d8f8ad0b in GenerateMesh (m=0x7fd7d2a83b30, ask=128) at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/Gene
</span><br>
<span class="quotelev1">&gt; rator.cpp:641
</span><br>
<span class="quotelev1">&gt; #24 0x00007fd7d8e43126 in GModel::mesh (this=0x7fd7d2a83b30, dimension=128)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Geo/GMode
</span><br>
<span class="quotelev1">&gt; l.cpp:535
</span><br>
<span class="quotelev1">&gt; #25 0x00007fd7d8c1acd2 in GmshBatch () at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Common/Gm
</span><br>
<span class="quotelev1">&gt; sh.cpp:240
</span><br>
<span class="quotelev1">&gt; #26 0x000000000040187a in main (argc=-760726736, argv=0x80) at
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Common/Ma
</span><br>
<span class="quotelev1">&gt; in.cpp:27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26018.php">http://www.open-mpi.org/community/lists/users/2014/12/26018.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26025.php">http://www.open-mpi.org/community/lists/users/2014/12/26025.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26028.php">http://www.open-mpi.org/community/lists/users/2014/12/26028.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Previous message:</strong> <a href="26040.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="26028.php">George Bosilca: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Reply:</strong> <a href="26042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Reply:</strong> <a href="26043.php">George Bosilca: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26379.php">Jed Brown: "Re: [OMPI users] [petsc-maint] Deadlock in OpenMPI 1.8.3 and PETSc	3.4.5"</a>
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

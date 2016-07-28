<?
$subject_val = "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 10:44:33 2014" -->
<!-- isoreceived="20141219154433" -->
<!-- sent="Fri, 19 Dec 2014 10:44:31 -0500" -->
<!-- isosent="20141219154431" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5" -->
<!-- id="CAMJJpkUZFAcD-UhF6cFv0q_3Hd9VuUm3en=5oD=HnNOJJL3rUA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9F43A088-AEAA-4D5C-8B8B-D4895208725C_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 10:44:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Previous message:</strong> <a href="26042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>In reply to:</strong> <a href="26041.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Reply:</strong> <a href="26044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 19, 2014 at 8:58 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; George:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I'm not a member of petsc-maint; I have no idea whether my mail will
</span><br>
<span class="quotelev1">&gt; actually go through to that list)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TL;DR: I do not think that George's change was correct. PETSC is relying
</span><br>
<span class="quotelev1">&gt; on undefined behavior in the MPI standard and should probably update to use
</span><br>
<span class="quotelev1">&gt; a different scheme.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I will detail below why the change is correct or at least not worst than
<br>
what we have today.
<br>
<p>Regarding your second point, while I do tend to agree that such issue is
<br>
better addressed in the MPI Forum, the last attempt to fix this was
<br>
certainly not a resounding success.
<br>
<p><p><span class="quotelev1">&gt; More detail:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically, George's change can lead to inconsistency/incorrectness
</span><br>
<span class="quotelev1">&gt; in the presence of multiple threads simultaneously executing attribute
</span><br>
<span class="quotelev1">&gt; actions on a single entity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Indeed, there is a slight window of opportunity for inconsistencies in the
<br>
recursive behavior. But the inconsistencies were already in the code,
<br>
especially in the single threaded case. As we never received any complaints
<br>
related to this topic I did not deemed interesting to address them with my
<br>
last commit. Moreover, the specific behavior needed by PETSc is available
<br>
in Open MPI when compiled without thread support, as the only thing that
<br>
&quot;protects&quot; the attributes is that global mutex.
<br>
<p>For example, in ompi_attr_delete_all(), it gets the count of all attributes
<br>
<span class="quotelev1">&gt; and then loops &lt;count&gt; times to delete each attribute.  But each attribute
</span><br>
<span class="quotelev1">&gt; callback can now insert or delete attributes on that entity.  This can mean
</span><br>
<span class="quotelev1">&gt; that the loop can either fail to delete an attribute (because some
</span><br>
<span class="quotelev1">&gt; attribute callback already deleted it) or fail to delete *all* attributes
</span><br>
<span class="quotelev1">&gt; (because some attribute callback added more).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>To be extremely precise the deletion part is always correct as it copies
<br>
the values to be deleted into a temporary array before calling any
<br>
callbacks (and before releasing the mutex), so we only remove what was in
<br>
the object attribute hash when the function was called. Don't misunderstand
<br>
we have an extremely good reason to do it this way, we need to call the
<br>
callbacks in the order in which they were created (mandated by the MPI
<br>
standard).
<br>
<p><p><span class="quotelev1">&gt; ompi_attr_copy_all() has similar problems -- in general, the hash that it
</span><br>
<span class="quotelev1">&gt; is looping over can change underneath it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>For the copy it is a little bit more tricky, as the calling order is not
<br>
imposed. Our peculiar implementation of the hash table (with array) makes
<br>
the code work, with a single (possible minor) exception when the hash table
<br>
itself is grown between 2 calls. However, as stated before this issue was
<br>
already present in the code in single threaded cases for years. Addressing
<br>
it is another 2 line patch, but I leave this exercise to an interested
<br>
reader.
<br>
<p>&nbsp;&nbsp;&nbsp;George.
<br>
<p><p>This is, unfortunately, an undefined area of the MPI specification.  I do
<br>
<span class="quotelev1">&gt; believe that our previous behavior was *correct* -- it just deadlocks with
</span><br>
<span class="quotelev1">&gt; PETSC because PETSC is relying on undefined behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For those who care, Microsoft/Cisco proposed a new attribute system to the
</span><br>
<span class="quotelev1">&gt; Forum a while ago that removes all these kinds of ambiguities (see
</span><br>
<span class="quotelev1">&gt; <a href="http://meetings.mpi-forum.org/secretary/2013/09/slides/jsquyres-attributes-revamp.pdf">http://meetings.mpi-forum.org/secretary/2013/09/slides/jsquyres-attributes-revamp.pdf</a>).
</span><br>
<span class="quotelev1">&gt; However, we didn't get a huge amount of interest, and therefore lost our
</span><br>
<span class="quotelev1">&gt; window of availability opportunity to be able to advance the proposal.  I'd
</span><br>
<span class="quotelev1">&gt; be more than happy to talk anyone through the proposal if they have
</span><br>
<span class="quotelev1">&gt; interest/cycles in taking it over and advancing it with the Forum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two additional points from the PDF listed above:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - on slide 21, it was decided to no allow the recursive behavior (i.e.,
</span><br>
<span class="quotelev1">&gt; you can ignore the &quot;This is under debate&quot; bullet.
</span><br>
<span class="quotelev1">&gt; - the &quot;destroy&quot; callback was not judged to be useful; you can ignore
</span><br>
<span class="quotelev1">&gt; slides 22 and 23.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 17, 2014, at 11:16 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ben,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can't find anything in the MPI standard suggesting that a recursive
</span><br>
<span class="quotelev1">&gt; behavior of the attribute deletion is enforced/supported by the MPI
</span><br>
<span class="quotelev1">&gt; standard. Thus, the current behavior of Open MPI (a single lock for all
</span><br>
<span class="quotelev1">&gt; attributes), while maybe a little strict, is standard compliant (and thus
</span><br>
<span class="quotelev1">&gt; correct). I guess this is one of these peculiar differences between
</span><br>
<span class="quotelev1">&gt; different MPI libraries that makes other libraries (taking advantage of
</span><br>
<span class="quotelev1">&gt; particular implementation of MPI functions) less portable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, changing Open MPI to a less restrictive behavior is a 4
</span><br>
<span class="quotelev1">&gt; lines patch [1]. Unfortunately, this will not make your life easier, you
</span><br>
<span class="quotelev1">&gt; will still have to cope with all the existing versions of Open MPI that do
</span><br>
<span class="quotelev1">&gt; not support this recursive behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I leave the answer to the question of including this patch into the next
</span><br>
<span class="quotelev1">&gt; release to our release managers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [1]
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/4d55ae838d5eff2818707da7ba60ffd640144360">https://github.com/open-mpi/ompi/commit/4d55ae838d5eff2818707da7ba60ffd640144360</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Dec 17, 2014 at 10:11 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ben,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Would you mind checking if you still observe this deadlock condition if
</span><br>
<span class="quotelev1">&gt; you use
</span><br>
<span class="quotelev2">&gt; &gt; the 1.8.4 rc4 candidate?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.8.4rc4.tar.gz
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I realize the behavior will likely be the same, but this is just to
</span><br>
<span class="quotelev1">&gt; double check.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The Open MPI man page for MPI_Attr_get (hmm.. no MPI_Comm_attr_get man
</span><br>
<span class="quotelev1">&gt; page,
</span><br>
<span class="quotelev2">&gt; &gt; needs to be fixed) says nothing about issues with recursion with respect
</span><br>
<span class="quotelev1">&gt; to invoking
</span><br>
<span class="quotelev2">&gt; &gt; this function within an attribute delete callback, so I would treat this
</span><br>
<span class="quotelev1">&gt; as a bug.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your patience,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2014-12-17 17:07 GMT-07:00 Ben Menadue &lt;ben.menadue_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Hi PETSc and OpenMPI teams,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm running into a deadlock in PETSc 3.4.5 with OpenMPI 1.8.3:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  1. PetscCommDestroy calls MPI_Attr_delete
</span><br>
<span class="quotelev2">&gt; &gt;  2. MPI_Attr_delete acquires a lock
</span><br>
<span class="quotelev2">&gt; &gt;  3. MPI_Attr_delete calls Petsc_DelComm_Outer (through a callback)
</span><br>
<span class="quotelev2">&gt; &gt;  4. Petsc_DelComm_Outer calls MPI_Attr_get
</span><br>
<span class="quotelev2">&gt; &gt;  5. MPI_Attr_get wants to also acquire the lock from step 2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Looking at the OpenMPI source code, it looks like you can't call an
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Attr_* function from inside the registered deletion callback. The
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI source code notes that all of the functions acquire a global
</span><br>
<span class="quotelev1">&gt; lock,
</span><br>
<span class="quotelev2">&gt; &gt; which is where the problem is coming from - here are the comments and the
</span><br>
<span class="quotelev2">&gt; &gt; lock definition, in ompi/attribute/attribute.c of OpenMPI 1.8.3:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     404 /*
</span><br>
<span class="quotelev2">&gt; &gt;     405  * We used to have multiple locks for semi-fine-grained locking.
</span><br>
<span class="quotelev2">&gt; &gt; But
</span><br>
<span class="quotelev2">&gt; &gt;     406  * the code got complex, and we had to spend time looking for
</span><br>
<span class="quotelev1">&gt; subtle
</span><br>
<span class="quotelev2">&gt; &gt;     407  * bugs.  Craziness -- MPI attributes are *not* high
</span><br>
<span class="quotelev1">&gt; performance, so
</span><br>
<span class="quotelev2">&gt; &gt;     408  * just use a One Big Lock approach: there is *no* concurrent
</span><br>
<span class="quotelev2">&gt; &gt; access.
</span><br>
<span class="quotelev2">&gt; &gt;     409  * If you have the lock, you can do whatever you want and no data
</span><br>
<span class="quotelev2">&gt; &gt; will
</span><br>
<span class="quotelev2">&gt; &gt;     410  * change/disapear from underneath you.
</span><br>
<span class="quotelev2">&gt; &gt;     411  */
</span><br>
<span class="quotelev2">&gt; &gt;     412 static opal_mutex_t attribute_lock;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To get it to work, I had to modify the definition of this lock to use a
</span><br>
<span class="quotelev2">&gt; &gt; recursive mutex:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     412 static opal_mutex_t attribute_lock = { .m_lock_pthread =
</span><br>
<span class="quotelev2">&gt; &gt; PTHREAD_RECURSIVE_MUTEX_INITIALIZER_NP };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but this is non-portable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is the behaviour expected from new versions OpenMPI? In which case a new
</span><br>
<span class="quotelev2">&gt; &gt; approach might be needed in PETSc. Otherwise, maybe a per-attribute lock
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt; &gt; needed in OpenMPI - but I'm not sure whether the get in the callback is
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt; &gt; the same attribute as is being deleted.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Ben
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00007fd7d5de4264 in __lll_lock_wait () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00007fd7d5ddf508 in _L_lock_854 () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00007fd7d5ddf3d7 in pthread_mutex_lock () from
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00007fd7d27d91bc in ompi_attr_get_c () from
</span><br>
<span class="quotelev2">&gt; &gt; /apps/openmpi/1.8.3/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00007fd7d2803f03 in PMPI_Attr_get () from
</span><br>
<span class="quotelev2">&gt; &gt; /apps/openmpi/1.8.3/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00007fd7d7716006 in Petsc_DelComm_Outer (comm=0x7fd7d2a83b30,
</span><br>
<span class="quotelev2">&gt; &gt; keyval=128, attr_val=0x7fff00a20f00, extra_state=0xffffffffffffffff) at
</span><br>
<span class="quotelev2">&gt; &gt; pinit.c:406
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00007fd7d27d8cad in ompi_attr_delete_impl () from
</span><br>
<span class="quotelev2">&gt; &gt; /apps/openmpi/1.8.3/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00007fd7d27d8f2f in ompi_attr_delete () from
</span><br>
<span class="quotelev2">&gt; &gt; /apps/openmpi/1.8.3/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x00007fd7d2803dfc in PMPI_Attr_delete () from
</span><br>
<span class="quotelev2">&gt; &gt; /apps/openmpi/1.8.3/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x00007fd7d78bf5c5 in PetscCommDestroy (comm=0x7fd7d2a83b30) at
</span><br>
<span class="quotelev2">&gt; &gt; tagm.c:256
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x00007fd7d7506f58 in PetscHeaderDestroy_Private (h=0x7fd7d2a83b30)
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev2">&gt; &gt; inherit.c:114
</span><br>
<span class="quotelev2">&gt; &gt; #11 0x00007fd7d75038a0 in ISDestroy (is=0x7fd7d2a83b30) at index.c:225
</span><br>
<span class="quotelev2">&gt; &gt; #12 0x00007fd7d75029b7 in PCReset_ILU (pc=0x7fd7d2a83b30) at ilu.c:42
</span><br>
<span class="quotelev2">&gt; &gt; #13 0x00007fd7d77a9baa in PCReset (pc=0x7fd7d2a83b30) at precon.c:81
</span><br>
<span class="quotelev2">&gt; &gt; #14 0x00007fd7d77a99ae in PCDestroy (pc=0x7fd7d2a83b30) at precon.c:117
</span><br>
<span class="quotelev2">&gt; &gt; #15 0x00007fd7d7557c1a in KSPDestroy (ksp=0x7fd7d2a83b30) at itfunc.c:788
</span><br>
<span class="quotelev2">&gt; &gt; #16 0x00007fd7d91cdcca in linearSystemPETSc&lt;double&gt;::~linearSystemPETSc
</span><br>
<span class="quotelev2">&gt; &gt; (this=0x7fd7d2a83b30) at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Solver/li
</span><br>
<span class="quotelev2">&gt; &gt; nearSystemPETSc.hpp:73
</span><br>
<span class="quotelev2">&gt; &gt; #17 0x00007fd7d8ddb63b in GFaceCompound::parametrize
</span><br>
<span class="quotelev1">&gt; (this=0x7fd7d2a83b30,
</span><br>
<span class="quotelev2">&gt; &gt; step=128, tom=10620672) at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Geo/GFace
</span><br>
<span class="quotelev2">&gt; &gt; Compound.cpp:1672
</span><br>
<span class="quotelev2">&gt; &gt; #18 0x00007fd7d8dda0fe in GFaceCompound::parametrize
</span><br>
<span class="quotelev1">&gt; (this=0x7fd7d2a83b30)
</span><br>
<span class="quotelev2">&gt; &gt; at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Geo/GFace
</span><br>
<span class="quotelev2">&gt; &gt; Compound.cpp:916
</span><br>
<span class="quotelev2">&gt; &gt; #19 0x00007fd7d8f98b0e in checkMeshCompound (gf=0x7fd7d2a83b30,
</span><br>
<span class="quotelev1">&gt; edges=...)
</span><br>
<span class="quotelev2">&gt; &gt; at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/mesh
</span><br>
<span class="quotelev2">&gt; &gt; GFace.cpp:2588
</span><br>
<span class="quotelev2">&gt; &gt; #20 0x00007fd7d8f95c7e in meshGenerator (gf=0xd13020, RECUR_ITER=0,
</span><br>
<span class="quotelev2">&gt; &gt; repairSelfIntersecting1dMesh=true, onlyInitialMesh=false, debug=false,
</span><br>
<span class="quotelev2">&gt; &gt; replacement_edges=0x0)
</span><br>
<span class="quotelev2">&gt; &gt;     at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/mesh
</span><br>
<span class="quotelev2">&gt; &gt; GFace.cpp:1075
</span><br>
<span class="quotelev2">&gt; &gt; #21 0x00007fd7d8f9a41e in meshGFace::operator() (this=0x7fd7d2a83b30,
</span><br>
<span class="quotelev2">&gt; &gt; gf=0x80, print=false) at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/mesh
</span><br>
<span class="quotelev2">&gt; &gt; GFace.cpp:2562
</span><br>
<span class="quotelev2">&gt; &gt; #22 0x00007fd7d8f8c327 in Mesh2D (m=0x7fd7d2a83b30) at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/Gene
</span><br>
<span class="quotelev2">&gt; &gt; rator.cpp:407
</span><br>
<span class="quotelev2">&gt; &gt; #23 0x00007fd7d8f8ad0b in GenerateMesh (m=0x7fd7d2a83b30, ask=128) at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Mesh/Gene
</span><br>
<span class="quotelev2">&gt; &gt; rator.cpp:641
</span><br>
<span class="quotelev2">&gt; &gt; #24 0x00007fd7d8e43126 in GModel::mesh (this=0x7fd7d2a83b30,
</span><br>
<span class="quotelev1">&gt; dimension=128)
</span><br>
<span class="quotelev2">&gt; &gt; at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Geo/GMode
</span><br>
<span class="quotelev2">&gt; &gt; l.cpp:535
</span><br>
<span class="quotelev2">&gt; &gt; #25 0x00007fd7d8c1acd2 in GmshBatch () at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Common/Gm
</span><br>
<span class="quotelev2">&gt; &gt; sh.cpp:240
</span><br>
<span class="quotelev2">&gt; &gt; #26 0x000000000040187a in main (argc=-760726736, argv=0x80) at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /short/z00/bjm900/build/fluidity/intel15-ompi183/gmsh-2.8.5-source/Common/Ma
</span><br>
<span class="quotelev2">&gt; &gt; in.cpp:27
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26018.php">http://www.open-mpi.org/community/lists/users/2014/12/26018.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26025.php">http://www.open-mpi.org/community/lists/users/2014/12/26025.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26028.php">http://www.open-mpi.org/community/lists/users/2014/12/26028.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26041.php">http://www.open-mpi.org/community/lists/users/2014/12/26041.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26043/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Previous message:</strong> <a href="26042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>In reply to:</strong> <a href="26041.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>Reply:</strong> <a href="26044.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
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

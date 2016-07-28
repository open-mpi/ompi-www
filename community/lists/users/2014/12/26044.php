<?
$subject_val = "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 14:27:00 2014" -->
<!-- isoreceived="20141219192700" -->
<!-- sent="Fri, 19 Dec 2014 19:26:58 +0000" -->
<!-- isosent="20141219192658" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5" -->
<!-- id="027AB453-DE85-4F08-BDD7-A676CA90E239_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkUZFAcD-UhF6cFv0q_3Hd9VuUm3en=5oD=HnNOJJL3rUA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-19 14:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26045.php">Sergio Manzetti: "[OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64"</a>
<li><strong>Previous message:</strong> <a href="26043.php">George Bosilca: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>In reply to:</strong> <a href="26043.php">George Bosilca: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26379.php">Jed Brown: "Re: [OMPI users] [petsc-maint] Deadlock in OpenMPI 1.8.3 and PETSc	3.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 19, 2014, at 10:44 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Regarding your second point, while I do tend to agree that such issue is better addressed in the MPI Forum, the last attempt to fix this was certainly not a resounding success.
</span><br>
<p>Yeah, fair enough -- but it wasn't a failure, either.  It could definitely be moved forward, but it will take time/effort, which I unfortunately don't have. I would be willing, however, to spin up someone who *does* have time/effort available to move the proposal forward.
<br>
<p><span class="quotelev1">&gt; Indeed, there is a slight window of opportunity for inconsistencies in the recursive behavior.
</span><br>
<p>You're right; it's a small window in the threading case, but a) that's the worst kind :-), and b) the non-threaded case is actually worse (because the global state can change from underneath the loop).
<br>
<p><span class="quotelev1">&gt; But the inconsistencies were already in the code, especially in the single threaded case. As we never received any complaints related to this topic I did not deemed interesting to address them with my last commit. Moreover, the specific behavior needed by PETSc is available in Open MPI when compiled without thread support, as the only thing that &quot;protects&quot; the attributes is that global mutex.
</span><br>
<p>Mmmm.  Ok, I see your point.  But this is a (very) slippery slope.
<br>
<p><span class="quotelev1">&gt; For example, in ompi_attr_delete_all(), it gets the count of all attributes and then loops &lt;count&gt; times to delete each attribute.  But each attribute callback can now insert or delete attributes on that entity.  This can mean that the loop can either fail to delete an attribute (because some attribute callback already deleted it) or fail to delete *all* attributes (because some attribute callback added more).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be extremely precise the deletion part is always correct
</span><br>
<p>...as long as the hash map is not altered from the application (e.g., by adding or deleting another attribute during a callback).
<br>
<p>I understand that you mention above that you're not worried about this case.  I'm just picking here because there is quite definitely a case where the loop is *not* correct.  PETSc apparently doesn't trigger this badness, but... like I said above, it's a (very) slippery slope.
<br>
<p><span class="quotelev1">&gt; as it copies the values to be deleted into a temporary array before calling any callbacks (and before releasing the mutex), so we only remove what was in the object attribute hash when the function was called. Don't misunderstand we have an extremely good reason to do it this way, we need to call the callbacks in the order in which they were created (mandated by the MPI standard).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ompi_attr_copy_all() has similar problems -- in general, the hash that it is looping over can change underneath it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the copy it is a little bit more tricky, as the calling order is not imposed. Our peculiar implementation of the hash table (with array) makes the code work, with a single (possible minor) exception when the hash table itself is grown between 2 calls. However, as stated before this issue was already present in the code in single threaded cases for years. Addressing it is another 2 line patch, but I leave this exercise to an interested reader.
</span><br>
<p>Yeah, thanks for that.  :-)
<br>
<p>To be clear: both the copy and the delete code could be made thread safe.  I just don't think we should be encouraging users to be exercising undefined / probably not-portable MPI code.
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
<li><strong>Next message:</strong> <a href="26045.php">Sergio Manzetti: "[OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64"</a>
<li><strong>Previous message:</strong> <a href="26043.php">George Bosilca: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>In reply to:</strong> <a href="26043.php">George Bosilca: "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26379.php">Jed Brown: "Re: [OMPI users] [petsc-maint] Deadlock in OpenMPI 1.8.3 and PETSc	3.4.5"</a>
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

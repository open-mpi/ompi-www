<?
$subject_val = "Re: [OMPI users] [petsc-maint] Deadlock in OpenMPI 1.8.3 and PETSc	3.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 19:15:20 2015" -->
<!-- isoreceived="20150224001520" -->
<!-- sent="Mon, 23 Feb 2015 17:15:15 -0700" -->
<!-- isosent="20150224001515" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [petsc-maint] Deadlock in OpenMPI 1.8.3 and PETSc	3.4.5" -->
<!-- id="87y4nogo6k.fsf_at_jedbrown.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] [petsc-maint] Deadlock in OpenMPI 1.8.3 and PETSc	3.4.5<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-23 19:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26380.php">George Bosilca: "Re: [OMPI users] Questions regarding MPI intercommunicators &amp; collectives"</a>
<li><strong>Previous message:</strong> <a href="26378.php">George Bosilca: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26041.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26029.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; This is, unfortunately, an undefined area of the MPI specification.  I
</span><br>
<span class="quotelev1">&gt; do believe that our previous behavior was *correct* -- it just
</span><br>
<span class="quotelev1">&gt; deadlocks with PETSC because PETSC is relying on undefined behavior.
</span><br>
<p>Jeff, can you clarify where in the standard this is left undefined?  Is
<br>
one to assume that callbacks can never call into MPI unless explicitly
<br>
allowed?  Note that empirically, this usage has worked with all
<br>
implementations since 1998, except this version of Open MPI.
<br>
<p>If the callback is to be considered invalid, how would you recommend
<br>
implementing two-way linked communicators?
<br>
<p><span class="quotelev1">&gt; For those who care, Microsoft/Cisco proposed a new attribute system to
</span><br>
<span class="quotelev1">&gt; the Forum a while ago that removes all these kinds of ambiguities (see
</span><br>
<span class="quotelev1">&gt; <a href="http://meetings.mpi-forum.org/secretary/2013/09/slides/jsquyres-attributes-revamp.pdf">http://meetings.mpi-forum.org/secretary/2013/09/slides/jsquyres-attributes-revamp.pdf</a>).
</span><br>
<span class="quotelev1">&gt; However, we didn't get a huge amount of interest, and therefore lost
</span><br>
<span class="quotelev1">&gt; our window of availability opportunity to be able to advance the
</span><br>
<span class="quotelev1">&gt; proposal.  I'd be more than happy to talk anyone through the proposal
</span><br>
<span class="quotelev1">&gt; if they have interest/cycles in taking it over and advancing it with
</span><br>
<span class="quotelev1">&gt; the Forum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two additional points from the PDF listed above:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - on slide 21, it was decided to no allow the recursive behavior (i.e., you can ignore the &quot;This is under debate&quot; bullet.
</span><br>
<span class="quotelev1">&gt; - the &quot;destroy&quot; callback was not judged to be useful; you can ignore slides 22 and 23.
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26379/signature.asc">signature.asc</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26380.php">George Bosilca: "Re: [OMPI users] Questions regarding MPI intercommunicators &amp; collectives"</a>
<li><strong>Previous message:</strong> <a href="26378.php">George Bosilca: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26041.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26029.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
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

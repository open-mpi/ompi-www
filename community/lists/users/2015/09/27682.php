<?
$subject_val = "Re: [OMPI users] Problem using mpifort(Intel)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 13:55:41 2015" -->
<!-- isoreceived="20150925175541" -->
<!-- sent="Fri, 25 Sep 2015 17:55:38 +0000" -->
<!-- isosent="20150925175538" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem using mpifort(Intel)" -->
<!-- id="66EFD306-64C3-4121-A952-D3CA7F062A42_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACWXmz6rdWZVJV3x3_qn5Zzu2rd8fFUqTgL9=UeVU5mRHdUDVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem using mpifort(Intel)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-25 13:55:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27683.php">Filippo Spiga: "[OMPI users] RSH agent working but no output"</a>
<li><strong>Previous message:</strong> <a href="27681.php">Julien Bodart: "[OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>In reply to:</strong> <a href="27681.php">Julien Bodart: "[OMPI users] Problem using mpifort(Intel)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27757.php">Julien Bodart: "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This problem was literally reported just the other day; it was partially fixed earlier today, the rest of the fix will be committed shortly.
<br>
<p>The Intel 2016 compiler suite changed something in how they handle the !GCC pragma (i.e., they didn't handle it at all before, and now they only partially handle it).  See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2015/09/27676.php">http://www.open-mpi.org/community/lists/users/2015/09/27676.php</a>
<br>
<p>This issue affects the &quot;use mpi&quot; and &quot;use mpi_f08&quot; modules for the Intel 2016 Parallel Studio compiler suite.
<br>
<p><p><span class="quotelev1">&gt; On Sep 25, 2015, at 7:36 PM, Julien Bodart &lt;julien.bodart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This problem has probably been discussed already but I could not find it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I a m trying to compile openmpi with intel-16 compilers mpicc,mpicxx
</span><br>
<span class="quotelev1">&gt; work, but I have trouble with mpifort:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Trying to compile one of example programs I get the following error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ring_usempi.f90(35): error #6285: There is no matching specific
</span><br>
<span class="quotelev1">&gt; subroutine for this generic subroutine call.   [MPI_SEND]
</span><br>
<span class="quotelev1">&gt;       call MPI_SEND(message, 1, MPI_INTEGER, next, tag, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt; -----------^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wether I use openmpi 1.8 or openmpi 1.10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot find the right configure options to get the correct fortran bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27681.php">http://www.open-mpi.org/community/lists/users/2015/09/27681.php</a>
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
<li><strong>Next message:</strong> <a href="27683.php">Filippo Spiga: "[OMPI users] RSH agent working but no output"</a>
<li><strong>Previous message:</strong> <a href="27681.php">Julien Bodart: "[OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>In reply to:</strong> <a href="27681.php">Julien Bodart: "[OMPI users] Problem using mpifort(Intel)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27757.php">Julien Bodart: "Re: [OMPI users] Problem using mpifort(Intel)"</a>
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

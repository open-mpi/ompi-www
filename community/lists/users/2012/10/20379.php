<?
$subject_val = "Re: [OMPI users] fortran bindings for MPI_Op_commutative";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 12:31:40 2012" -->
<!-- isoreceived="20121002163140" -->
<!-- sent="Tue, 2 Oct 2012 12:31:40 -0400" -->
<!-- isosent="20121002163140" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran bindings for MPI_Op_commutative" -->
<!-- id="54FDBCF9-16E9-4E62-9254-0346EC5AACE7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57ocFn34WamUjxivacL3OXzuYrh3M3-D6O0AaYDQos-htxQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] fortran bindings for MPI_Op_commutative<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 12:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20380.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20378.php">Shiqing Fan: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20343.php">Ralph Castain: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perfect; many thanks.
<br>
<p>This is now filed as a CMR and will be included in 1.6.3.  Part of this was also necessary for the trunk/v1.7 branch (in the TKR mpi module implementation).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3337">https://svn.open-mpi.org/trac/ompi/ticket/3337</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3338">https://svn.open-mpi.org/trac/ompi/ticket/3338</a>
<br>
<p>Many thanks!
<br>
<p><p>On Sep 27, 2012, at 11:06 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ouch! Thanks - I'll fix that and check for any other missing entries (Jeff is on a plane back from Europe today). Don't know when Jeff will want to roll a replacement 1.6.3 release, but he can address that when he returns to the airwaves.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 27, 2012 at 7:45 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Thu, 2012-09-27 at 16:31 +0200, Ake Sandgren wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Building 1.6.1 and 1.6.2 i seem to be missing the actual fortran
</span><br>
<span class="quotelev2">&gt; &gt; bindings for MPI_Op_commutative and a bunch of other functions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My configure is
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --enable-orterun-prefix-by-default --enable-cxx-exceptions
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When looking in libmpi_f77.so there is no mpi_op_commutative_ defined.
</span><br>
<span class="quotelev2">&gt; &gt; mpi_init_ is there (as a weak) as it should.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All compilers give me the same result.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas why?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ahh, pop_commutative_f.c is missing from the profile/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20380.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20378.php">Shiqing Fan: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20343.php">Ralph Castain: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- nextthread="start" -->
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

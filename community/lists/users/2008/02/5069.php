<?
$subject_val = "Re: [OMPI users] mpi.h macro naming";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 22 12:40:48 2008" -->
<!-- isoreceived="20080222174048" -->
<!-- sent="Fri, 22 Feb 2008 11:40:40 -0600 (CST)" -->
<!-- isosent="20080222174040" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h macro naming" -->
<!-- id="Pine.LNX.4.64.0802221139250.31457_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0802221115370.31457_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.h macro naming<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-22 12:40:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5070.php">Mathias PUETZ: "[OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>Previous message:</strong> <a href="5068.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>In reply to:</strong> <a href="5068.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5072.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5072.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A second attempt, this time with less suck :).
<br>
<p>Brian
<br>
<p>On Fri, 22 Feb 2008, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Oops..  forgot to test the C++ bindings, which of course broke.  Let me
</span><br>
<span class="quotelev1">&gt; try again and I'll send a better patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 22 Feb 2008, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 21 Feb 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While I agree that having AC actually define them to a value is a Good
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thing (better than just defining it to be empty), I do see the pickle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it has put us in.  :-\  I don't see an obvious solution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do :).  Try the attached patch.  It sneaks in at the last minute and
</span><br>
<span class="quotelev2">&gt;&gt; defines (for example) both SIZEOF_BOOL and OMPI_SIZEOF_BOOL.  mpi.h only has
</span><br>
<span class="quotelev2">&gt;&gt; the define for OMPI_SIZEOF_BOOL.  opal_config.h has both, but a note saying
</span><br>
<span class="quotelev2">&gt;&gt; not to use the OMPI_ version.  Seems to work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>

<br><hr>
<ul>
<li>TEXT/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5069/ompi_mpi_h_no_ac.diff">ompi_mpi_h_no_ac.diff</a>
</ul>
<!-- attachment="ompi_mpi_h_no_ac.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5070.php">Mathias PUETZ: "[OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>Previous message:</strong> <a href="5068.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>In reply to:</strong> <a href="5068.php">Brian W. Barrett: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5072.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Reply:</strong> <a href="5072.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
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

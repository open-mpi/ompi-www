<?
$subject_val = "Re: [OMPI devel] MPI Forum question?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 10:12:51 2010" -->
<!-- isoreceived="20100430141251" -->
<!-- sent="Fri, 30 Apr 2010 08:12:40 -0600" -->
<!-- isosent="20100430141240" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Forum question?" -->
<!-- id="41CA7241-EC2B-435A-8DCE-957970F44844_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BACB133F-2478-4D6A-A496-1138315AC7A3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI Forum question?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 10:12:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7856.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7854.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (11)"</a>
<li><strong>In reply to:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7856.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7856.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2010, at 6:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 30, 2010, at 5:59 AM, N.M. Maclaren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI quite rightly does not specify this, because the matter is very system-
</span><br>
<span class="quotelev2">&gt;&gt; dependent, and it is not possible to return the exit code (or display it)
</span><br>
<span class="quotelev2">&gt;&gt; in all environments.  Sorry, but that is reality.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct -- MPI intentionally does not say what happens after MPI_FINALIZE.  MPI intentionally doesn't even specify much about how to start an MPI job (just like Fortran, actually).
</span><br>
<p>Frankly, I disagree - I think the standard can and should say something explicit about this situation. It doesn't have to say how we implement it, but it should clearly explain to users what they should expect to see at the end of an MPI job.
<br>
<p>Guess the real issue is: is the standard written for the general community, or solely for MPI implementers? If the latter, then saying nothing is fine. If the former, then it needs to clearly say something about this question.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The last paragraph of the specification of MPI_Finalize makes it clear
</span><br>
<span class="quotelev2">&gt;&gt; that it is the USER'S responsibility to return an exit code to the system
</span><br>
<span class="quotelev2">&gt;&gt; for process 0, and that what happens for other ones is undefined.  Or
</span><br>
<span class="quotelev2">&gt;&gt; fairly clear - it could be stated in so many words, rather than being
</span><br>
<span class="quotelev2">&gt;&gt; implicit in the requirement on implementors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that's quite feasible, because the user doesn't directly control what mpirun returns.  So (many) implementations *have* to choose something from their job start agent (mpirun or mpiexec or whatever).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think OMPI's behavior of returning 0 from mpirun if and only if all processes call MPI_FINALIZE successfully *and* return 0 is good.  Return arbitrary nonzero if some process aborts (calling MPI_ABORT, not calling MPI_INIT, not calling MPI_FINALIZE, or otherwise).  Return any of the individual MPI processes' non-zero exit status if all call MPI_FINALIZE but some (or all) don't return an exit status of 0 (I don't have a strong opinion about which one to return -- e.g., the *first* one to return a non-zero exit value, the *highest* or *lowest* non-zero exit status, ...etc.).
</span><br>
<p>If that's the case, then I think the standard needs clearer language. My admittedly non-scientific poll indicates that users seem to think there is some expected behavior, and were surprised by the question.
<br>
<p>So while the developer community may think it is okay as things stand, it was clear from my limited conversations that users all think something else is supposed to happen.
<br>
<p>Just my $0.0002. As I said at the start of this thread, I don't care what solution we adopt for OMPI. 
<br>
<p>However, I -do- insist that their be a formal specification of OMPI's behavior - not the current &quot;whatever you want&quot; approach. Otherwise, I will continue to be hit with these ad hoc requests that it behave the way someone thinks it should, with no recourse to some defined behavior accepted by this community.
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7856.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7854.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (11)"</a>
<li><strong>In reply to:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7856.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7856.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
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

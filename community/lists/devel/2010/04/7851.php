<?
$subject_val = "Re: [OMPI devel] MPI Forum question?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 08:26:38 2010" -->
<!-- isoreceived="20100430122638" -->
<!-- sent="30 Apr 2010 13:26:34 +0100" -->
<!-- isosent="20100430122634" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Forum question?" -->
<!-- id="Prayer.1.3.2.1004301326340.25812_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 08:26:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7852.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Previous message:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7855.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30 2010, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; I don't think that's quite feasible, because the user doesn't directly 
</span><br>
<span class="quotelev1">&gt; control what mpirun returns. So (many) implementations *have* to choose 
</span><br>
<span class="quotelev1">&gt; something from their job start agent (mpirun or mpiexec or whatever).
</span><br>
<p>Yes.  Thanks for correcting me.  I worded that sloppily.  It is the user's
<br>
responsibility to return such a code from process 0, but MPI says nothing
<br>
about what mpiexec/mpirun then does with that code - IF it ever sees it -
<br>
and, in some environments, it doesn't!
<br>
<p><span class="quotelev1">&gt; I think OMPI's behavior of returning 0 from mpirun if and only if all 
</span><br>
<span class="quotelev1">&gt; processes call MPI_FINALIZE successfully *and* return 0 is good. ...
</span><br>
<p>It's fine by me.  That's a sane and simple specification.  Some people
<br>
will prefer others, as usual.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7852.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Previous message:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7855.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
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

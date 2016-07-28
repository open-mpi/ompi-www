<?
$subject_val = "Re: [OMPI devel] Exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 09:14:05 2011" -->
<!-- isoreceived="20110414131405" -->
<!-- sent="Thu, 14 Apr 2011 07:13:56 -0600" -->
<!-- isosent="20110414131356" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Exit status" -->
<!-- id="5CAF886D-5476-4EB8-B6CF-54385F822D3B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="39077537-0E9F-44D2-A82A-4B31A35B7544_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Exit status<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 09:13:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9177.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9175.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9175.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9177.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9177.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9178.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2011, at 5:33 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 14, 2011, at 4:02 AM, N.M. Maclaren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...  It's hopeless, and whatever you do will be wrong for many
</span><br>
<span class="quotelev2">&gt;&gt; people.  ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that sums it up pretty well.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does seem a little strange that the scenario you describe somewhat implies that one process is calling MPI_Finalize loooong before the others do.  Specifically, the user is concerned with tying up resources after one process has called Finalize -- which implies that the others may continue on for a while.  It's not invalid, of course, but it is a little unusual.
</span><br>
<p>I'm finding it more common than we thought. Note that I didn't say that one process called MPI_Finalize before the others. In this case, they call it fairly close together, but the individual processes continue running for quite some time, or until they determine that something is wrong and exit with non-zero status.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see two possibilities here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. have the user delay calling MPI_Finalize in the application until it can do the test that indicates that the rest of the job should be aborted (i.e., so that it can still call MPI_Abort if it wants to).  Don't forget that an implementation is allowed to block in MPI_Finalize until all processes call MPI_Finalize, anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. add an MCA param and/or orterun CLI option to abort a job if an MPI process terminates after MPI_Finalize with a nonzero exit status.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I figure this last is the best option. My point was just that we abort the job if someone calls &quot;abort&quot;. However, if they indicate their program is exiting with &quot;something is wrong&quot;, we ignore it.
<br>
<p>Not that big a deal - the param was my option too. Just thought I'd raise it to the group since it had never been discussed.
<br>
<p><p><p><span class="quotelev1">&gt; Just my $0.02.  :-)
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
<li><strong>Next message:</strong> <a href="9177.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9175.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9175.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9177.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9177.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9178.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
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

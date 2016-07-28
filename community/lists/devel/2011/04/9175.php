<?
$subject_val = "Re: [OMPI devel] Exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 07:33:43 2011" -->
<!-- isoreceived="20110414113343" -->
<!-- sent="Thu, 14 Apr 2011 07:33:38 -0400" -->
<!-- isosent="20110414113338" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Exit status" -->
<!-- id="39077537-0E9F-44D2-A82A-4B31A35B7544_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Prayer.1.3.3.1104140902480.12538_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 07:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9176.php">Ralph Castain: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9174.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9174.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9176.php">Ralph Castain: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9176.php">Ralph Castain: "Re: [OMPI devel] Exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2011, at 4:02 AM, N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt; ...  It's hopeless, and whatever you do will be wrong for many
</span><br>
<span class="quotelev1">&gt; people.  ...
</span><br>
<p>I think that sums it up pretty well.  :-)
<br>
<p>It does seem a little strange that the scenario you describe somewhat implies that one process is calling MPI_Finalize loooong before the others do.  Specifically, the user is concerned with tying up resources after one process has called Finalize -- which implies that the others may continue on for a while.  It's not invalid, of course, but it is a little unusual.
<br>
<p>I see two possibilities here:
<br>
<p>1. have the user delay calling MPI_Finalize in the application until it can do the test that indicates that the rest of the job should be aborted (i.e., so that it can still call MPI_Abort if it wants to).  Don't forget that an implementation is allowed to block in MPI_Finalize until all processes call MPI_Finalize, anyway.
<br>
<p>2. add an MCA param and/or orterun CLI option to abort a job if an MPI process terminates after MPI_Finalize with a nonzero exit status.
<br>
<p>Just my $0.02.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9176.php">Ralph Castain: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9174.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9174.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9176.php">Ralph Castain: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9176.php">Ralph Castain: "Re: [OMPI devel] Exit status"</a>
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

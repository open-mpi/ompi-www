<?
$subject_val = "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 16:28:15 2012" -->
<!-- isoreceived="20120315202815" -->
<!-- sent="Thu, 15 Mar 2012 13:28:11 -0700" -->
<!-- isosent="20120315202811" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG" -->
<!-- id="136454B5-2FCD-412A-8BFF-523597A913E9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F623BDF.7010907_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 16:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18792.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18790.php">Eugene Loh: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>In reply to:</strong> <a href="18790.php">Eugene Loh: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for doing this Eugene.
<br>
<p>On Mar 15, 2012, at 11:58 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; On 03/13/12 13:25, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 9, 2012, at 5:17 PM, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Open MPI 1.5.1, when I call MPI_Testsome with incount=0 and the two output arrays NULL, I get an argument error (MPI_ERR_ARG).  Is this the intended behavior?  If incount=0, no requests can complete, so the output arrays can never be written to.  I do not see anything in the MPI 2.2 standard that says either way whether this is allowed.
</span><br>
<span class="quotelev2">&gt;&gt; I have no strong opinions here, so I coded up a patch to just return MPI_SUCCESS in this scenario (attached).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If no one objects, we can probably get this in 1.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It isn't enough just to return MPI_SUCCESS when the count is zero.  The man pages indicate what behavior is expected when count==0 and the MTT tests (ibm/pt2pt/[test|wait][any|some|all].c) check for this behavior.  Put another way, a bunch of MTT tests started failing since r26138 due to quick return on count=0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, the trunk since r26138 sets no output values when count=0.  In contrast, the ibm/pt2pt/*.c tests correctly check for the count=0 behavior that we document in our man pages.  Here are excerpts from our man pages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Testall
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Returns flag = true if all communications associated
</span><br>
<span class="quotelev1">&gt;    with active handles in the array have completed (this
</span><br>
<span class="quotelev1">&gt;    includes the case where no handle in the list is active).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Testany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Testany tests for completion of either one or none
</span><br>
<span class="quotelev1">&gt;    of the operations associated with active handles.  In
</span><br>
<span class="quotelev1">&gt;    the latter case (no operation completed), it returns
</span><br>
<span class="quotelev1">&gt;    flag = false, returns a value of MPI_UNDEFINED in index,
</span><br>
<span class="quotelev1">&gt;    and status is undefined.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The array may contain null or inactive handles. If the
</span><br>
<span class="quotelev1">&gt;    array contains no active handles then the call returns
</span><br>
<span class="quotelev1">&gt;    immediately with flag = true, index = MPI_UNDEFINED,
</span><br>
<span class="quotelev1">&gt;    and an empty status.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Testsome
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    If there is no active handle in the list, it returns
</span><br>
<span class="quotelev1">&gt;    outcount = MPI_UNDEFINED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Waitall
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [...no issues...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Waitany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The array_of_requests list may contain null or inactive
</span><br>
<span class="quotelev1">&gt;    handles.  If the list contains no active handles (list
</span><br>
<span class="quotelev1">&gt;    has length zero or all entries are null or inactive),
</span><br>
<span class="quotelev1">&gt;    then the call returns immediately with index = MPI_UNDEFINED,
</span><br>
<span class="quotelev1">&gt;    and an empty status.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Waitsome
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    If the list contains no active handles, then the call
</span><br>
<span class="quotelev1">&gt;    returns immediately with outcount = MPI_UNDEFINED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll test and put back the attached patch.
</span><br>
<span class="quotelev1">&gt; &lt;trunk.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="18792.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18790.php">Eugene Loh: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>In reply to:</strong> <a href="18790.php">Eugene Loh: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
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

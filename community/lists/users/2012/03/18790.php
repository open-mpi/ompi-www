<?
$subject_val = "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 14:58:47 2012" -->
<!-- isoreceived="20120315185847" -->
<!-- sent="Thu, 15 Mar 2012 14:58:39 -0400" -->
<!-- isosent="20120315185839" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG" -->
<!-- id="4F623BDF.7010907_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F70CEBD-479E-4D3F-BFA4-CECC1168F5AC_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 14:58:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18791.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Previous message:</strong> <a href="18789.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18738.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18791.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Reply:</strong> <a href="18791.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/13/12 13:25, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 9, 2012, at 5:17 PM, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Open MPI 1.5.1, when I call MPI_Testsome with incount=0 and the two output arrays NULL, I get an argument error (MPI_ERR_ARG).  Is this the intended behavior?  If incount=0, no requests can complete, so the output arrays can never be written to.  I do not see anything in the MPI 2.2 standard that says either way whether this is allowed.
</span><br>
<span class="quotelev1">&gt; I have no strong opinions here, so I coded up a patch to just return MPI_SUCCESS in this scenario (attached).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If no one objects, we can probably get this in 1.6.
</span><br>
<p>It isn't enough just to return MPI_SUCCESS when the count is zero.  The 
<br>
man pages indicate what behavior is expected when count==0 and the MTT 
<br>
tests (ibm/pt2pt/[test|wait][any|some|all].c) check for this behavior.  
<br>
Put another way, a bunch of MTT tests started failing since r26138 due 
<br>
to quick return on count=0.
<br>
<p>Again, the trunk since r26138 sets no output values when count=0.  In 
<br>
contrast, the ibm/pt2pt/*.c tests correctly check for the count=0 
<br>
behavior that we document in our man pages.  Here are excerpts from our 
<br>
man pages:
<br>
<p>&nbsp;&nbsp;&nbsp;Testall
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Returns flag = true if all communications associated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with active handles in the array have completed (this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;includes the case where no handle in the list is active).
<br>
<p>&nbsp;&nbsp;&nbsp;Testany
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Testany tests for completion of either one or none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the operations associated with active handles.  In
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the latter case (no operation completed), it returns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flag = false, returns a value of MPI_UNDEFINED in index,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and status is undefined.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The array may contain null or inactive handles. If the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array contains no active handles then the call returns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;immediately with flag = true, index = MPI_UNDEFINED,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and an empty status.
<br>
<p>&nbsp;&nbsp;&nbsp;Testsome
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If there is no active handle in the list, it returns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outcount = MPI_UNDEFINED.
<br>
<p>&nbsp;&nbsp;&nbsp;Waitall
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[...no issues...]
<br>
<p>&nbsp;&nbsp;&nbsp;Waitany
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The array_of_requests list may contain null or inactive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;handles.  If the list contains no active handles (list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;has length zero or all entries are null or inactive),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;then the call returns immediately with index = MPI_UNDEFINED,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and an empty status.
<br>
<p>&nbsp;&nbsp;&nbsp;Waitsome
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the list contains no active handles, then the call
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;returns immediately with outcount = MPI_UNDEFINED.
<br>
<p>I'll test and put back the attached patch.
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18790/trunk.patch">trunk.patch</a>
</ul>
<!-- attachment="trunk.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18791.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Previous message:</strong> <a href="18789.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18738.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18791.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Reply:</strong> <a href="18791.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
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

<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 20:24:11 2009" -->
<!-- isoreceived="20090220012411" -->
<!-- sent="Thu, 19 Feb 2009 20:24:04 -0500" -->
<!-- isosent="20090220012404" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="E01C1968-2973-416A-849D-A57535A3B715_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="158A6357-4E21-4CBF-BBD0-A83B38784570_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] possible bugs and unexpected values in returned errors classes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 20:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5498.php">Jeff Squyres: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5496.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5488.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5482.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George and I talked about this on the phone at length.  More below.
<br>
<p><p>On Feb 19, 2009, at 1:18 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I don't see how you reach this conclusion. Based on my reading of  
</span><br>
<span class="quotelev2">&gt;&gt; the standard, MPI_ERRHANDLER_NULL is a valid error handler defined  
</span><br>
<span class="quotelev2">&gt;&gt; as &quot;no&quot; errorhandler. Kind of similar with MPI_REQUEST_NULL ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is not valid; MPI specifically defines both of these as invalid  
</span><br>
<span class="quotelev1">&gt; handles.
</span><br>
[snip]
<br>
<p>I finally got George to agree with me on this issue.  :-)
<br>
<p><span class="quotelev2">&gt;&gt; Moreover, I don't agree with some of the other changes, more  
</span><br>
<span class="quotelev2">&gt;&gt; specifically with the one related to the MPI_Request_get_status.  
</span><br>
<span class="quotelev2">&gt;&gt; Here is a paragraph from the MPI 2.1 standard about MPI_Waitall  
</span><br>
<span class="quotelev2">&gt;&gt; page 59 line 24: &quot;The list may contain null or inactive handles.  
</span><br>
<span class="quotelev2">&gt;&gt; The call sets to empty the status of each such entry.&quot; This  
</span><br>
<span class="quotelev2">&gt;&gt; basically tells me that the status of the MPI_REQUEST_NULL should  
</span><br>
<span class="quotelev2">&gt;&gt; be the empty status (defined in the MPI standard) and not any kind  
</span><br>
<span class="quotelev2">&gt;&gt; of errors (i.e MPI_ERR_ARG).
</span><br>
<p><p>George and I split the vote on this one.  :-)
<br>
<p>There is explicit language in MPI-2.1 that allows calling the  
<br>
MPI_TEST* and MPI_WAIT* variants with MPI_REQUEST_NULL or an inactive  
<br>
request.  There is *no* explicit language in MPI-2.1 allowing the same  
<br>
behavior for MPI_REQUEST_GET_STATUS.
<br>
<p>So while George and I agree that MPI_REQUEST_GET_STATUS should be  
<br>
symmetric with MPI_TEST* and MPI_WAIT*, it currently isn't.  I  
<br>
therefore filed the following proposal ticket to make this behavior  
<br>
legal for MPI-2.2:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/137">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/137</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5498.php">Jeff Squyres: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5496.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5488.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5482.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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

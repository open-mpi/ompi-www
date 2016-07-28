<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  7 19:07:41 2006" -->
<!-- isoreceived="20060607230741" -->
<!-- sent="Wed, 7 Jun 2006 17:07:06 -0600" -->
<!-- isosent="20060607230706" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question on &amp;quot;get&amp;quot; operation" -->
<!-- id="24DB0469-54CA-4F1D-872B-A3F85CF5494A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060607202144.92266.qmail_at_web31514.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-07 19:07:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0936.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi r10316"</a>
<li><strong>Previous message:</strong> <a href="0934.php">Jonathan Day: "[OMPI devel] Question on &quot;get&quot; operation"</a>
<li><strong>In reply to:</strong> <a href="0934.php">Jonathan Day: "[OMPI devel] Question on &quot;get&quot; operation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 7, 2006, at 2:21 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; Sorry if this sounds idiotic, but I'm having problems
</span><br>
<span class="quotelev1">&gt; with the MPI get operation in OpenMPI. I have test
</span><br>
<span class="quotelev1">&gt; program that calls OpenMPI's get operation, which
</span><br>
<span class="quotelev1">&gt; performs a send operation. This fails with a null
</span><br>
<span class="quotelev1">&gt; pointer exception in the opal library, after preparing
</span><br>
<span class="quotelev1">&gt; the source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the shared memory driver, when performing a get,
</span><br>
<span class="quotelev1">&gt; the shared memory code seems to be being passed a null
</span><br>
<span class="quotelev1">&gt; pointer. Using the TCP driver also crashes with
</span><br>
<span class="quotelev1">&gt; dereferencing a null pointer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone have any suggestions on what might be causing
</span><br>
<span class="quotelev1">&gt; the problem? I assume others are using get, so
</span><br>
<span class="quotelev1">&gt; presumably someone else will have encountered this
</span><br>
<span class="quotelev1">&gt; problem (assuming it's a quirk that's in a common
</span><br>
<span class="quotelev1">&gt; component and not in the test program).
</span><br>
<p>Are you referring to MPI_GET, part of the one-sided chapter or the get 
<br>
() call that is part of the btl interface?  Based on your  
<br>
description, I'm guessing the second.  Currently, we do not require  
<br>
BTLs to implement the put or get call.  You have to check the btl  
<br>
flags for MCA_BTL_FLAGS_PUT and MCA_BTL_FLAGS_GET -- if they are not  
<br>
set, those functions are not implemented.
<br>
<p>If you were talking about the MPI_GET function, a stack trace and  
<br>
sample application would be most useful.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0936.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi r10316"</a>
<li><strong>Previous message:</strong> <a href="0934.php">Jonathan Day: "[OMPI devel] Question on &quot;get&quot; operation"</a>
<li><strong>In reply to:</strong> <a href="0934.php">Jonathan Day: "[OMPI devel] Question on &quot;get&quot; operation"</a>
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

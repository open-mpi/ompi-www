<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  7 16:21:54 2006" -->
<!-- isoreceived="20060607202154" -->
<!-- sent="Wed, 7 Jun 2006 13:21:44 -0700 (PDT)" -->
<!-- isosent="20060607202144" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="[OMPI devel] Question on &amp;quot;get&amp;quot; operation" -->
<!-- id="20060607202144.92266.qmail_at_web31514.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jonathan Day (<em>imipak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-07 16:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI devel] Question on &quot;get&quot; operation"</a>
<li><strong>Previous message:</strong> <a href="0933.php">Brian Barrett: "Re: [OMPI devel] process ordering/processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI devel] Question on &quot;get&quot; operation"</a>
<li><strong>Reply:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI devel] Question on &quot;get&quot; operation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Sorry if this sounds idiotic, but I'm having problems
<br>
with the MPI get operation in OpenMPI. I have test
<br>
program that calls OpenMPI's get operation, which
<br>
performs a send operation. This fails with a null
<br>
pointer exception in the opal library, after preparing
<br>
the source.
<br>
<p>With the shared memory driver, when performing a get,
<br>
the shared memory code seems to be being passed a null
<br>
pointer. Using the TCP driver also crashes with
<br>
dereferencing a null pointer.
<br>
<p>Anyone have any suggestions on what might be causing
<br>
the problem? I assume others are using get, so
<br>
presumably someone else will have encountered this
<br>
problem (assuming it's a quirk that's in a common
<br>
component and not in the test program).
<br>
<p>Jonathan
<br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI devel] Question on &quot;get&quot; operation"</a>
<li><strong>Previous message:</strong> <a href="0933.php">Brian Barrett: "Re: [OMPI devel] process ordering/processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI devel] Question on &quot;get&quot; operation"</a>
<li><strong>Reply:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI devel] Question on &quot;get&quot; operation"</a>
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

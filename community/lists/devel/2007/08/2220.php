<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 25 09:10:45 2007" -->
<!-- isoreceived="20070825131045" -->
<!-- sent="Sat, 25 Aug 2007 09:10:24 -0400" -->
<!-- isosent="20070825131024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi_mpi_abort" -->
<!-- id="17DD79DA-1112-49BD-9B84-791FBC7FE4DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-25 09:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2221.php">Brian Barrett: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Previous message:</strong> <a href="2219.php">Josh Aune: "Re: [OMPI devel] More memory troubles with vapi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2221.php">Brian Barrett: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Reply:</strong> <a href="2221.php">Brian Barrett: "Re: [OMPI devel] ompi_mpi_abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David Maxwell has finally gotten the Coverity automation stuff  
<br>
working to download our nightly trunk tarballs and run them through  
<br>
their tool.  I was skimming through the results this morning and  
<br>
noticed one that looked odd to me: in osc_rdma_component.c:619, we have:
<br>
<p>619  	                if (NULL == datatype) {
<br>
620  	                    opal_output(ompi_osc_base_output,
<br>
621  	                                &quot;Error recreating datatype.   
<br>
Aborting.&quot;);
<br>
622  	                    ompi_mpi_abort(module-&gt;m_comm, 1, false);
<br>
623  	                }
<br>
<p>And then shortly after line 623, we use/dereference datatype.   
<br>
Coverity marked this as &quot;possible NULL dereference&quot;.
<br>
<p>&quot;Hah&quot;, I thought, &quot;Coverity doesn't realize that ompi_mpi_abort()  
<br>
will always abort, so this is a false positive.&quot;
<br>
<p>Just for the heckuvit, I checked: ompi_mpi_abort does *not* guarantee  
<br>
to abort.  Indeed, there are two cases where it may actually return:
<br>
<p>1. We have logic in ompi_mpi_abort to prevent recursive invocation  
<br>
(ompi_mpi_abort.c:60):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Protection for recursive invocation */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (have_been_invoked) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;have_been_invoked = true;
<br>
<p>I added this check in r13354, but I don't remember the exact case in  
<br>
which it was happening.  :-\  I'm wondering if we should loop forever  
<br>
(perhaps over sleep or something) instead of returning...
<br>
<p>Do anyone know how it could be that ompi_mpi_abort() could be invoked  
<br>
*recursively*?  I can imagine in a THREAD_MULTIPLE scenario that  
<br>
multiple threads could call ompi_mpi_abort (which is I *think* is why  
<br>
I added that logic).  In that case, do we have enough protection, or  
<br>
do we really need to use atomic operations to test have_been_invoked?
<br>
<p>2. In several places, we call orte_errmgr.error_detected().  I think  
<br>
that we will *always* have the orte &quot;proxy&quot; errmgr component loaded  
<br>
in MPI processes, in which case errmgr.error_detected() will always  
<br>
call exit(), so I think we're ok there.
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
<li><strong>Next message:</strong> <a href="2221.php">Brian Barrett: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Previous message:</strong> <a href="2219.php">Josh Aune: "Re: [OMPI devel] More memory troubles with vapi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2221.php">Brian Barrett: "Re: [OMPI devel] ompi_mpi_abort"</a>
<li><strong>Reply:</strong> <a href="2221.php">Brian Barrett: "Re: [OMPI devel] ompi_mpi_abort"</a>
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

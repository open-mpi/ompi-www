<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 15:38:07 2006" -->
<!-- isoreceived="20061023193807" -->
<!-- sent="Mon, 23 Oct 2006 15:37:56 -0400" -->
<!-- isosent="20061023193756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes" -->
<!-- id="A1EA5E5B-2B10-4652-BF12-FA8942B4129E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40610230823o3a312d7m71594bbd99e0c570_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-10-23 15:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1137.php">Ralf Wildenhues: "[OMPI devel] help config.status to not mess up substitutions"</a>
<li><strong>Previous message:</strong> <a href="1135.php">Lisandro Dalcin: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<li><strong>In reply to:</strong> <a href="1135.php">Lisandro Dalcin: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 23, 2006, at 11:23 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev2">&gt;&gt;  {{{
</span><br>
<span class="quotelev2">&gt;&gt;  rc = MCA_PML_CALL(start(....));
</span><br>
<span class="quotelev2">&gt;&gt;  OMPI_ERRHANDLER_RETURN(rc, XXXXX, rc, FUNC_NAME);
</span><br>
<span class="quotelev2">&gt;&gt;  }}}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  where XXX is some relevant communicator:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   * MPI_START: the communicator of the single request -- easy enough
</span><br>
<span class="quotelev2">&gt;&gt;   * MPI_STARTALL: MPI-1:3.9 says that STARTALL is exactly  
</span><br>
<span class="quotelev2">&gt;&gt; equivalent to
</span><br>
<span class="quotelev2">&gt;&gt;  calling START n times, so I guess we use the communicator from  
</span><br>
<span class="quotelev2">&gt;&gt; the request
</span><br>
<span class="quotelev2">&gt;&gt;  that caused the error.  pml_base_module_start_t() doesn't return  
</span><br>
<span class="quotelev2">&gt;&gt; ''which''
</span><br>
<span class="quotelev2">&gt;&gt;  request caused the error, so I'm guessing that if (OMPI_SUCCESS ! 
</span><br>
<span class="quotelev2">&gt;&gt; = rc),
</span><br>
<span class="quotelev2">&gt;&gt;  we'll have to scan through the list of requests to find the first  
</span><br>
<span class="quotelev2">&gt;&gt; one with
</span><br>
<span class="quotelev2">&gt;&gt;  an error and use the communicator from that one.  Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, but... Which error handler will be called?? The one associated to
</span><br>
<span class="quotelev1">&gt; the communicator involved in the request, or MPI_COMM_WORLD? I do not
</span><br>
<span class="quotelev1">&gt; remember right now if the standar says anything about this. If not, it
</span><br>
<span class="quotelev1">&gt; should call the error handler of WORLD communicator. Am I right?
</span><br>
<p>This is exactly what I was referring to in the last parts of the  
<br>
message (see above).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1137.php">Ralf Wildenhues: "[OMPI devel] help config.status to not mess up substitutions"</a>
<li><strong>Previous message:</strong> <a href="1135.php">Lisandro Dalcin: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<li><strong>In reply to:</strong> <a href="1135.php">Lisandro Dalcin: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
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

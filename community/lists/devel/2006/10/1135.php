<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 11:23:15 2006" -->
<!-- isoreceived="20061023152315" -->
<!-- sent="Mon, 23 Oct 2006 12:23:04 -0300" -->
<!-- isosent="20061023152304" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes" -->
<!-- id="e7ba66e40610230823o3a312d7m71594bbd99e0c570_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="062.0564bcf5317be02168d87245a82508d9_at_open-mpi.org" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 11:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1136.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<li><strong>Previous message:</strong> <a href="1134.php">Jeff Squyres: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1136.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<li><strong>Reply:</strong> <a href="1136.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/22/06, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; #529: MPI_START* returning OMPI_* error codes
</span><br>
<span class="quotelev1">&gt; ---------------------+------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  jsquyres  |       Owner:
</span><br>
<span class="quotelev1">&gt;     Type:  defect    |      Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  major     |   Milestone:  Open MPI 1.1.3
</span><br>
<span class="quotelev1">&gt;  Version:  trunk     |    Keywords:
</span><br>
<span class="quotelev1">&gt; ---------------------+------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  I sent this on the core list but got no reply, so I'm turning it into a
</span><br>
<span class="quotelev1">&gt;  ticket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  A user reported that they were getting back value -105 from MPI_STARTALL
</span><br>
<span class="quotelev1">&gt;  (which is OMPI_ERR_REQUEST -- assumedly they were using
</span><br>
<span class="quotelev1">&gt;  MPI_ERRORS_RETURN).  Regardless of what is happening to make this error be
</span><br>
<span class="quotelev1">&gt;  returned, we should never be returning an OMPI_ERR_* value from an MPI
</span><br>
<span class="quotelev1">&gt;  function.  Instead, we should be converting this from OMPI_ERR_* to
</span><br>
<span class="quotelev1">&gt;  MPI_ERR_*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Specifically, don't we need to wrap the returns of these MCA_PML_CALLs in
</span><br>
<span class="quotelev1">&gt;  OMPI_ERRHANDLER_RETURN?  Something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  {{{
</span><br>
<span class="quotelev1">&gt;  rc = MCA_PML_CALL(start(....));
</span><br>
<span class="quotelev1">&gt;  OMPI_ERRHANDLER_RETURN(rc, XXXXX, rc, FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;  }}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  where XXX is some relevant communicator:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * MPI_START: the communicator of the single request -- easy enough
</span><br>
<span class="quotelev1">&gt;   * MPI_STARTALL: MPI-1:3.9 says that STARTALL is exactly equivalent to
</span><br>
<span class="quotelev1">&gt;  calling START n times, so I guess we use the communicator from the request
</span><br>
<span class="quotelev1">&gt;  that caused the error.  pml_base_module_start_t() doesn't return ''which''
</span><br>
<span class="quotelev1">&gt;  request caused the error, so I'm guessing that if (OMPI_SUCCESS != rc),
</span><br>
<span class="quotelev1">&gt;  we'll have to scan through the list of requests to find the first one with
</span><br>
<span class="quotelev1">&gt;  an error and use the communicator from that one.  Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="http://svn.open-mpi.org/trac/ompi/ticket/529">http://svn.open-mpi.org/trac/ompi/ticket/529</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes, but... Which error handler will be called?? The one associated to
<br>
the communicator involved in the request, or MPI_COMM_WORLD? I do not
<br>
remember right now if the standar says anything about this. If not, it
<br>
should call the error handler of WORLD communicator. Am I right?
<br>
<p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1136.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<li><strong>Previous message:</strong> <a href="1134.php">Jeff Squyres: "Re: [OMPI devel] Issues with 1.2 and intel/portland compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1136.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
<li><strong>Reply:</strong> <a href="1136.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #529: MPI_START* returning OMPI_* error codes"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 11 15:13:22 2007" -->
<!-- isoreceived="20070111201322" -->
<!-- sent="Thu, 11 Jan 2007 15:13:10 -0500" -->
<!-- isosent="20070111201310" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_STARTALL commit yesterday" -->
<!-- id="4ADA0784-D054-4D71-9981-39A143DE8D85_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200701110839.l0B8diJB011873_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-01-11 15:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1251.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>Previous message:</strong> <a href="1249.php">Ralph H Castain: "Re: [OMPI devel] OpenRTE telecon?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1251.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>Reply:</strong> <a href="1251.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>Reply:</strong> <a href="1252.php">George Bosilca: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Why would the request ID numbers change after the invocation to the  
<br>
back-end MPI_Startall()?  The request ID numbers were allocated when  
<br>
the requests were created, so there's no reason that MPI_Startall()  
<br>
should change them -- hence, there's no need to re-assign the same  
<br>
values back to the fortran array after the C call.
<br>
<p>Specifically: the requests are not INOUT parameters.  Unless I'm  
<br>
missing something, this commit should be backed out -- the problem  
<br>
that Tim Campbell is running into must be something else.
<br>
<p>Did we get his test program?
<br>
<p><p><p>On Jan 11, 2007, at 3:39 AM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2007-01-11 03:39:42 EST (Thu, 11 Jan 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 13079
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/f77/startall_f.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Once we start the C requests we have to put back their f_to_c index
</span><br>
<span class="quotelev1">&gt; in the fortran array, as we might get new C requests from the startall
</span><br>
<span class="quotelev1">&gt; function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mpi/f77/startall_f.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mpi/f77/startall_f.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mpi/f77/startall_f.c	2007-01-11 03:39:42 EST (Thu,  
</span><br>
<span class="quotelev1">&gt; 11 Jan 2007)
</span><br>
<span class="quotelev1">&gt; @@ -75,10 +75,13 @@
</span><br>
<span class="quotelev1">&gt;          return;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt; *count; i++) {
</span><br>
<span class="quotelev1">&gt; +    for(i = 0; i &lt; *count; i++ ) {
</span><br>
<span class="quotelev1">&gt;          c_req[i] = MPI_Request_f2c(array_of_requests[i]);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      *ierr = OMPI_INT_2_FINT(MPI_Startall(OMPI_FINT_2_INT(*count),  
</span><br>
<span class="quotelev1">&gt; c_req));
</span><br>
<span class="quotelev1">&gt; +    for( i = 0; i &lt; *count; i++ ) {
</span><br>
<span class="quotelev1">&gt; +        array_of_requests[i] = MPI_Request_c2f(c_req[i]);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;      free(c_req);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1251.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>Previous message:</strong> <a href="1249.php">Ralph H Castain: "Re: [OMPI devel] OpenRTE telecon?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1251.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>Reply:</strong> <a href="1251.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>Reply:</strong> <a href="1252.php">George Bosilca: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
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

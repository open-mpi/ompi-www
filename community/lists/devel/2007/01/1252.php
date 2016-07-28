<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 11 15:28:22 2007" -->
<!-- isoreceived="20070111202822" -->
<!-- sent="Thu, 11 Jan 2007 15:28:08 -0500" -->
<!-- isosent="20070111202808" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_STARTALL commit yesterday" -->
<!-- id="76EF25EC-A47D-4290-A812-BCFA9AE47F3E_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ADA0784-D054-4D71-9981-39A143DE8D85_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-11 15:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1253.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>Previous message:</strong> <a href="1251.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>In reply to:</strong> <a href="1250.php">Jeff Squyres: "[OMPI devel] MPI_STARTALL commit yesterday"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1253.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>Reply:</strong> <a href="1253.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't worry, I know what I'm doing. Moreover, the correct behavior is  
<br>
implemented in the f77 version of MPI_Start, but not in the f77  
<br>
version of MPI_Startall.
<br>
<p>On Jan 11, 2007, at 3:13 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why would the request ID numbers change after the invocation to the
</span><br>
<span class="quotelev1">&gt; back-end MPI_Startall()?  The request ID numbers were allocated when
</span><br>
<span class="quotelev1">&gt; the requests were created, so there's no reason that MPI_Startall()
</span><br>
<span class="quotelev1">&gt; should change them -- hence, there's no need to re-assign the same
</span><br>
<span class="quotelev1">&gt; values back to the fortran array after the C call.
</span><br>
<p>The way our PML are designed, we might generate new requests for the  
<br>
MPI_Startall call. We allow the user to start multiple time the same  
<br>
requests, without having to wait for them to finish completely...  
<br>
There is the trick :) Here completely means they have to be MPI  
<br>
completed but not PML completed. If they are PML and MPI completed  
<br>
then we will reuse the same request, but if they are not PML  
<br>
completed but are MPI completed then we generate a new request and  
<br>
let the old one in the limbo. The old one will be freed, once the PML  
<br>
completion function is called.
<br>
<p>Now, that work nicely for C &amp; C++, as the input of the MPI_Startall  
<br>
is an array of pointers. The problem with Fortran, is the the old  
<br>
request will have a f_to_c value, while the new request will not (as  
<br>
we set this value on the first call to f2c function). That's why the  
<br>
-32K value shows up in his output. By forcing the f2c conversion at  
<br>
the end of MPI_Startall, I make sure that the new requests that we  
<br>
return to the users are correctly registered in the f2c framework.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: the requests are not INOUT parameters.  Unless I'm
</span><br>
<span class="quotelev1">&gt; missing something, this commit should be backed out -- the problem
</span><br>
<span class="quotelev1">&gt; that Tim Campbell is running into must be something else.
</span><br>
<p>I checked the standard and the request array is marked as INOUT. I  
<br>
didn't check how it is marked on our files, but the standard is clear  
<br>
about it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did we get his test program?
</span><br>
<p>Absolutely. It works like a charm.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2007, at 3:39 AM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-01-11 03:39:42 EST (Thu, 11 Jan 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 13079
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/f77/startall_f.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Once we start the C requests we have to put back their f_to_c index
</span><br>
<span class="quotelev2">&gt;&gt; in the fortran array, as we might get new C requests from the  
</span><br>
<span class="quotelev2">&gt;&gt; startall
</span><br>
<span class="quotelev2">&gt;&gt; function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mpi/f77/startall_f.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mpi/f77/startall_f.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mpi/f77/startall_f.c	2007-01-11 03:39:42 EST (Thu,
</span><br>
<span class="quotelev2">&gt;&gt; 11 Jan 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -75,10 +75,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;          return;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    for (i = 0; i &lt; *count; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; +    for(i = 0; i &lt; *count; i++ ) {
</span><br>
<span class="quotelev2">&gt;&gt;          c_req[i] = MPI_Request_f2c(array_of_requests[i]);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_Startall(OMPI_FINT_2_INT(*count),
</span><br>
<span class="quotelev2">&gt;&gt; c_req));
</span><br>
<span class="quotelev2">&gt;&gt; +    for( i = 0; i &lt; *count; i++ ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        array_of_requests[i] = MPI_Request_c2f(c_req[i]);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;      free(c_req);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1253.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>Previous message:</strong> <a href="1251.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>In reply to:</strong> <a href="1250.php">Jeff Squyres: "[OMPI devel] MPI_STARTALL commit yesterday"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1253.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>Reply:</strong> <a href="1253.php">Jeff Squyres: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
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

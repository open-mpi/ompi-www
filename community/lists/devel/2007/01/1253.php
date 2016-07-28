<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 11 15:38:15 2007" -->
<!-- isoreceived="20070111203815" -->
<!-- sent="Thu, 11 Jan 2007 15:38:00 -0500" -->
<!-- isosent="20070111203800" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_STARTALL commit yesterday" -->
<!-- id="60A3A49A-477F-430A-9567-BA978B74CCE7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="76EF25EC-A47D-4290-A812-BCFA9AE47F3E_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-01-11 15:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1254.php">Greg Watson: "[OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1252.php">George Bosilca: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>In reply to:</strong> <a href="1252.php">George Bosilca: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ya -- see my later post -- I stood corrected.  :-)
<br>
<p>I already applied the patch to the 1.1 branch.
<br>
<p>Thanks for the PML explanation.
<br>
<p><p>On Jan 11, 2007, at 3:28 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Don't worry, I know what I'm doing. Moreover, the correct behavior is
</span><br>
<span class="quotelev1">&gt; implemented in the f77 version of MPI_Start, but not in the f77
</span><br>
<span class="quotelev1">&gt; version of MPI_Startall.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2007, at 3:13 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why would the request ID numbers change after the invocation to the
</span><br>
<span class="quotelev2">&gt;&gt; back-end MPI_Startall()?  The request ID numbers were allocated when
</span><br>
<span class="quotelev2">&gt;&gt; the requests were created, so there's no reason that MPI_Startall()
</span><br>
<span class="quotelev2">&gt;&gt; should change them -- hence, there's no need to re-assign the same
</span><br>
<span class="quotelev2">&gt;&gt; values back to the fortran array after the C call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The way our PML are designed, we might generate new requests for the
</span><br>
<span class="quotelev1">&gt; MPI_Startall call. We allow the user to start multiple time the same
</span><br>
<span class="quotelev1">&gt; requests, without having to wait for them to finish completely...
</span><br>
<span class="quotelev1">&gt; There is the trick :) Here completely means they have to be MPI
</span><br>
<span class="quotelev1">&gt; completed but not PML completed. If they are PML and MPI completed
</span><br>
<span class="quotelev1">&gt; then we will reuse the same request, but if they are not PML
</span><br>
<span class="quotelev1">&gt; completed but are MPI completed then we generate a new request and
</span><br>
<span class="quotelev1">&gt; let the old one in the limbo. The old one will be freed, once the PML
</span><br>
<span class="quotelev1">&gt; completion function is called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, that work nicely for C &amp; C++, as the input of the MPI_Startall
</span><br>
<span class="quotelev1">&gt; is an array of pointers. The problem with Fortran, is the the old
</span><br>
<span class="quotelev1">&gt; request will have a f_to_c value, while the new request will not (as
</span><br>
<span class="quotelev1">&gt; we set this value on the first call to f2c function). That's why the
</span><br>
<span class="quotelev1">&gt; -32K value shows up in his output. By forcing the f2c conversion at
</span><br>
<span class="quotelev1">&gt; the end of MPI_Startall, I make sure that the new requests that we
</span><br>
<span class="quotelev1">&gt; return to the users are correctly registered in the f2c framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically: the requests are not INOUT parameters.  Unless I'm
</span><br>
<span class="quotelev2">&gt;&gt; missing something, this commit should be backed out -- the problem
</span><br>
<span class="quotelev2">&gt;&gt; that Tim Campbell is running into must be something else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked the standard and the request array is marked as INOUT. I
</span><br>
<span class="quotelev1">&gt; didn't check how it is marked on our files, but the standard is clear
</span><br>
<span class="quotelev1">&gt; about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did we get his test program?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Absolutely. It works like a charm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 11, 2007, at 3:39 AM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-01-11 03:39:42 EST (Thu, 11 Jan 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 13079
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/mpi/f77/startall_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Once we start the C requests we have to put back their f_to_c index
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the fortran array, as we might get new C requests from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; startall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mpi/f77/startall_f.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mpi/f77/startall_f.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mpi/f77/startall_f.c	2007-01-11 03:39:42 EST (Thu,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11 Jan 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -75,10 +75,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    for (i = 0; i &lt; *count; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    for(i = 0; i &lt; *count; i++ ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c_req[i] = MPI_Request_f2c(array_of_requests[i]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      *ierr = OMPI_INT_2_FINT(MPI_Startall(OMPI_FINT_2_INT(*count),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c_req));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    for( i = 0; i &lt; *count; i++ ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        array_of_requests[i] = MPI_Request_c2f(c_req[i]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      free(c_req);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="1254.php">Greg Watson: "[OMPI devel] 1.2b3 fails on bluesteel"</a>
<li><strong>Previous message:</strong> <a href="1252.php">George Bosilca: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
<li><strong>In reply to:</strong> <a href="1252.php">George Bosilca: "Re: [OMPI devel] MPI_STARTALL commit yesterday"</a>
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

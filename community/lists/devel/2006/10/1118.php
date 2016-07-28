<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 14 07:18:36 2006" -->
<!-- isoreceived="20061014111836" -->
<!-- sent="Fri, 13 Oct 2006 20:10:27 -0400" -->
<!-- isosent="20061014001027" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Something broken using Persistent Requests" -->
<!-- id="F7A79968-A569-4E0A-8DC2-AF5FAB4D5705_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40610121733q4ebe7726lc5491d35f255f9ce_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-10-13 20:10:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1119.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="1117.php">Jeff Squyres: "Re: [OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<li><strong>In reply to:</strong> <a href="1112.php">Lisandro Dalcin: "[OMPI devel] Something broken using Persistent Requests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please do not feel bad about reporting problems -- despite the fact  
<br>
that it creates more work for us, it makes be OMPI better package.   
<br>
So keep 'em coming!
<br>
<p>Is there a way that you can share your code so that we can see what  
<br>
is happening?  I looked through the code for MPI_WAIT and  
<br>
MPI_STARTALL and they seem to be doing the Right Things, at least in  
<br>
terms of the persistent requests.
<br>
<p>If you're getting error -105, it looks like we're not converting this  
<br>
to a proper MPI error code before returning it to you (-105 ==  
<br>
OMPI_ERR_REQUEST, but it should be converted to MPI_ERR_REQUEST  
<br>
before it is returned).  I'll poke around to see what's happening here.
<br>
<p><p><p>On Oct 12, 2006, at 8:33 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; I am getting errors using persistent communications (OMPI 1.1.1). I am
</span><br>
<span class="quotelev1">&gt; trying to implement (in Python) example 2.32 from page 107 of MPI- The
</span><br>
<span class="quotelev1">&gt; Complete Reference (V1, 2nd. edition).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the problem is not in my wrappers (my script works fine with
</span><br>
<span class="quotelev1">&gt; MPICH2). Below the two issues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 - MPI_Startall fails (returning a negative error code, -105, which
</span><br>
<span class="quotelev1">&gt; in fact it seems to be out of range [MPI_SUCCESS...MPI_LASTCODE]).
</span><br>
<span class="quotelev1">&gt; However, doing 'for r in reqlist: r.Start()' works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 - And then, calling MPI_Waitall (or even iterating over request
</span><br>
<span class="quotelev1">&gt; array and calling MPI_Wait), the request seems to be deallocated (I
</span><br>
<span class="quotelev1">&gt; get MPI_REQUEST_NULL upon return), so I cannot start them again. I
</span><br>
<span class="quotelev1">&gt; understand this is wrong, the request handles should be marked as
</span><br>
<span class="quotelev1">&gt; inactive, but not for deallocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please, ignore me if this was reported. I am really busy and I have
</span><br>
<span class="quotelev1">&gt; not found the time to navigate the OMPI sources to get in touch with
</span><br>
<span class="quotelev1">&gt; its internal, so I am always reporting problems, and never patches.
</span><br>
<span class="quotelev1">&gt; Sorry!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
<li><strong>Next message:</strong> <a href="1119.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="1117.php">Jeff Squyres: "Re: [OMPI devel] MPI_XXX_{get|set}_errhandler in general , and for files in particular"</a>
<li><strong>In reply to:</strong> <a href="1112.php">Lisandro Dalcin: "[OMPI devel] Something broken using Persistent Requests"</a>
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

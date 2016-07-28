<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 20:33:17 2006" -->
<!-- isoreceived="20061013003317" -->
<!-- sent="Thu, 12 Oct 2006 21:33:08 -0300" -->
<!-- isosent="20061013003308" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Something broken using Persistent Requests" -->
<!-- id="e7ba66e40610121733q4ebe7726lc5491d35f255f9ce_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2006-10-12 20:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1113.php">Ralf Wildenhues: "[OMPI devel] mixing stdio and write?"</a>
<li><strong>Previous message:</strong> <a href="1111.php">Brian W. Barrett: "[OMPI devel] configure changes tonight"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1118.php">Jeff Squyres: "Re: [OMPI devel] Something broken using Persistent Requests"</a>
<li><strong>Reply:</strong> <a href="1118.php">Jeff Squyres: "Re: [OMPI devel] Something broken using Persistent Requests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am getting errors using persistent communications (OMPI 1.1.1). I am
<br>
trying to implement (in Python) example 2.32 from page 107 of MPI- The
<br>
Complete Reference (V1, 2nd. edition).
<br>
<p>I think the problem is not in my wrappers (my script works fine with
<br>
MPICH2). Below the two issues:
<br>
<p>1 - MPI_Startall fails (returning a negative error code, -105, which
<br>
in fact it seems to be out of range [MPI_SUCCESS...MPI_LASTCODE]).
<br>
However, doing 'for r in reqlist: r.Start()' works.
<br>
<p>2 - And then, calling MPI_Waitall (or even iterating over request
<br>
array and calling MPI_Wait), the request seems to be deallocated (I
<br>
get MPI_REQUEST_NULL upon return), so I cannot start them again. I
<br>
understand this is wrong, the request handles should be marked as
<br>
inactive, but not for deallocation.
<br>
<p>Please, ignore me if this was reported. I am really busy and I have
<br>
not found the time to navigate the OMPI sources to get in touch with
<br>
its internal, so I am always reporting problems, and never patches.
<br>
Sorry!
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="1113.php">Ralf Wildenhues: "[OMPI devel] mixing stdio and write?"</a>
<li><strong>Previous message:</strong> <a href="1111.php">Brian W. Barrett: "[OMPI devel] configure changes tonight"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1118.php">Jeff Squyres: "Re: [OMPI devel] Something broken using Persistent Requests"</a>
<li><strong>Reply:</strong> <a href="1118.php">Jeff Squyres: "Re: [OMPI devel] Something broken using Persistent Requests"</a>
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

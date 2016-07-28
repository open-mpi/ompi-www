<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 20:27:29 2007" -->
<!-- isoreceived="20070728002729" -->
<!-- sent="Fri, 27 Jul 2007 21:27:24 -0300" -->
<!-- isosent="20070728002724" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Win_get_group" -->
<!-- id="e7ba66e40707271727j14a04aadmc51b9c4a5989f324_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-27 20:27:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2038.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2036.php">Mohamad Chaarawi: "[OMPI devel] FW:  [RFC] Sparse group implementation]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2038.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2038.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI-2 standard says (see bottom of
<br>
&lt;<a href="http://www.mpi-forum.org/docs/mpi-20-html/node120.htm#Node120">http://www.mpi-forum.org/docs/mpi-20-html/node120.htm#Node120</a>&gt;)
<br>
<p>MPI_WIN_GET_GROUP returns a duplicate of the group of the communicator
<br>
used to create the window. associated with win. The group is returned
<br>
in group.
<br>
<p>Pease, note the 'duplicate' ...
<br>
<p>Well, it seems OMPI (v1.2 svn) is not returning a duplicate, comparing
<br>
the handles with == C operator gives true. Can you confirm this?
<br>
Should the word 'duplicate' be interpreted as 'a new reference to' ?
<br>
<p>As reference, MPICH2 seems to return different handles.
<br>
<p>Anyway, I think the standard needs to be corrected/clarified. Perhaps
<br>
the strict 'duplication' does not make any sense.
<br>
<p>Regards, and sorry me for raising again such low-level, corner-cases ...
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
<li><strong>Next message:</strong> <a href="2038.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2036.php">Mohamad Chaarawi: "[OMPI devel] FW:  [RFC] Sparse group implementation]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2038.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2038.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
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

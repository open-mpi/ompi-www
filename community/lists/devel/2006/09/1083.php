<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 26 16:02:25 2006" -->
<!-- isoreceived="20060926200225" -->
<!-- sent="Tue, 26 Sep 2006 17:02:21 -0300" -->
<!-- isosent="20060926200221" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] some possible bugs" -->
<!-- id="e7ba66e40609261302t548bca83v5eb05bdb29fe9e46_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40609251127g3151b670p11fcf66445a6f452_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-09-26 16:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1084.php">Jeff Squyres: "Re: [OMPI devel] some possible bugs"</a>
<li><strong>Previous message:</strong> <a href="1082.php">Ralph H Castain: "[OMPI devel] Tentative OpenRTE tutorial agenda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1084.php">Jeff Squyres: "Re: [OMPI devel] some possible bugs"</a>
<li><strong>Reply:</strong> <a href="1084.php">Jeff Squyres: "Re: [OMPI devel] some possible bugs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'am developing mpi4py, a MPI port for Python. I've wrote many
<br>
unittest scripts for my wrappers, which also pretend to test MPI
<br>
implementations.
<br>
<p>Below, I list some issues I've found when building my wrappers with
<br>
Open MPI 1.1.1. Please let me know your opinions.
<br>
<p>&nbsp;- MPI_Group_translate_ranks(group1, n, ranks1, group2, ranks2) fails
<br>
&nbsp;&nbsp;&nbsp;(with MPI_ERR_GROUP) if n != size(group1). Regarding the standard,
<br>
&nbsp;&nbsp;&nbsp;I understand this routine should whork for any value of n, if
<br>
&nbsp;&nbsp;&nbsp;ranks1 contains values (even if some are duplicated) in a valid
<br>
&nbsp;&nbsp;&nbsp;range according to size(group1).
<br>
<p>&nbsp;- MPI_Info_get_nthkey(INFO, 0, key) does not fail when INFO is
<br>
&nbsp;&nbsp;&nbsp;empty, ie, when MPI_Info_get_nkeys(info, &amp;nkeys) returns nkeys==0.
<br>
<p>&nbsp;- Usage of MPI_IN_PLACE is broken in some collectives, below the
<br>
&nbsp;&nbsp;&nbsp;reasons I've found:
<br>
<p>&nbsp;&nbsp;&nbsp;+ MPI_Gather:    with sendbuf=MPI_IN_PLACE, sendcount is not ignored.
<br>
&nbsp;&nbsp;&nbsp;+ MPI_Scatter:   with recvbuf=MPI_IN_PLACE, recvcount is not ignored.
<br>
&nbsp;&nbsp;&nbsp;+ MPI_Allgather: with sendbuf=MPI_IN_PLACE, sendcount is not ignored.
<br>
<p>&nbsp;&nbsp;&nbsp;The standard says that [send|recv]count and [send|recv]type are
<br>
&nbsp;&nbsp;&nbsp;ignored. I've not tested vector variants, perhaps they suffer the
<br>
&nbsp;&nbsp;&nbsp;same problem.
<br>
<p>&nbsp;- Some extended collective communications failed (not by raising
<br>
&nbsp;&nbsp;&nbsp;errors, but instead aborting tracing to stdout) when using
<br>
&nbsp;&nbsp;&nbsp;intercommunicators. Sometimes, the problems appeared when
<br>
&nbsp;&nbsp;&nbsp;size(local_group) != size(remote_group). However, MPI_Barrier and
<br>
&nbsp;&nbsp;&nbsp;MPI_Bcast worked well. I still could not get the reasons for those
<br>
&nbsp;&nbsp;&nbsp;failures. I've found a similar problem in MPICH2 when configured
<br>
&nbsp;&nbsp;&nbsp;with error-cheking enabled (they had a bug in some error-cheking
<br>
&nbsp;&nbsp;&nbsp;macros, I reported this issue and next they told me I was right).
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
<li><strong>Next message:</strong> <a href="1084.php">Jeff Squyres: "Re: [OMPI devel] some possible bugs"</a>
<li><strong>Previous message:</strong> <a href="1082.php">Ralph H Castain: "[OMPI devel] Tentative OpenRTE tutorial agenda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1084.php">Jeff Squyres: "Re: [OMPI devel] some possible bugs"</a>
<li><strong>Reply:</strong> <a href="1084.php">Jeff Squyres: "Re: [OMPI devel] some possible bugs"</a>
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

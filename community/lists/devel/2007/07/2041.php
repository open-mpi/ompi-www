<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 28 16:41:26 2007" -->
<!-- isoreceived="20070728204126" -->
<!-- sent="Sat, 28 Jul 2007 17:41:22 -0300" -->
<!-- isosent="20070728204122" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="e7ba66e40707281341s5e9d37a7sbc5f7f1d0500e53a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9C33E756-18DB-4DF9-B5D9-609F92C3E8B0_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-28 16:41:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2042.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<li><strong>Previous message:</strong> <a href="2040.php">Brian Barrett: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2040.php">Brian Barrett: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2044.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2044.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/28/07, Brian Barrett &lt;bbarrett_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; In my opinion, we conform to the standard.  We reference count the
</span><br>
<span class="quotelev1">&gt; group, it's incremented on call to MPI_WIN_GROUP, and you can safely
</span><br>
<span class="quotelev1">&gt; call MPI_GROUP_FREE on the group returned from MPI_WIN_GROUP.  Groups
</span><br>
<span class="quotelev1">&gt; are essentially immutable, so there's no way I can think of that we
</span><br>
<span class="quotelev1">&gt; violate the MPI standard.
</span><br>
<p>Your reasoning make a lot of sense. It there seems to be no point in
<br>
requiring a true 'duplicate' being returned by Win.Get_group().
<br>
<p><span class="quotelev1">&gt; Others are, of course, free to disagree with me.
</span><br>
<p>I do not strictly disagree with you, but the standard do (if it is
<br>
readed like a lawyer). In any case, this is other corner case that
<br>
should be clarified in the standard...
<br>
<p>In the mean time, I would prefer to follow the standard as close as
<br>
possible. If not, some external, stupid test suite (like the one I
<br>
have for mip4py) would report that OMPI is wrong about this point.
<br>
<p>BTW, Were is the place to disccuss this stantard isues? There is a
<br>
mailing list at mpi-forum.org?
<br>
<p>Regards,
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
<li><strong>Next message:</strong> <a href="2042.php">Lisandro Dalcin: "[OMPI devel] MPI_Comm_free with MPI_COMM_SELF"</a>
<li><strong>Previous message:</strong> <a href="2040.php">Brian Barrett: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2040.php">Brian Barrett: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2044.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2044.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
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

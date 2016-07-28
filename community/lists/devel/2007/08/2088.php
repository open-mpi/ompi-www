<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 16:42:07 2007" -->
<!-- isoreceived="20070806204207" -->
<!-- sent="Mon, 6 Aug 2007 17:42:01 -0300" -->
<!-- isosent="20070806204201" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="e7ba66e40708061342q3552b4bcq5b6c00ad9fec2f43_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="86A36B68-E420-4CB4-B812-E135D168450F_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-06 16:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2089.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Previous message:</strong> <a href="2087.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>In reply to:</strong> <a href="2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2096.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2096.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/1/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jul 31, 2007, at 6:43 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; having to call XXX.Free() for  every
</span><br>
<span class="quotelev2">&gt; &gt; object i get from a call like XXX.Get_something() is really an
</span><br>
<span class="quotelev2">&gt; &gt; unnecesary pain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gotcha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I don't see why this means that you need to know if an MPI handle
</span><br>
<span class="quotelev1">&gt; points to an intrinsic object or not...?
</span><br>
<p>Because many predefined, intrinsic objects cannot (or should not be
<br>
able to) be freed, acording to the standard.
<br>
<p><span class="quotelev2">&gt; &gt; Many things in MPI are LOCAL (datatypes, groups, predefined
</span><br>
<span class="quotelev2">&gt; &gt; operations) and in general destroying them for user-space is
</span><br>
<span class="quotelev2">&gt; &gt; guaranteed by MPI to not conflict with system(MPI)-space and
</span><br>
<span class="quotelev2">&gt; &gt; communication (i.e. if you create a derived datatype four using it in
</span><br>
<span class="quotelev2">&gt; &gt; a construction of another derived datatype, you can safely free the
</span><br>
<span class="quotelev2">&gt; &gt; first).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, for all those LOCAL objects, I could implement automatic
</span><br>
<span class="quotelev2">&gt; &gt; deallocation of handles for Python (for Comm, Win, and File, that is
</span><br>
<span class="quotelev2">&gt; &gt; not so easy, at freeing them is a collective operation AFAIK, and
</span><br>
<span class="quotelev2">&gt; &gt; automaticaly freeing them can lead to deadlocks).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a difficult issue -- deadlocks for removing objects that are
</span><br>
<span class="quotelev1">&gt; collective actions.  It's one of the reasons the Forum decided not to
</span><br>
<span class="quotelev1">&gt; have the C++ bindings automatically free handles when they go out of
</span><br>
<span class="quotelev1">&gt; scope.
</span><br>
<p>An that was a really good and natural decision.
<br>
<p><span class="quotelev2">&gt; &gt; Sorry for the long mail. In short, many things in MPI are not clearly
</span><br>
<span class="quotelev2">&gt; &gt; designed for languages other than C and Fortran. Even in C++
</span><br>
<span class="quotelev2">&gt; &gt; specification, there are things that are unnaceptable, like the
</span><br>
<span class="quotelev2">&gt; &gt; open-door to the problem of having dangling references, which could be
</span><br>
<span class="quotelev2">&gt; &gt; avoided with negligible cost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes and no.  As the author of the C++ bindings chapter in MPI-2, I
</span><br>
<span class="quotelev1">&gt; have a pretty good idea why we didn't do this.  :-)
</span><br>
<p>Please, do not missunderstand me. C++ bindings are almost perfect for
<br>
me. The only thing I object a bit is the open-door for dangling
<br>
references. Any way, this is a minor problem. And the C++ bindings are
<br>
my source of inspiration for my python wrappers, as they are really
<br>
good for me.
<br>
<p><span class="quotelev1">&gt; The standard is meant to be as simple, straightforward,
</span><br>
<span class="quotelev1">&gt; and cross-language as possible (and look where it is!  Imagine if we
</span><br>
<span class="quotelev1">&gt; had tried to make a real class library -- it would have led to even
</span><br>
<span class="quotelev1">&gt; more corner cases and imprecision in the official standard).
</span><br>
<p>Well, I have to completely agree with you. And as I said before, the
<br>
corner cases are really a few, compared to all the number of (rather
<br>
orthogonal) features provided in MPI. And all guess all this is going
<br>
to be solved with minor clarifications/corrections in MPI-2.1.
<br>
<p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="2089.php">Ralf Wildenhues: "Re: [OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Previous message:</strong> <a href="2087.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>In reply to:</strong> <a href="2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2096.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2096.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
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

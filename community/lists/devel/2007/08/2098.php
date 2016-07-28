<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  7 12:02:04 2007" -->
<!-- isoreceived="20070807160204" -->
<!-- sent="Tue, 7 Aug 2007 13:01:59 -0300" -->
<!-- isosent="20070807160159" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="e7ba66e40708070901q491f1d8cye90c527a528be8b1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="858E11B5-18D8-4EA0-B111-D271E0586CE3_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-07 12:01:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2099.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2097.php">Ralph Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>In reply to:</strong> <a href="2096.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/6/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Aug 6, 2007, at 2:42 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Because many predefined, intrinsic objects cannot (or should not be
</span><br>
<span class="quotelev2">&gt; &gt; able to) be freed, acording to the standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand that.  :-)  But why would you call XXX.Free() on an
</span><br>
<span class="quotelev1">&gt; intrinsic object?  If you're instantiating an MPI handle, you know
</span><br>
<span class="quotelev1">&gt; that it's a user-created object and therefore you should MPI free it,
</span><br>
<span class="quotelev1">&gt; right?  If you didn't instantiate it, then it's not a user-defined
</span><br>
<span class="quotelev1">&gt; object, and therefore you shouldn't MPI free it.
</span><br>
<p>Well, let take two examples:
<br>
<p>- GROUP_EMPTY is predefined handle. The standard says that some group
<br>
operations may return ir (for example, Group::Excl). So you get a
<br>
handle which may (or may not) be GROUP_EMPTY. Then you are going to
<br>
free the return of Group::Excl(). If it is an empty group, but not
<br>
equal (in the C == operator sense) to GROUP_EMPTY, then you can safely
<br>
free it, but if the return is exactly GROUP_EMPTY. what should I do as
<br>
I user? Should I free it? Well, the standard says nothing about this,
<br>
and MPI implementations can do what they want. Disccussing this issue
<br>
with MPICH2 developers, they first decided to generate an error if
<br>
Group::Free() is called with GROUP_EMPTY, then I updated my code,
<br>
released a new version of mpi4py, and after all this, they sent me a
<br>
mail saying they reverted the change (i.e, users can free GROUP_EMPTY)
<br>
because some extenal code (Intel MPI Benchmark) was failing. And take
<br>
into account that checking for GROUP_EMPTY is a easy task (just use
<br>
==), but even in that case it you do not know if you can safely free
<br>
the result of a group operation.
<br>
<p>- Other example is File::Get_view(). This function returns datatype
<br>
handles. If the returned handle is predefined, you cannot free it (not
<br>
sure, but i believe the standars explicitely says that), if it is not,
<br>
you sould free it. But in order to know that, you have to go through
<br>
datatype decoding.
<br>
<p>IMHO, all those issues could be corrected in the standard, as follow
<br>
<p>- Group operations NEVER return GROUP_EMPTY, so the user is in charge
<br>
to always call Group::Free() on the result. GROUP_EMPTY cannot be
<br>
freed, and it is just provided by convenience (i.e. you can use
<br>
Group::Compare() to know if a group has no members). The performance
<br>
implications of doing this (that is return a true duplicate of the
<br>
empty group) seems negligible.
<br>
<p>- File::Get_View() should also never return a predefined datatype, but
<br>
a duplicate of them (in the Datatype::Dup() sense). Again, I cannot
<br>
see any performance penalty on this.
<br>
<p><span class="quotelev1">&gt; If it's a question of trying to have a generic destructor (pardon me
</span><br>
<span class="quotelev1">&gt; -- I know next to nothing about python) for your MPI handle classes,
</span><br>
<span class="quotelev1">&gt; you can have a private member flag in your handle class indicating
</span><br>
<span class="quotelev1">&gt; whether the underlying MPI handle is intrinsic or not.  Have a
</span><br>
<span class="quotelev1">&gt; special communicator for instantiating the global / intrinsic objects
</span><br>
<span class="quotelev1">&gt; (e.g., for MPI_INT) that sets this flag for &quot;true&quot;; have all other
</span><br>
<span class="quotelev1">&gt; constructors set it to &quot;false&quot;.  In the destructor, you check this
</span><br>
<span class="quotelev1">&gt; flag and know whether you should call the corresponding MPI free
</span><br>
<span class="quotelev1">&gt; function (assuming you solve issues surrounding deadlock, etc.).
</span><br>
<p>I am currently doing this, but only for issuing a warning if a
<br>
non-predefined object is 'leaked'. For all local objects, like groups,
<br>
datatypes, I believe I could go further and enable automatic
<br>
destruction, but for global objects, like comm, win, files, the
<br>
deadlock problem is almost impossible to avoid. So for global objects
<br>
the user is still in charge of doing de destruction. But I am
<br>
completely fine with this. The only big problem is always to know (in
<br>
a implementation independed way) if you are able to free a handle.
<br>
<p>Please, let continue this thread!!! We need to agree in the way things
<br>
should be done, and surely we should include MPICH2 people in this
<br>
discussion. This way, we have more chances to correct/clarify things
<br>
por MPI-2.1 (or even MPI 2.0).
<br>
<p>Or do you think I should raise all this stuff to mpi-2.1 mailing list?
<br>
Regarding the archives, the list does not seems to be really active.
<br>
That's the reason I am always shotting here (and on mpich-maint) with
<br>
the hope of attract the attention of experienced people like all you
<br>
(in the end, I was in high-school by the time MPI was borned!!).
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
<li><strong>Next message:</strong> <a href="2099.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2097.php">Ralph Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>In reply to:</strong> <a href="2096.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
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

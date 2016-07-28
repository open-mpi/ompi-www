<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 30 16:31:33 2007" -->
<!-- isoreceived="20070730203133" -->
<!-- sent="Mon, 30 Jul 2007 16:31:25 -0400" -->
<!-- isosent="20070730203125" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="AF07BF36-DCE7-436F-A03A-39AA24C38A86_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="33038DC1-DB34-486A-91B1-C6CDCB704714_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-30 16:31:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2051.php">Lisandro Dalcin: "[OMPI devel] looking up service"</a>
<li><strong>Previous message:</strong> <a href="2049.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2049.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2053.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2053.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the data-type section there is an advice to implementors that  
<br>
state that a copy can simply increase the reference count if  
<br>
applicable. So, we might want to apply the same logic here ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 30, 2007, at 4:16 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 30, 2007, at 9:58 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the mean time, I would prefer to follow the standard as close as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possible. If not, some external, stupid test suite (like the one I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have for mip4py) would report that OMPI is wrong about this point.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What exactly are you testing for?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Equality with the '==' C operator (i.e. handle equality). Using
</span><br>
<span class="quotelev2">&gt;&gt; Group.Compare() yields IDENT, as expected. But for groups, I
</span><br>
<span class="quotelev2">&gt;&gt; understand IDENT means either equal handles (in the C/C++ '==' sense)
</span><br>
<span class="quotelev2">&gt;&gt; or groups with the same size and rank order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Upon reading Brian's answer and refreshing my cache by re-reading the
</span><br>
<span class="quotelev1">&gt; groups section of MPI-1, I have to agree with both of you.  The
</span><br>
<span class="quotelev1">&gt; wording of the standard says that we should return a copy of a
</span><br>
<span class="quotelev1">&gt; group.  But since groups are immutable, there really is no effective
</span><br>
<span class="quotelev1">&gt; difference as compared to simply returning the same group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be *really* strict in interpreting the results, you have to call
</span><br>
<span class="quotelev1">&gt; into question what &quot;copy&quot; means.  One valid interpretation could be:
</span><br>
<span class="quotelev1">&gt; increment a reference count on an existing group and then return a
</span><br>
<span class="quotelev1">&gt; handle to that existing group (which is what OMPI does).  So we
</span><br>
<span class="quotelev1">&gt; &quot;copied&quot; it -- in a lazy copy-on-write manner (just like fork() does
</span><br>
<span class="quotelev1">&gt; with memory pages between parents and children -- how's that for
</span><br>
<span class="quotelev1">&gt; precedent?).  But since the group never changes, we never actually
</span><br>
<span class="quotelev1">&gt; bother to copy it.  It's a [scalability] feature!  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think that using the C equality operator to compare the handles
</span><br>
<span class="quotelev1">&gt; that return will give you an answer that doesn't really mean
</span><br>
<span class="quotelev1">&gt; anything.  Regardless of whether you get the &quot;same&quot; group back or
</span><br>
<span class="quotelev1">&gt; whether you get a &quot;copy&quot; back, you'll get MPI_IDENT if you compare
</span><br>
<span class="quotelev1">&gt; the original group with the one returned, and that's the result that
</span><br>
<span class="quotelev1">&gt; matters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
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
<li><strong>Next message:</strong> <a href="2051.php">Lisandro Dalcin: "[OMPI devel] looking up service"</a>
<li><strong>Previous message:</strong> <a href="2049.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2049.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2053.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2053.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
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

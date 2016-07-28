<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 30 16:17:32 2007" -->
<!-- isoreceived="20070730201732" -->
<!-- sent="Mon, 30 Jul 2007 16:16:58 -0400" -->
<!-- isosent="20070730201658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="33038DC1-DB34-486A-91B1-C6CDCB704714_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40707300658v55bc3c9aue00157ae72822586_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-30 16:16:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2050.php">George Bosilca: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2048.php">Jeff Squyres: "[OMPI devel] Coverity logins"</a>
<li><strong>In reply to:</strong> <a href="2047.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2050.php">George Bosilca: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2050.php">George Bosilca: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2007, at 9:58 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; In the mean time, I would prefer to follow the standard as close as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possible. If not, some external, stupid test suite (like the one I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have for mip4py) would report that OMPI is wrong about this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What exactly are you testing for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Equality with the '==' C operator (i.e. handle equality). Using
</span><br>
<span class="quotelev1">&gt; Group.Compare() yields IDENT, as expected. But for groups, I
</span><br>
<span class="quotelev1">&gt; understand IDENT means either equal handles (in the C/C++ '==' sense)
</span><br>
<span class="quotelev1">&gt; or groups with the same size and rank order.
</span><br>
<p>Upon reading Brian's answer and refreshing my cache by re-reading the  
<br>
groups section of MPI-1, I have to agree with both of you.  The  
<br>
wording of the standard says that we should return a copy of a  
<br>
group.  But since groups are immutable, there really is no effective  
<br>
difference as compared to simply returning the same group.
<br>
<p>To be *really* strict in interpreting the results, you have to call  
<br>
into question what &quot;copy&quot; means.  One valid interpretation could be:  
<br>
increment a reference count on an existing group and then return a  
<br>
handle to that existing group (which is what OMPI does).  So we  
<br>
&quot;copied&quot; it -- in a lazy copy-on-write manner (just like fork() does  
<br>
with memory pages between parents and children -- how's that for  
<br>
precedent?).  But since the group never changes, we never actually  
<br>
bother to copy it.  It's a [scalability] feature!  :-)
<br>
<p>So I think that using the C equality operator to compare the handles  
<br>
that return will give you an answer that doesn't really mean  
<br>
anything.  Regardless of whether you get the &quot;same&quot; group back or  
<br>
whether you get a &quot;copy&quot; back, you'll get MPI_IDENT if you compare  
<br>
the original group with the one returned, and that's the result that  
<br>
matters.
<br>
<p>My $0.02...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2050.php">George Bosilca: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2048.php">Jeff Squyres: "[OMPI devel] Coverity logins"</a>
<li><strong>In reply to:</strong> <a href="2047.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2050.php">George Bosilca: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2050.php">George Bosilca: "Re: [OMPI devel] MPI_Win_get_group"</a>
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

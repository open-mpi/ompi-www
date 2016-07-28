<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 20:01:46 2007" -->
<!-- isoreceived="20070807000146" -->
<!-- sent="Mon, 6 Aug 2007 18:01:39 -0600" -->
<!-- isosent="20070807000139" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="858E11B5-18D8-4EA0-B111-D271E0586CE3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40708061342q3552b4bcq5b6c00ad9fec2f43_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-08-06 20:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2097.php">Ralph Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Previous message:</strong> <a href="2095.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>In reply to:</strong> <a href="2088.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2098.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2098.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2007, at 2:42 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; having to call XXX.Free() for  every
</span><br>
<span class="quotelev3">&gt;&gt;&gt; object i get from a call like XXX.Get_something() is really an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unnecesary pain.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gotcha.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I don't see why this means that you need to know if an MPI handle
</span><br>
<span class="quotelev2">&gt;&gt; points to an intrinsic object or not...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because many predefined, intrinsic objects cannot (or should not be
</span><br>
<span class="quotelev1">&gt; able to) be freed, acording to the standard.
</span><br>
<p>I understand that.  :-)  But why would you call XXX.Free() on an  
<br>
intrinsic object?  If you're instantiating an MPI handle, you know  
<br>
that it's a user-created object and therefore you should MPI free it,  
<br>
right?  If you didn't instantiate it, then it's not a user-defined  
<br>
object, and therefore you shouldn't MPI free it.
<br>
<p>If it's a question of trying to have a generic destructor (pardon me  
<br>
-- I know next to nothing about python) for your MPI handle classes,  
<br>
you can have a private member flag in your handle class indicating  
<br>
whether the underlying MPI handle is intrinsic or not.  Have a  
<br>
special communicator for instantiating the global / intrinsic objects  
<br>
(e.g., for MPI_INT) that sets this flag for &quot;true&quot;; have all other  
<br>
constructors set it to &quot;false&quot;.  In the destructor, you check this  
<br>
flag and know whether you should call the corresponding MPI free  
<br>
function (assuming you solve issues surrounding deadlock, etc.).
<br>
<p><span class="quotelev2">&gt;&gt; Yes and no.  As the author of the C++ bindings chapter in MPI-2, I
</span><br>
<span class="quotelev2">&gt;&gt; have a pretty good idea why we didn't do this.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please, do not missunderstand me. C++ bindings are almost perfect for
</span><br>
<span class="quotelev1">&gt; me. The only thing I object a bit is the open-door for dangling
</span><br>
<span class="quotelev1">&gt; references. Any way, this is a minor problem. And the C++ bindings are
</span><br>
<span class="quotelev1">&gt; my source of inspiration for my python wrappers, as they are really
</span><br>
<span class="quotelev1">&gt; good for me.
</span><br>
<p>Good!  That's exactly what they were intended to be.  :-)
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
<li><strong>Next message:</strong> <a href="2097.php">Ralph Castain: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>Previous message:</strong> <a href="2095.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Trunk borked?"</a>
<li><strong>In reply to:</strong> <a href="2088.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2098.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2098.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
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

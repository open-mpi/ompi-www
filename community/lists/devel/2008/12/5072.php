<?
$subject_val = "Re: [OMPI devel] RFC: make predefined handles extern to pointers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 19:04:59 2008" -->
<!-- isoreceived="20081218000459" -->
<!-- sent="Wed, 17 Dec 2008 19:04:53 -0500" -->
<!-- isosent="20081218000453" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make predefined handles extern to pointers" -->
<!-- id="C56EFDD5.2C7B0%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4947CC1C.10800_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make predefined handles extern to pointers<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-17 19:04:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5073.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5071.php">Terry Dontje: "[OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>In reply to:</strong> <a href="5071.php">Terry Dontje: "[OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5073.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5073.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
&nbsp;&nbsp;Is there any way you can quantify the cost ?  This seems reasonable, but
<br>
would be nice to get an idea what the performance cost is (and not within a
<br>
tight loop where everything stays in cache).
<br>
<p>Rich
<br>
<p><p>On 12/16/08 10:41 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT:  To make predefined handles extern to pointers instead of an
</span><br>
<span class="quotelev1">&gt; address of an extern to a structure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:  To make OMPI more backwards compatible in regards to changes to
</span><br>
<span class="quotelev1">&gt; structures that define predefined handles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE:  In the trunk.  ompi/include/mpi.h.in and places in ompi that
</span><br>
<span class="quotelev1">&gt; directly use the predefined handles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:  01/24/2009
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT:  01/10/2009
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ____________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The point of this change is to improve the odds that an MPI application
</span><br>
<span class="quotelev1">&gt; does not have to recompile when changes are made to the OMPI library.
</span><br>
<span class="quotelev1">&gt; In this case specifically the predefined handles that use the structures
</span><br>
<span class="quotelev1">&gt; for communicators, groups, ops, datatypes, error handlers, win, file,
</span><br>
<span class="quotelev1">&gt; and info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An example of the changes for the communicator predefined handles can be
</span><br>
<span class="quotelev1">&gt; found in the hg tmp workspace at
</span><br>
<span class="quotelev1">&gt; ssh://www.open-mpi.org/~tdd/hg/predefcompat.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, the one downfall that Jeff and I could think of by doing this is
</span><br>
<span class="quotelev1">&gt; you potentially add one level of indirection but I believe that will be
</span><br>
<span class="quotelev1">&gt; a small overhead and if you use one of the predefined handles
</span><br>
<span class="quotelev1">&gt; repetitively (like in a loop) that the address will probably be stored
</span><br>
<span class="quotelev1">&gt; in a register once and no additional over should be seen due to this change.
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
<li><strong>Next message:</strong> <a href="5073.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5071.php">Terry Dontje: "[OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>In reply to:</strong> <a href="5071.php">Terry Dontje: "[OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5073.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5073.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
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

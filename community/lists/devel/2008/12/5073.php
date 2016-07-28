<?
$subject_val = "Re: [OMPI devel] RFC: make predefined handles extern to pointers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 07:13:14 2008" -->
<!-- isoreceived="20081218121314" -->
<!-- sent="Thu, 18 Dec 2008 07:13:08 -0500" -->
<!-- isosent="20081218121308" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make predefined handles extern to pointers" -->
<!-- id="494A3E54.7060905_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C56EFDD5.2C7B0%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-18 07:13:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5074.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5072.php">Richard Graham: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>In reply to:</strong> <a href="5072.php">Richard Graham: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5074.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5074.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Richard Graham wrote:
<br>
<span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt;   Is there any way you can quantify the cost ?  This seems reasonable, but
</span><br>
<span class="quotelev1">&gt; would be nice to get an idea what the performance cost is (and not within a
</span><br>
<span class="quotelev1">&gt; tight loop where everything stays in cache).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, I guess that would eliminate any of the simple perf tests like IMB, 
<br>
netperf, and such.  So do you have something else in mind, maybe HPCC? 
<br>
<p>--td
<br>
<span class="quotelev1">&gt; On 12/16/08 10:41 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:  To make predefined handles extern to pointers instead of an
</span><br>
<span class="quotelev2">&gt;&gt; address of an extern to a structure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY:  To make OMPI more backwards compatible in regards to changes to
</span><br>
<span class="quotelev2">&gt;&gt; structures that define predefined handles.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE:  In the trunk.  ompi/include/mpi.h.in and places in ompi that
</span><br>
<span class="quotelev2">&gt;&gt; directly use the predefined handles.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:  01/24/2009
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT:  01/10/2009
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ____________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The point of this change is to improve the odds that an MPI application
</span><br>
<span class="quotelev2">&gt;&gt; does not have to recompile when changes are made to the OMPI library.
</span><br>
<span class="quotelev2">&gt;&gt; In this case specifically the predefined handles that use the structures
</span><br>
<span class="quotelev2">&gt;&gt; for communicators, groups, ops, datatypes, error handlers, win, file,
</span><br>
<span class="quotelev2">&gt;&gt; and info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An example of the changes for the communicator predefined handles can be
</span><br>
<span class="quotelev2">&gt;&gt; found in the hg tmp workspace at
</span><br>
<span class="quotelev2">&gt;&gt; ssh://www.open-mpi.org/~tdd/hg/predefcompat.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note, the one downfall that Jeff and I could think of by doing this is
</span><br>
<span class="quotelev2">&gt;&gt; you potentially add one level of indirection but I believe that will be
</span><br>
<span class="quotelev2">&gt;&gt; a small overhead and if you use one of the predefined handles
</span><br>
<span class="quotelev2">&gt;&gt; repetitively (like in a loop) that the address will probably be stored
</span><br>
<span class="quotelev2">&gt;&gt; in a register once and no additional over should be seen due to this change.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5074.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5072.php">Richard Graham: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>In reply to:</strong> <a href="5072.php">Richard Graham: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5074.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5074.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
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

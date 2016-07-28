<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 16:17:10 2006" -->
<!-- isoreceived="20061129211710" -->
<!-- sent="Wed, 29 Nov 2006 14:17:04 -0700" -->
<!-- isosent="20061129211704" -->
<!-- name="Brian W Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="[OMPI devel] Build system changes" -->
<!-- id="7CF88995-E6C0-498A-8C99-B09409DF7BB6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian W Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-29 16:17:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1209.php">Galen Shipman: "[OMPI devel] For Open MPI + BPROC users"</a>
<li><strong>Previous message:</strong> <a href="1207.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1210.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Reply:</strong> <a href="1210.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>Just wanted to give everyone a heads up that there will be two  
<br>
changes to the build system that should have minimal impact on  
<br>
everyone, but are worth noting:
<br>
<p>&nbsp;&nbsp;&nbsp;1) If you are using Autoconf 2.60 or later, you *MUST* be using
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automake 1.10 or later.  Most people are still using AC 2.59,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so this should have zero impact on the group.
<br>
<p>&nbsp;&nbsp;&nbsp;2) We will now be checking to make sure that the C++, F77, F90,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and ObjC compilers can link against the C compiler.  This
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;should clean up some of the amorphous errors people have been
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;getting when they do something like: 'CFLAGS=-m32 CXXFLAGS=-m64',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usually by not specifying one of the two...
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1209.php">Galen Shipman: "[OMPI devel] For Open MPI + BPROC users"</a>
<li><strong>Previous message:</strong> <a href="1207.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1210.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>Reply:</strong> <a href="1210.php">Ralph Castain: "Re: [OMPI devel] Build system changes"</a>
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

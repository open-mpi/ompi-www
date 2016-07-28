<?
$subject_val = "Re: [OMPI devel] dropping a pls module into an Open MPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 14:57:39 2008" -->
<!-- isoreceived="20080121195739" -->
<!-- sent="Mon, 21 Jan 2008 11:57:31 -0800" -->
<!-- isosent="20080121195731" -->
<!-- name="Dean Dauger, Ph. D." -->
<!-- email="d_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dropping a pls module into an Open MPI build" -->
<!-- id="560888D6-B948-475C-9355-BD4C4CFD207E_at_daugerresearch.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3.1200762023.19010.devel_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] dropping a pls module into an Open MPI build<br>
<strong>From:</strong> Dean Dauger, Ph. D. (<em>d_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-21 14:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3015.php">Sharon Melamed: "Re: [OMPI devel] carto framework"</a>
<li><strong>Previous message:</strong> <a href="3013.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Maybe in reply to:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3018.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Which source checkout did you use?  Note that the pls structures have
</span><br>
<span class="quotelev1">&gt; likely changed between the OMPI SVN trunk and the v1.2 branch.
</span><br>
<p><span class="quotelev1">&gt; Hmm -- are you saying that you tried compiling the Apple copy of the
</span><br>
<span class="quotelev1">&gt; rsh pls and/or the OMPI SVN v1.2.3 rsh pls and neither of them worked?
</span><br>
<p>Yes, I tried both of those and they gave the same bus error.  If I'm  
<br>
reading the stack dump right:
<br>
<p>[Rotarran-X-5:04475] Failing at address: 0x0
<br>
[ 1] [0xbffff828, 0x00000000] (-P-)
<br>
[ 2] (orterun + 0x457) [0xbffff8b8, 0x00001d07]
<br>
<p>it's orterun() calling a null pointer.
<br>
<p><span class="quotelev1">&gt; I don't rightly know why that wouldn't work -- is there a way to know
</span><br>
<span class="quotelev1">&gt; with what compiler flags Apple built Open MPI?
</span><br>
<p>I'm not sure, but I think these are the configure flags they use:
<br>
<p>--disable-mpi-f77 --without-cs-fs -enable-mca-no-build=ras-slurm,pls- 
<br>
slurm,gpr-null,sds-pipe,sds-slurm,pml-cm --mandir=/usr/share/man -- 
<br>
sysconfdir=/usr/share NM=&quot;nm -p&quot;
<br>
<p><span class="quotelev1">&gt; Can you step through
</span><br>
<span class="quotelev1">&gt; mpirun with a debugger to see where it dies?  I suspect it may not
</span><br>
<span class="quotelev1">&gt; have any debugging symbols, so you might not, but at least you might
</span><br>
<span class="quotelev1">&gt; be able to see which pls rsh functions are invoked...?  (and more
</span><br>
<span class="quotelev1">&gt; importantly, if something is invoked &quot;wrong&quot; in the pls rsh)
</span><br>
<p>Adding some printf's into the pls rsh shows the _init and _open  
<br>
routines are successfully executing and exiting.  I'll see if I can  
<br>
figure out what part of orterun() is &quot;orterun + 0x457&quot;.  I have not  
<br>
attempted to replace orterun/mpirun/etc., only the pls pieces.
<br>
<p>Thank you,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Dean
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3015.php">Sharon Melamed: "Re: [OMPI devel] carto framework"</a>
<li><strong>Previous message:</strong> <a href="3013.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Maybe in reply to:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3018.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
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

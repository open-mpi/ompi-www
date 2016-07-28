<?
$subject_val = "Re: [OMPI devel] IB warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 08:04:02 2010" -->
<!-- isoreceived="20100720120402" -->
<!-- sent="20 Jul 2010 13:03:57 +0100" -->
<!-- isosent="20100720120357" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IB warnings" -->
<!-- id="Prayer.1.3.3.1007201303570.31608_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0A4D8118-F34F-4882-A9C2-F95F88D2A40F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IB warnings<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 08:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8196.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8194.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23440"</a>
<li><strong>In reply to:</strong> <a href="8193.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8196.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Reply:</strong> <a href="8196.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Reply:</strong> <a href="8201.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 20 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;The change was to add casting:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	} while (!OPAL_ATOMIC_CMPSET_32((int32_t*)&amp;ep-&gt;eager_rdma_remote.seq, 
</span><br>
<span class="quotelev1">&gt;					(int32_t)ftr-&gt;seq, (int32_t)ftr-&gt;seq+1));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is it safe to simply cast a (uint32_t*) to (int32_t*) in the first param?  
</span><br>
<p>Pretty safe.  While there ARE circumstances under which it might fail,
<br>
I am almost certain that there are no current systems that will expose
<br>
them, and that none will appear in the near future.  Furthermore, it is
<br>
almost, but not quite, specified to be legal by the C99 standard.
<br>
<p><span class="quotelev1">&gt; Also, it seems like the 3rd parameter could be problematic if it ever 
</span><br>
<span class="quotelev1">&gt; goes larger than 2B -- it'll increment in the wrong direction, won't it?
</span><br>
<p>Not on most systems.  While this is more clearly illegal, similar remarks
<br>
apply to its safety.  If there were any debugging C compilers around, it
<br>
might well get trapped, but those are about as common as unicorns.
<br>
<p>It's a horrible coding style, but this is a case of damned if you do, and
<br>
damned if you don't.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8196.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8194.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23440"</a>
<li><strong>In reply to:</strong> <a href="8193.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8196.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Reply:</strong> <a href="8196.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Reply:</strong> <a href="8201.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
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

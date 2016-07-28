<?
$subject_val = "Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 09:51:07 2014" -->
<!-- isoreceived="20140514135107" -->
<!-- sent="Wed, 14 May 2014 09:51:05 -0400" -->
<!-- isosent="20140514135105" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif" -->
<!-- id="CAMJJpkUegAbkxEuBsfWbHkuYH8ZpHLr32mpgSeucq_X7siebPA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C65317F8-DB4B-4D0C-A549-4FF93A6EFDF5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 09:51:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14796.php">Rolf vandeVaart: "[OMPI devel] RFC: Add some basic CUDA-aware support to reductions"</a>
<li><strong>Previous message:</strong> <a href="14794.php">Mike Dubman: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>In reply to:</strong> <a href="14783.php">Jeff Squyres (jsquyres): "[OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch. I fixed the TCP BTL (r31753). It is the only BTL I can
<br>
test so that's the most I can do here.
<br>
<p>However, I never get OPAL_ERR_DATA_VALUE_NOT_FOUND out of the modex
<br>
call when the key doesn't exists. I looked in dstore and the correct
<br>
value one should look for is OPAL_ERR_NOT_FOUND. I guess you might
<br>
want to revise the check in the USNIC.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: There is a easy way to test this particular case by using the MPMD
<br>
capabilities of mpiexec. As an example for a quick NetPIPE run between
<br>
two processes one supporting SM and TCP and one supporting only SM (I
<br>
ignored self here), you can do:
<br>
<p>mpirun -np 1 --mca btl tcp,sm,self ./NPmpi -l 5 -u 5 : -np 1 --mca btl
<br>
sm,self ./NPmpi -l 5 -u 5
<br>
<p><p>On Tue, May 13, 2014 at 2:09 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I notice that BTLs are not checking the return value from ompi_modex_recv() for OPAL_ERR_DATA_VALUE_NOT_FOUND (indicating that the peer process didn't put that modex key).  In the BTL context, NOT_FOUND means that that peer process doesn't have this BTL, so this local peer process should probably mark it as unreachable in add_procs().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is on both trunk and the v1.8 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The BTLs listed above are not checking/handling ompi_modex_recv() returning OPAL_ERR_DATA_VALUE_NOT_FOUND properly.  Most of these BTLs do something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; module_add_procs() {
</span><br>
<span class="quotelev1">&gt;   loop over the peers {
</span><br>
<span class="quotelev1">&gt;     proc = proc_create(...)
</span><br>
<span class="quotelev1">&gt;     if (NULL == proc)
</span><br>
<span class="quotelev1">&gt;       error!
</span><br>
<span class="quotelev1">&gt;     ....
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; proc_create(...) {
</span><br>
<span class="quotelev1">&gt;   if (ompi_modex_recv() != OMPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;      return NULL;
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix is to make proc_create() return something a bit more expressive so that add_procs() can tell the difference between &quot;error!&quot; and &quot;you can't reach this peer&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I fixed this in the usnic BTL back in late March, but forgot to bring this to everyone's attention -- oops.  See <a href="https://svn.open-mpi.org/trac/ompi/ticket/4442">https://svn.open-mpi.org/trac/ompi/ticket/4442</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14783.php">http://www.open-mpi.org/community/lists/devel/2014/05/14783.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14796.php">Rolf vandeVaart: "[OMPI devel] RFC: Add some basic CUDA-aware support to reductions"</a>
<li><strong>Previous message:</strong> <a href="14794.php">Mike Dubman: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>In reply to:</strong> <a href="14783.php">Jeff Squyres (jsquyres): "[OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
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

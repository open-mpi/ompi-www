<?
$subject_val = "Re: [OMPI users] Shared memory optimizations in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 10:12:55 2011" -->
<!-- isoreceived="20111122151255" -->
<!-- sent="Tue, 22 Nov 2011 10:12:28 -0500" -->
<!-- isosent="20111122151228" -->
<!-- name="Shamik Ganguly" -->
<!-- email="shamikg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory optimizations in OMPI" -->
<!-- id="CAFQkOS4G_1g4jMACCK31C4+z=_Jm62CoDiqNQKhzMiN+rEBTgg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFQkOS5Z+a48MhpFra_xAqRnAuvCLzzF=hKPjT8eu=uqP0ktHg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared memory optimizations in OMPI<br>
<strong>From:</strong> Shamik Ganguly (<em>shamikg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 10:12:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17812.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17810.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="17808.php">Shamik Ganguly: "[OMPI users] Shared memory optimizations in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17812.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Reply:</strong> <a href="17812.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot Jeff.
<br>
<p>PIN is a dynamic binary instrumentation tool from Intel. It runs on top of
<br>
the Binary in the MPI node. When its given function calls to instrument, it
<br>
will insert trappings before/after that funtion call in the binary of the
<br>
program you are instrumenting and you can insert your own functions.
<br>
<p>I am doing some memory address profiling on benchmarks running on MPI and I
<br>
was using PIN to get the Load/Store addresses. Furthermore I needed to know
<br>
which LD/ST were coming from actual socket communication and which are
<br>
coming from shared memory optimizations. So i needed to know which
<br>
functions/where exactly were they taking that decision so that I can
<br>
instrument the appropriate MPI library function call (the actual low level
<br>
function, not the API like MPI_Sends/Recvs) in PIN. Hence I guess I am
<br>
actually zooming down to a 1000 ft view :)
<br>
<p>Any suggestion is welcome. I will go into the ob1 directory and try to hunt
<br>
around to see how exactly its being done.
<br>
<p>Regards,
<br>
Shamik
<br>
<p>On Tue, Nov 22, 2011 at 10:08 AM, Shamik Ganguly
<br>
&lt;shamik.ganguly_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PIN is a dynamic binary instrumentation tool from Intel. It runs on top of
</span><br>
<span class="quotelev1">&gt; the Binary in the MPI node. When its given function calls to instrument, it
</span><br>
<span class="quotelev1">&gt; will insert trappings before/after that funtion call in the binary of the
</span><br>
<span class="quotelev1">&gt; program you are instrumenting and you can insert your own functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am doing some memory address profiling on benchmarks running on MPI and
</span><br>
<span class="quotelev1">&gt; I was using PIN to get the Load/Store addresses. Furthermore I needed to
</span><br>
<span class="quotelev1">&gt; know which LD/ST were coming from actual socket communication and which are
</span><br>
<span class="quotelev1">&gt; coming from shared memory optimizations. So i needed to know which
</span><br>
<span class="quotelev1">&gt; functions/where exactly were they taking that decision so that I can
</span><br>
<span class="quotelev1">&gt; instrument the appropriate MPI library function call (the actual low level
</span><br>
<span class="quotelev1">&gt; function, not the API like MPI_Sends/Recvs) in PIN. Hence I guess I am
</span><br>
<span class="quotelev1">&gt; actually zooming down to a 1000 ft view :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will go into the ob1 directory and try to hunt around to see how exactly
</span><br>
<span class="quotelev1">&gt; its being done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shamik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 22, 2011 at 9:04 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 22, 2011, at 1:09 AM, Shamik Ganguly wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I want to trace when the MPI  library prevents an MPI_Send from going
</span><br>
<span class="quotelev2">&gt;&gt; to the socket and makes it access shared memory because the target node is
</span><br>
<span class="quotelev2">&gt;&gt; on the same chip (CMP). I want to use PIN to trace this. Can you please
</span><br>
<span class="quotelev2">&gt;&gt; give me some pointers about which functions are taking this decision so
</span><br>
<span class="quotelev2">&gt;&gt; that I can instrument the appropriate library calls in PIN?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What's PIN?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The decision is made in the ob1 PML plugin.  Way back during MPI_INIT,
</span><br>
<span class="quotelev2">&gt;&gt; each MPI process creates lists of BTLs to use to contact each MPI process
</span><br>
<span class="quotelev2">&gt;&gt; peer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When a process is on the same *node* (e.g., a single server) -- not just
</span><br>
<span class="quotelev2">&gt;&gt; the same processor socket/chip -- the shared memory BTL is given preference
</span><br>
<span class="quotelev2">&gt;&gt; to all other BTLs by use of a priority mechanism.  Hence, the &quot;sm&quot; BTL is
</span><br>
<span class="quotelev2">&gt;&gt; put at the front of the BML lists (BML = BTL multiplexing layer -- it's
</span><br>
<span class="quotelev2">&gt;&gt; essentially just list management for BTLs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Later, when MPI_SEND comes through, it uses the already-setup BML lists
</span><br>
<span class="quotelev2">&gt;&gt; to determine which BTL(s) to use to send a message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's the 50,000 foot view.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Shamik Ganguly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Shamik Ganguly
2nd year, MS (CSE-Hardware), University of Michigan, Ann Arbor
B.Tech.(E&amp;ECE), IITKGP (2008)
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17811/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17812.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17810.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="17808.php">Shamik Ganguly: "[OMPI users] Shared memory optimizations in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17812.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Reply:</strong> <a href="17812.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
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

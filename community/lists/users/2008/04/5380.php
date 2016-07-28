<?
$subject_val = "Re: [OMPI users] 32-bit openib btl fails on 64-bit OS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 23:39:26 2008" -->
<!-- isoreceived="20080412033926" -->
<!-- sent="Fri, 11 Apr 2008 20:39:15 -0700" -->
<!-- isosent="20080412033915" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 32-bit openib btl fails on 64-bit OS" -->
<!-- id="19030630-BD03-41C8-B71D-99F19744C411_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2557D757-EE62-4380-8CEB-C72EE50D3DC9_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 32-bit openib btl fails on 64-bit OS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 23:39:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5381.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>Previous message:</strong> <a href="5379.php">Jeff Squyres: "Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
<li><strong>In reply to:</strong> <a href="5332.php">Teng Lin: "[OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2008, at 5:58 PM, Teng Lin wrote:
<br>
<span class="quotelev1">&gt; In order to run a 32-bit program on a 64-bit cluster, one has to build
</span><br>
<span class="quotelev1">&gt; 32-bit OpenMPI. Following some instructions on this mailing list, I
</span><br>
<span class="quotelev1">&gt; successfully built OpenMPI 1.2.4 on 64-bit OS.
</span><br>
<p>It's not clear from your text -- did you build Open MPI as 32 or 64 bit?
<br>
<p><span class="quotelev1">&gt; However, I run into
</span><br>
<span class="quotelev1">&gt; openib problem when I try to run hello_c program. I also built 64-bit
</span><br>
<span class="quotelev1">&gt; OpenMPI from same source. The interesting fact is 64-bit OpenMPI works
</span><br>
<span class="quotelev1">&gt; just fine. Below is the output from orterun,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ############################################################################
</span><br>
<span class="quotelev1">&gt; iceland:/home/tlin/test_pbs&gt;/home/tin/openmpi-1.2.4/bin/orterun -np 2
</span><br>
<span class="quotelev1">&gt; --hostfile mach.lst /home/tlin/test_pbs/hello_c.32
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenIB BTL failed to initialize while trying to create an internal
</span><br>
<span class="quotelev1">&gt; queue.  This typically indicates a failed OpenFabrics installation or
</span><br>
<span class="quotelev1">&gt; faulty hardware.  The failure occured here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Host:        cl1n004
</span><br>
<span class="quotelev1">&gt;   OMPI source: btl_openib.c:828
</span><br>
<span class="quotelev1">&gt;   Function:    ibv_create_cq()
</span><br>
<span class="quotelev1">&gt;   Error:       Invalid argument (errno=22)
</span><br>
<span class="quotelev1">&gt;   Device:      mthca0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
[snip]
<br>
<span class="quotelev1">&gt; ######################################################################
</span><br>
<span class="quotelev1">&gt; I saw this error on before on other cluster. Following the instruction
</span><br>
<span class="quotelev1">&gt; on (<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>)
</span><br>
<span class="quotelev1">&gt; does fix the problem. However, I doubt that is the reason why 32 bit
</span><br>
<span class="quotelev1">&gt; OpenMPI does not work on this cluster. Output from limit looks fine to
</span><br>
<span class="quotelev1">&gt; me. And if that is the case, 64 bit OpenMPI will not work.  Any ideas?
</span><br>
<p><p>I'm unclear exactly what you're saying is happening -- can you clarify?
<br>
<p>- 32 bit Open MPI does not build at all
<br>
- 64 bit Open MPI builds but yields the error message shown above
<br>
<p>Is that right?
<br>
<p>Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
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
<li><strong>Next message:</strong> <a href="5381.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>Previous message:</strong> <a href="5379.php">Jeff Squyres: "Re: [OMPI users] btl_openib_rd_{num, low} parameters? (Was Re: ConnectX hang with 1.2.5, crash with 1.3, during gather)"</a>
<li><strong>In reply to:</strong> <a href="5332.php">Teng Lin: "[OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 13:58:06 2007" -->
<!-- isoreceived="20070831175806" -->
<!-- sent="Fri, 31 Aug 2007 13:57:57 -0400" -->
<!-- isosent="20070831175757" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM BTL hang issue" -->
<!-- id="2387136E-728F-4DA5-B9F2-CEEFB2CDE9B4_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46D851B4.5060904_at_sun.com" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-31 13:57:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2285.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2283.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2283.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2285.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2285.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
<p>Are you testing on Linux? If so, which kernel?
<br>
<p>See the patch to iperf to handle kernel 2.6.21 and the issue that  
<br>
they had with usleep(0):
<br>
<p><a href="http://dast.nlanr.net/Projects/Iperf2.0/patch-iperf-linux-2.6.21.txt">http://dast.nlanr.net/Projects/Iperf2.0/patch-iperf-linux-2.6.21.txt</a>
<br>
<p>Scott
<br>
<p>On Aug 31, 2007, at 1:36 PM, Terry D. Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I have an update to this issue.  I believe there is an
</span><br>
<span class="quotelev1">&gt; implementation difference of sched_yield between Linux and  
</span><br>
<span class="quotelev1">&gt; Solaris.  If
</span><br>
<span class="quotelev1">&gt; I change the sched_yield in opal_progress to be a usleep(500) then my
</span><br>
<span class="quotelev1">&gt; program completes quite quickly.  I have sent a few questions to a
</span><br>
<span class="quotelev1">&gt; Solaris engineer and hopefully will get some useful information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, CT-6's implementation also used yield calls (note  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; actually is what sched_yield reduces down to in Solaris) and we did  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; see the same degradation issue as with Open MPI.  I believe the reason
</span><br>
<span class="quotelev1">&gt; is because CT-6's SM implementation is not calling CT-6's version of
</span><br>
<span class="quotelev1">&gt; progress recursively and forcing all the unexpected to be read in  
</span><br>
<span class="quotelev1">&gt; before
</span><br>
<span class="quotelev1">&gt; continuing.  CT-6 also has a natural flow control in it's  
</span><br>
<span class="quotelev1">&gt; implementation
</span><br>
<span class="quotelev1">&gt; (ie it has a fixed set fifo for eager messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe both of these characteristics lend CT-6 to not being
</span><br>
<span class="quotelev1">&gt; completely killed by the yield differences.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Li-Ta Lo wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2007-08-30 at 12:45 -0400, Terry.Dontje_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Li-Ta Lo wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, 2007-08-30 at 12:25 -0400, Terry.Dontje_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Li-Ta Lo wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Wed, 2007-08-29 at 14:06 -0400, Terry D. Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hmmm, interesting since my version doesn't abort at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Some problem with fortran compiler/language binding? My C  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; translation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doesn't have any problem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [ollie_at_exponential ~]$ mpirun -np 4 a.out 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Target duration (seconds): 10.000000, #of msgs: 50331, usec  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; per msg:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 198.684707
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Did you oversubscribe?  I found np=10 on a 8 core system  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clogged things
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; up sufficiently.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yea, I used np 10 on a 2 proc, 2 hyper-thread system (total 4  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; threads).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this using Linux?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ollie
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2285.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2283.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2283.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2285.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2285.php">Terry D. Dontje: "Re: [OMPI devel] SM BTL hang issue"</a>
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

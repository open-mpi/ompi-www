<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 03:59:19 2008" -->
<!-- isoreceived="20080714075919" -->
<!-- sent="Mon, 14 Jul 2008 10:59:15 +0300" -->
<!-- isosent="20080714075915" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="453d39990807140059t3061a6d6i4def07279d3c83ae_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990807132334y627e0a6dh622c1fa6d07695b2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 03:59:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4336.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4334.php">Pavel Shamis (Pasha): "[OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4333.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4337.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4337.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Seems to be fixed.
<br>
<p>On 7/14/08, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../configure --with-memory-manager=ptmalloc2 --with-openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess not. I always use same configure line, and only recently I started
</span><br>
<span class="quotelev1">&gt; to see this error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/13/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you said opposite things: Lenny's command line did not
</span><br>
<span class="quotelev2">&gt;&gt; specifically ask for ibcm, but it was used anyway.  Lenny -- did you
</span><br>
<span class="quotelev2">&gt;&gt; explicitly request it somewhere else (e.g., env var or MCA param file)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect that you did not; I suspect (without looking at the code again)
</span><br>
<span class="quotelev2">&gt;&gt; that ibcm tried to select itself and failed on the ibcm_listen() call, so it
</span><br>
<span class="quotelev2">&gt;&gt; fell back to oob.  This might have to be another workaround in OMPI, perhaps
</span><br>
<span class="quotelev2">&gt;&gt; something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (ibcm_listen() fails)
</span><br>
<span class="quotelev2">&gt;&gt;   if (ibcm explicitly requested)
</span><br>
<span class="quotelev2">&gt;&gt;       print_warning()
</span><br>
<span class="quotelev2">&gt;&gt;   fail to use ibcm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has this been filed as a bug at openfabrics.org?  I don't think that I
</span><br>
<span class="quotelev2">&gt;&gt; filed it when Brad and I were testing on RoadRunner -- it would probably be
</span><br>
<span class="quotelev2">&gt;&gt; good if someone filed it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 13, 2008, at 8:56 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Pasha is right, I didn't disabled it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/13/08, Pavel Shamis (Pasha) &lt;pasha_at_[hidden]&gt; wrote: Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brad and I did some scale testing of IBCM and saw this error sometimes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  It seemed to happen with higher frequency when you increased the number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes on a single node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I talked to Sean Hefty about it, but we never figured out a definitive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cause or solution.  My best guess is that there is something wonky about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple processes simultaneously interacting with the IBCM kernel driver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from userspace; but I don't know jack about kernel stuff, so that's a total
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SWAG.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for reminding me of this issue; I admit that I had forgotten about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it.  :-(  Pasha -- should IBCM not be the default?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is not default. I guess Lenny configured it explicitly, is not it ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 13, 2008, at 7:08 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting this error sometimes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/USERS/lenny/OMPI_COMP_PATH/bin/mpirun -np 100 -hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/USERS/lenny/TESTS/COMPILERS/hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/USERS/lenny/TESTS/COMPILERS/hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch24][[32428,1],96][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c:769:ibcm_component_query]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to ib_cm_listen 10 times: rc=-1, errno=22
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello world! I'm 0 of 100 on witch2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4335/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4336.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4334.php">Pavel Shamis (Pasha): "[OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4333.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4337.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4337.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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

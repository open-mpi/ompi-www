<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 12:43:43 2008" -->
<!-- isoreceived="20080713164343" -->
<!-- sent="Sun, 13 Jul 2008 19:43:35 +0300" -->
<!-- isosent="20080713164335" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="487A30B7.1080209_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="246AA460-0626-4A5C-A75A-E7D081D4485E_at_cisco.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-13 12:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4333.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4331.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4331.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4336.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4336.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/18897">https://svn.open-mpi.org/trac/ompi/changeset/18897</a>
<br>
<p>Is it any other know IBCM issue ?
<br>
<p>Regards,
<br>
Pasha
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think you said opposite things: Lenny's command line did not 
</span><br>
<span class="quotelev1">&gt; specifically ask for ibcm, but it was used anyway.  Lenny -- did you 
</span><br>
<span class="quotelev1">&gt; explicitly request it somewhere else (e.g., env var or MCA param file)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that you did not; I suspect (without looking at the code 
</span><br>
<span class="quotelev1">&gt; again) that ibcm tried to select itself and failed on the 
</span><br>
<span class="quotelev1">&gt; ibcm_listen() call, so it fell back to oob.  This might have to be 
</span><br>
<span class="quotelev1">&gt; another workaround in OMPI, perhaps something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (ibcm_listen() fails)
</span><br>
<span class="quotelev1">&gt;    if (ibcm explicitly requested)
</span><br>
<span class="quotelev1">&gt;        print_warning()
</span><br>
<span class="quotelev1">&gt;    fail to use ibcm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has this been filed as a bug at openfabrics.org?  I don't think that I 
</span><br>
<span class="quotelev1">&gt; filed it when Brad and I were testing on RoadRunner -- it would 
</span><br>
<span class="quotelev1">&gt; probably be good if someone filed it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 13, 2008, at 8:56 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pasha is right, I didn't disabled it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/13/08, Pavel Shamis (Pasha) &lt;pasha_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Brad and I did some scale testing of IBCM and saw this error 
</span><br>
<span class="quotelev2">&gt;&gt; sometimes.  It seemed to happen with higher frequency when you 
</span><br>
<span class="quotelev2">&gt;&gt; increased the number of processes on a single node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I talked to Sean Hefty about it, but we never figured out a 
</span><br>
<span class="quotelev2">&gt;&gt; definitive cause or solution.  My best guess is that there is 
</span><br>
<span class="quotelev2">&gt;&gt; something wonky about multiple processes simultaneously interacting 
</span><br>
<span class="quotelev2">&gt;&gt; with the IBCM kernel driver from userspace; but I don't know jack 
</span><br>
<span class="quotelev2">&gt;&gt; about kernel stuff, so that's a total SWAG.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for reminding me of this issue; I admit that I had forgotten 
</span><br>
<span class="quotelev2">&gt;&gt; about it.  :-(  Pasha -- should IBCM not be the default?
</span><br>
<span class="quotelev2">&gt;&gt; It is not default. I guess Lenny configured it explicitly, is not it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pasha.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 13, 2008, at 7:08 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting this error sometimes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_COMP_PATH/bin/mpirun -np 100 -hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/TESTS/COMPILERS/hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/TESTS/COMPILERS/hello
</span><br>
<span class="quotelev2">&gt;&gt; [witch24][[32428,1],96][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c:769:ibcm_component_query] 
</span><br>
<span class="quotelev2">&gt;&gt; failed to ib_cm_listen 10 times: rc=-1, errno=22
</span><br>
<span class="quotelev2">&gt;&gt; Hello world! I'm 0 of 100 on witch2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4333.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4331.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4331.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4336.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4336.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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

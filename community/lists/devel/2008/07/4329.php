<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 08:47:02 2008" -->
<!-- isoreceived="20080713124702" -->
<!-- sent="Sun, 13 Jul 2008 15:46:55 +0300" -->
<!-- isosent="20080713124655" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="4879F93F.9020907_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E57A4CF2-6159-4C74-9517-7D4542845BC7_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-13 08:46:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4330.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4328.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4328.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4330.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4330.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Brad and I did some scale testing of IBCM and saw this error 
</span><br>
<span class="quotelev1">&gt; sometimes.  It seemed to happen with higher frequency when you 
</span><br>
<span class="quotelev1">&gt; increased the number of processes on a single node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I talked to Sean Hefty about it, but we never figured out a definitive 
</span><br>
<span class="quotelev1">&gt; cause or solution.  My best guess is that there is something wonky 
</span><br>
<span class="quotelev1">&gt; about multiple processes simultaneously interacting with the IBCM 
</span><br>
<span class="quotelev1">&gt; kernel driver from userspace; but I don't know jack about kernel 
</span><br>
<span class="quotelev1">&gt; stuff, so that's a total SWAG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for reminding me of this issue; I admit that I had forgotten 
</span><br>
<span class="quotelev1">&gt; about it.  :-(  Pasha -- should IBCM not be the default?
</span><br>
It is not default. I guess Lenny configured it explicitly, is not it ?
<br>
<p>Pasha.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 13, 2008, at 7:08 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4330.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4328.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4328.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4330.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4330.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
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

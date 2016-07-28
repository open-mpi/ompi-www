<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 07:58:02 2008" -->
<!-- isoreceived="20080713115802" -->
<!-- sent="Sun, 13 Jul 2008 07:57:53 -0400" -->
<!-- isosent="20080713115753" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="E57A4CF2-6159-4C74-9517-7D4542845BC7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990807130408x2d47604ap8c8aa7d00ec1b16_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-13 07:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4329.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4327.php">Lenny Verkhovsky: "[OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4327.php">Lenny Verkhovsky: "[OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4329.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4329.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4343.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brad and I did some scale testing of IBCM and saw this error  
<br>
sometimes.  It seemed to happen with higher frequency when you  
<br>
increased the number of processes on a single node.
<br>
<p>I talked to Sean Hefty about it, but we never figured out a definitive  
<br>
cause or solution.  My best guess is that there is something wonky  
<br>
about multiple processes simultaneously interacting with the IBCM  
<br>
kernel driver from userspace; but I don't know jack about kernel  
<br>
stuff, so that's a total SWAG.
<br>
<p>Thanks for reminding me of this issue; I admit that I had forgotten  
<br>
about it.  :-(  Pasha -- should IBCM not be the default?
<br>
<p><p><p>On Jul 13, 2008, at 7:08 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting this error sometimes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_COMP_PATH/bin/mpirun -np 100 -hostfile /home/ 
</span><br>
<span class="quotelev1">&gt; USERS/lenny/TESTS/COMPILERS/hostfile /home/USERS/lenny/TESTS/ 
</span><br>
<span class="quotelev1">&gt; COMPILERS/hello
</span><br>
<span class="quotelev1">&gt; [witch24][[32428,1],96][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_connect_ibcm.c:769:ibcm_component_query] failed to  
</span><br>
<span class="quotelev1">&gt; ib_cm_listen 10 times: rc=-1, errno=22
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 0 of 100 on witch2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4329.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4327.php">Lenny Verkhovsky: "[OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4327.php">Lenny Verkhovsky: "[OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4329.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4329.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4343.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
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

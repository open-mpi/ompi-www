<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 07:05:30 2008" -->
<!-- isoreceived="20080714110530" -->
<!-- sent="Mon, 14 Jul 2008 07:05:23 -0400" -->
<!-- isosent="20080714110523" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="4028C1EC-B7E0-430E-A476-812BD3735054_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="487A30B7.1080209_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-07-14 07:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4337.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4335.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4332.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4333.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right about when Brad and I discovered that issue, I ran out of time.   
<br>
This made IBCM more-or-less unusable for many installations -- we were  
<br>
kinda hoping for an OpenFabrics fix...
<br>
<p><p>On Jul 13, 2008, at 12:43 PM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; Fixed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/18897">https://svn.open-mpi.org/trac/ompi/changeset/18897</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it any other know IBCM issue ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think you said opposite things: Lenny's command line did not  
</span><br>
<span class="quotelev2">&gt;&gt; specifically ask for ibcm, but it was used anyway.  Lenny -- did  
</span><br>
<span class="quotelev2">&gt;&gt; you explicitly request it somewhere else (e.g., env var or MCA  
</span><br>
<span class="quotelev2">&gt;&gt; param file)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect that you did not; I suspect (without looking at the code  
</span><br>
<span class="quotelev2">&gt;&gt; again) that ibcm tried to select itself and failed on the  
</span><br>
<span class="quotelev2">&gt;&gt; ibcm_listen() call, so it fell back to oob.  This might have to be  
</span><br>
<span class="quotelev2">&gt;&gt; another workaround in OMPI, perhaps something like this:
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
<span class="quotelev2">&gt;&gt; Has this been filed as a bug at openfabrics.org?  I don't think  
</span><br>
<span class="quotelev2">&gt;&gt; that I filed it when Brad and I were testing on RoadRunner -- it  
</span><br>
<span class="quotelev2">&gt;&gt; would probably be good if someone filed it.
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
<span class="quotelev3">&gt;&gt;&gt; Pasha is right, I didn't disabled it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/13/08, Pavel Shamis (Pasha) &lt;pasha_at_[hidden]&gt; wrote:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brad and I did some scale testing of IBCM and saw this error  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sometimes.  It seemed to happen with higher frequency when you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; increased the number of processes on a single node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I talked to Sean Hefty about it, but we never figured out a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; definitive cause or solution.  My best guess is that there is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something wonky about multiple processes simultaneously  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interacting with the IBCM kernel driver from userspace; but I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't know jack about kernel stuff, so that's a total SWAG.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for reminding me of this issue; I admit that I had  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forgotten about it.  :-(  Pasha -- should IBCM not be the default?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is not default. I guess Lenny configured it explicitly, is not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it ?
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
<span class="quotelev3">&gt;&gt;&gt; /home/USERS/lenny/OMPI_COMP_PATH/bin/mpirun -np 100 -hostfile / 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; home/USERS/lenny/TESTS/COMPILERS/hostfile /home/USERS/lenny/TESTS/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPILERS/hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch24][[32428,1],96][../../../../../ompi/mca/btl/openib/connect/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_connect_ibcm.c:769:ibcm_component_query] failed to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib_cm_listen 10 times: rc=-1, errno=22
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4337.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4335.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4332.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4333.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
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

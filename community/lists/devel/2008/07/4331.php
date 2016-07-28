<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 09:19:17 2008" -->
<!-- isoreceived="20080713131917" -->
<!-- sent="Sun, 13 Jul 2008 09:13:15 -0400" -->
<!-- isosent="20080713131315" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="246AA460-0626-4A5C-A75A-E7D081D4485E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990807130556y258977e3qf0a45be6912aaedf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-07-13 09:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4332.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4330.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4330.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4332.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4332.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4333.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you said opposite things: Lenny's command line did not  
<br>
specifically ask for ibcm, but it was used anyway.  Lenny -- did you  
<br>
explicitly request it somewhere else (e.g., env var or MCA param file)?
<br>
<p>I suspect that you did not; I suspect (without looking at the code  
<br>
again) that ibcm tried to select itself and failed on the  
<br>
ibcm_listen() call, so it fell back to oob.  This might have to be  
<br>
another workaround in OMPI, perhaps something like this:
<br>
<p>if (ibcm_listen() fails)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ibcm explicitly requested)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print_warning()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fail to use ibcm
<br>
<p>Has this been filed as a bug at openfabrics.org?  I don't think that I  
<br>
filed it when Brad and I were testing on RoadRunner -- it would  
<br>
probably be good if someone filed it.
<br>
<p><p><p>On Jul 13, 2008, at 8:56 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Pasha is right, I didn't disabled it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/13/08, Pavel Shamis (Pasha) &lt;pasha_at_[hidden]&gt; wrote:  
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; Brad and I did some scale testing of IBCM and saw this error  
</span><br>
<span class="quotelev1">&gt; sometimes.  It seemed to happen with higher frequency when you  
</span><br>
<span class="quotelev1">&gt; increased the number of processes on a single node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I talked to Sean Hefty about it, but we never figured out a  
</span><br>
<span class="quotelev1">&gt; definitive cause or solution.  My best guess is that there is  
</span><br>
<span class="quotelev1">&gt; something wonky about multiple processes simultaneously interacting  
</span><br>
<span class="quotelev1">&gt; with the IBCM kernel driver from userspace; but I don't know jack  
</span><br>
<span class="quotelev1">&gt; about kernel stuff, so that's a total SWAG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for reminding me of this issue; I admit that I had forgotten  
</span><br>
<span class="quotelev1">&gt; about it.  :-(  Pasha -- should IBCM not be the default?
</span><br>
<span class="quotelev1">&gt; It is not default. I guess Lenny configured it explicitly, is not it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 13, 2008, at 7:08 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4332.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4330.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4330.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4332.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4332.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4333.php">Lenny Verkhovsky: "Re: [OMPI devel] IBCM error"</a>
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

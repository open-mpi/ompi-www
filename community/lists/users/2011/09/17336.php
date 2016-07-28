<?
$subject_val = "Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 09:02:52 2011" -->
<!-- isoreceived="20110919130252" -->
<!-- sent="Mon, 19 Sep 2011 09:02:43 -0400" -->
<!-- isosent="20110919130243" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)" -->
<!-- id="6F35C7B1-92C0-4B51-A9B3-4DBE3DD80D4E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C4217F2ABFA5D44BA8F3DCD899E5B0C8F2677006E2_at_EXCH-MBX-F.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 09:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17337.php">Sébastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17335.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>In reply to:</strong> <a href="17334.php">S&#233;bastien Boisvert: "[OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17302.php">&#186;&#194;&#206;&#196;&#198;&#189;: "[OMPI users] openmpi configure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 19, 2011, at 8:37 AM, S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; You need to call MPI_Init before calling MPI_Init_thread.
</span><br>
<p>This is incorrect -- MPI_INIT_THREAD does the same job as MPI_INIT, but it allows you to request a specific thread level.
<br>
<p><span class="quotelev1">&gt; According to <a href="http://cw.squyres.com/columns/2004-02-CW-MPI-Mechanic.pdf">http://cw.squyres.com/columns/2004-02-CW-MPI-Mechanic.pdf</a> (Past MPI Mechanic Columns written by Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; only 3 functions that can be called before calling MPI_Init and they are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - MPI_Initialized
</span><br>
<span class="quotelev1">&gt; - MPI_Finalized
</span><br>
<span class="quotelev1">&gt; - MPI_Get_version
</span><br>
<p>Ouch -- using my own words against me.  :-)
<br>
<p>I unfortunately was using shorthand here because I equate MPI_INIT and MPI_INIT_THREAD in my head.  Think of that text as &quot;before calling MPI_Init or MPI_Init_thread...&quot;
<br>
<p><span class="quotelev1">&gt; This information is also listed in Section 8.7 (page 291) in the MPI 2.2 book ( <a href="http://www.mpi-forum.org/docs/mpi-2.2/mpi22-report.pdf">http://www.mpi-forum.org/docs/mpi-2.2/mpi22-report.pdf</a> ).
</span><br>
<p>Page 291 of MPI-2.2 for me says the following:
<br>
<p>All MPI programs must contain exactly one call to an MPI initialization routine: MPI_INIT or MPI_INIT_THREAD. Subsequent calls to any initialization routines are erro- neous. The only MPI functions that may be invoked before the MPI initialization routines are called are MPI_GET_VERSION, MPI_INITIALIZED, and MPI_FINALIZED.
<br>
<p><span class="quotelev2">&gt;&gt; I build my application, and run it on 3 nodes. However, I get this error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sun Sep 18 22:25:11 2011[1,1]&lt;stderr&gt;:*** The MPI_Init_thread() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev2">&gt;&gt; Sun Sep 18 22:25:11 2011[1,1]&lt;stderr&gt;:*** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt; Sun Sep 18 22:25:11 2011[1,1]&lt;stderr&gt;:*** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt; Sun Sep 18 22:25:11 2011[1,1]&lt;stderr&gt;:[Morpheus.OTZ:9910] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<p>Hmm; this is very strange and potentially misleading.  Clearly, MPI_INIT_THREAD is allowed to be the first function.  I'm not entirely sure why you're seeing this message.
<br>
<p>Do you have the same version and configuration of Open MPI installed and found in default paths on all of your nodes?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17337.php">Sébastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17335.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>In reply to:</strong> <a href="17334.php">S&#233;bastien Boisvert: "[OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17302.php">&#186;&#194;&#206;&#196;&#198;&#189;: "[OMPI users] openmpi configure error"</a>
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

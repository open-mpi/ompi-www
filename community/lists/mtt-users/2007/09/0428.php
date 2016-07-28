<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep 22 14:36:01 2007" -->
<!-- isoreceived="20070922183601" -->
<!-- sent="Sat, 22 Sep 2007 13:34:56 -0500" -->
<!-- isosent="20070922183456" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [MTT users] MVAPICH2 configuring problems" -->
<!-- id="46F56050.8050901_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5F2FC857-6655-40F3-8189-3A7196964A6E_at_cisco.com" -->
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
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-22 14:34:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT users] Capturing stderr using &amp;shell()"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok im doing that, and everything is compiling just fine..
<br>
Thanks for the help there!
<br>
<p>-Mohamad
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 21, 2007, at 4:48 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in their make.* file however when they set LIB they had
</span><br>
<span class="quotelev2">&gt;&gt; -L${OPEN_IB_LIB} ${BLCR_LIB} ${RDMA_CM_LIBS} -libverbs -libumad - 
</span><br>
<span class="quotelev2">&gt;&gt; lpthread
</span><br>
<span class="quotelev2">&gt;&gt; i tried using the variables instead of hardcoding the
</span><br>
<span class="quotelev2">&gt;&gt; (/usr/local/ofed/lib64), but it wouldn't translate them.
</span><br>
<span class="quotelev2">&gt;&gt; mvapich2_setenv = LIBS -L${OPEN_IB_LIB} ${BLCR_LIB} ${RDMA_CM_LIBS}
</span><br>
<span class="quotelev2">&gt;&gt; -libverbs -lpthread
</span><br>
<span class="quotelev2">&gt;&gt; is there a way for setenv to do as they did with export?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you'll need to fill in whatever the values of ${OPEN_IB_LIB}  
</span><br>
<span class="quotelev1">&gt; and friends are (I think those values are local to their script).   
</span><br>
<span class="quotelev1">&gt; BLCR is the checkpoint/restart lib, so I think you can leave that out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Mohamad Chaarawi
Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
Department of Computer Science	  University of Houston
4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT users] Capturing stderr using &amp;shell()"</a>
<li><strong>Previous message:</strong> <a href="0427.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0427.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
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

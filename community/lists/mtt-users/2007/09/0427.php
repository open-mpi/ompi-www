<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 17:03:25 2007" -->
<!-- isoreceived="20070921210325" -->
<!-- sent="Fri, 21 Sep 2007 17:03:09 -0400" -->
<!-- isosent="20070921210309" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MVAPICH2 configuring problems" -->
<!-- id="5F2FC857-6655-40F3-8189-3A7196964A6E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F42E25.8040109_at_cs.uh.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-21 17:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0428.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0426.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0426.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0428.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0428.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2007, at 4:48 PM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt; in their make.* file however when they set LIB they had
</span><br>
<span class="quotelev1">&gt; -L${OPEN_IB_LIB} ${BLCR_LIB} ${RDMA_CM_LIBS} -libverbs -libumad - 
</span><br>
<span class="quotelev1">&gt; lpthread
</span><br>
<span class="quotelev1">&gt; i tried using the variables instead of hardcoding the
</span><br>
<span class="quotelev1">&gt; (/usr/local/ofed/lib64), but it wouldn't translate them.
</span><br>
<span class="quotelev1">&gt; mvapich2_setenv = LIBS -L${OPEN_IB_LIB} ${BLCR_LIB} ${RDMA_CM_LIBS}
</span><br>
<span class="quotelev1">&gt; -libverbs -lpthread
</span><br>
<span class="quotelev1">&gt; is there a way for setenv to do as they did with export?
</span><br>
<p>I think you'll need to fill in whatever the values of ${OPEN_IB_LIB}  
<br>
and friends are (I think those values are local to their script).   
<br>
BLCR is the checkpoint/restart lib, so I think you can leave that out.
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
<li><strong>Next message:</strong> <a href="0428.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0426.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0426.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0428.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0428.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
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

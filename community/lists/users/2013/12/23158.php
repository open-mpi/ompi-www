<?
$subject_val = "Re: [OMPI users] can you help me please ?thanks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  5 06:45:51 2013" -->
<!-- isoreceived="20131205114551" -->
<!-- sent="Thu, 5 Dec 2013 11:45:49 +0000" -->
<!-- isosent="20131205114549" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can you help me please ?thanks" -->
<!-- id="9D45D8F3-0BD2-44FA-88B0-6967CE2F4D4E_at_cisco.com" -->
<!-- charset="GB18030" -->
<!-- inreplyto="tencent_44573F8959DCA73934E72A1C_at_qq.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] can you help me please ?thanks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-05 06:45:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23159.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23157.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23155.php">&#186;&#250;&#209;&#238;: "[OMPI users] can you help me please ?thanks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2013, at 4:04 AM, &#186;&#250;&#209;&#238; &lt;781578278_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My ROCKS cluster includes one frontend and two  compute nodes.In my program,I have use the openmpi API  such as  MPI_Send and  MPI_Recv .  but  when I  run  the progam with 3 processors . one processor  send a message ,other receive message .here are some code. 
</span><br>
<span class="quotelev1">&gt; int*a=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev1">&gt; MPI_Send(a,number, MPI_INT, 1, 1,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int*b=(int*)malloc(sizeof(int)*number);
</span><br>
<span class="quotelev1">&gt; MPI_Recv(b, number, MPI_INT, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; when number is least than 10000,it runs fast.
</span><br>
<span class="quotelev1">&gt; but number is more than 15000,it runs slowly
</span><br>
<p>Can you precisely define &quot;fast&quot; and &quot;slowly&quot;?
<br>
<p>What is the network that MPI is using -- TCP over 1Gb ethernet?
<br>
<p>I'm guessing that Open MPI is changing protocols (from an eager send to a rendezvous send) between these two sizes, but without more information, it's hard to say.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23159.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23157.php">&#186;&#250;&#209;&#238;: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186;  can you help me please ?thanks"</a>
<li><strong>In reply to:</strong> <a href="23155.php">&#186;&#250;&#209;&#238;: "[OMPI users] can you help me please ?thanks"</a>
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

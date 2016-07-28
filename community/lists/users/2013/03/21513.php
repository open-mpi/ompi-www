<?
$subject_val = "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  7 17:42:05 2013" -->
<!-- isoreceived="20130307224205" -->
<!-- sent="Thu, 7 Mar 2013 22:42:00 +0000" -->
<!-- isosent="20130307224200" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F88252_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAU_HgYLm-0wwp2k=rG_XBh2tJQVOHcN0Kx6J9pV+d8APwp5OQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-07 17:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21514.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21512.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21512.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21514.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21514.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 7, 2013, at 5:24 PM, Limin Gu &lt;lgu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On the same system, 
</span><br>
<span class="quotelev1">&gt; with 1.6.3:
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]# mpicc --showme hello_c.c
</span><br>
<span class="quotelev1">&gt; gcc hello_c.c -I/opt/scyld/openmpi/1.6.3/gnu/include -pthread -L/opt/scyld/openmpi/1.6.3/gnu/lib -lmpi -libverbs -ldat -lrt -lnsl -lutil -lm -ltorque -lm -lnuma -lrt -lnsl -lutil -lm
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]#
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; With 1.6.4:
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]# mpicc --showme hello_c.c
</span><br>
<span class="quotelev1">&gt; gcc hello_c.c -I/opt/scyld/openmpi/1.6.4/gnu/include -pthread -L/usr/lib64 -Wl,-rpath -Wl,/usr/lib64 -L/opt/scyld/openmpi/1.6.4/gnu/lib -lmpi -libverbs -ldat -lrt -lnsl -lutil -lm -ltorque -lm -lnuma -lrt -lnsl -lutil -lm
</span><br>
<span class="quotelev1">&gt; [root_at_tesla examples]#
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So indeed, for 1.6.4, the linker is putting /usr/lib64 ahead of openmpi library path, but I don't know why. 
</span><br>
<p>Huh!  This is surprising.
<br>
<p>Can you send me the config.log from each of your 1.6.3 and 1.6.4 builds?
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
<li><strong>Next message:</strong> <a href="21514.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21512.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21512.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21514.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21514.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
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

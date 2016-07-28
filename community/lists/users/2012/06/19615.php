<?
$subject_val = "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 10:56:34 2012" -->
<!-- isoreceived="20120618145634" -->
<!-- sent="Mon, 18 Jun 2012 16:56:26 +0200" -->
<!-- isosent="20120618145626" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NVCC mpi.h: error: attribute &amp;quot;__deprecated__&amp;quot; does not take arguments" -->
<!-- id="CAGR4S9GO1FVFSnf=Zg57C+u5fgq8L5uM1VntF7cvRBt8UoE+7w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CC4BF3D3-7ADB-4E2A-8AA7-EFD9B0156652_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 10:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19616.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19614.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19614.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19617.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19617.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, definitely. Thank you, Jeff.
<br>
<p>- D.
<br>
<p>2012/6/18 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Jun 18, 2012, at 10:41 AM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; No, I'm configuring with gcc, and for openmpi-1.6 it works with nvcc
</span><br>
<span class="quotelev1">&gt; without a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I think Rolf (from Nvidia) should figure this out; I don't have
</span><br>
<span class="quotelev1">&gt; access to nvcc.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Actually, nvcc always meant to be more or less compatible with gcc, as
</span><br>
<span class="quotelev1">&gt; far as I know. I'm guessing in case of trunk nvcc is the source of the
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And with ./configure CC=nvcc ....etc. it won't build:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /home/dmikushin/forge/openmpi-trunk/opal/mca/event/libevent2019/libevent/include/event2/util.h:126:2:
</span><br>
<span class="quotelev1">&gt; error: #error &quot;No way to define ev_uint64_t&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should complain to Nvidia about that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19615/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19616.php">Jeff Squyres: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Previous message:</strong> <a href="19614.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19614.php">Jeff Squyres: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19617.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19617.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
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

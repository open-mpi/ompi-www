<?
$subject_val = "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 18:33:21 2012" -->
<!-- isoreceived="20120618223321" -->
<!-- sent="Mon, 18 Jun 2012 15:33:15 -0700" -->
<!-- isosent="20120618223315" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NVCC mpi.h: error: attribute &amp;quot;__deprecated__&amp;quot; does not take arguments" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E866C48D3_at_HQMAIL02.nvidia.com" -->
<!-- charset="koi8-r" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E866C4740_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 18:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19624.php">Ifeanyi: "[OMPI users]  checkpointing of NPB"</a>
<li><strong>Previous message:</strong> <a href="19622.php">VimalMathew_at_[hidden]: "[OMPI users] Using OpenMPI on a network"</a>
<li><strong>In reply to:</strong> <a href="19617.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19626.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19626.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dmitry:
<br>
<p>It turns out that by default in Open MPI 1.7, configure enables warnings for deprecated MPI functionality.  In Open MPI 1.6, these warnings were disabled by default.
<br>
That explains why you would not see this issue in the earlier versions of Open MPI.
<br>
<p>I assume that gcc must have added support for __attribute__((__deprecated__)) and then later on __attribute__((__deprecated__(msg))) and your version of gcc supports both of these.  (My version of gcc, 4.5.1 does not support the msg in the attribute)
<br>
<p>The version of nvcc you have does not support the &quot;msg&quot; argument so everything blows up.
<br>
<p>I suggest you configure with -disable-mpi-interface-warning which will prevent any of the deprecated attributes from being used and then things should work fine.
<br>
<p>Let me know if this fixes your problem.
<br>
<p>Rolf
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Monday, June 18, 2012 11:00 AM
<br>
To: Open MPI Users
<br>
Cc: &#239;&#204;&#197;&#199; &#242;&#209;&#194;&#203;&#207;&#215;
<br>
Subject: Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments
<br>
<p>Hi Dmitry:
<br>
Let me look into this.
<br>
<p>Rolf
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Dmitry N. Mikushin
<br>
Sent: Monday, June 18, 2012 10:56 AM
<br>
To: Open MPI Users
<br>
Cc: &#239;&#204;&#197;&#199; &#242;&#209;&#194;&#203;&#207;&#215;
<br>
Subject: Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments
<br>
<p>Yeah, definitely. Thank you, Jeff.
<br>
<p>- D.
<br>
2012/6/18 Jeff Squyres &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt;
<br>
On Jun 18, 2012, at 10:41 AM, Dmitry N. Mikushin wrote:
<br>
<p><span class="quotelev1">&gt; No, I'm configuring with gcc, and for openmpi-1.6 it works with nvcc without a problem.
</span><br>
Then I think Rolf (from Nvidia) should figure this out; I don't have access to nvcc.  :-)
<br>
<p><span class="quotelev1">&gt; Actually, nvcc always meant to be more or less compatible with gcc, as far as I know. I'm guessing in case of trunk nvcc is the source of the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And with ./configure CC=nvcc ....etc. it won't build:
</span><br>
<span class="quotelev1">&gt; /home/dmikushin/forge/openmpi-trunk/opal/mca/event/libevent2019/libevent/include/event2/util.h:126:2: error: #error &quot;No way to define ev_uint64_t&quot;
</span><br>
You should complain to Nvidia about that.
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
________________________________
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
________________________________
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19623/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19624.php">Ifeanyi: "[OMPI users]  checkpointing of NPB"</a>
<li><strong>Previous message:</strong> <a href="19622.php">VimalMathew_at_[hidden]: "[OMPI users] Using OpenMPI on a network"</a>
<li><strong>In reply to:</strong> <a href="19617.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19626.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Reply:</strong> <a href="19626.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
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

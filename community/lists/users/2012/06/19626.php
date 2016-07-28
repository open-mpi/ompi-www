<?
$subject_val = "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 07:54:43 2012" -->
<!-- isoreceived="20120619115443" -->
<!-- sent="Tue, 19 Jun 2012 13:54:37 +0200" -->
<!-- isosent="20120619115437" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NVCC mpi.h: error: attribute &amp;quot;__deprecated__&amp;quot; does not take arguments" -->
<!-- id="CAGR4S9Ep_=CjWzScvU1g2xX8WREus6i8vjnXTxgZLJt7skUbOw_at_mail.gmail.com" -->
<!-- charset="KOI8-R" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E866C48D3_at_HQMAIL02.nvidia.com" -->
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
<strong>Date:</strong> 2012-06-19 07:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19627.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19625.php">&#179;&#194;&#203;&#201;: "[OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<li><strong>In reply to:</strong> <a href="19623.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Rolf,
<br>
<p>I compiled openmpi-trunk with $ ../configure --prefix=/opt/openmpi-trunk
<br>
--disable-mpi-interface-warning --with-cuda=/opt/cuda
<br>
And that error is now gone!
<br>
<p>Thanks a lot for your assistance,
<br>
- D.
<br>
<p>2012/6/19 Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Dmitry:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It turns out that by default in Open MPI 1.7, configure enables warnings
</span><br>
<span class="quotelev1">&gt; for deprecated MPI functionality.  In Open MPI 1.6, these warnings were
</span><br>
<span class="quotelev1">&gt; disabled by default.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That explains why you would not see this issue in the earlier versions of
</span><br>
<span class="quotelev1">&gt; Open MPI.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume that gcc must have added support for
</span><br>
<span class="quotelev1">&gt; __attribute__((__deprecated__)) and then later on
</span><br>
<span class="quotelev1">&gt; __attribute__((__deprecated__(msg))) and your version of gcc supports both
</span><br>
<span class="quotelev1">&gt; of these.  (My version of gcc, 4.5.1 does not support the msg in the
</span><br>
<span class="quotelev1">&gt; attribute)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The version of nvcc you have does not support the &quot;msg&quot; argument so
</span><br>
<span class="quotelev1">&gt; everything blows up.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suggest you configure with -disable-mpi-interface-warning which will
</span><br>
<span class="quotelev1">&gt; prevent any of the deprecated attributes from being used and then things
</span><br>
<span class="quotelev1">&gt; should work fine.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if this fixes your problem.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Rolf vandeVaart
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, June 18, 2012 11:00 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* &#239;&#204;&#197;&#199; &#242;&#209;&#194;&#203;&#207;&#215;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot;
</span><br>
<span class="quotelev1">&gt; does not take arguments****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Dmitry:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me look into this.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rol*f*****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Dmitry N. Mikushin
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, June 18, 2012 10:56 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* &#239;&#204;&#197;&#199; &#242;&#209;&#194;&#203;&#207;&#215;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot;
</span><br>
<span class="quotelev1">&gt; does not take arguments****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, definitely. Thank you, Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - D.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/6/18 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2012, at 10:41 AM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; No, I'm configuring with gcc, and for openmpi-1.6 it works with nvcc
</span><br>
<span class="quotelev1">&gt; without a problem.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I think Rolf (from Nvidia) should figure this out; I don't have
</span><br>
<span class="quotelev1">&gt; access to nvcc.  :-)****
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; error: #error &quot;No way to define ev_uint64_t&quot;****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should complain to Nvidia about that.****
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev1">&gt; disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev1">&gt; of the original message. ****
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19626/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19627.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19625.php">&#179;&#194;&#203;&#201;: "[OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<li><strong>In reply to:</strong> <a href="19623.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
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

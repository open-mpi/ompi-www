<?
$subject_val = "Re: [OMPI users] OpenSHMEM + STM Linking Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 07:54:00 2016" -->
<!-- isoreceived="20160502115400" -->
<!-- sent="Mon, 2 May 2016 20:53:58 +0900" -->
<!-- isosent="20160502115358" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenSHMEM + STM Linking Problem" -->
<!-- id="CAAkFZ5uVJDXJJkWfi3r+Mj=Y2ZstdMbfm_XbZOwOyFM-JMGjAg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1462185305.S.6353.2774.f4-234-218.1462187166.6661_at_webmail.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenSHMEM + STM Linking Problem<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 07:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29066.php">Palmer, Bruce J: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="29064.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM + STM Linking Problem"</a>
<li><strong>In reply to:</strong> <a href="29064.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM + STM Linking Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ryan,
<br>
<p>I do not know if that can work, but you should at least be able to compile
<br>
your application.
<br>
if you use MPI wrappers (e.g. mpicc and friends), then you likely have to
<br>
explicitly set the stm path and library
<br>
<p>for example
<br>
mpicc -I$STM_HOME/include myapp.c -L$STM_HOME/lib -lstm
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, May 2, 2016, RYAN RAY &lt;ryan.ray_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes stm.h is a TinySTM header file. My query is that is it possible to use
</span><br>
<span class="quotelev1">&gt; both shmem and TinySTM calls
</span><br>
<span class="quotelev1">&gt; in the same code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ryan
</span><br>
<span class="quotelev1">&gt; On Mon, 02 May 2016 16:05:05 +0530 &quot;Jeff Squyres (jsquyres)&quot; wrote
</span><br>
<span class="quotelev2">&gt; &gt;stm.h is not a header file in either Open MPI or OpenSHMEM. Is that a
</span><br>
<span class="quotelev1">&gt; TinySTM header file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're having a problem with compiling TinySTM applications, you should
</span><br>
<span class="quotelev1">&gt; probably contact their
</span><br>
<span class="quotelev1">&gt; support channels -- we don't know/can't help with that. Sorry.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 2, 2016, at 5:57 AM, RYAN RAY wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my computer I have installed both OpenMPI and TinySTM. I have written
</span><br>
<span class="quotelev1">&gt; a code which has both shmem
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Software Transactional Memory(STM) calls. When I am compiling the code
</span><br>
<span class="quotelev1">&gt; using oshcc it is showing
</span><br>
<span class="quotelev1">&gt; &quot;stm.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; not found&quot;. Could anyone please help me on this matter?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; RYAN SAPTARSHI RAY
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Get your own FREE website, FREE domain &amp; FREE mobile app with Company
</span><br>
<span class="quotelev1">&gt; email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Know More &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29062.php">http://www.open-mpi.org/community/lists/users/2016/05/29062.php</a>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29063.php">http://www.open-mpi.org/community/lists/users/2016/05/29063.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle">https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle</a>?&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Get your own *FREE* website, *FREE* domain &amp; *FREE* mobile app with
</span><br>
<span class="quotelev1">&gt; Company email.
</span><br>
<span class="quotelev1">&gt; *Know More &gt;*
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://track.rediff.com/click?url=___http://businessemail.rediff.com?sc_cid=sign-1-10-13___&amp;cmp=host&amp;lnk=sign-1-10-13&amp;nsrv1=host">http://track.rediff.com/click?url=___http://businessemail.rediff.com?sc_cid=sign-1-10-13___&amp;cmp=host&amp;lnk=sign-1-10-13&amp;nsrv1=host</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29066.php">Palmer, Bruce J: "Re: [OMPI users] users Digest, Vol 3489, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="29064.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM + STM Linking Problem"</a>
<li><strong>In reply to:</strong> <a href="29064.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM + STM Linking Problem"</a>
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

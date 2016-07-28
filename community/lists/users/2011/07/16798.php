<?
$subject_val = "Re: [OMPI users] Open-MPI maffinity policy";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  2 20:06:31 2011" -->
<!-- isoreceived="20110703000631" -->
<!-- sent="Sat, 2 Jul 2011 17:06:27 -0700" -->
<!-- isosent="20110703000627" -->
<!-- name="Qasim Ali" -->
<!-- email="qasimali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI maffinity policy" -->
<!-- id="CA+35g91YYxgjykLmE-G9PiwofU6E2cgr6bzURyLbJKYUu4J=gg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC660240-F004-4CBC-A28C-F6958203ADC4_at_cisco.com" -->
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
<strong>From:</strong> Qasim Ali (<em>qasimali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-02 20:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16799.php">hi: "[OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>Previous message:</strong> <a href="16797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>In reply to:</strong> <a href="16797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-MPI maffinity policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16839.php">Jeff Squyres: "Re: [OMPI users] Open-MPI maffinity policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for following up. I have a question to clear things.
<br>
<p>1. If I do not specify any affinity in mpirun, what memory allocation policy
<br>
is used by default?
<br>
a. When it is not compiled with libnuma
<br>
b. when compiled with libnuma
<br>
<p>BTW What do you mean by &quot;internal memory&quot; in OMPI?
<br>
<p><p><p><p><p><p><p>On Sat, Jul 2, 2011 at 1:37 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Libnuma will be used automatically if you use a paffonity setting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But note that it only applies to internal memory in OMPI - I don't remember
</span><br>
<span class="quotelev1">&gt; the version offhand, but late in the 1.5 series we set the general affinity
</span><br>
<span class="quotelev1">&gt; policy for all memory (possibly the unreleased 1.5.4?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2011, at 8:31 PM, &quot;Qasim Ali&quot; &lt;qasimali_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I installed open-mpi with the libnuma library using the --with-libnuma.
</span><br>
<span class="quotelev1">&gt; Everything installed fine. When I do
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./ompi_info |grep maffinity
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.4.2)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I see two policies here. first_use and libnuma
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have two questions regarding these:
</span><br>
<span class="quotelev2">&gt; &gt; 1. Which policy will be used in my MPI application?
</span><br>
<span class="quotelev2">&gt; &gt; 2. Do I have to specify maffinity when using mpirun command or the
</span><br>
<span class="quotelev1">&gt; open-mpi runtime will automatically use the allocation policy (first_use or
</span><br>
<span class="quotelev1">&gt; libnuma?)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Qasim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-16798/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16799.php">hi: "[OMPI users] Windows: msv*.dll files presence in Release build"</a>
<li><strong>Previous message:</strong> <a href="16797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>In reply to:</strong> <a href="16797.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-MPI maffinity policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16839.php">Jeff Squyres: "Re: [OMPI users] Open-MPI maffinity policy"</a>
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

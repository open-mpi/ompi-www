<?
$subject_val = "Re: [OMPI users] checkpointing/restart of hpl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  5 03:59:50 2012" -->
<!-- isoreceived="20120605075950" -->
<!-- sent="Tue, 5 Jun 2012 17:59:45 +1000" -->
<!-- isosent="20120605075945" -->
<!-- name="Ifeanyi" -->
<!-- email="ifeanyeg2012_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing/restart of hpl" -->
<!-- id="CAMxrTy-b3h8dp5rVV3y73KBCQDPLBgcL0hPGf9GYtNZniW29aw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAN601uPP7RsEUJJ3oY6g=pDW29UPsB7zV_OEhu94Y5=F4CUfBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] checkpointing/restart of hpl<br>
<strong>From:</strong> Ifeanyi (<em>ifeanyeg2012_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-05 03:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19446.php">Matthias Jurenz: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Previous message:</strong> <a href="19444.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>In reply to:</strong> <a href="19441.php">Constantinos Makassikis: "Re: [OMPI users] checkpointing/restart of hpl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Constantinos.
<br>
<p>I have gone through the site you sent to me, however whenever I want to
<br>
enable FT, it will not be enabled.
<br>
<p>this is what I got.
<br>
/openmpi-1.6# ./configure --enable-ft-thread --with-ft=cr
<br>
--with-blcr=/usr/src/blcr-0.8.2
<br>
#FT Checkpoint support: no (checkpoint thread: no)
<br>
&quot;FT Checkpoint support: no (checkpoint thread: no)&quot;
<br>
<p>Please is there a special way to enable the FT?
<br>
<p>I also want test with real application that runs for about 30 mins but I
<br>
cannot easily lay my hands on any.
<br>
<p>Please help.
<br>
<p>Thanks in advance.
<br>
<p>Regards,
<br>
Ifeanyi
<br>
<p>On Tue, Jun 5, 2012 at 1:44 AM, Constantinos Makassikis &lt;
<br>
cmakassikis_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you may start by looking at <a href="http://www.open-mpi.org/faq/?category=ft">http://www.open-mpi.org/faq/?category=ft</a>
</span><br>
<span class="quotelev1">&gt; which leads you to
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; <a href="http://osl.iu.edu/research/ft/ompi-cr/">http://osl.iu.edu/research/ft/ompi-cr/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The latter is the most up-to-date link and probably what you are looking
</span><br>
<span class="quotelev1">&gt; for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Constantinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 4, 2012 at 3:24 AM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a new user of open mpi. I have already installed openmpi and build
</span><br>
<span class="quotelev2">&gt;&gt; hpl. I want to checkpoint/restart hpl and compare its performance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please can you point me to a useful link that will guide me through this
</span><br>
<span class="quotelev2">&gt;&gt; checkpointing of hpl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Ifeanyi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19445/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19446.php">Matthias Jurenz: "Re: [OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<li><strong>Previous message:</strong> <a href="19444.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>In reply to:</strong> <a href="19441.php">Constantinos Makassikis: "Re: [OMPI users] checkpointing/restart of hpl"</a>
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

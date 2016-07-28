<?
$subject_val = "Re: [OMPI users] Live process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 16:00:21 2012" -->
<!-- isoreceived="20121212210021" -->
<!-- sent="Thu, 13 Dec 2012 08:00:17 +1100" -->
<!-- isosent="20121212210017" -->
<!-- name="Ifeanyi" -->
<!-- email="ifeanyeg2012_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Live process migration" -->
<!-- id="CAMxrTy_DhyqgjZSDc2hG8d7HRd-6qkR6NU2fp3RS2YdzMa4DBQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjEn41pJfpWSCKVSK=vOJgwsKeQmjwFVkMh-Ocw-_KYNH5Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Live process migration<br>
<strong>From:</strong> Ifeanyi (<em>ifeanyeg2012_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 16:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20932.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Previous message:</strong> <a href="20930.php">Ifeanyi: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>In reply to:</strong> <a href="20928.php">Josh Hursey: "Re: [OMPI users] Live process migration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks Josh.
<br>
<p>On Thu, Dec 13, 2012 at 4:20 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ompi-migrate is not in the 1.6 release. It is only available in the Open
</span><br>
<span class="quotelev1">&gt; MPI trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 11, 2012 at 8:04 PM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can checkpoint but cannot migrate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when I type ~openmpi-1.6# ompi-migrate ...  I got this problem
</span><br>
<span class="quotelev2">&gt;&gt; bash: ompi-migrate: command not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please assist.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards - Ifeanyi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 12, 2012 at 3:19 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process migration was implemented in Open MPI and working in the trunk a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couple of years ago. It has not been well maintained for a few years though
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (hopefully that will change one day). So you can try it, but your results
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may vary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some details are at the link below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-migrate">http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-migrate</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Mon, Dec 10, 2012 at 10:39 PM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just wondering if live process migration of processes is supported in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open mpi?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or any idea of how to do live migration of processes pls.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ifeanyi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev1">&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20931/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20932.php">Jeff Squyres: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Previous message:</strong> <a href="20930.php">Ifeanyi: "Re: [OMPI users] openmpi-1.7rc5 cannot install when build with ./configure --with-ft=cr"</a>
<li><strong>In reply to:</strong> <a href="20928.php">Josh Hursey: "Re: [OMPI users] Live process migration"</a>
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

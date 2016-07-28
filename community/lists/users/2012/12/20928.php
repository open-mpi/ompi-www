<?
$subject_val = "Re: [OMPI users] Live process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 12:20:54 2012" -->
<!-- isoreceived="20121212172054" -->
<!-- sent="Wed, 12 Dec 2012 11:20:50 -0600" -->
<!-- isosent="20121212172050" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Live process migration" -->
<!-- id="CAANzjEn41pJfpWSCKVSK=vOJgwsKeQmjwFVkMh-Ocw-_KYNH5Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMxrTy8U0zWYzKjsLhVyUuhpWUsbJVJbQJ3VO8vDmRqBUgb7+w_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 12:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20929.php">Extreme Programming: "Re: [OMPI users] users Digest, Vol 2435, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="20927.php">Siegmar Gross: "[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>In reply to:</strong> <a href="20918.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20931.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<li><strong>Reply:</strong> <a href="20931.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ompi-migrate is not in the 1.6 release. It is only available in the Open
<br>
MPI trunk.
<br>
<p>On Tue, Dec 11, 2012 at 8:04 PM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can checkpoint but cannot migrate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I type ~openmpi-1.6# ompi-migrate ...  I got this problem
</span><br>
<span class="quotelev1">&gt; bash: ompi-migrate: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please assist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards - Ifeanyi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 12, 2012 at 3:19 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process migration was implemented in Open MPI and working in the trunk a
</span><br>
<span class="quotelev2">&gt;&gt; couple of years ago. It has not been well maintained for a few years though
</span><br>
<span class="quotelev2">&gt;&gt; (hopefully that will change one day). So you can try it, but your results
</span><br>
<span class="quotelev2">&gt;&gt; may vary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some details are at the link below:
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-migrate">http://osl.iu.edu/research/ft/ompi-cr/tools.php#ompi-migrate</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Mon, Dec 10, 2012 at 10:39 PM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just wondering if live process migration of processes is supported in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open mpi?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or any idea of how to do live migration of processes pls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ifeanyi
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
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
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20929.php">Extreme Programming: "Re: [OMPI users] users Digest, Vol 2435, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="20927.php">Siegmar Gross: "[OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>In reply to:</strong> <a href="20918.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20931.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<li><strong>Reply:</strong> <a href="20931.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
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

<?
$subject_val = "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 10:22:06 2016" -->
<!-- isoreceived="20160714142206" -->
<!-- sent="Thu, 14 Jul 2016 23:22:04 +0900" -->
<!-- isosent="20160714142204" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.10.2 and PGI 15.9" -->
<!-- id="CAAkFZ5tsug+L8k-48-Ka_i42yrBfwuNWTZbZjMPqnyRdJW9iyA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CABOsP2P1xHDEpk9E_q1tRgtskWKqdgQmbfhAaOU6KiDni5eBmw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.10.2 and PGI 15.9<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-14 10:22:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29667.php">Justin Cinkelj: "Re: [OMPI users] Ssh launch code"</a>
<li><strong>Previous message:</strong> <a href="29665.php">&#195;&#133;ke Sandgren: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29664.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29692.php">Sylvain Jeaugey: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can also simply copy slurm (omitting the .la) into an other directory,
<br>
remove the .la, and pass this directory to Open MPI
<br>
<p>an other option is to compile slurm with PGI compilers, so your *.la should
<br>
work fine.
<br>
<p>You might be luckier by rebuilding slurm with gnu compilers and
<br>
CFLAGS=-D_REENTRANT LDFLAGS=-lpthread
<br>
Hopefully slurm will not add the -pthread option
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, July 14, 2016, Michael Di Domenico &lt;mdidomenico4_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Jul 11, 2016 at 9:52 AM, &#195;&#133;ke Sandgren &lt;ake.sandgren_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Looks like you are compiling with slurm support.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If so, you need to remove the &quot;-pthread&quot; from libslurm.la and libpmi.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i don't see a configure option in slurm to disable pthreads, so i'm
</span><br>
<span class="quotelev1">&gt; not sure this is possible.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29664.php">http://www.open-mpi.org/community/lists/users/2016/07/29664.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29666/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29667.php">Justin Cinkelj: "Re: [OMPI users] Ssh launch code"</a>
<li><strong>Previous message:</strong> <a href="29665.php">&#195;&#133;ke Sandgren: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29664.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29692.php">Sylvain Jeaugey: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
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

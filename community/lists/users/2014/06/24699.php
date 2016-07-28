<?
$subject_val = "Re: [OMPI users] poor performance using the openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 01:45:48 2014" -->
<!-- isoreceived="20140625054548" -->
<!-- sent="Wed, 25 Jun 2014 08:45:46 +0300" -->
<!-- isosent="20140625054546" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] poor performance using the openib btl" -->
<!-- id="CAAO1KybOP0z8++paiuiQq0Uo4KqVuUutizN1Es+wsNC4gLDeRQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53A9FE7B.6000807_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] poor performance using the openib btl<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 01:45:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24700.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24700.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
what ofed/mofed are you using? what HCA, distro and command line?
<br>
M
<br>
<p><p>On Wed, Jun 25, 2014 at 1:40 AM, Maxime Boissonneault &lt;
<br>
maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  What are your threading options for OpenMPI (when it was built) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have seen OpenIB BTL completely lock when some level of threading is
</span><br>
<span class="quotelev1">&gt; enabled before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2014-06-24 18:18, Fischer, Greg A. a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello openmpi-users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A few weeks ago, I posted to the list about difficulties I was having
</span><br>
<span class="quotelev1">&gt; getting openib to work with Torque (see &#226;&#128;&#156;openib segfaults with Torque&#226;&#128;&#157;,
</span><br>
<span class="quotelev1">&gt; June 6, 2014). The issues were related to Torque imposing restrictive
</span><br>
<span class="quotelev1">&gt; limits on locked memory, and have since been resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, now that I&#226;&#128;&#153;ve had some time to test the applications, I&#226;&#128;&#153;m seeing
</span><br>
<span class="quotelev1">&gt; abysmal performance over the openib layer. Applications run with the tcp
</span><br>
<span class="quotelev1">&gt; btl execute about 10x faster than with the openib btl. Clearly something
</span><br>
<span class="quotelev1">&gt; still isn&#226;&#128;&#153;t quite right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried running with &#226;&#128;&#156;-mca btl_openib_verbose 1&#226;&#128;&#157;, but didn&#226;&#128;&#153;t see anything
</span><br>
<span class="quotelev1">&gt; resembling a smoking gun. How should I go about determining the source of
</span><br>
<span class="quotelev1">&gt; the problem? (This uses the same OpenMPI Version 1.8.1 / SLES11 SP3 / GCC
</span><br>
<span class="quotelev1">&gt; 4.8.3 setup discussed previously.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24697.php">http://www.open-mpi.org/community/lists/users/2014/06/24697.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24698.php">http://www.open-mpi.org/community/lists/users/2014/06/24698.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24699/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24700.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24700.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
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

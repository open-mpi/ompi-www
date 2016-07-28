<?
$subject_val = "Re: [OMPI users] poor performance using the openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 10:50:52 2014" -->
<!-- isoreceived="20140625145052" -->
<!-- sent="Wed, 25 Jun 2014 10:50:50 -0400" -->
<!-- isosent="20140625145050" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] poor performance using the openib btl" -->
<!-- id="53AAE1CA.3080307_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE159F660A85_at_SWEC9985.w-intra.net" -->
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
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 10:50:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24702.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24700.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24700.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24702.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24702.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I recovered the name of the option that caused problems for us. It is 
<br>
--enable-mpi-thread-multiple
<br>
<p>This option enables threading within OPAL, which was bugged (at least in 
<br>
1.6.x series). I don't know if it has been fixed in 1.8 series.
<br>
<p>I do not see your configure line in the attached file, to see if it was 
<br>
enabled or not.
<br>
<p>Maxime
<br>
<p>Le 2014-06-25 10:46, Fischer, Greg A. a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached are the results of &quot;grep thread&quot; on my configure output. 
</span><br>
<span class="quotelev1">&gt; There appears to be some amount of threading, but is there anything I 
</span><br>
<span class="quotelev1">&gt; should look for in particular?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see Mike Dubman's questions on the mailing list website, but his 
</span><br>
<span class="quotelev1">&gt; message didn't appear to make it to my inbox. The answers to his 
</span><br>
<span class="quotelev1">&gt; questions are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [binford:fischega] $ rpm -qa | grep ofed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ofed-doc-1.5.4.1-0.11.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ofed-kmp-default-1.5.4.1_3.0.76_0.11-0.11.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ofed-1.5.4.1-0.11.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Distro: SLES11 SP3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HCA:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ /usr/sbin/ibstat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CA 'mlx4_0'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         CA type: MT26428
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Command line (path and LD_LIBRARY_PATH are set correctly):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -x LD_LIBRARY_PATH -mca btl openib,sm,self -mca 
</span><br>
<span class="quotelev1">&gt; btl_openib_verbose 1 -np 31 $CTF_EXEC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Maxime 
</span><br>
<span class="quotelev1">&gt; Boissonneault
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, June 24, 2014 6:41 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] poor performance using the openib btl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What are your threading options for OpenMPI (when it was built) ?
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
<span class="quotelev1">&gt; Le 2014-06-24 18:18, Fischer, Greg A. a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello openmpi-users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A few weeks ago, I posted to the list about difficulties I was
</span><br>
<span class="quotelev1">&gt;     having getting openib to work with Torque (see &quot;openib segfaults
</span><br>
<span class="quotelev1">&gt;     with Torque&quot;, June 6, 2014). The issues were related to Torque
</span><br>
<span class="quotelev1">&gt;     imposing restrictive limits on locked memory, and have since been
</span><br>
<span class="quotelev1">&gt;     resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     However, now that I've had some time to test the applications, I'm
</span><br>
<span class="quotelev1">&gt;     seeing abysmal performance over the openib layer. Applications run
</span><br>
<span class="quotelev1">&gt;     with the tcp btl execute about 10x faster than with the openib
</span><br>
<span class="quotelev1">&gt;     btl. Clearly something still isn't quite right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I tried running with &quot;-mca btl_openib_verbose 1&quot;, but didn't see
</span><br>
<span class="quotelev1">&gt;     anything resembling a smoking gun. How should I go about
</span><br>
<span class="quotelev1">&gt;     determining the source of the problem? (This uses the same OpenMPI
</span><br>
<span class="quotelev1">&gt;     Version 1.8.1 / SLES11 SP3 / GCC 4.8.3 setup discussed previously.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/06/24697.php">http://www.open-mpi.org/community/lists/users/2014/06/24697.php</a>
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
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24700.php">http://www.open-mpi.org/community/lists/users/2014/06/24700.php</a>
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24701/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24702.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24700.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24700.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24702.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24702.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
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

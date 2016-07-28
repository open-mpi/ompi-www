<?
$subject_val = "Re: [OMPI users] poor performance using the openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 11:15:28 2014" -->
<!-- isoreceived="20140626151528" -->
<!-- sent="Thu, 26 Jun 2014 10:15:31 -0500" -->
<!-- isosent="20140626151531" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] poor performance using the openib btl" -->
<!-- id="7A776679-9E89-43C3-952F-B6F19442A443_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="50541BD6-4F76-4C9E-AE94-2F700E0C0245_at_cisco.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-26 11:15:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24709.php">Adam Jundt: "[OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="24707.php">Jeff Squyres (jsquyres): "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24707.php">Jeff Squyres (jsquyres): "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might try restarting the device drivers. 
<br>
<p>$pdsh -g yourcluster service openibd restart 
<br>
<p>Josh
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Jun 26, 2014, at 6:55 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just curious -- if you run standard ping-pong kinds of MPI benchmarks with the same kind of mpirun command line that you run your application, do you see the expected level of performance?  (i.e., verification that you're using the low latency transport, etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 25, 2014, at 9:52 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I looked through my configure log, and that option is not enabled. Thanks for the suggestion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 25, 2014 10:51 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] poor performance using the openib btl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I recovered the name of the option that caused problems for us. It is --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This option enables threading within OPAL, which was bugged (at least in 1.6.x series). I don't know if it has been fixed in 1.8 series. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do not see your configure line in the attached file, to see if it was enabled or not.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maxime
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 2014-06-25 10:46, Fischer, Greg A. a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Attached are the results of &#226;&#128;&#156;grep thread&#226;&#128;&#157; on my configure output. There appears to be some amount of threading, but is there anything I should look for in particular?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see Mike Dubman&#226;&#128;&#153;s questions on the mailing list website, but his message didn&#226;&#128;&#153;t appear to make it to my inbox. The answers to his questions are:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [binford:fischega] $ rpm -qa | grep ofed
</span><br>
<span class="quotelev2">&gt;&gt; ofed-doc-1.5.4.1-0.11.5
</span><br>
<span class="quotelev2">&gt;&gt; ofed-kmp-default-1.5.4.1_3.0.76_0.11-0.11.5
</span><br>
<span class="quotelev2">&gt;&gt; ofed-1.5.4.1-0.11.5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Distro: SLES11 SP3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HCA:
</span><br>
<span class="quotelev2">&gt;&gt; [binf102:fischega] $ /usr/sbin/ibstat
</span><br>
<span class="quotelev2">&gt;&gt; CA 'mlx4_0'
</span><br>
<span class="quotelev2">&gt;&gt;        CA type: MT26428
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Command line (path and LD_LIBRARY_PATH are set correctly):
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -x LD_LIBRARY_PATH -mca btl openib,sm,self -mca btl_openib_verbose 1 -np 31 $CTF_EXEC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, June 24, 2014 6:41 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] poor performance using the openib btl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What are your threading options for OpenMPI (when it was built) ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have seen OpenIB BTL completely lock when some level of threading is enabled before.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 2014-06-24 18:18, Fischer, Greg A. a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hello openmpi-users,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A few weeks ago, I posted to the list about difficulties I was having getting openib to work with Torque (see &#226;&#128;&#156;openib segfaults with Torque&#226;&#128;&#157;, June 6, 2014). The issues were related to Torque imposing restrictive limits on locked memory, and have since been resolved.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, now that I&#226;&#128;&#153;ve had some time to test the applications, I&#226;&#128;&#153;m seeing abysmal performance over the openib layer. Applications run with the tcp btl execute about 10x faster than with the openib btl. Clearly something still isn&#226;&#128;&#153;t quite right.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried running with &#226;&#128;&#156;-mca btl_openib_verbose 1&#226;&#128;&#157;, but didn&#226;&#128;&#153;t see anything resembling a smoking gun. How should I go about determining the source of the problem? (This uses the same OpenMPI Version 1.8.1 / SLES11 SP3 / GCC 4.8.3 setup discussed previously.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24697.php">http://www.open-mpi.org/community/lists/users/2014/06/24697.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev2">&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24700.php">http://www.open-mpi.org/community/lists/users/2014/06/24700.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev2">&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24702.php">http://www.open-mpi.org/community/lists/users/2014/06/24702.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24707.php">http://www.open-mpi.org/community/lists/users/2014/06/24707.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24709.php">Adam Jundt: "[OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="24707.php">Jeff Squyres (jsquyres): "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24707.php">Jeff Squyres (jsquyres): "Re: [OMPI users] poor performance using the openib btl"</a>
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

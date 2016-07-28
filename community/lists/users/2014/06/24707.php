<?
$subject_val = "Re: [OMPI users] poor performance using the openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 07:55:21 2014" -->
<!-- isoreceived="20140626115521" -->
<!-- sent="Thu, 26 Jun 2014 11:55:19 +0000" -->
<!-- isosent="20140626115519" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] poor performance using the openib btl" -->
<!-- id="50541BD6-4F76-4C9E-AE94-2F700E0C0245_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE159F660AA7_at_SWEC9985.w-intra.net" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-26 07:55:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24708.php">Joshua Ladd: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24706.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem mpi"</a>
<li><strong>In reply to:</strong> <a href="24702.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24708.php">Joshua Ladd: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24708.php">Joshua Ladd: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just curious -- if you run standard ping-pong kinds of MPI benchmarks with the same kind of mpirun command line that you run your application, do you see the expected level of performance?  (i.e., verification that you're using the low latency transport, etc.)
<br>
<p><p>On Jun 25, 2014, at 9:52 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I looked through my configure log, and that option is not enabled. Thanks for the suggestion.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 25, 2014 10:51 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] poor performance using the openib btl
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I recovered the name of the option that caused problems for us. It is --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This option enables threading within OPAL, which was bugged (at least in 1.6.x series). I don't know if it has been fixed in 1.8 series. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not see your configure line in the attached file, to see if it was enabled or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 2014-06-25 10:46, Fischer, Greg A. a &#233;crit :
</span><br>
<span class="quotelev1">&gt; Attached are the results of &#147;grep thread&#148; on my configure output. There appears to be some amount of threading, but is there anything I should look for in particular?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I see Mike Dubman&#146;s questions on the mailing list website, but his message didn&#146;t appear to make it to my inbox. The answers to his questions are:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [binford:fischega] $ rpm -qa | grep ofed
</span><br>
<span class="quotelev1">&gt; ofed-doc-1.5.4.1-0.11.5
</span><br>
<span class="quotelev1">&gt; ofed-kmp-default-1.5.4.1_3.0.76_0.11-0.11.5
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
<span class="quotelev1">&gt; [binf102:fischega] $ /usr/sbin/ibstat
</span><br>
<span class="quotelev1">&gt; CA 'mlx4_0'
</span><br>
<span class="quotelev1">&gt;         CA type: MT26428
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Command line (path and LD_LIBRARY_PATH are set correctly):
</span><br>
<span class="quotelev1">&gt; mpirun -x LD_LIBRARY_PATH -mca btl openib,sm,self -mca btl_openib_verbose 1 -np 31 $CTF_EXEC
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 24, 2014 6:41 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] poor performance using the openib btl
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What are your threading options for OpenMPI (when it was built) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have seen OpenIB BTL completely lock when some level of threading is enabled before.
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
<span class="quotelev1">&gt; Hello openmpi-users,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; A few weeks ago, I posted to the list about difficulties I was having getting openib to work with Torque (see &#147;openib segfaults with Torque&#148;, June 6, 2014). The issues were related to Torque imposing restrictive limits on locked memory, and have since been resolved.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However, now that I&#146;ve had some time to test the applications, I&#146;m seeing abysmal performance over the openib layer. Applications run with the tcp btl execute about 10x faster than with the openib btl. Clearly something still isn&#146;t quite right.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I tried running with &#147;-mca btl_openib_verbose 1&#148;, but didn&#146;t see anything resembling a smoking gun. How should I go about determining the source of the problem? (This uses the same OpenMPI Version 1.8.1 / SLES11 SP3 / GCC 4.8.3 setup discussed previously.)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24697.php">http://www.open-mpi.org/community/lists/users/2014/06/24697.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24702.php">http://www.open-mpi.org/community/lists/users/2014/06/24702.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24708.php">Joshua Ladd: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24706.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem mpi"</a>
<li><strong>In reply to:</strong> <a href="24702.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24708.php">Joshua Ladd: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24708.php">Joshua Ladd: "Re: [OMPI users] poor performance using the openib btl"</a>
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

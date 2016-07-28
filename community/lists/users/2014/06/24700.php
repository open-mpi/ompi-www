<?
$subject_val = "Re: [OMPI users] poor performance using the openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 10:46:47 2014" -->
<!-- isoreceived="20140625144647" -->
<!-- sent="Wed, 25 Jun 2014 10:46:34 -0400" -->
<!-- isosent="20140625144634" -->
<!-- name="Fischer, Greg A." -->
<!-- email="fischega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] poor performance using the openib btl" -->
<!-- id="C86C7F6037A63C44BCCD0D77E9D59BFE159F660A85_at_SWEC9985.w-intra.net" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Fischer, Greg A. (<em>fischega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 10:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24701.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24699.php">Mike Dubman: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24701.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24701.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached are the results of &quot;grep thread&quot; on my configure output. There appears to be some amount of threading, but is there anything I should look for in particular?
<br>
<p>I see Mike Dubman's questions on the mailing list website, but his message didn't appear to make it to my inbox. The answers to his questions are:
<br>
<p>[binford:fischega] $ rpm -qa | grep ofed
<br>
ofed-doc-1.5.4.1-0.11.5
<br>
ofed-kmp-default-1.5.4.1_3.0.76_0.11-0.11.5
<br>
ofed-1.5.4.1-0.11.5
<br>
<p>Distro: SLES11 SP3
<br>
<p>HCA:
<br>
[binf102:fischega] $ /usr/sbin/ibstat
<br>
CA 'mlx4_0'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CA type: MT26428
<br>
<p>Command line (path and LD_LIBRARY_PATH are set correctly):
<br>
mpirun -x LD_LIBRARY_PATH -mca btl openib,sm,self -mca btl_openib_verbose 1 -np 31 $CTF_EXEC
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime Boissonneault
<br>
Sent: Tuesday, June 24, 2014 6:41 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] poor performance using the openib btl
<br>
<p>What are your threading options for OpenMPI (when it was built) ?
<br>
<p>I have seen OpenIB BTL completely lock when some level of threading is enabled before.
<br>
<p>Maxime Boissonneault
<br>
<p><p>Le 2014-06-24 18:18, Fischer, Greg A. a &#233;crit :
<br>
Hello openmpi-users,
<br>
<p>A few weeks ago, I posted to the list about difficulties I was having getting openib to work with Torque (see &quot;openib segfaults with Torque&quot;, June 6, 2014). The issues were related to Torque imposing restrictive limits on locked memory, and have since been resolved.
<br>
<p>However, now that I've had some time to test the applications, I'm seeing abysmal performance over the openib layer. Applications run with the tcp btl execute about 10x faster than with the openib btl. Clearly something still isn't quite right.
<br>
<p>I tried running with &quot;-mca btl_openib_verbose 1&quot;, but didn't see anything resembling a smoking gun. How should I go about determining the source of the problem? (This uses the same OpenMPI Version 1.8.1 / SLES11 SP3 / GCC 4.8.3 setup discussed previously.)
<br>
<p>Thanks,
<br>
Greg
<br>
<p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p>Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24697.php">http://www.open-mpi.org/community/lists/users/2014/06/24697.php</a>
<br>
<p><p><p><p><pre>
--
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24700/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24700/threads.txt">threads.txt</a>
</ul>
<!-- attachment="threads.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24701.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24699.php">Mike Dubman: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24701.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24701.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
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

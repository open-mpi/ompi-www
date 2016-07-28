<?
$subject_val = "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 25 10:31:19 2011" -->
<!-- isoreceived="20110225153119" -->
<!-- sent="Fri, 25 Feb 2011 10:31:14 -0500" -->
<!-- isosent="20110225153114" -->
<!-- name="Xianglong Kong" -->
<!-- email="dinosaur8312_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?" -->
<!-- id="AANLkTikYZxS++3w=16xp_QJjyC2TLE_MU6kr0DoXAJK3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9B1719C8-3BBD-4DC9-AC22-0BAEDDD5AF5C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?<br>
<strong>From:</strong> Xianglong Kong (<em>dinosaur8312_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-25 10:31:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15750.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15748.php">Jeff Squyres: "Re: [OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="15746.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15750.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15750.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
.bashrc is not executed when I ssh the node. How can I let it be executed?
<br>
<p>Kong
<br>
<p>On Fri, Feb 25, 2011 at 10:04 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Ensure to check that a) your .bashrc is actually executing when you &quot;ssh othernode env&quot;, and b) if .bashrc is executing, make sure that it isn't prematurely exiting for non-interactive jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2011, at 9:58 AM, Xianglong Kong wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi 1.4.3. The cluster consist of two desktop with Intel
</span><br>
<span class="quotelev2">&gt;&gt; core 2 duo running on Ubuntu 10.04.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A weird thing that i found is that when I issued the command &quot;env |
</span><br>
<span class="quotelev2">&gt;&gt; grep LD_LIBRARY_PATH&quot; on the slave node, it showed the mpi lib path.
</span><br>
<span class="quotelev2">&gt;&gt; But when
</span><br>
<span class="quotelev2">&gt;&gt; I issude the command &quot;ssh slave-node env | grep LD_LIBRARY_PATH&quot; on
</span><br>
<span class="quotelev2">&gt;&gt; the master side to check the LD_LIBRARY_PATH of the slave node, it
</span><br>
<span class="quotelev2">&gt;&gt; showed nothing. Also, issuing the command &quot;ssh master-node env | grep
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH&quot; on the slave side would return the correct mpi lib
</span><br>
<span class="quotelev2">&gt;&gt; path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to modify the .bashrc and the /etc/ld.so.conf.d/*.conf file to
</span><br>
<span class="quotelev2">&gt;&gt; configure the LD_LIBRARY_PATH on the slave node, but it seems to work
</span><br>
<span class="quotelev2">&gt;&gt; only locally. How can I set the LD_LIBRARY_PATH on the slave node
</span><br>
<span class="quotelev2">&gt;&gt; side, so that I can get the correct path when I use &quot;ssh slave-node
</span><br>
<span class="quotelev2">&gt;&gt; env | grep LD_LIBRARY_PATH&quot; on the master side?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kong
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 23, 2011 at 5:22 PM, Bill Rankin &lt;Bill.Rankin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW: I have rarely seen this to be the issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Been bitten by similar situations before. &#160;But it may not have been OpenMPI. &#160;In any case it was a while back.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In short, programs are erroneous that do not guarantee that all their
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; outstanding requests have completed before calling finalize.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Agreed 100%. &#160;The barrier won't prevent the case of unmatched sends/receives or outstanding request handles, but if the logic is correct it does make sure that everyone completes before anyone leaves.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In any case, I also tried code #2 and it completed w/o issue on our cluster. &#160;I guess the next thing to ask Kong is regarding what version he is running and what is the platform.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -b
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Xianglong Kong
</span><br>
<span class="quotelev2">&gt;&gt; Department of Mechanical Engineering
</span><br>
<span class="quotelev2">&gt;&gt; University of Rochester
</span><br>
<span class="quotelev2">&gt;&gt; Phone: (585)520-4412
</span><br>
<span class="quotelev2">&gt;&gt; MSN: dinosaur8312_at_[hidden]
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
Xianglong Kong
Department of Mechanical Engineering
University of Rochester
Phone: (585)520-4412
MSN: dinosaur8312_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15750.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15748.php">Jeff Squyres: "Re: [OMPI users] Problems with mpicc-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="15746.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15750.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15750.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
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

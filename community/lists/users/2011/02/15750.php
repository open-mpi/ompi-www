<?
$subject_val = "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 25 10:42:25 2011" -->
<!-- isoreceived="20110225154225" -->
<!-- sent="Fri, 25 Feb 2011 10:42:20 -0500" -->
<!-- isosent="20110225154220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?" -->
<!-- id="A7DBEA88-4969-4E70-951F-F2B8CCEB0B9F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikYZxS++3w=16xp_QJjyC2TLE_MU6kr0DoXAJK3_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-25 10:42:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15751.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15749.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15749.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have a look at the bash man page, and these two FAQ items:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
<br>
<p><p>On Feb 25, 2011, at 10:31 AM, Xianglong Kong wrote:
<br>
<p><span class="quotelev1">&gt; .bashrc is not executed when I ssh the node. How can I let it be executed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kong
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 25, 2011 at 10:04 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ensure to check that a) your .bashrc is actually executing when you &quot;ssh othernode env&quot;, and b) if .bashrc is executing, make sure that it isn't prematurely exiting for non-interactive jobs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 25, 2011, at 9:58 AM, Xianglong Kong wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using openmpi 1.4.3. The cluster consist of two desktop with Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core 2 duo running on Ubuntu 10.04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A weird thing that i found is that when I issued the command &quot;env |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grep LD_LIBRARY_PATH&quot; on the slave node, it showed the mpi lib path.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I issude the command &quot;ssh slave-node env | grep LD_LIBRARY_PATH&quot; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the master side to check the LD_LIBRARY_PATH of the slave node, it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; showed nothing. Also, issuing the command &quot;ssh master-node env | grep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH&quot; on the slave side would return the correct mpi lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; path.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to modify the .bashrc and the /etc/ld.so.conf.d/*.conf file to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure the LD_LIBRARY_PATH on the slave node, but it seems to work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only locally. How can I set the LD_LIBRARY_PATH on the slave node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; side, so that I can get the correct path when I use &quot;ssh slave-node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; env | grep LD_LIBRARY_PATH&quot; on the master side?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Feb 23, 2011 at 5:22 PM, Bill Rankin &lt;Bill.Rankin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FWIW: I have rarely seen this to be the issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Been bitten by similar situations before.  But it may not have been OpenMPI.  In any case it was a while back.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In short, programs are erroneous that do not guarantee that all their
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; outstanding requests have completed before calling finalize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Agreed 100%.  The barrier won't prevent the case of unmatched sends/receives or outstanding request handles, but if the logic is correct it does make sure that everyone completes before anyone leaves.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In any case, I also tried code #2 and it completed w/o issue on our cluster.  I guess the next thing to ask Kong is regarding what version he is running and what is the platform.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; Xianglong Kong
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Mechanical Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Rochester
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: (585)520-4412
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MSN: dinosaur8312_at_[hidden]
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Xianglong Kong
</span><br>
<span class="quotelev1">&gt; Department of Mechanical Engineering
</span><br>
<span class="quotelev1">&gt; University of Rochester
</span><br>
<span class="quotelev1">&gt; Phone: (585)520-4412
</span><br>
<span class="quotelev1">&gt; MSN: dinosaur8312_at_[hidden]
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15751.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15749.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>In reply to:</strong> <a href="15749.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
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

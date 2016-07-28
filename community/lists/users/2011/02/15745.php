<?
$subject_val = "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 25 09:58:36 2011" -->
<!-- isoreceived="20110225145836" -->
<!-- sent="Fri, 25 Feb 2011 09:58:31 -0500" -->
<!-- isosent="20110225145831" -->
<!-- name="Xianglong Kong" -->
<!-- email="dinosaur8312_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?" -->
<!-- id="AANLkTikQk_UbGymmkwfx5Q9JqAwcTKLeQnRBT-+9h42O_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76097BB0C025054786EFAB631C4A2E3C0950C03F_at_MERCMBX02D.na.SAS.com" -->
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
<strong>Date:</strong> 2011-02-25 09:58:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15746.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15744.php">Ashwinkumar Dobariya: "[OMPI users] Fatal error while running the code"</a>
<li><strong>In reply to:</strong> <a href="15711.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or	receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15746.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15746.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using openmpi 1.4.3. The cluster consist of two desktop with Intel
<br>
core 2 duo running on Ubuntu 10.04.
<br>
<p>A weird thing that i found is that when I issued the command &quot;env |
<br>
grep LD_LIBRARY_PATH&quot; on the slave node, it showed the mpi lib path.
<br>
But when
<br>
I issude the command &quot;ssh slave-node env | grep LD_LIBRARY_PATH&quot; on
<br>
the master side to check the LD_LIBRARY_PATH of the slave node, it
<br>
showed nothing. Also, issuing the command &quot;ssh master-node env | grep
<br>
LD_LIBRARY_PATH&quot; on the slave side would return the correct mpi lib
<br>
path.
<br>
<p>I tried to modify the .bashrc and the /etc/ld.so.conf.d/*.conf file to
<br>
configure the LD_LIBRARY_PATH on the slave node, but it seems to work
<br>
only locally. How can I set the LD_LIBRARY_PATH on the slave node
<br>
side, so that I can get the correct path when I use &quot;ssh slave-node
<br>
env | grep LD_LIBRARY_PATH&quot; on the master side?
<br>
<p>Kong
<br>
<p>On Wed, Feb 23, 2011 at 5:22 PM, Bill Rankin &lt;Bill.Rankin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jeff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I have rarely seen this to be the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Been bitten by similar situations before. &#160;But it may not have been OpenMPI. &#160;In any case it was a while back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In short, programs are erroneous that do not guarantee that all their
</span><br>
<span class="quotelev2">&gt;&gt; outstanding requests have completed before calling finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed 100%. &#160;The barrier won't prevent the case of unmatched sends/receives or outstanding request handles, but if the logic is correct it does make sure that everyone completes before anyone leaves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In any case, I also tried code #2 and it completed w/o issue on our cluster. &#160;I guess the next thing to ask Kong is regarding what version he is running and what is the platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -b
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
<li><strong>Next message:</strong> <a href="15746.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Previous message:</strong> <a href="15744.php">Ashwinkumar Dobariya: "[OMPI users] Fatal error while running the code"</a>
<li><strong>In reply to:</strong> <a href="15711.php">Bill Rankin: "Re: [OMPI users] Beginner's question: why multiple sends or	receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15746.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15746.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
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

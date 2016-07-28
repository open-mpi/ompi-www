<?
$subject_val = "Re: [OMPI users] More on AlltoAll";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 14:09:05 2008" -->
<!-- isoreceived="20080320180905" -->
<!-- sent="Thu, 20 Mar 2008 18:08:50 +0000" -->
<!-- isosent="20080320180850" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More on AlltoAll" -->
<!-- id="1206036530.6468.73.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="47E29E6D.5060708_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] More on AlltoAll<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 14:08:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5250.php">Dave Grote: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>Previous message:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<li><strong>In reply to:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5250.php">Dave Grote: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>Reply:</strong> <a href="5250.php">Dave Grote: "Re: [OMPI users] More on AlltoAll"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2008-03-20 at 10:27 -0700, Dave Grote wrote:
<br>
<span class="quotelev1">&gt; After reading the previous discussion on AllReduce and AlltoAll, I 
</span><br>
<span class="quotelev1">&gt; thought I would ask my question. I have a case where I have data 
</span><br>
<span class="quotelev1">&gt; unevenly distributed among the processes (unevenly means that the 
</span><br>
<span class="quotelev1">&gt; processes have differing amounts of data) that I need to globally 
</span><br>
<span class="quotelev1">&gt; redistribute, resulting in a different uneven distribution. Writing the 
</span><br>
<span class="quotelev1">&gt; code to do the redistribution using AlltoAll is straightforward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem though is that there are often special cases where each 
</span><br>
<span class="quotelev1">&gt; process only needs to exchange data with it neighbors. So the question 
</span><br>
<span class="quotelev1">&gt; is that when two processors don't have data to exchange, is the OpenMPI 
</span><br>
<span class="quotelev1">&gt; AlltoAll is written in such a way so that they don't do any 
</span><br>
<span class="quotelev1">&gt; communication? Will the AlltoAll be as efficient (or at least nearly as 
</span><br>
<span class="quotelev1">&gt; efficient) as direct send/recv among neighbors?
</span><br>
<p>AlltoAll takes a single size of message and communictes that amount of
<br>
data from everybody to everybody.  You might want to look at AlltoAllw
<br>
and AlltoAllv, neither of which I have any experience of however.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5250.php">Dave Grote: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>Previous message:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<li><strong>In reply to:</strong> <a href="5248.php">Dave Grote: "[OMPI users] More on AlltoAll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5250.php">Dave Grote: "Re: [OMPI users] More on AlltoAll"</a>
<li><strong>Reply:</strong> <a href="5250.php">Dave Grote: "Re: [OMPI users] More on AlltoAll"</a>
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

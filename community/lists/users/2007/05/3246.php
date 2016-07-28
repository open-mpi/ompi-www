<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 11 07:19:37 2007" -->
<!-- isoreceived="20070511111937" -->
<!-- sent="Fri, 11 May 2007 13:19:33 +0200" -->
<!-- isosent="20070511111933" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running hpcc with a threaded BLAS" -->
<!-- id="5711d990705110419t77226513g9091dae2c11a084e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5711d990704270529p6e4e2c0fmc71583935c83f1d6_at_mail.gmail.com" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-11 07:19:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3247.php">Brock Palen: "[OMPI users] torque, and mpiBlast"</a>
<li><strong>Previous message:</strong> <a href="3245.php">Michael Creel: "[OMPI users] openmpi 1.2.1 on PK 2.6, and 64 bit version out"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3156.php">G&#246;tz Waschk: "[OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3264.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Reply:</strong> <a href="3264.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/27/07, G&#246;tz Waschk &lt;goetz.waschk_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm testing my new cluster installation with the hpcc benchmark and
</span><br>
<span class="quotelev1">&gt; openmpi 1.2.1 on RHEL5 32 bit. I have some trouble with using a
</span><br>
<span class="quotelev1">&gt; threaded BLAS implementation. I have tried ATLAS 3.7.30 compiled with
</span><br>
<span class="quotelev1">&gt; pthread support. It crashes as reported here:
</span><br>
[...]
<br>
<span class="quotelev1">&gt; I have a problem with Goto BLAS 1.14 too, the output of hpcc stops
</span><br>
<span class="quotelev1">&gt; before the HPL run, then the hpcc processes seem to do nothing,
</span><br>
<span class="quotelev1">&gt; consuming 100% CPU. If I set the maximum number of threads for Goto
</span><br>
<span class="quotelev1">&gt; BLAS to 1, hpcc is working fine again.
</span><br>
<p>Hi,
<br>
<p>replying to myself here. I've tested this a bit more. It is working
<br>
fine if I don't start hpcc from a Gridengine job. I think this is not
<br>
related to openmpi's Gridengine integration, as the problem persists
<br>
if I disable Gridengine integration on the mpirun command line. I'll
<br>
keep you informed if I find a solution.
<br>
<p>Regards, G&#246;tz Waschk
<br>
<p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3247.php">Brock Palen: "[OMPI users] torque, and mpiBlast"</a>
<li><strong>Previous message:</strong> <a href="3245.php">Michael Creel: "[OMPI users] openmpi 1.2.1 on PK 2.6, and 64 bit version out"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3156.php">G&#246;tz Waschk: "[OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3264.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Reply:</strong> <a href="3264.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
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

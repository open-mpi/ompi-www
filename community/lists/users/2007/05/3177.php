<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 04:51:56 2007" -->
<!-- isoreceived="20070502085156" -->
<!-- sent="Wed, 2 May 2007 10:51:52 +0200" -->
<!-- isosent="20070502085152" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running hpcc with a threaded BLAS" -->
<!-- id="5711d990705020151p2f9fdbbnc5e04db55db1ec85_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="11A003A8-4B75-43C8-820D-656C85DC020C_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-05-02 04:51:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3178.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3176.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3164.php">Brian Barrett: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3246.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/30/07, Brian Barrett &lt;bbarrett_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Did you configure with --without-threads or did you just not specify
</span><br>
<span class="quotelev1">&gt; any options?  Specifying --without-threads is a promise that you will
</span><br>
<span class="quotelev1">&gt; never ever have any threads anywhere in your code, especially on
</span><br>
<span class="quotelev1">&gt; Linux.
</span><br>
Hi,
<br>
<p>no, I didn't specify any option.
<br>
<p><span class="quotelev1">&gt; This is because we have to use our own memory manager code to
</span><br>
<span class="quotelev1">&gt; get around the memory pinning problem with Myrinet/GM and
</span><br>
<span class="quotelev1">&gt; InfiniBand.  You might want to configure with --without-memory-
</span><br>
<span class="quotelev1">&gt; manager and see if that helps with your crashes.
</span><br>
<p>I have tried that, same result.
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
<li><strong>Next message:</strong> <a href="3178.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3176.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3164.php">Brian Barrett: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3246.php">Götz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
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

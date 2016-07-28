<?
$subject_val = "Re: [OMPI users] OpenMPI with Gemini Interconnect";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 17:13:00 2014" -->
<!-- isoreceived="20140416211300" -->
<!-- sent="Wed, 16 Apr 2014 17:12:59 -0400" -->
<!-- isosent="20140416211259" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with Gemini Interconnect" -->
<!-- id="CA+ssbKVh=O0h96DCEzdXktFe4sam44pTizgZ23Djjtm5p27xrw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="534EEFB1.5010004_at_iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with Gemini Interconnect<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 17:12:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24229.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Previous message:</strong> <a href="24227.php">Ray Sheppard: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>In reply to:</strong> <a href="24227.php">Ray Sheppard: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24229.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see. Also, I wanted to build OpenMPI because the provided OpenMPI didn't
<br>
have Java binding. It seems at this point the only option is to use TCP in
<br>
CCM in BigRed 2 and if I remember correctly Mason and Quarry don't have IB
<br>
as well, correct?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p><p><p><p>On Wed, Apr 16, 2014 at 5:01 PM, Ray Sheppard &lt;rsheppar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;   Big Red 2 provides its own MPICH based MPI.  The only case where the
</span><br>
<span class="quotelev1">&gt; provided OpenMPI module becomes relevant is when you create a CCMLogin
</span><br>
<span class="quotelev1">&gt; instance in Cluster Compatibility Mode (CCM).  For most practical uses,
</span><br>
<span class="quotelev1">&gt; those sorts of needs are better addressed on the Quarry or Mason machines.
</span><br>
<span class="quotelev1">&gt;   When in CCM, the Gemini network is not directly accessible.  The
</span><br>
<span class="quotelev1">&gt; proposed idea is for middleware to present an interface resembling an IB
</span><br>
<span class="quotelev1">&gt; interface and use it to create a subset of the Gemini network for the CCM
</span><br>
<span class="quotelev1">&gt; virtual cluster.  Unfortunately, due to a Cray bug, case 80503, that has
</span><br>
<span class="quotelev1">&gt; not yet worked.
</span><br>
<span class="quotelev1">&gt;                         Ray
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/16/2014 4:44 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  We have a Cray XE6/XK7 supercomputer (BigRed II) and I was trying to get
</span><br>
<span class="quotelev1">&gt; OpenMPI Java binding working on it. I couldn't find a way to utilize its
</span><br>
<span class="quotelev1">&gt; Gemini interconnect, instead was running on TCP, which is inefficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I see some work has been done along these lines in [1] and wonder if you
</span><br>
<span class="quotelev1">&gt; could give some suggestions on how to build OpenMPI with Gemini support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [1]
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/papers/cug-2012/cug_2012_open_mpi_for_cray_xe_xk.pdf">https://www.open-mpi.org/papers/cug-2012/cug_2012_open_mpi_for_cray_xe_xk.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24228/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24229.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Previous message:</strong> <a href="24227.php">Ray Sheppard: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>In reply to:</strong> <a href="24227.php">Ray Sheppard: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24229.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
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

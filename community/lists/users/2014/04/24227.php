<?
$subject_val = "Re: [OMPI users] OpenMPI with Gemini Interconnect";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 17:02:03 2014" -->
<!-- isoreceived="20140416210203" -->
<!-- sent="Wed, 16 Apr 2014 17:01:37 -0400" -->
<!-- isosent="20140416210137" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with Gemini Interconnect" -->
<!-- id="534EEFB1.5010004_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ssbKW73Pg3fkameHxxUL88u5CxXXJcs5VfhiAQueFfTxEtJQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 17:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24228.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Previous message:</strong> <a href="24226.php">Saliya Ekanayake: "[OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>In reply to:</strong> <a href="24226.php">Saliya Ekanayake: "[OMPI users] OpenMPI with Gemini Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24228.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Reply:</strong> <a href="24228.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Reply:</strong> <a href="24229.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;Big Red 2 provides its own MPICH based MPI.  The only case where the 
<br>
provided OpenMPI module becomes relevant is when you create a CCMLogin 
<br>
instance in Cluster Compatibility Mode (CCM).  For most practical uses, 
<br>
those sorts of needs are better addressed on the Quarry or Mason machines.
<br>
&nbsp;&nbsp;&nbsp;When in CCM, the Gemini network is not directly accessible.  The 
<br>
proposed idea is for middleware to present an interface resembling an IB 
<br>
interface and use it to create a subset of the Gemini network for the 
<br>
CCM virtual cluster.  Unfortunately, due to a Cray bug, case 80503, that 
<br>
has not yet worked.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p>On 4/16/2014 4:44 PM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a Cray XE6/XK7 supercomputer (BigRed II) and I was trying to 
</span><br>
<span class="quotelev1">&gt; get OpenMPI Java binding working on it. I couldn't find a way to 
</span><br>
<span class="quotelev1">&gt; utilize its Gemini interconnect, instead was running on TCP, which is 
</span><br>
<span class="quotelev1">&gt; inefficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see some work has been done along these lines in [1] and wonder if 
</span><br>
<span class="quotelev1">&gt; you could give some suggestions on how to build OpenMPI with Gemini 
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/papers/cug-2012/cug_2012_open_mpi_for_cray_xe_xk.pdf">https://www.open-mpi.org/papers/cug-2012/cug_2012_open_mpi_for_cray_xe_xk.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24227/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24228.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Previous message:</strong> <a href="24226.php">Saliya Ekanayake: "[OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>In reply to:</strong> <a href="24226.php">Saliya Ekanayake: "[OMPI users] OpenMPI with Gemini Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24228.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Reply:</strong> <a href="24228.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
<li><strong>Reply:</strong> <a href="24229.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI with Gemini Interconnect"</a>
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

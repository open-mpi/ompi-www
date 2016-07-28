<?
$subject_val = "Re: [OMPI users] monitoring the status of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 10:59:21 2015" -->
<!-- isoreceived="20150317145921" -->
<!-- sent="Tue, 17 Mar 2015 07:59:16 -0700" -->
<!-- isosent="20150317145916" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] monitoring the status of processors" -->
<!-- id="7285F6D3-2FA1-42E8-BD9D-F690ACFE94F7_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3472656ffbfe890a3db093325db8931f_at_inf.ufpr.br" -->
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
<strong>Subject:</strong> Re: [OMPI users] monitoring the status of processors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-17 10:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26486.php">Damien: "Re: [OMPI users] monitoring the status of processors"</a>
<li><strong>Previous message:</strong> <a href="26484.php">etcamargo: "[OMPI users] monitoring the status of processors"</a>
<li><strong>In reply to:</strong> <a href="26484.php">etcamargo: "[OMPI users] monitoring the status of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26486.php">Damien: "Re: [OMPI users] monitoring the status of processors"</a>
<li><strong>Reply:</strong> <a href="26486.php">Damien: "Re: [OMPI users] monitoring the status of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not at the moment - at least, not integrated into OMPI at this time. We used to have sensors for such purposes in the OMPI code itself, but they weren&#226;&#128;&#153;t used and so we removed them.
<br>
<p>The resource manager generally does keep track of such things - see for example ORCM:
<br>
<p><a href="https://github.com/open-mpi/orcm/wiki">https://github.com/open-mpi/orcm/wiki</a> &lt;<a href="https://github.com/open-mpi/orcm/wiki">https://github.com/open-mpi/orcm/wiki</a>&gt;
<br>
<p>Some of us are working on an extended version of PMI (called PMIx) that will include support for requesting such info from the resource manager in its upcoming version 2.0 release (sometime this summer). So that might help, and would be portable across environments.
<br>
<p><a href="https://github.com/open-mpi/pmix/wiki">https://github.com/open-mpi/pmix/wiki</a> &lt;<a href="https://github.com/open-mpi/pmix/wiki">https://github.com/open-mpi/pmix/wiki</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On Mar 17, 2015, at 7:38 AM, etcamargo &lt;etcamargo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, All
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to know if there is a (MPI) tool for monitoring the status of a processor (and your cores) at runtime, i.e., while I am running a MPI application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's suppose that some physical processors become overloaded while a MPI application is running. I am looking for a way to know which are the &quot;busy&quot; or the &quot;slow&quot; processors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edson
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26484.php">http://www.open-mpi.org/community/lists/users/2015/03/26484.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26486.php">Damien: "Re: [OMPI users] monitoring the status of processors"</a>
<li><strong>Previous message:</strong> <a href="26484.php">etcamargo: "[OMPI users] monitoring the status of processors"</a>
<li><strong>In reply to:</strong> <a href="26484.php">etcamargo: "[OMPI users] monitoring the status of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26486.php">Damien: "Re: [OMPI users] monitoring the status of processors"</a>
<li><strong>Reply:</strong> <a href="26486.php">Damien: "Re: [OMPI users] monitoring the status of processors"</a>
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

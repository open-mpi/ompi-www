<?
$subject_val = "Re: [OMPI users] monitoring the status of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 11:02:57 2015" -->
<!-- isoreceived="20150317150257" -->
<!-- sent="Tue, 17 Mar 2015 09:02:54 -0600" -->
<!-- isosent="20150317150254" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] monitoring the status of processors" -->
<!-- id="5508421E.3060906_at_khubla.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7285F6D3-2FA1-42E8-BD9D-F690ACFE94F7_at_open-mpi.org" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-17 11:02:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26487.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Previous message:</strong> <a href="26485.php">Ralph Castain: "Re: [OMPI users] monitoring the status of processors"</a>
<li><strong>In reply to:</strong> <a href="26485.php">Ralph Castain: "Re: [OMPI users] monitoring the status of processors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ganglia might help:
<br>
<p><a href="http://ganglia.sourceforge.net/">http://ganglia.sourceforge.net/</a>
<br>
<p>Could be too high-level though.
<br>
<p>Damien
<br>
<p>On 2015-03-17 8:59 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Not at the moment - at least, not integrated into OMPI at this time. 
</span><br>
<span class="quotelev1">&gt; We used to have sensors for such purposes in the OMPI code itself, but 
</span><br>
<span class="quotelev1">&gt; they weren&#146;t used and so we removed them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The resource manager generally does keep track of such things - see 
</span><br>
<span class="quotelev1">&gt; for example ORCM:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/orcm/wiki">https://github.com/open-mpi/orcm/wiki</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of us are working on an extended version of PMI (called PMIx) 
</span><br>
<span class="quotelev1">&gt; that will include support for requesting such info from the resource 
</span><br>
<span class="quotelev1">&gt; manager in its upcoming version 2.0 release (sometime this summer). So 
</span><br>
<span class="quotelev1">&gt; that might help, and would be portable across environments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/pmix/wiki">https://github.com/open-mpi/pmix/wiki</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2015, at 7:38 AM, etcamargo &lt;etcamargo_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:etcamargo_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, All
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to know if there is a (MPI) tool for monitoring the 
</span><br>
<span class="quotelev2">&gt;&gt; status of a processor (and your cores) at runtime, i.e., while I am 
</span><br>
<span class="quotelev2">&gt;&gt; running a MPI application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's suppose that some physical processors become overloaded while a 
</span><br>
<span class="quotelev2">&gt;&gt; MPI application is running. I am looking for a way to know which are 
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;busy&quot; or the &quot;slow&quot; processors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Edson
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26484.php">http://www.open-mpi.org/community/lists/users/2015/03/26484.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26485.php">http://www.open-mpi.org/community/lists/users/2015/03/26485.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26486/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26487.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Previous message:</strong> <a href="26485.php">Ralph Castain: "Re: [OMPI users] monitoring the status of processors"</a>
<li><strong>In reply to:</strong> <a href="26485.php">Ralph Castain: "Re: [OMPI users] monitoring the status of processors"</a>
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

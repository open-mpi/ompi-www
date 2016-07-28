<?
$subject_val = "Re: [OMPI users] having an issue with paralleling jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 11:09:00 2015" -->
<!-- isoreceived="20150802150900" -->
<!-- sent="Sun, 2 Aug 2015 11:08:58 -0400" -->
<!-- isosent="20150802150858" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] having an issue with paralleling jobs" -->
<!-- id="CAB2ovotvGezkur2uY+5Misa5FVjMfM+6q8rrAOj=WGcHuJvNPA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+DemH-jL4M_Ou936DxGQmGL4Dj-S9nDDCRH7_vD4QiLySERVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] having an issue with paralleling jobs<br>
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-02 11:08:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27382.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27380.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27380.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27382.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You will see those warning the first time you connect to a new host.
<br>
If it printed the hostname from each processor, it should be OK.
<br>
<p>On Sun, Aug 2, 2015 at 11:06 AM, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I wrote 2 new node names(which I had not used before) in &quot;myhostfile&quot;.
</span><br>
<span class="quotelev1">&gt; And when I run it from login terminal, it says:
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'cx1055,10.1.5.35' (RSA) to the list of known
</span><br>
<span class="quotelev1">&gt; hosts.
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added 'cx1071,10.1.5.51' (RSA) to the list of known
</span><br>
<span class="quotelev1">&gt; hosts.
</span><br>
<span class="quotelev1">&gt;      &lt;output_data&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it ok to conclude about both node usage ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 2, 2015 at 8:19 PM, Bennet Fauber &lt;bennet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Aug 2, 2015 at 10:47 AM, abhisek Mondal &lt;abhisek.mndl_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;path&gt;/mpirun --hostfile myhostfile -np 32 hostname
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27379.php">http://www.open-mpi.org/community/lists/users/2015/08/27379.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Abhisek Mondal
</span><br>
<span class="quotelev1">&gt; Research Fellow
</span><br>
<span class="quotelev1">&gt; Structural Biology and Bioinformatics
</span><br>
<span class="quotelev1">&gt; Indian Institute of Chemical Biology
</span><br>
<span class="quotelev1">&gt; Kolkata 700032
</span><br>
<span class="quotelev1">&gt; INDIA
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27380.php">http://www.open-mpi.org/community/lists/users/2015/08/27380.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27382.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27380.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<li><strong>In reply to:</strong> <a href="27380.php">abhisek Mondal: "Re: [OMPI users] having an issue with paralleling jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27382.php">Gilles Gouaillardet: "Re: [OMPI users] having an issue with paralleling jobs"</a>
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

<?
$subject_val = "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 09:58:39 2016" -->
<!-- isoreceived="20160622135839" -->
<!-- sent="Wed, 22 Jun 2016 09:58:30 -0400" -->
<!-- isosent="20160622135830" -->
<!-- name="Mehmet Belgin" -->
<!-- email="mehmet.belgin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any suggestions?" -->
<!-- id="42bf28e6-6bd8-65c5-b6c8-9d8e4af5d43f_at_oit.gatech.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CANi1EtPR5FmJoOO+VwgVommkZOnSs_XWOV7BV1HJWd_3OSpsyA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?<br>
<strong>From:</strong> Mehmet Belgin (<em>mehmet.belgin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 09:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29512.php">Dave Love: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29510.php">Dave Love: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29450.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29510.php">Dave Love: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sreenidhi,
<br>
<p>We use predominantly Mellanox HCAs (Connect x3) all connected to a giant 
<br>
Qlogic QDR switch. We have QDR/FDR Mellanox and Qlogic switches in the 
<br>
mix, but everything is managed by a single subnet manager. We have had 
<br>
problems with Mellanox and RHEL OFED stacks both in the past due to the 
<br>
heterogeneous mix of systems.
<br>
<p>Good luck with your cluster and let me know if you have any other questions!
<br>
<p>-Mehmet
<br>
<p><p><p>On 6/15/16 5:30 AM, Sreenidhi Bharathkar Ramesh wrote:
<br>
<span class="quotelev1">&gt; hi Mehmet / Llolsten / Peter,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just curious to know what is the NIC or fabric you are using in your 
</span><br>
<span class="quotelev1">&gt; respective clusters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it is Mellanox, is it not better to use the MLNX_OFED ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This information may help us build our cluster. Hence, asking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - Sreenidhi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 15, 2016 at 1:17 PM, Peter Kjellstr&#246;m &lt;cap_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:cap_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Tue, 14 Jun 2016 13:18:33 -0400
</span><br>
<span class="quotelev1">&gt;     &quot;Llolsten Kaonga&quot; &lt;llk_at_[hidden] &lt;mailto:llk_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Hello Grigory,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I am not sure what Redhat does exactly but when you install the OS,
</span><br>
<span class="quotelev2">&gt;     &gt; there is always an InfiniBand Support module during the installation
</span><br>
<span class="quotelev2">&gt;     &gt; process. We never check/install that module when we do OS
</span><br>
<span class="quotelev2">&gt;     &gt; installations because it is usually several versions of OFED behind
</span><br>
<span class="quotelev2">&gt;     &gt; (almost obsolete).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It's not as bad as you assume. Also as I said before it's not an OFED
</span><br>
<span class="quotelev1">&gt;     version at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We (and many other medium+ HPC centers) run the redhat stack for
</span><br>
<span class="quotelev1">&gt;     reason that it is 1) good enough 2) not an extra complication for the
</span><br>
<span class="quotelev1">&gt;     system environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /Peter K (with ~3000 hpc nodes on rhel-ib for many years)
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/06/29449.php">http://www.open-mpi.org/community/lists/users/2016/06/29449.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29450.php">http://www.open-mpi.org/community/lists/users/2016/06/29450.php</a>
</span><br>
<p><pre>
-- 
=========================================
Mehmet Belgin, Ph.D. (mehmet.belgin_at_[hidden])
Scientific Computing Consultant | OIT - Academic and Research Technologies
Georgia Institute of Technology
258 4th Str NW, Rich Building, Room 326
Atlanta, GA  30332-0700
Office: (404) 385-0665
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29511/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29512.php">Dave Love: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29510.php">Dave Love: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29450.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29510.php">Dave Love: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
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

<?
$subject_val = "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any	suggestions?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 08:50:31 2016" -->
<!-- isoreceived="20160615125031" -->
<!-- sent="Wed, 15 Jun 2016 08:50:24 -0400" -->
<!-- isosent="20160615125024" -->
<!-- name="Llolsten Kaonga" -->
<!-- email="llk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any	suggestions?" -->
<!-- id="002601d1c704$7c5b4d50$7511e7f0$_at_soft-forge.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any	suggestions?<br>
<strong>From:</strong> Llolsten Kaonga (<em>llk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 08:50:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29454.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Previous message:</strong> <a href="29452.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29450.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29511.php">Mehmet Belgin: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Sreenidhi,
<br>
<p>&nbsp;
<br>
<p>In our testing, we cannot use Mellanox OFED for compliance reasons. So, we use regular OFED.
<br>
<p>&nbsp;
<br>
<p>We test both Mellanox and Intel DUTs (NICs, switches, gateways, etc).
<br>
<p>&nbsp;
<br>
<p>I thank you.
<br>
<p><pre>
--
Llolsten
 
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Sreenidhi Bharathkar Ramesh
Sent: Wednesday, June 15, 2016 5:30 AM
To: Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?
 
hi Mehmet / Llolsten / Peter,
 
Just curious to know what is the NIC or fabric you are using in your respective clusters.
 
If it is Mellanox, is it not better to use the MLNX_OFED ?
 
This information may help us build our cluster. Hence, asking.
 
Thanks,
- Sreenidhi.
 
On Wed, Jun 15, 2016 at 1:17 PM, Peter Kjellstr&#195;&#182;m &lt;cap_at_[hidden] &lt;mailto:cap_at_[hidden]&gt; &gt; wrote:
On Tue, 14 Jun 2016 13:18:33 -0400
&quot;Llolsten Kaonga&quot; &lt;llk_at_[hidden] &lt;mailto:llk_at_[hidden]&gt; &gt; wrote:
&gt; Hello Grigory,
&gt;
&gt; I am not sure what Redhat does exactly but when you install the OS,
&gt; there is always an InfiniBand Support module during the installation
&gt; process. We never check/install that module when we do OS
&gt; installations because it is usually several versions of OFED behind
&gt; (almost obsolete).
It's not as bad as you assume. Also as I said before it's not an OFED
version at all.
We (and many other medium+ HPC centers) run the redhat stack for
reason that it is 1) good enough 2) not an extra complication for the
system environment.
/Peter K (with ~3000 hpc nodes on rhel-ib for many years)
_______________________________________________
users mailing list
users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29449.php">http://www.open-mpi.org/community/lists/users/2016/06/29449.php</a>
 
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29453/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29454.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>Previous message:</strong> <a href="29452.php">Peter Kjellstr&#195;&#182;m: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29450.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29511.php">Mehmet Belgin: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
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

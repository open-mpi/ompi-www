<?
$subject_val = "Re: [OMPI users] MPI daemon error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 29 19:13:22 2010" -->
<!-- isoreceived="20100529231322" -->
<!-- sent="Sat, 29 May 2010 17:13:10 -0600" -->
<!-- isosent="20100529231310" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI daemon error" -->
<!-- id="0F20FE82-954A-4F0F-A2A8-773DFFDA226B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikiS_ADNbp85MUbRXUJNo04ebfpzHJMX_xSwm91_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI daemon error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-29 19:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13184.php">John Cary: "[OMPI users] Configuring with torque: error and patch"</a>
<li><strong>Previous message:</strong> <a href="13182.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>In reply to:</strong> <a href="13182.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 29, 2010, at 11:35 AM, Rahul Nabar wrote:
<br>
<p><span class="quotelev1">&gt; On Sat, May 29, 2010 at 8:19 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From your other note, it sounds like #3 might be the problem here. Do you have some nodes that are configured with &quot;eth0&quot; pointing to your 10.x network, and other nodes with &quot;eth0&quot; pointing to your 192.x network? I have found that having interfaces that share a name but are on different IP addresses sometimes causes OMPI to miss-connect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you randomly got some of those nodes in your allocation, that might explain why your jobs sometimes work and sometimes don't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is exactly true. On some nodes eth0 is 1Gig and on others 10Gig
</span><br>
<span class="quotelev1">&gt; and vice versa. Is that going to be a problem and is there a
</span><br>
<span class="quotelev1">&gt; workaround? I mean 192.168 is always the 10Gig and 10.0 the 1 Gig but
</span><br>
<span class="quotelev1">&gt; the correspondence with eth0 vs eth1 is not consistent. I'd have liked
</span><br>
<span class="quotelev1">&gt; that but couldn't figure out a way to guarantee the order of the eth
</span><br>
<span class="quotelev1">&gt; interfaces.
</span><br>
<p>Just set the mca param oob_tcp_if_include 192.168 and you should be okay. I forget the exact param syntax for specifying an IP network instead of an interface name, but you can get it by using
<br>
<p>ompi_info --param oob tcp
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rahul
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13184.php">John Cary: "[OMPI users] Configuring with torque: error and patch"</a>
<li><strong>Previous message:</strong> <a href="13182.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
<li><strong>In reply to:</strong> <a href="13182.php">Rahul Nabar: "Re: [OMPI users] MPI daemon error"</a>
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

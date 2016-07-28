<?
$subject_val = "Re: [OMPI users] ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 06:02:48 2009" -->
<!-- isoreceived="20090408100248" -->
<!-- sent="Wed, 8 Apr 2009 10:28:08 +0200" -->
<!-- isosent="20090408082808" -->
<!-- name="Marco" -->
<!-- email="redshift_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh MPi and program tests" -->
<!-- id="20090408082808.GA9456_at_discovery" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b87c422a0904060751v68c512fdob5db75beb5d48e4e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh MPi and program tests<br>
<strong>From:</strong> Marco (<em>redshift_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 04:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8835.php">Francesco Pietra: "[OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>Previous message:</strong> <a href="8833.php">Steve Lowder: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>In reply to:</strong> <a href="8779.php">Francesco Pietra: "[OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8836.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8836.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Francesco Pietra &lt;chiendarret_at_[hidden]&gt; [2009 04 06, 16:51]:
<br>
<span class="quotelev1">&gt; cd cytosine &amp;&amp; ./Run.cytosine
</span><br>
<span class="quotelev1">&gt; The authenticity of host deb64 (which is the hostname) (127.0.1.1)
</span><br>
<span class="quotelev1">&gt; can't be established.
</span><br>
<span class="quotelev1">&gt; RSA fingerprint .....
</span><br>
<span class="quotelev1">&gt; connecting ?
</span><br>
<p>&nbsp;This is a warning from ssh, not from OpenMPI; probably it is the first
<br>
time the system tries to connect to itself, and is asking you a
<br>
confirmation to continue.
<br>
<p>&nbsp;Please note that 127.0.1.1 seems quite strange to me, since the
<br>
'standard' ip for localhost is '127.0.0.1'. You may want to check your
<br>
/etc/hosts .
<br>
<p><span class="quotelev1">&gt; I stopped the ssh daemon, whereby tests were interrupted because deb64
</span><br>
<span class="quotelev1">&gt; (i.e., itself) could no more be accessed. 
</span><br>
<p>&nbsp;I'm afraid it wasn't a great idea... the ssh daemon is required to
<br>
receive connections to localhost; and since mpi wants to do just that,
<br>
stopping sshd won't really fix the issue ;)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8835.php">Francesco Pietra: "[OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>Previous message:</strong> <a href="8833.php">Steve Lowder: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>In reply to:</strong> <a href="8779.php">Francesco Pietra: "[OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8836.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Reply:</strong> <a href="8836.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
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

<?
$subject_val = "Re: [OMPI users] connecting to MPI from outside";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 02:04:34 2010" -->
<!-- isoreceived="20101012060434" -->
<!-- sent="Tue, 12 Oct 2010 08:04:25 +0200" -->
<!-- isosent="20101012060425" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] connecting to MPI from outside" -->
<!-- id="AANLkTinGy_-Z3efhgH6byA9u+=hgsMTN-1=B-WQVf8Yc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim37LUToD2+a1M7RsZaP7RULQzESM5ixRvre32W_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] connecting to MPI from outside<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 02:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14442.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14440.php">David Turner: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="14439.php">Mahesh Salunkhe: "[OMPI users] connecting to MPI from outside"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mahesh
<br>
<p>At least in simple cases you can use normal socket functions for this.
<br>
<p>I used this in order to change the run-time behaviour of an application
<br>
of a master-worker MPI application. I implemented a simple TCP-Server
<br>
which runs in a separate thread on the Master processor; connecting to
<br>
this server i could then send commands which changed the state of  the
<br>
master.
<br>
<p><p>Jody
<br>
<p>On Tue, Oct 12, 2010 at 6:14 AM, Mahesh Salunkhe
<br>
&lt;mahesh.salunkhe_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; &#160; Could you pl tell me how to connect a client(not in any mpi group ) &#160;to a
</span><br>
<span class="quotelev1">&gt; &#160; &#160;process in a mpi group.
</span><br>
<span class="quotelev1">&gt; &#160; &#160;(i.e. &#160;just like we do in socket programming by using connect( ) call).
</span><br>
<span class="quotelev1">&gt; &#160; Does mpi provide any call for accepting connections from outside
</span><br>
<span class="quotelev1">&gt; &#160; &#160;processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Mahesh
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14442.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14440.php">David Turner: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="14439.php">Mahesh Salunkhe: "[OMPI users] connecting to MPI from outside"</a>
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

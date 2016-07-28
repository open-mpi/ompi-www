<?
$subject_val = "Re: [OMPI users] use additional interface for openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 09:14:53 2009" -->
<!-- isoreceived="20090929131453" -->
<!-- sent="Tue, 29 Sep 2009 09:14:39 -0400" -->
<!-- isosent="20090929131439" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] use additional interface for openmpi" -->
<!-- id="9765A1C5-FBB9-4A10-A873-4A5543D78FEC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E1MsMnz-000763-FO_at_ffe1.ukr.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] use additional interface for openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 09:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10811.php">Nader Ahmadi: "[OMPI users] OMPI performace with Redhat Linux MRG"</a>
<li><strong>Previous message:</strong> <a href="10809.php">Matthieu Brucher: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>In reply to:</strong> <a href="10802.php">worldeb_at_[hidden]: "[OMPI users] use additional interface for openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10815.php">worldeb_at_[hidden]: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Reply:</strong> <a href="10815.php">worldeb_at_[hidden]: "Re: [OMPI users] use additional interface for openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI should just &quot;figure it out&quot; and do the Right Thing at run- 
<br>
time -- is that not happening?
<br>
<p><p>On Sep 28, 2009, at 4:26 PM, &lt;worldeb_at_[hidden]&gt; &lt;worldeb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to use for openmpi communication the additional ethernet  
</span><br>
<span class="quotelev1">&gt; interfaces on node and head node.
</span><br>
<span class="quotelev1">&gt; its is eth1 on nodes and eth4 on head node.
</span><br>
<span class="quotelev1">&gt; So how can I configure openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I add in config file
</span><br>
<span class="quotelev1">&gt; btl_base_include=tcp,sm,self.
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include=eth1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will it work or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And how is it working with torque batch system (daemons listen eth0  
</span><br>
<span class="quotelev1">&gt; on all nodes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10811.php">Nader Ahmadi: "[OMPI users] OMPI performace with Redhat Linux MRG"</a>
<li><strong>Previous message:</strong> <a href="10809.php">Matthieu Brucher: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>In reply to:</strong> <a href="10802.php">worldeb_at_[hidden]: "[OMPI users] use additional interface for openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10815.php">worldeb_at_[hidden]: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Reply:</strong> <a href="10815.php">worldeb_at_[hidden]: "Re: [OMPI users] use additional interface for openmpi"</a>
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

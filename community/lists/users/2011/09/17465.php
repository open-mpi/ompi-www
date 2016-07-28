<?
$subject_val = "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 28 13:20:30 2011" -->
<!-- isoreceived="20110928172030" -->
<!-- sent="Wed, 28 Sep 2011 13:20:26 -0400" -->
<!-- isosent="20110928172026" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB" -->
<!-- id="4E83575A.7010503_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EBC24CC3-7FCB-46EF-A26A-953F2B362236_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-28 13:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17466.php">Reuti: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17464.php">Brice Goglin: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17456.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17476.php">Salvatore Podda: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/27/2011 05:30 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 27, 2011, at 5:03 PM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To clarify, is IP/Ethernet required, or will IPoIB be used if it's
</span><br>
<span class="quotelev2">&gt;&gt; configured on the nodes? Would this make a difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IPoIB is fine, although I've heard concerns about its stability at scale.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The difference that it'll make is that it's generally faster than ethernet.  It never runs at wire IB speed because of the overheads involved, but it's likely to be much faster than 1GB ethernet, for example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can specify which interfaces Open MPI's OOB channel uses with the oob_tcp_if_include MCA parameter.  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun --mca oob_tcp_if_include ib0 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Jeff,
<br>
<p>Thanks for the clarification. I was just checking. Earlier in this
<br>
thread you specifically said &quot;ethernet&quot;. I suspected you meant &quot;IP&quot;, and
<br>
just wanted to be sure.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17466.php">Reuti: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17464.php">Brice Goglin: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17456.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17476.php">Salvatore Podda: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
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

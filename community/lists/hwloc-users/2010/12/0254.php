<?
$subject_val = "Re: [hwloc-users] Identifying NIC in a topology using HWLOC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 27 02:50:59 2010" -->
<!-- isoreceived="20101227075059" -->
<!-- sent="Mon, 27 Dec 2010 08:49:42 +0100" -->
<!-- isosent="20101227074942" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Identifying NIC in a topology using HWLOC" -->
<!-- id="4D184516.9020801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikOCiXWkDNkgec3OF9oP2xLivr4BjZVpf3b4j1C_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Identifying NIC in a topology using HWLOC<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-27 02:49:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/01/0255.php">Jiri Hladky: "[hwloc-users] RPM for hwloc 1.1 for Fedora and RHEL5 (via EPEL5) is out"</a>
<li><strong>Previous message:</strong> <a href="0253.php">S.A.Saktheesh: "[hwloc-users] Identifying NIC in a topology using HWLOC"</a>
<li><strong>In reply to:</strong> <a href="0253.php">S.A.Saktheesh: "[hwloc-users] Identifying NIC in a topology using HWLOC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Saktheesh,
<br>
<p>NICs do not appear in the topology yet. This is under development in the
<br>
libpci branch. You can take a look at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/svn/hwloc/branches/libpci">https://svn.open-mpi.org/svn/hwloc/branches/libpci</a>
<br>
and tell us what you think of the interface. If you're talking about
<br>
infiniband NICs, hwloc/openfabrics-verbs.h might help you in the meantime.
<br>
<p>By the way, what do you mean by &quot;distance&quot; ? There is also some work
<br>
about exposing NUMA distances (and more) in the API, see
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/svn/hwloc/branches/distances">https://svn.open-mpi.org/svn/hwloc/branches/distances</a>
<br>
<p>Brice
<br>
<p><p><p><p>Le 27/12/2010 02:32, S.A.Saktheesh a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to identify NIC in a topology with the help of HWLOC.
</span><br>
<span class="quotelev1">&gt; Is NIC considered as a object in the topology.I am able to find other
</span><br>
<span class="quotelev1">&gt; objects in the mailing list such as CORE,PU,CACHE etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to find this because I am interested in finding distance
</span><br>
<span class="quotelev1">&gt; between a Socket and a NIC in a given topology.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; With kind regards,
</span><br>
<span class="quotelev1">&gt; Saktheesh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0254/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/01/0255.php">Jiri Hladky: "[hwloc-users] RPM for hwloc 1.1 for Fedora and RHEL5 (via EPEL5) is out"</a>
<li><strong>Previous message:</strong> <a href="0253.php">S.A.Saktheesh: "[hwloc-users] Identifying NIC in a topology using HWLOC"</a>
<li><strong>In reply to:</strong> <a href="0253.php">S.A.Saktheesh: "[hwloc-users] Identifying NIC in a topology using HWLOC"</a>
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

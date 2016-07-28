<?
$subject_val = "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 12:31:16 2010" -->
<!-- isoreceived="20100105173116" -->
<!-- sent="Tue, 05 Jan 2010 12:31:07 -0500" -->
<!-- isosent="20100105173107" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3" -->
<!-- id="4B43775B.6050005_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="24da22321001050623i77116d19h83d6a48c4f3369dd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 12:31:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11696.php">Jeff Squyres: "Re: [OMPI users] How to test it"</a>
<li><strong>Previous message:</strong> <a href="11694.php">chih lee: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>In reply to:</strong> <a href="11690.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ilya
<br>
<p>1) The only thing that stands out as very different from
<br>
what I do here is your configuration flag &quot;--enable-mpi-threads&quot;.
<br>
<p>Maybe some OpenMPI pro/developer could shed some light about this,
<br>
whether that flag could be a potential source for the errors you see.
<br>
<p>Considering that when you suppress it all works fine,
<br>
I would think that the &quot;--enable-mpi-threads&quot; is the culprit.
<br>
<p>2) Another thing is that we never remove the loopback from
<br>
the btl, i.e, we do NOT do btl_tcp_if_exclude=lo,eth0,
<br>
just btl_tcp_if_exclude=eth0.
<br>
<p>I presume your choice will leave only the shared memory &quot;sm&quot;
<br>
mechanism for intra-node communication.
<br>
Not sure if this is the best choice.
<br>
<p>The OpenMPI developers may have something to say about it.
<br>
<p>3) Other differences are that we use ssh, not rsh,
<br>
but I don't think that rsh would cause a problem to you.
<br>
Also, we use Infiniband (IB) instead of Ethernet for production runs.
<br>
However, I tested OpenMPI with Ethernet and it works like
<br>
a charm too (selecting eth1 just as you did),
<br>
although not as fast as with IB.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>ilya zelenchuk wrote:
<br>
<span class="quotelev1">&gt; Happy New Year, Gus!
</span><br>
<span class="quotelev1">&gt; Yes, I'm using affinity. This is my openmpi-mca-params.conf file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; # Use RSH instead SSH
</span><br>
<span class="quotelev1">&gt; pls_rsh_agent=rsh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Turning on processor affinity
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Include using eth1.
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include=eth1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Exclude using lo and eth0.
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude=lo,eth0
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I rebuild openmpi-1.3.3 from tar and find something interesting.
</span><br>
<span class="quotelev1">&gt; If i build with this options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CC=icc CXX=icpc F77=ifort FC=ifort ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/testing/default/openmpi-1.3.3/ --disable-ipv6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All work's fine!!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if I use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CC=icc CFLAGS=&quot; -O3&quot; CXX=icpc CXXFLAGS=&quot; -O3&quot; F77=ifort FFLAGS=&quot; -O3&quot;
</span><br>
<span class="quotelev1">&gt; FC=ifort FCFLAGS=&quot; -O3&quot; ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/testing/tuning/openmpi-1.3.3/ --enable-debug
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --disable-ipv6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I get errors.
</span><br>
<span class="quotelev1">&gt; What you think?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I'm starting to investigate, what options cause OpenMPI broken.
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
<li><strong>Next message:</strong> <a href="11696.php">Jeff Squyres: "Re: [OMPI users] How to test it"</a>
<li><strong>Previous message:</strong> <a href="11694.php">chih lee: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>In reply to:</strong> <a href="11690.php">ilya zelenchuk: "Re: [OMPI users] Problem with HPL while using OpenMPI 1.3.3"</a>
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

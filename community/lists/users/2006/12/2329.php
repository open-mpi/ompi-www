<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  7 17:36:52 2006" -->
<!-- isoreceived="20061207223652" -->
<!-- sent="Thu, 7 Dec 2006 17:36:39 -0500" -->
<!-- isosent="20061207223639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI for 32/64 bit IB drivers" -->
<!-- id="C29903B6-AE79-4D95-82AE-757B46D5B38A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45788FFB.9070305_at_csiro.au" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-07 17:36:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2330.php">Jeff Squyres: "Re: [OMPI users] configure problem using g77 on OSX 10.4"</a>
<li><strong>Previous message:</strong> <a href="2328.php">Aaron McDonough: "[OMPI users]  OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>In reply to:</strong> <a href="2328.php">Aaron McDonough: "[OMPI users]  OpenMPI for 32/64 bit IB drivers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 7, 2006, at 5:04 PM, Aaron McDonough wrote:
<br>
<p><span class="quotelev1">&gt; It turns out that all our IB blades are EM64T - it's just that some  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; i686 OS's and some x86_64 OS's. So I think we'll move to all x86_64
</span><br>
<span class="quotelev1">&gt; installs on IB hosts. I guess if we make the OpenMPI a 32-bit  
</span><br>
<span class="quotelev1">&gt; build, and
</span><br>
<span class="quotelev1">&gt; link against 32-bit IB drivers (my interpretation of the release notes
</span><br>
<span class="quotelev1">&gt; is that this is supported by the TopSpin driversfor EM64T), then the
</span><br>
<span class="quotelev1">&gt; same application could run on any host i686 or x86_64. Can this be  
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<p>That *should* work, although I have not personally tried it.
<br>
<p><span class="quotelev1">&gt; with the OFED drivers? I assume that OpenMPI doesn't handle the same
</span><br>
<p>Yes, the OFED stuff should work in both 32 and 64 bit mode.  Open MPI  
<br>
doesn't care either way; it just has to be built in one or the other  
<br>
(and linked against the right support libraries).
<br>
<p><span class="quotelev1">&gt; MPI_COMM_WORLD with different interconnects (TCP vs.IB) - is that  
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<p>Actually, it will.  Open MPI will compute reachability on a per-peer- 
<br>
pair basis and use all available networks to reach them.  So if you  
<br>
only have TCP connectivity to some hosts, that's what OMPI will use.   
<br>
If you have IB between other hosts, that's what OMPI will use.
<br>
<p>However, I would *not* attempt to mix MVAPI and OFED hosts in a  
<br>
single run.  This has definitely not been tried.  It may or may not  
<br>
work; there may be a few issues with mixing different flavored IB  
<br>
hosts in the same job.
<br>
<p>Bw warned: although network heterogeneity can seem like a handy  
<br>
feature, be careful about using this with real applications.  Mixing  
<br>
slower and faster networks into a tightly-synchronized MPI  
<br>
application can effectively reduce the overall performance to that of  
<br>
the slower network.  If you have a loosely-coupled MPI application,  
<br>
this kind of scenario can be useful.  So the overall usefulness is  
<br>
likely to be application dependent.
<br>
<p>Hope that helps!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2330.php">Jeff Squyres: "Re: [OMPI users] configure problem using g77 on OSX 10.4"</a>
<li><strong>Previous message:</strong> <a href="2328.php">Aaron McDonough: "[OMPI users]  OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>In reply to:</strong> <a href="2328.php">Aaron McDonough: "[OMPI users]  OpenMPI for 32/64 bit IB drivers"</a>
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

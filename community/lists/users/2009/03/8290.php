<?
$subject_val = "Re: [OMPI users] metahosts (like in MP-MPICH)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 11:56:58 2009" -->
<!-- isoreceived="20090304165658" -->
<!-- sent="Wed, 4 Mar 2009 11:56:50 -0500" -->
<!-- isosent="20090304165650" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] metahosts (like in MP-MPICH)" -->
<!-- id="AEBD0965-96A6-4D78-88CD-FAF43D6608C2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AEAE73.8050103_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] metahosts (like in MP-MPICH)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 11:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8291.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>Previous message:</strong> <a href="8289.php">Ralph Castain: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8288.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8291.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>Reply:</strong> <a href="8291.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 4, 2009, at 11:38 AM, Yury Tarasievich wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm not quite sure what an MP-MPICH meta host is.
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI allows you to specify multiple hosts in a hostfile and run  
</span><br>
<span class="quotelev2">&gt;&gt; a single MPI job across all of them, assuming they're connected by  
</span><br>
<span class="quotelev2">&gt;&gt; at least some common TCP network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I need is one MPI job put for distributed computation on  
</span><br>
<span class="quotelev1">&gt; several actual machines, connected by TCP/IP (so, kind of cluster  
</span><br>
<span class="quotelev1">&gt; computation). Machines may have heterogenous OSes on them (MP-MPICH  
</span><br>
<span class="quotelev1">&gt; accounts for that with its HETERO option).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm somewhat new to MPI. It's possible, that what I describe is an  
</span><br>
<span class="quotelev1">&gt; inherent option of MPI implementations. Please advise.
</span><br>
<p><p>Yes, pretty much all MPI implementations support a single job spanning  
<br>
multiple hosts.
<br>
<p>Open MPI also supports heterogeneity of data representation if you use  
<br>
the --enable-heterogeneous flag to OMPI's configure.
<br>
<p>In general, you need both OMPI and your application compiled natively  
<br>
for each platform.  One easy way to do this is to install Open MPI  
<br>
locally on each node in the same filesystem location (e.g., /opt/ 
<br>
openmpi-&lt;version&gt;).  You also want exactly the same version of Open  
<br>
MPI on all nodes.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8291.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>Previous message:</strong> <a href="8289.php">Ralph Castain: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8288.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8291.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
<li><strong>Reply:</strong> <a href="8291.php">Yury Tarasievich: "Re: [OMPI users] metahosts (like in MP-MPICH)"</a>
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

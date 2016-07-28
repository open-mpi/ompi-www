<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 21:43:19 2007" -->
<!-- isoreceived="20070614014319" -->
<!-- sent="Wed, 13 Jun 2007 21:43:03 -0400" -->
<!-- isosent="20070614014303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041" -->
<!-- id="122B12C1-0882-4005-8CBD-CE4E8ACB17AC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070613174836.GE6519_at_minantech.com" -->
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
<strong>Date:</strong> 2007-06-13 21:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1710.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1708.php">Jeff Squyres: "[OMPI devel] openib connection semantics"</a>
<li><strong>In reply to:</strong> <a href="1693.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1710.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1710.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1711.php">Patrick Geoffray: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1716.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 13, 2007, at 1:48 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 3. Use a file to convey this information, because it's better suited
</span><br>
<span class="quotelev2">&gt;&gt; to what we're trying to do (vs. MCA parameters).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seriously, why is a file a bad thing?  The file can list interfaces
</span><br>
<span class="quotelev2">&gt;&gt; by hostname.  For example, if you have a heterogeneous setup, what's
</span><br>
<span class="quotelev2">&gt;&gt; to say that having btl_tcp_bandwidth_eth0 is not the same across all
</span><br>
<span class="quotelev2">&gt;&gt; your hosts?  That is -- the MCA parameters you're providing are not
</span><br>
<span class="quotelev2">&gt;&gt; sufficient for a true heterogeneous environment, anyway.
</span><br>
<span class="quotelev1">&gt; I don't feel strongly one way or the other. The command line approach
</span><br>
<span class="quotelev1">&gt; was much easier to implement. Is it possible to have one parser for  
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev1">&gt; BTLs or each one will have to implement different one?a
</span><br>
<p>Let's take a step back and see exactly what we *want*.  Then we can  
<br>
talk about how to have an interface for it.
<br>
<p>1. We want to be able to specify bandwidth/latency values for BTL  
<br>
modules (and possibly other kinds of modules).
<br>
<p>2. For the common case, we want to be able to specify a single [set  
<br>
of] value[s] that apply uniformly across the MPI job.  This already  
<br>
exists in MCA parameters today.
<br>
<p>3. For another common case, we want to be able to specify a small set  
<br>
of values that apply uniformly to specific interfaces across the MPI  
<br>
job (e.g., specify different values for eth0 and eth1).  This exists  
<br>
today in variable MCA parameters.
<br>
<p>4. For another case (possibly uncommon?), we want to be able to  
<br>
specify different values for different interfaces on different  
<br>
hosts.  This exists today by having different MCA parameter files on  
<br>
each host and pairing it with #3.  It's not exactly convenient, but  
<br>
it works.
<br>
<p>If we agree that these are the things that we want, then I think #3  
<br>
is the contentious area (I don't like variable MCA params that don't  
<br>
show up in ompi_info), and #4 could certainly be made more convenient  
<br>
(note that I previously said #4 was not possible, but I thought about  
<br>
it more and realized that it *is*; it's just not convenient as, for  
<br>
example, a single file that lists all hosts and their individual  
<br>
settings that can be replicated across a cluster).  Indeed #3 could  
<br>
be combined with a more-convenient #4 and solve all the problems.
<br>
<p>If you can agree to that, then I propose a simple INI-style text file  
<br>
that aggregates MCA parameters based on hostname.  The INI section  
<br>
names are hostnames, but we support simple, shell-like regular  
<br>
expressions (e.g., * and ?).  Consider mca-params.ini:
<br>
<p>[head_node]
<br>
btl_tcp_if_include = eth1
<br>
<p>[compute_nodes01*]
<br>
btl_tcp_if_include = eth0,ib0
<br>
btl_tcp_bandwidth = eth0=1000,ib0=2000
<br>
<p>[compute_nodes02*]
<br>
btl_tcp_if_include = eth0,myri0
<br>
btl_tcp_bandwidth = eth0=1000,mryi0=2000
<br>
<p>More specifically, I'm proposing two things:
<br>
<p>1. The MCA system itself accept this ini-style file that keys off  
<br>
hostnames so that this works across all of Open MPI.
<br>
<p>2. The bandwidth/latency MCA params accept values in two forms:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- a single integer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- comma-delimited list of &lt;interface&gt;=&lt;value&gt; pairs
<br>
<p>Thoughts?
<br>
<p><span class="quotelev1">&gt; BTW ompi_info will not parse this file too, so it will not be able to
</span><br>
<span class="quotelev1">&gt; present correct bandwidth/latency value just like command line  
</span><br>
<span class="quotelev1">&gt; solution.
</span><br>
<span class="quotelev1">&gt; For heterogeneous config file is the only option of cause.
</span><br>
<p>True.  But I think it's a reasonable expectation that ompi_info  
<br>
should show all user-available MCA parameters.  It doesn't claim to  
<br>
show data files (like the HCA params file).
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
<li><strong>Next message:</strong> <a href="1710.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Previous message:</strong> <a href="1708.php">Jeff Squyres: "[OMPI devel] openib connection semantics"</a>
<li><strong>In reply to:</strong> <a href="1693.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1710.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1710.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1711.php">Patrick Geoffray: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<li><strong>Reply:</strong> <a href="1716.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
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

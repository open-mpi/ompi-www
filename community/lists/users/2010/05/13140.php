<?
$subject_val = "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 09:17:59 2010" -->
<!-- isoreceived="20100524131759" -->
<!-- sent="Mon, 24 May 2010 09:17:54 -0400" -->
<!-- isosent="20100524131754" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t" -->
<!-- id="39573874-5642-4C6E-83A6-0D09143C3BB1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BF42BB5.9050605_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 09:17:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13141.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13139.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>In reply to:</strong> <a href="13091.php">Michael E. Thomadakis: "[OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2010, at 2:19 PM, Michael E. Thomadakis wrote:
<br>
<p><span class="quotelev1">&gt; I would like to build OMPI V1.4.2 and make it available to our users at the 
</span><br>
<span class="quotelev1">&gt; Supercomputing Center at TAMU. Our system is a 2-socket, 4-core Nehalem 
</span><br>
<span class="quotelev1">&gt; @2.8GHz, 24GiB DRAM / node, 324 nodes connected to 4xQDR Voltaire fabric, 
</span><br>
<span class="quotelev1">&gt; CentOS/RHEL 5.4.
</span><br>
<p>Sorry for the delay in replying...
<br>
<p><span class="quotelev1">&gt; 1) high-resolution timers: how do I specify the HRT linux timers in the
</span><br>
<span class="quotelev1">&gt; 	--with-timer=TYPE
</span><br>
<span class="quotelev1">&gt;  line of ./configure ?
</span><br>
<p>You shouldn't need to do anything; the &quot;linux&quot; timer component of Open MPI should get automatically selected.  You should be able to see this in the stdout of Open MPI's &quot;configure&quot;, and/or if you run ompi_info | grep timer -- there should only be one entry: linux.
<br>
<p><span class="quotelev1">&gt; 2) I have installed blcr V0.8.2 but when I try to built OMPI and I point to the 
</span><br>
<span class="quotelev1">&gt; full installation it complains it cannot find it. Note that I build BLCR with 
</span><br>
<span class="quotelev1">&gt; GCC but I am building OMPI with Intel compilers (V11.1)
</span><br>
<p>Can you be more specific here?
<br>
<p><span class="quotelev1">&gt; 3) Does OMPI by default use SHM for intra-node message IPC but revert to IB for 
</span><br>
<span class="quotelev1">&gt; inter-node ?
</span><br>
<p>Yes.  You can force this, but it's usually unnecessary:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --mca btl sm,self,openib
<br>
<p>sm: shared memory transport
<br>
self: process loopback transport (i.e., send to self; not send to others on the same host)
<br>
openib: OpenFabrics transport
<br>
<p><span class="quotelev1">&gt; 4) How could I select the high-speed transport, say DAPL or OFED IB verbs ? Is 
</span><br>
<span class="quotelev1">&gt; there any preference as to the specific high-speed transport over QDR IB?
</span><br>
<p>openib is the preferred Open MPI plugin (the name is somewhat outdated, but it's modern OpenFabrics verbs -- see <a href="http://www.open-mpi.org/faq/?category=openfabrics#why-openib-name">http://www.open-mpi.org/faq/?category=openfabrics#why-openib-name</a>).
<br>
<p><span class="quotelev1">&gt; 5) When we launch MPI jobs via PBS/TORQUE do we have control on the task and 
</span><br>
<span class="quotelev1">&gt; thread placement on nodes/cores ?
</span><br>
<p>Yes.  Check out the man page for mpirun(1).
<br>
<p><span class="quotelev1">&gt; 6) Can we suspend/restart cleanly OMPI jobs with the above scheduler ? Any 
</span><br>
<span class="quotelev1">&gt; caveats on suspension / resumption of OMPI jobs ?
</span><br>
<p>I'll let Josh handle this -- he's the checkpoint/restart guy.
<br>
<p><span class="quotelev1">&gt; 7) Do you have any performance data comparing OMPI vs say MVAPICVHv2 and 
</span><br>
<span class="quotelev1">&gt; IntelMPI ? This is not a political issue since I am groing to be providing all 
</span><br>
<span class="quotelev1">&gt; these MPI stacks to our users.
</span><br>
<p>Heh; that's a loaded question no matter how you ask it.  ;-)
<br>
<p>The truth is that every MPI will claim to be the greatest (you should see the marketing charts that Intel MPI puts out at the Sonoma OpenFabrics workshop every year!).  We're all on-par with each other for all the major metrics.  Some MPI's will choose to certain metrics that others choose not to optimize -- so you can always find a benchmark that shows &quot;this MPI is great and the others suck!!&quot; (which is what the marketing guys capitalize on).  Each MPI has its benefits and drawbacks; we think Open MPI has great performance *and* a very large feature set that the other MPI's do not have.  These are among the reasons we continue to develop and extend Open MPI.
<br>
<p>That's a non-answer way of saying that we don't really want to get in a benchmarks war here on a google-able mailing list. :-)  It is probably best to do a little benchmarking yourself with apps that you know, understand, and control, in your environment.  See what works best for you.  Be sure / be careful to run apples-to-apples comparisons; if you're running optimized variants of MPI x, be sure to also run optimized variants of MPI y and z, too.  And so on.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13141.php">Yves Caniou: "Re: [OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13139.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefined symbol:orte_xml_fp"</a>
<li><strong>In reply to:</strong> <a href="13091.php">Michael E. Thomadakis: "[OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
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

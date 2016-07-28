<?
$subject_val = "Re: [OMPI devel] btl tcp port to xensocket";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 09:24:24 2008" -->
<!-- isoreceived="20080109142424" -->
<!-- sent="Wed, 9 Jan 2008 15:24:01 +0100" -->
<!-- isosent="20080109142401" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl tcp port to xensocket" -->
<!-- id="20080109142401.GT11368_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="247652.66285.qm_at_web52107.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl tcp port to xensocket<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-09 09:24:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2949.php">Rayson Ho: "[OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="2947.php">Muhammad Atif: "[OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2947.php">Muhammad Atif: "[OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2960.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Reply:</strong> <a href="2960.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 08, 2008 at 10:51:45PM -0800, Muhammad Atif wrote:
<br>
<p><span class="quotelev1">&gt; I am planning to port tcp component to xensocket, which is a fast
</span><br>
<span class="quotelev1">&gt; interdomain communication mechanism for guest domains in Xen. I may
</span><br>
<p>Just to get things right: You first partition your SMP/Multicore system
<br>
with Xen, and then want to re-combine it later for MPI communication?
<br>
<p>Wouldn't it be easier to leave the unpartitioned host alone and use
<br>
shared memory communication instead?
<br>
<p><span class="quotelev1">&gt; As per design, and the fact that these sockets are not normal sockets,
</span><br>
<span class="quotelev1">&gt; I have to pass certain information (basically memory references, guest
</span><br>
<span class="quotelev1">&gt; domain info etc) to other peers once sockets have been created. I
</span><br>
<p>There's ORTE, the runtime environment. It employs OOB/tcp to have a so
<br>
called out-of-band channel. ORTE also provides a general purpose
<br>
registry (GPR).
<br>
<p>Once a TCP connection between the headnode process and all other peers
<br>
is established, you can store your required information in the GPR.
<br>
<p><span class="quotelev1">&gt; understand that mca_pml_base_modex_send and recv (or simply using
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_component_exchange) can be used to exchange information,
</span><br>
<p>Use mca_pml_base_modex_send (now ompi_modex_send) and encode your
<br>
required information. It's getting stored in the GPR. Read it back with
<br>
mca_pml_base_modex_recv (ompi_modex_recv), as it is done in
<br>
mca_btl_tcp_component_exchange and mca_btl_tcp_proc_create.
<br>
<p><span class="quotelev1">&gt; but I cannot seem to get them to communicate. So to put my question in
</span><br>
<span class="quotelev1">&gt; a very simple way..... I want to create a socket structure containing
</span><br>
<span class="quotelev1">&gt; necessary information, and then pass it to all other peers before
</span><br>
<span class="quotelev1">&gt; start of actual mpi communication. What is the easiest way to do it.
</span><br>
<p><p>Quite the same way. mca_btl_tcp_component_exchange assembles the
<br>
required information and stores it in the GPR by calling
<br>
ompi_modex_send.
<br>
<p>mca_btl_tcp_proc_create (think of &quot;the other peers&quot;) reads this
<br>
information into local context.
<br>
<p><p>I guess you might want to copy btl/tcp to let's say btl/xen, so you can
<br>
modify internal structures, if required. Perhaps xensockets don't need
<br>
IP addresses, as they are actually memory sockets.
<br>
<p>However, you'll still need TCP communication between Xen guests for the
<br>
OOB channel.
<br>
<p><p>As mentioned above, I'm not sure if it's reasonable to use Xen and MPI
<br>
at all. Virtualization overhead might decrease your performance, and
<br>
that's usually the last thing you want to have when using MPI ;)
<br>
<p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2949.php">Rayson Ho: "[OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="2947.php">Muhammad Atif: "[OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2947.php">Muhammad Atif: "[OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2960.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Reply:</strong> <a href="2960.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
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

<?
$subject_val = "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 11:29:18 2007" -->
<!-- isoreceived="20071218162918" -->
<!-- sent="Tue, 18 Dec 2007 17:28:50 +0100 (MET)" -->
<!-- isosent="20071218162850" -->
<!-- name="Marco Sbrighi" -->
<!-- email="m.sbrighi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?" -->
<!-- id="1197995327.12495.39.camel_at_nb-sbrighi.cineca.it" -->
<!-- inreplyto="2b5e0c120712171758v389091e5gd9d8a6cecea4b5cd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?<br>
<strong>From:</strong> Marco Sbrighi (<em>m.sbrighi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 11:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4703.php">Reuti: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4701.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>In reply to:</strong> <a href="4692.php">Brian Dobbins: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4701.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2007-12-17 at 20:58 -0500, Brian Dobbins wrote:
<br>
<span class="quotelev1">&gt; Hi Marco and Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   My own knowledge of OpenMPI's internals is limited, but I thought
</span><br>
<span class="quotelev1">&gt; I'd add my less-than-two-cents...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; I've found only a way in order to have tcp connections
</span><br>
<span class="quotelev1">&gt;         binded only to
</span><br>
<span class="quotelev2">&gt;         &gt; the eth1 interface, using both the following MCA directives
</span><br>
<span class="quotelev1">&gt;         in the
</span><br>
<span class="quotelev2">&gt;         &gt; command line:
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; mpirun .... --mca oob_tcp_include eth1 --mca
</span><br>
<span class="quotelev1">&gt;         oob_tcp_include 
</span><br>
<span class="quotelev2">&gt;         &gt; lo,eth0,ib0,ib1 .....
</span><br>
<span class="quotelev2">&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;         &gt; This sounds me as bug.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Yes, it does.  Specifying the MCA same param twice on the
</span><br>
<span class="quotelev1">&gt;         command line
</span><br>
<span class="quotelev1">&gt;         results in undefined behavior -- it will only take one of
</span><br>
<span class="quotelev1">&gt;         them, and I 
</span><br>
<span class="quotelev1">&gt;         assume it'll take the first (but I'd have to check the code to
</span><br>
<span class="quotelev1">&gt;         be sure).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I think that Marco intended to write:
</span><br>
<span class="quotelev1">&gt;   mpirun .... --mca oob_tcp_include eth1 --mca oob_tcp_exclude
</span><br>
<span class="quotelev1">&gt; lo,eth0,ib0,ib1 ... 
</span><br>
<p>no, I intended to write exactly what I wrote. The double statement is
<br>
reported by --mca mpi_show_mca_params exactly as I write one statement
<br>
only, as follows:
<br>
<p>--mca oob_tcp_include eth1,lo,eth0,ib0,ib1
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Is this correct?  So you're not specifying include twice, you're
</span><br>
<span class="quotelev1">&gt; specifying include and exclude, so each interface is explicitly stated
</span><br>
<span class="quotelev1">&gt; in one list or the other.  I remember encountering this behaviour as
</span><br>
<span class="quotelev1">&gt; well, in a slightly different format, but I can't seem to reproduce it
</span><br>
<span class="quotelev1">&gt; now either. 
</span><br>
<p>notice, the two lists are never intersecting.
<br>
<p><span class="quotelev1">&gt;  That said, with these options, won't the MPI traffic (as opposed to
</span><br>
<span class="quotelev1">&gt; the OOB traffic) still use the eth1,ib0 and ib1 interfaces?  You'd
</span><br>
<span class="quotelev1">&gt; need to add '-mca btl_tcp_include eth1' in order to say it should only
</span><br>
<span class="quotelev1">&gt; go over that NIC, I think. 
</span><br>
<p>Yes I know, in fact -mca btl_tcp_[if]_exclude lo,eth0,ib0,ib1
<br>
works fine (seems). I'm using this MCA parameter since open-mpi 1.2.1
<br>
and the trouble with oob_tcp_[if]_[in|ex]clude sounded quite strange to
<br>
me, after all the code used for the parser should be more or less the
<br>
same ..... 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   As for the 'connection errors', two bizarre things to check are,
</span><br>
<span class="quotelev1">&gt; first, that all of your nodes using eth1 actually have
</span><br>
<span class="quotelev1">&gt; correct /etc/hosts mappings to the other nodes.  One system I ran on
</span><br>
<span class="quotelev1">&gt; had this problem when some nodes had an IP address for node002 as one
</span><br>
<span class="quotelev1">&gt; thing, and another node had node002's IP address as something
</span><br>
<span class="quotelev1">&gt; different.   This should be easy enough by trying to run on one node
</span><br>
<span class="quotelev1">&gt; first, then two nodes that you're sure have the correct addresses. 
</span><br>
<p>Yes, I've already verified that. 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   .. The second situation is if you're launching an MPMD program.
</span><br>
<span class="quotelev1">&gt; Here, you need to use '-gmca &lt;whatever&gt;' instead of '-mca &lt;whatever&gt;'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>No, currently I'm using only SPMD ones, and I hope to use them for the
<br>
rest of the century :-)
<br>
<p><span class="quotelev1">&gt;   Hope some of that is at least a tad useful.  :) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks you very much Brian,
<br>
<p>Marco 
<br>
<p><span class="quotelev1">&gt;   Cheers,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
-----------------------------------------------------------------
 Marco Sbrighi  m.sbrighi_at_[hidden]
 HPC Group
 CINECA Interuniversity Computing Centre
 via Magnanelli, 6/3
 40033 Casalecchio di Reno (Bo) ITALY
 tel. 051 6171516
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4703.php">Reuti: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4701.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>In reply to:</strong> <a href="4692.php">Brian Dobbins: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4701.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
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

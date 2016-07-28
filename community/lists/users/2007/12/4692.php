<?
$subject_val = "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 20:59:02 2007" -->
<!-- isoreceived="20071218015902" -->
<!-- sent="Mon, 17 Dec 2007 20:58:53 -0500" -->
<!-- isosent="20071218015853" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?" -->
<!-- id="2b5e0c120712171758v389091e5gd9d8a6cecea4b5cd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E2C2D1E-CC7A-477A-9050-F154C9B705D2_at_cisco.com" -->
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
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 20:58:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4693.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 770, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="4691.php">George Bosilca: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4702.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Reply:</strong> <a href="4702.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marco and Jeff,
<br>
<p>&nbsp;&nbsp;My own knowledge of OpenMPI's internals is limited, but I thought I'd add
<br>
my less-than-two-cents...
<br>
<p><span class="quotelev1">&gt; I've found only a way in order to have tcp connections binded only to
</span><br>
<span class="quotelev2">&gt; &gt; the eth1 interface, using both the following MCA directives in the
</span><br>
<span class="quotelev2">&gt; &gt; command line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun .... --mca oob_tcp_include eth1 --mca oob_tcp_include
</span><br>
<span class="quotelev2">&gt; &gt; lo,eth0,ib0,ib1 .....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This sounds me as bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it does.  Specifying the MCA same param twice on the command line
</span><br>
<span class="quotelev1">&gt; results in undefined behavior -- it will only take one of them, and I
</span><br>
<span class="quotelev1">&gt; assume it'll take the first (but I'd have to check the code to be sure).
</span><br>
<p><p>&nbsp;&nbsp;I *think* that Marco intended to write:
<br>
&nbsp;&nbsp;mpirun .... --mca oob_tcp_include eth1 --mca oob_tcp_exclude
<br>
lo,eth0,ib0,ib1 ...
<br>
<p>&nbsp;&nbsp;Is this correct?  So you're not specifying include twice, you're
<br>
specifying include *and* exclude, so each interface is explicitly stated in
<br>
one list or the other.  I remember encountering this behaviour as well, in a
<br>
slightly different format, but I can't seem to reproduce it now either.
<br>
That said, with these options, won't the MPI traffic (as opposed to the OOB
<br>
traffic) still use the eth1,ib0 and ib1 interfaces?  You'd need to add '-mca
<br>
btl_tcp_include eth1' in order to say it should only go over that NIC, I
<br>
think.
<br>
<p>&nbsp;&nbsp;As for the 'connection errors', two bizarre things to check are, first,
<br>
that all of your nodes using eth1 actually have correct /etc/hosts mappings
<br>
to the other nodes.  One system I ran on had this problem when some nodes
<br>
had an IP address for node002 as one thing, and another node had node002's
<br>
IP address as something different.   This should be easy enough by trying to
<br>
run on one node first, then two nodes that you're sure have the correct
<br>
addresses.
<br>
<p>&nbsp;&nbsp;.. The second situation is if you're launching an MPMD program.  Here, you
<br>
need to use '-gmca &lt;whatever&gt;' instead of '-mca &lt;whatever&gt;'.
<br>
<p>&nbsp;&nbsp;Hope some of that is at least a tad useful.  :)
<br>
<p>&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4693.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 770, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="4691.php">George Bosilca: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4702.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Reply:</strong> <a href="4702.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 12 19:46:33 2006" -->
<!-- isoreceived="20061113004633" -->
<!-- sent="Mon, 13 Nov 2006 01:46:14 +0100" -->
<!-- isosent="20061113004614" -->
<!-- name="Thomas Peiselt" -->
<!-- email="dispanser_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] valgrind messages important?" -->
<!-- id="4557C056.2010600_at_kulturguerilla.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20061112175218.GP6230_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Thomas Peiselt (<em>dispanser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-12 19:46:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1174.php">Andreas Schäfer: "[OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
<li><strong>Previous message:</strong> <a href="1172.php">Adrian Knoth: "[OMPI devel] valgrind messages important?"</a>
<li><strong>In reply to:</strong> <a href="1172.php">Adrian Knoth: "[OMPI devel] valgrind messages important?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1175.php">Ralph Castain: "Re: [OMPI devel] valgrind messages important?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Adrian Knoth wrote:
<br>
<span class="quotelev1">&gt; There are two issues found by valgrind, but I wanted to
</span><br>
<span class="quotelev1">&gt; check the &quot;normal&quot; valgrind output first. With the nightly
</span><br>
<span class="quotelev1">&gt; snapshot 1.2b1r12555, I got the following &quot;errors&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==8948== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==8948==    at 0x1B92884D: ompi_attr_create_predefined_callback (attribute_predefined.c:374)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1BC869B8: orte_gpr_proxy_deliver_notify_msg (gpr_proxy_deliver_notify_msg.c:144)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1B9FEDF7: mca_oob_xcast (oob_base_xcast.c:147)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1B947E49: ompi_mpi_init (ompi_mpi_init.c:542)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1B97D657: MPI_Init (pinit.c:71)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x8048846: main (in /home/racl/adi/ompi/trunk/test/vm/ring)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I found this one too, and after adding some debug output it seems that
<br>
in the line
<br>
if (rank == ORTE_PROC_MY_NAME-&gt;vpid) {
<br>
<p>rank==16844576 during evaluation of the expression, because the preceding if
<br>
statement only sets the rank in one of the three possible cases. That
<br>
doesn't sound right,
<br>
but I'm not really sure about the impact of this. It still works, after
<br>
all :).
<br>
<p><p>regards
<br>
Thomas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1174.php">Andreas Schäfer: "[OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
<li><strong>Previous message:</strong> <a href="1172.php">Adrian Knoth: "[OMPI devel] valgrind messages important?"</a>
<li><strong>In reply to:</strong> <a href="1172.php">Adrian Knoth: "[OMPI devel] valgrind messages important?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1175.php">Ralph Castain: "Re: [OMPI devel] valgrind messages important?"</a>
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

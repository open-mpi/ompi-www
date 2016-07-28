<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 14:21:38 2005" -->
<!-- isoreceived="20051021192138" -->
<!-- sent="Fri, 21 Oct 2005 15:17:16 -0400" -->
<!-- isosent="20051021191716" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="7D5E7459-848C-418E-9C94-D54FFD39CAF8_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051021185705.GF30127_at_kalmia.hozed.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 14:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0469.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0467.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0467.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0464.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The debian is a 32 bits Intel p4-M processor (it's my laptop). The  
<br>
AMD machine has a Red Hat Enterprise Linux AS release 4 (Nahant  
<br>
Update 2).
<br>
<p>Arghhhh, it's a 64 bits machine where everything is compiled in 32  
<br>
bits mode ... the default compiler picked up by ompi configure is a  
<br>
32 bits compiler. So yes it was working as everything get compiled in  
<br>
32 bits mode.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 21, 2005, at 2:57 PM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev1">&gt; Debian amd64, or 32 bit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 21, 2005 at 02:46:42PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do. I'm using gcc4.0.1 on my debian unstable version and a custom
</span><br>
<span class="quotelev2">&gt;&gt; build from the latest gcc CVS on MAC OS X. I run some tests yesterday
</span><br>
<span class="quotelev2">&gt;&gt; on a AMD Opteron(tm) Processor 246 machine (we just have one of them
</span><br>
<span class="quotelev2">&gt;&gt; so I just test fork pls and shared memory BTL) and it worked.
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise most of the clusters I have access to are running with some
</span><br>
<span class="quotelev2">&gt;&gt; version of Redhat (most of them starting with 7.2 and up to fedora
</span><br>
<span class="quotelev2">&gt;&gt; something).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0469.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0467.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0467.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0464.php">Andrew Friedley: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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

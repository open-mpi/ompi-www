<?
$subject_val = "Re: [OMPI users] Valgrind writev() errors with 1.3.2.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 14:12:47 2009" -->
<!-- isoreceived="20090609181247" -->
<!-- sent="Tue, 09 Jun 2009 20:12:25 +0200" -->
<!-- isosent="20090609181225" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind writev() errors with 1.3.2." -->
<!-- id="1244571145.7043.2.camel_at_y-boda.ydc.se" -->
<!-- inreplyto="71d2d8cc0906091101v6239fbf0p89ea84c23fbce1a2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind writev() errors with 1.3.2.<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 14:12:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9585.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9583.php">Noam Bernstein: "[OMPI users] mpirun delay"</a>
<li><strong>In reply to:</strong> <a href="9582.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9585.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-06-09 at 12:01 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I can't speak to all of the OMPI code, but I can certainly create a
</span><br>
<span class="quotelev1">&gt; new configure option --valgrind-friendly that would initialize the OOB
</span><br>
<span class="quotelev1">&gt; comm buffers and other RTE-related memory to eliminate such warnings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would prefer to configure it out rather than adding a bunch of
</span><br>
<span class="quotelev1">&gt; &quot;if-then&quot; checks for envars to avoid having the performance hit when
</span><br>
<span class="quotelev1">&gt; not needed.
</span><br>
<span class="quotelev1">&gt; Would that help?
</span><br>
<p>Yes please!!!
<br>
I gave up the last attempt at finding memory problems in a user code
<br>
simply because the amount of complaints from the openmpi parts.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9585.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<li><strong>Previous message:</strong> <a href="9583.php">Noam Bernstein: "[OMPI users] mpirun delay"</a>
<li><strong>In reply to:</strong> <a href="9582.php">Ralph Castain: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9585.php">tom fogal: "Re: [OMPI users] Valgrind writev() errors with 1.3.2."</a>
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

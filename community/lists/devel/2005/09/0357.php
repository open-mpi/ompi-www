<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 15 14:34:33 2005" -->
<!-- isoreceived="20050915193433" -->
<!-- sent="Thu, 15 Sep 2005 13:36:53 +0000" -->
<!-- isosent="20050915133653" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux	(fwd)" -->
<!-- id="1126791413.1795.23.camel_at_polylepis.inforead.com" -->
<!-- inreplyto="Pine.LNX.4.63.0509142344420.28984_at_terciopelo.krait.us" -->
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
<strong>From:</strong> Ferris McCormick (<em>fmccor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-15 08:36:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0358.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0358.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0358.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Wed, 14 Sep 2005, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I committed some code that should fix the timer problems on SPARC
</span><br>
<span class="quotelev2">&gt; &gt; linux.  Can you either svn up and try again (or, if you are using
</span><br>
<span class="quotelev2">&gt; &gt; nightly builds) try tomorrow's tarball and see if it works?  The test
</span><br>
<span class="quotelev2">&gt; &gt; tests/util/opal_timer.c should give an indication as to whether
</span><br>
<span class="quotelev2">&gt; &gt; everything is working ok or not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll try it tomorrow (the 15th).  Thanks for the response.
</span><br>
<p>Nightly tarball is missing sparcv9/timer.h
<br>
Current svn checkout will not compile -- fails:
<br>
../../../../../opal/include/sys/sparcv9/timer.h:44: error:
<br>
`opal_timer_t' undeclared (first use in this function)
<br>
which is true, because it is commented out with '#if 0' brackets.
<br>
<p>If you define it, build fails with 
<br>
{standard input}: Assembler messages:
<br>
{standard input}:61: Error: Illegal operands
<br>
{standard input}:195: Error: Illegal operands
<br>
{standard input}:292: Error: Illegal operands
<br>
from opal_progress.c --- I don't know why yet.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
Regards,
<br>
<pre>
-- 
Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
Developer, Gentoo Linux (Sparc, Devrel)

</pre>
<p>
<p><p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0357/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0358.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Jeff Squyres: "Re:  error message on make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0358.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<li><strong>Reply:</strong> <a href="0358.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 14:06:57 2006" -->
<!-- isoreceived="20060331190657" -->
<!-- sent="Fri, 31 Mar 2006 11:06:55 -0800" -->
<!-- isosent="20060331190655" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331190655.GB1830_at_odin.ac.hmc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060331165305.GD1642_at_ipc256.inf.uni-jena.de" -->
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
<strong>From:</strong> Brooks Davis (<em>brooks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 14:06:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0799.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0797.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0803.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0803.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 31, 2006 at 06:53:05PM +0200, Christian Kauhaus wrote:
<br>
<span class="quotelev1">&gt; Adrian Knoth &lt;adi_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt;(I really prefer the v6-mapped-v4 solution with a single
</span><br>
<span class="quotelev2">&gt; &gt; socket, thus eliminating this problem)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One little problem here is that it is possible to disable the
</span><br>
<span class="quotelev1">&gt; IPv6-mapped IPv4 addresses at least under Linux and some BSD variants.
</span><br>
<span class="quotelev1">&gt; For Linux, have a look at sys.net.ipv6.bindv6only.  Some authors even
</span><br>
<span class="quotelev1">&gt; recommend to do so for security considerations (for example, Murphy &amp;
</span><br>
<span class="quotelev1">&gt; Malone in IPv6 Network Administration, O'Reilly 2005). 
</span><br>
<p>More specifically, KAME derived (BSD) stacks disable them by default so
<br>
it might be best to assume it doesn't work since you'll probably have to
<br>
support that case anyway.  The other nice thing about a two socket model
<br>
it that it should be easier a network that is dual-stack and preparing
<br>
to transition to pure v6 to disable v4 in order to verify that v6 is
<br>
actually working and performing correctly.
<br>
<p>-- Brooks
<br>
&nbsp;
<br>
<pre>
-- 
Any statement of the form &quot;X is the one, true Y&quot; is FALSE.
PGP fingerprint 655D 519C 26A7 82E7 2529  9BF0 5D8E 8BE9 F238 1AD4

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0798/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0799.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0797.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0803.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0803.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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

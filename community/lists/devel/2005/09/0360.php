<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 15 15:35:42 2005" -->
<!-- isoreceived="20050915203542" -->
<!-- sent="Thu, 15 Sep 2005 20:35:33 +0000" -->
<!-- isosent="20050915203533" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component --	linux	(fwd)" -->
<!-- id="1126816533.1795.41.camel_at_polylepis.inforead.com" -->
<!-- inreplyto="185A4690-4153-406C-BEC1-1DD38E10A22F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-15 15:35:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0361.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>In reply to:</strong> <a href="0358.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0363.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>Reply:</strong> <a href="0363.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2005-09-15 at 15:26 -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Gah...  The #if 0 and missing header are my bad - I'll fix those  
</span><br>
<span class="quotelev1">&gt; tonight.  can you rerun the compiler on the file that errors out, but  
</span><br>
<span class="quotelev1">&gt; with the -S option to get the assembly file?  It would be useful to  
</span><br>
<span class="quotelev1">&gt; know what is on lines 61, 195, and 292.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Yes, I can.  I tried compiling a dummy program with just the time.h and
<br>
&nbsp;val = opal_sys_timer_get_cycles();
<br>
<p>At first glance, it looks like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mov %tick, %o4
<br>
is generating the error.  I've been fighting other things all day, so I
<br>
can't provide much more than that right now.  I'll verify with the
<br>
actual failure tomorrow, if the problem persists.  (I am using the svn
<br>
pull right now.)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
Regards,
<br>
<p><pre>
-- 
Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
Developer, Gentoo Linux (Sparc, Devrel)

</pre>
<p>
<p><p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0360/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0361.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0359.php">Jeff Squyres: "Re:  64bit shared library problems"</a>
<li><strong>In reply to:</strong> <a href="0358.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux	(fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0363.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
<li><strong>Reply:</strong> <a href="0363.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux (fwd)"</a>
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

<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 11:58:42 2010" -->
<!-- isoreceived="20100426155842" -->
<!-- sent="Mon, 26 Apr 2010 16:58:24 +0100" -->
<!-- isosent="20100426155824" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS" -->
<!-- id="87aasqyzmn.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1272263888.1523.76233.camel_at_korcula.inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 11:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12792.php">Sylvestre Ledru: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Previous message:</strong> <a href="12790.php">Addepalli, Srirangam V: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12775.php">Sylvestre Ledru: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12776.php">Ashley Pittman: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sylvestre Ledru &lt;sylvestre.ledru_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; This code will set the precision to double:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fpu_control.h&gt;
</span><br>
<span class="quotelev1">&gt; fpu_control_t _cw; 
</span><br>
<span class="quotelev1">&gt; _FPU_GETCW(_cw); 
</span><br>
<span class="quotelev1">&gt; _cw = (_cw &amp; ~_FPU_DOUBLE) | _FPU_EXTENDED;
</span><br>
<span class="quotelev1">&gt; _FPU_SETCW(_cw); 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should get the same result on 32 &amp; 64 bits CPU then.
</span><br>
<p>Quite off-topic, but as far as I remember from GNU Fortran days, if you
<br>
want to avoid `excess precision' on an x86 system, you generally need to
<br>
spill registers with (the equivalent of) GCC's -ffloat-store, and take
<br>
the performance hit.  Most of the time you don't, of course, and the
<br>
Paranoia test, for instance, passes without -ffloat-store.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12792.php">Sylvestre Ledru: "Re: [OMPI users] How to &quot;guess&quot; the incoming data type ?"</a>
<li><strong>Previous message:</strong> <a href="12790.php">Addepalli, Srirangam V: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12775.php">Sylvestre Ledru: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12776.php">Ashley Pittman: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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

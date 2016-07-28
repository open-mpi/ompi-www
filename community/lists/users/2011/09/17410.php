<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 10:08:06 2011" -->
<!-- isoreceived="20110923140806" -->
<!-- sent="Fri, 23 Sep 2011 09:07:58 -0500" -->
<!-- isosent="20110923140758" -->
<!-- name="Waclaw Kusnierczyk" -->
<!-- email="waku_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="4E7C92BE.30104_at_idi.ntnu.no" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0BCA5070-CCCA-4E25-80C7-5815861006E5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option<br>
<strong>From:</strong> Waclaw Kusnierczyk (<em>waku_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 10:07:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17411.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17409.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17409.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17411.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17411.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/23/2011 06:40 AM, Jeff Squyres wrote:
<br>
<p>(...)
<br>
<p><span class="quotelev1">&gt; Unless there is an effort undertaken to standardize wrapper compiler flags, this is not going to happen.  Indeed, as I mentioned in a prior email, some MPI implementations do not have wrapper compilers at all.  This makes standardization difficult, if not impossible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI's attitude towards wrapper compilers has always been to assume as absolutely minimum as possible -- we add a single command line flag (--showme, although it has a few different forms).  We pass *everything* else to the underlying compiler because there is a *huge* array of compilers out there that take a multitude of different compiler flags.  We wouldn't want to possibly, unknowingly intercept one of them (even worse, use a flag that *today* has no conflict with compilers, but some future compiler release uses that same flag). Hence, we went with the minimalistic approach.
</span><br>
<p>it's not unusual to use double-hyphen ('--') to separate options
<br>
intended for the wrapper from the options intended for the wrapped.  so
<br>
you could have
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;wrapper --foo -- --foo
<br>
<p>with the first --foo interpreted by the wrapper and the other one passed
<br>
down to whatever the downstream program is.  with this scheme, there is
<br>
no fear of possibly, unknowingly intercepting any flag that would be
<br>
intended for the downstream code.
<br>
<p>vQ
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17411.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17409.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17409.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17411.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17411.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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

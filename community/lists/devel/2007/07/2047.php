<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 30 09:58:14 2007" -->
<!-- isoreceived="20070730135814" -->
<!-- sent="Mon, 30 Jul 2007 10:58:10 -0300" -->
<!-- isosent="20070730135810" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="e7ba66e40707300658v55bc3c9aue00157ae72822586_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8E1C7098-2EDB-45E4-BB78-74BF73899F4D_at_cisco.com" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-30 09:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2048.php">Jeff Squyres: "[OMPI devel] Coverity logins"</a>
<li><strong>Previous message:</strong> <a href="2046.php">Jeff Squyres: "Re: [OMPI devel] freeing GROUP_EMPTY"</a>
<li><strong>In reply to:</strong> <a href="2044.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2049.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2049.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/29/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jul 28, 2007, at 4:41 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the mean time, I would prefer to follow the standard as close as
</span><br>
<span class="quotelev2">&gt; &gt; possible. If not, some external, stupid test suite (like the one I
</span><br>
<span class="quotelev2">&gt; &gt; have for mip4py) would report that OMPI is wrong about this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>What exactly are you testing for?
<br>
<p>Equality with the '==' C operator (i.e. handle equality). Using
<br>
Group.Compare() yields IDENT, as expected. But for groups, I
<br>
understand IDENT means either equal handles (in the C/C++ '==' sense)
<br>
or groups with the same size and rank order.
<br>
<p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2048.php">Jeff Squyres: "[OMPI devel] Coverity logins"</a>
<li><strong>Previous message:</strong> <a href="2046.php">Jeff Squyres: "Re: [OMPI devel] freeing GROUP_EMPTY"</a>
<li><strong>In reply to:</strong> <a href="2044.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2049.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2049.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
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

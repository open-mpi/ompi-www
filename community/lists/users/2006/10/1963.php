<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 10:45:12 2006" -->
<!-- isoreceived="20061011144512" -->
<!-- sent="Wed, 11 Oct 2006 11:38:10 -0300" -->
<!-- isosent="20061011143810" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with shared libraries" -->
<!-- id="e7ba66e40610110738w423c5f29m1ee8059737bc6e52_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C151D179.2A40A%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-11 10:38:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1964.php">David Gunter: "[OMPI users] Help building static and shared libs at the same time"</a>
<li><strong>Previous message:</strong> <a href="1962.php">&#197;ke Sandgren: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at	least)"</a>
<li><strong>In reply to:</strong> <a href="1960.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1970.php">Michael Kluskens: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Reply:</strong> <a href="1970.php">Michael Kluskens: "Re: [OMPI users] Trouble with shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/11/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Open MPI v1.1.1 requires that you set your LD_LIBRARY_PATH to include the
</span><br>
<span class="quotelev1">&gt; directory where its libraries were installed (typically, $prefix/lib).  Or,
</span><br>
<span class="quotelev1">&gt; you can use mpirun's --prefix functionality to avoid this
</span><br>
<p>BTW, Why mpicc/mpicxx does not symply pass a -rpath/-R flag to the
<br>
linker? Do you want to select libraries at runtime? There are
<br>
portability problem in some target plataform? This behavior can be
<br>
really useful to experienced unix users/developers but I am not sure
<br>
if this holds true for all users.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="1964.php">David Gunter: "[OMPI users] Help building static and shared libs at the same time"</a>
<li><strong>Previous message:</strong> <a href="1962.php">&#197;ke Sandgren: "Re: [OMPI users] Bugs in config tests for threads (1.1.2rc3 at	least)"</a>
<li><strong>In reply to:</strong> <a href="1960.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1970.php">Michael Kluskens: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>Reply:</strong> <a href="1970.php">Michael Kluskens: "Re: [OMPI users] Trouble with shared libraries"</a>
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

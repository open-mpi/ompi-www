<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 22:14:19 2007" -->
<!-- isoreceived="20070712021419" -->
<!-- sent="Wed, 11 Jul 2007 23:14:15 -0300" -->
<!-- isosent="20070712021415" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()" -->
<!-- id="e7ba66e40707111914u72912b7j204ee5d99692e1f3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F3EFB142-DF92-495B-ACED-D8DDC29A9CE1_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-07-11 22:14:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1855.php">Ralph H Castain: "[OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1853.php">George Bosilca: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>In reply to:</strong> <a href="1853.php">George Bosilca: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/11/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The two errors you provide are quite different. The first one has
</span><br>
<span class="quotelev1">&gt; been addresses few days ago in the trunk (<a href="https://svn.open-mpi.org/">https://svn.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; trac/ompi/changeset/15291). If instead of the 1.2.3 you use anything
</span><br>
<span class="quotelev1">&gt; after r15291 you will be safe in a threading case.
</span><br>
<p>Please, take into account that in this case I not used MPI_Init_tread() ...
<br>
<p>In any case, sorry for making noise if this was already reported. I
<br>
have other issues to report, but perhaps I should try the svn version.
<br>
Please, understand me, I am really busy with many things as to be
<br>
up-to-date with every source code I use. Sorry again.
<br>
<p><p><p><span class="quotelev1">&gt; The second is different. The problem is that memcpy is a lot faster
</span><br>
<span class="quotelev1">&gt; than memmove, and that's why we use it.
</span><br>
<p>Yes, of course.
<br>
<p><span class="quotelev1">&gt; The case where the 2 data
</span><br>
<span class="quotelev1">&gt; overlap are quite minimal. I'll take a look to see exactly what
</span><br>
<span class="quotelev1">&gt; happened there.
</span><br>
<p>Initially, I though it was my error, but next realized that this seems
<br>
to happen in Comm.Split() internals.
<br>
<p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="1855.php">Ralph H Castain: "[OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1853.php">George Bosilca: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>In reply to:</strong> <a href="1853.php">George Bosilca: "Re: [OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<!-- nextthread="start" -->
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

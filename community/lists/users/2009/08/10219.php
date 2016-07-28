<?
$subject_val = "Re: [OMPI users] Parallel Quicksort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 07:59:57 2009" -->
<!-- isoreceived="20090806115957" -->
<!-- sent="Thu, 6 Aug 2009 12:59:52 +0100" -->
<!-- isosent="20090806115952" -->
<!-- name="Mattijs Janssens" -->
<!-- email="m.janssens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel Quicksort" -->
<!-- id="200908061259.52292.m.janssens_at_opencfd.co.uk" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="610ca1a30908060217m73bd268fu550cca4ed5a86278_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel Quicksort<br>
<strong>From:</strong> Mattijs Janssens (<em>m.janssens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 07:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10220.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10218.php">Prasadcse Perera: "[OMPI users] Parallel Quicksort"</a>
<li><strong>In reply to:</strong> <a href="10218.php">Prasadcse Perera: "[OMPI users] Parallel Quicksort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10222.php">Prasadcse Perera: "Re: [OMPI users] Parallel Quicksort"</a>
<li><strong>Reply:</strong> <a href="10222.php">Prasadcse Perera: "Re: [OMPI users] Parallel Quicksort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 06 August 2009 10:17:36 Prasadcse Perera wrote:
<br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; This may not be something relates to the forum, so sorry for asking this
</span><br>
<span class="quotelev1">&gt; first of all :). Currently I have been working on an implementation of
</span><br>
<span class="quotelev1">&gt; parallel Quicksort using MPI and now I need some standard parallel
</span><br>
<span class="quotelev1">&gt; Quicksort implementation(s) for a performance evaluation. So can someone
</span><br>
<span class="quotelev1">&gt; recommend me any available implementation that I can use ?
</span><br>
<p>In OpenFOAM there is an implementation of the &quot;Parallel Sorting by Regular 
<br>
Sampling&quot; algoritm as a generic container 'ParSortableList'. Should be easy to 
<br>
make a test application but you'll need to have OpenFOAM installed.
<br>
<p>Mattijs
<br>
<p><pre>
-- 
Mattijs Janssens
OpenCFD Ltd.
9 Albert Road,
Caversham,
Reading RG4 7AN.
Tel: +44 (0)118 9471030
Email: M.Janssens_at_[hidden]
URL: <a href="http://www.OpenCFD.co.uk">http://www.OpenCFD.co.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10220.php">Torgny Faxen: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10218.php">Prasadcse Perera: "[OMPI users] Parallel Quicksort"</a>
<li><strong>In reply to:</strong> <a href="10218.php">Prasadcse Perera: "[OMPI users] Parallel Quicksort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10222.php">Prasadcse Perera: "Re: [OMPI users] Parallel Quicksort"</a>
<li><strong>Reply:</strong> <a href="10222.php">Prasadcse Perera: "Re: [OMPI users] Parallel Quicksort"</a>
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

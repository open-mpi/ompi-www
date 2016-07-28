<?
$subject_val = "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 10:13:10 2009" -->
<!-- isoreceived="20090707141310" -->
<!-- sent="Tue, 7 Jul 2009 10:13:03 -0400" -->
<!-- isosent="20090707141303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI datatype problem in mpi_test_suite?" -->
<!-- id="06123527-430C-41E3-ACC3-774869132D62_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200907061943.49095.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI datatype problem in mpi_test_suite?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 10:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI devel] oob/btl tcp port range - missing htons?"</a>
<li><strong>Previous message:</strong> <a href="6383.php">Rainer Keller: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>In reply to:</strong> <a href="6383.php">Rainer Keller: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2009, at 7:43 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I can't quite follow the test suite code, but MPI_TYPE_MIX is some  
</span><br>
<span class="quotelev1">&gt; kind of derived MPI datatype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. Basically MPI_TYPE_MIX (and MPI_TYPE_MIX_LB_UB) is a struct of  
</span><br>
<span class="quotelev1">&gt; 11 basic
</span><br>
<span class="quotelev1">&gt; types:
</span><br>
<span class="quotelev1">&gt; MPI_Datatype mix_type[11] = {MPI_CHAR, MPI_SHORT, MPI_INT, MPI_LONG,
</span><br>
<span class="quotelev1">&gt;                        MPI_FLOAT, MPI_DOUBLE, MPI_FLOAT_INT,
</span><br>
<span class="quotelev1">&gt;                        MPI_DOUBLE_INT, MPI_LONG_INT, MPI_SHORT_INT,  
</span><br>
<span class="quotelev1">&gt; MPI_2INT};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, as it contains MPI_SHORT_INT (which contains a hole), the  
</span><br>
<span class="quotelev1">&gt; problem's cause
</span><br>
<span class="quotelev1">&gt; may be similar!
</span><br>
<span class="quotelev1">&gt; This has to be investigated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I've filed ticket <a href="https://svn.open-mpi.org/trac/ompi/ticket/1968">https://svn.open-mpi.org/trac/ompi/ticket/1968</a>.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI devel] oob/btl tcp port range - missing htons?"</a>
<li><strong>Previous message:</strong> <a href="6383.php">Rainer Keller: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>In reply to:</strong> <a href="6383.php">Rainer Keller: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
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

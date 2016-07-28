<?
$subject_val = "Re: [OMPI users] Bogus memcpy or bogus  valgrind record";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 21:38:47 2009" -->
<!-- isoreceived="20090331013847" -->
<!-- sent="Mon, 30 Mar 2009 17:38:29 -0800" -->
<!-- isosent="20090331013829" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bogus memcpy or bogus  valgrind record" -->
<!-- id="49D17415.6030903_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="42A0D52E-9F12-496E-9FC6-FA153DAB6211_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bogus memcpy or bogus  valgrind record<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 21:38:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Previous message:</strong> <a href="8664.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>In reply to:</strong> <a href="8661.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9069.php">François PELLEGRINI: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 28, 2009, at 5:31 AM, Fran&#231;ois PELLEGRINI wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size (MPI_COMM_WORLD, &amp;procglbnbr);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank (MPI_COMM_WORLD, &amp;proclocnum);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   dataloctab = malloc (2 * (procglbnbr + 1) * sizeof (int));
</span><br>
<span class="quotelev2">&gt;&gt;   dataglbtab = dataloctab + 2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why +2?  Shouldn't it be +procglbnbr?
</span><br>
<p>I think this is okay.  There is a local buffer (2 elements long) and a 
<br>
global buffer (2*np long, into which Allgather elements are placed).  
<br>
They're concatenated.  So, glb starts 2 elements after local.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8666.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Previous message:</strong> <a href="8664.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>In reply to:</strong> <a href="8661.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9069.php">François PELLEGRINI: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
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

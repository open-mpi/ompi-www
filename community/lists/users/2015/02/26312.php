<?
$subject_val = "[OMPI users] Java MPI and OWL API: segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 09:24:35 2015" -->
<!-- isoreceived="20150210142435" -->
<!-- sent="Tue, 10 Feb 2015 15:24:14 +0100" -->
<!-- isosent="20150210142414" -->
<!-- name="Riccardo Zese" -->
<!-- email="riccardo.zese_at_[hidden]" -->
<!-- subject="[OMPI users] Java MPI and OWL API: segmentation fault" -->
<!-- id="CAAissOSE7JTSm=neLpEHq+GhCm4zTG=AdizBU60r0iVVu6nrJA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Java MPI and OWL API: segmentation fault<br>
<strong>From:</strong> Riccardo Zese (<em>riccardo.zese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-10 09:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26313.php">Aulwes, Rob: "[OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26311.php">Gilles Gouaillardet: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26314.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Reply:</strong> <a href="26314.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm trying to modify an old algorithm of mine in order to exploit
<br>
parallelization and I would like to use MPI. My algorithm is written in
<br>
Java and make use of OWL API library. I've noticed that if I try to load an
<br>
ontology after the initialization of MPI the process ends returning signal
<br>
11 (segmentation fault).
<br>
<p>The code I've tried to test is below
<br>
<p>public static void main(String[] args) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.Init(args);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OWLOntologyManager manager;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OWLOntology ontology = null;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;manager = new OWLManager().buildOWLOntologyManager();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String ontologyPath = &quot;file:/path/to/file&quot;; //This variable
<br>
contains the correct path
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;Before load&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ontology =
<br>
manager.loadOntologyFromOntologyDocument(IRI.create(ontologyPath));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(&quot;After load&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.Finalize();
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} catch (MPIException | OWLOntologyCreationException ex) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(ex);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>Does anyone have an idea of why or where is the error?
<br>
<p><pre>
-- 
Riccardo Zese
PhD Student
ENDIF - Dipartimento di Ingegneria
Universit&#195;&#160; di Ferrara
Via Saragat 1, I-44122,  Ferrara,  Italy
Tel. +39 0532974827
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26312/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26313.php">Aulwes, Rob: "[OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26311.php">Gilles Gouaillardet: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26314.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Reply:</strong> <a href="26314.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
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

<?
$subject_val = "Re: [OMPI users] Java MPI and OWL API: segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 14:30:35 2015" -->
<!-- isoreceived="20150211193035" -->
<!-- sent="Wed, 11 Feb 2015 19:30:33 +0000" -->
<!-- isosent="20150211193033" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java MPI and OWL API: segmentation fault" -->
<!-- id="9855F261-1BC1-455E-9F71-DD9209F77259_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAissOSE7JTSm=neLpEHq+GhCm4zTG=AdizBU60r0iVVu6nrJA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Java MPI and OWL API: segmentation fault<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-11 14:30:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26315.php">Avalon Johnson: "[OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Previous message:</strong> <a href="26313.php">Aulwes, Rob: "[OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="26312.php">Riccardo Zese: "[OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26318.php">Riccardo Zese: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Reply:</strong> <a href="26318.php">Riccardo Zese: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This may well be related to:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/issues/369">https://github.com/open-mpi/ompi/issues/369</a>
<br>

<br>

<br>
<span class="quotelev1">&gt; On Feb 10, 2015, at 9:24 AM, Riccardo Zese &lt;riccardo.zese_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm trying to modify an old algorithm of mine in order to exploit parallelization and I would like to use MPI. My algorithm is written in Java and make use of OWL API library. I've noticed that if I try to load an ontology after the initialization of MPI the process ends returning signal 11 (segmentation fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code I've tried to test is below
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; public static void main(String[] args) {
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         try {
</span><br>
<span class="quotelev1">&gt;             MPI.Init(args);
</span><br>
<span class="quotelev1">&gt;             
</span><br>
<span class="quotelev1">&gt;             OWLOntologyManager manager;
</span><br>
<span class="quotelev1">&gt;             OWLOntology ontology = null;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             manager = new OWLManager().buildOWLOntologyManager();
</span><br>
<span class="quotelev1">&gt;             String ontologyPath = &quot;file:/path/to/file&quot;; //This variable contains the correct path
</span><br>
<span class="quotelev1">&gt;             System.out.println(&quot;Before load&quot;);
</span><br>
<span class="quotelev1">&gt;             ontology = manager.loadOntologyFromOntologyDocument(IRI.create(ontologyPath));
</span><br>
<span class="quotelev1">&gt;             System.out.println(&quot;After load&quot;);
</span><br>
<span class="quotelev1">&gt;             
</span><br>
<span class="quotelev1">&gt;             MPI.Finalize();
</span><br>
<span class="quotelev1">&gt;             
</span><br>
<span class="quotelev1">&gt;             
</span><br>
<span class="quotelev1">&gt;             
</span><br>
<span class="quotelev1">&gt;         } catch (MPIException | OWLOntologyCreationException ex) {
</span><br>
<span class="quotelev1">&gt;             System.out.println(ex);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have an idea of why or where is the error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Riccardo Zese
</span><br>
<span class="quotelev1">&gt; PhD Student 
</span><br>
<span class="quotelev1">&gt; ENDIF - Dipartimento di Ingegneria
</span><br>
<span class="quotelev1">&gt; Universit&#195;&#160; di Ferrara
</span><br>
<span class="quotelev1">&gt; Via Saragat 1, I-44122,  Ferrara,  Italy
</span><br>
<span class="quotelev1">&gt; Tel. +39 0532974827
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26312.php">http://www.open-mpi.org/community/lists/users/2015/02/26312.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26315.php">Avalon Johnson: "[OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Previous message:</strong> <a href="26313.php">Aulwes, Rob: "[OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="26312.php">Riccardo Zese: "[OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26318.php">Riccardo Zese: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Reply:</strong> <a href="26318.php">Riccardo Zese: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
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

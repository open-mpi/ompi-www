<?
$subject_val = "Re: [OMPI users] Java MPI and OWL API: segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 03:54:20 2015" -->
<!-- isoreceived="20150212085420" -->
<!-- sent="Thu, 12 Feb 2015 09:53:59 +0100" -->
<!-- isosent="20150212085359" -->
<!-- name="Riccardo Zese" -->
<!-- email="riccardo.zese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java MPI and OWL API: segmentation fault" -->
<!-- id="CAAissOQcEGe-i1vjwosXM6yH5RBEgU6N1L4reZFMn1o5qVHtzw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9855F261-1BC1-455E-9F71-DD9209F77259_at_cisco.com" -->
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
<strong>From:</strong> Riccardo Zese (<em>riccardo.zese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 03:53:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Previous message:</strong> <a href="26317.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>In reply to:</strong> <a href="26314.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26322.php">Oscar Vega-Gisbert: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Reply:</strong> <a href="26322.php">Oscar Vega-Gisbert: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have just solved my problem by specifying
<br>
export LD_PRELOAD=libjvm.so-directory/libjsig.so;
<br>
before the call to mpirun.
<br>
In my case it missed signal chaining (
<br>
<a href="http://docs.oracle.com/javase/8/docs/technotes/guides/troubleshoot/signals.html">http://docs.oracle.com/javase/8/docs/technotes/guides/troubleshoot/signals.html</a>
<br>
).
<br>
<p>2015-02-11 20:30 GMT+01:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; This may well be related to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/issues/369">https://github.com/open-mpi/ompi/issues/369</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 10, 2015, at 9:24 AM, Riccardo Zese &lt;riccardo.zese_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to modify an old algorithm of mine in order to exploit
</span><br>
<span class="quotelev1">&gt; parallelization and I would like to use MPI. My algorithm is written in
</span><br>
<span class="quotelev1">&gt; Java and make use of OWL API library. I've noticed that if I try to load an
</span><br>
<span class="quotelev1">&gt; ontology after the initialization of MPI the process ends returning signal
</span><br>
<span class="quotelev1">&gt; 11 (segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The code I've tried to test is below
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; public static void main(String[] args) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         try {
</span><br>
<span class="quotelev2">&gt; &gt;             MPI.Init(args);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             OWLOntologyManager manager;
</span><br>
<span class="quotelev2">&gt; &gt;             OWLOntology ontology = null;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             manager = new OWLManager().buildOWLOntologyManager();
</span><br>
<span class="quotelev2">&gt; &gt;             String ontologyPath = &quot;file:/path/to/file&quot;; //This variable
</span><br>
<span class="quotelev1">&gt; contains the correct path
</span><br>
<span class="quotelev2">&gt; &gt;             System.out.println(&quot;Before load&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;             ontology =
</span><br>
<span class="quotelev1">&gt; manager.loadOntologyFromOntologyDocument(IRI.create(ontologyPath));
</span><br>
<span class="quotelev2">&gt; &gt;             System.out.println(&quot;After load&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             MPI.Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         } catch (MPIException | OWLOntologyCreationException ex) {
</span><br>
<span class="quotelev2">&gt; &gt;             System.out.println(ex);
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone have an idea of why or where is the error?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Riccardo Zese
</span><br>
<span class="quotelev2">&gt; &gt; PhD Student
</span><br>
<span class="quotelev2">&gt; &gt; ENDIF - Dipartimento di Ingegneria
</span><br>
<span class="quotelev2">&gt; &gt; Universit&#195;&#160; di Ferrara
</span><br>
<span class="quotelev2">&gt; &gt; Via Saragat 1, I-44122,  Ferrara,  Italy
</span><br>
<span class="quotelev2">&gt; &gt; Tel. +39 0532974827
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26312.php">http://www.open-mpi.org/community/lists/users/2015/02/26312.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26314.php">http://www.open-mpi.org/community/lists/users/2015/02/26314.php</a>
</span><br>
<p><p><p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26318/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26319.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Previous message:</strong> <a href="26317.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>In reply to:</strong> <a href="26314.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26322.php">Oscar Vega-Gisbert: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Reply:</strong> <a href="26322.php">Oscar Vega-Gisbert: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
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

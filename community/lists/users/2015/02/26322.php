<?
$subject_val = "Re: [OMPI users] Java MPI and OWL API: segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 17:40:58 2015" -->
<!-- isoreceived="20150212224058" -->
<!-- sent="Thu, 12 Feb 2015 23:40:31 +0100" -->
<!-- isosent="20150212224031" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Java MPI and OWL API: segmentation fault" -->
<!-- id="54DD2BDF.9000802_at_dsic.upv.es" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAissOQcEGe-i1vjwosXM6yH5RBEgU6N1L4reZFMn1o5qVHtzw_at_mail.gmail.com" -->
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
<strong>From:</strong> Oscar Vega-Gisbert (<em>ovega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-12 17:40:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>Previous message:</strong> <a href="26321.php">Thibaud Kloczko: "[OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>In reply to:</strong> <a href="26318.php">Riccardo Zese: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ricardo,
<br>
<p>Thanks for your information.
<br>
Unfortunately, your solution does not work here:
<br>
<a href="https://github.com/open-mpi/ompi/issues/369">https://github.com/open-mpi/ompi/issues/369</a>
<br>
<p>Regards,
<br>
Oscar
<br>
<p>El 12/02/15 a las 09:53, Riccardo Zese escribi&#243;:
<br>
<span class="quotelev1">&gt; I have just solved my problem by specifying
</span><br>
<span class="quotelev1">&gt; export LD_PRELOAD=libjvm.so-directory/libjsig.so;
</span><br>
<span class="quotelev1">&gt; before the call to mpirun.
</span><br>
<span class="quotelev1">&gt; In my case it missed signal chaining 
</span><br>
<span class="quotelev1">&gt; (<a href="http://docs.oracle.com/javase/8/docs/technotes/guides/troubleshoot/signals.html">http://docs.oracle.com/javase/8/docs/technotes/guides/troubleshoot/signals.html</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-02-11 20:30 GMT+01:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This may well be related to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/issues/369">https://github.com/open-mpi/ompi/issues/369</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Feb 10, 2015, at 9:24 AM, Riccardo Zese
</span><br>
<span class="quotelev1">&gt;     &lt;riccardo.zese_at_[hidden] &lt;mailto:riccardo.zese_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Hi,
</span><br>
<span class="quotelev2">&gt;     &gt; I'm trying to modify an old algorithm of mine in order to
</span><br>
<span class="quotelev1">&gt;     exploit parallelization and I would like to use MPI. My algorithm
</span><br>
<span class="quotelev1">&gt;     is written in Java and make use of OWL API library. I've noticed
</span><br>
<span class="quotelev1">&gt;     that if I try to load an ontology after the initialization of MPI
</span><br>
<span class="quotelev1">&gt;     the process ends returning signal 11 (segmentation fault).
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The code I've tried to test is below
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; public static void main(String[] args) {
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;         try {
</span><br>
<span class="quotelev2">&gt;     &gt;             MPI.Init(args);
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;             OWLOntologyManager manager;
</span><br>
<span class="quotelev2">&gt;     &gt;             OWLOntology ontology = null;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;             manager = new OWLManager().buildOWLOntologyManager();
</span><br>
<span class="quotelev2">&gt;     &gt;             String ontologyPath = &quot;file:/path/to/file&quot;; //This
</span><br>
<span class="quotelev1">&gt;     variable contains the correct path
</span><br>
<span class="quotelev2">&gt;     &gt;             System.out.println(&quot;Before load&quot;);
</span><br>
<span class="quotelev2">&gt;     &gt;             ontology =
</span><br>
<span class="quotelev1">&gt;     manager.loadOntologyFromOntologyDocument(IRI.create(ontologyPath));
</span><br>
<span class="quotelev2">&gt;     &gt;             System.out.println(&quot;After load&quot;);
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;             MPI.Finalize();
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;         } catch (MPIException | OWLOntologyCreationException ex) {
</span><br>
<span class="quotelev2">&gt;     &gt;             System.out.println(ex);
</span><br>
<span class="quotelev2">&gt;     &gt;         }
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     }
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Does anyone have an idea of why or where is the error?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --
</span><br>
<span class="quotelev2">&gt;     &gt; Riccardo Zese
</span><br>
<span class="quotelev2">&gt;     &gt; PhD Student
</span><br>
<span class="quotelev2">&gt;     &gt; ENDIF - Dipartimento di Ingegneria
</span><br>
<span class="quotelev2">&gt;     &gt; Universit&#224; di Ferrara
</span><br>
<span class="quotelev2">&gt;     &gt; Via Saragat 1, I-44122,  Ferrara,  Italy
</span><br>
<span class="quotelev2">&gt;     &gt; Tel. +39 0532974827 &lt;tel:%2B39%200532974827&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/02/26312.php">http://www.open-mpi.org/community/lists/users/2015/02/26312.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/02/26314.php">http://www.open-mpi.org/community/lists/users/2015/02/26314.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Universit&#224; di Ferrara
</span><br>
<span class="quotelev1">&gt; Via Saragat 1, I-44122,  Ferrara,  Italy
</span><br>
<span class="quotelev1">&gt; Tel. +39 0532974827
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/02/26318.php">http://www.open-mpi.org/community/lists/users/2015/02/26318.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>Previous message:</strong> <a href="26321.php">Thibaud Kloczko: "[OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>In reply to:</strong> <a href="26318.php">Riccardo Zese: "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
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

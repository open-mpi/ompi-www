<?
$subject_val = "Re: [OMPI devel] Bug in man page of MPI_Type_create_hindexed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 11:26:55 2014" -->
<!-- isoreceived="20140416152655" -->
<!-- sent="Wed, 16 Apr 2014 15:26:53 +0000" -->
<!-- isosent="20140416152653" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in man page of MPI_Type_create_hindexed" -->
<!-- id="CD0DD471-F23D-4666-B7F8-B943E9E90BE3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAK9AuB_fsfiyMGo63QJ5NArAyknobxwmH4RJqXPdM8uNdNTBfw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug in man page of MPI_Type_create_hindexed<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 11:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14553.php">Rolf vandeVaart: "[OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>Previous message:</strong> <a href="14551.php">Adrian Reber: "Re: [OMPI devel] 1-question developer poll"</a>
<li><strong>In reply to:</strong> <a href="14540.php">Bastian Beischer: "[OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent catch -- thanks for letting us know.  I've committed the fix and slated it over to the v1.8 branch for inclusion in 1.8.1.
<br>
<p><p>On Apr 16, 2014, at 7:55 AM, Bastian Beischer &lt;bastian.beischer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In open-mpi version 1.8 the man page of MPI_Type_create_hindexed gives this declaration of the function:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int MPI_Type_create_hindexed(int count, const int array_of_blocklengths[],
</span><br>
<span class="quotelev1">&gt;     const int array_of_displacements[], MPI_Datatype oldtype,
</span><br>
<span class="quotelev1">&gt;     MPI_Datatype *newtype)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However I think the array_of_displacements should be of type MPI_Aint?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was relevant to me because I wanted to create a datatype with large offsets &gt; INT_MAX and I didn't know I could use MPI_Type_create_hindexed until a colleague pointed me to the MPI standard which says that the displacements are of type MPI_Aint.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; Bastian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Bastian Beischer
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University of Technology
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Office: 28 C 203
</span><br>
<span class="quotelev1">&gt; Phone: +49-241-80-27205
</span><br>
<span class="quotelev1">&gt; E-mail: beischer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Address: I. Physikalisches Institut B, Sommerfeldstr. 14, D-52074 Aachen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @CERN
</span><br>
<span class="quotelev1">&gt; Office: Bdg 32-4-B12
</span><br>
<span class="quotelev1">&gt; Phone: +41-22-76-75750
</span><br>
<span class="quotelev1">&gt; E-mail: bastian.beischer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Address: CERN, CH-1211 Geneve 23
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14540.php">http://www.open-mpi.org/community/lists/devel/2014/04/14540.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14553.php">Rolf vandeVaart: "[OMPI devel] Possible bug with derived datatypes and openib BTL in trunk"</a>
<li><strong>Previous message:</strong> <a href="14551.php">Adrian Reber: "Re: [OMPI devel] 1-question developer poll"</a>
<li><strong>In reply to:</strong> <a href="14540.php">Bastian Beischer: "[OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
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

<?
$subject_val = "Re: [OMPI users] how to make a process start and then join a MPI group";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 17:25:58 2008" -->
<!-- isoreceived="20080728212558" -->
<!-- sent="Mon, 28 Jul 2008 17:25:52 -0400" -->
<!-- isosent="20080728212552" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to make a process start and then join a MPI group" -->
<!-- id="2F118A4F-3154-411C-9D57-B3B7468CAE82_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D20788E3-810D-49E5-9A3E-6FB2E4450E38_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to make a process start and then join a MPI group<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 17:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6173.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Previous message:</strong> <a href="6171.php">Jitendra Kumar: "[OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="6170.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at this a little closer on the v1.2 branch, it does look like  
<br>
it could be a bug.
<br>
<p>The child definitely does not return from INTERCOMM_MERGE until the  
<br>
parent enters MPI_RECV.  So I put in a bogus MPI_TEST call before the  
<br>
parent calls MPI_RECV, and that also causes the child the return from  
<br>
INTERCOMM_MERGE.  That makes it sound like we have something that is  
<br>
not finishing progress properly before leaving INTERCOMM_MERGE;  
<br>
calling progress again (e.g., calling MPI_TEST or the MPI_RECV) makes  
<br>
enough happen that allows the children to complete the  
<br>
INTERCOMM_MERGE.  :-\
<br>
<p>To be honest, I don't think we'll be too motivated to fix this in the  
<br>
old v1.2 series because we're getting darn close to putting out v1.3.   
<br>
Support for the dynamics and the progression engine have changed a  
<br>
*lot* behind the scenes in v1.3.
<br>
<p>To be specific: this problem doesn't seem to happen in the code for  
<br>
the upcoming v1.3 release, however (I would not encourage using a  
<br>
nightly snapshot at the moment; we have a fairly gnarly bug in other  
<br>
kinds of progression issues that needs to be fixed).
<br>
<p><p>On Jul 28, 2008, at 5:02 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 28, 2008, at 4:56 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Having different values is fine for high parameter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the problem comes from using NULL, NULL instead of &amp;argc,  
</span><br>
<span class="quotelev2">&gt;&gt; &amp;argv as parameters for MPI_Init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Calling MPI_INIT with NULL, NULL is legal; we don't actually do  
</span><br>
<span class="quotelev1">&gt; anything with those values, IIRC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6173.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Previous message:</strong> <a href="6171.php">Jitendra Kumar: "[OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="6170.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
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

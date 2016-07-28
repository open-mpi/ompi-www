<?
$subject_val = "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 21 19:35:06 2012" -->
<!-- isoreceived="20120521233506" -->
<!-- sent="Mon, 21 May 2012 17:35:03 -0600" -->
<!-- isosent="20120521233503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="71D7A44B-1669-4803-9C3D-5016FF66BFC0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FBABC6F.7000200_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-21 19:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19323.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Previous message:</strong> <a href="19321.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>In reply to:</strong> <a href="19320.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19324.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you!
<br>
<p>This is on my list to investigate; I'm sorry I haven't had a chance to look at it in detail yet.  
<br>
<p>I hope to look at this in detail later this week.
<br>
<p><p>On May 21, 2012, at 4:06 PM, Orion Poplawski wrote:
<br>
<p><span class="quotelev1">&gt; On 05/15/2012 10:37 AM, Orion Poplawski wrote:
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="https://bugzilla.redhat.com/show_bug.cgi?id=814798">https://bugzilla.redhat.com/show_bug.cgi?id=814798</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -showme:link
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -m64 -L/usr/lib64/openmpi/lib -lmpi -ldl -lhwloc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -ldl and -lhwloc should not be listed.  The user should only link against
</span><br>
<span class="quotelev2">&gt;&gt; libraries that they are using directly, namely -lmpi, and they should
</span><br>
<span class="quotelev2">&gt;&gt; explicitly add -ldl and -lhwloc if their code directly uses those libraries.
</span><br>
<span class="quotelev2">&gt;&gt; There does not appear to be any references to libdl or libhwloc symbols in the
</span><br>
<span class="quotelev2">&gt;&gt; openmpi headers which is the other place it could come in.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; configure appears to add them to opal_WRAPPER_EXTRA_LIBS which then makes its
</span><br>
<span class="quotelev2">&gt;&gt; way into this list.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This report is with openmpi-1.5.5.  Haven't tested with 1.6, but configure
</span><br>
<span class="quotelev2">&gt;&gt; looks to do the same in it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/3103">https://svn.open-mpi.org/trac/ompi/ticket/3103</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder Office                  FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19323.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Previous message:</strong> <a href="19321.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>In reply to:</strong> <a href="19320.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19324.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
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

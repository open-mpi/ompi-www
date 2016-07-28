<?
$subject_val = "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 21 20:15:27 2012" -->
<!-- isoreceived="20120522001527" -->
<!-- sent="Mon, 21 May 2012 18:15:22 -0600" -->
<!-- isosent="20120522001522" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="5623867B-3C3B-49DC-81FC-B07E62D80909_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FB2863C.7070006_at_cora.nwra.com" -->
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
<strong>Date:</strong> 2012-05-21 20:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19325.php">Mudassar Majeed: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Previous message:</strong> <a href="19323.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>In reply to:</strong> <a href="19279.php">Orion Poplawski: "[OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19330.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19330.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2012, at 10:37 AM, Orion Poplawski wrote:
<br>
<p><span class="quotelev1">&gt; $ mpicc -showme:link
</span><br>
<span class="quotelev1">&gt; -pthread -m64 -L/usr/lib64/openmpi/lib -lmpi -ldl -lhwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -ldl and -lhwloc should not be listed.  The user should only link against libraries that they are using directly, namely -lmpi, and they should explicitly add -ldl and -lhwloc if their code directly uses those libraries. There does not appear to be any references to libdl or libhwloc symbols in the openmpi headers which is the other place it could come in.
</span><br>
<p>I just read this a few times, and I admit that I'm a little confused.
<br>
<p>libmpi does use symbols from libdl; we use it to load OMPI's plugins.  So I'm not sure why you're saying we shouldn't -ldl in the wrapper compiler...?
<br>
<p>libhwloc might be a little questionable here -- I'll have to check to see whether 1.6 uses hwloc only in a plugin or whether it's used in the base library (I don't remember offhand).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19325.php">Mudassar Majeed: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Previous message:</strong> <a href="19323.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>In reply to:</strong> <a href="19279.php">Orion Poplawski: "[OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19330.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19330.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
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

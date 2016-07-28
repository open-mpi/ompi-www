<?
$subject_val = "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 00:35:12 2012" -->
<!-- isoreceived="20120523043512" -->
<!-- sent="Tue, 22 May 2012 22:34:58 -0600" -->
<!-- isosent="20120523043458" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="4FBC68F2.3050800_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5623867B-3C3B-49DC-81FC-B07E62D80909_at_cisco.com" -->
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
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 00:34:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19331.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19329.php">Simone Pellegrini: "[OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>In reply to:</strong> <a href="19324.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19331.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19331.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/21/2012 06:15 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 15, 2012, at 10:37 AM, Orion Poplawski wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -showme:link
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -m64 -L/usr/lib64/openmpi/lib -lmpi -ldl -lhwloc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -ldl and -lhwloc should not be listed.  The user should only link against libraries that they are using directly, namely -lmpi, and they should explicitly add -ldl and -lhwloc if their code directly uses those libraries. There does not appear to be any references to libdl or libhwloc symbols in the openmpi headers which is the other place it could come in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just read this a few times, and I admit that I'm a little confused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libmpi does use symbols from libdl; we use it to load OMPI's plugins.  So I'm not sure why you're saying we shouldn't -ldl in the wrapper compiler...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libhwloc might be a little questionable here -- I'll have to check to see whether 1.6 uses hwloc only in a plugin or whether it's used in the base library (I don't remember offhand).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>But libmpi is already linked against libdl and libhwloc.  The wrapper 
<br>
libraries are added when linking user code.  But unless a user's code 
<br>
directly uses libdl or libhwloc they don't need to link to those libraries.
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19331.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19329.php">Simone Pellegrini: "[OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>In reply to:</strong> <a href="19324.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19331.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19331.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
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

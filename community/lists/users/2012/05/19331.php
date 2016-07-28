<?
$subject_val = "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 00:36:55 2012" -->
<!-- isoreceived="20120523043655" -->
<!-- sent="Tue, 22 May 2012 22:36:47 -0600" -->
<!-- isosent="20120523043647" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="4FBC695F.7040702_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FBC68F2.3050800_at_cora.nwra.com" -->
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
<strong>Date:</strong> 2012-05-23 00:36:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19332.php">marco atzeri: "[OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19330.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19330.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19340.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19340.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/22/2012 10:34 PM, Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; On 05/21/2012 06:15 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 15, 2012, at 10:37 AM, Orion Poplawski wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc -showme:link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -pthread -m64 -L/usr/lib64/openmpi/lib -lmpi -ldl -lhwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -ldl and -lhwloc should not be listed. The user should only link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; against libraries that they are using directly, namely -lmpi, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they should explicitly add -ldl and -lhwloc if their code directly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uses those libraries. There does not appear to be any references to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libdl or libhwloc symbols in the openmpi headers which is the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; place it could come in.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just read this a few times, and I admit that I'm a little confused.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libmpi does use symbols from libdl; we use it to load OMPI's plugins.
</span><br>
<span class="quotelev2">&gt;&gt; So I'm not sure why you're saying we shouldn't -ldl in the wrapper
</span><br>
<span class="quotelev2">&gt;&gt; compiler...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libhwloc might be a little questionable here -- I'll have to check to
</span><br>
<span class="quotelev2">&gt;&gt; see whether 1.6 uses hwloc only in a plugin or whether it's used in
</span><br>
<span class="quotelev2">&gt;&gt; the base library (I don't remember offhand).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But libmpi is already linked against libdl and libhwloc. The wrapper
</span><br>
<span class="quotelev1">&gt; libraries are added when linking user code. But unless a user's code
</span><br>
<span class="quotelev1">&gt; directly uses libdl or libhwloc they don't need to link to those libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I should add the caveat that they are need when linking statically, but 
<br>
not when using shared libraries.
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
<li><strong>Next message:</strong> <a href="19332.php">marco atzeri: "[OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19330.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19330.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19340.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19340.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
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

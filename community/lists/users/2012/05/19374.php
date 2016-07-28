<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 18:07:25 2012" -->
<!-- isoreceived="20120524220725" -->
<!-- sent="Thu, 24 May 2012 16:07:20 -0600" -->
<!-- isosent="20120524220720" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="4FBEB118.8010703_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CBE24189.CB94%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 18:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19375.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19340.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19375.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19375.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/23/2012 07:29 AM, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; On 5/22/12 10:36 PM, &quot;Orion Poplawski&quot;&lt;orion_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 05/22/2012 10:34 PM, Orion Poplawski wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 05/21/2012 06:15 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 15, 2012, at 10:37 AM, Orion Poplawski wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpicc -showme:link
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -pthread -m64 -L/usr/lib64/openmpi/lib -lmpi -ldl -lhwloc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -ldl and -lhwloc should not be listed. The user should only link
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; against libraries that they are using directly, namely -lmpi, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they should explicitly add -ldl and -lhwloc if their code directly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; uses those libraries. There does not appear to be any references to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libdl or libhwloc symbols in the openmpi headers which is the other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; place it could come in.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just read this a few times, and I admit that I'm a little confused.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libmpi does use symbols from libdl; we use it to load OMPI's plugins.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I'm not sure why you're saying we shouldn't -ldl in the wrapper
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler...?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libhwloc might be a little questionable here -- I'll have to check to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see whether 1.6 uses hwloc only in a plugin or whether it's used in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the base library (I don't remember offhand).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But libmpi is already linked against libdl and libhwloc. The wrapper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries are added when linking user code. But unless a user's code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly uses libdl or libhwloc they don't need to link to those
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I should add the caveat that they are need when linking statically, but
</span><br>
<span class="quotelev2">&gt;&gt; not when using shared libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And therein lies the problem.  We have a number of users who build Open
</span><br>
<span class="quotelev1">&gt; MPI statically and even some who build both static and shared libraries in
</span><br>
<span class="quotelev1">&gt; the same build.  We've never been able to figure out a reasonable way to
</span><br>
<span class="quotelev1">&gt; guess if we need to add -lhwloc or -ldl, so we add them.  It's better to
</span><br>
<span class="quotelev1">&gt; list them and have some redundant dependencies (since you have to have the
</span><br>
<span class="quotelev1">&gt; library anyways) than to not list them and have odd link errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're open to better suggestions, but keep in mind that they have to be
</span><br>
<span class="quotelev1">&gt; portable and not require the user to change their build systems (ie, we
</span><br>
<span class="quotelev1">&gt; can't just depend on libtool to do everything for us).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p>Could you not add them if --enable-static is not passed to configure?  That 
<br>
would at least help with building the Fedora packages.
<br>
<p><p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder Office                  FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19375.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19340.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19375.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19375.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
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

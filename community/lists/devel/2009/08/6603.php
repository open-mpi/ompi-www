<?
$subject_val = "Re: [OMPI devel] Improvement of openmpi.spec";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 10:48:59 2009" -->
<!-- isoreceived="20090806144859" -->
<!-- sent="Thu, 6 Aug 2009 16:48:53 +0200 (CEST)" -->
<!-- isosent="20090806144853" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Improvement of openmpi.spec" -->
<!-- id="Pine.LNX.4.64.0908061638320.29172_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E745837A-2209-4929-B337-45D14E306415_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Improvement of openmpi.spec<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 10:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6604.php">Jeff Squyres: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 6 Aug 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev3">&gt;&gt; &gt;  -Source: openmpi-%{version}.tar.$EXTENSION
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  +Source: %{name}-%{version}.tar.$EXTENSION
</span><br>
<p>The spec file parser defines some of these variables by default. F.e. 
<br>
after encountering at the top of the file:
<br>
<p>Name: fftw
<br>
Version: 2.1.5
<br>
Release: 5.bc
<br>
<p>something like %{name}-%{version}-%{release} will be expanded to 
<br>
fftw-2.1.5-5.bc. So there is no need to define any of these 
<br>
variables... The suggestion for improvement here is only cosmetic, it 
<br>
looks nicer to not have hardcoded names all over the spec file. This 
<br>
makes it easier to later change the name of the package, f.e. to allow 
<br>
installing several packages at the same time by simply changing:
<br>
<p>Name: fftw2
<br>
<p>to allow for the package called 'fftw' to track the 3.x versions. This 
<br>
was done previously by Red Hat f.e. for their python packages.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6604.php">Jeff Squyres: "Re: [OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
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

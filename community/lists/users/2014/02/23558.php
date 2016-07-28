<?
$subject_val = "Re: [OMPI users] GNU 4.8.x and (no) mpi_f08 module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 06:09:13 2014" -->
<!-- isoreceived="20140206110913" -->
<!-- sent="Thu, 6 Feb 2014 11:09:12 +0000" -->
<!-- isosent="20140206110912" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GNU 4.8.x and (no) mpi_f08 module" -->
<!-- id="9A586C43-3FDC-4AC4-87CC-AA88E2AE9C4E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1748752944.60365.1391677747646.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] GNU 4.8.x and (no) mpi_f08 module<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 06:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23559.php">Jeff Squyres (jsquyres): "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Previous message:</strong> <a href="23557.php">Christoph Niethammer: "[OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
<li><strong>In reply to:</strong> <a href="23557.php">Christoph Niethammer: "[OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2014, at 4:09 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am wondering if it is possible to get a working mpi_f08 module with Open MPI &gt;=1.7.4 and GNU 4.8.x compiler.
</span><br>
<p>It is not, sorry.
<br>
<p><span class="quotelev1">&gt; Unfortunately configure (without additional options beside --prefix) decides to not build the mpi_f08 module:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:56605: checking if building Fortran 'use mpi' bindings
</span><br>
<span class="quotelev1">&gt; configure:56608: result: yes
</span><br>
<span class="quotelev1">&gt; configure:57983: checking if building Fortran 'use mpi_f08' bindings
</span><br>
<span class="quotelev1">&gt; configure:57990: result: no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Intel 14 the mpi_f08 module is build correctly.
</span><br>
<p>Correct.
<br>
<p>The short version is that gfortran &lt;= v4.8 does not contain enough F08 support to support the mpi_f08 module.  More detail can be found in the README:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.7/README#L322">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.7/README#L322</a>
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
<li><strong>Next message:</strong> <a href="23559.php">Jeff Squyres (jsquyres): "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Previous message:</strong> <a href="23557.php">Christoph Niethammer: "[OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
<li><strong>In reply to:</strong> <a href="23557.php">Christoph Niethammer: "[OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
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

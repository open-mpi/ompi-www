<?
$subject_val = "Re: [OMPI users] [OMPI devel] Change compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 18 16:10:40 2016" -->
<!-- isoreceived="20160718201040" -->
<!-- sent="Mon, 18 Jul 2016 20:10:23 +0000" -->
<!-- isosent="20160718201023" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel] Change compiler" -->
<!-- id="B18677A2-10F6-4340-82EC-CEC15903EF69_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="D3B284C3.3781%emani1_at_llnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel] Change compiler<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-18 16:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29681.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29679.php">Emani, Murali: "[OMPI users] Change compiler"</a>
<li><strong>In reply to:</strong> <a href="29679.php">Emani, Murali: "[OMPI users] Change compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 18, 2016, at 4:06 PM, Emani, Murali &lt;emani1_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to know if there is Clang support for OpenMPI codebase.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to change the underlying compiler from gcc to clang in &#145;configure' and &#145;make all install&#146;, I changed these values in Makefile in root dir and another one in config directory. The steps during &#145;configure&#146; reflect gcc again instead of clang. Is this the right way or am I missing something here ?
</span><br>
<p>(you don't need to mail to both devel and users -- I'm replying to just the users list)
<br>
<p>You can set which compiler to use via the configure command line:
<br>
<p>$ ./configure CC=clang CXX=clang++ ...
<br>
<p><span class="quotelev1">&gt; Is the wrapper compiler environment variable &#145;OMPI_CC&#146; intended to replace the underlying compiler when compiling an MPI application.
</span><br>
<p>Setting the compiler via the configure command line will propagate out your choice of compiler throughout all of Open MPI, to include the wrapper compilers.
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
<li><strong>Next message:</strong> <a href="29681.php">Gilles Gouaillardet: "Re: [OMPI users] Help - Client / server - app hangs in connect/accept by the second or next client that wants to connect to server"</a>
<li><strong>Previous message:</strong> <a href="29679.php">Emani, Murali: "[OMPI users] Change compiler"</a>
<li><strong>In reply to:</strong> <a href="29679.php">Emani, Murali: "[OMPI users] Change compiler"</a>
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

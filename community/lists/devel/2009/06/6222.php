<?
$subject_val = "Re: [OMPI devel] Pathscale C++";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 07:29:57 2009" -->
<!-- isoreceived="20090611112957" -->
<!-- sent="Thu, 11 Jun 2009 07:29:53 -0400" -->
<!-- isosent="20090611112953" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pathscale C++" -->
<!-- id="E7FD839BAFD8CA499213A6EE26F2368004CC48_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] Pathscale C++" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Pathscale C++<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 07:29:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6223.php">Leo P.: "[OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6221.php">Terry Dontje: "Re: [OMPI devel] Pathscale C++"</a>
<li><strong>Maybe in reply to:</strong> <a href="6220.php">Terry Dontje: "[OMPI devel] Pathscale C++"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the same old pathscale problem. In at least some environments, c++ constructors of global objects don't get called, leaving things like mpi::comm_world uninitialized. See the faq. 
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Thu Jun 11 07:26:19 2009
<br>
Subject: [OMPI devel] Pathscale C++
<br>

<br>
Has anyone successfully run C++ tests on OMPI built with Pathscale 
<br>
compilers?  I am seeing aborts on calls to Get_size.
<br>

<br>
--td
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6222/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6223.php">Leo P.: "[OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6221.php">Terry Dontje: "Re: [OMPI devel] Pathscale C++"</a>
<li><strong>Maybe in reply to:</strong> <a href="6220.php">Terry Dontje: "[OMPI devel] Pathscale C++"</a>
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

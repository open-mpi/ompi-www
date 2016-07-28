<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 12:14:29 2007" -->
<!-- isoreceived="20070814161429" -->
<!-- sent="Tue, 14 Aug 2007 10:14:17 -0600" -->
<!-- isosent="20070814161417" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="[OMPI devel] Autoconf/Automake version change for v1.2" -->
<!-- id="649461FC-5EE6-4AF2-99DD-C9AEB61E5496_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 12:14:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2151.php">Jeff Squyres: "[OMPI devel] Last night's MTT"</a>
<li><strong>Previous message:</strong> <a href="2149.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>As discussed last week at the collectives meet, I changed the version  
<br>
of Autoconf and Automake used to build the v1.2 tarballs (nightly and  
<br>
release) from AC 2.59/AM 1.9.6 to AC 2.61/AM 1.10 (same as the  
<br>
trunk).  Libtool remained at the 2.1a beta that we've been using for  
<br>
the entire 1.2.x release series.  This upgrade was needed to fix a  
<br>
bug with one of the compilers (don't remember which -- Jeff has more  
<br>
information).
<br>
<p>On a slightly different topic, in the near future a patch will be  
<br>
coming into the trunk that allows more recent versions of the LIbtool  
<br>
2.1a nightly tarballs to be used with Open MPI.  At that time, I'll  
<br>
update the version of Libtool used to build the trunk (but not v1.1  
<br>
or v1.2) to a newer LT version.  This will *not* require any changes  
<br>
in the version of Libtool you have installed for developer builds of  
<br>
Open MPI.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2151.php">Jeff Squyres: "[OMPI devel] Last night's MTT"</a>
<li><strong>Previous message:</strong> <a href="2149.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
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

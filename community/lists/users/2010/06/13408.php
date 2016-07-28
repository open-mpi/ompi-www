<?
$subject_val = "Re: [OMPI users] Unable to include mpich library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 25 07:49:28 2010" -->
<!-- isoreceived="20100625114928" -->
<!-- sent="Fri, 25 Jun 2010 07:49:23 -0400" -->
<!-- isosent="20100625114923" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to include mpich library" -->
<!-- id="B61FC102-699B-41B7-B5D9-6CC76B376EF3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTikVHNh96SWHcTDQ4Yxp8FYx1b2ERws9Vt-zYUqb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to include mpich library<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-25 07:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13409.php">Philippe: "[OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13407.php">G&#246;tz Waschk: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>In reply to:</strong> <a href="13407.php">G&#246;tz Waschk: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13420.php">Srinivas Gopal: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="13420.php">Srinivas Gopal: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2010, at 4:11 AM, G&#246;tz Waschk wrote:
<br>
<p><span class="quotelev1">&gt; libmpich is not part of open-mpi. Maybe your software build with mpich
</span><br>
<span class="quotelev1">&gt; only? If your software does not use anything specific to mpich, you
</span><br>
<span class="quotelev1">&gt; could try to change -lmpich to -lmpi .
</span><br>
<p>Better yet, the Open MPI team strongly discourages listing individual MPI libraries on the link line because we reserve the right to change them over time.
<br>
<p>Instead, we *strongly* advise you to just use Open MPI's wrapper compilers, which will insert all the Right compiler and linker flags.  Then you don't have to worry about any of those pesky -I and -L options, especially when transitioning between different MPI implementations and versions of Open MPI.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=mpi-apps#general-build">http://www.open-mpi.org/faq/?category=mpi-apps#general-build</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers">http://www.open-mpi.org/faq/?category=mpi-apps#cant-use-wrappers</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13409.php">Philippe: "[OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13407.php">G&#246;tz Waschk: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>In reply to:</strong> <a href="13407.php">G&#246;tz Waschk: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13420.php">Srinivas Gopal: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Reply:</strong> <a href="13420.php">Srinivas Gopal: "Re: [OMPI users] Unable to include mpich library"</a>
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

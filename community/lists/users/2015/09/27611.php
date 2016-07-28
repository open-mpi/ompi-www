<?
$subject_val = "Re: [OMPI users] Problem with using MPI in a Python extension";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 11:56:10 2015" -->
<!-- isoreceived="20150917155610" -->
<!-- sent="Thu, 17 Sep 2015 15:56:06 +0000" -->
<!-- isosent="20150917155606" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with using MPI in a Python extension" -->
<!-- id="86C8071D-E68B-4724-9095-296E3EC0A7B8_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="6CD52BCF-8237-4545-981F-E0BFD701ACA3_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with using MPI in a Python extension<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 11:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27612.php">Shang Li: "[OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27610.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27610.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27614.php">Lisandro Dalcin: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Reply:</strong> <a href="27614.php">Lisandro Dalcin: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 17, 2015, at 11:44 AM, Joel Hermanns &lt;joel.hermanns_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the quick answer!
</span><br>
<p>Be sure to see Nick's answer, too -- mpi4py is a nice package.
<br>
<p><span class="quotelev1">&gt; I have a few questions now:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Are there any downsides of using &#151;disable-dlopen?
</span><br>
<p>You won't be able to add or remove plugins in the filesystem after you do the Open MPI installation.  But that's a pretty unusual thing to do, so I wouldn't worry about it.
<br>
<p><span class="quotelev1">&gt; 2. Are there any other options? We might not be able to change MPI installation, when this is running on a supercomputer.
</span><br>
<p>I'm not super familiar with Python and its extension capabilities -- Nick's email implies that there's a different way to solve the problem, and I confess to not remembering what mpi4py does, offhand.
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
<li><strong>Next message:</strong> <a href="27612.php">Shang Li: "[OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>Previous message:</strong> <a href="27610.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27610.php">Joel Hermanns: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27614.php">Lisandro Dalcin: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Reply:</strong> <a href="27614.php">Lisandro Dalcin: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
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

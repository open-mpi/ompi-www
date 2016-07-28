<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 15:59:04 2007" -->
<!-- isoreceived="20071017195904" -->
<!-- sent="Wed, 17 Oct 2007 15:58:50 -0400" -->
<!-- isosent="20071017195850" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64" -->
<!-- id="D07F571F-8133-4C19-BFE8-74E3BB0264AA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0710170935red13cfat256f3af281896228_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 15:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4235.php">Jeff Squyres: "Re: [OMPI users] OMPI not work with Intel '-fast' option"</a>
<li><strong>Previous message:</strong> <a href="4233.php">Reuti: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>In reply to:</strong> <a href="4231.php">Jim Kusznir: "[OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4246.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Reply:</strong> <a href="4246.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 17, 2007, at 12:35 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; checking if Fortran 90 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 90 LOGICAL... ./configure: line 34070:  7262
</span><br>
<span class="quotelev1">&gt; Segmentation fault      ./conftest 1&gt;&amp;5 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; configure: error: Could not determine size of LOGICAL
</span><br>
<p>Awesome!  It looks like gfortran itself is seg faulting.
<br>
<p>Can you send all the information listed on the getting help page?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>That will help confirm/deny whether it's gfortran itself that is seg  
<br>
faulting.  If it's gfortran that's seg faulting, there's not much  
<br>
that Open MPI can do...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4235.php">Jeff Squyres: "Re: [OMPI users] OMPI not work with Intel '-fast' option"</a>
<li><strong>Previous message:</strong> <a href="4233.php">Reuti: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>In reply to:</strong> <a href="4231.php">Jim Kusznir: "[OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4246.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Reply:</strong> <a href="4246.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
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

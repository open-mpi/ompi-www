<?
$subject_val = "Re: [OMPI users] where is mpif.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 11:40:44 2008" -->
<!-- isoreceived="20080924154044" -->
<!-- sent="Wed, 24 Sep 2008 11:40:38 -0400" -->
<!-- isosent="20080924154038" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where is mpif.h ?" -->
<!-- id="BBB3E295-3BB9-454D-9425-C62F3C6264E3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="189867.42022.qm_at_web34803.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] where is mpif.h ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 11:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6719.php">Brock Palen: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>Previous message:</strong> <a href="6717.php">Shafagh Jafer: "[OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>In reply to:</strong> <a href="6716.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6742.php">Shafagh Jafer: "[OMPI users] which -lmpi is picked?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 24, 2008, at 10:47 AM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I am using the wrapper compilers. But in my simulator  
</span><br>
<span class="quotelev1">&gt; Makefile.common I am including the files from gcc and g++. Please  
</span><br>
<span class="quotelev1">&gt; see my attached makefile. I am also attaching my previouse  
</span><br>
<span class="quotelev1">&gt; Makefile.common which I was MPICH instead of openmpi. Please see  
</span><br>
<span class="quotelev1">&gt; both of them and see the defferences, you will see that in the new  
</span><br>
<span class="quotelev1">&gt; makefile, I am only commenting the MPICH related stuff and replacing  
</span><br>
<span class="quotelev1">&gt; gcc and g++ with mpicc and mpic++. Is there anything else I am doing  
</span><br>
<span class="quotelev1">&gt; wrong or I am not supposed not have in my new Make file??
</span><br>
<p>You did a few other things, too.  ;-)  (do a diff -u between the two  
<br>
files and you'll see the differences)
<br>
<p>The OMPI Makefile.common looks ok (you don't need the -L for OMPI's  
<br>
libs, but it's not harmful).  I don't know exactly how it's used, but  
<br>
from the context in that file, I guess it's ok.
<br>
<p>FWIW, I'd guess that you should be able to use MPICH's wrapper  
<br>
compilers in the same way that you use OMPI's wrapper compilers.  I  
<br>
don't know this for sure, but I do know that MPICH has wrapper  
<br>
compilers and I was under the impression that they worked pretty much  
<br>
like ours.
<br>
<p>As for why you're getting those STL errors, are you able to compile  
<br>
any C++ STL codes on your machine at all?  I.e., do you know that the C 
<br>
++ compiler and STL are installed and functioning properly?  The OMPI  
<br>
v1.2 C++ bindings use the STL in a few places; it looks like that is  
<br>
failing to compile with some nebulous errors on your machine.
<br>
<p>(FWIW, in the upcoming Open MPI v1.3, we have removed all uses of the  
<br>
STL from our C++ bindings, at least partly due to the fact that we  
<br>
have seen multiple users that have functional C++ compilers but broken  
<br>
have STL installations)
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
<li><strong>Next message:</strong> <a href="6719.php">Brock Palen: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>Previous message:</strong> <a href="6717.php">Shafagh Jafer: "[OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>In reply to:</strong> <a href="6716.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6742.php">Shafagh Jafer: "[OMPI users] which -lmpi is picked?"</a>
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

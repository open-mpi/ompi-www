<?
$subject_val = "Re: [OMPI users] compiling from source from svn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 14:57:19 2008" -->
<!-- isoreceived="20080516185719" -->
<!-- sent="Fri, 16 May 2008 18:57:10 +0000" -->
<!-- isosent="20080516185710" -->
<!-- name="Karsten Bolding" -->
<!-- email="karsten_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling from source from svn" -->
<!-- id="20080516185710.GB21182_at_dbmail.dk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20C4492C-6765-4531-B4D8-10E67F1F987B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling from source from svn<br>
<strong>From:</strong> Karsten Bolding (<em>karsten_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-16 14:57:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5688.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5686.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>In reply to:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5688.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Reply:</strong> <a href="5688.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
just did a clean check-out:
<br>
<p>kb_at_gate:/data/kb/compile/openmpi-svn$ svn update
<br>
At revision 18449.
<br>
<p>and I get the same problem:
<br>
<p>gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
<br>
-fvisibility=hidden -o .libs/orted orted.o -Wl,--export-dynamic
<br>
../../../orte/.libs/libopen-rte.so -lnsl -lutil -lm  -Wl,--rpath
<br>
-Wl,/opt/openmpi-svn//lib
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`mca_base_select'
<br>
:
<br>
:
<br>
<p>Ubuntu/hardy: Linux gate 2.6.24-16-server #1 SMP
<br>
subversion: 1.4.6dfsg1-2ubuntu1
<br>
autoconf: 2.61-4
<br>
automake: 1:1.10.1-2
<br>
libtool: 1.5.26-1ubuntu1
<br>
ifort: Version 10.0 
<br>
<p>Karsten
<br>
<p>On Fri, May 16, 2008 at 12:02:34 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hmm.  I just committed this feature to the trunk the other day.  Could  
</span><br>
<span class="quotelev1">&gt; you perchance have gotten an intermediate r number that didn't want to  
</span><br>
<span class="quotelev1">&gt; compile?  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What r number did you get?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, my SVN HEAD compiles fine today: r18448.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
----------------------------------------------------------------------
Karsten Bolding                    Bolding &amp; Burchard ApS
Strandgyden 25                     Phone: +45 64422058
DK-5466 Asperup                    Fax:   +45 64422068
Denmark                            Email: karsten_at_[hidden]
<a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
----------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5688.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5686.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>In reply to:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5688.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Reply:</strong> <a href="5688.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
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

<?
$subject_val = "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 13:38:39 2009" -->
<!-- isoreceived="20090825173839" -->
<!-- sent="Tue, 25 Aug 2009 13:38:34 -0400" -->
<!-- isosent="20090825173834" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors" -->
<!-- id="0A95B83D-9B53-4D41-B96D-2F217BE5067F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="00e801ca25a7$ca542a00$5efc7e00$_at_ucsd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-25 13:38:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10486.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10484.php">Jason Palmer: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>In reply to:</strong> <a href="10484.php">Jason Palmer: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 25, 2009, at 1:16 PM, Jason Palmer wrote:
<br>
<p><span class="quotelev1">&gt; I seem to have fixed the problem using the miracle of  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH.  I probably should have known about the importance  
</span><br>
<span class="quotelev1">&gt; of that environment variable already, and I imagine no knowing about  
</span><br>
<span class="quotelev1">&gt; it has caused me problems in the past.
</span><br>
<p>Yes, this looks like it was your problem.  Looking in your config.log,  
<br>
I see:
<br>
<p>configure:35420: ./conftest
<br>
./conftest: error while loading shared libraries: libgfortran.so.2:  
<br>
cannot open shared object file: No such file or directory
<br>
<p>Setting LD_LIBRARY_PATH to point to the right gfortran installation  
<br>
likely fixed this.
<br>
<p>Glad you figured it out!
<br>
<p><p><span class="quotelev1">&gt; So besides the important environment variables listed in the openmpi  
</span><br>
<span class="quotelev1">&gt; docs, like LDFLAGS, perhaps something about the variable  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH should be mentioned as well.
</span><br>
<p>Fair enough... will do.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10486.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10484.php">Jason Palmer: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>In reply to:</strong> <a href="10484.php">Jason Palmer: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
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

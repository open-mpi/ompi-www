<?
$subject_val = "Re: [OMPI users] Segmentation fault - Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 09:07:35 2009" -->
<!-- isoreceived="20090707130735" -->
<!-- sent="Tue, 7 Jul 2009 09:07:30 -0400" -->
<!-- isosent="20090707130730" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault - Address not mapped" -->
<!-- id="D2F4735C-30B3-4F52-9301-4FB200A67778_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d62c43c00907070508j61619864u508824d982f6b1db_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault - Address not mapped<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 09:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9869.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Previous message:</strong> <a href="9867.php">Jeff Squyres: "Re: [OMPI users] Question on running the openmpi test modules"</a>
<li><strong>In reply to:</strong> <a href="9864.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 7, 2009, at 8:08 AM, Catalin David wrote:
<br>
<p><span class="quotelev1">&gt; Thank you very much for the help and assistance :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using -isystem /users/cluster/cdavid/local/include the program now
</span><br>
<span class="quotelev1">&gt; runs fine (loads the correct mpi.h).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is very fishy.
<br>
<p>If mpic++ is in /users/cluster/cdavid/local/bin, and that directory is  
<br>
in the front of your $PATH, then using that to compile your  
<br>
application should pull in the right mpi.h file.
<br>
<p>To be clear: if you use the right mpicc / mpic++ / mpif77 / mpif90,  
<br>
the Right header files should get pulled in because the wrappers will  
<br>
do the proper -I for you.  You can verify this by checking the output  
<br>
of &quot;mpic++ my_program.cc -o my_program --showme&quot; and see what compiler  
<br>
flags are getting passed down to the underlying compiler.
<br>
<p>You might want to double check your setup to ensure that your PATH is  
<br>
absolutely correct, you have run &quot;rehash&quot; if you needed to (csh /  
<br>
tcsh), your LD_LIBRARY_PATH points to the right library (on all nodes,  
<br>
even for non-interactive logins), etc.
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
<li><strong>Next message:</strong> <a href="9869.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Previous message:</strong> <a href="9867.php">Jeff Squyres: "Re: [OMPI users] Question on running the openmpi test modules"</a>
<li><strong>In reply to:</strong> <a href="9864.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
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

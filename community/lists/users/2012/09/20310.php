<?
$subject_val = "Re: [OMPI users] static, standalone mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 11:26:52 2012" -->
<!-- isoreceived="20120925152652" -->
<!-- sent="Tue, 25 Sep 2012 17:22:49 +0200" -->
<!-- isosent="20120925152249" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] static, standalone mpirun" -->
<!-- id="88887FBA-18BC-4DDE-8451-79960762F611_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2E47DDD62F84E4CAF40AFFA65C0843C016596D52CAD_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] static, standalone mpirun<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 11:22:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20311.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20309.php">Jeff Squyres: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>In reply to:</strong> <a href="20251.php">Ilias Miroslav: "[OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for jumping in late in this thread.  More below.
<br>
<p><p>On Sep 20, 2012, at 1:43 PM, Ilias Miroslav wrote:
<br>
<p><span class="quotelev1">&gt; I prepared my own static OpenMPI files (mpirun, mpif90...) within openmpi-1.6.1.tar.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=&lt;space&gt; --without-memory-manager CXX=icpc CC=icc F77=ifort FC=ifort LDFLAGS=--static --disable-shared --enable-static
</span><br>
<p>What is the exact value of &quot;&lt;space&gt;&quot; that you are putting in?  Are you actually putting in a space (i.e., &quot; &quot;)?  That does not work for me -- configure errors out because the prefix was not an absolute path.
<br>
<p>More specifically, can you detail the exact commands you used to configure, build, install, relocate, and then try to run the relocated Open MPI?
<br>
<p>For example, I am able to do the following:
<br>
<p>-----
<br>
% ./configure --prefix=/home/jsquyres/bogus --disable-mpi-fortran --disable-vt --disable-mpi-cxx --disable-mpi-io --enable-mpirun-prefix-by-default --disable-shared --enable-static
<br>
&lt;...lots of output snipped...&gt;
<br>
% make install &gt; /dev/null
<br>
% cat &lt;&lt;EOF &gt;&gt; /home/jsquyres/bogus/etc/openmpi-default-hostfile 
<br>
? svbu-mpi027
<br>
? svbu-mpi029
<br>
? EOF
<br>
% mpirun -np 2 hostname
<br>
svbu-mpi027
<br>
svbu-mpi029
<br>
% mv /home/jsquyres/bogus /home/jsquyres/bogus2
<br>
% setenv OPAL_PREFIX /home/jsquyres/bogus2
<br>
% set path = (/home/jsquyres/bogus2/bin $path)
<br>
% mpirun -np 2 hostname
<br>
svbu-mpi027
<br>
svbu-mpi029
<br>
%
<br>
-----
<br>
<p>And it seems to work for me.
<br>
<p>Are you doing something different?
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
<li><strong>Next message:</strong> <a href="20311.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20309.php">Jeff Squyres: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>In reply to:</strong> <a href="20251.php">Ilias Miroslav: "[OMPI users] static, standalone mpirun"</a>
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

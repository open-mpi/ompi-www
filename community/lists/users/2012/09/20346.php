<?
$subject_val = "Re: [OMPI users] static, standalone mpirun (Jeff Squyres)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 08:52:22 2012" -->
<!-- isoreceived="20120928125222" -->
<!-- sent="Fri, 28 Sep 2012 14:52:15 +0200" -->
<!-- isosent="20120928125215" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="Re: [OMPI users] static, standalone mpirun (Jeff Squyres)" -->
<!-- id="C2E47DDD62F84E4CAF40AFFA65C0843C0172C69903B9_at_MAILBOX2.umb.sk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.15.1348588802.10896.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] static, standalone mpirun (Jeff Squyres)<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-28 08:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20347.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20345.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>here I meant &quot;&lt;space&gt;&quot; simply my local installation space...
<br>
<span class="quotelev1">&gt; ./configure --prefix=&lt;space&gt; --without-memory-manager CXX=icpc CC=icc F77=ifort FC=ifort LDFLAGS=--static --disable-shared --enable-static
</span><br>
<p>In between I managed to fix the relocated static, standalone mpirun (v 1.6.1): beyond the mpirun exec, the share/openmpi directory a had to copy also the etc/ directory, containing openmpi-default-hostfile and other files.
<br>
<p>Wrt to your example, I moving my statically linked  mpirun and related directories share+etc to other servers on which I am lauching parallel jobs.
<br>
<p>Regards, Miro
<br>
<p>----------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Tue, 25 Sep 2012 17:22:49 +0200
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] static, standalone mpirun
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;88887FBA-18BC-4DDE-8451-79960762F611_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=us-ascii
<br>
<p>Sorry for jumping in late in this thread.  More below.
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
------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
End of users Digest, Vol 2364, Issue 4
**************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20347.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20345.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
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

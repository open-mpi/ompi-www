<?
$subject_val = "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 17:31:55 2014" -->
<!-- isoreceived="20140117223155" -->
<!-- sent="Fri, 17 Jan 2014 17:31:51 -0500" -->
<!-- isosent="20140117223151" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors" -->
<!-- id="FA41683A-5241-476F-80F5-54FBC26A9224_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1511AD9C-BD80-4571-87D8-22418D9A3AF1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 17:31:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23403.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Previous message:</strong> <a href="23401.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>In reply to:</strong> <a href="23397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BAH,
<br>
<p>The error persisted when doing the test to /tmp/ (local disk)
<br>
<p>I rebuilt the library with the same compiler and all is well now.
<br>
<p>Sorry for the false alarm. Thanks for the help and ideas Jeff.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jan 17, 2014, at 4:34 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brock and I chatted off list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm unable to replicate the error, but I have icc 14.0.1, not 14.0.  I also don't have Lustre, which is his base case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So there's at least 2 variables here that need to be resolved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2014, at 11:46 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Attached you will find a small sample code that demonstrates the problem but ether MPI_File_seek() or MPI_File_get_position() is screwing up on me.  This only happens with this version of the intel compiler:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Version 14.0.0.080 Build 20130728
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can compile and run the example with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -g -DDEBUG mkrandfile.c -o mkrand
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 mkrand -f data -l 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.5  works with gcc 4.7.0, 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/1.6.5/gcc/4.7.0
</span><br>
<span class="quotelev2">&gt;&gt;  0: my current offset is 0
</span><br>
<span class="quotelev2">&gt;&gt;  1: my current offset is 8388608
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/1.6.5/intel/14.0
</span><br>
<span class="quotelev2">&gt;&gt;  0: my current offset is 4294967297
</span><br>
<span class="quotelev2">&gt;&gt;  1: my current offset is 4294967297
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I passed the code through ddt, and the calculations for the offset for each rank gets the correct values passed to MPI_File_seek() but what I get back from MPI_File_get_position() is the above gibberish. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also cannot produce the problem with  openmpi/1.6.4/intel/13.0.1  or with openmpi/1.6.5/pgi/13.5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Our builds all like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PREFIX=/home/software/rhel6/openmpi-1.6.5/pgi-13.5
</span><br>
<span class="quotelev2">&gt;&gt; MXM=/home/software/rhel6/mxm/2.0
</span><br>
<span class="quotelev2">&gt;&gt; FCA=/home/software/rhel6/fca/2.5
</span><br>
<span class="quotelev2">&gt;&gt; COMPILERS='CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77'
</span><br>
<span class="quotelev2">&gt;&gt; ./configure \
</span><br>
<span class="quotelev2">&gt;&gt;   --prefix=${PREFIX} \
</span><br>
<span class="quotelev2">&gt;&gt;   --mandir=${PREFIX}/man \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-tm=/usr/local/torque \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-openib --with-psm \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-mxm=$MXM \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-fca=$FCA \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-dlopen --enable-shared \
</span><br>
<span class="quotelev2">&gt;&gt;      $COMPILERS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mkrandfiles.c&gt;&lt;signature.asc&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23402/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23403.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Previous message:</strong> <a href="23401.php">Oscar Vega-Gisbert: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>In reply to:</strong> <a href="23397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
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

<?
$subject_val = "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 16:34:29 2014" -->
<!-- isoreceived="20140117213429" -->
<!-- sent="Fri, 17 Jan 2014 21:34:28 +0000" -->
<!-- isosent="20140117213428" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors" -->
<!-- id="1511AD9C-BD80-4571-87D8-22418D9A3AF1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E69499F-BAB9-4946-88E9-1B9842BE7984_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 16:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23398.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23396.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>In reply to:</strong> <a href="23347.php">Brock Palen: "[OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23402.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Reply:</strong> <a href="23402.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock and I chatted off list.
<br>
<p>I'm unable to replicate the error, but I have icc 14.0.1, not 14.0.  I also don't have Lustre, which is his base case.
<br>
<p>So there's at least 2 variables here that need to be resolved.
<br>
<p><p>On Jan 9, 2014, at 11:46 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Attached you will find a small sample code that demonstrates the problem but ether MPI_File_seek() or MPI_File_get_position() is screwing up on me.  This only happens with this version of the intel compiler:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Version 14.0.0.080 Build 20130728
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can compile and run the example with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -g -DDEBUG mkrandfile.c -o mkrand
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 mkrand -f data -l 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.6.5  works with gcc 4.7.0, 
</span><br>
<span class="quotelev1">&gt; openmpi/1.6.5/gcc/4.7.0
</span><br>
<span class="quotelev1">&gt;   0: my current offset is 0
</span><br>
<span class="quotelev1">&gt;   1: my current offset is 8388608
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi/1.6.5/intel/14.0
</span><br>
<span class="quotelev1">&gt;   0: my current offset is 4294967297
</span><br>
<span class="quotelev1">&gt;   1: my current offset is 4294967297
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I passed the code through ddt, and the calculations for the offset for each rank gets the correct values passed to MPI_File_seek() but what I get back from MPI_File_get_position() is the above gibberish. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also cannot produce the problem with  openmpi/1.6.4/intel/13.0.1  or with openmpi/1.6.5/pgi/13.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our builds all like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PREFIX=/home/software/rhel6/openmpi-1.6.5/pgi-13.5
</span><br>
<span class="quotelev1">&gt; MXM=/home/software/rhel6/mxm/2.0
</span><br>
<span class="quotelev1">&gt; FCA=/home/software/rhel6/fca/2.5
</span><br>
<span class="quotelev1">&gt; COMPILERS='CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77'
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;    --prefix=${PREFIX} \
</span><br>
<span class="quotelev1">&gt;    --mandir=${PREFIX}/man \
</span><br>
<span class="quotelev1">&gt;    --with-tm=/usr/local/torque \
</span><br>
<span class="quotelev1">&gt;    --with-openib --with-psm \
</span><br>
<span class="quotelev1">&gt;    --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
</span><br>
<span class="quotelev1">&gt;    --with-mxm=$MXM \
</span><br>
<span class="quotelev1">&gt;    --with-fca=$FCA \
</span><br>
<span class="quotelev1">&gt;    --disable-dlopen --enable-shared \
</span><br>
<span class="quotelev1">&gt;       $COMPILERS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mkrandfiles.c&gt;&lt;signature.asc&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23398.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23396.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>In reply to:</strong> <a href="23347.php">Brock Palen: "[OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23402.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Reply:</strong> <a href="23402.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
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

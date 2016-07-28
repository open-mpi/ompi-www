<?
$subject_val = "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 15:25:50 2014" -->
<!-- isoreceived="20140117202550" -->
<!-- sent="Fri, 17 Jan 2014 12:25:43 -0800" -->
<!-- isosent="20140117202543" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors" -->
<!-- id="F161316C-B58C-4132-9FC6-31781D828FC7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A8AD795C-5F3C-4B47-A60E-E3CA3C5BD063_at_umich.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 15:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23395.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23393.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>In reply to:</strong> <a href="23393.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I don't have access to Intel compilers (oddly enough), but my immediate thought would be that there is some variable size difference - possibly a default change between 64 and 32 bit for &quot;int&quot;? Your output offset just looks to me like you wrapped the field.
<br>
<p>I believe the MPI interfaces all expect 32-bit ints, so it might be worth checking.
<br>
<p>On Jan 17, 2014, at 12:12 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I never saw any replies on this.  Has anyone else been able to produce this sort of error? It is 100% reproducible for me.
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
<span class="quotelev2">&gt;&gt; 0: my current offset is 0
</span><br>
<span class="quotelev2">&gt;&gt; 1: my current offset is 8388608
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/1.6.5/intel/14.0
</span><br>
<span class="quotelev2">&gt;&gt; 0: my current offset is 4294967297
</span><br>
<span class="quotelev2">&gt;&gt; 1: my current offset is 4294967297
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
<span class="quotelev2">&gt;&gt;  --prefix=${PREFIX} \
</span><br>
<span class="quotelev2">&gt;&gt;  --mandir=${PREFIX}/man \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-tm=/usr/local/torque \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-openib --with-psm \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-mxm=$MXM \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-fca=$FCA \
</span><br>
<span class="quotelev2">&gt;&gt;  --disable-dlopen --enable-shared \
</span><br>
<span class="quotelev2">&gt;&gt;     $COMPILERS
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
<span class="quotelev2">&gt;&gt; &lt;mkrandfiles.c&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23395.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23393.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>In reply to:</strong> <a href="23393.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
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

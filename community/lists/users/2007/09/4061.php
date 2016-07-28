<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 21:13:44 2007" -->
<!-- isoreceived="20070926011344" -->
<!-- sent="Tue, 25 Sep 2007 19:13:37 -0600" -->
<!-- isosent="20070926011337" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Cray XT4 CNL" -->
<!-- id="246FB181-8180-426D-BFDD-0E26A9B86DD7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C31EDB9F.EB7E%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-25 21:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI users] readv failed with errno=104"</a>
<li><strong>Previous message:</strong> <a href="4060.php">Howard Pritchard: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>In reply to:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4067.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Reply:</strong> <a href="4067.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2007, at 1:37 PM, Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; Josh Hursey did the port of Open MPI to CNL.  Here is the config  
</span><br>
<span class="quotelev1">&gt; line I have used to build
</span><br>
<span class="quotelev1">&gt;  on the Cray XT4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=/opt/xt-pe/default/bin/snos64/linux-pgcc CXX=/opt/xt- 
</span><br>
<span class="quotelev1">&gt; pe/default/bin/snos64/linux-pgCC F77=/opt/xt-pe/default/bin/snos64/ 
</span><br>
<span class="quotelev1">&gt; linux-pgf90 FC=/opt/xt-pe/default/bin/snos64/linux-pgf77 CFLAGS=-I/ 
</span><br>
<span class="quotelev1">&gt; opt/xt-pe/default/include/ CPPFLAGS=-I/opt/xt-pe/default/include/  
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-I/opt/xt-pe/default/include/ FFLAGS=-I/opt/xt-pe/default/ 
</span><br>
<span class="quotelev1">&gt; include/ LDFLAGS=-L/opt/xt-mpt/default/lib/snos64/ LIBS=-lpct - 
</span><br>
<span class="quotelev1">&gt; lalpslli -lalpsutil  --build=x86_64-unknown-linux-gnu --host=x86_64- 
</span><br>
<span class="quotelev1">&gt; cray-linux-gnu --with-platform=../contrib/platform/cray_xt3_romio -- 
</span><br>
<span class="quotelev1">&gt; with-io-romio-flags=--disable-aio build_alias=x86_64-unknown-linux- 
</span><br>
<span class="quotelev1">&gt; gnu host_alias=x86_64-cray-linux-gnu --enable-ltdl-convenience --no- 
</span><br>
<span class="quotelev1">&gt; recursion --prefix=/na2_apps/OpenMPI/xt-2.0.20/1.2/ompi/P2
</span><br>
<p>I believe, however, that you need to use one of the Open MPI 1.2.4  
<br>
release candidates or the nightly tarballs from the 1.2 or trunk  
<br>
branches.  There are some known issues with the 1.2.3 release on the  
<br>
Cray XT platform that have since been resolved.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4062.php">Brian Barrett: "Re: [OMPI users] readv failed with errno=104"</a>
<li><strong>Previous message:</strong> <a href="4060.php">Howard Pritchard: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>In reply to:</strong> <a href="4059.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4067.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Reply:</strong> <a href="4067.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
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

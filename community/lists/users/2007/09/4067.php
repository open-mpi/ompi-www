<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 26 22:25:28 2007" -->
<!-- isoreceived="20070927022528" -->
<!-- sent="Wed, 26 Sep 2007 22:25:24 -0400" -->
<!-- isosent="20070927022524" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Cray XT4 CNL" -->
<!-- id="C3208CD4.F33C%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="246FB181-8180-426D-BFDD-0E26A9B86DD7_at_open-mpi.org" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-26 22:25:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4068.php">Åke Sandgren: "[OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Previous message:</strong> <a href="4066.php">Tim Prins: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>In reply to:</strong> <a href="4061.php">Brian Barrett: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Turns out the 1.2 series does not have support for CNL, sorry for the
<br>
confusion. 
<br>
&nbsp;There was a mis-communication, and the code did not get moved over to from
<br>
&nbsp;the trunk to the 1.2 branch.  The support is in the trunk, and should be
<br>
moved
<br>
&nbsp;over to the 1.2 branch in 1.2.5
<br>
<p>Rich
<br>
<p><p>On 9/25/07 9:13 PM, &quot;Brian Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 25, 2007, at 1:37 PM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Josh Hursey did the port of Open MPI to CNL.  Here is the config
</span><br>
<span class="quotelev3">&gt;&gt; &gt; line I have used to build
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  on the Cray XT4:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./configure CC=/opt/xt-pe/default/bin/snos64/linux-pgcc CXX=/opt/xt-
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pe/default/bin/snos64/linux-pgCC F77=/opt/xt-pe/default/bin/snos64/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; linux-pgf90 FC=/opt/xt-pe/default/bin/snos64/linux-pgf77 CFLAGS=-I/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opt/xt-pe/default/include/ CPPFLAGS=-I/opt/xt-pe/default/include/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; FCFLAGS=-I/opt/xt-pe/default/include/ FFLAGS=-I/opt/xt-pe/default/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; include/ LDFLAGS=-L/opt/xt-mpt/default/lib/snos64/ LIBS=-lpct -
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lalpslli -lalpsutil  --build=x86_64-unknown-linux-gnu --host=x86_64-
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cray-linux-gnu --with-platform=../contrib/platform/cray_xt3_romio --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with-io-romio-flags=--disable-aio build_alias=x86_64-unknown-linux-
</span><br>
<span class="quotelev3">&gt;&gt; &gt; gnu host_alias=x86_64-cray-linux-gnu --enable-ltdl-convenience --no-
</span><br>
<span class="quotelev3">&gt;&gt; &gt; recursion --prefix=/na2_apps/OpenMPI/xt-2.0.20/1.2/ompi/P2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe, however, that you need to use one of the Open MPI 1.2.4
</span><br>
<span class="quotelev1">&gt; release candidates or the nightly tarballs from the 1.2 or trunk
</span><br>
<span class="quotelev1">&gt; branches.  There are some known issues with the 1.2.3 release on the
</span><br>
<span class="quotelev1">&gt; Cray XT platform that have since been resolved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4067/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4068.php">Åke Sandgren: "[OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Previous message:</strong> <a href="4066.php">Tim Prins: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>In reply to:</strong> <a href="4061.php">Brian Barrett: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
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

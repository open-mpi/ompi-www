<?
$subject_val = "Re: [OMPI users] strange IMB runs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 10:42:07 2009" -->
<!-- isoreceived="20090731144207" -->
<!-- sent="Fri, 31 Jul 2009 09:42:07 -0500" -->
<!-- isosent="20090731144207" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange IMB runs" -->
<!-- id="4A7302BF.8030606_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e75d22a90907310735i24b79eai2f6d6b2f3f6021ef_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange IMB runs<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-31 10:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10157.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10155.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10154.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10221.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10221.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; mpi_leave_pinned didn't help still at ~145MB/sec
</span><br>
<span class="quotelev1">&gt; btl_sm_eager_limit from 4096 to 8192 pushes me upto ~212MB/sec, but
</span><br>
<span class="quotelev1">&gt; pushing it past that doesn't change it anymore
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any intelligent programs that can go through and test all
</span><br>
<span class="quotelev1">&gt; the different permutations of tunables for openmpi?  Outside of me
</span><br>
<span class="quotelev1">&gt; just writing an ugly looping script...
</span><br>
<p>actually there is,
<br>
<p><a href="http://svn.open-mpi.org/svn/otpo/trunk/">http://svn.open-mpi.org/svn/otpo/trunk/</a>
<br>
<p>this tool has been used to tune openib parameter, and I would guess that 
<br>
it could be used without any modification to also run netpipe over sm...
<br>
<p>Thanks
<br>
Edgar
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 29, 2009 at 1:55 PM, Dorian Krause&lt;doriankrause_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --mca mpi_leave_pinned 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; might help. Take a look at the FAQ for various tuning parameters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael Di Domenico wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure I understand what's actually happened here.  I'm running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB on an HP superdome, just comparing the PingPong benchmark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HP-MPI v2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Max ~ 700-800MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI v1.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca btl self,sm - Max ~ 125-150MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca btl self,tcp - Max ~ 500-550MB/sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this behavior expected?  Are there any tunables to get the OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sockets up near HP-MPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10157.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10155.php">Wilko Keegstra: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10154.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10221.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10221.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
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

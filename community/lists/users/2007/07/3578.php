<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 12:32:18 2007" -->
<!-- isoreceived="20070705163218" -->
<!-- sent="Thu, 5 Jul 2007 12:32:04 -0400" -->
<!-- isosent="20070705163204" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="7C37B99E-CF6D-41AA-ADE9-FF45E2934278_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.0.99.0707051711520.2384_at_localhost" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 12:32:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3579.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3577.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3577.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3579.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3579.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is another piece of information that can be useful in order to  
<br>
figure out what's wrong. If you can execute the ompi_info directly in  
<br>
gdb, run it until it segfault and then send us the output of &quot;where&quot;  
<br>
and &quot;shared&quot; (both are gdb commands). This will give us access to the  
<br>
exact location of the segfault, and the list of all shared libraries  
<br>
that get loaded by the application.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 5, 2007, at 12:19 PM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 5 Jul 2007, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yoinks -- that's not good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect that our included memory manager is borking things up
</span><br>
<span class="quotelev2">&gt;&gt; (Brian: can you comment?).  Can you try configuring OMPI --without-
</span><br>
<span class="quotelev2">&gt;&gt; memory-manager?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. It compiles and links OK (execution of mpif90).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying to run (mpirun -np &lt;p&gt; &lt;exec&gt;) gives segmentation fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ompi_info gives output and then segfaults. ompi_info --all  
</span><br>
<span class="quotelev1">&gt; segfaults immediatly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added ompi_info log (without --all)
</span><br>
<span class="quotelev1">&gt; Added strace ompi_info --all log
</span><br>
<span class="quotelev1">&gt; Added strace mpirun log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  greets,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ricardo Reis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  'Non Serviam'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PhD student @ Lasef
</span><br>
<span class="quotelev1">&gt;  Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt;  &lt;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt;  http:// 
</span><br>
<span class="quotelev1">&gt; radio.ist.utl.pt&lt;mpirun.log.bz2&gt;&lt;ompi_info.log.bz2&gt;&lt;ompi_info_all.log. 
</span><br>
<span class="quotelev1">&gt; bz2&gt;_______________________________________________
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3578/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3579.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3577.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3577.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3579.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3579.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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

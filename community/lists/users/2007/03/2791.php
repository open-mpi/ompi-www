<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 13 09:25:33 2007" -->
<!-- isoreceived="20070313132533" -->
<!-- sent="Tue, 13 Mar 2007 07:25:19 -0600" -->
<!-- isosent="20070313132519" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Orted freezes on launch of application" -->
<!-- id="C21C025F.816B%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FCB44A2146B78C479695CF9CCA7EEA8701BA57FC_at_excg-isl01" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-13 09:25:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2792.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2790.php">Reuti: "Re: [OMPI users] signal handling (part 2)"</a>
<li><strong>In reply to:</strong> <a href="2786.php">David Minor: "[OMPI users] Orted freezes on launch of application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2794.php">David Minor: "Re: [OMPI users] Orted freezes on launch of application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David
<br>
<p>I think your tar file didn&#185;t get attached &#173; at least, it didn&#185;t reach me.
<br>
Can you please send it again?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 3/13/07 1:00 AM, &quot;David Minor&quot; &lt;david-m_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm an MPICH2 user trying out openmpi. I'm running a 1G network under Red Hat
</span><br>
<span class="quotelev1">&gt; 9, but using the g++ 3.4.3 compiler. Openmpi compiled and installed fine but
</span><br>
<span class="quotelev1">&gt; none of my applications that run under MPICH2 will run.  I decided to go
</span><br>
<span class="quotelev1">&gt; backwards and try to run a non-mpi application like /bin/ps, same results.
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host zebra1,bug --mca pls_rsh_debug 1 --mca pls_rsh_agent rsh
</span><br>
<span class="quotelev1">&gt; /bin/ps
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The end result is the console is frozen. orted is running on both nodes, one
</span><br>
<span class="quotelev1">&gt; version of orted is zombied under mpirun. I get the same results trying to run
</span><br>
<span class="quotelev1">&gt; a simple mpi application. The enclosed tar has all the info you ask for and
</span><br>
<span class="quotelev1">&gt; then some. I know I'm probably just not doing something right but you're
</span><br>
<span class="quotelev1">&gt; documentation leaves a lot to be desired. The best doc seems to the be FAQ.
</span><br>
<span class="quotelev1">&gt; There doesn't seem to be anything more comprehensive, if there is please tell
</span><br>
<span class="quotelev1">&gt; me. Also, you need to define an == operator for MPI::Request that will allow a
</span><br>
<span class="quotelev1">&gt; request to be compared to MPI_NULL_REQUEST. I don't see any way to do this in
</span><br>
<span class="quotelev1">&gt; you c++ implementation.
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; David Minor
</span><br>
<span class="quotelev1">&gt; Orbotech
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2791/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2792.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2790.php">Reuti: "Re: [OMPI users] signal handling (part 2)"</a>
<li><strong>In reply to:</strong> <a href="2786.php">David Minor: "[OMPI users] Orted freezes on launch of application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2794.php">David Minor: "Re: [OMPI users] Orted freezes on launch of application"</a>
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

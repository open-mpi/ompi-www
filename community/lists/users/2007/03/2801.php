<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 15 11:15:22 2007" -->
<!-- isoreceived="20070315151522" -->
<!-- sent="Thu, 15 Mar 2007 09:15:15 -0600" -->
<!-- isosent="20070315151515" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Orted freezes on launch of application" -->
<!-- id="C21EBF23.8226%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FCB44A2146B78C479695CF9CCA7EEA8701BA5851_at_excg-isl01" -->
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
<strong>Date:</strong> 2007-03-15 11:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2802.php">Michael: "[OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2800.php">Ralph H Castain: "Re: [OMPI users] Fun with threading"</a>
<li><strong>In reply to:</strong> <a href="2794.php">David Minor: "Re: [OMPI users] Orted freezes on launch of application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don&#185;t immediately see anything in your configuration that would cause the
<br>
problem you describe. We haven&#185;t seen any problems running non-mpi apps &#173; as
<br>
I mentioned in another posting, we do it regularly, both threaded and
<br>
non-threaded. My best guess is that there is something preventing openmpi
<br>
from finding/running your remote executable.
<br>
<p>As I mentioned in the other posting, I would suggest upgrading to the 1.2
<br>
release as it handles such problems better than 1.1.x. If you do and you
<br>
continue to see a problem, you could run with &#139;debug-daemons &#173;mca
<br>
odls_base_verbose 1 and send me the resulting output so we can figure out
<br>
what is going on.
<br>
<p>Ralph
<br>
<p><p><p>On 3/13/07 9:09 AM, &quot;David Minor&quot; &lt;david-m_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; with tar
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf
</span><br>
<span class="quotelev1">&gt; Of Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, March 13, 2007 3:25 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Orted freezes on launch of application
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think your tar file didn&#185;t get attached &#173; at least, it didn&#185;t reach me. Can
</span><br>
<span class="quotelev1">&gt; you please send it again?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/13/07 1:00 AM, &quot;David Minor&quot; &lt;david-m_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
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
<span class="quotelev1">&gt;  
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2801/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2802.php">Michael: "[OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2800.php">Ralph H Castain: "Re: [OMPI users] Fun with threading"</a>
<li><strong>In reply to:</strong> <a href="2794.php">David Minor: "Re: [OMPI users] Orted freezes on launch of application"</a>
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

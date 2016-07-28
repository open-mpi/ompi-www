<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 13 03:00:36 2007" -->
<!-- isoreceived="20070313070036" -->
<!-- sent="Tue, 13 Mar 2007 09:00:27 +0200" -->
<!-- isosent="20070313070027" -->
<!-- name="David Minor" -->
<!-- email="david-m_at_[hidden]" -->
<!-- subject="[OMPI users] Orted freezes on launch of application" -->
<!-- id="FCB44A2146B78C479695CF9CCA7EEA8701BA57FC_at_excg-isl01" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> David Minor (<em>david-m_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-13 03:00:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2787.php">Mike Houston: "[OMPI users] Fun with threading"</a>
<li><strong>Previous message:</strong> <a href="2785.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2791.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Reply:</strong> <a href="2791.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Maybe reply:</strong> <a href="2794.php">David Minor: "Re: [OMPI users] Orted freezes on launch of application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm an MPICH2 user trying out openmpi. I'm running a 1G network under
<br>
Red Hat 9, but using the g++ 3.4.3 compiler. Openmpi compiled and
<br>
installed fine but none of my applications that run under MPICH2 will
<br>
run.  I decided to go backwards and try to run a non-mpi application
<br>
like /bin/ps, same results. 
<br>
<p>mpirun -np 2 --host zebra1,bug --mca pls_rsh_debug 1 --mca pls_rsh_agent
<br>
rsh /bin/ps
<br>
<p>&nbsp;
<br>
<p>The end result is the console is frozen. orted is running on both nodes,
<br>
one version of orted is zombied under mpirun. I get the same results
<br>
trying to run a simple mpi application. The enclosed tar has all the
<br>
info you ask for and then some. I know I'm probably just not doing
<br>
something right but you're documentation leaves a lot to be desired. The
<br>
best doc seems to the be FAQ. There doesn't seem to be anything more
<br>
comprehensive, if there is please tell me.  Also, you need to define an
<br>
== operator for MPI::Request that will allow a request to be compared to
<br>
MPI_NULL_REQUEST. I don't see any way to do this in you c++
<br>
implementation.  
<br>
<p>Regards,
<br>
<p>David Minor
<br>
<p>Orbotech
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2786/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2787.php">Mike Houston: "[OMPI users] Fun with threading"</a>
<li><strong>Previous message:</strong> <a href="2785.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2791.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Reply:</strong> <a href="2791.php">Ralph H Castain: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Maybe reply:</strong> <a href="2794.php">David Minor: "Re: [OMPI users] Orted freezes on launch of application"</a>
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

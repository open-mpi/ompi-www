<?
$subject_val = "Re: [OMPI users] Bug in my code or in v1.4.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 09:15:22 2014" -->
<!-- isoreceived="20140110141522" -->
<!-- sent="Fri, 10 Jan 2014 14:15:20 +0000" -->
<!-- isosent="20140110141520" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in my code or in v1.4.3?" -->
<!-- id="2F0B356A-2ECE-4265-B64A-7836366630AF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140110104901.31922.84250_at_fl-58186.rocq.inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in my code or in v1.4.3?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 09:15:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23352.php">David Froger: "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
<li><strong>Previous message:</strong> <a href="23350.php">David Froger: "[OMPI users] Bug in my code or in v1.4.3?"</a>
<li><strong>In reply to:</strong> <a href="23350.php">David Froger: "[OMPI users] Bug in my code or in v1.4.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23352.php">David Froger: "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
<li><strong>Reply:</strong> <a href="23352.php">David Froger: "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The test code looks ok to me.
<br>
<p>I will mention that Open MPI 1.4.3 is *very* old; it is now 2 generations behind the current.  The current stable release is 1.6.5, and the current feature series (1.7.x) is likely to transition to stable (1.8.x) in a few months.  I don't follow Ubuntu at all, but I guess I'm a bit surprised that a) they're so far out of date, and b) they don't even have the last release of the Open MPI 1.4.x series (which was 1.4.5, released Feb 14, 2012).
<br>
<p>So yes, it could be a bug in Open MPI -- it's really hard to say with a version that old.  I would say that the first step is upgrading to at least Open MPI 1.4.5 -- 1.6.5, if possible.
<br>
<p><p>On Jan 10, 2014, at 5:49 AM, David Froger &lt;david.froger_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are migrating a code using OpenMPI from Ubuntu 10.04 to Ubuntu 12.04, and
</span><br>
<span class="quotelev1">&gt; encouter some problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bellow is a test code that work on Ubuntu 10.04, but fails on Ubuntu 12.04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The question is: is there a bug in the test code, or is it due to a bug in
</span><br>
<span class="quotelev1">&gt; OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; OpenMPI versions
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use the default OpenMPI versions on both version of Ubuntu:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ apt-cache policy openmpi-bin # On Ubuntu 10.04
</span><br>
<span class="quotelev1">&gt; openmpi-bin:
</span><br>
<span class="quotelev1">&gt;  Installed: 1.4.1-2
</span><br>
<span class="quotelev1">&gt;  Candidate: 1.4.1-2
</span><br>
<span class="quotelev1">&gt;  Version table:
</span><br>
<span class="quotelev1">&gt; *** 1.4.1-2 0
</span><br>
<span class="quotelev1">&gt;        500 <a href="http://ubuntu.lucid.miroir.rocq.inria.fr/">http://ubuntu.lucid.miroir.rocq.inria.fr/</a> lucid/universe Packages
</span><br>
<span class="quotelev1">&gt;        100 /var/lib/dpkg/status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ apt-cache policy openmpi-bin # On Ubuntu 12.04
</span><br>
<span class="quotelev1">&gt; openmpi-bin:
</span><br>
<span class="quotelev1">&gt;  Installed: 1.4.3-2.1ubuntu3
</span><br>
<span class="quotelev1">&gt;  Candidate: 1.4.3-2.1ubuntu3
</span><br>
<span class="quotelev1">&gt;  Version table:
</span><br>
<span class="quotelev1">&gt; *** 1.4.3-2.1ubuntu3 0
</span><br>
<span class="quotelev1">&gt;        500 <a href="http://ubuntu.precise.miroir.rocq.inria.fr/">http://ubuntu.precise.miroir.rocq.inria.fr/</a> precise/universe amd64 Packages
</span><br>
<span class="quotelev1">&gt;        100 /var/lib/dpkg/status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; Error messages
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The test code given bellow is working on Ubuntu 10.04, but sometimes fails on
</span><br>
<span class="quotelev1">&gt; 12.04, with the folling output for example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 10 in communicator MPI_COMM_WORLD 
</span><br>
<span class="quotelev1">&gt; with errorcode 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error rank 10 tab[0] = 8
</span><br>
<span class="quotelev1">&gt; Error rank 11 tab[0] = 7
</span><br>
<span class="quotelev1">&gt; Error rank 12 tab[0] = 6
</span><br>
<span class="quotelev1">&gt; Error rank 13 tab[0] = 10
</span><br>
<span class="quotelev1">&gt; Error rank 14 tab[2] = 10
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 10 with PID 10284 on
</span><br>
<span class="quotelev1">&gt; node saphene exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [saphene:10273] 4 more processes have sent help message help-mpi-api.txt / mpi-abort
</span><br>
<span class="quotelev1">&gt; [saphene:10273] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; Test code
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	int ierr;
</span><br>
<span class="quotelev1">&gt; 	ierr = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if(ierr != MPI_SUCCESS){
</span><br>
<span class="quotelev1">&gt; 		cout &lt;&lt; &quot;Error initializing mpi&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 		MPI_Abort(MPI_COMM_WORLD, ierr);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	// get the number of process
</span><br>
<span class="quotelev1">&gt; 	int numProcess;
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_size(MPI_COMM_WORLD, &amp;numProcess);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	// get the rank of the process
</span><br>
<span class="quotelev1">&gt; 	int rank;
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	for(int it=0; it&lt;20; it++){
</span><br>
<span class="quotelev1">&gt; 		// gather all rank in an array
</span><br>
<span class="quotelev1">&gt; 		int *tab = new int[numProcess];
</span><br>
<span class="quotelev1">&gt; 		ierr = MPI_Allgather(&amp;rank, 1, MPI_INT, tab, 1, MPI_INT, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	  if(ierr != MPI_SUCCESS){
</span><br>
<span class="quotelev1">&gt; 		  cout &lt;&lt; &quot;Error MPI_Allgather rank:&quot; &lt;&lt; rank &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 		  MPI_Abort(MPI_COMM_WORLD, ierr);
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		// check that everything is ok
</span><br>
<span class="quotelev1">&gt; 		for(int i=0; i&lt;numProcess; i++){
</span><br>
<span class="quotelev1">&gt; 			if(tab[i] != i){
</span><br>
<span class="quotelev1">&gt; 				cout &lt;&lt; &quot;Error rank &quot; &lt;&lt; rank &lt;&lt; &quot; tab[&quot; &lt;&lt; i &lt;&lt; &quot;] = &quot; &lt;&lt; tab[i] &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;        MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev1">&gt; 			}
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 		delete [] tab;	
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 	cout &lt;&lt; &quot;Exit normally&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23352.php">David Froger: "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
<li><strong>Previous message:</strong> <a href="23350.php">David Froger: "[OMPI users] Bug in my code or in v1.4.3?"</a>
<li><strong>In reply to:</strong> <a href="23350.php">David Froger: "[OMPI users] Bug in my code or in v1.4.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23352.php">David Froger: "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
<li><strong>Reply:</strong> <a href="23352.php">David Froger: "Re: [OMPI users] Bug in my code or in v1.4.3?"</a>
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

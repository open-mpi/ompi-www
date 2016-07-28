<?
$subject_val = "Re: [OMPI users] Running simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 23 11:10:37 2010" -->
<!-- isoreceived="20101023151037" -->
<!-- sent="Sat, 23 Oct 2010 11:10:22 -0400" -->
<!-- isosent="20101023151022" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running simple MPI program" -->
<!-- id="22DB4961-0FB2-4AB0-A34E-1463614464FE_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimFyOLvvAA-sFWznBmXS9-oyzJJ6Wwr+oLYDGoG_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running simple MPI program<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-23 11:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14567.php">jody: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14565.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14565.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14570.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14570.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brandon
<br>
<p>You must have passwordless ssh setup across the machines.
<br>
Check if you can ssh passwordless back and forth across all node pairs,
<br>
with the host names or IPs you have in your host.txt file.
<br>
<p>Your /etc/host (or whatever Ubuntu uses to match hosts and IPs) must be
<br>
consistent (perhaps the same) across the machines.
<br>
<p>The same (Open)MPI must be installed on all machines,
<br>
or installed on an NFS directory mounted on all machines.
<br>
<p>Make sure you use the same MPI to compile (mpicc) and to
<br>
run (mpiexec/mpirun).  It is quite common to inadvertently mixup
<br>
different flavors/versions, which may come with Linux distributions,
<br>
commercial compilers, etc, and sometimes take precedence on your
<br>
$PATH.  In doubt, use full path names for both mpicc and mpirun.
<br>
<p>It may be easier to run just &quot;hostname&quot; to check functionality:
<br>
<p>mpirun -np ${whatever} hostname
<br>
<p>If the Ubuntu package doesn't work ...
<br>
It easy to build OpenMPI from source, and choose an installation
<br>
directory that doesn't interfere with the system (e.g. under your home directory).
<br>
The README file and the FAQ have clear instructions for that.
<br>
It builds fine with gcc/g++/gfortran, if free compilers are your concern.
<br>
<p>The OpenMPI FAQ has good suggestions for initial troubleshooting:
<br>
<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>My $0.02
<br>
Gus Correa
<br>
<p>On Oct 23, 2010, at 10:07 AM, Brandon Fulcher wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for the response!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code runs on my own machine as well.  Both machines, in fact.  And I did not build MPI but installed the package from the ubuntu repositories.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem occurs when I try to run a job using two machines or simply try to run it on a slave from the master.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the actual command I have run along with the output is below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -hostfile hosts.txt ilk
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where hosts.txt contains:
</span><br>
<span class="quotelev1">&gt; 192.168.0.2 cpu=2
</span><br>
<span class="quotelev1">&gt; 192.168.0.6 cpu=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it matters the same output is given if I define a remote host in the command such as (if I am on 192.168.0.2)
</span><br>
<span class="quotelev1">&gt; mpirun  -host 192.168.0.6 ilk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now if I run it locally, the job succeeds.  This works from either cpu.
</span><br>
<span class="quotelev1">&gt; mpirun  ilk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 22, 2010 at 11:59 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; since you said you're new to MPI, what command did you use to run the 2 processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 22, 2010 at 9:58 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; your code works on mine machine. could be they way you build mpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 22, 2010 at 7:26 PM, Brandon Fulcher &lt;minguo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi, I am completely new to MPI and am having trouble running a job between two  cpus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same thing happens no matter what MPI job I try to run, but here is a simple 'hello world' style program I am trying to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int *buf, i, rank, nints, len;
</span><br>
<span class="quotelev1">&gt;   char hostname[256];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   gethostname(hostname,255);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;, rank, hostname);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On either CPU, I can successfully compile and run, but when trying to run the program using two CPUS it fails with this output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With no additional information or errors,  What can I do to go about finding out what is wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have read the FAQ and followed the instructions.  I can ssh into the slave without entering a password and have the libraries installed on both machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only thing pertinent I could find is this faq <a href="http://www.open-mpi.org/faq/?category=running#missing-prereqs">http://www.open-mpi.org/faq/?category=running#missing-prereqs</a>  but I do not know if it applies since I have installed open mpi from the Ubuntu repositories and assume the libraries are correctly set. 
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
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
<li><strong>Next message:</strong> <a href="14567.php">jody: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14565.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14565.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14570.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14570.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
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

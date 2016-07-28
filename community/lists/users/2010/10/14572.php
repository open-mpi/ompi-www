<?
$subject_val = "Re: [OMPI users] Running simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 23 12:44:02 2010" -->
<!-- isoreceived="20101023164402" -->
<!-- sent="Sat, 23 Oct 2010 12:43:53 -0400" -->
<!-- isosent="20101023164353" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running simple MPI program" -->
<!-- id="F255684A-73B7-4FCB-93E5-E13E888B3A64_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTinTtRFpoGr4Sz71cFhXDnA-b7WW2kkaLi5rJ+Tj_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-23 12:43:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14573.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14571.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14571.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14573.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14573.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What if you run w 2 hosts?
<br>
<p>It's unusual that no indication of the actual error is shown. 
<br>
<p>Are you running exactly the same version of OMPI on both nodes? 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Oct 23, 2010, at 12:37 PM, &quot;Brandon Fulcher&quot; &lt;minguo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff, thanks for responding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun hostname returns the name of the local machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Oct 23, 2010 at 11:27 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I didn't notice if it came up earlier - are you running the same version of OMPI on each node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens if you try mpirunning hostname (ie not an MPI app)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my PDA. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2010, at 12:07 PM, &quot;Brandon Fulcher&quot; &lt;minguo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jody, thank you for the response.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Specifying the number of processes in the manner you provided 
</span><br>
<span class="quotelev2">&gt;&gt;  (mpirun -np 2 hostfile hosts.txt ilk)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does indeed succeed. All processes are launched on my local machine which has two slots.  If I change the command to:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 3 hostfile hosts.txt ilk
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It however fails giving the same error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Oct 23, 2010 at 10:13 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brandon
</span><br>
<span class="quotelev2">&gt;&gt; Does it work if you try this:
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 2 hostfile hosts.txt ilk
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (see <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; jody
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Oct 23, 2010 at 4:07 PM, Brandon Fulcher &lt;minguo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you for the response!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The code runs on my own machine as well.  Both machines, in fact.  And I did
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not build MPI but installed the package from the ubuntu repositories.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The problem occurs when I try to run a job using two machines or simply try
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to run it on a slave from the master.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the actual command I have run along with the output is below:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -hostfile hosts.txt ilk
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; where hosts.txt contains:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 192.168.0.2 cpu=2
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 192.168.0.6 cpu=1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If it matters the same output is given if I define a remote host in the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; command such as (if I am on 192.168.0.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun  -host 192.168.0.6 ilk
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Now if I run it locally, the job succeeds.  This works from either cpu.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun  ilk
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Fri, Oct 22, 2010 at 11:59 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; since you said you're new to MPI, what command did you use to run the 2
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; processes?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Fri, Oct 22, 2010 at 9:58 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; your code works on mine machine. could be they way you build mpi.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Fri, Oct 22, 2010 at 7:26 PM, Brandon Fulcher &lt;minguo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Hi, I am completely new to MPI and am having trouble running a job
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; between two  cpus.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; The same thing happens no matter what MPI job I try to run, but here is
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; a simple 'hello world' style program I am trying to run.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;   int *buf, i, rank, nints, len;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;   char hostname[256];
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;   gethostname(hostname,255);
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;   printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;, rank,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; hostname);
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; On either CPU, I can successfully compile and run, but when trying to
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; run the program using two CPUS it fails with this output:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; With no additional information or errors,  What can I do to go about
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; finding out what is wrong?
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; I have read the FAQ and followed the instructions.  I can ssh into the
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; slave without entering a password and have the libraries installed on both
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; machines.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; The only thing pertinent I could find is this faq
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#missing-prereqs">http://www.open-mpi.org/faq/?category=running#missing-prereqs</a>  but I do not
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; know if it applies since I have installed open mpi from the Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; repositories and assume the libraries are correctly set.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; David Zhang
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; University of California, San Diego
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; David Zhang
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; University of California, San Diego
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14573.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14571.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14571.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14573.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14573.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
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

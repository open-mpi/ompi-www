<?
$subject_val = "Re: [OMPI users] Running simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 23 12:33:19 2010" -->
<!-- isoreceived="20101023163319" -->
<!-- sent="Sat, 23 Oct 2010 11:33:13 -0500" -->
<!-- isosent="20101023163313" -->
<!-- name="Brandon Fulcher" -->
<!-- email="minguo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running simple MPI program" -->
<!-- id="AANLkTinJZfQbjNWGYU09xoUZxXTpFsXZqJqtei3dXOB4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="22DB4961-0FB2-4AB0-A34E-1463614464FE_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Brandon Fulcher (<em>minguo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-23 12:33:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14571.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14569.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14566.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14567.php">jody: "Re: [OMPI users] Running simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gustavo, thank you for the response.
<br>
<p>I have been using Linux for only a couple years so I'm not very familiar
<br>
with ssh.  However, i followed the instructions on this site:
<br>
<a href="https://source.ggy.bris.ac.uk/wiki/Configure_ssh_for_MPI">https://source.ggy.bris.ac.uk/wiki/Configure_ssh_for_MPI</a>
<br>
and I can ssh into the remote machine without a password prompt.  (At least,
<br>
if I enter ssh 192.168.0.6 into the command line it does not ask me for one,
<br>
and I can then run commands on the remote cpu.)
<br>
<p>as for etc/hosts, again not exactly familiar with it, but on both machines
<br>
the files are unchanged and have only an entry for localhost and the local
<br>
machine's name, and are otherwise identical.
<br>
<p>127.0.0.1 localhost
<br>
127.0.1.1 &lt;machine name&gt;
<br>
<p>I have installed open mpi packages on both machines.
<br>
<p>running the command ( mpirun -np ${whatever} hostname)
<br>
returns my local machine's name.
<br>
<p>I have read most of the faq that seemed pertinent, including running,
<br>
compiling, and troubleshooting sections.  I am making no progress, and I
<br>
don't have much to go on sine the error message doesn't provide anything
<br>
useful.
<br>
<p>On Sat, Oct 23, 2010 at 10:10 AM, Gustavo Correa &lt;gus_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brandon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You must have passwordless ssh setup across the machines.
</span><br>
<span class="quotelev1">&gt; Check if you can ssh passwordless back and forth across all node pairs,
</span><br>
<span class="quotelev1">&gt; with the host names or IPs you have in your host.txt file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your /etc/host (or whatever Ubuntu uses to match hosts and IPs) must be
</span><br>
<span class="quotelev1">&gt; consistent (perhaps the same) across the machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same (Open)MPI must be installed on all machines,
</span><br>
<span class="quotelev1">&gt; or installed on an NFS directory mounted on all machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure you use the same MPI to compile (mpicc) and to
</span><br>
<span class="quotelev1">&gt; run (mpiexec/mpirun).  It is quite common to inadvertently mixup
</span><br>
<span class="quotelev1">&gt; different flavors/versions, which may come with Linux distributions,
</span><br>
<span class="quotelev1">&gt; commercial compilers, etc, and sometimes take precedence on your
</span><br>
<span class="quotelev1">&gt; $PATH.  In doubt, use full path names for both mpicc and mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may be easier to run just &quot;hostname&quot; to check functionality:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np ${whatever} hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the Ubuntu package doesn't work ...
</span><br>
<span class="quotelev1">&gt; It easy to build OpenMPI from source, and choose an installation
</span><br>
<span class="quotelev1">&gt; directory that doesn't interfere with the system (e.g. under your home
</span><br>
<span class="quotelev1">&gt; directory).
</span><br>
<span class="quotelev1">&gt; The README file and the FAQ have clear instructions for that.
</span><br>
<span class="quotelev1">&gt; It builds fine with gcc/g++/gfortran, if free compilers are your concern.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OpenMPI FAQ has good suggestions for initial troubleshooting:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2010, at 10:07 AM, Brandon Fulcher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for the response!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The code runs on my own machine as well.  Both machines, in fact.  And I
</span><br>
<span class="quotelev1">&gt; did not build MPI but installed the package from the ubuntu repositories.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem occurs when I try to run a job using two machines or simply
</span><br>
<span class="quotelev1">&gt; try to run it on a slave from the master.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the actual command I have run along with the output is below:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -hostfile hosts.txt ilk
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where hosts.txt contains:
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.2 cpu=2
</span><br>
<span class="quotelev2">&gt; &gt; 192.168.0.6 cpu=1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it matters the same output is given if I define a remote host in the
</span><br>
<span class="quotelev1">&gt; command such as (if I am on 192.168.0.2)
</span><br>
<span class="quotelev2">&gt; &gt; mpirun  -host 192.168.0.6 ilk
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now if I run it locally, the job succeeds.  This works from either cpu.
</span><br>
<span class="quotelev2">&gt; &gt; mpirun  ilk
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 22, 2010 at 11:59 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; since you said you're new to MPI, what command did you use to run the 2
</span><br>
<span class="quotelev1">&gt; processes?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 22, 2010 at 9:58 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; your code works on mine machine. could be they way you build mpi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Oct 22, 2010 at 7:26 PM, Brandon Fulcher &lt;minguo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi, I am completely new to MPI and am having trouble running a job
</span><br>
<span class="quotelev1">&gt; between two  cpus.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same thing happens no matter what MPI job I try to run, but here is a
</span><br>
<span class="quotelev1">&gt; simple 'hello world' style program I am trying to run.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   int *buf, i, rank, nints, len;
</span><br>
<span class="quotelev2">&gt; &gt;   char hostname[256];
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;   gethostname(hostname,255);
</span><br>
<span class="quotelev2">&gt; &gt;   printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;, rank,
</span><br>
<span class="quotelev1">&gt; hostname);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;   return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On either CPU, I can successfully compile and run, but when trying to run
</span><br>
<span class="quotelev1">&gt; the program using two CPUS it fails with this output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With no additional information or errors,  What can I do to go about
</span><br>
<span class="quotelev1">&gt; finding out what is wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have read the FAQ and followed the instructions.  I can ssh into the
</span><br>
<span class="quotelev1">&gt; slave without entering a password and have the libraries installed on both
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only thing pertinent I could find is this faq
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#missing-prereqs">http://www.open-mpi.org/faq/?category=running#missing-prereqs</a>  but I do
</span><br>
<span class="quotelev1">&gt; not know if it applies since I have installed open mpi from the Ubuntu
</span><br>
<span class="quotelev1">&gt; repositories and assume the libraries are correctly set.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; David Zhang
</span><br>
<span class="quotelev2">&gt; &gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; David Zhang
</span><br>
<span class="quotelev2">&gt; &gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14570/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14571.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14569.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14566.php">Gustavo Correa: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14567.php">jody: "Re: [OMPI users] Running simple MPI program"</a>
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

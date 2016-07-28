<?
$subject_val = "[OMPI users] Running simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 22:26:29 2010" -->
<!-- isoreceived="20101023022629" -->
<!-- sent="Fri, 22 Oct 2010 21:26:24 -0500" -->
<!-- isosent="20101023022624" -->
<!-- name="Brandon Fulcher" -->
<!-- email="minguo_at_[hidden]" -->
<!-- subject="[OMPI users] Running simple MPI program" -->
<!-- id="AANLkTim-1ce54ggMGYnVrdXsqHCuA_-0nZ5WrYN3YMP7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Running simple MPI program<br>
<strong>From:</strong> Brandon Fulcher (<em>minguo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 22:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14563.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14561.php">David Zhang: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14563.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14563.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I am completely new to MPI and am having trouble running a job between
<br>
two  cpus.
<br>
<p>The same thing happens no matter what MPI job I try to run, but here is a
<br>
simple 'hello world' style program I am trying to run.
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int *buf, i, rank, nints, len;
<br>
&nbsp;&nbsp;char hostname[256];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;gethostname(hostname,255);
<br>
&nbsp;&nbsp;printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;, rank,
<br>
hostname);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>On either CPU, I can successfully compile and run, but when trying to run
<br>
the program using two CPUS it fails with this output:
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p><p>With no additional information or errors,  What can I do to go about finding
<br>
out what is wrong?
<br>
<p><p><p>I have read the FAQ and followed the instructions.  I can ssh into the slave
<br>
without entering a password and have the libraries installed on both
<br>
machines.
<br>
<p>The only thing pertinent I could find is this faq
<br>
<a href="http://www.open-mpi.org/faq/?category=running#missing-prereqs">http://www.open-mpi.org/faq/?category=running#missing-prereqs</a>  but I do not
<br>
know if it applies since I have installed open mpi from the Ubuntu
<br>
repositories and assume the libraries are correctly set.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14562/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14563.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14561.php">David Zhang: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14563.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14563.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
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

<?
$subject_val = "Re: [OMPI users] Running simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 23 00:58:57 2010" -->
<!-- isoreceived="20101023045857" -->
<!-- sent="Fri, 22 Oct 2010 21:58:33 -0700" -->
<!-- isosent="20101023045833" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running simple MPI program" -->
<!-- id="AANLkTimtZdVpr8DWx8jRyyeAzCah0_fNRM4vzj57bHoa_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim-1ce54ggMGYnVrdXsqHCuA_-0nZ5WrYN3YMP7_at_mail.gmail.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-23 00:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14564.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14562.php">Brandon Fulcher: "[OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14562.php">Brandon Fulcher: "[OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14564.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14564.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
your code works on mine machine. could be they way you build mpi.
<br>
<p>On Fri, Oct 22, 2010 at 7:26 PM, Brandon Fulcher &lt;minguo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I am completely new to MPI and am having trouble running a job between
</span><br>
<span class="quotelev1">&gt; two  cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same thing happens no matter what MPI job I try to run, but here is a
</span><br>
<span class="quotelev1">&gt; simple 'hello world' style program I am trying to run.
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
<span class="quotelev1">&gt;   printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;, rank,
</span><br>
<span class="quotelev1">&gt; hostname);
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
<span class="quotelev1">&gt; On either CPU, I can successfully compile and run, but when trying to run
</span><br>
<span class="quotelev1">&gt; the program using two CPUS it fails with this output:
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
<span class="quotelev1">&gt; With no additional information or errors,  What can I do to go about
</span><br>
<span class="quotelev1">&gt; finding out what is wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have read the FAQ and followed the instructions.  I can ssh into the
</span><br>
<span class="quotelev1">&gt; slave without entering a password and have the libraries installed on both
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only thing pertinent I could find is this faq
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#missing-prereqs">http://www.open-mpi.org/faq/?category=running#missing-prereqs</a>  but I do
</span><br>
<span class="quotelev1">&gt; not know if it applies since I have installed open mpi from the Ubuntu
</span><br>
<span class="quotelev1">&gt; repositories and assume the libraries are correctly set.
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14563/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14564.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14562.php">Brandon Fulcher: "[OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14562.php">Brandon Fulcher: "[OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14564.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14564.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
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

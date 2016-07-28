<?
$subject_val = "Re: [OMPI users] Running simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 23 01:00:09 2010" -->
<!-- isoreceived="20101023050009" -->
<!-- sent="Fri, 22 Oct 2010 21:59:42 -0700" -->
<!-- isosent="20101023045942" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running simple MPI program" -->
<!-- id="AANLkTi=1dRCBq5xe_r4GJvsWc=pyzpQETtPF0DF-3mmK_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimtZdVpr8DWx8jRyyeAzCah0_fNRM4vzj57bHoa_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-10-23 00:59:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14565.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14563.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14563.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14565.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14565.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
since you said you're new to MPI, what command did you use to run the 2
<br>
processes?
<br>
<p>On Fri, Oct 22, 2010 at 9:58 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; your code works on mine machine. could be they way you build mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 22, 2010 at 7:26 PM, Brandon Fulcher &lt;minguo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I am completely new to MPI and am having trouble running a job between
</span><br>
<span class="quotelev2">&gt;&gt; two  cpus.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same thing happens no matter what MPI job I try to run, but here is a
</span><br>
<span class="quotelev2">&gt;&gt; simple 'hello world' style program I am trying to run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int *buf, i, rank, nints, len;
</span><br>
<span class="quotelev2">&gt;&gt;   char hostname[256];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;   gethostname(hostname,255);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;, rank,
</span><br>
<span class="quotelev2">&gt;&gt; hostname);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On either CPU, I can successfully compile and run, but when trying to run
</span><br>
<span class="quotelev2">&gt;&gt; the program using two CPUS it fails with this output:
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
<span class="quotelev2">&gt;&gt; With no additional information or errors,  What can I do to go about
</span><br>
<span class="quotelev2">&gt;&gt; finding out what is wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have read the FAQ and followed the instructions.  I can ssh into the
</span><br>
<span class="quotelev2">&gt;&gt; slave without entering a password and have the libraries installed on both
</span><br>
<span class="quotelev2">&gt;&gt; machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only thing pertinent I could find is this faq
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#missing-prereqs">http://www.open-mpi.org/faq/?category=running#missing-prereqs</a>  but I do
</span><br>
<span class="quotelev2">&gt;&gt; not know if it applies since I have installed open mpi from the Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt; repositories and assume the libraries are correctly set.
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14565.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="14563.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="14563.php">David Zhang: "Re: [OMPI users] Running simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14565.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
<li><strong>Reply:</strong> <a href="14565.php">Brandon Fulcher: "Re: [OMPI users] Running simple MPI program"</a>
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

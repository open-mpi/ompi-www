<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 13 14:07:08 2007" -->
<!-- isoreceived="20070313180708" -->
<!-- sent="Tue, 13 Mar 2007 14:07:01 -0400" -->
<!-- isosent="20070313180701" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated" -->
<!-- id="ea86ce220703131107w5ca777efo257f993922ac9b49_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.62.0703121818400.17779_at_student.math.upatras.gr" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-13 14:07:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2798.php">Jeff Squyres: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2796.php">Renato Golin: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2772.php">Michael Epitropakis: "[OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
Can you upgrade to a newer version of Open MPI?  There have been several
<br>
bugfix releases of the 1.1 series, and we are on the verge of releasing v1.2.
<br>
So, please try either 1.1.4 (or 1.1.5rc1), and/or try v1.2rc3.
<br>
<p>On 3/12/07, Michael Epitropakis &lt;mikeagn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear ompi users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI in order to parallelize an evolutionary algorithm.
</span><br>
<span class="quotelev1">&gt; During the execution of the algorithm I have to send many same messages to
</span><br>
<span class="quotelev1">&gt; some nodes. So, in order to generate and use these messages i use MPI_Pack
</span><br>
<span class="quotelev1">&gt; and MPI_Unpack Each message has the following structure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {int, int, int[size], double[size2], double}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the beginning of the Algorithm everything is going well... but suddenly
</span><br>
<span class="quotelev1">&gt; something is going wrong and i get the following messages::
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:32461] *** An error occurred in MPI_Unpack
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:32461] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:32461] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:32461] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With a lot of debugging I found out that the first two integers, let me
</span><br>
<span class="quotelev1">&gt; call them x, y, were not the values that i was expecting (the values that
</span><br>
<span class="quotelev1">&gt; i have packed!!!). They were very strange: either big positive integers or
</span><br>
<span class="quotelev1">&gt; big negative integers. I checked the buffer that I am using for these
</span><br>
<span class="quotelev1">&gt; messages and it is much bigger than the required message storage. I can;t
</span><br>
<span class="quotelev1">&gt; think of something else that could probably caused that problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please help me with this?? What could have probably caused this
</span><br>
<span class="quotelev1">&gt; problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI version: Open MPI: 1.1 Open MPI SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance
</span><br>
<span class="quotelev1">&gt; Michael.
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
<p><p><pre>
-- 
Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2798.php">Jeff Squyres: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2796.php">Renato Golin: "Re: [OMPI users] LSF &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2772.php">Michael Epitropakis: "[OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated"</a>
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

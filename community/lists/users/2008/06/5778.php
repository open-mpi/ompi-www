<?
$subject_val = "Re: [OMPI users] specifying hosts in mpi_spawn()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 08:31:08 2008" -->
<!-- isoreceived="20080602123108" -->
<!-- sent="Mon, 02 Jun 2008 06:30:47 -0600" -->
<!-- isosent="20080602123047" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] specifying hosts in mpi_spawn()" -->
<!-- id="C4694417.DA2D%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a8d96dec0805301032t62aacea9ta83c83b61881f0e4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] specifying hosts in mpi_spawn()<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-02 08:30:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5779.php">Ayer, Timothy  C.: "[OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5777.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5773.php">Bruno Coutinho: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Appreciate the clarification. Unfortunately, the answer is &#179;no&#178; for any of
<br>
our current releases. We only use the &#179;host&#178; info argument to tell us which
<br>
nodes to use &#173; the info has no bearing on the eventual mapping of ranks to
<br>
nodes. Repeated entries are simply ignored.
<br>
<p>I was mainly asking for the version to check if you were working with our
<br>
svn trunk. The upcoming 1.3 release does support mapping such as you
<br>
describe. However, it currently only supports it for entries in a hostfile,
<br>
not as specified via &#173;host or in the host info argument.
<br>
<p>Historically, we have maintained a direct correspondence between hostfile
<br>
and &#173;host operations &#173; i.e., whatever you can do with a hostfile could also
<br>
be done via &#173;host. I&#185;ll have to discuss with the developers whether or not
<br>
to extend this to sequential mapping of ranks.
<br>
<p>The short answer, therefore, is that we don&#185;t support what you are
<br>
requesting at this time, and may not support it in 1.3 (though you could get
<br>
around that perhaps by putting the ordering in a file).
<br>
<p>Ralph
<br>
&nbsp;
<br>
<p><p>On 5/30/08 11:32 AM, &quot;Bruno Coutinho&quot; &lt;coutinho_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm using open mpi 1.2.6 from the open mpi site, but I can switch to another
</span><br>
<span class="quotelev1">&gt; version if necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2008/5/30 Ralph H Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid I cannot answer that question without first knowing what version
</span><br>
<span class="quotelev2">&gt;&gt; of Open MPI you are using. Could you provide that info?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 5/29/08 6:41 PM, &quot;Bruno Coutinho&quot; &lt;coutinho_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; How mpi handles the host string passed in the info argument to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpi_comm_spawn() ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; if I set host to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;host1,host2,host3,host2,host2,host1&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; then ranks 0 and 5 will run in host1, ranks 1,3,4 in host 2 and rank 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; in host3?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5779.php">Ayer, Timothy  C.: "[OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5777.php">Lee Amy: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5773.php">Bruno Coutinho: "Re: [OMPI users] specifying hosts in mpi_spawn()"</a>
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

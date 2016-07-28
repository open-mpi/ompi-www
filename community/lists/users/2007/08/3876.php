<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 14:25:52 2007" -->
<!-- isoreceived="20070816182552" -->
<!-- sent="Thu, 16 Aug 2007 19:25:42 +0100" -->
<!-- isosent="20070816182542" -->
<!-- name="Si Hammond" -->
<!-- email="simon.hammond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;bash: orted: command not found&amp;quot; running NPB2.4 with tau" -->
<!-- id="145190C5-B1B2-49E8-9B85-C2495629CE42_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3efa93d0708161114v2b35127dsb0d2408871143c46_at_mail.gmail.com" -->
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
<strong>From:</strong> Si Hammond (<em>simon.hammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 14:25:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3877.php">Tom Conerly: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Previous message:</strong> <a href="3875.php">Tom Conerly: "[OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>In reply to:</strong> <a href="3875.php">Tom Conerly: "[OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3877.php">Tom Conerly: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom,
<br>
<p>I've also had this problem. I looked in my bashrc and found that it  
<br>
returned prior to setting the path variable if it was being run in  
<br>
non-interactive mode. This sounds similar to your situation. You'll  
<br>
need to comment this out if you rely on it to set your path.
<br>
<p><p>Si Hammond
<br>
<p><p>On 16 Aug 2007, at 19:14, Tom Conerly wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to run one of the NPB2.4 benchmarks over two nodes. On  
</span><br>
<span class="quotelev1">&gt; each node I can run the benchmark on just that node, but when I try  
</span><br>
<span class="quotelev1">&gt; to run it across the two I get an error &quot;bash: orted: command not  
</span><br>
<span class="quotelev1">&gt; found&quot;. The openmpi bin directory is in the PATH on both nodes. I  
</span><br>
<span class="quotelev1">&gt; can type &quot;orted&quot; in and I don't get a command not found error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Run command on a single node: mpirun -np 2 cg.C.2
</span><br>
<span class="quotelev1">&gt; Run command on two nodes: mpirun -np 2 -host shrek,fiona cg.C.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what I'm doing wrong?
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
<li><strong>Next message:</strong> <a href="3877.php">Tom Conerly: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Previous message:</strong> <a href="3875.php">Tom Conerly: "[OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>In reply to:</strong> <a href="3875.php">Tom Conerly: "[OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3877.php">Tom Conerly: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
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

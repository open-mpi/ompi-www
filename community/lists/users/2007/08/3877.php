<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 14:42:23 2007" -->
<!-- isoreceived="20070816184223" -->
<!-- sent="Thu, 16 Aug 2007 11:42:17 -0700" -->
<!-- isosent="20070816184217" -->
<!-- name="Tom Conerly" -->
<!-- email="tomconerly_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;bash: orted: command not found&amp;quot; running NPB2.4 with tau" -->
<!-- id="3efa93d0708161142s4be9fe89v2c6aa04b5bec449b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3efa93d0708161141l3e132090u4a523681238cceec_at_mail.gmail.com" -->
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
<strong>From:</strong> Tom Conerly (<em>tomconerly_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 14:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3878.php">Brock Palen: "[OMPI users] sepran package dead lock"</a>
<li><strong>Previous message:</strong> <a href="3876.php">Si Hammond: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Maybe in reply to:</strong> <a href="3875.php">Tom Conerly: "[OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, that worked perfectly.
<br>
<p>On 8/16/07, Tom Conerly &lt;theycallhimtom_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That worked perfectly. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/16/07, Si Hammond &lt;simon.hammond_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tom,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've also had this problem. I looked in my bashrc and found that it
</span><br>
<span class="quotelev2">&gt; &gt; returned prior to setting the path variable if it was being run in
</span><br>
<span class="quotelev2">&gt; &gt; non-interactive mode. This sounds similar to your situation. You'll
</span><br>
<span class="quotelev2">&gt; &gt; need to comment this out if you rely on it to set your path.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Si Hammond
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 16 Aug 2007, at 19:14, Tom Conerly wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am trying to run one of the NPB2.4 benchmarks over two nodes. On
</span><br>
<span class="quotelev3">&gt; &gt; &gt; each node I can run the benchmark on just that node, but when I try
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to run it across the two I get an error &quot;bash: orted: command not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; found&quot;. The openmpi bin directory is in the PATH on both nodes. I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; can type &quot;orted&quot; in and I don't get a command not found error.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Run command on a single node: mpirun -np 2 cg.C.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Run command on two nodes: mpirun -np 2 -host shrek,fiona cg.C.2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any idea what I'm doing wrong?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3878.php">Brock Palen: "[OMPI users] sepran package dead lock"</a>
<li><strong>Previous message:</strong> <a href="3876.php">Si Hammond: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Maybe in reply to:</strong> <a href="3875.php">Tom Conerly: "[OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
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

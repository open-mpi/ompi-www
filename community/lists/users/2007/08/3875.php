<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 14:14:19 2007" -->
<!-- isoreceived="20070816181419" -->
<!-- sent="Thu, 16 Aug 2007 11:14:13 -0700" -->
<!-- isosent="20070816181413" -->
<!-- name="Tom Conerly" -->
<!-- email="tomconerly_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;bash: orted: command not found&amp;quot; running NPB2.4 with tau" -->
<!-- id="3efa93d0708161114v2b35127dsb0d2408871143c46_at_mail.gmail.com" -->
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
<strong>From:</strong> Tom Conerly (<em>tomconerly_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 14:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3876.php">Si Hammond: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Previous message:</strong> <a href="3874.php">Daniel Sp&#229;ngberg: "[OMPI users] Process termination problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3876.php">Si Hammond: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Reply:</strong> <a href="3876.php">Si Hammond: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Maybe reply:</strong> <a href="3877.php">Tom Conerly: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to run one of the NPB2.4 benchmarks over two nodes. On each node
<br>
I can run the benchmark on just that node, but when I try to run it across
<br>
the two I get an error &quot;bash: orted: command not found&quot;. The openmpi bin
<br>
directory is in the PATH on both nodes. I can type &quot;orted&quot; in and I don't
<br>
get a command not found error.
<br>
<p>Run command on a single node: mpirun -np 2 cg.C.2
<br>
Run command on two nodes: mpirun -np 2 -host shrek,fiona cg.C.2
<br>
<p>Any idea what I'm doing wrong?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3876.php">Si Hammond: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Previous message:</strong> <a href="3874.php">Daniel Sp&#229;ngberg: "[OMPI users] Process termination problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3876.php">Si Hammond: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Reply:</strong> <a href="3876.php">Si Hammond: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Maybe reply:</strong> <a href="3877.php">Tom Conerly: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
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

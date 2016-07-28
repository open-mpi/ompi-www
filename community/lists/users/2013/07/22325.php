<?
$subject_val = "Re: [OMPI users] max. message size";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 17 04:59:22 2013" -->
<!-- isoreceived="20130717085922" -->
<!-- sent="Wed, 17 Jul 2013 16:58:56 +0800" -->
<!-- isosent="20130717085856" -->
<!-- name="jiangzuoyan_at_[hidden]" -->
<!-- email="jiangzuoyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] max. message size" -->
<!-- id="CAAmZbPNqC17JGGH5vaXhb-6B6dnyzoOfeqZY0S_ypzPWyMgaWQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20130717105134.185422c2tn2rmlue_at_mail.livenet.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] max. message size<br>
<strong>From:</strong> <a href="mailto:jiangzuoyan_at_[hidden]?Subject=Re:%20[OMPI%20users]%20max.%20message%20size"><em>jiangzuoyan_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-07-17 04:58:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22326.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22324.php">mohammad assadsolimani: "[OMPI users] max. message size"</a>
<li><strong>In reply to:</strong> <a href="22324.php">mohammad assadsolimani: "[OMPI users] max. message size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22327.php">Mike Dubman: "Re: [OMPI users] max. message size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did this too, FYI.
<br>
<p>template&lt;class T&gt;
<br>
tmp::enable_if&lt;is_builtin&lt;T&gt;::value&gt;
<br>
send(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const T *buf, size_t count, int dest, int tag, MPI_Comm comm) {
<br>
&nbsp;&nbsp;int imax = std::numeric_limits&lt;int&gt;::max();
<br>
&nbsp;&nbsp;MPI_Datatype dtype = datatype&lt;T&gt;();
<br>
&nbsp;&nbsp;while (count &gt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int c = imax;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ((size_t)c &gt; count) c = count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count -= c;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send((void*)buf, c, dtype, dest, tag, comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf += c;
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p>template &lt;class T&gt;
<br>
tmp::enable_if&lt;is_builtin&lt;T&gt;::value&gt;
<br>
recv(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;T *buf, size_t count, int source, int tag, MPI_Comm comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status *status=MPI_STATUS_IGNORE) {
<br>
&nbsp;&nbsp;int imax = std::numeric_limits&lt;int&gt;::max();
<br>
&nbsp;&nbsp;MPI_Datatype dtype = datatype&lt;T&gt;();
<br>
&nbsp;&nbsp;if (count &gt; (size_t)imax &amp;&amp; status == MPI_STATUS_IGNORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp; (source == MPI_ANY_SOURCE || tag == MPI_ANY_TAG)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status t[1];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return recv(buf, count, source, tag, comm, t);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;while (count &gt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int c = imax;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ((size_t)c &gt; count) c = count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count -= c;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv((void*)buf, c, dtype, source, tag, comm, status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (count &gt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (source == MPI_ANY_SOURCE) source = status-&gt;MPI_SOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (tag == MPI_ANY_TAG) tag = status-&gt;MPI_TAG;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf += c;
<br>
&nbsp;&nbsp;}
<br>
}
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Changsheng Jiang
<br>
<p><p>On Wed, Jul 17, 2013 at 4:51 PM, mohammad assadsolimani &lt;
<br>
m.assadsolimani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<h3>Post removed!</h3>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22325/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22326.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22324.php">mohammad assadsolimani: "[OMPI users] max. message size"</a>
<li><strong>In reply to:</strong> <a href="22324.php">mohammad assadsolimani: "[OMPI users] max. message size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22327.php">Mike Dubman: "Re: [OMPI users] max. message size"</a>
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

<?
$subject_val = "[OMPI users] MPI_Recv MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 04:56:47 2012" -->
<!-- isoreceived="20121113095647" -->
<!-- sent="Tue, 13 Nov 2012 17:56:38 +0800 (CST)" -->
<!-- isosent="20121113095638" -->
<!-- name="&#213;&#212;&#211;&#161;" -->
<!-- email="yin_zhao_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Recv MPI_THREAD_MULTIPLE" -->
<!-- id="4c804451.9c88.13af932f9d6.Coremail.yin_zhao_at_126.com" -->
<!-- charset="GBK" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Recv MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> &#213;&#212;&#211;&#161; (<em>yin_zhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-13 04:56:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20710.php">huaibao zhang: "[OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20708.php">Lim Jiew Meng: "[OMPI users] Add/remove &quot;Event Listeners&quot; in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20711.php">Brian Budge: "Re: [OMPI users] MPI_Recv MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="20711.php">Brian Budge: "Re: [OMPI users] MPI_Recv MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a problem here.
<br>
<p>My program runs perfectly in MPI version 1.6 series, but it would run into some problem in MPI version 1.4x series. Does MPI 1.4x version have a bug related in MPI_Recv.
<br>
<p>The log in Node[1] says that &quot;MPI_Recv in node[1] can not probe tag [11] from source[0]&quot;. But in node [0], the log says it Isend message with Tag [11] to dest [1].
<br>
<p>int provided;
<br>
<p>MPI_Init_thread(&amp;argc,&amp;argv, MPI_THREAD_MULTIPLE,&amp;provided);if(provided != MPI_THREAD_MULTIPLE){
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Sorry, your MPI library does not provide MPI_THREAD_MULTIPLE\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD,0);}
<br>
<p>Both of my 1.6x and 1.4x library do not support MPI_THREAD_MULTIPLE. Is this the reason? But why it runs perfect with 1.6x version. 
<br>
<p>Thanks very much for your help.
<br>
<p><p><p><p>Esaon 
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20709/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20710.php">huaibao zhang: "[OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20708.php">Lim Jiew Meng: "[OMPI users] Add/remove &quot;Event Listeners&quot; in MPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20711.php">Brian Budge: "Re: [OMPI users] MPI_Recv MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="20711.php">Brian Budge: "Re: [OMPI users] MPI_Recv MPI_THREAD_MULTIPLE"</a>
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

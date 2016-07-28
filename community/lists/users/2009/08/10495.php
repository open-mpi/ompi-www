<?
$subject_val = "[OMPI users] MPI_File_open return error code 16";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 21:23:49 2009" -->
<!-- isoreceived="20090827012349" -->
<!-- sent="Thu, 27 Aug 2009 09:23:20 +0800" -->
<!-- isosent="20090827012320" -->
<!-- name="Changsheng Jiang" -->
<!-- email="jiangzuoyan_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_File_open return error code 16" -->
<!-- id="eafc0afe0908261823s374e511fgd6b31154e87df4a7_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_File_open return error code 16<br>
<strong>From:</strong> Changsheng Jiang (<em>jiangzuoyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-26 21:23:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10496.php">Jean Potsam: "[OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>Previous message:</strong> <a href="10494.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10943.php">Rob Latham: "Re: [OMPI users] MPI_File_open return error code 16"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10943.php">Rob Latham: "Re: [OMPI users] MPI_File_open return error code 16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi List,
<br>
<p>I am learning MPI.
<br>
<p>A small code snippet try to open a file by MPI_File_open gets error
<br>
16(Internal error code.) in a single server with OpenMPI 1.3.3, but
<br>
it's run correctly in another server(with OpenMPI 1.3.2).
<br>
<p>How to fix this problem? Thanks.
<br>
<p>This is the snippet:
<br>
<p>int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;MPI_File fh;
<br>
&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;int ret = MPI_File_open(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, &quot;temp&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_RDWR | MPI_MODE_CREATE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, &amp;fh);
<br>
&nbsp;&nbsp;if (ret != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;open file failed, code=%d\n&quot;, ret);
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_close(&amp;fh);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Changsheng Jiang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10496.php">Jean Potsam: "[OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>Previous message:</strong> <a href="10494.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10943.php">Rob Latham: "Re: [OMPI users] MPI_File_open return error code 16"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10943.php">Rob Latham: "Re: [OMPI users] MPI_File_open return error code 16"</a>
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

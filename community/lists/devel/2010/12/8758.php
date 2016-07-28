<?
$subject_val = "[OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 05:09:42 2010" -->
<!-- isoreceived="20101202100942" -->
<!-- sent="Thu, 2 Dec 2010 18:09:37 +0800" -->
<!-- isosent="20101202100937" -->
<!-- name="&#195;&#207;&#207;&#220;&#190;&#252;" -->
<!-- email="xjun.meng_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Send doesn't work if the data &amp;gt;= 2GB" -->
<!-- id="AANLkTimEdB6WrmCVCdB_J6VtzrgNhywTgxxkFcOd3Ns6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB<br>
<strong>From:</strong> &#195;&#207;&#207;&#220;&#190;&#252; (<em>xjun.meng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 05:09:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8759.php">’≈æß: "[OMPI devel] OPEN MPI at VxWorks now can almost work"</a>
<li><strong>Previous message:</strong> <a href="8757.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8779.php">Jeff Squyres: "Re: [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Reply:</strong> <a href="8779.php">Jeff Squyres: "Re: [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi all,
<br>
<p>I met a question recently when I tested the MPI_send and MPI_Recv
<br>
functions.  When I run the following codes, the  processes hanged and I
<br>
found there was not data transmission in my network at all.
<br>
<p>BTW: I finished this test on two X86-64 computers with 16GB memory and
<br>
installed Linux.
<br>
<p>&nbsp;&nbsp;1 #include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;2 #include &lt;mpi.h&gt;
<br>
&nbsp;&nbsp;3 #include &lt;stdlib.h&gt;
<br>
&nbsp;&nbsp;4 #include &lt;unistd.h&gt;
<br>
&nbsp;&nbsp;5
<br>
&nbsp;&nbsp;6
<br>
&nbsp;&nbsp;7 int main(int argc, char** argv)
<br>
&nbsp;&nbsp;8 {
<br>
&nbsp;&nbsp;9     int localID;
<br>
&nbsp;10     int numOfPros;
<br>
&nbsp;11     size_t Gsize = (size_t)2 * 1024 * 1024 * 1024;
<br>
&nbsp;12
<br>
&nbsp;13     char* g = (char*)malloc(Gsize);
<br>
&nbsp;14
<br>
&nbsp;15     MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;16     MPI_Comm_size(MPI_COMM_WORLD, &amp;numOfPros);
<br>
&nbsp;17     MPI_Comm_rank(MPI_COMM_WORLD, &amp;localID);
<br>
&nbsp;18
<br>
&nbsp;19     MPI_Datatype MPI_Type_lkchar;
<br>
&nbsp;20     MPI_Type_contiguous(2048, MPI_BYTE, &amp;MPI_Type_lkchar);
<br>
&nbsp;21     MPI_Type_commit(&amp;MPI_Type_lkchar);
<br>
&nbsp;22
<br>
&nbsp;23     if (localID == 0)
<br>
&nbsp;24     {
<br>
&nbsp;25         MPI_Send(g, 1024*1024, MPI_Type_lkchar, 1, 1, MPI_COMM_WORLD);
<br>
&nbsp;26     }
<br>
&nbsp;27
<br>
&nbsp;28     if (localID != 0)
<br>
&nbsp;29     {
<br>
&nbsp;30         MPI_Status status;
<br>
&nbsp;31         MPI_Recv(g, 1024*1024, MPI_Type_lkchar, 0, 1, \
<br>
&nbsp;32                 MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;33     }
<br>
&nbsp;34
<br>
&nbsp;35     MPI_Finalize();
<br>
&nbsp;36
<br>
&nbsp;37     return 0;
<br>
&nbsp;38 }
<br>
<p>Thanks
<br>
Jun
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8758/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8759.php">’≈æß: "[OMPI devel] OPEN MPI at VxWorks now can almost work"</a>
<li><strong>Previous message:</strong> <a href="8757.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8779.php">Jeff Squyres: "Re: [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Reply:</strong> <a href="8779.php">Jeff Squyres: "Re: [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB"</a>
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

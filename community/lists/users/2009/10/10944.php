<?
$subject_val = "[OMPI users] wrong rank and process number";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 15:40:16 2009" -->
<!-- isoreceived="20091022194016" -->
<!-- sent="Thu, 22 Oct 2009 14:40:09 -0500" -->
<!-- isosent="20091022194009" -->
<!-- name="Victor Rosas Garcia" -->
<!-- email="rosas.victor_at_[hidden]" -->
<!-- subject="[OMPI users] wrong rank and process number" -->
<!-- id="c2a41d1e0910221240s9b07416hf7b6e9a83a44ffe4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] wrong rank and process number<br>
<strong>From:</strong> Victor Rosas Garcia (<em>rosas.victor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 15:40:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10945.php">Ralph Castain: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>Previous message:</strong> <a href="10943.php">Rob Latham: "Re: [OMPI users] MPI_File_open return error code 16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10945.php">Ralph Castain: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>Reply:</strong> <a href="10945.php">Ralph Castain: "Re: [OMPI users] wrong rank and process number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody,
<br>
<p>I have just installed openmpi v. 1.2.5 under ubuntu 8.04 and I have compiled
<br>
the following &quot;hello world&quot; program:
<br>
<p>------start code------
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[]){
<br>
int rank, size, len;
<br>
char hostname[256] = &quot;&quot;;
<br>
<p>MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
MPI_Get_processor_name(hostname, &amp;len);
<br>
<p>printf(&quot;Hello World! I am %d of %d running on %s\n&quot;,
<br>
rank, size, hostname);
<br>
<p>MPI_Finalize();
<br>
<p>return 0;
<br>
}
<br>
------end code------
<br>
<p>&nbsp;which I think is pretty basic stuff.  Anyway, when I run it (single node,
<br>
three cores), I get the following output:
<br>
<p>mpiexec.openmpi -np 6 hello
<br>
<p>Hello World! I am 0 of 1 running on el-torito
<br>
Hello World! I am 0 of 1 running on el-torito
<br>
Hello World! I am 0 of 1 running on el-torito
<br>
Hello World! I am 0 of 1 running on el-torito
<br>
Hello World! I am 0 of 1 running on el-torito
<br>
Hello World! I am 0 of 1 running on el-torito
<br>
<p>where &quot;el-torito&quot; is the hostname.  Shouldn't it be something like?:
<br>
Hello World! I am 0 of 6 running on el-torito
<br>
Hello World! I am 1 of 6 running on el-torito
<br>
Hello World! I am 2 of 6 running on el-torito
<br>
...
<br>
etc.
<br>
<p>Any ideas as to why I keep getting wrong numbers for rank and number of
<br>
processes?
<br>
<p>Greetings from Monterrey, Mexico
<br>
<pre>
-- 
Victor M. Rosas Garc&#237;a
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10944/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10945.php">Ralph Castain: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>Previous message:</strong> <a href="10943.php">Rob Latham: "Re: [OMPI users] MPI_File_open return error code 16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10945.php">Ralph Castain: "Re: [OMPI users] wrong rank and process number"</a>
<li><strong>Reply:</strong> <a href="10945.php">Ralph Castain: "Re: [OMPI users] wrong rank and process number"</a>
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

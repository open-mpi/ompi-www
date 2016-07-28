<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 16 09:20:17 2006" -->
<!-- isoreceived="20060816132017" -->
<!-- sent="Wed, 16 Aug 2006 09:20:09 -0400 (EDT)" -->
<!-- isosent="20060816132009" -->
<!-- name="Andrew J Caird" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="[OMPI users] C++ error: static object marked for destruction more than once" -->
<!-- id="Pine.LNX.4.63.0608160909020.20277_at_lancaster.engin.umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Andrew J Caird (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-16 09:20:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1748.php">Allan Menezes: "[OMPI users] Dual core Intel CPU"</a>
<li><strong>Previous message:</strong> <a href="1746.php">Brian Barrett: "Re: [OMPI users] Testing 1-sided MPI again"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a short code segment that, when compiled with mpiCC fails 
<br>
at run-time with the error:
<br>
<p>C++ runtime abort: internal error: static object marked for 
<br>
destruction more than once
<br>
<p>If I compile the same code with mpicc, it works fine.  If I 
<br>
compile the same code with LAM's mpiCC it works fine.
<br>
<p>The code is in the attached zip file (along with the output of 
<br>
ompi_info and config.log) and also below.
<br>
<p>It could very well be that I'm simply doing something wrong, so 
<br>
if someone can point that out, that's fine with me (in that case, 
<br>
though, if someone can explain why it works with LAM's mpiCC I'd 
<br>
find that interesting).
<br>
<p>We're running the latest PGI compilers:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ pgCC -V
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pgCC 6.1-6 64-bit target on x86-64 Linux
<br>
<p>and v1.1.0 of OpenMPI.
<br>
<p>Thanks for any advice.
<br>
--andy
<br>
<p><p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc,char **argv) {
<br>
<p>&nbsp;&nbsp;&nbsp;int ThisThread=0;
<br>
&nbsp;&nbsp;&nbsp;int TotalThreadsNumber=1;
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;asdasdas\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;ThisThread);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;TotalThreadsNumber);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 1;
<br>
}
<br>
*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable    **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p>
<br><hr>
<ul>
<li>APPLICATION/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1747/acaird-ompi-info-config.zip">acaird-ompi-info-config.zip</a>
</ul>
<!-- attachment="acaird-ompi-info-config.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1748.php">Allan Menezes: "[OMPI users] Dual core Intel CPU"</a>
<li><strong>Previous message:</strong> <a href="1746.php">Brian Barrett: "Re: [OMPI users] Testing 1-sided MPI again"</a>
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

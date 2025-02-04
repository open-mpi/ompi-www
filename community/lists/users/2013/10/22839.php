<?
$subject_val = "Re: [OMPI users] need help in this error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 25 01:33:16 2013" -->
<!-- isoreceived="20131025053316" -->
<!-- sent="Fri, 25 Oct 2013 00:33:15 -0500" -->
<!-- isosent="20131025053315" -->
<!-- name="Osman Khalid" -->
<!-- email="osmankhalid2005_at_[hidden]" -->
<!-- subject="Re: [OMPI users] need help in this error" -->
<!-- id="CAPct32o8XqJRWH=HYKNvuA+=0zD7sgP1z2a1-xVhwHE_oNgAVQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52699478.2080308_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] need help in this error<br>
<strong>From:</strong> Osman Khalid (<em>osmankhalid2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-25 01:33:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22840.php">Osman Khalid: "[OMPI users] Fwd:  need help in this error"</a>
<li><strong>Previous message:</strong> <a href="22838.php">Tommi Laiho: "[OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>In reply to:</strong> <a href="22837.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22840.php">Osman Khalid: "[OMPI users] Fwd:  need help in this error"</a>
<li><strong>Reply:</strong> <a href="22840.php">Osman Khalid: "[OMPI users] Fwd:  need help in this error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Marco
<br>
<p>Once again thank you for kind help. As you suggested, I installed Cygwin,
<br>
along with the OpenMPI packages, from the links you sent.
<br>
<p>When I run this example (hello.c):
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;int numprocs, rank, namelen;
<br>
&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
<p>&nbsp;&nbsp;printf(&quot;Process %d on %s out of %d\n&quot;, rank, processor_name, numprocs);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p><p><p>Now I am getting the following error:
<br>
<p><p>OSMANK_at_osman /home
<br>
$ ls
<br>
file1.cc  hello.c  OSMANK
<br>
<p>OSMANK_at_osman /home
<br>
$ mpicc hello.c -o hello
<br>
hello.c:1:17: *fatal error: mpi.h: No such file or directory*
<br>
compilation terminated.
<br>
<p>OSMANK_at_osman /home
<br>
<p><p>I have also tried a c++ version (mpic++) with .cc file and it also gives
<br>
the same error. Can you kindly suggest what is wrong here. Do I need to set
<br>
any paths? The command such as mpirun or mpicc etc itself does not give
<br>
error, but asks for the file inputs.
<br>
<p>Thank you in advance.
<br>
<p><p>On Thu, Oct 24, 2013 at 4:43 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Il 10/24/2013 10:02 PM, Osman Khalid ha scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you Marco for reply
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I changed the version to 1.7, but it is stilling give me exactly the
</span><br>
<span class="quotelev2">&gt;&gt; same error. I copy paste error below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi Osman,
</span><br>
<span class="quotelev1">&gt; It seems I was not clear.
</span><br>
<span class="quotelev1">&gt; I mean that openmpi was already available as package
</span><br>
<span class="quotelev1">&gt; distributed  in cygwin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See <a href="http://cygwin.com/packages/">http://cygwin.com/packages/</a> for all available packages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why do you need to build it by yourself ?
</span><br>
<span class="quotelev1">&gt; Can not you use the one already distributed ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22839/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22840.php">Osman Khalid: "[OMPI users] Fwd:  need help in this error"</a>
<li><strong>Previous message:</strong> <a href="22838.php">Tommi Laiho: "[OMPI users] ORTE_ERROR_LOG"</a>
<li><strong>In reply to:</strong> <a href="22837.php">marco atzeri: "Re: [OMPI users] need help in this error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22840.php">Osman Khalid: "[OMPI users] Fwd:  need help in this error"</a>
<li><strong>Reply:</strong> <a href="22840.php">Osman Khalid: "[OMPI users] Fwd:  need help in this error"</a>
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

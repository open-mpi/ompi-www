<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 02:27:31 2007" -->
<!-- isoreceived="20070822062731" -->
<!-- sent="Wed, 22 Aug 2007 13:27:25 +0700" -->
<!-- isosent="20070822062725" -->
<!-- name="Hiep Bui Hoang" -->
<!-- email="bhoanghiep_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI." -->
<!-- id="94f1baee0708212327y2ebcd149p54f1d688a05a08e5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7FE5F6C8-A736-4036-AEEC-9059E86C733B_at_open-mpi.org" -->
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
<strong>From:</strong> Hiep Bui Hoang (<em>bhoanghiep_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-22 02:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3902.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Previous message:</strong> <a href="3900.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>In reply to:</strong> <a href="3895.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3902.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Reply:</strong> <a href="3902.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I had compiled and installed Open MPI with C/R support in the way Josh said.
<br>
When finished, Open MPI had support and tools for C/R: ompi-checkpoint,
<br>
ompi-restart.
<br>
And I try an example ( hello_c.c in examples folder, but I edit it with a
<br>
for loop to print out &quot;Hello...&quot; 1,000,000 times)
<br>
But I get this error:
<br>
Error: The application (PID = 23573) failed to checkpoint properly.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Returned -1.
<br>
<p>The steps what I had do:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# mpicc hello_c.c -o hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# mpirun -np 4 -am ft-enable-cr hello
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I get PID of this mpirun with another shell and do:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# ompi-checkpoint 23573
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: The application (PID = 23573) failed to checkpoint
<br>
properly.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Returned -1.
<br>
<p>What's wrong with this error?
<br>
Could you help me an example about using C/R in Open MPI?
<br>
Hiep
<br>
<p>hello_c.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank, size, i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i&lt;1000000; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d Hello, world, I am %d of %d\n&quot;,i,rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>On 8/22/07, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are a few things you need to do to build Open MPI with
</span><br>
<span class="quotelev1">&gt; Checkpoint/Restart support. By default Open MPI is configured without
</span><br>
<span class="quotelev1">&gt; checkpoint/restart support.
</span><br>
<span class="quotelev1">&gt; 1) Make sure you have BLCR successfully installed and loaded on your
</span><br>
<span class="quotelev1">&gt; system(s)
</span><br>
<span class="quotelev1">&gt; 2) configure Open MPI with the &quot;--with-ft=cr&quot; option, which enables
</span><br>
<span class="quotelev1">&gt; checkpoint/restart fault tolerance
</span><br>
<span class="quotelev1">&gt;   Note: you may also have to specify the install directory of BLCR
</span><br>
<span class="quotelev1">&gt; with the &quot;--with-blcr=/path/to/blcr&quot;
</span><br>
<span class="quotelev1">&gt; 3) make and make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The resultant build will have support for checkpoint/restart and the
</span><br>
<span class="quotelev1">&gt; tools (e.g., ompi-checkpoint, ompi-restart) will become available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the documentation it doesn't seem to include these steps.
</span><br>
<span class="quotelev1">&gt; I'll fix that later today, and post and updated file to the wiki.
</span><br>
<span class="quotelev1">&gt; Sorry about that. :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2007, at 1:09 PM, Hiep Bui Hoang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; I'm Hiep, I'm trying to use checkpoint/restart feature in Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt; I had read information about this feature in  <a href="https://svn.open">https://svn.open</a>-
</span><br>
<span class="quotelev2">&gt; &gt; mpi.org/trac/ompi/wiki/ProcessFT_CR and Open-MPI-FT-CR-Draft-
</span><br>
<span class="quotelev2">&gt; &gt; v1.pdf. I had built Open MPI from &quot;trunk&quot; which gotten by Subversion.
</span><br>
<span class="quotelev2">&gt; &gt; But I don't know how to enable checkpoint/restart fault tolerance
</span><br>
<span class="quotelev2">&gt; &gt; in Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt; So that, I get this error when I try this command: ompi-checkpoint.
</span><br>
<span class="quotelev2">&gt; &gt;        bash: ompi-checkpoint: command not found
</span><br>
<span class="quotelev2">&gt; &gt; I want to ask you how to build and use checkpoint/restart feature
</span><br>
<span class="quotelev2">&gt; &gt; in Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt; Please tell me in details, I'm a new user.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3901/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3902.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Previous message:</strong> <a href="3900.php">Lev Givon: "Re: [OMPI users] building static and shared OpenMPI libraries on	MacOSX"</a>
<li><strong>In reply to:</strong> <a href="3895.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3902.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>Reply:</strong> <a href="3902.php">Josh Hursey: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
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

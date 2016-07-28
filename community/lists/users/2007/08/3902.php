<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 07:24:37 2007" -->
<!-- isoreceived="20070822112437" -->
<!-- sent="Wed, 22 Aug 2007 07:24:32 -0400" -->
<!-- isosent="20070822112432" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI." -->
<!-- id="500A73C6-3EF4-476B-A9A5-0AABA61F84B2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="94f1baee0708212327y2ebcd149p54f1d688a05a08e5_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-22 07:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3903.php">Noam Meltzer: "[OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<li><strong>Previous message:</strong> <a href="3901.php">Hiep Bui Hoang: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>In reply to:</strong> <a href="3901.php">Hiep Bui Hoang: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is not with your setup, but with a limitation of the  
<br>
current checkpoint/restart implementation in Open MPI. Currently,  
<br>
Open MPI requires that the MPI process be inside the MPI library in  
<br>
order to make progress on a checkpoint request. This is because all  
<br>
checkpoint coordination in Open MPI occurs in the same thread as the  
<br>
main MPI process. So if you made a call to an MPI function in your  
<br>
loop, the checkpoint will be able to make progress.
<br>
<p>This is different that LAM/MPI checkpoint/restart in which  
<br>
coordination occurred in a concurrent thread, therefore the  
<br>
application does not need to be in the MPI library in order to make  
<br>
progress on a checkpoint request.
<br>
<p>I am currently developing a solution for this, but I can't say when  
<br>
it will be completed. Hopefully before the v1.3 release.
<br>
<p>Sorry I don't have a better solution at the moment.
<br>
<p>Best,
<br>
Josh
<br>
<p>On Aug 22, 2007, at 2:27 AM, Hiep Bui Hoang wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I had compiled and installed Open MPI with C/R support in the way  
</span><br>
<span class="quotelev1">&gt; Josh said. When finished, Open MPI had support and tools for C/R:  
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint, ompi-restart.
</span><br>
<span class="quotelev1">&gt; And I try an example ( hello_c.c in examples folder, but I edit it  
</span><br>
<span class="quotelev1">&gt; with a for loop to print out &quot;Hello...&quot; 1,000,000 times)
</span><br>
<span class="quotelev1">&gt; But I get this error:
</span><br>
<span class="quotelev1">&gt; Error: The application (PID = 23573) failed to checkpoint properly.
</span><br>
<span class="quotelev1">&gt;        Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The steps what I had do:
</span><br>
<span class="quotelev1">&gt;          # mpicc hello_c.c -o hello
</span><br>
<span class="quotelev1">&gt;          # mpirun -np 4 -am ft-enable-cr hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I get PID of this mpirun with another shell and do:
</span><br>
<span class="quotelev1">&gt;          # ompi-checkpoint 23573
</span><br>
<span class="quotelev1">&gt;             Error: The application (PID = 23573) failed to  
</span><br>
<span class="quotelev1">&gt; checkpoint properly.
</span><br>
<span class="quotelev1">&gt;                  Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's wrong with this error?
</span><br>
<span class="quotelev1">&gt; Could you help me an example about using C/R in Open MPI?
</span><br>
<span class="quotelev1">&gt; Hiep
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hello_c.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank, size, i;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;     for(i=0; i&lt;1000000; i++){
</span><br>
<span class="quotelev1">&gt;             printf(&quot;%d Hello, world, I am %d of %d\n&quot;,i,rank, size);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/22/07, Josh Hursey &lt; jjhursey_at_[hidden]&gt; wrote:Hello,
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
<span class="quotelev2">&gt; &gt; v1.pdf. I had built Open MPI from &quot;trunk&quot; which gotten by  
</span><br>
<span class="quotelev1">&gt; Subversion.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3903.php">Noam Meltzer: "[OMPI users] OpenMPI fails to initalize the openib btl when run from SGE"</a>
<li><strong>Previous message:</strong> <a href="3901.php">Hiep Bui Hoang: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
<li><strong>In reply to:</strong> <a href="3901.php">Hiep Bui Hoang: "Re: [OMPI users] How to build and use checkpoint/restart fault tolerance in Open MPI."</a>
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

<?
$subject_val = "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 03:51:02 2012" -->
<!-- isoreceived="20120117085102" -->
<!-- sent="Tue, 17 Jan 2012 08:49:52 +0000" -->
<!-- isosent="20120117084952" -->
<!-- name="Theiner, Andre" -->
<!-- email="andre.theiner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when used on more than 2 CPUs" -->
<!-- id="088B9CB56632924D9EAE7A408BB76580845A95D768_at_GVW1102EXC.americas.hpqcorp.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1326716702.3817.YahooMailNeo_at_web29605.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs when used on more than 2 CPUs<br>
<strong>From:</strong> Theiner, Andre (<em>andre.theiner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 03:49:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18180.php">TERRY DONTJE: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18178.php">Mike Dubman: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>In reply to:</strong> <a href="18168.php">devendra rai: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18183.php">John Hearns: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Reply:</strong> <a href="18183.php">John Hearns: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Devendra,
<br>
thanks for your interesting answer, up to now I expected to get a fully operational openmpi installation package
<br>
by installing openmpi from the &#226;&#128;&#156;science&#226;&#128;&#157; repository ( <a href="http://download.opensuse.org/repositories/science/openSUSE_11.3%e2%80%9d">http://download.opensuse.org/repositories/science/openSUSE_11.3%e2%80%9d</a> ).
<br>
To compile your script I need to have the openmpi sources which I do not have at present, I will try to get them.
<br>
How do I compile and build using multiple processors?
<br>
Is there a special flag which tells the compiler to care for multiple CPUs?
<br>

<br>
Andre
<br>

<br>

<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of devendra rai
<br>
Sent: Montag, 16. Januar 2012 13:25
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] mpirun hangs when used on more than 2 CPUs
<br>

<br>
Hello Andre,
<br>

<br>
It may be possible that your openmpi does not support threaded MPI-calls (if these are happening). I had a similar problem, and it was traced to this cause. If you installed your openmpi from available repositories, chances are that you do not have thread-support.
<br>

<br>
Here's a small script that you can use to determine whether or not you have thread support:
<br>

<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int myrank;
<br>
&nbsp;&nbsp;int desired_thread_support = MPI_THREAD_MULTIPLE;
<br>
&nbsp;&nbsp;int provided_thread_support;
<br>

<br>
&nbsp;&nbsp;MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support, &amp;provided_thread_support);
<br>

<br>
&nbsp;&nbsp;/* check if the thread support has been provided */
<br>
&nbsp;&nbsp;if (provided_thread_support!=desired_thread_support)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;MPI thread support not available! Aborted. &quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(-1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>

<br>
Compile and build as usual, using multiple processors.
<br>

<br>
Maybe this helps. If you do discover that you do not have support available, you will need to rebuild MPI with --enable-mpi-threads=yes flag.
<br>

<br>
HTH.
<br>

<br>

<br>
Devendra
<br>

<br>
________________________________
<br>
From: &quot;Theiner, Andre&quot; &lt;andre.theiner_at_[hidden]&gt;
<br>
To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Monday, 16 January 2012, 11:55
<br>
Subject: [OMPI users] mpirun hangs when used on more than 2 CPUs
<br>

<br>

<br>
Hi everyone,
<br>
may I have your help on a strange problem?
<br>
High performance computing is new to me and I have not much idea about OpenMPI and OpenFoam (OF) which uses the &#226;&#128;&#156;mpirun&#226;&#128;&#157; command.
<br>
I have to support the OF application in my company and have been trying to find the problem since about 1 week.
<br>
The versions are openmpi-1.3.2 and OF 2.0.1 which are running on openSUSE 11.3 x86_64.
<br>
The computer is brand new, has 96 GB RAM, 12 CPUs and was installed with Linux some weeks ago.
<br>
I installed OF 2.0.1 according to the vendors instructions at <a href="http://www.openfoam.org/archive/2.0.1/download/suse.php.">http://www.openfoam.org/archive/2.0.1/download/suse.php.</a>
<br>

<br>
Here the problem:
<br>
The experienced user tested the OF with a test case out of one of the vendors tutorials.
<br>
He only used the computing power of his local machine &#226;&#128;&#156;caelde04&#226;&#128;&#157; , no other computers were accessed by mpirun.
<br>

<br>
He found no problem when testing in single &#226;&#128;&#156;processor mode&#226;&#128;&#157; but in &#226;&#128;&#156;multiprocessor mode&#226;&#128;&#157; his calculations hangs when he distributes
<br>
the calculations to more than 2 CPUs. The OF vendor thinks this is an OpenMPI problem somehow and that is why I am trying to get
<br>
help from this forum here.
<br>
I attached 2 files, one is the &#226;&#128;&#156;decomposeParDict&#226;&#128;&#157; which resides in the &#226;&#128;&#156;system&#226;&#128;&#157; subdirectory of his test case and the other is the log file
<br>
from the &#226;&#128;&#156;decomposePar&#226;&#128;&#157; command and the mpirun command &#226;&#128;&#156;mpirun -np 9 interFoam &#226;&#128;&#147;parallel&#226;&#128;&#157;.
<br>
Do you have an idea where the problem is or how I can narrow it down?
<br>
Thanks much for any help.
<br>

<br>
Andre
<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18179/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18180.php">TERRY DONTJE: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18178.php">Mike Dubman: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>In reply to:</strong> <a href="18168.php">devendra rai: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18183.php">John Hearns: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Reply:</strong> <a href="18183.php">John Hearns: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
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

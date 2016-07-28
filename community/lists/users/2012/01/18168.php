<?
$subject_val = "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 07:25:08 2012" -->
<!-- isoreceived="20120116122508" -->
<!-- sent="Mon, 16 Jan 2012 12:25:02 +0000 (GMT)" -->
<!-- isosent="20120116122502" -->
<!-- name="devendra rai" -->
<!-- email="dev641_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when used on more than 2 CPUs" -->
<!-- id="1326716702.3817.YahooMailNeo_at_web29605.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="088B9CB56632924D9EAE7A408BB76580845A95D37D_at_GVW1102EXC.americas.hpqcorp.net" -->
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
<strong>From:</strong> devendra rai (<em>dev641_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 07:25:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18169.php">MM: "[OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Previous message:</strong> <a href="18167.php">Theiner, Andre: "[OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>In reply to:</strong> <a href="18167.php">Theiner, Andre: "[OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18179.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Reply:</strong> <a href="18179.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Andre,

It may be possible that your openmpi does not support threaded MPI-calls (if these are happening). I had a similar problem, and it was traced to this cause. If you installed your openmpi from available repositories, chances are that you do not have thread-support.

Here's a small script that you can use to determine whether or not you have thread support:

#include &lt;mpi.h&gt;
#include &lt;iostream&gt;

int main(int argc, char **argv)
{
&#194;&#160; int myrank;
&#194;&#160; int desired_thread_support = MPI_THREAD_MULTIPLE;
&#194;&#160; int provided_thread_support;

&#194;&#160; MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support, &amp;provided_thread_support);

&#194;&#160; /* check if the thread support has been provided */
&#194;&#160; if (provided_thread_support!=desired_thread_support)
&#194;&#160;&#194;&#160;&#194;&#160; {
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; std::cout &lt;&lt; &quot;MPI thread support not available! Aborted. &quot; &lt;&lt; std::endl;
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; exit(-1);
&#194;&#160;&#194;&#160;&#194;&#160; }
&#194;&#160; MPI_Finalize();
&#194;&#160; return 0;
}


Compile and build as usual, using multiple processors.


Maybe this helps. If you do discover that you do not have support available, you will need to rebuild MPI with --enable-mpi-threads=yes flag.

HTH.


Devendra



________________________________
 From: &quot;Theiner, Andre&quot; &lt;andre.theiner_at_[hidden]&gt;
To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; 
Sent: Monday, 16 January 2012, 11:55
Subject: [OMPI users] mpirun hangs when used on more than 2 CPUs
 

&#194;&#160;
Hi everyone,
may I have your help on a strange problem?
High performance computing is new to me and I have not much idea about OpenMPI and OpenFoam (OF) which uses the &#226;&#128;&#156;mpirun&#226;&#128;&#157; command.
I have to support the OF application in my company and have been trying to find the problem since about 1 week.
The versions are openmpi-1.3.2 and OF 2.0.1 which are running on openSUSE 11.3 x86_64.
The computer is brand new, has 96 GB RAM, 12 CPUs and was installed with Linux some weeks ago.
I installed OF 2.0.1 according to the vendors instructions at <a href="http://www.openfoam.org/archive/2.0.1/download/suse.php">http://www.openfoam.org/archive/2.0.1/download/suse.php</a>.
&#194;&#160;
Here the problem:
The experienced user tested the OF with a test case out of one of the vendors tutorials.
He only used the computing power of his local machine &#226;&#128;&#156;caelde04&#226;&#128;&#157; , no other computers were accessed by mpirun.
&#194;&#160;
He found no problem when testing in single &#226;&#128;&#156;processor mode&#226;&#128;&#157; but in &#226;&#128;&#156;multiprocessor mode&#226;&#128;&#157; his calculations hangs when he distributes
the calculations to more than 2 CPUs. The OF vendor thinks this is an OpenMPI problem somehow and that is why I am trying to get
help from this forum here.
I attached 2 files, one is the &#226;&#128;&#156;decomposeParDict&#226;&#128;&#157; which resides in the &#226;&#128;&#156;system&#226;&#128;&#157; subdirectory of his test case and the other is the log file
from the &#226;&#128;&#156;decomposePar&#226;&#128;&#157; command and the mpirun command &#226;&#128;&#156;mpirun -np 9 interFoam &#226;&#128;&#147;parallel&#226;&#128;&#157;.
Do you have an idea where the problem is or how I can narrow it down?
Thanks much for any help.

Andre


&#194;&#160;
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18168/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18169.php">MM: "[OMPI users] feature requests: mpic++ to report both release and debug flags"</a>
<li><strong>Previous message:</strong> <a href="18167.php">Theiner, Andre: "[OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>In reply to:</strong> <a href="18167.php">Theiner, Andre: "[OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18179.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Reply:</strong> <a href="18179.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
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

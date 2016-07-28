<?
$subject_val = "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 07:22:29 2012" -->
<!-- isoreceived="20120117122229" -->
<!-- sent="Tue, 17 Jan 2012 12:22:25 +0000" -->
<!-- isosent="20120117122225" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when used on more than 2 CPUs" -->
<!-- id="CAPqNE2XEBtSeOXJ=RZqS_NMN_3X36MGnSZwqCqoyWZ4Ms7gH0Q_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="088B9CB56632924D9EAE7A408BB76580845A95D768_at_GVW1102EXC.americas.hpqcorp.net" -->
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
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 07:22:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18184.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18182.php">MM: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18179.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18185.php">Ralph Castain: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Reply:</strong> <a href="18185.php">Ralph Castain: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andre,
<br>
you should not need the OpenMPI sources.
<br>
<p>Install the openmpi-devel package from the same source
<br>
(zypper install openmpi-devel if you have that science repository enabled)
<br>
This will give you the mpi.h file and other include files, libraries
<br>
and manual pages.
<br>
<p>That is a convention in Suse-style distros - the devel package
<br>
contains the stuf you need to 'develop'
<br>
<p>On 17/01/2012, Theiner, Andre &lt;andre.theiner_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Devendra,
</span><br>
<span class="quotelev1">&gt; thanks for your interesting answer, up to now I expected to get a fully
</span><br>
<span class="quotelev1">&gt; operational openmpi installation package
</span><br>
<span class="quotelev1">&gt; by installing openmpi from the &#147;science&#148; repository (
</span><br>
<span class="quotelev1">&gt; <a href="http://download.opensuse.org/repositories/science/openSUSE_11.3%94">http://download.opensuse.org/repositories/science/openSUSE_11.3%94</a> ).
</span><br>
<span class="quotelev1">&gt; To compile your script I need to have the openmpi sources which I do not
</span><br>
<span class="quotelev1">&gt; have at present, I will try to get them.
</span><br>
<span class="quotelev1">&gt; How do I compile and build using multiple processors?
</span><br>
<span class="quotelev1">&gt; Is there a special flag which tells the compiler to care for multiple CPUs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andre
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of devendra rai
</span><br>
<span class="quotelev1">&gt; Sent: Montag, 16. Januar 2012 13:25
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Andre,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may be possible that your openmpi does not support threaded MPI-calls (if
</span><br>
<span class="quotelev1">&gt; these are happening). I had a similar problem, and it was traced to this
</span><br>
<span class="quotelev1">&gt; cause. If you installed your openmpi from available repositories, chances
</span><br>
<span class="quotelev1">&gt; are that you do not have thread-support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a small script that you can use to determine whether or not you have
</span><br>
<span class="quotelev1">&gt; thread support:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int myrank;
</span><br>
<span class="quotelev1">&gt;   int desired_thread_support = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev1">&gt;   int provided_thread_support;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support,
</span><br>
<span class="quotelev1">&gt; &amp;provided_thread_support);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /* check if the thread support has been provided */
</span><br>
<span class="quotelev1">&gt;   if (provided_thread_support!=desired_thread_support)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       std::cout &lt;&lt; &quot;MPI thread support not available! Aborted. &quot; &lt;&lt;
</span><br>
<span class="quotelev1">&gt; std::endl;
</span><br>
<span class="quotelev1">&gt;       exit(-1);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compile and build as usual, using multiple processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe this helps. If you do discover that you do not have support available,
</span><br>
<span class="quotelev1">&gt; you will need to rebuild MPI with --enable-mpi-threads=yes flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Devendra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; From: &quot;Theiner, Andre&quot; &lt;andre.theiner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Monday, 16 January 2012, 11:55
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; may I have your help on a strange problem?
</span><br>
<span class="quotelev1">&gt; High performance computing is new to me and I have not much idea about
</span><br>
<span class="quotelev1">&gt; OpenMPI and OpenFoam (OF) which uses the &#147;mpirun&#148; command.
</span><br>
<span class="quotelev1">&gt; I have to support the OF application in my company and have been trying to
</span><br>
<span class="quotelev1">&gt; find the problem since about 1 week.
</span><br>
<span class="quotelev1">&gt; The versions are openmpi-1.3.2 and OF 2.0.1 which are running on openSUSE
</span><br>
<span class="quotelev1">&gt; 11.3 x86_64.
</span><br>
<span class="quotelev1">&gt; The computer is brand new, has 96 GB RAM, 12 CPUs and was installed with
</span><br>
<span class="quotelev1">&gt; Linux some weeks ago.
</span><br>
<span class="quotelev1">&gt; I installed OF 2.0.1 according to the vendors instructions at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.openfoam.org/archive/2.0.1/download/suse.php">http://www.openfoam.org/archive/2.0.1/download/suse.php</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here the problem:
</span><br>
<span class="quotelev1">&gt; The experienced user tested the OF with a test case out of one of the
</span><br>
<span class="quotelev1">&gt; vendors tutorials.
</span><br>
<span class="quotelev1">&gt; He only used the computing power of his local machine &#147;caelde04&#148; , no other
</span><br>
<span class="quotelev1">&gt; computers were accessed by mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; He found no problem when testing in single &#147;processor mode&#148; but in
</span><br>
<span class="quotelev1">&gt; &#147;multiprocessor mode&#148; his calculations hangs when he distributes
</span><br>
<span class="quotelev1">&gt; the calculations to more than 2 CPUs. The OF vendor thinks this is an
</span><br>
<span class="quotelev1">&gt; OpenMPI problem somehow and that is why I am trying to get
</span><br>
<span class="quotelev1">&gt; help from this forum here.
</span><br>
<span class="quotelev1">&gt; I attached 2 files, one is the &#147;decomposeParDict&#148; which resides in the
</span><br>
<span class="quotelev1">&gt; &#147;system&#148; subdirectory of his test case and the other is the log file
</span><br>
<span class="quotelev1">&gt; from the &#147;decomposePar&#148; command and the mpirun command &#147;mpirun -np 9
</span><br>
<span class="quotelev1">&gt; interFoam &#150;parallel&#148;.
</span><br>
<span class="quotelev1">&gt; Do you have an idea where the problem is or how I can narrow it down?
</span><br>
<span class="quotelev1">&gt; Thanks much for any help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andre
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18184.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18182.php">MM: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18179.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18185.php">Ralph Castain: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Reply:</strong> <a href="18185.php">Ralph Castain: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
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

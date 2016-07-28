<?
$subject_val = "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 09:08:51 2012" -->
<!-- isoreceived="20120117140851" -->
<!-- sent="Tue, 17 Jan 2012 07:08:42 -0700" -->
<!-- isosent="20120117140842" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when used on more than 2 CPUs" -->
<!-- id="5A79A2A3-6BCD-48AA-9807-5B67C838638E_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAPqNE2XEBtSeOXJ=RZqS_NMN_3X36MGnSZwqCqoyWZ4Ms7gH0Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 09:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18186.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18184.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>In reply to:</strong> <a href="18183.php">John Hearns: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18197.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Reply:</strong> <a href="18197.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might first just try running a simple MPI &quot;hello&quot; to verify the installation. I don't know if OF is threaded or not.
<br>
<p>Sent from my iPad
<br>
<p>On Jan 17, 2012, at 5:22 AM, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Andre,
</span><br>
<span class="quotelev1">&gt; you should not need the OpenMPI sources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Install the openmpi-devel package from the same source
</span><br>
<span class="quotelev1">&gt; (zypper install openmpi-devel if you have that science repository enabled)
</span><br>
<span class="quotelev1">&gt; This will give you the mpi.h file and other include files, libraries
</span><br>
<span class="quotelev1">&gt; and manual pages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is a convention in Suse-style distros - the devel package
</span><br>
<span class="quotelev1">&gt; contains the stuf you need to 'develop'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 17/01/2012, Theiner, Andre &lt;andre.theiner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Devendra,
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your interesting answer, up to now I expected to get a fully
</span><br>
<span class="quotelev2">&gt;&gt; operational openmpi installation package
</span><br>
<span class="quotelev2">&gt;&gt; by installing openmpi from the &#226;&#128;&#156;science&#226;&#128;&#157; repository (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://download.opensuse.org/repositories/science/openSUSE_11.3%e2%80%9d">http://download.opensuse.org/repositories/science/openSUSE_11.3%e2%80%9d</a> ).
</span><br>
<span class="quotelev2">&gt;&gt; To compile your script I need to have the openmpi sources which I do not
</span><br>
<span class="quotelev2">&gt;&gt; have at present, I will try to get them.
</span><br>
<span class="quotelev2">&gt;&gt; How do I compile and build using multiple processors?
</span><br>
<span class="quotelev2">&gt;&gt; Is there a special flag which tells the compiler to care for multiple CPUs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andre
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of devendra rai
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Montag, 16. Januar 2012 13:25
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello Andre,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It may be possible that your openmpi does not support threaded MPI-calls (if
</span><br>
<span class="quotelev2">&gt;&gt; these are happening). I had a similar problem, and it was traced to this
</span><br>
<span class="quotelev2">&gt;&gt; cause. If you installed your openmpi from available repositories, chances
</span><br>
<span class="quotelev2">&gt;&gt; are that you do not have thread-support.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's a small script that you can use to determine whether or not you have
</span><br>
<span class="quotelev2">&gt;&gt; thread support:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  int myrank;
</span><br>
<span class="quotelev2">&gt;&gt;  int desired_thread_support = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev2">&gt;&gt;  int provided_thread_support;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;provided_thread_support);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  /* check if the thread support has been provided */
</span><br>
<span class="quotelev2">&gt;&gt;  if (provided_thread_support!=desired_thread_support)
</span><br>
<span class="quotelev2">&gt;&gt;    {
</span><br>
<span class="quotelev2">&gt;&gt;      std::cout &lt;&lt; &quot;MPI thread support not available! Aborted. &quot; &lt;&lt;
</span><br>
<span class="quotelev2">&gt;&gt; std::endl;
</span><br>
<span class="quotelev2">&gt;&gt;      exit(-1);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Compile and build as usual, using multiple processors.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe this helps. If you do discover that you do not have support available,
</span><br>
<span class="quotelev2">&gt;&gt; you will need to rebuild MPI with --enable-mpi-threads=yes flag.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Devendra
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Theiner, Andre&quot; &lt;andre.theiner_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, 16 January 2012, 11:55
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt; may I have your help on a strange problem?
</span><br>
<span class="quotelev2">&gt;&gt; High performance computing is new to me and I have not much idea about
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI and OpenFoam (OF) which uses the &#226;&#128;&#156;mpirun&#226;&#128;&#157; command.
</span><br>
<span class="quotelev2">&gt;&gt; I have to support the OF application in my company and have been trying to
</span><br>
<span class="quotelev2">&gt;&gt; find the problem since about 1 week.
</span><br>
<span class="quotelev2">&gt;&gt; The versions are openmpi-1.3.2 and OF 2.0.1 which are running on openSUSE
</span><br>
<span class="quotelev2">&gt;&gt; 11.3 x86_64.
</span><br>
<span class="quotelev2">&gt;&gt; The computer is brand new, has 96 GB RAM, 12 CPUs and was installed with
</span><br>
<span class="quotelev2">&gt;&gt; Linux some weeks ago.
</span><br>
<span class="quotelev2">&gt;&gt; I installed OF 2.0.1 according to the vendors instructions at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.openfoam.org/archive/2.0.1/download/suse.php">http://www.openfoam.org/archive/2.0.1/download/suse.php</a>.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here the problem:
</span><br>
<span class="quotelev2">&gt;&gt; The experienced user tested the OF with a test case out of one of the
</span><br>
<span class="quotelev2">&gt;&gt; vendors tutorials.
</span><br>
<span class="quotelev2">&gt;&gt; He only used the computing power of his local machine &#226;&#128;&#156;caelde04&#226;&#128;&#157; , no other
</span><br>
<span class="quotelev2">&gt;&gt; computers were accessed by mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; He found no problem when testing in single &#226;&#128;&#156;processor mode&#226;&#128;&#157; but in
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#156;multiprocessor mode&#226;&#128;&#157; his calculations hangs when he distributes
</span><br>
<span class="quotelev2">&gt;&gt; the calculations to more than 2 CPUs. The OF vendor thinks this is an
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI problem somehow and that is why I am trying to get
</span><br>
<span class="quotelev2">&gt;&gt; help from this forum here.
</span><br>
<span class="quotelev2">&gt;&gt; I attached 2 files, one is the &#226;&#128;&#156;decomposeParDict&#226;&#128;&#157; which resides in the
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#156;system&#226;&#128;&#157; subdirectory of his test case and the other is the log file
</span><br>
<span class="quotelev2">&gt;&gt; from the &#226;&#128;&#156;decomposePar&#226;&#128;&#157; command and the mpirun command &#226;&#128;&#156;mpirun -np 9
</span><br>
<span class="quotelev2">&gt;&gt; interFoam &#226;&#128;&#147;parallel&#226;&#128;&#157;.
</span><br>
<span class="quotelev2">&gt;&gt; Do you have an idea where the problem is or how I can narrow it down?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks much for any help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andre
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="18186.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18184.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>In reply to:</strong> <a href="18183.php">John Hearns: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18197.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<li><strong>Reply:</strong> <a href="18197.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
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

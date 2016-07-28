<?
$subject_val = "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 16:53:11 2012" -->
<!-- isoreceived="20120117215311" -->
<!-- sent="Tue, 17 Jan 2012 16:53:05 -0500" -->
<!-- isosent="20120117215305" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when used on more than 2 CPUs" -->
<!-- id="33297F53-4BA8-411E-AE27-32A0DB4F6903_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5A79A2A3-6BCD-48AA-9807-5B67C838638E_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 16:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18198.php">Victor Pomponiu: "[OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
<li><strong>Previous message:</strong> <a href="18196.php">MM: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18185.php">Ralph Castain: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18199.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>Reply:</strong> <a href="18199.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should probably also run the ompi_info command; it tells you details about your installation, and how it was configured.
<br>
<p>Is it known that OpenFoam uses threads with MPI?
<br>
<p><p>On Jan 17, 2012, at 9:08 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You might first just try running a simple MPI &quot;hello&quot; to verify the installation. I don't know if OF is threaded or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2012, at 5:22 AM, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andre,
</span><br>
<span class="quotelev2">&gt;&gt; you should not need the OpenMPI sources.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Install the openmpi-devel package from the same source
</span><br>
<span class="quotelev2">&gt;&gt; (zypper install openmpi-devel if you have that science repository enabled)
</span><br>
<span class="quotelev2">&gt;&gt; This will give you the mpi.h file and other include files, libraries
</span><br>
<span class="quotelev2">&gt;&gt; and manual pages.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is a convention in Suse-style distros - the devel package
</span><br>
<span class="quotelev2">&gt;&gt; contains the stuf you need to 'develop'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 17/01/2012, Theiner, Andre &lt;andre.theiner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Devendra,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks for your interesting answer, up to now I expected to get a fully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operational openmpi installation package
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by installing openmpi from the &#147;science&#148; repository (
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://download.opensuse.org/repositories/science/openSUSE_11.3%94">http://download.opensuse.org/repositories/science/openSUSE_11.3%94</a> ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To compile your script I need to have the openmpi sources which I do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have at present, I will try to get them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How do I compile and build using multiple processors?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a special flag which tells the compiler to care for multiple CPUs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of devendra rai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Montag, 16. Januar 2012 13:25
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Andre,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It may be possible that your openmpi does not support threaded MPI-calls (if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these are happening). I had a similar problem, and it was traced to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cause. If you installed your openmpi from available repositories, chances
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are that you do not have thread-support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a small script that you can use to determine whether or not you have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread support:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int myrank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int desired_thread_support = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int provided_thread_support;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;provided_thread_support);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* check if the thread support has been provided */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (provided_thread_support!=desired_thread_support)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     std::cout &lt;&lt; &quot;MPI thread support not available! Aborted. &quot; &lt;&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     exit(-1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compile and build as usual, using multiple processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe this helps. If you do discover that you do not have support available,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you will need to rebuild MPI with --enable-mpi-threads=yes flag.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Devendra
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: &quot;Theiner, Andre&quot; &lt;andre.theiner_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, 16 January 2012, 11:55
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may I have your help on a strange problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High performance computing is new to me and I have not much idea about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI and OpenFoam (OF) which uses the &#147;mpirun&#148; command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have to support the OF application in my company and have been trying to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find the problem since about 1 week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The versions are openmpi-1.3.2 and OF 2.0.1 which are running on openSUSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11.3 x86_64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The computer is brand new, has 96 GB RAM, 12 CPUs and was installed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux some weeks ago.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed OF 2.0.1 according to the vendors instructions at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.openfoam.org/archive/2.0.1/download/suse.php">http://www.openfoam.org/archive/2.0.1/download/suse.php</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here the problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The experienced user tested the OF with a test case out of one of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendors tutorials.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; He only used the computing power of his local machine &#147;caelde04&#148; , no other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computers were accessed by mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; He found no problem when testing in single &#147;processor mode&#148; but in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#147;multiprocessor mode&#148; his calculations hangs when he distributes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the calculations to more than 2 CPUs. The OF vendor thinks this is an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI problem somehow and that is why I am trying to get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help from this forum here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attached 2 files, one is the &#147;decomposeParDict&#148; which resides in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#147;system&#148; subdirectory of his test case and the other is the log file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the &#147;decomposePar&#148; command and the mpirun command &#147;mpirun -np 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interFoam &#150;parallel&#148;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have an idea where the problem is or how I can narrow it down?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks much for any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18198.php">Victor Pomponiu: "[OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
<li><strong>Previous message:</strong> <a href="18196.php">MM: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18185.php">Ralph Castain: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18199.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>Reply:</strong> <a href="18199.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
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

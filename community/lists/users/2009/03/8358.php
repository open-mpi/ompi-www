<?
$subject_val = "Re: [OMPI users] Run-time problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 07:59:23 2009" -->
<!-- isoreceived="20090309115923" -->
<!-- sent="Mon, 9 Mar 2009 05:59:09 -0600" -->
<!-- isosent="20090309115909" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run-time problem" -->
<!-- id="FA2A34C2-44F4-4305-92DA-FDDC0B7F037F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="368509.16349.qm_at_web63002.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Run-time problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 07:59:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8359.php">Marcia Cristina Cera: "[OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Previous message:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>In reply to:</strong> <a href="8353.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8372.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Reply:</strong> <a href="8372.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you try compiling your program with the provided mpicc (or mpiCC,  
<br>
mpif90, etc. - as appropriate) wrapper compiler? The wrapper compilers  
<br>
contain all the required library definitions to make the application  
<br>
work.
<br>
<p>Compiling without the wrapper compilers is a very bad idea...
<br>
<p>Ralph
<br>
<p><p>On Mar 6, 2009, at 11:02 AM, justin oppenheim wrote:
<br>
<p><span class="quotelev1">&gt; Please let me go over it again, and maybe it helps clarifying things  
</span><br>
<span class="quotelev1">&gt; a bit better. All the OS involved are Suse 10.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a place for the the installed programs, say /programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In /programs I have installed openmpi and my mpi program, say  
</span><br>
<span class="quotelev1">&gt; my_mpi_program.  When I am in the working directory, my  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH does include both
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /programs/my_mpi_program/lib
</span><br>
<span class="quotelev1">&gt; /programs/openmpi/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And my PATH includes
</span><br>
<span class="quotelev1">&gt; /programs/my_mpi_program/bin
</span><br>
<span class="quotelev1">&gt; /programs/openmpi/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, then I do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile machinefile  -np 20 my_mpi_program &lt;arguments&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /programs/my_mpi_program: symbol lookup error: /programs/openmpi/lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.0: undefined symbol: ompi_registered_datareps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I configured openmpi, I did
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/programs/openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and then compiled it. Subsequently, I compiled my_mpi_program with  
</span><br>
<span class="quotelev1">&gt; the options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_CXX=/programs/openmpi/bin/mpicxx
</span><br>
<span class="quotelev1">&gt; MPI_CC=/programs/openmpi/bin/mpicc
</span><br>
<span class="quotelev1">&gt; MPI_INCLUDE=/programs/openmpi/include/
</span><br>
<span class="quotelev1">&gt; MPI_LIB=mpi
</span><br>
<span class="quotelev1">&gt; MPI_LIBDIR=/programs/openmpi/lib/ MPI_LINKERFORPROGRAMS=/programs/ 
</span><br>
<span class="quotelev1">&gt; openmpi/bin/mpicxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any clue? The directory /programs is NSF mounted on the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; JO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Thu, 3/5/09, justin oppenheim &lt;jl09981_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: justin oppenheim &lt;jl09981_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Run-time problem
</span><br>
<span class="quotelev1">&gt; To: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, March 5, 2009, 5:28 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for my ignorance, but in you option 2: what command should I  
</span><br>
<span class="quotelev1">&gt; add the option
</span><br>
<span class="quotelev1">&gt; --prefix=path-to-install? when I configure openmpi? I already did  
</span><br>
<span class="quotelev1">&gt; that when I configured  and compiled openmpi. Also, in response to  
</span><br>
<span class="quotelev1">&gt; your option 1, I did add the paths to libraries of openmpi in the  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH  in the .cshrc of the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; JO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Thu, 3/5/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Run-time problem
</span><br>
<span class="quotelev1">&gt; To: jl09981_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, March 5, 2009, 12:46 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, you can add --launch-agent rsh to the command line and that  
</span><br>
<span class="quotelev1">&gt; will have OMPI use rsh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like your remote nodes may not be seeing your OMPI install  
</span><br>
<span class="quotelev1">&gt; directory. Several ways you can resolve that - here are a couple:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. add the install directory to your LD_LIBRARY_PATH in your .cshrc  
</span><br>
<span class="quotelev1">&gt; (or whatever shell rc you are using) - be sure this is being  
</span><br>
<span class="quotelev1">&gt; executed on the remote nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. add --prefix=path-to-install on your cmd line - this will direct  
</span><br>
<span class="quotelev1">&gt; your remote procs to the proper libraries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2009, at 10:18 AM, justin oppenheim wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I should also add that the program
</span><br>
<span class="quotelev2">&gt;&gt; my_mpi_executable is locally installed under the same root  
</span><br>
<span class="quotelev2">&gt;&gt; directory as that under which  openmpi-1.3 is installed. This root  
</span><br>
<span class="quotelev2">&gt;&gt; directory is NSF mounted on the working nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; JO
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- On Thu, 3/5/09, justin oppenheim &lt;jl09981_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; From: justin oppenheim &lt;jl09981_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Run-time problem
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thursday, March 5, 2009, 12:04 PM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your prompt response. I am using openmpi-1.3, Suse 10.3.  
</span><br>
<span class="quotelev2">&gt;&gt; I installed openmpi-1.3 with the option
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/where/to/install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and then just
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make all install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought the default connection mode is rsh, but I had to invoke  
</span><br>
<span class="quotelev2">&gt;&gt; ssh-agent, in order not have to enter password one by one. How to  
</span><br>
<span class="quotelev2">&gt;&gt; change to rsh?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; JO
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- On Thu, 3/5/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Run-time problem
</span><br>
<span class="quotelev2">&gt;&gt; To: jl09981_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thursday, March 5, 2009, 11:40 AM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you tell us what version of Open MPI you are using, a little  
</span><br>
<span class="quotelev2">&gt;&gt; about your system (I would assume you are using ssh?), and how this  
</span><br>
<span class="quotelev2">&gt;&gt; was configured?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 5, 2009, at 9:31 AM, justin oppenheim wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I execute something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -machinefile machinefile my_mpi_executable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get something like this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my_mpi_executable symbol lookup error: remote_openmpi/lib/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi_cxx.so.0: undefined symbol: ompi_registered_datareps
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where both my_mpi_executable and remote_openmpi are installed on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NSF mounted locations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any clue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; JO
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8358/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8359.php">Marcia Cristina Cera: "[OMPI users] on-the-fly nodes liberation"</a>
<li><strong>Previous message:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>In reply to:</strong> <a href="8353.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8372.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Reply:</strong> <a href="8372.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
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

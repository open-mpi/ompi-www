<?
$subject_val = "Re: [OMPI users] Run-time problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 09:15:12 2009" -->
<!-- isoreceived="20090314131512" -->
<!-- sent="Sat, 14 Mar 2009 09:15:06 -0400" -->
<!-- isosent="20090314131506" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run-time problem" -->
<!-- id="BBF865AC-0A07-4A54-944B-C4494F9D8E50_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="261924.37734.qm_at_web63003.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 09:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8448.php">Jeff Squyres: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8446.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8372.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8474.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Reply:</strong> <a href="8474.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying; this week unexpectedly turned  
<br>
exceptionally hectic for several us...
<br>
<p>On Mar 9, 2009, at 2:53 PM, justin oppenheim wrote:
<br>
<p><span class="quotelev1">&gt; Yes. As I indicated earlier, I did use these options to compile my  
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_CXX=/programs/openmpi/bin/mpicxx
</span><br>
<span class="quotelev1">&gt; MPI_CC=/programs/openmpi/bin/mpicc
</span><br>
<span class="quotelev1">&gt; MPI_INCLUDE=/programs/openmpi/include/
</span><br>
<span class="quotelev1">&gt; MPI_LIB=mpi /programs/openmpi/
</span><br>
<span class="quotelev1">&gt; MPI_LIBDIR=/programs/openmpi/lib/ MPI_LINKERFORPROGRAMS=/programs/ 
</span><br>
<span class="quotelev1">&gt; openmpi/bin/mpicxx
</span><br>
<p>Ah; I think Ralph was asking because we don't know exactly how these ? 
<br>
environment variables? are being used to build your application.
<br>
<p><span class="quotelev1">&gt; where /programs/openmpi/ is the chosen location for installing the  
</span><br>
<span class="quotelev1">&gt; openmpi package (specifically, openmpi-1.3.tar.gz)  that I  
</span><br>
<span class="quotelev1">&gt; downloaded from  www.open-mpi.org.
</span><br>
<p>Can you ensure that you have exactly the same version of Open MPI  
<br>
installed on all nodes in exactly the same location in the filesystem  
<br>
(it doesn't *have* to be the same location on the filesystem on all  
<br>
the nodes, but it sure is easier if it is).  Also be sure that when  
<br>
you mpirun across multiple nodes that the same version of Open MPI  
<br>
(both executables and libraries) are being found on all nodes.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any clue? Again, my system is Suse 10.3 64-bit, which should be  
</span><br>
<span class="quotelev1">&gt; pretty standard. Would another package openmpi-1.3-1.src.rpm work  
</span><br>
<span class="quotelev1">&gt; better for my system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<span class="quotelev1">&gt; --- On Mon, 3/9/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Run-time problem
</span><br>
<span class="quotelev1">&gt; To: jl09981_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Monday, March 9, 2009, 7:59 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you try compiling your program with the provided mpicc (or  
</span><br>
<span class="quotelev1">&gt; mpiCC, mpif90, etc. - as appropriate) wrapper compiler? The wrapper  
</span><br>
<span class="quotelev1">&gt; compilers contain all the required library definitions to make the  
</span><br>
<span class="quotelev1">&gt; application work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiling without the wrapper compilers is a very bad idea...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2009, at 11:02 AM, justin oppenheim wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me go over it again, and maybe it helps clarifying  
</span><br>
<span class="quotelev2">&gt;&gt; things a bit better. All the OS involved are Suse 10.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a place for the the installed programs, say /programs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In /programs I have installed openmpi and my mpi program, say  
</span><br>
<span class="quotelev2">&gt;&gt; my_mpi_program.  When I am in the working directory, my  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH does include both
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /programs/my_mpi_program/lib
</span><br>
<span class="quotelev2">&gt;&gt; /programs/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And my PATH includes
</span><br>
<span class="quotelev2">&gt;&gt; /programs/my_mpi_program/bin
</span><br>
<span class="quotelev2">&gt;&gt; /programs/openmpi/bin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, then I do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -machinefile machinefile  -np 20 my_mpi_program &lt;arguments&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /programs/my_mpi_program: symbol lookup error: /programs/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; lib/libmpi_cxx.so.0: undefined symbol: ompi_registered_datareps
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I configured openmpi, I did
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/programs/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and then compiled it. Subsequently, I compiled my_mpi_program with  
</span><br>
<span class="quotelev2">&gt;&gt; the options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_CXX=/programs/openmpi/bin/mpicxx
</span><br>
<span class="quotelev2">&gt;&gt; MPI_CC=/programs/openmpi/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INCLUDE=/programs/openmpi/include/
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LIB=mpi
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LIBDIR=/programs/openmpi/lib/ MPI_LINKERFORPROGRAMS=/programs/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/bin/mpicxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any clue? The directory /programs is NSF mounted on the nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks again,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; JO
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Date: Thursday, March 5, 2009, 5:28 PM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for my ignorance, but in you option 2: what command should I  
</span><br>
<span class="quotelev2">&gt;&gt; add the option
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=path-to-install? when I configure openmpi? I already did  
</span><br>
<span class="quotelev2">&gt;&gt; that when I configured  and compiled openmpi.  Also, in response to  
</span><br>
<span class="quotelev2">&gt;&gt; your option 1, I did add the paths to libraries of openmpi in the  
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH  in the .cshrc of the nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
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
<span class="quotelev2">&gt;&gt; To: jl09981_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cc: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thursday, March 5, 2009, 12:46 PM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First, you can add --launch-agent rsh to the command line and that  
</span><br>
<span class="quotelev2">&gt;&gt; will have OMPI use rsh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like your remote nodes may not be seeing your OMPI  
</span><br>
<span class="quotelev2">&gt;&gt; install directory. Several ways you can resolve that - here are a  
</span><br>
<span class="quotelev2">&gt;&gt; couple:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. add the install directory to your LD_LIBRARY_PATH in your .cshrc  
</span><br>
<span class="quotelev2">&gt;&gt; (or whatever shell rc you are using) - be sure this is being  
</span><br>
<span class="quotelev2">&gt;&gt; executed on the remote nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. add --prefix=path-to-install on your cmd line - this will direct  
</span><br>
<span class="quotelev2">&gt;&gt; your remote procs to the proper libraries
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 5, 2009, at 10:18 AM, justin oppenheim wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe I should also add that the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my_mpi_executable is locally installed under the same root  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory as that under which  openmpi-1.3 is installed. This root  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory is NSF mounted on the working nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; JO
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- On Thu, 3/5/09, justin oppenheim &lt;jl09981_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: justin oppenheim &lt;jl09981_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Run-time problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thursday, March 5, 2009, 12:04 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your prompt response. I am using openmpi-1.3, Suse  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.3. I installed openmpi-1.3 with the option
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/where/to/install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then just
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought the default connection mode is rsh, but I had to invoke  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh-agent, in order not have to enter password one by one. How to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change to rsh?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; JO
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- On Thu, 3/5/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Run-time problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: jl09981_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thursday, March 5, 2009, 11:40 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you tell us what version of Open MPI you are using, a little  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about your system (I would assume you are using ssh?), and how  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this was configured?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 5, 2009, at 9:31 AM, justin oppenheim wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I execute something like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -machinefile machinefile my_mpi_executable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get something like this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my_mpi_executable symbol lookup error: remote_openmpi/lib/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libmpi_cxx.so.0: undefined symbol: ompi_registered_datareps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where both my_mpi_executable and remote_openmpi are installed on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NSF mounted locations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any clue?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; JO
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8448.php">Jeff Squyres: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8446.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8372.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8474.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Reply:</strong> <a href="8474.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
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

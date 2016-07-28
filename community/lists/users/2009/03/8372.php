<?
$subject_val = "Re: [OMPI users] Run-time problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 14:53:39 2009" -->
<!-- isoreceived="20090309185339" -->
<!-- sent="Mon, 9 Mar 2009 11:53:35 -0700 (PDT)" -->
<!-- isosent="20090309185335" -->
<!-- name="justin oppenheim" -->
<!-- email="jl09981_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run-time problem" -->
<!-- id="261924.37734.qm_at_web63003.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FA2A34C2-44F4-4305-92DA-FDDC0B7F037F_at_lanl.gov" -->
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
<strong>From:</strong> justin oppenheim (<em>jl09981_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 14:53:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8373.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>Previous message:</strong> <a href="8371.php">Prasanna Ranganathan: "[OMPI users] OpenMPI program getting stuck at poll()"</a>
<li><strong>In reply to:</strong> <a href="8358.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Reply:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. As I indicated earlier, I did use these options to compile my program
<br>
<p>MPI_CXX=/programs/openmpi/bin/mpicxx 
<br>
MPI_CC=/programs/openmpi/bin/mpicc 
<br>
MPI_INCLUDE=/programs/openmpi/include/
<br>
MPI_LIB=mpi /programs/openmpi/
<br>
MPI_LIBDIR=/programs/openmpi/lib/ MPI_LINKERFORPROGRAMS=/programs/openmpi/bin/mpicxx
<br>
<p>where  /programs/openmpi/ is the chosen location for installing the openmpi package (specifically, openmpi-1.3.tar.gz)&#160; that I downloaded from&#160; www.open-mpi.org.
<br>
<p>Any clue? Again, my system is Suse 10.3 64-bit, which should be pretty standard. Would another package openmpi-1.3-1.src.rpm work better for my system?
<br>
<p>Thanks,
<br>
<p>JO
<br>
<p><p>&#160;
<br>
<p><p>--- On Mon, 3/9/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Run-time problem
<br>
To: jl09981_at_[hidden]
<br>
Cc: users_at_[hidden]
<br>
Date: Monday, March 9, 2009, 7:59 AM
<br>
<p>Did you try compiling your program with the provided mpicc (or mpiCC, mpif90, etc. - as appropriate) wrapper compiler? The wrapper compilers contain all the required library definitions to make the application work.
<br>
Compiling without the wrapper compilers is a very bad idea...
<br>
Ralph
<br>
<p>On Mar 6, 2009, at 11:02 AM, justin oppenheim wrote:
<br>
Please let me go over it again, and maybe it helps clarifying things a bit better. All the OS involved are Suse 10.3.
<br>
<p>I have a place for the the installed programs, say /programs.
<br>
<p>In /programs I have installed openmpi and my mpi program, say my_mpi_program.&#160; When  I am in the working directory, my LD_LIBRARY_PATH does include both 
<br>
<p>/programs/my_mpi_program/lib
<br>
/programs/openmpi/lib
<br>
<p>And my PATH includes
<br>
/programs/my_mpi_program/bin
<br>
/programs/openmpi/bin
<br>
<p>So, then I do
<br>
<p>mpirun -machinefile machinefile&#160; -np 20 my_mpi_program &lt;arguments&gt; 
<br>
<p>and I get
<br>
<p>/programs/my_mpi_program: symbol lookup error: /programs/openmpi/lib/libmpi_cxx.so.0: undefined symbol: ompi_registered_datareps
<br>
<p>When I configured openmpi, I did
<br>
<p>./configure --prefix=/programs/openmpi
<br>
&#160;
<br>
and then compiled it. Subsequently, I compiled my_mpi_program with the options:
<br>
<p>MPI_CXX=/programs/openmpi/bin/mpicxx 
<br>
MPI_CC=/programs/openmpi/bin/mpicc 
<br>
MPI_INCLUDE=/programs/openmpi/include/
<br>
MPI_LIB=mpi 
<br>
MPI_LIBDIR=/programs/openmpi/lib/ MPI_LINKERFORPROGRAMS=/programs/openmpi/bin/mpicxx
<br>
<p>Any clue? The directory /programs is NSF mounted on the nodes.
<br>
<p>Many thanks again,
<br>
<p>JO
<br>
<p><p><p><p><p><p><p><p><p><p>--- On Thu, 3/5/09, justin oppenheim &lt;jl09981_at_[hidden]&gt; wrote:
<br>
From: justin oppenheim &lt;jl09981_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Run-time problem
<br>
To: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
<br>
Date: Thursday, March 5, 2009, 5:28 PM
<br>
<p>Hi Ralph:
<br>
<p>Sorry for my ignorance, but in you option 2: what command should I add the option 
<br>
--prefix=path-to-install? when I configure openmpi? I already did that when I configured&#160; and compiled openmpi.  Also, in response to your option 1, I did add the paths to libraries of openmpi in the LD_LIBRARY_PATH&#160; in the .cshrc of the nodes. 
<br>
<p>Thank you,
<br>
JO
<br>
<p>--- On Thu, 3/5/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Run-time problem
<br>
To: jl09981_at_[hidden]
<br>
Cc: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Thursday, March 5, 2009, 12:46 PM
<br>
<p>First, you can add --launch-agent rsh to the command line and that will have OMPI use rsh.
<br>
It sounds like your remote nodes may not be seeing your OMPI install directory. Several ways you can resolve that - here are a couple:
<br>
1. add the install directory to your LD_LIBRARY_PATH in your .cshrc (or whatever shell rc you are using) - be sure this is being executed on the remote nodes
<br>
2. add --prefix=path-to-install on your cmd line - this will direct your remote procs to the proper libraries
<br>
Ralph
<br>
<p>On Mar 5, 2009, at 10:18 AM, justin oppenheim wrote:
<br>
Maybe I should also add that the program
<br>
my_mpi_executable is locally installed under the same root directory as that under which&#160; openmpi-1.3 is installed. This root directory is NSF mounted on the working nodes.
<br>
<p>Thanks,
<br>
JO
<br>
<p>--- On Thu, 3/5/09, justin oppenheim &lt;jl09981_at_[hidden]&gt; wrote:
<br>
From: justin oppenheim &lt;jl09981_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Run-time problem
<br>
To: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
<br>
Date: Thursday, March 5, 2009, 12:04 PM
<br>
<p>Hi Ralph:
<br>
<p>Thanks for your prompt response. I am using openmpi-1.3, Suse 10.3. I installed openmpi-1.3 with the option
<br>
<p>./configure --prefix=/where/to/install
<br>
<p>and then just 
<br>
<p>make all install
<br>
<p>I thought the default connection mode is rsh, but I had to invoke ssh-agent, in order not have to enter password one by one. How to change to rsh?
<br>
<p>Thanks,
<br>
JO
<br>
<p>--- On Thu, 3/5/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Run-time problem
<br>
To: jl09981_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Thursday, March 5, 2009, 11:40 AM
<br>
<p>Could you tell us what version of Open MPI you are using, a little about your system (I would assume you are using ssh?), and how this was configured?
<br>
ThanksRalph
<br>
<p>On Mar 5, 2009, at 9:31 AM, justin oppenheim wrote:
<br>
Hi:
<br>
<p>When I execute something like
<br>
<p>mpirun -machinefile machinefile my_mpi_executable 
<br>
<p>I get something like this 
<br>
<p>my_mpi_executable symbol lookup error: remote_openmpi/lib/libmpi_cxx.so.0: undefined symbol: ompi_registered_datareps
<br>
<p>where both my_mpi_executable and remote_openmpi are installed on NSF mounted locations.
<br>
<p>Any clue?
<br>
<p>thanks
<br>
<p>JO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8372/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8373.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>Previous message:</strong> <a href="8371.php">Prasanna Ranganathan: "[OMPI users] OpenMPI program getting stuck at poll()"</a>
<li><strong>In reply to:</strong> <a href="8358.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Reply:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
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

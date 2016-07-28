<?
$subject_val = "Re: [OMPI users] Run-time problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 19:23:49 2009" -->
<!-- isoreceived="20090316232349" -->
<!-- sent="Mon, 16 Mar 2009 16:23:44 -0700 (PDT)" -->
<!-- isosent="20090316232344" -->
<!-- name="justin oppenheim" -->
<!-- email="jl09981_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run-time problem" -->
<!-- id="307267.45021.qm_at_web63005.mail.re1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BBF865AC-0A07-4A54-944B-C4494F9D8E50_at_cisco.com" -->
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
<strong>Date:</strong> 2009-03-16 19:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8475.php">Norio Tamura: "[OMPI users] Selective file driven decision functions for Open MPI coll tuned"</a>
<li><strong>Previous message:</strong> <a href="8473.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8483.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Reply:</strong> <a href="8483.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff:
<br>
<p>I managed to run it just recently... It turns out that some libraries libib* were missing, as well as some others. I learned this by trying to install an old version of openmpi that was in the repository of my Suse Linux. The &quot;software manager&quot; of Suse told me the missing libraries for the old openmpi. After installing these libraries, the already installed new openmpi (downloaded from open-mpi.org) works. Maybe it is a good idea to spell this out on open-mpi web site. People would just install the openmpi without knowing that there might be some missing libraries... 
<br>
<p>Thanks!
<br>
JO 
<br>
<p>--- On Sat, 3/14/09, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Run-time problem
<br>
To: jl09981_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Cc: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
<br>
Date: Saturday, March 14, 2009, 9:15 AM
<br>
<p>Sorry for the delay in replying; this week unexpectedly turned exceptionally
<br>
hectic for several us...
<br>
<p>On Mar 9, 2009, at 2:53 PM, justin oppenheim wrote:
<br>
<p><span class="quotelev1">&gt; Yes. As I indicated earlier, I did use these options to compile my program
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
<span class="quotelev1">&gt; MPI_LIBDIR=/programs/openmpi/lib/
</span><br>
MPI_LINKERFORPROGRAMS=/programs/openmpi/bin/mpicxx
<br>
<p>Ah; I think Ralph was asking because we don't know exactly how these
<br>
?environment variables? are being used to build your application.
<br>
<p><span class="quotelev1">&gt; where /programs/openmpi/ is the chosen location for installing the openmpi
</span><br>
package (specifically, openmpi-1.3.tar.gz)  that I downloaded from 
<br>
www.open-mpi.org.
<br>
<p>Can you ensure that you have exactly the same version of Open MPI installed on
<br>
all nodes in exactly the same location in the filesystem (it doesn't *have*
<br>
to be the same location on the filesystem on all the nodes, but it sure is
<br>
easier if it is).  Also be sure that when you mpirun across multiple nodes that
<br>
the same version of Open MPI (both executables and libraries) are being found on
<br>
all nodes.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any clue? Again, my system is Suse 10.3 64-bit, which should be pretty
</span><br>
standard. Would another package openmpi-1.3-1.src.rpm work better for my system?
<br>
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
<span class="quotelev1">&gt; Did you try compiling your program with the provided mpicc (or mpiCC,
</span><br>
mpif90, etc. - as appropriate) wrapper compiler? The wrapper compilers contain
<br>
all the required library definitions to make the application work.
<br>
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
<span class="quotelev2">&gt;&gt; Please let me go over it again, and maybe it helps clarifying things a
</span><br>
bit better. All the OS involved are Suse 10.3.
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a place for the the installed programs, say /programs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In /programs I have installed openmpi and my mpi program, say
</span><br>
my_mpi_program.  When I am in the working directory, my LD_LIBRARY_PATH does
<br>
include both
<br>
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
<span class="quotelev2">&gt;&gt; mpirun -machinefile machinefile  -np 20 my_mpi_program
</span><br>
&lt;arguments&gt;
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and I get
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /programs/my_mpi_program: symbol lookup error:
</span><br>
/programs/openmpi/lib/libmpi_cxx.so.0: undefined symbol:
<br>
ompi_registered_datareps
<br>
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
<span class="quotelev2">&gt;&gt; and then compiled it. Subsequently, I compiled my_mpi_program with the
</span><br>
options:
<br>
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
<span class="quotelev2">&gt;&gt; MPI_LIBDIR=/programs/openmpi/lib/
</span><br>
MPI_LINKERFORPROGRAMS=/programs/openmpi/bin/mpicxx
<br>
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
<span class="quotelev2">&gt;&gt; Sorry for my ignorance, but in you option 2: what command should I add
</span><br>
the option
<br>
<span class="quotelev2">&gt;&gt; --prefix=path-to-install? when I configure openmpi? I already did that
</span><br>
when I configured  and compiled openmpi.  Also, in response to your option 1, I
<br>
did add the paths to libraries of openmpi in the LD_LIBRARY_PATH  in the .cshrc
<br>
of the nodes.
<br>
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
<span class="quotelev2">&gt;&gt; Cc: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot;
</span><br>
&lt;users_at_[hidden]&gt;
<br>
<span class="quotelev2">&gt;&gt; Date: Thursday, March 5, 2009, 12:46 PM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First, you can add --launch-agent rsh to the command line and that
</span><br>
will have OMPI use rsh.
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like your remote nodes may not be seeing your OMPI install
</span><br>
directory. Several ways you can resolve that - here are a couple:
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. add the install directory to your LD_LIBRARY_PATH in your .cshrc
</span><br>
(or whatever shell rc you are using) - be sure this is being executed on the
<br>
remote nodes
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. add --prefix=path-to-install on your cmd line - this will direct
</span><br>
your remote procs to the proper libraries
<br>
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
directory as that under which  openmpi-1.3 is installed. This root directory is
<br>
NSF mounted on the working nodes.
<br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; JO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- On Thu, 3/5/09, justin oppenheim &lt;jl09981_at_[hidden]&gt;
</span><br>
wrote:
<br>
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
10.3. I installed openmpi-1.3 with the option
<br>
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
ssh-agent, in order not have to enter password one by one. How to change to rsh?
<br>
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
<span class="quotelev3">&gt;&gt;&gt; To: jl09981_at_[hidden], &quot;Open MPI Users&quot;
</span><br>
&lt;users_at_[hidden]&gt;
<br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thursday, March 5, 2009, 11:40 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you tell us what version of Open MPI you are using, a little
</span><br>
about your system (I would assume you are using ssh?), and how this was
<br>
configured?
<br>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; my_mpi_executable symbol lookup error:
</span><br>
remote_openmpi/lib/libmpi_cxx.so.0: undefined symbol: ompi_registered_datareps
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where both my_mpi_executable and remote_openmpi are installed
</span><br>
on NSF mounted locations.
<br>
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
<p><p>--Jeff Squyres
<br>
Cisco Systems
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8474/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8475.php">Norio Tamura: "[OMPI users] Selective file driven decision functions for Open MPI coll tuned"</a>
<li><strong>Previous message:</strong> <a href="8473.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8447.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8483.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Reply:</strong> <a href="8483.php">Jeff Squyres: "Re: [OMPI users] Run-time problem"</a>
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

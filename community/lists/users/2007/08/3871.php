<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 08:51:04 2007" -->
<!-- isoreceived="20070816125104" -->
<!-- sent="Thu, 16 Aug 2007 08:50:55 -0400" -->
<!-- isosent="20070816125055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs" -->
<!-- id="B30F8D03-4F10-41C6-9E21-1AC78385B60A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0708160234u4a707d46q5564c750abfec2a6_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 08:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3872.php">Allen Barnett: "[OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="3870.php">Jeff Squyres: "Re: [OMPI users] Unistall open-mpi"</a>
<li><strong>In reply to:</strong> <a href="3868.php">jody: "Re: [OMPI users] mpirun hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 16, 2007, at 5:34 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Just a quick update about my ssh/LD_LIBRARY_PATH problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apparently on my System the sshd was configured not to permit
</span><br>
<span class="quotelev1">&gt; user defined environment variables (security reasons?).
</span><br>
<span class="quotelev1">&gt; To fix that i had to change the file
</span><br>
<span class="quotelev1">&gt;   /etc/ssh/sshd_config
</span><br>
<span class="quotelev1">&gt; By changing the entry
</span><br>
<span class="quotelev1">&gt;   #PermitUserEnvironment no
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;   PermitUserEnvironment yes
</span><br>
<span class="quotelev1">&gt; and adding these lines to the file ~/.ssh/environment
</span><br>
<span class="quotelev1">&gt;   PATH=/opt/openmpi/bin:/usr/local/bin:/bin:/usr/bin
</span><br>
<span class="quotelev1">&gt;   LD_LIBRARY_PATH=/opt/openmpi/lib
</span><br>
<span class="quotelev1">&gt; Maybe it is an overkill, but at least ssh now makes the two  
</span><br>
<span class="quotelev1">&gt; variables available,
</span><br>
<span class="quotelev1">&gt; and simple openmpi test applications run.
</span><br>
<p>That is one option; another option which does not require root-level  
<br>
changes is simply to modify your shell startup files appropriately.   
<br>
The FAQ describes which files to modify for each shell.
<br>
<p><span class="quotelev1">&gt; I have done this fixes on all my 7 gentoo machines (nano_00 -  
</span><br>
<span class="quotelev1">&gt; nano_06),
</span><br>
<span class="quotelev1">&gt; and simple openmpi test applications run with any number of processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the fedora machine (plankton) still has problems in some cases.
</span><br>
<span class="quotelev1">&gt; In the test application i use, process #0 broadcasts a number to all
</span><br>
<span class="quotelev1">&gt; other processes.
</span><br>
<span class="quotelev1">&gt; This works in the following cases always calling from nano_02:
</span><br>
<span class="quotelev1">&gt;  mpirun  -np 3 --host nano_00 ./MPITest
</span><br>
<span class="quotelev1">&gt;  mpirun  -np 3 --host plankton ./MPITest
</span><br>
<span class="quotelev1">&gt;  mpirun  -np 3 --host plankton,nano_00 ./MPITest
</span><br>
<span class="quotelev1">&gt; But it doesn't work like this:
</span><br>
<span class="quotelev1">&gt;  mpirun -np 4 --host nano_00,plankton ./MPITest
</span><br>
<span class="quotelev1">&gt; as soon as the MPI_Broadcast statement is rached,
</span><br>
<span class="quotelev1">&gt; i get an errorr message:
</span><br>
<span class="quotelev1">&gt; [nano_00][0,1,0][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 572:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() failed with errno=113
</span><br>
<p>You are now technically running in a heterogeneous scenario.  You  
<br>
will likely need to have OMPI and your MPITest executable compiled  
<br>
separately for each OS (gentoo and fedora).  Differences in libc  
<br>
(etc.) can make a single executable not work properly across both,  
<br>
and sometimes the problems can be quite subtle / difficult to  
<br>
diagnose.  The easier solution is not to try having a single  
<br>
executable, but rather to have installations on for each OS.
<br>
<p>Once you have it setup, you can either rely on the PATH to find the  
<br>
MPITest that is appropriate for each OS (if you set that up  
<br>
properly), or you can be explicit with something like the following  
<br>
(assuming that you have previously created MPITest.gentoo for gentoo  
<br>
and MPITest.fedora for fedora):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 -host gentoo_host MPITest.gentoo : \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np 1 -host fedora_host MPITest.fedora
<br>
<p>Note that we do not actively test such heterogeneous scenarios, but  
<br>
it should/could/might work... (read: it worked at one time, but I'm  
<br>
not sure if any of us have tested it in a long time)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3872.php">Allen Barnett: "[OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="3870.php">Jeff Squyres: "Re: [OMPI users] Unistall open-mpi"</a>
<li><strong>In reply to:</strong> <a href="3868.php">jody: "Re: [OMPI users] mpirun hangs"</a>
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

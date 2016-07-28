<?
$subject_val = "Re: [OMPI users] Why do I only see 1 process running? Please help!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 13:24:28 2009" -->
<!-- isoreceived="20090421172428" -->
<!-- sent="Tue, 21 Apr 2009 13:24:22 -0400" -->
<!-- isosent="20090421172422" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why do I only see 1 process running? Please help!" -->
<!-- id="2EB59642-CF40-4CBD-AC31-A0E60789A3F9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a6cfb8020904210947o71c060ap2a92391588713b07_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why do I only see 1 process running? Please help!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 13:24:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9013.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9011.php">Grady Laksmono: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>In reply to:</strong> <a href="9011.php">Grady Laksmono: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It depends on how you configured Open MPI (i.e., ran the &quot;configure&quot;  
<br>
script).  If you don't specify, Open MPI will install itself into /usr/ 
<br>
local/bin.  Or you can specify where to install it via the --prefix  
<br>
parameter to configure.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=/opt/openmpi-1.3.1
<br>
<p>Will put the executables in /opt/openmpi-1.3.1/bin, for example.
<br>
<p>See the README file for a bunch of relevant information on building  
<br>
and installing Open MPI.
<br>
<p><p>On Apr 21, 2009, at 12:47 PM, Grady Laksmono wrote:
<br>
<p><span class="quotelev1">&gt; hey Thanks a lot,
</span><br>
<span class="quotelev1">&gt; well, I build the open-mpi package on the Desktop of RHEL 4.7 and  
</span><br>
<span class="quotelev1">&gt; then I followed the instruction to put the path, which I believed  
</span><br>
<span class="quotelev1">&gt; were written as /etc/openmpi/bin and /etc/openmpi/lib, which there's  
</span><br>
<span class="quotelev1">&gt; no such a path on my Linux installation.. I'm wondering if there's a  
</span><br>
<span class="quotelev1">&gt; tutorial that specify the specific step that I need to take for RHEL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 21, 2009 at 6:45 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; These kinds of messages are symptomatic that you compiled your  
</span><br>
<span class="quotelev1">&gt; applications with one version of Open MPI and ran with another.  You  
</span><br>
<span class="quotelev1">&gt; might want to ensure that your examples are compiled against the  
</span><br>
<span class="quotelev1">&gt; same version of Open MPI that you're running with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2009, at 5:38 PM, Grady Laksmono wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, here's what I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hello_cxx example
</span><br>
<span class="quotelev1">&gt; [hpc_at_localhost examples]$ mpirun -n 2 hello_cxx
</span><br>
<span class="quotelev1">&gt; hello_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, co nsider re-linking
</span><br>
<span class="quotelev1">&gt; hello_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in  
</span><br>
<span class="quotelev1">&gt; shared object, co nsider re-linking
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 0 of 1
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any  
</span><br>
<span class="quotelev1">&gt; HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any  
</span><br>
<span class="quotelev1">&gt; HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 0 of 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ring_cxx example
</span><br>
<span class="quotelev1">&gt; [hpc_at_localhost examples]$ mpirun -n 2 ring_cxx
</span><br>
<span class="quotelev1">&gt; ring_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; ring_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared  
</span><br>
<span class="quotelev1">&gt; object, consider re-linking
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any  
</span><br>
<span class="quotelev1">&gt; HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any  
</span><br>
<span class="quotelev1">&gt; HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 0, tag 201 (1 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 0, tag 201 (1 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 0
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 0
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev1">&gt; Process 0 exiting
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev1">&gt; Process 0 exiting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is weird, I'm not sure what's wrong, but one thing that I  
</span><br>
<span class="quotelev1">&gt; realized is that the documentation for running openmpi is outdated?  
</span><br>
<span class="quotelev1">&gt; here's my $PATH and $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hpc_at_localhost ~]$ cat .bash_profile
</span><br>
<span class="quotelev1">&gt; # .bash_profile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Get the aliases and functions
</span><br>
<span class="quotelev1">&gt; if [ -f ~/.bashrc ]; then
</span><br>
<span class="quotelev1">&gt;        . ~/.bashrc
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # User specific environment and startup programs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH=$PATH:$HOME/bin:/usr/lib/openmpi/1.2.5-gcc/bin
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/lib/openmpi/1.2.5-gcc/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; unset USERNAME
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's different that what the documentation had, because there's I  
</span><br>
<span class="quotelev1">&gt; couldn't find the files in the /opt/openmpi
</span><br>
<span class="quotelev1">&gt; I hope that anyone could help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Grady
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Grady Laksmono
</span><br>
<span class="quotelev1">&gt; gradyfausta_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.laksmono.com
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
<li><strong>Next message:</strong> <a href="9013.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9011.php">Grady Laksmono: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>In reply to:</strong> <a href="9011.php">Grady Laksmono: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
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

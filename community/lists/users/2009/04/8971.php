<?
$subject_val = "Re: [OMPI users] Why do I only see 1 process running? Please help!";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 18 05:37:10 2009" -->
<!-- isoreceived="20090418093710" -->
<!-- sent="Sat, 18 Apr 2009 11:37:05 +0200" -->
<!-- isosent="20090418093705" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why do I only see 1 process running? Please help!" -->
<!-- id="9b0da5ce0904180237o40247cbbodb973cc55e249cb1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a6cfb8020904171438t56c8e265ofb6083c8ce42fe81_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-18 05:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8972.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8970.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8967.php">Grady Laksmono: "[OMPI users] Why do I only see 1 process running? Please help!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8998.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I don't understand the error messages, but it seems to me that your
<br>
open-MPI version (1.2.5) is rather old.
<br>
This might also explain the discrepancies you found in the documentation.
<br>
If you can do so, i would suggest you update your Open-MPI.
<br>
<p>Jody
<br>
<p>On Fri, Apr 17, 2009 at 11:38 PM, Grady Laksmono
<br>
&lt;gradyfausta_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi, here's what I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hello_cxx example
</span><br>
<span class="quotelev1">&gt; [hpc_at_localhost examples]$ mpirun -n 2 hello_cxx
</span><br>
<span class="quotelev1">&gt; hello_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, co nsider re-linking
</span><br>
<span class="quotelev1">&gt; hello_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared
</span><br>
<span class="quotelev1">&gt; object, co nsider re-linking
</span><br>
<span class="quotelev1">&gt; Hello, world!&#160; I am 0 of 1
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
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
<span class="quotelev1">&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello, world!&#160; I am 0 of 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ring_cxx example
</span><br>
<span class="quotelev1">&gt; [hpc_at_localhost examples]$ mpirun -n 2 ring_cxx
</span><br>
<span class="quotelev1">&gt; ring_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; ring_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared object,
</span><br>
<span class="quotelev1">&gt; consider re-linking
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
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
<span class="quotelev1">&gt; which is weird, I'm not sure what's wrong, but one thing that I realized is
</span><br>
<span class="quotelev1">&gt; that the documentation for running openmpi is outdated? here's my $PATH and
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH
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
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160; . ~/.bashrc
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
<span class="quotelev1">&gt; It's different that what the documentation had, because there's I couldn't
</span><br>
<span class="quotelev1">&gt; find the files in the /opt/openmpi
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8972.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8970.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8967.php">Grady Laksmono: "[OMPI users] Why do I only see 1 process running? Please help!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8998.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
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

<?
$subject_val = "Re: [OMPI users] Why do I only see 1 process running? Please help!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 12:47:52 2009" -->
<!-- isoreceived="20090421164752" -->
<!-- sent="Tue, 21 Apr 2009 09:47:33 -0700" -->
<!-- isosent="20090421164733" -->
<!-- name="Grady Laksmono" -->
<!-- email="gradyfausta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why do I only see 1 process running? Please help!" -->
<!-- id="a6cfb8020904210947o71c060ap2a92391588713b07_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FC78AD8-8EAA-4DFB-9C50-DBB4DAD18A45_at_cisco.com" -->
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
<strong>From:</strong> Grady Laksmono (<em>gradyfausta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 12:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9012.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Previous message:</strong> <a href="9010.php">Katz, Jacob: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the	connected processes use?"</a>
<li><strong>In reply to:</strong> <a href="8998.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9012.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Reply:</strong> <a href="9012.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hey Thanks a lot,
<br>
well, I build the open-mpi package on the Desktop of RHEL 4.7 and then I
<br>
followed the instruction to put the path, which I believed were written as
<br>
/etc/openmpi/bin and /etc/openmpi/lib, which there's no such a path on my
<br>
Linux installation.. I'm wondering if there's a tutorial that specify the
<br>
specific step that I need to take for RHEL?
<br>
<p>On Tue, Apr 21, 2009 at 6:45 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; These kinds of messages are symptomatic that you compiled your applications
</span><br>
<span class="quotelev1">&gt; with one version of Open MPI and ran with another.  You might want to ensure
</span><br>
<span class="quotelev1">&gt; that your examples are compiled against the same version of Open MPI that
</span><br>
<span class="quotelev1">&gt; you're running with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2009, at 5:38 PM, Grady Laksmono wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi, here's what I have:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hello_cxx example
</span><br>
<span class="quotelev2">&gt;&gt; [hpc_at_localhost examples]$ mpirun -n 2 hello_cxx
</span><br>
<span class="quotelev2">&gt;&gt; hello_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared
</span><br>
<span class="quotelev2">&gt;&gt; object, co nsider re-linking
</span><br>
<span class="quotelev2">&gt;&gt; hello_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared
</span><br>
<span class="quotelev2">&gt;&gt; object, co nsider re-linking
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world!  I am 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world!  I am 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ring_cxx example
</span><br>
<span class="quotelev2">&gt;&gt; [hpc_at_localhost examples]$ mpirun -n 2 ring_cxx
</span><br>
<span class="quotelev2">&gt;&gt; ring_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared
</span><br>
<span class="quotelev2">&gt;&gt; object, consider re-linking
</span><br>
<span class="quotelev2">&gt;&gt; ring_cxx: Symbol `_ZN3MPI10COMM_WORLDE' has different size in shared
</span><br>
<span class="quotelev2">&gt;&gt; object, consider re-linking
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Fatal: couldn't read uverbs ABI version.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [0,0,0]: OpenIB on host localhost.localdomain was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 0, tag 201 (1 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 0, tag 201 (1 processes in ring)
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sent to 0
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sent to 0
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 exiting
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 exiting
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which is weird, I'm not sure what's wrong, but one thing that I realized
</span><br>
<span class="quotelev2">&gt;&gt; is that the documentation for running openmpi is outdated? here's my $PATH
</span><br>
<span class="quotelev2">&gt;&gt; and $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hpc_at_localhost ~]$ cat .bash_profile
</span><br>
<span class="quotelev2">&gt;&gt; # .bash_profile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Get the aliases and functions
</span><br>
<span class="quotelev2">&gt;&gt; if [ -f ~/.bashrc ]; then
</span><br>
<span class="quotelev2">&gt;&gt;        . ~/.bashrc
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # User specific environment and startup programs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH=$PATH:$HOME/bin:/usr/lib/openmpi/1.2.5-gcc/bin
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/lib/openmpi/1.2.5-gcc/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export PATH
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; unset USERNAME
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's different that what the documentation had, because there's I couldn't
</span><br>
<span class="quotelev2">&gt;&gt; find the files in the /opt/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; I hope that anyone could help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Grady
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Grady Laksmono
gradyfausta_at_[hidden]
www.laksmono.com
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9012.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Previous message:</strong> <a href="9010.php">Katz, Jacob: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the	connected processes use?"</a>
<li><strong>In reply to:</strong> <a href="8998.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9012.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>Reply:</strong> <a href="9012.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
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

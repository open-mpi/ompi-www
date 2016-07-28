<?
$subject_val = "Re: [OMPI users] Program hangs when run in the remote host ...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 14:11:35 2009" -->
<!-- isoreceived="20090918181135" -->
<!-- sent="Fri, 18 Sep 2009 14:11:25 -0400" -->
<!-- isosent="20090918181125" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs when run in the remote host ..." -->
<!-- id="4AB3CD4D.3090405_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b568ee700909181017o679b7a68x869807ded8a6f946_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program hangs when run in the remote host ...<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-18 14:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10689.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Previous message:</strong> <a href="10687.php">souvik bhattacherjee: "[OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>In reply to:</strong> <a href="10687.php">souvik bhattacherjee: "[OMPI users] Program hangs when run in the remote host ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10689.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="10689.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Souvik
<br>
<p>I would guess you only installed OpenMPI only on ict1, not on ict2.
<br>
If that is the case you won't have the required  OpenMPI libraries
<br>
on ict:/usr/local, and the job won't run on ict2.
<br>
<p>I am guessing this, because you used a prefix under /usr/local,
<br>
which tends to be a &quot;per machine&quot; directory,
<br>
not a typical name of an NFS
<br>
mounted directory.
<br>
Using an NFS mounted directory is another way to make
<br>
OpenMPI visible to all nodes.
<br>
See this FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>souvik bhattacherjee wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Myself quite new to Open MPI. Recently, I had installed openmpi-1.3.3 
</span><br>
<span class="quotelev1">&gt; separately on two of my machines ict1 and ict2. These machines are 
</span><br>
<span class="quotelev1">&gt; dual-socket quad-core (Intel Xeon E5410) i.e. each having 8 processors 
</span><br>
<span class="quotelev1">&gt; and are connected by Gigabit ethernet switch. As a prerequisite, I can 
</span><br>
<span class="quotelev1">&gt; ssh between them without a password or passphrase ( I did not supply the 
</span><br>
<span class="quotelev1">&gt; passphrase at all ). Thereafter,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cd openmpi-1.3.3
</span><br>
<span class="quotelev1">&gt; $ mkdir build
</span><br>
<span class="quotelev1">&gt; $ cd build
</span><br>
<span class="quotelev1">&gt; $ ../configure --prefix=/usr/local/openmpi-1.3.3/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then as a root user,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # make all install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also .bash_profile and .bashrc had the following lines written into them:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH=$PATH:/usr/local/openmpi-1.3.3/bin/
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.3.3/lib/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cd ../examples/
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --host ict1 hello_c
</span><br>
<span class="quotelev1">&gt;    hello_c: error while loading shared libraries: libmpi.so.0: cannot 
</span><br>
<span class="quotelev1">&gt; open shared object file: No suchfile or directory
</span><br>
<span class="quotelev1">&gt;    hello_c: error while loading shared libraries: libmpi.so.0: cannot 
</span><br>
<span class="quotelev1">&gt; open shared object file: No suchfile or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1 hello_c
</span><br>
<span class="quotelev1">&gt;    Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt;    Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the program hangs when ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1,ict2 hello_c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This statement does not produce any output. Doing top on either machines 
</span><br>
<span class="quotelev1">&gt; does not show any hello_c running. However, when I press Ctrl+C the 
</span><br>
<span class="quotelev1">&gt; following output appears
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         ict2 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same thing repeats itself when hello_c is run from ict2. Since, the 
</span><br>
<span class="quotelev1">&gt; program does not produce any error, it becomes difficult to locate where 
</span><br>
<span class="quotelev1">&gt; I might have gone wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did anyone of you encounter this problem or anything similar ? Any help 
</span><br>
<span class="quotelev1">&gt; would be much appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Souvik
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="10689.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Previous message:</strong> <a href="10687.php">souvik bhattacherjee: "[OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>In reply to:</strong> <a href="10687.php">souvik bhattacherjee: "[OMPI users] Program hangs when run in the remote host ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10689.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="10689.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
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

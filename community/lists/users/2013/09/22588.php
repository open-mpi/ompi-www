<?
$subject_val = "[OMPI users] Able to run mpirun as root, but not as a user.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 00:49:02 2013" -->
<!-- isoreceived="20130903044902" -->
<!-- sent="Tue, 3 Sep 2013 00:48:41 -0400" -->
<!-- isosent="20130903044841" -->
<!-- name="Ian Czekala" -->
<!-- email="iancze_at_[hidden]" -->
<!-- subject="[OMPI users] Able to run mpirun as root, but not as a user." -->
<!-- id="CA+cQX8YUmNoatvARs5-sAxKC5Hi3tc51P_Y+uw=wdUDFwNxg_w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Able to run mpirun as root, but not as a user.<br>
<strong>From:</strong> Ian Czekala (<em>iancze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 00:48:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22589.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22587.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22592.php">Reuti: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>Reply:</strong> <a href="22592.php">Reuti: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openmpi users,
<br>
<p>My basic problem is that I am able to run mpirun as root, but not at a user
<br>
level. I have tried installing openmpi via several methods, but all seem to
<br>
yield the same problem. I fear that I am missing something very basic and
<br>
zero-order, but I can't seem to resolve my problem with the information in
<br>
the FAQ.
<br>
<p>Originally, I installed the openmpi through arch linux's package manager,
<br>
pacman. After a successful install, I tried (on my laptop)
<br>
<p>$mpirun -np 2 /bin/pwd
<br>
and I get the following output:
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it encountered an
<br>
error:
<br>
<p>Error: pipe function call failed when setting up I/O forwarding subsystem
<br>
Node: leo
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
2 total processes failed to start
<br>
<p>however when I run as root, I am sucessful
<br>
$ sudo mpirun -np 2 /bin/pwd
<br>
/home/ian
<br>
/home/ian
<br>
<p>After doing some searching on the web (and coming across
<br>
this&lt;<a href="http://www.open-mpi.org/community/lists/users/2011/02/15585.php">http://www.open-mpi.org/community/lists/users/2011/02/15585.php</a>&gt;thread),
<br>
I suspected that the issue might be with some PATH setup or user
<br>
permissions that weren't being set correctly by the arch linux package
<br>
manager, and so I uninstalled and resorted to installing by source.
<br>
<p>When trying the normal install method
<br>
$ ./configure --prefix=/usr/local/openmpi
<br>
$ make all
<br>
$ sudo make install
<br>
and then changed my .zshrc to include the correct PATH and LD_LIBRARY_PATH,
<br>
I get the same behavior as before.
<br>
<p>To investigate further the possibility of a permissions issue, I
<br>
uninstalled and reinstalled into my own home directory
<br>
$ ./configure --prefix=/home/ian/.builds/openmpi
<br>
$ make all
<br>
$ make install
<br>
and updated PATH and LD_LIBRARY_PATH correspondingly.
<br>
<p>However, the behavior is *exactly* as before: mpirun will run as root, but
<br>
not at a user level. Am I missing something extremely basic here? Online
<br>
examples to me imply that I should be able to run as a user without any
<br>
additional configuration.
<br>
<p>Here is some of the info asked for by the &quot;Getting Help&quot; section (all from
<br>
the local home directory install):
<br>
<p>[ian_at_leo:~]$ sudo mpirun --bynode --tag-output ompi_info -v ompi full
<br>
--parsable
<br>
[1,0]&lt;stdout&gt;:package:Open MPI ian_at_leo Distribution
<br>
[1,0]&lt;stdout&gt;:ompi:version:full:1.6.5
<br>
[1,0]&lt;stdout&gt;:ompi:version:svn:r28673
<br>
[1,0]&lt;stdout&gt;:ompi:version:release_date:Jun 26, 2013
<br>
[1,0]&lt;stdout&gt;:orte:version:full:1.6.5
<br>
[1,0]&lt;stdout&gt;:orte:version:svn:r28673
<br>
[1,0]&lt;stdout&gt;:orte:version:release_date:Jun 26, 2013
<br>
[1,0]&lt;stdout&gt;:opal:version:full:1.6.5
<br>
[1,0]&lt;stdout&gt;:opal:version:svn:r28673
<br>
[1,0]&lt;stdout&gt;:opal:version:release_date:Jun 26, 2013
<br>
[1,0]&lt;stdout&gt;:mpi-api:version:full:2.1
<br>
[1,0]&lt;stdout&gt;:ident:1.6.5
<br>
<p>Thank you for any help or guidance you may be able to offer! Sincerely,
<br>
<p>Ian Czekala
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22588/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22589.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Previous message:</strong> <a href="22587.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22592.php">Reuti: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>Reply:</strong> <a href="22592.php">Reuti: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
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

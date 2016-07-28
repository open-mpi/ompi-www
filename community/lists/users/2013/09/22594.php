<?
$subject_val = "Re: [OMPI users] Able to run mpirun as root, but not as a user.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 10:30:34 2013" -->
<!-- isoreceived="20130903143034" -->
<!-- sent="Tue, 3 Sep 2013 10:30:08 -0400" -->
<!-- isosent="20130903143008" -->
<!-- name="Ian Czekala" -->
<!-- email="iancze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Able to run mpirun as root, but not as a user." -->
<!-- id="CA+cQX8berUvZvhZS30npAa6x4MLJ=qdndcb9c+SOXrKRNnWdSQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CDB83B2F-4CB6-45A7-B237-84BC6DA914C6_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Able to run mpirun as root, but not as a user.<br>
<strong>From:</strong> Ian Czekala (<em>iancze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 10:30:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22595.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Previous message:</strong> <a href="22593.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>In reply to:</strong> <a href="22592.php">Reuti: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes! Thank you for your help. Doing
<br>
<p>$./configure --disable-pty-support --prefix=/usr/local/openmpi
<br>
$make all
<br>
$sudo make install
<br>
<p>fixed the issue
<br>
<p>$ mpirun -np 2 /bin/pwd
<br>
/home/ian
<br>
/home/ian
<br>
<p>Thanks a bunch,
<br>
<p>Ian
<br>
<p><p>On Tue, Sep 3, 2013 at 6:26 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 03.09.2013 um 06:48 schrieb Ian Czekala:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear openmpi users,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My basic problem is that I am able to run mpirun as root, but not at a
</span><br>
<span class="quotelev1">&gt; user level. I have tried installing openmpi via several methods, but all
</span><br>
<span class="quotelev1">&gt; seem to yield the same problem. I fear that I am missing something very
</span><br>
<span class="quotelev1">&gt; basic and zero-order, but I can't seem to resolve my problem with the
</span><br>
<span class="quotelev1">&gt; information in the FAQ.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Originally, I installed the openmpi through arch linux's package
</span><br>
<span class="quotelev1">&gt; manager, pacman. After a successful install, I tried (on my laptop)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $mpirun -np 2 /bin/pwd
</span><br>
<span class="quotelev2">&gt; &gt; and I get the following output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun was unable to launch the specified application as it encountered
</span><br>
<span class="quotelev1">&gt; an error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Error: pipe function call failed when setting up I/O forwarding subsystem
</span><br>
<span class="quotelev2">&gt; &gt; Node: leo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 2 total processes failed to start
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; however when I run as root, I am sucessful
</span><br>
<span class="quotelev2">&gt; &gt; $ sudo mpirun -np 2 /bin/pwd
</span><br>
<span class="quotelev2">&gt; &gt; /home/ian
</span><br>
<span class="quotelev2">&gt; &gt; /home/ian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; After doing some searching on the web (and coming across this thread),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is another one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12291.php">http://www.open-mpi.org/community/lists/users/2010/03/12291.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suspected that the issue might be with some PATH setup or user
</span><br>
<span class="quotelev1">&gt; permissions that weren't being set correctly by the arch linux package
</span><br>
<span class="quotelev1">&gt; manager, and so I uninstalled and resorted to installing by source.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When trying the normal install method
</span><br>
<span class="quotelev2">&gt; &gt; $ ./configure --prefix=/usr/local/openmpi
</span><br>
<span class="quotelev2">&gt; &gt; $ make all
</span><br>
<span class="quotelev2">&gt; &gt; $ sudo make install
</span><br>
<span class="quotelev2">&gt; &gt; and then changed my .zshrc to include the correct PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH, I get the same behavior as before.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To investigate further the possibility of a permissions issue, I
</span><br>
<span class="quotelev1">&gt; uninstalled and reinstalled into my own home directory
</span><br>
<span class="quotelev2">&gt; &gt; $ ./configure --prefix=/home/ian/.builds/openmpi
</span><br>
<span class="quotelev2">&gt; &gt; $ make all
</span><br>
<span class="quotelev2">&gt; &gt; $ make install
</span><br>
<span class="quotelev2">&gt; &gt; and updated PATH and LD_LIBRARY_PATH correspondingly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, the behavior is *exactly* as before: mpirun will run as root,
</span><br>
<span class="quotelev1">&gt; but not at a user level. Am I missing something extremely basic here?
</span><br>
<span class="quotelev1">&gt; Online examples to me imply that I should be able to run as a user without
</span><br>
<span class="quotelev1">&gt; any additional configuration.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is some of the info asked for by the &quot;Getting Help&quot; section (all
</span><br>
<span class="quotelev1">&gt; from the local home directory install):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [ian_at_leo:~]$ sudo mpirun --bynode --tag-output ompi_info -v ompi full
</span><br>
<span class="quotelev1">&gt; --parsable
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:package:Open MPI ian_at_leo Distribution
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:ompi:version:full:1.6.5
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:ompi:version:svn:r28673
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:ompi:version:release_date:Jun 26, 2013
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:orte:version:full:1.6.5
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:orte:version:svn:r28673
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:orte:version:release_date:Jun 26, 2013
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:opal:version:full:1.6.5
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:opal:version:svn:r28673
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:opal:version:release_date:Jun 26, 2013
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:mpi-api:version:full:2.1
</span><br>
<span class="quotelev2">&gt; &gt; [1,0]&lt;stdout&gt;:ident:1.6.5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for any help or guidance you may be able to offer! Sincerely,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ian Czekala
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22595.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>Previous message:</strong> <a href="22593.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>In reply to:</strong> <a href="22592.php">Reuti: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
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

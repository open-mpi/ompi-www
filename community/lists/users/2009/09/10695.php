<?
$subject_val = "Re: [OMPI users] Program hangs when run in the remote host ...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 19 09:33:49 2009" -->
<!-- isoreceived="20090919133349" -->
<!-- sent="Sat, 19 Sep 2009 19:03:40 +0530" -->
<!-- isosent="20090919133340" -->
<!-- name="souvik bhattacherjee" -->
<!-- email="souvik99_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs when run in the remote host ..." -->
<!-- id="b568ee700909190633g35b6c766lf302cfb629e578cd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AB3CFE1.9080107_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> souvik bhattacherjee (<em>souvik99_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-19 09:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10696.php">Ralph Castain: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Previous message:</strong> <a href="10694.php">Pallab Datta: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>In reply to:</strong> <a href="10689.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10696.php">Ralph Castain: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="10696.php">Ralph Castain: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus (and all OpenMPI users),
<br>
<p>Thanks for your interest in my problem. However, the points you had raised
<br>
earlier in your mails, seems to me that, I had already taken care of them. I
<br>
had enlisted them below pointwise. Your comments are rewritten in *RED *and
<br>
my replies in *BLACK.*
<br>
<p>1) As you have mentioned: &quot;*I would guess you only installed OpenMPI only on
<br>
ict1, not on ict2*&quot;. However, I had mentioned initially: &quot;*I had installed
<br>
openmpi-1.3.3 separately on two of my machines ict1 and ict2*&quot;.
<br>
<p>2) Next you said: &quot;*I am guessing this, because you used a prefix under
<br>
/usr/local*&quot;. However, I had installed them under:
<br>
*$ mkdir build
<br>
$ cd build
<br>
$ ../configure --prefix=/usr/local/openmpi-1.3.3/
<br>
# make all install*
<br>
<p>3) Next as you pointed out: &quot;* ...not a typical name of an NFS mounted
<br>
directory. Using an NFS mounted directory is another way to make OpenMPI
<br>
visible to all nodes *&quot;.
<br>
Let me tell you once again, that I am not going for an NFS installation as
<br>
the first point in this list makes it clear.
<br>
<p>4) In your next mail: &quot; *If you can ssh passwordless from ict1 to ict2 *and*
<br>
vice versa *&quot;. Again as I had mentioned earlier &quot; *As a prerequisite, I can
<br>
ssh between them without a password or passphrase ( I did not supply the
<br>
passphrase at all ).* &quot;
<br>
<p>5) Further as you said: &quot; *If your /etc/hosts file on *both* machines list
<br>
ict1 and ict2
<br>
and their IP addresses *&quot;. Let me mention here that, these things are
<br>
already very well taken care of.
<br>
<p>6) Finally as you said: &quot; *In case you have a /home directory on each
<br>
machine (i.e. /home is not NFS mounted) if your .bashrc files on *both*
<br>
machines set the PATH
<br>
and LD_LIBRARY_PATH to point to the OpenMPI directory. *&quot;
<br>
<p>Again as I had mentioned previously,  *Also .bash_profile and .bashrc had
<br>
the following lines written into them:
<br>
<p>PATH=$PATH:/usr/local/openmpi-1.3.3/bin/
<br>
LD_LIBRARY_PATH=/usr/local/openmpi-1.3.3/lib/*
<br>
*
<br>
***************************************************************************************************************
<br>
*
<br>
**
<br>
As an additional bit of information, (which might assist you in the
<br>
investigation) I had used *Mandriva 2009.1* on all of my systems.
<br>
<p>Hope, this will help you. Eagerly awaiting a response.
<br>
<p>Thanks,
<br>
<p>On 9/18/09, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Souvik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also worth checking:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) If you can ssh passwordless from ict1 to ict2 *and* vice versa.
</span><br>
<span class="quotelev1">&gt; 2) If your /etc/hosts file on *both* machines list ict1 and ict2
</span><br>
<span class="quotelev1">&gt; and their IP addresses.
</span><br>
<span class="quotelev1">&gt; 3) In case you have a /home directory on each machine (i.e. /home is
</span><br>
<span class="quotelev1">&gt; not NFS mounted) if your .bashrc files on *both* machines set the PATH
</span><br>
<span class="quotelev1">&gt; and LD_LIBRARY_PATH to point to the OpenMPI directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Souvik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would guess you only installed OpenMPI only on ict1, not on ict2.
</span><br>
<span class="quotelev2">&gt;&gt; If that is the case you won't have the required  OpenMPI libraries
</span><br>
<span class="quotelev2">&gt;&gt; on ict:/usr/local, and the job won't run on ict2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am guessing this, because you used a prefix under /usr/local,
</span><br>
<span class="quotelev2">&gt;&gt; which tends to be a &quot;per machine&quot; directory,
</span><br>
<span class="quotelev2">&gt;&gt; not a typical name of an NFS
</span><br>
<span class="quotelev2">&gt;&gt; mounted directory.
</span><br>
<span class="quotelev2">&gt;&gt; Using an NFS mounted directory is another way to make
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI visible to all nodes.
</span><br>
<span class="quotelev2">&gt;&gt; See this FAQ:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; souvik bhattacherjee wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Myself quite new to Open MPI. Recently, I had installed openmpi-1.3.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separately on two of my machines ict1 and ict2. These machines are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dual-socket quad-core (Intel Xeon E5410) i.e. each having 8 processors and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are connected by Gigabit ethernet switch. As a prerequisite, I can ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between them without a password or passphrase ( I did not supply the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passphrase at all ). Thereafter,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cd openmpi-1.3.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mkdir build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cd build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ../configure --prefix=/usr/local/openmpi-1.3.3/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then as a root user,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also .bash_profile and .bashrc had the following lines written into them:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=$PATH:/usr/local/openmpi-1.3.3/bin/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.3.3/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cd ../examples/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 2 --host ict1 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   hello_c: error while loading shared libraries: libmpi.so.0: cannot open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared object file: No suchfile or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   hello_c: error while loading shared libraries: libmpi.so.0: cannot open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared object file: No suchfile or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Hello, world, I am 1 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Hello, world, I am 0 of 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But the program hangs when ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1,ict2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  This statement does not produce any output. Doing top on either machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not show any hello_c running. However, when I press Ctrl+C the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following output appears
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ict2 - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same thing repeats itself when hello_c is run from ict2. Since, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program does not produce any error, it becomes difficult to locate where I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might have gone wrong.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did anyone of you encounter this problem or anything similar ? Any help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be much appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Souvik
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
Souvik
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10695/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10696.php">Ralph Castain: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Previous message:</strong> <a href="10694.php">Pallab Datta: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>In reply to:</strong> <a href="10689.php">Gus Correa: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10696.php">Ralph Castain: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="10696.php">Ralph Castain: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
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

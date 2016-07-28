<?
$subject_val = "Re: [OMPI users] Program hangs when run in the remote host ...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 19 10:43:20 2009" -->
<!-- isoreceived="20090919144320" -->
<!-- sent="Sat, 19 Sep 2009 08:43:09 -0600" -->
<!-- isosent="20090919144309" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs when run in the remote host ..." -->
<!-- id="0D7A5383-F8F4-46FD-99AC-74856EF17784_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b568ee700909190633g35b6c766lf302cfb629e578cd_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-19 10:43:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10697.php">Marce: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10695.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>In reply to:</strong> <a href="10695.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10707.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="10707.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing that flags my attention. In your PATH definition, you put  
<br>
$PATH ahead of your OMPI 1.3.3 installation. Thus, if there are any  
<br>
system supplied versions of OMPI hanging around (and there often are),  
<br>
they will be executed instead of your new installation.
<br>
<p>You might try reversing that order.
<br>
<p>On Sep 19, 2009, at 7:33 AM, souvik bhattacherjee wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gus (and all OpenMPI users),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your interest in my problem. However, the points you had  
</span><br>
<span class="quotelev1">&gt; raised earlier in your mails, seems to me that, I had already taken  
</span><br>
<span class="quotelev1">&gt; care of them. I had enlisted them below pointwise. Your comments are  
</span><br>
<span class="quotelev1">&gt; rewritten in RED and my replies in BLACK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) As you have mentioned: &quot;I would guess you only installed OpenMPI  
</span><br>
<span class="quotelev1">&gt; only on ict1, not on ict2&quot;. However, I had mentioned initially: &quot;I  
</span><br>
<span class="quotelev1">&gt; had installed openmpi-1.3.3 separately on two of my machines ict1  
</span><br>
<span class="quotelev1">&gt; and ict2&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Next you said: &quot;I am guessing this, because you used a prefix  
</span><br>
<span class="quotelev1">&gt; under /usr/local&quot;. However, I had installed them under:
</span><br>
<span class="quotelev1">&gt; $ mkdir build
</span><br>
<span class="quotelev1">&gt; $ cd build
</span><br>
<span class="quotelev1">&gt; $ ../configure --prefix=/usr/local/openmpi-1.3.3/
</span><br>
<span class="quotelev1">&gt; # make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Next as you pointed out: &quot; ...not a typical name of an NFS  
</span><br>
<span class="quotelev1">&gt; mounted directory. Using an NFS mounted directory is another way to  
</span><br>
<span class="quotelev1">&gt; make OpenMPI visible to all nodes &quot;.
</span><br>
<span class="quotelev1">&gt; Let me tell you once again, that I am not going for an NFS  
</span><br>
<span class="quotelev1">&gt; installation as the first point in this list makes it clear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) In your next mail: &quot; If you can ssh passwordless from ict1 to  
</span><br>
<span class="quotelev1">&gt; ict2 *and* vice versa &quot;. Again as I had mentioned earlier &quot; As a  
</span><br>
<span class="quotelev1">&gt; prerequisite, I can ssh between them without a password or  
</span><br>
<span class="quotelev1">&gt; passphrase ( I did not supply the passphrase at all ). &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5) Further as you said: &quot; If your /etc/hosts file on *both* machines  
</span><br>
<span class="quotelev1">&gt; list ict1 and ict2
</span><br>
<span class="quotelev1">&gt; and their IP addresses &quot;. Let me mention here that, these things are  
</span><br>
<span class="quotelev1">&gt; already very well taken care of.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6) Finally as you said: &quot; In case you have a /home directory on each  
</span><br>
<span class="quotelev1">&gt; machine (i.e. /home is not NFS mounted) if your .bashrc files on  
</span><br>
<span class="quotelev1">&gt; *both* machines set the PATH
</span><br>
<span class="quotelev1">&gt; and LD_LIBRARY_PATH to point to the OpenMPI directory. &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again as I had mentioned previously,  Also .bash_profile and .bashrc  
</span><br>
<span class="quotelev1">&gt; had the following lines written into them:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH=$PATH:/usr/local/openmpi-1.3.3/bin/
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.3.3/lib/
</span><br>
<span class="quotelev1">&gt; ***************************************************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an additional bit of information, (which might assist you in the  
</span><br>
<span class="quotelev1">&gt; investigation) I had used Mandriva 2009.1 on all of my systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope, this will help you. Eagerly awaiting a response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/18/09, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; Hi Souvik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would guess you only installed OpenMPI only on ict1, not on ict2.
</span><br>
<span class="quotelev1">&gt; If that is the case you won't have the required  OpenMPI libraries
</span><br>
<span class="quotelev1">&gt; on ict:/usr/local, and the job won't run on ict2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am guessing this, because you used a prefix under /usr/local,
</span><br>
<span class="quotelev1">&gt; which tends to be a &quot;per machine&quot; directory,
</span><br>
<span class="quotelev1">&gt; not a typical name of an NFS
</span><br>
<span class="quotelev1">&gt; mounted directory.
</span><br>
<span class="quotelev1">&gt; Using an NFS mounted directory is another way to make
</span><br>
<span class="quotelev1">&gt; OpenMPI visible to all nodes.
</span><br>
<span class="quotelev1">&gt; See this FAQ:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; souvik bhattacherjee wrote:
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Myself quite new to Open MPI. Recently, I had installed  
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.3 separately on two of my machines ict1 and ict2. These  
</span><br>
<span class="quotelev1">&gt; machines are dual-socket quad-core (Intel Xeon E5410) i.e. each  
</span><br>
<span class="quotelev1">&gt; having 8 processors and are connected by Gigabit ethernet switch. As  
</span><br>
<span class="quotelev1">&gt; a prerequisite, I can ssh between them without a password or  
</span><br>
<span class="quotelev1">&gt; passphrase ( I did not supply the passphrase at all ). Thereafter,
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
<span class="quotelev1">&gt; Also .bash_profile and .bashrc had the following lines written into  
</span><br>
<span class="quotelev1">&gt; them:
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
<span class="quotelev1">&gt;   hello_c: error while loading shared libraries: libmpi.so.0: cannot  
</span><br>
<span class="quotelev1">&gt; open shared object file: No suchfile or directory
</span><br>
<span class="quotelev1">&gt;   hello_c: error while loading shared libraries: libmpi.so.0: cannot  
</span><br>
<span class="quotelev1">&gt; open shared object file: No suchfile or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1 hello_c
</span><br>
<span class="quotelev1">&gt;   Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt;   Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the program hangs when ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict1,ict2  
</span><br>
<span class="quotelev1">&gt; hello_c
</span><br>
<span class="quotelev1">&gt;  This statement does not produce any output. Doing top on either  
</span><br>
<span class="quotelev1">&gt; machines does not show any hello_c running. However, when I press  
</span><br>
<span class="quotelev1">&gt; Ctrl+C the following output appears
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
<span class="quotelev1">&gt;        ict2 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same thing repeats itself when hello_c is run from ict2. Since,  
</span><br>
<span class="quotelev1">&gt; the program does not produce any error, it becomes difficult to  
</span><br>
<span class="quotelev1">&gt; locate where I might have gone wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did anyone of you encounter this problem or anything similar ? Any  
</span><br>
<span class="quotelev1">&gt; help would be much appreciated.
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
<span class="quotelev1">&gt; Souvik
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10696/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10697.php">Marce: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10695.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>In reply to:</strong> <a href="10695.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10707.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Reply:</strong> <a href="10707.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
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

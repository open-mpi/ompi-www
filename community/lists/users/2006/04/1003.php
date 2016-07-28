<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 14:02:50 2006" -->
<!-- isoreceived="20060410180250" -->
<!-- sent="Mon, 10 Apr 2006 14:02:36 -0400" -->
<!-- isosent="20060410180236" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job running question" -->
<!-- id="F0727A07-A203-4725-A699-F849F1C32140_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4F5BE74AB02653448520E9692496874101E57D_at_fscnbc18.brooks.af.mil" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 14:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1004.php">Warner Yuen: "[OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<li><strong>Previous message:</strong> <a href="1002.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>In reply to:</strong> <a href="1001.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1002.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to confirm that /etc/bashrc is actually being read in that  
<br>
environment, bash is a little different on which files get read  
<br>
depending on whether you login interactively or not.
<br>
<p>Also, I don't think ~/.bashrc is read on a noninteractive login.
<br>
<p>Michael
<br>
<p>On Apr 10, 2006, at 1:06 PM, Adams Samuel D Contr AFRL/HEDR wrote:
<br>
<p><span class="quotelev1">&gt; I put in /etc/bashrc and opened a new shell, but I still am not  
</span><br>
<span class="quotelev1">&gt; seeing any
</span><br>
<span class="quotelev1">&gt; core files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sam Adams
</span><br>
<span class="quotelev1">&gt; General Dynamics - Network Systems
</span><br>
<span class="quotelev1">&gt; Phone: 210.536.5945
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 10, 2006 8:56 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] job running question
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mpirun opens separate shell on each machine/node, so the &quot;ulimit&quot; will
</span><br>
<span class="quotelev1">&gt; not be available in new sheel.  I think if you will add &quot;ulimit -c
</span><br>
<span class="quotelev1">&gt; unlimited&quot; to you default shell configuration file (~/.bashrc in BASH
</span><br>
<span class="quotelev1">&gt; case ant ~/.tcshrc in TCSH/CSH case) you will find your core files :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adams Samuel D Contr AFRL/HEDR wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I set bash to have unlimited size core files like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ulimit -c unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But, it was not dropping core files for some reason when I was  
</span><br>
<span class="quotelev2">&gt;&gt; running
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.  Just to make sure it would do what I expected, I wrote a  
</span><br>
<span class="quotelev2">&gt;&gt; little C
</span><br>
<span class="quotelev2">&gt;&gt; program that was kind of like this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int ptr = 4;
</span><br>
<span class="quotelev2">&gt;&gt; fprintf(stderr,&quot;bad! %s\n&quot;, (char*)ptr);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That would give a segmentation fault.  It dropped a core file like  
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev2">&gt;&gt; expect.  Am I missing something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sam Adams
</span><br>
<span class="quotelev2">&gt;&gt; General Dynamics - Network Systems
</span><br>
<span class="quotelev2">&gt;&gt; Phone: 210.536.5945
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, April 08, 2006 6:25 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] job running question
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some process is exiting on a segv -- are you getting any corefiles?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If not, can you increase your coredumpsize to unlimited?  This should
</span><br>
<span class="quotelev2">&gt;&gt; let you get a corefile; can you send the backtrace from that  
</span><br>
<span class="quotelev2">&gt;&gt; corefile?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Adams Samuel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D Contr AFRL/HEDR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, April 07, 2006 11:53 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: 'users_at_[hidden]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] job running question
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are trying to build a new cluster running OpenMPI.  We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running LAM-MPI.  To run jobs we would do the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ lamboot lam-host-file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun C program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure if this works more or less the same way with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi.  We were
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trying to run it like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ [james.parker_at_Cent01 FORTRAN]$ mpirun --np 2 f_5x5 localhost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 11.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Cent01.brooks.afmc.ds.af.mil:16124] ERROR: A daemon on node  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; localhost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to start as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Cent01.brooks.afmc.ds.af.mil:16124] ERROR: There may be more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Cent01.brooks.afmc.ds.af.mil:16124] ERROR: the remote shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Cent01.brooks.afmc.ds.af.mil:16124] The daemon received a signal  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [james.parker_at_Cent01 FORTRAN]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have ompi installed to /usr/local, and these are our environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variables:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [james.parker_at_Cent01 FORTRAN]$ export
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x COLORTERM=&quot;gnome-terminal&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DBUS_SESSION_BUS_ADDRESS=&quot;unix:abstract=/tmp/dbus-sfzFctmRFS&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x DESKTOP_SESSION=&quot;default&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x DISPLAY=&quot;:0.0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x GDMSESSION=&quot;default&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x GNOME_DESKTOP_SESSION_ID=&quot;Default&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x GNOME_KEYRING_SOCKET=&quot;/tmp/keyring-x8WQ1E/socket&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GTK_RC_FILES=&quot;/etc/gtk/gtkrc:/home/BROOKS-2K/james.parker/.gtk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rc-1.2-gnome2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x G_BROKEN_FILENAMES=&quot;1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x HISTSIZE=&quot;1000&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x HOME=&quot;/home/BROOKS-2K/james.parker&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x HOSTNAME=&quot;Cent01&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x INPUTRC=&quot;/etc/inputrc&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x KDEDIR=&quot;/usr&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x LANG=&quot;en_US.UTF-8&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x LD_LIBRARY_PATH=&quot;/usr/local/lib:/usr/local/lib/openmpi&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x LESSOPEN=&quot;|/usr/bin/lesspipe.sh %s&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x LOGNAME=&quot;james.parker&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LS_COLORS=&quot;no=00:fi=00:di=00;34:ln=00;36:pi=40;33:so=00;35:bd=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 40;33;01:cd=40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ;33;01:or=01;05;37;41:mi=01;05;37;41:ex=00;32:*.cmd=00;32:*.ex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e=00;32:*.com=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00;32:*.btm=00;32:*.bat=00;32:*.sh=00;32:*.csh=00;32:*.tar=00;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31:*.tgz=00;31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :*.arj=00;31:*.taz=00;31:*.lzh=00;31:*.zip=00;31:*.z=00;31:*.Z
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =00;31:*.gz=00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ;31:*.bz2=00;31:*.bz=00;31:*.tz=00;31:*.rpm=00;31:*.cpio=00;31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :*.jpg=00;35:*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .gif=00;35:*.bmp=00;35:*.xbm=00;35:*.xpm=00;35:*.png=00;35:*.t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if=00;35:&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x MAIL=&quot;/var/spool/mail/james.parker&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OLDPWD=&quot;/home/BROOKS-2K/james.parker/build/SuperLU_DIST_2.0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=&quot;/usr/kerberos/bin:/usr/local/bin:/usr/bin:/bin:/usr/X11R
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6/bin:/home/BR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OOKS-2K/james.parker/bin:/usr/local/bin&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PERL5LIB=&quot;/usr/lib/perl5/site_perl/5.8.5/i386-linux-thread-mul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ti:/usr/lib/pe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rl5/site_perl/5.8.5&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PWD=&quot;/home/BROOKS-2K/james.parker/build/SuperLU_DIST_2.0/FORTRAN&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SESSION_MANAGER=&quot;local/Cent01.brooks.afmc.ds.af.mil:/tmp/.ICE-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unix/14516&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x SHELL=&quot;/bin/bash&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x SHLVL=&quot;2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x SSH_AGENT_PID=&quot;14541&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x SSH_ASKPASS=&quot;/usr/libexec/openssh/gnome-ssh-askpass&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x SSH_AUTH_SOCK=&quot;/tmp/ssh-JUIxl14540/agent.14540&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x TERM=&quot;xterm&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x USER=&quot;james.parker&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x WINDOWID=&quot;35651663&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declare -x XAUTHORITY=&quot;/home/BROOKS-2K/james.parker/.Xauthority&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [james.parker_at_Cent01 FORTRAN]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1004.php">Warner Yuen: "[OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<li><strong>Previous message:</strong> <a href="1002.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>In reply to:</strong> <a href="1001.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1002.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
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

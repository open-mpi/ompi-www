<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  7 11:53:30 2006" -->
<!-- isoreceived="20060407155330" -->
<!-- sent="Fri, 7 Apr 2006 10:53:16 -0500 " -->
<!-- isosent="20060407155316" -->
<!-- name="Adams Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams.ctr_at_[hidden]" -->
<!-- subject="[OMPI users] job running question" -->
<!-- id="4F5BE74AB02653448520E9692496874101E56F_at_fscnbc18.brooks.af.mil" -->
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
<strong>From:</strong> Adams Samuel D Contr AFRL/HEDR (<em>Samuel.Adams.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-07 11:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0975.php">Mars Lenjoy: "[OMPI users] any checkpoint/restart function in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="0973.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0979.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="0979.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="0984.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="1001.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="1002.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="1036.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="1046.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are trying to build a new cluster running OpenMPI.  We were previous
<br>
running LAM-MPI.  To run jobs we would do the following:
<br>
<p>$ lamboot lam-host-file
<br>
$ mpirun C program
<br>
<p>I am not sure if this works more or less the same way with ompi.  We were
<br>
trying to run it like this:
<br>
<p>$ [james.parker_at_Cent01 FORTRAN]$ mpirun --np 2 f_5x5 localhost
<br>
mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited on
<br>
signal 11.
<br>
[Cent01.brooks.afmc.ds.af.mil:16124] ERROR: A daemon on node localhost
<br>
failed to start as expected.
<br>
[Cent01.brooks.afmc.ds.af.mil:16124] ERROR: There may be more information
<br>
available from
<br>
[Cent01.brooks.afmc.ds.af.mil:16124] ERROR: the remote shell (see above).
<br>
[Cent01.brooks.afmc.ds.af.mil:16124] The daemon received a signal 11.
<br>
1 additional process aborted (not shown)
<br>
[james.parker_at_Cent01 FORTRAN]$
<br>
<p>We have ompi installed to /usr/local, and these are our environment
<br>
variables:
<br>
<p>[james.parker_at_Cent01 FORTRAN]$ export
<br>
declare -x COLORTERM=&quot;gnome-terminal&quot;
<br>
declare -x DBUS_SESSION_BUS_ADDRESS=&quot;unix:abstract=/tmp/dbus-sfzFctmRFS&quot;
<br>
declare -x DESKTOP_SESSION=&quot;default&quot;
<br>
declare -x DISPLAY=&quot;:0.0&quot;
<br>
declare -x GDMSESSION=&quot;default&quot;
<br>
declare -x GNOME_DESKTOP_SESSION_ID=&quot;Default&quot;
<br>
declare -x GNOME_KEYRING_SOCKET=&quot;/tmp/keyring-x8WQ1E/socket&quot;
<br>
declare -x
<br>
GTK_RC_FILES=&quot;/etc/gtk/gtkrc:/home/BROOKS-2K/james.parker/.gtkrc-1.2-gnome2&quot;
<br>
declare -x G_BROKEN_FILENAMES=&quot;1&quot;
<br>
declare -x HISTSIZE=&quot;1000&quot;
<br>
declare -x HOME=&quot;/home/BROOKS-2K/james.parker&quot;
<br>
declare -x HOSTNAME=&quot;Cent01&quot;
<br>
declare -x INPUTRC=&quot;/etc/inputrc&quot;
<br>
declare -x KDEDIR=&quot;/usr&quot;
<br>
declare -x LANG=&quot;en_US.UTF-8&quot;
<br>
declare -x LD_LIBRARY_PATH=&quot;/usr/local/lib:/usr/local/lib/openmpi&quot;
<br>
declare -x LESSOPEN=&quot;|/usr/bin/lesspipe.sh %s&quot;
<br>
declare -x LOGNAME=&quot;james.parker&quot;
<br>
declare -x
<br>
LS_COLORS=&quot;no=00:fi=00:di=00;34:ln=00;36:pi=40;33:so=00;35:bd=40;33;01:cd=40
<br>
;33;01:or=01;05;37;41:mi=01;05;37;41:ex=00;32:*.cmd=00;32:*.exe=00;32:*.com=
<br>
00;32:*.btm=00;32:*.bat=00;32:*.sh=00;32:*.csh=00;32:*.tar=00;31:*.tgz=00;31
<br>
:*.arj=00;31:*.taz=00;31:*.lzh=00;31:*.zip=00;31:*.z=00;31:*.Z=00;31:*.gz=00
<br>
;31:*.bz2=00;31:*.bz=00;31:*.tz=00;31:*.rpm=00;31:*.cpio=00;31:*.jpg=00;35:*
<br>
.gif=00;35:*.bmp=00;35:*.xbm=00;35:*.xpm=00;35:*.png=00;35:*.tif=00;35:&quot;
<br>
declare -x MAIL=&quot;/var/spool/mail/james.parker&quot;
<br>
declare -x OLDPWD=&quot;/home/BROOKS-2K/james.parker/build/SuperLU_DIST_2.0&quot;
<br>
declare -x
<br>
PATH=&quot;/usr/kerberos/bin:/usr/local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/BR
<br>
OOKS-2K/james.parker/bin:/usr/local/bin&quot;
<br>
declare -x
<br>
PERL5LIB=&quot;/usr/lib/perl5/site_perl/5.8.5/i386-linux-thread-multi:/usr/lib/pe
<br>
rl5/site_perl/5.8.5&quot;
<br>
declare -x PWD=&quot;/home/BROOKS-2K/james.parker/build/SuperLU_DIST_2.0/FORTRAN&quot;
<br>
declare -x
<br>
SESSION_MANAGER=&quot;local/Cent01.brooks.afmc.ds.af.mil:/tmp/.ICE-unix/14516&quot;
<br>
declare -x SHELL=&quot;/bin/bash&quot;
<br>
declare -x SHLVL=&quot;2&quot;
<br>
declare -x SSH_AGENT_PID=&quot;14541&quot;
<br>
declare -x SSH_ASKPASS=&quot;/usr/libexec/openssh/gnome-ssh-askpass&quot;
<br>
declare -x SSH_AUTH_SOCK=&quot;/tmp/ssh-JUIxl14540/agent.14540&quot;
<br>
declare -x TERM=&quot;xterm&quot;
<br>
declare -x USER=&quot;james.parker&quot;
<br>
declare -x WINDOWID=&quot;35651663&quot;
<br>
declare -x XAUTHORITY=&quot;/home/BROOKS-2K/james.parker/.Xauthority&quot;
<br>
[james.parker_at_Cent01 FORTRAN]$
<br>
<p>Any ideas??
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0975.php">Mars Lenjoy: "[OMPI users] any checkpoint/restart function in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="0973.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0979.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="0979.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="0984.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="1001.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="1002.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="1036.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Maybe reply:</strong> <a href="1046.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
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
